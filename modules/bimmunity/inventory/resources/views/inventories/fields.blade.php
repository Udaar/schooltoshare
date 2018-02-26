<!-- Store Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('store_id', 'Store Id:') !!}
    <select class="form-control" name="store_id" required="required">
        @foreach($stores as $store)
            <option value="{{$store->id}}">{{$store->name}}</option>
        @endforeach
      </select>
</div>

<!-- Item Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('item_id', 'Item Id:') !!}
    <select class="form-control" name="item_id" required="required">
        @foreach($items as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
      </select>
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity', 'Quantity:') !!}
    {!! Form::number('quantity', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <div class="form-actions">
        <div class="row  col-md-offset-0">
            {!! Form::submit('Save', ['class' => 'btn green']) !!}
            <a href="{!! route('inventories.index') !!}" class="btn btn-default">Cancel</a>
        </div>
    </div>
</div>
