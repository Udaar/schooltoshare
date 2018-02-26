@extends('layouts.app')
<style>
    .sk-fading-circle {
        margin: 15px auto;
        width: 40px;
        height: 40px;
        position: relative;
        display: none;
    }
    .sk-fading-circle .sk-circle {
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
    }
    .sk-fading-circle .sk-circle:before {
        content: '';
        display: block;
        margin: 0 auto;
        width: 15%;
        height: 15%;
        background-color: #333;
        border-radius: 100%;
        -webkit-animation: sk-circleFadeDelay 1.2s infinite ease-in-out both;
        animation: sk-circleFadeDelay 1.2s infinite ease-in-out both;
    }
    .sk-fading-circle .sk-circle2 {
        -webkit-transform: rotate(30deg);
        -ms-transform: rotate(30deg);
        transform: rotate(30deg);
    }
    .sk-fading-circle .sk-circle3 {
        -webkit-transform: rotate(60deg);
        -ms-transform: rotate(60deg);
        transform: rotate(60deg);
    }
    .sk-fading-circle .sk-circle4 {
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
    }
    .sk-fading-circle .sk-circle5 {
        -webkit-transform: rotate(120deg);
        -ms-transform: rotate(120deg);
        transform: rotate(120deg);
    }
    .sk-fading-circle .sk-circle6 {
        -webkit-transform: rotate(150deg);
        -ms-transform: rotate(150deg);
        transform: rotate(150deg);
    }
    .sk-fading-circle .sk-circle7 {
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg);
    }
    .sk-fading-circle .sk-circle8 {
        -webkit-transform: rotate(210deg);
        -ms-transform: rotate(210deg);
        transform: rotate(210deg);
    }
    .sk-fading-circle .sk-circle9 {
        -webkit-transform: rotate(240deg);
        -ms-transform: rotate(240deg);
        transform: rotate(240deg);
    }
    .sk-fading-circle .sk-circle10 {
        -webkit-transform: rotate(270deg);
        -ms-transform: rotate(270deg);
        transform: rotate(270deg);
    }
    .sk-fading-circle .sk-circle11 {
        -webkit-transform: rotate(300deg);
        -ms-transform: rotate(300deg);
        transform: rotate(300deg);
    }
    .sk-fading-circle .sk-circle12 {
        -webkit-transform: rotate(330deg);
        -ms-transform: rotate(330deg);
        transform: rotate(330deg);
    }
    .sk-fading-circle .sk-circle2:before {
        -webkit-animation-delay: -1.1s;
        animation-delay: -1.1s;
    }
    .sk-fading-circle .sk-circle3:before {
        -webkit-animation-delay: -1s;
        animation-delay: -1s;
    }
    .sk-fading-circle .sk-circle4:before {
        -webkit-animation-delay: -0.9s;
        animation-delay: -0.9s;
    }
    .sk-fading-circle .sk-circle5:before {
        -webkit-animation-delay: -0.8s;
        animation-delay: -0.8s;
    }
    .sk-fading-circle .sk-circle6:before {
        -webkit-animation-delay: -0.7s;
        animation-delay: -0.7s;
    }
    .sk-fading-circle .sk-circle7:before {
        -webkit-animation-delay: -0.6s;
        animation-delay: -0.6s;
    }
    .sk-fading-circle .sk-circle8:before {
        -webkit-animation-delay: -0.5s;
        animation-delay: -0.5s;
    }
    .sk-fading-circle .sk-circle9:before {
        -webkit-animation-delay: -0.4s;
        animation-delay: -0.4s;
    }
    .sk-fading-circle .sk-circle10:before {
        -webkit-animation-delay: -0.3s;
        animation-delay: -0.3s;
    }
    .sk-fading-circle .sk-circle11:before {
        -webkit-animation-delay: -0.2s;
        animation-delay: -0.2s;
    }
    .sk-fading-circle .sk-circle12:before {
        -webkit-animation-delay: -0.1s;
        animation-delay: -0.1s;
    }
    @-webkit-keyframes sk-circleFadeDelay {
        0%,
        39%,
        100% {
            opacity: 0;
        }
        40% {
            opacity: 1;
        }
    }
    @keyframes sk-circleFadeDelay {
        0%,
        39%,
        100% {
            opacity: 0;
        }
        40% {
            opacity: 1;
        }
    }
</style>
@section('content')

<section class="payment-edit-section ifm-form">
    <div class="portlet light ifm-border-light-grey-all">
        <div class="portlet-title ifm-border-light-grey-bottom">
            <div class="caption">
                <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAALcSURBVEhLxVVLjwxRFK4WrwSJRyQSgiDEa0GshEiwGCQek7pVHZqauq+ebiaxQDwWHW+7iQTJ7BD2xEQm2BALGZMxLIRZEEawY/wC37l9qqdrdI+ejsSX3NT9zn1855577ilvPNhSKk3EJ1Nm/wCtUi4S0hwT0j4LlPkmlBmmhv4X2B4Iqc2eKJrJ0xuHr9TsQJqrgbRD2OxKaMzGXC43jYc92tRXtgVzutC++tIeF0JM5uGxEcj2Ndh0EB5eEsXidDbXhX8oPx8id+mUfhzPZXNt+G1mLULwOVD5nWxqGEFsj8Kxd/sLhVlsSmPvwcNz4MX7ZjZPAIFTcPBJqVSawKYRUMwxeJ6pAxZ0i6g4j6mXlXaDUPYOHOnF/fRxu8DDhAzGerBPxLyMMMovpgvdLeUMNjlA9JOwdiH1fa23Ys4H2LKh1stb48ISP84rir+bzMhqvZrmWWsnscnzKBUpW5hWUC0Ar16I2G5yAwxfml2jBQiwPSKHmLrFTykVmVZQLRAo+4Niu0/rBXDoOdnqCfjKHMGenUzpBPZ7dZ4nSAlI+5O+xHHaN9SvJ4AQbsZdPXSEnj/Uhh0ZhWYF8FCXYc9+pl4Gx//F/RSaFpDtKyDwkqlbPFTrgTQtgAvGPd1jisXI9zA2O5hWUC2QLMjK9nVUFqg/xiWfgf0cUyegYehiWkG1QALYLmP+RerXE3APsc2sZ0qKqJ4owZSCbHIgAXhTCJUVgdQHEKabaK+SIlhLIIjNdszpQzf934DACSoDTB2ct+WSTO0anbSlo2MKD7viSK+ZqUdj8P51KO02No2A6jnFlqoim8YNZM4tOHmd6Z+geg6Rt5h0ErThX2MURVOR6rextidVg2qB7gMCj2kyjr+KzXVBMYfnAwjhjb9unoBqDhZFaB9JDIuLVOhQr5aGSq0s57k9TY8Jrb9mzBsBlRFajE06ccHd+A5g416E4z4y5WwqFf8PPO83edRmmygP100AAAAASUVORK5CYII=">
                    edit payment
                </h3>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="portlet-body">
            <div class="row">
			{!! Form::model($payment, ['route' => ['payments.update', $payment->id], 'method' => 'patch']) !!}
                @include('bimmunity/invoice::payments.fields')
			{!! Form::close() !!}
            </div>
        </div>
    </div>
</section>

@endsection
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

<script>
       $(document).ready (function () {
        $('#invoice,#currency').change(function(){
            $('#amount').val('');
            
            if($('#invoice').val() != null){
                $('.sk-fading-circle').css({
                'display': 'block'
            });
            $('.amount').css({
                'display': 'none'
            });
            }
            
            $.get( "/payments/currencyname/"+$('#currency').val(), function( currnecy ) {
                    $.get( "/payments/invoiceamount/"+$('#invoice').val()+'/'+currnecy, function( data ) {
                            console.log(data);
                            $('#amount').val(data);
                            $('.sk-fading-circle').css({
                                'display': 'none'
                            });
                            $('.amount').css({
                                'display': 'block'
                            });
                    });
            });
        });
       });
</script>