<table class="table table-responsive" id="buildings-table">
    <thead>
        <th>Empolyeeid</th>
        <th>Parentid</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($buildings as $building)
        <tr>
            <td>{!! $building->empolyeeid !!}</td>
            <td>{!! $building->parentid !!}</td>
            <td>
                {!! Form::open(['route' => ['buildings.destroy', $building->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('buildings.show', [$building->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('buildings.edit', [$building->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>