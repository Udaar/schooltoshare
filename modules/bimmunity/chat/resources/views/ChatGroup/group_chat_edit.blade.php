<!-- Edit Group Modal -->
<div class="edit-for-remove">
    <div class="edit-back-wrap">
        <a href="javascript:;" class="edit-back">
            <i class="icon-arrow-left"></i> Back
        </a>
    </div>
    <div class="edit-name-div clearfix">
        <h4>
            <span class="icon-info"></span>
            Chat Info
        </h4>
        <div class="row ifm-margin-15-top">
            <div class="col-xs-3 ifm-no-padding-right">
                <div class="input-group">
                    <span class="input-group-btn">
                        <img class="img-circle image-source"  src="{{$group->image->path}}" alt="" id="lfm-edit" data-input="thumbnail_edit" width="80%" style="cursor: pointer;height:53px">
                        <!-- <a id="lfm-edit" data-input="thumbnail_edit" data-preview="holder_edit" class="btn ifm-btn-default ifm-grey-bg ifm-white">
                            <i class="fa fa-picture-o"></i> Choose
                        </a> -->
                    </span>
                    <input id="thumbnail_edit" groupId="{{$group->id}}" class="form-control input-wd-sm ifm-border-light-grey-all" style="display:none" type="text" name="image">
                </div>
            </div>
            <div class="col-xs-9 ifm-no-padding-left">
                <span class="group-name">Group Name: {{$group->name}}</span>
                {!! Form::open(['id'=>'editNameForm','class'=>'form-horizontal edit-name-form','method'=>'POST','action'=>['\Bimmunity\Chat\Http\Controllers\ChatGroupController@changeGroupName',$group->id]]) !!}
                    {!! Form::text('name',$group->name,['class'=>'form-control ifm-border-light-grey-all']) !!}
                    <button type="button" class="btn green theme-bg theme-border btn-edit" id="cancel_edit" style="margin-left:5px;">NO</button>
                    <button type="submit" class="btn green theme-bg theme-border btn-edit" id="submit_edit_name">OK</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div class="members-div">
        <h4>
            Members
        </h4>
        <div class="row ifm-margin-15-top">
            <div class="col-xs-12" style="cursor:pointer">
                <div class="col-xs-1 ifm-no-padding-left">
                    <i class="fa fa-user-plus" style="font-size:17px"></i>
                </div>
                <div class="add-people  col-xs-11 ifm-no-padding-left" groupId="{{$group->id}}" >
                    <span style="font-size:15px">Add people</span>
                </div>
            </div>
            <div class="col-xs-12" id="memberType">
                 <div class="memberWrap">
                    @foreach ($group->members as $user)
                        @if($user->id != \Auth::user()->id)
                            <div class="row ifm-margin-15-top item-row" style="padding-bottom:15px;padding-right:15px">
                                <div class="col-xs-2 ifm-no-padding-right">
                                    <img class="img-circle media-object" src="{{ $user->picture }}" alt="." style="cursor:pointer;width:100%">
                                </div>
                                <div class="col-xs-10" style="margin-top:10px">
                                    <h4 class="media-heading pull-left">{{ $user->name }}
                                        <br>
                                        @if(App\ChatGroup::find($group->id)->memberType($user->id) == 0)
                                            <span style="font-size:12px;font-weight:normal;color:#cf2828;">
                                                owner
                                            </span>
                                        @elseif(App\ChatGroup::find($group->id)->memberType($user->id) == 1)
                                            <span style="font-size:12px;font-weight:normal;color:#1f4cf0;">
                                                admin
                                            </span>
                                        @else
                                            <span style="font-size:12px;font-weight:normal;">
                                                member
                                            </span>
                                        @endif
                                    </h4>
                                    @if(App\ChatGroup::find($group->id)->memberType($user->id) != 0)
                                        <div class="dropdown pull-right">
                                            <a href="#" class="dropdown-toggle list-buttons" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </a>
                                            <ul class="dropdown-menu action-drop-down">
                                                <li>
                                                    <a class="deleteU" groupId="{{$group->id}}" userName="{{$user->name}}" userId="{{$user->id}}" data-remodal-target="confirmDeleteU"><i class="fa fa-trash"></i> Delete</a>
                                                </li>
                                                <li> 
                                                    @if(App\ChatGroup::find($group->id)->memberType($user->id) == 2)                                           
                                                        <a class="makeAdmin" groupId="{{$group->id}}" userName="{{$user->name}}" userId="{{$user->id}}" data-remodal-target="confirmMakeAdmin"><i class="fa fa-user-secret"></i> Make Admin</a>
                                                    @else
                                                        <a class="removeAdmin" groupId="{{$group->id}}" userName="{{$user->name}}" userId="{{$user->id}}" data-remodal-target="confirmRemoveAdmin"><i class="fa fa-user-secret"></i> Remove Admin</a>
                                                    @endif
                                                </li>
                                            </ul>
                                        </div>
                                    @endif 
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Confirm Delete -->
<div class="remodal confirmation" data-remodal-id="confirmDeleteU">
  <div class="remodal-head">
    <button data-remodal-action="close" class="remodal-close"></button>
    <h4 style="margin-bottom: 25px">Confirm</h4>
  </div>
  <div class="remodal-body">
      <div class="confirmation-message row">
        <i class="fa fa-warning col-lg-1"></i> 
        <span class="col-lg-11">
            Are you sure you want to delete <span class="userName ifm-no-padding-left bold"></span> from this group?
        </span>
      </div>
      {!! Form::open(['id'=>'deleteFormU','class'=>'form-horizontal','method'=>'POST','action'=>['\Bimmunity\Chat\Http\Controllers\ChatGroupController@deleteMember']]) !!}
        <div class="confirmation-action row">
            <div class="col-lg-12">
                <div class="btn-group pull-right">
                   {{-- <input type="hidden" value="{{$group->id}}" name="groupId">--}}
                    <button type="submit" class="btn green theme-bg theme-border" style="background-color:#EE4266;border-color:#EE4266;margin-right:5px">Yes</button>
                    <button data-remodal-action="cancel" class="btn ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-cancel">No</button>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
  </div>
</div>

<!-- Make Admin -->
<div class="remodal confirmation" data-remodal-id="confirmMakeAdmin">
    <div class="remodal-head">
        <button data-remodal-action="close" class="remodal-close"></button>
        <h4 style="margin-bottom: 25px">Confirm</h4>
    </div>
    <div class="remodal-body">
      <div class="confirmation-message row">
        <i class="fa fa-warning col-lg-1"></i> 
        <span class="col-lg-11">
            Are you sure you want to make <span class="userName ifm-no-padding-left bold"></span> admin
        </span>
      </div>
      {!! Form::open(['id'=>'makeAdminForm','class'=>'form-horizontal','method'=>'POST','action'=>['\Bimmunity\Chat\Http\Controllers\ChatGroupController@makeAdmin']]) !!}
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

<!-- Remove Admin -->
<div class="remodal confirmation" data-remodal-id="confirmRemoveAdmin">
    <div class="remodal-head">
        <button data-remodal-action="close" class="remodal-close"></button>
        <h4 style="margin-bottom: 25px">Confirm</h4>
    </div>
    <div class="remodal-body">
      <div class="confirmation-message row">
        <i class="fa fa-warning col-lg-1"></i> 
        <span class="col-lg-11">
            Are you sure you want to remove <span class="userName ifm-no-padding-left bold"></span> from being admin?
        </span>
      </div>
      {!! Form::open(['id'=>'removeAdminForm','class'=>'form-horizontal','method'=>'POST','action'=>['\Bimmunity\Chat\Http\Controllers\ChatGroupController@removeAdmin']]) !!}
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