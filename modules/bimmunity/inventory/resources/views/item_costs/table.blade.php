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
        @foreach($itemCosts as $itemCost)
            <tr>
                <td class="text-capitalize">{!! $itemCost->item->name !!}</td>
                <td class="text-capitalize"><span class="fa fa-dollar"></span> {!! $itemCost->cost !!}</td>
                <td class="text-capitalize">
                  @if($itemCost->is_current == 0)
                    <span class="font-red-thunderbird bold">No</span>
                  @elseif($itemCost->is_current == 1)
                    <span class="font-green-jungle bold">Yes</span>
                  @endif
                </td>
                <td>{!! $itemCost->discount !!}</td>
                <td>{!! $itemCost->apply_tax !!}</td>
                <td>{!! $itemCost->currency->code !!}</td>
                <td class="text-capitalize">{!! $itemCost->user->name !!}</td>
                <td>
                    {!! Form::open(['route' => ['itemCosts.destroy', $itemCost->id], 'method' => 'delete']) !!}
                        <div class='btn-group ifm-static'>
                            <a href="itemCosts/{{$itemCost->id}}/edit" class='btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-xs-right'><i class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                     {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{-- <table class="table table-responsive" id="itemCosts-table">
    <thead>
        <th>Item Id</th>
        {{--<th>Buy Price</th>--}}
        {{-- <th>Cost</th>
        <th>Is Current</th>
        <th>Created By</th>
        {{--<th>Element Status</th>--}}
        {{-- <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($itemCosts as $itemCost)
        <tr>
            <td>{!! $itemCost->item->name !!}</td>
            {{--<td>{!! $itemCost->buy_price !!}</td>--}}
            {{-- <td>{!! $itemCost->cost !!}</td>
            <td>{!! $itemCost->is_current !!}</td>
            <td>{!! $itemCost->user->name !!}</td>
            {{--<td>{!! $itemCost->element_status !!}</td>--}}
            {{-- <td>
                {!! Form::open(['route' => ['itemCosts.destroy', $itemCost->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('itemCosts.show', [$itemCost->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    {{-- <a href="{!! route('itemCosts.edit', [$itemCost->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>--}}
                    {{-- {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table> --}}
