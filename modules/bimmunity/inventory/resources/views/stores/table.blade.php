<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
    <thead>
        <tr>
            <th class="ifm-main-bg ifm-white all">Name</th>
            <th class="ifm-main-bg ifm-white all">Number</th>
            <th class="ifm-main-bg ifm-white none">Position</th>
            <th class="ifm-main-bg ifm-white all">Responsible By</th>
            <th class="ifm-main-bg ifm-white none">Created By</th>
            <th class="ifm-main-bg ifm-white none">Created At</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($stores as $store)
            <tr>
                <td class="text-capitalize"><a href="{!! route('stores.show', [$store->id]) !!}" class="ifm-grey">{!! $store->name !!}</a></td>
                <td class="text-capitalize">{!! $store->number !!}</td>
                <td class="text-capitalize">{!! $store->position !!}</td>
                <td class="text-capitalize">{!! $store->responsible->name !!}</td>
                <td class="text-capitalize">{!! $store->user->name !!}</td>
                <td class="text-capitalize">{!! $store->created_at !!}</td>
                <td>
                    {!! Form::open(['route' => ['stores.destroy', $store->id], 'method' => 'delete']) !!}
                        <div class='btn-group ifm-static'>
                            <a href="{!! route('stores.edit', [$store->id]) !!}" class='btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-xs-right'><i class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                     {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
