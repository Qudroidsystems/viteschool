@extends('layouts.master')
@section('content')

<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Exams
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('exams.index') }}" class="text-muted text-hover-primary">Exams</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">List</li>
                    </ul>
                </div>
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
                @if (\Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ \Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
        </div>
        <!--end::Toolbar-->

        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="d-flex flex-wrap flex-stack my-5">
                    <h2 class="fs-2 fw-semibold my-2">
                        Exams
                        <span class="fs-6 text-gray-400 ms-1">Management</span>
                    </h2>
                </div>

                <!--begin::Card-->
                <div class="card">
                    <div class="card-header border-0 pt-6">
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_exam">
                                    <i class="ki-duotone ki-plus fs-2"></i> Create New Exam
                                </button>
                            </div>

                          <!--begin::Modal - Add exam-->
                            <div class="modal fade" id="kt_modal_add_exam" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <div class="modal-content">
                                        <div class="modal-header" id="kt_modal_add_exam_header">
                                            <h2 class="fw-bold">Create New Exam</h2>
                                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                            </div>
                                        </div>
                                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                            <form id="kt_modal_add_exam_form" class="form" action="{{ route('exams.store') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="staffId" class="form-control form-control-solid mb-3 mb-lg-0" value="{{Auth::user()->id}}" required />
                                                
                                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_exam_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_exam_header" data-kt-scroll-wrappers="#kt_modal_add_exam_scroll" data-kt-scroll-offset="300px">
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <label class="required fw-semibold fs-6 mb-2">Exam Title</label>
                                                        <input type="text" name="title" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Enter exam title..." required />
                                                    </div>
                                                    <!--end::Input group-->

                                                    <div class="fv-row mb-7">
                                                        <label class="fw-semibold fs-6 mb-2">Description</label>
                                                        <textarea name="description" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Enter exam description..." rows="3"></textarea>
                                                    </div>

                                                    <div class="fv-row mb-7">
                                                        <label class="required fw-semibold fs-6 mb-2">Duration (minutes)</label>
                                                        <input type="number" name="duration" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Enter duration in minutes..." required min="1" />
                                                    </div>

                                                    <div class="fv-row mb-7">
                                                        <label class="required fw-semibold fs-6 mb-2">Start Time</label>
                                                        <input type="datetime-local" name="start_time" class="form-control form-control-solid mb-3 mb-lg-0" required />
                                                    </div>

                                                    <div class="fv-row mb-7">
                                                        <label class="required fw-semibold fs-6 mb-2">End Time</label>
                                                        <input type="datetime-local" name="end_time" class="form-control form-control-solid mb-3 mb-lg-0" required />
                                                    </div>
                                                    
                                                    <div class="fv-row mb-7">
                                                        <label class="required fw-semibold fs-6 mb-2">Select Term</label>
                                                        <select name="termid" id="termid" class="form-control form-control-solid mb-3 mb-lg-0" required>
                                                            <option value="" selected>Select Term</option>
                                                            @foreach ($terms as $term => $name)
                                                            <option value="{{$name->id}}">{{ $name->term}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="fv-row mb-7">
                                                        <label class="required fw-semibold fs-6 mb-2">Select Session</label>
                                                        <select name="session" id="sessionid" class="sel-sesson form-control form-control-solid mb-3 mb-lg-0" required>
                                                            <option value="" selected>Select Session</option>
                                                            @foreach ($session as $schoolsession => $name)
                                                            <option value="{{$name->id}}">{{ $name->session}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    
                                                    <!-- Subject Selection -->
                                                    <div class="fv-row mb-7">
                                                        <label class="required fw-semibold fs-6 mb-2">Select Subject</label>
                                                        <select name="subject_id" class="form-control form-control-solid mb-3 mb-lg-0" required>
                                                            <option value="" selected>Select Subject</option>
                                                            @foreach ($mysubjects as $subject)
                                                            <option value="{{ $subject->id }}">{{ $subject->subject }} ({{ $subject->subjectcode }}) - {{ $subject->schoolclass }} {{ $subject->arm }} {{$subject->term}} {{$subject->session}}  </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    
                                                    <!-- Class Selection -->
                                                    <div class="fv-row mb-7">
                                                        <label class="required fw-semibold fs-6 mb-2">Select Class</label>
                                                        <select name="schoolclass_id" class="form-control form-control-solid mb-3 mb-lg-0" required>
                                                            <option value="" selected>Select Class</option>
                                                            @foreach ($myclass as $class)
                                                            <option value="{{ $class->schoolclassID }}">{{ $class->schoolclass }} {{ $class->schoolarm }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    
                                                    <!-- Publish Status -->
                                                    <div class="fv-row mb-7">
                                                        <label class="fw-semibold fs-6 mb-2">Publish Status</label>
                                                        <div class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" name="is_published" value="1" id="publishStatus" />
                                                            <label class="form-check-label" for="publishStatus">
                                                                Publish exam immediately
                                                            </label>
                                                        </div>
                                                        <div class="text-muted fs-7 mt-1">If not checked, the exam will be saved as a draft.</div>
                                                    </div>
                                                </div>
                                                
                                                <div class="text-center pt-15">
                                                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
                                                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                        <span class="indicator-label">Submit</span>
                                                        <span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Modal - Add exam-->
                        </div>
                    </div>

                    <!--begin::Card body-->
                    <div class="card-body py-4">
                        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_exams_table">
                            <thead>
                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_exams_table .form-check-input" value="1" />
                                        </div>
                                    </th>
                                    <th class="min-w-50px">ID</th>
                                    <th class="min-w-200px">Title</th>
                                    <th class="min-w-200px">Description</th>
                                    <th class="min-w-100px">Duration</th>
                                    <th class="min-w-150px">Start Time</th>
                                    <th class="min-w-150px">End Time</th>
                                    <th class="min-w-150px">Questions</th>
                                    <th class="min-w-100px">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @php $i = 0 @endphp
                                @foreach ($exams as $exam)
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $exam->title }}</td>
                                    <td>{{ Str::limit($exam->description ?? '', 50) }}</td>
                                    <td>{{ $exam->duration }} mins</td>
                                    <td>{{ $exam->start_time }}</td>
                                    <td>{{ $exam->end_time }}</td>
                                    <td>
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i>
                                        </a>
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <div class="menu-item px-3">
                                                <a href="{{ route('questions.show', $exam->id) }}" class="menu-link px-3">View Questions</a>
                                            </div>
                                           
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i>
                                        </a>
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <div class="menu-item px-3">
                                                <a href="{{ route('exams.edit', $exam->id) }}" class="menu-link px-3">Edit</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="{{ route('exams.destroy', $exam->id) }}" class="menu-link px-3" data-kt-exams-table-filter="delete_row">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>
</div>

@endsection