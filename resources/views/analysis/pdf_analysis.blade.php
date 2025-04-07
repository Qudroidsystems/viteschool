<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Analysis Book</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 11px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .school-info {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: left;
            padding: 5px;
        }
        td {
            padding: 5px;
        }
        .student-row:nth-child(even) {
            background-color: #f9f9f9;
        }
        .payment-status-paid {
            color: green;
            font-weight: bold;
        }
        .payment-status-partial {
            color: orange;
            font-weight: bold;
        }
        .payment-status-unpaid {
            color: red;
            font-weight: bold;
        }
        .page-break {
            page-break-after: always;
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            font-size: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>STUDENT BILL ANALYSIS REPORT</h2>
        <h3>
            Class: {{ $schoolclass->first()->schoolclass ?? '' }} {{ $schoolclass->first()->schoolarm ?? '' }} | 
            Term: {{ $schoolterm->first()->schoolterm ?? '' }} | 
            Session: {{ $schoolsession->first()->schoolsession ?? '' }}
        </h3>
    </div>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Admission No.</th>
                <th>Student Name</th>
                <th>Gender</th>
                @foreach($student_bill_info as $bill)
                    <th>{{ $bill->title }}<br>(₦{{ number_format($bill->amount, 2) }})</th>
                @endforeach
                <th>Total Paid</th>
                <th>Balance</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php $counter = 1; @endphp
            @foreach($student as $std)
                @php
                    $totalPaid = 0;
                    $totalOwed = 0;
                    $paymentStatus = 'unpaid';
                    
                    // Calculate totals for this student
                    foreach($studentpaymentbill as $payment) {
                        if(isset($payment->stid) && isset($std->stid) && $payment->stid == $std->stid) {
                            $totalPaid += $payment->totalAmountPaid ?? 0;
                            $totalOwed += $payment->balance ?? 0;
                            
                            if($payment->paymentStatus == 'paid') {
                                $paymentStatus = 'paid';
                            } elseif($payment->totalAmountPaid > 0) {
                                $paymentStatus = 'partial';
                            }
                        }
                    }
                    
                    // Get total bill amount
                    $totalBillAmount = $student_bill_info->sum('amount');
                @endphp
                
                <tr class="student-row">
                    <td>{{ $counter++ }}</td>
                    <td>{{ $std->admissionno }}</td>
                    <td>{{ $std->lastname }} {{ $std->firstname }} {{ $std->othername }}</td>
                    <td>{{ $std->gender }}</td>
                    
                    @foreach($student_bill_info as $bill)
                        @php
                            $billPayment = $studentpaymentbill->where('schoolbillid', $bill->schoolbillid)
                                                            ->where('stid', $std->stid)
                                                            ->first();
                            $amountPaid = $billPayment ? ($billPayment->totalAmountPaid ?? 0) : 0;
                            $balance = $billPayment ? ($billPayment->balance ?? $bill->amount) : $bill->amount;
                        @endphp
                        <td>
                            @if($amountPaid > 0)
                                ₦{{ number_format($amountPaid, 2) }}
                                @if($balance > 0)
                                    <br><span class="payment-status-partial">Bal: ₦{{ number_format($balance, 2) }}</span>
                                @else
                                    <br><span class="payment-status-paid">Paid</span>
                                @endif
                            @else
                                <span class="payment-status-unpaid">Not Paid</span>
                            @endif
                        </td>
                    @endforeach
                    
                    <td>₦{{ number_format($totalPaid, 2) }}</td>
                    <td>₦{{ number_format($totalOwed, 2) }}</td>
                    <td class="payment-status-{{ $paymentStatus }}">
                        {{ ucfirst($paymentStatus) }}
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="4">Summary</th>
                @foreach($student_bill_info as $bill)
                    @php
                        $billTotalPaid = $studentpaymentbill->where('schoolbillid', $bill->schoolbillid)->sum('totalAmountPaid');
                        $billTotalOwed = ($student->count() * $bill->amount) - $billTotalPaid;
                        $denominatorAmount = ($student->count() * $bill->amount);
                        $collectionPercentage = $denominatorAmount > 0 ? ($billTotalPaid / $denominatorAmount) * 100 : 0;
                    @endphp
                    <th>
                        Collected: ₦{{ number_format($billTotalPaid, 2) }}<br>
                        Remaining: ₦{{ number_format($billTotalOwed, 2) }}<br>
                        ({{ number_format($collectionPercentage, 1) }}%)
                    </th>
                @endforeach
                @php
                    $overallTotalPaid = $studentpaymentbill->sum('totalAmountPaid');
                    $overallTotalBill = $student->count() * $student_bill_info->sum('amount');
                    $overallBalance = $overallTotalBill - $overallTotalPaid;
                    $overallPercentage = $overallTotalBill > 0 ? ($overallTotalPaid / $overallTotalBill) * 100 : 0;
                @endphp
                <th>₦{{ number_format($overallTotalPaid, 2) }}</th>
                <th>₦{{ number_format($overallBalance, 2) }}</th>
                <th>{{ number_format($overallPercentage, 1) }}%</th>
            </tr>
        </tfoot>
    </table>
    
    <div class="footer">
        <p>Generated on {{ date('Y-m-d H:i:s') }} | Page: {PAGE_NUM} of {PAGE_COUNT}</p>
    </div>
</body>
</html>