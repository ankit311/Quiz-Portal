<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of resetpassword
 *
 * @author ANKIT
 */
class resetpassword_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    public function update($data){
        $this->db->set($data);
        $this->db->update("student_detail", $data);
    }
}
