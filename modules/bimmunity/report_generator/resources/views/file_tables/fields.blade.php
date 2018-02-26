<!-- Table Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('table_name', 'Table Name:') !!}
    {!! Form::text('table_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Table Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('table_slug', 'Table Slug:') !!}
    {!! Form::text('table_slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '5']) !!}
</div>

<!-- Created By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_by', 'Created By:') !!}
    {!! Form::number('created_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Element Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('element_status', 'Element Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('element_status', false) !!}
        {!! Form::checkbox('element_status', 1, null) !!} $VALUE$
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <div class="form-actions">
        <div class="row  col-md-offset-0">
            {!! Form::submit('Save', ['class' => 'btn green']) !!}
            <a href="{!! route('fileTables.index') !!}" class="btn btn-default">Cancel</a>
        </div>
    </div>
</div>
