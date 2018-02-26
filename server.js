
var io=require('socket.io')(6001);
console.log('hello');
// io.on('connection',function(socket){
//     console.log('NEW Connection',socket.id);
//     // socket.send('message from server');
//     // io.emit('server-info','an event sent to all connected clients');
//     socket.on('message',function (data) {
//         socket.broadcast.send(data);
//     })
// })


var Redis=require('ioredis'),
	redis=new Redis(6379, '127.0.0.1');

	redis.psubscribe('*',function(error,count){

	});


	redis.on('pmessage',function(pattern,channel,message){
		message = JSON.parse(message);
		console.log(message.event);
		if(message.event=='notification')
		channel = JSON.parse(channel);
		console.log(channel + ':'+ message.event,message);
		if(Array.isArray(channel)){
			for(var i in channel){
				io.emit("ifm"+channel ,message);
			}	
		}
		else{
				io.emit(channel ,message);
		}
	});
