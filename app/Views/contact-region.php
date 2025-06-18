<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>National Switchgears Abroad Regions |Regional Representatives in Abroad | National Switchgears</title>
<link rel="canonical" href="https://nationalswitchgears.com/overseas" />
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="Regional representatives in Abroad, national switchgears" name="keywords">
<meta content="National Swithgears has a own regional representative in abroad such as Kingdom of Saudi Arabia, U.A.E, Singapore, Malaysia, and Sultanate of Oman" name="description">

<!-- Stylesheets -->
<link href="<?php echo WEB_DIR?>public/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo WEB_DIR?>public/css/style.css" rel="stylesheet">
<link href="<?php echo WEB_DIR?>public/css/responsive.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="<?php echo WEB_IMG ?>favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo WEB_IMG ?>favicon.ico" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<style>
	.contact-block {
    	padding: 27px 13px !important;
	}
	.py-5{
		padding-top:0px !important;
	}
</style>
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

		#map {
		  height: 100%;
		  width: 100%;
		}
		#description {
		  font-family: Roboto;
		  font-size: 15px;
		  font-weight: 300;
		}

		#infowindow-content .title {
		  font-weight: bold;
		}

		#infowindow-content {
		  display: none;
		}

		#map #infowindow-content {
		  display: inline;
		}

		.pac-card {
		  background-color: #fff;
		  border: 0;
		  border-radius: 2px;
		  box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
		  margin: 10px;
		  padding: 0 0.5em;
		  font: 400 18px Roboto, Arial, sans-serif;
		  overflow: hidden;
		  font-family: Roboto;
		  padding: 0;
		}

		#pac-container {
		  padding-bottom: 12px;
		  margin-right: 12px;
		}

		.pac-controls {
		  display: inline-block;
		  padding: 5px 11px;
		}

		.pac-controls label {
		  font-family: Roboto;
		  font-size: 13px;
		  font-weight: 300;
		}
		
		#pac-input {
			background-color: #fff;
			font-family: Roboto;
			font-size: 15px;
			font-weight: 300;
			margin-left: 12px;
			padding: 0 11px 0 13px;
			text-overflow: ellipsis;
			width: 400px;
			position: absolute;
			z-index: 1;
		}

		#pac-input:focus {
		  border-color: #4d90fe;
		}

		#title {
		  color: #fff;
		  background-color: #4d90fe;
		  font-size: 25px;
		  font-weight: 500;
		  padding: 6px 12px;
		}

		#target {
		  width: 345px;
		}
		.map-wrapper {
		  width: 100% !important;
		  height: 100%;
		 // height: 500px;
		  position: absolute;
		}
		.map-canvas {
			width: 100%;
			height: 100%;
			margin: 0 auto;
		}
		
		#overlay{	
		  position: fixed;
		  top: 0;
		  z-index: 100;
		  width: 100%;
		  height:100%;
		  display: none;
		  background: rgba(0,0,0,0.6);
		}
		.cv-spinner {
		  height: 100%;
		  display: flex;
		  justify-content: center;
		  align-items: center;  
		}
		.spinner {
		  width: 40px;
		  height: 40px;
		  border: 4px #ddd solid;
		  border-top: 4px #2e93e6 solid;
		  border-radius: 50%;
		  animation: sp-anime 0.8s infinite linear;
		}
		@keyframes sp-anime {
		  100% { 
			transform: rotate(360deg); 
		  }
		}
		.is-hide{
		  display:none;
		}
		.inner-column{
			width: 100%;
    		height: 100%;
		}
   </style>
   <script>
	function initMap() {
		var mapOptions = {
			center: { lat: 25.178050, lng: 55.271830 },
			zoom: 14
		};
		var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

		var marker = new google.maps.Marker({
			position: { lat: 25.178050, lng: 55.271830 },
			map: map,
			title: 'M/s. NATIONAL SWITCHGEARS'
		});

		var contentString = '<div id="content">' +
			'<h5 id="firstHeading" class="firstHeading">M/s. NATIONAL SWITCHGEARS</h5>' +
			'<div id="bodyContent">' +
			'EQUIPMENT TRADING LLC, 2006,</br>' +
			'REGAL TOWER, BUSINESS BAY, DUBAI, UAE.</br>' +
			'Latitude: 25.178050</br>' +
			'Longitude: 55.271830</br>' +
			'</div>' +
			'</div>';

		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
		infowindow.open(map, marker);

		marker.addListener('click', function() {
			infowindow.open(map, marker);
		});
	}
</script>
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
			<h2>Regional Representatives in Overseas</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="<?php echo WEB_URL?>home">Home</a></li>
				<li>Overseas</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Contact One -->
	<section class="contact-one" style="background-image:url(<?php echo WEB_IMG?>background/map-1.png)">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="left-box">
						<!-- <div class="sec-title_title">Contact us</div> -->
						<h2 class="sec-title_heading">Corporate Office</h2>
					</div>
				</div>
			</div>
			<div class="row clearfix">
			
				<!-- Info Column -->
				<div class="info-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Contact Block -->
						<div class="contact-block">
							<div class="block-inner">
								<span class="icon"><img src="<?php echo WEB_IMG?>icons/contact-1.png" alt="contact" /></span>
								<strong>Office address</strong>
								<p class="absicontext"><i class='fas'>&#xf3c5;</i> M/s. NATIONAL SWITCHGEARS EQUIPMENT TRADING LLC, 2006, REGAL TOWER, BUSINESS BAY, DUBAI, UAE.</p>
								<p class="absicontext"><i class='fas'>&#xf095;</i> +971 567 809 790</p>
								<p class="absicontext"><i class='fas'>&#xf0e0;</i> sales@nationalswitchgears.ae</p>
							</div>
						</div>
						
						<!-- Contact Block -->
						<div class="contact-block">
							<div class="block-inner">
								<span class="icon"><img src="<?php echo WEB_IMG?>icons/contact-2.png" alt="contact" /></span>
								<strong>Contact Person</strong>
								<p class="absicontext"><i class='fas'>&#xf406;</i> Mr. R.S.RAJ </p>
								<p class="absicontext"><i class='fas'>&#xf095;</i> + 971 55 402 3433 </p>								
								<p class="absicontext"><i class='fas'>&#xf0e0;</i> raj@nationalswitchgears.com </p>
</br>
								<p class="absicontext"><i class='fas'>&#xf406;</i> Mr. P.Asokan </p>
								<!-- <i class='fas'>&#xf095;</i> +971 56 780 9790 <br> -->
								<p class="absicontext"><i class='fas'>&#xf0e0;</i> pasokan@nationalswitchgears.com </p>

							</div>
						</div>
					</div>
				</div>
				
				<!-- Form Column -->
				<div class="form-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="col-12 wow fadeInUp map-canvas" data-wow-delay="0.1s" id="map-canvas">
							
								
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Contact One -->

	<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
             	<div class="col-lg-4 align-self-stretch wow fadeIn" data-wow-delay="0.5s">
                   <div class="service-item">
                     <div class="productcontent">
                        <h4 class="mb-4">Singapore</h4>
						<ul class="icons-list lst-none customcontact">
							<li><i class="fa fa-globe" aria-hidden="true"></i> <strong>Address:</strong> 
							<br> M/s SGB STARKSTROM PTE LTD, Block 22, Woodlands Link, #04-17, Woodlands East Industrial Estate, Singapore 738734.</li>
							<li><i class="fa fa-phone" aria-hidden="true"></i> <strong>Tel:</strong> +65 6755 0551</li>
							<li><i class="fa fa-fax" aria-hidden="true"></i> <strong>Fax:</strong> +65 6755 0391</li>
							<li><i class="fa fa-envelope" aria-hidden="true"></i> <strong>Email:</strong> sgbsin@singnet.com.sg</li>
							<li><i class="fa fa-user" aria-hidden="true"></i> <strong>Contact Person:</strong> Ms. Justina Tan</li>
							<li><i class="fa fa-mobile" aria-hidden="true"></i> <strong>GSM:</strong>  +65 96169367</li>
						</ul>
                      </div>
                   </div>
                </div>
				<div class="col-lg-4 align-self-stretch wow fadeIn" data-wow-delay="0.5s">
                   <div class="service-item">
                     <div class="productcontent">
                        <h4 class="mb-4">Malaysia</h4>
						<ul class="icons-list lst-none customcontact">
							<li><i class="fa fa-globe" aria-hidden="true"></i> <strong>Address:</strong> 
							<br>M/s SFG TECHNOLOGY (M) SDN BHD, 313, 3rd Floor B Block, Kelana Square, 17 Jalan SS7/26, Kelana Jaya, 47301 Petaling Jaya, Selangor, Malaysia.</li>
							<li><i class="fa fa-phone" aria-hidden="true"></i> <strong>Tel:</strong> +603 788 0 9360 / 03</li>
							<li><i class="fa fa-fax" aria-hidden="true"></i> <strong>Fax:</strong> +603 7 805 1652</li>
							<li><i class="fa fa-envelope" aria-hidden="true"></i> <strong>Email:</strong> tksoon@sfg.com.my</li>
							<li><i class="fa fa-user" aria-hidden="true"></i> <strong>Contact Person:</strong> Mr. T.K.SOON</li>
							<li><i class="fa fa-mobile" aria-hidden="true"></i>  <strong>GSM:</strong>  +601 73820394</li>
						</ul>
                      </div>
                   </div>
                </div>
				<div class="col-lg-4 align-self-stretch wow fadeIn" data-wow-delay="0.5s">
                   <div class="service-item">
                     <div class="productcontent">
                        <h4 class="mb-4">Sultanate of Oman</h4>
						<ul class="icons-list lst-none customcontact">
							<li><i class="fa fa-globe" aria-hidden="true"></i> <strong>Address:</strong> 
							<br> M/s General Electronics &amp; Trading Co. L.L.C. (an OMZEST Group company) Flat No.10, 4th Floor, ‘ASMA building, Building No.1721, Way No. 2730/127, CBD Area, P.O. Box 1092, Ruwi, P.C. 112, Sultan</li>
							<li><i class="fa fa-phone" aria-hidden="true"></i> <strong>Tel:</strong> 00-968- 24797954</li>
							<li><i class="fa fa-fax" aria-hidden="true"></i> <strong>Fax:</strong> 00-968- 24797694</li>
							<li><i class="fa fa-envelope" aria-hidden="true"></i> <strong>Email:</strong> getoman@omantel.net.om / get@omzest.com</li>
							<li><i class="fa fa-user" aria-hidden="true"></i> <strong>Contact Person:</strong>  Mr. Kamlesh Mehta-General Manager </li>
							<li><i class="fa fa-mobile" aria-hidden="true"></i>  <strong>GSM:</strong> +968 99326357</li>
						</ul>
                      </div>
                   </div>
                </div>
            </div>
        </div>
    </div>

  	<!-- Footer -->
      <?= view('footer'); ?>
	<!-- End Footer -->
	
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8_RhT213VQXF_dVxWoRWdK41g68yyCfk&callback=initMap" async defer></script>

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="public/js/respond.js"></script><![endif]-->

</body>
</html>
