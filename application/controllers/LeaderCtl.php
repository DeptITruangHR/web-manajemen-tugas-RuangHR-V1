<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LeaderCtl extends CI_Controller {
	public function index(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "4"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        // $this->load->model('staff');
        // $allTask = $this->staff->getAllTask($session_data['id_departemen']);
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        $this->load->view("staff/dashboard", array('nama' => $session_data['nama_user'], 'msg' => '', 'error'=>'', 'alltask' => $allTask));
    }
}
