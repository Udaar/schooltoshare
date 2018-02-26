@extends('layouts.app')
@push('head')
    <link rel="stylesheet" href="/metronic/reset/dashboards/pm-dashboards.css">
    <link rel="stylesheet" href="/metronic/reset/modules/bim_model/viewer.css">
    <style>
        .status{
            display: none;
        }
        #viewer{
            position: absolute;
            z-index: 1;
        }
    </style>
@endpush

@section('content')
    <section class="pm-dashboard">
        <h1>Page Not Found</h1>
    </section>
@endsection

@push('scripts')
    <script src="/metronic/assets/global/plugins/chartsJS/Chart.bundle.min.js"></script>
    <script src="/metronic/assets/global/plugins/chartsJS/Chart.min.js"></script>
    <script src="/metronic/assets/global/plugins/chartsJS/Chart.PieceLabel.js"></script>
    <script src="/js/charts.js"></script>
    <script>
    createPieChart(['occupiedVacant', 'ticketsPerType', 'currentTicketsStatus',
                     'reissuedTickets'
        ]);
        
        createGroupedBarChartTwo(['expensesInvoices','earnedPaymentsInvoiced'],2);

        createGroupedBarChartTwo(['earnedInvoicedExpenses'],3);

        
        createBarChart(['overallEarnedPayments']);

        $(function(){
            $('.notification-body').slimScroll({
                height: '382px',
                alwaysVisible: true
            });
        });


    </script>
    
@endpush