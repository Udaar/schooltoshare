<table class="table table-responsive" id="inOrderItems-table">
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
        <th>Created By</th>
        <th>Created At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($inOrderItems as $inOrderItem)
        <tr>
            <td>{!! $inOrderItem->inOrder->order_number !!}</td>
            <td>{!! $inOrderItem->quantity !!}</td>
            {{--<td>{!! $inOrderItem->inventory->name !!}</td>--}}
            <td>{!! $inOrderItem->qc_quality_check !!}</td>
            <td>{!! $inOrderItem->qc_quantity_check !!}</td>
            <td>{!! $inOrderItem->qc_quality_check_date !!}</td>
            <td>{!! $inOrderItem->qc_quantity_check_date !!}</td>
            <td>{!! $inOrderItem->qc_quality_check_by !!}</td>
            <td>{!! $inOrderItem->qc_quantity_check_by !!}</td>
            <td>{!! $inOrderItem->cost !!}</td>
            <td>{!! $inOrderItem->user->name !!}</td>
            <td>{!! $inOrderItem->created_at !!}</td>
            <td>
                {!! Form::open(['route' => ['inOrderItems.destroy', $inOrderItem->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('inOrderItems.show', [$inOrderItem->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('inOrderItems.edit', [$inOrderItem->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>