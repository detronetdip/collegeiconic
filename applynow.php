<?php
require('assets/require/connection.php');
$colleges=array();
if(isset($_GET['c'])){
    $clg=$_GET['c'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="collage_ideal.ico" type="image/x-icon">

    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <title>Collegeiconic | Apply Now</title>
  </head>
  <body>
    <div class="formbox" id="frmbx">
      <div class="formcontainer">
        <h4>
          Contact <span>Us</span>
        </h4>
        <div id="form-ct">
          <input type="text" placeholder="Enter your name" id="name" >
        
          <input type="email" placeholder="Enter your email" id="email">
          
          <input type="number" placeholder="Enter your mobile" id="mobile">
          
          <textarea placeholder="Enter query" id="query"></textarea>
          <button onclick="submitquery()" id="querybtn">Submit</button>
          <button class="cl" onclick="closeform()">Cancel</button>
        </div>
      </div>
    </div>
    <div class="drawerwrapper" id="drawer">
      <i class='bx bx-chevrons-right' id="mu"></i>
      <ul class="ul">
        <li class="links"><a href="index.php#cat">Colleges</a></li>
        <li class="links"><a href="index.php#slf">Loan</a></li>
        <li class="links"><a href="index.php#sa">Countries</a></li>
        <li class="links"><a href="index.php#ltq">Latest Updates</a></li>
        <button onclick="showcnt()">Contact Us</button>
      </ul>
    </div>
    <div class="bodyWrapper">
      <section class="secone">
        <div class="write" style="position:relative;height:auto;">
          <div class="header"  style="position:relative; background-color:#575757;">
            <div class="head">
              <div class="left">
                <div class="logo">
                  <img src="assets/images/svg/collage ideal.png" alt="" id="logo"/>
                </div>
                <div class="searchbox">
                   <form action="search.php" method="GET">
                    <div class="container">
                      <input type="text" placeholder="Search A College Here" name="q" />
                      <div class="img">
                        <button>
                          <i class="bx bx-search-alt-2"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="right">
                <ul class="ul">
                  <li class="links"><a href="index.php#cat">Colleges</a></li>
                  <li class="links"><a href="index.php#slf">Loan</a></li>
                  <li class="links"><a href="index.php#sa">Countries</a></li>
                  <li class="links"><a href="index.php#ltq">Latest Updates</a></li>
                </ul>
                <button onclick="showcnt()">Contact Us</button>
                <i class="bx bx-menu menu" id="mnu"></i>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="colsec2">
        <div class="colsecwrapper2">
        <div class="formwrapper">
            <h4>Application <span> Form </span></h4>
            <div class="form">
              <div class="row">
                <div class="inutmask">
                  <input type="text" id="aname" placeholder="Your Name" />
                  <span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="24"
                      height="24"
                      style="fill: #666"
                    >
                      <path
                        d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"
                      ></path>
                    </svg>
                  </span>
                </div>
                <div class="inutmask">
                  <input type="email" placeholder="Your Email" id="aemail" />
                  <span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      style="fill: #666"
                    >
                      <path
                        d="M18.73,5.41l-1.28,1L12,10.46,6.55,6.37l-1.28-1A2,2,0,0,0,2,7.05V18.64A1.36,1.36,0,0,0,3.36,20H6.55V12.28L12,16.37l5.45-4.09V20h3.19A1.36,1.36,0,0,0,22,18.64V7.05A2,2,0,0,0,18.73,5.41Z"
                      ></path>
                    </svg>
                  </span>
                </div>
              </div>
              <div class="row">
                <div class="inutmask">
                  <input type="number" id="amobile" placeholder="Your Mobile" />
                  <span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      style="fill: #666"
                    >
                      <path
                        d="M17 2H7c-1.103 0-2 .897-2 2v16c0 1.103.897 2 2 2h10c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zM7 16.999V5h10l.002 11.999H7z"
                      ></path>
                    </svg>
                  </span>
                </div>
                <div class="inutmask">
                  <input type="text" id="college" readonly value="<?php echo $clg; ?>" />
                  <span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      style="fill: #666"
                    >
                      <path
                        d="M19 2H9c-1.103 0-2 .897-2 2v6H5c-1.103 0-2 .897-2 2v9a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4c0-1.103-.897-2-2-2zM5 12h6v8H5v-8zm14 8h-6v-8c0-1.103-.897-2-2-2H9V4h10v16z"
                      ></path>
                      <path
                        d="M11 6h2v2h-2zm4 0h2v2h-2zm0 4.031h2V12h-2zM15 14h2v2h-2zm-8 .001h2v2H7z"
                      ></path>
                    </svg>
                  </span>
                </div>
              </div>
              <div class="row">
                <div class="inutmask">
                  <select
                    name="state"
                    id="state"
                    class="form-control"
                    required=""
                  >
                    <option value="0">Select State</option>
                  </select>
                  <span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      style="fill: #666"
                    >
                      <path
                        d="M12 2C7.589 2 4 5.589 4 9.995 3.971 16.44 11.696 21.784 12 22c0 0 8.029-5.56 8-12 0-4.411-3.589-8-8-8zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"
                      ></path>
                    </svg>
                  </span>
                </div>
                <div class="inutmask">
                  <select id="level" class="form-control" required="">
                    <option value="0">Select Level</option>
                    <option value="UG">UG</option>
                    <option value="PG">PG</option>
                    <option value="Diploma">Diploma</option>
                    <option value="Ph.D">Ph.D</option>
                    <option value="Certificate">Certificate</option>
                  </select>
                  <span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      style="fill: #666"
                    >
                      <path
                        d="M17.004 5H9c-1.838 0-3.586.737-4.924 2.076C2.737 8.415 2 10.163 2 12c0 1.838.737 3.586 2.076 4.924C5.414 18.263 7.162 19 9 19h8v-2H9c-1.303 0-2.55-.529-3.51-1.49C4.529 14.55 4 13.303 4 12c0-1.302.529-2.549 1.49-3.51C6.45 7.529 7.697 7 9 7h8V6l.001 1h.003c.79 0 1.539.314 2.109.886.571.571.886 1.322.887 2.116a2.966 2.966 0 0 1-.884 2.11A2.988 2.988 0 0 1 17 13H9a.99.99 0 0 1-.698-.3A.991.991 0 0 1 8 12c0-.252.11-.507.301-.698A.987.987 0 0 1 9 11h8V9H9c-.79 0-1.541.315-2.114.889C6.314 10.461 6 11.211 6 12s.314 1.54.888 2.114A2.974 2.974 0 0 0 9 15h8.001a4.97 4.97 0 0 0 3.528-1.473 4.967 4.967 0 0 0-.001-7.055A4.95 4.95 0 0 0 17.004 5z"
                      ></path>
                    </svg>
                  </span>
                </div>
              </div>
              <div class="row">
                <div class="inutmask">
                  <select id="stream">
                    <option value="0">Select Stream</option>
                    <option value="1">Engineering</option>
                    <option value="2">Nursing</option>
                    <option value="3">Management</option>
                    <option value="4">Art &amp; Humanities</option>
                    <option value="5">Science</option>
                    <option value="6">Hotel Management</option>
                    <option value="7">Agriculture</option>
                    <option value="8">Medical</option>
                    <option value="9">Mass Comunication</option>
                    <option value="10">Commerce &amp; Banking</option>
                    <option value="11">Information Technology</option>
                    <option value="12">Design</option>
                    <option value="13">Pharmacy</option>
                    <option value="14">LAW</option>
                    <option value="15">Para Medical</option>
                    <option value="16">Dental</option>
                    <option value="17">Performing Arts</option>
                    <option value="18">Education</option>
                  </select>
                  <span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      style="fill: #666"
                    >
                      <path
                        d="M2 8v4.001h1V18H2v3h16l3 .001V21h1v-3h-1v-5.999h1V8L12 2 2 8zm4 10v-5.999h2V18H6zm5 0v-5.999h2V18h-2zm7 0h-2v-5.999h2V18zM14 8a2 2 0 1 1-4.001-.001A2 2 0 0 1 14 8z"
                      ></path>
                    </svg>
                  </span>
                </div>
                <div class="inutmask">
                  <select name="board" id="bord">
                    <option value="0">Select Board</option>
                    <option value="ICSE/CBSE/IB">ICSE/CBSE/IB</option>
                    <option value="State Board">State Board</option>
                    <option value="Others">Others</option>
                  </select>
                  <span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      style="fill: #666"
                    >
                      <path
                        d="M19 3h-2.25a1 1 0 0 0-1-1h-7.5a1 1 0 0 0-1 1H5c-1.103 0-2 .897-2 2v15c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm0 17H5V5h2v2h10V5h2v15z"
                      ></path>
                    </svg>
                  </span>
                </div>
              </div>
            </div>
            <div class="btnrow">
              <button onclick="submit_application()" id="appbtn">Submit</button>
            </div>
          </div>
        </div>
      </section>
      <?php require('assets/require/footer.php'); ?>
    </div>
    <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>
    <script src="assets/js/sw.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/script2.js"></script>
    <script>
          window.onload = function() {
            fetch("https://cdn-api.co-vin.in/api/v2/admin/location/states")
                  .then(e=>{
                    return e.json();
                  })
                  .then(result=>{
                    var finalData=`<option value="0">Select State</option>`;
                    result.states.forEach(state=>{
                      finalData+=`<option value="${state.state_name}">${state.state_name}</option>`;
                    });
                    document.getElementById("state").innerHTML=finalData;
                  })
          };
        </script>
  </body>
</html>
<?php
}else{
    redirect('index.php');
    die();
}
?>