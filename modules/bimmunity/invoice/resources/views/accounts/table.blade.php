<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
    <thead>
        <th class="ifm-main-bg ifm-white all">Name</th>
        <th class="ifm-main-bg ifm-white all">Type</th>
        <th class="ifm-main-bg ifm-white all">Number</th>
        <th class="ifm-main-bg ifm-white all">Balance</th>
        <th class="ifm-main-bg ifm-white all">Currency</th>
        <th class="ifm-main-bg ifm-white min-tablet-l">Action</th>
    </thead>
    <tbody>
    @foreach($accounts as $key => $account)
        <tr>
            <td>{!! $account->name !!}</td>
            <td>{!! $account->type !!}</td>
            <td>{!! $account->number !!}</td>
            <td>{!! $account->finalbalance !!}</td>
            <td>{!! $account->currencycode->code !!}</td>
            <td>
                {!! Form::open(['route' => ['accounts.destroy', $account->id], 'method' => 'delete']) !!}
                <div class='btn-group ifm-static'>
                    <a href="{!! route('accounts.edit', [$account->id]) !!}" class='btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-xs-right'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
