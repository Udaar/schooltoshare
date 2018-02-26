<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
    <thead>
        <tr>
            <th class="ifm-main-bg ifm-white all">Item</th>
            <th class="ifm-main-bg ifm-white all">Cost</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Is Current</th>
            <th class="ifm-main-bg ifm-white all">Discount</th>
            <th class="ifm-main-bg ifm-white all">Apply Tax</th>
            <th class="ifm-main-bg ifm-white none">Currency</th>
            <th class="ifm-main-bg ifm-white none">Created By</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($itemBuyPrices as $itemBuyPrice)
            <tr>
                <td class="text-capitalize">{!! $itemBuyPrice->item->name !!}</td>
                <td class="text-capitalize"><span class="fa fa-dollar"></span> {!! $itemBuyPrice->cost !!}</td>
                <td class="text-capitalize">
                  @if($itemBuyPrice->is_current == 0)
                    <span class="font-red-thunderbird bold">No</span>
                  @elseif($itemBuyPrice->is_current == 1)
                    <span class="font-green-jungle bold">Yes</span>
                  @endif
                </td>
                <td>{!! $itemBuyPrice->discount !!}</td>
                <td>{!! $itemBuyPrice->apply_tax !!}</td>
                <td>{!! $itemBuyPrice->currency->code !!}</td>
                <td class="text-capitalize">{!! $itemBuyPrice->user->name !!}</td>
                <td>
                    {!! Form::open(['route' => ['itemBuyPrices.destroy', $itemBuyPrice->id], 'method' => 'delete']) !!}
                        <div class='btn-group ifm-static'>
                            <a href="itemBuyPrices/{{$itemBuyPrice->id}}/edit" class='btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-xs-right'><i class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                     {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{-- <table class="table table-responsive" id="itemBuyPrices-table">
    <thead>
        <th>Item Id</th>
        <th>Cost</th>
        <th>Is Current</th>
        <th>Created By</th>
        {{--<th>Element Status</th>--}}
        {{-- <th colspan="3">Action</th>
    </thead>
    <tbody>
    {{-- @foreach($itemBuyPrices as $itemBuyPrice)
        <tr>
            <td>{!! $itemBuyPrice->item->name !!}</td>
            <td>{!! $itemBuyPrice->cost !!}</td>
            <td>{!! $itemBuyPrice->is_current !!}</td>
            <td>{!! $itemBuyPrice->user->name !!}</td>
            <td>
                {!! Form::open(['route' => ['itemBuyPrices.destroy', $itemBuyPrice->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('itemBuyPrices.show', [$itemBuyPrice->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    {{-- <a href="{!! route('itemBuyPrices.edit', [$itemBuyPrice->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>--}}
                    {{-- {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table> --}}
