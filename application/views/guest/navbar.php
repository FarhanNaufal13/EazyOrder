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
                    <li><a href="<?php echo site_url()?>Menuguest/index/" class="list-group-item">All</a></li>
                        <div class="list-group">
                          <?php
                            foreach ($kategori as $row){?>
                              <li ><a href="<?php echo site_url()?>Menuguest/index/<?php echo $row['id'];?>" class="list-group-item"><?php echo $row['nama_kategori'];?></a></i>
                              <?php
                            }
                          ?>
                        </div><br> 
                        </div><br>
                          <li><a href="<?php echo base_url()?>menuguest/tampil_cart" class="list-group-item"><i class="glyphicon glyphicon-shopping-cart"></i></strong></a><li>
                          <?php 
                      
                        $cart= $this->cart->contents();

                      // If cart is empty, this will show below message.
                      if(empty($cart)) {
                        ?>
                                <a class="list-group-item">Keranjang Belanja Kosong</a>
                                <?php
                      }
                      else
                        {
                          $grand_total = 0;
                          foreach ($cart as $item)
                            {
                              $grand_total+=$item['subtotal'];
                        ?>
                                <a class="list-group-item"><span><?php echo $item['name']; ?> (<?php echo $item['qty']; ?> x <?php echo number_format($item['price'],0,",","."); ?>)</span></a>
                                <?php	
                            }
                        ?>

                                <?php		
                        }
                        ?>
                      </div>
                        </div>
                        <!-- /.col-lg-3 -->

                        <div class="col-lg-9">
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


 <!-- END Modal Tambah -->

</body>
</html>
