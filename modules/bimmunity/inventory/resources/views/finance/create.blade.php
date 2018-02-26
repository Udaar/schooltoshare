@extends('layouts.app')

@section('content')
<section class="invoice-create-section info-section">
    <div class="portlet light ifm-border-light-grey-all">
        <div class="portlet-title ifm-border-light-grey-bottom">
            <div class="caption">
                <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
                    <i class="fa fa-bank ifm-grey"></i>
                    Add New Bank
                </h3>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="portlet-body form">
            <div class="row">
                {!! Form::open(['route' => 'banks.store']) !!}
                    @include('inventory::banks.fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>


{{-- <div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-equalizer font-red-sunglo"></i>
            <span class="caption-subject font-red-sunglo bold uppercase">Bank</span>
        </div>
    </div>
    <div>
        @include('metronic-templates::common.errors')
    </div>
    <div class="portlet-body form">
        <div class="row">
            {!! Form::open(['route' => 'banks.store']) !!}

                @include('banks.fields')

                {!! Form::close() !!}
        </div>
    </div>
</div> --}}
@endsection
