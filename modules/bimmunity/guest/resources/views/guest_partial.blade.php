@if(count($properties)>0) 
    @foreach($properties as $property)
        <div class="col-lg-3">
            <a href="/show/{{$property->name}}/{{$property->id}}" class="item-link">
                <div class="item">
                    <img src="@if( isset($property->picture) && file_exists(public_path( $property->picture )) )
                                    {{  $property->picture }}
                                @else
                                    {{  asset(config('ifm.buildings.image_placeholder')) }}
                                @endif" alt="">
                    
                    <div class="details">
                        <p class="title">
                            {{$property->name}}
                        </p>
                        <p class="address">
                            {{$property->address}}
                        </p>
                        <div class="rate-group">
                            <i class="fa fa-star rate-yellow"></i>
                            <i class="fa fa-star rate-yellow"></i>
                            <i class="fa fa-star rate-yellow"></i>
                            <i class="fa fa-star rate-yellow"></i>
                            <i class="fa fa-star rate-yellow"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div> 
    @endforeach
@endif