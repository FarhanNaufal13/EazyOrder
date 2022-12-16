<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menuguest extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('keranjang_model');
        $this->load->model('m_search');
        $this->load->library('cart');
        $this->load->library('Pdf');
    }

    public function index()
    {
        $kategori=($this->uri->segment(3))?$this->uri->segment(3):0;
        $data['produk'] = $this->keranjang_model->get_produk_kategori($kategori);
        $data['kategori'] = $this->keranjang_model->get_kategori_all();
        $this->load->view('guest/header',$data);
        $this->load->view('guest/navbar',$data);
        $this->load->view('pesan/list_menu',$data);   
    }

    public function hasil()
	{
        $kategori=($this->uri->segment(3))?$this->uri->segment(3):0;
        $data['produk'] = $this->keranjang_model->get_produk_kategori($kategori);
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$this->session->set_flashdata('cari', true);
        $this->load->view("guest/header",$data);
		$this->load->view("guest/navbar",$data);    
		$data2['cari'] = $this->m_search->cariData();
		$this->load->view('pesan/search', $data2);
    }
    public function tampil_cart()
	{
		$data['kategori'] = $this->keranjang_model->get_kategori_all();
		$this->load->view('guest/header',$data);
		$this->load->view('guest/navbar',$data);
		$this->load->view('pesan/tampil_cart',$data);
	}
    
    function tambah()
	{
        $data_produk= array('id' => $this->input->post('id'),
							 'name' => $this->input->post('nama'),
							 'price' => $this->input->post('harga'),
							 'gambar' => $this->input->post('gambar'),
							 'qty' =>$this->input->post('qty')
							);
		$this->session->set_flashdata('tambah', true);
		$this->cart->insert($data_produk);
		redirect('menuguest');
	}
    
    
	function hapus($rowid) 
	{
		if ($rowid=="all")
			{
				$this->cart->destroy();
			}
		else
			{
				$data = array('rowid' => $rowid,
			  				  'qty' =>0);
				$this->cart->update($data);
			}
		redirect('menuguest/tampil_cart');
	}

	function ubah_cart()
	{
		$cart_info = $_POST['cart'] ;
		foreach( $cart_info as $id => $cart)
		{
			$rowid = $cart['rowid'];
			$price = $cart['harga'];
			$gambar = $cart['image'];
			$amount = $price * $cart['qty'];
			$qty = $cart['qty'];
			$data = array('rowid' => $rowid,
							'price' => $price,
							'gambar' => $gambar,
							'amount' => $amount,
							'qty' => $qty);
			$this->cart->update($data);
		}
		redirect('menuguest/tampil_cart');
    }
    
    public function logout()    
    {
		 $this->session->sess_destroy();
        redirect('menulogin');
    }

    public function cetak(){
        $data['kategori'] = $this->keranjang_model->get_kategori_all();
        
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-PDF.pdf";
		$this->pdf->load_view('pesan/tampil_data', $data);
		$this->cart->destroy();

    }
}