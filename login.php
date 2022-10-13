<?php
session_start();

    // connect to the database
    $db = mysqli_connect("localhost","root","","funolympic");

    if(!$db){
        die("connection error...".mysqli_connect_error());
    }

// after form submitted insert values in to tables.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($db,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($db,$password);
	$password = md5($password);
	//Checking for user already exist in the table or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='$password'";
	$result = mysqli_query($db,$query) or die(mysqli_errno($db));
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Username OR Password is incorrect.</h3>
<br/><a href='login.php'>Login</a></div>";
	}
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />

<title>Login</title>
<style>
    /* .bg-image-vertical {
position: relative;
overflow: hidden;
background-repeat: no-repeat;
background-position: right center;
background-size: auto 100%;
} */

@media (min-width: 1025px) {
.h-custom-2 {
height: 100%;
}
}
</style>
</head>

<body>
    <div id="myHeader"></div>
<section class="vh-100" style="margin-left:30rem;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form action="" method="post" name="login" style="width: 23rem;">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in to FunOlympic</h3>

            <div class="form-outline mb-4">
              
              <label class="form-label" for="form2Example18">User Name</label>
              <input type="text" name="username" id="form2Example18" class="form-control form-control-lg" required />
            </div>

            <div class="form-outline mb-4">
                 <label class="form-label" for="form2Example28">Password</label>
              <input type="password" name="password" class="form-control form-control-lg" required/>
             
            </div>

            <div class="pt-1 mb-4">
              <input class="btn btn-info btn-lg btn-block" type="submit" name="submit" value="Login">
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="contact.php">Forgot password?</a></p>
            <p>Don't have an account? <a href="signup.php" class="link-info">Register here</a></p>

          </form>

        </div>

      </div>
      
    </div>
  </div>
</section>
<div id="myFooter"></div>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script defer src="header.js"></script>
  <script defer src="footer.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>