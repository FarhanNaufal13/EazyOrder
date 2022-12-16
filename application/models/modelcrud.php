<?php
class Modelcrud extends CI_Model
{
  public function get($batas=NULL,$offset=NULL,$cari=NULL)
  {
      if ($batas != NULL) {
        $this->db->limit($batas,$offset);
      }
      if ($cari != NULL) {
          $this->db->or_like($cari);
      }
      $this->db->from('tbl_produk');
      $query = $this->db->get();
      return $query->result();
  }

  public function get_by_id($kondisi)
  {
      $this->db->from('tbl_produk');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

  function simpan_upload($nama,$harga,$kategori,$image){
    $produk=$this->db->query("INSERT INTO tbl_produk(nama,harga,kategori,image) VALUES ('$nama','$harga','$kategori','$image')");
    return $produk;
}
  public function delete($where)
  {
      $this->db->where($where);
      $this->db->delete('tbl_produk');
      return TRUE;
  }
  public function update($data,$kondisi)
  {
      $this->db->update('tbl_produk',$data,$kondisi);
      return TRUE;
  }

  public function tampil_data(){
    return $this->db->get('tbl_produk');
  }

  public function cek_data_nama($nama){
    $this->db->select('nama');
    $this->db->from('tbl_produk');
    $this->db->where('nama',$nama);
    $data =$this->db->get();
    if($data->num_rows() >0 ){
      return true;
    }else{
      return false;
    }
  }
}
