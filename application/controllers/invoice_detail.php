<?php
class invoice_detail extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index($id_invoice){
        $data['invoice']=$this->model_invoice->ambil_id_invoice($id_invoice);
        $data['pesanan']=$this->model_invoice->ambil_id_pesanan($id_invoice);
        $this->load->view('template/header_product');
        $this->load->view('template/sidebar');
        $this->load->view('detail_invoice',$data);
        $this->load->view('template/footer');
    }
}
?>