<?php
class Detail_keranjang extends CI_Controller{
//bagian yang ditambahkan
function __construct() {
parent::__construct();
$this->load->model('product_model');
$this->load->model('model_invoice');

}   
    public function index(){
        $data['product']=$this->product_model->get_product();//bagian yang ditambahkan
        $this->load->view('template/header_product');
        $this->load->view('template/sidebar');
        $this->load->view('keranjang',$data); //bagian yang ditambahkan
        $this->load->view('template/footer');
    }

}

