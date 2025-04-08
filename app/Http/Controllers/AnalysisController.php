<?php

namespace App\Http\Controllers;

use PDF; // Add at the top with other use statements
use Illuminate\Support\Facades\View;
use App\Models\SchoolBillTermSession;
use App\Models\Schoolclass;
use App\Models\Schoolsession;
use App\Models\Schoolterm;
use App\Models\Student;
use App\Models\StudentBillPayment;
use App\Models\StudentBillPaymentBook;
use App\Models\Studentclass;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use Illuminate\Http\Request;

class AnalysisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $terms = Schoolterm::all();
        $session = Schoolsession::all();
        $schoolclass = Schoolclass::leftJoin('schoolarm', 'schoolarm.id', '=', 'schoolclass.arm')
            ->get(['schoolclass.id as id', 'schoolclass.schoolclass as schoolclass','schoolarm.arm as schoolarm'])
            ->sortBy('sdesc');


        return view('analysis.analysis')
            ->with('schoolclasses', $schoolclass)
            ->with('schoolterms', $terms)
            ->with('schoolsessions', $session);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function analysisClassTermSession(Request $request)
    {
        //     //search the schoolclass table to get id selected class name
        //     $schoolclassidArray = SchoolClass::where('schoolclass', $request->class_name)->pluck('id');
        //    // echo $schoolclassid;

        $students = Studentclass::where('schoolclassid', $request->class_id)
            ->where('termid', $request->termid_id)
            ->where('sessionid', $request->session_id)
            ->leftJoin('studentRegistration', 'studentRegistration.id', '=', 'studentclass.studentId')
            ->leftJoin('studentpicture', 'studentpicture.studentid', '=', 'studentRegistration.id')
            ->get(['studentRegistration.admissionNo as admissionno',
                'studentRegistration.firstname as firstname',
                'studentRegistration.lastname as lastname', 'studentRegistration.id as stid',
                'studentRegistration.othername as othername', 'studentRegistration.gender as gender', 'studentpicture.picture as picture']);

        $student_bill_info = SchoolBillTermSession::where('school_bill_class_term_session.class_id', $request->class_id)
            ->where('school_bill_class_term_session.termid_id', $request->termid_id)
            ->where('school_bill_class_term_session.session_id', $request->session_id)
            ->leftjoin('school_bill', 'school_bill.id', '=', 'school_bill_class_term_session.bill_id')
            ->get(['school_bill_class_term_session.id as id', 'school_bill.id as schoolbillid', 'school_bill.title as title',
                'school_bill_class_term_session.class_id as class_id', 'school_bill_class_term_session.termid_id as term_id',
                'school_bill_class_term_session.session_id as session_id',
                'school_bill.description as description', 'school_bill.bill_amount as amount']);

        //student school bill payment record...
        $studentpaymentbill = StudentBillPayment::where('student_bill_payment.class_id', $request->class_id)
            ->where('student_bill_payment.termid_id', $request->termid_id)
            ->where('student_bill_payment.session_id', $request->session_id)
           // ->where('student_bill_payment.delete_status', '1')
            ->leftjoin('student_bill_payment_record', 'student_bill_payment_record.student_bill_payment_id', '=', 'student_bill_payment.id')
            ->leftjoin('school_bill', 'school_bill.id', '=', 'student_bill_payment.school_bill_id')
            ->leftjoin('users', 'users.id', '=', 'student_bill_payment.generated_by')
        // ->whereDate('student_bill_payment.created_at', Carbon::today()) // Filter by today's date
            ->get(['student_bill_payment.id as paymentid', 'student_bill_payment.status as paymentStatus', 'student_bill_payment.payment_method as paymentMethod', 'users.name as recievedBy',
                'student_bill_payment.created_at as recievedDate', 'school_bill.title as title', 'school_bill.description as description', 'school_bill.bill_amount as billAmount',
                'student_bill_payment_record.amount_paid as totalAmountPaid', 'student_bill_payment_record.last_payment as lastPayment', 'student_bill_payment_record.amount_owed as balance']);  // Get all records, sorted by latest date

        //student school bill payment record book...
        $studentpaymentbillbook = StudentBillPaymentBook::where('student_bill_payment_book.class_id', $request->class_id)
            ->where('student_bill_payment_book.term_id', $request->termid_id)
            ->where('student_bill_payment_book.session_id', $request->session_id)
            // ->leftjoin('student_bill_payment_record', 'student_bill_payment_record.student_bill_payment_id', '=', 'student_bill_payment.id')
            // ->leftjoin('school_bill', 'school_bill.id', '=', 'student_bill_payment.school_bill_id')

            ->get();  // Get all records, sorted by latest date

        $schoolclass = Schoolclass::where('schoolclass.id', $request->class_id)
            ->leftjoin('schoolarm', 'schoolarm.id', '=', 'schoolclass.arm')
            ->get(['schoolclass.schoolclass as schoolclass', 'schoolarm.arm as schoolarm']);

        $schoolterm = Schoolterm::where('id', $request->termid_id)->get(['schoolterm.term as schoolterm']);
        $schoolsession = Schoolsession::where('id', $request->session_id)->where('status', 'Current')->get(['schoolsession.session as schoolsession']);

        return view('analysis.analysisclasstermsession')->with('student', $students)
            ->with('student_bill_info', $student_bill_info)
            ->with('studentpaymentbill', $studentpaymentbill)
            ->with('studentpaymentbillbook', $studentpaymentbillbook)
            ->with('schoolclass', $schoolclass)
            ->with('schoolterm', $schoolterm)
            ->with('schoolsession', $schoolsession);

    }


    public function exportPDF($class_id, $termid_id, $session_id,$action = 'view')
    {
        // Fetch students with their basic information
        $students = Studentclass::where('schoolclassid', $class_id)
            ->where('termid', $termid_id)
            ->where('sessionid', $session_id)
            ->leftJoin('studentRegistration', 'studentRegistration.id', '=', 'studentclass.studentId')
            ->leftJoin('studentpicture', 'studentpicture.studentid', '=', 'studentRegistration.id')
            ->get(['studentRegistration.admissionNo as admissionno',
                'studentRegistration.firstname as firstname',
                'studentRegistration.lastname as lastname', 
                'studentRegistration.id as stid',
                'studentRegistration.othername as othername', 
                'studentRegistration.gender as gender',
                'studentpicture.picture as picture']);

        // Get all bill information for this class, term and session
        $student_bill_info = SchoolBillTermSession::where('school_bill_class_term_session.class_id', $class_id)
            ->where('school_bill_class_term_session.termid_id', $termid_id)
            ->where('school_bill_class_term_session.session_id', $session_id)
            ->leftJoin('school_bill', 'school_bill.id', '=', 'school_bill_class_term_session.bill_id')
            ->get(['school_bill_class_term_session.id as id', 
                'school_bill.id as schoolbillid', 
                'school_bill.title as title',
                'school_bill_class_term_session.class_id as class_id', 
                'school_bill_class_term_session.termid_id as term_id',
                'school_bill_class_term_session.session_id as session_id',
                'school_bill.description as description', 
                'school_bill.bill_amount as amount']);

        // Get payment records for all students
        $studentpaymentbill = StudentBillPayment::where('student_bill_payment.class_id', $class_id)
            ->where('student_bill_payment.termid_id', $termid_id)
            ->where('student_bill_payment.session_id', $session_id)
            ->leftJoin('student_bill_payment_record', 'student_bill_payment_record.student_bill_payment_id', '=', 'student_bill_payment.id')
            ->leftJoin('school_bill', 'school_bill.id', '=', 'student_bill_payment.school_bill_id')
            ->leftJoin('studentRegistration', 'studentRegistration.id', '=', 'student_bill_payment.student_id')
            ->leftJoin('users', 'users.id', '=', 'student_bill_payment.generated_by')
            ->get(['student_bill_payment.id as paymentid', 
                'student_bill_payment.student_id as stid',
                'student_bill_payment.school_bill_id as schoolbillid',
                'student_bill_payment.status as paymentStatus', 
                'student_bill_payment.payment_method as paymentMethod', 
                'users.name as recievedBy', 
                'student_bill_payment.created_at as recievedDate', 
                'school_bill.title as title', 
                'school_bill.description as description', 
                'school_bill.bill_amount as billAmount',
                'student_bill_payment_record.amount_paid as totalAmountPaid', 
                'student_bill_payment_record.last_payment as lastPayment', 
                'student_bill_payment_record.amount_owed as balance']);

        // Get payment book records
        $studentpaymentbillbook = StudentBillPaymentBook::where('student_bill_payment_book.class_id', $class_id)
            ->where('student_bill_payment_book.term_id', $termid_id)
            ->where('student_bill_payment_book.session_id', $session_id)
            ->get();

        // Get class, term, and session information
        $schoolclass = Schoolclass::where('schoolclass.id', $class_id)
            ->leftJoin('schoolarm', 'schoolarm.id', '=', 'schoolclass.arm')
            ->get(['schoolclass.schoolclass as schoolclass', 'schoolarm.arm as schoolarm']);

        $schoolterm = Schoolterm::where('id', $termid_id)->get(['schoolterm.term as schoolterm']);
        $schoolsession = Schoolsession::where('id', $session_id)->get(['schoolsession.session as schoolsession']);

        // Calculate total bills and payments per student
        $studentTotals = [];
        foreach ($students as $student) {
            $totalBilled = 0;
            $totalPaid = 0;
            $totalBalance = 0;
            
            foreach ($student_bill_info as $bill) {
                $totalBilled += $bill->amount;
                
                // Find payment for this student and bill
                $payment = $studentpaymentbill
                    ->where('stid', $student->stid)
                    ->where('schoolbillid', $bill->schoolbillid)
                    ->first();
                
                if ($payment) {
                    $totalPaid += $payment->totalAmountPaid ?? 0;
                    $totalBalance += $payment->balance ?? 0;
                } else {
                    $totalBalance += $bill->amount;
                }
            }
            
            $studentTotals[$student->stid] = [
                'totalBilled' => $totalBilled,
                'totalPaid' => $totalPaid,
                'totalBalance' => $totalBalance,
                'status' => $totalPaid > 0 ? ($totalBalance > 0 ? 'partial' : 'paid') : 'unpaid'
            ];
        }

        // Generate PDF view
        $pdf = Pdf::loadView('analysis.pdf_analysis', [
            'student' => $students,
            'student_bill_info' => $student_bill_info,
            'studentpaymentbill' => $studentpaymentbill,
            'studentpaymentbillbook' => $studentpaymentbillbook,
            'schoolclass' => $schoolclass,
            'schoolterm' => $schoolterm,
            'schoolsession' => $schoolsession,
            'studentTotals' => $studentTotals,
            'totalBillsAmount' => $student_bill_info->sum('amount'),
        ]);

        // Set to A3 landscape for more space
        $pdf->setPaper('a3', 'landscape');
        
        // Set small margins and font options
        $pdf->setOptions([
            'defaultFont' => 'DejaVuSans', // Set DejaVuSans to support Naira symbol
            'margin-top' => 5,
            'margin-right' => 5,
            'margin-bottom' => 5,
            'margin-left' => 5,
            'encoding' => 'UTF-8', // Ensure UTF-8 encoding
            'isPhpEnabled' => true, // Enable PHP evaluation in Blade
        ]);

        // Generate filename - replace any invalid characters
        $className = $schoolclass->first()->schoolclass . ' ' . $schoolclass->first()->schoolarm;
        $termName = $schoolterm->first()->schoolterm;
        $sessionName = $schoolsession->first()->schoolsession;

        // Replace forward slashes and backslashes with underscores
        $className = str_replace(['/', '\\'], '_', $className);
        $termName = str_replace(['/', '\\'], '_', $termName);
        $sessionName = str_replace(['/', '\\'], '_', $sessionName);

        // Generate filename
        $filename = "Payment_Analysis_" . str_replace(' ', '_', $className) . "_" . $termName . "_" . $sessionName . ".pdf";
        
        // // Download the PDF
        // return $pdf->download($filename);

         // Determine action - view in browser or download
        if ($action === 'download') {
            return $pdf->download($filename);
        } else {
            return $pdf->stream($filename);
        }
    }


    // public function schoolWidePaymentAnalysis($termid_id = 2, $session_id = 1, $action = 'view')
    // {
    //     // Get all classes in the school
    //     $schoolClasses = Schoolclass::leftJoin('schoolarm', 'schoolarm.id', '=', 'schoolclass.arm')
    //         ->get(['schoolclass.id as class_id', 'schoolclass.schoolclass as schoolclass', 'schoolarm.arm as schoolarm']);
        
    //     // Get term and session information
    //     $schoolterm = Schoolterm::where('id', $termid_id)->first(['schoolterm.term as schoolterm']);
    //     $schoolsession = Schoolsession::where('id', $session_id)->first(['schoolsession.session as schoolsession']);
        
    //     // Initialize arrays to store school-wide data
    //     $allClassesData = [];
    //     $schoolTotals = [
    //         'totalStudents' => 0,
    //         'totalBilled' => 0,
    //         'totalPaid' => 0,
    //         'totalBalance' => 0,
    //         'paidCount' => 0,
    //         'partialCount' => 0,
    //         'unpaidCount' => 0
    //     ];
        
    //     // Get all bills for this term and session
    //     $allBills = SchoolBillTermSession::where('termid_id', $termid_id)
    //         ->where('session_id', $session_id)
    //         ->leftJoin('school_bill', 'school_bill.id', '=', 'school_bill_class_term_session.bill_id')
    //         ->get(['school_bill.id as schoolbillid', 'school_bill.title as title', 
    //             'school_bill.bill_amount as amount', 'school_bill_class_term_session.class_id as class_id']);
        
    //     // Group bills by ID for summary purposes
    //     $billSummary = [];
    //     foreach ($allBills as $bill) {
    //         if (!isset($billSummary[$bill->schoolbillid])) {
    //             $billSummary[$bill->schoolbillid] = [
    //                 'id' => $bill->schoolbillid,
    //                 'title' => $bill->title,
    //                 'totalExpected' => 0,
    //                 'totalCollected' => 0,
    //                 'totalOutstanding' => 0,
    //                 'percentage' => 0
    //             ];
    //         }
    //     }

    //     // Process each class
    //     foreach ($schoolClasses as $class) {
    //         // Fetch students for this class
    //         $students = Studentclass::where('schoolclassid', $class->class_id)
    //             ->where('termid', $termid_id)
    //             ->where('sessionid', $session_id)
    //             ->leftJoin('studentRegistration', 'studentRegistration.id', '=', 'studentclass.studentId')
    //             ->get(['studentRegistration.id as stid', 'studentRegistration.admissionNo as admissionno',
    //                 'studentRegistration.firstname as firstname', 'studentRegistration.lastname as lastname']);
            
    //         $studentCount = $students->count();
    //         $schoolTotals['totalStudents'] += $studentCount;
            
    //         // Get bills for this class
    //         $classBills = $allBills->where('class_id', $class->class_id);
    //         $totalClassBilled = $classBills->sum('amount') * $studentCount;
    //         $schoolTotals['totalBilled'] += $totalClassBilled;
            
    //         // Get payment records for this class
    //         $classPayments = StudentBillPayment::where('student_bill_payment.class_id', $class->class_id)
    //             ->where('student_bill_payment.termid_id', $termid_id)
    //             ->where('student_bill_payment.session_id', $session_id)
    //             ->leftJoin('student_bill_payment_record', 'student_bill_payment_record.student_bill_payment_id', '=', 'student_bill_payment.id')
    //             ->get(['student_bill_payment.school_bill_id as schoolbillid', 
    //                 'student_bill_payment_record.amount_paid as totalAmountPaid',
    //                 'student_bill_payment.student_id as stid']);
            
    //         $totalClassPaid = $classPayments->sum('totalAmountPaid') ?? 0;
    //         $totalClassBalance = $totalClassBilled - $totalClassPaid;
    //         $schoolTotals['totalPaid'] += $totalClassPaid;
    //         $schoolTotals['totalBalance'] += $totalClassBalance;
            
    //         // Update bill summary
    //         foreach ($classBills as $bill) {
    //             $billStudentCount = $studentCount;
    //             $billExpected = $bill->amount * $billStudentCount;
    //             $billPaid = $classPayments->where('schoolbillid', $bill->schoolbillid)->sum('totalAmountPaid') ?? 0;
                
    //             $billSummary[$bill->schoolbillid]['totalExpected'] += $billExpected;
    //             $billSummary[$bill->schoolbillid]['totalCollected'] += $billPaid;
    //             $billSummary[$bill->schoolbillid]['totalOutstanding'] += ($billExpected - $billPaid);
    //         }
            
    //         // Calculate payment status for each student
    //         $paidCount = 0;
    //         $partialCount = 0;
    //         $unpaidCount = 0;
            
    //         foreach ($students as $student) {
    //             $studentBilled = $classBills->sum('amount');
    //             $studentPaid = $classPayments->where('stid', $student->stid)->sum('totalAmountPaid') ?? 0;
                
    //             if ($studentPaid >= $studentBilled) {
    //                 $paidCount++;
    //             } elseif ($studentPaid > 0) {
    //                 $partialCount++;
    //             } else {
    //                 $unpaidCount++;
    //             }
    //         }
            
    //         $schoolTotals['paidCount'] += $paidCount;
    //         $schoolTotals['partialCount'] += $partialCount;
    //         $schoolTotals['unpaidCount'] += $unpaidCount;
            
    //         // Store class data
    //         $allClassesData[] = [
    //             'class_id' => $class->class_id,
    //             'className' => $class->schoolclass . ' ' . $class->schoolarm,
    //             'studentCount' => $studentCount,
    //             'totalBilled' => $totalClassBilled,
    //             'totalPaid' => $totalClassPaid,
    //             'totalBalance' => $totalClassBalance,
    //             'collectionPercentage' => $totalClassBilled > 0 ? ($totalClassPaid / $totalClassBilled) * 100 : 0,
    //             'paidCount' => $paidCount,
    //             'partialCount' => $partialCount,
    //             'unpaidCount' => $unpaidCount
    //         ];
    //     }
        
    //     // Calculate percentages for bill summary
    //     foreach ($billSummary as $billId => $bill) {
    //         $billSummary[$billId]['percentage'] = $bill['totalExpected'] > 0 ? 
    //             ($bill['totalCollected'] / $bill['totalExpected']) * 100 : 0;
    //     }
        
    //     // Overall payment percentage
    //     $overallPercentage = $schoolTotals['totalBilled'] > 0 ? 
    //         ($schoolTotals['totalPaid'] / $schoolTotals['totalBilled']) * 100 : 0;
        
    //     // Generate PDF
    //     $pdf = Pdf::loadView('analysis.school_wide_analysis', [
    //         'allClassesData' => $allClassesData,
    //         'billSummary' => $billSummary,
    //         'schoolTotals' => $schoolTotals,
    //         'overallPercentage' => $overallPercentage,
    //         'schoolterm' => $schoolterm,
    //         'schoolsession' => $schoolsession,
    //         'termid_id'=> $termid_id,
    //         'session_id'=> $session_id,
    //     ]);
        
    //     // Set to A3 landscape for more space
    //     $pdf->setPaper('a3', 'landscape');
        
    //     // Set small margins and font options
    //     $pdf->setOptions([
    //         'defaultFont' => 'DejaVuSans', // Set DejaVuSans to support Naira symbol
    //         'margin-top' => 5,
    //         'margin-right' => 5,
    //         'margin-bottom' => 5,
    //         'margin-left' => 5,
    //         'encoding' => 'UTF-8', // Ensure UTF-8 encoding
    //         'isPhpEnabled' => true, // Enable PHP evaluation in Blade
    //     ]);
        
    //     // Generate filename - replace any invalid characters
    //     $termName = str_replace(['/', '\\'], '_', $schoolterm->schoolterm);
    //     $sessionName = str_replace(['/', '\\'], '_', $schoolsession->schoolsession);
        
    //     // Generate filename
    //     $filename = "School_Wide_Payment_Analysis_" . $termName . "_" . $sessionName . ".pdf";
        
    //     // Determine action - view in browser or download
    //     if ($action === 'download') {
    //         return $pdf->download($filename);
    //     } else {
    //         return $pdf->stream($filename);
    //     }
    // }



    public function schoolWidePaymentAnalysis($termid_id = 2, $session_id = 1, $action = 'view', $format = 'pdf')
{
    // Get all classes in the school
    $schoolClasses = Schoolclass::leftJoin('schoolarm', 'schoolarm.id', '=', 'schoolclass.arm')
        ->get(['schoolclass.id as class_id', 'schoolclass.schoolclass as schoolclass', 'schoolarm.arm as schoolarm']);
    
    // Get term and session information
    $schoolterm = Schoolterm::where('id', $termid_id)->first(['schoolterm.term as schoolterm']);
    $schoolsession = Schoolsession::where('id', $session_id)->first(['schoolsession.session as schoolsession']);
    
    // Initialize arrays to store school-wide data
    $allClassesData = [];
    $schoolTotals = [
        'totalStudents' => 0,
        'totalBilled' => 0,
        'totalPaid' => 0,
        'totalBalance' => 0,
        'paidCount' => 0,
        'partialCount' => 0,
        'unpaidCount' => 0
    ];
    
    // Get all bills for this term and session
    $allBills = SchoolBillTermSession::where('termid_id', $termid_id)
        ->where('session_id', $session_id)
        ->leftJoin('school_bill', 'school_bill.id', '=', 'school_bill_class_term_session.bill_id')
        ->get(['school_bill.id as schoolbillid', 'school_bill.title as title', 
            'school_bill.bill_amount as amount', 'school_bill_class_term_session.class_id as class_id']);
    
    // Group bills by ID for summary purposes
    $billSummary = [];
    foreach ($allBills as $bill) {
        if (!isset($billSummary[$bill->schoolbillid])) {
            $billSummary[$bill->schoolbillid] = [
                'id' => $bill->schoolbillid,
                'title' => $bill->title,
                'totalExpected' => 0,
                'totalCollected' => 0,
                'totalOutstanding' => 0,
                'percentage' => 0
            ];
        }
    }

    // Process each class
    foreach ($schoolClasses as $class) {
        // Fetch students for this class
        $students = Studentclass::where('schoolclassid', $class->class_id)
            ->where('termid', $termid_id)
            ->where('sessionid', $session_id)
            ->leftJoin('studentRegistration', 'studentRegistration.id', '=', 'studentclass.studentId')
            ->get(['studentRegistration.id as stid', 'studentRegistration.admissionNo as admissionno',
                'studentRegistration.firstname as firstname', 'studentRegistration.lastname as lastname']);
        
        $studentCount = $students->count();
        $schoolTotals['totalStudents'] += $studentCount;
        
        // Get bills for this class
        $classBills = $allBills->where('class_id', $class->class_id);
        $totalClassBilled = $classBills->sum('amount') * $studentCount;
        $schoolTotals['totalBilled'] += $totalClassBilled;
        
        // Get payment records for this class
        $classPayments = StudentBillPayment::where('student_bill_payment.class_id', $class->class_id)
            ->where('student_bill_payment.termid_id', $termid_id)
            ->where('student_bill_payment.session_id', $session_id)
            ->leftJoin('student_bill_payment_record', 'student_bill_payment_record.student_bill_payment_id', '=', 'student_bill_payment.id')
            ->get(['student_bill_payment.school_bill_id as schoolbillid', 
                'student_bill_payment_record.amount_paid as totalAmountPaid',
                'student_bill_payment.student_id as stid']);
        
        $totalClassPaid = $classPayments->sum('totalAmountPaid') ?? 0;
        $totalClassBalance = $totalClassBilled - $totalClassPaid;
        $schoolTotals['totalPaid'] += $totalClassPaid;
        $schoolTotals['totalBalance'] += $totalClassBalance;
        
        // Update bill summary
        foreach ($classBills as $bill) {
            $billStudentCount = $studentCount;
            $billExpected = $bill->amount * $billStudentCount;
            $billPaid = $classPayments->where('schoolbillid', $bill->schoolbillid)->sum('totalAmountPaid') ?? 0;
            
            $billSummary[$bill->schoolbillid]['totalExpected'] += $billExpected;
            $billSummary[$bill->schoolbillid]['totalCollected'] += $billPaid;
            $billSummary[$bill->schoolbillid]['totalOutstanding'] += ($billExpected - $billPaid);
        }
        
        // Calculate payment status for each student
        $paidCount = 0;
        $partialCount = 0;
        $unpaidCount = 0;
        
        foreach ($students as $student) {
            $studentBilled = $classBills->sum('amount');
            $studentPaid = $classPayments->where('stid', $student->stid)->sum('totalAmountPaid') ?? 0;
            
            if ($studentPaid >= $studentBilled) {
                $paidCount++;
            } elseif ($studentPaid > 0) {
                $partialCount++;
            } else {
                $unpaidCount++;
            }
        }
        
        $schoolTotals['paidCount'] += $paidCount;
        $schoolTotals['partialCount'] += $partialCount;
        $schoolTotals['unpaidCount'] += $unpaidCount;
        
        // Store class data
        $allClassesData[] = [
            'class_id' => $class->class_id,
            'className' => $class->schoolclass . ' ' . $class->schoolarm,
            'studentCount' => $studentCount,
            'totalBilled' => $totalClassBilled,
            'totalPaid' => $totalClassPaid,
            'totalBalance' => $totalClassBalance,
            'collectionPercentage' => $totalClassBilled > 0 ? ($totalClassPaid / $totalClassBilled) * 100 : 0,
            'paidCount' => $paidCount,
            'partialCount' => $partialCount,
            'unpaidCount' => $unpaidCount
        ];
    }
    
    // Calculate percentages for bill summary
    foreach ($billSummary as $billId => $bill) {
        $billSummary[$billId]['percentage'] = $bill['totalExpected'] > 0 ? 
            ($bill['totalCollected'] / $bill['totalExpected']) * 100 : 0;
    }
    
    // Overall payment percentage - Fixed syntax error here
    $overallPercentage = $schoolTotals['totalBilled'] > 0 ? 
        ($schoolTotals['totalPaid'] / $schoolTotals['totalBilled']) * 100 : 0;

    // Generate filename base
    $termName = str_replace(['/', '\\'], '_', $schoolterm->schoolterm);
    $sessionName = str_replace(['/', '\\'], '_', $schoolsession->schoolsession);

    if ($format === 'pdf') {
        // Generate PDF
        $pdf = Pdf::loadView('analysis.school_wide_analysis', [
            'allClassesData' => $allClassesData,
            'billSummary' => $billSummary,
            'schoolTotals' => $schoolTotals,
            'overallPercentage' => $overallPercentage,
            'schoolterm' => $schoolterm,
            'schoolsession' => $schoolsession,
            'termid_id' => $termid_id,
            'session_id' => $session_id,
        ]);
        
        $pdf->setPaper('a3', 'landscape');
        $pdf->setOptions([
            'defaultFont' => 'DejaVuSans',
            'margin-top' => 5,
            'margin-right' => 5,
            'margin-bottom' => 5,
            'margin-left' => 5,
            'encoding' => 'UTF-8',
            'isPhpEnabled' => true,
        ]);
        
        $filename = "School_Wide_Payment_Analysis_" . $termName . "_" . $sessionName . ".pdf";
        
        if ($action === 'download') {
            return $pdf->download($filename);
        }
        return $pdf->stream($filename);
    }
    elseif ($format === 'word') {
        // Create new PhpWord instance
        $phpWord = new PhpWord();
        
        // Add section with custom margins (in twips: 1cm = 567 twips)
        $section = $phpWord->addSection([
            'orientation' => 'landscape',
            'marginLeft' => 567,
            'marginRight' => 567,
            'marginTop' => 567,
            'marginBottom' => 567,
        ]);

        // Add title
        $section->addText(
            "School Wide Payment Analysis - {$schoolterm->schoolterm} {$schoolsession->schoolsession}",
            ['bold' => true, 'size' => 16],
            ['alignment' => 'center']
        );
        
        // Add summary table
        $section->addText("Payment Summary", ['bold' => true, 'size' => 12]);
        $table = $section->addTable(['borderSize' => 6, 'cellMargin' => 80]);
        
        $table->addRow();
        $table->addCell(3000)->addText("Description");
        $table->addCell(2000)->addText("Amount");
        $table->addCell(2000)->addText("Count");
        
        $table->addRow();
        $table->addCell(3000)->addText("Total Students");
        $table->addCell(2000)->addText($schoolTotals['totalStudents']);
        $table->addCell(2000)->addText("");
        
        $table->addRow();
        $table->addCell(3000)->addText("Total Billed");
        $table->addCell(2000)->addText("₦" . number_format($schoolTotals['totalBilled'], 2));
        $table->addCell(2000)->addText("");
        
        $table->addRow();
        $table->addCell(3000)->addText("Total Paid");
        $table->addCell(2000)->addText("₦" . number_format($schoolTotals['totalPaid'], 2));
        $table->addCell(2000)->addText("");

        // Add class details
        $section->addTextBreak(1);
        $section->addText("Class Details", ['bold' => true, 'size' => 12]);
        $classTable = $section->addTable(['borderSize' => 6, 'cellMargin' => 80]);
        
        $classTable->addRow();
        $classTable->addCell(3000)->addText("Class");
        $classTable->addCell(1500)->addText("Students");
        $classTable->addCell(2000)->addText("Billed");
        $classTable->addCell(2000)->addText("Paid");
        $classTable->addCell(2000)->addText("Balance");
        $classTable->addCell(1500)->addText("% Paid");

        foreach ($allClassesData as $classData) {
            $classTable->addRow();
            $classTable->addCell(3000)->addText($classData['className']);
            $classTable->addCell(1500)->addText($classData['studentCount']);
            $classTable->addCell(2000)->addText("₦" . number_format($classData['totalBilled'], 2));
            $classTable->addCell(2000)->addText("₦" . number_format($classData['totalPaid'], 2));
            $classTable->addCell(2000)->addText("₦" . number_format($classData['totalBalance'], 2));
            $classTable->addCell(1500)->addText(number_format($classData['collectionPercentage'], 2) . "%");
        }

        // Generate Word document
        $filename = "School_Wide_Payment_Analysis_" . $termName . "_" . $sessionName . ".docx";
        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
        
        // Save to temporary file
        $tempFile = tempnam(sys_get_temp_dir(), 'PHPWord');
        $objWriter->save($tempFile);

        if ($action === 'view') {
            return response()->file($tempFile, [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
            ]);
        }
        
        return response()->download($tempFile, $filename)->deleteFileAfterSend(true);
    }
}
        
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
