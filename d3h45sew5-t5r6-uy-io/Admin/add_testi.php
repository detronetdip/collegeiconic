<?php 
require('assets/require/top.php');
authenticate();

?>
        <div class="path">
          <div class="container">
          <a href="index.php">Home</a>
            /
            <a href="testimonials.php">testimonials</a>
            /
            <a href="add_testi.php">Add testimonials</a>
          </div>
        </div>
        <div class="cartrow" id="catrow">
          <div class="gh">
            <div class="heading">
              <h3>Add college</h3>
            </div>
            <div class="maincontainer2">
              <form action="#">
                <div class="formrow">
                  <div class="heading">Name</div>
                  <input type="text" placeholder="Enter Name *" id="cname" />
                </div>
                <div class="formrow f">
                  <div class="heading">Review</div>
                  <textarea name="" id="creview" placeholder="Enter review *"></textarea>
                </div>
                <div class="formrow ig" style="justify-content:end;">
                  <div class="imgdiv">
                    <div class="img">
                      <img
                      src="../Admin/assets/images/rt.png"
                        alt=""
                        id="preview2"
                      />
                    </div>
                    <div class="file">
                      <label for="uploadimage21">
                        Browse
                        <input
                          type="file"
                          name="productimage2"
                          id="uploadimage21"
                          onchange="show_preview('preview2','uploadimage21')"
                        />
                      </label>
                    </div>
                  </div>
                </div>
                <div class="formrow">
                  <span id="pdstatus" style="color:red;font-size:1.3rem;"></span>
                  <a href="javascript:void(0)" id="pbtn" class="btn d-flex-center-a-j bg-main br-15" onclick="add_testi()">
                    <ion-icon name="add-outline"></ion-icon>
                    <span>Add</span>
                  </a>
                </div>
              </form>
            </div>
          </div>
        </div>
<?php 

require('assets/require/foot.php');
?>      
