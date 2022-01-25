<?php
    require("../require/connection.php");
    $name=get_safe_value($con,$_POST['name']);
    $email=get_safe_value($con,$_POST['email']);
    $mobile=get_safe_value($con,$_POST['mobile']);
    $state=get_safe_value($con,$_POST['state']);
    $college=get_safe_value($con,$_POST['college']);
    $bord=get_safe_value($con,$_POST['bord']);
    $stream=get_safe_value($con,$_POST['stream']);
    $level=get_safe_value($con,$_POST['level']);
    $return=array();
    $q="INSERT INTO `application`(`aname`, `amobile`, `amail`, `acollege`,`astate`, `abord`, `astream`, `alevel`, `isread`) VALUES ('$name','$mobile','$email','$college','$state','$bord','$stream','$level','0')";
    if(mysqli_query($con,$q)){
        $return['code']=1;
        echo json_encode($return);
    }else{
        $return['code']=0;
        echo json_encode($return);
    }
?>