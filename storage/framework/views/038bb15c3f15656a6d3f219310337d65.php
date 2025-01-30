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
   <p style="color: green"> My Class Students</p>
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
    <div id="kt_app_content_container" class="app-container ">


         <!--begin::Navbar-->
<div class="card mb-5 mb-xl-10">
<div class="card-body pt-9 pb-0">
    <!--begin::Details-->
    <div class="d-flex flex-wrap flex-sm-nowrap">

        <?php
        use App\Models\Broadsheet;
        foreach($broadsheets as $b){
            $b->subject;
            $b->subjectcode;
            $b->schoolclass;
            $b->arm;
        }
    ?>

        <!--begin::Info-->
        <div class="flex-grow-1">
            <!--begin::Title-->
            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">


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


    </div>
    <!--end::Details-->

    <!--begin::Navs-->
    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">

    </ul>
    <!--begin::Navs-->
</div>
</div>
<!--end::Navbar-->





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
                <form action="<?php echo e(route('import.post')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                
                    <!--begin::Scroll-->
                    
                    <input type="hidden" name="schoolclassid" value="<?php echo e(\Session::get('schoolclassid')); ?>">
                    <input type="hidden" name="subjectclassid" value="<?php echo e(\Session::get('subjectclassid')); ?>">
                    <input type="hidden" name="staffid" value="<?php echo e(\Session::get('staffid')); ?>">
                    <input type="hidden" name="termid" value="<?php echo e(\Session::get('termid')); ?>">
                    <input type="hidden" name="sessionsid" value="<?php echo e(\Session::get('sessionid')); ?>">

                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">


                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Batch Score Import</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="file"  name="file" class="form-control form-control-solid mb-3 mb-lg-0"   />
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




<!--begin::Card toolbar-->
<div class="card-toolbar">
<!--begin::Button-->
<a href="<?php echo e(route('myresultroom.index')); ?>" class="btn btn-primary">
               << Back
</a>
<!--end::Button-->
<a href="/export" class="btn btn-info" style="float: right;" data-toggle="tooltip" ><i class="fe fe-download mr-2"></i>Download Excel </a>
<?php if(\Session::has('schoolclassid') || \Session::has('subjectclassid') || \Session::has('stafid') || \Session::has('termid') || \Session::has('sessionid')): ?>
    <button  data-bs-toggle="modal" data-bs-target="#kt_modal_add_user"  class="btn btn-warning" style="float: right;" data-toggle="tooltip" ><i class="fe fe-upload mr-2"></i>Batch Score Sheet Upload</button>
<?php endif; ?>
</div>


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
 <div class="card-toolbar">
    <!--begin::Search-->
    <div class="d-flex align-items-center position-relative my-1"  data-kt-view-roles-table-toolbar="base">
        <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span class="path1"></span><span class="path2"></span></i>
        <input type="text" data-kt-roles-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search ..." />
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
<!--end::Card toolbar-->
<!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_roles_view_table">
            <thead>
                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_roles_view_table .form-check-input" value="1" />
                        </div>
                    </th>
                    <th class="min-w-125px" style="color: green">SN</th>
                    <th class="min-w-125px" style="color: green">Admission No</th>
                    <th class="min-w-125px" style="color: green">Name</th>
                    <th class="min-w-125px" style="color: green">CA 1</th>
                    <th class="min-w-125px" style="color: green">CA 2</th>
                    <th class="min-w-125px" style="color: green">CA 3</th>
                    <th class="min-w-125px" style="color: green">Total CA </th>
                    <th class="min-w-125px" style="color: green">CA Avg</th>
                    <th class="min-w-125px" style="color: green">Exam</th>
                    <th class="min-w-125px" style="color: green">BF</th>
                    <th class="min-w-125px" style="color: green">CUM</th>
                    <th class="min-w-125px" style="color: green">Total</th>
                    <th class="min-w-125px" style="color: green">Grade</th>
                    <th class="min-w-125px" style="color: green">Position</th>
                    <th class="min-w-125px" style="color: green">Action</th>
                </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
                <?php
                  $i = 0
                ?>
               <?php $__currentLoopData = $broadsheets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $broadsheet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td > <b><?php echo e(++$i); ?></b></td>
                        <td > <b><?php echo e($broadsheet->admissionno); ?></b></td>
                        <td class="d-flex align-items-center">
                            <!--begin:: Avatar -->
                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                <a href="<?php echo e(route('users.show',$broadsheet->id)); ?>">
                                        <div class="symbol-label">
                                            <?php
                                            if ($broadsheet->picture == NULL || $broadsheet->picture =="" || !isset($broadsheet->picture) ){
                                                    // $cimage =  $imageclass;
                                                    $image =  'unnamed.png';
                                            }else {
                                                $image =  $broadsheet->picture;
                                            }
                                            ?>
                                            <img src="<?php echo e(Storage::url('images/studentavatar/'.$image)); ?>" alt="<?php echo e($broadsheet->fname); ?> <?php echo e($b->lname); ?>" class="w-100" />
                                        </div>
                                                            </a>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::User details-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-gray-800 text-hover-primary mb-1"><?php echo e($broadsheet->fname); ?> <?php echo e($broadsheet->lname); ?></a>

                            </div>
                            <!--begin::User details-->
                        </td>
                        <td > <b><?php echo e($broadsheet->ca1); ?></b></td>
                        <td ><b><?php echo e($broadsheet->ca2); ?></b></td>
                        <td ><b><?php echo e($broadsheet->ca3); ?></b></td>
                        <td ><b><?php echo e($broadsheet->tca); ?></b></td>
                        <td ><b><?php echo e(($broadsheet->ca1 + $broadsheet->ca2 + $broadsheet->ca3) / 3); ?></b></td>
                        <td ><b><?php echo e($broadsheet->exam); ?></b></td>

                        <td >
                                    <?php
                                            $bf = 0;
                                            $term = "";
                                            $schoolclassid_1 = 0;
                                            $schoolclassid_2 = 0;
                                            $schoolclassid_3 = 0;



                                            if (\Session::get('termid') == 1) {
                                            // echo "first term";
                                             $bf = 0;
                                            // echo  $broadsheet->studentId;
                                             $term_bf =  Broadsheet::where('subjectclassid', \Session::get('subjectclassid'))
                                                                    ->where('broadsheet.termid', 1)
                                                                    ->where('broadsheet.session', \Session::get('sessionid'))
                                                                    ->where('broadsheet.studentId', $broadsheet->studentId)
                                                                    ->get();

                                                                    foreach ($term_bf as $key => $value) {
                                                                      //  echo $term =  $value->termid;
                                                                        echo   $bf = $value->bf;
                                                                        echo $schoolclassid_1 = $value->schoolclassid;
                                                                    }
                                            }elseif (\Session::get('termid') == 2) {
                                              // echo "second term";

                                               $term_bf =  Broadsheet::where('subjectclassid', \Session::get('subjectclassid'))
                                                                    ->where('broadsheet.termid', 1)
                                                                    ->where('broadsheet.session', \Session::get('sessionid'))
                                                                    ->where('broadsheet.studentId', $broadsheet->studentId)
                                                                    ->get();
                                                                    foreach ($term_bf as $key => $value) {
                                                                        echo $term =  $value->termid;
                                                                        //echo   $bf = $value->bf;
                                                                        echo $schoolclassid_2 = $value->schoolclassid;
                                                                    }
                                            }elseif (\Session::get('termid') == 4) {
                                               //echo "third term";
                                               //echo  $broadsheet->studentId;
                                               echo Session::get('subjectclassid');
                                               $term_bf =  Broadsheet::where('subjectclassid', \Session::get('subjectclassid'))
                                                                    ->where('broadsheet.termid', 2)
                                                                    ->where('broadsheet.session', \Session::get('sessionid'))
                                                                    ->where('broadsheet.studentId', $broadsheet->studentId)
                                                                    ->get();
                                                                    foreach ($term_bf as $key => $value) {
                                                                        //echo $term =  $value->termid;
                                                                        echo   $bf =  $value->bf;
                                                                        echo $schoolclassid_3 = $value->schoolclassid;
                                                                    }
                                            }




                                    ?>

                                

                        </td>

                        <td ><b><?php echo e($broadsheet->cum); ?></b></td>
                        <?php if($broadsheet->total <= 29): ?>
                        <td style="color:red;"><?php echo e($broadsheet->total); ?></td>
                        <?php else: ?>
                        <td><?php echo e($broadsheet->total); ?></td>
                        <?php endif; ?>

                       <?php if($broadsheet->grade == "F"): ?>
                       <td style="color:red;"><?php echo e($broadsheet->grade); ?></td>
                       <?php else: ?>
                       <td><?php echo e($broadsheet->grade); ?></td>
                       <?php endif; ?>
                       <td><b><?php echo e($broadsheet->position); ?></b></td>
                       <td>  <a href="<?php echo e(route('subjectscoresheet.edit',$broadsheet->id)); ?>" class="btn btn-success" data-toggle="tooltip"
                        title="Input Score for <?php echo e($broadsheet->fname); ?>  <?php echo e($broadsheet->lname); ?> ">Edit Score</a></td>

                  </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            var txtExamtextValue = 0;
            var result = 0;
            var total = 0;

            var txtFirsttextValue = document.getElementById('ca1').value;
            var txtSecondtextValue = document.getElementById('ca2').value;
            var txtExamtextValue = document.getElementById('exam').value;

            if(txtFirsttextValue > <?php echo e($b->ca1); ?> || txtFirsttextValue == ""){
                alert('First CA  scores cannot be more than'+ <?php echo e($b->ca1); ?> +' marks or empty');
                return false;
            }
            if(isNaN(txtFirsttextValue)){
                alert("First CA  is not a digit please");
                return false;
            }
            if(txtSecondtextValue > <?php echo e($b->ca2); ?> || txtSecondtextValue == ""){
            alert('Second CA scores cannot be more than '+ <?php echo e($b->ca2); ?> +' marks or empty');
                return false;
            }
            if(isNaN(txtSecondtextValue) ){
                alert("Second CA is not a digit please");
                return false;
            }

            if(txtExamtextValue > <?php echo e($b->exam); ?> || txtExamtextValue == "" ){
                alert('Exam scores cannot be more than '+<?php echo e($b->exam); ?> +' marks or empty');
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
            var txtExamtextValue = 0;
            var result = 0;
            var total = 0;

            var txtFirsttextValue = document.getElementById('ca1').value;
            var txtSecondtextValue = document.getElementById('ca2').value;
            var txtExamtextValue = document.getElementById('exam').value;
            if(txtFirsttextValue > <?php echo e($b->ca1); ?> || txtFirsttextValue == ""){
                alert('First CA  scores cannot be more than ' + <?php echo e($b->ca1); ?> +' marks or empty');
                return false;
            }
            if(isNaN(txtFirsttextValue)){
                alert("First CA  is not a digit please");
                return false;
            }
            if(txtSecondtextValue > <?php echo e($b->ca2); ?> || txtSecondtextValue == ""){
                alert('Second CA scores cannot be more than '+ <?php echo e($b->ca2); ?> +' marks or empty');
                return false;
            }
            if(isNaN(txtSecondtextValue) ){
                alert("Second CA is not a digit please");
                return false;
            }

            if(txtExamtextValue > <?php echo e($b->exam); ?> || txtExamtextValue == "" ){
                alert('Exam scores cannot be more than '+ <?php echo e($b->exam); ?> +' marks or empty');
                return false;
            }
            if(isNaN(txtExamtextValue)){
                alert("Exam score is not a digit please");
                return false;
            }

            var result = parseFloat(txtFirsttextValue) +
                         parseFloat(txtSecondtextValue) +
                         parseFloat(txtExamtextValue) ;
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
                }else if(total >= 40 && total <= 59){
                    grade = "C";
                    document.getElementById('grade').style.color = "blue";
                    document.getElementById('grade').value = grade;
                    document.getElementById('remark').value = "GOOD";
                } if(total >= 30 && total <=39){
                   document.getElementById('grade').style.color = "red";
                    grade = "D";
                    document.getElementById('grade').value = grade;
                    document.getElementById('remark').value = "FAILY GOOD";
                } if(total <= 29){
                    document.getElementById('grade').style.color = "red";
                    grade = "F";
                    document.getElementById('grade').value = grade;
                    document.getElementById('remark').value = "POOR";
                }

            }
  }


</script>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\viteschool\resources\views/subjectscoresheet/index.blade.php ENDPATH**/ ?>