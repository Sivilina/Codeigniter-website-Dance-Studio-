<?php

Class Member extends CI_Controller{

     public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('session');
			$this->load->model('banks_model');
			$this->load->model('users_model');
        }

		function buy(){
			if(isset($_SESSION['userid'])){
				$data['newMemberId'] = $this->uri->segment(3);
				if($_SESSION['bankId'] != 4){
					$bank = $this->banks_model->get_bank($_SESSION['bankId']);
					if ($bank != null){
						$data['bank'] = $bank;
						$this->load->view('header_white');
						$this->load->view('bank_account',$data);
						$this->load->view('footer');
					}else {
					$this->load->view('header_white');
					$this->load->view('bank_account_new');
				}
				} else {
					$this->load->view('header_white');
					$this->load->view('bank_account_new');
				}
			} else {
				$data['alert_msg'] = 'You need to login first';
				redirect('index.php/auth/login',$data);
			}
		}
		function editcard(){
			$bank;
			if(isset($_SESSION['userid'])){
				if($_SESSION['bankId'] != 4){
					$bank = $this->banks_model->get_bank($_SESSION['bankId']);
				}
				$data['bank'] = $bank;
				$this->load->view('header_white');
				$this->load->view('bank_account_new',$data);
			} else {
				redirect('index.php/auth/login');
			}
		}
		
		function edit_bank(){
			if(isset($_SESSION['userid'])){
				if($_SESSION['bankId'] != 4){
					//$bank = $this->banks_model->get_bank($_SESSION['bankId']);
					$bank_data = array(
						'id' => $_SESSION['bankId'],
						'client_id' => $_POST['client_id'],
						'name' => $_POST['name'],
						'surname' => $_POST['surname'],
						'until_date' => $_POST['until_date'],
						'cvn' => $_POST['cvn']
					);
					$this->db->where('id',$_SESSION['bankId']);
					$this->db->update('banks',$bank_data);
					$url = 'index.php/member/buy'.$this->uri->segment(3);
					redirect($url);
				} else {
					$this->db->insert('banks',$_POST);
					$insertId = $this->db->insert_id();
					$user_data = array(
						'bank' => $insertId
					);
					$this->db->where('id',$_SESSION['userId']);				
					$this->db->update('users',$user_data);
					$session_data['bankId'] = $insertId;
					$this->session->set_userdata($session_data);
					$url = 'index.php/member/buy'.$this->uri->segment(3);
					redirect($url);
				}
			} else {
				redirect('index.php/auth/login');
			}
			$data['bank'] = $bank;
			$this->load->view('header_white');
			$this->load->view('bank_account_new',$data);
		}
		function membership(){
			if(isset($_SESSION['memberId'])){
				if (($_SESSION['memberId'] == '1') || ($_SESSION['memberId'] == '2') || ($_SESSION['memberId'] == '3')){
					$this->load->view('header_white');
					$user = $this->users_model->get_user_by_id($_SESSION['userid']);
					$endDate = $user['member_end_date'];
					$today = date('Y-m-d H:i:s');
					if($endDate < $today){
						$user_data = array(
							'role' => $_SESSION['userrole'],
							'bank' => $_SESSION['bankId'],
							'username' => $_SESSION['username'],
							'full_name' => $_SESSION['full_name'],
							 'member' => $newMemberId,
							 'member_end_date' => $effectiveDate
						);
					$this->db->where('id',$_SESSION['userid']);
					$this->db->update('users',$user_data);
					$this->load->view('header_white');
					$this->load->view('membership');
					$this->load->view('footer');
					}
					$date1 = date('Y-m-d H:i:s', strtotime("-3 days", strtotime($endDate)));
					if($date1 < $today){
						$data['alert_msg'] = "Your membership inspires in the 3 days";
						$this->load->view('videos');
						$this->load->view('footer',$data);
					} else {
						$this->load->view('videos');
						$this->load->view('footer');
					}
				} else {
					$this->load->view('header_white');
					$this->load->view('membership');
					$this->load->view('footer');
				}
			} else {
				$this->load->view('header_white');
				$this->load->view('membership');
				$this->load->view('footer');
			}
		}
		function paywithcard(){
			$newMemberId = $this->uri->segment(3);
			if ($newMemberId != ''){
				$effectiveDate = date('Y-m-d H:i:s');
				$effectiveDate = date('Y-m-d H:i:s', strtotime("+1 month", strtotime($effectiveDate)));
				$user_data = array(
							'role' => $_SESSION['userrole'],
							'bank' => $_SESSION['bankId'],
							'username' => $_SESSION['username'],
							'full_name' => $_SESSION['full_name'],
							 'member' => $newMemberId,
							 'member_end_date' => $effectiveDate
						);
				$this->db->where('id',$_SESSION['userid']);
				$this->db->update('users',$user_data);
				$session_data['memberId'] = $newMemberId;
				$session_data['member_end_date'] = $effectiveDate;
				$this->session->set_userdata($session_data);
				$this->load->view('header_white');
				$this->load->view('videos');//,$data);
				$this->load->view('footer');
			}
		}
		
}