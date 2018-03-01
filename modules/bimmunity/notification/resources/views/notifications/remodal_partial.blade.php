<h4>{{$notification_type->name}}</h4>
<form id="manageNotify" action="/saveNotifications/{{$notification_type->id}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label class="ifm-grey">Roles</label>
        <select name="roles[]" id="roles" class="select2" multiple>
            @foreach($roles as $role)
                <option {{($notification_type->roles->contains($role))?'selected':''}} value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label class="ifm-grey">Relations</label>
        <select name="relations[]" id="relations" class="select2" multiple>
            @foreach($relations as $relation)
                <option {{($notification_type->realtions_notifications->contains($relation))?'selected':''}} value="{{$relation->id}}">{{$relation->name}}</option>
            @endforeach
        </select>
    </div>
    {{--  <div class="form-group">
        <label class="ifm-grey">Users</label>
        <select name="" id="users" class="select2" multiple>
        </select>
    </div>  --}}
    <!-- Submit Field -->
    <div class="col-xs-12 ifm-no-padding-all">
        <div class="form-group pull-right">
            {!! Form::submit('Save', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
            <a href="" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
        </div>
    </div>
<!-- /Submit Field -->
</form>