const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");

menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
})

closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})

// CHARTS

// AREA CHART BÁN CHẠY/Ế
var areaChartOption = {
    series: [{
    name: 'Cupcake Redvelvet',
    data: [9, 20, 36, 48, 63, 86, 105]
  }, {
    name: 'Cookies Chocolate Chip',
    data: [8, 11, 15, 20, 26, 30, 28]
  }],
    chart: {
    height: 350,
    type: 'area',
    toolbar: {
        show: false,
    },
  },
  color:[
    "#4f35a1",
    "#246dec"
  ],
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: 'smooth'
  },
  labels: ['T2', 'T3','T4','T5','T6','T7','CN'],
  markers: {
    size: 0
  },
  yaxis: [
    {
      title: {
        text: 'Bán chạy',
      },
    },
    {
      opposite: true,
      title: {
        text: 'Bán ế',
      },
    },
  ],
  tooltip: {
    shared: true,
    intersect: false,
  }
  };                                                   // id
  var areachart = new ApexCharts(document.querySelector("#area-chart"), areaChartOption);
  areachart.render();

// BAR CHART TOP 5 KHÁCH HÀNG
var barChartOptions = {
    series: [{
    data: [21, 18, 16, 14, 10]
  }],
    chart: {
    type: 'bar',
    height: 350,
    toolbar:{
        show: false
    },
  },
  color: [
    "#246dec",
    "#cc3c43",
    "#367952",
    "#f5b74f",
    "#4f35a1"
  ],
  plotOptions: {
    bar: {
      distributed: true,
      borderRadius: 4,
      horizontal: false,
      columnWidth: "40%",
    }
  },
  dataLabels: {
    enabled: false
  },
  legend: {
    show: false
  },
  xaxis: {
    categories: ["KH001", "KH003", "KH006", "KH008", "KH012"],
  },
  yaxis: {
    title: {
        text: "Số lượng đơn"
    }
  },
  };                                                  // id
  var barChart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
  barChart.render();

// LINE CHART DOANH THU
var lineChartOptions = {
    series: [{
      name: "Triệu đồng",
      data: [10, 41, 35, 51, 49, 62, 69, 91, 108, 98, 102, 104]
  }],
    chart: {
    height: 350,
    type: 'line',
    zoom: {
      enabled: false
    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    curve: 'straight'
  },
  grid: {
    row: {
      colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
      opacity: 0.5
    },
  },
  xaxis: {
    categories: ['T1', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7', 'T8', 'T9', 'T10', 'T11', 'T12'],
  }
  };                                                   // id
  var lineChart = new ApexCharts(document.querySelector("#line-chart"), lineChartOptions);
  lineChart.render();