<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $sysColumns->id !!}</p>
</div>

<!-- Column Original Name Field -->
<div class="form-group">
    {!! Form::label('column_original_name', 'Column Original Name:') !!}
    <p>{!! $sysColumns->column_original_name !!}</p>
</div>

<!-- Column Admin Name Field -->
<div class="form-group">
    {!! Form::label('column_admin_name', 'Column Admin Name:') !!}
    <p>{!! $sysColumns->column_admin_name !!}</p>
</div>

<!-- Table Id Field -->
<div class="form-group">
    {!! Form::label('table_id', 'Table:') !!}
    <p>{!! $sysColumns->adminTable->table_admin_name !!}</p>
</div>

<!-- Column Admin Name Field -->
<div class="form-group">
    {!! Form::label('joined_table', 'Joined Table:') !!}
    <p>{!! $sysColumns->joined_table!=''?$sysColumns->joinedTable->table_admin_name:'' !!}</p>
</div>

<!-- Table Id Field -->
<div class="form-group">
    {!! Form::label('joined_column', 'Joined Column:') !!}
    <p>{!! $sysColumns->joined_column !!}</p>
</div>

{{--<!-- Description Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('description', 'Description:') !!}--}}
    {{--<p>{!! $sysColumns->description !!}</p>--}}
{{--</div>--}}

{{--<!-- Created By Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('created_by', 'Created By:') !!}--}}
    {{--<p>{!! $sysColumns->created_by !!}</p>--}}
{{--</div>--}}

{{--<!-- Element Status Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('element_status', 'Element Status:') !!}--}}
    {{--<p>{!! $sysColumns->element_status !!}</p>--}}
{{--</div>--}}

{{--<!-- Deleted At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('deleted_at', 'Deleted At:') !!}--}}
    {{--<p>{!! $sysColumns->deleted_at !!}</p>--}}
{{--</div>--}}

{{--<!-- Created At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('created_at', 'Created At:') !!}--}}
    {{--<p>{!! $sysColumns->created_at !!}</p>--}}
{{--</div>--}}

{{--<!-- Updated At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('updated_at', 'Updated At:') !!}--}}
    {{--<p>{!! $sysColumns->updated_at !!}</p>--}}
{{--</div>--}}

