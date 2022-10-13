<?php 
session_start();

if ( isset($_SESSION['username'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Live</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <!-- <div id="myHeader"></div> -->
    <div class="top-header">
    <?php include "header.php";?>
        </div>
    <!-- End Header -->

    <main id="main">
      <section class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <h2>Live</h2>
            <ol>
              
              <li>Available Live</li>
            </ol>
          </div>
        </div>
      </section>

      <!-- ======= Why Us Section ======= -->
      <section
        class="why-us section-bg container d-flex px-1"
        data-aos="fade-up"
        date-aos-delay="200"
      >
       
         
              <iframe
                frameborder="0"
                marginheight="0"
                marginwidth="0"
                height="520"
                src="https://cdn2.crichd.pro/embed2.php?id=skyfb&q=Sky Sports Football"
                name="iframe_a"
                scrolling="no"
                width="800"
               
                allowfullscreen
              ></iframe>
            

            
              <script id="cid0020000325177439289" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width:350px; height: 516px;">{"handle":"funolympicmessage","arch":"js","styles":{"a":"707070","b":100,"c":"FFFFFF","d":"FFFFFF","k":"707070","l":"707070","m":"707070","n":"FFFFFF","p":"9.99","q":"707070","r":100,"ab":false,"usricon":0,"surl":0,"cnrs":"0.35","fwtickm":1}}</script>
          
         
      
      </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <div id="myFooter"></div>
    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

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


<?php }else {
	header("Location: login.php");
	exit;
} ?>
