<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Student Payment Analysis</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 10px;
        }
        .header {
            text-align: center;
            margin-bottom: 15px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 9px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: center;
            padding: 3px;
        }
        td {
            padding: 3px;
            text-align: center;
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
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            font-size: 9px;
        }
        .summary-section {
            margin-top: 15px;
        }
        .cell-amount {
            text-align: right;
        }
        .text-bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>STUDENT PAYMENT ANALYSIS REPORT</h2>
        <h3>
            Class: <?php echo e($schoolclass->first()->schoolclass ?? ''); ?> <?php echo e($schoolclass->first()->schoolarm ?? ''); ?> | 
            Term: <?php echo e($schoolterm->first()->schoolterm ?? ''); ?> | 
            Session: <?php echo e($schoolsession->first()->schoolsession ?? ''); ?>

        </h3>
    </div>

    <table>
        <thead>
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2">Admission No.</th>
                <th rowspan="2">Student Name</th>
                <th rowspan="2">Gender</th>
                <?php $__currentLoopData = $student_bill_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th colspan="2"><?php echo e($bill->title); ?><br>(₦<?php echo e(number_format($bill->amount, 2)); ?>)</th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <th rowspan="2">Total Paid</th>
                <th rowspan="2">Balance</th>
                <th rowspan="2">Status</th>
            </tr>
            <tr>
                <?php $__currentLoopData = $student_bill_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th>Paid</th>
                    <th>Balance</th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
        </thead>
        <tbody>
            <?php $counter = 1; ?>
            <?php $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $std): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="student-row">
                    <td><?php echo e($counter++); ?></td>
                    <td><?php echo e($std->admissionno); ?></td>
                    <td style="text-align: left;"><?php echo e($std->lastname); ?> <?php echo e($std->firstname); ?> <?php echo e($std->othername); ?></td>
                    <td><?php echo e($std->gender); ?></td>
                    
                    <?php $__currentLoopData = $student_bill_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $billPayment = $studentpaymentbill->where('schoolbillid', $bill->schoolbillid)
                                                           ->where('stid', $std->stid)
                                                           ->first();
                            $amountPaid = $billPayment ? ($billPayment->totalAmountPaid ?? 0) : 0;
                            $balance = $billPayment ? ($billPayment->balance ?? $bill->amount) : $bill->amount;
                            $status = $amountPaid > 0 ? ($balance > 0 ? 'partial' : 'paid') : 'unpaid';
                        ?>
                        <td class="cell-amount">
                            <?php if($amountPaid > 0): ?>
                                ₦<?php echo e(number_format($amountPaid, 2)); ?>

                            <?php else: ?>
                                -
                            <?php endif; ?>
                        </td>
                        <td class="cell-amount">
                            <?php if($balance > 0): ?>
                                ₦<?php echo e(number_format($balance, 2)); ?>

                            <?php else: ?>
                                -
                            <?php endif; ?>
                        </td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    <td class="cell-amount">₦<?php echo e(number_format($studentTotals[$std->stid]['totalPaid'], 2)); ?></td>
                    <td class="cell-amount">₦<?php echo e(number_format($studentTotals[$std->stid]['totalBalance'], 2)); ?></td>
                    <td class="payment-status-<?php echo e($studentTotals[$std->stid]['status']); ?>">
                        <?php echo e(ucfirst($studentTotals[$std->stid]['status'])); ?>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
            <tr class="text-bold">
                <th colspan="4">Summary</th>
                <?php $__currentLoopData = $student_bill_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $billTotalPaid = $studentpaymentbill->where('schoolbillid', $bill->schoolbillid)->sum('totalAmountPaid') ?? 0;
                        $billTotalOwed = ($student->count() * $bill->amount) - $billTotalPaid;
                        $denominatorAmount = ($student->count() * $bill->amount);
                        $collectionPercentage = $denominatorAmount > 0 ? ($billTotalPaid / $denominatorAmount) * 100 : 0;
                    ?>
                    <th class="cell-amount">₦<?php echo e(number_format($billTotalPaid, 2)); ?></th>
                    <th class="cell-amount">₦<?php echo e(number_format($billTotalOwed, 2)); ?></th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $overallTotalPaid = array_sum(array_column($studentTotals, 'totalPaid'));
                    $overallTotalBill = $student->count() * $student_bill_info->sum('amount');
                    $overallBalance = $overallTotalBill - $overallTotalPaid;
                    $overallPercentage = $overallTotalBill > 0 ? ($overallTotalPaid / $overallTotalBill) * 100 : 0;
                ?>
                <th class="cell-amount">₦<?php echo e(number_format($overallTotalPaid, 2)); ?></th>
                <th class="cell-amount">₦<?php echo e(number_format($overallBalance, 2)); ?></th>
                <th><?php echo e(number_format($overallPercentage, 1)); ?>%</th>
            </tr>
        </tfoot>
    </table>
    
    <div class="summary-section">
        <h3>Payment Collection Summary</h3>
        <table>
            <thead>
                <tr>
                    <th>Bill Title</th>
                    <th>Amount per Student</th>
                    <th>Total Expected</th>
                    <th>Total Collected</th>
                    <th>Outstanding</th>
                    <th>Collection %</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $student_bill_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $billTotalPaid = $studentpaymentbill->where('schoolbillid', $bill->schoolbillid)->sum('totalAmountPaid') ?? 0;
                        $totalExpected = $student->count() * $bill->amount;
                        $billTotalOwed = $totalExpected - $billTotalPaid;
                        $collectionPercentage = $totalExpected > 0 ? ($billTotalPaid / $totalExpected) * 100 : 0;
                    ?>
                    <tr>
                        <td><?php echo e($bill->title); ?></td>
                        <td class="cell-amount">₦<?php echo e(number_format($bill->amount, 2)); ?></td>
                        <td class="cell-amount">₦<?php echo e(number_format($totalExpected, 2)); ?></td>
                        <td class="cell-amount">₦<?php echo e(number_format($billTotalPaid, 2)); ?></td>
                        <td class="cell-amount">₦<?php echo e(number_format($billTotalOwed, 2)); ?></td>
                        <td><?php echo e(number_format($collectionPercentage, 1)); ?>%</td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr class="text-bold">
                    <td>TOTAL</td>
                    <td class="cell-amount">₦<?php echo e(number_format($student_bill_info->sum('amount'), 2)); ?></td>
                    <td class="cell-amount">₦<?php echo e(number_format($overallTotalBill, 2)); ?></td>
                    <td class="cell-amount">₦<?php echo e(number_format($overallTotalPaid, 2)); ?></td>
                    <td class="cell-amount">₦<?php echo e(number_format($overallBalance, 2)); ?></td>
                    <td><?php echo e(number_format($overallPercentage, 1)); ?>%</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="summary-section">
        <h3>Payment Status Overview</h3>
        <table>
            <thead>
                <tr>
                    <th>Status</th>
                    <th>Count</th>
                    <th>Percentage</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $statusCounts = [
                        'paid' => 0,
                        'partial' => 0,
                        'unpaid' => 0
                    ];
                    
                    foreach ($studentTotals as $total) {
                        $statusCounts[$total['status']]++;
                    }
                    
                    $totalStudents = count($studentTotals);
                ?>
                <tr>
                    <td class="payment-status-paid">Fully Paid</td>
                    <td><?php echo e($statusCounts['paid']); ?></td>
                    <td><?php echo e($totalStudents > 0 ? number_format(($statusCounts['paid'] / $totalStudents) * 100, 1) : 0); ?>%</td>
                </tr>
                <tr>
                    <td class="payment-status-partial">Partially Paid</td>
                    <td><?php echo e($statusCounts['partial']); ?></td>
                    <td><?php echo e($totalStudents > 0 ? number_format(($statusCounts['partial'] / $totalStudents) * 100, 1) : 0); ?>%</td>
                </tr>
                <tr>
                    <td class="payment-status-unpaid">Not Paid</td>
                    <td><?php echo e($statusCounts['unpaid']); ?></td>
                    <td><?php echo e($totalStudents > 0 ? number_format(($statusCounts['unpaid'] / $totalStudents) * 100, 1) : 0); ?>%</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <div class="footer">
        <p>Generated on <?php echo e(date('Y-m-d H:i:s')); ?> | Page: {PAGE_NUM} of {PAGE_COUNT}</p>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\viteschool\resources\views/analysis/pdf_analysis.blade.php ENDPATH**/ ?>