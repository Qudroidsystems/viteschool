    
    <?php $__env->startSection('content'); ?>
 <!--begin::Main-->
 <div  class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 "

>

<!--begin::Toolbar container-->
<div id="kt_app_toolbar_container" style="display: none;" class="app-container  container-xxl d-flex flex-stack ">



<!--begin::Page title-->
<div  class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
<!--begin::Title-->
<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
School Invoice
</h1>
<!--end::Title-->


<!--begin::Breadcrumb-->
<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                        <li class="breadcrumb-item fs-5">
                                        <a href="#" class="fs-5 text-hover-primary">
                   School Payment                          </a>
                                </li>
                    <!--end::Item-->
                        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <!--end::Item-->

                <!--begin::Item-->
                        <li class="breadcrumb-item fs-5">
                                        Invoice Manager                                            </li>
                    <!--end::Item-->
                        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <!--end::Item-->

                <!--begin::Item-->
                        <li class="breadcrumb-item fs-5">
                                        View Invoice                                         </li>
                    <!--end::Item-->

        </ul>
<!--end::Breadcrumb-->
</div>
<!--end::Page title-->
<!--begin::Actions-->
<div class="d-flex align-items-center gap-2 gap-lg-3">

    <?php
    foreach($studentdata as $s) {
    $fn =   $s->firstname;
    $ln =  $s->lastname;
    $ad = $s->admissionNo;

 }
?>
<!--begin::Secondary button-->
<!--end::Secondary button-->

<!--begin::Primary button-->
<a href="<?php echo e(route('schoolpayment.termsession',$s->id)); ?>" class="btn btn-sm fw-bold btn-primary"  >
<< Back        </a>
<!--end::Primary button-->
</div>
<!--end::Actions-->
</div>
<!--end::Toolbar container-->
</div>
<!--end::Toolbar-->

<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid " >


<!--begin::Content container-->
<div id="kt_app_content_container"   class="app-container  container-xxl ">

<!-- begin::Invoice 3-->
<div class="card">
<!-- begin::Body-->
<div class="card-body py-20">
<!-- begin::Wrapper-->
<div class="mw-lg-950px mx-auto w-100">
<!-- begin::Header-->
<div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
    <h4 class="fw-bolder text-gray-800 fs-2qx pe-5 pb-7">BILLS INVOICE</h4>
    

    <!--end::Logo-->
    <div class="text-sm-end">
        <!--begin::Logo-->
        <a href="#" class="d-block mw-150px ms-sm-auto">
            <img alt="Logo" src="../../../assets/media/svg/brand-logos/lloyds-of-london-logo.svg" class="w-100" />
        </a>
        <!--end::Logo-->

        <!--begin::Text-->
        <div class="text-sm-end fw-semibold fs-4 fs-5 mt-7">
            <div>Trinity Comprehensive International School</div>

            <div>Ondo City, Ondo state</div>
        </div>
        <!--end::Text-->
    </div>
</div>
<!--end::Header-->

<!--begin::Body-->
<div class="pb-12">
    <!--begin::Wrapper-->
    <div class="d-flex flex-column gap-7 gap-md-10">
        <?php $image = ""; ?>
        <?php
        if ($s->avatar  == NULL || !isset($s->avatar ) || $s->avatar =="" ){
                $image =  'unnamed.png';
        }else {
            $image =   $s->avatar;
        }
        ?>
        <img src="<?php echo e(Storage::url('images/studentavatar/'.$image)); ?>" alt="<?php echo e($s->firstname); ?> <?php echo e($s->lastname); ?>" class="w-20" height="80px" width="80px" style="border-radius: 10px"/>
            <!--begin::Message-->
        <div class="fw-bold fs-2">
            Dear <?php echo e($fn); ?> <?php echo e($ln); ?> <span class="fs-6">(<?php echo e($ad); ?>)</span>,<br />
            <span class="fs-5 fs-5">Here are your  payment details.</span>
        </div>
        <!--begin::Message-->

        <!--begin::Separator-->
        <div class="separator"></div>
        <!--begin::Separator-->

        <!--begin::Order details-->
        <div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bold">
            <div class="flex-root d-flex flex-column">
                <span class="fs-5" style="color: rgb(22, 22, 135)">Invoice ID</span>
                <span class="fs-5">#<?php echo e($invoiceNumber); ?></span>
            </div>

            <div class="flex-root d-flex flex-column">
                <span class="fs-5" style="color: rgb(22, 22, 135)">Date-Time</span>
                <span class="fs-5"><?php echo e(\Carbon\Carbon::now()->format('d F, Y H:i')); ?></span>
            </div>

            <div class="flex-root d-flex flex-column">
                <span class="fs-5" style="color: rgb(22, 22, 135)">Term</span>
                <span class="fs-5"><?php echo e($schoolterm); ?></span>
            </div>

            <div class="flex-root d-flex flex-column">
                <span class="fs-5" style="color: rgb(22, 22, 135)">Session</span>
                <span class="fs-5"><?php echo e($schoolsession); ?></span>
            </div>
        </div>
        <!--end::Order details-->

        <!--begin::Billing & shipping-->
        <div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bold">
            <div class="flex-root d-flex flex-column">
                <span class="fs-5">Home Address</span>
                <span class="fs-6">
                  <?php echo nl2br(e(wordwrap($s->homeadd, 20, "\n", true))); ?>

                </span>
            </div>


        </div>
        <!--end::Billing & shipping-->

        <!--begin:Order summary-->
        <div class="d-flex justify-content-between flex-column">
            <!--begin::Table-->
            <div class="table-responsive border-bottom mb-9">
                <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                    <thead>
                        <tr class="border-bottom fs-6 fw-bold fs-5">
                            <th class="min-w-175px fs-5" style="color: rgb(22, 22, 135)">School Bill</th>
                            <th class="min-w-70px text-end pb-2 fs-5" style="color: rgb(22, 22, 135)">Bill Amount</th>
                            <th class="min-w-80px text-end pb-2 fs-5" style="color: rgb(22, 22, 135)">Amount Paid </th>
                            <th class="min-w-80px text-end pb-2 fs-5" style="color: rgb(22, 22, 135)">Payment Method</th>
                            <th class="min-w-100px text-end pb-2 fs-5" style="color: rgb(22, 22, 135)">Outstanding</th>
                        </tr>
                    </thead>

                    <tbody class="fw-semibold text-gray-600">
                        <?php
                          $totalAmount = 0;
                          $totalAmountPaid = 0;  // Initialize total amount
                          $totalbalance = 0;  // Initialize total amount
                        ?>
                 <?php $__currentLoopData = $studentpaymentbill; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php
                            $totalAmount += $sp->amount;
                            $totalAmountPaid += $sp->lastPayment;  // Add each amountPaid to the total
                            $totalbalance += $sp->balance;
                        ?>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin::Title-->
                                    <div class="ms-5 fs-5">
                                    <div class="fw-bold fs-5"><?php echo e($sp->title); ?></div>
                                        <div class="fs-7 fs-5"> <?php echo e($sp->description); ?></div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                            </td>
                            <td class="text-end fs-5">
                                ₦ <?php echo e(number_format($sp->amount)); ?>

                                <div class="fs-7 fs-5">Last Paid Amount:  ₦ <?php echo e($sp->amountPaid); ?></div>
                            </td>


                            <td class="text-end fs-5">
                                ₦ <?php echo e(number_format($sp->lastPayment)); ?>

                            </td>

                            <td class="text-end fs-5">
                                <?php echo e($sp->paymentMethod); ?>

                        </td>
                            <td class="text-end fs-5">
                                ₦ <?php echo e(number_format($sp->balance)); ?>

                            </td>
                        </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                            
                    </td>
                    <td class="text-dark fs-3 fw-bolder text-end">
                        
                    </td>

                    <td class="text-end">

                    </td>
                    <td class="text-end">

                    </td>
                    <td class="text-dark fs-3 fw-bolder text-end">
                        
                    </td>
                </tr>

                        <tr>
                            <td colspan="2" class="text-end">
                                Subtotal
                            </td>
                            <td class="text-end">
                                ₦ <?php echo e(number_format($totalAmountPaid)); ?>.00
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-end">
                                VAT (0%)
                            </td>
                            <td class="text-end">
                                ₦0.00
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" class="fs-3 text-dark fw-bold text-end">
                            Total Amount Paid
                            </td>
                            <td class="text-dark fs-3 fw-bolder text-end">
                                ₦ <?php echo e(number_format($totalAmountPaid)); ?>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--end::Table-->
        </div>
        <!--end:Order summary-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Body-->

<!-- begin::Footer-->
<div class="d-flex flex-stack flex-wrap mt-lg-20 pt-13">
    <!-- begin::Actions-->
    <div class="my-1 me-5">
        <!-- begin::Pint-->
        <button type="button" class="btn btn-success my-1 me-12" onclick="window.print();">Print Invoice</button>
        <!-- end::Pint-->

        
    </div>
    <!-- end::Actions-->


</div>
<!-- end::Footer-->
</div>
<!-- end::Wrapper-->
</div>
<!-- end::Body-->
</div>
<!-- end::Invoice 1-->        </div>
<!--end::Content container-->
</div>
<!--end::Content-->
    </div>
    <!--end::Content wrapper-->



<!--end::Content-->
                </div>
                <!--end::Content wrapper-->

                


                <script>
                    document.getElementById('payment_amount').addEventListener('input', function(e) {
                        let value = e.target.value;

                        // Remove any non-digit characters, except for a decimal point
                        value = value.replace(/[^0-9.]/g, '');

                        // Split the value on the decimal point, if it exists
                        const parts = value.split('.');

                        // Format the integer part with commas
                        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');

                        // Rejoin the integer and decimal parts
                        e.target.value =  parts.join('.');


                        });


                     function getFormattedNumber() {
                        const inputValue = document.getElementById('payment_amount2').value;
                        // Remove commas
                        const plainNumber = parseFloat(inputValue.replace(/,/g, ''));

                        return plainNumber;
                       }



                    // Example usage:
                    document.getElementById('kt_modal_new_card_submit').addEventListener('click', function () {
                        const amount = getFormattedNumber();
                        console.log('Amount as number:', amount);
                    });

                    document.getElementById('payment_amount').addEventListener('input', function() {
                     const value = this.value;
                        document.getElementById('payment_amount2').value = value;
                        console.log( document.getElementById('payment_amount2').value = parseFloat(value.replace(/,/g, '')));
                    });


                    function preventBack() {
                        window.history.forward();
                    }

                    setTimeout("preventBack()", 0);

                    window.onunload = function () { null };

                </script>



    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\viteschool\resources\views/schoolpayment/studentinvoice.blade.php ENDPATH**/ ?>