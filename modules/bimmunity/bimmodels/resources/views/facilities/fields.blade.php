<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:', ['class' => 'ifm-grey']) !!}
    {!! Form::text('name', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
</div>

<!-- Building Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('building_id', 'Building:', ['class' => 'ifm-grey']) !!}
    {!! Form::select('building_id', $buildings->pluck('name','id'), null, ['class' => 'form-control ifm-border-light-grey-all select2']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn ifm-main-bg ifm-white']) !!}
    <a href="{!! route('facilities.index') !!}" class="btn ifm-light-grey-bg ifm-grey">Cancel</a>
</div>
