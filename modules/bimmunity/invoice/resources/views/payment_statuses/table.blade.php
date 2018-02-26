<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
    <thead>
        <th class="ifm-main-bg ifm-white all">Name</th>
        <th class="ifm-main-bg ifm-white min-tablet-l">Action</th>
    </thead>
    <tbody>
    @foreach($paymentStatuses as $paymentStatus)
        <tr>
            <td>{!! $paymentStatus->name !!}</td>
            <td>
                {!! Form::open(['route' => ['payment_statuses.destroy', $paymentStatus->id], 'method' => 'delete']) !!}
                <div class='btn-group ifm-static'>
                    <a href="{!! route('payment_statuses.edit', [$paymentStatus->id]) !!}" class='btn ifm-btn-green ifm-main-bg ifm-white ifm-margin-xs-right'>Edit</a>
                    {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-light-grey-bg ifm-grey ifm-margin-xs-right', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
