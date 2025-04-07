@extends('layouts.master')
@section('content')
<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" style="display: none;" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        School Invoice
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item fs-5"><a href="#" class="fs-5 text-hover-primary">School Payment</a></li>
                        <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
                        <li class="breadcrumb-item fs-5">Invoice Manager</li>
                        <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
                        <li class="breadcrumb-item fs-5">View Invoice</li>
                    </ul>
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    @php
                        foreach($studentdata as $s) {
                            $fn = $s->firstname;
                            $ln = $s->lastname;
                            $ad = $s->admissionNo;
                        }
                    @endphp
                    <a href="{{ route('schoolpayment.termsession', $s->id) }}" class="btn btn-sm fw-bold btn-primary">
                        << Back
                    </a>
                </div>
                <!--end::Actions-->
            </div>
        </div>
        <!--end::Toolbar-->

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!-- begin::Invoice 3-->
                <div class="card">
                    <!-- begin::Body-->
                    <div class="card-body py-20">
                        <!-- begin::Wrapper-->
                        <div class="mw-lg-950px mx-auto w-100">
                            <!-- begin::Header-->
                            <div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
                                <h4 class="fw-bolder text-gray-800 fs-2qx pe-5 pb-7">BILLS INVOICE</h4>
                                <div class="text-sm-end">
                                    <a href="#" class="d-block mw-150px ms-sm-auto">
                                        <img alt="Logo" src="../../../assets/media/svg/brand-logos/lloyds-of-london-logo.svg" class="w-100" />
                                    </a>
                                    <div class="text-sm-end fw-semibold fs-4 fs-5 mt-7">
                                        <div style="color: rgb(22, 22, 135)">Trinity Comprehensive International School</div>
                                        <div>Ondo City, Ondo state</div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="pb-12">
                                <div class="d-flex flex-column gap-7 gap-md-10">
                                    <?php
                                        $image = $s->avatar ?? 'unnamed.png';
                                    ?>
                                    <img src="{{ Storage::url('images/studentavatar/' . $image) }}" alt="{{ $s->firstname }} {{ $s->lastname }}" class="w-20" height="120px" width="120px" style="border-radius: 10px"/>
                                    <div class="fw-bold fs-2" style="color: rgb(22, 22, 135)">
                                        Dear {{ $fn }} {{ $ln }} <span class="fs-6">({{ $ad }})</span>,<br />
                                        <span class="fs-5">Here are your payment details.</span>
                                    </div>
                                    <div class="separator"></div>

                                    <!--begin::Order details-->
                                    <div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bold">
                                        <div class="flex-root d-flex flex-column">
                                            <span class="fs-5" style="color: rgb(22, 22, 135)">Invoice ID</span>
                                            <span class="fs-5" style="color: rgb(22, 22, 135)">#{{ $invoiceNumber }}</span>
                                        </div>
                                        <div class="flex-root d-flex flex-column">
                                            <span class="fs-5" style="color: rgb(22, 22, 135)">Date-Time</span>
                                            <span class="fs-5" style="color: rgb(22, 22, 135)">{{ \Carbon\Carbon::now()->format('d F, Y H:i') }}</span>
                                        </div>
                                        <div class="flex-root d-flex flex-column">
                                            <span class="fs-5" style="color: rgb(22, 22, 135)">Class</span>
                                            <span class="fs-5" style="color: rgb(22, 22, 135)">{{ $s->schoolclass }} {{ $s->arm }}</span>
                                        </div>
                                        <div class="flex-root d-flex flex-column">
                                            <span class="fs-5" style="color: rgb(22, 22, 135)">Term</span>
                                            <span class="fs-5" style="color: rgb(22, 22, 135)">{{ $schoolterm }}</span>
                                        </div>
                                        <div class="flex-root d-flex flex-column">
                                            <span class="fs-5" style="color: rgb(22, 22, 135)">Session</span>
                                            <span class="fs-5" style="color: rgb(22, 22, 135)">{{ $schoolsession }}</span>
                                        </div>
                                    </div>
                                    <!--end::Order details-->

                                    <!--begin::Billing & shipping-->
                                    <div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bold">
                                        <div class="flex-root d-flex flex-column">
                                            <span class="fs-5">Home Address</span>
                                            <span class="fs-6">{!! nl2br(e(wordwrap($s->homeadd, 20, "\n", true))) !!}</span>
                                        </div>
                                    </div>
                                    <!--end::Billing & shipping-->

                                    <!--begin:Order summary-->
                                    <div class="d-flex justify-content-between flex-column">
                                        <div class="table-responsive border-bottom mb-9">
                                            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                <thead>
                                                    <tr class="border-bottom fs-6 fw-bold fs-5">
                                                        <th class="min-w-175px fs-5" style="color: rgb(22, 22, 135)">School Bill</th>
                                                        <th class="min-w-70px text-end pb-2 fs-5" style="color: rgb(22, 22, 135)">Bill Amount</th>
                                                        <th class="min-w-80px text-end pb-2 fs-5" style="color: rgb(22, 22, 135)">Last Paid</th>
                                                        <th class="min-w-80px text-end pb-2 fs-5" style="color: rgb(22, 22, 135)">Payment Method</th>
                                                        <th class="min-w-100px text-end pb-2 fs-5" style="color: rgb(22, 22, 135)">Outstanding</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fw-semibold text-gray-600">
                                                    @foreach ($studentpaymentbill as $sp)
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="ms-5 fs-5">
                                                                        <div class="fw-bold fs-5">{{ $sp->title }}</div>
                                                                        <div class="fs-7 fs-5">{{ $sp->description }}</div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end fs-5">₦ {{ number_format($sp->amount) }}</td>
                                                            <td class="text-end fs-5">₦ {{ number_format($sp->lastPayment) }}</td>
                                                            <td class="text-end fs-5">{{ $sp->paymentMethod }}</td>
                                                            <td class="text-end fs-5">₦ {{ number_format($sp->balance) }}</td>
                                                        </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td colspan="4" class="text-end fs-3 text-dark fw-bold">Total Bill Amount</td>
                                                        <td class="text-dark fs-3 fw-bolder text-end">₦ {{ number_format($totalBillAmount) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="text-end fs-3 text-dark fw-bold">Total Amount Paid</td>
                                                        <td class="text-dark fs-3 fw-bolder text-end">₦ {{ number_format($totalPaid) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="text-end fs-3 text-dark fw-bold">Total Outstanding</td>
                                                        <td class="text-dark fs-3 fw-bolder text-end">₦ {{ number_format($totalOutstanding) }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--end:Order summary-->
                                </div>
                            </div>
                            <!--end::Body-->

                            <!-- begin::Footer-->
                            <div class="d-flex flex-stack flex-wrap mt-lg-20 pt-13">
                                <div class="my-1 me-5">
                                    <button type="button" class="btn btn-success my-1 me-12" onclick="window.print();">Print Invoice</button>
                                    <a href="{{ url()->current() }}?download_pdf=1" class="btn btn-light-success my-1">Download PDF</a>
                                </div>
                            </div>
                            <!-- end::Footer-->
                        </div>
                        <!-- end::Wrapper-->
                    </div>
                    <!-- end::Body-->
                </div>
                <!-- end::Invoice 3-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
</div>
<!--end::Main-->
@endsection