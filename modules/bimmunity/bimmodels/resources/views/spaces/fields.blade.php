<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name', 'Name:', ['class' => 'ifm-grey']) !!}
    {!! Form::text('name', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <div class="form-actions">
        <div class="row  col-md-offset-0">
            {!! Form::submit('Save', ['class' => 'btn ifm-main-bg ifm-white']) !!}
            <a href="{!! route('spaces.index') !!}" class="btn ifm-light-grey-bg ifm-grey">Cancel</a>
        </div>
    </div>
</div>
