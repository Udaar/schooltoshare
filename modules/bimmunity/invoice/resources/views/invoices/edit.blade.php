@extends('layouts.app')

@section('content')

<section class="invoice-create-section ifm-form">
    <div class="portlet light ifm-border-light-grey-all">
        <div class="portlet-title ifm-border-light-grey-bottom">
            <div class="caption">
                <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAFOSURBVEhLYwCB0LQ0udCk1L9A/I5SHJac9j4sKfUh2GAYAFmAIUgmAJrFP2oBXkC0BcDImhWanLabOJyaB9VGvAUhielaoSkpxkRhoH6oNuItIBcMHgvAYYslI8EwKEMh2KmtUG3EWwDUdAkmDtIEFYYDoPyW0MQ0m5Dk1CigmmlQYdIsAIotBeLPQNfOB9Iz0fBDoPjGsKS0vUA2eRYAg6kCaMDbkKTU/NCUtDRkDHZAcmoXEM8h3wKaB1Fy6mGgL74DI3I/IlNBcVLqa2AGOw3El8m2AOq6l+Ep6f5hiakuyBho8ImwxLSC0KS0NkosyIS6ND48OS0UGQPFzgJxLVDfRLIsABpcAhRDTzlYMdDCIKg24i0gF1BkQWBKigwo52LBPVAlg9wHxACcFgDT9tOgxEwlSnFYYro+pgXxWRLAIuEM1TAwl0NMZmAAACl30z9AKJnlAAAAAElFTkSuQmCC">
                    edit invoice
                </h3>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="portlet-body">
            <div class="row">
            {!! Form::model($invoice, ['route' => ['invoices.update', $invoice->id], 'method' => 'patch']) !!}
                @include('bimmunity/invoice::invoices.fields')
			{!! Form::close() !!}
            </div>
        </div>
    </div>
</section>

@endsection
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

<script>
    $(document).ready (function () {
    
    $('#discount, #amount').change(function(){
        console.log('dd');
        $('#total').val($('#amount').val()-($('#amount').val()*($('#discount').val()/100)));
        
        });
    });
</script>
