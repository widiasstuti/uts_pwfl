<?php 

class Home extends CI_Controller{
    public function index($nama='')
    {   
        $data['nama']=$nama;
        $data['judul']='Halaman Home';
        $this->load->view('templets/header',$data);
        $this->load->view('home/index');
        $this->load->view('templets/footer');
    }
}