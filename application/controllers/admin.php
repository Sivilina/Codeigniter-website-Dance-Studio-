<?php
$userid;
Class Admin extends CI_Controller{
     public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
				$this-> load-> helper('form');
				$this->load->library('session');
				$userid = $this->session->userdata('userid');
        }

   function admin_tables(){
	  if(isset($_SESSION['userrole'])){
		  if($_SESSION['userrole'] == "Admin"){
			  $this->load->view('admin_tables');
		  } else {
			  redirect(base_url() . 'index.php');
		  }
	  } else {
		  redirect(base_url() . 'index.php');
	  }
	}
	
	function tables(){
		 $this->load->view('admin_tables');
		 $this->load->view('footer');
	}
	
	function add(){
		 $this->load->view('add');
	}
   function editstyle(){
		 $this->load->view('edit/style');
	}
    function editmaster(){
		 $this->load->view('edit/master');
	}
	function editmember(){
		 $this->load->view('edit/member');
	}
	function editbank(){
		 $this->load->view('edit/bank');
	}
	function editpost(){
		 $this->load->view('edit/post');
	}
	function edituser(){
		 $this->load->view('edit/user');
	}
	function editcomment(){
		 $this->load->view('edit/comment');
	}
	
	  function deletestyle(){
		 $this->load->view('delete/style');
	}
    function deletemaster(){
		 $this->load->view('delete/master');
	}
	function deletemember(){
		 $this->load->view('delete/member');
	}
	function deletebank(){
		 $this->load->view('delete/bank');
	}
	function deletepost(){
		 $this->load->view('delete/post');
	}
	function deleteuser(){
		 $this->load->view('delete/user');
	}
	function deletecomment(){
		 $this->load->view('delete/comment');
	}
  }
?>
