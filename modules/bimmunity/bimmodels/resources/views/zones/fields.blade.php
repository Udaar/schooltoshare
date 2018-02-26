<!-- Input Field -->
<div class="row">
    <div class="col-lg-6 col-xs-12">
        <div class="contianer-fluid">
            <!-- Name Field -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group col-sm-6 ifm-width-100">
                        {!! Form::label('name', 'Name:', ['class' => 'ifm-grey']) !!}
                        {!! Form::text('name', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
                    </div>
                </div>
            </div>
            <!-- Parent Id Field -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group col-sm-6 ifm-width-100">
                        {!! Form::label('parent_id', 'Parent:', ['class' => 'ifm-grey']) !!}
                        {!! Form::select('parent_id', $zones, null, ['class' => 'form-control select2']) !!}
                    </div>
                </div>
            </div>
            <!-- Building Id Field -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group col-sm-6 ifm-width-100">
                        {!! Form::label('building_id', 'Building:', ['class' => 'ifm-grey']) !!}
                        {!! Form::select('building_id', $buildings, null, ['class' => 'form-control select2']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xs-12">    
        <!-- Image Input Field -->
        <div class="row">
            <div class="col-xs-12 ifm-no-padding-right">
                <div class="form-group col-sm-6 ifm-width-100">
                    {!! Form::label('image', 'Image', ['class' => 'ifm-grey']) !!}

                    <div class="input-group">
                    <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn ifm-btn-default ifm-grey-bg ifm-white">
                        <i class="fa fa-picture-o"></i> Choose
                        </a>
                    </span>
                    <input id="thumbnail" class="form-control input-wd-sm ifm-border-light-grey-all" type="text" name="image">
                    </div>
                    <img id="holder" style="margin-top:15px;max-height:100px;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Submit Field -->
<div class="row">
    <div class="row">
        <div class="col-xs-12 ifm-padding-lg-left">
            <div class="form-group col-sm-12">
                <div class="form-actions">
                    <div class="row  col-md-offset-0">
                        {!! Form::submit('Save', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
                        <a href="{!! route('zones.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script type="text/javascript">
    $('#lfm').filemanager('images');
</script>
@endpush
