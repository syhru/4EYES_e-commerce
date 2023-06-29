<?php
class about extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $data['product']=$this->product_model->get_product();
        $this->load->view('template/header_product');
        $this->load->view('template/sidebar');
        $this->load->view('about_view',$data);
        $this->load->view('template/footer');
    }
}
?>