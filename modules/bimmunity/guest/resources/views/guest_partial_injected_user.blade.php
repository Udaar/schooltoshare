@foreach($properties as $property)
    <div id="property" class="container-fluid company-wrap">
        <p class="top-p"><span class="bold">TOP</span> Properties</p>
        <div class="col-lg-15">
            <a href="/show/{{$property->name}}/{{$property->id}}" class="item-link">
                <div class="item text-center">
                    <img src="@if( isset($property->picture) && file_exists(public_path( $property->picture )) )
                                    {{  $property->picture }}
                                @else
                                    {{  asset(config('ifm.buildings.image_placeholder')) }}
                                @endif" alt="">
                    <span>{{$property->name}}</span>
                    <div class="rate-group">
                        <i class="fa fa-star rate-yellow"></i>
                        <i class="fa fa-star rate-yellow"></i>
                        <i class="fa fa-star rate-yellow"></i>
                        <i class="fa fa-star rate-yellow"></i>
                        <i class="fa fa-star rate-yellow"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endforeach