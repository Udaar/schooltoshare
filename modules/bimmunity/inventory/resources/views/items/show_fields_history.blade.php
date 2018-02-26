@push('head')
    <style>
        table.dataTable > tbody > tr.child span.dtr-title {
            margin-bottom: 10px;
        }
    </style>
@endpush
<table class="table table-striped table-bordered table-hover " width="100%" id="example_1">
    <thead>
        <tr>
            <th class="ifm-main-bg ifm-white all">Date</th>
            <th class="ifm-main-bg ifm-white all">Details</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="text-capitalize">22-5-2017</td>
            <td class="text-capitalize">Task Created</td>
        </tr>
    </tbody>
</table>
@push('scripts')
    <script>
        $(function() {
            $('#example_1').dataTable( {
                responsive: true,
            });
        });
    </script>
@endpush
