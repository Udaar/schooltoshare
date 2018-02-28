
    <div class="col-xs-6">
        <div class="form-group col-sm-6 ifm-width-100">
            {!! Form::label('facility_id', 'Facility:', ['class' => 'ifm-grey']) !!}
            {!! Form::select('facility_id[]', $facilities->pluck('name','id'), isset($attachedfacilities)?$attachedfacilities:null, ['class' => 'form-control select2' ,'multiple' => 'multiple']) !!}
        </div>
    </div>
<!-- Building Id Field -->

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn ifm-main-bg ifm-white']) !!}
    <a href="{!! route('facilities.index') !!}" class="btn ifm-light-grey-bg ifm-grey">Cancel</a>
</div>
