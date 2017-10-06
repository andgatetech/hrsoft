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
            $.ajax({
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
            $.ajax({
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

            // GRAPH EMPLOYEE BY TYPES
            $.ajax({
                type: "GET",
                url: "http://localhost/hrsoft/dashboard/pieChartDataEmployeByTypes",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (data) {
                    if ($('#pie_chart_by_types').size() !== 0) {
                        $.plot($("#pie_chart_by_types"), data, {
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

            // GRAPH EMPLOYEE BY CATEGORIES
            $.ajax({
                type: "GET",
                url: "http://localhost/hrsoft/dashboard/pieChartDataEmployeByCategories",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (data) {
                    if ($('#pie_chart_by_categories').size() !== 0) {
                        $.plot($("#pie_chart_by_categories"), data, {
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

            // DONUT: TOTAL EMPLOYEE
            $.ajax({
                type: "GET",
                url: "http://localhost/hrsoft/employee/donatChartDataTotalEmployee",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (data) {
                    if ($('#donat_chart_total_employee').size() !== 0) {
                        $.plot($("#donat_chart_total_employee"), data, {
                            series: {
                                pie: {
                                    innerRadius: 0.8,
                                    show: true
                                }
                            }
                        });
                    }
                }
            });
            
            // DONUT: ACTIVE EMPLOYEE
            $.ajax({
                type: "GET",
                url: "http://localhost/hrsoft/employee/donatChartDataActiveEmployee",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (data) {
                    if ($('#donat_chart_active_employee').size() !== 0) {
                        $.plot($("#donat_chart_active_employee"), data, {
                            series: {
                                pie: {
                                    innerRadius: 0.8,
                                    show: true
                                }
                            }
                        });
                    }
                }
            });
            
            // DONUT: INACTIVE EMPLOYEE
            $.ajax({
                type: "GET",
                url: "http://localhost/hrsoft/employee/donatChartDataInActiveEmployee",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (data) {
                    if ($('#donat_chart_inactive_employee').size() !== 0) {
                        $.plot($("#donat_chart_inactive_employee"), data, {
                            series: {
                                pie: {
                                    innerRadius: 0.8,
                                    show: true
                                }
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