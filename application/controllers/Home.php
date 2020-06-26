<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('pengguna/templates/header');
        $this->load->view('pengguna/templates/css');
        $this->load->view('pengguna/templates/navbar');
        $this->load->view('pengguna/templates/slider');
        $this->load->view('pengguna/home/home');
        $this->load->view('pengguna/templates/contact'); 
        $this->load->view('pengguna/templates/detailfooter'); 
        $this->load->view('pengguna/templates/js');
        $this->load->view('pengguna/templates/footer');
        $this->load->view('pengguna/home/popup');
        
    }
    public function portfolio(){
        $this->load->view('pengguna/templates/header');
        $this->load->view('pengguna/templates/css'); 
        $this->load->view("pengguna/templates/navbar");
        $this->load->view('pengguna/portfolio_detail');
        $this->load->view('pengguna/templates/js');
        $this->load->view('pengguna/templates/footer');
    }
    public function selayangPandang(){
        $this->load->view('pengguna/templates/header');
        $this->load->view('pengguna/templates/css'); 
        $this->load->view("pengguna/templates/navbar");
        $this->load->view('pengguna/profil');
        $this->load->view('pengguna/templates/js');
        $this->load->view('pengguna/templates/footer');
    }

    public function layanan(){
        $this->load->view('pengguna/templates/header');
        $this->load->view('pengguna/templates/css'); 
        $this->load->view("pengguna/templates/navbar");
        $this->load->view('pengguna/layanan');
        $this->load->view('pengguna/templates/js');
        $this->load->view('pengguna/templates/footer');
    }

    public function klien(){
        $this->load->view('pengguna/templates/header');
        $this->load->view('pengguna/templates/css'); 
        $this->load->view("pengguna/templates/navbar");
        $this->load->view('pengguna/klien');
        $this->load->view('pengguna/templates/js');
        $this->load->view('pengguna/templates/footer');
    }
}
?>