myHeader.innerHTML = `<header
      id="header"
      class="fixed-top d-flex align-items-center "
    >
      <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
          <h1 class="text-light">
            
          </h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          <img src="images/gallery/logo.png"/>
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="live.php">Live</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li id="login"><a href="signup.php">Signup</a></li>
            // <li class="dropdown">
            //    <i class="bi bi-chevron-down">
            //    <a href="topheader.php"></a>
            //    </i
            //   </li>
            //   <ul>
            //         <li><a href="changepass.php">Change Password</a></li>
            //         <li><a href="logout.php">Logout</a></li>
                    
            //       </ul>
            //     </li>
            //   </ul>
            // </li>
            
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>`;
