<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
    <thead>
        <th class="ifm-main-bg ifm-white all">Title</th>
        <th class="ifm-main-bg ifm-white all">Amount</th>
        <th class="ifm-main-bg ifm-white all">Issue Date</th>
        <th class="ifm-main-bg ifm-white all">Due Date</th>
        <th class="ifm-main-bg ifm-white all">Total</th>
        <th class="ifm-main-bg ifm-white all">Discount</th>
        <th class="ifm-main-bg ifm-white all">Status</th>
        <th class="ifm-main-bg ifm-white min-tablet-l">Action</th>
    </thead>
    <tbody>
        @foreach($invoices as $key => $invoice)
            <tr>
                <td>{!! str_limit($invoice->title, 20) !!}</td>
                <td>{!! $invoice->amount !!} {!! $invoice->currency->code !!}</td>
                <td>{!! Carbon\Carbon::parse($invoice->issue_date)->format('d/m/y') !!}</td>
                <td>{!! Carbon\Carbon::parse($invoice->due_date)->format('d/m/y') !!}</td>
                <td>{!! $invoice->total !!}</td>
                <td>{!! $invoice->discount !!}</td>
                <td>{!! $invoice->status->name !!}</td>
                <td>
                    {!! Form::open(['route' => ['invoices.destroy', $invoice->id], 'method' => 'delete']) !!}
                    <div class='btn-group ifm-static'>
                        @if( ! $invoice->IsPaied())
                        <a href="{!! route('invoices.edit', [$invoice->id]) !!}" class='btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-xs-right'><i class="fa fa-edit"></i></a>
                        @endif
                        <a href="{!! route('invoices.show', [$invoice->id]) !!}" class='btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-xs-right'><i class="fa fa-eye"></i></a>
                    @if( ! $invoice->IsPaied())
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        @endif
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
