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
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        $this->load->view("staff/dashboard", array('nama' => $session_data['nama_user']));
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
        // $tugas= $this->account->getAllJob($session_data['id_member']);
        $this->load->view("staff/detailTugas", array('nama' => $session_data['nama_user']));
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
}
