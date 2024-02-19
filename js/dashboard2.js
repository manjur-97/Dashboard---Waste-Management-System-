
var options = {
    series: [
        {
            name: 'Bin Collect',
            group: 'budget',
            data: [44000, 55000, 41000, 67000]
        },
        {
            name: 'Bin Not Collect',
            group: 'actual',
            data: [48000, 50000, 40000, 65000]
        },

    ],
    chart: {
        type: 'bar',
        height: 350,
        stacked: true,
    },
    stroke: {
        width: 1,
        colors: ['#fff']
    },
    dataLabels: {
        formatter: (val) => {
            return val / 1000 + 'K'
        }
    },
    plotOptions: {
        bar: {
            horizontal: false
        }
    },
    xaxis: {
        categories: [
            '09-2-24',
            '10-2-24',
            '11-2-24',
            '12-2-24',

        ]
    },
    fill: {
        opacity: 1
    },
    colors: ['#80c7fd', '#008FFB', '#80f1cb', '#00E396'],
    yaxis: {
        labels: {
            formatter: (val) => {
                return val / 1000 + 'K'
            }
        }
    },
    legend: {
        position: 'top',
        horizontalAlign: 'left'
    }
};

var chart = new ApexCharts(document.querySelector("#chart1"), options);
chart.render();

var options = {
    series: [
        {
            name: 'Bin Collect',
            group: 'budget',
            data: [44000, 55000, 41000, 67000]
        },
        {
            name: 'Bin Not Collect',
            group: 'actual',
            data: [48000, 50000, 40000, 65000]
        },

    ],
    chart: {
        type: 'bar',
        height: 350,
        stacked: true,
    },
    stroke: {
        width: 1,
        colors: ['#fff']
    },
    dataLabels: {
        formatter: (val) => {
            return val / 1000 + 'K'
        }
    },
    plotOptions: {
        bar: {
            horizontal: false
        }
    },
    xaxis: {
        categories: [
            '09-2-24',
            '10-2-24',
            '11-2-24',
            '12-2-24',

        ]
    },
    fill: {
        opacity: 1
    },
    colors: ['#80c7fd', '#008FFB', '#80f1cb', '#00E396'],
    yaxis: {
        labels: {
            formatter: (val) => {
                return val / 1000 + 'K'
            }
        }
    },
    legend: {
        position: 'top',
        horizontalAlign: 'left'
    }
};

var chart = new ApexCharts(document.querySelector("#chart2"), options);
chart.render();

var options = {
    series: [
        {
            name: 'Bin Collect',
            group: 'budget',
            data: [44000, 55000, 41000, 67000]
        },
        {
            name: 'Bin Not Collect',
            group: 'actual',
            data: [48000, 50000, 40000, 65000]
        },

    ],
    chart: {
        type: 'bar',
        height: 350,
        stacked: true,
    },
    stroke: {
        width: 1,
        colors: ['#fff']
    },
    dataLabels: {
        formatter: (val) => {
            return val / 1000 + 'K'
        }
    },
    plotOptions: {
        bar: {
            horizontal: false
        }
    },
    xaxis: {
        categories: [
            '09-2-24',
            '10-2-24',
            '11-2-24',
            '12-2-24',

        ]
    },
    fill: {
        opacity: 1
    },
    colors: ['#80c7fd', '#008FFB', '#80f1cb', '#00E396'],
    yaxis: {
        labels: {
            formatter: (val) => {
                return val / 1000 + 'K'
            }
        }
    },
    legend: {
        position: 'top',
        horizontalAlign: 'left'
    }
};

var chart = new ApexCharts(document.querySelector("#chart3"), options);
chart.render();

var options = {
    series: [44, 55],
    chart: {
        width: 380,
        type: 'donut',
    },
    plotOptions: {
        pie: {
            startAngle: -90,
            endAngle: 270
        }
    },
    dataLabels: {
        enabled: false
    },
    fill: {
        type: 'gradient',
    },
    legend: {
        formatter: function (val, opts) {
            return val + " - " + opts.w.globals.series[opts.seriesIndex]
        }
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

var chart = new ApexCharts(document.querySelector("#chart4"), options);
chart.render();
var options = {
    series: [44, 55],
    chart: {
        width: 380,
        type: 'donut',
    },
    plotOptions: {
        pie: {
            startAngle: -90,
            endAngle: 270
        }
    },
    dataLabels: {
        enabled: false
    },
    fill: {
        type: 'gradient',
    },
    legend: {
        formatter: function (val, opts) {
            return val 
        }
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

var chart = new ApexCharts(document.querySelector("#chart5"), options);
chart.render();

var options = {
    series: [44, 55],
    chart: {
        width: 380,
        type: 'donut',
    },
    plotOptions: {
        pie: {
            startAngle: -90,
            endAngle: 270
        }
    },
    dataLabels: {
        enabled: false
    },
    fill: {
        type: 'gradient',
    },
    legend: {
        formatter: function (val, opts) {
            return val + " - " + opts.w.globals.series[opts.seriesIndex]
        }
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

var chart = new ApexCharts(document.querySelector("#chart6"), options);
chart.render();

