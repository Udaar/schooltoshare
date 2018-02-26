<table class="table table-responsive" id="sysTables-table">
    <thead>
        <tr>
            <th>Table Original Name</th>
        <th>Table Admin Name</th>
        <th>Module Name</th>
        <th>Model Name</th>
        {{--<th>Description</th>--}}
        {{--<th>Created By</th>--}}
        {{--<th>Element Status</th>--}}
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($sysTables as $sysTables)
        <tr>
            <td>{!! $sysTables->table_original_name !!}</td>
            <td>{!! $sysTables->table_admin_name !!}</td>
            <td>{!! $sysTables->adminModule->module_name !!}</td>
            <td>{!! $sysTables->table_model_name !!}</td>
{{--            <td>{!! $sysTables->description !!}</td>--}}
            {{--<td>{!! $sysTables->created_by !!}</td>--}}
            {{--<td>{!! $sysTables->element_status !!}</td>--}}
            <td>
                {!! Form::open(['route' => ['sysTables.destroy', $sysTables->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('sysTables.show', [$sysTables->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('sysTables.edit', [$sysTables->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>