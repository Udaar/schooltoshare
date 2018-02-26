<div class="">
    <div class="form-group ifm-width-100">
        {!! Form::label('viewer_id', 'Viewer :', ['class' => 'ifm-grey']) !!}
        {!! Form::select('viewer_id', $viewers->pluck('name', 'id'), null, ['id'=>'viewer_id','class' => 'form-control ifm-border-light-grey-all select2']) !!}
    </div>
</div>
