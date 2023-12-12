

// start of Dongunut chart
const chartData = {
    // labels: ["Mobile", "Computer", "TV"],
    labels: category,
    
    // data: [10, 5, 2],
    data: sales,
  };
  
  const myChart = document.querySelector(".my-chart");
  const ul = document.querySelector(".programming-stats .details ul");
  
  new Chart(myChart, {
    type: "doughnut",
    data: {
      labels: chartData.labels,
      datasets: [
        {
          label: "Sales",
          data: chartData.data,
        },
      ],
    },
    options: {
      borderWidth: 10,
      borderRadius: 2,
      hoverBorderWidth: 0,
      plugins: {
        legend: {
          position: 'bottom',
        },
      },
    },
  }); 
  const populateUl = () => {
    chartData.labels.forEach((l, i) => {
      let li = document.createElement("li");
      li.innerHTML = `${l}: <span class='percentage'>${chartData.data[i]}%</span>`;
      ul.appendChild(li);
    });
  };
  
  populateUl();
  // end of Doughnut Chart
  // ===============================================================================================================================
  // start of line chart
  // AREA CHART
var areaChartOptions = {
  series: [
    {
      name: 'Revenue',
      // data: [31, 40, 28, 51, 42, 109, 100,120, 200,100, 111,111],
      data: revenue,
    },
    {
      name: 'Orders',
      // data: [11, 32, 45, 32, 34, 52, 41, 30, 40, 30, 30, 30],
      data: orders,
    },
  ],
  chart: {
    type: 'area',
    background: 'transparent',
    height: 350,
    stacked: false,
    toolbar: {
      show: false,
    },
  },
  colors: ['#51459E', '#F25D3B'],
  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul','Aug','Sept','Oct','Nov','Dec'],
  dataLabels: {
    enabled: false,
  },
  fill: {
    gradient: {
      opacityFrom: 0.4,
      opacityTo: 0.1,
      shadeIntensity: 1,
      stops: [0, 100],
      type: 'vertical',
    },
    type: 'gradient',
  },
  grid: {
    borderColor: '#5B5858',
    yaxis: {
      lines: {
        show: true,
      },
    },
    xaxis: {
      lines: {
        show: true,
      },
    },
  },
  legend: {
    labels: {
      colors: '#51459E',
    },
    show: true,
    position: 'top',
  },
  markers: {
    size: 6,
    strokeColors: '#43E2B7',
    strokeWidth: 3,
  },
  stroke: {
    curve: 'smooth',
  },
  xaxis: {
    axisBorder: {
      color: '#51459E',
      show: true,
    },
    axisTicks: {
      color: '#55596e',
      show: true,
    },
    labels: {
      offsetY: 5,
      style: {
        colors: '#51459E',
      },
    },
  },
  yaxis: [
    {
      title: {
        text: 'Revenue',
        style: {
          color: '#51459E',
        },
      },
      labels: {
        style: {
          colors: ['#51459E'],
        },
      },
    },
    {
      opposite: true,
      title: {
        text: 'Orders',
        style: {
          color: '#51459E',
        },
      },
      labels: {
        style: {
          colors: ['#51459E'],
        },
      },
    },
  ],
  tooltip: {
    shared: true,
    intersect: false,
    theme: 'dark',
  },
};

var areaChart = new ApexCharts(
  document.querySelector('#area-chart'),
  areaChartOptions
);
areaChart.render();

  // end of line chart

// start of order date


// end of order date

  