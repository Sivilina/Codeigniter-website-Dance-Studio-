<?php

Class Auth extends CI_Controller{
     public function __construct(){
			parent::__construct();
			$this->load->model('users_model');
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('session');
            //redirect('auth/login');
        }
		 function login(){
		  if (isset($_POST['password'])){ // проверяем был ли прислан пароль
				$user = $this->users_model->get_user($_POST['username'],$_POST['password']);
				if($user!=null){
					$session_data = array(
					'userid' =>$user['id'], 
					'userrole' => $user['role'],
					'bankId' => $user['bank'],
					'username' => $user['username'],
					'full_name' => $user['full_name'],
					 'memberId' => $user['member'],
					 'member_end_date' => $user['member_end_date']
					); 
					$this->session->set_userdata($session_data);
					redirect('index.php/blog/news'); // редирект на главную страницу
				}
				else
				{
					redirect('index.php/auth/login','refresh');

				}
			}
			$this->load->view('login');
         }
		 function register(){
		  if (isset($_POST['password']) && isset($_POST['confirmpassword'])){ 
				$psw = $_POST['password'];
				$cnfpsw = $_POST['confirmpassword'];
				if($psw == $cnfpsw){
					$data = array(
						'username'=>$_POST['username'],
						'full_name'=>$_post['full_name'],
						'password'=>$psw,
						'role'=>'User',
						'bank'=>'4',
						'member'=>'0'
					);
					$this->db->insert('users',$data);
					$user = $this->users_model->get_user($data['username'],$data['password']);
					if($user!=null){
						$session_data = array(
						'userid' =>$user['id'], 
						'userrole' => $user['role'],
						'bankId' => $user['bank'],
						'username' => $user['username'],
						'full_name' => $user['full_name'],
						 'memberId' => $user['member'],
						 'member_end_date' => $user['member_end_date']
						); 
						$this->session->set_userdata($session_data);
						redirect('index.php/blog/news');
					}
					else
					{
						redirect('index.php/auth/login');

					}
				} else {
					$data['alert_msg'] = 'Passwords does not match';	
					$this->load->view('register',$data);
				}
			}
			
			$this->load->view('register','refresh');
			
         }
		 
		 function logout(){
                     $this->session->sess_destroy();  
                     redirect('');
             }


}