<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
    <thead>
        <tr>
            <th class="ifm-main-bg ifm-white all">Name</th>
            <th class="ifm-main-bg ifm-white all">Company Type</th>
            <th class="ifm-main-bg ifm-white none">Phone</th>
            <th class="ifm-main-bg ifm-white all">Email</th>
            <th class="ifm-main-bg ifm-white none">Address</th>
            <th class="ifm-main-bg ifm-white none">Fax</th>
            <th class="ifm-main-bg ifm-white none">Depit</th>
            <th class="ifm-main-bg ifm-white none">Credit</th>         
            <th class="ifm-main-bg ifm-white none">Total Value</th>         
            <th class="ifm-main-bg ifm-white none">Created By</th>         
            <th class="ifm-main-bg ifm-white none">Created At</th>         
            <th class="ifm-main-bg ifm-white min-tablet-l">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($companies as $company)
            <tr>
                <td class="text-capitalize">{!! $company->name !!}</td>
                <td class="text-capitalize">{!! $company->company_type !!}</td>
                <td class="text-capitalize">
                    ({!! $company->phone !!}) - ({!! $company->mobile1 !!}) - ({!! $company->mobile2 !!}) - ({!! $company->mobile3 !!})
                </td>
                <td class="text-capitalize">{!! $company->email !!}</td>
                <td class="text-capitalize">{!! $company->address !!}</td>
                <td class="text-capitalize">{!! $company->fax !!}</td>
                <td class="text-capitalize">{!! $company->debit !!}</td>               
                <td class="text-capitalize">{!! $company->credit !!}</td>               
                <td class="text-capitalize">{!! $company->total_value !!}</td>               
                <td class="text-capitalize">{!! $company->created_by !!}</td>           
                <td class="text-capitalize">{!! $company->created_at !!}</td>           
                <td>
                    {!! Form::open(['route' => ['companies.destroy', $company->id], 'method' => 'delete']) !!}
                        <div class='btn-group ifm-static'>
                            <a href="{!! route('companies.edit', [$company->id]) !!}" class='btn ifm-btn-default ifm-white-bg ifm-border-light-grey-all ifm-grey ifm-margin-xs-right'><i class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-white-bg ifm-border-light-grey-all ifm-grey', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                     {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>