<table class="table table-responsive" id="buildings-table">
    <thead>
        <th>Name</th>
        <th>Year</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Category Id</th>
        <th>Site Id</th>
        <th>Emergency Info</th>
        <th>Gps Lat</th>
        <th>Gps Long</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($buildings as $building)
        <tr>
            <td>{!! $building->name !!}</td>
            <td>{!! $building->year !!}</td>
            <td>{!! $building->address !!}</td>
            <td>{!! $building->phone !!}</td>
            <td>{!! $building->category_id !!}</td>
            <td>{!! $building->site_id !!}</td>
            <td>{!! $building->emergency_info !!}</td>
            <td>{!! $building->gps_lat !!}</td>
            <td>{!! $building->gps_long !!}</td>
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