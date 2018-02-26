@extends('layouts.app')

@section('head')
    <style>
        table.dataTable > tbody > tr.child span.dtr-title {
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('content')
<section class="stores-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">

    <!-- Stores Title Bar -->
    <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block captilize normal title">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHGSURBVEhL5ZO9L4NRFIcbIcHgs4kwVLAyYJHgDxAsrKTJ28831aEhNRgqyiBhEImJiMRgYapBGMTCYrOQGJpOHRBDhc1z3p6m0lZFKxJxkifn3N+595zbt+fafs28Xm+VaZqNP0EkEqnQslnzeDwbkIT7cuCiT3hDy2YNcQsW3G53fznQYJc6ppbNGmIMrthwWiY31Ilq2bSFQqEaEg/iVSrZKN4D17pMG8IoxHRZtlErbhhGmy6tCVqGeY03/X5/t8ZHLperiamo5NCZeDmIvi95vvkA+prunSD2SYw/gEmJLWPjGMIdrMAzmy/w6/AKh7CH9obfhmN4Yb0KlyBTs4i/xcdhCZKMa6eWt7o7dGOYG7YTy21C3L4Fb4CJZsfP4KfwrTBHPI7vgrDP5xvkl/cSRyGupdPGRsdHMRgM1uU+nq+gRq2cxdcXbYDvYy2f47EA8slSOVqGlE5j8QbEQ8QFJwpdHmP+I8LkvBT/pw3Q7IFAoBndaiCT5nQ6qzVtmZwvuQHvZFhAtxrANOsOTVsm50tukDH0//wnQ0JeJMkROMl9qQJ7dsjNfpJLyJ8v5DVgIhpkA4lCL/TbUOtcS/95s9neAfT6FDZIE65oAAAAAElFTkSuQmCC">
            Stores
        </h3>
        <a href="{!! route('stores.create') !!}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right" style="top:19px;right:36px"><i class="fa fa-plus"></i> Add</a>
    </div>
    <!-- /Stores Title Bar -->

    <!-- Stores Table -->
    <div class="row">
        @include('flash::message')
        <div class="ifm-padding-sm-all">
            @include('inventory::stores.table')
        </div>
    </div>
    <!-- /Stores Table -->

</section>
@endsection
