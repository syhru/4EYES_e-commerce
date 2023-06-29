<?php
class Contact_email extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
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
                $data['email'] = $email; // Tambahkan variabel emailId ke dalam $data
                $this->load->view('template/header_product');
                $this->load->view('template/sidebar');
                $this->load->view('proses_email', $data); // Lebihkan $data sebagai argumen kedua
                $this->load->view('template/footer');
            } else {
                // Terjadi kesalahan saat menyimpan email
                echo 'Failed to store email.';
            }
        }
    }
}
?>
