<!-- Item Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('item_id', 'Item:', ['class' => 'ifm-grey']) !!}
        {!! Form::select('item_id', $items->pluck('name', 'id'), null, ['class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select an Item','required' => 'required']) !!}
    </div>
</div>
<!-- /Item Field -->

<!-- Item Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('discount', 'Discount:', ['class' => 'ifm-grey']) !!}
        {!! Form::text('discount', null, ['class' => 'form-control ifm-border-light-grey-all','onkeypress'=>'return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 0) || (event.charCode == 46))']) !!}
    </div>
</div>
<!-- /Item Field -->

<!-- Item Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('apply_tax', 'Apply Tax:', ['class' => 'ifm-grey']) !!}
        {!! Form::text('apply_tax', null, ['class' => 'form-control ifm-border-light-grey-all','onkeypress'=>'return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 0) || (event.charCode == 46))']) !!}
    </div>
</div>
<!-- /Item Field -->

<!-- Item Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('currency_id', 'Currency Name:', ['class' => 'ifm-grey']) !!}
        {!! Form::select('currency_id', $currencies, null, ['class' => 'form-control select2 ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Item Field -->

<!-- Cost Field -->
<div class="col-md-2">
    <div class="form-group money-input">
        <span class="fa fa-dollar dollar-icon"></span>
        {!! Form::label('cost', 'Cost:', ['class' => 'ifm-grey' ]) !!}
        {!! Form::text('cost', null, ['class' => 'form-control ifm-border-light-grey-all','required' => 'required','style' => 'padding-left:20px;','onkeypress'=>'return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 0) || (event.charCode == 46))']) !!}
    </div>
</div>
<!-- /Cost Field -->

<!-- Submit Field -->
<div class="col-md-4">
    <div class="form-group ifm-form-actions" style="margin-top:24px">
      {!! Form::submit('Save', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
      <a href="{!! route('itemCosts.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
    </div>
</div>
<!-- /Submit Field -->
