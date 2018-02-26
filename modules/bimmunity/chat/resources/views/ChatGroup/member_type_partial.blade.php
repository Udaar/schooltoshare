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