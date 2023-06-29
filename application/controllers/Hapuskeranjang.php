<?php
class Hapuskeranjang extends CI_Controller{
//bagian yang ditambahkan
function __construct() {
parent::__construct();
$this->load->library('cart');
}

public function index($product_id)
{
    $this->cart->remove($product_id);
    redirect('detail_keranjang');
}

}
?>