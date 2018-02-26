@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        {!! Form::select('building_id', \Bimmunity\Bimmodels\Models\Building::pluck('name', 'id'), null, ['id'=>'building_id','class' => 'form-control ifm-border-light-grey-all select2']) !!}
    </div>
    
</div>

<div id="selectviewerdiv" class="row">
</div>
<div id='viewerdiv'></div>


@endsection
@push('scripts')
<script>
    $('#building_id').on('click , change',function(){
        
         $.get('/getbuildingviewer/'+$('#building_id').val(),function(data){
            $('#viewerdiv').html(data);
         })
     });
     $(document).on('change','#viewer_id',function(){
        window.location.replace('/getviewershow/'+$('#viewer_id').val());
        
     });
</script>
@endpush

