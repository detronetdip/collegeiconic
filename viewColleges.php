<?php
require('assets/require/connection.php');

$colleges=array();
if(isset($_GET['l'])){
    $key=check($_GET['l']);
    $colleges=search_colleges($con,$key);
}else{
  redirect('index.php');
  die();
}
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
    <title>Collegeiconic | View Colleges</title>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-6P8NVD2XFG');
    </script>
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
                  <img src="assets/images/svg/collage ideal.png" alt="" id="logo" />
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
      <section class="filter">
        <h5>Filter By |</h5>
        <select id="filter" class="filter_class" style="width:8rem;">
          <option value="0">State</option>
        </select>
      </section>
      <section class="colsec">
        <div class="colsecwrapper">
        <?php
        if(count($colleges)>0){
          foreach($colleges as $college){
        ?>
          <div class="cardwrapper" data-filter="<?php echo $college['state']; ?>">
              <div class="card">
                <div class="topsec">
                  <img src="assets/images/colleges/<?php echo $college['back']; ?>" alt="" />
                  <div class="overlay"></div>
                  <div class="cnamebox">
                    <a href="#">
                      <h3><?php echo $college['name']; ?></h3>
                    </a>
                  </div>
                </div>
                <div class="bottom">
                  <div class="brow">
                    <a href="">
                      <img src="assets/images/colleges/<?php echo $college['logo']; ?>" alt="" />
                    </a>
                    <span class="jsx-765939686">
                      <span class="jsx-765939687">
                        <span class="jsx-765939688">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="430.114"
                            height="430.114"
                            viewBox="0 0 430.114 430.114"
                          >
                            <path
                              d="M356.208 107.051c-1.531-5.738-4.64-11.852-6.94-17.205C321.746 23.704 261.611 0 213.055 0 148.054 0 76.463 43.586 66.905 133.427v18.355c0 .766.264 7.647.639 11.089 5.358 42.816 39.143 88.32 64.375 131.136 27.146 45.873 55.314 90.999 83.221 136.106 17.208-29.436 34.354-59.259 51.17-87.933 4.583-8.415 9.903-16.825 14.491-24.857 3.058-5.348 8.9-10.696 11.569-15.672 27.145-49.699 70.838-99.782 70.838-149.104v-20.262c.001-5.347-6.627-24.081-7-25.234zm-141.963 92.142c-19.107 0-40.021-9.554-50.344-35.939-1.538-4.2-1.414-12.617-1.414-13.388v-11.852c0-33.636 28.56-48.932 53.406-48.932 30.588 0 54.245 24.472 54.245 55.06 0 30.587-25.305 55.051-55.893 55.051z"
                            ></path></svg
                        >
                      </span>
                      <?php echo $college['address'];echo ", "; echo $college['state']; ?></span
                      >
                      &nbsp;
                  </div>
                  <ul class="list">
                    <li>
                      <a class="heading-a" href="">
                        <span class="theading">
                      Courses Offered
                      </span>
                        <span title="BE/B.Tech - First Year Fees" class="bheading"> 
                        <?php echo $college['courses']; ?>
                      </span>
                      </a>
                      <a class="heading-a" href="">
                        <span class="theading" style="margin-top: 0.8rem;">
                      Type
                      </span>
                        <span title="BE/B.Tech - First Year Fees" class="bheading"> 
                        <?php echo $college['n']; ?>
                      </span>
                      </a>
                    </li>
                    <li class="g">
                      <a class="heading-a" href="">
                        <span class="theading">
                      Approved By
                      </span>
                        <span title="BE/B.Tech - First Year Fees" class="bheading"> 
                        <?php echo $college['approved_by']; ?>
                      </span>
                      </a>
                      <a class="heading-a" href="">
                        <span class="theading" style="margin-top: 0.8rem;">
                      Rating
                      </span>
                        <span title="BE/B.Tech - First Year Fees" class="bheading"> 
                        <?php echo $college['rating']; ?>
                      </span>
                      </a>
                    </li>
                  </ul>
                  <a href="applynow.php?c=<?php echo $college['name'] ?>">
                  <button>
                    Apply Now
                  </button>
                  </a>
                </div>
              </div>
          </div>
         <?php }}else{

           echo "<h3 style='font-size:2rem; text-align:center;'>Sorry! No college found</h3>";
         } ?>
        </div>
      </section>
      <?php require('assets/require/footer.php'); ?>
    </div>
    <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>
    <script src="assets/js/sw.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/script2.js"></script>
    <script src="assets/js/script3.js"></script>
    <script>
          window.onload = function() {
            fetch("https://cdn-api.co-vin.in/api/v2/admin/location/states")
                  .then(e=>{
                    return e.json();
                  })
                  .then(result=>{
                    var finalData=`<option value="0">State</option>`;
                    result.states.forEach(state=>{
                      finalData+=`<option value="${state.state_name}">${state.state_name}</option>`;
                    });
                    document.getElementById("filter").innerHTML=finalData;
                  })
          };
        </script>
  </body>
</html>
