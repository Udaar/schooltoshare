<!-- Name Field -->
<div class="col-xs-12">
    <div class="form-group">
        {!! Form::label('name', 'Name:', ['class' => 'ifm-grey']) !!}
        {!! Form::text('name', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Name Field -->

<!-- Unit Cost Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('unit_cost', 'Unit Cost:', ['class' => 'ifm-grey']) !!}
        {!! Form::number('unit_cost', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Unit Cost Field -->

<!-- Discount Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('discount', 'Discount:', ['class' => 'ifm-grey']) !!}
        {!! Form::number('discount', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Discount Field -->

<!-- Apply Tax Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('apply_tax', 'Apply Tax:', ['class' => 'ifm-grey']) !!}
        {!! Form::number('apply_tax', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Apply Tax Field -->

<!-- Currency Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('currency_id', 'Currency Name:', ['class' => 'ifm-grey']) !!}
        {!! Form::select('currency_id', $currencies, null, ['class' => 'form-control select2 ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Currency Field -->

<!-- Discription Field -->
<div class="col-md-12">
    <div class="form-group">
        {!! Form::label('description', 'Description:', ['class' => 'ifm-grey']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control ifm-border-light-grey-all', 'rows' => '4']) !!}
    </div>
</div>
<!-- /Discription Field -->

<!-- Submit Field -->
<div class="col-md-12">
    <div class="form-group ifm-form-actions">
        {!! Form::submit('Save', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
        <a href="{!! route('products.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
    </div>
</div>
<!-- /Submit Field -->
