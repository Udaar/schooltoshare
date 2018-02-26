<!-- Item Name Field -->
<div class="col-md-6">
    <div class="form-group">
      {!! Form::label('item_id', 'Item:', ['class' => 'ifm-grey']) !!}
      {!! Form::select('item_id', $items->pluck('name', 'id'), null, ['class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select a Category', 'required' => 'required']) !!}
    </div>
</div>
<!-- /Item Name Field -->

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
      {!! Form::label('cost', 'Cost:', ['class' => 'ifm-grey']) !!}
      {!! Form::text('cost', null, ['class' => 'form-control ifm-border-light-grey-all', 'required' => 'required','style' => 'padding-left:20px;','onkeypress'=>'return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 0) || (event.charCode == 46))']) !!}
    </div>
</div>
<!-- /Cost Field -->

<div class="col-md-4">
    <div class="form-group ifm-form-actions" style="margin-top:24px">
      {!! Form::submit('Save', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
      <a href="{!! route('itemBuyPrices.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
    </div>
</div>

{{--<div class="container-fluid">
    <!-- Input Fields -->
    <div class="row">
        <div class="col-lg-6 col-xs-12">
            <div class="container-fluid ifm-no-padding-right">
                <!-- Name Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            {!! Form::label('item_id', 'Item:', ['class' => 'ifm-grey']) !!}
                            {!! Form::select('item_id', $items->pluck('name', 'id'), null, ['class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select Item', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12">
            <div class="container-fluid">
                <!-- Cost Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            {!! Form::label('cost', 'Cost:', ['class' => 'ifm-grey']) !!}
                            {!! Form::number('cost', null, ['class' => 'form-control ifm-border-light-grey-all', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Submit Field -->
    <div class="row">
        <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
            <div class="form-group col-sm-12 ifm-no-margin-bottom">
                <div class="form-actions ifm-no-padding-bottom ifm-border-light-grey-top">
                    <div class="row  col-md-offset-0">
                        {!! Form::submit('Save', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
                        <a href="{!! route('itemBuyPrices.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>--}}
