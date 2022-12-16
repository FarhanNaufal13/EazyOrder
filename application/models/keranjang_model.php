<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class keranjang_model extends CI_Model {

	public function get_produk_all()
	{
		$query = $this->db->get('tbl_produk');
		return $query->result_array();
	}
	
	public function get_produk_kategori($kategori)
	{
		if($kategori>0)
			{
				$this->db->where('kategori',$kategori);
			}
		$query = $this->db->get('tbl_produk');
		return $query->result_array();
	}
	
	public function get_kategori_all()
	{
		$query = $this->db->get('tbl_kategori');
		return $query->result_array();
	}
	
	public  function get_produk_id($id)
	{
		$this->db->select('tbl_produk.*,nama_kategori');
		$this->db->from('tbl_produk');
		$this->db->join('tbl_kategori', 'kategori=tbl_kategori.id','left');
   		$this->db->where('id',$id);
        return $this->db->get();
    }	
	
	public function tambah_detail_order($data)
	{
		$this->db->insert('tbl_detail_order', $data);
    }
    
    public function get_produk_by_kategori($id){

        $this->db->select('tbl_produk.*,nama_kategori');
        $this->db->from('tbl_produk');
        $this->db->join('tbl_kategori', 'kategori=tbl_kategori.id','left');
        $this->db->where('kategori',$id);
        return $this->db->get()->result_array();
    }
}
?>