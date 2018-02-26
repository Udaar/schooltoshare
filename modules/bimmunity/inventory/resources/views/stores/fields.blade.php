<!-- Number Field -->
<div class="col-md-6">
    <div class="form-group">
      {!! Form::label('number', 'Number:', ['class' => 'ifm-grey']) !!}
      {!! Form::text('number', null, ['class' => 'form-control ifm-border-light-grey-all', 'required' => 'required']) !!}
    </div>
</div>
<!-- /Number Field -->

<!-- Name Field -->
<div class="col-md-6">
    <div class="form-group">
      {!! Form::label('name', 'Name:', ['class' => 'ifm-grey']) !!}
      {!! Form::text('name', null, ['class' => 'form-control ifm-border-light-grey-all', 'required' => 'required']) !!}
    </div>
</div>
<!-- /Name Field -->

<!-- Position Field -->
<div class="col-md-6">
    <div class="form-group">
      {!! Form::label('position', 'Position:', ['class' => 'ifm-grey', 'required' => 'required']) !!}
      {!! Form::text('position', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Position Field -->

<!-- Responsible By Field -->
<div class="col-md-6">
    <div class="form-group">
      {!! Form::label('responsible_by', 'Responsible By:', ['class' => 'ifm-grey']) !!}
      {!! Form::select('responsible_by', $users->pluck('name', 'id'), null, ['class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select a Responsible', 'required' => 'required']) !!}
    </div>
</div>
<!-- /Responsible By Field -->

<!-- Submit Field -->
<div class="col-xs-12">
    <div class="form-group ifm-form-actions">
      {!! Form::submit('Save', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
      <a href="{!! route('stores.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
    </div>
</div>
<!-- /Submit Field -->

{{--<div class="container-fluid">
    <!-- Input Fields -->
    <div class="row">
        <div class="col-lg-6 col-xs-12">
            <div class="container-fluid">
                <!-- Number Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            {!! Form::label('number', 'Number:', ['class' => 'ifm-grey']) !!}
                            {!! Form::text('number', null, ['class' => 'form-control ifm-border-light-grey-all', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12">
            <div class="container-fluid ifm-no-padding-left ifm-no-padding-right">
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
                <!-- Position Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            {!! Form::label('position', 'Position:', ['class' => 'ifm-grey', 'required' => 'required']) !!}
                            {!! Form::text('position', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12">
            <div class="container-fluid ifm-no-padding-left ifm-no-padding-right">
                <!-- Responsible By Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            {!! Form::label('responsible_by', 'Responsible By:', ['class' => 'ifm-grey']) !!}
                            {!! Form::select('responsible_by', $users->pluck('name', 'id'), null, ['class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select a Responsible', 'required' => 'required']) !!}
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
                        <a href="{!! route('stores.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>--}}
