<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManagementCtl extends CI_Controller {
	public function index(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "1"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('management');
        // if($session_data['nama_user']==""){
        //     redirect("hrdctl/profile");
        // }
        $data = $this->management->getAllData();
        // $allTask = $this->hrd->getAllTask($session_data['id_departemen']);
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        $this->load->view("management/dashboard", array('nama' => $session_data['nama_user'], 'msg' => '', 'error'=>'', 'data'=>$data));
    }

    public function daftarAnggota(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "1"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('management');
        // if($session_data['nama_user']==""){
        //     redirect("hrdctl/profile");
        // }
        $data = $this->management->getAllAnggota();
        // $allTask = $this->hrd->getAllTask($session_data['id_departemen']);
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        $this->load->view("management/daftarAnggota", array('nama' => $session_data['nama_user'], 'msg' => '', 'error'=>'', 'data'=>$data));
    }

    public function detailtugas(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "1"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('management');
        $detailTugas = $this->management->getTaskDetail($session_data['id_grup']);
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        $this->load->view("management/detailTugas", array('nama' => $session_data['nama_user'], 'detail' => $detailTugas));
    }

    public function tambahTugas(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "1"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        $this->load->view("management/tambahTugas", array('nama' => $session_data['nama_user']));
    }

    public function masukkanTugas(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "1"){
            redirect('welcome/redirecting');
        }
        $this->load->helper(array('url','security','form'));
        $this->load->model('management');
        
        // $upload_data = $this->upload->data();
        $config['upload_path'] = FCPATH."/file";
        $config['file_name'] = $_FILES["lampiran"]['name'];
        $config['allowed_types'] = 'gif|jpg|png';
        $newname = $_FILES['lampiran']['name'];
        
        
        $this->load->library('upload', $config); 
        if( ! $this->upload->do_upload('lampiran')){ 
            $error = array('error' => $this->upload->display_errors());
            redirect('ManagementCtl/error');
        }else{
            $id_task = $this->management->insertNewTask($session_data['id_member'], $newname);
            $data = array('upload_data' => $this->upload->data());
            redirect('ManagementCtl/success');
            // $this->load->view("management/dashboard", array('nama' => $session_data['nama_user'], 'msg' => 'Berhasil Ditambahkan', 'error'=> ''));
        }
    }

    public function updateTugas(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "3"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('management');
        $detailTugas = $this->management->getTaskDetail($session_data['id_grup']);
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        $this->load->view("management/updateTugas", array('nama' => $session_data['nama_user'], 'detail' => $detailTugas));
    }

    public function tugasSaya(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "1"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('management');
        $myTask = $this->management->getMyTask($session_data['id_member']);
        $myUndoneTask = $this->management->getMyUndoneTask($session_data['id_member']);
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        $this->load->view("management/tugasSaya", array('nama' => $session_data['nama_user'], 'mytask' => $myTask, 'myUndoneTask' => $myUndoneTask));
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
        $this->load->model('management');
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
        $this->load->model('management');
        $allTask = $this->hrd->getAllTask($session_data['id_departemen']);
        $this->load->view("hrd/dashboard", array('nama' => $session_data['nama_user'], 'msg' => '', 'error'=> $error['error'], 'alltask' => $allTask));
    }
    
}