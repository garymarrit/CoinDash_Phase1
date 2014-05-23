<?php
	class Home extends Front_Controller{
		
		public function __construct(){
			parent::__construct();
			ob_start();
			$this->load->model('user_model');
		}
		
		public function  index(){
			$data = array();
			$data['url'] = site_url();
			$data['home'] = 1;
			$this->layout->view('front/home/index', $data);
		}
		
		public function check_username(){
			echo $this->user_model->check_username($this->input->post('email'));
		}
		
		public function faq(){
			$data = array();
			$this->layout->view('front/home/faq',$data);
		}

		public function register(){
			$data = array();
			$data['url'] = site_url('front/home/register');
			if($this->input->post('submit')){
				if($this->user_model->check_username($this->input->post('email'))=='1'){
					$data['msg']['error'] = "Username is already exists in our database.";
				} else {
					$user['email'] = $this->input->post('email');
					$user['password'] = md5($this->input->post('password'));
					$md5['md5'] = $user['password'];
					$md5['value'] = $this->input->post('password');
					$user['key'] = md5($user['email']);
					$user['is_activated'] = '0';
					$this->user_model->register($user,$md5);
					$data['msg']['success'] = "<i class='fa fa-check'></i> Thanks for register, Please check your inbox to activate your account.";
				}
			}
			$this->layout->view('front/home/register', $data);
		}
		
		public function newsletter(){
			$email = $this->input->post('email');
			echo $this->user_model->newsletter($email);
		}

		public function activate($key){
			$data = array();
			$data['home'] = 1;
			$return = $this->user_model->activate($key);
			if($return){
				$this->layout->view('front/home/terms',$data);
			} else {
				site_url('front/home/register');
			}
		}
		
		public function agree(){
			$this->user_model->agree();
			redirect(site_url('front/dashboard'));
		}
		
		public function forgot_password(){
			$data = array();
			if($this->input->post('submit')) {
				$email = $this->input->post('username');
				$check_user = $this->user_model->check_exists_user($email);

				if($check_user) {
					$data['msg']['success'] = 'Your password is sent to your email account';
				} else {
					$data['msg']['error'] = 'No user found with this email address';
				}
			}
			$this->layout->view('front/home/forgot',$data);
		}
		
		public function login(){
			$data = array();
			$data['url'] = site_url('front/home/login');
			if($this->input->post('submit')){
				$user['email'] = $this->input->post('email');
				$user['password'] = $this->input->post('password');
				$user['remember_me'] = $this->input->post('remember');
				$loggedIn = $this->user_model->login($user);
				if($loggedIn==1){
					redirect(site_url('front/dashboard'));
				} else {
					$data['msg']['error'] = "<i class='fa fa-exclamation-triangle'></i> ".$loggedIn;
				}
			}
			$this->layout->view('front/home/login',$data);
		}
		
		/*
		** Press (Static Page)
		*/
		public function press(){
			$data = array();
			$this->layout->view('front/home/press',$data);
		}
		
		/*
		** Contact Us (Form and Static Content)
		*/
		public function contact_us(){
			$data = array();
			$this->layout->view('front/home/contact_us',$data);
		}
		
		
			/*
		** About Us (Form and Static Content)
		*/
		public function about_us(){
			$data = array();
			$this->layout->view('front/home/about_us',$data);
		}
		
		/*
		** Jobs (Career Page)
		*/
		public function jobs(){
			$data = array();
			$this->layout->view('front/home/jobs',$data);
		}
	}
?>