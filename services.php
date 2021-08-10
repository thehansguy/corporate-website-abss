<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO META -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico"/>

    <!-- CSS Links -->
    
    <link rel="stylesheet" href="styles/header_styles.css">
    <link rel="stylesheet" href="styles/styles.css">
  
      <!-- INTEGRATION SECTION 1 -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href=" styles/slider.css">
    <!-- yep the part above! -->
    
    <link rel="stylesheet" href="styles/footer_styles.css">

    <!-- External Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans|Oswald:300' rel='stylesheet' type='text/css'>



    <title>ABSS</title>
</head>
<body>

<nav id="desktopNav" class="desktopNav">
	<div class="d-container1">
		<div class="d-logo"><a href="#">ABSS</a></div>
		<div class="d-social-icons">Social Icons</div>
	</div>
	<div class="d-container2">		
		<ul id="dmenu" class="d-menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="services.php">Services</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</div>
</nav>
<!--PEN CODE-->
<input type="checkbox" id="xBxHack" />
<nav id="mobileNav" class="mobileNav">
	<div class="m-container">
		<div class="logo"><a href="#">ABSS</a></div>
		<label class="navBars" for="xBxHack">
			<i class="fa fa-bars"></i>
		</label>
		<ul id="menu" class="menu">
		<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="services.php">Services</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</div>
</nav>
<!--END PEN CODE-->

<!-- Sections -->


<!-- Services Section 1-->

<div class="services-section-1">
  <div class="section-1-container">
        <h1 class="h-page-heading">Services</h1>
    </div> 
</div>

<div class="services-section-2">
  
 <!-- INTEGRATION SECTION 2 -->
    <!-- Slider main container -->
    <div class="swiper-container mySwiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide" >
          <img src="images/slider-image-1.png" alt="">
          <p>	Providing market entry information and advisory services to prospective investors from Asia who are interested in doing legitimate business in Ghana</p>
        </div>
        <div class="swiper-slide" >
          <img src="images/slider-image-2.png" alt="">
          <p>Working with respective embassies and missions of various Asian countries in Ghana to offer requisite assistance to prospective investors and existing businesses of Asian origin operating in Ghana. </p>
        </div>
        <div class="swiper-slide" >
         <img src="images/slider-image-3.png" alt="">
          <p>Providing a unique platform for organizing trade exhibitions and conferences in partnership with the Ministry of Trade and Industry(MoTI) and Ministry of Foreign Affairs(MoFA) to showcase their products and business lines to potential customers.</p>
        </div>
         <div class="swiper-slide" >
          <img src="images/slider-image-4.jpg" width="60%"alt="">
          <p>Assisting in creation of crowd-funding scheme in Ghana by the Association of Asian Business Executives in Ghana-AABE</p>
        </div>
        ...
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <div class="swiper-scrollbar"></div>
    </div>
    <!-- Yep integrate the stuff above -->

 </div>



  <footer >
    <div class="footer-top">
        <ul class="footer-top__left">
            <h3>Title 1</h3>
            <h3>Title 2</h3>
            <h3>Title 3</h3>
            <h3>Title 4</h3>
        </ul>

        <div class="footer-top__right">
            <h3>Title</h3>
            <form action="post">
                <input type="text">
                <button>Stay Connected</button>
            </form>
        </div> 
    </div>

    <div class="footer-bottom">
        <ul class="icons">
            <li>Icon1</li>
            <li>Icon2</li>
            <li>Icon3</li>
        </ul>
        <div class="copyright">copyright &copy;</div>
    </div>

</footer>


    
       <!-- INTEGRATION SECTION 3 -->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="slider.js"></script>
    <!-- yep that stuff up there -->

    <script src="scripts/header_script.js"></script>

</body>
</html>
