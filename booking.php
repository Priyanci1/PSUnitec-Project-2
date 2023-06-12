<?php
include "config.php";
if(isset($_POST['submit']))
{

        
                $name=$_POST['name'];
                 $age=$_POST['age'];
                  $gender=$_POST['gender'];
                   $phno=$_POST['phno'];
                    $location=$_POST['location'];
                   $nationality=$_POST['nationality'];
            
echo $sql="insert into information(id,name,age,gender,phno,location,nationality)values('','$name','$age','$gender','$phno','$location','$nationality')";  
$res=mysqli_query($conn,$sql);
if($res!="")
{
    echo "successfully inserted";
}
else
{                     

    echo "insertion failed";
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
  
    <!-- Section Page Title End -->

    <!-- Section Booking -->
    <div class="section">
        <div class="widget-booking-form">
            <div class="wrapper-inner">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <!-- Booking Complete -->
                           
                            <!-- Booking Complete End -->
                            <!-- Booking Form -->
                            <div class="booking-form">
                                <h5></h5>
                                <h2>Personal Info</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper.</p>
                                <div class="data-form">
                              <form method="POST" class="form-horizontal mb-0" action="">
                    

                    
                                                <div class="col-md-6">
                                                <input type="text" name="name" id="form-name" placeholder="YOUR NAME">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="age" id="form-surname" placeholder="YOUR AGE">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="gender" id="form-surname" placeholder="SEX">
                                            </div>
                                           
                                            <div class="col-md-6">
                                                <input type="text" name="phno" id="form-phone" placeholder="YOUR PHONE">
                                            </div>
                                           
                                            <div class="col-md-6">
                                                <input type="text" name="location" id="form-address2" placeholder="LOCATION">
                                            </div>
                                           
                                            <div class="col-md-6">
                                                <input type="text" name="nationality" id="form-address2" placeholder="NATIONALITY">
                                            </div>
                                               
                     
                    
                                                <div class="form-group text-center row m-t-20">
                                                    <div class="col-12">
                                                        <button style="background-color:;" name="submit" class="btn btn-raised btn-primary btn-block waves-effect waves-light" type="submit">submit</button>
                                                    </div>
                                                </div>
                    
                                               
                                            </form>
                                </div>
                            </div>
                            <!-- Booking Form End -->
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Booking End -->
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