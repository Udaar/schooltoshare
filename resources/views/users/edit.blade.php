@extends('layouts.app')

@section('content')

<section class="users-edit-section ifm-form">
    <div class="portlet light ifm-border-light-grey-all">
        <div class="portlet-title ifm-border-light-grey-bottom">
            <div class="caption">
                <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
                    <i class="fa fa-user"></i>
                    Edit User
                </h3>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="portlet-body form">
            <div class="row">
                {!! Form::model($user, ['files'=>'true','route' => ['users.update', $user->id], 'method' => 'patch']) !!}
                    @include('users.fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>

@endsection