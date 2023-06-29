<?php
class Add_product extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
function index(){
        $this->load->view('template/header_product');
        $this->load->view('template/sidebar');
        $this->load->view('add_product_view');
        $this->load->view('template/footer');
    }
    
}