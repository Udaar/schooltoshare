<!-- Account Number Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('account_number', 'Account Number:', ['class' => 'ifm-grey']) !!}
        {!! Form::text('account_number', null, ['class' => 'form-control ifm-border-light-grey-all', 'required' => 'required','onkeypress'=>'return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 0))']) !!}
    </div>
</div>
<!-- /Account Number Field -->

<!-- Start Balance Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('start_balance', 'Start Balance:', ['class' => 'ifm-grey']) !!}
        {!! Form::text('start_balance', null, ['class' => 'form-control ifm-border-light-grey-all', 'required' => 'required','onkeypress'=>'return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 0) || (event.charCode == 46))']) !!}
    </div>
</div>
<!-- /Start Balance Field -->

<!-- Account Type Id Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('account_type_id', 'Account Type:', ['class' => 'ifm-grey']) !!}
        {!! Form::select('account_type_id', $accountTypes->pluck('name', 'id'), null, ['class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select an account type','required' => 'required']) !!}
    </div>
</div>
<!-- /Account Type Id Field -->

<!-- Bank Id Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('bank_id', 'Bank:', ['class' => 'ifm-grey']) !!}
        {!! Form::select('bank_id', $banks->pluck('name', 'id'), null, ['class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select an account type','required' => 'required']) !!}
    </div>
</div>
<!-- /Bank Id Field -->

<div class="col-xs-12">
    <div class="form-group ifm-form-actions">
        {!! Form::submit('Save', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
        <a href="{!! route('financeAccounts.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
    </div>
</div>

{{--<div class="container-fluid">
    <!-- Input Fields -->
    <div class="row">
        <div class="col-lg-6 col-xs-12">
            <div class="container-fluid">
                <!-- Account Number Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            {!! Form::label('account_number', 'Account Number:', ['class' => 'ifm-grey']) !!}
                            {!! Form::text('account_number', null, ['class' => 'form-control ifm-border-light-grey-all', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12">
            <div class="container-fluid">
                <!-- Start Balance Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            {!! Form::label('start_balance', 'Start Balance:', ['class' => 'ifm-grey']) !!}
                            {!! Form::number('start_balance', null, ['class' => 'form-control ifm-border-light-grey-all', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12">
            <div class="container-fluid">
                <!-- Account Type Id Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            {!! Form::label('account_type_id', 'Account Number:', ['class' => 'ifm-grey']) !!}
                            {!! Form::select('account_type_id', $accountTypes->pluck('name', 'id'), null, ['class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select an account type','required' => 'required']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12">
            <div class="container-fluid">
                <!-- Bank Id Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            {!! Form::label('bank_id', 'Bank:', ['class' => 'ifm-grey']) !!}
                            {!! Form::select('bank_id', $banks->pluck('name', 'id'), null, ['class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select an account type','required' => 'required']) !!}
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
                        <a href="{!! route('financeAccounts.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>--}}
