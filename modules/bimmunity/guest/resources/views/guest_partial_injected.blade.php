
 {{--  <div id="property" class="container-fluid company-wrap">
    <p class="top-p"><span class="bold">TOP</span> Properties</p>
        @foreach($properties as $property)    
        
                <div class="col-lg-15">
                    <a href="/show/Property/{{$property->id}}" class="item-link">
                        <div class="item text-center">
                            <img src="@if( isset($property->profilePicture()->path) && file_exists(public_path( $property->profilePicture()->path )) )
                                            {{  $property->profilePicture()->path }}
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
            </div>  --}}

<div id="property" class="container-fluid company-wrap">
    <h3 class="top-p">Top Schools</h3>
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
</div>