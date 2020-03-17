<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Dashboard_model');
        $this->load->library('user_agent');
    }

    public function index (){   

       if ($this->session->userdata('role') == 1) {
        
        //    get_cookie('login_cookie');
           $this->Dashboard_model->user_agent();
           $data['count_all'] = count($this->Dashboard_model->get_visitor());
           $data['title'] = 'Dashboard';
           $this->load->view('layouts/head', $data);
           $this->load->view('dashboard/index', $data);
           $this->load->view('layouts/footer');

       }elseif ($this->session->userdata('role') == 2) {
           # code...
       }else {
         redirect('auth');
       }
    }
}