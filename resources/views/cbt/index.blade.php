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
                        My Exams
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('cbt.index') }}" class="text-muted text-hover-primary">Exams</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">List</li>
                    </ul>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
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
                        Exams for {{ $student->firstname }} {{ $student->lastname }}
                        <span class="fs-6 text-gray-400 ms-1">({{ $class->schoolclass }} - {{ $term->term }} - {{ $session->session }})</span>
                    </h2>
                </div>

                <!--begin::Card-->
                <div class="card">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title">
                            <h3 class="card-label">Available Exams</h3>
                        </div>
                    </div>

                    <!--begin::Card body-->
                    <div class="card-body py-4">
                        @if ($exams->isEmpty())
                            <div class="alert alert-info">
                                No exams available for your registered subjects at this time.
                            </div>
                        @else
                            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_exams_table">
                                <thead>
                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-50px">ID</th>
                                        <th class="min-w-200px">Title</th>
                                        <th class="min-w-200px">Description</th>
                                        <th class="min-w-100px">Duration</th>
                                        <th class="min-w-150px">Start Time</th>
                                        <th class="min-w-150px">End Time</th>
                                        <th class="min-w-100px">Status</th>
                                        <th class="min-w-100px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    @php $i = 0 @endphp
                                    @foreach ($exams as $exam)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $exam->title }}</td>
                                        <td>{{ Str::limit($exam->description ?? '', 50) }}</td>
                                        <td>{{ $exam->duration }} mins</td>
                                        <td>{{ $exam->start_time }}</td>
                                        <td>{{ $exam->end_time }}</td>
                                        <td>
                                            @php
                                                $now = now();
                                                $start = \Carbon\Carbon::parse($exam->start_time);
                                                $end = \Carbon\Carbon::parse($exam->end_time);
                                            @endphp
                                            @if ($now->lt($start))
                                                <span class="badge badge-light-warning">Upcoming</span>
                                            @elseif ($now->between($start, $end))
                                                <span class="badge badge-light-success">Ongoing</span>
                                            @else
                                                <span class="badge badge-light-danger">Ended</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($now->between($start, $end))
                                                <a href="{{ route('cbt.take', $exam->id) }}" class="btn btn-sm btn-primary">
                                                    Take Exam
                                                </a>
                                            @else
                                                <span class="text-muted">N/A</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->

                <!-- Additional Info -->
                <div class="mt-5">
                    <p class="text-muted">Total Subjects Offered: {{ $totalreg }} | Subjects Registered: {{ $reg }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection