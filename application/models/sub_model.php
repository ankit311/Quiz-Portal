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
class sub_model extends CI_Model {
    function __construct(){
		parent::__construct();
	}
        public function insert($data){
            if ($this->db->insert("subjectid", $data)) {
            return true;
            }
        }
        public function delete($subid){
            if ($this->db->delete("subjectid", array('id' => $subid))) {
            return true;
            }
        }
}

