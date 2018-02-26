<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $itemCost->id !!}</p>
</div>

<!-- Item Id Field -->
<div class="form-group">
    {!! Form::label('item_id', 'Item Id:') !!}
    <p>{!! $itemCost->item->name !!}</p>
</div>

<!-- Cost Field -->
<div class="form-group">
    {!! Form::label('cost', 'Cost:') !!}
    <p>{!! $itemCost->cost !!}</p>
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

<!-- Cost Field -->
{{--<div class="form-group">--}}
    {{--{!! Form::label('buy_price', 'Buy Price:') !!}--}}
    {{--<p>{!! $itemCost->buy_price !!}</p>--}}
{{--</div>--}}

<!-- Is Current Field -->
<div class="form-group">
    {!! Form::label('is_current', 'Is Current:') !!}
    <p>{!! $itemCost->is_current !!}</p>
</div>

<!-- Created By Field -->
<div class="form-group">
    {!! Form::label('created_by', 'Created By:') !!}
    <p>{!! $itemCost->user->name !!}</p>
</div>

<!-- Element Status Field -->
{{--<div class="form-group">--}}
    {{--{!! Form::label('element_status', 'Element Status:') !!}--}}
    {{--<p>{!! $itemCost->element_status !!}</p>--}}
{{--</div>--}}

{{--<!-- Deleted At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('deleted_at', 'Deleted At:') !!}--}}
    {{--<p>{!! $itemCost->deleted_at !!}</p>--}}
{{--</div>--}}

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $itemCost->created_at !!}</p>
</div>

<!-- Updated At Field -->
{{--<div class="form-group">--}}
    {{--{!! Form::label('updated_at', 'Updated At:') !!}--}}
    {{--<p>{!! $itemCost->updated_at !!}</p>--}}
{{--</div>--}}

