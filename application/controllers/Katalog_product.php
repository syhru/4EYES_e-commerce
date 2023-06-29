<?php
class Katalog_product extends CI_Controller{
//bagian yang ditambahkan
function __construct() {
parent::__construct();
$this->load->model('product_model');
}

    public function index(){
        $data['product']=$this->product_model->get_product();//bagian yang ditambahkan
        $this->load->view('template/header_product');
        $this->load->view('template/sidebar');
        $this->load->view('katalog_view',$data); //bagian yang ditambahkan
        $this->load->view('template/footer');
    }

    public function tambah_ke_keranjang($id){
        $barang = $this->product_model->find($id);
        $data = array(
        'id' => $barang->product_id,
        'qty' => 1,
        'price' => $barang->product_price,
        'name' => $barang->product_name,
        'picture' => $barang->product_picture,
        );
        $this->cart->insert($data);
        redirect('katalog_product');
    }

    public function pembayaran(){
        $this->load->view('template/header_product');
        $this->load->view('template/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('template/footer');
    }

        
}
?>