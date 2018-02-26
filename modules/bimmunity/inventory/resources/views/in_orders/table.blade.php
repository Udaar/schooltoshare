<section class="filter">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 ifm-border-light-grey-all ifm-padding-sm-all">
                <div class="col-lg-4">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAEbSURBVDhPYwCBlJQUi9TUVBdycHJysh7YEBBIS0s7A8RkAaBhu6DGgA1aDhRwg3KJBkCfALWldkC5YIO4gHhzenq6NVSIIACqjQQaMg/IZISIQEFubi4fUGInEBtBhXACoKW+QHUrQkNDmaFCqCA7O1sYqGgvMAA1oUIYAOgdJ6AhG4CGsEGFsIOsrCwJoML9mZmZSlAhOACKmwMt2gEKCqgQfpCUlCQPMgxouwHIQBAGarYDiu0B0vxQZcQBoCZPoKbzQHomCAPZt4FYDipNPABqsgEa0A7lggxeSrJrQGDUIMIAFPVAzduB6YoHxCfbIBAAagYVFfug+WoZ2QaBACgrAA0oBxr0BphQeaHC5IP4+HgOKBMLYGAAACpApvhKTtLmAAAAAElFTkSuQmCC">
                    <span class="ifm-inline-block ifm-grey">Filter by:</span>
                </div>
                <div class="form-group col-lg-4 ifm-no-margin-bottom ifm-no-padding-left">
                    <input type="checkbox" class="" id="approved_chk_box" onchange="approved_orders(this)" name="approved" value="" >
                    <label for="approved ifm-grey">Approved</label>
                </div>
                <div class="form-group col-lg-4 ifm-no-margin-bottom ifm-no-padding-left ifm-no-padding-right">
                    <input type="checkbox" id="unapproved_chk_box" onchange="unapproved_orders(this)" class="" name="not_approved" value="" >
                    <label for="not_approved ifm-grey">Not Approved</label>
                </div>
            </div>
        </div>
    </div>
</section>
<table class="table table-striped table-bordered table-hover " width="100%" id="ajaxTable">
    <thead>
        <tr>
            <th class="ifm-main-bg ifm-white all">Order Number</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Date Required</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Date Received</th>
            <th class="ifm-main-bg ifm-white all">Company</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Status</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Cost</th>
            <th class="ifm-main-bg ifm-white none">Created By</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Actions</th>
        </tr>
    </thead>
    {{--<tbody>--}}
        {{--@foreach($inOrders as $inOrder)--}}
            {{--<tr>--}}
                {{--<td class="text-capitalize"><a href="{!! route('inOrders.show', [$inOrder->id]) !!}" class="ifm-grey">{!! $inOrder->order_number !!}</a></td>--}}
                {{--<td class="text-capitalize">{!! Carbon\Carbon::parse($inOrder->date_required)->format('d/m/Y') !!}</td>--}}
                {{--<td class="text-capitalize">{!! Carbon\Carbon::parse($inOrder->date_received)->format('d/m/Y') !!}</td>--}}
                {{--<td class="text-capitalize">{!! $inOrder->company->name !!}</td>--}}
                {{--<td class="text-capitalize">{!! ($inOrder->finance_approved_by!=null?$inOrder->financeApprovedBy->name:'') !!}</td>--}}
                {{--<td class="text-capitalize">{!! Carbon\Carbon::parse($inOrder->finance_approved_date)->format('d/m/Y') !!}</td>                    --}}
                {{--<td class="text-capitalize">{!! $inOrder->status !!}</td>                    --}}
                {{--<td class="text-capitalize">{!! $inOrder->cost !!}</td>                    --}}
                {{--<td class="text-capitalize">{!! $inOrder->user->name !!}</td>                    --}}
                {{--<td>--}}
                    {{--{!! Form::open(['route' => ['inOrders.destroy', $inOrder->id], 'method' => 'delete']) !!}--}}
                        {{--<div class='btn-group ifm-static'>--}}
                            {{--<a href="{!! route('inOrders.edit', [$inOrder->id]) !!}" class='btn ifm-btn-default ifm-main-bg ifm-white ifm-margin-xs-right'>Edit</a>--}}
                            {{--{!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-light-grey-bg ifm-grey', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                        {{--</div>--}}
                     {{--{!! Form::close() !!}--}}
                {{--</td>--}}
            {{--</tr>--}}
        {{--@endforeach--}}
    {{--</tbody>--}}
</table>
@section('scripts')
    <script>
        $(document).ready(function() {
            //$('#approved_chk_box')[0].checked=true;
            //$('#unapproved_chk_box')[0].checked=true;
            $('#unapproved_chk_box').click();
            $('#approved_chk_box').click();
        });
    </script>
@endsection
