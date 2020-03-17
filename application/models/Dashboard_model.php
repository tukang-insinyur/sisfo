<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    protected $_table = 'visitor';

    public function user_agent(){

        if($this->agent->is_browser()){

            $data = [
                'user_gent' => $this->agent->browser(),
                'remote_addr' => $this->input->ip_address(),
                'create_at' => date('Y-m-d')
            ];
            $this->db->insert('visitor', $data);

        }elseif ($this->agent->is_mobile()) {
             $data = [
                'user_gent' => $this->agent->browser(),
                'remote_addr' => $this->input->ip_address(),
                'create_at' => date('Y-m-d')
            ];
            $this->db->insert('visitor', $data);
        }
    }

    public function get_visitor(){
        return $this->db->get($this->_table)->result();
    }
}