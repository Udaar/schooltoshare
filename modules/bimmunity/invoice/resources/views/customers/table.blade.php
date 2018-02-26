<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
    <thead>
    <tr>
        <th class="ifm-main-bg ifm-white all">Name</th>
        <th class="ifm-main-bg ifm-white all">Address</th>
        <th class="ifm-main-bg ifm-white min-tablet-l">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($customers as $key => $customer)
        <tr>
            <td>{!! $customer->name !!}</td>
            <td>{!! $customer->address !!}</td>
            <td>
                {!! Form::open(['route' => ['customers.destroy', $customer->id], 'method' => 'delete']) !!}
                <div class='btn-group ifm-static'>
                    <a href="{!! route('customers.edit', [$customer->id]) !!}" class='btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-xs-right'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
