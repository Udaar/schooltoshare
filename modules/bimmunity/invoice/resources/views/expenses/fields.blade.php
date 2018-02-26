<!-- User Id Field -->
{!! Form::hidden('user_id', Auth::user()->id) !!}
<!-- /User Id Field -->

<!-- Type Id Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('type_id', 'Select Type:', ['class' => 'ifm-grey']) !!}
        {!! Form::select('type_id', $types, null, ['class' => 'form-control select2 ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Type Id Field -->

<!-- Amount Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('amount', 'Amount:', ['class' => 'ifm-grey']) !!}
        {!! Form::number('amount', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Amount Field -->

<!-- Vendor Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('vendor_id', 'Select Vendor', ['class' => 'ifm-grey']) !!}
        {!! Form::select('vendor_id', $vendors, null, ['class' => 'form-control select2 ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Vendor Field -->

<!-- Time Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('time', 'Time:', ['class' => 'ifm-grey']) !!}
        <div class="input-group ifm-width-100 input-medium date date-picker" data-date-format="{{config('ifm.settings.date-format-bootstrap')}}" >
            {!! Form::text('time', null, ['class' => 'form-control ifm-border-light-grey-all','required'=>'required']) !!}
            <span class="input-group-btn">
                <button class="btn default ifm-main-bg ifm-white ifm-border-main-all" type="button">
                    <i class="fa fa-calendar"></i>
                </button>
            </span>
        </div>
    </div>
</div>
<!-- /Time Field -->

<!-- Currency Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('currency_id', 'Select Currency:', ['class' => 'ifm-grey']) !!}
        {!! Form::select('currency_id', $currencies, null, ['class' => 'form-control select2 ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Currency Field -->

<!-- Account Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('account_id', 'Select Account:', ['class' => 'ifm-grey']) !!}
        {!! Form::select('account_id', $accounts, null, ['class' => 'form-control select2 ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Account Field -->

<!-- Description Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('description', 'Description:', ['class' => 'ifm-grey']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control ifm-border-light-grey-all', 'rows' => '4']) !!}
    </div>
</div>
<!-- /Description Field -->

<!-- Notes Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('notes', 'Notes:', ['class' => 'ifm-grey']) !!}
        {!! Form::textarea('notes', null, ['class' => 'form-control ifm-border-light-grey-all', 'rows' => '4']) !!}
    </div>
</div>
<!-- /Notes Field -->

<!-- Invoice image Field -->
<div class="col-xs-12">
    <div class="form-group">
        {!! Form::label('profile', 'Invoice Picture', ['class' => 'ifm-grey']) !!}
        <div class="input-group">
            <span class="input-group-btn">
                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn ifm-btn-default ifm-grey-bg ifm-white">
                <i class="fa fa-picture-o"></i> Choose
                </a>
            </span>
            <input id="thumbnail" class="form-control input-wd-sm ifm-border-light-grey-all" type="text" name="profile">
        </div>
        <img id="holder" style="margin-top:15px;max-height:100px;">
    </div>
</div>
<!-- /Invoice image Field -->

<!-- Submit Field -->
<div class="col-xs-12">
    <div class="form-group ifm-form-actions">
        {!! Form::submit('Save', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
        <a href="{!! route('expenses.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
    </div>
</div>
<!-- /Submit Field -->

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(150);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

@section('scripts')
    <script type="text/javascript">
        $('.files-choose').filemanager('files',true);
        $('#lfm').filemanager('Files');
    </script>
@stop