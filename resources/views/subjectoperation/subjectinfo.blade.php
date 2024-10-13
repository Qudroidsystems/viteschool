
    @extends('layouts.master')
    @section('content')


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
       <p style="color: green"> Student Subject infomation and Registration Status</p>
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

            <?php
            $subsegstatus="";
            foreach($studentdata as $s) {
              $fn =   $s->firstname;
               $ln =  $s->lastname;
               $ad = $s->admissionNo;
            }

            foreach($classname as $c){
                $cname = $c->schoolclass;
                $aname = $c->arm;
            }
         ?>

             <!--begin::Navbar-->
 <div class="card mb-5 mb-xl-10">
    <div class="card-body pt-9 pb-0">
        <!--begin::Details-->
        <div class="d-flex flex-wrap flex-sm-nowrap">
            <!--begin: Pic-->
            <div class="me-7 mb-4">
                @foreach ($studentpic as $sc)

                <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                    <?php $image = "";?>
                    <?php
                    if ($sc->avatar == NULL || $sc->avatar =="" || !isset($sc->avatar) ){
                           $image =  'unnamed.png';
                    }else {
                       $image =  $sc->avatar;
                    }
                    ?>
                    <img src="{{Storage::url('images/studentavatar/'.$image)}}" alt="image" />
                    <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                </div>
                @endforeach
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
                            <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{ $fn }} {{ $ln }}</a>
                            <a href="#"><i class="ki-duotone ki-verify fs-1 text-primary"><span class="path1"></span><span class="path2"></span></i></a>
                        </div>
                        <!--end::Name-->

                        <!--begin::Info-->
                        <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">

                            <a href="#" class="d-flex align-items-center  me-5 mb-2 vv">
                                <i class="ki-duotone ki-profile-circle fs-4 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ $fn }} {{ $ln }}
                            </a>

                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                <i class="ki-duotone ki-geolocation fs-4 me-1"><span class="path1"></span><span class="path2"></span></i>
                                {{ $cname }}  {{ $aname }}
                            </a>

                        </div>
                        <!--end::Info-->
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
                                    <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="{{ $totalreg }}" data-kt-countup-prefix="">0</div>
                                </div>
                                <!--end::Number-->

                                <!--begin::Label-->
                                <div class="fw-semibold fs-6 text-gray-400">Subjects Offered</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->

                            <!--begin::Stat-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                    <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="{{ $reg }}">0</div>
                                </div>
                                <!--end::Number-->

                                <!--begin::Label-->
                                <div class="fw-semibold fs-6 text-gray-400"> Subjects Registered</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->

                              <!--begin::Stat-->
                              <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                    <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="{{ $noreg }}">0</div>
                                </div>
                                <!--end::Number-->

                                <!--begin::Label-->
                                <div class="fw-semibold fs-6 text-gray-400"> Unregisterd subjects</div>
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
 <!--begin::Card toolbar-->
 <div class="card-toolbar">
    <!--begin::Button-->
    <a href="{{ route('subjectoperation.index') }}" class="btn btn-light-primary" >
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
            <h3 class="fw-bold m-0"><p style="color: rgb(109, 109, 212)"> Subject Profile Details for &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $fn }} {{ $ln }} ({{ $ad }})</p></h3>
        </div>
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

    <?php use App\Models\SubjectRegistrationStatus;?>
    <div id="kt_account_settings_profile_details" class="collapse show">

  <!--begin::Card body-->
  <div class="card-body py-4">

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
                        <th class="min-w-125px" style="color: green">Subject Teacher</th>
                        <th class="min-w-125px" style="color: green">Subject </th>
                        <th class="min-w-125px" style="color: green">Subject Code</th>
                        <th class="min-w-100px" style="color: green">Registration Status</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @php
                      $i = 0
                    @endphp
                    @foreach ($subjectclass as $sc)
                        <tr>
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <td>  <input type="hidden" id="tid"  value="{{ $sc->id }}" />{{ ++$i }}</td>
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
                                                        <img src="{{ Storage::url('images/staffavatar/'.$image)}}" alt="{{ $sc->staffname }}" class="w-100" />
                                                    </div>
                                                                        </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::User details-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-gray-800 text-hover-primary mb-1">{{ $sc->title }} {{ $sc->name }}</a>

                                        </div>
                                        <!--begin::User details-->
                            </td>
                            <td >{{ $sc->subject }}</td>
                            <td >{{ $sc->subjectcode }} </td>
                            <td >
                                <?php
                                                              $subRegStatuschk = SubjectRegistrationStatus::where('studentid',$student)

                                                                ->where('sessionid',$sc->sessionid)
                                                                ->where('termid',$sc->termid)
                                                                ->where('subjectclassid',$sc->subjectclassid)
                                                                ->where('staffid',$sc->staffid)
                                                                ->where('Status',1)
                                                                ->exists();


                                                               $subRegStatus = SubjectRegistrationStatus::where('studentid',$student)

                                                                            ->where('sessionid',$sc->sessionid)
                                                                            ->where('termid',$sc->termid)
                                                                            ->where('subjectclassid',$sc->subjectclassid)
                                                                             ->where('staffid',$sc->staffid)
                                                                            ->where('Status',1)
                                                                            ->get();

                                                                            foreach ($subRegStatus as $value) {
                                                                                # code...
                                                                                $subregid = $value->id;
                                                                                $broadsheetid = $value->broadsheetid;
                                                                                $subregstatus = $value->Status;

                                                                               // echo $subregid;
                                                                            }


                                                                 ?>
                                                                        @if ($subRegStatuschk)

                                                                        @if ($subregstatus == 1)
                                                                        @can('subject_operation-delete')

                                                                        <button  class="btn button-success">Registered</button>
                                                                        {!! Form::open(['method' => 'DELETE','route' => ['subjectoperation.destroy', $broadsheetid],'style'=>'display:inline']) !!}
                                                                        <button type="submit" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-toggle="tooltip" title="Unregister Subject">
                                                                            <i class="ki-duotone ki-trash fs-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i></button>
                                                                        {!! Form::close() !!}
                                                                        @endcan
                                                                        @else

                                                                        <form  role="form" id="inline-validation" class="form-horizontal form-stripe" action="{{ route('subjectoperation.store') }}" method="POST">
                                                                        @csrf

                                                                        <input type="hidden" class="form-control"  name="studentid" value="{{ $student }}">
                                                                        <input type="hidden" class="form-control"  name="subjectclassid" value="{{ $sc->subjectclassid }}">
                                                                        <input type="hidden" class="form-control"  name="staffid" value="{{ $sc->staffid }}">
                                                                        <input type="hidden" class="form-control"  name="termid" value="{{ $sc->termid }}">
                                                                        <input type="hidden" class="form-control"  name="sessionid" value="{{ $sc->sessionid }}">
                                                                        <button type="submit" class="btn btn-warning " data-toggle="tooltip" title="Register {{ $sc->subject }} {{ $sc->subjectcode }} Subject">Not Registered</button>

                                                                        </form>

                                                                        @endif

                                                                        @else

                                                                        <form  role="form" id="inline-validation" class="form-horizontal form-stripe" action="{{ route('subjectoperation.store') }}" method="POST">
                                                                        @csrf

                                                                        <input type="hidden" class="form-control"  name="studentid" value="{{ $student }}">
                                                                        <input type="hidden" class="form-control"  name="subjectclassid" value="{{ $sc->subjectclassid }}">
                                                                        <input type="hidden" class="form-control"  name="staffid" value="{{ $sc->staffid }}">
                                                                        <input type="hidden" class="form-control"  name="termid" value="{{ $sc->termid }}">
                                                                        <input type="hidden" class="form-control"  name="sessionid" value="{{ $sc->sessionid }}">
                                                                        <button type="submit" class="btn btn-warning " data-toggle="tooltip" title="Register {{ $sc->subject }}  {{ $sc->subjectcode }} Subject">Not Registered</button>

                                                                        </form>
                                                                        @endif
                            </td>

                </tr>

                @endforeach
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

