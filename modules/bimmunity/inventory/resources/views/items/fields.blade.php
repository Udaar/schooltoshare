<!-- Name Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('name', 'Name:', ['class' => 'ifm-grey', 'required' => 'required']) !!}
        {!! Form::text('name', null, ['class' => 'form-control ifm-border-light-grey-all','required' => 'required']) !!}
    </div>
</div>
<!-- /Name Field -->

<!-- Barcode Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('barcode', 'Barcode:', ['class' => 'ifm-grey']) !!}
        {!! Form::text('barcode', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Barcode Field -->

<!-- Category Id Field -->
<div class="col-xs-12">
    <div class="form-group">
        {!! Form::label('category_id', 'Category:', ['class' => 'ifm-grey']) !!}
        {!! Form::select('category_id', $categories->pluck('name', 'id'), null, ['class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select a Category','required' => 'required']) !!}
    </div>
</div>
<!-- /Category Id Field -->

<!-- Description Field -->
<div class="col-xs-12">
    <div class="form-group">
        {!! Form::label('description', 'Description:', ['class' => 'ifm-grey']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control textarea-sm ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Description Field -->

<!-- Submit Field -->
<div class="col-xs-12">
    <div class="form-group ifm-form-actions">
        {!! Form::submit('Save', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
        <a href="{!! route('items.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
    </div>
</div>
<!-- /Submit Field -->