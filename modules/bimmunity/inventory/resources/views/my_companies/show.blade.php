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
            .row .col-lg-12{
                padding-left:15px;
                padding-right:15px;
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
    <section class="ifm-white-bg invoice-show-section clearfix info-section ifm-padding-all ifm-padding-md-all ifm-border-light-grey-all">
        {{-- Vendor Show Title Bar --}}
        <div class="ifm-padding-md-bottom ifm-margin-md-bottom ifm-border-light-grey-bottom clearfix">
            <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase title">
                <i class="fa fa-building-o ifm-grey"></i>
                {!! $myCompany->name !!}
            </h3>
        </div>
        {{-- Errors Div --}}
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="container-fluid">
            @include('inventory::my_companies.show_fields')
        </div>
        <a href="{!! route('myCompanies.index') !!}" class="pull-right btn ifm-btn-default ifm-light-grey-bg ifm-grey ifm-border-light-grey-all">Back</a>
    </section>
    {{-- <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-equalizer font-red-sunglo"></i>
                <span class="caption-subject font-red-sunglo bold uppercase">My Company</span>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="portlet-body form">
            <div class="row" style="padding-left: 20px">
                @include('my_companies.show_fields')
                <a href="{!! route('myCompanies.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
    </div> --}}
@endsection
