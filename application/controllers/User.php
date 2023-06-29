<?php
class User extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->model('user_model');
        if($this->session->userdata('role_id')!='1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Anda Belum login<button type="button"
            class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('auth');
}
    }

    public function index(){
        $data['user']=$this->user_model->get_user();//bagian yang ditambahkan
        $this->load->view('template/header_product');
        $this->load->view('template/sidebar');
        $this->load->view('user_view',$data); //bagian yang ditambahkan
        $this->load->view('template/footer');
        }

    function add_new(){
        $this->load->view('add_user_view');

    }

    function save(){
        $nama=$this->input->post('nama');
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $role_id=$this->input->post('role_id');
            $this->user_model-> save($nama,$username, $password, $role_id);
            redirect('user');
        
    }


    function delete($id){
        $id=$this->uri->segment(3);
        $this->user_model->delete($id);
        redirect('user');
    }

    function get_edit($id){
        $id = $this->uri->segment(3);
        $result = $this->user_model->get_id($id); 
        if($result->num_rows() > 0){
        $i = $result->row_array();
        $data = array(
        'id' => $i['id'],
        'nama' => $i['nama'],
        'username' => $i['username'],
        'password' => $i['password'],
        'role_id' => $i['role_id']
        
        );
        $this->load->view('edit_user_view',$data);

        }else{
        echo "Data Was Not Found";
        }

    }

    function update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $role_id = $this->input->post('role_id');
        $this->user_model->update($id, $nama, $username, $password, $role_id); 
        redirect('user');
    }
    

    
}
?>