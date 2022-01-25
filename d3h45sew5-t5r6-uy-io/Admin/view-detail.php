<?php
require('assets/require/top.php');
authenticate();

 if(!isset($_GET['d'])){
     redirect('index.php');
     die();
 }
 $id=$_GET['d'];
 $query_id=$_GET['d'];
 $college=query_detail($con,$query_id);
 mysqli_query($con,"update queries set isread='1' where id='$query_id'")
?>
<div class="path">
    <div class="container">
        <a href="index.php">Home</a>
        /
        <a href="Queries.php">Queries</a>
        /
        <a href="view-detail.php?d=<?php echo $_GET['d']; ?>">Query detail</a>
    </div>
</div>
<div class="cartrow" id="catrow">
    <div class="gh">
        <section class="single-product">
            <div class="row">
                <div class="container" style="width:100%">
                    <div class="secondrow">
                        <div class="innerrow">
                            <div class="alldesc">
                                <div class="container">
                                    <div class="heading">
                                        <h4>Query details</h4>
                                    </div>
                                    <div class="desc-body">
                                        <div class="pdct-dts-1">
                                            <div class="pdct-dt-step">
                                                <h4>Name</h4>
                                                <p>
                                                    <?php echo $college['uname']; ?>
                                                </p>
                                            </div>
                                            <div class="pdct-dt-step">
                                                <h4>Email</h4>
                                                <div class="product_attr">
                                                    <?php echo $college['umail']; ?>
                                                </div>
                                            </div>
                                            <div class="pdct-dt-step">
                                                <h4>Mobile</h4>
                                                <div class="product_attr">
                                                    <?php echo $college['umobile']; ?>
                                                </div>
                                            </div>
                                            <div class="pdct-dt-step">
                                                <h4>Added On</h4>
                                                <div class="product_attr">
                                                    <?php   echo $college['time']; ?>
                                                </div>
                                            </div>
                                            <div class="pdct-dt-step">
                                                <h4>Query</h4>
                                                <div class="product_attr">
                                                    <?php   echo $college['uquery']; ?>
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