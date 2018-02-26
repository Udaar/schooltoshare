<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Initiated by: </label>
        <span class="ifm-grey">{!! $invoice->user->name !!}</span>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Amount: </label>
        <span class="ifm-grey">{!! $invoice->amount !!} {!! $invoice->currency->code !!}</span>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Code: </label>
        <span class="ifm-grey">{!! $invoice->code !!}</span>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Customer name: </label>
        <span class="ifm-grey">{!! $invoice->customer->name or '\'Customer Not set yet !\''!!}</span>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Issue due: </label>
        <span class="ifm-grey">{!! $invoice->issue_date !!}</span>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Due due: </label>
        <span class="ifm-grey">{!! $invoice->due_date !!}</span>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Discount: </label>
        <span class="ifm-grey">{!! $invoice->discount !!}</span>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Late fee: </label>
        @if($invoice->late_fee == 0)
            <span class="font-red-thunderbird bold">No fees</span>
        @else
            <span class="ifm-grey">
                {!! $invoice->late_fee !!}
            </span>
        @endif
    </div>
</div>

@if(isset($invoice->document))
    <div class="col-md-6">
        <div class="form-group">
            <label class="ifm-grey bold ifm-inline-block">Document path: </label>
            <span class="ifm-grey"><a href="{{($invoice->document->path)}}">{!! $invoice->document->name !!}</a></span>
        </div>
    </div>
@else
    <div class="col-md-6">
        <div class="form-group">
            <span class="font-red-thunderbird bold">No document</span>
        </div>
    </div>
@endif

<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Description: </label>
        <span class="ifm-grey">{!! $invoice->description !!}</span>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Terms: </label>
        <span class="ifm-grey">{!! $invoice->terms !!}</span>
    </div>
</div>

<div class="col-md-12">
    <a href="{{ URL::previous() }}" class="pull-right btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-sm-top">Back</a>
</div>
