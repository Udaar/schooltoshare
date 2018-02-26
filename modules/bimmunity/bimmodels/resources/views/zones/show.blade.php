@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="/metronic/reset/tabBased.css">
    {{-- <link rel="stylesheet" href="/metronic/reset/tabular.css">
    <link rel="stylesheet" href="/metronic/reset/extandableTable.css"> --}}
    <link rel="stylesheet" href="/metronic/reset/view_info.css">
    <link rel="stylesheet" href="/metronic/reset/zone-show-reset.css">
@endpush

@section('content')

    <section class="show-zone info-section ifm-padding-all">
        <div class="show-zone-tabbable-custome tabbable-custom">
            {{-- Errors div --}}
            <div>
                @include('metronic-templates::common.errors')
            </div>
              
              @include('bimmodels::zones.show_fields')
        </div>
        <a class="pull-right btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-sm-top" href="{!! route('zones.index') !!}">
            <i class="fa fa-arrow-left"></i>
            Back
        </a>
    </section>
@endsection

@push('scripts')
    <script src="/metronic/js/extendTable.js"></script>
@endpush
