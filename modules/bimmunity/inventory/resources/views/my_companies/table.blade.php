<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
    <thead>
        <tr>
            <th class="ifm-main-bg ifm-white all">Name</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Debit</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Credit</th>
            <th class="ifm-main-bg ifm-white all">Total Balance</th>
            <th class="ifm-main-bg ifm-white none">Created By</th>
            <th class="ifm-main-bg ifm-white none">Element Status</th>      
            <th class="ifm-main-bg ifm-white min-tablet-l">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($myCompanies as $myCompany)
            <tr>
                <td class="text-capitalize">{!! $myCompany->name !!}</td>
                <td class="text-capitalize">{!! $myCompany->debit !!}</td>
                <td class="text-capitalize">{!! $myCompany->credit !!}</td>
                <td class="text-capitalize">{!! $myCompany->total_balance !!}</td>
                <td class="text-capitalize">{!! $myCompany->created_by !!}</td>
                <td class="text-capitalize">{!! $myCompany->element_status !!}</td>
                <td>
                    {!! Form::open(['route' => ['myCompanies.destroy', $myCompany->id], 'method' => 'delete']) !!}
                        <div class='btn-group ifm-static'>
                            <a href="{!! route('myCompanies.edit', [$myCompany->id]) !!}" class='btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-xs-right'><i class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                     {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{-- <table class="table table-responsive" id="myCompanies-table">
    <thead>
        <th>Name</th>
        <th>Debit</th>
        <th>Credit</th>
        <th>Total Balance</th>
        <th>Created By</th>
        <th>Element Status</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($myCompanies as $myCompany)
        <tr>
            <td>{!! $myCompany->name !!}</td>
            <td>{!! $myCompany->debit !!}</td>
            <td>{!! $myCompany->credit !!}</td>
            <td>{!! $myCompany->total_balance !!}</td>
            <td>{!! $myCompany->created_by !!}</td>
            <td>{!! $myCompany->element_status !!}</td>
            <td>
                {!! Form::open(['route' => ['myCompanies.destroy', $myCompany->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('myCompanies.show', [$myCompany->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('myCompanies.edit', [$myCompany->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table> --}}