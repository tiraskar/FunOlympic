<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>About</title>
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
    <!-- End Header -->
<div class="top-header">
    <?php include "header.php";?>
        </div>
    <main id="main">
      <!-- ======= About Us Section ======= -->
      <section class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <h2>About Us</h2>
            <ol>
              <li><a href="index.html">Home</a></li>
              <li>About Us</li>
            </ol>
          </div>
        </div>
      </section>
      <!-- End About Us Section -->

      <!-- ======= About Section ======= -->
      <section class="about" data-aos="fade-up">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <img src="assets/img/about.jpg" class="img-fluid" alt="" />
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <h3>All About FunOlympic 2022</h3>
              <p class="fst-italic">
                FunOlympic 2022 is happing in Bayjing. People can watch their
                favorite games live. Features of FunOlympic for users are
                mention below.
              </p>
              <ul>
                <li><i class="bi bi-check2-circle"></i>FunOlympic Pictures</li>
                <li><i class="bi bi-check2-circle"></i> Game Highlights</li>
                <li><i class="bi bi-check2-circle"></i> Game Schedule</li>
                <li><i class="bi bi-check2-circle"></i> Lives games</li>
                <li><i class="bi bi-check2-circle"></i> Change Password</li>
              </ul>
              <p>
                User need to login to FunOlympic to watch live games. In case of
                any issues user can contact to admin of FunOlympic for help from
                contact page.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- ======= Facts Section ======= -->
      <section class="facts section-bg" data-aos="fade-up">
        <div class="container">
          <div class="row counters">
            <div class="col-lg-3 col-6 text-center">
              <span
                data-purecounter-start="0"
                data-purecounter-end="40"
                data-purecounter-duration="1"
                class="purecounter"
              ></span>
              <p>Games</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span
                data-purecounter-start="0"
                data-purecounter-end="196"
                data-purecounter-duration="1"
                class="purecounter"
              ></span>
              <p>Country</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span
                data-purecounter-start="0"
                data-purecounter-end="1600"
                data-purecounter-duration="1"
                class="purecounter"
              ></span>
              <p>Players</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span
                data-purecounter-start="0"
                data-purecounter-end="600"
                data-purecounter-duration="1"
                class="purecounter"
              ></span>
              <p>Olympic Team Member</p>
            </div>
          </div>
        </div>
      </section>
      <!-- End Facts Section -->
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
    <script src="header.js"></script>
    <script src="footer.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
