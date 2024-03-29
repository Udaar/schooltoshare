@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Admin Modules
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($adminModules, ['route' => ['adminModules.update', $adminModules->id], 'method' => 'patch']) !!}

                        @include('admindbchange::admin_modules.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection