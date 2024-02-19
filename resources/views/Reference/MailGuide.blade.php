@extends('Layout.Dashboard')
@section('DASHBOARD')
<div class="app-main flex-column flex-row-fluid">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-fluid">

        <div class="card card-xl-stretch mb-5 mb-xl-8 mt-6">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Panduan Surat Menyurat</span>

                </h3>

            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <iframe src="{{ route('mail-guide-data') }}" frameborder="0" width="100%" height="600"></iframe>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->


        </div>
    </div>
</div>
@endsection
