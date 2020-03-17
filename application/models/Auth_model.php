<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
    
    protected $_table = 'users';

    public function doLogin(){
        if ($this->input->post()) {

            // dump_exit($this->input->post('remember'));
            $_POST = $this->input->post();

            $this->db->where('email',$_POST['email']);
            
            $user = $this->db->get($this->_table)->row();
            if ($user) {
                if (password_verify($_POST['password'],$user->password)) {
                    if ($user->actived > 0) {
                        if ($user->role == 1) {
                            $session_data = [
                                'id' => intval($user->id),
                                'role' => intval($user->role),
                                'name' => $user->name,
                                'email' => $user->email,
                            ];  
                            // set_cookie('login_cookie', 'expired', 3600);
                            $this->session->set_userdata($session_data);
                            redirect('dashboard');
                        }elseif ($user->role == 2) {
                            $session_data = [
                                'id' => intval($user->id),
                                'role' => intval($user->role),
                                'name' => $user->name,
                                'email' => $user->email,
                            ];  

                            $this->session->set_userdata($session_data);
                            redirect('dashboard');
                        }
                    }else {
                        $this->session->set_flashdata('errno', 'Akun Anda Di Non-Aktifkan');
                        redirect('auth');
                    }
                }else {
                    $this->session->set_flashdata('errno', 'Password Yang Anda Masukan Salah');
                    redirect('auth');
                }
            }else {
                $this->session->set_flashdata('errno', 'Email Belum Terdaftar');
                redirect('auth');
            }
        }
    }
    
    public function sessDestroy() {
        // delete_cookie('login_cookie');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('errno', 'Anda Telah Logout');
        redirect('auth');
        $this->session->sess_destroy();
    }
}