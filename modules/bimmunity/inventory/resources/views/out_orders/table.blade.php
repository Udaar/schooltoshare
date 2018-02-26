<section class="filter form-inline">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 ifm-border-light-grey-all ifm-padding-15-all">
                <div class="ifm-margin-5-bottom">
                    <i class="fa fa-filter ifm-grey"></i>
                    <span class="bold ifm-inline-block ifm-grey">Filter by:</span>
                </div>
                <div class="form-group ifm-margin-15-right">
                    <input type="checkbox" class="" id="approved_chk_box" onchange="approved_orders(this)" name="approved" value="" >
                    <label for="approved ifm-grey">Approved</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="unapproved_chk_box" onchange="unapproved_orders(this)" class="" name="not_approved" value="" >
                    <label for="not_approved ifm-grey">Not Approved</label>
                </div>
            </div>
        </div>
    </div>
</section>
<table class="table table-striped table-bordered table-hover " width="100%" id="ajaxTable">
    <thead>
        <tr>
            <th class="ifm-main-bg ifm-white all">Order Number</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Date Required</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Date Received</th>
            <th class="ifm-main-bg ifm-white all">Company</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Status</th>       
            <th class="ifm-main-bg ifm-white min-tablet-l">Cost</th>
            <th class="ifm-main-bg ifm-white none">Created By</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Actions</th>
        </tr>
    </thead>
    {{--<tbody>--}}
        {{--@foreach($outOrders as $outOrder)--}}
            {{--<tr>--}}
                {{--<td class="text-capitalize"><a href="{!! route('outOrders.show', [$outOrder->id]) !!}" class="ifm-grey">{!! $outOrder->order_number !!}</a></td>--}}
                {{--<td class="text-capitalize">{!! Carbon\Carbon::parse($outOrder->date_required)->format('d/m/Y') !!}</td>--}}
                {{--<td class="text-capitalize">{!! Carbon\Carbon::parse($outOrder->date_received)->format('d/m/Y') !!}</td>--}}
                {{--<td class="text-capitalize">{!! $outOrder->company->name !!}</td>--}}
                {{--<td class="text-capitalize">{!! $outOrder->finance_approved_by !!}</td>--}}
                {{--<td class="text-capitalize">{!! Carbon\Carbon::parse($outOrder->finance_approved_date)->format('d/m/Y') !!}</td>                    --}}
                {{--<td class="text-capitalize">{!! $outOrder->status !!}</td>                    --}}
                {{--<td class="text-capitalize">{!! $outOrder->cost !!}</td>                    --}}
                {{--<td class="text-capitalize">{!! $outOrder->user->name !!}</td>                    --}}
                {{--<td>--}}
                    {{--{!! Form::open(['route' => ['outOrders.destroy', $outOrder->id], 'method' => 'delete']) !!}--}}
                        {{--<div class='btn-group ifm-static'>--}}
                            {{--<a href="{!! route('outOrders.edit', [$outOrder->id]) !!}" class='btn ifm-btn-default ifm-main-bg ifm-white ifm-margin-xs-right'>Edit</a>--}}
                            {{--{!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-light-grey-bg ifm-grey', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                        {{--</div>--}}
                     {{--{!! Form::close() !!}--}}
                {{--</td>--}}
            {{--</tr>--}}
        {{--@endforeach--}}
    {{--</tbody>--}}
</table>
@section('scripts')
    <script>
        $(document).ready(function() {
            //$('#approved_chk_box')[0].checked=true;
            //$('#unapproved_chk_box')[0].checked=true;
            $('#unapproved_chk_box').click();
            $('#approved_chk_box').click();
        });
    </script>
@endsection


{{-- <table class="table table-responsive" id="outOrders-table">
    <thead>
        <th>Order Number</th>
        <th>Date Required</th>
        <th>Date Received</th>
        <th>Company</th>
        <th>Finance Approved By</th>
        <th>Finance Approved Date</th>
        <th>Status</th>
        <th>Cost</th>
        <th>Created By</th> --}}
        {{--<th>Element Status</th>--}}
        {{--<th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($outOrders as $outOrder)
        <tr>
            <td>{!! $outOrder->order_number !!}</td>
            <td>{!! Carbon\Carbon::parse($outOrder->date_required)->format('d/m/Y') !!}</td>
            <td>{!! Carbon\Carbon::parse($outOrder->date_received)->format('d/m/Y') !!}</td>
            <td>{!! $outOrder->company->name !!}</td>
            <td>{!! $outOrder->finance_approved_by !!}</td>
            <td>{!! Carbon\Carbon::parse($outOrder->finance_approved_date)->format('d/m/Y') !!}</td>
            <td>{!! $outOrder->status !!}</td>
            <td>{!! $outOrder->cost !!}</td>
            <td>{!! $outOrder->user->name !!}</td>--}}
            {{--<td>{!! $outOrder->element_status !!}</td>--}}
            {{--<td>
                {!! Form::open(['route' => ['outOrders.destroy', $outOrder->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('outOrders.show', [$outOrder->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('outOrders.edit', [$outOrder->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table> --}}