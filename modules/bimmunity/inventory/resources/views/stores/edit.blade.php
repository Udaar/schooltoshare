@extends('layouts.app')

@section('head')
@endsection

@section('content')
<section class="stores-edit-section ifm-form">
  <div class="portlet light ifm-border-light-grey-all">
    <div class="portlet-title ifm-border-light-grey-bottom">
        <div class="caption">
            <h3 class="ifm-grey ifm-no-margin-all inline-block captilize normal title">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHGSURBVEhL5ZO9L4NRFIcbIcHgs4kwVLAyYJHgDxAsrKTJ28831aEhNRgqyiBhEImJiMRgYapBGMTCYrOQGJpOHRBDhc1z3p6m0lZFKxJxkifn3N+595zbt+fafs28Xm+VaZqNP0EkEqnQslnzeDwbkIT7cuCiT3hDy2YNcQsW3G53fznQYJc6ppbNGmIMrthwWiY31Ilq2bSFQqEaEg/iVSrZKN4D17pMG8IoxHRZtlErbhhGmy6tCVqGeY03/X5/t8ZHLperiamo5NCZeDmIvi95vvkA+prunSD2SYw/gEmJLWPjGMIdrMAzmy/w6/AKh7CH9obfhmN4Yb0KlyBTs4i/xcdhCZKMa6eWt7o7dGOYG7YTy21C3L4Fb4CJZsfP4KfwrTBHPI7vgrDP5xvkl/cSRyGupdPGRsdHMRgM1uU+nq+gRq2cxdcXbYDvYy2f47EA8slSOVqGlE5j8QbEQ8QFJwpdHmP+I8LkvBT/pw3Q7IFAoBndaiCT5nQ6qzVtmZwvuQHvZFhAtxrANOsOTVsm50tukDH0//wnQ0JeJMkROMl9qQJ7dsjNfpJLyJ8v5DVgIhpkA4lCL/TbUOtcS/95s9neAfT6FDZIE65oAAAAAElFTkSuQmCC">
                Edit Store
            </h3>
        </div>
    </div>
    <div>
        @include('metronic-templates::common.errors')
    </div>
    <div class="portlet-body form">
        <div class="row">
           {!! Form::model($store, ['route' => ['stores.update', $store->id], 'method' => 'patch']) !!}

            @include('inventory::stores.fields')

           {!! Form::close() !!}
        </div>
    </div>
  </div>
</section>
@endsection
