<?php
// Initialize the session
require('config.php');
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

if(isset($_SESSION['id']))
{
    $sql = "SELECT *
            FROM users
            WHERE user_id =".$_SESSION['id'];
    $query = mysqli_query($link,$sql);
    if($query)
    {
        while($row = mysqli_fetch_array($query))
        {
            $myRole = $row['role'];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome to MartAda Restaurant</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start justify-content-between ">
      <i class="bi bi-phone d-flex align-items-center "><span>+23299426484</span></i>
      <i class="bi bi-clock ms-4 d-lg-flex align-items-center me-auto"><span>Mon-Sat: 08:00 AM - 7PM</span></i>
      
    </div>
  </section>
  <!-- style="position: absolute; right: 5.5em;" -->
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="welcome.php" style="font-size: 0.7em;">MartAda Restaurant</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="welcome.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
		  <li><a class="nav-link scrollto" href="status.php">Status</a></li>
		  <li><a class="nav-link scrollto" href="logout.php">Log Out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <?php if($myRole=='admin'){echo '<a  class = "book-a-table-btn bi ms-4 d-lg-flex d-none" href="index.php" style="background: #DC143C;" >Admin Site</a>';}?>
      <a href="bookingform.php" class="book-a-table-btn scrollto">Book a table</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
        
          <div class="carousel-item active" style="background: url(assets/img/slide/rest.jpeg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Delicious</span> Restaurant</h2>
                <p class="animate__animated animate__fadeInUp">
				</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="bookingform.php" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

 
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Check our tasty <span>Menu</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Show All</li>
              <li data-filter=".filter-foods">Foods</li>
              <li data-filter=".filter-drinks">Drinks</li>
              <li data-filter=".filter-dessert">Dessert</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container">
		
		  <div class="col-lg-6 menu-item filter-foods">
            <div class="menu-content">
              <a href="#">Pizza</a><span>NLe200</span>
            </div>
            <div class="menu-ingredients">
              Cheese Slice, Ham, Egg, Chicken, Tomato, Veggie, Salad, Fries, Spicy Tomato Sause 
            </div>
          </div>
		
		  <div class="col-lg-6 menu-item filter-drinks">
            <div class="menu-content">
              <a href="#">Tea</a><span>NLe50</span>
            </div>        
          </div>

          <div class="col-lg-6 menu-item filter-foods">
            <div class="menu-content">
              <a href="#">Meatball</a><span>NLe140</span>
            </div>
            <div class="menu-ingredients">
              Spaghetti, Garlic, Onion, Capsicum, Tomato Sauce
            </div>
          </div>
		 
		  
		 
          <div class="col-lg-6 menu-item filter-foods">
            <div class="menu-content">
              <a href="#">Turkey Chicken</a><span>Nle150</span>
            </div>
            <div class="menu-ingredients">
              Corissant with Cheese , Veggie ,Egg ,Turkey Ham 
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-drinks">
            <div class="menu-content">
              <a href="#">Fried Rice</a><span>NLe75</span>
            </div>        
          </div>
		  
          <div class="col-lg-6 menu-item filter-foods">
            <div class="menu-content">
              <a href="#">Fufu and Soup</a><span>NLe50</span>
            </div>
            <div class="menu-ingredients">
              Mixed Veggie, Cherry Tomato, Cucumber, Smoked Duck
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-dessert">
            <div class="menu-content">
              <a href="#">Banana Waffle</a><span>Nle120</span>
            </div>
            <div class="menu-ingredients">
              With fresh banana, nut, honey
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-drinks">
            <div class="menu-content">
              <a href="#">Beans and Rice</a><span>NLe60</span>
            </div>        
          </div>

          <div class="col-lg-6 menu-item filter-foods">
            <div class="menu-content">
              <a href="#">Hawaiian Breakkie</a><span>NLe210</span>
            </div>
            <div class="menu-ingredients">
              Garlic Bread, Ham ,Salad ,Chicken ,Cheesy Sause, Shimeji Mushroom
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-foods">
            <div class="menu-content">
              <a href="#">Friendly Breakfast</a><span>Nle130</span>
            </div>
            <div class="menu-ingredients">
              Salad, Garlic Bread, Cheesy Sausage, Ham, Scramble Egg 
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-drinks">
            <div class="menu-content">
              <a href="#">Spicy Mango Juice</a><span>Nle60</span>
            </div>
          </div>
		  
		  <div class="col-lg-6 menu-item filter-drinks">
            <div class="menu-content">
              <a href="#">Lemon Juice</a><span>Nle50</span>
            </div>        
          </div>
		  
		  <div class="col-lg-6 menu-item filter-foods">
            <div class="menu-content">
              <a href="#">Local Chicken</a><span>Nle100</span>
            </div>
            <div class="menu-ingredients">
              Fried Chicken, Salad, Fries, Cheese Sause 
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-dessert">
            <div class="menu-content">
              <a href="#">Cassava leaf with rice</a><span>NLe50</span>
            </div>
            <div class="menu-ingredients">
             Sponge cake, Chocolate sause, Berries
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->
	
	
	 <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Some photos from <span>Our Restaurant</span></h2>
          <p></p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/cassava.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/cassava.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/fufu.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/fufu.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery3.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/pizza.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/pizza.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery5.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery6.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery7.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/pizza.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/pizza.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->


  


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          <p></p>
        </div>
      </div>


      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p> 10 Upper Dan Street<br> NP Area Makeni</p>
            </div>

            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-clock"></i>
              <h4>Open Hours:</h4>
              <p>Monday-Saturday:<br>08:00 AM - 7:00 PM</p>
            </div>

            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+23299426484</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>MartAda Restaurant</h3>
      <div class="social-links">
        <a href="https://www.facebook.com/martinabduljalloh/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/martinabduljalloh/" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
     
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>