
<!-- Order Id Field -->
<div class="form-group">
    {!! Form::label('order_id', 'Order Id:') !!}
    <p>{!! $outOrderItem->outOrder->order_number !!}</p>
</div>

<!-- Quantity Field -->
<div class="form-group">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{!! $outOrderItem->quantity !!}</p>
</div>

<!-- Inventory Id Field -->
{{--<div class="form-group">--}}
    {{--{!! Form::label('inventory_id', 'Inventory:') !!}--}}
    {{--<p>{!! $outOrderItem->inventory->name !!}</p>--}}
{{--</div>--}}

<!-- Qc Quality Check Field -->
<div class="form-group">
    {!! Form::label('qc_quality_check', 'Qc Quality Check:') !!}
    <p>{!! $outOrderItem->qc_quality_check !!}</p>
</div>

<!-- Qc Quantity Check Field -->
<div class="form-group">
    {!! Form::label('qc_quantity_check', 'Qc Quantity Check:') !!}
    <p>{!! $outOrderItem->qc_quantity_check !!}</p>
</div>

<!-- Qc Quality Check Date Field -->
<div class="form-group">
    {!! Form::label('qc_quality_check_date', 'Qc Quality Check Date:') !!}
    <p>{!! $outOrderItem->qc_quality_check_date !!}</p>
</div>

<!-- Qc Quantity Check Date Field -->
<div class="form-group">
    {!! Form::label('qc_quantity_check_date', 'Qc Quantity Check Date:') !!}
    <p>{!! $outOrderItem->qc_quantity_check_date !!}</p>
</div>

<!-- Qc Quality Check By Field -->
<div class="form-group">
    {!! Form::label('qc_quality_check_by', 'Qc Quality Check By:') !!}
    <p>{!! $outOrderItem->qc_quality_check_by !!}</p>
</div>

<!-- Qc Quantity Check By Field -->
<div class="form-group">
    {!! Form::label('qc_quantity_check_by', 'Qc Quantity Check By:') !!}
    <p>{!! $outOrderItem->qc_quantity_check_by !!}</p>
</div>

<!-- Cost Field -->
<div class="form-group">
    {!! Form::label('cost', 'Cost:') !!}
    <p>{!! $outOrderItem->cost !!}</p>
</div>

<!-- Packing Id Field -->
<div class="form-group">
    {!! Form::label('packing_id', 'Packing:') !!}
    <p>{!! $outOrderItem->packing->name !!}</p>
</div>

<!-- Packed Date Field -->
<div class="form-group">
    {!! Form::label('packed_date', 'Packed Date:') !!}
    <p>{!! $outOrderItem->packed_date !!}</p>
</div>

<!-- Packed By Field -->
<div class="form-group">
    {!! Form::label('packed_by', 'Packed By:') !!}
    <p>{!! $outOrderItem->packed_by !!}</p>
</div>

<!-- Created By Field -->
<div class="form-group">
    {!! Form::label('created_by', 'Created By:') !!}
    <p>{!! $outOrderItem->user->name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $outOrderItem->created_at !!}</p>
</div>