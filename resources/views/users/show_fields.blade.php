@push('head')
    <link rel="stylesheet" href="/metronic/reset/tabBased.css">
    {{-- <link rel="stylesheet" href="/metronic/reset/tabular.css">
    <link rel="stylesheet" href="/metronic/reset/extandableTable.css"> --}}
    <link rel="stylesheet" href="/metronic/reset/view_info.css">
@endpush

<!-- Tabs Links -->
<ul class="user-show-nav-tabs nav nav-tabs swipe" id="tabs">
    <li class="user-show-taxonomy-tab taxonomy-tab active">
        <a class="bold" style="border-left: 1px solid #ddd" href="#user-details" data-toggle="tab" tax>
            <span style="display: block;" class="fa fa-info-circle icon"></span>
            User Details
        </a>
    </li>
    <li class="user-show-taxonomy-tab taxonomy-tab">
        <a class="bold" style="border-left: 1px solid #ddd" href="#user-role-list" data-toggle="tab" tax>
            <span style="display: block;" class="fa fa-warning icon"></span>
            Roles List
        </a>
    </li>
    <li class="user-show-taxonomy-tab taxonomy-tab">
        <a class="bold" style="border-left: 1px solid #ddd" href="#user-privilege-list" data-toggle="tab" tax>
            <span style="display: block;" class="fa fa-star icon"></span>
            Privilege List
        </a>
    </li>
</ul>

<div class="user-show-tab-content tab-content">
    <!-- Zone Details -->
    <div class="user-show-tab-pane tab-pane active" id="user-details">
        <div class="portlet light ifm-no-padding-top ifm-padding-xs-left ">
            <div class="portlet-title ifm-padding-sm-top ifm-no-border-bottom ifm-padding-sm-bottom ifm-no-margin-bottom">
                <div class="caption">
                    <i class="fa fa-info-circle ifm-main"></i>
                    <span class="caption-subject ifm-main bold uppercase">User Details</span>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="user-show-portlet-body ifm-no-padding-top portlet-body">
                <div class="user-show-wrapper info-wrapper ifm-no-border-bottom ifm-margin-sm-bottom">
                    <!-- Show Zone Info Box -->
                    <div class="user-show-box info-box">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- First Row -->
                                <div class="row">
                                    <!-- Image -->
                                    <div class="col-md-3">
                                        <div class="user-show-item info-item">
                                            <div class="media">
                                                <div class="media-body">
                                                    <img src="/{{ $user->picture}}" class="ifm-grey" style="width:100%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Second Row --> 
                                <div class="row">
                                    <!-- Email -->
                                    <div class="col-lg-3 col-xs-12">
                                        <div class="user-show-item info-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <span class="fa-stack fa-lg ifm-main">
                                                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                                                        <i class="media-object fa fa-envelope fa-stack-1x"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Email</h4>
                                                    <span class="ifm-grey">{{ $user->email}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Phone -->
                                    <div class="col-lg-3 col-xs-12">
                                        <div class="user-show-item info-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <span class="fa-stack fa-lg ifm-main">
                                                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                                                        <i class="media-object fa fa-phone fa-stack-1x"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Phone</h4>
                                                    <span class="ifm-grey">{{ $user->phone}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Cell Phone -->
                                    <div class="col-lg-3 col-xs-12">
                                        <div class="user-show-item info-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <span class="fa-stack fa-lg ifm-main">
                                                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                                                        <i class="media-object fa fa-mobile fa-stack-1x"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Cell Phone</h4>
                                                    <span class="ifm-grey">{{ $user->cell_phone}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Third Row -->
                                <div class="row">
                                    <!-- Address -->
                                    <div class="col-xs-12">
                                        <div class="user-show-item info-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <span class="fa-stack fa-lg ifm-main">
                                                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                                                        <i class="media-object fa fa-map fa-stack-1x"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Address</h4>
                                                    <span class="ifm-grey">{{ $user->address}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Roles List -->
    <div class="user-show-tab-pane tab-pane" id="user-role-list">
        <div class="portlet light">
            <div class="portlet-title ifm-no-margin-bottom">
                <div class="caption">
                    <i class="fa fa-warning ifm-main"></i>
                    <span class="caption-subject ifm-main bold uppercase">Role List</span>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="user-show-portlet-body portlet-body clearfix">
                <div class="container-fluid ifm-margin-sm-bottom ifm-no-padding-right ifm-relative">
                {!! Form::open(['class'=>'form-horizontal','method'=>'POST','action'=>['UserController@addRole']]) !!}
                    <div class="row">
                        <div class="col-xs-9 ifm-no-padding-left">
                            {!! Form::select('roles[]', $roles->pluck('name','id'), null, ['id'=>'multi-append','class'=>'form-control select2','multiple']);
                            !!}
                            <!--<select id="multiple1" class="form-control select2 select2-multiple" multiple data-placeholder="Select Role">
                                <option value="role1">Role1</option>
                                <option value="role2">Role2</option>
                            </select>-->
                        </div>
                        {!! Form::hidden('userId', $user->id)!!}
                        <div class="col-xs-3 ifm-no-padding-left">
                            <button type="submit" class="btn ifm-btn-green ifm-main-bg ifm-white ifm-absolute-right" style="right:15px">add</button>
                        </div>
                    </div>
                {!! Form::close() !!}
                </div>
                <table class="table table-striped table-bordered table-hover " width="100%" id="example_1">
                    <thead>
                        <tr>
                            <th class="ifm-main-bg ifm-white all">Id</th>
                            <th class="ifm-main-bg ifm-white min-tablet-l">Name</th>
                            <th class="ifm-main-bg ifm-white min-tablet-l">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user->roles as $role)
                            <tr>
                                <td>{{ $role->id}}</td>
                                <td>{{ $role->name}}</td>
                                <td>
                                    <a href="/pm/removeRole/{{$user->id}}/{{$role->id}}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- <div class="no-more-tables">
                    <table class="col-xs-12 table-bordered table-striped table-condensed cf">
                        <thead class="cf ifm-light-grey-bg ifm-grey">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </thead>
                        <tbody class="ifm-grey">
                            @foreach($user->roles as $role)
                                <tr class="table-row">
                                    <td>{{ $role->id}} <i class="fa fa-chevron-down hidden-lg"></i></td>
                                    <td class="visible-lg" data-title="Name" class="numeric">
                                        {{ $role->name}}
                                    </td>
                                    <td>
                                        <a href="/pm/removeRole/{{$user->id}}/{{$role->id}}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> --}}
            </div>
        </div>
    </div>

    <!-- privileges List -->
    <div class="user-show-tab-pane tab-pane" id="user-privilege-list">
        <div class="portlet light">
            <div class="portlet-title ifm-no-margin-bottom">
                <div class="caption">
                    <i class="fa fa-star ifm-main"></i>
                    <span class="caption-subject ifm-main bold uppercase">Privilege List</span>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="user-show-portlet-body portlet-body clearfix">
                <div class="container-fluid ifm-margin-sm-bottom ifm-relative">
                {!! Form::open(['class'=>'form-horizontal','method'=>'POST','action'=>['UserController@addPrivilege']]) !!}
                
                    <div class="row">
                        <div class="col-xs-9 ifm-no-padding-left">
                        {!! Form::select('privileges[]', $privileges->pluck('display_name','id'), null, ['id'=>'multi-append','class'=>'form-control select2','multiple']);
                            !!}
                        </div>
                             {!! Form::hidden('userId', $user->id)!!}
                        <div class="col-xs-3 ifm-no-padding-left">
                            <button type="submit" class="btn ifm-btn-green ifm-main-bg ifm-white ifm-absolute-right" style="right:1px">add</button>

                        </div>
                    </div>
                {!! Form::close() !!}
                </div>
                <table class="table table-striped table-bordered table-hover " width="100%" id="example_2">
                    <thead>
                        <tr>
                            <th class="ifm-main-bg ifm-white all">Id</th>
                            <th class="ifm-main-bg ifm-white min-tablet-l">Name</th>
                            <th class="ifm-main-bg ifm-white min-tablet-l">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user->privileges as $privilege)
                            <tr>
                                <td>{{ $privilege->id}}</td>
                                <td>{{ $privilege->name}}</td>
                                <td>
                                    <a href="/pm/removePrivilege/{{$user->id}}/{{$privilege->id}}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- <div class="no-more-tables">
                    <table class="col-xs-12 table-bordered table-striped table-condensed extandable cf">
                        <thead class="cf ifm-light-grey-bg ifm-grey">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </thead>
                        <tbody class="ifm-grey">
                            @foreach($user->privileges as $privilege)
                                <tr class="table-row">
                                    <td>{{ $privilege->id}} <i class="fa fa-chevron-down hidden-lg"></i></td>
                                    <td class="visible-lg" data-title="Name" class="numeric">
                                        {{ $privilege->name}}
                                    </td>
                                    <td>
                                        <a href="/pm/removePrivilege/{{$user->id}}/{{$privilege->id}}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> --}}
            </div>
        </div>
    </div>
</div>

