<table class="table table-responsive" id="requests-table">
    <thead>
        <tr>
            <th>User Id</th>
        <th>School Id</th>
        <th>Activity Id</th>
        <th>Date</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($requests as $request)
        <tr>
            <td>{!! $request->user_id !!}</td>
            <td>{!! $request->school_id !!}</td>
            <td>{!! $request->activity_id !!}</td>
            <td>{!! $request->date !!}</td>
            <td>
                {!! Form::open(['route' => ['requests.destroy', $request->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('requests.show', [$request->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('requests.edit', [$request->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>