<!-- Empolyeeid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('empolyeeid', 'Empolyeeid:') !!}
    {!! Form::number('empolyeeid', null, ['class' => 'form-control']) !!}
</div>

<!-- Parentid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parentid', 'Parentid:') !!}
    {!! Form::number('parentid', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <div class="form-actions">
        <div class="row  col-md-offset-0">
            {!! Form::submit('Save', ['class' => 'btn green']) !!}
            <a href="{!! route('buildings.index') !!}" class="btn btn-default">Cancel</a>
        </div>
    </div>
</div>
