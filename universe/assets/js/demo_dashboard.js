$(function () {
    /* reportrange */
    if ($("#reportrange").length > 0) {
        $("#reportrange").daterangepicker({
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            opens: 'left',
            buttonClasses: ['btn btn-default'],
            applyClass: 'btn-small btn-primary',
            cancelClass: 'btn-small',
            format: 'MM.DD.YYYY',
            separator: ' to ',
            startDate: moment().subtract('days', 29),
            endDate: moment()
        }, function (start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        });

        $("#reportrange span").html(moment().subtract('days', 29).format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
    }
    /* end reportrange */

    /* Rickshaw dashboard chart */
    var seriesData = [[], []];
    var random = new Rickshaw.Fixtures.RandomData(30);

    for (var i = 0; i < 30; i++) {
        random.addData(seriesData);
    }

    var rdc = new Rickshaw.Graph({
        element: document.getElementById("dashboard-chart"),
        renderer: 'area',
        width: $("#dashboard-chart").width(),
        height: 250,
        series: [{
                color: "#33414E",
                data: [
                    {x: 1472788800, y: 305, },
                    {x: 1472875200, y: 538, },
                    {x: 1472961600, y: 425, },
                    {x: 1473048000, y: 230, },
                    {x: 1473134400, y: 370, },
                    {x: 1473220800, y: 224, },
                    {x: 1473307200, y: 298, },
                    {x: 1473393600, y: 482, },
                    {x: 1473480000, y: 354, },
                    {x: 1473566400, y: 252, },
                    {x: 1473652800, y: 264, },
                    {x: 1473739200, y: 410, },
                    {x: 1473825600, y: 507, },
                    {x: 1473912000, y: 547, },
                    {x: 1473998400, y: 464, },
                    {x: 1474084800, y: 397, },
                    {x: 1474171200, y: 491, },
                    {x: 1474257600, y: 343, },
                    {x: 1474344000, y: 532, },
                    {x: 1474430400, y: 332, },
                    {x: 1474516800, y: 257, },
                    {x: 1474603200, y: 346, },
                    {x: 1474689600, y: 228, },
                    {x: 1474776000, y: 541, },
                    {x: 1474862400, y: 374, },
                    {x: 1474948800, y: 476, },
                    {x: 1475035200, y: 364, },
                    {x: 1475121600, y: 387, },
                    {x: 1475208000, y: 219, },
                    {x: 1475294400, y: 407, },
                ],
                name: 'Histórico de ventas CHIP'
            }, {
                color: "#3FBAE4",
                data: [
                    {x: 1472788800, y: 306, },
                    {x: 1472875200, y: 272, },
                    {x: 1472961600, y: 274, },
                    {x: 1473048000, y: 251, },
                    {x: 1473134400, y: 401, },
                    {x: 1473220800, y: 545, },
                    {x: 1473307200, y: 478, },
                    {x: 1473393600, y: 254, },
                    {x: 1473480000, y: 536, },
                    {x: 1473566400, y: 367, },
                    {x: 1473652800, y: 385, },
                    {x: 1473739200, y: 459, },
                    {x: 1473825600, y: 519, },
                    {x: 1473912000, y: 203, },
                    {x: 1473998400, y: 503, },
                    {x: 1474084800, y: 309, },
                    {x: 1474171200, y: 398, },
                    {x: 1474257600, y: 327, },
                    {x: 1474344000, y: 278, },
                    {x: 1474430400, y: 429, },
                    {x: 1474516800, y: 424, },
                    {x: 1474603200, y: 413, },
                    {x: 1474689600, y: 244, },
                    {x: 1474776000, y: 509, },
                    {x: 1474862400, y: 544, },
                    {x: 1474948800, y: 417, },
                    {x: 1475035200, y: 284, },
                    {x: 1475121600, y: 455, },
                    {x: 1475208000, y: 331, },
                    {x: 1475294400, y: 271, },
                ],
                name: 'Histórico de ventas KIT'
            }]
    });

    rdc.render();



    var legend = new Rickshaw.Graph.Legend({graph: rdc, element: document.getElementById('dashboard-legend')});
    var shelving = new Rickshaw.Graph.Behavior.Series.Toggle({graph: rdc, legend: legend});
    var order = new Rickshaw.Graph.Behavior.Series.Order({graph: rdc, legend: legend});
    var highlight = new Rickshaw.Graph.Behavior.Series.Highlight({graph: rdc, legend: legend});

    var rdc_resize = function () {
        rdc.configure({
            width: $("#dashboard-chart").width(),
            height: $("#dashboard-chart").height()
        });
        rdc.render();
    }

    var hoverDetail = new Rickshaw.Graph.HoverDetail({graph: rdc});

    window.addEventListener('resize', rdc_resize);

    rdc_resize();
    /* END Rickshaw dashboard chart */

    /* Donut dashboard chart */
    Morris.Donut({
        element: 'dashboard-donut-1',
        data: [
            {label: "CHIP", value: 2513},
            {label: "KIT", value: 764},
        ],
        colors: ['#33414E', '#3FBAE4', '#FEA223'],
        resize: true
    });
    /* END Donut dashboard chart */

    /* Bar dashboard chart */
    Morris.Bar({
        element: 'dashboard-bar-1',
        data: [
            {y: 'Marzo', a: 25.783, b: 8.010},
            {y: 'Abril', a: 19.030, b: 9.909},
            {y: 'Mayo', a: 20.599, b: 7.623},
            {y: 'Junio', a: 22.700, b: 7.924},
            {y: 'Julio', a: 21.432, b: 9.943},
            {y: 'Agosto', a: 22.588, b: 9.604}
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['CHIP', 'KIT'],
        barColors: ['#33414E', '#3FBAE4'],
        gridTextSize: '10px',
        hideHover: true,
        resize: true,
        gridLineColor: '#E5E5E5'
    });
    /* END Bar dashboard chart */

    /* Line dashboard chart */
    Morris.Line({
        element: 'dashboard-line-1',
        data: [
            {y: '2016-06-30', a: 4.79, b: -1.75},
            {y: '2016-07-31', a: 4.52, b: 0.36},
            {y: '2016-08-31', a: 4.81, b: 2.56},
            {y: '2016-09-30', a: 4.69, b: 2.04},
            {y: '2016-10-31', a: 4.57, b: 1.54},
            {y: '2016-11-30', a: 4.39, b: 0.87},
            {y: '2016-12-31', a: 4.40, b: 1.95}
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['CHIP', 'KIT'],
        resize: true,
        hideHover: true,
        xLabels: 'day',
        gridTextSize: '10px',
        lineColors: ['#3FBAE4', '#33414E'],
        gridLineColor: '#E5E5E5'
    });
    /* EMD Line dashboard chart */

    /* Vector Map */
    var jvm_wm = new jvm.WorldMap({container: $('#dashboard-map-seles'),
        map: 'world_mill_en',
        backgroundColor: '#FFFFFF',
        regionsSelectable: true,
        regionStyle: {selected: {fill: '#B64645'},
            initial: {fill: '#33414E'}},
        markerStyle: {initial: {fill: '#3FBAE4',
                stroke: '#3FBAE4'}},
        markers: [{latLng: [50.27, 30.31], name: 'Kyiv - 1'},
            {latLng: [52.52, 13.40], name: 'Berlin - 2'},
            {latLng: [48.85, 2.35], name: 'Paris - 1'},
            {latLng: [51.51, -0.13], name: 'London - 3'},
            {latLng: [40.71, -74.00], name: 'New York - 5'},
            {latLng: [35.38, 139.69], name: 'Tokyo - 12'},
            {latLng: [37.78, -122.41], name: 'San Francisco - 8'},
            {latLng: [28.61, 77.20], name: 'New Delhi - 4'},
            {latLng: [39.91, 116.39], name: 'Beijing - 3'}]
    });
    /* END Vector Map */


    $(".x-navigation-minimize").on("click", function () {
        setTimeout(function () {
            rdc_resize();
        }, 200);
    });


});

