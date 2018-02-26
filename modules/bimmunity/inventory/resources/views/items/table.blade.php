<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
    <thead>
        <tr>
            <th class="ifm-main-bg ifm-white all">Name</th>
            <th class="ifm-main-bg ifm-white all">Barcode</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Category</th>
            <th class="ifm-main-bg ifm-white none">Description</th>  
            <th class="ifm-main-bg ifm-white min-tablet-l">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
            <tr>
                <td class="text-capitalize"><a href="{!! route('items.show', [$item->id]) !!}" class="ifm-grey">{!! $item->name !!}</a></td>
                <td class="text-capitalize">{!! $item->barcode !!}</td>
                <td class="text-capitalize">{!! $item->category->name !!}</td>
                <td class="text-capitalize">{!! $item->description !!}</td>
                <td>
                    {!! Form::open(['route' => ['items.destroy', $item->id], 'method' => 'delete']) !!}
                        <div class='btn-group ifm-static'>
                            <a href="{!! route('items.edit', [$item->id]) !!}" class='btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-xs-right'><i class="fa fa-edit"></i></a>
                            <a href="{!! route('items.show', [$item->id]) !!}" class='btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-xs-right'><i class="fa fa-eye"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                     {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>