@if(count($properties)>0) 
    @foreach($properties as $property)
        <div class="col-lg-15">
            <a href="/show/Property/{{$property->id}}" class="item-link">
                <div class="item text-center">
                    <img src="@if( isset($property->profilePicture()->path) && file_exists(public_path( $property->profilePicture()->path )) )
                                    {{  $property->profilePicture()->path}}
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
    @endforeach
@endif