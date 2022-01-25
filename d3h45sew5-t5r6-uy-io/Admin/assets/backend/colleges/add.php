<?php
require('../../require/connection.php');
if($_FILES['file']['type']!='' && $_FILES['file']['type']!='image/jpeg' && $_FILES['file']['type']!='image/jpg'&& $_FILES['file']['type']!='image/png'){
    $msg=0;
    echo $msg;
}else{
    $filename = rand(1111111,9999999).$_FILES['file']['name'];
    $location = "../../../../../assets/images/colleges/".$filename;
    if(move_uploaded_file($_FILES['file']['tmp_name'],$location))
    {
	    echo $filename;
    }
}
?>