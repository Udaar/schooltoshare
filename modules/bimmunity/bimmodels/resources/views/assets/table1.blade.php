<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
    <thead>
        <tr>
            <th class="ifm-main-bg ifm-white all">Name</th>
            <th class="ifm-main-bg ifm-white none">Model</th>
            <th class="ifm-main-bg ifm-white all">year</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Building</th>
            <th class="ifm-main-bg ifm-white none">value</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">description</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($assets as $asset)
            <tr>
                <td>{!! $asset->name !!}</td>
                <td>{!! $asset->model !!}</td>
                <td>{!! $asset->year !!}</td>
                <td>{!! $asset->building->name !!}</td>
                <td>{!! $asset->value!!}</td>
                <td>{!! $asset->description !!}</td>
                <td>
                    {!! Form::open(['route' => ['bimassets.destroy', $asset->id], 'method' => 'delete']) !!}
                        <div class='btn-group ifm-static'>
                            <a href="{!! route('bimassets.edit', [$asset->id]) !!}" class='btn ifm-btn-green ifm-main-bg ifm-white ifm-margin-xs-right'>Edit</a>
                            {{-- <a href="{!! route('bimassets.show', [$asset->id]) !!}" class='btn ifm-btn-default ifm-light-grey-bg ifm-grey ifm-margin-xs-right'>Show</a> --}}
                            {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-light-grey-bg ifm-grey', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                     {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>