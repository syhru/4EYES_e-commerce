<?php
class Invoice extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->model('product_model');
        if($this->session->userdata('role_id')!='1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Anda Belum login<button type="button"
            class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('auth');
}
    }
public function index(){
    $data['invoice']=$this->model_invoice->tampil_data();
    $this->load->view('template/header_product');
    $this->load->view('template/sidebar');
    $this->load->view('invoice_view',$data);
    $this->load->view('template/footer');
}

public function detail($id_invoice){
    $data['invoice']=$this->model_invoice->ambil_id_invoice($id_invoice);
    $data['pesanan']=$this->model_invoice->ambil_id_pesanan($id_invoice);
   
    $this->load->view('detail_invoice',$data);

}


}
?>