@extends('layouts.app')

@section('content')

<section class="customer-edit-section ifm-form">
    <div class="portlet light ifm-border-light-grey-all">
        <div class="portlet-title ifm-border-light-grey-bottom">
            <div class="caption">
                <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGhSURBVEhL1ZU9L0NRGMfbSMTgNUIsGhZCiMQ3MJgYJFRYNL1tb1+uLhIRYw1NB2IwdLGKyRcweRsMYre0EdqYxEfwO/VXkYv0tiT6S56cPv/nnP9zz7kv9f0LgsFgazQaXbZtOxuLxXbi8fgssv+t2iCYTWFaJE6IdZpsMF4xXqRSqQFNq49EItGPWZmrn5f0jh99m7hmdy3SvKMjySl1Qe2UHS4p9Y65QnYxodQF5mvMySv1DouL7CKg1AX1OeJIqXdYfN/cDTC/4R6MKnWB+QpxqNQ7LM7TxFHqwphTt5V6JxKJjLH+gfdgWFIVzGeoFSzL6pBUH/pElJRW4PEcokGZmJbUGDR40c8KGE8Sl0ob588aOI7Ti1GOuJVUIZlM9phjI5xQKNQmuXZYGMDUPEFPjHuMXSpVMTce/Zh6mTFDo26VfobJm1q0lU6nOyV/C7sZZP4+80uMi5K/hklZ4iwcDvdJqhmerHHW3jGuSvqM+WoyocCfSLskz3BsI+ziER/XkZqrzxAH5gY2EjQ4x2dBth9Q2CWefyks2TY9Pt8r6fvrjJQJ/usAAAAASUVORK5CYII=">
                    edit customer
                </h3>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="portlet-body">
            <div class="row">
			{!! Form::model($customer, ['route' => ['customers.update', $customer->id], 'method' => 'patch']) !!}
                @include('bimmunity/invoice::customers.fields')
			{!! Form::close() !!}
            </div>
        </div>
    </div>
</section>

@endsection
