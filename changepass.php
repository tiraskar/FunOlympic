<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "funolympic");
if(isset($_POST['Submit']))
{
 $oldpass=md5($_POST['password']);
 $id=$_SESSION['id'];
 $newpassword=md5($_POST['password']);
$sql=mysqli_query($con,"SELECT password FROM users where password='$oldpass' && id='$id'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"update users set password=' $newpassword' where id='$id'");
$_SESSION['id']="Password Changed Successfully !!";
}
else
{
$_SESSION['id']="Old Password not match !!";
}
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p style="color:red;"><?php echo $_SESSION['id'];?><?php echo $_SESSION['id']="";?></p>
<form name="chngpwd" action="" method="post" onSubmit="return valid();">
<table align="center">
<tr height="50">
<td>Old Password :</td>
<td><input type="password" name="password" id="opwd"></td>
</tr>
<tr height="50">
<td>New Passowrd :</td>
<td><input type="password" name="password" id="npwd"></td>
</tr>
<tr height="50">
<td>Confirm Password :</td>
<td><input type="password" name="password" id="cpwd"></td>
</tr>
<tr>
<td><a href="index.php">Back to login Page</a></td>
<td><input type="submit" name="Submit" value="Change Passowrd" /></td>
</tr>
 </table>
</form>

    <script type="text/javascript">
function valid()
{
if(document.chngpwd.opwd.value=="")
{
alert("Old Password Filed is Empty !!");
document.chngpwd.opwd.focus();
return false;
}
else if(document.chngpwd.npwd.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.npwd.focus();
return false;
}
else if(document.chngpwd.cpwd.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.cpwd.focus();
return false;
}
else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cpwd.focus();
return false;
}
return true;
}

</script>
</body>
</html>