<?php 
require('assets/require/top.php');
authenticate();

if(!isset($_GET['d'])){
    redirect('index.php');
    die();
}
$id=$_GET['d'];
$college_id=$_GET['d'];
$college=testi_detail_raw($con,$college_id);
?>
        <div class="path">
          <div class="container">
            <a href="index.php">Home</a>
            /
            <a href="testimonials.php">Testimonial</a>
            /
            <a href="edit_testi.php?&d=<?php echo $_GET['d']; ?>">Edit Testimonial</a>
          </div>
        </div>
        <div class="cartrow" id="catrow">
          <div class="gh">
            <div class="heading">
              <h3>Edit Testimonial</h3>
            </div>
            <div class="maincontainer2">
              <form action="#">
              <div class="formrow">
                  <div class="heading">Name</div>
                  <input type="text" placeholder="Enter Name *" id="cname" value="<?php echo $college['tname'] ?>" />
                </div>
                <div class="formrow f">
                  <div class="heading">Review</div>
                  <textarea name="" id="creview" placeholder="Enter review *"><?php echo $college['rev'] ?></textarea>
                </div>
                <div class="formrow ig" style="justify-content:end;">
                  <div class="imgdiv">
                    <div class="img">
                      <img
                      src="../../assets/images/testimonials/<?php echo $college['image']; ?>"

                        alt=""
                        id="preview1"
                      />
                    </div>
                    <div class="file">
                      <label for="uploadimage21">
                        Browse
                        <input
                          type="file"
                          name="productimage1"
                          id="uploadimage21"
                          onchange="show_preview('preview1','uploadimage21')"
                        />
                      </label>
                    </div>
                  </div>
                </div>
                <div class="formrow">
                  <span id="pdstatus" style="color:red;font-size:1.3rem;"></span>
                  <a href="javascript:void(0)" id="pbtn" class="btn d-flex-center-a-j bg-main br-15" onclick="edit_testi(<?php echo $id ?>)">
                    <ion-icon name="brush-outline"></ion-icon>
                    &nbsp;
                    <span>Edit</span>
                  </a>
                </div>
              </form>
            </div>
          </div>
        </div>
<?php 

require('assets/require/foot.php');
?>      
