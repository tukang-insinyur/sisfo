<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Auth_model');
    }
    public function index(){

        if ($this->session->userdata('role') <> NULL){
            redirect('dashboard');
        }else{
            $data['title'] = 'HIMTI';
            $this->load->view('auth/login', $data);
        }
    }

    public function checked(){
        if ($this->input->post()) {
            $this->Auth_model->doLogin();
        }
    }

    public function logout(){
        if ($this->session->userdata('role')) {
            // dump_exit($this->session->userdata('role'));

            $this->Auth_model->sessDestroy();
        }
    }
}