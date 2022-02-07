var allId = ["device", "country", "page", "date"],
  allId2 = ["dd", "ct", "pg", "dt"];
const refreshCountry = new Event("refreshCountry"),
  refreshDate = new Event("refreshDate"),
  refreshDevice = new Event("refreshDevice"),
  refreshPage = new Event("refreshPage"),
  viewClicks = new Event("viewClicks"),
  viewImp = new Event("viewImp"),
  viewCtr = new Event("viewCtr"),
  viewPs = new Event("viewPs");
function setDisplay(e) {
  allId.forEach((t) => {
    t !== e
      ? document.getElementById(t).classList.add("hide")
      : document.getElementById(t).classList.remove("hide");
  });
}
function setActive(e) {
  allId2.forEach((t) => {
    t === e
      ? document.getElementById(t).classList.add("active")
      : document.getElementById(t).classList.remove("active");
  });
}
function switchGraph(e) {
  setActive(e.id),
    setDisplay(allId[allId2.indexOf(e.id)]),
    "dt" === e.id
      ? document.dispatchEvent(refreshDate)
      : "ct" === e.id
      ? document.dispatchEvent(refreshCountry)
      : "pg" === e.id
      ? document.dispatchEvent(refreshPage)
      : "dd" === e.id && document.dispatchEvent(refreshDevice);
}
function viewClicks_() {
  document.dispatchEvent(viewClicks);
}
function viewImp_() {
  document.dispatchEvent(viewImp);
}
function viewCtr_() {
  document.dispatchEvent(viewCtr);
}
function viewPs_() {
  document.dispatchEvent(viewPs);
}
setDisplay("device");
setActive("dd");
