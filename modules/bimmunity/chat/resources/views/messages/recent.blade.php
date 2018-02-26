<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
    <i class="icon-envelope-open"></i>
    @if(count(collect(\Auth::user()->messages()->with('receivers','myReads')->get())->keyBy('sender_id')->filter(function ($value, $key) {
                                                return ! count($value->myReads);
                                            })))
        <span class="badge badge-default" id="countofmessage"> {{ count(collect(\Auth::user()->messages()->with('receivers','myReads')->get())->keyBy('sender_id')->filter(function ($value, $key) {
                                                    return ! count($value->myReads);
                                                })) }} </span>
    @else
        <span class="badge badge-default" style="display:none" id="countofmessage">0</span>
    @endif
</a>
<ul class="dropdown-menu">
    <li class="external">
        <h3>You have
            <span class="bold">New</span> Messages</h3>
        {{-- <a href="#">view all</a> --}}
    </li>
    <li>
        <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283" id="messageNotificationBody">
        @foreach (collect(\Auth::user()->messages()->with('receivers')->get())->keyBy('sender_id') as $key=>$message)
            <li class="message-item" sender-id={{ $key }} type="user">
                <a href="#">
                    <span class="photo">

                        @if(\App\User::find($key)->picture)
                            <img alt="" class="img-circle" src="{{ URL::to(\App\User::find($key)->picture) }}" />
                        @else
                            <img alt="" class="img-circle" src="/metronic/images/no-image.jpg" />
                        @endif
                    </span>
                    <span class="subject">
                        <span class="from"> {{ \App\User::find($key)->name }} </span>
                        <span class="time">{{ $message->created_at }} </span>
                    </span>
                    <span class="message"> {{ $message->content }} </span>
                </a>
            </li>
        @endforeach
        {{--
        @foreach (\Auth::user()->recentGroups() as $group)
            <li class="message-item" sender-id="{{ $group->id }}" type="group">
                <a href="#">
                    <span class="photo">

                        @if($message->image)
                            <img alt="" class="img-circle" src="{{ URL::to($group->photo->path) }}" />
                        @else
                            <img alt="" class="img-circle" src="/metronic/images/no-image.jpg" />
                        @endif
                    </span>
                    <span class="subject">
                        <span class="from"> {{$group->name }} </span>
                        <span class="time">{{ $group->lastMessage->created_at }} </span>
                    </span>
                    <span class="message"> {{ $group->lastMessage->content }} </span>
                </a>
            </li>
        @endforeach
        --}}
        </ul>
    </li>
</ul>