

    <div class="col-xs-12">
        <div class="form-group ifm-width-100">
            {!! Form::label('tablename_id', 'Tables:', ['class' => 'ifm-grey']) !!}
            {!! Form::select('tablename', $tablesname, null, ['id'=>'tablename', 'class' => 'form-control ifm-border-light-grey-all select2']) !!}
        </div>
    </div>
