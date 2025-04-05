<?php $__env->startSection('content'); ?>


                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">

    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

                <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">



    <!--begin::Page title-->
    <div  class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
        <!--begin::Title-->
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
           My Subject
                </h1>
        <!--end::Title-->



            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <!--begin::Item-->
                                        <li class="breadcrumb-item text-muted">
                                                 <a href="#" class="text-muted text-hover-primary">
                                   My Classes and My Subjects
                                                       </a>
                                                </li>
                                    <!--end::Item-->
                                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->

                                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->



                        </ul>
            <!--end::Breadcrumb-->
        </div>
    <!--end::Page title-->
    <!--begin::Actions-->
    <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Filter menu-->
            <div class="m-0">
                <!--begin::Menu toggle-->
                <a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-filter fs-6 text-muted me-1"><span class="path1"></span><span class="path2"></span></i>
                    Filter
                </a>
                <!--end::Menu toggle-->



    <!--begin::Menu 1-->
            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_648698624af08">
                <!--begin::Header-->
                <div class="px-7 py-5">
                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                </div>
                <!--end::Header-->

                <!--begin::Menu separator-->
                <div class="separator border-gray-200"></div>
                <!--end::Menu separator-->

                
            </div>
    <!--end::Menu 1-->
     </div>
            <!--end::Filter menu-->


        <!--begin::Secondary button-->

            <!--end::Secondary button-->


           </div>
    <!--end::Actions-->

    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<?php if(\Session::has('status')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo e(\Session::get('status')); ?>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>
 <?php if(\Session::has('success')): ?>
 <div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo e(\Session::get('success')); ?>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>
            </div>
            <!--end::Toolbar container-->

 </div>
    <!--end::Toolbar-->



    <!--begin::Content-->
    <div id="kt_app_content" class="app-content  flex-column-fluid " >


            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container  container-xxl ">

    <!--begin::Row-->
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
        <?php $sn = 1; ?>
        <?php $__currentLoopData = $mysubjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <!--begin::Col-->
            <div class="col-md-4">
                <!--begin::Card-->
                <div class="card card-flush h-md-100">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title" >  <h2> <?php echo e($sn++); ?>-- &nbsp;&nbsp;</h2>
                            <h2 style="color: green"><?php echo e($subject->subject); ?></h2>&nbsp;
                            <h2 style="color: green"><?php echo e($subject->subjectcode); ?></h2>
                        </div>
                        <!--end::Card title-->
                    </div>

                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-1">
                        <!--begin::Users-->

                            <div class="fw-bold text-gray-600 mb-5" ><h3 style="color: red"> <?php echo e($subject->schoolclass); ?>: <?php echo e($subject->arm); ?></h3></div>
                            <!--end::Users-->
                            <div class="d-flex flex-column text-gray-600">
                            <!--begin::Permissions-->


                                <div class="d-flex align-items-center py-2"><span class="bullet bg-primary me-3"></span> <h4 style="color: brown"><?php echo e($subject->term); ?>:<?php echo e($subject->session); ?></h4></div>


                            </div>
                            <!--end::Permissions-->

                            

                    </div>
                    <!--end::Card body-->
                        

                </div>
                <!--end::Card-->

            </div>
            <!--end::Col-->

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
    </div>
            <!--end::Row-->

            <!--begin::Modals-->

            







  <!--begin::Page title-->
  <div  class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">

        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                             <a href="#" class="text-muted text-hover-primary">
                                My Subjects History
                                                   </a>
                                            </li>
                                <!--end::Item-->
                                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->

                                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->



                    </ul>
        <!--end::Breadcrumb-->
    </div>
<!--end::Page title-->







            <div class="tab-pane" id="mysubjectshistory">
                <div class="card">
                    <div class="card-header">

                        <h3 class="card-title">My Subjects History</h3>


                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-striped table_custom   ">
                                <thead>
                                    <tr>
                                        <tr>
                                            <th>SN</th>
                                            <th>Subject</th>
                                            <th>Subject Code</th>
                                            <th>Term</th>
                                            <th>Session</th>
                                            <th>Class</th>
                                            <th>Arm</th>


                                        </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sn = 1; ?>
                                    <?php $__currentLoopData = $mysubjectshistory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td><?php echo e($sn++); ?></td>
                                        <td><?php echo e($subject->subject); ?></td>
                                        <td><?php echo e($subject->subjectcode); ?></td>
                                        <td><?php echo e($subject->term); ?></td>
                                        <td><?php echo e($subject->session); ?></td>
                                        <td><?php echo e($subject->schoolclass); ?></td>
                                        <td><?php echo e($subject->arm); ?></td>

                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
       </div>
            <!--end::Content container-->
        </div>
    <!--end::Content-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\viteschool\resources\views/mysubject/index.blade.php ENDPATH**/ ?>