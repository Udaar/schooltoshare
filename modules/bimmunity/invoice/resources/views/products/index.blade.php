@extends('layouts.app')

@section('head')
    <style>
        table.dataTable > tbody > tr.child span.dtr-title {
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('content')

<section class="products-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">

    <!-- Products Title Bar -->
    <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADOSURBVEhL7Y9NDoIwEIVZuVYTt15E7+CGYeHG0KZjuIc/p8BDcQfd6RW0lUcGCVAIK5N+yQvJvJn3aBQYze5wmCeac1LmZb/vIcJu7m4R006cpqtEm6IZMFymcBmI+yXWeinhpiDmNSwvbrd+u8+yBSzBPvPm/YseGq/PMRYSxU+Y02WzECu0Lk4QYoVOYyShwEso+FLt1gXrTwr66C5Q5lGaxw1Go6GUty6DNN8xEmzBtWqfLMUnxApENCPFF9feejRA5a05uyzEBnxE0Qd+kXLmnK8KDQAAAABJRU5ErkJggg==">
            products
        </h3>
        <a href="{!! route('products.create') !!}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right add-btn" style="top:19px;right:36px"><i class="fa fa-plus"></i> Add</a>
    </div>
	<!-- /Products Title Bar -->

	<!-- Products Table -->
    <div class="row">
        @include('flash::message')

        <div class="ifm-padding-sm-all">
            @include('bimmunity/invoice::products.table')
        </div>

    </div>
	<!-- /Products Table -->

</section>

@endsection

