@extends('layouts.app')

@section('content')

                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group ifm-width-100">
                            {!! Form::label('viewer_id', 'Viewer:', ['class' => 'ifm-grey']) !!}
                            {!! Form::select('viewer_id', \Bimmunity\Bimmodels\Models\Bim_model::pluck('name', 'id'), null, ['id'=>'viewer_id', 'class' => 'form-control ifm-border-light-grey-all select2']) !!}
                        </div>
                    </div>
                </div>
                <div id="selecttablediv" class="row">
                </div>

                <div id="showtablediv" class="row">
                </div>

              

@endsection

@push('scripts')
<script> 
      $('#viewer_id').on('click , change',function(){
         $.get('/getviewertables/'+$('#viewer_id').val(),function(data){
            $('#selecttablediv').html(data);
            $('#tablename').select2();
         })
     });
    $(document).on('change',"#tablename",function() {
        $.get('/gettableshow/'+$('#viewer_id').val()+'/'+$('#tablename').val(),function(data){
            $('#showtablediv').empty();
            $('#showtablediv').html(data);
         })
    });
 </script>  
@endpush