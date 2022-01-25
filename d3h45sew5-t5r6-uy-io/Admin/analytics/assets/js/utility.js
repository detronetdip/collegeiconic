function reverseDate(date) {
  var ar = date.split("-");
  return ar[2] + "-" + ar[1] + "-" + ar[0];
}
function createLineChart(Data, id, title, hax) {
  google.charts.load("current", { packages: ["corechart"] });
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable(Data);

    var options = {
      title: title,
      hAxis: { title: hax, titleTextStyle: { color: "#333" } },
      vAxis: { minValue: 0, titleTextStyle: { color: "#333" } },
      curveType: "function",
      animation: {
        startup: true,
        duration: 1000,
        easing: "out",
      },
    };

    var chart = new google.visualization.LineChart(document.getElementById(id));
    chart.draw(data, options);
  }
}
function filterDates(raw) {
  return raw["Dates"];
}
function filterPages(raw) {
  return raw["Pages"];
}
function filterCountries(raw) {
  return raw["Countries"];
}
function filterDevices(raw) {
  return raw["Devices"];
}
function total(d){
  var totalClicks = 0;
  var totalImp = 0;
  d.forEach((date) => {
    totalClicks += +date["Clicks"];
    totalImp += +date["Impressions"];
  });
  var ctr=((totalClicks*100)/totalImp).toFixed(1);
  return [totalClicks,totalImp,ctr];
}
function createDataSetForDates(d) {
  var Data = [["Date", "Clicks", "Impressions", "CTR", "Position"]];
  d.forEach((date) => {
    var current = [
      reverseDate(date["Date"]),
      +date["Clicks"],
      +date["Impressions"],
      +date["CTR"].replace("%", ""),
      +date["Position"],
    ];
    Data.push(current);
  });
  return Data;
}
function createDataSetForPages(d) {
  var Data = [["Pages", "Clicks", "Impressions", "CTR", "Position"]];
  d.forEach((date) => {
    var current = [
      date["Top pages"],
      +date["Clicks"],
      +date["Impressions"],
      +date["CTR"].replace("%", ""),
      +date["Position"],
    ];
    Data.push(current);
  });
  return Data;
}
function createDataSetForCountries(d) {
  var Data = [["Countries", "Clicks", "Impressions", "CTR", "Position"]];
  d.forEach((date) => {
    var current = [
      date["Country"],
      +date["Clicks"],
      +date["Impressions"],
      +date["CTR"].replace("%", ""),
      +date["Position"],
    ];
    Data.push(current);
  });
  return Data;
}
function createDataSetForDevices(d) {
  var Data = [["Devices", "Clicks", "Impressions", "CTR", "Position"]];
  d.forEach((date) => {
    var current = [
      date["Device"],
      +date["Clicks"],
      +date["Impressions"],
      +date["CTR"].replace("%", ""),
      +date["Position"],
    ];
    Data.push(current);
  });
  return Data;
}
function createTableForDates(d) {
  var Data = "";
  d.forEach((date) => {
    Data += `
      <tr>
        <td> ${reverseDate(date["Date"])} </td>
        <td> ${date["Clicks"]} </td>
        <td> ${date["Impressions"]} </td>
        <td> ${date["CTR"]} </td>
        <td> ${date["Position"]} </td>
      </tr>
    `;
  });
  return Data;
}
function createTableForDevices(d) {
  var Data = "";
  d.forEach((date) => {
    Data += `
      <tr>
        <td> ${date["Device"]} </td>
        <td> ${date["Clicks"]} </td>
        <td> ${date["Impressions"]} </td>
        <td> ${date["CTR"]} </td>
        <td> ${date["Position"]} </td>
      </tr>
    `;
  });
  return Data;
}
function createTableForPages(d) {
  var Data = "";
  d.forEach((date) => {
    Data += `
      <tr>
        <td> ${date["Top pages"]} </td>
        <td> ${date["Clicks"]} </td>
        <td> ${date["Impressions"]} </td>
        <td> ${date["CTR"]} </td>
        <td> ${date["Position"]} </td>
      </tr>
    `;
  });
  return Data;
}
function createTableForCountries(d) {
  var Data = "";
  d.forEach((date) => {
    Data += `
      <tr>
        <td> ${date["Country"]} </td>
        <td> ${date["Clicks"]} </td>
        <td> ${date["Impressions"]} </td>
        <td> ${date["CTR"]} </td>
        <td> ${date["Position"]} </td>
      </tr>
    `;
  });
  return Data;
}
export {
  createLineChart,
  filterDates,
  filterPages,
  filterCountries,
  filterDevices,
  createDataSetForDates,
  createDataSetForPages,
  createDataSetForCountries,
  createDataSetForDevices,
  createTableForDates,
  createTableForDevices,
  createTableForPages,
  createTableForCountries,
  total
};
