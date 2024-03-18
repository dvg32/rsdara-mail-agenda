@extends('Layout.Dashboard')
@section('DASHBOARD')
    <div class="app-main flex-column flex-row-fluid">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            @if (Auth()->user()->role !=3)
            @else
            <div class="card card-xl-stretch mb-5 mb-xl-8 mt-6">
                <!--begin::Tables Widget 9-->
                <div class="card card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">Input Petunjuk Juknis</span>
                        </h3>
                        <form action="">
                            <div class="card-toolbar">
                                <div>
                                    <input type="text" name="{{request('search')}}" value="" class="form-control"
                                        placeholder="Cari Juknis" />
                                </div>
                                <div style="margin-right: 10px">
                                    <button type="submit"
                                        class="btn btn-icon btn-outline-warning btn-active-light-info border"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cari Juknis"><span
                                            class="indicator-label">
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                                </svg>
                                            </span>
                                        </span>
                                    </button>
                                </div>
                                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-trigger="hover" title="">
                                    <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal"
                                        data-bs-target="#AddJuknis">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-envelope-plus" viewBox="0 0 16 16">
                                                <path
                                                    d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z" />
                                                <path
                                                    d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->Input Juknis</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <div class="table-responsive">
                            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="w-25px">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                No
                                            </div>
                                        </th>
                                        <th class="min-w-150px">Judul</th>
                                        <th class="min-w-140px">Tahun Juknis</th>
                                        <th class="min-w-120px">Oleh</th>
                                        <th class="min-w-100px text-end">Actions</th>
                                    </tr>
                                </thead>                               
                                <tbody>
                                    @foreach ($technical_instruction as $p)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="{{ $p->file_upload }}" target="_blank"
                                                            class="text-dark fw-bolder text-hover-primary fs-6">{{ $p->judul_juknis }}</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $p->waktu_dibuat }}
                                                </a>

                                            </td>
                                            <td class="text-end">
                                                <div class="d-flex flex-column w-100 me-2">
                                                    <div class="d-flex flex-stack mb-2">
                                                        <span
                                                            class="text-muted me-2 fs-7 fw-bold">{{ $p->relationEmployee->fullname }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                    <a href="{{ $p->file_upload }}" target="_blank"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-download"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                                                <path
                                                                    d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>
                    </div>
                </div>
                {{-- start modal Juknis --}}
                <div class="modal fade " tabindex="-1" id="AddJuknis">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{ route('addJuknis') }}" method="post">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title">Input Petunjuk Pengisian</h5>
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <span class="svg-icon svg-icon-2x"></span>
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <div class="modal-body">
                                    <div class="fv-row mb-3">
                                        <label class="text-dark fw-bolder text-hover-primary fs-6">Judul Petunjuk
                                            Juknis</label>
                                        <textarea type="text" name="judul_juknis" class="form-control form-control-solid mb-3 mb-lg-0" required> </textarea>
                                    </div>
                                    <div class="fv-row mb-3">
                                        <label class="text-dark fw-bolder text-hover-primary fs-6">Waktu Terbit
                                            Juknis</label>
                                        <input class="form-control form-control-solid mb-3 mb-lg-0" name="waktu_dibuat"
                                            id="TanggalJuknis" />
                                    </div>
                                    <div class="fv-row mb-1">
                                        <label class="required fs-6 fw-bold mb-2">link juknis</label>
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="file_upload" />
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Proses</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- End Modal Juknis --}}
            </div>
            @endif
            
            <div class="card card-xl-stretch mb-5 mb-xl-8 mt-6">
                <!--begin::Col-->
                <div class="col-lg-12">
                    <!--begin::Summary-->
                    <div class="card card-flush h-lg-100">
                        <!--begin::Card header-->
                        <div class="card-header mt-6">
                            <!--begin::Card title-->
                            <div class="card-title flex-column">
                                <h3 class="fw-bolder mb-1">Agenda Surat Tahun 2024</h3>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->


                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-9 pt-5">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-wrap">
                                <!--begin::Chart-->
                                <div class="position-relative d-flex flex-center h-175px w-175px me-15 mb-7">
                                    <div
                                        class="position-absolute translate-middle start-50 top-50 d-flex flex-column flex-center">
                                        <span class="fs-2qx fw-bolder">{{ $mailCount }} </span>
                                        <span class="fs-6 fw-bold text-gray-400">Total Surat Tahun 2024</span>
                                    </div>
                                    <canvas id="project_chart" data-mail-in="{{ $MailIn }}"
                                        data-mail-out="{{ $MailOut }}"></canvas>
                                </div>
                                <!--end::Chart-->
                                <!--begin::Labels-->
                                <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-bold align-items-center mb-3">
                                        <div class="bullet bg-primary me-3"></div>
                                        <div class="text-gray-400">Surat Masuk</div>
                                        <div class="ms-auto fw-bolder text-gray-700" data-kt-countup="true"
                                            data-kt-countup-value="{{ $MailIn }}" data-kt-countup-prefix="">0
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-bold align-items-center mb-3">
                                        <div class="bullet bg-success me-3"></div>
                                        <div class="text-gray-400">Surat Keluar</div>
                                        <div class="ms-auto fw-bolder text-gray-700" data-kt-countup="true"
                                            data-kt-countup-value="{{ $MailOut }}" data-kt-countup-prefix="">0
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Labels-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Notice-->
                            <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-grow-1">
                                    <!--begin::Content-->
                                    <div class="fw-bold">
                                        <div class="fs-6 text-gray-700">
                                            {{-- <a href="#" class="fw-bolder me-1">Invite New .NET Collaborators</a>to
                                            create great outstanding business to business .jsp modutr class scripts --}}
                                        </div>
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Notice-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Summary-->
                </div>
                <!--end::Col-->

            </div>
            {{-- start here --}}
            <div class="card card-xl-stretch mb-5 mb-xl-8 mt-6">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Grafik Surat Masuk dan Keluar Tahun
                            {{ $graph_year }}</span>

                    </h3>
                    {{-- <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                        title="" data-bs-original-title="Tambah Surat">
                        <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal"
                            data-bs-target="#AddMail">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-envelope-plus" viewBox="0 0 16 16">
                                    <path
                                        d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z" />
                                    <path
                                        d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Input Surat</a>
                    </div> --}}
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-3">
                    <canvas id="kt_chartjs_1"></canvas>
                    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
                    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
                    <script>
                        var ctx = document.getElementById('kt_chartjs_1');

                        // Define colors for each mail type
                        var colors = {
                            '1': '#00A3FF', // Surat Masuk
                            '2': '#50CD89', // Surat Keluar
                        };

                        // Define fonts
                        var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');

                        // Chart labels
                        const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October',
                            'November', 'December'
                        ];

                        // Chart data
                        const monthlyData = {!! json_encode($monthlyData) !!};
                        const datasets = [];
                        const mailTypes = monthlyData.reduce((acc, data) => {
                            if (!acc.includes(data.mail_type)) {
                                acc.push(data.mail_type);
                                datasets.push({
                                    label: data.mail_type === '1' ? 'Surat Masuk' : 'Surat Keluar',
                                    data: Array(12).fill(0),
                                    backgroundColor: colors[data.mail_type],
                                });
                            }
                            return acc;
                        }, []);

                        monthlyData.forEach(data => {
                            const index = data.month - 1;
                            const datasetIndex = mailTypes.indexOf(data.mail_type);
                            datasets[datasetIndex].data[index] = data.count;
                        });

                        const data = {
                            labels: labels,
                            datasets: datasets
                        };

                        // Chart config
                        const config = {
                            type: 'bar',
                            data: data,
                            options: {
                                plugins: {
                                    title: {
                                        display: false,
                                    }
                                },
                                responsive: true,
                                indexAxis: 'x', // Display bars side by side along the x-axis
                                scales: {
                                    x: {
                                        stacked: false, // No longer stacked
                                    },
                                    y: {
                                        stacked: false
                                    }
                                }
                            },
                            defaults: {
                                global: {
                                    defaultFont: fontFamily
                                }
                            }
                        };

                        // Init ChartJS
                        var myChart = new Chart(ctx, config);
                    </script>
                </div>
                <!--begin::Body-->

            </div>
            {{-- end here --}}
        </div>


    </div>
@endsection
