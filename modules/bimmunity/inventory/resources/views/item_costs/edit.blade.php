@extends('layouts.app')

@section('content')
<section class="item-cost-edit-section ifm-form">
  <div class="portlet light ifm-border-light-grey-all">
      <div class="portlet-title ifm-border-light-grey-bottom">
          <div class="caption">
              <h3 class="ifm-grey ifm-no-margin-all inline-block captilize normal title">
                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAH9SURBVEhL7ZXLSlthFIUjopZAFUFaB+KgpeDEgYrSYiZesLNeBqHqJJB7ghm0Ioo+gBdQRNBWLO20FamCKN5iLAVB1CdwKvQ1+q1kh56jYkgctbhgse9rn/8k+eP5fxCJRNqj0ega3C+S28z2m8yNKKPhPdxNJBJPLOcCIj7qkxa6wEwt9TnqX7BeS/8FhVl4SXEcjt5E6h9h5ko+Besc/huYhhUmnQODJ7C3WMZisc5AIPAAwR75pjUDW7PCeZD4Ze41MFxDvUuCeYbD4QYrXwP9Y9BnYQ63LaC2y8A0dipP4rNgMPjQWlwoZcECPGTI+a058vv9ldbiArXiFhSL+wUF8W8uSKVS1Yh+QGcDe4Fdcv1W7rIgHo+3MH8MB5PJZD0LGhF/SZzBvs02lbpAT67ZUCj02HzdaXtcG8+Iq1i2Q9xc8gJ7LYPysZ/hhOWOldMi4tXsAjjEkdqwCxz7EYXvanJaPSl2Xn3YEXrXdVWrjr9C7hP8Cl8oJ5A/zS5gW4cE9P5o8BK/toZXsuR0FXuJ+/Su6XuOv6VXo7pmiYfhsvLKCfg/NfwD5wDrvG8KkpnfLOo2oW8wTF5/POfK2edyIL8kINYI01x85dgmxHQpXjhOr9Pc+ldaEAi+g5sIPbXX1G5Pvkx+0druBvvQVxHNiPhpTjGQq3o8fwCUWnrucKJXkwAAAABJRU5ErkJggg==">
                  Edit Item Cost
              </h3>
          </div>
      </div>
      <div>
          @include('metronic-templates::common.errors')
      </div>
      <div class="portlet-body form">
          <div class="row">
             {!! Form::model($itemCost, ['route' => ['itemCosts.update', $itemCost->id], 'method' => 'patch']) !!}

              @include('inventory::item_costs.fields')

             {!! Form::close() !!}
          </div>
      </div>
  </div>
</section>
@endsection
