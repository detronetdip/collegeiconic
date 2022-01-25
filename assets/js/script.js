const write = document.querySelector(".write");
const svg = document.querySelector(".vgs");
function redirect(path) {
  window.location.href = path;
}
write.style.width = svg.clientWidth;
write.style.height = svg.clientHeight + "px";
window.addEventListener("resize", () => {
  write.style.width = svg.clientWidth;
  write.style.height = svg.clientHeight + "px";
});
var swiper2 = new Swiper(".mySwiper2", {
  loop: true,
  autoplay: { delay: 3000, disableOnInteraction: false },
});
var swiper = new Swiper(".mySwiper", {
  effect: "cube",
  grabCursor: true,
  cubeEffect: {
    shadow: true,
    slideShadows: true,
    shadowOffset: 20,
    shadowScale: 0.94,
  },
  loop: true,
  autoplay: { delay: 3000, disableOnInteraction: false },
});

var observer = new IntersectionObserver(
  function (entries) {
    if (entries[0].isIntersecting === true) {
      console.log("Element has just become visible in screen");
      const counters = document.querySelectorAll(".counter");
      const speedup = 40;
      counters.forEach((count) => {
        const updt = () => {
          console.log(5);
          const target = +count.getAttribute("dest");
          const inval = +count.innerHTML;
          console.log(target, inval);
          let i = target / speedup;
          if (inval < target) {
            count.innerText = inval + i;
            console.log(inval);
            setTimeout(() => {
              updt();
            }, 10);
          } else {
            inval.innerText = target;
          }
        };
        updt();
      });
    }
  },
  { threshold: [0.6] }
);

observer.observe(document.querySelector("#run-count"));
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
var logo = document.querySelector("#logo");
logo.addEventListener("click", (e) => {
  redirect("index.php");
});
