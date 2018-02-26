
<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $facility->name !!}</p>
</div>

<!-- Building Id Field -->
<div class="form-group">
    {!! Form::label('building_id', 'Building:') !!}
    <p>{!! $facility->building->name !!}</p>
</div>