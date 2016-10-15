<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userlogin_model
 *
 * @author ANKIT
 */
class userlogin_model extends CI_Model {
    function __construct(){
		parent::__construct();
	}
	
	public function validate(){
		// grab user input
		$username = $this->security->xss_clean($this->input->post('username'));
		$password = $this->security->xss_clean($this->input->post('password'));
		
		// Prep the query
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		
		// Run the query
		$query = $this->db->get('userlogin');
		// Let's check if there are any results
		if($query->num_rows() == 1)
		{
			// If there is a user, then create session data
			$row = $query->row();
			$data = array(
					'fname' => $row->fname,
					'lname' => $row->lname,
					'username' => $row->username,
                                        'position' => $row->position,
					'validated' => true
					);
			$this->session->set_userdata($data);
			return true;
		}
		// If the previous process did not validate
		// then return false.
		return false;
	}
}
