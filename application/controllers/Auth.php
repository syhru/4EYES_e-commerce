<?php
class Auth extends CI_Controller{
    public  function logout(){
        $this->session->sess_destroy();
        redirect('auth');
    }
public function index()
{
    $this->form_validation->set_rules('username','Username','required',['required' => 'Username wajib diisi']);
    $this->form_validation->set_rules('password','Password','required',['required' => 'passsword wajib diisi']);

    if ($this->form_validation->run()== FALSE){
    $this->load->view('template/header_login');
    $this->load->view('form_login');
    $this->load->view('template/footer_login');   

    }else{
    $auth=$this->model_auth->cek_login();
        if ($auth == FALSE)
        {
    $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert"> 
    Username atau Password Anda Salah
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('auth');

}else{
    $this->session->set_userdata('username', $auth->username);
    $this->session->set_userdata('nama', $auth->nama);
    $this->session->set_userdata('role_id', $auth->role_id);
   
    switch($auth->role_id){
    case 1 : redirect('home');
    break;
    case 2 : redirect('home');
    default: break;
}
}
}
}
}
?>