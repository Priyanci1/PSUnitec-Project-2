<?php
include "config.php";
$id=$_GET['id'];
$sql2="SELECT * FROM room where rid='$id'";
$res2=mysqli_query($conn,$sql2);
$r1=mysqli_fetch_array($res2);
if(isset($_POST['submit']))
{

        
                $checkindate=$_POST['checkindate'];
                 $checkoutdate=$_POST['checkoutdate'];
                  $checkintime=$_POST['checkintime'];

                $name=$_POST['name'];
                 $age=$_POST['age'];
                  $gender=$_POST['gender'];
                   $email=$_POST['email'];
                   $phno=$_POST['phno'];
                    $location=$_POST['location'];
                   $nationality=$_POST['nationality'];
                   $adult=$_POST['adult'];
                   $hotelname=$_POST['hotelname'];
                   $roomtype=$_POST['roomname'];
            
$sql="insert into information(id,checkindate,checkoutdate,checkintime,name,email,age,gender,phno,location,nationality,adult,hotel,roomtype)values('','$checkindate','$checkoutdate','$checkintime','$name','$email','$age','$gender','$phno','$location','$nationality','$adult','$hotelname','$roomtype')";  
$res=mysqli_query($conn,$sql);
if($res)
{

    $from = "admin";
    $to = "$email";
    $subject = "Booking Confirmation";
    $message = "Your booking for the hotel $hotelname is confirmed. Thank you for choosing us!!!!";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
   ?>
<script>alert("Booking Confirmation will be forwarded to your mail id");</script>
<?php
}
else
{                     
 ?>
<script>alert("Please try again later");</script>
<?php
}

}
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
    <!-- Header Bottom End -->
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
                <h1><?php echo $r1['rname'];?></h1>
              <!--  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices. Nunc et magna velit.</p>-->
                <!-- Title End -->
                <!-- Breadcrumb -->
                <div class="widget-breadcrumb">
                    <ul>
                        <li><a href="#">HOME</a></li>
                       
                        <li><a href="#">ROOMS</a></li>
                        <li><?php echo $r1['rname'];?></li>
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
                        <div class="col-md-8">
                            <!-- Room Slider -->
                           <div class="room-slider">
                                <div class="room-price">Rs <?php echo $r1['price']; ?></div>
                                <div class="owl-carousel owl-theme owl-type1">
                                    <?php echo $r1['r360'];?> 
                                        
                                   
                                </div>
                            </div>
                            <!-- Room Slider End -->
                           
                            <!-- Room Description -->
                            <div class="room-desc">
                                <h5>ROOM DESCRIPTION</h5>
                                <p><?php echo $r1['rcontent'];?></p>
                            </div>
                            <!-- Room Description End -->
                        </div>
                        <div class="col-md-4">
                            <!-- Room Booking -->
                            <div class="room-booking">
                                <h5>BOOKING</h5>
                                <h2>Book a Room</h2>
                                <div class="data-form">
                             <form method="POST" class="form-horizontal mb-0" action="">
                    

                    
                                                <div class="col-md-12">
                                                <i class="fa fa-calendar-plus-o"></i>
                                                <input type="text" name="checkindate" id="form-checkin" value="CHECKIN DATE" placeholder="CHECK IN" class="datepicker" required>
                                            </div>
                                            <div class="col-md-12">
                                                <i class="fa fa-calendar-plus-o"></i>
                                                <input type="text" name="checkoutdate" id="form-checkout" value="CHECKOUT DATE" placeholder="CHECK OUT" class="datepicker" required>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <input type="hidden" name="roomname" value="<?php echo $r1['rname']; ?>">
<?php $hid=$r1['hid'];
$htl=mysqli_query($conn,"SELECT * FROM hotel where id='$hid'");
$hotel=mysqli_fetch_array($htl);
 ?>
                                                <input type="hidden" name="hotelname" value="<?php echo $hotel['name']; ?>">
                                                <input type="time" name="checkintime" id="form-name" placeholder="CHECK IN TIME" required>
                                            </div>
                                             <div class="col-md-12">
                                                <input type="text" name="name" id="form-name" placeholder="YOUR NAME" required>
                                            </div>
                                             <div class="col-md-12">
                                                <input type="text" name="email" id="form-phone" placeholder="YOUR EMAIL" required>
                                            </div>
                                             <div class="col-md-12">
                                                <input type="text" name="phno" id="form-phone" placeholder="YOUR PHONE" required>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="age" id="form-surname" placeholder="YOUR AGE">
                                            </div>
                                            <div class="col-md-6">
                                                <select name="gender">
                                                <option value="">-SELECT GENDER-</option>
                                                <option value="F">FEMALE</option>
                                                <option value="M">MALE</option>
                                                </select>
                                            </div>
                                           
                                           
                                           
                                            <div class="col-md-6">
                                                <input type="text" name="location" id="form-address2" placeholder="LOCATION">
                                            </div>
                                           
                                            <div class="col-md-6">
                                                <input type="text" name="nationality" id="form-address2" placeholder="NATIONALITY">
                                            </div>
                                             
                                            <div class="col-md-12">
                                                <i class="fa fa-caret-down"></i>
                                                <select name="adult" required>
                                                    <option value="">ADULTS</option>
                                                   <?php
                                                     for($i=1;$i<=10;$i++)
                                                     { ?>
                                                    <option value="<?php echo $i; ?>"><?php echo $i; ?> ADULT</option>
                                                     <?php } ?>
                                                    
                                                </select>
                                            </div>
                                        
                                                    <div class="col-md-12">
                                                        <button style="background-color:;" name="submit" class="btn btn-raised btn-primary btn-block waves-effect waves-light" type="submit">submit</button>
                                                    </div>
                                                
                                            </form>
                                   
                                </div>
                            </div>
                            <!-- Room Booking End -->
                            <!-- Room Features -->
                            <div class="room-features">
                                <h5>FEATURES</h5>
                                <h2>Room Features</h2>
                                <ul>
                                    <li><i class="fa fa-check"></i> BREAKFAST</li>
                                    <li><i class="fa fa-check"></i> WI-FI</li>
                                    <li><i class="fa fa-check"></i> HAIR DRYER</li>
                                    <li><i class="fa fa-check"></i> LCD TV</li>
                                    <li><i class="fa fa-check"></i> SHOWER AND TAB</li>
                                    <li><i class="fa fa-check"></i> SECURITY SYSTEM</li>
                                    <li><i class="fa fa-check"></i> AIR CONDITIONING</li>
                                    <li><i class="fa fa-check"></i> MINI BAR</li>
                                    <li><i class="fa fa-check"></i> TEA AND COFFEE SET</li>
                                </ul>
                            </div>
                            <!-- Room Features End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Rooms Detail End -->
     <!-- Section booking start -->
    <div class="section">
        <div class="widget-booking-form">
            <div class="wrapper-inner">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <!-- Booking Complete -->
                            <div class="booking-complete">
                                <h5>BOOKING</h5>
                                <h2>Your Reservation Completed</h2>
                                <div class="complete-message">
                                    <i class="fa fa-check"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper.    
                                </div>
                            </div>
                            <!-- Booking Complete End -->
                            <!-- Booking Form -->
                      
                            <!-- Booking Form End -->
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
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