@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="/metronic/reset/tabBased.css">
    <link rel="stylesheet" href="/metronic/reset/datepicker-reset.css"></link>
     <link href="/metronic/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="/metronic/assets/global/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
        <link href="/metronic/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
        <link href="/metronic/assets/global/plugins/bootstrap-editable/inputs-ext/address/address.css" rel="stylesheet" type="text/css" />
    <style>
        .portlet.light{
            padding: 15px;
        }
        .item-table td,
        .item-table th{
            text-align: center;
            vertical-align: middle!important;
        }
        :root:root:root .table-bordered > tbody > tr > td:first-child{
            cursor: pointer;
        }
        :root:root:root .table-bordered > tbody > tr:first-child > td{
            border-top-color: #DDDDDD!important;
        }
        :root:root:root .table-bordered thead > tr > th:last-child{
            border-right-color: #DDDDDD!important;
        }
        :root:root:root .table-bordered,
        :root:root:root .table-bordered thead > tr > th{
            border-color: #DDDDDD!important;
        }
        .dropdown-menu.datepicker-dropdown{
            z-index: 100000;
        }
        @media screen and (min-width: 320px) and (max-width: 468px){
            input[type="number"]{
                width: 80px;
            }
        }
        @media screen and (min-width: 320px) and (max-width: 992px){
            .portlet.light .portlet-body{
                padding-top:0;
            }
            .order-info .col-xs-12{
                padding-left:0;
                padding-right:0;
            }
            .form-actions{
                padding-left: 15px;
            }
            .editableform .form-group{
                margin-bottom: 0;
            }
            .popover-content{
                padding: 9px 12px;
            }
            .edit-task-wrap h3{
                font-size: 14px;
                margin-bottom: 10px!important;
            }
            .edit-task-wrap .popover h3{
                font-size: 11px;
            }
            .popover{
                left: 35.2969px!important;
            }
        }
        @media screen and (min-width: 768px){
            .tabbable-custom > .nav-tabs > li{
                width: 18%;
            }
        }
    </style>
@endpush

@section('content')
<section class="purchase-order-zone info-section ifm-padding-all">
    {{-- Purchase Order Show Title Bar --}}
    <div class="ifm-padding-md-bottom ifm-margin-md-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
            <i class="fa fa-file-text-o ifm-grey"></i>
            Add Order
        </h3>
    </div>
    <div class="show-zone-tabbable-custome tabbable-custom ifm-border-light-grey-bottom">
        {{-- Errors Div --}}
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <!-- Tabs Links -->
        <ul class="show-zone-nav-tabs nav nav-tabs swipe" id="tabs">
            <li class="show-zone-taxonomy-tab taxonomy-tab active">
                <a class="bold" style="border-left: 1px solid #ddd" href="#order" data-toggle="tab" tax>
                    <span style="display: block;" class="fa fa-info-circle icon"></span>
                    Order Information
                </a>
            </li>
            <li class="show-zone-taxonomy-tab taxonomy-tab disabled">
                <a class="bold" style="border-left: 1px solid #ddd" href="#items" data-toggle="" tax>
                    <span style="display: block;" class="fa fa-cube icon"></span>
                    Item Information
                </a>
            </li>
        </ul>
        <div class="show-zone-tab-content tab-content">
            <div class="show-zone-tab-pane tab-pane active" id="order">
                <div class="portlet light ifm-no-margin-bottom">
                    <div class="clearfix"></div>
                    <div class="show-zone-portlet-body portlet-body">
                        {!! Form::open(['route' => 'inOrders.store']) !!}
                        {{--<form action="" method="" role="">--}}
                            @include('inventory::in_orders.fields')
                        {{--</form>--}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="show-zone-tab-pane tab-pane" id="items">
                <div class="portlet light ifm-no-margin-bottom">
                    <div class="clearfix"></div>
                    <div class="show-zone-portlet-body portlet-body">
                          {{--<form action="" method="" role="">--}}
                        {!! Form::open(['route' => 'inOrderItems.store']) !!}
                             @include('inventory::in_order_items.fields')
                          {{--</form>--}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
    <script src="/metronic/assets/global/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.min.js"></script>
    <script>
        $(document).on('keyup change click input','#order input', function(){
            console.log('here');
            var that=this;
            var empty = false;
                $('#order input').each(function(){
                if($(this).val() == ''){
                    empty = true;
                }
            });
            if(empty){
                $('.submit').attr("disabled", "disabled");
                // $('.next-btn').attr("disabled", "disabled");
                $('a[href="#items"]').attr('data-toggle', '')
                                .parent()
                                .removeClass('active')
                                .addClass('disabled');
                //$('#next_button').css('display', 'none');
                //$('button[data-id="second"]').attr("disabled", "disabled");
            } else {
                $('.next-btn').removeAttr('disabled');
                $('.submit').removeAttr('disabled');
                //$('#next_button').css('display', 'block');
            }
        });
        $(document).on('keyup change click input','#items input',validate );
        function validate() {
            console.log('here');
            var that=this;
            var empty = false;
                $('#items input').each(function(){
                if($(this).val() == ''){
                    empty = true;
                }
            });
            if(empty){
                $('.submit').attr("disabled", "disabled");
                console.log('empty');
                //$('button[data-id="second"]').attr("disabled", "disabled");
            } else {
                console.log('not empty');
                $('.submit').removeAttr('disabled');
            }
        }
        $('.next-btn').on('click', function(){
            $('a[href="#order"]').parent()
                                 .removeClass('active');
            $('a[href="#items"]').attr('data-toggle', 'tab')
                                .parent()
                                .removeClass('disabled')
                                .addClass('active');
            $('.tab-pane').removeClass('active');
            $('#items').addClass('active');
        });
        $('.back').on('click', function(){
            $('a[href="#items"]').parent()
                                 .removeClass('active');
            $('a[href="#order"]').attr('data-toggle', 'tab')
                                .parent()
                                .removeClass('disabled')
                                .addClass('active');
            $('.tab-pane').removeClass('active');
            $('#order').addClass('active');
        });
</script>
@endsection
