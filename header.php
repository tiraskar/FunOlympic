
<header
      id="header"
      class="fixed-top d-flex align-items-center "
    >
      <div class=" container d-flex justify-content-between align-items-center" >
        <div class="logo">
          <!-- <h1 class="text-light">
            <a href="index.php"></a>
          </h1> -->
          <img src="images/gallery/logo.png" alt="">
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="live.php">Live</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li >
                 <?php include "topheader.php";?>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
