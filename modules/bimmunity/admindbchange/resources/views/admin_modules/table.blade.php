<table class="table table-responsive" id="adminModules-table">
    <thead>
        <tr>
            <th>Module Name</th>
        {{--<th>Description</th>--}}
        {{--<th>Created By</th>--}}
        {{--<th>Element Status</th>--}}
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($adminModules as $adminModules)
        <tr>
            <td>{!! $adminModules->module_name !!}</td>
            {{--<td>{!! $adminModules->description !!}</td>--}}
            {{--<td>{!! $adminModules->created_by !!}</td>--}}
            {{--<td>{!! $adminModules->element_status !!}</td>--}}
            <td>
                {!! Form::open(['route' => ['adminModules.destroy', $adminModules->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('adminModules.show', [$adminModules->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('adminModules.edit', [$adminModules->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>