<!-- User Id Field -->
{!! Form::hidden('user_id', Auth::user()->id) !!}
<!-- /User Id Field -->

<!-- Name Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('name', 'Name:', ['class' => 'ifm-grey']) !!}
        {!! Form::text('name', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Name Field -->

<!-- Address Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('address', 'Address:', ['class' => 'ifm-grey']) !!}
        {!! Form::text('address', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Address Field -->

<!-- Submit Field -->
<div class="col-md-12">
    <div class="form-group ifm-form-actions">
        {!! Form::submit('Save', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
        <a href="{!! route('customers.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
    </div>
</div>
<!-- /Submit Field -->
