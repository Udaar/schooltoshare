<table class="table table-responsive" id="acceptedRecords-table">
    <thead>
        <th>Accepted By</th>
        <th>Accepted Date</th>
        <th>Related Module</th>
        <th>Related Module Id</th>
        <th>Notes</th>
        <th>Status</th>
        <th>Active</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($acceptedRecords as $acceptedRecords)
        <tr>
            <td>{!! $acceptedRecords->accepted_by !!}</td>
            <td>{!! $acceptedRecords->accepted_date !!}</td>
            <td>{!! $acceptedRecords->related_module !!}</td>
            <td>{!! $acceptedRecords->related_module_id !!}</td>
            <td>{!! $acceptedRecords->notes !!}</td>
            <td>{!! $acceptedRecords->status !!}</td>
            <td>{!! $acceptedRecords->active !!}</td>
            <td>
                {!! Form::open(['route' => ['acceptedRecords.destroy', $acceptedRecords->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('acceptedRecords.show', [$acceptedRecords->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('acceptedRecords.edit', [$acceptedRecords->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>