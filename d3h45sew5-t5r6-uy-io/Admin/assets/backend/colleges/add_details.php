<?php
require('../../require/connection.php');
$category=get_safe_value($con,$_POST['category']);
$type=get_safe_value($con,$_POST['type']);
$name=get_safe_value($con,$_POST['name']);
$address=get_safe_value($con,$_POST['address']);
$state=get_safe_value($con,$_POST['state']);
$courses=get_safe_value($con,$_POST['courses']);
$rating=get_safe_value($con,$_POST['rating']);
$approved=get_safe_value($con,$_POST['approved']);
$first=get_safe_value($con,$_POST['first']);
$second=get_safe_value($con,$_POST['second']);
$cq="select * from colleges where name='$name'";
$cr=mysqli_query($con,$cq);
$cro=mysqli_num_rows($cr);
$return=array();
$status=1;
if($cro==0){
   $qyery="INSERT INTO `colleges`(`name`, `category`, `type`,`state`, `address`, `courses`, `rating`, `approved_by`, `logo`, `back`, `status`) VALUES ('$name','$category','$type','$state','$address','$courses','$rating','$approved','$first','$second','$status')";
   if(mysqli_query($con,$qyery)){
       $return['code']=1;
       echo json_encode($return);
   }else{
       $return['code']=0;
       echo json_encode($return);
   }
}else{
   $return['code']=3;
   echo json_encode($return);
}
?>