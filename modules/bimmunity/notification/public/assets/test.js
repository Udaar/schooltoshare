function updateRecent(event) {
    $.ajax({
        url: '/' + event + '/getRecent/',
        success: function(result) {
            if (event == 'message') {
                $('#header_inbox_bar').html(result);
            }
            if (event == 'notification') {
                $('#header_notification_bar').html(result);
            }
        }
    });
}
$(document).on('click', '.notifications-item', function() {
    if ($(this).attr('status') == 'unread') {
        $.ajax({
            url: '/notification/markAsRead/' + $(this).attr('notification-id'),
            success: function() {
                updateRecent('notification');
            }
        });
    }
});
/*
    $(document).on('click', '.notifications-item', function() {
        // if ($(this).attr('status') == 'unread') {
        //     $.ajax({
        //         url: '/notification/markAsRead/' + $(this).attr('notification-id'),
        //         success: function() {
        //             updateRecent('notification');
        //         }
        //     });
        // }
        alert("sdsd");
    });
*/
// Enable pusher logging - don't include this in production
Pusher.logToConsole = true;

var pusher = new Pusher('1cebeec3472f0a885c5f', {
    encrypted: true
});


var channel = pusher.subscribe('3');
channel.bind('notification', function(data) {
    updateRecent('notification');
    console.log(data.message);
});