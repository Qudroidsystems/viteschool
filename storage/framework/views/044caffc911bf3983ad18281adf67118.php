    <?php $__env->startSection('content'); ?>


               <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">

<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 "

         >

            <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">



<!--begin::Page title-->
<div  class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
    <!--begin::Title-->
    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
       <p style="color: green"> Student's Personality Profile</p>
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
            <!--begin: Pic-->
            <div class="me-7 mb-4">
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                    <?php $image = "";?>
                    <?php
                    if ($st->avatar == NULL || $st->avatar =="" || !isset($st->avatar) ){
                           $image =  'unnamed.png';
                    }else {
                       $image =  $st->avatar;
                    }
                    ?>
                    <img src="<?php echo e(Storage::url('images/studentavatar/'.$image)); ?>" alt="image" />
                    <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1"> <?php echo e($st->fname); ?> <?php echo e($st->lastname); ?></a>
                            <a href="#"><i class="ki-duotone ki-verify fs-1 text-primary"><span class="path1"></span><span class="path2"></span></i></a>
                        </div>
                        <!--end::Name-->

                        <!--begin::Info-->
                        <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">

                            <a href="#" class="d-flex align-items-center  me-5 mb-2 vv">
                                <i class="ki-duotone ki-profile-circle fs-4 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <?php echo e($st->gender); ?>

                            </a>

                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                <i class="ki-duotone ki-geolocation fs-4 me-1"><span class="path1"></span><span class="path2"></span></i>
                                <?php echo e($st->homeaddress); ?>

                            </a>

                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::User-->


                </div>
                <!--end::Title-->

                
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
 <!--begin::Card toolbar-->
 <div class="card-toolbar">
    <!--begin::Button-->
    <a href="<?php echo e(route('myclass.index')); ?>" class="btn btn-light-primary" >
                   << Back
    </a>
    <!--end::Button-->
</div>

<!--begin::Basic info-->
<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->

        <div class="card-title m-0">
            <h3 class="fw-bold m-0"><p style="color: rgb(109, 109, 212)">Personality Profile Details for &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo e($st->fname); ?> <?php echo e($st->lastname); ?></p></h3>
        </div>
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

<!--end::Card toolbar-->
    <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_roles_view_table">
                <form  role="form" id="inline-validation" class="form-horizontal form-stripe" action="/save" method="POST">

                    <input type="hidden" name="studentid" value="<?php echo e($studentid); ?>">
                    <input type="hidden" name="schoolclassid" value="<?php echo e($schoolclassid); ?>">
                    <input type="hidden" name="staffid" value="<?php echo e($staffid); ?>">
                    <input type="hidden" name="termid" value="<?php echo e($termid); ?>">
                    <input type="hidden" name="sessionid" value="<?php echo e($sessionid); ?>">

                  <?php
                  foreach ($studentpp as $key => $s) {

                   // echo $s->punctuality;
                  }
                  ?>
                                <tr>
                                    <td>1</td>
                                    <td>Puntuality</td>
                                    <td>
                                        <select class="form-control col-md-8" name="punctuality" required>

                                            <?php if($s->punctuality == ""): ?>
                                            <option value="">Select Remark </option>
                                            <?php else: ?>
                                            <option value="<?php echo e($s->punctuality); ?>">Select  Remark</option>
                                            <?php endif; ?>
                                            <option value="Excellent">Excellent</option>
                                            <option value="Very Good">Very Good</option>
                                            <option value="Good">Good</option>
                                            <option value="Fairly">Fairly Good</option>
                                            <option value="Poor">Poor</option>
                                        </select>
                                    </td>
                                   <td>
                                       <input type="text" id="" class="form-control" value="<?php echo e($s->punctuality); ?>" readonly required>
                                   </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Neatness</td>
                                    <td>
                                        <select class="form-control col-md-8" name="neatness"  required>
                                            <?php if($s->neatness == ""): ?>
                                            <option value="">Select </option>
                                            <?php else: ?>
                                            <option value="<?php echo e($s->neatness); ?>">Select Remarks </option>
                                            <?php endif; ?>

                                            <option value="Excellent">Excellent</option>
                                            <option value="Very Good">Very Good</option>
                                            <option value="Good">Good</option>
                                            <option value="Fairly">Fairly Good</option>
                                            <option value="Poor">Poor</option>
                                        </select>
                                    </td>
                                   <td>
                                       <input type="text" id="" class="form-control" value="<?php echo e($s->neatness); ?>" readonly required>
                                   </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>Leadership</td>
                                    <td>
                                        <select class="form-control col-md-8" name="leadership" required>

                                            <?php if($s->leadership == ""): ?>
                                            <option value="">Select Remark </option>
                                            <?php else: ?>
                                            <option value="<?php echo e($s->leadership); ?>">Select  Remark</option>
                                            <?php endif; ?>
                                            <option value="Excellent">Excellent</option>
                                            <option value="Very Good">Very Good</option>
                                            <option value="Good">Good</option>
                                            <option value="Fairly">Fairly Good</option>
                                            <option value="Poor">Poor</option>
                                        </select>
                                    </td>
                                   <td>
                                       <input type="text" id="" class="form-control" value="<?php echo e($s->leadership); ?>" readonly required>
                                   </td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>Attitude</td>
                                    <td>
                                        <select class="form-control col-md-8" name="attitude" required >

                                            <?php if($s->attitude == ""): ?>
                                            <option value="">Select Remark </option>
                                            <?php else: ?>
                                            <option value="<?php echo e($s->attitude); ?>">Select  Remark</option>
                                            <?php endif; ?>
                                            <option value="Excellent">Excellent</option>
                                            <option value="Very Good">Very Good</option>
                                            <option value="Good">Good</option>
                                            <option value="Fairly">Fairly Good</option>
                                            <option value="Poor">Poor</option>
                                        </select>
                                    </td>
                                   <td>
                                       <input type="text" id="" class="form-control" value="<?php echo e($s->attitude); ?>" readonly required>
                                   </td>
                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>Reading</td>
                                    <td>
                                        <select class="form-control col-md-8" name="reading" required>

                                            <?php if($s->reading == ""): ?>
                                            <option value="">Select Remark </option>
                                            <?php else: ?>
                                            <option value="<?php echo e($s->reading); ?>">Select  Remark</option>
                                            <?php endif; ?>
                                            <option value="Excellent">Excellent</option>
                                            <option value="Very Good">Very Good</option>
                                            <option value="Good">Good</option>
                                            <option value="Fairly">Fairly Good</option>
                                            <option value="Poor">Poor</option>
                                        </select>
                                    </td>
                                   <td>
                                       <input type="text" id="" class="form-control" value="<?php echo e($s->reading); ?>" readonly required>
                                   </td>
                                </tr>

                                <tr>
                                    <td>6</td>
                                    <td>Honesty</td>
                                    <td>
                                        <select class="form-control col-md-8" name="honesty" required>

                                            <?php if($s->honesty == ""): ?>
                                            <option value="">Select Remark </option>
                                            <?php else: ?>
                                            <option value="<?php echo e($s->honesty); ?>">Select  Remark</option>
                                            <?php endif; ?>
                                            <option value="Excellent">Excellent</option>
                                            <option value="Very Good">Very Good</option>
                                            <option value="Good">Good</option>
                                            <option value="Fairly">Fairly Good</option>
                                            <option value="Poor">Poor</option>
                                        </select>
                                    </td>
                                   <td>
                                       <input type="text" id="" class="form-control" value="<?php echo e($s->honesty); ?>" readonly required>
                                   </td>
                                </tr>

                                <tr>
                                    <td>7</td>
                                    <td>Coopereation</td>
                                    <td>
                                        <select class="form-control col-md-8" name="cooperation" required>

                                            <?php if($s->cooperation  == ""): ?>
                                            <option value="">Select Remark </option>
                                            <?php else: ?>
                                            <option value="<?php echo e($s->cooperation); ?>">Select  Remark</option>
                                            <?php endif; ?>
                                            <option value="Excellent">Excellent</option>
                                            <option value="Very Good">Very Good</option>
                                            <option value="Good">Good</option>
                                            <option value="Fairly">Fairly Good</option>
                                            <option value="Poor">Poor</option>
                                        </select>
                                    </td>
                                   <td>
                                       <input type="text" id="" class="form-control" value="<?php echo e($s->cooperation); ?>" readonly required>
                                   </td>
                                </tr>

                                <tr>
                                    <td>8</td>
                                    <td>Self-control</td>
                                    <td>
                                        <select class="form-control col-md-8" name="selfcontrol" required>

                                            <?php if($s->selfcontrol == ""): ?>
                                            <option value="">Select Remark </option>
                                            <?php else: ?>
                                            <option value="<?php echo e($s->selfcontrol); ?>">Select  Remark</option>
                                            <?php endif; ?>
                                            <option value="Excellent">Excellent</option>
                                            <option value="Very Good">Very Good</option>
                                            <option value="Good">Good</option>
                                            <option value="Fairly">Fairly Good</option>
                                            <option value="Poor">Poor</option>
                                        </select>
                                    </td>
                                   <td>
                                       <input type="text" id="" class="form-control" value="<?php echo e($s->selfcontrol); ?>" readonly required>
                                   </td>
                                </tr>

                                <tr>
                                    <td>9</td>
                                    <td>Physical Health</td>
                                    <td>
                                        <select class="form-control col-md-8" name="physicalhealth">

                                            <?php if($s->physicalhealth == ""): ?>
                                            <option value="">Select Remark </option>
                                            <?php else: ?>
                                            <option value="<?php echo e($s->physicalhealth); ?>">Select  Remark</option>
                                            <?php endif; ?>
                                            <option value="Excellent">Excellent</option>
                                            <option value="Very Good">Very Good</option>
                                            <option value="Good">Good</option>
                                            <option value="Fairly">Fairly Good</option>
                                            <option value="Poor">Poor</option>
                                        </select>
                                    </td>
                                   <td>
                                       <input type="text" id="" class="form-control" value="<?php echo e($s->physicalhealth); ?>" readonly required>
                                   </td>
                                </tr>

                                <tr>
                                    <td>10</td>
                                    <td>Politeness</td>
                                    <td>
                                        <select class="form-control col-md-8" name="politeness">

                                            <?php if($s->politeness == ""): ?>
                                            <option value="">Select Remark </option>
                                            <?php else: ?>
                                            <option value="<?php echo e($s->politeness); ?>">Select  Remark</option>
                                            <?php endif; ?>
                                            <option value="Excellent">Excellent</option>
                                            <option value="Very Good">Very Good</option>
                                            <option value="Good">Good</option>
                                            <option value="Fairly">Fairly Good</option>
                                            <option value="Poor">Poor</option>
                                        </select>
                                    </td>
                                   <td>
                                       <input type="text" id="" class="form-control" value="<?php echo e($s->politeness); ?>" readonly required>
                                   </td>
                                </tr>

                                <tr>
                                    <td>11</td>
                                    <td>Stability</td>
                                    <td>
                                        <select class="form-control col-md-8" name="stability" required>

                                            <?php if($s->stability == ""): ?>
                                            <option value="">Select Remark </option>
                                            <?php else: ?>
                                            <option value="<?php echo e($s->stability); ?>">Select  Remark</option>
                                            <?php endif; ?>
                                            <option value="Excellent">Excellent</option>
                                            <option value="Very Good">Very Good</option>
                                            <option value="Good">Good</option>
                                            <option value="Fairly">Fairly Good</option>
                                            <option value="Poor">Poor</option>
                                        </select>
                                    </td>
                                   <td>
                                       <input type="text" id="" name="" class="form-control" value="<?php echo e($s->stability); ?>" readonly required>
                                   </td>
                                </tr>

                                <tr>
                                    <td>12</td>
                                    <td>Games And Sports</td>
                                    <td>
                                        <select class="form-control col-md-8" name="gamesandsports" required>

                                            <?php if($s->gamesandsports == ""): ?>
                                            <option value="">Select Remark </option>
                                            <?php else: ?>
                                            <option value="<?php echo e($s->gamesandsports); ?>">Select  Remark</option>
                                            <?php endif; ?>
                                            <option value="Excellent">Excellent</option>
                                            <option value="Very Good">Very Good</option>
                                            <option value="Good">Good</option>
                                            <option value="Fairly">Fairly Good</option>
                                            <option value="Poor">Poor</option>
                                        </select>
                                    </td>
                                   <td>
                                       <input type="text" id="" name="" class="form-control" value="<?php echo e($s->gamesandsports); ?>" readonly required>
                                   </td>
                                </tr>


                                <tr>
                                    <td>13</td>
                                    <td>School Attendance</td>
                                    <td>
                                      <input type="numbber" id="attendance" name="attendance" value="<?php echo e($s->attendance); ?>" class="form-control">

                                    </td>

                                </tr>



                                <tr>
                                    <td>14</td>
                                    <td>Teacher's Comment</td>
                                    <td>
                                      <input type="text" id="" name="classteachercomment" value="<?php echo e($s->classteachercomment); ?>" class="form-control">

                                    </td>

                                </tr>


                                <tr>
                                    <td>15</td>
                                    <td>Principal's Comment</td>
                                    <td>
                                        <input type="text" id="" name="principalscomment" value="<?php echo e($s->principalscomment); ?>" class="form-control">
                                    </td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                       <button class="btn btn-primary">update profile</button>
                                    </td>
                                </tr>

                            </tbody>
                        </form>
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


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\srms\resources\views/studentpersonalityprofile/edit.blade.php ENDPATH**/ ?>