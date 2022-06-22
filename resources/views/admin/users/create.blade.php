@extends('admin.layouts.master')
@section('title', __('public.title.title user create'))
@section('vendor-css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}">
@endsection

@section('Content')
    <div class="col-xxl">
        <div class="card mb-4">
            <h5 class="card-header">@lang('form.forms.form create users.create new staff')</h5>
            <form class="card-body" action="{{ route('admin.users.store') }}" method="POST">
                @csrf
                {{-- <h6 class="mb-b fw-normal">1. @lang('form.forms.form create users.information personal')</h6> --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="alignment-username">@lang('form.forms.form create users.name')</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" id="alignment-username" class="form-control text-start"
                            dir="ltr" value="{{ old('name') }}">
                        <div class="mt-1">
                            @error('name')
                                <span class="text-danger"> * {{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="alignment-username">@lang('form.forms.form create users.family')</label>
                    <div class="col-sm-9">
                        <input type="text" name="family" id="alignment-username" class="form-control text-start"
                            dir="ltr" value="{{ old('family') }}">
                        <div class="mt-1">
                            @error('family')
                                <span class="text-danger"> * {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="alignment-username">@lang('form.forms.form create users.father')</label>
                    <div class="col-sm-9">
                        <input type="text" name="father" id="alignment-username" class="form-control text-start"
                            dir="ltr" value="{{ old('father') }} ">
                        <div class="mt-1">
                            @error('father')
                                <span class="text-danger"> * {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="alignment-username">@lang('form.forms.form create users.mobile')</label>
                    <div class="col-sm-9">
                        <input type="text" name="mobile" id="alignment-username" class="form-control text-start"
                            dir="ltr" value="{{ old('mobile') }} ">
                        <div class="mt-1">
                            @error('mobile')
                                <span class="text-danger"> * {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="alignment-email">@lang('form.forms.form create users.code_meli')</label>
                    <div class="col-sm-9">
                        <div class="input-group input-group-merge">
                            <input type="text" name="code_meli" id="alignment-email" class="form-control text-start"
                                dir="ltr" placeholder="1272585" aria-label="john.doe"
                                aria-describedby="alignment-email2" value="{{ old('code_meli') }}">

                        </div>
                        <div class="mt-1">
                            @error('code_meli')
                                <span class="text-danger"> * {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="multicol-birthdate">@lang('form.forms.form create users.birthday')</label>
                    <div class="col-sm-9">
                        <input type="text" name="birthday" id="userDate" class="form-control dob-picker"
                            placeholder="YYYY/MM/DD" value="{{ old('birthday') }} ">
                        <div class="mt-1">
                            @error('birthday')
                                <span class="text-danger"> * {{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="row mb-3 form-password-toggle">
                    <label class="col-sm-2 col-form-label" for="alignment-password">@lang('form.forms.form create users.password')</label>
                    <div class="col-sm-9">
                        <div class="input-group input-group-merge">
                            <input type="password" name="password" id="alignment-password" class="form-control text-start"
                                dir="ltr" placeholder="············" aria-describedby="alignment-password2">
                            <span class="input-group-text cursor-pointer" id="alignment-password2"><i
                                    class="bx bx-hide"></i></span>
                        </div>
                        <div class="mt-1">
                            @error('password')
                                <span class="text-danger"> * {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-3 form-password-toggle">
                    <label class="col-sm-2 col-form-label" for="alignment-password">@lang('form.forms.form create users.password reply')</label>
                    <div class="col-sm-9">
                        <div class="input-group input-group-merge">
                            <input type="password" name="password_confirmation" id="alignment-password"
                                class="form-control text-start" dir="ltr" placeholder="············"
                                aria-describedby="alignment-password2">
                            <span class="input-group-text cursor-pointer" id="alignment-password2"><i
                                    class="bx bx-hide"></i></span>
                        </div>
                    </div>
                </div>

                {{-- <hr class="my-4 mx-n4">
                <h6 class="mb-3 fw-normal">2.@lang('form.forms.form create users.information account')</h6> --}}
                <div class="row mb-3 select2-primary">
                    <label class="col-sm-2 col-form-label" for="alignment-language">@lang('form.forms.form create users.roles')</label>
                    <div class="col-sm-9">
                        <select id="alignment-language" name="roles[]" class="select2 form-select" multiple>
                            @forelse ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->persian_name }}</option>

                            @empty
                                <p>@lang('form.forms.form create users.dont Roles')</p>
                            @endforelse
                        </select>
                        @error('roles')
                            <span class="text-danger"> * {{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-message">@lang('form.forms.form create users.address')</label>
                    <div class="col-sm-9">
                        <textarea id="basic-default-message" name="address" value="{{ old('address') }}" class="form-control text-start"
                            placeholder="@lang('form.forms.form create users.please write your address')" aria-describedby="basic-icon-default-message2"></textarea>
                        @error('address')
                            <span class="text-danger"> * {{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="pt-4">
                    <div class="row justify-content-end">
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary me-sm-2 me-1">@lang('form.forms.form create users.button save')</button>
                            <a href="{{ route('admin.users.index') }}"
                                class="btn btn-label-secondary">@lang('form.forms.form create users.button cansel')</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('vendor-js')
    <script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-select/i18n/defaults-fa_IR.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/jdate/jdate.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr-jdate.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/l10n/fa-jdate.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/i18n/fa.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
@endsection

@section('page-js')
    <script src="{{ asset('assets/js/form-wizard-numbered.js') }}"></script>
    <script src="{{ asset('assets/js/form-wizard-validation.js') }}"></script>

    <script>
        $("#userDate").flatpickr({
            monthSelectorType: 'static',
            locale: 'fa',
            altInput: true,
            altFormat: 'Y/m/d',
            disableMobile: true
        });
    </script>
@endsection
