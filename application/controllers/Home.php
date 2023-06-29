<?php
class Home extends CI_Controller{
//bagian yang ditambahkan
function __construct() {
parent::__construct();
$this->load->model('product_model');
}

public function index(){
$data['product']=$this->product_model->get_product();//bagian yang ditambahkan
$this->load->view('template/header');
$this->load->view('template/sidebar');
$this->load->view('home_view',$data); //bagian yang ditambahkan
$this->load->view('template/footer');
}
}
?>