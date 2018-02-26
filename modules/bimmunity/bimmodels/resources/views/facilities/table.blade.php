<table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
    <thead>
        <tr>
            <th class="ifm-main-bg ifm-white all">Name</th>
            <th class="ifm-main-bg ifm-white all">Building</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($facilities as $facility)
            <tr>
                <td>{!! $facility->name !!}</td>
                <td>{!! $facility->building->name !!}</td>
                <td>
                    {!! Form::open(['route' => ['facilities.destroy', $facility->id], 'method' => 'delete']) !!}
                        <div class='btn-group ifm-static'>
                            <a href="{!! route('facilities.edit', [$facility->id]) !!}" class='btn ifm-btn-green ifm-main-bg ifm-white ifm-margin-xs-right'>Edit</a>
                            {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn ifm-btn-green ifm-light-grey-bg ifm-grey', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                     {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{--<table class="table table-responsive" id="facilities-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Building</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($facilities as $facility)
        <tr>
            <td>{!! $facility->name !!}</td>
            <td>{!! $facility->building->name !!}</td>
            <td>
                {!! Form::open(['route' => ['facilities.destroy', $facility->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('facilities.show', [$facility->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('facilities.edit', [$facility->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>--}}