@extends('layouts.app')

@section('head')
    <style>
        table.dataTable > tbody > tr.child span.dtr-title {
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('content')

<section class="payments-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">

    <!-- Payments Title Bar -->
    <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAALcSURBVEhLxVVLjwxRFK4WrwSJRyQSgiDEa0GshEiwGCQek7pVHZqauq+ebiaxQDwWHW+7iQTJ7BD2xEQm2BALGZMxLIRZEEawY/wC37l9qqdrdI+ejsSX3NT9zn1855577ilvPNhSKk3EJ1Nm/wCtUi4S0hwT0j4LlPkmlBmmhv4X2B4Iqc2eKJrJ0xuHr9TsQJqrgbRD2OxKaMzGXC43jYc92tRXtgVzutC++tIeF0JM5uGxEcj2Ndh0EB5eEsXidDbXhX8oPx8id+mUfhzPZXNt+G1mLULwOVD5nWxqGEFsj8Kxd/sLhVlsSmPvwcNz4MX7ZjZPAIFTcPBJqVSawKYRUMwxeJ6pAxZ0i6g4j6mXlXaDUPYOHOnF/fRxu8DDhAzGerBPxLyMMMovpgvdLeUMNjlA9JOwdiH1fa23Ys4H2LKh1stb48ISP84rir+bzMhqvZrmWWsnscnzKBUpW5hWUC0Ar16I2G5yAwxfml2jBQiwPSKHmLrFTykVmVZQLRAo+4Niu0/rBXDoOdnqCfjKHMGenUzpBPZ7dZ4nSAlI+5O+xHHaN9SvJ4AQbsZdPXSEnj/Uhh0ZhWYF8FCXYc9+pl4Gx//F/RSaFpDtKyDwkqlbPFTrgTQtgAvGPd1jisXI9zA2O5hWUC2QLMjK9nVUFqg/xiWfgf0cUyegYehiWkG1QALYLmP+RerXE3APsc2sZ0qKqJ4owZSCbHIgAXhTCJUVgdQHEKabaK+SIlhLIIjNdszpQzf934DACSoDTB2ct+WSTO0anbSlo2MKD7viSK+ZqUdj8P51KO02No2A6jnFlqoim8YNZM4tOHmd6Z+geg6Rt5h0ErThX2MURVOR6rextidVg2qB7gMCj2kyjr+KzXVBMYfnAwjhjb9unoBqDhZFaB9JDIuLVOhQr5aGSq0s57k9TY8Jrb9mzBsBlRFajE06ccHd+A5g416E4z4y5WwqFf8PPO83edRmmygP100AAAAASUVORK5CYII=">
            payments
        </h3>
        <a href="{!! route('payments.create') !!}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right add-btn" style="top:19px;right:36px"><i class="fa fa-plus"></i> Add</a>
    </div>
	<!-- /Payments Title Bar -->

	<!-- Payments Table -->
    <div class="row">
        @include('flash::message')

        <div class="ifm-padding-sm-all">
            @include('bimmunity/invoice::payments.table')
        </div>

    </div>
	<!-- /Payments Table -->

</section>

@endsection

