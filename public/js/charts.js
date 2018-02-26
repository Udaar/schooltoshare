
        $('.maintan_tickets_table').on('click', function(){
            $('.ticketLabel').siblings().remove();
            $('.ticketLabel').after('<i class="fa fa-wrench"></i>');
            $('.ticketLabel').text('Maintanance');
        });
        $('.booking_ticket_table').on('click', function(){
            $('.ticketLabel').siblings().remove();
            $('.ticketLabel').after('<i class="fa fa-ticket"></i>');
            $('.ticketLabel').text('Booking');
        });
        $('.services_ticket_table').on('click', function(){
            $('.ticketLabel').siblings().remove();
            $('.ticketLabel').after('<i class="fa fa-cogs"></i>');
            $('.ticketLabel').text('Services');
        });
        $('.complaint_ticket_table').on('click', function(){
            $('.ticketLabel').siblings().remove();
            $('.ticketLabel').after('<i class="fa fa-thumbs-down"></i>');
            $('.ticketLabel').text('Complaint');
        });

        

        function createPieChart(ids){
            for(i in ids){
                var chartId = $("#"+ids[i]);
                var chartData = {
                    labels: chartId.attr('chart-label').split(","),
                    datasets: [
                    {
                        data: chartId.attr('chart-value').split(","),
                        backgroundColor: chartId.attr('chart-color').split(",")
                    }]
                };
                var chartOptions = chartId.attr('chart-option');
                if(chartOptions == 'default'){
                    chartOptions = {
                        responsive: true,
                        maintainAspectRatio: false,
                        pieceLabel: {
                            mode: 'percentage',
                            precision: 1,
                            fontSize: 12
                        }
                    }
                }
                var myChart = new Chart(chartId, {
                    type: chartId.attr('chart-type'),
                    data: chartData,
                    options: chartOptions
                });
            }
        }

        function createGroupedBarChartTwo(ids,col){
            

            for(i in ids){
                var chartId = $("#"+ids[i]);
                var data=[];
                for(var j=0;j<col;j++)
                        {
                           data.push({
                            label: chartId.attr('chart-v-label').split(",")[j],
                            backgroundColor: chartId.attr('chart-color').split(",")[j],
                            data: chartId.attr('chart-value').split("|")[j].split(',')
                            });
                        }
                var chartData = {
                    labels: chartId.attr('chart-h-label').split(","),
                    datasets: data
                }
                var chartOptions = chartId.attr('chart-option');
                if(chartOptions == 'default'){
                    chartOptions = {
                        responsive: true,
                        maintainAspectRatio: false,
                        barValueSpacing: 20,
                        scales: {
                            yAxes: [{
                                ticks: {
                                min: 0,
                                }
                            }]
                        }
                    }
                }
                var myChart = new Chart(chartId, {
                    type: chartId.attr('chart-type'),
                    data: chartData,
                    options: chartOptions
                });
            }
        }

        function createBarChart(ids){
            for(i in ids){
                var chartId = $("#"+ids[i]);
                var chartData = {
                    labels: chartId.attr('chart-h-label').split(","),
                    datasets: [
                        {
                            label: chartId.attr('chart-v-label').split(",")[0],
                            backgroundColor: chartId.attr('chart-color'),
                            data: chartId.attr('chart-value').split(',')
                        }
                    ]
                }
                var chartOptions = chartId.attr('chart-option');
                if(chartOptions == 'default'){
                    chartOptions = {
                        responsive: true,
                        maintainAspectRatio: false,
                        barValueSpacing: 20,
                        scales: {
                            yAxes: [{
                                ticks: {
                                min: 0,
                                }
                            }]
                        }
                    }
                }
                var myChart = new Chart(chartId, {
                    type: chartId.attr('chart-type'),
                    data: chartData,
                    options: chartOptions
                });
            }
        }

        var ctx1 = "totalProfit";
        var ctx2 = "totalProfitProperty";
        var scatterChart1 = new Chart(ctx1, {
            type: 'line',
            data: {
                datasets: [{
                    label: 'Scatter Dataset',
                    data: [{
                        x: -10,
                        y: 0
                    }, {
                        x: 0,
                        y: 10
                    }, {
                        x: 10,
                        y: 5
                    }],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    xAxes: [{
                        type: 'linear',
                        position: 'bottom'
                    }]
                }
            }
        });
        var scatterChart2 = new Chart(ctx2, {
            type: 'line',
            data: {
                datasets: [{
                    label: 'Scatter Dataset',
                    data: [{
                        x: -50,
                        y: 0
                    }, {
                        x: 0,
                        y: 4
                    }, {
                        x: 10,
                        y: 5
                    }],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    xAxes: [{
                        type: 'linear',
                        position: 'bottom'
                    }]
                }
            }
        });