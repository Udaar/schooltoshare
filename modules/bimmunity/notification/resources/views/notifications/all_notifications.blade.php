@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="/metronic/reset/modules/notification/all.css">
@endsection

@section('content')
<section class="all-notification-section ifm-white-bg">
    <h5 class="ifm-padding-sm-all ifm-no-margin-all bold ifm-white ifm-grey-bg">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAH1SURBVEhL7ZQ9SJtRFIYT0Vg0Bh1aaijViiBoB+lQhUIFB3HI3kYdhFLSCGZxsOBaREFEqPiH2EIH0S17uggdFMRBxMFFMYpDFaeCDonPezkRW4L90rjVFx7OPee+53w/+W58/5ey2Ww1VFh6t8pkMq/hBA4hbGVvouGF7s7SvMIzClOQhDdWzitm1eN5lktKSXahDapc8Yao1cEyXOLN6Zx8EirN5kQ9AA+ox4irrkjSDSlbr0DUbSDWjZDWxHxi7wchaHb5P5F/hDLWR8THKi7AOwjDzz8akuS3Cs+I2XOv5oBYQpyGuIZsQRPFfuKseVWvhYyG3CYsaWtxIt+g3EqMwpIKZxT0SBPwwXyqd7gJHoQ3ZG3q0xvphZfwXYVftjEDPc6FtLZ+L3pqbXpNY/TG4Tmsa9ApxQBxHAbM988XoG8J3oKeIKXCJjRDH3wxXzEX2IYWm7eogl5NDB6CnsYdONaeL4DXHSpiO+xR8hPn4L2KnbAmAxtfWbtzQBxy3R6Et8t69KEkoByO4ZGG6pvVY73ShowSa31unoR3Xj0sS0Bf5CB8c4MkEv0G18eedcR1ehT+C0KDtatfZ+iJpb8LY5BNncaCRI/7u/mr8NZg/gzzBTJuIwoXzSEYvkGCG/Hb9t2Iofrh9mEHIla+V7Hy+a4Aaa4ZK17Wb/UAAAAASUVORK5CYII=">
        All Notifications
    </h5>
    @foreach($notifications->sortByDesc('created_at') as $notification)
        <div class="notification-item {!! count($notification->myReads)?'':'bg-default bg-font-default'!!}" notification-id={{ $notification->id }} status={!! count($notification->myReads)?'read':'unread'!!}>
            <a href="{{ $notification->url }}">
                <div class="media">
                    <div class="media-left">
                        <img src="http://via.placeholder.com/40x40" class="media-object" style="width:40px">
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading ifm-grey bold">{{$notification->content}}</h5>
                        <span>{{$notification->created_at}}</span>
                    </div>
                </div>
            </a>
        </div>
        
    @endforeach
    {{ $notifications->links() }}
</section>
@endsection
@push('scripts')
    <script>
        $(document).on('click', '.notification-item', function() {
            if ($(this).attr('status') == 'unread') {
                $.ajax({
                    url: '/notification/markAsRead/' + $(this).attr('notification-id'),
                    success: function() {
                        updateRecent('notification');
                    }
                });
            }
        });
    </script>
@endpush