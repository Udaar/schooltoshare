function sendMessage(message, receiver, type = 'user', functionName, callback) {
    $.ajax({
        headers: {
            'X-CSRF-Token': $('input[name="_token"]').val()
        },
        type: 'POST',
        url: '/sendMessage/' + receiver + '/' + type,
        data: { 'content': message, "functionName": functionName },
        success: function(result) {
            callback(result);
        }
    });

}

function loadMessages(receiver_id, type = 'user', callback) {
    $.ajax({
        url: '/getConversations/' + receiver_id + '/' + type,
        success: function(result) {
            callback(result);
        }
    });
}


// Enable pusher logging - don't include this in production
Pusher.logToConsole = true;

var pusher = new Pusher('1cebeec3472f0a885c5f', {
    encrypted: true
});
var channel = pusher.subscribe('bimmunity_' + AuthUser.id);
channel.bind('message', function(data) {
    console.log(" My mesage :", data);
    console.log("function name:", data.functionName);
    eval(data.functionName)(data);

});

var channel = pusher.subscribe('1');
channel.bind('notification', function(data) {
    console.log(data.message);
    // trigger an artificial click event
});