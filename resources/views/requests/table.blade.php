<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
    <thead>
        <tr>
            <th class="ifm-main-bg ifm-white all">User Name</th>
            <th class="ifm-main-bg ifm-white all">School Name</th>
            <th class="ifm-main-bg ifm-white all">Activity Name</th>  
            <th class="ifm-main-bg ifm-white all">Date</th>  
            <th class="ifm-main-bg ifm-white min-tablet-l">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($requests as $request)
            <tr>
                <td class="text-capitalize">{!! $request->user->name !!}</td>
                <td class="text-capitalize">{!! $request->school->name !!}</td>
                <td class="text-capitalize">{!! $request->Facility->name !!}</td>
                <td class="text-capitalize">{!! $request->date !!}</td>        
                <td>
                    {!! Form::open(['route' => ['requests.destroy', $request->id], 'method' => 'delete']) !!}
                        <div class='btn-group ifm-static'>
                            <a href="{!! route('requests.edit', [$request->id]) !!}" class='btn ifm-btn-default ifm-white-bg ifm-border-light-grey-all ifm-grey ifm-margin-xs-right'><i class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-white-bg ifm-border-light-grey-all ifm-grey', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                     {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

