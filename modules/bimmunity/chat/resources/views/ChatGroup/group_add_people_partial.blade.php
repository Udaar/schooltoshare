<div class="add-for-remove">
    <div class="add-back-wrap">
        <a href="javascript:;" class="add-back">
            <i class="icon-arrow-left"></i> Back
        </a>
    </div>
    <div class="add-users-div clearfix ">
        <h4>
            <span class="fa fa-plus" style="padding-left:15px;"></span>
            Select to Add
        </h4>
        {!! Form::open(['id'=>'addMemberdForm','class'=>'form-horizontal','method'=>'POST','action'=>['\Bimmunity\Chat\Http\Controllers\ChatGroupController@addPeopleToGroup']]) !!}
            <ul class="add-list">
                @foreach($usersToBAdded as $user)
                    <li class="add-list-item ifm-padding-15-all">
                        <div class="media">
                            <div class="media-left ifm-inline">
                                <img src="{{ URL::to($user->picture) }}" class="media-object ifm-inline">
                            </div>
                            <div class="media-body ifm-inline">
                                <h4 class="media-heading ifm-inline">{{$user->name}}</h4>
                                <input name="usersToBeAdded[]" type="checkbox" value="{{$user->id}}" class="memberCheck pull-right">
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            <button type="submit" id="submitAdd"  class="btn green theme-bg theme-border submitAdd">
                <i class="fa fa-plus"></i>
            </button>
        {!! Form::close() !!}
    </div>
</div>