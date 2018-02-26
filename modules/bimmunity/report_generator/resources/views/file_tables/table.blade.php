<table class="table table-responsive" id="fileTables-table">
    <thead>
        <th>Table Name</th>
        <th>Table Slug</th>
        <th>Description</th>
        <th>Created By</th>
        <th>Element Status</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($fileTables as $fileTable)
        <tr>
            <td>{!! $fileTable->table_name !!}</td>
            <td>{!! $fileTable->table_slug !!}</td>
            <td>{!! $fileTable->description !!}</td>
            <td>{!! $fileTable->created_by !!}</td>
            <td>{!! $fileTable->element_status !!}</td>
            <td>
                {!! Form::open(['route' => ['fileTables.destroy', $fileTable->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('fileTables.show', [$fileTable->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('fileTables.edit', [$fileTable->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>