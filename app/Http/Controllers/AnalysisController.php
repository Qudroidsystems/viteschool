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



    // public function exportPDF($class_id, $termid_id, $session_id)
    // {
    //     // Fetch all the data similar to your analysisClassTermSession method
    //     $students = Studentclass::where('schoolclassid', $class_id)
    //         ->where('termid', $termid_id)
    //         ->where('sessionid', $session_id)
    //         ->leftJoin('studentRegistration', 'studentRegistration.id', '=', 'studentclass.studentId')
    //         ->leftJoin('studentpicture', 'studentpicture.studentid', '=', 'studentRegistration.id')
    //         ->get(['studentRegistration.admissionNo as admissionno',
    //             'studentRegistration.firstname as firstname',
    //             'studentRegistration.lastname as lastname', 'studentRegistration.id as stid',
    //             'studentRegistration.othername as othername', 'studentRegistration.gender as gender',
    //             'studentpicture.picture as picture']);

    //     $student_bill_info = SchoolBillTermSession::where('school_bill_class_term_session.class_id', $class_id)
    //         ->where('school_bill_class_term_session.termid_id', $termid_id)
    //         ->where('school_bill_class_term_session.session_id', $session_id)
    //         ->leftjoin('school_bill', 'school_bill.id', '=', 'school_bill_class_term_session.bill_id')
    //         ->get(['school_bill_class_term_session.id as id', 'school_bill.id as schoolbillid', 'school_bill.title as title',
    //             'school_bill_class_term_session.class_id as class_id', 'school_bill_class_term_session.termid_id as term_id',
    //             'school_bill_class_term_session.session_id as session_id',
    //             'school_bill.description as description', 'school_bill.bill_amount as amount']);

    //     //student school bill payment record...
    //     $studentpaymentbill = StudentBillPayment::where('student_bill_payment.class_id', $class_id)
    //         ->where('student_bill_payment.termid_id', $termid_id)
    //         ->where('student_bill_payment.session_id', $session_id)
    //         ->leftjoin('student_bill_payment_record', 'student_bill_payment_record.student_bill_payment_id', '=', 'student_bill_payment.id')
    //         ->leftjoin('school_bill', 'school_bill.id', '=', 'student_bill_payment.school_bill_id')
    //         ->leftjoin('users', 'users.id', '=', 'student_bill_payment.generated_by')
    //         ->get(['student_bill_payment.id as paymentid', 'student_bill_payment.status as paymentStatus', 'student_bill_payment.payment_method as paymentMethod', 
    //             'users.name as recievedBy', 'student_bill_payment.created_at as recievedDate', 'school_bill.title as title', 
    //             'school_bill.description as description', 'school_bill.bill_amount as billAmount',
    //             'student_bill_payment_record.amount_paid as totalAmountPaid', 'student_bill_payment_record.last_payment as lastPayment', 
    //             'student_bill_payment_record.amount_owed as balance']);

    //     //student school bill payment record book...
    //     $studentpaymentbillbook = StudentBillPaymentBook::where('student_bill_payment_book.class_id', $class_id)
    //         ->where('student_bill_payment_book.term_id', $termid_id)
    //         ->where('student_bill_payment_book.session_id', $session_id)
    //         ->get();

    //     $schoolclass = Schoolclass::where('schoolclass.id', $class_id)
    //         ->leftjoin('schoolarm', 'schoolarm.id', '=', 'schoolclass.arm')
    //         ->get(['schoolclass.schoolclass as schoolclass', 'schoolarm.arm as schoolarm']);

    //     $schoolterm = Schoolterm::where('id', $termid_id)->get(['schoolterm.term as schoolterm']);
    //     $schoolsession = Schoolsession::where('id', $session_id)->get(['schoolsession.session as schoolsession']);

    //     // Generate PDF view
    //     $pdf = PDF::loadView('analysis.pdf_analysis', [
    //         'student' => $students,
    //         'student_bill_info' => $student_bill_info,
    //         'studentpaymentbill' => $studentpaymentbill,
    //         'studentpaymentbillbook' => $studentpaymentbillbook,
    //         'schoolclass' => $schoolclass,
    //         'schoolterm' => $schoolterm,
    //         'schoolsession' => $schoolsession,
    //     ]);
        
    //     // Set to landscape orientation
    //     $pdf->setPaper('a4', 'landscape');
        
    //     // Generate filename - replace any invalid characters
    //     $className = $schoolclass->first()->schoolclass . ' ' . $schoolclass->first()->schoolarm;
    //     $termName = $schoolterm->first()->schoolterm;
    //     $sessionName = $schoolsession->first()->schoolsession;

    //     // Replace forward slashes and backslashes with underscores
    //     $className = str_replace(['/', '\\'], '_', $className);
    //     $termName = str_replace(['/', '\\'], '_', $termName);
    //     $sessionName = str_replace(['/', '\\'], '_', $sessionName);

    //     // Generate filename
    //     $filename = "Analysis_" . str_replace(' ', '_', $className) . "_" . $termName . "_" . $sessionName . ".pdf";
    //             // Download the PDF
    //     return $pdf->download($filename);
    // }

    public function exportPDF($class_id, $termid_id, $session_id)
{
    // Fetch students with their basic information
    $students = Studentclass::where('schoolclassid', $class_id)
        ->where('termid', $termid_id)
        ->where('sessionid', $session_id)
        ->leftJoin('studentRegistration', 'studentRegistration.id', '=', 'studentclass.studentId')
        ->leftJoin('studentpicture', 'studentpicture.studentid', '=', 'studentRegistration.id')
        ->get(['studentRegistration.admissionNo as admissionno',
            'studentRegistration.firstname as firstname',
            'studentRegistration.lastname as lastname', 'studentRegistration.id as stid',
            'studentRegistration.othername as othername', 'studentRegistration.gender as gender',
            'studentpicture.picture as picture']);

    // Get all bill information for this class, term and session
    $student_bill_info = SchoolBillTermSession::where('school_bill_class_term_session.class_id', $class_id)
        ->where('school_bill_class_term_session.termid_id', $termid_id)
        ->where('school_bill_class_term_session.session_id', $session_id)
        ->leftjoin('school_bill', 'school_bill.id', '=', 'school_bill_class_term_session.bill_id')
        ->get(['school_bill_class_term_session.id as id', 'school_bill.id as schoolbillid', 'school_bill.title as title',
            'school_bill_class_term_session.class_id as class_id', 'school_bill_class_term_session.termid_id as term_id',
            'school_bill_class_term_session.session_id as session_id',
            'school_bill.description as description', 'school_bill.bill_amount as amount']);

    // Get payment records for all students
    $studentpaymentbill = StudentBillPayment::where('student_bill_payment.class_id', $class_id)
        ->where('student_bill_payment.termid_id', $termid_id)
        ->where('student_bill_payment.session_id', $session_id)
        ->leftjoin('student_bill_payment_record', 'student_bill_payment_record.student_bill_payment_id', '=', 'student_bill_payment.id')
        ->leftjoin('school_bill', 'school_bill.id', '=', 'student_bill_payment.school_bill_id')
        ->leftjoin('studentRegistration', 'studentRegistration.id', '=', 'student_bill_payment.student_id')
        ->leftjoin('users', 'users.id', '=', 'student_bill_payment.generated_by')
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
        ->leftjoin('schoolarm', 'schoolarm.id', '=', 'schoolclass.arm')
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
    $pdf = PDF::loadView('analysis.pdf_analysis', [
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
    
    // Set to landscape orientation
    $pdf->setPaper('a4', 'landscape');
    
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
    
    // Download the PDF
    return $pdf->download($filename);
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
