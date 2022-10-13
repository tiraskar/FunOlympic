<?php 

$conn = mysqli_connect("localhost", "root", "", "funolympic");
$id = $_GET['id'];
$q = "DELETE FROM contact  WHERE id ='$id'";
$qu = mysqli_query($conn, $q);
header("location:table.php");
?>