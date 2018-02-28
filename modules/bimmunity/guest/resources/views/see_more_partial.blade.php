@if($type == "events")
    @if(count($events)>0 )
        <div class="row is-flex">
            @foreach($events as $event)
                @if($event->type == 'workshop')  
                    <div class="col-lg-3">
                        <div class="event-box workshop">
                            <div class="event-top-box">
                                <div class="event-type">
                                    <img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAYAAAAfSC3RAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADSSURBVDhPlY2hCgJBFEVHg3GboMmfMBgtgkWwaLUKBpvNahSD/oB/YrXaTGZBEIOWdcdzd94KIrLugcvMvHfPrsvw3pdJmwySJOmQhma2zodyH+nE6TnPZGKrfChXyV6y4D6zVT70awi3oBaQ6ZYoH4KWineOiq1/Q7FJ4qAFeG9IzyqfsNeflqRLhuRCFuQZ9PQDY6sHmEla2/JBJEfacR41F9ynqSB4vyXjyrtla4kjEpO5jfKlDGZ1u/4vfUFpZYL4TxIUd4UlQTki20KSc+4Fcb47gDyDH6EAAAAASUVORK5CYII=">
                                    <span>WorkShop</span>
                                </div>
                                <div class="event-title">
                                    <p class="text-center">{{$event->name}}</p>
                                </div>
                                <div class="event-avatar">
                                    <img src="{{$event->user->picture_url}}" alt="">
                                </div>
                            </div>
                            <div class="event-details">
                                <div class="speaker text-center">
                                    <p>
                                        <span>Speaker</span>
                                        {{$event->user->name}}
                                    </p>
                                </div>
                                <div class="attend-details text-center">
                                    <label>date</label>
                                    <span>{{$event->date->format('Y-m-d')}}</span>
                                </div>
                                <div class="attend-details text-center">
                                    <label>time</label>
                                    <span>{{$event->time}}</span>
                                </div>
                                <div class="attend-details text-center">
                                    <label>duration</label>
                                    <span>{{$event->duration}} {{$event->d_type}}</span>
                                </div>
                                <div class="attend-details text-center">
                                    <label>location</label>
                                    <span>{{$event->location}}</span>
                                </div>
                            </div>
                        </div>
                    </div>          
                @else	
                    <div class="col-lg-3">
                        <div class="event-box keynote">
                            <div class="event-top-box">
                                <div class="event-type">
                                    <i class="fa fa-microphone"></i>
                                    <span>Keynote</span>
                                </div>
                                <div class="event-title">
                                    <p class="text-center">{{$event->name}}</p>
                                </div>
                                <div class="event-avatar">
                                    <img src="{{$event->user->picture_url}}" alt="">
                                </div>
                            </div>
                            <div class="event-details">
                                <div class="speaker text-center">
                                    <p>
                                        <span>Speaker</span>
                                        {{$event->user->name}}
                                    </p>
                                </div>
                                <div class="attend-details text-center">
                                    <label>date</label>
                                    <span>{{$event->date->format('Y-m-d')}}</span>
                                </div>
                                <div class="attend-details text-center">
                                    <label>time</label>
                                    <span>{{$event->time}}</span>
                                </div>
                                <div class="attend-details text-center">
                                    <label>duration</label>
                                    <span>{{$event->duration}} {{$event->d_type}}</span>
                                </div>
                                <div class="attend-details text-center">
                                    <label>location</label>
                                    <span>{{$event->location}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif	
            @endforeach	
        </div>
    @endif
@else
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
@endif