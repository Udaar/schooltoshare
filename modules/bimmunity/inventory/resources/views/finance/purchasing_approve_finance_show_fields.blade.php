<div class="row ifm-margin-md-bottom">
    <div class="col-xs-12 col-md-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-calendar fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Date Required:
                    <span class="ifm-grey">
                        {!! Carbon\Carbon::parse($in_order[0]->date_required)->format('d/m/Y') !!}
                    </span>
                </h4>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-calendar fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Date Received:
                    <span class="ifm-grey">
                        {!! Carbon\Carbon::parse($in_order[0]->date_received)->format('d/m/Y') !!}
                    </span>
                </h4>
            </div>
        </div>
    </div>
</div>

<div class="row ifm-margin-md-bottom">
    <div class="col-xs-12 col-md-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-bank fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Company: <span class="ifm-grey">{!! $in_order[0]->company->name !!}</span></h4>
            </div>
        </div>
    </div>

   <div class="col-xs-12 col-md-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-envelope fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Cost:
                    <span class="ifm-grey">
                        {!! $in_order[0]->cost !!}
                    </span>
                </h4>
            </div>
        </div>
    </div>
</div>

<div class="row ifm-margin-md-bottom">
    <div class="col-xs-12 col-md-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-money fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Status:
                    <span class="ifm-grey">
                        @if($in_order[0]->status == 0)
                            echo "No Action";
                        @elseif($in_order[0]->status == 1)
                            echo "Pending";
                        @elseif($in_order[0]->status == 2)
                            echo "Refused";
                        @elseif($in_order[0]->status == 3)
                            echo "Accepted";
                        @endif
                    </span>
                </h4>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-credit-card fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey"> Current Position:
                    <span class="ifm-grey">
                        @if($in_order[0]->element_status == 0)
                            echo "Created";
                        @elseif($in_order[0]->element_status == 1)
                            echo "Purchase";
                        @elseif($in_order[0]->element_status == 2)
                            echo "Finance";
                        @elseif($in_order[0]->element_status == 3)
                            echo "Qc";
                        @elseif($in_order[0]->element_status == 4)
                            echo "Packing";
                        @elseif($in_order[0]->element_status == 5)
                            echo "Returned";
                        @elseif($in_order[0]->element_status == 6)
                            echo "Done";
                        @endif
                    </span>
                </h4>
            </div>
        </div>
    </div>
</div>

<div class="row ifm-margin-md-bottom">
    <div class="col-xs-12 col-md-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-calendar fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Created At:
                    <span class="ifm-grey">
                        {!! Carbon\Carbon::parse($in_order[0]->created_at)->format('d/m/Y') !!}
                    </span>
                </h4>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-credit-card fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Created By:
                    <span class="ifm-grey">
                        {!! $in_order[0]->user->name !!}
                    </span>
                </h4>
            </div>
        </div>
    </div>
</div>

@if(isset($sales_accepted[0]))
<div class="row ifm-margin-md-bottom">
    <div class="col-xs-12 col-md-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-calendar fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Sales Response At:
                    <span class="ifm-grey">
                        {!! Carbon\Carbon::parse($sales_accepted[0]['accepted_date'])->format('d/m/Y') !!}
                    </span>
                </h4>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-credit-card fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Sales Response By:
                    <span class="ifm-grey">
                        {!! $sales_accepted[0]['name'] !!}
                    </span>
                </h4>
            </div>
        </div>
    </div>
</div>
@endif
@if(isset($finance_accepted[0]))
<div class="row ifm-margin-md-bottom">
    <div class="col-xs-12 col-md-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-calendar fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Finance Response At:
                    <span class="ifm-grey">
                        {!! Carbon\Carbon::parse($finance_accepted[0]['accepted_date'])->format('d/m/Y') !!}
                    </span>
                </h4>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-credit-card fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Finance Response By:
                    <span class="ifm-grey">
                        {!! $finance_accepted[0]['name'] !!}
                    </span>
                </h4>
            </div>
        </div>
    </div>
</div>
@endif

@if(isset($qc_accepted[0]))
<div class="row ifm-margin-md-bottom">
    <div class="col-xs-12 col-md-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-calendar fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Qc Response At:
                    <span class="ifm-grey">
                        {!! Carbon\Carbon::parse($qc_accepted[0]['accepted_date'])->format('d/m/Y') !!}
                    </span>
                </h4>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-credit-card fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Qc Response By:
                    <span class="ifm-grey">
                        {!! $qc_accepted[0]['name'] !!}
                    </span>
                </h4>
            </div>
        </div>
    </div>
</div>
@endif

<div class="row ifm-margin-md-bottom">
    @if(isset($sales_accepted[0]))
    <div class="col-xs-12 col-md-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-credit-card fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Sales Notes:
                    <span class="ifm-grey">
                        {!! $sales_accepted[0]['notes'] !!}
                    </span>
                </h4>
            </div>
        </div>
    </div>
    @endif
    @if(isset($finance_accepted[0]))
    <div class="col-xs-12 col-md-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-calendar fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Finance Notes:
                    <span class="ifm-grey">
                        {!! $finance_accepted[0]['notes'] !!}
                    </span>
                </h4>
            </div>
        </div>
    </div>
    @endif
</div>

<div class="row ifm-margin-md-bottom last-info">
    @if(isset($qc_accepted[0]))
    <div class="col-xs-12 col-md-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-user fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Qc Notes:
                    <span class="ifm-grey">
                        {!! $qc_accepted[0]['notes'] !!}
                    </span>
                </h4>
            </div>
        </div>
    </div>
        @endif
</div>


@if(($in_order[0]['element_status'] == 2 && $in_order[0]['status'] != 3) || ($in_order[0]['element_status'] == 1 && $in_order[0]['status'] == 3))
<div class="row ifm-margin-md-bottom">
    <div class="col-xs-12">
        <textarea name="notes" id="notes" class="form-control ifm-border-light-grey-all" rows="6"></textarea>
    </div>
</div>
@endif

@if(isset($in_order_items) && isset($in_order_items[0]))
<div class="row ifm-margin-md-bottom last-info">
    <div class="col-xs-12 item-col">
        <div class="item-table table-responsive" style="display:none">
            <table class="table table-bordered table-hover text-center">
                <thead>
                    <th>Item</th>
                    <th>Store</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </thead>
                <tbody>
                <?php $counter = 1;?>
                        @foreach($in_order_items as $order_item)
                            <tr>
                                <td>
                                    {{--<a data-remodal-target="modal" class="ifm-grey" style="text-decoration: underline">--}}
                                    {{ $order_item['name'] }}
                                    {{--</a>--}}
                                </td>
                                <td>
                                    {{ $order_item['store_number']. " " .$order_item['store_name'] }}
                                </td>
                                <td>
                                    {{ $order_item['quantity'] }}
                                </td>
                                <td>
                                    {{ $order_item['cost'] }}
                                </td>
                            </tr>
                            <?php $counter++; ?>
                        @endforeach
                </tbody>            
            </table>
        </div>
    </div>
</div>
@endif

<div class="row ifm-margin-md-bottom">
    <div class="col-xs-12 ifm-no-padding-left">
        <span class="ifm-grey more-details" style="text-decoration:underline;cursor:pointer;padding-left:25px">Show more details ...</span>
        <span class="ifm-grey less-details" style="text-decoration:underline;cursor:pointer;display:none;padding-left:25px">Show less details ...</span>
    </div>
</div>

<div class="remodal" data-remodal-id="modal" data-remodal-options="hashTracking: false, closeOnOutsideClick: false">
  <button data-remodal-action="close" class="remodal-close"></button>
  <div class="row ifm-margin-15-bottom">
    <label for="" class="bold">Name: </label>
    <span>Item name</span>
  </div>
  <div class="row ifm-margin-15-bottom">
    <label for="" class="bold">Barcode: </label>
    <span>1254</span>
  </div>
  <div class="row ifm-margin-15-bottom">
    <label for="" class="bold">Quantity in stores: </label>
    <span>2000</span>
  </div>
  <div class="row ifm-margin-15-bottom">
    <label for="" class="bold">Unit Price: </label>
    <span>$2000</span>
  </div>
  <div class="row">
    <button data-remodal-action="confirm" class="btn ifm-main-bg ifm-white">OK</button>
  </div>
</div>

