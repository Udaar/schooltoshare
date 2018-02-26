<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $equipment->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $equipment->name !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $equipment->description !!}</p>
</div>

<!-- Barcode Field -->
<div class="form-group">
    {!! Form::label('barcode', 'Barcode:') !!}
    <p>{!! $equipment->barcode !!}</p>
</div>

<!-- Zone Price Field -->
<div class="form-group">
    {!! Form::label('zone_price', 'Zone Price:') !!}
    <p>{!! $equipment->zone_price !!}</p>
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{!! $equipment->category_id !!}</p>
</div>

<!-- Minmum Quantity Field -->
<div class="form-group">
    {!! Form::label('minmum_quantity', 'Minmum Quantity:') !!}
    <p>{!! $equipment->minmum_quantity !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $equipment->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $equipment->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $equipment->deleted_at !!}</p>
</div>

