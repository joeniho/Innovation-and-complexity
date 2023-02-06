//sidebar toggle

var sidebaropen = false;
var sidebar = document.getElementById("sidebar");

function opensidebar(){
    if(!sidebaropen){
        sidebar.classList.add("sidebar-responsive");
        sidebaropen = true;
    }
}

function closesidebar() {
    if(!sidebaropen) {
        sidebar.classList.remove("sidebar-responsive");
        sidebaropen = false;
    }
}

// -------------------charts----------------
//barchart

var barchatoptions = {
    series: [{
    data: [10, 8, 6, 4, 2]
  }],
    chart: {
    type: 'bar',
    height: 350,
    toolbar: {
        show: false
    },
  },
  colors: [ //color for the bar chart
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
      horizontal: false,// to show vertical
      columnwidth: '100%',
    }
  },
  dataLabels: {
    enabled: false
  },
  legend:{
    show: false
  },
  xaxis: {
    categories: ["February", "march","April", "May", "June", "July", "August", "September", "October", "November", "December","January"],
  }
  yaxis: {
    title: {
        text: "count"
    }
  }
  };

  var barchart = new ApexCharts(document.querySelector("#bar-chart"), barchartoptions);
  barchart.render();

