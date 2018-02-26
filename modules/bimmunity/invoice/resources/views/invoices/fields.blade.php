<!-- User Id Field -->
{!! Form::hidden('user_id', Auth::user()->id) !!}
<!-- /User Id Field -->

<!-- Created By Field -->
{!! Form::hidden('created_by', Auth::user()->id) !!}
<!-- /Created By Field -->

<!-- Updated By Field -->
{!! Form::hidden('updated_by', Auth::user()->id) !!}
<!-- /Updated By Field -->

<!-- Title Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('title', 'Title:', ['class' => 'ifm-grey', 'required' => 'required']) !!}
        {!! Form::text('title', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Title Field -->

<!-- Customer Id Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('customer_id', 'Customer:', ['class' => 'ifm-grey']) !!}
        {!! Form::select('customer_id', $customers, null, ['class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select a customer (optionally)']) !!}
    </div>
</div>
<!-- /Customer Id Field -->

<!-- Code Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('code', 'Code:', ['class' => 'ifm-grey']) !!}
        {!! Form::text('code', null, ['class' => 'form-control ifm-border-light-grey-all', 'required' => 'required']) !!}
    </div>
</div>
<!-- /Code Field -->

<!-- Status Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('status_id', 'Status:', ['class' => 'ifm-grey']) !!}
        {!! Form::select('status_id', $status, null, ['class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select a status']) !!}
    </div>
</div>
<!-- /Status Field -->

<!-- Issue Date Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('issue_date', 'Issue Date:', ['class' => 'ifm-grey']) !!}
        <div class="input-group ifm-width-100 input-medium date date-picker" data-date-format="{{config('ifm.settings.date-format-bootstrap')}}" >
            {!! Form::text('issue_date', null, ['class' => 'form-control ifm-border-light-grey-all','required'=>'required']) !!}
            <span class="input-group-btn">
                <button class="btn default ifm-main-bg ifm-white ifm-border-main-all" style="padding:9px 12px" type="button">
                    <i class="fa fa-calendar"></i>
                </button>
            </span>
        </div>
    </div>
</div>
<!-- /Issue Date Field -->

<!-- Due Date Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('due_date', 'Due Date:', ['class' => 'ifm-grey']) !!}
        <div class="input-group ifm-width-100 input-medium date date-picker" data-date-format="{{config('ifm.settings.date-format-bootstrap')}}" >
            {!! Form::text('due_date', null, ['class' => 'form-control ifm-border-light-grey-all','required'=>'required']) !!}
            <span class="input-group-btn">
                <button class="btn default ifm-main-bg ifm-white ifm-border-main-all" style="padding:9px 12px" type="button">
                    <i class="fa fa-calendar"></i>
                </button>
            </span>
        </div>
    </div>
</div>
<!-- /Due Date Field -->

<!-- Product Field -->
@include('bimmunity/invoice::invoices.product')
@if(isset($invoice))

    @foreach($invoice->products as $productsel)
        <div class="product-container">
            <div class="product-quantity">
                <div class="col-xs-6">
                <div class="form-group">
                    <select name='product_id[]' class = 'product form-control select2 ifm-border-light-grey-all'>
                    @foreach($products as $product)
                        @if($product->id == $productsel->id)
                        <option selected="selected" value="{{$product->id}}" price="{{$product->unit_cost}}" currency="{{$product->currency->code}}" >{{$product->name}}</option>
                        @else
                        <option value="{{$product->id}}" price="{{$product->unit_cost}}" currency="{{$product->currency->code}}" >{{$product->name}}</option>
                        @endif
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-4 ifm-no-padding-left">
                <div class="form-group col-sm-2 ifm-width-100">
                    {!! Form::number('quantity[]',  $productsel->pivot->quantity, ['class' => 'quantity form-control ifm-border-light-grey-all', 'required' => 'required', 'placeholder' => 'Quentaty']) !!}
                </div>
                
            </div>    
            </div>

        </div>
    @endforeach
@endif
<!-- Product Field -->

<!-- Amount Id Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('amount', 'Amount:', ['class' => 'ifm-grey']) !!}
        {!! Form::number('amount',  0, ['class' => 'form-control ifm-border-light-grey-all', 'required' => 'required','id'=>'amount','step'=>'any']) !!}
    </div>
</div>
<!-- /Amount Id Field -->

<!-- Disaccount Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('discount', 'Discount:', ['class' => 'ifm-grey']) !!}
        {!! Form::number('discount', null, ['class' => 'form-control ifm-border-light-grey-all','id'=>'discount', 'required' => 'required']) !!}
    </div>
</div>
<!-- /Disaccount Field -->

<!-- Total Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('total', 'Total:', ['class' => 'ifm-grey']) !!}
        {!! Form::number('total', null, ['step'=>'any','class' => 'form-control ifm-border-light-grey-all','id'=>'total']) !!}
    </div>
</div>
<!-- /Total Field -->

<!-- Currency Id Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('currency_id', 'Currency:', ['class' => 'ifm-grey']) !!}
        {!! Form::select('currency_id', $currencies, null, ['class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select a currency','id'=>'currency']) !!}
    </div>
</div>
<!-- /Currency Id Field -->

<!-- Description Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('description', 'Description:', ['class' => 'ifm-grey']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control ifm-border-light-grey-all', 'rows' => '3']) !!}
    </div>
</div>
<!-- /Description Field -->

<!-- Terms Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('terms', 'Terms:', ['class' => 'ifm-grey']) !!}
        {!! Form::textarea('terms', null, ['class' => 'form-control ifm-border-light-grey-all', 'rows' => '3']) !!}
    </div>
</div>
<!-- /Terms Field -->

<!-- Submit Field -->
<div class="col-xs-12">
    <div class="form-group ifm-form-actions">
        {!! Form::submit('Save', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
        <a href="{!! route('invoices.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
    </div>
</div>
<!-- /Submit Field -->

{{--<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-xs-12">
            <div class="container-fluid">
                <!-- Title Field -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('title', 'Title:', ['class' => 'ifm-grey', 'required' => 'required']) !!}
                            {!! Form::text('title', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
                        </div>
                    </div>
                </div>
                <!-- Product Field -->
                @include('bimmunity/invoice::invoices.product')
                @if(isset($invoice))
               
                    @foreach($invoice->products as $productsel)
                        <div class="row product-container">
                            <div class="product-quantity">
                                <div class="col-xs-6 ifm-no-padding-right">
                                <div class="form-group col-sm-3 ifm-width-100">
                                    <select name='product_id[]' class = 'product form-control select2 ifm-border-light-grey-all'>
                                    @foreach($products as $product)
                                        @if($product->id == $productsel->id)
                                        <option selected="selected" value="{{$product->id}}" price="{{$product->unit_cost}}" currency="{{$product->currency->code}}" >{{$product->name}}</option>
                                        @else
                                        <option value="{{$product->id}}" price="{{$product->unit_cost}}" currency="{{$product->currency->code}}" >{{$product->name}}</option>
                                        @endif
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-4 ifm-no-padding-left">
                                <div class="form-group col-sm-2 ifm-width-100">
                                    {!! Form::number('quantity[]',  $productsel->pivot->quantity, ['class' => 'quantity form-control ifm-border-light-grey-all', 'required' => 'required', 'placeholder' => 'Quentaty']) !!}
                                </div>
                                
                            </div>    
                            </div>

                        </div>
                    @endforeach
                @endif  
                <!-- Vendor Id Field -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('amount', 'Amount:', ['class' => 'ifm-grey']) !!}
                            {!! Form::number('amount',  0, ['class' => 'form-control ifm-border-light-grey-all', 'required' => 'required','id'=>'amount','step'=>'any']) !!}
                        </div>
                    </div>
                </div>
                
                <!-- Discount Field -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('discount', 'Discount:', ['class' => 'ifm-grey']) !!}
                            {!! Form::number('discount', null, ['class' => 'form-control ifm-border-light-grey-all','id'=>'discount', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
                <!-- total Field -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('total', 'Total:', ['class' => 'ifm-grey']) !!}
                            {!! Form::number('total', null, ['step'=>'any','class' => 'form-control ifm-border-light-grey-all','id'=>'total']) !!}
                        </div>
                    </div>
                </div>
                 <!-- Customer Id Field -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('customer_id', 'Customer:', ['class' => 'ifm-grey']) !!}
                            {!! Form::select('customer_id', $customers, null, ['class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select a customer (optionally)']) !!}
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <div class="col-lg-6 col-xs-12">
            <div class="container-fluid">
                <!-- Code Field -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('code', 'Code:', ['class' => 'ifm-grey']) !!}
                            {!! Form::text('code', null, ['class' => 'form-control ifm-border-light-grey-all', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
                 <!-- Currency Id Field -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('currency_id', 'Currency:', ['class' => 'ifm-grey']) !!}
                            {!! Form::select('currency_id', $currencies, null, ['class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select a currency','id'=>'currency']) !!}
                        </div>
                    </div>
                </div>
                <!-- Issue Date Field -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('issue_date', 'Issue Date:', ['class' => 'ifm-grey']) !!}
                            {!! Form::date('issue_date', null, ['class' => 'form-control datetimepicker ifm-border-light-grey-all' , 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
               
                <!-- Due Date Field -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('due_date', 'Due Date:', ['class' => 'ifm-grey']) !!}
                            {!! Form::date('due_date', null, ['class' => 'form-control datetimepicker ifm-border-light-grey-all', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
               
                 <!-- Status Id Field -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('status_id', 'Status:', ['class' => 'ifm-grey']) !!}
                            {!! Form::select('status_id', $status, null, ['class' => 'form-control select2 ifm-border-light-grey-all', 'placeholder' => 'Select a status']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="container-fluid">
                <!-- Description Field -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group col-sm-12 ifm-width-100">
                            {!! Form::label('description', 'Description:', ['class' => 'ifm-grey']) !!}
                            {!! Form::textarea('description', null, ['class' => 'form-control ifm-border-light-grey-all', 'rows' => '5']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="container-fluid">
                <!-- Terms Field -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group col-sm-12 ifm-width-100">
                            {!! Form::label('terms', 'Terms:', ['class' => 'ifm-grey']) !!}
                            {!! Form::textarea('terms', null, ['class' => 'form-control ifm-border-light-grey-all', 'rows' => '5']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Submit Field -->
    <div class="row">
        <div class="col-xs-12 ifm-padding-lg-left">
            <div class="form-group col-sm-12">
                <div class="form-actions">
                    <div class="row  col-md-offset-0">
                        {!! Form::submit('Save', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
                        <a href="{!! route('invoices.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>--}}
 
<script> 
    $(document).ready (function () {
        $(document).on('change keyup','.product,.quantity,#currency',function(e){
        var that = this;
        var product=$(that).closest('.product-quantity').find('.product').val();
        var qty= $(that).closest('.product-quantity').find('.quantity').val();
        var price = $('option:selected', $(that).closest('.product-quantity').find('.product')).attr('price');
        var amount=(qty * price) + $('#amount').val();
        $('#amount').val(0);
            $('.product-container').each(function(){
                var that= this;
                
                $.get( "currencyname/"+$('#currency').val(), function( currnecy ) {
                    var qty=parseInt($(that).find('.quantity').val());
                    var price = parseFloat($('option:selected', $(that).find('.product')).attr('price'));
                    var amountprod= qty * price ;
                    var fromcurrency = $('option:selected', $(that).find('.product')).attr('currency');
                    var tocurrency = currnecy;
                    $.get( "getCurrencyConverted/"+amountprod+'/'+fromcurrency+'/'+tocurrency, function( data ) {
                                
                                $('#amount').val(parseFloat($('#amount').val())+ parseFloat(data));
                                    $('#total').val($('#amount').val()-($('#amount').val()*($('#discount').val()/100)));
                    }); 
                });   
            });
        });
    });
</script>