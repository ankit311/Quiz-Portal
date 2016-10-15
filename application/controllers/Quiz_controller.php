<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Quiz_controller
 *
 * @author ANKIT
 */
class Quiz_controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url','form');
    }
    public function index(){
        $this->load->view('start_quiz_view');
    }
    public function mainloginview(){
        $this->load->view('main_login_view');
    }

    public function userloginview($msg=NULL){
        $data['msg']=$msg;
        $this->load->view('userlogin_view',$data);
    }
    public function studentloginview($msg=NULL){
        $data['msg']=$msg;
        $this->load->view('studentlogin_view',$data);
    }
    public function userloginprocess(){
	$this->load->model('userlogin_model');
	$result = $this->userlogin_model->validate();
	if(! $result){
            $msg = 'Invalid username and/or password.';
            $this->userloginview($msg);
	}
        else{
            redirect('quiz_controller/redirectafter_userlogin');
	}		
    }
    public function studentloginprocess(){
	$this->load->model('studentlogin_model');
	$result = $this->studentlogin_model->validate();
	if(! $result){
            $msg = 'Invalid college id and/or password.';
            $this->studentloginview($msg);
	}
        else{
            redirect('quiz_controller/redirectafter_studentlogin');
	}		
    }
    public function redirectafter_userlogin(){
        $this->load->helper('string');
        $position = $this->session->userdata('position');
        if($position === 'Admin'){
            $this->load->view('admin_dashboard_view');
        }
        if($position === 'Professor'){
            $this->load->view('professor_dashboard_view');
        }
    }
    public function redirectafter_studentlogin(){
        $this->load->view('student_dashboard_view');
    }

    public function do_logout_user(){
            $position = $this->session->userdata('position');
            $this->session->sess_destroy();
        if($position === 'Admin'){
            redirect('quiz_controller/userloginview');
        }
        if($position === 'Professor'){
            redirect('quiz_controller/userloginview');
        }
    }
        public function do_logout_student(){
		$this->session->sess_destroy();
                redirect('quiz_controller/studentloginview');

	}
        public function loadhome_view(){
            $this->load->view('home_view');
        }

        public function addques_view(){
            $query = $this->db->get("subjectid");
            $data['subjects'] = $query->result();
            $this->load->view('addques_view',$data);
        }
        public function add_ques(){
            $this->load->model('quesinsert_model');
            $data = array(
                'ques' => $this->input->post('ques'),
                'sub_id'=>  $this->input->post('subject'),
                'opt1' => $this->input->post('opt1'),
                'opt2' => $this->input->post('opt2'),
                'opt3' => $this->input->post('opt3'),
                'opt4' => $this->input->post('opt4'),
                'ans'  => $this->input->post('corrans')
            );
            $this->quesinsert_model->insert($data);
            $this->load->view('home_view');  
        }
        public function viewques_view(){
            $query = $this->db->get("subjectid");
            $data['subjects'] = $query->result();
            $this->load->view('viewques_view',$data);
        }
        
        public function viewques(){
            $data = $this->input->post();
            $sid = $data['sub_id'];
           $this->db->where('sub_id',$sid);
           $query = $this->db->get("question_bank");
           $data['quesquery'] = $query->result();
           $this->load->view('viewquestion_view',$data);
            
        }
        public function delpre_view(){
            $query = $this->db->get("subjectid");
            $data['subjects'] = $query->result();
            $this->load->view('deletequestion_view',$data);
        }

        public function deleteques_view(){
            $data = $this->input->post();
            $sid = $data['sub_id'];
           $this->db->where('sub_id',$sid);
           $query = $this->db->get("question_bank");
           $data['quesquery'] = $query->result();
           $this->load->view('deleteques_view',$data);
        }
        public function deleteques(){
            $this->load->model('quesinsert_model');
            $quesid = $this->uri->segment('3');
            $this->quesinsert_model->delete($quesid);
            $subid = $this->uri->segment('4');
            $this->db->where('sub_id',$subid);
            $query = $this->db->get("question_bank");
            $data['quesquery'] = $query->result();
            $this->load->view('deleteques_view',$data);
            
        }

        public function addsub_view(){
            $this->load->view('addsub_view');
        }

        public function add_sub(){
            $this->load->model('sub_model');
            $data = array(
                'id' =>  $this->input->post('subid'),
                'subject'=>  $this->input->post('subname')
            );
            $this->sub_model->insert($data);
            $this->load->view('home_view');
        }
        public function viewsub_view(){
            $query = $this->db->get("subjectid");
            $data['records'] = $query->result();
            $this->load->view('viewsub_view',$data);
        }
        public function deletesub_view(){
            $query = $this->db->get("subjectid");
            $data['records'] = $query->result();
            $this->load->view('deletesub_view',$data);
        }
        public function deletesub(){
            $this->load->model('sub_model');
            $subid = $this->uri->segment('3');
            $this->sub_model->delete($subid);
            $query = $this->db->get("subjectid");
            $data['records'] = $query->result();
            $this->load->view('deletesub_view',$data);
        }
        public function addstudatamanually_view(){
            $this->load->view('addstudatamanually_view');
        }
        public function add_stu_man(){
            $this->load->model('delstudata_model');
            $data = array(
                'college_id' =>  $this->input->post('coll_id'),
                'fname'=>  $this->input->post('fname'),
                'lname' =>  $this->input->post('lname'),
                'branch'=>  $this->input->post('branch'),
                'section' =>  $this->input->post('sec'),
                'year'=>  $this->input->post('year'),
                'email' =>  $this->input->post('email'),
                'mobile'=>  $this->input->post('mobile'),
                'password' =>  $this->input->post('password')
            );
            $this->delstudata_model->insert($data);
            $this->viewstudata_view();
        }

        public function addstudata_view(){
            $this->load->helper('form');
            $this->load->view('formupload_view', array('error' => ' ' ));
        }
        public function addquesexceltodb(){
            $this->load->helper('form');
            $this->load->view('formuploadques_view', array('error' => ' ' ));
        }

        public function do_upload()
        {
                $config['upload_path']          = './extraphp/';
                $config['allowed_types']        = 'xls';
                $config['max_size']             = 0;
                $config['remove_spaces']        = TRUE;

                $this->load->library('upload', $config);
                if ( !$this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('formupload_view',$error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success',$data);
                }
        }
        public function do_uploadques()
        {
                $config['upload_path']          = './extraphp/';
                $config['allowed_types']        = 'xls';
                $config['max_size']             = 0;
                $config['remove_spaces']        = TRUE;

                $this->load->library('upload', $config);
                if ( !$this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('formuploadques_view',$error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('uploadques',$data);
                }
        }
        public function viewstudata_view(){
            $query = $this->db->get("student_detail");
            $data['records'] = $query->result();
            $this->load->view('viewstu_view',$data);
        }
        public function delstudata_view(){
            $query = $this->db->get("student_detail");
            $data['records'] = $query->result();
            $this->load->view('delstudata_view',$data);
        }
        public function delstudata(){
            $this->load->model('delstudata_model');
            $college_id = $this->uri->segment('3');
            $this->delstudata_model->delete($college_id);
            $query = $this->db->get("student_detail");
            $data['records'] = $query->result();
            $this->load->view('delstudata_view',$data);
        }

        public function viewstu_categ_view(){
            $query = $this->db->get("subjectid");
            $data['subjects'] = $query->result();
            $this->load->view('viewques_view',$data);
        }
        public function selectsubquizview(){
            $query = $this->db->get("subjectid");
            $data['subjects'] = $query->result();
            $this->load->view('selectsubquiz_view',$data);
        }
        public function quizques(){
            $data = $this->input->post();
            $sid = $data['sub_id'];
            //$this->session->set_userdata('sub_id');
           $this->db->where('sub_id',$sid);
           $query = $this->db->get("question_bank");
           $data['quesquery'] = $query->result();
           $this->load->view('quizsubques_view',$data);
        }
        public function matchans(){
            $i =2;$flag=0;
            while($i<5){
                $ques_id =  $this->input->post('quesid'.$i);
                $ans=  $this->input->post('ans'.$i);
                $i++;
                $this->db->where(array('ques_id' =>$ques_id,'ans'=>$ans));
                $query =  $this->db->get("question_bank ") ;
                $count = count($query->result());
                if($count>0){
                    $flag++;
                }
            }
            $college_id = $this->session->userdata('college_id');
            $sid = $this->session->userdata('sub_id');
            $this->load->model('updateresult_model');
            $data = array(
                $sid => $flag,
            );
            $this->updateresult_model->update($data,$college_id);
            $this->selectsubquizview();
            
        }
        public function result_view(){
            $query = $this->db->get("student_result");
            $data['results'] = $query->result();
            $this->load->view('result_view',$data);
        }
        public function reset_view(){
            $this->load->view('reset_view');
        }

        public function reset(){
            $this->load->model('resetpassword_model');
            $data = array(
                'password' =>  $this->input->post('resetpass')
            );
            $this->resetpassword_model->update($data);
            $this->viewstudata_view();
        }
}
