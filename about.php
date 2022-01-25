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
    <title>Collegeiconic | Privacy Policy</title>
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
      <section class="abotus" style="width:95%; max-width:125rem; margin:0.5rem auto;">
 
      <h2 class="sp">About Us</h2>
<p>Collegeiconic is an education management institution that specializes in the fields of online admission, career counseling, scholarship, and career guidance. It offers an online platform for the selection of Educational Courses, Colleges, and Universities. </p>
<p>If you have any query regrading Site, Advertisement and any other issue, please feel free to contact at <strong>support@collegeiconic.com</strong></p>
 
      <hr>
      </section>
      <?php require('assets/require/footer.php'); ?>
    </div>
<!-- <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/61c0c9e3c82c976b71c2640e/1fnch98si';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script> -->
    <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>
    <script src="assets/js/sw.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/script2.js"></script>
  </body>
</html>
