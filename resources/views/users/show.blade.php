@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('/metronic/reset/users-show-reset.css') }}">
@endpush

@section('content')
    <section class="users-show-section info-section ifm-padding-all">

        {{-- Users Show Title Bar --}}
        <div class="ifm-padding-sm-bottom ifm-margin-sm-bottom clearfix">
            <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
                <i class="fa fa-user ifm-grey"></i>
                {{ $user->name }}
            </h3>
        </div>

        {{-- Errors Div --}}
        <div>
            @include('metronic-templates::common.errors')
        </div>

        {{-- Tabs --}}
        <div class="users-show-tabbable-custome tabbable-custom">
            {{-- Errors div --}}
            <div>
                @include('metronic-templates::common.errors')
            </div>
            @include('users.show_fields')
        </div>

        <a href="{!! route('users.index') !!}" class="pull-right btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-sm-top">Back</a>

    </section>
@endsection

@push('scripts')
    <script src="/js/jquery.touchSwipe.min.js"></script>
    <script>
        $(document).ready(function(){
            var scrollValue = 0;
            $(".swipe").swipe( { swipeStatus:swipe2, allowPageScroll:"horizontal"} );
            function swipe2(event, phase, direction, distance) {
                $('ul.swipe').each(function(){
                    if(direction === 'left'){
                        $(this).scrollLeft(scrollValue+=10);
                        console.log(scrollValue);
                    }
                    if(direction === 'right'){
                        $(this).scrollLeft(scrollValue-=10);
                        console.log(scrollValue);
                    }
                });
            }
            $('#example_1').dataTable( {
                paging: false,
                responsive: true,
            });
            $('#example_2').dataTable( {
                paging: false,
                responsive: true,
            });
        });
    </script>
@endpush
