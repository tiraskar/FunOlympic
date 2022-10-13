<?php 
extract($_POST);
function check($con, $Old, $new){
	$update = "update users set pass = md5('$new') where pass = password_hash('$Old') and id=1";
	$compile = mysqli_query($con, $update);
	return $compile;
}
if($new==$confirm){
$result=check($con, $Old, $new);
if($result){
	header("Location:index.php?x=change_password&msg=success");
}
} else{
	header("Location: change_password&msg=err");
}

 ?>