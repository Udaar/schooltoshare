<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
    <thead>
        <th class="ifm-main-bg ifm-white all">Type</th>
        <th class="ifm-main-bg ifm-white all">Amount</th>
        <th class="ifm-main-bg ifm-white all">Time</th>
        <th class="ifm-main-bg ifm-white none">Currency</th>
        <th class="ifm-main-bg ifm-white min-tablet-l">Action</th>
    </thead>
    <tbody>
    @foreach($expenses as $key => $expenses)
        <tr>
            <td>{!! $expenses->type->name !!}</td>
            <td>{!! $expenses->amount !!}</td>
            <td>{!! Carbon\Carbon::parse($expenses->time)->format('d/m/Y') !!}</td>
            <td>{!! $expenses->currency->code !!}</td>
            <td>
                {!! Form::open(['route' => ['expenses.destroy', $expenses->id], 'method' => 'delete']) !!}
                <div class='btn-group ifm-static'>
                    <a href="{!! route('expenses.edit', [$expenses->id]) !!}" class='btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-xs-right'><i class="fa fa-edit"></i></a>
                    <a href="{!! route('expenses.show', [$expenses->id]) !!}" class='btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-xs-right'><i class="fa fa-eye"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
