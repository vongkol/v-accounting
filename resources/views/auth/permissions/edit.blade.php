@extends('layouts.admin')

@section('title', trans('general.title.edit', ['type' => trans_choice('general.permissions', 1)]))

@section('content')
    <!-- Default box -->
    <div class="box box-success">
        {!! Form::model($permission, [
            'method' => 'PATCH',
            'url' => ['auth/permissions', $permission->id],
            'role' => 'form'
        ]) !!}

        <div class="box-body">
            {{ Form::textGroup('display_name', trans('general.name'), 'id-card-o') }}

            {{ Form::textGroup('name', trans('general.code'), 'code') }}

            {{ Form::textareaGroup('description', trans('general.description')) }}
        </div>
        <!-- /.box-body -->

        @permission('update-auth-permissions')
        <div class="box-footer">
            {{ Form::saveButtons('auth/permissions') }}
        </div>
        <!-- /.box-footer -->
        @endpermission

        {!! Form::close() !!}
    </div>
@endsection
@push('scripts')
<script>
    $(document).ready(function(){
        $("ul.sidebar-menu li").removeClass('active');
        $("ul.sidebar-menu li").removeClass("current");
        $("#menu_security").addClass('active');
        $("#menu_permission").addClass('current');
    });
</script>
@endpush