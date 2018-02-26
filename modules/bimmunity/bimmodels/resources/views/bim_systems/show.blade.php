@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Bim System
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('bimmodels::bim_systems.show_fields')
                    <a href="{!! route('bimSystems.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
