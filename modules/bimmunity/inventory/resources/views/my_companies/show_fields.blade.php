<div class="row ifm-margin-md-bottom">
    <div class="col-xs-12 col-md-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-credit-card fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Debit:
                    <span class="ifm-grey">
                        {!! $myCompany->debit !!}
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
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Credit:
                    <span class="ifm-grey">
                        {!! $myCompany->credit !!}
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
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Total Balance:
                    <span class="ifm-grey">
                        {!! $myCompany->total_balance !!}
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
                    <i class="media-object fa fa-user fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Created By:
                    <span class="ifm-grey">
                        {!! $myCompany->user->name !!}
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
                    <i class="media-object fa fa-bolt fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Element Status:
                    <span class="ifm-grey">
                        {!! $myCompany->element_status !!}
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
                    <i class="media-object fa fa-trash fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Deleted At:
                    <span class="ifm-grey">
                        {!! Carbon\Carbon::parse($myCompany->deleted_at)->format('d/m/Y') !!}
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
                        {!! Carbon\Carbon::parse($myCompany->created_at)->format('d/m/Y') !!}
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
                    <i class="media-object fa fa-check fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Updated At:
                    <span class="ifm-grey">
                        {!! Carbon\Carbon::parse($myCompany->updated_at)->format('d/m/Y') !!}
                    </span>
                </h4>
            </div>
        </div>
    </div>
</div>

