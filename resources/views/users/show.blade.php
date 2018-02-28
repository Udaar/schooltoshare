@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('/metronic/reset/users-show-reset.css') }}">
@endpush

@section('content')
    
        
    </div>
    <section class="user-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">
        
        <div class="row">

            <!-- Children Image -->
            <div class="col-lg-3 col-sm-4">
                <div class="img-wrap">
                    <img class="img-thumbnail" src="/metronic/images/student.jpg" alt="">
                </div>
            </div>
            
            <!-- Children Info -->
            <div class="col-sm-8">
                <div class="children-info">
                    <h3 class="ifm-no-margin-top ifm-margin-15-bottom">Basic Info</h3>
                    <div class="row">
                        <div class="col-md-12 info-item">
                            <label for=""> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAEqSURBVDhPrVM7TsNAFKSCC7hDQYIy9yCNSyROwUby+tv5EDTkAlFOEjtFYpID5ASgRIaGKpkJD0SyL9iFRxpZfm9mvG+9e6Ehz/PLMAyHURTN4jj+FJassSey/xEEwTUCXmHcnWFFjch1GGOuELJSzEfkh6gVmwsuXTNqRJgRmwsIylPDOSKoEJsLCLipqvGUCKrF5gKCzoK6GY0bSBE2/VFKDtijJkmSJym54C+FaInAD/BByr+QEI5fNR5MHjYK+VWEzcFnEu8L1vhsPJA/+HNFCrAmETDlOK2vSCdI0/RGxliDL1iVD/aFPnoj9qix1vbEdgw0BxC9g86v1gj9G0a9F/s3siy7Q2OrGRq4wUpvJeawmokiakV4x4cQzOrh5UsTtSG91lpvD/JXsBH8KOYgAAAAAElFTkSuQmCC"> Name: </label>
                            <span>{{ $user->name }}</span>
                        </div>
                        <div class="col-md-12 info-item">
                            <label for=""> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGYSURBVDhPlZPPK0RRFMefDbGRlWJrYWHFTrKyU0oiKbLD4smbNz/eKzULNZQ0SUoKpSaUH4WysPUHSBYWw4712KnR8Dlvzuh6Tb03pz6dc8859/tO995n1cx13eFUKlWEH/iCQjabbU4kEr3JZPKRdUVrJsV0Oj2oElWj+TncSG4efx3Om9DzwvamqgpGolSnKQdPuh7zPK/DRD8ktX6VqS8E6zWhTCYzpK1/xnGMSo2eBU1FC+FtNg6YkF/VWk5looUi2FOZWBPNgZzZEjflM9GyoH0FlYkldIy/hzO4hXNyF1KD+EKwCHnWYmvgCVLDH6hMrIkO8XdQIL6CU2KZTvrywYvmBbfFELLx23iZZINYbiy4NXBlkjJiU/gooR38JezDCRwpUhuxNJiBd4lDuPAQyv2DfSXHcVpNoeDgDD5o6GbaaWrlUM3ECQ6Z4JvGOYnZ1Mf6k/Uuv0R70IDxX/WQm6A2aSL92hLc1ivJLYnxXVAhNx4UGzE2rbBZprrBv4mwbdstWm7MEJgFeRObvu93aroBs6xfE10To86AmE8AAAAASUVORK5CYII="> Phone: </label>
                            <span>{{ $user->phone}}</span>
                        </div>
                        <div class="col-md-12 info-item">
                            <label for=""> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAEHSURBVDhPY0AHJSUlq4H4d3FxMTdUiDxQWlq6BYj/A7E90DBjdFxeXs4PVYofIBmEC38sKioyhCrHDYAKYQb9AnrxHTIGiv2BynVDleMGQEVgg4De0IEKwQFQPBRq0DSoEG4AMwhbWADFbAbUIDmoEByUlZW5k2wQED8D4jNo+C0Qk2YQMJZqgfgkSBMQb4BiEHuADALi+UB8E4g3AfExoKFHoWySXRQHxDuA7CogPRtIzwKxQXJATJKL9gINeAHEp4H4FhSfJsWg5VDF9kC8EhjliUADWoHsFhAbKjcRqhw3AGYNJ6DGn1AN2PA/IPaCKscPgArVgTgFiNPQMdAic6gyWgAGBgDkqChIWM1XggAAAABJRU5ErkJggg=="> Cell Phone: </label>
                            <span>{{ $user->cell_phone}}</span>
                        </div>
                        <div class="col-md-12 info-item">
                            <label for=""> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAEcSURBVDhPzZS9a8JAGMbvb+oiFIQ6SKlCB0EouLWTCC756Czd/PgTOogdpFunLiId3Iu0LuLi0oCLSLOoVft75QJHzBKzJPDLc/e87z3cHSEqfY/jOI9JsW27qnhNmRwS8q4sy7piMAoV4vDquu6lHG0Ft2LoQhxacA8zCRJjw84edCHcHMUfV1KDhszReRB0BONJGqTR9EP4HKWEdgPvJEibL7rRD9fAo5anZ2j6kUHwyTEzsoCxZ/gTyAqy0PAjg3pQoLCAb8Y59BnaBF8z/2Esn4v4A/QkSC67jlqYW6NhDX14g53h/6IVtInu0WOQR8gNk37QGIMOa+/QSfBBfhnFWLCBD/RCdrQ0C2cylqByUjhVUf8DUvMo9Q+m8SKWs0XH3wAAAABJRU5ErkJggg=="> Email: </label>
                            <span>{{ $user->email }}</span>
                        </div>
                        <div class="col-md-12 info-item">
                            <label for=""> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHrSURBVDhPlZS7S1xREIePxiYKKQSNaWxUFARZISAEbaLg+thGso0rCGERhKzs+yGLq4JWarkoWNhq2lSxCaTZv0B8JCmsRAtJoQYFzTfXOdnLPoIOfMzMmZnfPee4R/Mci0QijalUql+8Lj3fEolEAK7hIR6PX8GklqpbKBR6lUwmJ6CbwSBDLSKCP4M1OIerTCbzWkfKTb98gcg0zYfE+Vgs5sM/QFZ7spqPO0OlRmFeG07ho8b5aDTaq/ER4rNwLDm+R0eLRqGTwlf8PjuYwy/YWOsFEDFLwRksNQrrCG0J7KCLfFPzSeIggiMqYBmFmI4/Gk197iaGva48D18gy/pnXdsjXoU7LrxJZYzhYj9pgwPCY67cEWLoBj+AP6H+nvhW6uRelTEmnU63szBkobHZxnJMvEfzNvlpINBh6+Fw+I3KOPezKOoWGiodzckr3FVAZZyjfSgpDrpit9CfkmPLRz0qY0wul6tn4QB+Cgi/o+mHxPhl2NbaN2K/7ZNcJYrGY2ylaUZ5S5Mcb0YeqY3lA3o0p4+4QceL5vf7X1DcB9nud4YyEsO/o7E+hb/UeENHy41/Dy9p2oV7GIDfYIV+iRDcwRLtNY9T/zF2M0xzkq378PLad0QYvwLl7+spxh+iDmo1rWLG/AXNQJ6SY2gqmwAAAABJRU5ErkJggg=="> Address: </label>
                            <span>{{ $user->address }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12">
                <a href="{!! URL::previous() !!}" class="pull-right btn ifm-btn-default ifm-main-bg ifm-white ifm-border-main-all ifm-no-margin-all">Back</a>
            </div>

        </div>

        {{-- Users Show Title Bar --}}
        {{--<div class="ifm-padding-sm-bottom ifm-margin-sm-bottom clearfix">
            <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
                <i class="fa fa-user ifm-grey"></i>
                {{ $user->name }}
            </h3>
        </div>--}}

        {{-- Errors Div --}}
        {{--<div>
            @include('metronic-templates::common.errors')
        </div>--}}

        {{-- Tabs --}}
        {{--<div class="users-show-tabbable-custome tabbable-custom">--}}
            {{-- Errors div --}}
            {{--<div>
                @include('metronic-templates::common.errors')
            </div>
            @include('users.show_fields')
        </div>--}}

        {{--<a href="{!! route('users.index') !!}" class="pull-right btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-sm-top">Back</a>--}}

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
