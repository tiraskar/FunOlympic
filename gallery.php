<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>FunOlympic</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
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

    <!-- =======================================================
  * Template Name: Moderna - v4.10.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <!-- <div id="myHeader"></div> -->
    <div class="top-header">
    <?php include "header.php";?>
        </div>
    <!-- End Header -->

    <main id="main">
      <!-- ======= Our Gallery Section ======= -->
      <section class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <h2>Our Gallery</h2>
            <ol>
              <li><a href="index.html">Home</a></li>
              <li>Our Gallery</li>
            </ol>
          </div>
        </div>
      </section>
      <!-- End Our Gallery Section -->

      <!-- ======= Portfolio Section ======= -->
      <section class="portfolio">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">FunOlympic 2022 Pictures</li>
              </ul>
            </div>
          </div>

          <div
            class=" portfolio-container d-flex "
            data-aos="fade-up"
            data-aos-easing="ease-in-out"
            data-aos-duration="500"
          >
            <div class="d-flex  portfolio-wrap">
              <?php 
                                        $conn = mysqli_connect("localhost", "root", "", "funolympic");
                                        $q = "Select * from gallery";
                                        $qu = mysqli_query($conn, $q);
                                        while ($res= mysqli_fetch_assoc($qu)){ ?>
              <div class="w-100 col-md-3 portfolio-item ">
               
                <img
                  src="images/gallery/<?=$res['filename']?>"
                  class="img-fluid"
                  alt=""
                />
                <div class="portfolio-info">
                  <div>
                    
                    <a
                      href="images/gallery/<?=$res['filename']?>"
                      data-gallery="portfolioGallery"
                      class="portfolio-lightbox"
                      
                      ><i class="bx bx-plus"></i
                    ></a>
                    
                  </div>
                </div>
              </div>
              <?php
                                        }
                                        ?>
            </div>

            
          </div>
        </div>
      </section>
      <!-- End Portfolio Section -->
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
