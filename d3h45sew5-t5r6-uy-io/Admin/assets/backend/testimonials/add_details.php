<?php
require('../../require/connection.php');
$image=get_safe_value($con,$_POST['image']);
$review=get_safe_value($con,$_POST['review']);
$name=get_safe_value($con,$_POST['name']);
$return=array();
$status=1;
$qyery="INSERT INTO `testi`(`image`, `tname`, `rev`,`status`) VALUES ('$image','$name','$review','1')";
if(mysqli_query($con,$qyery)){
    $return['code']=1;
    echo json_encode($return);
}else{
    $return['code']=0;
    echo json_encode($return);
}

?>