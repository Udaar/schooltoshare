<div class="row">
    <div class="col-xs-12 col-lg-6 ifm-padding-md-all">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-info fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Company Type:
                    <span class="ifm-grey">
                        {!! $company->company_type !!}
                    </span>
                </h4>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-lg-6 ifm-padding-md-all">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-envelope fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Email: <span class="ifm-grey">{!! $company->email  !!}</span></h4>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-lg-6 ifm-padding-md-left ifm-padding-md-all">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-fax fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Fax: <span class="ifm-grey">{!! $company->fax !!}</span></h4>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-lg-6 ifm-padding-md-left ifm-padding-md-all">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-credit-card fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Debit: <span class="ifm-grey">{!! $company->debit !!}</span></h4>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-lg-6 ifm-padding-md-left ifm-padding-md-all">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-credit-card fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Credit: <span class="ifm-grey">{!! $company->credit !!}</span></h4>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-lg-6 ifm-padding-md-left ifm-padding-md-all">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-diamond fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Total Value: <span class="ifm-grey">{!! $company->total_value !!}</span></h4>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-lg-6 ifm-padding-md-left ifm-padding-md-all">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-user fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Created By: <span class="ifm-grey">{!! $company->user->name !!}</span></h4>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-lg-6 ifm-padding-md-left ifm-padding-md-all">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-calendar fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Created At: <span class="ifm-grey">{!! $company->created_at !!}</span></h4>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-lg-12 ifm-padding-md-left ifm-padding-md-all">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-phone fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Phones: <span class="ifm-grey">{!! $company->phone . ' - ' . $company->mobile1 . ' - ' . $company->mobile2 . ' - ' . $company->mobile1 !!}</span></h4>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-lg-12 ifm-padding-md-left ifm-padding-md-all">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-map-marker fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Address: <span class="ifm-grey">{!! $company->address !!}</span></h4>
            </div>
        </div>
    </div>
</div>


