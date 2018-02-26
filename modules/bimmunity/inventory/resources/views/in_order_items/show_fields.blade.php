
<!-- Order Id Field -->
<div class="form-group">
    {!! Form::label('order_id', 'Order Number:') !!}
    <p>{!! $inOrderItem->inOrder->order_number !!}</p>
</div>

<!-- Quantity Field -->
<div class="form-group">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{!! $inOrderItem->quantity !!}</p>
</div>

<!-- Inventory Id Field -->
{{--<div class="form-group">--}}
    {{--{!! Form::label('inventory_id', 'Inventory Id:') !!}--}}
    {{--<p>{!! $inOrderItem->inventory_id !!}</p>--}}
{{--</div>--}}

<!-- Qc Quality Check Field -->
<div class="form-group">
    {!! Form::label('qc_quality_check', 'Qc Quality Check:') !!}
    <p>{!! $inOrderItem->qc_quality_check !!}</p>
</div>

<!-- Qc Quantity Check Field -->
<div class="form-group">
    {!! Form::label('qc_quantity_check', 'Qc Quantity Check:') !!}
    <p>{!! $inOrderItem->qc_quantity_check !!}</p>
</div>

<!-- Qc Quality Check Date Field -->
<div class="form-group">
    {!! Form::label('qc_quality_check_date', 'Qc Quality Check Date:') !!}
    <p>{!! $inOrderItem->qc_quality_check_date !!}</p>
</div>

<!-- Qc Quantity Check Date Field -->
<div class="form-group">
    {!! Form::label('qc_quantity_check_date', 'Qc Quantity Check Date:') !!}
    <p>{!! $inOrderItem->qc_quantity_check_date !!}</p>
</div>

<!-- Qc Quality Check By Field -->
<div class="form-group">
    {!! Form::label('qc_quality_check_by', 'Qc Quality Check By:') !!}
    <p>{!! $inOrderItem->qc_quality_check_by !!}</p>
</div>

<!-- Qc Quantity Check By Field -->
<div class="form-group">
    {!! Form::label('qc_quantity_check_by', 'Qc Quantity Check By:') !!}
    <p>{!! $inOrderItem->qc_quantity_check_by !!}</p>
</div>

<!-- Cost Field -->
<div class="form-group">
    {!! Form::label('cost', 'Cost:') !!}
    <p>{!! $inOrderItem->cost !!}</p>
</div>

<!-- Created By Field -->
<div class="form-group">
    {!! Form::label('created_by', 'Created By:') !!}
    <p>{!! $inOrderItem->user->name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $inOrderItem->created_at !!}</p>
</div>
