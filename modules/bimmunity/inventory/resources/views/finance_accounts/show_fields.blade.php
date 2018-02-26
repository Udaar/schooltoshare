<div class="row ifm-margin-md-bottom">
    <div class="col-xs-12 col-md-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-info fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Account Number:
                    <span class="ifm-grey">
                        {!! $financeAccount->account_number !!}
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
                    <i class="media-object fa fa-money fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Start Balance:
                    <span class="ifm-grey">
                        {!! $financeAccount->start_balance !!}
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
                    <i class="media-object fa fa-envelope fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Account Type:
                    <span class="ifm-grey">
                        {!! $financeAccount->accountType->name !!}
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
                    <i class="media-object fa fa-bank fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Bank:
                    <span class="ifm-grey">
                        {!! $financeAccount->bank->name !!}
                    </span>
                </h4>
            </div>
        </div>
    </div>
</div>

<div class="row">
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
                        {!! $financeAccount->user->name !!}
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
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Created At:
                    <span class="ifm-grey">
                        {!! Carbon\Carbon::parse($financeAccount->created_at)->format('d/m/Y') !!}
                    </span>
                </h4>
            </div>
        </div>
    </div>
</div>
