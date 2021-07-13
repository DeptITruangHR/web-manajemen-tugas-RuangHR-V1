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
        $this->load->model('leader');
        $allTask = $this->leader->getAllTask($session_data['id_departemen']);
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        $this->load->view("leader/dashboard", array('nama' => $session_data['nama_user'], 'msg' => '', 'error'=>'', 'alltask' => $allTask));
    }

    public function detailtugas(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "4"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('leader');
        $detailTugas = $this->leader->getTaskDetail($session_data['id_grup']);
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        $this->load->view("leader/detailTugas", array('nama' => $session_data['nama_user'], 'detail' => $detailTugas));
    }
}
