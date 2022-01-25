<?php 
require('assets/require/top.php');
authenticate();

?>
        <div class="path">
          <div class="container">
            <a href="index.php">Home</a>
            /
            <a href="colleges.php">colleges</a>
            /
            <a href="add_college.php">Add college</a>
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
                  <div class="heading">Category</div>
                  <select  id="ccat">
                    <option value="0">Select Category</option>
                  <?php
                    $res=mysqli_query($con,"select * from cats");
                    while($row=mysqli_fetch_assoc($res)){
                  ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['catname']; ?></option>
                  <?php } ?>
                  </select>
                </div>
                <div class="formrow">
                    <div class="heading">Type</div>
                    <select  id="ctype">
                      <option value="0">Select Type</option>
                      <option value="1">Govt</option>
                      <option value="2">Private</option>
                    </select>
                  </div>
                <div class="formrow">
                  <div class="heading">Name</div>
                  <input type="text" placeholder="Enter College Name *" id="cname" />
                </div>
                <div class="formrow">
                  <div class="heading">State</div>
                  <select  id="cstate">
                    <option value="0">Select State</option>

                  </select>
                </div>
                <div class="formrow f">
                  <div class="heading">City</div>
                  <input name="" id="caddress" placeholder="Enter city name"/>
                </div>
                <div class="formrow f">
                    <div class="heading">Courses</div>
                    <textarea name="" id="ccourses" placeholder="Enter Courses"></textarea>
                  </div>
                <div class="formrow">
                  <div class="heading">Rating</div>
                  <input type="number" id="crate" placeholder="Enter rating out of 5 *" />
                </div>
                <div class="formrow">
                  <div class="heading">Approved By</div>
                  <input type="text" id="cby" placeholder="Enter Organization" />
                </div>
                <div class="formrow ig">
                  <div class="imgdiv">
                    <div class="img">
                      <img
                      src="../Admin/assets/images/Group 2.png"

                        alt=""
                        id="preview1"
                      />
                    </div>
                    <div class="file">
                      <label for="uploadimage1">
                        Browse
                        <input
                          type="file"
                          name="productimage1"
                          id="uploadimage1"
                          onchange="show_preview('preview1','uploadimage1')"
                        />
                      </label>
                    </div>
                  </div>
                  <div class="imgdiv">
                    <div class="img">
                      <img
                      src="../Admin/assets/images/x.png"
                        alt=""
                        id="preview2"
                      />
                    </div>
                    <div class="file">
                      <label for="uploadimage2">
                        Browse
                        <input
                          type="file"
                          name="productimage2"
                          id="uploadimage2"
                          onchange="show_preview('preview2','uploadimage2')"
                        />
                      </label>
                    </div>
                  </div>
                </div>
                <div class="formrow">
                  <span id="pdstatus" style="color:red;font-size:1.3rem;"></span>
                  <a href="javascript:void(0)" id="pbtn" class="btn d-flex-center-a-j bg-main br-15" onclick="add_college()">
                    <ion-icon name="add-outline"></ion-icon>
                    <span>Add</span>
                  </a>
                </div>
              </form>
            </div>
          </div>
        </div>
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
                    document.getElementById("cstate").innerHTML=finalData;
                  })
          };
        </script>
<?php 

require('assets/require/foot.php');
?>      
