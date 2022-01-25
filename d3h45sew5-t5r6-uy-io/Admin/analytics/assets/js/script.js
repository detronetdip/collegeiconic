import { rawData } from "./data.js";
import {
  createLineChart,
  filterDates,
  filterPages,
  filterCountries,
  filterDevices,
  createDataSetForPages,
  createDataSetForDates,
  createDataSetForCountries,
  createDataSetForDevices,
  createTableForDates,
  createTableForDevices,
  createTableForPages,
  createTableForCountries,
  total,
} from "./utility.js";
var dates = filterDates(rawData);
var pages = filterPages(rawData);
var countries = filterCountries(rawData);
var devices = filterDevices(rawData);
var dateDataSet = createDataSetForDates(dates.reverse());
var pageDataSet = createDataSetForPages(pages.reverse());
var countryDataset = createDataSetForCountries(countries.reverse());
var deviceDataset = createDataSetForDevices(devices.reverse());
var total_=total(devices.reverse())
var ttlclk=document.getElementById("ttlclk");
var ttlimp=document.getElementById("ttlimp");
var ttlctr=document.getElementById("ttlctr");
ttlclk.innerHTML=total_[0]
ttlimp.innerHTML=total_[1]
ttlctr.innerHTML=total_[2]+"%"
document.getElementById("rawdatatable").innerHTML = createTableForDates(dates);
document.getElementById("cp").innerHTML = "Date";
createLineChart(
  deviceDataset,
  "chart_div4",
  "Performance based on devices",
  "Device"
);
document.getElementById("rawdatatable").innerHTML =
  createTableForDevices(devices);
document.getElementById("cp").innerHTML = "Device";
document.addEventListener("refreshCountry", () => {
  createLineChart(
    countryDataset,
    "chart_div3",
    "Performance based on countries",
    "Countries"
  );
  document.getElementById("rawdatatable").innerHTML =
    createTableForCountries(countries);
  document.getElementById("cp").innerHTML = "Country";
});
document.addEventListener("refreshDate", () => {
  createLineChart(
    dateDataSet,
    "chart_div",
    "Performance based on dates",
    "Dates"
  );
  document.getElementById("rawdatatable").innerHTML =
    createTableForDates(dates);
  document.getElementById("cp").innerHTML = "Date";
});
document.addEventListener("refreshDevice", () => {
  createLineChart(
    deviceDataset,
    "chart_div4",
    "Performance based on devices",
    "Device"
  );
  document.getElementById("rawdatatable").innerHTML =
    createTableForDevices(devices);
  document.getElementById("cp").innerHTML = "Device";
});
document.addEventListener("refreshPage", () => {
  createLineChart(
    pageDataSet,
    "chart_div2",
    "Performance based on pages",
    "Pages"
  );
  document.getElementById("rawdatatable").innerHTML =
    createTableForPages(pages);
  document.getElementById("cp").innerHTML = "Page";
});
