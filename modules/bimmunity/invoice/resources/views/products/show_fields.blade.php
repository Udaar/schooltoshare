<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Unit Cost: </label>
        <span class="ifm-grey">{!! $product->unit_cost !!} {!! $product->currency->code !!}</span>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Discount Cost: </label>
        <span class="ifm-grey">{!! $product->discount !!}</span>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Apply tax: </label>
        <span class="ifm-grey">{!! $product->apply_tax !!}</span>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Description: </label>
        <span class="ifm-grey">{!! $product->description !!}</span>
    </div>
</div>

<div class="col-md-12">
    <a href="{{ URL::previous() }}" class="pull-right btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-sm-top">Back</a>
</div>


{{--<div class="row">
    <div class="col-xs-12 col-lg-6 ifm-padding-md-all">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-money fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Unit Cost: <span class="ifm-grey">{!! $product->unit_cost !!}</span></h4>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-lg-6 ifm-padding-md-all">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-close fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Discount: <span class="ifm-grey">{!! $product->discount !!}</span></h4>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-lg-6 ifm-padding-md-all">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-credit-card fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Apply tax: <span class="ifm-grey">{!! $product->apply_tax !!}</span></h4>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-lg-6 ifm-padding-md-all">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-gg fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">currency: <span class="ifm-grey">{!! $product->currency->name !!}</span></h4>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 ifm-padding-md-all">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-info fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Description: <span class="ifm-grey">{!! $product->description !!}</span></h4>
            </div>
        </div>
    </div>
</div>--}}

