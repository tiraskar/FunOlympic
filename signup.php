<?php
    session_start();

    // connect to the database
    $db = mysqli_connect("localhost","root","","funolympic");

    // if(!$db){
    //     die("connection error...".mysqli_connect_error());
    // }else{
    //     echo "You are successfully connected.";
    // }
    
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
		$password = md5($password);
        
    $temp = mysqli_query($db,"INSERT INTO users (username,email,password) 
    VALUES ('$username','$email','$password')");
    
    if(!$temp){
        echo "error";
    }else{
        echo "Your registration is done.";
		header("location: login.php");
	}
    }
?>

<html>
<head>
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

    <title>Registration</title>
</head>

<body>
<!-- <div class="container">
      <form class="form-signin" method="POST" name="registration">
        <h2 class="form-signin-heading">Please Register</h2>
        <div class="input-group">
	        <span class="input-group-addon" id="basic-addon1">Username</span>
	        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
	    </div>
        <label for="inputEmail" class="sr-only">Email Address</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        <br>
        <input name="submit" type="submit" value="Register" />
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
      </form>
</div> -->
<div id="myHeader"></div>

<br>
<br><br>
<section class="vh-50 " >
  <div class="mask d-flex align-items-center h-80 gradient-custom-3 ">
    <div class="container h-80 w-75">
      <div class="row d-flex  justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-3">Create an account</h2>

              <form  method="POST" name="registration">

                <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example1cg">User Name</label>
                  <input type="text" name="username" id="form3Example1cg" class="form-control form-control-md" required />
                </div>

                <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example3cg">Your Email</label>
                  <input type="email" name="email" id="form3Example3cg" class="form-control form-control-md" required/>
                </div>

                <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example4cg">Password</label>
                    <input type="password" name="password" id="form3Example4cg" class="form-control form-control-md" required />
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" name="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
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