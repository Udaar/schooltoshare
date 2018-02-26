<!-- Item Field -->
<div class="col-xs-12">
    <div class="form-group">
        <label for="order_number" class="ifm-grey">Item</label>
        <select class="select2" name="item" id="item">
            <option value="" disabled selected>Select item from list</option>
            @foreach($items as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
</div>
<!-- /Item Field -->

<!-- Order Number Field -->
<div class="col-md-6">
    <div class="form-group">
        <label for="order_number" class="ifm-grey">In Order Name</label>
        <select class="select2" name="in_order" id="in_order">
            <option value="" disabled selected>Select item from list</option>
            @foreach($in_orders as $in_order)
                <option value="{{$in_order->id}}">{{$in_order->order_number}}</option>
            @endforeach
        </select>
    </div>
</div>
<!-- /Order Number Field -->

<!-- In Order Company Field -->
<div class="col-md-6">
    <div class="form-group">
        <label for="in_order_company" class="ifm-grey">In Order Company</label>
        <select class="select2" name="in_order_company" >
            <option value="" disabled selected>Select item from list</option>
            @foreach($companies as $company)
                <option value="{{$company->id}}">{{$company->name}}</option>
            @endforeach
        </select>
    </div>
</div>
<!-- /In Order Company Field -->

<!-- Order Number Field -->
<div class="col-md-6">
    <div class="form-group">
        <label for="order_number" class="ifm-grey">Out Order Name</label>
        <select class="select2" name="out_order" id="out_order">
            <option value="" disabled selected>Select item from list</option>
            @foreach($out_orders as $out_order)
                <option value="{{$out_order->id}}">{{$out_order->order_number}}</option>
            @endforeach
        </select>
    </div>
</div>
<!-- /Order Number Field -->

<!-- Out Order Company Field -->
<div class="col-md-6">
    <div class="form-group">
        <label for="out_order_company" class="ifm-grey">Out Order Company</label>
        <select class="select2" name="out_order_company" >
            <option value="" disabled selected>Select item from list</option>
            @foreach($companies as $company)
                <option value="{{$company->id}}">{{$company->name}}</option>
            @endforeach
        </select>
    </div>
</div>
<!-- /Out Order Company Field -->

<!-- In Order Date Required Field -->
<div class="col-md-6">
    <div class="form-group">
        <label for="in_order_date_required" class="ifm-grey">In order Date Required</label>
        <div class="input-group input-medium date date-picker"  data-date-format="yyyy-mm-dd" data-date-viewmode="years">
            <input name="in_order_date_required" id="in_order_date_required" value="" type="text" class="form-control ifm-white-bg ifm-border-light-grey-all" readonly>
            <span class="input-group-btn">
                <button class="btn default ifm-main-bg ifm-white ifm-border-main-all" type="button">
                    <i class="fa fa-calendar"></i>
                </button>
            </span>
        </div>
    </div>
</div>
<!-- /In Order Date Required Field -->

<!-- In Order Date Received Field -->
<div class="col-md-6">
    <div class="form-group">
        <label for="in_order_date_received" class="ifm-grey">In Order Date Received</label>
        <div class="input-group input-medium date date-picker"  data-date-format="yyyy-mm-dd" data-date-viewmode="years">
            <input name="in_order_date_received" id="in_order_date_received" value="" type="text" class="form-control ifm-white-bg ifm-border-light-grey-all" readonly>
            <span class="input-group-btn">
                <button class="btn default ifm-main-bg ifm-white ifm-border-main-all" type="button">
                    <i class="fa fa-calendar"></i>
                </button>
            </span>
        </div>
    </div>
</div>
<!-- /In Order Date Received Field -->

<!-- Out Order Date Required Field -->
<div class="col-md-6">
    <div class="form-group">
        <label for="out_order_date_required" class="ifm-grey">Out Order Date Required</label>
        <div class="input-group input-medium date date-picker"  data-date-format="yyyy-mm-dd" data-date-viewmode="years">
            <input name="out_order_date_required" id="out_order_date_required" value="" type="text" class="form-control ifm-white-bg ifm-border-light-grey-all" readonly>
            <span class="input-group-btn">
                <button class="btn default ifm-main-bg ifm-white ifm-border-main-all" type="button">
                    <i class="fa fa-calendar"></i>
                </button>
            </span>
        </div>
    </div>
</div>
<!-- /Out Order Date Required Field -->

<!-- Out Order Date Received Field -->
<div class="col-md-6">
    <div class="form-group">
        <label for="date_received" class="ifm-grey">Date Received</label>
        <div class="input-group input-medium date date-picker"  data-date-format="yyyy-mm-dd" data-date-viewmode="years">
            <input name="out_order_date_received" id="out_order_date_received" value="" type="text" class="form-control ifm-white-bg ifm-border-light-grey-all" readonly>

            <span class="input-group-btn">
                <button class="btn default ifm-main-bg ifm-white ifm-border-main-all" type="button">
                    <i class="fa fa-calendar"></i>
                </button>
            </span>
        </div>
    </div>
</div>
<!-- /Out Order Date Received Field -->

<!-- Submit Field -->
<div class="col-xs-12">
    <div class="form-group ifm-form-actions">
      {!! Form::submit('Search', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
      <a href="{!! route('outOrderItems.search') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
    </div>
</div>
<!-- /Submit Field -->

{{--<div class="container-fluid">
    <!-- Input Fields -->
    <div class="row"><div class="col-lg-6 ">
            <div class="container-fluid ifm-no-padding-right">
                <!-- Order Number Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            <label for="order_number" class="ifm-grey">In Order Name</label>
                            <select class="select2" name="in_order" id="in_order">
                                <option value="" disabled selected>Select item from list</option>
                                @foreach($in_orders as $in_order)
                                    <option value="{{$in_order->id}}">{{$in_order->order_number}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-12 ifm-no-padding-left">
            <div class="container-fluid ifm-no-padding-right">
                <!-- Order Number Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            <label for="in_order_company" class="ifm-grey">In Order Company</label>
                            <select class="select2" name="in_order_company" >
                                <option value="" disabled selected>Select item from list</option>
                                @foreach($companies as $company)
                                    <option value="{{$company->id}}">{{$company->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12 ">
            <div class="container-fluid ifm-no-padding-right">
                <!-- Order Number Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            <label for="in_order_date_required" class="ifm-grey">In order Date Required</label>
                            <div class="input-group input-medium date date-picker"  data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                                <input name="in_order_date_required" id="in_order_date_required" value="" type="text" class="form-control ifm-white-bg ifm-border-light-grey-all" readonly>
                                <span class="input-group-btn">
                                    <button class="btn default ifm-main-bg ifm-white ifm-border-main-all" type="button">
                                        <i class="fa fa-calendar"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-12 ifm-no-padding-left">
            <div class="container-fluid ifm-no-padding-right">
                <!-- Order Number Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            <label for="in_order_date_received" class="ifm-grey">In Order Date Received</label>
                            <div class="input-group input-medium date date-picker"  data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                                <input name="in_order_date_received" id="in_order_date_received" value="" type="text" class="form-control ifm-white-bg ifm-border-light-grey-all" readonly>
                                <span class="input-group-btn">
                                    <button class="btn default ifm-main-bg ifm-white ifm-border-main-all" type="button">
                                        <i class="fa fa-calendar"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12">
            <div class="container-fluid ifm-no-padding-right">
                <!-- Order Number Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            <label for="order_number" class="ifm-grey">Out Order Name</label>
                            <select class="select2" name="out_order" id="out_order">
                                <option value="" disabled selected>Select item from list</option>
                                @foreach($out_orders as $out_order)
                                    <option value="{{$out_order->id}}">{{$out_order->order_number}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-12 ifm-no-padding-left">
            <div class="container-fluid ifm-no-padding-right">
                <!-- Order Number Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            <label for="out_order_company" class="ifm-grey">Out Order Company</label>
                            <select class="select2" name="out_order_company" >
                                <option value="" disabled selected>Select item from list</option>
                                @foreach($companies as $company)
                                    <option value="{{$company->id}}">{{$company->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12 ">
            <div class="container-fluid ifm-no-padding-right">
                <!-- Order Number Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            <label for="out_order_date_required" class="ifm-grey">Date Required</label>
                            <div class="input-group input-medium date date-picker"  data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                                <input name="out_order_date_required" id="out_order_date_required" value="" type="text" class="form-control ifm-white-bg ifm-border-light-grey-all" readonly>
                                <span class="input-group-btn">
                                    <button class="btn default ifm-main-bg ifm-white ifm-border-main-all" type="button">
                                        <i class="fa fa-calendar"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-12 ifm-no-padding-left">
            <div class="container-fluid ifm-no-padding-right">
                <!-- Order Number Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            <label for="date_received" class="ifm-grey">Date Received</label>
                            <div class="input-group input-medium date date-picker"  data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                                <input name="out_order_date_received" id="out_order_date_received" value="" type="text" class="form-control ifm-white-bg ifm-border-light-grey-all" readonly>

                                <span class="input-group-btn">
                                    <button class="btn default ifm-main-bg ifm-white ifm-border-main-all" type="button">
                                        <i class="fa fa-calendar"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12">
            <div class="container-fluid ifm-no-padding-right">
                <!-- Order Number Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100 ifm-no-padding-left">
                            <label for="order_number" class="ifm-grey">Item</label>
                            <select class="select2" name="item" id="item">
                                <option value="" disabled selected>Select item from list</option>
                                @foreach($items as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Submit Field -->
    <div class="row">
        <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
            <div class="form-group col-sm-12 ifm-no-margin-bottom">
                <div class="form-actions ifm-no-padding-bottom ifm-border-light-grey-top">
                    <div class="row  col-md-offset-0">
                        {!! Form::submit('Search', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
                        <a href="{!! route('outOrderItems.search') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>--}}
