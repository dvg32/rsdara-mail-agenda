@extends('Layout.Dashboard')
@section('DASHBOARD')
    <div class="app-main flex-column flex-row-fluid">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            <div class="row g-6 g-xl-9">
                <!--begin::Col-->
                <div class="col-lg-6">
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
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-light btn-sm">View Tasks</a>
                            </div>
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
                                        <span class="fs-2qx fw-bolder">237</span>
                                        <span class="fs-6 fw-bold text-gray-400">Total Surat Tahun 2024</span>
                                    </div>
                                    <canvas id="project_overview_chart"></canvas>
                                </div>
                                <!--end::Chart-->
                                <!--begin::Labels-->
                                <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-bold align-items-center mb-3">
                                        <div class="bullet bg-primary me-3"></div>
                                        <div class="text-gray-400">Surat Masuk</div>
                                        <div class="ms-auto fw-bolder text-gray-700">30</div>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-bold align-items-center mb-3">
                                        <div class="bullet bg-success me-3"></div>
                                        <div class="text-gray-400">Surat Keluar</div>
                                        <div class="ms-auto fw-bolder text-gray-700">45</div>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-bold align-items-center mb-3">
                                        <div class="bullet bg-danger me-3"></div>
                                        <div class="text-gray-400">Surat Tidak Ditanggapi</div>
                                        <div class="ms-auto fw-bolder text-gray-700">0</div>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-bold align-items-center">
                                        <div class="bullet bg-gray-300 me-3"></div>
                                        <div class="text-gray-400">Surat Ditanggapi</div>
                                        <div class="ms-auto fw-bolder text-gray-700">25</div>
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
                <!--begin::Col-->
                <div class="col-lg-6">
                    <!--begin::Graph-->
                    <div class="card card-flush h-lg-100">
                        <!--begin::Card header-->
                        <div class="card-header mt-6">
                            <!--begin::Card title-->
                            <div class="card-title flex-column">
                                <h3 class="fw-bolder mb-1">Surat Tahun 2024</h3>
                                <!--begin::Labels-->
                                <div class="fs-6 d-flex text-gray-400 fs-6 fw-bold">
                                    <!--begin::Label-->
                                    <div class="d-flex align-items-center me-6">
                                        <span class="menu-bullet d-flex align-items-center me-2">
                                            <span class="bullet bg-success"></span>
                                        </span>Surat Masuk
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex align-items-center">
                                        <span class="menu-bullet d-flex align-items-center me-2">
                                            <span class="bullet bg-primary"></span>
                                        </span>Surat Keluar
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Labels-->
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Select-->
                                <select name="status" data-control="select2" data-hide-search="true"
                                    class="form-select form-select-solid form-select-sm fw-bolder w-100px">
                                    <option value="1">2020 Q1</option>
                                    <option value="2">2020 Q2</option>
                                    <option value="3" selected="selected">2020 Q3</option>
                                    <option value="4">2020 Q4</option>
                                </select>
                                <!--end::Select-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-10 pb-0 px-5">
                            <!--begin::Chart-->
                            <div id="kt_project_overview_graph" class="card-rounded-bottom" style="height: 300px"></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Graph-->
                </div>
                <!--end::Col-->                
            </div>
            <div class="card card-flush mt-6 mt-xl-6">
                <!--begin::Card header-->
                <div class="card-header mt-5">
                    <!--begin::Card title-->
                    <div class="card-title flex-column">
                        <h3 class="fw-bolder mb-1">Project Spendings</h3>
                        <div class="fs-6 text-gray-400">Total $260,300 sepnt so far</div>
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar my-1">
                        <!--begin::Select-->
                        <div class="me-6 my-1">
                            <select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true"
                                class="w-125px form-select form-select-solid form-select-sm select2-hidden-accessible"
                                data-select2-id="select2-data-kt_filter_year" tabindex="-1" aria-hidden="true">
                                <option value="All" selected="selected" data-select2-id="select2-data-98-318q">All
                                    time</option>
                                <option value="thisyear">This year</option>
                                <option value="thismonth">This month</option>
                                <option value="lastmonth">Last month</option>
                                <option value="last90days">Last 90 days</option>
                            </select><span class="select2 select2-container select2-container--bootstrap5"
                                dir="ltr" data-select2-id="select2-data-97-csko" style="width: 100%;"><span
                                    class="selection"><span
                                        class="select2-selection select2-selection--single w-125px form-select form-select-solid form-select-sm"
                                        role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-disabled="false" aria-labelledby="select2-kt_filter_year-container"
                                        aria-controls="select2-kt_filter_year-container"><span
                                            class="select2-selection__rendered" id="select2-kt_filter_year-container"
                                            role="textbox" aria-readonly="true" title="All time">All time</span><span
                                            class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <!--end::Select-->
                        <!--begin::Select-->
                        <div class="me-4 my-1">
                            <select id="kt_filter_orders" name="orders" data-control="select2"
                                data-hide-search="true"
                                class="w-125px form-select form-select-solid form-select-sm select2-hidden-accessible"
                                data-select2-id="select2-data-kt_filter_orders" tabindex="-1" aria-hidden="true">
                                <option value="All" selected="selected" data-select2-id="select2-data-100-t3e4">
                                    All Orders</option>
                                <option value="Approved">Approved</option>
                                <option value="Declined">Declined</option>
                                <option value="In Progress">In Progress</option>
                                <option value="In Transit">In Transit</option>
                            </select><span class="select2 select2-container select2-container--bootstrap5"
                                dir="ltr" data-select2-id="select2-data-99-o16f" style="width: 100%;"><span
                                    class="selection"><span
                                        class="select2-selection select2-selection--single w-125px form-select form-select-solid form-select-sm"
                                        role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-disabled="false" aria-labelledby="select2-kt_filter_orders-container"
                                        aria-controls="select2-kt_filter_orders-container"><span
                                            class="select2-selection__rendered"
                                            id="select2-kt_filter_orders-container" role="textbox"
                                            aria-readonly="true" title="All Orders">All Orders</span><span
                                            class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <!--end::Select-->
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-3 position-absolute ms-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                        rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="black"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" id="kt_filter_search"
                                class="form-control form-control-solid form-select-sm w-150px ps-9"
                                placeholder="Search Order">
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <div id="kt_profile_overview_table_wrapper"
                            class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="table-responsive">
                                <table id="kt_profile_overview_table"
                                    class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder dataTable no-footer">
                                    <!--begin::Head-->
                                    <thead class="fs-7 text-gray-400 text-uppercase">
                                        <tr>
                                            <th class="min-w-250px sorting" tabindex="0"
                                                aria-controls="kt_profile_overview_table" rowspan="1"
                                                colspan="1" aria-label="Manager: activate to sort column ascending"
                                                style="width: 380.766px;">Manager</th>
                                            <th class="min-w-150px sorting" tabindex="0"
                                                aria-controls="kt_profile_overview_table" rowspan="1"
                                                colspan="1" aria-label="Date: activate to sort column ascending"
                                                style="width: 238.609px;">Date</th>
                                            <th class="min-w-90px sorting" tabindex="0"
                                                aria-controls="kt_profile_overview_table" rowspan="1"
                                                colspan="1" aria-label="Amount: activate to sort column ascending"
                                                style="width: 150.594px;">Amount</th>
                                            <th class="min-w-90px sorting" tabindex="0"
                                                aria-controls="kt_profile_overview_table" rowspan="1"
                                                colspan="1" aria-label="Status: activate to sort column ascending"
                                                style="width: 150.594px;">Status</th>
                                            <th class="min-w-50px text-end sorting" tabindex="0"
                                                aria-controls="kt_profile_overview_table" rowspan="1"
                                                colspan="1" aria-label="Details: activate to sort column ascending"
                                                style="width: 91.9375px;">Details</th>
                                        </tr>
                                    </thead>
                                    <!--end::Head-->
                                    <!--begin::Body-->
                                    <tbody class="fs-6">

                                        <tr class="odd">
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-1.jpg">
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href=""
                                                            class="fs-6 text-gray-800 text-hover-primary">Emma
                                                            Smith</a>
                                                        <div class="fw-bold text-gray-400">e.smith@kpmg.com.au</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td data-order="2021-10-25T00:00:00+08:00">Oct 25, 2021</td>
                                            <td>$969.00</td>
                                            <td>
                                                <span class="badge badge-light-info fw-bolder px-4 py-3">In
                                                    progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div
                                                            class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1">
                                                        </div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href=""
                                                            class="fs-6 text-gray-800 text-hover-primary">Melody
                                                            Macy</a>
                                                        <div class="fw-bold text-gray-400">melody@altbox.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td data-order="2021-02-21T00:00:00+08:00">Feb 21, 2021</td>
                                            <td>$654.00</td>
                                            <td>
                                                <span class="badge badge-light-info fw-bolder px-4 py-3">In
                                                    progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-26.jpg">
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href=""
                                                            class="fs-6 text-gray-800 text-hover-primary">Max Smith</a>
                                                        <div class="fw-bold text-gray-400">max@kt.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td data-order="2021-11-10T00:00:00+08:00">Nov 10, 2021</td>
                                            <td>$400.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-4.jpg">
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href=""
                                                            class="fs-6 text-gray-800 text-hover-primary">Sean Bean</a>
                                                        <div class="fw-bold text-gray-400">sean@dellito.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td data-order="2021-06-24T00:00:00+08:00">Jun 24, 2021</td>
                                            <td>$548.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-success fw-bolder px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-15.jpg">
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href=""
                                                            class="fs-6 text-gray-800 text-hover-primary">Brian Cox</a>
                                                        <div class="fw-bold text-gray-400">brian@exchange.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td data-order="2021-09-22T00:00:00+08:00">Sep 22, 2021</td>
                                            <td>$475.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-warning text-warning fw-bold">M</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div
                                                            class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1">
                                                        </div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href=""
                                                            class="fs-6 text-gray-800 text-hover-primary">Mikaela
                                                            Collins</a>
                                                        <div class="fw-bold text-gray-400">mikaela@pexcom.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td data-order="2021-03-10T00:00:00+08:00">Mar 10, 2021</td>
                                            <td>$551.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-success fw-bolder px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-8.jpg">
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href=""
                                                            class="fs-6 text-gray-800 text-hover-primary">Francis
                                                            Mitcham</a>
                                                        <div class="fw-bold text-gray-400">f.mitcham@kpmg.com.au</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td data-order="2021-09-22T00:00:00+08:00">Sep 22, 2021</td>
                                            <td>$791.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-success fw-bolder px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div
                                                            class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1">
                                                        </div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href=""
                                                            class="fs-6 text-gray-800 text-hover-primary">Olivia
                                                            Wild</a>
                                                        <div class="fw-bold text-gray-400">olivia@corpmail.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td data-order="2021-08-19T00:00:00+08:00">Aug 19, 2021</td>
                                            <td>$554.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div
                                                            class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1">
                                                        </div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href=""
                                                            class="fs-6 text-gray-800 text-hover-primary">Neil Owen</a>
                                                        <div class="fw-bold text-gray-400">owen.neil@gmail.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td data-order="2021-02-21T00:00:00+08:00">Feb 21, 2021</td>
                                            <td>$954.00</td>
                                            <td>
                                                <span class="badge badge-light-info fw-bolder px-4 py-3">In
                                                    progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-6.jpg">
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href=""
                                                            class="fs-6 text-gray-800 text-hover-primary">Dan
                                                            Wilson</a>
                                                        <div class="fw-bold text-gray-400">dam@consilting.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td data-order="2021-06-24T00:00:00+08:00">Jun 24, 2021</td>
                                            <td>$636.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Body-->
                                </table>
                            </div>
                            <div class="row">
                                <div
                                    class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                    <div class="dataTables_length" id="kt_profile_overview_table_length">
                                        <label><select name="kt_profile_overview_table_length"
                                                aria-controls="kt_profile_overview_table"
                                                class="form-select form-select-sm form-select-solid">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select></label></div>
                                </div>
                                <div
                                    class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                    <div class="dataTables_paginate paging_simple_numbers"
                                        id="kt_profile_overview_table_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled"
                                                id="kt_profile_overview_table_previous"><a href="#"
                                                    aria-controls="kt_profile_overview_table" data-dt-idx="0"
                                                    tabindex="0" class="page-link"><i class="previous"></i></a>
                                            </li>
                                            <li class="paginate_button page-item active"><a href="#"
                                                    aria-controls="kt_profile_overview_table" data-dt-idx="1"
                                                    tabindex="0" class="page-link">1</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="kt_profile_overview_table" data-dt-idx="2"
                                                    tabindex="0" class="page-link">2</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="kt_profile_overview_table" data-dt-idx="3"
                                                    tabindex="0" class="page-link">3</a></li>
                                            <li class="paginate_button page-item next"
                                                id="kt_profile_overview_table_next"><a href="#"
                                                    aria-controls="kt_profile_overview_table" data-dt-idx="4"
                                                    tabindex="0" class="page-link"><i class="next"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
    </div>
@endsection
