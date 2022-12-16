<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
        $this->load->model('modelcrud');
        $this->load->library('upload');
        $this->load->library('pagination');
        $this->load->model('keranjang_model');
        $this->load->library('cart');
        $this->load->model('m_search');
    }

    public function index()
    {
  
        
        if($this->admin->logged_id())
        {

            $kategori=($this->uri->segment(3))?$this->uri->segment(3):0;
            $data['produk'] = $this->keranjang_model->get_produk_kategori($kategori);
            $data['kategori'] = $this->keranjang_model->get_kategori_all();
            $this->load->view("themes/header",$data);
            $this->load->view("themes/navbar",$data);    
            $this->load->view("shop/list_produk",$data); 


        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");

        }

    }

 
	public function hasil()
	{
        $kategori=($this->uri->segment(3))?$this->uri->segment(3):0;
        $data['produk'] = $this->keranjang_model->get_produk_kategori($kategori);
        $data['kategori'] = $this->keranjang_model->get_kategori_all();
        $this->session->set_flashdata('cari', true);
        $this->load->view("themes/header",$data);
        $this->load->view("themes/navbar",$data);    
        $data2['cari'] = $this->m_search->cariData();
        $this->load->view('shop/search', $data2);
	}
 

    public function logout()    
    {
        $this->session->sess_destroy();
        redirect('menulogin');
    }

  // untuk memasukan data ke database
  
  // delete
  public function deletedata($id,$image)
  {
      $path = './assets3/image/';
      @unlink($path.$image);

      $where = array('id' => $id );
      $this->modelcrud->delete($where);
      $this->session->set_flashdata('hapus', true);
      return redirect('dashboard');
  }

  // edit
  public function edit($id)
  {
      $kondisi = array('id' => $id );
      $kategori=($this->uri->segment(3))?$this->uri->segment(3):0;
      $data['produk'] = $this->keranjang_model->get_produk_kategori($kategori);
      $data['kategori'] = $this->keranjang_model->get_kategori_all();

      $data['data'] = $this->modelcrud->get_by_id($kondisi);
      $this->load->view('themes/header',$data);
      $this->load->view('themes/navbar',$data);   
      $this->load->view("shop/edit_data",$data);     
  }
  //tambah
  function tambah_aksi(){
    $nama=$this->input->post('nama');
    $cek= $this->modelcrud->cek_data_nama($nama);
    if($cek == false){
        $config['upload_path'] = './assets3/image'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $this->upload->initialize($config);

        if(!empty($_FILES['filepost']['name'])){
            if ($this->upload->do_upload('filepost')){

                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets3/image'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 760;
                $config['height']= 507;
                $config['new_image']= './assets3/image'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
    
                $image=$gbr['file_name'];
                $nama=$this->input->post('nama');
                $harga=$this->input->post('harga');
                $kategori=$this->input->post('kategori');
                $this->modelcrud->simpan_upload($nama,$harga,$kategori,$image);
                $this->session->set_flashdata('tambah', true);
                redirect('dashboard');
            }
        }             
    }else if($cek == true){
            $this->session->set_flashdata('gagal', true);
            redirect('dashboard');
    }
  }
   
  // update
  public function updatedata()
  {
      $id   = $this->input->post('id');
      $nama = $this->input->post('nama');
      $harga = $this->input->post('harga');

      $path = './assets3/image/';

      $kondisi = array('id' => $id );

      // get foto
      $config['upload_path'] = './assets3/image';
      $config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['max_size'] = '2048';  //2MB max
      $config['max_width'] = '400'; // pixel
      $config['max_height'] = '300'; // pixel
      $config['file_name'] = $_FILES['fotopost']['name'];

      $this->upload->initialize($config);

	    if (!empty($_FILES['fotopost']['name'])) {
	        if ( $this->upload->do_upload('fotopost') ) {
	            $image = $this->upload->data();
	            $data = array(
	                          'nama'       => $nama,
                            'image'       => $image['file_name'],
	                          'harga'     => $harga,
	                        );
              // hapus foto pada direktori
              @unlink($path.$this->input->post('filelama'));

              $this->modelcrud->update($data,$kondisi);
              $this->session->set_flashdata('tambah', true);
              redirect('dashboard');
	        }else {
              $this->session->set_flashdata('tambah', false);
              redirect("dashboard");
	        }
	    }else {
            $data = array(
                'nama'       => $nama,
                'harga'     => $harga,
              );
              $this->modelcrud->update($data,$kondisi);
              $this->session->set_flashdata('tambah', false);
              redirect('dashboard');
        }
     }


}