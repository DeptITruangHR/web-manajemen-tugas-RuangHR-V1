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

    public function berikanTugas(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "2"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('hrd');
        $daftarAnggota = $this->hrd->getAllAnggota($session_data['id_departemen']);
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        // redirect('staffctl/success');
        $this->load->view("hrd/berikanTugas", array('nama' => $session_data['nama_user'], 'daftarAnggota'=> $daftarAnggota));
    }

    public function delegasikanTugas(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "2"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('hrd');
        $detailTugas = $this->hrd->insertTaskForStaf($session_data['id_member']); 
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        redirect('hrdctl/success');
    }

    public function setujuiTugas(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "2"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('hrd');
        $detailTugas = $this->hrd->approveTask();
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        redirect('hrdctl/success');
    }

    public function success(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "2"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('hrd');
        $allTask = $this->hrd->getAllTask($session_data['id_departemen']);
        $this->load->view("hrd/dashboard", array('nama' => $session_data['nama_user'], 'msg' => 'Berhasil Ditambahkan', 'error'=> '', 'alltask' => $allTask));
    }

    public function error(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "2"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('hrd');
        $allTask = $this->hrd->getAllTask($session_data['id_departemen']);
        $this->load->view("hrd/dashboard", array('nama' => $session_data['nama_user'], 'msg' => '', 'error'=> $error['error'], 'alltask' => $allTask));
    }

    public function profile(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "2"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('hrd');
        $myProfile = $this->hrd->getMyProfile($session_data['id_user']);
        // $allTask = $this->hrd->getAllTask($session_data['id_departemen']);
        $this->load->view("hrd/profile", array('nama' => $session_data['nama_user'], 'detail'=>$myProfile));
    }

    public function updateProfile(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "2"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('hrd');
        $profile = $this->hrd->updateProfileDetail($session_data['id_user']);
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        if($session_data['nama_user']==""){
            redirect('accountctl/logout');
        }else{
            redirect('hrdctl/profile');
        }
    }

    // public function tugasSaya(){
    //     if(!$this->session->userdata('logged_in')){
    //         redirect('welcome');
    //     }
    //     $session_data = $this->session->userdata('logged_in');
    //     if($session_data['id_grup'] != "2"){
    //         redirect('welcome/redirecting');
    //     }
    //     $this->load->model('account');
    //     $this->load->model('hrd');
    //     $myTask = $this->hrd->getAllTask($session_data['id_departemen']);
    //     // $myUndoneTask = $this->hrd->getMyUndoneTask($session_data['id_member']);
    //     // $tugas= $this->account->getAllJob($session_data['id_member']);
    //     $this->load->view("hrd/tugasSaya", array('nama' => $session_data['nama_user'], 'mytask' => $myTask));
    // }
    
}
