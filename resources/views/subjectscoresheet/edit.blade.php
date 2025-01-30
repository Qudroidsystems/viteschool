@extends('layouts.master')
@section('content')


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
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
</div>
@endif

@if (\Session::has('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{ \Session::get('status') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (\Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{ \Session::get('success') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

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


        @foreach($broadsheets as $b)
        {{-- {
            $b->subject;
            $b->subjectcode;
            $b->schoolclass;
            $b->arm;
        } --}}

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
                    <img src="{{Storage::url('images/studentavatar/'.$image)}}" alt="image" />
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
                            <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{ $b->fname }} {{ $b->lname }}</a>
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
                                    <div class="fs-2 fw-bold" style="color: green">{{ $b->admissionno }} </div>
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
                                <div class="fs-2 fw-bold" style="color: green">{{ $b->subject }} </div>
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
                                <div class="fs-2 fw-bold" style="color: green" >{{ $b->subjectcode }}</div>
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
                                <div class="fs-2 fw-bold" style="color: green" >{{ $b->schoolclass }} {{ $b->arm }}</div>
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
                                <div class="fs-2 fw-bold"  style="color: green">{{ $b->term }} | {{ $b->session }}</div>
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
    @endforeach
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
@if (\Session::has('schoolclassid') || \Session::has('subjectclassid') || \Session::has('stafid') || \Session::has('termid') || \Session::has('sessionid'))
    <li class="nav-item">
        <a href='/subjectscoresheet/{{ \Session::get('schoolclassid') }}/{{ \Session::get('subjectclassid') }}/{{ \Session::get('staffid') }}/{{ \Session::get('termid')}}/{{ \Session::get('sessionid') }}'
            class="btn btn-success" data-toggle="tooltip" > < Back
       </a>
    </li>
@else
    <li class="nav-item"> <a href="{{ route('myresultroom.index') }}" class="btn btn-outline-success" data-toggle="tooltip" > < Back</a> </li>
@endif
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
                {!! Form::model($broadsheets, ['route' => ['subjectscoresheet.update', $b->bid], 'method'=>'PATCH','class'=>'form-horizontal form-stripe','onSubmit'=>'return validateForm();']) !!}
                        @csrf
                {{-- <form id="kt_modal_add_user_form" class="form" action="{{ route('subject.store') }}" method="POST">
                    @csrf --}}
                    <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">


                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">CA 1 ({{ $b->cat_ca1 }}%)</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" id="ca1" name="ca1" min="0" step="any" onkeyup="sum();" value="{{ $ca1 }}" class="form-control form-control-solid mb-3 mb-lg-0"   />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->

                          <!--begin::Input group-->
                          <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">CA 2 ({{ $b->cat_ca2 }}%)</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" id="ca2" name="ca2" min="0" step="any" onkeyup="sum();" value="{{ $ca2 }}" class="form-control form-control-solid mb-3 mb-lg-0"  />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->

                           <!--begin::Input group-->
                           <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">CA 3 ({{ $b->cat_ca3 }}%)</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" id="ca3" name="ca3" min="0" step="any" onkeyup="sum();" value="{{ $ca3 }}" class="form-control form-control-solid mb-3 mb-lg-0"  />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->

                          <!--begin::Input group-->
                          <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Exam ({{ $b->cat_exam }}%)</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" id="exam" name="exam"min="0" step="any"  onkeyup="sum();" value="{{ $exam}}" class="form-control form-control-solid mb-3 mb-lg-0"  />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->


                           {{-- <!--begin::Input group-->
                           <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Total</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" id="total" name="total" min="0" step="any" onkeyup="sum();" value="{{ $total }}" readonly class="form-control form-control-solid mb-3 mb-lg-0"   />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->


                        <input type="hidden" class="form-control" id="remark" name="remark" onkeyup="sum();" value="{{ $remark}}" readonly>
                           <!--begin::Input group-->
                           <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Grade</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" id="grade" name="grade" onkeyup="sum();" value="{{ $grade }}" readonly class="form-control form-control-solid mb-3 mb-lg-0"  />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group--> --}}





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

    {{-- <div class="card-title m-0">
        <h3 class="fw-bold m-0"><p style="color: rgb(109, 109, 212)"> Class Record for <b style="color: green">{{ $b->subject }}  {{ $b->subjectcode }} ScoreSheet for {{ $b->schoolclass }} {{ $b->arm }} for  {{ $b->term }} {{ $b->session }} session</span></h3>
    </div> --}}
    <!--end::Card title-->
</div>






<!--begin::Card header-->
@if (count($errors) > 0)
<div class="row animated fadeInUp">
      @if (count($errors) > 0)
<div class="alert alert-warning fade in">
<a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
 </div>
 @endif
</div>
   @endif
<!--begin::Content-->

<?php use App\Models\subjectRegistrationStatus;?>
<div id="kt_account_settings_profile_details" class="collapse show">

<!--begin::Card body-->
<div class="card-body py-4">
 <!--begin::Card toolbar-->
 {{-- <div class="card-toolbar">
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
</div> --}}
<!--end::Card toolbar-->

<!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_roles_view_table">
            <thead>
                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                    {{-- <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_roles_view_table .form-check-input" value="1" />
                        </div>
                    </th> --}}

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
                        {{-- <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td> --}}

                        <td ><b>{{ $ca1 }}</b></td>
                        <td ><b>{{ $ca2}}</b></td>
                        <td ><b>{{ $ca3}}</b></td>
                        <td ><b>{{ ($ca1 + $ca2 + $ca3 ) }}</b></td>
                        <td ><b>{{ $tca}}</b></td>
                        <td ><b>{{ $exam }}</b></td>
                        @if ($b->total <= 29)
                        <td style="color:red;">{{ $b->total }}</td>
                        @else
                        <td>{{ $b->total }}</td>
                        @endif
                        <td ><b>{{ $bf}}</b></td>
                        <td ><b>{{ $cum }}</b></td>
                       @if ($b->grade == "F")
                       <td style="color:red;">{{ $b->grade}}</td>
                       @else
                       <td>{{ $b->grade}}</td>
                       @endif
                       <td><b>{{ $b->position }}</b></td>
                       <td>  <button data-bs-toggle="modal" data-bs-target="#kt_modal_add_user" class="btn btn-success" data-toggle="tooltip"
                        title="Input Score for {{ $b->fname }}  {{ $b->lname }} ">Edit Score</button></td>

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

@endsection

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

            if(txtFirsttextValue > {{  $b->cat_ca1  }} || txtFirsttextValue == ""){
                alert('First CA  scores cannot be more than'+ {{  $b->cat_ca1  }} +' marks or empty');
                return false;
            }
            if(isNaN(txtFirsttextValue)){
                alert("First CA  is not a digit please");
                return false;
            }
            if(txtSecondtextValue > {{  $b->cat_ca2  }} || txtSecondtextValue == ""){
            alert('Second CA scores cannot be more than '+ {{  $b->cat_ca2  }} +' marks or empty');
                return false;
            }
            if(isNaN(txtSecondtextValue) ){
                alert("Second CA is not a digit please");
                return false;
            }

            if(txtthirdtextValue > {{  $b->cat_ca3  }} || txtThirdtextValue == ""){
            alert('third CA scores cannot be more than '+ {{  $b->cat_ca3  }} +' marks or empty');
                return false;
            }
            if(isNaN(txtThirdtextValue) ){
                alert("third CA is not a digit please");
                return false;
            }


            if(txtExamtextValue > {{  $b->cat_exam  }} || txtExamtextValue == "" ){
                alert('Exam scores cannot be more than '+{{  $b->cat_exam }} +' marks or empty');
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

            if(txtFirsttextValue > {{  $b->cat_ca1  }} || txtFirsttextValue == ""){
                alert('First CA  scores cannot be more than ' + {{  $b->cat_ca1  }} +' marks or empty');
                return false;
            }
            if(isNaN(txtFirsttextValue)){
                alert("First CA  is not a digit please");
                return false;
            }
            if(txtSecondtextValue > {{  $b->cat_ca2  }} || txtSecondtextValue == ""){
                alert('Second CA scores cannot be more than '+ {{  $b->cat_ca2  }} +' marks or empty');
                return false;
            }
            if(isNaN(txtSecondtextValue) ){
                alert("Second CA is not a digit please");
                return false;
            }

            if(txtThirdtextValue > {{  $b->cat_ca3  }} || txtThirdtextValue == ""){
                alert('Third CA scores cannot be more than '+ {{  $b->cat_ca2  }} +' marks or empty');
                return false;
            }
            if(isNaN(txtThirdtextValue) ){
                alert("third CA is not a digit please");
                return false;
            }


            if(txtExamtextValue > {{  $b->cat_exam  }} || txtExamtextValue == "" ){
                alert('Exam scores cannot be more than '+ {{  $b->cat_exam  }} +' marks or empty');
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
