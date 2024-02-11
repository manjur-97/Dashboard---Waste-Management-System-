
var options = {
    series: [44, 55],
    chart: {
        type: 'donut',
    },
    colors: ['#EDC43C', '#5AB89D'],
    plotOptions: {
        pie: {
            dataLabels: {
                enabled: false // Disable data labels
            }
        }
    },
    legend: {
        show: false // Hide the legend
    },
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
        }
    }]
};

var chart = new ApexCharts(document.querySelector("#chart1"), options);
chart.render();


var options = {
    series: [{
        data: [44, 55, 41, 37, 22, 43, 21, 10, 20],
        color: '#EDC43C'
    }, {
        data: [53, 32, 33, 52, 13, 43, 32, 32, 45],
        color: '#5AB89D'
    }],
    chart: {
        type: 'bar',
        height: 350,
        stacked: true,
    },
    plotOptions: {
        bar: {
            horizontal: true,
            dataLabels: {
                total: {
                    enabled: false,
                    offsetX: 0, // Adjust the position of the total value label
                    style: {
                        fontSize: '13px',
                        fontWeight: 900
                    }
                }
            }
        },
    },
    stroke: {
        width: 1,
        colors: ['#fff']
    },
    title: {
        text: 'Title Here'
    },
    xaxis: {
        categories: [2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016],
        labels: {
            formatter: function (val) {
                return val + "K"
            }
        }
    },
    yaxis: {
        title: {
            text: undefined
        },
        reversed: true,


    },
    tooltip: {
        y: {
            formatter: function (val) {
                return val + "K"
            }
        }
    },
    fill: {
        colors: ['#EDC43C', '#5AB89D'],
        opacity: 1
    },

    legend: {
        show: false, // Hide the legend
        position: 'top',
        horizontalAlign: 'left',
        offsetX: 40
    }
};

var chart = new ApexCharts(document.querySelector("#chart2"), options);
chart.render();



var options = {
    series: [{
        name: 'Marine Sprite',
        data: [44, 55, 41, 37, 22, 43, 21],
        color: '#EDC43C'
    }, {
        name: 'Striking Calf',
        data: [53, 32, 33, 52, 13, 43, 32],
        color: '#5AB89D'
    }],
    chart: {
        type: 'bar',
        height: 350
    },
    annotations: {
        xaxis: [{
            x: 500,
            borderColor: '#00E396',
            label: {
                borderColor: '#00E396',
                style: {
                    color: '#fff',
                    background: '#00E396',
                },
                text: 'X annotation',
            }
        }],
        yaxis: [{
            y: 'July',
            y2: 'September',
            label: {
                text: 'Y annotation'
            }
        }]
    },
    plotOptions: {
        bar: {
            horizontal: true,
        }
    },
    dataLabels: {
        enabled: true
    },
    xaxis: {
        categories: ['June', 'July', 'August', 'September', 'October', 'November', 'December'],
    },
    grid: {
        xaxis: {
            lines: {
                show: true
            }
        }
    },
    yaxis: {
        reversed: true,
        axisTicks: {
            show: true
        }
    },
    legend: {
        show: false // Hide the legend
    },
    fill: {
        colors: ['#EDC43C', '#5AB89D'],
        opacity: 1
    },
};

var chart = new ApexCharts(document.querySelector("#chart3"), options);
chart.render();

var options = {
    series: [{
        name: 'series1',
        data: [31, 40, 28, 51, 42, 109, 100]
    }, {
        name: 'series2',
        data: [11, 32, 45, 32, 34, 52, 41]
    }],
    chart: {
        height: 350,
        type: 'area'
    },
    dataLabels: {
        enabled: true // Enable data labels
    },
    markers: {
        size: 0 // Hide markers
    },
    stroke: {
        curve: 'smooth'
    },
    xaxis: {
        type: 'datetime',
        categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
    },
    tooltip: {
        x: {
            format: 'dd/MM/yy HH:mm'
        },
    },
};

var chart = new ApexCharts(document.querySelector("#chart4"), options);
chart.render();



var options = {
    series: [{
        name: 'Desktops',
        data: [{
            x: 'ABC',
            y: 10
        },
        {
            x: 'DEF',
            y: 60
        },
        {
            x: 'XYZ',
            y: 41
        }
        ]
    },
    {
        name: 'Mobile',
        data: [{
            x: 'ABCD',
            y: 10
        },
        {
            x: 'DEFG',
            y: 20
        },
        {
            x: 'WXYZ',
            y: 51
        },
        {
            x: 'PQR',
            y: 30
        },
        {
            x: 'MNO',
            y: 20
        },
        {
            x: 'CDE',
            y: 30
        }
        ]
    }
    ],
    legend: {
        show: false
    },
    chart: {
        height: 350,
        type: 'treemap'
    },
    title: {
        text: 'Multi-dimensional Treemap',
        align: 'center'
    }
};

var chart = new ApexCharts(document.querySelector("#chart5"), options);
chart.render();
