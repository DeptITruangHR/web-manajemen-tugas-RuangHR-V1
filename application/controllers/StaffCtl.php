<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StaffCtl extends CI_Controller {
	public function index(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "3"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('staff');
        if($session_data['nama_user']==""){
            redirect("staffctl/profile");
        }
        $allTask = $this->staff->getAllTask($session_data['id_departemen']);
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        $this->load->view("staff/dashboard", array('nama' => $session_data['nama_user'], 'msg' => '', 'error'=>'', 'alltask' => $allTask));
    }

    public function detailtugas(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "3"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('staff');
        $detailTugas = $this->staff->getTaskDetail($session_data['id_grup']);
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        $this->load->view("staff/detailTugas", array('nama' => $session_data['nama_user'], 'detail' => $detailTugas));
    }

    public function tambahTugas(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "3"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        $this->load->view("staff/tambahTugas", array('nama' => $session_data['nama_user']));
    }

    public function masukkanTugas(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "3"){
            redirect('welcome/redirecting');
        }
        $this->load->helper(array('url','security','form'));
        $this->load->model('staff');
        
        // $upload_data = $this->upload->data();
        $config['upload_path'] = FCPATH."/file";
        $config['file_name'] = $_FILES["lampiran"]['name'];
        $config['allowed_types'] = 'gif|jpg|png';
        $newname = $_FILES['lampiran']['name'];
        
        
        $this->load->library('upload', $config); 
        if( ! $this->upload->do_upload('lampiran')){ 
            $error = array('error' => $this->upload->display_errors());
            redirect('staffctl/error');
        }else{
            $id_task = $this->staff->insertNewTask($session_data['id_member'], $newname);
            $data = array('upload_data' => $this->upload->data());
            redirect('staffctl/success');
            // $this->load->view("staff/dashboard", array('nama' => $session_data['nama_user'], 'msg' => 'Berhasil Ditambahkan', 'error'=> ''));
        }
    }

    public function masukkanNotulensi(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "3"){
            redirect('welcome/redirecting');
        }
        $this->load->helper(array('url','security','form'));
        $this->load->model('staff');
        $id_notulensi = $this->staff->insertNewNotulensi($session_data['id_member']);
        if($id_notulensi > 0){
            redirect('staffctl/success');
        }else{
            redirect('staffctl/error');
        }
    }

    public function masukkanUpdateTugas(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "3"){
            redirect('welcome/redirecting');
        }
        $this->load->helper(array('url','security','form'));
        $this->load->model('staff');
        
        // $upload_data = $this->upload->data();
        $config['upload_path'] = FCPATH."/file";
        $config['file_name'] = $_FILES["lampiran"]['name'];
        $config['allowed_types'] = 'gif|jpg|png';
        $newname = $_FILES['lampiran']['name'];
        

        $this->load->library('upload', $config); 
        if( ! $this->upload->do_upload('lampiran')){ 
            $error = array('error' => $this->upload->display_errors());
            redirect('staffctl/error');
        }else{
            $id_task = $this->staff->insertUpdateTask($session_data['id_member'], $newname);
            $data = array('upload_data' => $this->upload->data());
            redirect('staffctl/success');
            // $this->load->view("staff/dashboard", array('nama' => $session_data['nama_user'], 'msg' => 'Berhasil Ditambahkan', 'error'=> ''));
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
        $this->load->model('staff');
        $detailTugas = $this->staff->getTaskDetail($session_data['id_grup']);
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        $this->load->view("staff/updateTugas", array('nama' => $session_data['nama_user'], 'detail' => $detailTugas));
    }

    public function tugasSaya(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "3"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('staff');
        $myTask = $this->staff->getMyTask($session_data['id_member']);
        $myUndoneTask = $this->staff->getMyUndoneTask($session_data['id_member']);
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        $this->load->view("staff/tugasSaya", array('nama' => $session_data['nama_user'], 'mytask' => $myTask, 'myUndoneTask' => $myUndoneTask));
    }



    public function daftarNotulensi(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "3"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('staff');
        $staff = $this->staff->getAllNotulensi($session_data['id_departemen']);
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        $this->load->view("staff/daftarNotulensi", array('nama' => $session_data['nama_user'], 'allstaff' => $staff));
    }

    public function tambahNotulensi(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "3"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        $this->load->view("staff/tambahNotulensi", array('nama' => $session_data['nama_user']));
    }

    public function detailNotulensi(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "3"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('staff');
        $detailNotulensi = $this->staff->getNotulensiDetail();
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        $this->load->view("staff/detailNotulensi", array('nama' => $session_data['nama_user'], 'detail' => $detailNotulensi));
    }

    public function profile(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "3"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('staff');
        $detailProfile = $this->staff->getProfileDetail($session_data['id_user']);
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        $this->load->view("staff/profile", array('nama' => $session_data['nama_user'], "detail"=>$detailProfile));
    }

    public function updateProfile(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "3"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('staff');
        $profile = $this->staff->updateProfileDetail($session_data['id_user']);
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        if($session_data['nama_user']==""){
            redirect('accountctl/logout');
        }else{
            redirect('staffctl/profile');
        }
        // $this->load->view("staff/profile", array('nama' => $session_data['nama_user'], "detail"=>$detailProfile));
    }

    public function success(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "3"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('staff');
        $allTask = $this->staff->getAllTask($session_data['id_departemen']);
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        // $this->load->view("staff/dashboard", array('nama' => $session_data['nama_user'], 'msg' => '', 'error'=>''));
        $this->load->view("staff/dashboard", array('nama' => $session_data['nama_user'], 'msg' => 'Berhasil Ditambahkan', 'error'=> '', 'alltask' => $allTask));
    }

    public function error(){
        if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        if($session_data['id_grup'] != "3"){
            redirect('welcome/redirecting');
        }
        $this->load->model('account');
        $this->load->model('staff');
        $allTask = $this->staff->getAllTask($session_data['id_departemen']);
        $error = [
            'error' => 'Data tidak Berhasil Masuk'
        ];
        // $tugas = $this->account->getAllJob($session_data['id_member']);
        // $this->load->view("staff/dashboard", array('nama' => $session_data['nama_user'], 'msg' => '', 'error'=>''));
        $this->load->view("staff/dashboard", array('nama' => $session_data['nama_user'], 'msg' => '', 'error'=> $error['error'], 'alltask' => $allTask));
        // $this->load->view("staff/dashboard", array('nama' => $session_data['nama_user'], 'msg' => 'Berhasil Ditambahkan', 'error'=> '', 'alltask' => $allTask));
    }
}
