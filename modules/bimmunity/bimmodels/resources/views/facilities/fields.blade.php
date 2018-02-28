
    <div class="col-xs-6">
        <div class="form-group col-sm-6 ifm-width-100">
            {!! Form::label('facility_id', 'Facility:', ['class' => 'ifm-grey']) !!}
            {!! Form::select('facility_id', $facilities->pluck('name','id'), null, ['class' => 'form-control select2']) !!}
        </div>
    </div>
<!-- Building Id Field -->
@if(\Auth::user()->type=='school')
<input type="hidden" name="building_id" value="{{\Auth::user()->school->id}}">
@else
<div class="form-group col-sm-6">
    {!! Form::label('building_id', 'Building:', ['class' => 'ifm-grey']) !!}
    {!! Form::select('building_id', $buildings->pluck('name','id'), null, ['class' => 'form-control ifm-border-light-grey-all select2']) !!}
</div>
@endif

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn ifm-main-bg ifm-white']) !!}
    <a href="{!! route('facilities.index') !!}" class="btn ifm-light-grey-bg ifm-grey">Cancel</a>
</div>
