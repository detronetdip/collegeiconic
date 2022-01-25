<?php
 require('../../require/connection.php');
  $username=get_safe_value($con,$_POST['mail']);
  $password=get_safe_value($con,$_POST['password']);
  $q="select * from admin_users where email='$username'";
    $rs=mysqli_query($con,$q);
    $nor=mysqli_num_rows($rs);
    $result=array();
    if($nor==0){
        $result['status']=0;
        $result['msg']="Invalid Credentials";
    }else{
        $row=mysqli_fetch_assoc($rs);
        $dps=$row['password'];
        $verify = password_verify($password, $dps);
        if ($verify==1) {
            $_SESSION['ADMIN_LOGIN']="YES";
            $result['status']=1;
            $result['msg']="Login Successfull";
        } else {
            $result['status']=2;
            $result['msg']="Something Went Wrong";
        }
    }
    echo json_encode($result);
?>