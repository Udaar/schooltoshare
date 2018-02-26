@inject('users', 'App\User')
@inject('groups', 'App\ChatGroup')
<link rel="stylesheet" href="/remodal/dist/remodal.css">
<link rel="stylesheet" href="/remodal/dist/remodal-default-theme.css">
<link rel="stylesheet" href="/metronic/reset/modules/chat/chat.css">
<!-- BEGIN QUICK SIDEBAR -->
<a href="javascript:;" class="page-quick-sidebar-toggler">
    <i class="icon-login"></i>
</a>
<div class="page-quick-sidebar-wrapper linke" data-close-on-body-click="false">
    <div class="page-quick-sidebar">
        <ul class="nav nav-tabs">
            <li class="active users-tab" >
                <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Chat
                    <span class="badge badge-danger">{{ count(\App\User::all() )}}</span>
                </a>
            </li>
            <li class="groups-tab">
                <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Groups
                    <span class="badge badge-success groupN">{{ count(\Auth::user()->groups) }}</span>
                </a>
            </li>
            {{-- <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                            <i class="icon-bell"></i> Alerts </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                            <i class="icon-info"></i> Notifications </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                            <i class="icon-speech"></i> Activities </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                            <i class="icon-settings"></i> Settings </a>
                    </li>
                </ul>
            </li> --}}
        </ul>
        <div class="tab-content">
            <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                    <div class="users-tab-content">
                        <h3 class="list-heading">Staff</h3>
                        <ul class="media-list list-items">
                           
                                @foreach (\App\User::orderBy('name', 'asc')->get() as $user)
                                    <li class="media chat-user ifm-text-left" user-id='{{ $user->id }}' type="user">
                                        <div class="media-status">
                                            {{-- <span class="badge badge-success">8</span> --}}
                                        </div>
                                        @if($user->picture)
                                            <img alt="" class="media-object" src="{{ URL::to($user->picture) }}" />
                                        @else
                                            <img alt="" class="media-object" src="/metronic/images/no-image.jpg" />
                                        @endif
                                        <div class="media-body">
                                            @if($user->id == \Auth::user()->id)
                                                <h4 class="media-heading">{{ $user->name }}.(You)</h4>
                                            @else
                                                <h4 class="media-heading">{{ $user->name }}</h4>
                                            @endif
                                            
                                            <div class="media-heading-sub"> job title </div>
                                        </div>
                                    </li>
                                @endforeach
                            
                        </ul>
                    </div>
                    <div class="groups-tab-content" id="groups-tab-content">
                        @include('chat::ChatGroup.group_list')
                    </div>
                </div>
                <div class="page-quick-sidebar-item">
                    <div class="page-quick-sidebar-chat-user">
                        <div class="page-quick-sidebar-nav">
                            <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                <i class="icon-arrow-left"></i>Back
                            </a>
                        </div>
                        <div class="page-quick-sidebar-chat-user-messages" id="conversations"></div>
                        <div class="page-quick-sidebar-chat-user-form">
                            <div class="input-group">
                                <input type="hidden" class="username" value="{{ \Auth::user()->name }}">
                                <input type="hidden" class="avatar" value="{{ \Auth::user()->picture }}">
                                <input type="hidden" class="receiver" value="">
                                <input type="hidden" class="type" value="">
                                <input id="thumbnail" type="text" class="thumb form-control ifm-no-border-all" placeholder="Type a message here.">
                                <div class="input-group-btn">
                                    <!-- <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn ifm-btn-default ifm-grey-bg ifm-white">
                                        <i class="fa fa-picture-o"></i> Choose
                                    </a> -->
                                    <a id="lfm_all" data-input="thumbnail" data-preview="holder" class="btn ifm-white-bg attach-btn" style="border-color:#c2cad8;border-left-color:#fff;color:#a6a6a6">
                                        <i class="icon-paper-clip"></i>
                                    </a>
                                    <button type="button" class="btn green">
                                        <i class="fa fa-arrow-left"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="forward-div">
                    <div class="forward-back-wrap">
                        <a href="javascript:;" class="forward-back">
                            <i class="icon-arrow-left"></i> Back
                        </a>
                    </div>
                    <ul class="forward-list">
                        {!! Form::open(['id'=>'forwardForm','class'=>'form-horizontal','method'=>'POST','action'=>['\Bimmunity\Chat\Http\Controllers\MessagesController@forwardMessage']]) !!}
                                @foreach (\App\User::all() as $user)
                                    <li class="forward-list-item ifm-padding-15-all">
                                        <div class="media">
                                            <div class="media-left ifm-inline">
                                                <img src="{{ URL::to($user->picture) }}" class="media-object ifm-inline">
                                            </div>
                                            <div class="media-body ifm-inline">
                                                @if($user->id == \Auth::user()->id)
                                                    <h4 class="media-heading ifm-inline">{{$user->name}}." (You)"</h4>
                                                    <input name="users[]" type="checkbox" value="{{$user->id}}" class="userCheck">
                                                @else
                                                <h4 class="media-heading ifm-inline">{{$user->name}}</h4>
                                                <input name="users[]" type="checkbox" value="{{$user->id}}" class="userCheck">
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                   
                                @endforeach
                            <button type="submit" id="submitForward"  class="btn green theme-bg theme-border submitForward">
                                <i class="fa fa-arrow-right"></i>
                            </button>
                        {!!Form::close()!!}                       
                    </ul>
                </div>
                <div id="edit-div" class="edit-div">
                    
                </div>
                 <div id="add-div" class="add-div">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END QUICK SIDEBAR -->

<!-- New Group Modal -->
<div class="remodal" data-remodal-id="newGroup">
  <button data-remodal-action="close" class="remodal-close"></button>
  <h4 style="margin-bottom: 25px">New Chat group</h4>
  {!! Form::open(['id'=>'myForm','class'=>'form-horizontal','method'=>'POST','action'=>['\Bimmunity\Chat\Http\Controllers\ChatGroupController@store']]) !!}
    @include('chat::ChatGroup.group_chat_modal_fields')
  {!! Form::close() !!}
</div>
<div id="displayEditModal">
</div>

<!-- Confirm Delete -->
<div class="remodal confirmation" data-remodal-id="confirmDelete">
  <div class="remodal-head">
    <button data-remodal-action="close" class="remodal-close"></button>
    <h4 style="margin-bottom: 25px">Confirm</h4>
  </div>
  <div class="remodal-body">
      <div class="confirmation-message row">
        <i class="fa fa-warning col-lg-1"></i> 
        <span class="col-lg-11">
            Are you sure you want to delete this group?<br>
            You can't undo this action.
        </span>
      </div>
      {!! Form::open(['id'=>'deleteForm','class'=>'form-horizontal','method'=>'POST','action'=>['\Bimmunity\Chat\Http\Controllers\ChatGroupController@deleteGroup']]) !!}
        <div class="confirmation-action row">
            <div class="col-lg-12">
                <div class="btn-group pull-right">
                    <button type="submit" class="btn green theme-bg theme-border" style="background-color:#EE4266;border-color:#EE4266;margin-right:5px">Yes</button>
                    <button data-remodal-action="cancel" class="btn ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-cancel">No</button>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
  </div>
</div>

<div class="remodal confirmation" data-remodal-id="confirmLeave">
  <div class="remodal-head">
    <button data-remodal-action="close" class="remodal-close"></button>
    <h4 style="margin-bottom: 25px">Confirm</h4>
  </div>
  <div class="remodal-body">
      <div class="confirmation-message row">
        <i class="fa fa-warning col-lg-1"></i> 
        <span class="col-lg-11">
            Are you sure you want to delete this group?<br>
            You can't undo this action.
        </span>
      </div>
      {!! Form::open(['id'=>'leaveForm','class'=>'form-horizontal','method'=>'POST','action'=>['\Bimmunity\Chat\Http\Controllers\ChatGroupController@leaveGroup']]) !!}
        <div class="confirmation-action row">
            <div class="col-lg-12">
                <div class="btn-group pull-right">
                    <button type="submit" class="btn green theme-bg theme-border" style="background-color:#EE4266;border-color:#EE4266;margin-right:5px">Yes</button>
                    <button data-remodal-action="cancel" class="btn ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-cancel">No</button>
                    <!-- <input type="hidden" name="groupId" id="g_id" /> -->
                </div>
            </div>
        </div>
        {!! Form::close() !!}
  </div>
</div>