@extends('admin.layouts.master')
@section('title', __('public.title.title users'))
@section('vendor-css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
@endsection
@section('title-li')
    <li class="breadcrumb-item"><a href="">لیست کاربران</a> </li>
@endsection
@section('Content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row g-4 mb-4">
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
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span class="secondary-font fw-medium">کاربران فعال</span>
                                <div class="d-flex align-items-baseline mt-2">
                                    <h4 class="mb-0 me-2">19,860</h4>
                                    <small class="text-danger">(-14%)</small>
                                </div>
                                <small>تحلیل هفته اخیر</small>
                            </div>
                            <span class="badge bg-label-success rounded p-2">
                                <i class="bx bx-group bx-sm"></i>
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
                                <span class="secondary-font fw-medium">کاربران در انتظار</span>
                                <div class="d-flex align-items-baseline mt-2">
                                    <h4 class="mb-0 me-2">237</h4>
                                    <small class="text-success">(+42%)</small>
                                </div>
                                <small>تحلیل هفته اخیر</small>
                            </div>
                            <span class="badge bg-label-warning rounded p-2">
                                <i class="bx bx-user-voice bx-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Users List Table -->
        <div class="card">
            
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top">
                    <thead>
                        <tr>
                            <th></th>
                            <th>کاربر</th>
                            <th>نقش</th>
                            <th>طرح</th>
                            <th>صورتحساب</th>
                            <th>وضعیت</th>
                            <th>عمل‌ها</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <!-- Offcanvas to add new user -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser"
                aria-labelledby="offcanvasAddUserLabel">
                <div class="offcanvas-header border-bottom">
                    <h6 id="offcanvasAddUserLabel" class="offcanvas-title">افزودن کاربر</h6>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body mx-0 flex-grow-0">
                    <form class="add-new-user pt-0" id="addNewUserForm" onsubmit="return false">
                        <div class="mb-3">
                            <label class="form-label" for="add-user-fullname">نام کامل</label>
                            <input type="text" class="form-control" id="add-user-fullname" placeholder="جان اسنو"
                                name="userFullname" aria-label="John Doe">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="add-user-email">ایمیل</label>
                            <input type="text" id="add-user-email" class="form-control text-start" dir="ltr"
                                placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="userEmail">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="add-user-contact">تماس</label>
                            <input type="text" id="add-user-contact" class="form-control phone-mask"
                                placeholder="+1 (609) 988-44-11" aria-label="john.doe@example.com" name="userContact">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="add-user-company">شرکت</label>
                            <input type="text" id="add-user-company" class="form-control"
                                placeholder="توسعه دهنده وب" aria-label="jdoe1" name="companyName">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="country">کشور</label>
                            <select id="country" class="select2 form-select">
                                <option value="">انتخاب</option>
                                <option value="Australia">استرالیا</option>
                                <option value="Bangladesh">بنگلادش</option>
                                <option value="Belarus">بلاروس</option>
                                <option value="Brazil">برزیل</option>
                                <option value="Canada">کانادا</option>
                                <option value="China">چین</option>
                                <option value="France">فرانسه</option>
                                <option value="Germany">آلمان</option>
                                <option value="India">هندوستان</option>
                                <option value="Indonesia">اندونزی</option>
                                <option value="Iran">ایران</option>
                                <option value="Italy">ایتالیا</option>
                                <option value="Japan">ژاپن</option>
                                <option value="Korea">کره جنوبی</option>
                                <option value="Mexico">مکزیک</option>
                                <option value="Philippines">فیلیپین</option>
                                <option value="Russia">روسیه</option>
                                <option value="South Africa">آفریقای جنوبی</option>
                                <option value="Thailand">تایلند</option>
                                <option value="Turkey">ترکیه</option>
                                <option value="Ukraine">اوکراین</option>
                                <option value="United Arab Emirates">امارات</option>
                                <option value="United Kingdom">انگلستان</option>
                                <option value="United States">ایالات متحده</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="user-role">نقش کاربر</label>
                            <select id="user-role" class="form-select">
                                <option value="subscriber">مشترک</option>
                                <option value="editor">ویرایشگر</option>
                                <option value="maintainer">نگهدارنده</option>
                                <option value="author">نویسنده</option>
                                <option value="admin">مدیر</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="user-plan">انتخاب پلن</label>
                            <select id="user-plan" class="form-select">
                                <option value="basic">پایه</option>
                                <option value="enterprise">سازمان</option>
                                <option value="company">شرکت</option>
                                <option value="team">تیم</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">ثبت</button>
                        <button type="reset" class="btn btn-label-secondary"
                            data-bs-dismiss="offcanvas">انصراف</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('vendor-js')
    <script src="{{ asset('assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/responsive.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
@endsection
@section('script')
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
            $('#usersTable').DataTable({
                initComplete: function() {
                    this.api().columns(5).every(function() {
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
                "pageLength": 50,
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Persian.json"
                },
            });
        });
    </script>
@endsection
