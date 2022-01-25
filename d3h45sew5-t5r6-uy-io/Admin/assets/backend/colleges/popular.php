<?php
require('../../require/connection.php');
$id=get_safe_value($con,$_POST['id']);
$isp=get_safe_value($con,$_POST['isp']);
if($cro==0){
    $qyery="update colleges set is_popular='$isp' where id='$id'";
    if(mysqli_query($con,$qyery)){
        $return['code']=1;
        echo json_encode($return);
    }else{
        $return['code']=0;
        echo json_encode($return);
    }
}
?>