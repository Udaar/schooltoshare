<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
    <thead>
        <tr>
            <th class="ifm-main-bg ifm-white all">Full Name</th>
            <th class="ifm-main-bg ifm-white all">Email</th>
            <th class="ifm-main-bg ifm-white all">Phone</th>
            <th class="ifm-main-bg ifm-white all">Cell Phone</th>
            <th class="ifm-main-bg ifm-white all">Address</th>        
            <th class="ifm-main-bg ifm-white min-tablet-l">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td class="text-capitalize">{!! $user->name !!}</td>
                <td class="text-capitalize">{!! $user->email !!}</td>
                <td class="text-capitalize">{!! $user->phone !!}</td>
                <td class="text-capitalize">{!! $user->cell_phone !!}</td>
                <td class="text-capitalize">{!! $user->address !!}</td>          
                <td>
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                        <div class='btn-group ifm-static'>
                            <a href="{!! route('users.edit', [$user->id]) !!}" class='btn ifm-btn-default ifm-white-bg ifm-border-light-grey-all ifm-grey ifm-margin-xs-right'><i class="fa fa-edit"></i></a>
                            <a href="{!! route('users.show', [$user->id]) !!}" class='btn ifm-btn-default ifm-white-bg ifm-border-light-grey-all ifm-grey ifm-margin-xs-right'><i class="fa fa-eye"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-white-bg ifm-border-light-grey-all ifm-grey', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                     {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>