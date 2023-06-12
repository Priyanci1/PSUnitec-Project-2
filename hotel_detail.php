<?php
include "config.php";
if(isset($_GET['id']))
{
$hid=$_GET['id'];
}
echo $hid;

$hotel=mysqli_query($conn,"SELECT * FROM `hotel` WHERE id='$hid' ");
$r2=mysqli_fetch_array($hotel);

$rooms=mysqli_query($conn,"SELECT * FROM `room` WHERE hid='$hid' ");

?>



<!DOCTYPE html>
<html lang="en-US">

<head>

<!-- Basic Page Head -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Grandium - Responsive Hotel Template</title>
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
<div class="site-loading">
    <img src="assets/img/loading.gif" alt="Loading">
</div>
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
</div>
<!-- Site Header End -->

<!-- Site Main -->
<div class="site-main">
    <!-- Section Page Title -->
    <div class="section">
        <div class="widget-page-title">
            <div class="widget-background" data-background="assets/img/photo-title.jpg"></div>
            <div class="wrapper-inner">
                <!-- Title -->
                <h5>EXPERIENCE THE FREEDOM</h5>
                <h1><?php echo $r2['name'];?></h1>
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices. Nunc et magna velit.</p>-->
                <!-- Title End -->
                <!-- Breadcrumb -->
                <div class="widget-breadcrumb">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        
                        <li><a href="#">ROOMS</a></li>
                        <li><?php echo $r2['name'];?></li>
                    </ul>
                </div>
                <!-- Breadcrumb End -->
            </div>
        </div>
    </div>
    <!-- Section Page Title End -->

    <!-- Section Rooms Detail -->
    <div class="section">
         

                                            
        <div class="wrapper-inner">
            <div class="widget-rooms-detail">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Room Slider -->
<div class="room-slider">
                            <div class="owl-carousel owl-theme owl-type1">
                                    <a href="admin/upload/<?php echo $r2['photo'];?>" data-background="admin/upload/<?php echo $r2['photo'];?>" title="Single Room" class="popup-gallery"></a>
                                   
                                </div>
</div>
                            <!-- Room Slider End -->
                            
                            <!-- Room Description -->
                            <div class="room-desc">
                                <h5>HOTEL DESCRIPTION</h5>
                                <p><?php echo $r2['content'];?></p>
                            </div>
                            <!-- Room Description End -->
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Section Rooms Detail End -->
    <!-- Section Features -->
    <div class="section">
        <div class="widget-features-grid">
            <div class="wrapper-inner">
                <!-- Features Title -->
                <div class="widget-title">
                    <h5>OUR ROOMS</h5>
                    <h2>Experience The Freedom</h2>
                  
                </div>
                <!-- Features Title End -->
                <!-- Features Content -->
                <div class="widget-inner">
                    <div class="row">
                         <?php

                                             while($nr=mysqli_fetch_array($rooms))
                                               {
                                                    ?>
                          <div class="col-lg-4 col-sm-6">
                            
                            <div class="features-item" data-background="admin/upload/<?php echo $nr['rphoto'];?>">
                                <a href="room_detail.php?id=<?php echo $nr['rid'];?>">
                                    <h3><?php echo $nr['rname'];?></h3>
                                    
                                </a>
                            </div>
                        </div>
                       <?php
        }
        ?>
                       
                        
                        
                        
                    </div>
                </div>
                <!-- Features Content End -->
            </div>
        </div>
    </div>
    <!-- Section Features End -->
</div>
<!-- Site Main End -->

<!-- Site Footer -->
<div class="site-footer">
    <!-- Footer Top -->
    <?php
    include "footer.php";
    ?>
    <!-- Footer Bottom End -->
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