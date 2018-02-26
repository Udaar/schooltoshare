<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
<thead>
    <th class="ifm-main-bg ifm-white all">Amount</th>
    <th class="ifm-main-bg ifm-white all">Status</th>
    <th class="ifm-main-bg ifm-white all">Method</th>
    <th class="ifm-main-bg ifm-white none">Currency</th>
    <th class="ifm-main-bg ifm-white none">Time</th>
    <th class="ifm-main-bg ifm-white min-tablet-l">Action</th>
</thead>
<tbody>
    @foreach($payments as $key => $payment)
        <tr>
            <td>{!! $payment->amount !!}</td>
            <td>
                @if($payment->status->name == 'accepted')
                    <span class="font-green-jungle bold"> accepted </span>
                @elseif($payment->status->name == 'rejected')
                    <span class="font-red-thunderbird bold"> rejected </span>
                @elseif($payment->status->name == 'pending')
                    <span class="font-yellow-crusta bold"> pending </span>
                @endif
            </td>
            <td>{!! $payment->method->name !!}</td>
            <td>{!! $payment->currency->name !!}</td>
            <td>{!! $payment->payment_time !!}</td>
            <td>
                {!! Form::open(['route' => ['payments.destroy', $payment->id], 'method' => 'delete']) !!}
                <div class='btn-group ifm-static'>
                    <a href="{!! route('payments.edit', [$payment->id]) !!}" class='btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-xs-right'><i class="fa fa-edit"></i></a>
                    <a href="{!! route('payments.show', [$payment->id]) !!}" class='btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-xs-right'><i class="fa fa-eye"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
</tbody>
</table>
