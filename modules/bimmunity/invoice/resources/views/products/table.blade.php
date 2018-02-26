<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
<thead>
        <th class="ifm-main-bg ifm-white all">Name</th>
        <th class="ifm-main-bg ifm-white none">Description</th>
        <th class="ifm-main-bg ifm-white all">Unit Cost</th>
        <th class="ifm-main-bg ifm-white all">Discount</th>
        <th class="ifm-main-bg ifm-white all">Apply Tax</th>
        <th class="ifm-main-bg ifm-white min-tablet-l">Action</th>
    </thead>
    <tbody>
    @foreach($products as $key => $product)
        <tr>
            <td>{!! $product->name !!}</td>
            <td>{!! str_limit($product->description, 32) !!}</td>
            <td>{!! $product->unit_cost !!} {!! $product->currency->code !!}</td>
            <td>{!! $product->discount !!}</td>
            <td>{!! $product->apply_tax !!}</td>
            <td>
                {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                <div class='btn-group ifm-static'>
                    <a href="{!! route('products.edit', [$product->id]) !!}" class='btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-xs-right'><i class="fa fa-edit"></i></a>
                    <a href="{!! route('products.show', [$product->id]) !!}" class='btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all ifm-margin-xs-right'><i class="fa fa-eye"></i></a>
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
