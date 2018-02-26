<!-- User Id Field -->
{!! Form::hidden('user_id', Auth::user()->id) !!}
<!-- User Id Field -->

<!-- Ticket Id Field -->
@if(isset($ticket_id))
    <input type="hidden" name="ticket_id" value="{{$ticket_id}}">
@endif
<!-- /Ticket Id Field -->

<!-- Action Id Field -->
@if(isset($action_id))
    <input type="hidden" name="action_id" value="{{$action_id}}">
@endif
<!-- /Action Id Field -->

<!-- Method Id Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('method_id', 'Payment Method:', ['class' => 'ifm-grey']) !!}
        {!! Form::select('method_id', $methods, null, ['class' => 'form-control select2 ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Method Id Field -->

<!-- Account time Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('account_id', 'Account:', ['class' => 'ifm-grey']) !!}
        {!! Form::select('account_id', $accounts, null, ['class' => 'form-control select2 ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Account time Field -->

<!-- Invoice Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('invoices[]', 'Attached Invoices', ['class' => 'ifm-grey']) !!}
        {!! Form::select('invoices[]', $invoices, isset($attachedInvoices)?$attachedInvoices:null, ['class' => 'form-control select2 ifm-border-light-grey-all','id'=>'invoice', 'multiple' => 'multiple']) !!}
    </div>
</div>
<!-- /Invoice Field -->

<!-- Payment time Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('payment_time', 'Payment Time:', ['class' => 'ifm-grey']) !!}
        <div class="input-group ifm-width-100 input-medium date date-picker" data-date-format="{{config('ifm.settings.date-format-bootstrap')}}" >
            {!! Form::text('payment_time', null, ['class' => 'form-control ifm-border-light-grey-all','required'=>'required']) !!}
            <span class="input-group-btn">
                <button class="btn default ifm-main-bg ifm-white ifm-border-main-all" style="padding:9px 12px" type="button">
                    <i class="fa fa-calendar"></i>
                </button>
            </span>
        </div>
    </div>
</div>
<!-- /Payment time Field -->

<!-- Status Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('status_id', 'Status:', ['class' => 'ifm-grey']) !!}
        {!! Form::select('status_id', $statuses, null, ['class' => 'form-control select2 ifm-border-light-grey-all']) !!}
    </div>
</div>
<!-- /Status Field -->

<!-- Currency time Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('currency_id', 'Currency:', ['class' => 'ifm-grey']) !!}
        {!! Form::select('currency_id', $currencies, null, ['class' => 'form-control select2 ifm-border-light-grey-all','id'=>'currency']) !!}
    </div>
</div>
<!-- /Currency time Field -->

<!-- Amount Field -->
<div class="col-xs-12">
    <div class="form-group">
        {!! Form::label('amount', 'Amount:', ['class' => 'ifm-grey']) !!}
        {!! Form::number('amount', 0, ['class' => 'form-control ifm-border-light-grey-all','id'=>'amount','readonly']) !!}
    </div>
</div>
<!-- /Amount Field -->

<!-- Spinner -->
<div class="col-xs-12">
    <div class="sk-fading-circle">
        <div class="sk-circle1 sk-circle"></div>
        <div class="sk-circle2 sk-circle"></div>
        <div class="sk-circle3 sk-circle"></div>
        <div class="sk-circle4 sk-circle"></div>
        <div class="sk-circle5 sk-circle"></div>
        <div class="sk-circle6 sk-circle"></div>
        <div class="sk-circle7 sk-circle"></div>
        <div class="sk-circle8 sk-circle"></div>
        <div class="sk-circle9 sk-circle"></div>
        <div class="sk-circle10 sk-circle"></div>
        <div class="sk-circle11 sk-circle"></div>
        <div class="sk-circle12 sk-circle"></div>
    </div>
</div>
<!-- /Spinner -->

<!-- Submit Field -->
<div class="col-xs-12">
    <div class="form-group ifm-form-actions">
        {!! Form::submit('Save', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
        <a href="{!! route('payments.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
    </div>
</div>
<!-- /Submit Field -->

{{-- <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-xs-12">
            <div class="container-fluid">
                <!-- Method Id Field -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('method_id', 'Payment Method:', ['class' => 'ifm-grey']) !!}
                            {!! Form::select('method_id', $methods, null, ['class' => 'form-control select2 ifm-border-light-grey-all']) !!}
                        </div>
                    </div>
                </div>
                <!-- Account time Field -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('account_id', 'Account:', ['class' => 'ifm-grey']) !!}
                            {!! Form::select('account_id', $accounts, null, ['class' => 'form-control select2 ifm-border-light-grey-all']) !!}
                        </div>
                    </div>
                </div>
                <!-- Amount Field -->
                <div class="row amount">
                    <div class="col-xs-12">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('amount', 'Amount:', ['class' => 'ifm-grey']) !!}
                            {!! Form::number('amount', 0, ['class' => 'form-control ifm-border-light-grey-all','id'=>'amount','readonly']) !!}
                        </div>
                    </div>
                </div>
                <!-- Spinner -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="sk-fading-circle">
                            <div class="sk-circle1 sk-circle"></div>
                            <div class="sk-circle2 sk-circle"></div>
                            <div class="sk-circle3 sk-circle"></div>
                            <div class="sk-circle4 sk-circle"></div>
                            <div class="sk-circle5 sk-circle"></div>
                            <div class="sk-circle6 sk-circle"></div>
                            <div class="sk-circle7 sk-circle"></div>
                            <div class="sk-circle8 sk-circle"></div>
                            <div class="sk-circle9 sk-circle"></div>
                            <div class="sk-circle10 sk-circle"></div>
                            <div class="sk-circle11 sk-circle"></div>
                            <div class="sk-circle12 sk-circle"></div>
                        </div>
                    </div>
                </div>
                <!-- Payment time Field -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('payment_time', 'Payment Time:', ['class' => 'ifm-grey']) !!}
                            {!! Form::date('payment_time', null, ['class' => 'form-control ifm-border-light-grey-all']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12">
            <div class="container-fluid">
                <!-- Status Field -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('status_id', 'Status:', ['class' => 'ifm-grey']) !!}
                            {!! Form::select('status_id', $statuses, null, ['class' => 'form-control select2 ifm-border-light-grey-all']) !!}
                        </div>
                    </div>
                </div>
                <!-- Currency time Field -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('currency_id', 'Currency:', ['class' => 'ifm-grey']) !!}
                            {!! Form::select('currency_id', $currencies, null, ['class' => 'form-control select2 ifm-border-light-grey-all','id'=>'currency']) !!}
                        </div>
                    </div>
                </div>
                <!-- Invoice Field -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('invoices[]', 'Attached Invoices', ['class' => 'ifm-grey']) !!}
                            {!! Form::select('invoices[]', $invoices, isset($attachedInvoices)?$attachedInvoices:null, ['class' => 'form-control select2 ifm-border-light-grey-all','id'=>'invoice', 'multiple' => 'multiple']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Submit Field -->
    <div class="row">
        <div class="col-xs-12 ifm-padding-lg-left">
            <div class="form-group col-sm-12">
                <div class="form-actions">
                    <div class="row  col-md-offset-0">
                        {!! Form::submit('Save', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
                        <a href="{!! route('payments.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>--}}
