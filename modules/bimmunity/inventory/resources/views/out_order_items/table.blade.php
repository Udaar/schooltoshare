<table class="table table-responsive" id="outOrderItems-table">
    <thead>
        <th>Order Id</th>
        <th>Quantity</th>
        {{--<th>Inventory Id</th>--}}
        <th>Qc Quality Check</th>
        <th>Qc Quantity Check</th>
        <th>Qc Quality Check Date</th>
        <th>Qc Quantity Check Date</th>
        <th>Qc Quality Check By</th>
        <th>Qc Quantity Check By</th>
        <th>Cost</th>
        <th>Packing </th>
        <th>Packed Date</th>
        <th>Packed By</th>
        <th>Created By</th>
        {{--<th>Element Status</th>--}}
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($outOrderItems as $outOrderItem)
        <tr>
            <td>{!! $outOrderItem->order_id !!}</td>
            <td>{!! $outOrderItem->quantity !!}</td>
            {{--<td>{!! $outOrderItem->inventory_id !!}</td>--}}
            <td>{!! $outOrderItem->qc_quality_check !!}</td>
            <td>{!! $outOrderItem->qc_quantity_check !!}</td>
            <td>{!! $outOrderItem->qc_quality_check_date !!}</td>
            <td>{!! $outOrderItem->qc_quantity_check_date !!}</td>
            <td>{!! $outOrderItem->qc_quality_check_by !!}</td>
            <td>{!! $outOrderItem->qc_quantity_check_by !!}</td>
            <td>{!! $outOrderItem->cost !!}</td>
            <td>{!! $outOrderItem->packing->name !!}</td>
            <td>{!! $outOrderItem->packed_date !!}</td>
            <td>{!! $outOrderItem->packed_by !!}</td>
            <td>{!! $outOrderItem->user->name !!}</td>
            {{--<td>{!! $outOrderItem->element_status !!}</td>--}}
            <td>
                {!! Form::open(['route' => ['outOrderItems.destroy', $outOrderItem->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('outOrderItems.show', [$outOrderItem->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('outOrderItems.edit', [$outOrderItem->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>