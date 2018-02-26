
<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $account->name !!}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{!! $account->type !!}</p>
</div>

<!-- Number Field -->
<div class="form-group">
    {!! Form::label('number', 'Number:') !!}
    <p>{!! $account->number !!}</p>
</div>

<!-- Balance Field -->
<div class="form-group">
    {!! Form::label('balance', 'Balance:') !!}
    <p>{!! $account->balancehex !!}</p>
</div>

<!-- Currency  Field -->
<div class="form-group">
    {!! Form::label('currency', 'Currency:') !!}
    <p>{!! $account->currency !!}</p>
</div>

