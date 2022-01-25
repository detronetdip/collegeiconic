<?php
session_start();

// $con= mysqli_connect('localhost','u686424295_adminofadb','r]UJB3C&&oT9');
// mysqli_select_db($con,'u686424295_ciconic');

$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'ciconic');

function get_safe_value($con,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($con,$str);
	 }
}
function college_detail_raw($con,$id){
	$sql="SELECT * FROM colleges WHERE id='$id'";
	$res=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($res);
	return $row;
}
function testi_detail_raw($con,$id){
	$sql="SELECT * FROM testi WHERE id='$id'";
	$res=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($res);
	return $row;
}
function college_detail($con,$id){
	$sql="SELECT
    colleges.*,
    cats.catname,
    types.n
FROM
    colleges,
    cats,
    types
WHERE
    colleges.id = '$id' AND colleges.category = cats.id AND colleges.type = types.id";
	$res=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($res);
	return $row;
}
function query_detail($con,$id){
	$sql="SELECT * FROM `queries` WHERE id='$id'";
	$res=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($res);
	return $row;
}
function testi_detail($con,$id){
	$sql="SELECT * FROM `testi` WHERE id='$id'";
	$res=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($res);
	return $row;
}
function application_detail($con,$id){
	$sql="select application.*, cats.catname from application,cats where application.id='$id' and cats.id=application.astream";
	$res=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($res);
	return $row;
}
function redirect($path){
	?>
        <script>
            window.location.href = '<?php echo $path; ?>';
        </script>
    <?php
}
function authenticate(){
	if(!isset($_SESSION['ADMIN_LOGIN'])){
		redirect('auth/');
		die();
	}
}
function countColleges($con){
	$sql="SELECT * FROM `colleges`";
	$res=mysqli_query($con,$sql);
	$row=mysqli_num_rows($res);
	return $row;
}
function countQueries($con){
	$sql="SELECT * FROM `queries`";
	$res=mysqli_query($con,$sql);
	$row=mysqli_num_rows($res);
	return $row;
}
function countApplications($con){
	$sql="SELECT * FROM `application`";
	$res=mysqli_query($con,$sql);
	$row=mysqli_num_rows($res);
	return $row;
}
function unreadMessages($con){
	$sql="SELECT * FROM `queries` WHERE isread='0'";
	$res=mysqli_query($con,$sql);
	$row=mysqli_num_rows($res);
	return $row;
}
?>