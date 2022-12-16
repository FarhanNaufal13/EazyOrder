<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menulogin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->view('menulogin');
    }

    public function index()
    {
        
        if ($this->input->post('admin')) {
            redirect("login");
        
        
        }elseif ($this->input->post('guest')) {
            redirect("menuguest");
        }   
    }

}