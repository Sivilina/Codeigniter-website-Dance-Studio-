<?php
$userid;
Class blog extends CI_Controller{
     public function __construct()
        {
                parent::__construct();
                $this->load->model('posts_model');
				$this->load->model('styles_model');
				$this->load->model('masters_model');
				$this->load->model('comments_model');
                $this->load->helper('url');
				$this-> load-> helper('form');
				$this->load->library('session');
				$userid = $this->session->userdata('userid');
        }

   function index(){
	  $this->load->view('header');
	  $this->load->view('home');
	  $this->load->view('footer');
   }
   function news(){
	   $data['posts'] = $this->posts_model->get_posts();
	   $this->load->view('header_white');
	   $this->load->view('news',$data);
	   $this->load->view('footer');
   }
   function do_upload()
	{
	  $url = "../images";
	  $image=basename($_FILES['pic']['name']);
	  $image=str_replace(' ','|',$image);
	  $type = explode(".",$image);
	  $type = $type[count($type)-1];
	  if (in_array($type,array('jpg','jpeg','png','gif')))
	  {
		$tmppath="images/".uniqid(rand()).".".$type; // uniqid(rand()) function generates unique random number.
		if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
		{
		  move_uploaded_file($_FILES['pic']['tmp_name'],$tmppath);
		  return $tmppath; // returns the url of uploaded image.
		}
	  }
	  else
	  {
		redirect(base_url() . 'index.php');
	  }
	}
	
    function news_moderator(){
		if($_SESSION['userrole'] != 'Moderator'){
			$data1['alert_msg'] = 'You do not have access to this page';
			$data['posts'] = $this->posts_model->get_posts();
			$this->load->view('header_white');
			$this->load->view('news',$data);
			$this->load->view('footer',$data1);
		} else {
		   $data['posts'] = $this->posts_model->get_posts();
		   $this->load->view('header_white');
		   $this->load->view('news_moderator',$data);
		   $this->load->view('footer');
		}
   }
   function styles(){
	   $data['styles'] = $this->styles_model->get_styles();
	   $this->load->view('header_white');
	   $this->load->view('styles',$data);
	   $this->load->view('footer');
	}
    function masters(){
	   $data['masters'] = $this->masters_model->get_masters();
	   $this->load->view('header_white');
	   $this->load->view('masters',$data);
	   $this->load->view('footer');
	}
   function post(){
	   $id=$this->uri->segment(3);
	   $data['post'] = $this->posts_model->get_posts($id);
	   $data['commentsCount'] = $this->comments_model->get_comments_count($id);
	   $data['comments'] = $this->comments_model->get_comments($id);
	   $this->load->view('header_white');
	   $this->load->view('post',$data);
	   $this->load->view('footer');
	}
    function comment_add(){
		if(!isset($_SESSION['userid']))
			redirect(base_url().'index.php/auth/login');
		$comment = array(
			'context'=>$_POST['context'],
			'date'=>$_POST['date'],
			'post'=>$_POST['post'],
			'user'=>$_SESSION['userid']
		);
		$this-> db-> insert('comments',$comment); 
		redirect(base_url().'index.php/blog/post/'.$_POST['post']); 
	}

	function post_add(){
		//$config['upload_path'] = "./images/";
		$post = array(
			'context'=>$_POST['context'],
			'date'=>$_POST['date'],
			'title'=>$_POST['title'],
			'user'=>$_SESSION['userid'],
			'image'=>$this->do_upload()
		);
		$this-> db-> insert('posts',$post); 
		redirect(base_url().'index.php/blog/news_moderator'); 
	}
	
	function schedule(){
		$this->load->view('header_white');
		$this->load->view('schedule');
		$this->load->view('footer');
	}
	
	
	function faq(){
		$this->load->view('header');
		$this->load->view('faq');
		$this->load->view('footer');
	}
	function contacts(){
		$this->load->view('header');
		$this->load->view('contacts');
	}
   
	function mailsend(){
		$to = $_POST['content'];
		$subject = "Dance";
		$txt = "Please say us your name, birthdate and style you want to teach";
		$headers = "From: webmaster@example.com" . "\r\n";
		mail($to,$subject,$txt,$headers);
	}
	
	function search(){
		$key;
		if(!isset($_POST['key'])){
			$key = $this->uri->segment(3);
		} else {
			$key = $_POST['key'];
		}
		$data['posts'] = $this->posts_model->get_search($key);
		$this->load->view('header_white');
		$this->load->view('news', $data);
		$this->load->view('footer');
	}
  }
?>
