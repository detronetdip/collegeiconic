const menu = document.querySelector("#mnu");
const enu = document.querySelector("#mu");
const drawer = () => {
  const menu = document.querySelector("#drawer");
  const get = menu.getAttribute("on");
  if (get == "true") {
    menu.style.transform = "translate(100%)";
    menu.setAttribute("on", "false");
  } else {
    menu.style.transform = "translate(0%)";
    menu.setAttribute("on", "true");
  }
};
function redirect(path) {
  window.location.href = path;
}
menu.addEventListener("click", drawer);
enu.addEventListener("click", drawer);
function showcnt() {
  document.getElementById("frmbx").style.display = "flex";
}
function closeform() {
  document.getElementById("frmbx").style.display = "none";
}
function submitquery() {
  let btn = document.getElementById("querybtn");
  btn.innerHTML = "Wait...";
  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let mobile = document.getElementById("mobile").value;
  let query = document.getElementById("query").value;
  if (name == "" || email == "" || mobile == "" || query == "") {
    swal("All fields are mandatory", "", "warning");
    btn.innerHTML = "Submit";
  } else {
    $.ajax({
      url: "assets/backend/submitQuery.php",
      type: "post",
      data:
        "name=" +
        name +
        "&email=" +
        email +
        "&mobile=" +
        mobile +
        "&query=" +
        query,
      success: function (html) {
        html = JSON.parse(html);
        if (html.code == 1) {
          swal("Submitted Successfully", "", "success");
          closeform();
        } else {
          swal("Something went wrong", "", "warning").then((e) => {
            closeform();
          });
        }
      },
    });
  }
}
function submit_application() {
  let btn = document.getElementById("appbtn");
  btn.innerHTML = "Wait...";
  let name = document.getElementById("aname").value;
  let email = document.getElementById("aemail").value;
  let mobile = document.getElementById("amobile").value;
  let college = document.getElementById("college").value;
  let state = document.getElementById("state").value;
  let level = document.getElementById("level").value;
  let stream = document.getElementById("stream").value;
  let bord = document.getElementById("bord").value;
  if (
    name == "" ||
    email == "" ||
    mobile == "" ||
    college == "" ||
    state == "" ||
    level == "" ||
    stream == "" ||
    bord == ""
  ) {
    console.log(name, email, mobile, college, state, level, stream, bord);
    swal("All fields are mandatory", "", "warning");
    btn.innerHTML = "Submit";
  } else {
    $.ajax({
      url: "assets/backend/submitApplication.php",
      type: "post",
      data:
        "name=" +
        name +
        "&email=" +
        email +
        "&mobile=" +
        mobile +
        "&college=" +
        college +
        "&state=" +
        state +
        "&level=" +
        level +
        "&stream=" +
        stream +
        "&bord=" +
        bord,
      success: function (html) {
        html = JSON.parse(html);
        if (html.code == 1) {
          swal("Submitted Successfully", "", "success").then(() => {
            redirect("index.php");
          });
        } else {
          swal("Something went wrong", "", "warning").then((e) => {
            redirect(window.location);
          });
        }
      },
    });
  }
}
var logo = document.querySelector("#logo");
logo.addEventListener("click", (e) => {
  redirect("index.php");
});
