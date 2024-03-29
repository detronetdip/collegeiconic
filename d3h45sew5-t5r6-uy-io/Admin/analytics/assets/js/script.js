import rawData  from "./data.json" assert { type: "json" };;
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
  createDataSetIndividual,
} from "./utility.js";
var currentActive = { div: null, dataSet: null },
  dates = filterDates(rawData),
  pages = filterPages(rawData),
  countries = filterCountries(rawData),
  devices = filterDevices(rawData),
  dateDataSet = createDataSetForDates(dates.reverse()),
  pageDataSet = createDataSetForPages(pages.reverse()),
  countryDataset = createDataSetForCountries(countries.reverse()),
  deviceDataset = createDataSetForDevices(devices.reverse()),
  total_ = total(devices.reverse()),
  ttlclk = document.getElementById("ttlclk"),
  ttlimp = document.getElementById("ttlimp"),
  ttlctr = document.getElementById("ttlctr");
function setCurrent(e, t) {
  currentActive = { div: e, dataSet: t };
}
(ttlclk.innerHTML = total_[0]),
  (ttlimp.innerHTML = total_[1]),
  (ttlctr.innerHTML = total_[2] + "%"),
  (document.getElementById("rawdatatable").innerHTML =
    createTableForDates(dates)),
  (document.getElementById("cp").innerHTML = "Date"),
  createLineChart(
    deviceDataset,
    "chart_div4",
    "Performance based on devices",
    "Device"
  ),
  setCurrent("chart_div4", deviceDataset),
  (document.getElementById("rawdatatable").innerHTML =
    createTableForDevices(devices)),
  (document.getElementById("cp").innerHTML = "Device"),
  document.addEventListener("refreshCountry", () => {
    createLineChart(
      countryDataset,
      "chart_div3",
      "Performance based on countries",
      "Countries"
    ),
      (document.getElementById("rawdatatable").innerHTML =
        createTableForCountries(countries)),
      (document.getElementById("cp").innerHTML = "Country"),
      setCurrent("chart_div3", countryDataset);
  }),
  document.addEventListener("refreshDate", () => {
    createLineChart(
      dateDataSet,
      "chart_div",
      "Performance based on dates",
      "Dates"
    ),
      (document.getElementById("rawdatatable").innerHTML =
        createTableForDates(dates)),
      (document.getElementById("cp").innerHTML = "Date"),
      setCurrent("chart_div", dateDataSet);
  }),
  document.addEventListener("refreshDevice", () => {
    createLineChart(
      deviceDataset,
      "chart_div4",
      "Performance based on devices",
      "Device"
    ),
      (document.getElementById("rawdatatable").innerHTML =
        createTableForDevices(devices)),
      (document.getElementById("cp").innerHTML = "Device"),
      setCurrent("chart_div4", deviceDataset);
  }),
  document.addEventListener("refreshPage", () => {
    createLineChart(
      pageDataSet,
      "chart_div2",
      "Performance based on pages",
      "Pages"
    ),
      (document.getElementById("rawdatatable").innerHTML =
        createTableForPages(pages)),
      (document.getElementById("cp").innerHTML = "Page"),
      setCurrent("chart_div2", pageDataSet);
  }),
  document.addEventListener("viewClicks", (e) => {
    var t = createDataSetIndividual(currentActive.dataSet, 1);
    createLineChart(
      t,
      currentActive.div,
      "Performance based on " + currentActive.dataSet[0][0],
      currentActive.dataSet[0][0]
    );
  }),
  document.addEventListener("viewImp", (e) => {
    var t = createDataSetIndividual(currentActive.dataSet, 2);
    createLineChart(
      t,
      currentActive.div,
      "Performance based on " + currentActive.dataSet[0][0],
      currentActive.dataSet[0][0]
    );
  }),
  document.addEventListener("viewCtr", (e) => {
    var t = createDataSetIndividual(currentActive.dataSet, 3);
    createLineChart(
      t,
      currentActive.div,
      "Performance based on " + currentActive.dataSet[0][0],
      currentActive.dataSet[0][0]
    );
  }),
  document.addEventListener("viewPs", (e) => {
    var t = createDataSetIndividual(currentActive.dataSet, 4);
    createLineChart(
      t,
      currentActive.div,
      "Performance based on " + currentActive.dataSet[0][0],
      currentActive.dataSet[0][0]
    );
  });
