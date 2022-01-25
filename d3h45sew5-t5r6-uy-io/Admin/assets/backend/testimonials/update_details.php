<?php
require('../../require/connection.php');
$id=get_safe_value($con,$_POST['id']);
$name=get_safe_value($con,$_POST['name']);
$review=get_safe_value($con,$_POST['review']);
$image=get_safe_value($con,$_POST['image']);
$cq="select * from testi where id='$id'";
$cr=mysqli_query($con,$cq);
$testrow=mysqli_fetch_assoc($cr);
$return=array();
if($image==''){
    $image=$testrow['image'];
}else{
    $temp=$testrow['image'];
    $link="../../../../../assets/images/testimonials/$temp";
    unlink($link);
}
$q="update testi set tname='$name',rev='$review',image='$image' where id='$id'";
if(mysqli_query($con,$q)){
    $return['code']=1;
    $return['id']=$id;
    echo json_encode($return);
}else{
    $return['code']=0;
    echo json_encode($return);
}

?>