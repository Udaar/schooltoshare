@extends('layouts.app')

@push('head')
    <style>
        table.dataTable > tbody > tr.child span.dtr-title {
            margin-bottom: 10px;
        }
    </style>
@endpush

@section('content')
<section class="item-cost-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">

    <!-- Item Costs Title Bar -->
    <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block captilize normal title">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAH9SURBVEhL7ZXLSlthFIUjopZAFUFaB+KgpeDEgYrSYiZesLNeBqHqJJB7ghm0Ioo+gBdQRNBWLO20FamCKN5iLAVB1CdwKvQ1+q1kh56jYkgctbhgse9rn/8k+eP5fxCJRNqj0ega3C+S28z2m8yNKKPhPdxNJBJPLOcCIj7qkxa6wEwt9TnqX7BeS/8FhVl4SXEcjt5E6h9h5ko+Besc/huYhhUmnQODJ7C3WMZisc5AIPAAwR75pjUDW7PCeZD4Ze41MFxDvUuCeYbD4QYrXwP9Y9BnYQ63LaC2y8A0dipP4rNgMPjQWlwoZcECPGTI+a058vv9ldbiArXiFhSL+wUF8W8uSKVS1Yh+QGcDe4Fdcv1W7rIgHo+3MH8MB5PJZD0LGhF/SZzBvs02lbpAT67ZUCj02HzdaXtcG8+Iq1i2Q9xc8gJ7LYPysZ/hhOWOldMi4tXsAjjEkdqwCxz7EYXvanJaPSl2Xn3YEXrXdVWrjr9C7hP8Cl8oJ5A/zS5gW4cE9P5o8BK/toZXsuR0FXuJ+/Su6XuOv6VXo7pmiYfhsvLKCfg/NfwD5wDrvG8KkpnfLOo2oW8wTF5/POfK2edyIL8kINYI01x85dgmxHQpXjhOr9Pc+ldaEAi+g5sIPbXX1G5Pvkx+0druBvvQVxHNiPhpTjGQq3o8fwCUWnrucKJXkwAAAABJRU5ErkJggg==">
            Item Costs
        </h3>
        <a href="{!! route('itemCosts.create') !!}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right" style="top:19px;right:36px"><i class="fa fa-plus"></i> Add</a>
    </div>
    <!-- /Item Costs Title Bar -->

    <!-- Item Costs Table -->
    <div class="row">
        @include('flash::message')
        <div class="ifm-padding-sm-all">
            @include('inventory::item_costs.table')
        </div>
    </div>
    <!-- /Item Costs Table -->

</section>
@endsection
