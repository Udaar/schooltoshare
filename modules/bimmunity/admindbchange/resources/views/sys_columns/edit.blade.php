@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Sys Columns
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($sysColumns, ['route' => ['sysColumns.update', $sysColumns->id], 'method' => 'patch']) !!}
                        <input type="hidden" id="table_idd" name="table_id"/>
                        <input type="hidden" id="column_original_namee" name="column_original_name"/>
                        @include('admindbchange::sys_columns.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
@push('scripts')
    <script>
        var syscolumns = JSON.parse('<?php echo json_encode($sysColumns); ?>');
        console.log(syscolumns);
        $(document).ready(function() {
            $('#table_idd').val($('#table_id').select2("val"));
            $('#column_original_namee').val($('#column_original_name').select2("val"));
            $('#table_id').attr("disabled",'disabled');
            $('#column_original_name').attr("disabled",'disabled');
        });
    </script>
@endpush