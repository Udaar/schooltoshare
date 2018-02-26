<table class="table table-striped table-bordered table-hover " width="100%" id="example">
    <thead>
        <tr>
            <th class="ifm-main-bg ifm-white all">Item Name</th>
            <th class="ifm-main-bg ifm-white all">Item Category</th>
            <th class="ifm-main-bg ifm-white all">Item Barcode</th>
            <th class="ifm-main-bg ifm-white all">Item Description</th>
            <th class="ifm-main-bg ifm-white all">Item Store Number</th>
            <th class="ifm-main-bg ifm-white all">Item Store Name</th>
            <th class="ifm-main-bg ifm-white all">Item Store Position</th>
            <th class="ifm-main-bg ifm-white all">Item Buy Price</th>
            <th class="ifm-main-bg ifm-white all">Item Sell Price</th>
            <th class="ifm-main-bg ifm-white all">In Order Number</th>
            <th class="ifm-main-bg ifm-white all">In Order Date Required</th>
            <th class="ifm-main-bg ifm-white all">In Order Date Received</th>
            <th class="ifm-main-bg ifm-white all">In Order Company Name</th>
            <th class="ifm-main-bg ifm-white all">In Order Quantity</th>
            <th class="ifm-main-bg ifm-white all">Out Order Number</th>
            <th class="ifm-main-bg ifm-white all">Out Order Date Required</th>
            <th class="ifm-main-bg ifm-white all">Out Order Date Received</th>
            <th class="ifm-main-bg ifm-white all">Out Order Company Name</th>
            <th class="ifm-main-bg ifm-white all">Out Order Quantity</th>
            <th class="ifm-main-bg ifm-white all">Out Order Cost</th>
            <th class="ifm-main-bg ifm-white all">Out Order Paid</th>
            <th class="ifm-main-bg ifm-white all">Out Order Remains Money</th>
            <th class="ifm-main-bg ifm-white all">Remains Quantity</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
            <tr>
                <td class="text-capitalize"><?php echo(isset($item->item_name)? $item->item_name:''); ?></td>
                <td class="text-capitalize"><?php echo(isset($item->item_category)? $item->item_category:''); ?></td>
                <td class="text-capitalize"><?php echo(isset($item->item_barcode)? $item->item_barcode:''); ?></td>
                <td class="text-capitalize"><?php echo(isset($item->item_description)? $item->item_description:''); ?></td>
                <td class="text-capitalize"><?php echo(isset($item->item_store_number)? $item->item_store_number:''); ?></td>
                <td class="text-capitalize"><?php echo(isset($item->item_store_name)? $item->item_store_name:''); ?></td>
                <td class="text-capitalize"><?php echo(isset($item->item_store_position)? $item->item_store_position:''); ?></td>
                <td class="text-capitalize"><?php echo(isset($item->item_buy_price)? $item->item_buy_price:''); ?></td>
                <td class="text-capitalize"><?php echo(isset($item->item_sell_price)? $item->item_sell_price:''); ?></td>
                <td class="text-capitalize"><?php echo(isset($item->in_order_number)? $item->in_order_number:''); ?></td>
                <td class="text-capitalize"><?php echo(isset($item->in_order_date_required)? $item->in_order_date_required:''); ?></td>
                <td class="text-capitalize"><?php echo(isset($item->in_order_date_received)? $item->in_order_date_received:''); ?></td>
                <td class="text-capitalize"><?php echo(isset($item->in_order_company)? $item->in_order_company:''); ?></td>
                <td class="text-capitalize"><?php echo(isset($item->in_order_quantity)? $item->in_order_quantity:''); ?></td>
                <td class="text-capitalize"><?php echo(isset($item->out_order_number)? $item->out_order_number:''); ?></td>
                <td class="text-capitalize"><?php echo(isset($item->out_order_date_required)? $item->out_order_date_required:''); ?></td>
                <td class="text-capitalize"><?php echo(isset($item->out_order_date_received)? $item->out_order_date_received:''); ?></td>
                <td class="text-capitalize"><?php echo(isset($item->out_order_company)? $item->out_order_company:''); ?></td>
                <td class="text-capitalize"><?php echo(isset($item->out_order_quantity)? $item->out_order_quantity:''); ?></td>
                <td class="text-capitalize"><?php echo(isset($item->out_order_cost)? $item->out_order_cost:''); ?></td>
                <td class="text-capitalize"><?php echo(isset($item->out_order_paid)? $item->out_order_paid:''); ?></td>
                <td class="text-capitalize"><?php echo(isset($item->out_order_remains)? $item->out_order_remains:''); ?></td>
                <td class="text-capitalize"><?php echo(isset($item->remains_quantity)? $item->remains_quantity:''); ?></td>
            </tr>
        @endforeach
    </tbody>
</table>
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                "scrollX": true
            } );
        } );
    </script>
@endsection