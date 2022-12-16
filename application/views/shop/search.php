<div class="container">
    
        <?php foreach ($cari  as $p): ?>
			
          <div class="col-lg-3">
            <a class="thumbnail">
              <img src="<?=base_url()?>assets3/image/<?=$p->image?>" class="img-fluid">
            </a>  
            <div class="text-center mt-3">
              <h3><?php echo $p->nama?></h3>
              <p>harga: <?php echo $p->harga?></p>
              <p>
                <a href="<?=base_url()?>Dashboard/edit/<?=$p->id?>" class="btn btn-info" role="button">Edit</a>
                <a href="<?=base_url()?>Dashboard/deletedata/<?=$p->id?>/<?=$p->image?>" class="btn btn-danger" role="button">Hapus</a>
              </p>
			  </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>