@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="/metronic/reset/supplier-show-reset.css">
    <link rel="stylesheet" href="/remodal/dist/remodal.css">
    <link rel="stylesheet" href="/remodal/dist/remodal-default-theme.css">
    <style>
        .media-body h4 span{
            font-weight: 300;
            font-size: 16px;
        }
        td,
        th{
            text-align: left!important;
            vertical-align: middle!important;
        }
        :root:root:root .table-bordered > tbody > tr > td:first-child{
            cursor: pointer;
            border-left:0!important;
        }
        :root:root:root .table-bordered > tbody > tr:last-child > td{
            border-bottom:0!important;
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
        .remodal-close{
            left:auto;
            right:0;
        }
        .remodal{
            text-align: left;
        }
        .row.last-info{
            margin-bottom: 0!important;
        }
        .table-responsive{
            border-color: #DDDDDD;
        }
        @media screen and (min-width:480px){
            .remodal{
                max-width: 300px;
            }
        }
        @media screen and (min-width: 320px) and (max-width: 768px)
        {
            .title{
                font-size: 15px;
            }
            .order-show-section{
                padding: 15px!important;
            }
        }
        @media screen and (min-width: 320px) and (max-width: 991px){
            .remodal-bg{
                padding-left:15px;
                padding-right:15px;
            }
            .row{
                margin-bottom:0!important;
            }
            .row [class^='col-']{
                margin-bottom: 20px;
                padding-left:0;
                padding-right:0;
            }
            .row.last-info [class^='col-']{
                margin-bottom:0;
            }
            .row.item-col{
                margin-bottom:0!important;
            }
            .media-object{
                font-size: 12px;
            }
            .media-body h4{
                font-size: 14px;
            }
            .media-body h4 span{
                font-size: 12px;
            }
            .more-details,
            .less-details{
                padding-left:6px!important;
            }
        }
    </style>
@endpush

@section('content')
    <div class="remodal-bg">
        <section class="ifm-white-bg order-show-section clearfix info-section ifm-padding-all ifm-padding-md-all ifm-border-light-grey-all">
            {{-- Vendor Show Title Bar --}}
            <div class="ifm-padding-md-bottom ifm-margin-md-bottom ifm-border-light-grey-bottom clearfix">
                <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase title">
                    <i class="fa fa-file-text-o ifm-grey"></i>
                    Order Number #{!! $outOrder->order_number !!}
                </h3>
            </div>
            {{-- Errors Div --}}
            <div>
                @include('metronic-templates::common.errors')
            </div>
            <div class="container-fluid">
                @include('inventory::out_orders.show_fields')
            </div> <div class="col-xs-12">
                @if(($outOrder['element_status'] >0 && $outOrder['status'] == 2) || ($outOrder['element_status'] < 1 ))
                <form id="approve_form" action="{!! route('outOrders.sales_action',3) !!}" method="post" class="col-xs-2" >
                    @if(isset($ticket_id))
                        <input type="hidden" name="ticket_id" value="{{$ticket_id}}">
                        <input type="hidden" name="action_id" value="{{$action_id}}">
                    @endif
                    <input type="hidden" name="approve_notes" id="approve_notes">
                    <input type="hidden" name="order_id" value="{{ $outOrder['id'] }}">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <button type="button" onclick="approve_function()" class="btn ifm-btn-default ifm-main-bg ifm-white ifm-border-main-all"><i class="fa fa-check"></i>Approve</button>
                </form>
                <form id="pending_form" action="{!! route('outOrders.sales_action',1) !!}" method="post" class="col-xs-2">
                    @if(isset($ticket_id))
                        <input type="hidden" name="ticket_id" value="{{$ticket_id}}">
                        <input type="hidden" name="action_id" value="{{$action_id}}">
                    @endif
                    <input type="hidden" name="pending_notes" id="pending_notes">
                    <input type="hidden" name="order_id" value="{{ $outOrder['id'] }}">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <button type="button" onclick="pending_function()" class="btn bg-yellow-saffron bg-font-yellow-saffron ifm-white border-yellow-saffron"><i class="fa fa-clock-o"></i>Pending</button>
                </form>
                <form id="refuse_form" action="{!! route('outOrders.sales_action',2) !!}" method="post" class="col-xs-2">
                    @if(isset($ticket_id))
                        <input type="hidden" name="ticket_id" value="{{$ticket_id}}">
                        <input type="hidden" name="action_id" value="{{$action_id}}">
                    @endif
                    <input type="hidden" name="refuse_notes" id="refuse_notes">
                    <input type="hidden" name="order_id" value="{{ $outOrder['id'] }}">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <button type="button" onclick="refuse_function()" class="btn bg-red-mint bg-font-red-mint ifm-white border-yellow-saffron"><i class="fa fa-close"></i>Refuse</button>
                </form>
                @endif
                <div  class="col-xs-2">
                    <a href="{{ URL::previous() }}" class="pull-right btn ifm-btn-default ifm-light-grey-bg ifm-grey ifm-border-light-grey-all">Back</a>
                </div>
                {{--<a href="{!! route('finance.finance_action',['id' => '1','notes'=> "<script>$('#notes').val()</script>"]) !!}" class="btn ifm-btn-default ifm-main-bg ifm-white ifm-border-main-all">--}}
                {{--<i class="fa fa-check"></i>--}}
                {{--Approve--}}
                {{--</a>--}}
                {{--<a href="{!! route('finance.finance_action',2) !!}" class="btn bg-yellow-saffron bg-font-yellow-saffron ifm-white border-yellow-saffron">--}}
                {{--<i class="fa fa-clock-o"></i>--}}
                {{--Pendding--}}
                {{--</a>--}}
                {{--<a href="{!! route('finance.finance_action',3) !!}" class="btn bg-red-mint bg-font-red-mint ifm-white border-yellow-saffron">--}}
                {{--<i class="fa fa-close"></i>--}}
                {{--Refuse--}}
                {{--</a>--}}
                {{--<a href="#" class="pull-right btn ifm-btn-default ifm-light-grey-bg ifm-grey ifm-border-light-grey-all">Back</a>--}}
            </div>
        </section>
    </div>
@endsection

@section('scripts')
    <script src="/remodal/dist/remodal.min.js"></script>
    <script>
        function approve_function(){
            $('#approve_notes').val($('#notes').val());
            $('#approve_form').submit();
        }
        function pending_function(){
            $('#pending_notes').val($('#notes').val());
            $('#pending_form').submit();
        }
        function refuse_function(){
            $('#refuse_notes').val($('#notes').val());
            $('#refuse_form').submit();
        }
        $('.more-details').on('click', function(){
            $(".item-table").slideToggle();
            $(this).css('display','none');
            $('.less-details').css('display','inline');
        });
        $('.less-details').on('click', function(){
            $(".item-table").slideToggle();
            $(this).css('display','none');
            $('.more-details').css('display','inline');
        });
    </script>
@endsection

    {{-- <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-equalizer font-red-sunglo"></i>
                <span class="caption-subject font-red-sunglo bold uppercase">Sales Order</span>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="portlet-body form">
            <div class="row" style="padding-left: 20px">
                @include('out_orders.show_fields')
                <a href="{!! route('outOrders.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
    </div> --}}
