<?php
class Blog extends CI_Controller
{
function __construct()
{
parent::__construct();
}
function index(){
    $data['title'] = "Logbo";
    $data['content'] = "Belum Ada CONTEN";
    $this->load->view('blog_view',$data);
}
}