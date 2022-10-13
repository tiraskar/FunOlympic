<?php 
  session_start();
if(isset($_POST['name']) && 
   isset($_POST['email']) &&
   isset($_POST['subject']) && 
   isset($_POST['message'])){

    include "db_conn.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $db = mysqli_connect("localhost","root","","funolympic");
    $query = "INSERT INTO contact (name,email,subject, message) VALUES ('$name','$email','$subject','$message')";
	$temp = mysqli_query($db, $conn);
    
    if(!$temp){
        echo "error";
    }else{
        echo "Your Message is submitted.";
		header("location: contact.php");
	}
    }
  

    
    
     
        
    
?>