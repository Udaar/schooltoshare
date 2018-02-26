<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
    <thead>
        <th class="ifm-main-bg ifm-white all">Name</th>
        <th class="ifm-main-bg ifm-white all">Address</th>
        <th class="ifm-main-bg ifm-white all">Work Email</th>
        <th class="ifm-main-bg ifm-white min-tablet-l">Action</th>
    </thead>
    <tbody>
    @foreach($vendors as $key => $vendor)
        <tr>
            <td>{!! $vendor->name !!}</td>
            <td>{!! str_limit($vendor->address, 28) !!}</td>
            <td>{!! $vendor->work_email !!}</td>
            <td>
                {!! Form::open(['route' => ['vendors.destroy', $vendor->id], 'method' => 'delete']) !!}
                    <div class='btn-group ifm-static'>
                        <a href="{!! route('vendors.edit', [$vendor->id]) !!}" class='btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-xs-right'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
