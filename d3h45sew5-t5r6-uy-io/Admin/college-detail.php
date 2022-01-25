<?php
require('assets/require/top.php');
authenticate();

 if(!isset($_GET['d'])){
     redirect('index.php');
     die();
 }
 $id=$_GET['d'];
 $college_id=$_GET['d'];
 $college=college_detail($con,$college_id);
?>
<div class="path">
    <div class="container">
        <a href="index.php">Home</a>
        /
        <a href="colleges.php">Colleges</a>
        /
        <a href="college-detail.php?d=<?php echo $_GET['d']; ?>">College Detail</a>
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
                                <img src="../../assets/images/colleges/<?php echo $college['logo']; ?>" alt="main-image" id="mi" />
                            </div>
                            <div class="subimages flex">
                                <div class="sub">
                                    <img src="../../assets/images/colleges/<?php echo $college['logo']; ?>" alt="sub-images"
                                        onclick="view(this)" />
                                </div>
                                <div class="sub">
                                    <img src="../../assets/images/colleges/<?php echo $college['back']; ?>" alt="sub-images"
                                        onclick="view(this)" />
                                </div>
                            </div>
                        </div>
                        <div class="right">
                                <?php
                                        if($college['is_popular']==1){
                                            echo "<br><br><span class='badge red' style='font-size:1.2rem;'> Popular </span>";
                                        }
                                ?>
                            <h2 class="mt2"><?php echo $college['name']; ?></h2>
                            <div class="no-stock">
                                <p class="pd-no">Category <span><?php echo $college['catname']; ?></span></p>
                                <p class="stock-qty">Type <span><?php echo $college['n']; ?></span></p>
                            </div>
                            <p class="pp-descp">
                                <?php echo $college['courses']; ?>
                            </p>
                            <div class="product-group-dt">
                                <ul class="ordr-crt-share">
                                    <li>
                                        <a href="edit_college.php?&d=<?php echo $_GET['d'];  ?>">
                                          <button
                                                style="display:flex;align-items:center;"
                                                class="order-btn hover-btn">
                                                <ion-icon name="brush-outline"></ion-icon>&nbsp; Edit</button></a>
                                    </li>
                                    <br>
                                    <br>
                                    <br>
                                    <li style="display:flex; align-items:center">
                                    <?php
                                     if($college['is_popular']==1){
                                        ?>
                                        <input type="checkbox" id="isp" onchange="popular(<?php echo $_GET['d'];  ?>)" checked>
                                        <?php
                                     }else{
                                         ?>
                                        <input type="checkbox" id="isp" onchange="popular(<?php echo $_GET['d'];  ?>)">
                                        <?php
                                     }
                                    ?>
                                    <span style="font-size:1.2rem; margin-left:1rem">Mark as Popular college</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="secondrow">
                        <div class="innerrow">
                            <div class="alldesc">
                                <div class="container">
                                    <div class="heading">
                                        <h4>College details</h4>
                                    </div>
                                    <div class="desc-body">
                                        <div class="pdct-dts-1">
                                            <div class="pdct-dt-step">
                                                <h4>Address</h4>
                                                <p>
                                                    <?php echo $college['address']; ?>, <?php echo $college['state']; ?>
                                                </p>
                                            </div>
                                            <div class="pdct-dt-step">
                                                <h4>Approved By</h4>
                                                <div class="product_attr">
                                                    <?php echo $college['approved_by']; ?>
                                                </div>
                                            </div>
                                            <div class="pdct-dt-step">
                                                <h4>Rating</h4>
                                                <div class="product_attr">
                                                    <?php echo $college['rating']; ?>
                                                </div>
                                            </div>
                                            <div class="pdct-dt-step">
                                                <h4>Added On</h4>
                                                <div class="product_attr">
                                                    <?php   echo $college['added_on']; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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