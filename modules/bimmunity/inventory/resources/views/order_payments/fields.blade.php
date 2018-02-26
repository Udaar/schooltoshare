<!-- Order Id Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('order_id', 'Order:') !!}
    <select class="form-control" name="order_id" required="required">
        @foreach($out_orders as $out_order)
            <option value="{{$out_order->id}}">{{$out_order->order_number}}</option>
        @endforeach
      </select>
</div>

<!-- Paid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paid', 'Paid:') !!}
    {!! Form::number('paid', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Remains Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remains', 'Remains:') !!}
    {!! Form::number('remains', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Total Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_value', 'Total Value:') !!}
    {!! Form::number('total_value', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Company Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_id', 'Company:') !!}
    <select class="form-control" name="company_id" id="company_id" required="required">
        <option></option>
        @foreach($companies as $company)
            <option value="{{$company->id}}">{{$company->name}}</option>
        @endforeach
      </select>
</div>

<!-- Account Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_account_id', 'Company Account:') !!}
    <select class="form-control" name="company_account_id" id="company_account_id" required="required">
      </select>
</div>

<!-- Payer Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payer_name', 'Payer Name:') !!}
    {!! Form::text('payer_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Paid Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paid_date', 'Paid Date:') !!}
    {!! Form::date('paid_date', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div> --}}


<!-- Created By Field -->
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('created_by', 'Created By:') !!}--}}
    {{--{!! Form::number('created_by', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Submit Field -->
{{-- <div class="form-group col-sm-12">
    <div class="form-actions">
        <div class="row  col-md-offset-0">
            {!! Form::submit('Save', ['class' => 'btn green']) !!}
            <a href="{!! route('orderPayments.index') !!}" class="btn btn-default">Cancel</a>
        </div>
    </div>
</div> --}}


<div class="container-fluid">
    <!-- Input Fields -->
    <div class="row">
        <input type="hidden" name="total_value2" id="total_value2">
        <input type="hidden" name="total_order" id="total_order">
        <input type="hidden" name="prev_paid" id="prev_paid">
        <div class="col-lg-6 col-xs-12 ifm-no-padding-left ifm-no-padding-right">
            <div class="container-fluid">
                <!-- Order Id Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('order_id', 'Orders:', ['class' => 'ifm-grey']) !!}
                            {!! Form::select('order_id', $out_orders->pluck('order_number', 'id'), null, ['class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select order number','onchange'=>'order_value(this)', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12 ifm-no-padding-left ifm-no-padding-right">
            <div class="container-fluid">
                <!-- Paid Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('paid', 'Paid:', ['class' => 'ifm-grey']) !!}
                            {!! Form::text('paid', null, ['class' => 'form-control ifm-border-light-grey-all','onkeyup'=>'remains_val(this)', 'required' => 'required','onkeypress'=>'return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 0) || (event.charCode == 46))']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12 ifm-no-padding-left ifm-no-padding-right">
            <div class="container-fluid">
                <!-- Remains Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('remains', 'Remains:', ['class' => 'ifm-grey', 'required' => 'required']) !!}
                            {!! Form::text('remains', null, ['class' => 'form-control ifm-border-light-grey-all', 'required' => 'required','onkeypress'=>'return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 0) || (event.charCode == 46))']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12 ifm-no-padding-left ifm-no-padding-right">
            <div class="container-fluid">
                <!-- Total Value Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('total_value', 'Total Value:', ['class' => 'ifm-grey']) !!}
                            {!! Form::text('total_value', null, ['class' => 'form-control ifm-border-light-grey-all','disabled'=>'disabled', 'required' => 'required','onkeypress'=>'return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 0) || (event.charCode == 46))']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12 ifm-no-padding-left ifm-no-padding-right">
            <div class="container-fluid">
                <!-- Company Id Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('company_id', 'Company:', ['class' => 'ifm-grey', 'required' => 'required']) !!}
                            {!! Form::select('company_id', $companies->pluck('name', 'id'), null, ['class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select account', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12 ifm-no-padding-left ifm-no-padding-right">
            <div class="container-fluid">
                <!-- Account Type Id Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('company_account_id', 'Company Account:', ['class' => 'ifm-grey']) !!}
                            {!! Form::select('company_account_id', $companies->pluck('name', 'id'), null, ['class' => 'form-control select2 ifm-border-light-grey-all', 'id' => 'company_account_id', 'placeholder' => 'Select company account', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12 ifm-no-padding-left ifm-no-padding-right ">
            <div class="container-fluid">
                <!-- Payer Name Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('payer_name', 'Payer Name:', ['class' => 'ifm-grey', 'required' => 'required']) !!}
                            {!! Form::text('payer_name', null, ['class' => 'form-control ifm-border-light-grey-all', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12 ifm-no-padding-left ifm-no-padding-right">
            <div class="container-fluid">
                <!-- Paid Date Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('paid_date', 'Paid Date:', ['class' => 'ifm-grey']) !!}
                            <div class="input-group input-medium date date-picker"  data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                <input type="text" required class="form-control ifm-white-bg ifm-border-light-grey-all" name="paid_date" readonly>
                                <span class="input-group-btn">
                                    <button class="btn default ifm-main-bg ifm-white ifm-border-main-all" type="button">
                                        <i class="fa fa-calendar"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Submit Field -->
    <div class="row">
        <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
            <div class="form-group col-sm-12 ifm-no-margin-bottom">
                <div class="form-actions ifm-no-padding-bottom ifm-border-light-grey-top">
                    <div class="row  col-md-offset-0">
                        {!! Form::submit('Save', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
                        <a href="{!! route('orderPayments.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded',function ()
    {
        $('#company_id').on('change', function(e){
            //console.log(e);
            var company_id = e.target.value;
            console.log('da');

            $.get('{{ url('orderPayments') }}/create/ajax_company_account?company_id=' + company_id, function(data) {
                console.log(data);
                $('#company_account_id').empty();
                $('#company_account_id').append('<option></option>');
                $.each(data, function(index,subCatObj){
                    console.log(subCatObj.account_number);
                    $('#company_account_id').append('<option value="'+subCatObj.id+'">'+subCatObj.account_number+'</option>');
                });
            });
        });
    })
    function order_value(element){
        $.get('{{ url('orderPayments') }}/create/get_order_payment?id=' + $('#'+element.id+" option:selected").val(), function (data) {
            console.log(data);
            $.each(data, function(index,subCatObj) {
                console.log(subCatObj.cost);
                $('#total_value').val(subCatObj.remains);
                $('#total_value').attr('max',subCatObj.remains);
                $('#total_order').val(subCatObj.cost);
                $('#prev_paid').val(subCatObj.paid);
                $('#total_value2').val(subCatObj.remains);
            });
        });
    }
    function remains_val(element){
        totalValue = parseFloat($('#total_value').val());
        paidValue = parseFloat($('#'+element.id).val());
        if(paidValue > totalValue ){
            alert('Paid value must be smaller than order value');
           $('#'+element.id).val('');
            $('#remains').val('');
        }
        else if(paidValue < 0 ){
            alert('Paid value must be bigger than zero');
            $('#'+element.id).val('');
            $('#remains').val('');
        }else {
            $('#remains').val(totalValue - paidValue);
        }
    }
</script>