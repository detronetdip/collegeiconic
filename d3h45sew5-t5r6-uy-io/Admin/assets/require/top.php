<?php
  require("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Collegeiconic</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/sweetalert.js"></script>
    <link rel="shortcut icon" href="../../collage_ideal.ico" type="image/x-icon">
    <script
      type="text/javascript"
      src="https://www.gstatic.com/charts/loader.js"
    ></script>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
  </head>
  <body>
    <section class="main">
      <div class="left-part" id="lft">
        <div class="logo">
          <a href="javascript:void(0)">
            <img src="../../assets/images/svg/collage ideal.png" alt="logo" />
          </a>
          <svg
            width="138"
            height="73.696"
            viewBox="0 0 199 73.696"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g
              id="svgGroup"
              stroke-linecap="round"
              fill-rule="evenodd"
              font-size="9pt"
              stroke="#000"
              stroke-width="0.25mm"
              fill="black"
              style="stroke: rgb(255, 255, 255); stroke-width: 0.25mm; fill: rgb(255, 255, 255)"
            >
              <path
                d="M 140.924 21.56 L 140.924 30.086 Q 143.668 25.97 147.833 23.177 A 16.534 16.534 0 0 1 155.969 20.439 A 20.535 20.535 0 0 1 157.486 20.384 A 20.889 20.889 0 0 1 161.726 20.791 Q 164.995 21.468 167.384 23.275 A 15.474 15.474 0 0 1 172.299 29.654 A 19.351 19.351 0 0 1 172.872 31.164 Q 175.91 26.656 180.075 23.52 A 15.355 15.355 0 0 1 186.73 20.694 A 21.017 21.017 0 0 1 190.414 20.384 A 20.898 20.898 0 0 1 193.99 20.675 A 15.372 15.372 0 0 1 197.617 21.756 Q 200.704 23.128 202.762 25.627 Q 204.82 28.126 205.849 31.605 A 24.868 24.868 0 0 1 206.733 36.241 A 31.354 31.354 0 0 1 206.878 39.298 L 206.878 72.52 L 198.058 72.52 L 198.058 39.984 A 18.662 18.662 0 0 0 197.728 36.369 Q 197.301 34.207 196.322 32.498 A 10.762 10.762 0 0 0 195.608 31.409 A 7.814 7.814 0 0 0 189.911 28.179 A 10.465 10.465 0 0 0 188.846 28.126 Q 186.592 28.126 184.534 29.008 A 16.212 16.212 0 0 0 181.083 31.039 A 18.348 18.348 0 0 0 180.614 31.409 A 25.109 25.109 0 0 0 177.718 34.201 A 28.605 28.605 0 0 0 177.086 34.937 Q 175.42 36.946 174.048 39.102 L 174.048 72.52 L 165.228 72.52 L 165.228 39.984 A 18.662 18.662 0 0 0 164.898 36.369 Q 164.471 34.207 163.492 32.498 A 10.762 10.762 0 0 0 162.778 31.409 A 7.814 7.814 0 0 0 157.081 28.179 A 10.465 10.465 0 0 0 156.016 28.126 Q 153.86 28.126 151.802 28.959 A 16.522 16.522 0 0 0 148.555 30.733 A 18.958 18.958 0 0 0 147.833 31.262 A 23.306 23.306 0 0 0 144.571 34.329 A 25.954 25.954 0 0 0 144.256 34.692 Q 142.59 36.652 141.218 38.808 L 141.218 72.52 L 132.398 72.52 L 132.398 21.56 L 140.924 21.56 Z M 255.094 21.56 L 255.094 30.086 Q 257.838 25.97 262.101 23.177 A 16.97 16.97 0 0 1 269.064 20.605 A 22.177 22.177 0 0 1 272.244 20.384 A 22.76 22.76 0 0 1 277.208 20.891 Q 280.484 21.624 282.873 23.413 A 12.995 12.995 0 0 1 285.131 25.578 Q 289.173 30.503 289.383 38.424 A 33.089 33.089 0 0 1 289.394 39.298 L 289.394 72.52 L 280.574 72.52 L 280.574 40.278 A 19.873 19.873 0 0 0 280.273 36.71 Q 279.698 33.563 278.026 31.409 A 8.291 8.291 0 0 0 272.2 28.207 A 12.141 12.141 0 0 0 270.774 28.126 Q 268.52 28.126 266.364 28.959 A 17.811 17.811 0 0 0 262.735 30.883 A 20.213 20.213 0 0 0 262.199 31.262 Q 260.19 32.732 258.475 34.692 Q 256.76 36.652 255.388 38.808 L 255.388 72.52 L 246.568 72.52 L 246.568 21.56 L 255.094 21.56 Z M 7.938 73.304 L 0 70.07 L 26.852 3.92 L 37.044 3.92 L 63.504 70.07 L 54.978 73.5 L 47.334 53.9 L 15.582 53.9 L 7.938 73.304 Z M 106.036 26.656 L 106.036 0 L 114.856 0 L 114.856 60.172 Q 114.856 63.249 116.094 64.553 A 2.906 2.906 0 0 0 116.669 65.023 Q 118.482 66.15 120.638 66.15 L 118.776 73.01 A 17.496 17.496 0 0 1 114.604 72.552 Q 108.956 71.163 107.408 65.562 A 20.359 20.359 0 0 1 104.179 69.061 A 26.469 26.469 0 0 1 101.332 71.197 A 14.581 14.581 0 0 1 96.69 73.147 Q 94.746 73.61 92.48 73.683 A 26.631 26.631 0 0 1 91.63 73.696 Q 86.926 73.696 82.761 71.834 Q 78.596 69.972 75.509 66.542 A 23.88 23.88 0 0 1 71.655 60.668 A 28.922 28.922 0 0 1 70.658 58.261 A 28.914 28.914 0 0 1 69.163 51.894 A 37.32 37.32 0 0 1 68.894 47.334 A 32.421 32.421 0 0 1 69.732 39.859 A 28.519 28.519 0 0 1 70.707 36.603 Q 72.52 31.654 75.607 28.077 Q 78.694 24.5 82.81 22.442 Q 86.926 20.384 91.532 20.384 A 21.209 21.209 0 0 1 95.719 20.778 A 15.623 15.623 0 0 1 100.303 22.442 A 33.656 33.656 0 0 1 102.832 23.999 Q 104.031 24.818 104.982 25.651 A 16.258 16.258 0 0 1 106.036 26.656 Z M 230.888 21.56 L 230.888 72.52 L 222.068 72.52 L 222.068 21.56 L 230.888 21.56 Z M 106.036 59.682 L 106.036 34.398 A 15.948 15.948 0 0 0 103.899 32.2 Q 102.789 31.249 101.411 30.363 A 27.732 27.732 0 0 0 100.891 30.037 A 13.767 13.767 0 0 0 94.035 28.037 A 16.536 16.536 0 0 0 93.492 28.028 A 14.665 14.665 0 0 0 89.233 28.631 A 13.122 13.122 0 0 0 87.073 29.498 Q 84.182 30.968 82.124 33.516 Q 80.066 36.064 78.988 39.543 A 24.328 24.328 0 0 0 77.969 45.186 A 28.611 28.611 0 0 0 77.91 47.04 A 25.082 25.082 0 0 0 78.325 51.686 A 20.79 20.79 0 0 0 79.086 54.586 A 19.454 19.454 0 0 0 80.92 58.51 A 16.765 16.765 0 0 0 82.369 60.515 Q 84.476 63.014 87.367 64.435 Q 90.258 65.856 93.59 65.856 Q 97.216 65.856 100.499 64.141 Q 103.782 62.426 106.036 59.682 Z M 31.458 13.132 L 18.522 46.06 L 44.296 46.06 L 31.458 13.132 Z M 222.174 11.081 A 5.937 5.937 0 0 0 226.478 12.838 A 8.098 8.098 0 0 0 228.101 12.683 A 5.548 5.548 0 0 0 230.986 11.172 A 5.476 5.476 0 0 0 232.427 8.593 A 7.827 7.827 0 0 0 232.652 6.664 A 7.111 7.111 0 0 0 232.652 6.585 A 5.939 5.939 0 0 0 230.839 2.303 A 7.248 7.248 0 0 0 230.782 2.247 A 5.937 5.937 0 0 0 226.478 0.49 A 8.098 8.098 0 0 0 224.855 0.645 A 5.548 5.548 0 0 0 221.97 2.156 A 5.476 5.476 0 0 0 220.529 4.735 A 7.827 7.827 0 0 0 220.304 6.664 A 7.111 7.111 0 0 0 220.304 6.743 A 5.939 5.939 0 0 0 222.117 11.025 A 7.248 7.248 0 0 0 222.174 11.081 Z"
                vector-effect="non-scaling-stroke"
              />
            </g>
          </svg>

          <div class="close-left-nav" onclick="close_res_nav()">
          <ion-icon name="close-outline"></ion-icon>
          </div>
        </div>
        <div class="list-nav">
          <ul class="nav-list">
            <li class="outer-list">
              <a href="index.php">
                <ion-icon name="home-outline"></ion-icon>
                <span>Dashbaord</span>
              </a>
            </li>
            <li class="outer-list">
              <a href="colleges.php">
                <ion-icon name="business-outline"></ion-icon>
                <span>Colleges</span>
              </a>
            </li>
            <li class="outer-list">
              <a href="Queries.php">
                <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                <span>Queries</span>
              </a>
            </li>
            <li class="outer-list">
                <a href="applications.php">
                 <ion-icon name="document-text-outline"></ion-icon>
                  <span>Applications</span>
                </a>
            </li>
            <li class="outer-list">
                <a href="testimonials.php">
                 <ion-icon name="ribbon-outline"></ion-icon>
                  <span>Testimonials</span>
                </a>
            </li>
            <li class="outer-list">
              <a target="_blank" href="https://dashboard.tawk.to/#/dashboard/61c0c974c82c976b71c263f8">
                <ion-icon name="flag-outline"></ion-icon>
                <span>Live Support</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="copyright">
          <p style="text-align:center;">Developed by Ayondip Jana, Copyright@2022, All rights reserverd</p>
          <br>
          <p style="text-align:center; text-transform:none;">
            Release: v1.2.1
          </p>
        </div>
      </div>
      <div class="right-part">
        <div class="head">
          <div class="ham-name">
            <div class="mnu vy" onclick="hide()" id="mn">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="mnu ty" onclick="op_n()" id="mn">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="nm">Dashbord</div>
          </div>
          <div class="profile">
            <a href="javascript:void(0)">
              <img src="../../assets/images/svg/collage ideal.png" alt="" />
            </a>
            <div class="name">
              <span
                style="width: 4rem; text-overflow: ellipsis; overflow: hidden"
                >Collegeiconic</span
              >
              <small>Admin</small>
            </div>
            <div class="hover-bot">
              <ul>
                <li>
                  <a href="javascript:void(0)" onclick="logout()">
                    <i class="uil uil-sign-out-alt"></i>
                    <span>Logout</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>