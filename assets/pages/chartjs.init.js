/**
Template Name: Ubold Dashboard
Author: CoderThemes
Email: coderthemes@gmail.com
File: Chartjs
*/


!function($) {
    "use strict";

    var ChartJs = function() {};

    ChartJs.prototype.respChart = function respChart(selector,type,data, options) {
        // get selector by context
        var ctx = selector.get(0).getContext("2d");
        // pointing parent container to make chart js inherit its width
        var container = $(selector).parent();

        // enable resizing matter
        $(window).resize( generateChart );

        // this function produce the responsive Chart JS
        function generateChart(){
            // make chart width fit with its container
            var ww = selector.attr('width', $(container).width() );
            switch(type){
                case 'Line':
                    new Chart(ctx).Line(data, options);
                    break;
                case 'Doughnut':
                    new Chart(ctx).Doughnut(data, options);
                    break;
                case 'Pie':
                    new Chart(ctx).Pie(data, options);
                    break;
                case 'Bar':
                    new Chart(ctx).Bar(data, options);
                    break;
                case 'Radar':
                    new Chart(ctx).Radar(data, options);
                    break;
                case 'PolarArea':
                    new Chart(ctx).PolarArea(data, options);
                    break;
            }
            // Initiate new chart or Redraw

        };
        // run function - render chart at first load
        generateChart();
    },
    //init
    ChartJs.prototype.init = function() {
        //creating lineChart
        var LineChart = {
            labels : ["January","February","March","April","May","June","July"],
            datasets : [
                {
                    fillColor : "rgba(126, 87, 194, 0.5)",
                    strokeColor : "rgba(126, 87, 194, 1)",
                    pointColor : "rgba(126, 87, 194, 1)",
                    pointStrokeColor : "#fff",
                    data : [33,52,63,92,50,53,46]
                },
                {
                    fillColor : "rgba(52, 211, 235, 0.5)",
                    strokeColor : "rgba(52, 211, 235, 1)",
                    pointColor : "rgba(52, 211, 235, 1)",
                    pointStrokeColor : "#fff",
                    data : [22,20,30,60,29,25,12]
                }
                
            ]
        };
        
        this.respChart($("#lineChart"),'Line',LineChart);

        //donut chart
        var DonutChart = [
            {
                value: 300,
                color: "#7e57c2",
                highlight: "#7e57c2",
                label: "Chrome"
            }, {
                value: 70,
                color: "#34d3eb",
                highlight: "#34d3eb",
                label: "IE"
            }, {
                value: 90,
                color: "#ebeff2",
                highlight: "#ebeff2",
                label: "Other"
            }

        ]
        this.respChart($("#doughnut"),'Doughnut',DonutChart);


        //Pie chart
        var PieChart = [
            {
                value: 40,
                color:"#ebeff2",
                label: "IE"
            },
            {
                value : 80,
                color : "#7e57c2",
                label: "Chrome"
            },
            {
                value : 70,
                color : "#34d3eb",
                label: "Safari"
            }
        ]
        this.respChart($("#pie"),'Pie',PieChart);


        //barchart
        var BarChart = {
            labels : ["January","February","March","April","May","June","July"],
            datasets : [
                {
                    fillColor: 'rgba(52, 211, 235, 0.7)',
                    strokeColor: 'rgba(52, 211, 235, 1)',
                    highlightFill: 'rgba(52, 211, 235, 1)',
                    highlightStroke: 'rgba(52, 211, 235, 1)',
                    data : [65,59,90,81,56,55,40]
                },
                {
                    fillColor: 'rgba(235, 239, 242, 0.7)',
                    strokeColor: 'rgba(235, 239, 242, 1)',
                    highlightFill: 'rgba(235, 239, 242, 1)',
                    highlightStroke: 'rgba(235, 239, 242, 0.9)',
                    data : [28,48,40,19,96,27,100]
                }
            ]
        }
        this.respChart($("#bar"),'Bar',BarChart);
        
        
        //barchart-Single
        var BarChartSingle = {
            labels : ["January","February","March","April","May","June","July","August","September","October","November","December"],
            datasets : [
                {
                    fillColor: '#ebeff2',
                    strokeColor: '#ebeff2',
                    highlightFill: '#34d3eb',
                    highlightStroke: '#34d3eb',
                    data : [65,59,90,81,56,55,40,34,50,35,90,75]
                }
            ]
        }
        this.respChart($("#bar-single"),'Bar',BarChartSingle);

        //radar chart
        var RadarChart = {
            labels : ["Eating","Drinking","Sleeping","Designing","Coding","Partying","Running"],
            datasets : [
                {
                    fillColor : "rgba(126, 87, 194, 0.5)",
                    strokeColor : "rgba(126, 87, 194, 0.8)",
                    pointColor : "rgba(126, 87, 194, 1)",
                    pointStrokeColor : "#fff",
                    data : [65,59,90,81,56,55,40]
                },
                {
                    fillColor : "rgba(52, 211, 235, 0.5)",
                    strokeColor : "rgba(52, 211, 235, 0.8)",
                    pointColor : "rgba(52, 211, 235, 1)",
                    pointStrokeColor : "#fff",
                    data : [28,48,40,19,96,27,100]
                }
            ]
        }
        this.respChart($("#radar"),'Radar',RadarChart);

        //Polar area chart
        var PolarChart = [
            
            {
                value : 90,
                color: "#7e57c2",
                label: "Chrom"
            },
            {
                value : 24,
                color: "#1a2942",
                label: "Firefox"
            },
            {
                value : 58,
                color: "#34d3eb",
                label: "Other"
            },
            
            {
                value : 42,
                color: "#ebeff2",
                label: "IE9+"
            }
        ]
        this.respChart($("#polarArea"),'PolarArea',PolarChart);
    },
    $.ChartJs = new ChartJs, $.ChartJs.Constructor = ChartJs

}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.ChartJs.init()
}(window.jQuery);

