		<!--/sidebar-menu-->
        <div class="sidebar-menu" >
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
                                    <div class="list-group">
										<li id="menu-academico" ><a href="<?php echo site_url() ?>index.php/dashboard/logout" type="submit" class="list-group-item" class="btn btn-success"><i class="fa fa-sign-out"></i></a></li>
                    <li><a href="<?php echo site_url()?>Dashboard/index/" class="list-group-item">All</a></li>
                                         <div class="list-group">
                    
                                         <?php
                                            foreach ($kategori as $row)
                                                {
                                    ?>
                                    <li ><a href="<?php echo site_url()?>Dashboard/index/<?php echo $row['id'];?>" class="list-group-item"><?php echo $row['nama_kategori'];?></a></i>
                                    <?php
                                                }
                                    ?>
                                   </div><br> 
                                        </div><br>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>	
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="<?= base_url('assets3/js/jquery.nicescroll.js');?>"></script>
<script src="<?= base_url('assets3/js/scripts.js');?>" ></script>
<!-- Bootstrap Core JavaScript -->
   <script src="<?= base_url('assets3/js/bootstrap.min.js');?>"></script>
   <!-- /Bootstrap Core JavaScript -->
   <!-- real-time -->

<!-- /real-time -->
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


 <!-- END Modal Tambah -->

</body>
</html>
