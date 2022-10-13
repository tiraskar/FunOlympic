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
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
      rel="stylesheet"
    />
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
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/schedule.css" rel="stylesheet" />
    <link href="assets/css/style.scss" rel="stylesheet" />
    <link rel="stylesheet" href="login.css">
  </head>

  <body>
    <!-- ======= Header ======= -->
    
    <!-- End Header -->
       
    <div class="top-header">
    <?php include "header.php";?>
        </div>
<!-- <div id="myHeader" class="header"></div> -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
      <div
        id="heroCarousel"
        class="container carousel carousel-fade"
        data-bs-ride="carousel"
        data-bs-interval="5000"
      >
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">
              Welcome to <span>FunOlympic 2022</span>
            </h2>
            <p class="animate__animated animate__fadeInUp">
              "Watch your favorite FunOlympic games. You've to login first to
              watch live games."
            </p>
            <!-- <a
              href="login.php"
              class="btn-get-started animate__animated animate__fadeInUp"
              >Login</a
            > -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->
   

    <main id="main">

      <div class="game-schedule">
        <h1 style="text-align:center">Game Schedule</h1>
      </div>
 
      <div class=" matchSchedule_details row">
                <div class="container match_next right-triangle">
                    <br>
                    <br>
                    <br>

                    <div class="bg-blackimg match_versus02">

                    <?php
                           $conn = mysqli_connect("localhost", "root", "", "funolympic");
                                        $q = "Select * from schedule";
                                        $qu = mysqli_query($conn, $q);
                                        while ($res= mysqli_fetch_assoc($qu)){ ?>
                        <div class=nextmatchDetails>

                            <div class=" container  wrap-logo clearfix match">
                            
                                <div class=logo-match><h4><?=$res['team1']?></h4><img src="images/gallery/<?=$res['logo1']?>"></div>
                                <div class=match_vs>vs</div>
                                <div class=logo-match><h4><?=$res['team2']?></h4><img src="images/gallery/<?=$res['logo2']?>"></div>
                            </div>
                            <div class="container game-time">
 <p class=match_dtls><?=$res['date']?> | <?=$res['time']?></p>

                            <p class=match_dtls><?=$res['venue']?></p>
                            </div>
                           
                        </div>
                        <?php } ?>
                    </div>
                </div>
              </div>
                
            </div>
    </div>
  
    <div class="cd-schedule-modal">
      <header class="cd-schedule-modal__header">
        <div class="cd-schedule-modal__content">
          <span class="cd-schedule-modal__date"></span>
          <h3 class="cd-schedule-modal__name"></h3>
        </div>
  
        <div class="cd-schedule-modal__header-bg"></div>
      </header>
  
      <div class="cd-schedule-modal__body">
        <div class="cd-schedule-modal__event-info"></div>
        <div class="cd-schedule-modal__body-bg"></div>
      </div>
  
      <a href="#0" class="cd-schedule-modal__close text-replace">Close</a>
    </div>
  
    <div class="cd-schedule__cover-layer"></div>
  </div>
         
      </section>
      <!-- End Features Section -->
    </main>
    <!-- End #main -->

   <div id="myFooter"></div>
    

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
