<h3 class="list-heading clearfix">
    <span class="pull-left">Groups</span>
    <a class="pull-right new-group-link" data-remodal-target="newGroup"><i class="fa fa-plus"></i> New group</a>
    <!-- <a class="pull-right new-group-link" data-toggle="modal" href="#basic"> <i class="fa fa-plus"></i> New group </a> -->
</h3>
<div style="width: 500px; margin: auto;"></div>

<ul class="media-list list-items" id ="groupList">
    @foreach (\Auth::user()->groups->sortBy('name') as $group)
        <li class="media item-li chat-user ifm-text-left dropdown" user-id='{{ $group->id }}' type="group">
            <img class="media-object" src="{{ $group->image->path }}" alt=".">
            <div class="media-body clearfix">
                <h4 class="media-heading pull-left">{{ $group->name }}</h4>
                <div class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle list-buttons" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
                    <ul class="dropdown-menu action-drop-down">
                        @if(App\ChatGroup::find($group->id)->memberType(\Auth::user()->id) == 0 or App\ChatGroup::find($group->id)->memberType(\Auth::user()->id) == 1)
                            <li>
                                <a href="#" class="editG"  group_id="{{$group->id}}"><i class="fa fa-pencil"></i> Edit</a>
                            </li>
                        @endif
                        @if(\Auth::user()->id == $group->created_by)
                        <li>
                            <a class="deleteG" group_id="{{$group->id}}" data-remodal-target="confirmDelete"><i class="fa fa-trash"></i> Delete</a>
                        </li>
                        @endif
                        <li role="separator" class="divider"></li>
                        <li><a class="leaveG" group_id="{{$group->id}}" data-remodal-target="confirmLeave"><i class="fa fa-sign-out"></i> Leave</a></li>
                    </ul>
                </div>
            </div>
        </li>
    @endforeach
</ul>