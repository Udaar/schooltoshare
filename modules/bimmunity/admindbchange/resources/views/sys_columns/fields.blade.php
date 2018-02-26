<!-- Table Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('table_id', 'Table Id:') !!}
    {!! Form::select('table_id', $tables->pluck('table_admin_name', 'id'), null, ['id'=>'table_id','onchange'=>'table_columns()','class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select Table','required' => 'required']) !!}
</div>

<!-- Column Original Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('column_original_name', 'Column Original Name:') !!}
    {!! Form::select('column_original_name', $tables->pluck('table_original_name', 'table_original_name'), null, ['id'=>'column_original_name','onchange'=>'column_type_fun(this)','class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select Column','required' => 'required']) !!}
</div>

<!-- Column Admin Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('column_admin_name', 'Column Admin Name:') !!}
    {!! Form::text('column_admin_name', null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Table Original Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('joined_table', 'Join Table Name:') !!}
    {!! Form::select('joined_table', $tables->pluck('table_admin_name', 'id'), null, ['id'=>'joined_table','onchange'=>'table_columns1()','class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select Table']) !!}
</div>
</div>

<!-- Column Original Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('joined_column', 'Join Table Column Name:') !!}
    {!! Form::select('joined_column', $tables->pluck('table_original_name', 'table_original_name'), null, ['id'=>'joined_column','class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select Column']) !!}
</div>

<input type="hidden" id="column_type" name="column_type"/>
<input type="hidden" id="element_status" name="element_status"/>
<!-- Description Field -->
{{--<div class="form-group col-sm-12 col-lg-12">--}}
    {{--{!! Form::label('description', 'Description:') !!}--}}
    {{--{!! Form::textarea('description', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

{{--<!-- Created By Field -->--}}
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('created_by', 'Created By:') !!}--}}
    {{--{!! Form::number('created_by', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

{{--<!-- Element Status Field -->--}}
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('element_status', 'Element Status:') !!}--}}
    {{--<label class="checkbox-inline">--}}
        {{--{!! Form::hidden('element_status', false) !!}--}}
        {{--{!! Form::checkbox('element_status', '1', null) !!} 1--}}
    {{--</label>--}}
{{--</div>--}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('sysColumns.index') !!}" class="btn btn-default">Cancel</a>
</div>
@push('scripts')
    <script>
        var table_coulmns = JSON.parse('<?php echo json_encode($columns); ?>');
        var table_coulmns1 = JSON.parse('<?php echo json_encode($columns1); ?>');
        $(document).ready(function() {
            if($('#column_original_name').select2("val") != null){
                table_columns();
            }
            if($('#joined_table').select2("val") != null){
                table_columns1();
            }
        });
        function table_columns() {
            var table_id = $('#table_id').select2("val");
            $('#column_original_name option').remove();
            $('#column_original_name').select2("val", '');
            $.each(table_coulmns[table_id], function (index, subCatObj) {
                var htmlString = '';
                htmlString = '<option data-status="';
                if(typeof subCatObj.element_status == "undefined"){
                    htmlString += 0;
                }else{
                    htmlString += subCatObj.element_status;
                }
                htmlString += '"  data-type="'+subCatObj.Type+'"  value="' + subCatObj.Field + '">' + subCatObj.Field + '</option>';
                $('#column_original_name').append(htmlString);
            });
            if(typeof syscolumns != 'undefined') {
                $('#column_type').val(syscolumns['column_type']);
                $('#column_original_name').select2("val", syscolumns['column_original_name']);
                $('#column_original_namee').val(syscolumns['column_original_name']);
            }
        }

        function column_type_fun(element) {
            $('#column_type').val($('#'+element.id).find(":selected").data("type"));
            $('#element_status').val($('#'+element.id).find(":selected").data("status"));
        }

        function table_columns1() {
            var table_id = $('#joined_table').select2("val");
            $('#joined_column option').remove();
            $('#joined_column').select2("val", '');
            $.each(table_coulmns1[table_id], function (index, subCatObj) {
                $('#joined_column').append('<option  value="' + subCatObj.column_admin_name + '">' + subCatObj.column_admin_name + '</option>');
            });
            if(typeof syscolumns != 'undefined') {
                $('#joined_column').select2("val", syscolumns['joined_column']);
                $('#joined_columnn').val(syscolumns['joined_column']);
            }
        }
    </script>
@endpush
