@extends('layouts.master')
@section('content')

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
                               School Bills for Term and Session
                                        </h1>
                                <!--end::Title-->


                                    <!--begin::Breadcrumb-->
                                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                                        <!--begin::Item-->
                                                        <li class="breadcrumb-item text-muted">
                                                            <a href="{{ route('schoolbilltermsession.index') }}" class="text-muted text-hover-primary">School BIlls for Term and Sessions</a>
                                                                        </li>
                                                            <!--end::Item-->
                                                                <!--begin::Item-->
                                                <li class="breadcrumb-item">
                                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                                </li>
                                                <!--end::Item-->

                                                        <!--begin::Item-->
                                                                <li class="breadcrumb-item text-muted">School BIlls for Term and Session</li>
                                                            <!--end::Item-->

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


                    <div id="kt_app_content" class="app-content  flex-column-fluid " >
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container  container-xxl ">

                   <!--begin::Toolbar-->
                        <div class="d-flex flex-wrap flex-stack my-5">
                            <!--begin::Heading-->
                            <h2 class="fs-2 fw-semibold my-2">
                              School BIlls for Class, Term and Session
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
                                                    <i class="ki-duotone ki-plus fs-2"></i>     Assign School Bill to Class, Term and Session
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
                                                        <h2 class="fw-bold">  Assign School Bill to Class, Term and Session</h2>
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
                                                        <form id="kt_modal_add_user_form" class="form" action="{{ route('schoolbilltermsession.store') }}" method="POST">
                                                            @csrf
                                                            <!--begin::Scroll-->
                                                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">

                                                                        <input type="hidden" name="createdBy" value="{{ Auth::user()->id }}">
                                                                 <!--begin::Input group-->
                                                                 <div class="mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class="required fw-semibold fs-6 mb-5">Select  School Bill </label>
                                                                    <!--end::Label-->
                                                                            <!--begin::Input row-->
                                                                            <div class="fv-row mb-7">
                                                                                    <!--begin::Input-->
                                                                                    <select name ="bill_id" id="bill_id" data-control="select2" data-placeholder="Select an option" data-hide-search="true" class="form-select form-select-solid form-select-lg fw-semibold fs-6 text-gray-700">
                                                                                        <option value="" selected>Select School Bill</option>
                                                                                        @foreach ($schoolbills as $schoolbill => $name )
                                                                                         <option value="{{$name->id}}">{{ $name->title }} &nbsp; ₦ {{ number_format($name->bill_amount) }}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                    <!--end::Input-->

                                                                            </div>
                                                                            <!--end::Input row-->
                                                                        </div>
                                                                        <!--end::Input group-->


                                                                <!--begin::Input group-->
                                                                    <div class="mb-7">
                                                                        <!--begin::Label-->
                                                                        <label class="required fw-semibold fs-6 mb-5">Select  Class and Arm</label>
                                                                        <!--end::Label-->
                                                                                <!--begin::Input row-->
                                                                                <div class="fv-row mb-7">

                                                                                        <!--begin::Input-->
                                                                                        <select name ="class_id" id="class_id" class="form-control form-control-solid mb-3 mb-lg-0"  >
                                                                                            <option value="" selected>Select Class & Arm</option>
                                                                                            @foreach ($schoolclasses as $schoolclass => $name )
                                                                                             <option value="{{$name->id}}">{{ $name->schoolclass }} &nbsp; {{ $name->arm }}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                        <!--end::Input-->

                                                                                </div>
                                                                                <!--end::Input row-->
                                                                            </div>
                                                                            <!--end::Input group-->



                                                                  <!--begin::Input group-->
                                                                  <div class="mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class="required fw-semibold fs-6 mb-5">Select Term</label>
                                                                    <!--end::Label-->
                                                                            <!--begin::Input row-->
                                                                            <div class="fv-row mb-7">
                                                                                    <!--begin::Input-->
                                                                                    <select name ="termid_id" id="termid" class="form-control form-control-solid mb-3 mb-lg-0"  >
                                                                                        <option value="" selected>Select Term </option>
                                                                                        @foreach ($terms as $term => $name )
                                                                                        <option value="{{$name->id}}">{{ $name->term}}</option>
                                                                                       @endforeach
                                                                                    </select>
                                                                                    <!--end::Input-->
                                                                            </div>
                                                                            <!--end::Input row-->
                                                                        </div>
                                                                        <!--end::Input group-->



                                                                          <!--begin::Input group-->
                                                                          <div class="mb-7">
                                                                            <!--begin::Label-->
                                                                            <label class="required fw-semibold fs-6 mb-5">Select Session</label>
                                                                            <!--end::Label-->
                                                                                    <!--begin::Input row-->
                                                                                    <div class="fv-row mb-7">

                                                                                            <!--begin::Input-->
                                                                                            <select name ="session_id" id="sessionid" class="sel-sesson form-control form-control-solid mb-3 mb-lg-0"  >
                                                                                                <option value="" selected>Select Session </option>
                                                                                                @foreach ($schoolsessions as $schoolsession => $name )
                                                                                                 <option value="{{$name->id}}">{{ $name->session}}</option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                            <!--end::Input-->

                                                                                    </div>
                                                                                    <!--end::Input row-->
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



                                    </div>
                                    <!--end::Card toolbar-->
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
            </div>
            <!--end::Card header-->

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
                    <th class="min-w-125px">School Bill</th>
                    <th class="min-w-125px">School Class</th>
                    <th class="min-w-125px">Term | Session</th>
                    <th class="min-w-125px">Created By</th>
                    <th class="min-w-125px">Date Updated</th>
                    <th class="min-w-100px">Actions</th>
                </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
                @php
                 $i = 0
               @endphp
               @foreach ($schoolbillclasstermsessions as $sc)


                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>  <input type="hidden" id="tid"  value="{{ $sc->id }}" />{{ ++$i }}</td>
                        <td >{{ $sc->schoolbill }}</td>
                        <td >{{ $sc->schoolclass }}   {{ $sc->schoolarm }}</td>
                        <td >{{ $sc->schoolterm }} | {{ $sc->schoolsession }}</td>
                        <td >{{ $sc->createdBy }}</td>
                        <td >{{ $sc->updated_at }} </td>
                        <td >
                            <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                            <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    {{-- @can('subject_class-edit') --}}
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">

                                            <a href="{{ route('schoolbilltermsession.edit', ['schoolbilltermsession' => $sc->id]) }}"  class="sel-subjectclass btn btn-light btn-active-primary" >Edit</a>
                                        </div>
                                        <!--end::Menu item-->
                                    {{-- @endcan --}}
                                    {{-- @can('subject_class-delete') --}}
                                    <div class="menu-item px-3" >
                                        {{-- <form method="post" class="menu-link px-3" data-kt-roles-table-filter="delete_row" data-route="">
                                          @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form> --}}
                                        <a
                                        href="javascript:void(0)"
                                        id="show-user"
                                        data-kt-roles-table-filter="delete_row"
                                        data-url="{{ route('schoolbilltermsession.deleteschoolbilltermsession', ['schoolbilltermsessionid'=>$sc->id]) }}"
                                        class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                    {{-- @endcan --}}

                                </div>
                                    <!--end::Menu-->
                        </td>

             </tr>
             @endforeach
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


@endsection
