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
                                Subjects For Class
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

                            </div>
                            <!--end::Toolbar container-->
                        </div>
                    <!--end::Toolbar-->


                    <div id="kt_app_content" class="app-content  flex-column-fluid " >
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container  ">

                   <!--begin::Toolbar-->
                        <div class="d-flex flex-wrap flex-stack my-5">
                            <!--begin::Heading-->
                            <h2 class="fs-2 fw-semibold my-2">
                                Subjects For Class
                                <span class="fs-6 text-gray-400 ms-1">Database</span>
                            </h2>
                            <!--end::Heading-->


                        </div>
                    <!--end::Toolbar-->



        <!--begin::Card-->
    <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">

                  <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                              <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                                <!--begin::Add user-->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                                    <i class="ki-duotone ki-plus fs-2"></i>     Assign Subjects For Class
                                                </button>
                                                <!--end::Add user-->
                                    </div>

                                     <!--begin::Modal - Add task-->
                                        <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Modal header-->
                                                    <div class="modal-header" id="kt_modal_add_user_header">
                                                        <!--begin::Modal title-->
                                                        <h2 class="fw-bold">Assign Subjects For Class</h2>
                                                        <!--end::Modal title-->

                                                        <!--begin::Close-->
                                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                                                        <!--end::Close-->
                                                    </div>
                                                    <!--end::Modal header-->


                                                    <!--begin::Modal body-->
                                                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                                        <!--begin::Form-->
                                                        <form id="kt_modal_add_user_form" class="form" action="<?php echo e(route('subjectclass.store')); ?>" method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <!--begin::Scroll-->
                                                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">

                                                                    <!--begin::Input group-->
                                                                    <div class="mb-7">
                                                                        <!--begin::Label-->
                                                                        <label class="required fw-semibold fs-6 mb-5">Select  Class and Arm</label>
                                                                        <!--end::Label-->
                                                                                <!--begin::Input row-->
                                                                                <div class="fv-row mb-7">

                                                                                        <!--begin::Input-->
                                                                                        <select name ="schoolclassid" id="schoolclassid" class="form-control form-control-solid mb-3 mb-lg-0"  >
                                                                                            <option value="" selected>Select Class & Arm</option>
                                                                                            <?php $__currentLoopData = $schoolclasses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schoolclass => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                             <option value="<?php echo e($name->id); ?>"><?php echo e($name->schoolclass); ?> &nbsp; <?php echo e($name->arm); ?></option>
                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                        </select>
                                                                                        <!--end::Input-->

                                                                                </div>
                                                                                <!--end::Input row-->
                                                                            </div>
                                                                            <!--end::Input group-->



                                                                  <!--begin::Input group-->
                                                                  <div class="mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class="required fw-semibold fs-6 mb-5">Select Subject Teacher</label>
                                                                    <!--end::Label-->
                                                                            <!--begin::Input row-->
                                                                            <div class="fv-row mb-7">

                                                                                    <!--begin::Input-->
                                                                                    <select name ="subjectid" id="subjectid"  class="form-control form-control-solid mb-3 mb-lg-0"  >
                                                                                        <option value="" selected>Select Subject </option>
                                                                                        <?php $__currentLoopData = $subjectteacher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                         <option value="<?php echo e($name->id); ?>"><?php echo e($name->subject); ?> &nbsp; &nbsp;&nbsp; <?php echo e($name ->subjectcode); ?>

                                                                                            ......By <?php echo e($name->title); ?> <?php echo e($name->teachername); ?> For <span style="color: green"> <?php echo e($name ->termname); ?></span></option>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                    </select>
                                                                                    <!--end::Input-->

                                                                            </div>
                                                                            <!--end::Input row-->
                                                                        </div>
                                                                        <!--end::Input group-->


                                                                          <!--begin::Input group-->







                                                            </div>
                                                            <!--end::Scroll-->

                                                            <!--begin::Actions-->
                                                            <div class="text-center pt-15">
                                                                <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">
                                                                    Discard
                                                                </button>

                                                                <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                                    <span class="indicator-label">
                                                                        Submit
                                                                    </span>
                                                                    <span class="indicator-progress">
                                                                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </form>
                                                        <!--end::Form-->
                                                    </div>
                                                    <!--end::Modal body-->
                                                </div>
                                                <!--end::Modal content-->
                                            </div>
                                            <!--end::Modal dialog-->
                                            </div>
                                    <!--end::Modal - Add task-->



                                    </div>
                                    <!--end::Card toolbar-->
                                            <!--begin::Card toolbar-->
                                            <div class="card-toolbar">
                                                <!--begin::Search-->
                                                <div class="d-flex align-items-center position-relative my-1"  data-kt-view-roles-table-toolbar="base">
                                                    <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span class="path1"></span><span class="path2"></span></i>                <input type="text" data-kt-roles-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search ..." />
                                                </div>
                                                <!--end::Search-->

                                                <!--begin::Group actions-->
                                                <div class="d-flex justify-content-end align-items-center d-none" data-kt-view-roles-table-toolbar="selected">
                                                    <div class="fw-bold me-5">
                                                        <span class="me-2" data-kt-view-roles-table-select="selected_count"></span> Selected
                                                    </div>

                                                    <button type="button" class="btn btn-danger" data-kt-view-roles-table-select="delete_selected">
                                                        Delete Selected
                                                    </button>
                                                </div>
                                                <!--end::Group actions-->
                                            </div>
                                            <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->

            <?php if(count($errors) > 0): ?>
            <div class="row animated fadeInUp">
                <?php if(count($errors) > 0): ?>
            <div class="alert alert-warning fade in">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <?php endif; ?>
            </div>
            <?php endif; ?>
            <!--begin::Card body-->
            <div class="card-body py-4">

             <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_roles_view_table">
            <thead>
                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_roles_view_table .form-check-input" value="1" />
                        </div>
                    </th>
                    <th class="min-w-125px">SN</th>
                    <th class="min-w-125px">Subject Teacher</th>
                    <th class="min-w-125px">Subject</th>
                    <th class="min-w-125px">Class</th>
                    <th class="min-w-125px">Arm</th>
                    <th class="min-w-125px">Term</th>
                    <th class="min-w-125px">Session</th>
                    <th class="min-w-125px">Date Updated</th>
                    <th class="min-w-100px">Actions</th>
                </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
                <?php
                 $i = 0
               ?>
               <?php $__currentLoopData = $subjectclasses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>  <input type="hidden" id="tid"  value="<?php echo e($sc->scid); ?>" /><?php echo e(++$i); ?></td>
                        <td class="d-flex align-items-center">
                            <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="#">
                                                        <div class="symbol-label">
                                        <?php $image = "";?>
                                        <?php
                                        if ($sc->picture  == NULL || !isset($sc->picture ) || $sc->picture =="" ){
                                                $image =  'unnamed.png';
                                        }else {
                                            $image =   $sc->picture;
                                        }
                                        ?>
                                                    <img src="<?php echo e(Storage::url('images/staffavatar/'.$image)); ?>" alt="<?php echo e($sc->staffname); ?>" class="w-100" />
                                                </div>
                                                                    </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::User details-->
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-gray-800 text-hover-primary mb-1"><?php echo e($sc->teachername); ?></a>

                                    </div>
                                    <!--begin::User details-->
                        </td>
                        <td ><?php echo e($sc->subjectname); ?></td>
                        <td ><?php echo e($sc->sclass); ?> </td>
                        <td ><?php echo e($sc->schoolarm); ?></td>
                        <td ><?php echo e($sc->termname); ?></td>
                        <td ><?php echo e($sc->sessionname); ?></td>
                        <td ><?php echo e($sc->updated_at); ?> </td>
                        <td >
                            <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                            <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('subject_class-edit')): ?>
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">

                                            <a href="<?php echo e(route('subjectclass.edit',$sc->scid)); ?>"  class="sel-subjectclass btn btn-light btn-active-primary" >Edit</a>
                                        </div>
                                        <!--end::Menu item-->
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('subject_class-delete')): ?>
                                    <div class="menu-item px-3" >
                                        
                                        <a
                                        href="javascript:void(0)"
                                        id="show-user"
                                        data-kt-roles-table-filter="delete_row"
                                        data-url="<?php echo e(route('subjectclass.deletesubjectclass', ['subjectclassid'=>$sc->scid])); ?>"
                                        class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <?php endif; ?>

                                </div>
                                    <!--end::Menu-->
                        </td>

             </tr>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
        </table>
        <!--end::Table-->
            </div>
            <!--end::Card body-->
      </div>
            <!--end::Card-->
    </div>

            <!--end::Content container-->
</div>
        <!--end::Content-->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\viteschool\resources\views/subjectclass/index.blade.php ENDPATH**/ ?>