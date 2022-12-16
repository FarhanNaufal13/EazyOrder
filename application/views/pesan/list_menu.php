<div class="container">
<?php
	foreach ($produk as $row) {
?>
          <form method="post" action="<?php echo base_url();?>menuguest/tambah" method="post" accept-charset="utf-8">
          <div class="col-lg-3">
            <a class="thumbnail">
              <img src="<?=base_url()?>assets3/image/<?=$row['image'];?>" class="img-fluid">
            </a>  
            <div class="text-center mt-3">
              <h3><?php echo $row['nama'];?></h3>
              <p>harga: <?php echo $row['harga'];?></p>
              <p>
                  <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                  <input type="hidden" name="nama" value="<?php echo $row['nama']; ?>" />
                  <input type="hidden" name="harga" value="<?php echo $row['harga']; ?>" />
                  <input type="hidden" name="gambar" value="<?php echo $row['image']; ?>" />
                  <input type="hidden" name="qty" value="1" />
                  <button type="submit" class="btn btn-danger" ><i class="glyphicon glyphicon-shopping-cart"></i> Beli</a>
              </p>
			  </div>
            </div>
            </form>
            <?php
	}
?>
    </div>
</div>