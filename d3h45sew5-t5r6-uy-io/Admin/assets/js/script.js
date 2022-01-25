"use strict";
const S = "success";
const W = "warning";
let store = {
  first: false,
  second: false,
  test: false,
};
let control = {
  globalShow: function (e) {
    document.getElementById(e).style.display = "initial";
  },
  globalShowFlex: function (e) {
    document.getElementById(e).style.display = "flex";
  },
  globalShowGrid: function (e) {
    document.getElementById(e).style.display = "grid";
  },
  globalHide: function (e) {
    document.getElementById(e).style.display = "none";
  },
  getInput: function (e) {
    let value;
    value = document.getElementById(e).value;
    return value;
  },
  getintInput: function (e) {
    let value;
    value = parseInt(document.getElementById(e).value);
    return value;
  },
  putValue: function (e, k) {
    document.getElementById(e).value = k;
  },
  html: function (e, tml) {
    document.getElementById(e).innerHTML = tml;
  },
  reload: function () {
    window.location.href = window.location;
  },
  readonly: function (e) {
    document.getElementById(e).setAttribute("readonly", true);
  },
  disable: function (e) {
    document.getElementById(e).setAttribute("disabled", true);
  },
  enable: function (e) {
    document.getElementById(e).setAttribute("disabled", false);
  },
  popup: function (e, state = "") {
    if (state == "") {
      swal(e);
    } else {
      swal(e, "", state);
    }
  },
  get: (e) => {
    return document.getElementById(e);
  },
};
function hide() {
  var left = control.get("lft");
  var mn = control.get("mn");
  left.style.overflow = "hidden";
  left.style.flexBasis = "0%";
  mn.setAttribute("onclick", "op_en()");
}
function op_en() {
  if (window.innerWidth > 860) {
    var left = control.get("lft");
    var mn = control.get("mn");
    left.style.overflow = "hidden";
    left.style.flexBasis = "33%";
    mn.setAttribute("onclick", "hide()");
  } else {
    var left = control.get("lft");
    var mn = control.get("mn");
    left.style.transform = "translateX(0%)";
  }
}
function op_n() {
  var left = control.get("lft");
  var mn = control.get("mn");
  left.style.transform = "translateX(0%)";
}

function close_res_nav() {
  var left = control.get("lft");
  var mn = control.get("mn");
  left.style.transform = "translateX(-120%)";
  mn.setAttribute("onclick", "op_en()");
}
window.addEventListener("resize", () => {
  if (window.innerWidth > 860) {
    op_en();
  } else {
    var left = control.get("lft");
    left.style.overflow = "visible";
  }
});
function show_preview(e, f) {
  if (validatefile(f)) {
    var reader = new FileReader();
    reader.onload = function () {
      var output = document.getElementById(e);
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  } else {
    swal("File should be in JPEG,JPG or PNG format", "", "warning");
  }
}
function validatefile(e) {
  var fileInput = document.getElementById(e);
  var filePath = fileInput.value;
  var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
  if (!allowedExtensions.exec(filePath)) {
    fileInput.value = "";
    return 0;
  } else {
    return 1;
  }
}
function view(e) {
  let div = control.get("mi");
  div.src = e.src;
}
function add_college() {
  let img1 = document.getElementById("uploadimage1");
  let img2 = document.getElementById("uploadimage2");
  let category, type, name, state, address, courses, rating, approved;
  category = control.getInput("ccat");
  type = control.getInput("ctype");
  name = control.getInput("cname");
  address = control.getInput("caddress");
  courses = control.getInput("ccourses");
  rating = +document.getElementById("crate").value;
  approved = control.getInput("cby");
  state = control.getInput("cstate");
  if (img1.files.length == 0) {
    control.html("pdstatus", "Select First Image");
  } else if (img2.files.length == 0) {
    control.html("pdstatus", "Select Second Image");
  } else if (category == "0") {
    control.html("pdstatus", "Enter Category");
  } else if (type == "0") {
    control.html("pdstatus", "Select Type");
  } else if (name == "") {
    control.html("pdstatus", "Enter Name");
  } else if (address == "") {
    control.html("pdstatus", "Enter Address");
  } else if (courses == "") {
    control.html("pdstatus", "Enter Courses");
  } else if (rating == "") {
    control.html("pdstatus", "Enter Rating");
  } else if (approved == "") {
    control.html("pdstatus", "Enter Approved By");
  } else if (state == "0") {
    control.html("pdstatus", "Select State");
  } else if (rating > 5 || rating < 1) {
    control.html("pdstatus", "Enter Rating Between 1 to 5");
  } else {
    add_f_image();
  }
}
function add_f_image() {
  control.html("pdstatus", "Adding Images...");
  var fd = new FormData();
  var files = $("#uploadimage1")[0].files;
  fd.append("file", files[0]);
  $.ajax({
    url: "assets/backend/colleges/add.php",
    type: "post",
    data: fd,
    contentType: false,
    processData: false,
    success: function (html) {
      if (html == 0) {
        control.html("pdstatus", html);
        control.enable("pbtn");
      } else {
        add_s_image(html);
      }
    },
  });
}
function add_s_image(fimagename) {
  var fd = new FormData();
  var files = $("#uploadimage2")[0].files;
  fd.append("file", files[0]);
  $.ajax({
    url: "assets/backend/colleges/add.php",
    type: "post",
    data: fd,
    contentType: false,
    processData: false,
    success: function (html) {
      if (html == 0) {
        control.html("pdstatus", html);
        control.enable("pbtn");
      } else {
        add_details(fimagename, html);
      }
    },
  });
}
function add_details(first, second) {
  control.html("pdstatus", "Adding Details...");
  let category, type, name, state, address, courses, rating, approved;
  category = control.getInput("ccat");
  type = control.getInput("ctype");
  name = control.getInput("cname");
  address = control.getInput("caddress");
  courses = control.getInput("ccourses");
  rating = +document.getElementById("crate").value;
  approved = control.getInput("cby");
  state = control.getInput("cstate");
  $.ajax({
    url: "assets/backend/colleges/add_details.php",
    type: "post",
    data:
      "category=" +
      category +
      "&type=" +
      type +
      "&name=" +
      name +
      "&address=" +
      address +
      "&courses=" +
      courses +
      "&rating=" +
      rating +
      "&approved=" +
      approved +
      "&first=" +
      first +
      "&second=" +
      second +
      "&state=" +
      state,
    success: function (htl) {
      let html = JSON.parse(htl);
      if (html.code == 3) {
        control.html("pdstatus", "College exist with same name");
        control.enable("pbtn");
      } else {
        if (html.code == 1) {
          control.html("pdstatus", "Details added seccessfuly");
          setTimeout(() => {
            control.html("pdstatus", "");
            control.reload();
          }, 1000);
        } else {
          control.html("pdstatus", "something went wrong");
          control.enable("pbtn");
        }
      }
    },
  });
}
function view(e) {
  let div = control.get("mi");
  div.src = e.src;
}
function edit_college(id) {
  let img1 = document.getElementById("uploadimage1");
  let img2 = document.getElementById("uploadimage2");
  let category, type, name, address, courses, rating, approved, state;
  category = control.getInput("ccat");
  type = control.getInput("ctype");
  name = control.getInput("cname");
  address = control.getInput("caddress");
  courses = control.getInput("ccourses");
  rating = +document.getElementById("crate").value;
  approved = control.getInput("cby");
  state = control.getInput("cstate");
  if (img1.files.length != 0) {
    store.first = true;
  }
  if (img2.files.length != 0) {
    store.second = true;
  }
  if (category == "0") {
    control.html("pdstatus", "Enter Category");
  } else if (type == "0") {
    control.html("pdstatus", "Select Type");
  } else if (name == "") {
    control.html("pdstatus", "Enter Name");
  } else if (state == "0") {
    control.html("pdstatus", "Select state");
  } else if (address == "") {
    control.html("pdstatus", "Enter Address");
  } else if (courses == "") {
    control.html("pdstatus", "Enter Courses");
  } else if (rating == "") {
    control.html("pdstatus", "Enter Rating");
  } else if (approved == "") {
    control.html("pdstatus", "Enter Approved By");
  } else if (rating > 5 || rating < 1) {
    control.html("pdstatus", "Enter Rating Between 1 to 5");
  } else {
    if (store.first == true) {
      up_f(id);
      store.first = false;
    } else if (store.second == true) {
      up_s(id);
      store.second = false;
    } else {
      up_d(id);
    }
  }
}
function up_f(id) {
  control.html("pdstatus", "Updating Images...");
  let img1 = document.getElementById("uploadimage1");
  if (img1.files.length != 0) {
    var fd = new FormData();
    var files = $("#uploadimage1")[0].files;
    fd.append("file", files[0]);
    $.ajax({
      url: "assets/backend/colleges/add.php",
      type: "post",
      data: fd,
      contentType: false,
      processData: false,
      success: function (html) {
        if (html == 0) {
          control.html("pdstatus", "went wrong");
        } else {
          if (store.second == true) {
            up_s(id, html);
          } else {
            up_d(id, html);
          }
        }
      },
    });
  }
}
function up_s(id, fi = "") {
  control.html("pdstatus", "Updating Images...");
  let img2 = document.getElementById("uploadimage2");
  control.html("pdstatus", "Adding Images...");
  var fd = new FormData();
  var files = $("#uploadimage2")[0].files;
  fd.append("file", files[0]);
  $.ajax({
    url: "assets/backend/colleges/add.php",
    type: "post",
    data: fd,
    contentType: false,
    processData: false,
    success: function (html) {
      if (html == 0) {
        control.html("pdstatus", "went wrong");
      } else {
        up_d(id, fi, html);
      }
    },
  });
}
function up_d(id, fi = "", sec = "") {
  control.html("pdstatus", "Updating Details...");
  let category, type, name, address, courses, rating, approved, state;
  category = control.getInput("ccat");
  type = control.getInput("ctype");
  name = control.getInput("cname");
  address = control.getInput("caddress");
  courses = control.getInput("ccourses");
  rating = +document.getElementById("crate").value;
  approved = control.getInput("cby");
  state = control.getInput("cstate");
  $.ajax({
    url: "assets/backend/colleges/update_details.php",
    type: "post",
    data:
      "category=" +
      category +
      "&type=" +
      type +
      "&name=" +
      name +
      "&address=" +
      address +
      "&courses=" +
      courses +
      "&rating=" +
      rating +
      "&approved=" +
      approved +
      "&first=" +
      fi +
      "&second=" +
      sec +
      "&id=" +
      id +
      "&state=" +
      state,
    success: function (htl) {
      let html = JSON.parse(htl);
      if (html.code == 3) {
        control.html("pdstatus", "Product exist with same name");
        control.enable("pbtn");
      } else {
        if (html.code == 1) {
          control.html("pdstatus", "Detailes edited seccessfuly");
          setTimeout(() => {
            control.html("pdstatus", "");
            control.reload();
          }, 1000);
        } else {
          control.html("pdstatus", "something went wrong");
          control.enable("pbtn");
        }
      }
    },
  });
}
function college_acdc(id, status) {
  $.ajax({
    url: "assets/backend/colleges/cg_acdc.php",
    type: "post",
    data: "id=" + id + "&status=" + status,
    success: function (html) {
      control.reload();
    },
  });
}
function testi_acdc(id, status) {
  $.ajax({
    url: "assets/backend/testimonials/ts_acdc.php",
    type: "post",
    data: "id=" + id + "&status=" + status,
    success: function (html) {
      control.reload();
    },
  });
}
function college_del(id) {
  $.ajax({
    url: "assets/backend/colleges/cg_del.php",
    type: "post",
    data: "id=" + id,
    success: function (html) {
      control.reload();
    },
  });
}
function testi_del(id) {
  $.ajax({
    url: "assets/backend/testimonials/ts_del.php",
    type: "post",
    data: "id=" + id,
    success: function (html) {
      control.reload();
    },
  });
}
function popular(id) {
  let k = document.getElementById("isp");
  console.log("id=" + id + "&isp=" + k.checked);
  let isp = 0;
  if (k.checked == true) {
    isp = 1;
  }
  $.ajax({
    url: "assets/backend/colleges/popular.php",
    type: "post",
    data: "id=" + id + "&isp=" + isp,
    success: function (html) {
      control.reload();
    },
  });
}
function login() {
  const mail = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  $.ajax({
    url: "../assets/backend/auth/verify.php",
    type: "post",
    data: "mail=" + mail + "&password=" + password,
    success: function (html) {
      console.log(html);
      html = JSON.parse(html);
      if (html.status == 0) {
        swal(html.msg, "", "warning");
      } else if (html.status == 1) {
        window.location.href = "../";
      }
    },
  });
}
function logout() {
  const mail = 1;
  $.ajax({
    url: "assets/backend/auth/lot.php",
    type: "post",
    data: "mail=" + mail,
    success: function (html) {
      window.location.href = window.location;
    },
  });
}
function add_testi() {
  let img1 = document.getElementById("uploadimage21");
  let name, review;
  name = control.getInput("cname");
  review = control.getInput("creview");
  if (img1.files.length == 0) {
    control.html("pdstatus", "Select Image");
  } else if (name == "") {
    control.html("pdstatus", "Enter Category");
  } else if (review == "") {
    control.html("pdstatus", "Select Type");
  } else {
    add_testi_image();
  }
}
function add_testi_image() {
  control.html("pdstatus", "Adding Image...");
  var fd = new FormData();
  var files = $("#uploadimage21")[0].files;
  fd.append("file", files[0]);
  $.ajax({
    url: "assets/backend/testimonials/add.php",
    type: "post",
    data: fd,
    contentType: false,
    processData: false,
    success: function (html) {
      if (html == 0) {
        control.html("pdstatus", html);
        control.enable("pbtn");
      } else {
        add_testi_details(html);
      }
    },
  });
}
function add_testi_details(image) {
  control.html("pdstatus", "Adding Details...");
  let name, review;
  name = control.getInput("cname");
  review = control.getInput("creview");
  $.ajax({
    url: "assets/backend/testimonials/add_details.php",
    type: "post",
    data: "name=" + name + "&review=" + review + "&image=" + image,
    success: function (htl) {
      let html = JSON.parse(htl);
      if (html.code == 1) {
        control.html("pdstatus", "Details added seccessfuly");
        setTimeout(() => {
          control.html("pdstatus", "");
          control.reload();
        }, 1000);
      } else {
        control.html("pdstatus", "something went wrong");
        control.enable("pbtn");
      }
    },
  });
}
function edit_testi(id) {
  let img1 = document.getElementById("uploadimage21");
  let name, review;
  name = control.getInput("cname");
  review = control.getInput("creview");
  if (img1.files.length != 0) {
    store.test = true;
  }
  if (name == "") {
    control.html("pdstatus", "Enter Name");
  } else if (review == "") {
    control.html("pdstatus", "Enter Review");
  } else {
    if (store.test == true) {
      up_t_i(id);
      store.test = false;
    } else {
      up_testti_detail(id);
    }
  }
}
function up_t_i(id) {
  control.html("pdstatus", "Updating Images...");
  let img1 = document.getElementById("uploadimage21");
  if (img1.files.length != 0) {
    var fd = new FormData();
    var files = $("#uploadimage21")[0].files;
    fd.append("file", files[0]);
    $.ajax({
      url: "assets/backend/testimonials/add.php",
      type: "post",
      data: fd,
      contentType: false,
      processData: false,
      success: function (html) {
        if (html == 0) {
          control.html("pdstatus", "went wrong");
        } else {
          up_testti_detail(id, html);
        }
      },
    });
  }
}
function up_testti_detail(id, image = "") {
  control.html("pdstatus", "Updating Details...");
  let review, name;
  name = control.getInput("cname");
  review = control.getInput("creview");
  $.ajax({
    url: "assets/backend/testimonials/update_details.php",
    type: "post",
    data:
      "name=" + name + "&review=" + review + "&image=" + image + "&id=" + id,
    success: function (htl) {
      let html = JSON.parse(htl);
      if (html.code == 1) {
        control.html("pdstatus", "Detailes edited seccessfuly");
        setTimeout(() => {
          control.html("pdstatus", "");
          control.reload();
        }, 1000);
      } else {
        control.html("pdstatus", "something went wrong");
        control.enable("pbtn");
      }
    },
  });
}
function n_seen(){
  document.getElementById('notice').style.display="none"
}