<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
    <thead>
        <tr>
            <th class="ifm-main-bg ifm-white all">Name</th>
            <th class="ifm-main-bg ifm-white all">Speaker</th>
            <th class="ifm-main-bg ifm-white all">School Name</th>
            <th class="ifm-main-bg ifm-white all">Duration</th>
            <th class="ifm-main-bg ifm-white all">D Type</th>
            <th class="ifm-main-bg ifm-white all">Date</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($events as $event)
            <tr>
                <td class="text-capitalize">{!! $event->name !!}</td>
                <td class="text-capitalize">{!! $event->speaker !!}</td>
                <td class="text-capitalize">{!! $event->school->name !!}</td>
                <td class="text-capitalize">{!! $event->duration !!}</td>
                <td class="text-capitalize">{!! $event->d_type !!}</td>
                <td class="text-capitalize">{!! $event->date !!}</td>            
                <td>
                    {!! Form::open(['route' => ['events.destroy', $event->id], 'method' => 'delete']) !!}
                        <div class='btn-group ifm-static'>
                            <a href="{!! route('events.show', [$event->id]) !!}" class='btn ifm-btn-default ifm-white-bg ifm-border-light-grey-all ifm-grey ifm-margin-xs-right'><i class="fa fa-eye"></i></a>
                            <a href="{!! route('events.edit', [$event->id]) !!}" class='btn ifm-btn-default ifm-white-bg ifm-border-light-grey-all ifm-grey ifm-margin-xs-right'><i class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-white-bg ifm-border-light-grey-all ifm-grey', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                     {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>