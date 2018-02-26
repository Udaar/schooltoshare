/*
    [createBarChart(id, title, label, data)]
        ** id: Id Of Canvas Of chart
        ** title: The Title Of Chart
        ** label: X-axes Data
        ** data: Y-axes Data
*/

function createBarChart(id, title, label, data, colors){
    var ctx1 = document.getElementById(id).getContext('2d');
    var myChart = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: label,
            datasets: [{
                data: data,
                backgroundColor: colors
            }]
        },
        options: {
            legend: {
                display: false
            },
            responsive: true,
            maintainAspectRatio: false,
            title: {
                display: true,
                text: title,
                fontSize: 18
            },
            scales: {
                yAxes: [{
                    ticks: {
                    min: 0,
                    }
                }]
            }
        }
    });
}

function createLineChart(id, title, label, data){
    var ctx2 = document.getElementById(id).getContext('2d');
    var myLineChart = new Chart(ctx2, {
        type: 'line',
        data: {"labels":label,"datasets":[{"data":data,"fill":false,"borderColor":"rgb(75, 192, 192)","lineTension":0.1}]},
        options: {
            responsive: true,
            maintainAspectRatio: false,
            title: {
                display: true,
                text: title,
                fontSize: 18
            },
            scales: {
                yAxes: [{
                    ticks: {
                    min: 0,
                    }
                }]
            }
        }
    });
}

function createPieChart(id, title, label, data, colors){
    var ctx3 = document.getElementById(id).getContext('2d');
    var myDoughnutChart = new Chart(ctx3, {
        type: 'doughnut',
        data: {
            datasets: [{
                data: data,
                backgroundColor: colors
            }],

            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: label
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            title: {
                display: true,
                text: title,
                fontSize: 18
            }
        }
    });
}