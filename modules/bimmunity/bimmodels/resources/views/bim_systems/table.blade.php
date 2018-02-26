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
        @foreach($bimSystems as $bimSystem)
            <tr>
                <td>{!! $bimSystem->name !!}</td>
                <td>{!! $bimSystem->code !!}</td>
                <td>
                @if($bimSystem->system)
                   {!! $bimSystem->system->name !!}
                @else
                    No Perant
                @endif
                </td>
                <td>{!! $bimSystem->description !!}</td>
                <td>
                    {!! Form::open(['route' => ['bimSystems.destroy', $bimSystem->id], 'method' => 'delete']) !!}
                        <div class='btn-group ifm-static'>
                            <a href="{{ route('bimSystems.edit', [$bimSystem->id]) }}" class='btn ifm-btn-green ifm-main-bg ifm-white ifm-margin-xs-right'>Edit</a>
                            {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn ifm-btn-green ifm-light-grey-bg ifm-grey', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                     {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{--<table class="table table-responsive" id="bimSystems-table">
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
    @foreach($bimSystems as $bimSystem)
        <tr>
            <td>{!! $bimSystem->name !!}</td>
            <td>{!! $bimSystem->code !!}</td>
            <td>{!! $bimSystem->perent_id !!}</td>
            <td>{!! $bimSystem->description !!}</td>
            <td>
                {!! Form::open(['route' => ['bimSystems.destroy', $bimSystem->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('bimSystems.show', [$bimSystem->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('bimSystems.edit', [$bimSystem->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>--}}