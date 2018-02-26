<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $itemBuyPrice->id !!}</p>
</div>

<!-- Item Id Field -->
<div class="form-group">
    {!! Form::label('item_id', 'Item Id:') !!}
    <p>{!! $itemBuyPrice->item->name !!}</p>
</div>

<!-- Cost Field -->
<div class="form-group">
    {!! Form::label('cost', 'Cost:') !!}
    <p>{!! $itemBuyPrice->cost !!}</p>
</div>

<!-- Cost Field -->
<div class="form-group">
    {!! Form::label('discount', 'Discount:') !!}
    <p>{!! $itemCost->discount !!}</p>
</div>

<!-- Cost Field -->
<div class="form-group">
    {!! Form::label('tax', 'Apply tax:') !!}
    <p>{!! $itemCost->apply_tax !!}</p>
</div>

<!-- Cost Field -->
<div class="form-group">
    {!! Form::label('currency', 'Currency:') !!}
    <p>{!! $itemCost->currency->name !!}</p>
</div>

<!-- Is Current Field -->
<div class="form-group">
    {!! Form::label('is_current', 'Is Current:') !!}
    <p>{!! $itemBuyPrice->is_current !!}</p>
</div>

<!-- Created By Field -->
<div class="form-group">
    {!! Form::label('created_by', 'Created By:') !!}
    <p>{!! $itemBuyPrice->user->name !!}</p>
</div>

<!-- Element Status Field -->
{{--<div class="form-group">--}}
    {{--{!! Form::label('element_status', 'Element Status:') !!}--}}
    {{--<p>{!! $itemBuyPrice->element_status !!}</p>--}}
{{--</div>--}}

<!-- Deleted At Field -->
{{--<div class="form-group">--}}
    {{--{!! Form::label('deleted_at', 'Deleted At:') !!}--}}
    {{--<p>{!! $itemBuyPrice->deleted_at !!}</p>--}}
{{--</div>--}}

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $itemBuyPrice->created_at !!}</p>
</div>

{{--<!-- Updated At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('updated_at', 'Updated At:') !!}--}}
    {{--<p>{!! $itemBuyPrice->updated_at !!}</p>--}}
{{--</div>--}}

