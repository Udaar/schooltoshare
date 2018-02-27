@push('head')
    <link rel="stylesheet" href="/metronic/reset/tabBased.css">
    {{-- <link rel="stylesheet" href="/metronic/reset/tabular.css">
    <link rel="stylesheet" href="/metronic/reset/extandableTable.css"> --}}
    <link rel="stylesheet" href="/metronic/reset/view_info.css">
@endpush

<!-- Tabs Links -->
<ul class="user-show-nav-tabs nav nav-tabs swipe" id="tabs">
    <li class="user-show-taxonomy-tab taxonomy-tab active">
        <a class="bold" style="border-left: 1px solid #ddd" href="#user-details" data-toggle="tab" tax>
            <span style="display: block;" class="fa fa-info-circle icon"></span>
            User Details
        </a>
    </li>
    
</ul>

<div class="user-show-tab-content tab-content">
    <!-- Zone Details -->
    <div class="user-show-tab-pane tab-pane active" id="user-details">
        <div class="portlet light ifm-no-padding-top ifm-padding-xs-left ">
            <div class="portlet-title ifm-padding-sm-top ifm-no-border-bottom ifm-padding-sm-bottom ifm-no-margin-bottom">
                <div class="caption">
                    <i class="fa fa-info-circle ifm-main"></i>
                    <span class="caption-subject ifm-main bold uppercase">User Details</span>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="user-show-portlet-body ifm-no-padding-top portlet-body">
                <div class="user-show-wrapper info-wrapper ifm-no-border-bottom ifm-margin-sm-bottom">
                    <!-- Show Zone Info Box -->
                    <div class="user-show-box info-box">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- First Row -->
                                <div class="row">
                                    <!-- Image -->
                                    <div class="col-md-3">
                                        <div class="user-show-item info-item">
                                            <div class="media">
                                                <div class="media-body">
                                                    <img src="/{{ $user->picture}}" class="ifm-grey" style="width:100%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Second Row --> 
                                <div class="row">
                                    <!-- Email -->
                                    <div class="col-lg-3 col-xs-12">
                                        <div class="user-show-item info-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <span class="fa-stack fa-lg ifm-main">
                                                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                                                        <i class="media-object fa fa-envelope fa-stack-1x"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Email</h4>
                                                    <span class="ifm-grey">{{ $user->email}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Phone -->
                                    <div class="col-lg-3 col-xs-12">
                                        <div class="user-show-item info-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <span class="fa-stack fa-lg ifm-main">
                                                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                                                        <i class="media-object fa fa-phone fa-stack-1x"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Phone</h4>
                                                    <span class="ifm-grey">{{ $user->phone}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Cell Phone -->
                                    <div class="col-lg-3 col-xs-12">
                                        <div class="user-show-item info-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <span class="fa-stack fa-lg ifm-main">
                                                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                                                        <i class="media-object fa fa-mobile fa-stack-1x"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Cell Phone</h4>
                                                    <span class="ifm-grey">{{ $user->cell_phone}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Third Row -->
                                <div class="row">
                                    <!-- Address -->
                                    <div class="col-xs-12">
                                        <div class="user-show-item info-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <span class="fa-stack fa-lg ifm-main">
                                                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                                                        <i class="media-object fa fa-map fa-stack-1x"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Address</h4>
                                                    <span class="ifm-grey">{{ $user->address}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
</div>

