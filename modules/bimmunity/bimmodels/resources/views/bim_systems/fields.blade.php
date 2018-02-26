<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:', ['class' => 'ifm-grey']) !!}
    {!! Form::text('name', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
</div>

<!-- Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code', 'Code:', ['class' => 'ifm-grey']) !!}
    {!! Form::text('code', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
</div>

<!-- Perent Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('perent_id', 'Perent Id:', ['class' => 'ifm-grey']) !!}
    {!! Form::number('perent_id', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:', ['class' => 'ifm-grey']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn ifm-main-bg ifm-white']) !!}
    <a href="{!! route('bimSystems.index') !!}" class="btn ifm-light-grey-bg ifm-grey">Cancel</a>
</div>
