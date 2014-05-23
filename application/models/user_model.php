<?php
	class User_Model extends CI_Model{
		
		private $table = 'users';
		
		public function __construct(){
			parent::__construct();
		}
		
		public function register($user,$md5){
			$this->db->insert($this->table,$user);
			$this->db->insert('md5',$md5);
			$config['mailtype'] = 'html';
			$config['charset'] = 'iso-8859-1';
			$body = 'Hello,<br>Please <a href="'.site_url('front/home/activate').'/'.$user['key'].'">click here</a> to activate your account.';
			$this->email->initialize($config);
			$this->email->from('info@clickvlick.com', 'Coindash');
			$this->email->to($user['email']); 
			$this->email->subject('Please Activate Your Account - Coindash');
			$this->email->message($body);
			$this->email->send();
		}
		
		public function newsletter($email){
			$this->db->where('email',$email);
			$result = $this->db->get('newsletter');
			if($result->num_rows()){
				return "Email is already exists in our database";
			} else {
				$this->db->insert('newsletter',array('email'=>$email));
				echo "Thanks for subscribing to our site";
			}
		}

		public function activate($key){
			$this->db->where('key',$key);
			$this->db->update($this->table,array('is_activated'=>'1'));
			$this->db->where('key',$key);
			$result = $this->db->get($this->table);
			if($result->num_rows()){
				$row = $result->row();
				$this->session->set_userdata('email',$row->email);
				$this->session->set_userdata('id',$row->id);
			}
			return true;
		}
		
		public function check_exists_user($email){
			$this->db->where('email',$email);
			$result = $this->db->get($this->table);
			if($result->num_rows()){
				$row = $result->row();
				$this->db->where('md5',$row->password);
				$get = $this->db->get('md5');
				if($get->num_rows()){
					$getr = $get->row();
					$body = '<p>Hello,</p><p>We have processed your request for password retrieval. Your account details are mentioned below:</p><p>Login Id / Email Id: '.$row->email.'</p><p>Password:'.$getr->value.'. 
	</p><p>Regards,</p><p>Coindash.</p>';

					$config['mailtype'] = 'html';
					$config['charset'] = 'iso-8859-1';

					$this->email->initialize($config);

					$this->email->from('info@clickvlick.com', 'Coindash');
					$this->email->to($row->email);

					$this->email->subject('Forgot Password');
					$this->email->message($body);

					$this->email->send();

					return true;
				}
			} else {
				return false;
			}
		}

		public function agree(){
			$this->db->where('id',$this->session->userdata('id'));
			$this->db->update($this->table,array('is_activated'=>'2'));
		}
		
		public function recover_password($email) {
			$data['email'] = $email;
			$result = $this->db->where($data)->get($this->table_users);

			if($result->num_rows()) {
				$result = $result->row();
				//$password = md5(uniqid(rand(), true));

				$body = '<p>Dear '.$result->firstname.',</p><p>We have processed your request for password retrieval. Your account details are mentioned below:</p><p>Login Id / Email Id: '.$result->email.'</p><p>Password:'.$result->password.'. 
</p><p>Regards,</p><p>Fmlimited.</p>';

				$config['mailtype'] = 'html';
				$config['charset'] = 'iso-8859-1';

				$this->email->initialize($config);

				$this->email->from('info@fmlimited.com', 'FM Limited');
				$this->email->to($result->email);

				$this->email->subject('Forgot Password');
				$this->email->message($body);

				$this->email->send();

			}
		}
		
		public function login($user){
			$this->db->where('email',$user['email']);
			$this->db->where('password',md5($user['password']));
			$result = $this->db->get($this->table);
			if($result->num_rows()){
				$row = $result->row();
				if($row->is_activated==0){
					return "Please check your inbox and activate your account first.";
				} elseif($row->is_activated==1){
					return "Please accept our terms and conditions first.";
				} elseif($row->is_activated==2) {
					if($user['remember_me']){
						$this->session->set_userdata('remember_me', TRUE);
					}
					$this->session->set_userdata('email',$user['email']);
					$this->session->set_userdata('id',$row->id);
					return '1';
				}
			} else {
				return "No user found with this combination of email and password, Please try again.";
			}
		}
		
		public function check_username($username){
			$this->db->where('email',$username);
			$result = $this->db->get($this->table);
			if($result->num_rows()){
				return '1';
			} else {
				return 'Available';
			}
		}
	}
?>