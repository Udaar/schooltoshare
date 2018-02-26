<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
    <thead>
        <tr>
            <th class="ifm-main-bg ifm-white all">Order Number</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Company Name</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Payer Name</th>
            <th class="ifm-main-bg ifm-white none">Paid Date</th>         
            <th class="ifm-main-bg ifm-white min-tablet-l">Total Value</th>         
            <th class="ifm-main-bg ifm-white min-tablet-l">Paid</th>       
            <th class="ifm-main-bg ifm-white all">Remains</th>       
            <th class="ifm-main-bg ifm-white none">Account</th>
            <th class="ifm-main-bg ifm-white none">Created By</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orderPayments as $orderPayment)
            <tr>
                <td class="text-capitalize"><a href="{!! route('orderPayments.show', [$orderPayment->id]) !!}" class="ifm-grey">{!! $orderPayment->Order->order_number !!}</a></td>
                <td class="text-capitalize">{!! $orderPayment->company->name !!}</td>
                <td class="text-capitalize">{!! $orderPayment->payer_name !!}</td>
                <td class="text-capitalize">{!! Carbon\Carbon::parse($orderPayment->paid_date)->format('d/m/Y') !!}</td>
                <td class="text-capitalize">{!! $orderPayment->total_value !!}</td>
                <td class="text-capitalize">{!! $orderPayment->paid !!}</td>                    
                <td class="text-capitalize">{!! $orderPayment->remains !!}</td>                    
                <td class="text-capitalize">{!! $orderPayment->companyAccount->account_number !!}</td>                    
                <td class="text-capitalize">{!! $orderPayment->user->name !!}</td>                    
                <td>
                    {!! Form::open(['route' => ['orderPayments.destroy', $orderPayment->id], 'method' => 'delete']) !!}
                        <div class='btn-group ifm-static'>
                            <a href="{!! route('orderPayments.edit', [$orderPayment->id]) !!}" class='btn ifm-btn-default ifm-main-bg ifm-white ifm-margin-xs-right'>Edit</a>
                            {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-light-grey-bg ifm-grey', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                     {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{-- <table class="table table-responsive" id="orderPayments-table">
    <thead>
        <th>Order Id</th>
        <th>Paid</th>
        <th>Remains</th>
        <th>Total Value</th>
        <th>Company Id</th>
        <th>Payer Name</th>
        <th>Paid Date</th>
        <th>Account Type Id</th>
        <th>Created By</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($orderPayments as $orderPayment)
        <tr>
            <td>{!! $orderPayment->order_id !!}</td>
            <td>{!! $orderPayment->paid !!}</td>
            <td>{!! $orderPayment->remains !!}</td>
            <td>{!! $orderPayment->total_value !!}</td>
            <td>{!! $orderPayment->company->name !!}</td>
            <td>{!! $orderPayment->payer_name !!}</td>
            <td>{!! $orderPayment->paid_date !!}</td>
            <td>{!! $orderPayment->companyAccount->account_number !!}</td>
            <td>{!! $orderPayment->user->name !!}</td>
            <td>
                {!! Form::open(['route' => ['orderPayments.destroy', $orderPayment->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('orderPayments.show', [$orderPayment->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('orderPayments.edit', [$orderPayment->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table> --}}