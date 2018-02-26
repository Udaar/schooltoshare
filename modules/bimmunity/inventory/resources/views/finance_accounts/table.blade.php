<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
    <thead>
        <tr>
            <th class="ifm-main-bg ifm-white all">Account Number</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Start Balance</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Account Type</th>
            <th class="ifm-main-bg ifm-white all">Bank</th>
            <th class="ifm-main-bg ifm-white none">Created By</th>
            <th class="ifm-main-bg ifm-white none">Created At</th>      
            <th class="ifm-main-bg ifm-white min-tablet-l">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($financeAccounts as $financeAccount)
            <tr>
                <td class="text-capitalize">{!! $financeAccount->account_number !!}</td>
                <td class="text-capitalize">{!! $financeAccount->start_balance !!}</td>
                <td class="text-capitalize">{!! $financeAccount->accountType->name !!}</td>
                <td class="text-capitalize">{!! $financeAccount->bank->name !!}</td>
                <td class="text-capitalize">{!! $financeAccount->user->name !!}</td>
                <td class="text-capitalize">{!! $financeAccount->created_at !!}</td>
                <td>
                    {!! Form::open(['route' => ['financeAccounts.destroy', $financeAccount->id], 'method' => 'delete']) !!}
                        <div class='btn-group ifm-static'>
                            <a href="{!! route('financeAccounts.edit', [$financeAccount->id]) !!}" class='btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-xs-right'><i class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                     {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>