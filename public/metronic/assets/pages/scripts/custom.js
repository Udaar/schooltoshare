/**
 Custom module for you to write your own javascript functions
 **/
var Custom = function() {

    // private functions & variables

    var myFunc = function(text) {
        alert(text);
    }

    // public functions
    return {

        //main function
        init: function() {
            //initialize here something.
        },

        //some helper function
        doSomeStuff: function() {
            myFunc();
        },
        dataTableAddRow: function(Table, rowData) {
            var delUrl;
            var editUrl;
            var data = new Array();
            Table.find('th').each(function() {
                if ($(this).attr("key") != "edit" && $(this).attr("key") !=
                    "delete" && $(this).attr("key") != "updated_at" && $(this).attr(
                        "key") != "created_at")
                    data.push(rowData[$(this).attr('key')]);
                if ($(this).attr("key") == "delete")
                    delUrl = $(this).attr("href") + '/' + rowData['id'];
                editUrl = $(this).attr("href") + '/' + rowData['id'] + '/edit/';
            });
            var oTable = Table.dataTable();
            data.push('<a class="edit" href="' + editUrl + '"> Edit </a>',
                '<a class="delete" href=' + delUrl + '> Delete </a>');
            var aiNew = oTable.fnAddData(data);
            oTable.fnDraw();
        },
        dataTableDeleteRow: function(e) {
            var $this = $(this);
            var error = $('.alert-danger');
            var success = $('.alert-success');
            var oTable = $this.closest('table').dataTable();
            console.log(($this.attr('href')).split('#')[1]);
            e.preventDefault();
            if (confirm("Are you sure to delete this row ?") == false) {
                return;
            }
            $.ajax({
                url: $this.attr('href').split('#')[1],
                type: 'DELETE',
                success: function(result) {
                    var nRow = $this.parents('tr')[0];
                    oTable.fnDeleteRow(nRow);
                    success.text("Deleted Successfuly")
                    success.show();
                }
            });
        },
        submitForm: function(e) {
            e.preventDefault();
            var form = $(this).parents('form:first');
            var error = $('.alert-danger');
            var success = $('.alert-success');
            var $this = $(this);
            form.ajaxSubmit({
                beforeSubmit: function() {
                    success.hide();
                    error.hide();
                },
                success: function(res) {
                    error.hide();
                    // success.text("Added Successfuly");
                    // success.show();

                    form.clearForm();
                    $('.fileinput-preview >img').attr('src', '/uploads/placeholder_100x75.png');
                    loadResult(res, form.attr('action'));
                    var rowData = new Array();
                    var rowData = $.map(res, function(value, index) {
                        return [value];
                    });
                    //  rowData.push(res.company,res.from_date,res.to_date,res.title);
                    Custom.dataTableAddRow($(form.attr("for")), res);
                },
                // resetForm: true,
                error: function(errors) {
                    error.empty();
                    errors = JSON.parse(errors.responseText).errors;
                    for (i in errors) {
                        $('.alert-danger').append('<li>' + errors[i] + '</li>');
                    }
                    success.hide();
                    error.show();

                }
            });

        },
        EditRecord: function(e) {
            e.preventDefault();
            $this = $(this);
            var td = $(this).parents('tr').find('td');
            //var td=nRow.find('td');
            console.log($(td[0]).text());
            var Table = $(this).parents('table');
            Table.find('th').each(function(index) {
                $('input[name=' + $(this).attr("key") + ']').val($(td[index]).text());

            });
            $('#submit_form').attr('action', $this.attr('href').split('#')[1]);
            $('#submit_form').attr('method', 'PATCH');
            $('.form').show();
            $('.expand').toggleClass('expan collapse');
        },
        Delete: function(e) {
            var $this = $(this);
            var error = $('.alert-danger');
            var success = $('.alert-success');
            if (confirm("Are you sure to delete this row ?") == false) {
                e.preventDefault();
                return;
            }
            if ($this.attr('href')) {
                e.preventDefault();
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: $this.attr('href').split('#')[1],
                type: 'DELETE',
                success: function(result) {
                    if ($this.attr('target')) {
                        $this.closest($this.attr('target')).remove();
                    } else {
                        $this.closest('tr').remove();
                    }
                    success.text("Deleted Successfuly");
                    success.show();
                    eval($this.attr('callback'))($this);
                }
            });
        },

    };

}();

jQuery(document).ready(function() {
    showUsers();
    $('.users-tab').click(showUsers);
    $('.groups-tab').click(showGroup);

    function showGroup(argument) {
        $('.groups-tab-content').show();
        $('.users-tab-content').hide();
    }

    function showUsers(argument) {
        $('.groups-tab-content').hide();
        $('.users-tab-content').show();
    }

    $('.select2').select2();
    Custom.init();
    $(document).on('click', '.delete', Custom.Delete);
    //$("table").on("click", '.delete', Custom.dataTableDeleteRow);
    //$("table").on("click",'.edit',Custom.EditRecord);
    // $(".button-submit").click(Custom.submitForm);
    $(document).on('click', '.button-submit', Custom.submitForm);



    //Activate sidebar element when click
    var pathname1 = (window.location.pathname).split("/")[1];
    var pathname2 = (window.location.pathname).split("/")[2];
    var href1 = window.location.origin + '/' + pathname1;
    var href2 = window.location.origin + '/' + pathname1 + '/' + pathname2;
    // $(".nav-item ").removeClass("active open");
    // $("a[href='" + href1 + "']").parents('.nav-item').addClass('open active');
    // $("a[href='" + href2 + "']").parents('.nav-item').addClass('open active');

    /*******************CHAT SYSTEM****************************/
    $(document).on('click', '.chat-user', function() {
        var that = $(this);

        $('.page-quick-sidebar-chat-user-form .receiver').val(that.attr('user-id'));
        $('#conversations').attr('user-id', that.attr('user-id'));
        $('#conversations').attr('type', that.attr('type'));
        $('.page-quick-sidebar-chat-user-form .type').val(that.attr('type'));
        $('#conversations').html('');
        loadMessages($(this).attr('user-id'), $(this).attr('type'), function(messages) {
            for (var i in messages) {
                var data = {
                    message: messages[i],
                    user: messages[i].sender,
                }
                appendMessage(data, new Date(data.message.created_at));

            }
        });
    });
    /*******************END CHAT*******************************/
    /**************Load Chat with ajax***********/
    // setInterval(loadMessages,1000);
    // function loadMessages() {
    //     if ($('.page-quick-sidebar-chat-user-form .receiver').val() != '' && $('#quick_sidebar_tab_1').hasClass('page-quick-sidebar-content-item-shown')) {
    //         $.ajax({
    //             url: '/getConversations/' + $('.page-quick-sidebar-chat-user-form .receiver').val() + '/' + $('.page-quick-sidebar-chat-user-form .type').val(),
    //             success: function(result) {
    //                 $('#conversations').html(result);
    //                 if (result.length != conversationsLength) {
    //                     conversationsLength = result.length;
    //                     $(".page-quick-sidebar-chat-user-messages").slimScroll({
    //                         scrollTo: '1000000px'
    //                     });
    //                 }
    //             }
    //         });
    //     }
    // }

    /********************************************/
    // setInterval(loadMessages, 2000);
    // var socket=io('http://ifm.ifmdev.space:6001');
    // console.log(socket);
    // socket.on('ifm'+AuthUser.id,function(data){
    //     if(data.event=='message'){
    //         loadMessages();
    //         updateRecent('message');
    //       }
    //     if(data.event=='notification'){
    //       console.log(data.data[0].content);
    //         updateRecent('notification');
    //         var html='<a href="'+data.data[0].url+'">'+data.data[0].content+'</a>'
    //         toastr.info(html);
    //       }
    // });
});

function receiveMessage(data) {
    if ($('#conversations').attr('type') == 'group' && data.group.id == $('#conversations').attr('user-id')) {
        var time = new Date();
        data.user.name = data.group.name;
        appendMessage(data, time);
    } else if ($('#conversations').attr('type') == 'user' && data.user.id == $('#conversations').attr('user-id')) {
        var time = new Date();

        appendMessage(data, time);
    } else {
        if (data.group) {
            data.user.name = data.group.name;
            console.log('group: ', data.group);
            data.user.picture = data.group.image.path;
            updateMessageNotification(data);
        } else {
            updateMessageNotification(data);
        }

    }

}

function updateMessageNotification(data) {
    var type;
    if(data.group)
    {
        type= "group";
    }
    else
    {
        type = "user";
    }
    var element = '<li class="message-item" sender-id=' + data.user.id + ' type=' + type + '>'
    element += '<a href="#">'
    element += '<span class="photo">'
    element += '<img alt="" class="img-circle" src="' + data.user.picture + '" />'
    element += '</span>'
    element += '<span class="subject">'
    element += '<span class="from">' + data.user.name + ' </span>'
    element += '<span class="time">' + data.message.created_at + '</span>'
    element += '</span>'
    element += '<span class="message">' + data.message.content + '</span>'
    element += '</a>'
    element += '</li>'
    if ($('#messageNotificationBody li[sender-id=' + data.user.id + ']') && !data.group) {
        $('#messageNotificationBody li[sender-id=' + data.user.id + ']').remove();
        $.get("/getUnreadMessageCount", function(result) {
            $('#countofmessage').html(result);
        });
        $('#countofmessage').css('display', 'block');
        $('#messageNotificationBody').prepend(element);
    } else if ($('#messageNotificationBody li[sender-id=' + data.group.id + ']') && data.group) {
        $('#messageNotificationBody li[sender-id=' + data.user.id + ']').remove();
        $.get("/getUnreadMessageCount", function(result) {
            $('#countofmessage').html(result);
        });
        $('#countofmessage').css('display', 'block');
        $('#messageNotificationBody').prepend(element);
    } else {
        $('#messageNotificationBody').prepend(element);
        $('#countofmessage').css('display', 'block');
        $('#countofmessage').html(parseInt($('#countofmessage').html()) + 1);

    }
}

function appendMessage(data, time = "") {
    var wrapper = $('.page-quick-sidebar-wrapper');
    var wrapperChat = wrapper.find('.page-quick-sidebar-chat');
    var chatContainer = wrapperChat.find(".page-quick-sidebar-chat-user-messages");
    var preparePost = function(dir, time, name, avatar, message, messageId) {
        var tpl = '';
        tpl += '<div class="post ' + dir + '">';
        tpl += '<img class="avatar" alt="" src="' + avatar + '"/>';
        tpl += '<div class="message">';
        tpl += '<span class="arrow"></span>';
        tpl += '<a href="#" class="name">' + name + '</a>&nbsp;';
        tpl += '<span class="datetime">' + time + '</span>';
        tpl += '<i class="fa fa-mail-forward forward-btn" style="" message-id=' + messageId + '></i>';
        tpl += '<span class="body">';
        tpl += message;
        tpl += '</span>';
        tpl += '</div>';
        tpl += '</div>';

        return tpl;
    };
    console.log("custom message :", data);
    var text = data.message.content;
    var avatar = data.user.picture;
    var username = data.user.name;

    var message = preparePost((AuthUser.id == data.user.id) ? 'out' : 'in', (time.getHours() + ':' + time.getMinutes()), username, avatar, text, data.message.id);
    message = $(message);
    chatContainer.append(message);
    chatContainer.slimScroll({
        scrollTo: '1000000px'
    });
    $('#conversations').linkify();

};

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

// function getMessage(data) {
//     console.log("custom message :", data);
//     var time = new Date();
//     var text = data.message.content;
//     var avatar = data.user.picture;
//     var username = data.user.name;
//     var quick = QuickSidebar.init;
//     console.log("QuickSidebar  ", quick);
//     console.log("handleQuickSidebarChat  ", quick.f().handleQuickSidebarChat());

//     // var quick = QuickSidebar.init;
//     // var message = quick.handleQuickSidebarChat.handleChatMessagePost.preparePost('out', (time.getHours() + ':' + time.getMinutes()), username, avatar, text);

//     // message = $(message);
//     // chatContainer.append(message);
// }
$(document).on('click', '.message-item', function() {

    $('.chat-sidebar').trigger('click');
    $('li[user-id="' + $(this).attr('sender-id') + '"]').trigger('click');
    $.get("/getUnreadMessageCount", function(result) {
        if (result == 0) {
            $('#countofmessage').html(result);
            $('#countofmessage').css('display', 'none');
        }
        $('#countofmessage').html(result);
    });
});

$(document).on('click','.list > li a',function() {
    $(this).parent().find('.sub-list').toggle();
});
$(document).on('click','.sub-list > li',function() {
    $(this).next('.chiled_list').toggle();
});

// $(document).ready(function() {
//     $.get(guestDomain+'/api/getSystems/' + $('#userencryptedMail').val(), function(result) {
//         console.log(result);
//         for (i in result) {
//             $('#portalsside').append(
//                 '<li class="nav-item" style="padding:10px;padding-top:0;">' +
//                 '<a href="http://' + result[i].subdomain +'/postLogin/'+$('#userencryptedMail').val()+ '" style="border:0;text-align:center!important;padding:6px 8px;background-color:rgba(0,0,0,0.2)">' +
//                 '<span class="title lead bold">' + result[i].system_name[0] + '</span>' +
//                 '</a>' +
//                 '</li>');
//         }
//     });

// });
/***
 Usage
 ***/
//Custom.doSomeStuff();