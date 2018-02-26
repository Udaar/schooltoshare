<!-- Name Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('name', 'Name:', ['class' => 'ifm-grey']) !!}
        {!! Form::text('name', null, ['class' => 'form-control ifm-border-light-grey-all', 'required' => 'required']) !!}
    </div>
</div>
<!-- /Name Field -->

<!-- Debit Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('debit', 'Debit:', ['class' => 'ifm-grey']) !!}
        {!! Form::text('debit', null, ['class' => 'form-control ifm-border-light-grey-all','id'=>'debit', 'required' => 'required','onkeypress'=>'return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 0) || (event.charCode == 46))']) !!}
    </div>
</div>
<!-- /Debit Field -->

<!-- Credit Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('credit', 'Credit:', ['class' => 'ifm-grey']) !!}
        {!! Form::text('credit', null, ['class' => 'form-control ifm-border-light-grey-all','id'=>'credit', 'required' => 'required','onkeypress'=>'return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 0) || (event.charCode == 46))']) !!}
    </div>
</div>
<!-- /Credit Field -->

<!-- Total Balance Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('total_balance', 'Total Balance:', ['class' => 'ifm-grey']) !!}
        {!! Form::text('total_balance', null, ['class' => 'form-control ifm-border-light-grey-all','id'=>'total', 'required' => 'required','onkeypress'=>'return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 0) || (event.charCode == 46))']) !!}
    </div>
</div>
<!-- /Total Balance Field -->

<!-- Submit Field -->
<div class="col-xs-12">
    <div class="form-group ifm-form-actions">
        {!! Form::submit('Save', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
        <a href="{!! route('myCompanies.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
    </div>
</div>
<!-- /Submit Field -->

{{--<div class="container-fluid">
    <!-- Input Fields -->
    <div class="row">
        <div class="col-lg-6 col-xs-12">
            <div class="container-fluid">
                <!-- Name Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            {!! Form::label('name', 'Name:', ['class' => 'ifm-grey']) !!}
                            {!! Form::text('name', null, ['class' => 'form-control ifm-border-light-grey-all', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12">
            <div class="container-fluid">
                <!-- Debit Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            {!! Form::label('debit', 'Debit:', ['class' => 'ifm-grey']) !!}
                            {!! Form::number('debit', null, ['class' => 'form-control ifm-border-light-grey-all','id'=>'debit', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12">
            <div class="container-fluid">
                <!-- Credit Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            {!! Form::label('credit', 'Credit:', ['class' => 'ifm-grey']) !!}
                            {!! Form::number('credit', null, ['class' => 'form-control ifm-border-light-grey-all','id'=>'credit', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12">
            <div class="container-fluid">
                <!-- Total Balance Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            {!! Form::label('total_balance', 'Total Balance:', ['class' => 'ifm-grey']) !!}
                            {!! Form::number('total_balance', null, ['class' => 'form-control ifm-border-light-grey-all','id'=>'total', 'required' => 'required','readonly']) !!}
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
                        <a href="{!! route('myCompanies.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>--}}


