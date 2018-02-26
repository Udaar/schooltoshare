<!-- Name Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('name', 'Name:', ['class' => 'ifm-grey']) !!}
        {!! Form::text('name', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Name Field -->

<!-- Type Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('type', 'Type:', ['class' => 'ifm-grey']) !!}
        {!! Form::select('type', ['Debit'=>'Debit','Credit'=>'Crebit','Cash'=>'Cash','Bank Account'=>'Bank Account'], null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Type Field -->

<!-- Balance Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('balance', 'Balance:', ['class' => 'ifm-grey']) !!}
        {!! Form::number('balance', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Balance Field -->

<!-- Number Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('number', 'Number:', ['class' => 'ifm-grey']) !!}
        {!! Form::number('number', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Number Field -->

<!-- Currency Field -->

<div class="col-{{ ($flag)?'xs-12':'md-6'  }}">
    <div class="form-group">
        {!! Form::label('currency', 'Currency:', ['class' => 'ifm-grey']) !!}
        {!! Form::select('currency',$currencies, null, ['class' => 'select2 form-control ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Currency Field -->

<!-- Current Balance Field -->
@if(isset($account))
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('currentbalance', 'Current Balance:', ['class' => 'ifm-grey']) !!}
            {!! Form::label('currentbalance', $account->finalbalance, ['class' => 'form-control ifm-grey ifm-border-light-grey-all', 'disabled' => 'true']) !!}
        </div>
    </div>
@endif
<!-- /Current Balance Field -->

<!-- Submit Field -->
<div class="col-xs-12">
    <div class="form-group ifm-form-actions">
        {!! Form::submit('Save', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
        <a href="{!! route('currencies.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
    </div>
</div>
<!-- /Submit Field -->
