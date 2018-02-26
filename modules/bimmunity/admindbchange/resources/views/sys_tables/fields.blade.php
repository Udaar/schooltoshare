<!-- Table Original Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('module_id', 'Module Name:') !!}
    {!! Form::select('module_id', $modules->pluck('module_name', 'id'), null, ['id'=>'module_id','class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select Module','required' => 'required']) !!}
    </div>
</div>

<!-- Table Original Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('table_original_name', 'Table Original Name:') !!}
    {!! Form::select('table_original_name', $tables, null, ['id'=>'table_original_name','class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select Table','required' => 'required']) !!}
    </div>
</div>

<!-- Table Admin Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('table_admin_name', 'Table Admin Name:') !!}
    {!! Form::text('table_admin_name', null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Table Admin Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('table_model_name', 'Table Model Name:') !!}
    {!! Form::text('table_model_name', null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Description Field -->
{{--<div class="form-group col-sm-12 col-lg-12">--}}
    {{--{!! Form::label('description', 'Description:') !!}--}}
    {{--{!! Form::textarea('description', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Created By Field -->
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('created_by', 'Created By:') !!}--}}
    {{--{!! Form::number('created_by', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Element Status Field -->
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
    <a href="{!! route('sysTables.index') !!}" class="btn btn-default">Cancel</a>
</div>
