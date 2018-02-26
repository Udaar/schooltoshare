<table class="table table-responsive" id="sysColumns-table">
    <thead>
        <tr>
            <th>Column Original Name</th>
        <th>Column Admin Name</th>
        <th>Table</th>
        <th>Joined Table</th>
        <th>Joined Column</th>
        {{--<th>Description</th>--}}
        {{--<th>Created By</th>--}}
        {{--<th>Element Status</th>--}}
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($sysColumns as $sysColumns)
        <tr>
            <td>{!! $sysColumns->column_original_name !!}</td>
            <td>{!! $sysColumns->column_admin_name !!}</td>
            <td>{!! $sysColumns->adminTable->table_admin_name !!}</td>
            <td>{!! $sysColumns->joined_table!=''?$sysColumns->joinedTable->table_admin_name:'' !!}</td>
            <td>{!! $sysColumns->joined_column !!}</td>
{{--            <td>{!! $sysColumns->description !!}</td>--}}
            {{--<td>{!! $sysColumns->created_by !!}</td>--}}
            {{--<td>{!! $sysColumns->element_status !!}</td>--}}
            <td>
                {!! Form::open(['route' => ['sysColumns.destroy', $sysColumns->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('sysColumns.show', [$sysColumns->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('sysColumns.edit', [$sysColumns->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>