

<!-- KONTEN UTAMA -->

    <div class="container">
    

      <h2>Edit Data</h2>
      <div class="row">
        <form action="<?=base_url()?>Dashboard/updatedata" method="post" enctype="multipart/form-data">
          <label>Nama</label><br>
          <input type="text" name="nama" value="<?=$data->nama?>"><br><br>
          <label>harga</label><br>
          <input type="text" name="harga" value="<?=$data->harga?>"><br><br>
          <label>foto</label><br>
          <input type="file" name="fotopost"><br><br>

          <!-- file lama -->
          <input type="hidden" name="filelama" value="<?=$data->image?>">
          <img src="<?=base_url()?>assets3/image/<?=$data->image?>" class="img-fluid">
          <!-- ID -->
          <input type="hidden" name="id" value="<?=$data->id?>"><br>

          <input type="submit" name="submit" value="Submit" class="btn btn-default">
        </form>

      </div>
    </div>

    
<!-- END KONTEN UTAMA -->