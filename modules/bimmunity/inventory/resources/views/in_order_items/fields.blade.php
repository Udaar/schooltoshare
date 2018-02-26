<!-- <div class="container" style="overflow-x:visible"> -->
    <!-- <div class="row hidden-xs hidden-sm ifm-padding-md-bottom ifm-margin-md-bottom ifm-border-light-grey-bottom text-center">
        <div class="col-xs-2 ifm-no-padding-left ifm-no-padding-right">Remove</div>
        <div class="col-xs-2 ifm-no-padding-left ifm-no-padding-right">#</div>
        <div class="col-xs-2 ifm-no-padding-left ifm-no-padding-right">Barcode</div>
        <div class="col-xs-2 ifm-no-padding-left ifm-no-padding-right">Item Name</div>
        <div class="col-xs-2 ifm-no-padding-left ifm-no-padding-right">Price</div>
        <div class="col-xs-2 ifm-no-padding-left ifm-no-padding-right">Quantity</div>
        <div class="col-xs-2 ifm-no-padding-left ifm-no-padding-right">Store</div>
    </div>
    <div id="item-wrap">
        <div class="row ifm-margin-md-bottom text-center">
            <div class="col-xs-1 ifm-no-padding-left ifm-no-padding-right">
                <button class="btn font-red-mint deleteItem" style="padding:0px;background-color:transparent;" type="button">
                    <i class="fa fa-close" style="font-size:20px"></i>
                </button>
            </div>
            <div class="col-xs-1 ifm-no-padding-left ifm-no-padding-right">#1</div>

            <div class="col-xs-2 ifm-no-padding-left ifm-no-padding-right">
                <label for="" class="ifm-no-margin-bottom">123</label>
            </div>
            <div class="col-xs-2 ifm-no-padding-left">
                <select class="select2">
                    <option value="AL">Alabama</option>
                    <option value="WY">Wyoming</option>
                </select>
            </div>
            <div class="col-xs-2 ifm-no-padding-left">
                <input type="number" name="price" class="form-control ifm-border-light-grey-all" value="">
            </div>
            <div class="col-xs-2 ifm-no-padding-left">
                <input type="number" name="quantity" class="form-control ifm-border-light-grey-all" value="">
            </div>
            <div class="col-xs-2 ifm-no-padding-left ifm-no-padding-right">
                <a href="#" class="store ifm-margin-xs-right" data-type="text" data-pk="1" data-url="/post" data-title="Enter username">storeABC</a>
            </div>
        </div>
    </div> -->
    <!-- Input Fields -->
    <!-- <div class="plus-wrap">
        <div class="row">
            <div class="col-xs-12 ifm-padding-sm-bottom ifm-no-padding-right ifm-no-padding-left">
                <a class="ifm-grey ifm-white-bg add-item" style="text-decoration:underline"><i class="fa fa-plus-square"></i> Add another item </a>
            </div>
        </div>
    </div> -->
    <!-- Submit Field -->
    <!-- <div class="row">
        <div class="col-xs-12 ifm-no-padding-left ifm-no-padding-right">
            <div class="form-group col-sm-12 ifm-no-margin-bottom">
                <div class="form-actions ifm-no-padding-bottom ifm-padding-md-top ifm-border-light-grey-top">
                    <div class="row  col-md-offset-0">
                        <button class="btn ifm-btn-default ifm-main-bg ifm-white submit" type="button" disabled>Submit</button>
                        <button class="btn ifm-btn-default ifm-light-grey-bg ifm-grey back" type="button">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- </div> -->
@if(isset($_GET['ticket_id']))
    <input type="hidden" name="ticket_id" value="{{$_GET['ticket_id']}}">
    <input type="hidden" name="action_id" value="{{$_GET['action_id']}}">
@endif
<script type="text/html" id="item-template">
    <tr>
        <input type="hidden" id="item_cost_id_0" name="item_cost_id_0" value="0">
        <input type="hidden" id="item_price_0" name="item_price_0" value="0">
        <td>
            <span class="deleteItem">
                <i class="fa fa-close font-red" style="font-size: 20px"></i>
            </span>
        </td>
        <td class="count_class" data-content="counter"></td>
        <td>
            <select onchange="change_items_price(this)" class="select2" name="item_id_0" id="item_id_0" required="required">
                @foreach($items as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </td>
        <td>
            <select class="select2" name="store_0" id="store_0" required="required">
                @foreach($stores as $store)
                    <option  value="{{$store->id}}">{{$store->name}}</option>
                @endforeach
              </select>
        </td>
       
        <td><input type="text" onkeyup="change_items_price2(this)" name="quantity_0" id="quantity_0" class="form-control ifm-border-light-grey-all" value="" required="required"></td>
        <td><input type="text" name="price_0"  id="price_0" class="form-control ifm-border-light-grey-all" readonly="readonly"></td>
        <td><input type="text" name="old_price_0" id="old_price_0" class="form-control ifm-border-light-grey-all" readonly="readonly"></td> 
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
                <th>Item</th>
                <th>Store</th>
               
                <th>Quantity</th>
                <th>Price</th>
                <th>Old Price</th>
            </thead>
            <tbody id="item-wrap">
                <?php $counter = 1;?>
                @if(isset($order_items))
                    @foreach($order_items as $order_item)
                <tr>
                    <input type="hidden" id="item_cost_id_{{$counter}}" name="item_cost_id_{{$counter}}">
                    <input type="hidden" id="item_price_{{$counter}}" name="item_price_{{$counter}}">
                    <td>
                        <span class="deleteItem">
                            <i class="fa fa-close font-red" style="font-size: 20px"></i>
                        </span>
                    </td>
                    <td class="count_class">
                        {{ $counter }}
                    </td>
                    <td>
                        <select onchange="change_items_price(this)" class="select2" name="item_id_{{$counter}}" id="item_id_{{$counter}}" required="required">
                                @foreach($items as $item)
                                    <option @if(!empty($order_item) && $order_item->item_id == $item->id) selected="selected" @endif value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                        </select>
                    </td>
                    <td>
                        <select class="select2" name="store_{{$counter}}" id="Store_{{$counter}}" required="required">
                            @foreach($stores as $store)
                                <option @if(!empty($order_item) && $order_item->store_id == $store->id) selected="selected" @endif value="{{$store->id}}">{{$store->name}}</option>
                            @endforeach
                          </select>
                    </td>
                    
                    <td>
                        <input onkeyup="change_items_price2(this)" type="text" name="quantity_{{$counter}}" id="quantity_{{$counter}}" class="form-control ifm-border-light-grey-all" value="@if (!empty($order_item)) {{ $order_item->quantity }} @endif" required="required">
                    </td>
                    <td>
                        <input type="text" name="price_{{$counter}}" id="price_{{$counter}}" class="form-control ifm-border-light-grey-all" readonly="readonly">
                    </td>
                    <td>
                        <input type="text" name="old_price_{{$counter}}" id="old_price_{{$counter}}" class="form-control ifm-border-light-grey-all" value="@if (!empty($order_item)) {{ $order_item->item_cost*$order_item->quantity }} @endif" readonly="readonly">
                    </td>
                    
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
                        <button class="btn ifm-btn-default ifm-main-bg ifm-white" id="in_order_items_submit" type="submit" >Submit</button>
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
        $('.add-item').on('click', function(){
            var script_counter = $("#item-wrap").find('tr:last .count_class').html();
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
            $('#item_cost_id_0').attr('name','item_cost_id_'+script_counter);
            $('#item_cost_id_0').attr('id','item_cost_id_'+script_counter);
            $('#item_price_0').attr('name','item_price_'+script_counter);
            $('#item_price_0').attr('id','item_price_'+script_counter);
            $('.select2').select2();
            $('.store').editable();
//            $('.submit').attr('disabled','disabled');
            $('#item_id_'+script_counter).trigger("change");
        });
        $(document).on('click','.deleteItem', function(){
           $(this).parent().parent().prev().find('td:first span:first').addClass('deleteItem');
           $(this).parent().parent().remove();
           validate();
        });
        $(function(){
            $('.store').editable();
        });
        $(document).ready(function(){
            $temp_count = 1;
            while($('#item_id_'+$temp_count).length > 0){
                $('#item_id_'+$temp_count).trigger("change");
                $temp_count++;
            }
        });
        function change_items_price(element)
        {

            var element_id = element.id;
            var element_id_arr = element_id.split("_");
            var item_id = $('#'+element_id+" option:selected").val();//$('#'+element_id).find(":selected").attr('item_id');
            //var scriptUrl = '{{url('inOrderItems') }}/create/ajax_current_item_cost?item_id=' + item_id;
            $.ajax({
                url: '{{url('inOrderItems') }}/create/ajax_current_item_cost?item_id=' + item_id,
                type: 'get',
                dataType: 'html',
                async: false,
                success: function(subCatObj) {
                    subCatObj = JSON.parse(subCatObj);
                    if(subCatObj.length>0)
                    {
                        $('#quantity_' + element_id_arr[2]).removeAttr('disabled','disabled');
                        subCatObj = subCatObj[0];
                        if($('#quantity_' + element_id_arr[2]).val()==''){
                            $('#quantity_' + element_id_arr[2]).val(0)
                        }
                        $('#price_' + element_id_arr[2]).val(parseFloat(subCatObj.cost) * parseFloat($('#quantity_' + element_id_arr[2]).val()));
                        $('#item_price_' + element_id_arr[2]).val(parseFloat(subCatObj.cost));
                        $('#item_cost_id_' + element_id_arr[2]).val(subCatObj.id);
                        $('#in_order_items_submit').css('display','initial');
                    }else{
                        alert('Please add buy price for this item');
                        if($('#store_' + element_id_arr[2]).val() == null){
                            alert('Please add store');
                        }
                        $('#quantity_' + element_id_arr[2]).attr('disabled','disabled');
                        $('#in_order_items_submit').css('display','none');
                    }
                }
            });
            {{--$.get('{{ url('inOrderItems') }}/create/ajax_current_item_cost?item_id=' + item_id, function () {--}}
                {{--//$('#quantity').val($('#in_order_item_id').find(":selected").attr('max_attr'));--}}
                {{--$.each(data, function (index, subCatObj) {--}}
                    {{--$('#price_'+element_id_arr[2]).val(parseFloat(subCatObj.cost)*parseFloat($('#quantity_'+element_id_arr[2]).val()));--}}
                    {{--$('#item_price_'+element_id_arr[2]).val(parseFloat(subCatObj.cost));--}}
                    {{--$('#item_cost_id_'+element_id_arr[2]).val(subCatObj.id);--}}
                {{--});--}}
            {{--});--}}
            $('#all_quantity_'+element_id_arr[2]).val($('#'+element_id+" option:selected").data('max_attr'));
            $('#all_quantity1_'+element_id_arr[2]).val($('#'+element_id+" option:selected").data('quantity_attr'));
            //$('#quantity_'+element_id_arr[2]).val($('#'+element_id+" option:selected").data('max_attr'));
        }

        function change_items_price2(element)
        {
            var element_id = element.id;
            var element_id_arr = element_id.split("_");
            var temp;
            if($('#'+element_id).val() >0 ){
                temp = $('#'+element_id).val() ;
            }else{
                temp = 0 ;
            }
            console.log($('#item_price_'+element_id_arr[1]).val());
            $('#price_'+element_id_arr[1]).val(parseFloat( temp)*parseFloat($('#item_price_'+element_id_arr[1]).val()));
        }
    </script>
@endpush