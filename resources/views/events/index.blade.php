@extends('layouts.app')

@section('content')

    <section class="events-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">

        <!-- Events Title Bar -->
        <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
            <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
                <i class="fa fa-bolt ifm-grey"></i>
                Events
            </h3>
            <a href="{!! route('events.create') !!}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right" style="top:19px;right:36px"><i class="fa fa-plus"></i> Add</a>
        </div>
        <!-- /Events Title Bar -->

        <div class="row">
            @include('flash::message')

            <!-- Events Table -->
            <div class="ifm-padding-sm-all">
                @include('events.table')
            </div>
            <!-- /Events Table -->

        </div>

    </section>
    
@endsection

