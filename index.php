<?php
include "config.php";
$sql="SELECT * FROM hotel";
$res=mysqli_query($conn,$sql);
$sql1="SELECT * FROM home ";
$res1=mysqli_query($conn,$sql1);
$r=mysqli_fetch_array($res1);
?>
<!DOCTYPE html>
<html lang="en-US">
<head>

<!-- Basic Page Head -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Grandium - Hotel Booking</title>
<meta name="description" content="Responsive Hotel Template">
<meta name="author" content="Loco Theme - locotheme.com">
<meta name="keywords" content="hotel, hostel, motel, guesthouse, booking, accommodation, inn, spa, resort, travel, holiday, tourism, vacation, bootstrap, responsive">

<!-- Mobile Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
<link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="167x167" href="assets/img/apple-touch-icon-167x167.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon-180x180.png">

<!-- Css -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font.awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/magnific.popup.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">    
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66631247-10', 'auto');
  ga('send', 'pageview');

</script>    
    
</head>
<body>

<!-- Site Loading -->
<!--<div class="site-loading">
	<img src="assets/img/" alt="Loading">
</div>-->
<!-- Site Loading End -->

<!-- Site Back Top -->
<div class="site-backtop" title="Back to top">
	<i class="fa fa-angle-up"></i>
</div>
<!-- Site Back Top End -->

<!-- Site Header -->
<div class="site-header">
    <!-- Header Top -->
   <?php
   include "header.php";
   ?>
    <!-- Header Bottom End -->
</div>
<!-- Site Header End -->

<!-- Site Main -->
<div class="site-main">
    <!-- Section Slider -->
    <div class="section">
      <!--  <div class="widget-slider">
            <div class="wrapper-full">-->
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
                <!-- Slider Carousel -->
                <div class="carousel-inner">

      <div class="item active">
        <img src="admin/upload/<?php echo $r['slider1'];?>" alt="Los Angeles" style="width:100%;height:500px">
        <div class="carousel-caption">
             <h2>WELCOME TO THE GRANDIUM</h2>
                                <h1>Ultimate Hotel Booking Place</h1>
         

        </div>
      </div>

      <div class="item">
        <img src="admin/upload/<?php echo $r['slider2'];?>" alt="Chicago" style="width:100%;height:500px">
        <div class="carousel-caption">
          <h2>WELCOME TO THE GRANDIUM</h2>
                                <h1>Dreams come true</h1>

        </div>
      </div>
    
      <div class="item">
        <img src="admin/upload/<?php echo $r['slider3'];?>" alt="New York" style="width:100%;height:500px">
        <div class="carousel-caption">
          <h2>WELCOME TO THE GRANDIUM</h2>
                                <h1>Experience the Lavish</h1>

        </div>
      </div>
  
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-right"></span>
      <span class="sr-only">Next</span>
    </a>

</div>
                <!-- Slider Carousel End -->
                <!-- Slider Booking -->

               
                <!-- Slider Booking End -->
            </div>
        </div>
    </div>
    <!-- Section Slider End -->


    

    <!-- Section About Promo -->
    <div class="section">
        <div class="widget-about-promo" data-background="assets/img/photo-about.jpg">
            <div class="wrapper-inner">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <h5>ABOUT US</h5>
                            <h2></h2>
                            <p>This is the website where peoples dream comes to a reality, where you can book your holiday stays or honeymoon stays or your meetings from our large collection of hotels and their different types of rooms...</p>
                            <p>We are a leading online company in New Zealand providing a 'best in class' customer experience with the goal to be 'New Zealand's Travel Planner'. Through our website, leisure and business travelers can explore, research, compare prices and book a wide range of services catering to their travel needs. Since our inception in 2018, more than 7 lakh customers have used one or more of our comprehensive hotel bookings services. With hotels contracted across New Zealand, we are New Zealand's largest platform for hotels.</p>
                            <a href="aboutus.php" class="btn">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section About Promo End -->

    <!-- Section Rooms -->
    <div class="section" id="services">
        <div class="widget-rooms-carousel ">
            <div class="wrapper-inner">
                <!-- Testimonials Title -->
                <div class="widget-title">
                    <h5 style="font-size:25px">OUR HOTELS</h5>
                </div>
                
                <!-- Rooms Title End -->
                <!-- Rooms Carousel -->
                <div class="widget-carousel owl-carousel owl-theme">
                    <?php

                                             while($row=mysqli_fetch_array($res))
                                               {
                                                    ?>
                    <div class="rooms-item">
                        <div class="item-inner">
                            <div class="item-photo">
                                <a href="hotel_detail.php?id=<?php echo $row['id'];?>" data-background="admin/upload/<?php echo $row['photo'];?>"></a>
                            </div>
                            <div class="item-desc">
                                <h2><a href="hotel_detail.php?id=<?php echo $row['id'];?>"><?php echo $row['name'];?></a></h2>
                                <h3></h3>
                            
                                <i class=></i>
                            </div>
                        </div>
                    </div>
                       <?php
        }
        ?>
                </div>
                <!-- Rooms Carousel End -->
            </div>
        </div>
    </div>
    <!-- Section Rooms End -->

    
</div>
<!-- Site Main End -->

<!-- Site Footer -->
<div class="site-footer">
    <!-- Footer Top -->
   <?php
   include "footer.php";
   ?>
</div>
<!-- Site Footer End -->

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/jquery.fitvids.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/magnific.popup.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/booking.form.js"></script>
<script src="assets/js/contact.form.js"></script>

<!-- Map Scripts -->
<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script src="assets/js/gmap3.min.js"></script>

<!-- Custom Scripts -->
<script src="assets/js/custom.js"></script>
</body>

</html>