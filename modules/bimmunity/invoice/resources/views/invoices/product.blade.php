<div class="row ifm-no-margin-all">
    <div class="col-xs-12">
        <label class="ifm-grey" for="reservationDate">Preferred Reservation Date</label>
        <i id="add" class="fa fa-plus-square pull-right" style="cursor:pointer"></i>
    </div>
    <div id="picker-wrap"></div>
</div>
<script type="text/html" id="template">
   
    <div class="row ifm-no-margin-all product-container">
        <div class="product-quantity">
            <div class="col-xs-5">
            <div class="form-group">
                <select name='product_id[]' class = 'product form-control select2 ifm-border-light-grey-all'>
                @foreach($products as $product)
                    <option value="{{$product->id}}" price="{{$product->unit_cost}}" currency="{{$product->currency->code}}" >{{$product->name}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-5">
            <div class="form-group">
                {!! Form::number('quantity[]',  null, ['class' => 'quantity form-control ifm-border-light-grey-all', 'required' => 'required', 'placeholder' => 'Quentaty']) !!}
            </div>
        </div>   
        <div class="col-xs-1">
            <i id="remove" class="fa fa-close font-red-thunderbird pull-right" style="cursor:pointer;margin-right:15px"></i>
        </div> 
    </div>

    </div>
</script>

@section('scripts')
<script src="/metronic/js/jquery.loadTemplate.min.js"></script>
<script type="text/javascript">
var i=0;
    $(function() {
        $('#add').on('click', function(){
            $("#picker-wrap").loadTemplate($("#template"),{} ,{ append: true });
                i++;

        });

        $(document).on('click','#remove', function(){
           $(this).parent().parent().remove();
           console.log('remove');
                i++;

        });
    });
</script>
@endsection