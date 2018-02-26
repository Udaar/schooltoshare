@extends('layouts.app')

@section('head')
    
@endsection

@section('content')

<section class="product-show-section ifm-form">
    <div class="portlet light ifm-border-light-grey-all">
        <div class="portlet-title ifm-border-light-grey-bottom">
            <div class="caption">
                <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADOSURBVEhL7Y9NDoIwEIVZuVYTt15E7+CGYeHG0KZjuIc/p8BDcQfd6RW0lUcGCVAIK5N+yQvJvJn3aBQYze5wmCeac1LmZb/vIcJu7m4R006cpqtEm6IZMFymcBmI+yXWeinhpiDmNSwvbrd+u8+yBSzBPvPm/YseGq/PMRYSxU+Y02WzECu0Lk4QYoVOYyShwEso+FLt1gXrTwr66C5Q5lGaxw1Go6GUty6DNN8xEmzBtWqfLMUnxApENCPFF9feejRA5a05uyzEBnxE0Qd+kXLmnK8KDQAAAABJRU5ErkJggg==">
                    {!! $product->name !!}
                </h3>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="portlet-body">
            <div class="row">
                @include('bimmunity/invoice::products.show_fields')
            </div>
        </div>
    </div>
</section>

@endsection
