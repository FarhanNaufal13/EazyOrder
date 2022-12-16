<?php 
	class m_search extends CI_Model{
		
		public function cariData()
		{
		$cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query("SELECT * from tbl_produk where nama like '%$cari%' ");
		return $data->result();
		}
	}