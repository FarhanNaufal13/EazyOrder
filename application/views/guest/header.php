<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>WAROENG STEAK</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="<?= base_url('assets4/css/bootstrap.min.css');?>" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href= "<?= base_url('assets4/css/style.css');?>" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href= "<?= base_url("assets4/css/font-awesome.css");?>" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="assets4/css/icon-font.min.css" type='text/css' />
<script src="<?= base_url("assets4/js/simpleCart.min.js");?>" > </script>
<script src="<?= base_url("assets4/js/amcharts.js");?>"></script>	
<script src="<?= base_url("assets4/js/serial.js");?>"></script>	
<script src="<?= base_url("assets4/js/light.js");?>"></script>	
<!-- //lined-icons -->
<script src="<?= base_url("assets4/js/jquery-1.10.2.min.js");?>" ></script>
   <!--pie-chart--->
<script src="<?= base_url("assets4/js/pie-chart.js");?>" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->

			<div class="header-section">
			<!-- top_bg -->
						<div class="top_bg" style="margin-top: 0px;margin-left: -100px;margin-bottom: 4px;padding-bottom: 1px;padding-top: 2px;">
								<div class="header_top">
									<img src= "<?= base_url("assets4/images/wslogo.png");?>" alt="img-fluid" style="margin-right: 0px;padding-right: 0px;margin-top: -4px;padding-bottom: 0px;margin-left: 499px;">
									<div class="top_left">
										<nav class="navbar navbar-light bg-light">
										<form class="form-inline" action="<?php echo base_url('menuguest/hasil')?>" action="GET">
											  <input class="form-control mr-sm-2" type="text" name="cari" id="cari" placeholder="Cari" aria-label="Search" style="padding-bottom: 6px;margin-top: 42px;margin-bottom: 42px;">
											  <input class="btn btn-outline-success my-2 my-sm-0" type="submit"></button>
											  <a href="<?php echo base_url()?>menuguest/tampil_cart" class="btn btn-danger"><i class="glyphicon glyphicon-shopping-cart"></i> Cart</a>
											  
											</form>
										  </nav>
									</div>
										<div class="clearfix"> </div>
								</div>		
						</div>
					<div class="clearfix"></div>
				<!-- /top_bg -->
				</div>
				
				<section class="section-outer" style="border-left-width: 0px;border-left-style: solid;margin-left: -249px;margin-bottom: 13px;">
					<div class="container effect">
			
						<div id="simple-slideshow" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#simple-slideshow" data-slide-to="0" class="active"></li>
								<li data-target="#simple-slideshow" data-slide-to="1"></li>
								<li data-target="#simple-slideshow" data-slide-to="2"></li>
							</ol>
			
							<!-- slides -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="<?= base_url("assets4/images/steak.jpg");?>"  alt="...">
									<div class="carousel-caption">
									</div>
								</div>
								<div class="item">
									<img src="<?= base_url("assets4/images/steak.jpg");?>"  alt="...">
									<div class="carousel-caption">
										<h2></h2>
									</div>
								</div>
								<div class="item">
									<img src="<?= base_url("assets4/images/steak.jpg");?>"  alt="...">
									<div class="carousel-caption">
										<h2></h2>
									</div>
								</div>
							</div>
			
							<!-- Controls -->
							<a class="left carousel-control" href="#simple-slideshow" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
							</a>
							<a class="right carousel-control" href="#simple-slideshow" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
							</a>
						</div>
			
					</div>
				</section>
				<?php if($this->session->flashdata('tambah') == TRUE): ?>
                    <div class="alert alert-success">Berhasil menambahkan data</div>
                <?php endif; ?>
				<?php if($this->session->flashdata('cari') == TRUE): ?>
                    <div class="alert alert-success">berhasil mencari data</div>
                <?php endif; ?>


				<!--content-->

			<!--content-->
		</div>
</div>