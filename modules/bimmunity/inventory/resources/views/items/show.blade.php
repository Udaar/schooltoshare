@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="/metronic/reset/tabBased.css">
    <link rel="stylesheet" href="/metronic/reset/modules/inventory/items/show.css">
    <style>
        .media{
            overflow: visible;
        }
    </style>
@endpush

@section('content')

    <section class="item-show-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">

        <!-- Item Title -->

        <h3 class="ifm-grey ifm-no-margin-top ifm-margin-md-bottom inline-block capitalize normal title">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAI4SURBVEhL7ZVNqIxRGMffoYQNG5HkM6VsbG1ssLuR8Z6ZWdDrPV/D3cnC5zWlxEZSpBsLJWVhYSUUK0v5KneFfJSQK7lZoPB7zpzXnY9umTuzUf71dM55Pv7/c57zzplkOki1X6+y4UVx2T+UUjNT7XbKWDHOVrR7q7QfS/N8QUyZHpT3S8v5npUQXgmkxj2oaP9wm7VLWA/LvOz9GskprKb14lg+NbIsmw3BKISvK8b/VMZfS9O9cyC8kxp3NKYlnOYg8V+MT4ndp2aC9bfyrvrqmNKN1NoVkgzpOQouK+2u05pZEuNE82jNY0jykAzIOYHvJrab3GfUHmFjt2K4HVVrh0h4A/kOdnWe8UZBXiC0x/iX3MmW6BKR29S9KGu9jGUJoXtV48vNaBMlCE8S+I76CPOLkHyQiyVRdRqEx7Cv5Fladlh2HskDlLXriD0f8n5ucKS2nlIwgY32bn6ckx4IRC0gdgaR40mj0ZjB5AmOVzHWE0KtcR9rxiyMrvCRyL3gP5Wo3FakHZ0Cctkk7e8yPt2YEhA3d5aTXJJ1QU7bLrAsFQnSnjaBalZf3kU+hUDVuVXExlJT38w4SR4StNtes3Ztp8DfQgREtKr9Rjh+0I0vuJvkBSShX4Ew134D9jkEWjEoAcG/LSCvKwLjIdCKQQjIU84rcJf1vhiaxEAEjDsNx1Vc7V+QoG8B7Q8h8OjP29OJfgWofS9/NtHVja1ZNp9dvOMX+KlXC89M7jZFqv/oFUnyGxVcaVRgavVdAAAAAElFTkSuQmCC">
            {!! $item->name !!}
        </h3>

        <!-- /Item Title -->

        <!-- Error Div -->

        <div>
            @include('metronic-templates::common.errors')
        </div>

        <!-- Error Div -->


        <!-- Tabs -->

        <ul class="show-zone-nav-tabs nav nav-tabs ifm-margin-lg-bottom swipe" id="tabs">
            <li class="show-zone-taxonomy-tab taxonomy-tab active">
                <a class="bold" href="#overview" data-toggle="tab" tax>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAYAAAAfSC3RAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAEHSURBVDhPYwCB0KTUtWHJaf+JwH/CklMrwZpAICwp7UNIQqpuVGamID4cmpSSCtS4BaoNojE0LU0uIinNJDw5LRQbDklJUQxJTo3CqjE0OfU0FufB8AScGkOSk1XCElNdsOHItDQR3BoT07VCU1KMUXB8lgQYgw3G6dS0bUCJu8g4NCktA4TDklKbcGqMjs7lg4dgaCgbVJohPj6ewyctjQunRqDgJVhggBRBpRmALqkA2jgNp0YoFyfA7cek1CNA/A4JJ4HlE9MKgOwenBoDU1JkghIzlWAY5GeQvH98vADW6ACZDhbEEn/IGBi6bUC8GaoN7PZqoK1nCGFgyjoBTH5BDAwMDABbBvj5XAEQ/AAAAABJRU5ErkJggg==">
                    Overview
                </a>
            </li>
            @if(isset($inventory_data))
            <li class="show-zone-taxonomy-tab taxonomy-tab">
                <a class="bold" href="#transactions" data-toggle="tab" tax>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAYAAAAfSC3RAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAFZSURBVDhPvVK5SgRBEG0Fr8A7EEQUxMBEQTwiQVYMVhGPoWtmdZHZru6u3UEmEMwnEEEjQxExNTUV/QPxB/wH8Re0ajZyxkQEGx716K569apm1J/OYZIMc+iI47hXeBH1ejogeVmWdQqEK3DNg9DSJ6DzgPQm/Eegr4RIrxzvQ++X8+LdOB6S+KuOkfGbogTGhWD9Q1u1jIBoVvLZ1WXN2nklaqHxG3tHx6M1bC0IL0I7tw4A3VIYmGS6mqY9qoa0xL5vwNAqK2fCS7D+et+5CSnkeQ0QTSpt7Qw/nOuGn2MbLeYXRfAIZ5w30i5sbrHVMe6I4+CIAsSpyLlt4SWga+wg9nP3irbNlXxZ2vg1vnjSlqps4w4sPZeA9Cjzc+crQH+aL4qIuuRS65M+8Q7OLRaRb5F/ELHKOYP5J4ksBazyIXZY+aXNv4PnfJcd5IXob0VM+H8epb4AbvrTklb4YqEAAAAASUVORK5CYII=">
                    Transactions
                </a>
            </li>
            @endif
            {{--<li class="show-zone-taxonomy-tab taxonomy-tab">--}}
                {{--<a class="bold" href="#history" data-toggle="tab" tax>--}}
                    {{--<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAYAAAAfSC3RAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAEnSURBVDhPrZLPSgNBDMb3UA9Wq1cfQbyI6LFQ6Fk9lMlS6IJsdidtFzyoiMe+QG+iZ8+Cfw6+RYtPoM+i+WYDLd22IPiD0M03SSfJJPpXqCi247R/2GU5ORWpm1yFLoo9l+ftXu9yhzJ5iDP/Tezf1V7UvmL2j+fMDQufQak0NfiDMv/pWG5FZKPLgyNYazSqqXYds0xJZNdSSspE+dHDJ5f2D6C5zA9hIUDRP77BzeaWdET2tcTnYOzH0BYTcTPKdu5q06TlIElLfyOWO63mDJr+vlKeH4cAgOlhEOYG0B+S1iYmSbKFMlCOSRVwhmlXSkXjmJ65FcrhyL25MzBq7WmC5Pmb559j6VsCHGABwqNrP6En/Q6abpOFrQZrhiHA1q7c34miX/eDgpHcJbvxAAAAAElFTkSuQmCC">--}}
                    {{--History--}}
                {{--</a>--}}
            {{--</li>--}}
        </ul>

        <!-- /Tabs -->

        <!-- Tab Content -->

        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="overview">
            @include('inventory::items.show_fields_overview')
          </div>
            @if(isset($inventory_data))
          <div role="tabpanel" class="tab-pane" id="transactions">
            @include('inventory::items.show_fields_transactions')
          </div>
            @endif
          {{--<div role="tabpanel" class="tab-pane" id="history">--}}
            {{--@include('inventory::items.show_fields_history')--}}
          {{--</div>--}}
        </div>

        <!-- /Tab Content -->

    </section>

    {{--<section class="show-zone info-section ifm-padding-all">
        <div class="ifm-padding-md-bottom ifm-margin-md-bottom clearfix">
            <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
                <i class="fa fa-th-list ifm-grey"></i>
                {!! $item->name !!}
            </h3>
        </div>
        <div class="show-zone-tabbable-custome tabbable-custom ifm-border-light-grey-bottom">
            <div>
                @include('metronic-templates::common.errors')
            </div>
            <!-- Tabs Links -->
            <ul class="show-zone-nav-tabs nav nav-tabs swipe" id="tabs">
                <li class="show-zone-taxonomy-tab taxonomy-tab active">
                    <a class="bold" style="border-left: 1px solid #ddd" href="#overview" data-toggle="tab" tax>
                        <span style="display: block;" class="fa fa-info-circle icon"></span>
                        Overview
                    </a>
                </li>
                <li class="show-zone-taxonomy-tab taxonomy-tab">
                    <a class="bold" style="border-left: 1px solid #ddd" href="#transactions" data-toggle="tab" tax>
                        <span style="display: block;" class="fa fa-exchange icon"></span>
                        Transactions
                    </a>
                </li>
                <li class="show-zone-taxonomy-tab taxonomy-tab">
                    <a class="bold" style="border-left: 1px solid #ddd" href="#history" data-toggle="tab" tax>
                        <span style="display: block;" class="fa fa-clock-o icon"></span>
                        History
                    </a>
                </li>
            </ul>
            <div class="show-zone-tab-content tab-content">
                <div class="show-zone-tab-pane tab-pane active" id="overview">
                    <div class="portlet light ifm-no-margin-bottom">
                        <div class="clearfix"></div>
                        <div class="show-zone-portlet-body portlet-body">
                            @include('inventory::items.show_fields_overview')
                        </div>
                    </div>
                </div>
                <div class="show-zone-tab-pane tab-pane" id="transactions">
                    <div class="portlet light ifm-no-margin-bottom">
                        <div class="clearfix"></div>
                        <div class="show-zone-portlet-body portlet-body">
                            @include('inventory::items.show_fields_transactions')
                        </div>
                    </div>
                </div>
                <div class="show-zone-tab-pane tab-pane" id="history">
                    <div class="portlet light ifm-no-margin-bottom">
                        <div class="clearfix"></div>
                        <div class="show-zone-portlet-body portlet-body">
                            @include('inventory::items.show_fields_history')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="{!! route('items.index') !!}" class="pull-right btn ifm-btn-default ifm-light-grey-bg ifm-grey ifm-border-light-grey-all">Back</a>
    </section>--}}
@endsection
