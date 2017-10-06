var ChartsFlotcharts = function () {

    return {
        //main function to initiate the module

        init: function () {

            App.addResizeHandler(function () {
                ChartsFlotcharts.initPieCharts();
            });

        },

        initPieCharts: function () {
            // Data sample
//            data[0] = {
//                label: "Male",
//                data: 75
//            };

            // GRAPH; MALE TO FEMALE
            $.ajax({//create an ajax request to load_page.php
                type: "GET",
                url: "http://localhost/hrsoft/dashboard/pieChartDataEmployeMaleToFeMale",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (data) {
                    if ($('#pie_chart_male_to_female').size() !== 0) {
                        $.plot($("#pie_chart_male_to_female"), data, {
                            series: {
                                pie: {
                                    show: true,
                                    combine: {
                                        color: '#999',
                                        threshold: 0.1
                                    }
                                }
                            },
                            legend: {
                                show: false
                            }
                        });
                    }
                }
            });
            // GRAPH EMPLOYEE BY AGE GROUP
            $.ajax({//create an ajax request to load_page.php
                type: "GET",
                url: "http://localhost/hrsoft/dashboard/pieChartDataEmployeByAgeGroup",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (data) {
                    if ($('#pie_chart_by_age_group').size() !== 0) {
                        $.plot($("#pie_chart_by_age_group"), data, {
                            series: {
                                pie: {
                                    show: true,
                                    combine: {
                                        color: '#999',
                                        threshold: 0.1
                                    }
                                }
                            },
                            legend: {
                                show: false
                            }
                        });
                    }
                }
            });
            
        },
    };
}();

jQuery(document).ready(function () {
    ChartsFlotcharts.init();
    //ChartsFlotcharts.initCharts();
    ChartsFlotcharts.initPieCharts();
    //ChartsFlotcharts.initBarCharts();
    //ChartsFlotcharts.initAxisLabelsPlugin();
});