<table class="table table-responsive" id="events-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>User Id</th>
        <th>School Id</th>
        <th>Duration</th>
        <th>D Type</th>
        <th>Date</th>
        <th>Ticket Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($events as $event)
        <tr>
            <td>{!! $event->name !!}</td>
            <td>{!! $event->user_id !!}</td>
            <td>{!! $event->school_id !!}</td>
            <td>{!! $event->duration !!}</td>
            <td>{!! $event->d_type !!}</td>
            <td>{!! $event->date !!}</td>
            <td>{!! $event->ticket_id !!}</td>
            <td>
                {!! Form::open(['route' => ['events.destroy', $event->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('events.show', [$event->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('events.edit', [$event->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>