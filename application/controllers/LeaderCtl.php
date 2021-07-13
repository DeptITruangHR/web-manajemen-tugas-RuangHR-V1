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

    public function tugasSaya(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "4"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('leader');
        $myTask = $this->leader->getMyTask($session_data['id_member']);
        $myUndoneTask = $this->leader->getMyUndoneTask($session_data['id_member']);
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        $this->load->view("leader/tugasSaya", array('nama' => $session_data['nama_user'], 'mytask' => $myTask, 'myUndoneTask' => $myUndoneTask));
    }

    public function tambahTugas(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "4"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        $this->load->view("leader/tambahTugas", array('nama' => $session_data['nama_user']));
    }

    public function masukkanTugas(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "4"){
            redirect('welcome/redirecting');
        }
        $this->load->helper(array('url','security','form'));
        $this->load->model('leader');
        
        // $upload_data = $this->upload->data();
        $config['upload_path'] = FCPATH."/file";
        $config['file_name'] = $_FILES["lampiran"]['name'];
        $config['allowed_types'] = 'gif|jpg|png';
        $newname = $_FILES['lampiran']['name'];
        
        
        $this->load->library('upload', $config); 
        if( ! $this->upload->do_upload('lampiran')){ 
            $error = array('error' => $this->upload->display_errors());
            redirect('leaderctl/error');
        }else{
            $id_task = $this->leader->insertNewTask($session_data['id_member'], $newname);
            $data = array('upload_data' => $this->upload->data());
            redirect('leaderctl/success');
        }
    }
    public function success(){
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
        $this->load->view("leader/dashboard", array('nama' => $session_data['nama_user'], 'msg' => 'Berhasil Ditambahkan', 'error'=> '', 'alltask' => $allTask));
    }

    public function error(){
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
        $this->load->view("leader/dashboard", array('nama' => $session_data['nama_user'], 'msg' => '', 'error'=> $error['error'], 'alltask' => $allTask));
    }
}
