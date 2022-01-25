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
}function redirect($path){
	?>
        <script>
            window.location.href = '<?php echo $path; ?>';
        </script>
    <?php
}
function check($key){
	$store=array("dcvgfhsg","eng","nrs","MGN","ahmn","scn","hmn","agr","mdcl","mcmn","cmbn","it","dsgn","phmcy","law","pmd","dtl","pma","edu");
	$ind= array_search($key,$store);
	if($ind){
		return $ind;
	}else{
		redirect('index.php');
	}
}
function search_colleges($con,$key){
	$t=array();
	$sql="SELECT
    colleges.*,
    cats.catname,
    types.n
FROM
    colleges,
    cats,
    types
WHERE
    colleges.category = '$key' AND colleges.category = cats.id AND colleges.type = types.id";
	$res=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($res)){
		$t[]=$row;
	}
	return $t;
}
function search_colleges_query($con,$key){
	$t=array();
	$sql="SELECT
    colleges.*,
    cats.catname,
    types.n
FROM
    colleges,
    cats,
    types
WHERE (colleges.name like '%$key%' or colleges.state like '%$key%' or colleges.address like '%$key%') AND colleges.category = cats.id AND colleges.type = types.id";

	$res=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($res)){
		$t[]=$row;
	}
	return $t;
}
?>