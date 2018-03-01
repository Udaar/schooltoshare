@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="/metronic/reset/modules/notification/manage.css">
@endsection

@section('content')

<section class="manage-notification-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">
    <!-- Manage Notification Title Bar -->
    <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAJxSURBVEhL7VM9aFRBEH4R//APLQwq4h+CoBZiYQTBgIWkCMqFt+/O3MHLm93Z9+7gbCwULF4joiAiKP4hKliIdvbaCBYKYiFiYWMwioWKlaCF+s1mL1wuL5KL6fSDeW93duabndmZ4N/C4TheOWjtEr+dW0Rk9yuyH/F/VyFa59UzQzTCu+V2flsIkJ+OtL0AeRBqW/bqQpTjdFNozGa36c/z+RHx60rCfYeIljtlG4aINipt7yriHyD/5YTsV8j5Wq221Js5KKUWxnG8ONKcwue+U+I2A0rzQ1nD+Z4y6RF3AIRab4Xx2ARxhyCrJ6rRWObNpYynQHzCWrsA//cqbqwR0uthkmqpK8g+TXJAOdoJiyTUfNKbu9KgGqN5ns/D/xLO6hL1RUjZNkVmBAGueNugxLwWBD87CacKj3kXB2T1TBmzSyqBst6Egr+4lIjP4TDzdkGYcH8x4VSpVpsrvJurSESmGup0Dy7/CAr+5g6ILyOlYWcFyLqTaDpR1m7wbsJ3RkoTUbYTnE+lRJ/l9XH7s1A0vN2sA0hZwFORDFzz4PMcj7wdr16D8S1vN/sAml9WjNkxzsc3XGmwSMMkWS3ZtAaumwCtoYqM2QuON1j2oCJX0Tgc4PAANo+dAdnbrTlA0GNFZEVSJj4oPq5RNB8daDYX4eIfSlnWG0jPSlqRTvfJgRgKpN2KyAqF+Jr4CJd0JC7ahO6OIxLIG7SPfdmYwUKi6eX7UFLf4t3dDJWMWe+3kyGTjOijBSR/FNcxM8Fwvb4KKV6UtLsRaXNP0T1kUkFwfELwkFD3jJ/OEdzDafsW3fVK3sir/+NvEQS/AbQY/qnpCnVoAAAAAElFTkSuQmCC">
            Manage Notifications
        </h3>
    </div>
    <div class="row">
        @include('flash::message')
        @foreach($notifications as $notification)
            <div class="col-lg-3">
                <div class="notification-box text-center notify bg-default" not-id="{{$notification->id}}">
                    <a  class="ifm-grey capitalize bold"> {{$notification->name}} </a>
                </div>
            </div>
        @endforeach
    </div>
</section>

<div class="remodal notification-remodal" data-remodal-id="manage_notification"
  data-remodal-options="hashTracking: false, closeOnOutsideClick: false">

  <button data-remodal-action="" class=""></button>
  
      <div class="remodal-part">
      </div>
      
</div>

@endsection

@push('scripts')
<script>
    var id=0;
    var inst;
    $(document).on('click','.notification-box',function(){
        id = $(this).attr('not-id');
        console.log(id);
        $.get( "/getPartial/"+id, function( data ) {
            $( ".remodal-part" ).html( data );
            console.log(data);
            $('.select2').select2();
            inst = $('[data-remodal-id=manage_notification]').remodal();
            inst.open();
        });
    });
    $(document).on('submit','#manageNotify',function(ev) {
        var that=this;
    // submit the form
    console.log(group_id);
    ev.preventDefault();
    $.ajax({
            type: $('#manageNotify').attr('method'),
            url: $('#manageNotify').attr('action'),
            data: $('#manageNotify').serialize(),
            success: function(data,ev)
            {
                console.log(data);
                if(data == 'true')
                inst.close();
            }
        });
        // return false to
    });
    {{--  $(document).on('opening', '.notification-remodal', function () {
        
        
    });  --}}
</script>
@endpush
