<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HrdCtl extends CI_Controller {
	public function index(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "2"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('hrd');
        // if($session_data['nama_user']==""){
        //     redirect("hrdctl/profile");
        // }
        $allTask = $this->hrd->getAllTask($session_data['id_departemen']);
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        $this->load->view("hrd/dashboard", array('nama' => $session_data['nama_user'], 'msg' => '', 'error'=>'', 'alltask' => $allTask));
    }

    public function detailtugas(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "2"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('hrd');
        $detailTugas = $this->hrd->getTaskDetail($session_data['id_grup']);
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        $this->load->view("hrd/detailTugas", array('nama' => $session_data['nama_user'], 'detail' => $detailTugas));
    }
    
}
