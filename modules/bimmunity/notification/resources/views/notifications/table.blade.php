<table class="table table-striped table-bordered table-hover " width="100%" id="sample_1">
    <thead>
        <tr>
            <th class="ifm-main-bg ifm-white all">Name</th>
            <th class="ifm-main-bg ifm-white none">Roles</th>
            <th class="ifm-main-bg ifm-white none">Relations</th>
            <th class="ifm-main-bg ifm-white none">Users</th>  
        </tr>
    </thead>
    <tbody>
        {{--@foreach($items as $item)--}}
            <tr>
                <td class="text-capitalize">type_1</td>
                <td class="text-capitalize">
                    <span class="label label-default ifm-grey-bg"> role </span>
                </td>
                <td class="text-capitalize">
                    <span class="label label-default ifm-grey-bg"> relation </span>
                </td>
                <td class="text-capitalize">
                    <span class="label label-default ifm-grey-bg"> user </span>
                </td>
            </tr>
        {{--@endforeach--}}
    </tbody>
</table>