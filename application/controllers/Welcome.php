<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('login', array('msg' => ''));
	}

	public function daftaranggota(){
		$this->load->helper('form');
		$this->load->model('account');
		$dept = $this->account->getAllDept();
		$this->load->view('signup', array('msg' => '', 'dept' => $dept));
	}

	public function redirecting(){
		if(!$this->session->userdata('logged_in')){
            redirect('welcome');
        }
        $session_data = $this->session->userdata('logged_in');
        
		if($session_data['id_grup'] == 3){
			redirect('staffctl');
		}else if($session_data['id_grup'] == 2){
			redirect('hrdctl');
		}else{
			redirect('managementctl');
		}
	}
}
