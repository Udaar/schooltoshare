<div class="row ifm-margin-md-bottom">
    <div class="col-xs-12 col-sm-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-info fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Store Number:
                    <span class="ifm-grey">
                        {!! $store->number !!}
                    </span>
                </h4>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-map-marker fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Position: <span class="ifm-grey">{!! $store->position  !!}</span></h4>
            </div>
        </div>
    </div>
</div>

<div class="row ifm-margin-md-bottom">
    <div class="col-xs-12 col-sm-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-user-secret fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Responsible By:
                    <span class="ifm-grey">
                        {!! $store->responsible->name !!}
                    </span>
                </h4>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-user fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Created By: <span class="ifm-grey">{!! $store->user->name  !!}</span></h4>
            </div>
        </div>
    </div>
</div>

<div class="row ifm-margin-md-bottom">
    <div class="col-xs-12 col-sm-6">
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
                        {!! $store->created_at !!}
                    </span>
                </h4>
            </div>
        </div>
    </div>
</div>
