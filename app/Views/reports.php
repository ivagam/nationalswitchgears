<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>National Switchgears Achievement | Reports</title>
<link rel="canonical" href="https://nationalswitchgears.com/reports" />
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="National Switchgears Achievement, Reports" name="keywords">
<meta content="Explore our quick quote requests feature in our reports, allowing you to effortlessly request quotes for the products you need. Get your quote now and get started" name="description">
<!-- Stylesheets -->
<link href="<?php echo WEB_DIR?>public/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo WEB_DIR?>public/css/style.css" rel="stylesheet">
<link href="<?php echo WEB_DIR?>public/css/responsive.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="<?php echo WEB_IMG ?>favicon.ico" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LC7N1ZZDYC"></script>
   <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());

   gtag('config', 'G-LC7N1ZZDYC');
   </script>
   <style>
      ol li{
         list-style-type: none;
      }
		.refresh {
			display: inline-block;
			transform: rotate(90deg);
			font-size: 22px;
    		color: white;
		}
   </style>
</head>
<body> 
<div class="page-wrapper">
	
    <!-- Preloader -->
    <div class="preloader"></div>
	<!-- End Preloader -->
 	<?= view('home_header'); ?> 
    <!-- End Main Header -->
	<!-- Page Title -->
    <section class="page-title" style="background-image:url(<?php echo WEB_IMG ?>background/blog.png)">
        <div class="auto-container">
			<h2>Reports</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="<?php echo WEB_URL?>home">Home</a></li>
				<li>reports</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	    <!-- Certificate Start -->
        <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-12 align-self-start wow fadeInUp" data-wow-delay="0.1s">
							<a href="<?php echo WEB_IMG ?>reports/01_Report_02.jpg" class="image-link">
                        	 	<img class="img-fluid" src="<?php echo WEB_IMG ?>reports/01_Report_02.jpg" alt="BSI Certificate">
							</a>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <!-- Certificate End -->
  	<!-- Footer -->
	<?= view('footer'); ?>
	<!-- End Footer -->
	
</div>
<!-- End PageWrapper -->


<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

<script src="<?php echo WEB_DIR?>public/js/jquery.js"></script>
<script src="<?php echo WEB_DIR?>public/js/appear.js"></script>
<script src="<?php echo WEB_DIR?>public/js/owl.js"></script>
<script src="<?php echo WEB_DIR?>public/js/wow.js"></script>
<script src="<?php echo WEB_DIR?>public/js/odometer.js"></script>
<script src="<?php echo WEB_DIR?>public/js/mixitup.js"></script>
<script src="<?php echo WEB_DIR?>public/js/popper.min.js"></script>
<script src="<?php echo WEB_DIR?>public/js/parallax.min.js"></script>
<script src="<?php echo WEB_DIR?>public/js/bootstrap.min.js"></script>
<script src="<?php echo WEB_DIR?>public/js/tilt.jquery.min.js"></script>
<script src="<?php echo WEB_DIR?>public/js/magnific-popup.min.js"></script>

<script src="<?php echo WEB_DIR?>public/js/script.js"></script>
<script>
	$(document).ready(function() {
		$('.image-link').magnificPopup({type:'image'});
	});
</script>

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="public/js/respond.js"></script><![endif]-->

</body>
</html>
