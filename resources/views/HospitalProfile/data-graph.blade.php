@extends('Layout.Dashboard')
@section('DASHBOARD')
    <div class="app-main flex-column flex-row-fluid">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">

            <div class="card card-xl-stretch mb-5 mb-xl-8 mt-6">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Grafik Surat Masuk dan Keluar Tahun {{ $year }}</span>

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
                            '1': '#36a2eb', // Surat Masuk
                            '2': '#ff6384', // Surat Keluar
                        };

                        // Define fonts
                        var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');

                        // Chart labels
                        const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

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
        </div>
    </div>
@endsection
