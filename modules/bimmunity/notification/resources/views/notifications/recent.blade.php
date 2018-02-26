<link rel="stylesheet" href="/metronic/reset/modules/notification/notification.css"> 
<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
    <i class="icon-bell"></i>
    @if(count(collect(\Auth::user()->notifications()->with('myReads')->get())->filter(function ($value, $key) {
                                                    return ! count($value->myReads);
                                                })))
        <span class="badge badge-default">
        {{ count(collect(\Auth::user()->notifications()->with('myReads')->get())->filter(function ($value, $key) {
                                                    return ! count($value->myReads);
                                                })) }}
        </span>
    @endif
</a>
<ul class="dropdown-menu top-bar-menu">
    <li class="external">
        <h3>
            <span class="bold">{{ count(\Auth::user()->notifications) }} pending</span> notifications</h3>
        {{-- <a href="#">view all</a> --}}
    </li>
    <li>
        <ul class="dropdown-menu-list" data-handle-color="#637283">
        @foreach (\Auth::user()->notifications as $notification)
            <li class="notifications-item {!! count($notification->myReads)?'':'bg-default bg-font-default'!!}"  notification-id={{ $notification->id }} status={!! count($notification->myReads)?'read':'unread'!!}>
                <a href="{{ $notification->url }}">
                    <span class="details ifm-block">
                        <span class="label label-sm label-icon label-success">
                            <i class="fa fa-plus"></i>
                        </span>
                        {{$notification->content}}
                    </span>
                    <span class="time ifm-block">
                        <i class="fa fa-calendar"></i>
                        {{$notification->created_at}}
                    </span>
                </a>
            </li>
        @endforeach
        </ul>
    </li>
</ul>

<script src="/metronic/assets/global/plugins/jquery1.12.0.min.js"></script>
<script src="/metronic/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script>
    $(function(){
        $('.dropdown-menu-list').slimScroll({
            height: '250px',
            railVisible: true,
            alwaysVisible: true
        });
    });
</script>