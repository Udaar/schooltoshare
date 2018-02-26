@extends('layouts.app')

@section('head')
    <style>
        table.dataTable > tbody > tr.child span.dtr-title {
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('content')
    
    <section class="users-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">
        
        <!-- Users Title Bar -->
        <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
            <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
                <i class="fa fa-users"></i>
                @if(isset($type))
                {{$type}}
                @else 
                users
                @endif
            </h3>
            <a href="{!! route('users.create') !!}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right" style="top:19px;right:36px"><i class="fa fa-plus"></i> Add</a>
        </div>
        <!-- /Users Title Bar -->

        <div class="row">
            @include('flash::message')

            <!-- Users Table -->
            <div class="ifm-padding-sm-all">
                @include('users.table')
            </div>
            <!-- /Users Table -->

        </div>
        
    </section>

@endsection

@push('scripts')
    <script src="/metronic/js/extendTable.js"></script>
@endpush

