<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of updateresult_model
 *
 * @author ANKIT
 */
class updateresult_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    public function update($data,$college_id){
        $this->db->set($data);
        $this->db->where("college_id", $college_id);
        $this->db->update("student_result", $data);
    }
}
