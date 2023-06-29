<?php
class contact extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $data['product']=$this->product_model->get_product();
        $this->load->view('template/header_product');
        $this->load->view('template/sidebar');
        $this->load->view('contact_view',$data);
        $this->load->view('template/footer');
    }

    public function saveEmail()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() === FALSE) {
            // Validasi gagal, tampilkan pesan error atau lakukan tindakan lain sesuai kebutuhan
            echo validation_errors();
        } else {
            $email = $this->input->post('email');
            $this->load->model('Email_model');
            $emailId = $this->Email_model->saveEmail($email);

            if ($emailId) {
                // Email berhasil disimpan, lakukan tindakan lain sesuai kebutuhan
                
                $this->load->view('template/header_product');
                $this->load->view('proses_email'); //bagian yang ditambahkan
                $this->load->view('template/footer');
            } else {
                // Terjadi kesalahan saat menyimpan email
                echo 'Failed to store email.';
            }
        }
    }
    
}
?>