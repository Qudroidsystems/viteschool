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
                                Subject for Class
                                        </h1>
                                <!--end::Title-->


                                    <!--begin::Breadcrumb-->
                                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                                        <!--begin::Item-->
                                                        <li class="breadcrumb-item text-muted">
                                                            <a href="<?php echo e(route('subjectclass.index')); ?>" class="text-muted text-hover-primary">Subject for Class </a>
                                                                        </li>
                                                            <!--end::Item-->
                                                                <!--begin::Item-->
                                                <li class="breadcrumb-item">
                                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                                </li>
                                                <!--end::Item-->

                                                        <!--begin::Item-->
                                                                <li class="breadcrumb-item text-muted">Subject for Class</li>
                                                            <!--end::Item-->

                                                </ul>
                                    <!--end::Breadcrumb-->
                                </div>
                            <!--end::Page title-->
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

                                <!--begin::Actions-->
<div class="d-flex align-items-center gap-2 gap-lg-3">


<!--begin::Secondary button-->


<!--begin::Primary button-->
    <a href="<?php echo e(route('subjectclass.index')); ?>" class="btn btn-sm fw-bold btn-primary" >
    << Back        </a>
<!--end::Primary button-->
</div>
<!--end::Actions-->
                            </div>
                            <!--end::Toolbar container-->
                        </div>
                    <!--end::Toolbar-->


        <div id="kt_app_content" class="app-content  flex-column-fluid " >
            <!--begin::Content container-->

            <?php
             foreach ($subjectclasses as $subjectclass ){
                                    $subjectclass->scid;

                                }

            ?>
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container  container-xxl ">
            
        <?php echo Form::model($subjectclass, ['route' => ['subjectclass.update', $subjectclass->scid], 'method'=>'PATCH','class'=>'form d-flex flex-column flex-lg-row']); ?>

                <?php echo csrf_field(); ?>

    <!--begin::Main column-->
    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <!--begin::General options-->
<div class="card card-flush py-4">
    <!--begin::Card header-->
    <div class="card-header">
        <div class="card-title">
            <h2>Edit Subject for Class</h2>
        </div>
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-0">

 <!--begin::Input group-->
 <div class="mb-7">
    <!--begin::Label-->
    <label class="required fw-semibold fs-6 mb-5">Select  Class and Arm</label>
    <!--end::Label-->
            <!--begin::Input row-->
            <div class="fv-row mb-7">

                    <!--begin::Input-->
                    <select name ="schoolclassid" id="schoolclassid"  class="form-control form-control-solid mb-3 mb-lg-0">
                        <?php if($subjectclass->sclassid == ""): ?>
                        <option value="">Select Class and Arm </option>
                        <?php else: ?>
                            <option value="<?php echo e($subjectclass->sclassid); ?>" selected>Select  class and Arm </option>
                        <?php endif; ?>


                        <?php $__currentLoopData = $schoolclasses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schoolclass => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option value="<?php echo e($name->id); ?>"><?php echo e($name->schoolclass); ?> &nbsp; <?php echo e($name->arm); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>[  <?php echo e($subjectclass->schoolclass); ?> &nbsp;&nbsp;  <?php echo e($subjectclass->arm); ?> ]
                    <!--end::Input-->

            </div>
            <!--end::Input row-->
        </div>
        <!--end::Input group-->


        <!--begin::Input group-->
 <div class="mb-7">
    <!--begin::Label-->
    <label class="required fw-semibold fs-6 mb-5">Select Subject Teacher </label>
    <!--end::Label-->
            <!--begin::Input row-->
            <div class="fv-row mb-7">

                    <!--begin::Input-->
                    <select name ="subjectteacherid" id="subjectteacherid"  class="form-control form-control-solid mb-3 mb-lg-0">
                        <?php if($subjectclass->subteacherid == ""): ?>
                        <option value="">Select Subject and Teacher</option>
                        <?php else: ?>
                            <option value="<?php echo e($subjectclass->subteacherid); ?>" selected>Select Subject and Teacher</option>
                        <?php endif; ?>

                        <?php $__currentLoopData = $subjectteachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option value="<?php echo e($name->id); ?>"><?php echo e($name->subject); ?> &nbsp; &nbsp;&nbsp; <?php echo e($name ->subjectcode); ?>

                             &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( <?php echo e($name->title); ?> <?php echo e($name->teachername); ?>)</option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>[  <?php echo e($subjectclass->subject); ?> &nbsp;&nbsp;  <?php echo e($subjectclass->subjectcode); ?> &nbsp; &nbsp;&nbsp;
                         <?php echo e($subjectclass->title); ?> <?php echo e($subjectclass->teachername); ?> ]
                    <!--end::Input-->

            </div>
            <!--end::Input row-->
        </div>
        <!--end::Input group-->






    </div>
    <!--end::Card header-->

    <div class="d-flex justify-content-end">
        <!--begin::Button-->
        <a href="products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">
           Cancel
       </a>
       <!--end::Button-->

       <!--begin::Button-->
       <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
           <span class="indicator-label">
               Save Changes
           </span>
           <span class="indicator-progress">
               Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
           </span>
       </button>
       <!--end::Button-->
   </div>
</div>
<!--end::General options-->

    </div>
    <!--end::Main column-->
    <?php echo Form::close(); ?>

 </div>

            <!--end::Content container-->
        </div>
                <!--end::Content-->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\viteschool\resources\views/subjectclass/edit.blade.php ENDPATH**/ ?>