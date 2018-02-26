<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Method: </label>
        <span class="ifm-grey">{!! $payment->method->name !!}</span>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Status: </label>
        @if($payment->status->name == 'accepted')
            <span class="font-green-jungle bold"> accepted </span>
        @elseif($payment->status->name == 'rejected')
            <span class="font-red-thunderbird bold"> rejected </span>
        @elseif($payment->status->name == 'pending')
            <span class="font-yellow-crusta bold"> pending </span>
        @endif
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Initiated by: </label>
        <span class="ifm-grey">{!! $payment->user->name !!}</span>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Amount: </label>
        <span class="ifm-grey">{!! $payment->amount !!} {!! $payment->currency->code !!}</span>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Payment time: </label>
        <span class="ifm-grey">{!! $payment->payment_time !!}</span>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Details: </label>
        @if(isset($payment->paymentDetail))
            <span class="ifm-grey">{!! $payment->details_id !!}</span>
        @else
            <span class="ifm-grey">No details</span>
        @endif
    </div>
</div>

<div class="col-md-12">
    <div class="btn-group pull-right">
        @if(isset($flag))
            <a href="/editFromTicket/{{$payment->id}}/{{$ticket_id}}" class="btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-xs-right">Edit</a>
        @endif
        <a href="{{ URL::previous() }}" class="btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-sm-top">Back</a>
    </div>
</div>

