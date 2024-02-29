@if (Auth::user()->role == 1)
    @php
        $a='admin_layout.dashboard';
        $b='dashboard_content';
    @endphp
@else
    @php
        $a='Layout.Dashboard';
        $b='DASHBOARD';
    @endphp
@endif
@extends($a)
@section($b)
<div class="app-main flex-column flex-row-fluid">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-fluid">

        <div class="card card-xl-stretch mb-5 mb-xl-8 mt-6">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">PMDN No 1 Tahun 2023</span>

                </h3>

            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <iframe src="{{ route('dataPanduanSuratTataNaskahDinas') }}" frameborder="0" width="100%" height="600"></iframe>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->

        </div>
    </div>

        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">

            <div class="card card-xl-stretch mb-5 mb-xl-8 mt-6">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">PERMENDAGRI 83 TAHUN 2022 TENTANG KODE KLASIFIKASI ARSIP KODE SURAT</span>

                    </h3>

                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-3">
                    <!--begin::Table container-->
                    <iframe src="{{ route('dataPanduanSuratPermendagri83Tahun2022') }}" frameborder="0" width="100%" height="600"></iframe>
                    <!--end::Table container-->
                </div>
                <!--begin::Body-->

            </div>
        </div>

                <!--begin::Container-->
                <div id="kt_content_container" class="container-fluid">

                    <div class="card card-xl-stretch mb-5 mb-xl-8 mt-6">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">PERBUP NO 14 TAHUN 2018 TENTANG TATA NASKAH DINAS DI PEMERINTAH KABUPATEN KUTAI KARTANEGARA</span>

                            </h3>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <!--begin::Table container-->
                            <iframe src="{{ route('dataPanduanSuratPerbupNo14Tahun2018') }}" frameborder="0" width="100%" height="600"></iframe>
                            <!--end::Table container-->
                        </div>
                        <!--begin::Body-->

                    </div>
                </div>
</div>
@endsection
