@if(count($properties)>0) 
<div class="row is-flex" id="Companies"> 
        @foreach($properties as $property)    
            <div class="col-lg-3">
                <a href="/show/school/{{$property->id}}" class="item-link">
                    <div class="item">
                        <img src="@if( isset($property->profilePicture) && file_exists(public_path( $property->profilePicture )) )
                                        /{{  $property->profilePicture }}
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
    </div>
@endif