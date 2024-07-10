@extends('layout.admin.app')
@section('title', __('global.add_admin'))

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/admin/admins') }}">{{ __('global.admins') }}</a></li>
    <li class="breadcrumb-item">@yield('title')</li>
@endsection

@section('content')
    <form action="{{ route('roles.store') }}" method="post">@csrf
        <div class="row">
            <div class="col-xl-6">

                <label>{{ __('global.role_name') }} <strong class="text-danger">*</strong></label>
                <input type="text" class="form-control" name="name" required="required" value="{{ old('name') }}" />
                <br />

            </div>
            <div class="col-xl-6">

                <label>{{ __('global.admin_name') }} <strong class="text-danger">*</strong></label>
                <select class="form-control" name="admins[]" multiple required="required">
                    @foreach ($admins as $admin)
                        <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                    @endforeach
                </select>
                <br />

            </div>

            <div class="col-12 text-center">
                <button onclick="if(confirm(`{{ __('global.alert_create') }}`)){return true;}else{return false;}"
                    class="btn btn-primary">{{ __('global.btn_create') }}</button>
            </div>
        </div>{{-- End Row --}}
        <div class="row">

            @foreach (config('permissions.roles') as $key => $values)
                <div class="col-4">

                    <div class="card" style="width: 18rem; padding: 10px 5px;">
                        @foreach ($values as $value)
                        <div class="parent" style="display:flex; gap: 20px">
                            <label for="">{{ $value }}</label>
                            <input type="checkbox" name="permissions[]" value="{{ $value . "-" . $key }}"  id="">
                        </div>
                        @endforeach
                    </div>

                </div>
            @endforeach
        </div>{{-- End Row --}}
    </form>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.pass_show').append('<span class="ptxt">{{ __('global.show') }}</span>');
        });
        $(document).on('click', '.pass_show .ptxt', function() {
            $(this).text($(this).text() == "{{ __('global.show') }}" ? "{{ __('global.hide') }}" :
                "{{ __('global.show') }}");
            $(this).prev().attr('type', function(index, attr) {
                return attr == 'password' ? 'text' : 'password';
            });
        });
        $('#admin-logo').filemanager('file');
    </script>
@endsection
