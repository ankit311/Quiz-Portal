<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of subinsert_modal
 *
 * @author ANKIT
 */
class delstudata_model extends CI_Model {
    function __construct(){
		parent::__construct();
	}
        public function insert($data){
            if ($this->db->insert("student_detail", $data)) {
            return true;
            }
        }
        public function delete($college_id){
            if ($this->db->delete("student_detail", array('college_id' => $college_id))) {
            return true;
            }
        }
}

