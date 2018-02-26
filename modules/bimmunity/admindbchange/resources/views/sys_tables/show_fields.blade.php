<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $sysTables->id !!}</p>
</div>

<!-- Table Original Name Field -->
<div class="form-group">
    {!! Form::label('table_original_name', 'Table Original Name:') !!}
    <p>{!! $sysTables->table_original_name !!}</p>
</div>

<!-- Table Admin Name Field -->
<div class="form-group">
    {!! Form::label('table_admin_name', 'Table Admin Name:') !!}
    <p>{!! $sysTables->table_admin_name !!}</p>
</div>

<!-- Table Admin Name Field -->
<div class="form-group">
    {!! Form::label('table_admin_module', 'Module Name:') !!}
    <p>{!! $sysTables->adminModule->module_name !!}</p>
</div>

<!-- Table Admin Name Field -->
<div class="form-group">
    {!! Form::label('table_model_name', 'Model Name:') !!}
    <p>{!! $sysTables->table_model_name !!}</p>
</div>

{{--<!-- Description Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('description', 'Description:') !!}--}}
    {{--<p>{!! $sysTables->description !!}</p>--}}
{{--</div>--}}

{{--<!-- Created By Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('created_by', 'Created By:') !!}--}}
    {{--<p>{!! $sysTables->created_by !!}</p>--}}
{{--</div>--}}

{{--<!-- Element Status Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('element_status', 'Element Status:') !!}--}}
    {{--<p>{!! $sysTables->element_status !!}</p>--}}
{{--</div>--}}

{{--<!-- Deleted At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('deleted_at', 'Deleted At:') !!}--}}
    {{--<p>{!! $sysTables->deleted_at !!}</p>--}}
{{--</div>--}}

{{--<!-- Created At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('created_at', 'Created At:') !!}--}}
    {{--<p>{!! $sysTables->created_at !!}</p>--}}
{{--</div>--}}

{{--<!-- Updated At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('updated_at', 'Updated At:') !!}--}}
    {{--<p>{!! $sysTables->updated_at !!}</p>--}}
{{--</div>--}}

