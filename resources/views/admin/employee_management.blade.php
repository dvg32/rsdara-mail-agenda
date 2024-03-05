@extends('Layout.Dashboard')
@section('DASHBOARD')
    <div class="app-main flex-column flex-row-fluid">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            <div class="row">
                <div class="col-xl">
                    <!--begin::Tables Widget 9-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Pegawai</span>
                            </h3>
                            <form action="{{ route('employee_management') }}">
                                <div class="card-toolbar">
                                    <div>
                                        <input type="text" name="searchEmployee" value="{{ request('searchEmployee') }}"
                                            class="form-control" placeholder="Cari Pegawai" />
                                    </div>
                                    <div>
                                        <button type="submit"
                                            class="btn btn-icon btn-outline-warning btn-active-light-info border"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cari Pegawai"><span
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
                                    <div> <a href="#"
                                            class="btn btn-icon btn-outline-danger btn-active-light-info border"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalAddEmployee"data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Tambah Pegawai">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                            <span class="indicator-label">
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-person-plus-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                        <path fill-rule="evenodd"
                                                            d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fw-bolder text-muted">
                                            <th class="w-25px">
                                                No
                                            </th>
                                            <th class="min-w-300px">Nama </th>
                                            <th>Username</th>
                                            <th>Ruangan</th>
                                            <th>Status</th>
                                            <th class="d-flex justify-content-end flex-shrink-0">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($employee as $p)
                                            <tr>
                                                <td>
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a
                                                                class="text-dark fw-bolder text-hover-primary fs-6">{{ $p->fullname }}</a>
                                                            <span class="text-muted d-block fw-bold">{{ $p->nip }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex justify-content-start flex-column">
                                                            @if (!empty($p->user->name))
                                                                <a class="text-dark fw-bolder text-hover-primary fs-6">{{ $p->user->name }}
                                                                </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a class="text-dark fw-bolder text-hover-primary fs-6"></a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    @if ($p->status == 1)
                                                        <div
                                                            class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexSwitchChecked" checked="checked" />
                                                        </div>
                                                    @else
                                                        ()
                                                        <div
                                                            class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexSwitchDefault" />
                                                        </div>
                                                    @endif
                                                </td>

                                                <td>
                                                    <div class="d-flex justify-content-end flex-shrink-0">
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                            data-bs-toggle="tooltip" data-bs-placement="Top" title="Edit">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                    <path fill-rule="evenodd"
                                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            data-url="{{ route('searchEmployeeUsername', $p->id) }}"
                                                            id="insertUsername"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                            data-bs-toggle="tooltip" data-bs-placement="Top"
                                                            title="Input Username">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-person-fill-lock" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Start Modal Add Employee --}}
    <div class="modal fade " tabindex="-1" id="modalAddEmployee">
        <div class="modal-dialog border border-danger">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Tambah Pegawai</h5>
                </div>
                <form action="{{ route('addEmployee') }} " method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="fv-row mb-3">
                            <label class="text-dark fw-bolder text-hover-primary fs-6">No Induk Pegawai</label>
                            <input type="text" name="nip" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="" value="" required />
                        </div>
                        <div class="fv-row mb-3">
                            <label class="text-dark fw-bolder text-hover-primary fs-6">Nama
                                Pegawai</label>
                            <input type="text" name="fullname" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="" value="" required />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-primary"><span class="indicator-label">
                                Simpan
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End Modal Add  Employee --}}

    {{-- Start Modal Add Username --}}
    <div class="modal fade " tabindex="-1" id="modalViewModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('addUsername')}}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="fullname"></h5>
                    </div>
                    <div class="modal-body">
                        <div class="fv-row mb-3">
                            <label class="text-dark fw-bolder text-hover-primary fs-6 mb-3">Username</label>
                            <input type="text" id="id" hidden>
                            <input type="text" id="employee_id" name="employee_id" hidden>
                            <input type="text" name="name"  id="name" class="form-control form-control-solid mb-3 mb-lg-0"                                 />                           
                        </div>
                        <div class="fv-row mb-3">
                            <label class="text-dark fw-bolder text-hover-primary fs-6 mb-3">Password</label>
                            <input type="password" name="password" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="" id="user-password" />
                        </div>
                        <div class="fv-row mb-3">
                            <label class="text-dark fw-bolder text-hover-primary fs-6 mb-3">Konfirmasi Password</label>
                            <input type="password" name="confirm-password"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder=""
                                id="confirm-password" />
                            <small id="confirmation-error" class="text-danger d-none">Password tidak sama.</small>
                        </div>
                        <div class="fv-row ">
                            <label class="text-dark fw-bolder text-hover-primary fs-6">Referensi</label>
                            <select name="role" class="form-select form-select-solid"
                                data-dropdown-parent="#modalViewModal" data-control="select2"
                                data-placeholder="Pilih Jenis Hak Akses" required>
                                <option value="1">Hak Akses 1</option>
                                <option value="2">Hak Akses 2</option>
                                <option value="3">Hak Akses 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" id="validasi_password" disabled>Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End Modal Add Username --}}
@endsection
