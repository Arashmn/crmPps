@extends('admin.layouts.master')
@section('title', __('public.title.title users'))
@section('vendor-css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
@endsection
@section('Content')
    <div class="row g-4 mb-4">
        <p class="text-light fw-semibold lh-1">@lang('table.Dadatable.user list')</p>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span class="secondary-font fw-medium">جلسه</span>
                            <div class="d-flex align-items-baseline mt-2">
                                <h4 class="mb-0 me-2">21,459</h4>
                                <small class="text-success">(+29%)</small>
                            </div>
                            <small>مجموع کاربران</small>
                        </div>
                        <span class="badge bg-label-primary rounded p-2">
                            <i class="bx bx-user bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span class="secondary-font fw-medium">کاربران ویژه</span>
                            <div class="d-flex align-items-baseline mt-2">
                                <h4 class="mb-0 me-2">4,567</h4>
                                <small class="text-success">(+18%)</small>
                            </div>
                            <small>تحلیل هفته اخیر </small>
                        </div>
                        <span class="badge bg-label-danger rounded p-2">
                            <i class="bx bx-user-plus bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Users List Table -->
    <div class="card">
        <div class="card-header border-bottom">
            <div class=" me-0 me-lg-2">
                <a href="{{ route('admin.users.create') }}" class="btn btn-primary text-white">کارمند جدید</a>
            </div>
            <div class="card-body">

                <div class="form-row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="sending_filter" class="col-form-label">@lang('table.Dadatable.search filter')</label>
                            <div id="name-filter"></div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
                    <div class="col-md-4 user_role"></div>
                    <div class="col-md-4 user_plan"></div>
                    <div class="col-md-4 user_status"></div>
                </div>
            </div>
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top" id="getUsers">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>@lang('table.Dadatable.users.name')</th>
                            <th>@lang('table.Dadatable.users.family')</th>
                            <th>@lang('table.Dadatable.users.father')</th>
                            <th>@lang('table.Dadatable.users.mobile')</th>
                            <th>@lang('table.Dadatable.users.code_meli')</th>
                            <th>@lang('table.Dadatable.users.birthday')</th>
                            <th>@lang('table.Dadatable.users.roles')</th>
                            <th>@lang('table.Dadatable.users.actions')</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $user)
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->family }}</td>
                            <td>{{ $user->father }}</td>
                            <td>{{ $user->mobile }}</td>
                            <td>{{ $user->code_meli }}</td>
                            <td>{{ $user->birthday }}</td>
                            <td>{{ $user->meli_code }}</td>
                            <td>
                                @foreach ($user->roles as $role)
                                    {{ $role->label }}
                                @endforeach
                            </td>
                        @endforeach

                    </tbody>

                </table>
            </div>

        </div>
    </div>
@endsection
@section('vendor-js')
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables/i18n/fa.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-buttons/datatables-buttons.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/jszip/jszip.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/pdfmake/pdfmake.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-buttons/buttons.html5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-buttons/buttons.print.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/i18n/fa.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
@endsection

@section('page-js')
    <!-- DataTable-->
    <script>
        function deleteCategory(FormID) {
            swal({
                    title: 'از حذف این رکورد مطمئن هستید ؟',
                    text: "اطلاعات حذف شده دیگر قابل بازیابی نیست !",
                    icon: "warning",
                    dangerMode: true,
                    buttons: {
                        confirm: 'بله',
                        cancel: 'خیر'
                    },
                })
                .then(function(willDelete) {
                    if (willDelete) {
                        $('#deleteCategoryForm' + FormID).submit();
                    }
                });
        }
        $(document).ready(function() {
            $('#getUsers').DataTable({
                initComplete: function() {
                    this.api().columns(2).every(function() {
                        var column = this;
                        var select = $(
                                '<select class="form-control"><option value="">همه</option></select>'
                            )
                            .appendTo($("#name-filter").empty())
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );
                                column
                                    .search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                            });
                        column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d +
                                '</option>')
                        });
                    });
                },
                "pageLength": 10,
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Persian.json"
                },

            });
        });
    </script>

    {{-- <script src="{{ asset('assets/js/app-user-list.js') }}"></script> --}}

@endsection
