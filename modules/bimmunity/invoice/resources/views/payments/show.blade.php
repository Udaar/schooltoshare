@extends('layouts.app')

@section('head')
    
@endsection

@section('content')

<section class="payment-show-section ifm-form">
    <div class="portlet light ifm-border-light-grey-all">
        <div class="portlet-title ifm-border-light-grey-bottom">
            <div class="caption">
                <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAALcSURBVEhLxVVLjwxRFK4WrwSJRyQSgiDEa0GshEiwGCQek7pVHZqauq+ebiaxQDwWHW+7iQTJ7BD2xEQm2BALGZMxLIRZEEawY/wC37l9qqdrdI+ejsSX3NT9zn1855577ilvPNhSKk3EJ1Nm/wCtUi4S0hwT0j4LlPkmlBmmhv4X2B4Iqc2eKJrJ0xuHr9TsQJqrgbRD2OxKaMzGXC43jYc92tRXtgVzutC++tIeF0JM5uGxEcj2Ndh0EB5eEsXidDbXhX8oPx8id+mUfhzPZXNt+G1mLULwOVD5nWxqGEFsj8Kxd/sLhVlsSmPvwcNz4MX7ZjZPAIFTcPBJqVSawKYRUMwxeJ6pAxZ0i6g4j6mXlXaDUPYOHOnF/fRxu8DDhAzGerBPxLyMMMovpgvdLeUMNjlA9JOwdiH1fa23Ys4H2LKh1stb48ISP84rir+bzMhqvZrmWWsnscnzKBUpW5hWUC0Ar16I2G5yAwxfml2jBQiwPSKHmLrFTykVmVZQLRAo+4Niu0/rBXDoOdnqCfjKHMGenUzpBPZ7dZ4nSAlI+5O+xHHaN9SvJ4AQbsZdPXSEnj/Uhh0ZhWYF8FCXYc9+pl4Gx//F/RSaFpDtKyDwkqlbPFTrgTQtgAvGPd1jisXI9zA2O5hWUC2QLMjK9nVUFqg/xiWfgf0cUyegYehiWkG1QALYLmP+RerXE3APsc2sZ0qKqJ4owZSCbHIgAXhTCJUVgdQHEKabaK+SIlhLIIjNdszpQzf934DACSoDTB2ct+WSTO0anbSlo2MKD7viSK+ZqUdj8P51KO02No2A6jnFlqoim8YNZM4tOHmd6Z+geg6Rt5h0ErThX2MURVOR6rextidVg2qB7gMCj2kyjr+KzXVBMYfnAwjhjb9unoBqDhZFaB9JDIuLVOhQr5aGSq0s57k9TY8Jrb9mzBsBlRFajE06ccHd+A5g416E4z4y5WwqFf8PPO83edRmmygP100AAAAASUVORK5CYII=">
                    show payment
                </h3>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="portlet-body">
            <div class="row">
                @include('bimmunity/invoice::payments.show_fields')
            </div>
        </div>
    </div>
</section>

@endsection
