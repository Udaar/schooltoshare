@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Sys Tables
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($sysTables, ['route' => ['sysTables.update', $sysTables->id], 'method' => 'patch']) !!}
                   <input type="hidden" id="table_original_namee" name="table_original_name"/>
                   <input type="hidden" id="module_idd" name="module_id"/>

                        @include('admindbchange::sys_tables.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#module_idd').val($('#module_id').select2("val"));
            $('#module_id').attr("disabled",'disabled');
            $('#table_original_namee').val($('#table_original_name').select2("val"));
            $('#table_original_name').attr("disabled",'disabled');
        });
    </script>
@endpush