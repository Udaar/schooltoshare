@push('head')
    <style>
        table.dataTable > tbody > tr.child span.dtr-title {
            margin-bottom: 10px;
        }
    </style>
@endpush
<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
    <thead>
        <tr>
            <th class="ifm-main-bg ifm-white all">Date</th>
            <th class="ifm-main-bg ifm-white all">Sales Orders</th>
            <th class="ifm-main-bg ifm-white all">Customer</th>
            <th class="ifm-main-bg ifm-white all">Quantity</th>
            <th class="ifm-main-bg ifm-white all">Price</th>
            <th class="ifm-main-bg ifm-white all">Total</th>
        </tr>
    </thead>
    <tbody>
    @foreach($sales_orders as $sales_order)
        @foreach($sales_order as $sales_order_record)
            @if(isset($sales_order_record))
                <tr>
                    <td class="text-capitalize">{!! $sales_order_record->created_at !!}</td>
                    <td class="text-capitalize">{!! $sales_order_record->order_number !!}</td>
                    <td class="text-capitalize">{!! $sales_order_record->name !!}</td>
                    <td class="text-capitalize">{!! $sales_order_record->quantity !!}</td>
                    <td class="text-capitalize">{!! $sales_order_record->cost !!}$</td>
                    <td class="text-capitalize">{!! $sales_order_record->total_cost !!}$</td>
                </tr>
            @endif
        @endforeach
    @endforeach
    </tbody>
</table>
