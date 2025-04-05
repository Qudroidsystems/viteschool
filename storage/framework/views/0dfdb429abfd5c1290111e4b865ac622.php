<?php $__env->startSection('content'); ?>


           <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">

<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 " >

        <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">



<!--begin::Page title-->
<div  class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
<!--begin::Title-->
<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
   <p style="color: green"> Student Score sheet</p>
        </h1>
<!--end::Title-->


    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">


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

<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid " >


    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container  container-xxl ">


         <!--begin::Navbar-->
<div class="card mb-5 mb-xl-10">
<div class="card-body pt-9 pb-0">
    <!--begin::Details-->
    <div class="d-flex flex-wrap flex-sm-nowrap">


        <?php $__currentLoopData = $broadsheets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        

            <!--begin: Pic-->
            <div class="me-7 mb-4">


                <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                    <?php
                    if ($b->picture == NULL || $b->picture =="" || !isset($b->picture) ){
                            // $cimage =  $imageclass;
                            $image =  'unnamed.png';
                    }else {
                        $image =  $b->picture;
                    }
                    ?>
                    <img src="<?php echo e(Storage::url('images/studentavatar/'.$image)); ?>" alt="image" />
                    <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                </div>

            </div>
            <!--end::Pic-->
        <!--begin::Info-->
        <div class="flex-grow-1">

                <!--begin::Title-->
                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                    <!--begin::User-->
                    <div class="d-flex flex-column">
                        <!--begin::Name-->
                        <div class="d-flex align-items-center mb-2">
                            <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1"><?php echo e($b->fname); ?> <?php echo e($b->lname); ?></a>
                            <a href="#"><i class="ki-duotone ki-verify fs-1 text-primary"><span class="path1"></span><span class="path2"></span></i></a>
                        </div>
                        <!--end::Name-->

                    </div>
                    <!--end::User-->


                </div>
                <!--end::Title-->
            <!--begin::Stats-->
             <div class="d-flex flex-wrap flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-grow-1 pe-8">
                    <!--begin::Stats-->
                    <div class="d-flex flex-wrap">

                            <!--begin::Stat-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    <i class="ki-duotone ki-arrow-up fs-3 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                    <div class="fs-2 fw-bold" style="color: green"><?php echo e($b->admissionno); ?> </div>
                                </div>
                                <!--end::Number-->

                                <!--begin::Label-->
                                <div class="fw-semibold fs-6 text-gray-400">Admission No.</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->

                        <!--begin::Stat-->
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                                <i class="ki-duotone ki-arrow-up fs-3 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                <div class="fs-2 fw-bold" style="color: green"><?php echo e($b->subject); ?> </div>
                            </div>
                            <!--end::Number-->

                            <!--begin::Label-->
                            <div class="fw-semibold fs-6 text-gray-400">Subject</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stat-->

                        <!--begin::Stat-->
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                                <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                <div class="fs-2 fw-bold" style="color: green" ><?php echo e($b->subjectcode); ?></div>
                            </div>
                            <!--end::Number-->

                            <!--begin::Label-->
                            <div class="fw-semibold fs-6 text-gray-400"> Subject Code</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stat-->

                          <!--begin::Stat-->
                          <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                                <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                <div class="fs-2 fw-bold" style="color: green" ><?php echo e($b->schoolclass); ?> <?php echo e($b->arm); ?></div>
                            </div>
                            <!--end::Number-->

                            <!--begin::Label-->
                            <div class="fw-semibold fs-6 text-gray-400"> Class </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stat-->


                         <!--begin::Stat-->
                          <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                                <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                <div class="fs-2 fw-bold"  style="color: green"><?php echo e($b->term); ?> | <?php echo e($b->session); ?></div>
                            </div>
                            <!--end::Number-->

                            <!--begin::Label-->
                            <div class="fw-semibold fs-6 text-gray-400"> Term | Session</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stat-->
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Wrapper-->


            </div>
            <!--end::Stats-->
        </div>
        <!--end::Info-->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <!--end::Details-->

    <!--begin::Navs-->
    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">

    </ul>
    <!--begin::Navs-->
</div>
</div>
<!--end::Navbar-->
<!--begin::Card toolbar-->
<div class="card-toolbar">
<!--begin::Button-->
<?php if(\Session::has('schoolclassid') || \Session::has('subjectclassid') || \Session::has('stafid') || \Session::has('termid') || \Session::has('sessionid')): ?>
    <li class="nav-item">
        <a href='/subjectscoresheet/<?php echo e(\Session::get('schoolclassid')); ?>/<?php echo e(\Session::get('subjectclassid')); ?>/<?php echo e(\Session::get('staffid')); ?>/<?php echo e(\Session::get('termid')); ?>/<?php echo e(\Session::get('sessionid')); ?>'
            class="btn btn-success" data-toggle="tooltip" > < Back
       </a>
    </li>
<?php else: ?>
    <li class="nav-item"> <a href="<?php echo e(route('myresultroom.index')); ?>" class="btn btn-outline-success" data-toggle="tooltip" > < Back</a> </li>
<?php endif; ?>
<!--end::Button-->

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
                <h2 class="fw-bold">Subject Score Input</h2>
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
                <?php echo Form::model($broadsheets, ['route' => ['subjectscoresheet.update', $b->bid], 'method'=>'PATCH','class'=>'form-horizontal form-stripe','onSubmit'=>'return validateForm();']); ?>

                        <?php echo csrf_field(); ?>
                
                    <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">


                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">CA 1 (<?php echo e($b->cat_ca1); ?>%)</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" id="ca1" name="ca1" min="0" step="any" onkeyup="sum();" value="<?php echo e($ca1); ?>" class="form-control form-control-solid mb-3 mb-lg-0"   />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->

                          <!--begin::Input group-->
                          <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">CA 2 (<?php echo e($b->cat_ca2); ?>%)</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" id="ca2" name="ca2" min="0" step="any" onkeyup="sum();" value="<?php echo e($ca2); ?>" class="form-control form-control-solid mb-3 mb-lg-0"  />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->

                           <!--begin::Input group-->
                           <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">CA 3 (<?php echo e($b->cat_ca3); ?>%)</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" id="ca3" name="ca3" min="0" step="any" onkeyup="sum();" value="<?php echo e($ca3); ?>" class="form-control form-control-solid mb-3 mb-lg-0"  />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->

                          <!--begin::Input group-->
                          <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Exam (<?php echo e($b->cat_exam); ?>%)</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" id="exam" name="exam"min="0" step="any"  onkeyup="sum();" value="<?php echo e($exam); ?>" class="form-control form-control-solid mb-3 mb-lg-0"  />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->


                           





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


<!--begin::Basic info-->
<div class="card mb-5 mb-xl-10">
<!--begin::Card header-->
<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
    <!--begin::Card title-->

    
    <!--end::Card title-->
</div>






<!--begin::Card header-->
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
<!--begin::Content-->

<?php use App\Models\subjectRegistrationStatus;?>
<div id="kt_account_settings_profile_details" class="collapse show">

<!--begin::Card body-->
<div class="card-body py-4">
 <!--begin::Card toolbar-->
 
<!--end::Card toolbar-->

<!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_roles_view_table">
            <thead>
                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                    

                    <th class="min-w-125px" style="color: green">CA 1</th>
                    <th class="min-w-125px" style="color: green">CA 2</th>
                    <th class="min-w-125px" style="color: green">CA 3</th>
                    <th class="min-w-125px" style="color: green">CA Total</th>
                    <th class="min-w-125px" style="color: green">CA Avg</th>
                    <th class="min-w-125px" style="color: green">Exam</th>
                    <th class="min-w-125px" style="color: green">Avg</th>
                    <th class="min-w-125px" style="color: green">BF</th>
                    <th class="min-w-125px" style="color: green">CUM</th>
                    <th class="min-w-125px" style="color: green">Grade</th>
                    <th class="min-w-125px" style="color: green">Position</th>
                    <th class="min-w-125px" style="color: green">Action</th>
                </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">

                    <tr>
                        

                        <td ><b><?php echo e($ca1); ?></b></td>
                        <td ><b><?php echo e($ca2); ?></b></td>
                        <td ><b><?php echo e($ca3); ?></b></td>
                        <td ><b><?php echo e(($ca1 + $ca2 + $ca3 )); ?></b></td>
                        <td ><b><?php echo e($tca); ?></b></td>
                        <td ><b><?php echo e($exam); ?></b></td>
                        <?php if($b->total <= 29): ?>
                        <td style="color:red;"><?php echo e($b->total); ?></td>
                        <?php else: ?>
                        <td><?php echo e($b->total); ?></td>
                        <?php endif; ?>
                        <td ><b><?php echo e($bf); ?></b></td>
                        <td ><b><?php echo e($cum); ?></b></td>
                       <?php if($b->grade == "F"): ?>
                       <td style="color:red;"><?php echo e($b->grade); ?></td>
                       <?php else: ?>
                       <td><?php echo e($b->grade); ?></td>
                       <?php endif; ?>
                       <td><b><?php echo e($b->position); ?></b></td>
                       <td>  <button data-bs-toggle="modal" data-bs-target="#kt_modal_add_user" class="btn btn-success" data-toggle="tooltip"
                        title="Input Score for <?php echo e($b->fname); ?>  <?php echo e($b->lname); ?> ">Edit Score</button></td>

                  </tr>

                </tbody>
        </table>
<!--end::Table-->
</div>
<!--end::Card body-->

</div>
<!--end::Content-->
</div>
<!--end::Basic info-->



</div>
    <!--end::Content container-->
</div>
<!--end::Content-->
            </div>
            <!--end::Content wrapper-->

<?php $__env->stopSection(); ?>

<script>

function validateForm()

{

            var grade = "";
            var txtFirsttextValue= 0;
            var txtSecondtextValue = 0;
            var txtThirdtextValue = 0;
            var txtExamtextValue = 0;
            var result = 0;
            var total = 0;

            var txtFirsttextValue = document.getElementById('ca1').value;
            var txtSecondtextValue = document.getElementById('ca2').value;
            var txtThirdtextValue = document.getElementById('ca3').value;
            var txtExamtextValue = document.getElementById('exam').value;

            if(txtFirsttextValue > <?php echo e($b->cat_ca1); ?> || txtFirsttextValue == ""){
                alert('First CA  scores cannot be more than'+ <?php echo e($b->cat_ca1); ?> +' marks or empty');
                return false;
            }
            if(isNaN(txtFirsttextValue)){
                alert("First CA  is not a digit please");
                return false;
            }
            if(txtSecondtextValue > <?php echo e($b->cat_ca2); ?> || txtSecondtextValue == ""){
            alert('Second CA scores cannot be more than '+ <?php echo e($b->cat_ca2); ?> +' marks or empty');
                return false;
            }
            if(isNaN(txtSecondtextValue) ){
                alert("Second CA is not a digit please");
                return false;
            }

            if(txtthirdtextValue > <?php echo e($b->cat_ca3); ?> || txtThirdtextValue == ""){
            alert('third CA scores cannot be more than '+ <?php echo e($b->cat_ca3); ?> +' marks or empty');
                return false;
            }
            if(isNaN(txtThirdtextValue) ){
                alert("third CA is not a digit please");
                return false;
            }


            if(txtExamtextValue > <?php echo e($b->cat_exam); ?> || txtExamtextValue == "" ){
                alert('Exam scores cannot be more than '+<?php echo e($b->cat_exam); ?> +' marks or empty');
                return false;
            }
            if(isNaN(txtExamtextValue)){
                alert("Exam score is not a digit please");
                return false;
            }

}




function sum() {

            var grade = "";
            var txtFirsttextValue= 0;
            var txtSecondtextValue = 0;
            var txtthirdtextValue = 0;
            var txtExamtextValue = 0;
            var result = 0;
            var total = 0;

            var txtFirsttextValue = document.getElementById('ca1').value;
            var txtSecondtextValue = document.getElementById('ca2').value;
            var txtThirdtextValue = document.getElementById('ca3').value;
            var txtExamtextValue = document.getElementById('exam').value;

            if(txtFirsttextValue > <?php echo e($b->cat_ca1); ?> || txtFirsttextValue == ""){
                alert('First CA  scores cannot be more than ' + <?php echo e($b->cat_ca1); ?> +' marks or empty');
                return false;
            }
            if(isNaN(txtFirsttextValue)){
                alert("First CA  is not a digit please");
                return false;
            }
            if(txtSecondtextValue > <?php echo e($b->cat_ca2); ?> || txtSecondtextValue == ""){
                alert('Second CA scores cannot be more than '+ <?php echo e($b->cat_ca2); ?> +' marks or empty');
                return false;
            }
            if(isNaN(txtSecondtextValue) ){
                alert("Second CA is not a digit please");
                return false;
            }

            if(txtThirdtextValue > <?php echo e($b->cat_ca3); ?> || txtThirdtextValue == ""){
                alert('Third CA scores cannot be more than '+ <?php echo e($b->cat_ca2); ?> +' marks or empty');
                return false;
            }
            if(isNaN(txtThirdtextValue) ){
                alert("third CA is not a digit please");
                return false;
            }


            if(txtExamtextValue > <?php echo e($b->cat_exam); ?> || txtExamtextValue == "" ){
                alert('Exam scores cannot be more than '+ <?php echo e($b->cat_exam); ?> +' marks or empty');
                return false;
            }
            if(isNaN(txtExamtextValue)){
                alert("Exam score is not a digit please");
                return false;
            }

            var ca_avg = (parseFloat(txtFirsttextValue) +
                         parseFloat(txtSecondtextValue) +
                         parseFloat(txtThirdtextValue)) / 3

             var result = (ca_avg + parseFloat(txtExamtextValue)) / 2;
                 total = parseFloat(result);

            if (!isNaN(result)) {
                //document.getElementById('total').value = txtFirsttextValue;
                document.getElementById('total').value = total;
               // total = document.getElementById('total').value
                if (total >=70){
                    grade = "A";
                    document.getElementById('grade').style.color = "green";
                    document.getElementById('grade').value = grade;
                    document.getElementById('remark').value = "EXCELLENT";
                }
                else if(total >= 60 && total <= 69){
                    grade = "B";
                    document.getElementById('grade').style.color = "green";
                    document.getElementById('grade').value = grade;
                    document.getElementById('remark').value = "VERY GOOD";
                }
                else if(total >= 40 && total <= 59){
                    grade = "C";
                    document.getElementById('grade').style.color = "blue";
                    document.getElementById('grade').value = grade;
                    document.getElementById('remark').value = "GOOD";
                }
                else if(total >= 30 && total <=39){
                   document.getElementById('grade').style.color = "red";
                    grade = "D";
                    document.getElementById('grade').value = grade;
                    document.getElementById('remark').value = "FAILY GOOD";
                }

                 if(total <= 29){
                    document.getElementById('grade').style.color = "red";
                    grade = "F";
                    document.getElementById('grade').value = grade;
                    document.getElementById('remark').value = "POOR";
                }

            }
  }


</script>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\viteschool\resources\views/subjectscoresheet/edit.blade.php ENDPATH**/ ?>