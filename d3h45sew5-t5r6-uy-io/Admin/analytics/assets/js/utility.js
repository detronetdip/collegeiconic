function reverseDate(t) {
  var e = t.split("-");
  return e[2] + "-" + e[1] + "-" + e[0];
}
function createLineChart(t, e, r, n) {
  google.charts.load("current", { packages: ["corechart"] }),
    google.charts.setOnLoadCallback(function () {
      var a = google.visualization.arrayToDataTable(t),
        i = {
          title: r,
          hAxis: { title: n, titleTextStyle: { color: "#333" } },
          vAxis: { minValue: 0, titleTextStyle: { color: "#333" } },
          curveType: "function",
          animation: { startup: !0, duration: 1e3, easing: "out" },
        };
      new google.visualization.LineChart(document.getElementById(e)).draw(a, i);
    });
}
function filterDates(t) {
  return t.Dates;
}
function filterPages(t) {
  return t.Pages;
}
function filterCountries(t) {
  return t.Countries;
}
function filterDevices(t) {
  return t.Devices;
}
function total(t) {
  var e = 0,
    r = 0;
  t.forEach((t) => {
    (e += +t.Clicks), (r += +t.Impressions);
  });
  var n = ((100 * e) / r).toFixed(1);
  return [e, r, n];
}
function createDataSetForDates(t) {
  var e = [["Date", "Clicks", "Impressions", "CTR", "Position"]];
  return (
    t.forEach((t) => {
      var r = [
        reverseDate(t.Date),
        +t.Clicks,
        +t.Impressions,
        +t.CTR.toString().replace("%", ""),
        +t.Position,
      ];
      e.push(r);
    }),
    e
  );
}
function createDataSetForPages(t) {
  var e = [["Pages", "Clicks", "Impressions", "CTR", "Position"]];
  return (
    t.forEach((t) => {
      var r = [
        t["Top pages"],
        +t.Clicks,
        +t.Impressions,
        +t.CTR.toString().replace("%", ""),
        +t.Position,
      ];
      e.push(r);
    }),
    e
  );
}
function createDataSetForCountries(t) {
  var e = [["Countries", "Clicks", "Impressions", "CTR", "Position"]];
  return (
    t.forEach((t) => {
      var r = [
        t.Country,
        +t.Clicks,
        +t.Impressions,
        +t.CTR.toString().replace("%", ""),
        +t.Position,
      ];
      e.push(r);
    }),
    e
  );
}
function createDataSetForDevices(t) {
  var e = [["Devices", "Clicks", "Impressions", "CTR", "Position"]];
  return (
    t.forEach((t) => {
      var r = [
        t.Device,
        +t.Clicks,
        +t.Impressions,
        +t.CTR.toString().replace("%", ""),
        +t.Position,
      ];
      e.push(r);
    }),
    e
  );
}
function createTableForDates(t) {
  var e = "";
  return (
    t.forEach((t) => {
      e += `\n      <tr>\n        <td> ${reverseDate(
        t.Date
      )} </td>\n        <td> ${t.Clicks} </td>\n        <td> ${
        t.Impressions
      } </td>\n        <td> ${t.CTR} </td>\n        <td> ${
        t.Position
      } </td>\n      </tr>\n    `;
    }),
    e
  );
}
function createTableForDevices(t) {
  var e = "";
  return (
    t.forEach((t) => {
      e += `\n      <tr>\n        <td> ${t.Device} </td>\n        <td> ${t.Clicks} </td>\n        <td> ${t.Impressions} </td>\n        <td> ${t.CTR} </td>\n        <td> ${t.Position} </td>\n      </tr>\n    `;
    }),
    e
  );
}
function createTableForPages(t) {
  var e = "";
  return (
    t.forEach((t) => {
      e += `\n      <tr>\n        <td> ${t["Top pages"]} </td>\n        <td> ${t.Clicks} </td>\n        <td> ${t.Impressions} </td>\n        <td> ${t.CTR} </td>\n        <td> ${t.Position} </td>\n      </tr>\n    `;
    }),
    e
  );
}
function createTableForCountries(t) {
  var e = "";
  return (
    t.forEach((t) => {
      e += `\n      <tr>\n        <td> ${t.Country} </td>\n        <td> ${t.Clicks} </td>\n        <td> ${t.Impressions} </td>\n        <td> ${t.CTR} </td>\n        <td> ${t.Position} </td>\n      </tr>\n    `;
    }),
    e
  );
}
function createDataSetIndividual(t, e) {
  return t.map((t, r) => [t[0], t[e]]);
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
  total,
  createDataSetIndividual,
};
