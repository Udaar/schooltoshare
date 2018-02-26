<!-- Name Field -->
<div class="col-xs-12">
    <div class="form-group">
        {!! Form::label('name', 'Name:', ['class' => 'ifm-grey']) !!}
        {!! Form::text('name', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Name Field -->

<!-- Submit Field -->
<div class="col-xs-12">
    <div class="form-group ifm-form-actions">
        {!! Form::submit('Save', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
        <a href="{!! route('invoice_statuses.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
    </div>
</div>
<!-- /Submit Field -->
