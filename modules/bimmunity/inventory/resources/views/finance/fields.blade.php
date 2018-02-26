<div class="container-fluid">
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
    </div>
    <!-- Submit Field -->
    <div class="row">
        <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
            <div class="form-group col-sm-12 ifm-no-margin-bottom">
                <div class="form-actions ifm-no-padding-bottom ifm-border-light-grey-top">
                    <div class="row  col-md-offset-0">
                        {!! Form::submit('Save', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
                        <a href="{!! route('banks.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
