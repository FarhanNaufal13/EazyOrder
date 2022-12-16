<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>ADMIN WARUNG STEAK</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="<?= base_url('assets3/css/bootstrap.min.css'); ?>" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="<?= base_url("assets3/css/style.css"); ?>" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?= base_url("assets3/css/font-awesome.css");?>" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="assets3/css/icon-font.min.css" type='text/css' />
<script src="<?= base_url("assets3/js/simpleCart.min.js");?>" > </script>
<script src="<?= base_url("assets3/js/amcharts.js");?>" ></script>	
<script src="<?= base_url("assets3/js/serial.js");?>" ></script>	
<script src="<?= base_url("assets3/js/light.js");?>"></script>	
<!-- //lined-icons -->
<script src="<?= base_url("assets3/js/jquery-1.10.2.min.js");?>"></script>
   <!--pie-chart--->
<script src="<?= base_url("assets3/js/pie-chart.js");?>" type="text/javascript"></script>
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
            <div class="top_bg" style="margin-top: 0px;margin-left: -82px;margin-bottom: 4px;padding-bottom: 1px;padding-top: 2px;">
								<div class="header_top">
									<img src="<?= base_url("assets3/image/wslogo.png");?>" alt="img-fluid" style="margin-right: 0px;padding-right: 0px;margin-top: -4px;padding-bottom: 0px;margin-left: 476px;">
									<div class="top_left">
										<nav class="navbar navbar-light bg-light">
                                            <form class="form-inline" action="<?php echo base_url('dashboard/hasil')?>" action="GET">
											  <input class="form-control mr-sm-2" type="text" name="cari" id="cari" placeholder="Cari" aria-label="Search" style="padding-bottom: 6px;margin-top: 42px;margin-bottom: 42px;">
											  <input class="btn btn-outline-success my-2 my-sm-0" type="submit"></button>
											  <a data-toggle="modal" data-target="#tambah" class="btn btn-primary">Tambah</a>									  
											</form>
										  </nav>
									</div>
										<div class="clearfix"> </div>
								</div>
							
						</div>
					<div class="clearfix"></div>
				<!-- /top_bg -->
				</div>
				<!--content-->
			<div class="content">
	</div>
   <div class="clearfix"></div>
	<!-- end content -->
    <?php if($this->session->flashdata('tambah')): ?>
                <?php if($this->session->flashdata('tambah') == TRUE): ?>
                    <div class="alert alert-success">Berhasil menambahkan data</div>
                <?php elseif($this->session->flashdata('tambah') == FALSE): ?>
                <div class="alert alert-danger">Gagal menambahkan data</div>
                <?php endif; ?>
                
             <?php endif; ?>
             <?php if($this->session->flashdata('hapus') == TRUE): ?>
             <div class="alert alert-success">Berhasil menghapus data</div>
                <?php endif; ?>
             <?php if($this->session->flashdata('cari') == TRUE): ?>
             <div class="alert alert-success">data berhasil dicari</div>
                <?php endif; ?>
                <?php if($this->session->flashdata('gagal') == TRUE): ?>
             <div class="alert alert-success">data gagal ditambahkan</div>
                <?php endif; ?>

    <!-- Modal Tambah -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah" class="modal fade">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
				 <h3 class="modal-title">Tambah Data</h3>
                 <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
             </div>
             <form class="form-horizontal" action="<?php echo base_url('Dashboard/tambah_aksi')?>" method="post" enctype="multipart/form-data" role="form">
              <div class="modal-body">
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Nama</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" name="nama" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Harga</label>
                          <div class="col-lg-10">
                            <input type ="text" class="form-control" name="harga" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Kategori</label>
                          <div class="col-lg-10">
							              <select name="kategori"  class="form-control">
                            <option value="1">Steak</option>
                            <option value="2">Food</option>
                            <option value="3">Drink</option>
                            </select>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-2 col-sm-2 control-label">Gambar</label>
                          <div class="col-lg-10">
							              <input type="file"  name="filepost" class="form-control" required>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <input class="btn btn-info" type="submit" name="submit">&nbsp;</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal"> Cancel</button>
                  </div>
                 </form>
             </div>
         </div>
     </div>
 </div>