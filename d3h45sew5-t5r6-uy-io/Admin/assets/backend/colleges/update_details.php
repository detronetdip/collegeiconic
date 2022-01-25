<?php
require('../../require/connection.php');
$id=get_safe_value($con,$_POST['id']);
$category=get_safe_value($con,$_POST['category']);
$type=get_safe_value($con,$_POST['type']);
$name=get_safe_value($con,$_POST['name']);
$address=get_safe_value($con,$_POST['address']);
$courses=get_safe_value($con,$_POST['courses']);
$rating=get_safe_value($con,$_POST['rating']);
$approved=get_safe_value($con,$_POST['approved']);
$first=get_safe_value($con,$_POST['first']);
$second=get_safe_value($con,$_POST['second']);
$state=get_safe_value($con,$_POST['state']);
$cq="select * from colleges where id='$id'";
$cd2="select * from colleges where name='$name'";
$cr=mysqli_query($con,$cq);
$cr2=mysqli_query($con,$cd2);
$cro=mysqli_num_rows($cr2);
$testrow=mysqli_fetch_assoc($cr);
$return=array();
$status=1;
if($first==''){
    $first=$testrow['logo'];
}else{
    $temp=$testrow['logo'];
    $link="../../../../../assets/images/colleges/$temp";
    unlink($link);
}
if($second==''){
    $second=$testrow['back'];
}else{
    $temp=$testrow['back'];
    $link="../../../../../assets/images/colleges/$temp";
    unlink($link);
}
if($cro==0){
    $qyery="update colleges set name='$name',logo='$first',back='$second',category='$category',type='$type',address='$address',courses='$courses',rating='$rating',approved_by='$approved' where id='$id'";
    if(mysqli_query($con,$qyery)){
        $return['code']=1;
        $return['id']=$id;
        echo json_encode($return);
    }else{
        $return['code']=0;
        echo json_encode($return);
    }
}else{
    $r=mysqli_fetch_assoc(mysqli_query($con,$cq));
    $rg=$r['id'];
    if($cro>=1 && $rg==$id){
        $q="update colleges set name='$name',logo='$first',back='$second',category='$category',type='$type',state='$state',address='$address',courses='$courses',rating='$rating',approved_by='$approved' where id='$id'";
        if(mysqli_query($con,$q)){
            $return['code']=1;
            $return['id']=$id;
            echo json_encode($return);
        }else{
            $return['code']=0;
            echo json_encode($return);
        }
    }else{
        $return['code']=3;
        echo json_encode($return);
    }
}
?>