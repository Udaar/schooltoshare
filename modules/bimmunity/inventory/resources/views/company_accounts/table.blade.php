<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
    <thead>
        <tr>
            <th class="ifm-main-bg ifm-white all">Company</th>
            <th class="ifm-main-bg ifm-white all">Account Number</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Account Type</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Bank</th>
            <th class="ifm-main-bg ifm-white none">Created By</th>   
            <th class="ifm-main-bg ifm-white none">Created At</th>   
            <th class="ifm-main-bg ifm-white min-tablet-l">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($companyAccounts as $companyAccount)
            <tr>
                <td class="text-capitalize">{!! $companyAccount->company->name !!}</td> 
                <td class="text-capitalize">{!! $companyAccount->account_number !!}</td>
                <td class="text-capitalize">{!! $companyAccount->accountType->name !!}</td>
                <td class="text-capitalize">{!! $companyAccount->bank->name !!}</td>       
                <td class="text-capitalize">{!! $companyAccount->user->name !!}</td>    
                <td class="text-capitalize">{!! $companyAccount->created_at !!}</td>    
                <td>
                    {!! Form::open(['route' => ['companyAccounts.destroy', $companyAccount->id], 'method' => 'delete']) !!}
                        <div class='btn-group ifm-static'>
                            <a href="{!! route('companyAccounts.edit', [$companyAccount->id]) !!}" class='btn ifm-btn-default ifm-white-bg ifm-border-light-grey-all ifm-grey ifm-margin-xs-right'><i class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-white-bg ifm-border-light-grey-all ifm-grey ifm-margin-xs-right', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                     {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>