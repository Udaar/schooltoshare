<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
    <thead>
        <tr>
            <th class="ifm-main-bg ifm-white all">Name</th>
            <th class="ifm-main-bg ifm-white all">Created By</th>
            <th class="ifm-main-bg ifm-white none">Created At</th>        
            <th class="ifm-main-bg ifm-white min-tablet-l">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($banks as $bank)
            <tr>
                <td class="text-capitalize">{!! $bank->name !!}</td>
                <td class="text-capitalize">{!! $bank->user->name !!}</td>
                <td class="text-capitalize">{!! $bank->created_at !!}</td>         
                <td>
                    {!! Form::open(['route' => ['banks.destroy', $bank->id], 'method' => 'delete']) !!}
                        <div class='btn-group ifm-static'>
                            <a href="{!! route('banks.edit', [$bank->id]) !!}" class='btn ifm-btn-default ifm-white-bg ifm-border-light-grey-all ifm-grey ifm-margin-xs-right'><i class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-white-bg ifm-border-light-grey-all ifm-grey', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                     {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>