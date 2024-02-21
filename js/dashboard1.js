// Dischange According Condition Chart start here
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

// Dischange According Condition Chart end here

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
        toolbar: {
            show: false // Hide the chart's menu
        }
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
    xaxis: {
        categories: ['Project-1', 'Project-1', 'Project-2', 'Project-3', 'Project-4', 'Project-5', 'Project-6', 'Project-7', 'Project-8'],
        labels: {
            show: false, // Hide x-axis labels
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
        data: [44, 55, 41, 37, 22],
        color: '#EDC43C'
    }, {
        data: [53, 32, 33, 52, 13],
        color: '#5AB89D'
    }],
    chart: {
        type: 'bar',
        height: 350,
        stacked: true,
        toolbar: {
            show: false // Hide the chart's menu
        }
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
    xaxis: {
        categories: [2008, 2009, 2010, 2011, 2012],
        labels: {
            show: false, // Hide x-axis labels
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
    },
    dataLabels: {
        enabled: false // Hide the bottom level (footer)
    }
};

var chart = new ApexCharts(document.querySelector("#chart3"), options);
chart.render();




var options = {
    series: [{
        name: 'north',
        data: [{
            x: 1996,
            y: 322
          },
          {
            x: 1997,
            y: 124
          },
          {
            x: 1998,
            y: 229
          },
          {
            x: 1999,
            y: 0
          },
          {
            x: 2000,
            y: 348
          },

        ]
      },
      {
        name: 'south',
        data: [{
            x: 1996,
            y: 10
          },
          {
            x: 1997,
            y: 190
          },
          {
            x: 1998,
            y: 350
          },
          {
            x: 1999,
            y: 77
          },
          {
            x: 2000,
            y: 35
          },

        ]
      }
    ],
    chart: {
      type: 'area',
      height: 350,
      toolbar: {
        show: false // Hide the toolbar
      }
    },
    dataLabels: {
      enabled: true // Enable data labels
    },
    stroke: {
      curve: 'straight'
    },
    title: {
      text: '', // Empty title to hide it
    },
    xaxis: {
      type: 'datetime',
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      }
    },
    yaxis: {
      tickAmount: 4,
      floating: false,

      labels: {
        style: {
          colors: '#8e8da4',
        },
        offsetY: -7,
        offsetX: 0,
      },
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false
      }
    },
    fill: {
      opacity: 0.5
    },
    tooltip: {
      x: {
        format: "yyyy",
      },
      fixed: {
        enabled: false,
        position: 'topRight'
      },
      show: false
    },
    grid: {
      yaxis: {
        lines: {
          offsetX: -30
        }
      },
      padding: {
        left: 20
      }
    }
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

var options = {
    series: [70],
    colors: ['#5AB89E'],
    chart: {
        type: 'radialBar',
    },
    plotOptions: {
        radialBar: {
            hollow: {
                size: '50%',
            },
            dataLabels: {
                show: false,
            },
            track: {
                background: '#EAEAEA', // Set the color of the track
            }
        }
    }
};

var chart = new ApexCharts(document.querySelector("#percentange_of_unload"), options);
chart.render();


var options = {
    series: [70],
    colors: ['#FFD625'],
    chart: {
       
        type: 'radialBar',
    },
    plotOptions: {
        radialBar: {
            hollow: {
                size: '50%',
            },
            dataLabels: {
                show: false,
            },
          
        },
    },
    labels: [''],
};

var chart = new ApexCharts(document.querySelector("#percentange_of_unload2"), options);
chart.render();


