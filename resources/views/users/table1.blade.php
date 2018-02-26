<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
    <thead>
        <tr>
            <th class="ifm-main-bg ifm-white all">Full Name</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Email</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Phone</th>
            <th class="ifm-main-bg ifm-white all">Cell Phone</th>
            <th class="ifm-main-bg ifm-white none">Address</th>
            <th class="ifm-main-bg ifm-white none">Image</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{!! $user->phone !!}</td>
                <td>{!! $user->cell_phone !!}</td>
                <td>{{ $user->address }}</td>
                <td>
                    <img 
                    @if( isset($user->picture) )
                        src="/{{  $user->picture }}"
                    @else
                        src="{{  asset(config('ifm.sites.image_placeholder')) }}"
                    @endif
                        width="150" alt="" style="margin-top:0.5em">
                </td>
                <td>
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                        <div class='btn-group ifm-static'>
                            <a href="{!! route('users.edit', [$user->id]) !!}" class='btn ifm-btn-green ifm-main-bg ifm-white ifm-margin-xs-right'>Edit</a>
                            <a href="{!! route('users.show', [$user->id]) !!}" class='btn ifm-btn-default ifm-light-grey-bg ifm-grey ifm-margin-xs-right'>Show</a>
                            {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-light-grey-bg ifm-grey', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                    {!! Form::close() !!}
            </tr>
        @endforeach
    </tbody>
</table>