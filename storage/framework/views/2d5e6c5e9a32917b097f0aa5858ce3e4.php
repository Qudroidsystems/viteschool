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
                               Student Picture Upload
                                        </h1>
                                <!--end::Title-->


                                    <!--begin::Breadcrumb-->
                                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                                        <!--begin::Item-->
                                                        <li class="breadcrumb-item text-muted">
                                                            <a href="<?php echo e(route('student.index')); ?>" class="text-muted text-hover-primary">Student  </a>
                                                                        </li>
                                                            <!--end::Item-->
                                                                <!--begin::Item-->
                                                <li class="breadcrumb-item">
                                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                                </li>
                                                <!--end::Item-->

                                                        <!--begin::Item-->
                                                                <li class="breadcrumb-item text-muted">Student Picture Upload</li>
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
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
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
    <a href="<?php echo e(route('student.index')); ?>" class="btn btn-sm fw-bold btn-primary" >
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

        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container  container-xxl ">
           <form id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row"
                  action="<?php echo e(route('studentImageUpload.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value=" <?php echo e($picture->studentid); ?>">
                                <!--begin::Main column-->
                                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                                    <!--begin::General options-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Student Picture Upload</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body pt-0">

                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Profile Picture Upload</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-6 fv-row">
                                                    <input type="file" name="image" class="dropify form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Batch Title"  required />
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
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
                                                        Proceed
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
                </form>
 </div>

            <!--end::Content container-->
        </div>
                <!--end::Content-->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\viteschool\resources\views/studentImageUpload/index.blade.php ENDPATH**/ ?>