<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
    <thead>
        <tr>
            <th class="ifm-main-bg ifm-white all">Name</th>
            <th class="ifm-main-bg ifm-white all">Parent</th>
            <th class="ifm-main-bg ifm-white all">Building</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($zones as $zone)
            <tr>
                <td>{{ $zone->name }}</td>
                <td>{!! $zone->parent->name or '<span class="label label-sm font-red-sunglo bold">No Parent</span>' !!}</td>
                <td>{!! $zone->building->name or '<span class="label label-sm font-red-sunglo bold">No Building</span>' !!}</td>
                <td>
                    {!! Form::open(['route' => ['zones.destroy', $zone->id], 'method' => 'delete']) !!}
                        <div class="btn-group ifm-static">
                            <a  type="button" class="btn ifm-btn-default ifm-main-bg ifm-white ifm-margin-xs-right" href="{!! route('zones.show', [$zone->id]) !!}"></i><span class="">Show</span></a>
                            {!! Form::button('<span class="">Delete</span>', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-light-grey-bg ifm-grey', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>