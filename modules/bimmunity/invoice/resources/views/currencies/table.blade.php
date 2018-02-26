<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
    <thead>
        <th class="ifm-main-bg ifm-white all">Name</th>
        <th class="ifm-main-bg ifm-white all">Code</th>
        <th class="ifm-main-bg ifm-white none">Num</th>
        <th class="ifm-main-bg ifm-white none">Hex</th>
        <th class="ifm-main-bg ifm-white min-tablet-l">Action</th>
    </thead>
    <tbody>
    @foreach($currencies as $key => $currency)
        <tr>
            <td>{!! $currency->name !!}</td>
            <td>{!! $currency->code !!}</td>
            <td>{!! $currency->num !!}</td>
            <td>{!! $currency->hex !!}</td>
            <td>
                {!! Form::open(['route' => ['currencies.destroy', $currency->id], 'method' => 'delete']) !!}
                <div class='btn-group ifm-static'>
                    <a href="{!! route('currencies.edit', [$currency->id]) !!}" class='btn ifm-btn-green ifm-main-bg ifm-white ifm-margin-xs-right'>Edit</a>
                    {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-light-grey-bg ifm-grey', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
