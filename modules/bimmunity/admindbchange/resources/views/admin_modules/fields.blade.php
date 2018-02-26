<!-- Module Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('module_name', 'Module Name:') !!}
    {!! Form::text('module_name', null, ['class' => 'form-control']) !!}
</div>

{{--<!-- Description Field -->--}}
{{--<div class="form-group col-sm-12 col-lg-12">--}}
    {{--{!! Form::label('description', 'Description:') !!}--}}
    {{--{!! Form::textarea('description', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

{{--<!-- Created By Field -->--}}
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('created_by', 'Created By:') !!}--}}
    {{--{!! Form::number('created_by', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

{{--<!-- Element Status Field -->--}}
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('element_status', 'Element Status:') !!}--}}
    {{--<label class="checkbox-inline">--}}
        {{--{!! Form::hidden('element_status', false) !!}--}}
        {{--{!! Form::checkbox('element_status', '1', null) !!} 1--}}
    {{--</label>--}}
{{--</div>--}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('adminModules.index') !!}" class="btn btn-default">Cancel</a>
</div>
