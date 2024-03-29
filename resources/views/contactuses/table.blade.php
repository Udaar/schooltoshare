<table class="table table-responsive" id="contactuses-table">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($contactuses as $contactUS)
        <tr>
            <td>{!! $contactUS->name !!}</td>
            <td>{!! $contactUS->email !!}</td>
            <td>{!! $contactUS->phone !!}</td>
            <td>{!! $contactUS->Message !!}</td>
            <td>
                {!! Form::open(['route' => ['contactuses.destroy', $contactUS->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('fm.contactuses.show', [$contactUS->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('fm.contactuses.edit', [$contactUS->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>