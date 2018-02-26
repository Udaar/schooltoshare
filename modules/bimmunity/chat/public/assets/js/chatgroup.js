    $('#lfm').filemanager('images');
    // $('.dropdown-toggle').click(function(){
    //     alert('arfawr');
    // });
    
    $('#lfm_all').filemanager();
    
   
    $('#lfm_all').on('click',function(e)
    {
        $('.thumb').on('change',function(){
            var text = $(this).val();
            text = text.replace(' ','%20');
            $(this).val((window.location.protocol + "//" + window.location.host +text));
        })
    });
    
/**/

    var group_id;
    var list;
    var message_id;
    var itemRow;
    var user_id;
    var add = $('.add-div');
    function deleteGroup(e) {
        group_id = $(this).attr('group_id');
        list = $(this).closest('.item-li');
        var deleteModal = $('[data-remodal-id=confirmDelete]').remodal();
        deleteModal.open();
        e.stopPropagation();
    }
    function leaveGroup(e) {
        group_id = $(this).attr('group_id');
        list = $(this).closest('.item-li');
        var leaveModal = $('[data-remodal-id=confirmLeave]').remodal();
        leaveModal.open();
        e.stopPropagation();
    }
    function deleteMember(e) {
        group_id = $(this).attr('groupId');
        user_id = $(this).attr('userId');
        itemRow = $(this).closest('.item-row');
        console.log("G: "+group_id);
        console.log(user_id);
        console.log(itemRow);
        $('[data-remodal-id=confirmDeleteU] .userName').text($(this).attr('userName'));
        var deleteModalU = $('[data-remodal-id=confirmDeleteU]').remodal();
        //$('#deleteFormU').append('<input type="hidden" value="'+user_id +'" name="userId">');
        deleteModalU.open();
        e.stopPropagation();
    }
    
    function makeAdmin(e) {
        group_id = $(this).attr('groupId');
        user_id = $(this).attr('userId');
        itemRow = $(this).closest('.item-row');
        console.log("G: "+group_id);
        console.log(user_id);
        console.log(itemRow);
        $('[data-remodal-id=confirmMakeAdmin] .userName').text($(this).attr('userName'));
        var makeAdminModal = $('[data-remodal-id=confirmMakeAdmin]').remodal();
        makeAdminModal.open();
        e.stopPropagation();
    }
    function removeAdmin(e) {
        group_id = $(this).attr('groupId');
        user_id = $(this).attr('userId');
        itemRow = $(this).closest('.item-row');
        console.log("G: "+group_id);
        console.log(user_id);
        console.log(itemRow);
        $('[data-remodal-id=confirmRemoveAdmin] .userName').text($(this).attr('userName'));
        var removeAdminModal = $('[data-remodal-id=confirmRemoveAdmin]').remodal();
        removeAdminModal.open();
        e.stopPropagation();
    }
    function addPeople(e) {
        group_id = $(this).attr('groupId');
        console.log(group_id);
        $.get("ChatGroup/add/"+group_id,function (data) {
            $(".add-for-remove").remove();
            $("#add-div").html(data);
            //$('#lfm-edit').filemanager();
            console.log(data);
            //ev.stopPropagation();
        });
          add.addClass("show");
        $('.page-quick-sidebar-chat').removeClass('page-quick-sidebar-content-item-shown');
    };
    function addBack(e) {
        add.removeClass("show"); 
        $('.page-quick-sidebar-chat').removeClass('page-quick-sidebar-content-item-shown');
        $('#edit-div').empty();
        $.get("ChatGroup/edit/"+group_id, function(data, status){
            $('#edit-div').html(data);
            $('#lfm-edit').filemanager();
            //alert("Data: " + data + "\nStatus: " + status);
        });
    }
    
    function forwardButton(e)
    {
        message_id=$(this).attr('message-id');
        console.log($(this).attr('message-id'));
    }

    $(document).on('click', '.leaveG', leaveGroup);
    $(document).on('click', '.deleteG', deleteGroup);
    $(document).on('click', '.deleteU', deleteMember);
    $(document).on('click', '.makeAdmin', makeAdmin);
    $(document).on('click', '.removeAdmin', removeAdmin);
    //$(document).on('click', '.editG', editGroup);
    $(document).on('click', '.forward-btn', forwardButton);
    $(document).on('click','.add-people',addPeople);
    $(document).on('click', '.add-back',addBack);
    $('.userCheck').on('change',function()
    {
        if(jQuery('#forwardForm input[type=checkbox]:checked').length) { 
            $('#submitForward').css('display','block');
        }
        else
        {
            $('#submitForward').css('display','none');
        }
    });
    $(document).on('change','.memberCheck',function()
    {
        if(jQuery('#addMemberdForm input[type=checkbox]:checked').length) { 
            $('#submitAdd').css('display','block');
        }
        else
        {
            $('#submitAdd').css('display','none');
        }
    });
    /**
    * submit add people for a group
     */
     $(document).on('submit','#addMemberdForm',function(ev) {
          var that=this;
    // submit the form
    console.log(group_id);
    ev.preventDefault();
    $.ajax({
            type: $('#addMemberdForm').attr('method'),
            url: $('#addMemberdForm').attr('action'),
            data: $('#addMemberdForm').serialize() +"&groupId=" + parseInt(group_id),
            success: function(data,ev)
            {
                console.log(data);
                addBack(ev);
            }
        });
        // return false to
     });
    /**
    Forward Form
     */
    $('#forwardForm').submit(function(ev) {
    // submit the form
    console.log(message_id);
    ev.preventDefault();
    $.ajax({
            type: $('#forwardForm').attr('method'),
            url: $('#forwardForm').attr('action'),
            data: $('#forwardForm').serialize() + "&messagId=" + parseInt(message_id),
            success: function(data)
            {
                console.log(data);
                // list.css( "display", "none" );
                $('.page-quick-sidebar-chat-user .page-quick-sidebar-back-to-list').trigger('click');
                forward.removeClass("show");

            }
        });
        // return false to prevent normal browser submit and page navigation
    });


    // prepare the form when the DOM is ready 
    $('#deleteForm').submit(function(ev) {
    // submit the form
    var that=this;
    console.log(group_id);
    ev.preventDefault();
    $.ajax({
            type: $('#deleteForm').attr('method'),
            url: $('#deleteForm').attr('action'),
            data: $('#deleteForm').serialize() + "&groupId=" + parseInt(group_id),
            success: function(data)
            {
                console.log(data);
                list.css( "display", "none" );
                $(that).find('.ifm-cancel').trigger("click");
            }
        });
        // return false to prevent normal browser submit and page navigation
    });
    $(document).on('submit','#deleteFormU',function(ev) {
        var that=this;
    // submit the form
    console.log(group_id);
    console.log(user_id);
    ev.preventDefault();
    $.ajax({
            type: $('#deleteFormU').attr('method'),
            url: $('#deleteFormU').attr('action'),
            data: $('#deleteFormU').serialize() +"&groupId=" + parseInt(group_id) +"&userId=" + parseInt(user_id),
            success: function(data)
            {
                console.log(data);
                itemRow.css( "display", "none" );
                $(that).find('.ifm-cancel').trigger("click");
            }
        });
        // return false to prevent normal browser submit and page navigation
    });
    $(document).on('submit','#makeAdminForm',function(ev) {
        var that=this;
    // submit the form
    console.log(group_id);
    console.log(user_id);
    ev.preventDefault();
    $.ajax({
            type: $('#makeAdminForm').attr('method'),
            url: $('#makeAdminForm').attr('action'),
            data: $('#makeAdminForm').serialize() +"&groupId=" + parseInt(group_id) +"&userId=" + parseInt(user_id),
            success: function(data)
            {
                console.log(data);
                $('.memberWrap').remove();
                $('#memberType').html(data);
                $(that).find('.ifm-cancel').trigger("click");
            }
        });
        // return false to prevent normal browser submit and page navigation
    });

    $(document).on('submit','#removeAdminForm',function(ev) {
        var that=this;
    // submit the form
    console.log(group_id);
    console.log(user_id);
    ev.preventDefault();
    $.ajax({
            type: $('#removeAdminForm').attr('method'),
            url: $('#removeAdminForm').attr('action'),
            data: $('#removeAdminForm').serialize() +"&groupId=" + parseInt(group_id) +"&userId=" + parseInt(user_id),
            success: function(data)
            {
                console.log(data);
                $('.memberWrap').remove();
                $('#memberType').html(data);
                $(that).find('.ifm-cancel').trigger("click");
            }
        });
        // return false to prevent normal browser submit and page navigation
    });


    $('#leaveForm').submit(function(ev) {
    // submit the form
    var that = this;
    ev.preventDefault();
    $.ajax({
            type: $('#leaveForm').attr('method'),
            url: $('#leaveForm').attr('action'),
            data: $('#leaveForm').serialize() + "&groupId=" + parseInt(group_id),
            success: function(data)
            {
                list.css( "display", "none" );
                $(that).find('.ifm-cancel').trigger("click");
            }
        });
        // return false to prevent normal browser submit and page navigation
    });


/** */

    var forward = $('.forward-div');
    var edit = $('.edit-div');
    $(document).on('click', '.forward-btn',function() {
        forward.addClass("show");
    });
    $(document).on('click', '.forward-back', function(){
        forward.removeClass("show");
    });

    $(document).on('click', '.editG',function(ev) {
         group_id = $(this).attr('group_id');
        console.log(group_id);
        $.get("ChatGroup/edit/"+group_id,function (data) {
            $(".edit-for-remove").remove();
            $("#edit-div").html(data);
            $('#lfm-edit').filemanager();
            console.log(data);
            //ev.stopPropagation();
        });
          edit.addClass("show");
        $('.page-quick-sidebar-chat').removeClass('page-quick-sidebar-content-item-shown');
    });
    $(document).on('click', '.edit-back', function(){
        edit.removeClass("show"); 
        $('.page-quick-sidebar-chat').removeClass('page-quick-sidebar-content-item-shown');
        $('#groups-tab-content').empty();
        $.get("/chatGroup/loadGroup", function(data, status){
            $('#groups-tab-content').html(data);
            //alert("Data: " + data + "\nStatus: " + status);
        });
    });

    $(document).on('click', '.group-name', function(){
        $('.group-name').css('display','none');
        $('#editNameForm').css('display','block');
    });
    $(document).on('click','#cancel_edit',function(){
        $('.group-name').css('display','block');
        $('#editNameForm').css('display','none');
    });
    $(document).on('change','#thumbnail_edit',function(){
        var image = $(this).val();
        var group_id = $(this).attr('groupId');
        $.ajaxSetup({
            headers:{
                 'X-CSRF-Token': $('input[name="_token"]').val()
            }
        });

        $.post( "chatGroup/changeImage",
        { myImage: image , groupId: group_id },
         function( data ) {
            console.log(data);
            $('.image-source').attr('src',data);
        });
    })
   
    $(document).on('click','#submit_edit_name',function(){
        $('#editNameForm').submit(function(ev) {
        // submit the form
        ev.preventDefault();
        $.ajax({
                type: $('#editNameForm').attr('method'),
                url: $('#editNameForm').attr('action'),
                data: $('#editNameForm').serialize(),
                success: function(data)
                {
                    console.log(data);
                    $('.group-name').text('Group Name: ' + data);
                    $('.group-name').css('display','block');
                    $('#editNameForm').css('display','none');
                }
            });
            // return false to prevent normal browser submit and page navigation
        });
    });
    // prepare the form when the DOM is ready 
    $('#myForm').submit(function(ev) {
    // submit the form
    var that = this;
    ev.preventDefault();
    $.ajax({
        type: $('#myForm').attr('method'),
        url: $('#myForm').attr('action'),
        data: $('#myForm').serialize(),
        success: function(data)
        {
            console.log(data);
            $("#groupList").append(
            '<li class="media item-li chat-user ifm-text-left" user-id="'+data.id+'" type="group">'+
                    '<img class="media-object" src="'+data.image.path +'"alt=".">'
                    +'<div class="media-body clearfix">'
                        +'<h4 class="media-heading pull-left">'+data.name+'</h4>'+
                         '<div class="dropdown pull-right">'
                            +'<a href="#" class="dropdown-toggle list-buttons" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'
                                +'<i class="fa fa-ellipsis-v"></i>'
                            +'</a>'
                            +'<ul class="dropdown-menu action-drop-down">'
                                +'<li>'
                                    +'<a href="#" class="editG"  group_id="'+data.id+'"><i class="fa fa-pencil"></i> Edit</a>'
                                +'</li>'
                                +'<li>'
                                    +'<a class="deleteG" group_id="'+data.id+'"data-remodal-target="confirmDelete"><i class="fa fa-trash"></i> Delete</a>'
                                +'</li>'
                                +'<li role="separator" class="divider"></li>'
                                +'<li><a class="leaveG" group_id="'+data.id+'" data-remodal-target="confirmLeave"><i class="fa fa-sign-out"></i> Leave</a></li>'
                            +'</ul>'
                         +'</div></div></li>'
            );
            console.log($('.groupN').text());
            var res = parseInt($('.groupN').text()) + 1;
            $('.groupN').text(res);
            $(that).find('.ifm-cancel').trigger("click");
        }
    });
    // return false to prevent normal browser submit and page navigation
});