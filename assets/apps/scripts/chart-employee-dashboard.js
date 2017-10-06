jQuery(document).ready(function () {

// DONUT CHART: TOTAL EMPLOYEE
    $.ajax({
        type: "GET",
        url: "http://localhost/hrsoft/employee/donatChartDataTotalEmployee",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            console.log(response);
            var data = {
                labels: [
                    "Total Employee"
                ],
                count: [
                    response.count
                ],
                datasets: response.datasets
            };
            console.log(data);
            Chart.pluginService.register({
                afterDraw: function (chartTotalEmployee) {
                    var width = chartTotalEmployee.chart.width,
                            height = chartTotalEmployee.chart.height,
                            ctx = chartTotalEmployee.chart.ctx;

                    ctx.restore();
                    var fontSize = (height / 114).toFixed(2);
                    ctx.font = fontSize + "em sans-serif";
                    ctx.textBaseline = "middle";

                    var text = data.count + "%",
                            textX = Math.round((width - ctx.measureText(text).width) / 2),
                            textY = height / 2;

                    ctx.fillText(text, textX, textY);
                    ctx.save();
                }
            });

            var chartTotalEmployee = new Chart(document.getElementById('chart-total-employee'), {
                type: 'doughnut',
                data: data,
                options: {
                    responsive: true,
                    legend: {
                        display: false
                    }
                }
            })
            $("#count-total-empl").text(response.count);
        }
    });
    
    // DONUT CHART: ACTIVE EMPLOYEE
    $.ajax({
        type: "GET",
        url: "http://localhost/hrsoft/employee/donatChartDataActiveEmployee",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            console.log(response);
            var data = {
                labels: [
                    "Active Employee"
                ],
                count: [
                    response.count
                ],
                datasets: response.datasets
            };
            console.log(data);
            var chartActiveEmployee = new Chart(document.getElementById('chart-active-employee'), {
                type: 'doughnut',
                data: data,
                options: {
                    responsive: true,
                    legend: {
                        display: false
                    }
                }
            })
            $("#count-active-empl").text(response.count);
        }
    });
    
     // DONUT CHART: INACTIVE EMPLOYEE
    $.ajax({
        type: "GET",
        url: "http://localhost/hrsoft/employee/donatChartDataInActiveEmployee",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            console.log(response);
            var data = {
                labels: [
                    "Inactive Employee"
                ],
                count: [
                    response.count
                ],
                datasets: response.datasets
            };
            console.log(data);
            var chartInActiveEmployee = new Chart(document.getElementById('chart-inactive-employee'), {
                type: 'doughnut',
                data: data,
                options: {
                    responsive: true,
                    legend: {
                        display: false
                    }
                }
            })
          $("#count-inactive-empl").text(response.count);  
        }
    });
    

});


