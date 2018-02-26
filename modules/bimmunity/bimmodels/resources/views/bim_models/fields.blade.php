<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:', ['class' => 'ifm-grey']) !!}
    {!! Form::text('name', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
</div>
<!-- Building Id Field -->
<div class="form-group col-sm-6">
            {!! Form::label('building_id', 'Building:', ['class' => 'ifm-grey']) !!}
            {!! Form::select('building_id', $buildings->pluck('name','id'), null, ['class' => 'form-control select2']) !!}
        
</div>
<!-- Project Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('project_code', 'Project Code:', ['class' => 'ifm-grey']) !!}
    {!! Form::text('project_code', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
</div>

<!-- Organization Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('organization_code', 'Organization Code:', ['class' => 'ifm-grey']) !!}
    {!! Form::text('organization_code', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
</div>

<!-- Sub Project Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sub_project_code', 'Sub Project Code:', ['class' => 'ifm-grey']) !!}
    {!! Form::text('sub_project_code', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
</div>

<!-- Document Type Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('document_type_code', 'Document Type Code:', ['class' => 'ifm-grey']) !!}
    {!! Form::text('document_type_code', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
</div>

<!-- Discipline Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('discipline_code', 'Discipline Code:', ['class' => 'ifm-grey']) !!}
    {!! Form::text('discipline_code', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
</div>

<!-- Sub Discipline Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sub_discipline_code', 'Sub Discipline Code:', ['class' => 'ifm-grey']) !!}
    {!! Form::text('sub_discipline_code', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
</div>

<!-- Level Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('level_code', 'Level Code:', ['class' => 'ifm-grey']) !!}
    {!! Form::text('level_code', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
</div>

<!-- Urn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('urn', 'Urn:', ['class' => 'ifm-grey']) !!}
    {!! Form::text('urn', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn ifm-main-bg ifm-white']) !!}
    <a href="{!! route('bimModels.index') !!}" class="btn ifm-light-grey-bg ifm-grey">Cancel</a>
</div>
