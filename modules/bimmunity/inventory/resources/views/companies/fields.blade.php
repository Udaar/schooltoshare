<!-- Name Field -->
<div class="col-sm-6">
    <div class="form-group">
        {!! Form::label('name', 'Name:', ['class' => 'ifm-grey']) !!}
        {!! Form::text('name', null, ['class' => 'form-control ifm-border-light-grey-all', 'required' => 'required']) !!}
    </div>
</div>
<!-- /Name Field -->

<!-- Company Type Field -->
<div class="col-sm-6">
    <div class="form-group">
        {!! Form::label('company_type', 'Company Type:', ['class' => 'ifm-grey']) !!}
        {!! Form::select('company_type', ['supplier'=>'supplier', 'customer'=>'customer', 'both'=>'both'], null, ['class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select a company type','required' => 'required']) !!}
    </div>
</div>
<!-- /Company Type Field -->

<!-- Email Field -->
<div class="col-sm-6">
    <div class="form-group">
        {!! Form::label('email', 'Email:', ['class' => 'ifm-grey', 'required' => 'required']) !!}
        {!! Form::text('email', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Email Field -->

<!-- Phone Field -->
<div class="col-sm-6">
    <div class="form-group">
        {!! Form::label('phone', 'Phone:', ['class' => 'ifm-grey']) !!}
        {!! Form::text('phone', null, ['class' => 'form-control ifm-border-light-grey-all mask_phone', 'placeholder' => '+971-_-___-____','onkeypress'=>'return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 0))']) !!}
    </div>
</div>
<!-- /Phone Field -->

<!-- Mobile_1 Field -->
<div class="col-sm-6">
    <div class="form-group">
        {!! Form::label('mobile1', 'First Mobile:', ['class' => 'ifm-grey']) !!}
        {!! Form::text('mobile1', null, ['class' => 'form-control ifm-border-light-grey-all mask_mobile','required' => 'required', 'placeholder' => '+971-5_-___-____','onkeypress'=>'return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 0))']) !!}
    </div>
</div>
<!-- /Mobile_1 Field -->

<!-- Mobile_2 Field -->
<div class="col-sm-6">
    <div class="form-group">
        {!! Form::label('mobile2', 'Second Mobile:', ['class' => 'ifm-grey']) !!}
        {!! Form::text('mobile2', null, ['class' => 'form-control ifm-border-light-grey-all mask_mobile','placeholder' => '+971-5_-___-____','onkeypress'=>'return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 0))']) !!}
    </div>
</div>
<!-- /Mobile_2 Field -->

<!-- Mobile_3 Field -->
<div class="col-sm-6">
    <div class="form-group">
        {!! Form::label('mobile3', 'Third Mobile:', ['class' => 'ifm-grey']) !!}
        {!! Form::text('mobile3', null, ['class' => 'form-control ifm-border-light-grey-all mask_mobile', 'placeholder' => '+971-5_-___-____','onkeypress'=>'return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 0))']) !!}
    </div>
</div>
<!-- /Mobile_3 Field -->

<!-- Fax Field -->
<div class="col-sm-6">
    <div class="form-group">
        {!! Form::label('fax', 'Fax:', ['class' => 'ifm-grey']) !!}
        {!! Form::text('fax', null, ['class' => 'form-control ifm-border-light-grey-all mask_fax', 'placeholder' => '+971-_-___-____','onkeypress'=>'return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 0))']) !!}
    </div>
</div>
<!-- /Fax Field -->

<!-- Address Field -->
<div class="col-md-12">
    <div class="form-group">
        {!! Form::label('address', 'Address:', ['class' => 'ifm-grey']) !!}
        {!! Form::textarea('address', null, ['class' => 'form-control ifm-border-light-grey-all textarea-sm']) !!}
    </div>
</div>
<!-- /Address Field -->

<!-- Submit Field -->
<div class="col-xs-12">
    <div class="form-group ifm-form-actions">
        {!! Form::submit('Save', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
        <a href="{!! route('companies.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
    </div>
</div>
