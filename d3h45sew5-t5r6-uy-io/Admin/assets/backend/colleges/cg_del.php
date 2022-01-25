<?php
require('../../require/connection.php');
$id=get_safe_value($con,$_POST['id']);
$query="select * from colleges where id='$id'";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($res);
$img1=$row['logo'];
$img2=$row['back'];
$link1="../../../../../assets/images/colleges/$img1";
$link2="../../../../../assets/images/colleges/$img2";
unlink($link1);
unlink($link2);
$q="delete from colleges where id='$id'";
if(mysqli_query($con,$q)){
    echo 1;
}else{
    echo 0;
}
?>