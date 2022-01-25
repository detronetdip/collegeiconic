var allId = ["device", "country", "page", "date"];
var allId2 = ["dd", "ct", "pg", "dt"];
const refreshCountry = new Event("refreshCountry");
const refreshDate = new Event("refreshDate");
const refreshDevice = new Event("refreshDevice");
const refreshPage = new Event("refreshPage");
function setDisplay(except) {
  allId.forEach((element) => {
    if (element !== except) {
      document.getElementById(element).classList.add("hide");
    } else {
      document.getElementById(element).classList.remove("hide");
    }
  });
}
function setActive(except) {
  allId2.forEach((element) => {
    if (element === except) {
      document.getElementById(element).classList.add("active");
    } else {
      document.getElementById(element).classList.remove("active");
    }
  });
}

function switchGraph(e) {
  setActive(e.id);
  setDisplay(allId[allId2.indexOf(e.id)]);
  if (e.id === "dt") {
    document.dispatchEvent(refreshDate);
  } else if (e.id === "ct") {
    document.dispatchEvent(refreshCountry);
  } else if (e.id === "pg") {
    document.dispatchEvent(refreshPage);
  } else if (e.id === "dd") {
    document.dispatchEvent(refreshDevice);
  }
}

setDisplay("device");
setActive("dd");
