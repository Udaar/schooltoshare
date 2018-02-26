@if(isset($_GET['ticket_id']))
  <input type="hidden" name="ticket_id" value="{{$_GET['ticket_id']}}">
  <input type="hidden" name="action_id" value="{{$_GET['action_id']}}">
@endif
<!-- Order Id Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('order_id', 'Out Order Number:') !!}
    <select class="form-control" name="order_id" required="required">
        @foreach($out_orders as $out_order)
            <option value="{{$out_order->id}}">{{$out_order->order_number}}</option>
        @endforeach
      </select>
</div>
<div class="form-group col-sm-6">
    {!! Form::label('in_order_id', 'In Order Number:') !!}
    <select class="form-control" name="in_order_id" id="in_order_id" required="required">
        <option></option>
        @foreach($in_orders as $in_order)
            <option value="{{$in_order->id}}">{{$in_order->order_number}}</option>
        @endforeach
      </select>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('in_order_item_id', 'In Order Item:') !!}
    <select class="form-control" name="inventory_id" id="in_order_item_id" required="required">
      </select>
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity', 'Quantity:') !!}
    {!! Form::number('quantity', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div> --}}


<!-- Inventory Id Field -->
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('inventory_id', 'Inventory Id:') !!}--}}
    {{--{!! Form::number('inventory_id', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Qc Quality Check Date Field -->
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('qc_quality_check_date', 'Qc Quality Check Date:') !!}--}}
    {{--{!! Form::date('qc_quality_check_date', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

{{--<!-- Qc Quantity Check Date Field -->--}}
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('qc_quantity_check_date', 'Qc Quantity Check Date:') !!}--}}
    {{--{!! Form::date('qc_quantity_check_date', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

{{--<!-- Qc Quality Check By Field -->--}}
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('qc_quality_check_by', 'Qc Quality Check By:') !!}--}}
    {{--{!! Form::number('qc_quality_check_by', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

{{--<!-- Qc Quantity Check By Field -->--}}
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('qc_quantity_check_by', 'Qc Quantity Check By:') !!}--}}
    {{--{!! Form::number('qc_quantity_check_by', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Cost Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('cost', 'Cost:') !!}
    {!! Form::number('cost', null, ['class' => 'form-control', 'required' => 'required', 'readonly'=>'readonly']) !!}
</div>

<!-- Packing Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('packing_id', 'Packing:') !!}
    <select class="form-control" name="packing_id" required="required">
        @foreach($packings as $packing)
            <option value="{{$packing->id}}">{{$packing->name}}</option>
        @endforeach
      </select>
</div>
<input type="hidden" id="all_quantity" name="all_quantity">
<input type="hidden" id="all_quantity1" name="all_quantity1">
<input type="hidden" id="item_cost_id" name="item_cost_id"> --}}

<!-- Packed Date Field -->
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('packed_date', 'Packed Date:') !!}--}}
    {{--{!! Form::date('packed_date', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

{{--<!-- Packed By Field -->--}}
{{--<div class="form-group col-sm-6">--}}
    {{--{!! Form::label('packed_by', 'Packed By:') !!}--}}
    {{--{!! Form::number('packed_by', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

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
            <a href="{!! route('outOrderItems.index') !!}" class="btn btn-default">Cancel</a>
        </div>
    </div>
</div> --}}


<script type="text/html" id="item-template">
    <tr>
        <input type="hidden" id="all_quantity_0" name="all_quantity_0">
        <input type="hidden" id="all_quantity1_0" name="all_quantity1_0">
        <input type="hidden" id="item_cost_id_0" name="item_cost_id_0">
        <input type="hidden" id="item_price_0" name="item_price_0" value="0">
        <input type="hidden" id="inv_id_0" name="inv_id_0">
        <td>
            <span class="deleteItem">
                <i class="fa fa-close font-red" style="font-size: 20px"></i>
            </span>
        </td>
        <td class="count_class" data-content="counter"></td>
        {{--<td>--}}
            {{--<select class="select2" name="out_order_0" id="out_order_0" required="required">--}}
                {{--@foreach($out_orders as $out_order)--}}
                    {{--<option value="{{$out_order->id}}">{{$out_order->order_number}}</option>--}}
                {{--@endforeach--}}
            {{--</select>--}}
        {{--</td>--}}
        <td>
            <select onchange="change_items(this)"  class="select2" name="in_order_0" id="in_order_0" required="required">
                @foreach($in_orders as $in_order)
                    <option value="{{$in_order->id}}">{{$in_order->order_number}}</option>
                @endforeach
            </select>
        </td>
        <td>
            <select onchange="change_items_price(this)"  class="select2" name="item_id_0" id="item_id_0" required="required">
            </select>
        </td>
        <td><input type="text" name="barcode_0" id="barcode_0"  class="form-control ifm-border-light-grey-all" value="" readonly></td>
        <td><input type="text" onkeyup="change_items_quanity(this)" name="quantity_0" id="quantity_0" class="form-control ifm-border-light-grey-all" value="" required="required"></td>
        <td><input type="text" name="price_0"  id="price_0" class="form-control ifm-border-light-grey-all" value="" readonly></td>
        {{--<td>--}}
            {{--<select class="select2" name="packing_0" id="packing_0" required="required">--}}
                {{--@foreach($packings as $packing)--}}
                    {{--<option  value="{{$packing->id}}">{{$packing->name}}</option>--}}
                {{--@endforeach--}}
              {{--</select>--}}
        {{--</td>--}}
        <td>
            <select class="select2" name="store_0" id="store_0" required="required">
                @foreach($stores as $store)
                    <option  value="{{$store->id}}">{{$store->name}}</option>
                @endforeach
              </select>
        </td>
        {{--<td>--}}
            {{--<a href="#" class="store ifm-margin-xs-right" data-type="text" data-pk="1" data-url="/post" data-title="Enter username" data-placement="left">storeABC</a>--}}
        {{--</td>--}}
    </tr>
</script>

<div class="container-fluid ifm-no-padding-left ifm-no-padding-right">
    <div class="item-table table-responsive">
        <table class="table table-bordered table-hover text-center ifm-margin-sm-bottom">
            <thead>
                <th>
                    <i class="fa fa-trash"></i>
                </th>
                <th>#</th>
                {{--<th>Out Order Number</th>--}}
                <th>In Order Number</th>
                <th>Item</th>
                <th>Barcode</th>
                <th>Quantity</th>
                <th>Cost</th>
                {{--<th>Packing</th>--}}
                <th>Store</th>
            </thead>
            <tbody id="item-wrap">
                <?php $counter = 1;?>
                @if(isset($order_items))
                    @foreach($order_items as $order_item)
                 <tr>
                    <input type="hidden" id="all_quantity_{{$counter}}" name="all_quantity_{{$counter}}">
                    <input type="hidden" id="all_quantity1_{{$counter}}" name="all_quantity1_{{$counter}}">
                    <input type="hidden" id="item_cost_id_{{$counter}}" name="item_cost_id_{{$counter}}" value="{{$order_item->item_cost_id}}">
                    <input type="hidden" id="inv_id_{{$counter}}" name="inv_id_{{$counter}}" value="<?php echo $order_item->inventory_id;?>" >
                    <input type="hidden" id="item_idd_{{$counter}}" name="item_idd_{{$counter}}" value="<?php echo $order_item->item_id;?>" >
                    <input type="hidden" id="item_price_{{$counter}}" name="item_price_{{$counter}}">
                    <td>
                        <span class="deleteItem">
                            <i class="fa fa-close font-red" style="font-size: 20px"></i>
                        </span>
                    </td>
                    <td class="count_class" data-content="counter">
                        {{ $counter }}
                    </td>
                    {{--<td>--}}
                        {{--<select class="select2" name="out_order_{{$counter}}" id="out_order_{{$counter}}" required="required">--}}
                            {{--@foreach($out_orders as $out_order)--}}
                                {{--<option @if(!empty($order_item) && $out_order->id == $order_item->out_order_id) selected="selected" @endif  value="{{$out_order->id}}">{{$out_order->order_number}}</option>--}}
                            {{--@endforeach--}}
                        {{--</select>--}}
                    {{--</td>--}}
                    <td>
                        <select onchange="change_items(this)" class="select2" name="in_order_{{$counter}}" id="in_order_{{$counter}}" required="required">
                            @foreach($in_orders as $in_order)
                                <option @if(!empty($order_item) && $in_order->id == $order_item->in_order_id) selected="selected" @endif value="{{$in_order->id}}">{{$in_order->order_number}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select onchange="change_items_price(this)" class="select2" name="item_id_{{$counter}}" id="item_id_{{$counter}}" required="required">
                            {{--@foreach($items as $item)--}}
                                {{--<option value="{{$item->id}}">{{$item->name}}</option>--}}
                            {{--@endforeach--}}
                        </select>
                    </td>
                    <td><input type="text" name="barcode_{{$counter}}" id="barcode_{{$counter}}" class="form-control ifm-border-light-grey-all" value="<?php echo $order_item->barcode; ?>" readonly></td>
                    <td><input onkeyup="change_items_quanity(this)" type="text" name="quantity_{{$counter}}" id="quantity_{{$counter}}" class="form-control ifm-border-light-grey-all" value="<?php echo $order_item->quantity; ?>" required="required"></td>
                    <td><input type="text" name="price_{{$counter}}"  id="price_{{$counter}}" class="form-control ifm-border-light-grey-all" value="" readonly></td>
                    {{--<td>--}}
                        {{--<select class="select2" name="packing_{{$counter}}" id="packing_{{$counter}}" required="required">--}}
                            {{--@foreach($packings as $packing)--}}
                                {{--<option @if(!empty($order_item) && $packing->id == $order_item->packing) selected="selected" @endif value="{{$packing->id}}">{{$packing->name}}</option>--}}
                            {{--@endforeach--}}
                          {{--</select>--}}
                    {{--</td>--}}
                    <td>
                        <select class="select2" name="store_{{$counter}}" id="store_{{$counter}}" required="required">
                            @foreach($stores as $store)
                                <option @if(!empty($order_item) && $store->id == $order_item->store) selected="selected" @endif  value="{{$store->id}}">{{$store->name}}</option>
                            @endforeach
                          </select>
                    </td>
                    {{--<td>--}}
                        {{--<a href="#" class="store ifm-margin-xs-right" data-type="text" data-pk="1" data-url="/post" data-title="Enter username" data-placement="left">storeABC</a>--}}
                    {{--</td>--}}
                </tr>
                        <?php $counter++; ?>
                    @endforeach
                @endif
            </tbody>            
        </table>
    </div>
    <div class="plus-wrap">
        <div class="row">
            <div class="col-xs-12 ifm-padding-sm-bottom ifm-no-padding-right">
                <a class="ifm-grey ifm-white-bg add-item" style="text-decoration:underline"><i class="fa fa-plus-square"></i> Add item </a>
            </div>
        </div>
    </div> 
    <!-- Submit Field -->
    <div class="row">
        <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
            <div class="form-group col-sm-12 ifm-no-margin-bottom">
                <div class="form-actions ifm-no-padding-bottom ifm-padding-md-top ifm-border-light-grey-top">
                    <div class="row  col-md-offset-0">
                        <button class="btn ifm-btn-default ifm-main-bg ifm-white" id="out_order_items_submit" type="submit">Submit</button>
                        <button class="btn ifm-btn-default ifm-light-grey-bg ifm-grey back" type="button">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>

@push('scripts')
    <script src="/metronic/js/jquery.loadTemplate.min.js"></script>
    <script>
        $(document).ready(function(){
            $temp_count = 1;
            while($('#in_order_'+$temp_count).length > 0){
                $('#in_order_'+$temp_count).trigger("change");
                $temp_count++;
            }
        });
        $('.add-item').on('click', function(){var script_counter = $("#item-wrap").find('tr:last .count_class').html();
            if(script_counter == undefined){
                script_counter = 1;
            }else{
                script_counter = parseInt(script_counter) + 1;
            }
            $('.deleteItem').removeClass('deleteItem');
            $("#item-wrap").loadTemplate($("#item-template") ,{
                counter : script_counter
            },{ append: true });
            $('#item_id_0').attr('name','item_id_'+script_counter);
            $('#item_id_0').attr('id','item_id_'+script_counter);
            $('#store_0').attr('name','store_'+script_counter);
            $('#store_0').attr('id','store_'+script_counter);
            $('#quantity_0').attr('name','quantity_'+script_counter);
            $('#quantity_0').attr('id','quantity_'+script_counter);
            $('#price_0').attr('name','price_'+script_counter);
            $('#price_0').attr('id','price_'+script_counter);

            $('#out_order_0').attr('name','out_order_'+script_counter);
            $('#out_order_0').attr('id','out_order_'+script_counter);
            $('#in_order_0').attr('name','in_order_'+script_counter);
            $('#in_order_0').attr('id','in_order_'+script_counter);
            $('#barcode_0').attr('name','barcode_'+script_counter);
            $('#barcode_0').attr('id','barcode_'+script_counter);
//            $('#packing_0').attr('name','packing_'+script_counter);
//            $('#packing_0').attr('id','packing_'+script_counter);

            $('#all_quantity_0').attr('name','all_quantity_'+script_counter);
            $('#all_quantity_0').attr('id','all_quantity_'+script_counter);
            $('#all_quantity1_0').attr('name','all_quantity1_'+script_counter);
            $('#all_quantity1_0').attr('id','all_quantity1_'+script_counter);
            $('#item_cost_id_0').attr('name','item_cost_id_'+script_counter);
            $('#item_cost_id_0').attr('id','item_cost_id_'+script_counter);
            $('#inv_id_0').attr('name','inv_id_'+script_counter);
            $('#inv_id_0').attr('id','inv_id_'+script_counter);
            $('#item_price_0').attr('name','item_price_'+script_counter);
            $('#item_price_0').attr('id','item_price_'+script_counter);



            $('.select2').select2();
            $('.store').editable();
            //$('.submit').attr('disabled','disabled');
            $('#in_order_'+script_counter).trigger("change");
        });
        $(document).on('click','.deleteItem', function(){
           $(this).parent().parent().prev().find('td:first span:first').addClass('deleteItem');
           $(this).parent().parent().remove();       
           validate();        
        });
        $(function(){
            $('.store').editable();
        });
    </script>
    <script>
    function change_items(element){
        var in_order_id = element.value;
        var element_id = element.id;
        var element_id_arr = element_id.split("_");
        if(typeof in_order_id != 'undefined') {
            $.get('{{ url('outOrderItems') }}/create/ajax_in_order_items?in_order_id=' + in_order_id, function (data) {
                var item_id = $('#' + element_id).parent().next().children().attr('id');
                $('#' + item_id + ' option').remove();
                $('#' + item_id).select2("val", '');
                var temp_var = 'asd';
                $.each(data, function (index, subCatObj) {
                    $('#' + item_id).append('<option data-max_attr="' + subCatObj.remains_quantity + '" data-quantity_attr="' + subCatObj.quantity + '"  data-item_id="' + subCatObj.item_id + '" data-inventory_id="' + subCatObj.inventory_id + '" value="' + subCatObj.item_id + '">' + subCatObj.name + '</option>');
                    //                if($('inv_id_'+element_id_arr[2]).val() == subCatObj.inventory_id){
                    //                    temp_var = subCatObj.inventory_id;
                    //                }
                });
                $('#' + item_id).select2("val", $('#item_idd_' + element_id_arr[2]).val());
            });
        }
    };

    function change_items_price(element)
    {
        var element_id = element.id;
        var element_id_arr = element_id.split("_");
        $('#'+element_id).on('change', function (e) {
            var item_id = $('#'+element_id+" option:selected").data('item_id');//$('#'+element_id).find(":selected").attr('item_id');

            if(typeof item_id != 'undefined') {
                $.ajax({
                    url: '{{url('outOrderItems') }}/create/ajax_current_item_cost?item_id=' + item_id,
                    type: 'get',
                    dataType: 'html',
                    async: false,
                    success: function (subCatObj) {
                        subCatObj = JSON.parse(subCatObj);
                        if (subCatObj.length > 0) {
                            $('#quantity_' + element_id_arr[2]).removeAttr('disabled', 'disabled');
                            subCatObj = subCatObj[0];
                            if ($('#quantity_' + element_id_arr[2]).val() == '') {
                                $('#quantity_' + element_id_arr[2]).val(0)
                            }
                            $('#price_' + element_id_arr[2]).val(parseFloat(subCatObj.cost) * parseFloat($('#quantity_' + element_id_arr[2]).val()));
                            $('#item_price_' + element_id_arr[2]).val(parseFloat(subCatObj.cost));
                            $('#item_cost_id_' + element_id_arr[2]).val(subCatObj.id);
                            $('#out_order_items_submit').css('display','initial');
                        } else {
                            alert('Please add Sell price for this item');
                            if($('#store_' + element_id_arr[2]).val() == null){
                                alert('Please add store');
                            }
                            $('#out_order_items_submit').css('display','none');
                            $('#quantity_' + element_id_arr[2]).attr('disabled', 'disabled');
                        }
                    }
                });
            }
            {{--$.get('{{ url('outOrderItems') }}/create/ajax_current_item_cost?item_id=' + item_id, function (data) {--}}
                {{--//$('#quantity').val($('#in_order_item_id').find(":selected").attr('max_attr'));--}}
                {{--$.each(data, function (index, subCatObj) {--}}
                    {{--$('#price_'+element_id_arr[2]).val(parseFloat(subCatObj.cost)*parseFloat($('#quantity_'+element_id_arr[2]).val()));--}}
                    {{--$('#item_price_'+element_id_arr[2]).val(parseFloat(subCatObj.cost));--}}
                    {{--$('#item_cost_id_'+element_id_arr[2]).val(subCatObj.id);--}}
                {{--});--}}
            {{--});--}}
            $('#all_quantity_'+element_id_arr[2]).val($('#'+element_id+" option:selected").data('max_attr'));
            $('#all_quantity1_'+element_id_arr[2]).val($('#'+element_id+" option:selected").data('quantity_attr'));
            //$('#quantity_'+element_id_arr[2]).val($('#'+element_id+" option:selected").data('quantity_attr'));
            $('#inv_id_'+element_id_arr[2]).val($('#'+element_id+" option:selected").data('inventory_id'));
        });
    }

    function change_items_quanity(element)
    {
        var element_id = element.id;
        var element_id_arr = element_id.split("_");
        if (parseFloat($('#quantity_'+element_id_arr[1]).val()) > parseFloat($('#item_id_'+element_id_arr[1]+" option:selected").data('max_attr')))
        {
            $('#quantity_'+element_id_arr[1]).val($('#item_id_'+element_id_arr[1]+" option:selected").data('max_attr'));
        }
        var temp;
        if($('#'+element_id).val() >0 ){
            temp = $('#'+element_id).val() ;
        }else{
            temp = 0 ;
        }
        $('#price_'+element_id_arr[1]).val(parseFloat( temp)*parseFloat($('#item_price_'+element_id_arr[1]).val()));
    }
</script>
@endpush

