<table class="col-xs-12 table-bordered table-striped table-condensed cf">
                <thead class="cf ifm-light-grey-bg ifm-grey">
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th class="numeric">Parent</th>
                        <th class="numeric">Building</th>
                        <th class="numeric">Action</th>
                    </tr>
                </thead>
                <tbody class="ifm-grey">
                @foreach ($zones as $zone)

                    <tr>
                        <td data-title="Name">{{ $zone->name }}</td>
                        <td data-title="Parent" class="numeric">{!! $zone->parent->name or '<span class="label label-sm label-danger">No Parent</span>' !!}</td>
                        <td data-title="Building" class="numeric">{!! $zone->building->name or '<span class="label label-sm label-danger">No Building</span>' !!}</td>
                        <td data-title="Actions" class="numeric">
                            {!! Form::open(['route' => ['zones.destroy', $zone->id], 'method' => 'delete']) !!}
                            <div class="btn-group">
                                <a  type="button" class="btn ifm-btn-green ifm-main-bg ifm-white" href="{!! route('zones.edit', [$zone->id]) !!}"><i class="fa fa-edit visible-xs"></i><span class="hidden-xs">Edit</span></a>
                                <a  type="button" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey ifm-margin-xs-right" href="{!! route('zones.show', [$zone->id]) !!}"><i class="fa fa-eye visible-xs"></i><span class="hidden-xs">Show</span></a>
                                {!! Form::button('<i class="fa fa-trash visible-xs"></i><span class="hidden-xs">Delete</span>', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-light-grey-bg ifm-grey', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>