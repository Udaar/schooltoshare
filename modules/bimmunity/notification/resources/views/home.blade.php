@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>

                <form id="chat-form" action="" method="POST" role="form">
                    <legend>Chat</legend>
                
                    <div class="form-group">
                        <label for="">Message</label>
                        <input type="text" class="form-control" id="message" placeholder="Message">
                    </div>
                    <div class="form-group">
                        <label for="">User</label>
                        <input type="text" class="form-control" id="user" placeholder="User ID">
                    </div>
                
                    
                
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://js.pusher.com/4.0/pusher.min.js"></script>
<script src="Bimmunity/notification/assets/test.js"></script>

    <script type="text/javascript">
       $('#chat-form').on('submit',function (e) {
           e.preventDefault();
           var text=$('#message').val();
           var receiver=$('#user').val();

            $.ajax({
                headers:
                {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                },
                type:'POST',
                url:'/sendMessage/'+receiver,
                data:{'content':text},
                success:function(result){
                    console.log(result);
                    // chatContainer.append(message);
                }
            });


       })

    </script>
    <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('1cebeec3472f0a885c5f', {
      encrypted: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      console.log(data.message);
    });

    var channel = pusher.subscribe('1');
    channel.bind('notification', function(data) {
      console.log(data.message);
    });
  </script>
@endsection
