<section class="filter form-inline">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 ifm-border-light-grey-all ifm-padding-15-all">
                <div class="ifm-margin-5-bottom">
                    <i class="fa fa-filter ifm-grey"></i>
                    <span class="bold ifm-inline-block ifm-grey">Filter by:</span>
                </div>
                <div class="form-group ifm-margin-15-right">
                    <input type="checkbox" class="" id="approved_chk_box" onchange="approved_orders(this)" name="approved" value="" >
                    <label for="approved ifm-grey">Approved</label>
                </div>
                <div class="form-group">
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
        </tr>
    </thead>
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
