<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Paid to: </label>
        <span class="ifm-grey">{!! $expenses->user->name !!}</span>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">expense type: </label>
        <span class="ifm-grey">{!! $expenses->type->name !!}</span>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Amount: </label>
        <span class="ifm-grey">{!! $expenses->amount !!} {!! $expenses->currency->code !!}</span>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Date: </label>
        <span class="ifm-grey">{!! Carbon\Carbon::parse($expenses->time)->format('d/m/Y') !!}</span>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Description: </label>
        <span class="ifm-grey">{!! $expenses->description !!}</span>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label class="ifm-grey bold ifm-inline-block">Notes: </label>
        <span class="ifm-grey">{!! $expenses->notes !!}</span>
    </div>
</div>

<div class="col-md-12">
    <a href="{{ URL::previous() }}" class="pull-right btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-sm-top">Back</a>
</div>
