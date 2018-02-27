
<!-- School Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('school_id', 'School:', ['class' => 'ifm-grey']) !!}
    {!! Form::select('school_id', $schools->pluck('name','id'), null, ['class' => 'form-control ifm-border-light-grey-all select2','id'=>'school_id']) !!}
</div>
<!-- Activity Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('activity_id', 'Activity:', ['class' => 'ifm-grey']) !!}
    {!! Form::select('activity_id', array(), null, ['class' => 'form-control ifm-border-light-grey-all select2' ,'id'=>'activity_id']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::date('date', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('requests.index') !!}" class="btn btn-default">Cancel</a>
</div>



@push('scripts')
    <script>
        $(document).on('click change','#school_id',function(){
            console.log('dadaakjdkashdjs');
            $.get('/school/facility/'+$('#school_id').val,function(data){
                console.log('data: ',data);
                $('#activity_id').find('option').remove();
                for(var i in data){
                    $('#activity_id').append('<option>'+data[i].name+'</option>')
                }
            });
        });
    </script>
@endpush