@extends('layouts.app')

@section('content')
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-equalizer font-red-sunglo"></i>
            <span class="caption-subject font-red-sunglo bold uppercase">Sales Order Item</span>
        </div>
    </div>
    <div>
        @include('metronic-templates::common.errors')
    </div>
    <div class="portlet-body form">
        <div class="row">
           {!! Form::model($outOrderItem, ['route' => ['outOrderItems.update', $outOrderItem->id], 'method' => 'patch']) !!}

            @include('inventory::out_order_items.fields')

           {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded',function ()
    {
        $('#in_order_id').on('change', function(e){
            //console.log(e);
            var in_order_id = e.target.value;

            $.get('{{ url('outOrderItems') }}/create/ajax_in_order_items?in_order_id=' + in_order_id, function(data) {
                console.log(data);
                $('#in_order_item_id').empty();
                $('#in_order_item_id').append('<option></option>');
                $.each(data, function(index,subCatObj){
                    console.log(subCatObj.name);
                    $('#in_order_item_id').append('<option max_attr="'+subCatObj.remains_quantity+'" quantity_attr="'+subCatObj.quantity+'"  item_id="'+subCatObj.item_id+'"  value="'+subCatObj.inventory_id+'">'+subCatObj.name+'</option>');
                });
            });
        });

        $('#in_order_item_id').on('change', function(e){
            var item_id = $('#in_order_item_id').find(":selected").attr('item_id');
            console.log(item_id);

            $.get('{{ url('outOrderItems') }}/create/ajax_current_item_cost?item_id=' + item_id, function(data) {
                //$('#quantity').val($('#in_order_item_id').find(":selected").attr('max_attr'));
                $.each(data, function(index,subCatObj){
                    $('#cost').val(subCatObj.cost);
                    $('#item_cost_id').val(subCatObj.id);
                });
            });

            $('#all_quantity').val($('#in_order_item_id').find(":selected").attr('max_attr'));
            $('#all_quantity1').val($('#in_order_item_id').find(":selected").attr('quantity_attr'));
            $('#quantity').val(parseFloat($('#in_order_item_id').find(":selected").attr('max_attr'))+parseFloat($('#quantity').val()));
        });

        $('#quantity').on('keyup', function(e){
            if(parseFloat($('#quantity').val()) > parseFloat($('#in_order_item_id').find(":selected").attr('max_attr'))){
                $('#quantity').val($('#in_order_item_id').find(":selected").attr('max_attr'));
            };
        });
    })
</script>