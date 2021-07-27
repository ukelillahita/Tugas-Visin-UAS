<!DOCTYPE HTML>
<html>
  <head>
    <link rel="stylesheet" href="design.css">
    <script>
window.onload = function () {
  var options = {
    title: {
      text: "Desktop OS Market Share in 2017"
    },
    subtitles: [{
      text: "As of November, 2017"
    }],
    animationEnabled: true,
    data: [{
      type: "pie",
      startAngle: 40,
      toolTipContent: "<b>{label}</b>: {y}%",
      showInLegend: "true",
      legendText: "{label}",
      indexLabelFontSize: 16,
      indexLabel: "{label} - {y}%",
      dataPoints: [
        { y: 48.36, label: "Windows 7" },
        { y: 26.85, label: "Windows 10" },
        { y: 1.49, label: "Windows 8" },
        { y: 6.98, label: "Windows XP" },
        { y: 6.53, label: "Windows 8.1" },
        { y: 2.45, label: "Linux" },
        { y: 3.32, label: "Mac OS X 10.12" },
        { y: 4.03, label: "Others" }
      ]
    }]
  };
  $("#os_review_chart").CanvasJSChart(options);
  var options = {
    animationEnabled: true,
    title:{
      text: "Stock Price of BMW - September"
    },
    axisX:{
      valueFormatString: "DD MMM",
      crosshair: {
        enabled: true,
        snapToDataPoint: true
      }
    },
    axisY: {
      title: "Closing Price (in USD)",
      includeZero: false,
      valueFormatString: "$##0.00",
      crosshair: {
        enabled: true,
        snapToDataPoint: true,
        labelFormatter: function(e) {
          return "$" + CanvasJS.formatNumber(e.value, "##0.00");
        }
      }
    },
    data: [{
      type: "area",
      xValueFormatString: "DD MMM",
      yValueFormatString: "$##0.00",
      dataPoints: [
        { x: new Date(2017, 08, 01), y: 85.83 },

        { x: new Date(2017, 08, 04), y: 84.42 },
        { x: new Date(2017, 08, 05), y: 84.97 },
        { x: new Date(2017, 08, 06), y: 84.89 },
        { x: new Date(2017, 08, 07), y: 84.78 },
        { x: new Date(2017, 08, 08), y: 85.09 },
        { x: new Date(2017, 08, 09), y: 85.14 },

        { x: new Date(2017, 08, 11), y: 84.46 },
        { x: new Date(2017, 08, 12), y: 84.71 },
        { x: new Date(2017, 08, 13), y: 84.62 },
        { x: new Date(2017, 08, 14), y: 84.83 },
        { x: new Date(2017, 08, 15), y: 84.37 },
        
        { x: new Date(2017, 08, 18), y: 84.07 },
        { x: new Date(2017, 08, 19), y: 83.60 },
        { x: new Date(2017, 08, 20), y: 82.85 },
        { x: new Date(2017, 08, 21), y: 82.52 },
        
        { x: new Date(2017, 08, 25), y: 82.65 },
        { x: new Date(2017, 08, 26), y: 81.76 },
        { x: new Date(2017, 08, 27), y: 80.50 },
        { x: new Date(2017, 08, 28), y: 79.13 },
        { x: new Date(2017, 08, 29), y: 79.00 }
      ]
    }]
  };

  $("#crosshair").CanvasJSChart(options);
  
  var chart = new CanvasJS.Chart("logarithm", {
    animationEnabled: true,
    zoomEnabled: true,
    theme: "dark2",
    title:{
      text: "Business Growth From 2000 to 2017"
    },
    axisX:{
      title: "Year",
      valueFormatString: "####",
      interval: 2
    },
    axisY:{
      logarithmic: true, //change it to false
      title: "Profit in USD (Log)",
      prefix: "$",
      titleFontColor: "#6D78AD",
      lineColor: "#6D78AD",
      gridThickness: 0,
      lineThickness: 1,
      //includeZero: false,
      labelFormatter: addSymbols
    },
    axisY2:{
      title: "Profit in USD",
      prefix: "$",
      titleFontColor: "#51CDA0",
      logarithmic: false, //change it to true
      lineColor: "#51CDA0",
      gridThickness: 0,
      lineThickness: 1,
      labelFormatter: addSymbols
    },
    legend:{
      verticalAlign: "top",
      fontSize: 16,
      dockInsidePlotArea: true
    },
    data: [{
      type: "line",
      xValueFormatString: "####",
      yValueFormatString: "$#,##0.##",
      showInLegend: true,
      name: "Log Scale",
      dataPoints: [
        { x: 2001, y: 8000 },
        { x: 2002, y: 20000 },
        { x: 2003, y: 40000 },
        { x: 2004, y: 60000 },
        { x: 2005, y: 90000 },
        { x: 2006, y: 140000 },
        { x: 2007, y: 200000 },
        { x: 2008, y: 400000 },
        { x: 2009, y: 600000 },
        { x: 2010, y: 800000 },
        { x: 2011, y: 900000 },
        { x: 2012, y: 1400000 }, 
        { x: 2013, y: 2000000 }, 
        { x: 2014, y: 4000000 }, 
        { x: 2015, y: 6000000 }, 
        { x: 2016, y: 8000000 }, 
        { x: 2017, y: 9000000 }
      ]
    },
    {
      type: "line",
      xValueFormatString: "####",
      yValueFormatString: "$#,##0.##",
      axisYType: "secondary",
      showInLegend: true,
      name: "Linear Scale",
      dataPoints: [
        { x: 2001, y: 8000 },
        { x: 2002, y: 20000 },
        { x: 2003, y: 40000 },
        { x: 2004, y: 60000 },
        { x: 2005, y: 90000 },
        { x: 2006, y: 140000 },
        { x: 2007, y: 200000 },
        { x: 2008, y: 400000 },
        { x: 2009, y: 600000 },
        { x: 2010, y: 800000 },
        { x: 2011, y: 900000 },
        { x: 2012, y: 1400000 }, 
        { x: 2013, y: 2000000 }, 
        { x: 2014, y: 4000000 }, 
        { x: 2015, y: 6000000 }, 
        { x: 2016, y: 8000000 }, 
        { x: 2017, y: 9000000 }
      ]
    }]
  });
  chart.render();

  function addSymbols(e){
    var suffixes = ["", "K", "M", "B"];

    var order = Math.max(Math.floor(Math.log(e.value) / Math.log(1000)), 0);
    if(order > suffixes.length - 1)
      order = suffixes.length - 1;

    var suffix = suffixes[order];
    return CanvasJS.formatNumber(e.value / Math.pow(1000, order)) + suffix;
  }

  var limit = 10000;    //increase number of dataPoints by increasing the limit
  var y = 100;    
  var data = [];
  var dataSeries = { type: "line" };
  var dataPoints = [];
  for (var i = 0; i < limit; i += 1) {
    y += Math.round(Math.random() * 10 - 5);
    dataPoints.push({
      x: i,
      y: y
    });
  }
  dataSeries.dataPoints = dataPoints;
  data.push(dataSeries);

  //Better to construct options first and then pass it as a parameter
  var options = {
    zoomEnabled: true,
    animationEnabled: true,
    title: {
      text: "Try Zooming - Panning"
    },
    axisY: {
      includeZero: false
    },
    data: data  // random data
  };

  $("#zoom").CanvasJSChart(options);
}
</script>
    <h1>Uke Lillahita<br/>
Nim 1800016153</h1>
  </head>
  <body>
    <div id="pie_container">
      <div id="os_review_chart"></div>
    </div>
    <div id="crosshair_container">
      <div id="crosshair"></div>
    </div>
    <div id="logarithm_container">
      <div id="logarithm"></div>
    </div>
    <div id="zoom_container">
      <div id="zoom"></div>
    </div>
    <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
  </body>
</html>