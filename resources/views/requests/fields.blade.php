
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


<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('date', 'date:', ['class' => 'ifm-grey']) !!}
        <div class="input-group ifm-width-100 input-medium date date-picker" data-date-format="{{config('ifm.settings.date-format-bootstrap')}}" >
            {!! Form::text('date', null, ['class' => 'form-control ifm-border-light-grey-all', 'required'=>'required']) !!}
            <span class="input-group-btn">
                <button class="btn default ifm-main-bg ifm-white ifm-border-main-all" type="button">
                    <i class="fa fa-calendar"></i>
                </button>
            </span>
        </div>
    </div>
</div>
<!-- Submit Field -->
<div class="col-sm-12">
    <div class="form-group pull-right">
        {!! Form::submit('Save', ['class' => 'btn ifm-main-bg ifm-white']) !!}
        <a href="{!! route('requests.index') !!}" class="btn btn-default">Cancel</a>
    </div>
</div>



@push('scripts')
    <script>
        $(document).on('change','#school_id',function(){
            console.log('dadaakjdkashdjs');
            $.get('/school/facility/'+$('#school_id').val(),function(data){
                console.log('data: ',data);
                $('#activity_id').find('option').remove();
                for(var i in data){
                        $('#activity_id').append('<option value="'+data[i].id+'">'+data[i].name+'</option>')
                }
                $('#select2-activity_id-container').text(data[0].name);
                $('#select2-activity_id-container').attr('title',data[0].name);
            });
        });
    </script>
@endpush