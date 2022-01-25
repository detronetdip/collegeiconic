<?php
require('assets/require/top.php');
authenticate();

 if(!isset($_GET['d'])){
     redirect('index.php');
     die();
 }
 $id=$_GET['d'];
 $college_id=$_GET['d'];
 $college=testi_detail($con,$college_id);
?>
<div class="path">
    <div class="container">
        <a href="index.php">Home</a>
        /
        <a href="testimonials.php">Testimonial</a>
            /
            <a href="testi-detail.php?&d=<?php echo $_GET['d']; ?>">Testimonial Details</a>
    </div>
</div>
<div class="cartrow" id="catrow">
    <div class="gh">
        <section class="single-product">
            <div class="row">
                <div class="container" style="width:100%">
                    <div class="innerrow">
                        <div class="left">
                            <div class="mainImage">
                                <img src="../../assets/images/testimonials/<?php echo $college['image']; ?>" alt="main-image" id="mi" />
                            </div>
                        </div>
                        <div class="right">
                            <h2 class="mt2"><?php echo $college['tname']; ?></h2>
                            <div class="no-stock">
                                <p class="pd-no">Review: <span><?php echo $college['rev']; ?></span></p>
                            </div>
                            <div class="product-group-dt">
                                <ul class="ordr-crt-share">
                                    <li>
                                        <a href="edit_testi.php?&d=<?php echo $_GET['d'];  ?>">
                                          <button
                                                style="display:flex;align-items:center;"
                                                class="order-btn hover-btn">
                                                <ion-icon name="brush-outline"></ion-icon>&nbsp; Edit</button></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php
   require('assets/require/foot.php');
?>