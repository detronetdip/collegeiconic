<?php
require('../../require/connection.php');
$id=get_safe_value($con,$_POST['id']);
$query="select * from testi where id='$id'";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($res);
$img1=$row['image'];
$link1="../../../../../assets/images/testimonials/$img1";
unlink($link1);
$q="delete from testi where id='$id'";
if(mysqli_query($con,$q)){
    echo 1;
}else{
    echo 0;
}
?>