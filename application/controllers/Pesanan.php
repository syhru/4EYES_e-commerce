<?php
class Pesanan extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->model('model_invoice');
    }
    
    public function index()
    {
    $is_processed=$this->model_invoice->index();
    if($is_processed){
    $this->cart->destroy();
    $this->load->view('template/header_product');
    $this->load->view('template/sidebar');
    $this->load->view('proses_pesanan');
    $this->load->view('template/footer');

    }
    else{ echo"Maaf, Pesanan anda gagal diproses";}
    }
}
    ?>