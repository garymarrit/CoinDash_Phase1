<?php
	class Dashboard extends Dashboard_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->model('user_model');
		}
		
		public function index(){
			$data = array();
			$this->layout->view('front/dashboard/index',$data);
		}

		public function account(){
			$data = array();
			$this->layout->view('front/dashboard/account',$data);
		}

		public function wallet(){
			$data = array();
			$this->layout->view('front/dashboard/wallet',$data);
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect(site_url());
		}
	}
?>