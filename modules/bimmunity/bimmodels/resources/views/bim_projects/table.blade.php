<table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
    <thead>
        <tr>
            <th class="ifm-main-bg ifm-white all">Name</th>
            <th class="ifm-main-bg ifm-white all">Code</th>
            <th class="ifm-main-bg ifm-white all">Parent</th>
            <th class="ifm-main-bg ifm-white none">Description</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bimProjects as $bimProject)
            <tr>
                <td>{!! $bimProject->name !!}</td>
                <td>{!! $bimProject->code !!}</td>
                <td>
                @if($bimProject->project)
                   {!! $bimProject->project->name !!}
                @else
                    No Perant
                @endif
                </td>
                <td>{!! $bimProject->description !!}</td>
                <td>
                    {!! Form::open(['route' => ['bimProjects.destroy', $bimProject->id], 'method' => 'delete']) !!}
                        <div class='btn-group ifm-static'>
                            <a href="{{ route('bimProjects.edit', [$bimProject->id]) }}" class='btn ifm-btn-green ifm-main-bg ifm-white ifm-margin-xs-right'>Edit</a>
                            {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn ifm-btn-green ifm-light-grey-bg ifm-grey', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                     {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{--<table class="table table-responsive" id="bimProjects-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Code</th>
        <th>Perent Id</th>
        <th>Description</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($bimProjects as $bimProject)
        <tr>
            <td>{!! $bimProject->name !!}</td>
            <td>{!! $bimProject->code !!}</td>
            <td>{!! $bimProject->perent_id !!}</td>
            <td>{!! $bimProject->description !!}</td>
            <td>
                {!! Form::open(['route' => ['bimProjects.destroy', $bimProject->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('bimProjects.edit', [$bimProject->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>--}}