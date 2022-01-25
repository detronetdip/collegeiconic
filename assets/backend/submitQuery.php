<?php
    require("../require/connection.php");
    $name=get_safe_value($con,$_POST['name']);
    $email=get_safe_value($con,$_POST['email']);
    $mobile=get_safe_value($con,$_POST['mobile']);
    $query=get_safe_value($con,$_POST['query']);
    $return=array();
    $q="INSERT INTO `queries`(`uname`, `umobile`, `umail`, `uquery`, `isread`) VALUES ('$name','$mobile','$email','$query','0')";
    if(mysqli_query($con,$q)){
        $return['code']=1;
        echo json_encode($return);
    }else{
        $return['code']=0;
        echo json_encode($return);
    }
?>