<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of quesinsert
 *
 * @author ANKIT
 */
class quesinsert_model extends CI_Model {
    function __construct(){
		parent::__construct();
	}
        public function insert($data){
            if ($this->db->insert("question_bank", $data)) {
            return true;
            }
        }
        public function delete($quesid){
            if ($this->db->delete("question_bank", array('ques_id' => $quesid))) {
            return true;
            }
        }
}
