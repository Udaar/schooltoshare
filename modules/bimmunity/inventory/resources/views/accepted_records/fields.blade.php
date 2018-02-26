<!-- Accepted By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('accepted_by', 'Accepted By:') !!}
    {!! Form::number('accepted_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Accepted Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('accepted_date', 'Accepted Date:') !!}
    {!! Form::date('accepted_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Related Module Field -->
<div class="form-group col-sm-6">
    {!! Form::label('related_module', 'Related Module:') !!}
    {!! Form::text('related_module', null, ['class' => 'form-control']) !!}
</div>

<!-- Related Module Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('related_module_id', 'Related Module Id:') !!}
    {!! Form::number('related_module_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Notes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('notes', 'Notes:') !!}
    {!! Form::textarea('notes', null, ['class' => 'form-control', 'rows' => '5']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <div class="form-actions">
        <div class="row  col-md-offset-0">
            {!! Form::submit('Save', ['class' => 'btn green']) !!}
            <a href="{!! route('acceptedRecords.index') !!}" class="btn btn-default">Cancel</a>
        </div>
    </div>
</div>
