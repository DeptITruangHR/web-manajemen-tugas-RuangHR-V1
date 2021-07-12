<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountCtl extends CI_Controller {
	public function creatingAccount(){
		$this->load->helper('url', 'security');
		$this->load->model('account');
		$this->load->library(array('form_validation'));
		$this->form_validation->set_rules('username', 'username', 'required|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'required|xss_clean');
		$res = $this->form_validation->run();
		$dept = $this->account->getAllDept();
		if( $res == FALSE){
			$msg = validation_errors();
			$this->load->view('signup', array('msg' => '', 'dept' => $dept));
		}
		$id_user= $this->account->insertNewUser();
		redirect(base_url().'index.php/welcome/daftaranggota');
	}

	public function checkingLogin(){
		$this->load->helper('url','security');
        $this->load->model('account');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'username', 'required|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'required|xss_clean');
        $res = $this->form_validation->run();
        if( $res = FALSE){
            $msg = validation_errors();
            $this->load->view('login', array('msg' => $msg));
            return FALSE;
        }
 
        $users = $this->account->getIDUser();
        if(sizeof($users)<=0){
            $msg = "Username or Password is incorrect";
            $this->load->view('login', array("msg" => $msg));
        }else{
			$session_data = array(
				'id_user' => $users[0]['id_user'],
				'id_member' => $users[0]['id_member'],
				'nama_user' => $users[0]['nama_user'],
				'id_departemen' => $users[0]['id_departemen'],
				'id_wilayahKerja' => $users[0]['id_wilayahKerja'],
				'id_grup' => $users[0]['id_grup']
			);
			$this->session->set_userdata('logged_in', $session_data);
			if($users[0]['id_grup'] == 3){
				redirect('staffctl');
			}else if($users[0]['id_grup'] == 2){
				redirect('hrdctl');
			}else{
				redirect('managementctl');
			}
		}
	}
}
