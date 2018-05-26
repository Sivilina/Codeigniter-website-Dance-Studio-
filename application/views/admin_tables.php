<?php 
include "db.php";

$attribute = "id";
$type = "ASC";
if(isset($_GET['attribute'])) {
	$attribute = $_GET['attribute'];
	$type = $_GET['type'];
}

$q = "";
$attribute = "id";
if(isset($_GET['q'])) {
	$q = $_GET['q'];
	$attribute = $_GET['attribute'];
}

$styles_count = mysqli_query($connection, "SELECT * FROM `styles` WHERE $attribute LIKE '%$q%' ORDER BY $attribute $type");
$masters_count = mysqli_query($connection, "SELECT * FROM `masters` WHERE $attribute LIKE '%$q%' ORDER BY $attribute $type");
$memberships_count = mysqli_query($connection, "SELECT * FROM `memberships` WHERE $attribute LIKE '%$q%' ORDER BY $attribute $type");
$banks_count = mysqli_query($connection, "SELECT * FROM `banks` WHERE $attribute LIKE '%$q%' ORDER BY $attribute $type");
$users_query = "SELECT u.id, u.username, u.full_name,u.role,u.bank,m.type, m.price FROM `users` u LEFT JOIN `memberships` m ON u.member=m.id 
				WHERE u.$attribute LIKE '%$q%' ORDER BY u.$attribute $type";
$users_count = mysqli_query($connection, $users_query);
$posts_count = mysqli_query($connection, "SELECT * FROM `posts` WHERE $attribute LIKE '%$q%' ORDER BY $attribute $type");
$comments_count = mysqli_query($connection, "SELECT * FROM `comments` WHERE $attribute LIKE '%$q%' ORDER BY $attribute $type");

$styles = $connection->query("SELECT * FROM `styles` WHERE $attribute LIKE '%$q%' ORDER BY $attribute $type");
$masters = $connection->query("SELECT * FROM `masters` WHERE $attribute LIKE '%$q%' ORDER BY $attribute $type");
$memberships = $connection->query("SELECT * FROM `memberships` WHERE $attribute LIKE '%$q%' ORDER BY $attribute $type");
$banks = $connection->query("SELECT * FROM `banks` WHERE $attribute LIKE '%$q%' ORDER BY $attribute $type");
$users = $connection->query($users_query);
$posts = $connection->query("SELECT * FROM `posts` WHERE $attribute LIKE '%$q%' ORDER BY $attribute $type");
$comments = $connection->query("SELECT * FROM `comments` WHERE $attribute LIKE '%$q%' ORDER BY $attribute $type");

$styles_counter = mysqli_num_rows($styles_count);
$masters_counter = mysqli_num_rows($masters_count);
$memberships_counter = mysqli_num_rows($memberships_count);
$banks_counter = mysqli_num_rows($banks_count);
$users_counter = mysqli_num_rows($users_count);
$posts_counter = mysqli_num_rows($posts_count);
$comments_counter = mysqli_num_rows($comments_count);
?>

<!DOCTYPE html>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Beyond the reality</title>
	<meta name="description" content="Dance studio << Beyond the Reality >>">
	<meta name="author" content="Fadeyeva Alina & Ayan Baitasov">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#212121"/>
    <meta name="msapplication-navbutton-color" content="#212121"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121"/>

	<!-- Web Fonts 
	================================================== -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet"/>	
	
	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="<?php echo base_url();?>/resources/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>/resources/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>/resources/css/mind-icons-line.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>/resources/css/funky-style.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>/resources/css/owl.carousel.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>/resources/css/owl.transitions.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>/resources/css/colors/color-green.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>/resources/css/simplegrid.css" >

	<style>
		#admin {
			width: 850px;
			/*border: 1px solid #000;*/
			margin-top: 13%;
		}

		#admin table {
			width: 800px;
		}

		#admin table td,
		#admin table th {
			padding: 10px;
		}

		#admin table tr { transition: .25s; }

		#admin table tr:hover {
			/*background: #cfcfd1;*/
			background: #aaa;
			color: #fff;
			transition: .25s;
		}

		#admin table td button {
			padding: 5px;
		}

		.btn { color: #fff; }

		/* The Modal (background) */
		.modal {
		    display: none; /* Hidden by default */
		    position: fixed; /* Stay in place */
		    z-index: 1; /* Sit on top */
		    left: 0;
		    top: 0;
		    width: 100%; /* Full width */
		    height: 100%; /* Full height */
		    overflow: auto; /* Enable scroll if needed */
		    background-color: rgb(0,0,0); /* Fallback color */
		    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		}

		/* Modal Content/Box */
		.modal-content {
		    background-color: #fefefe;
		    margin: 15% auto; /* 15% from the top and centered */
		    padding: 20px;
		    border: 1px solid #888;
		    width: 60%; /* Could be more or less, depending on screen size */
		    color: #000;
		}

		/* The Close Button */
		.close {
		    color: #aaa;
		    float: right;
		    font-size: 28px;
		    font-weight: bold;
		}

		.close:hover,
		.close:focus {
		    color: black;
		    text-decoration: none;
		    cursor: pointer;
		}
	</style>
			
	<!-- Favicons
	================================================== -->
	<link rel="icon" type="image/png" href="<?php echo base_url();?>/resources/img/icon.png">
	
</head>
<body class="royal_preloader">	
	
	<div id="royal_preloader"></div>

	
	<!-- Nav and Logo
	================================================== -->
	
	<div id="menu-wrap" class="cbp-af-header white-menu-background-1st-trans menu-fixed-padding menu-shadow">
		<div class="container">
			<div class="row">
				<div class="col-md-12">	
					<nav class="navbar navbar-toggleable-md navbar-light bg-inverse bg-faded">
						<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavMenuMain" aria-controls="navbarNavMenuMain" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<a class="navbar-brand" href="home.html">
							<img src="<?php echo base_url();?>/resources/img/logo.png" alt="" class="">
						</a>
						<div class="collapse navbar-collapse justify-content-end" id="navbarNavMenuMain">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a href="<?php echo base_url();?>index.php" class="nav-link">Home</a>
								</li>
								<?php if(isset($_SESSION['userrole']) && ($_SESSION['userrole'] != 'Moderator')){ ?>
								<li class="nav-item">
									<a href="<?php echo base_url();?>index.php/blog/news" class="nav-link">News</a>
								</li>
								<?php } ?>
								<li class="nav-item">
									<a href="<?php echo base_url();?>index.php/blog/styles" class="nav-link">Styles</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url();?>index.php/blog/masters" class="nav-link">Masters</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url();?>index.php/member/membership" class="nav-link">Membership</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url();?>index.php/blog/schedule" class="nav-link">Schedule</a>
								</li>	
								<li class="nav-item">
										<a href="#admin" class="nav-link">Admin</a>
								</li>
								
								<li class="nav-item">
									<?php if(isset($_SESSION['userid']) && ($_SESSION['userid'] != 0)){ ?>
										<a href="<?php echo base_url();?>index.php/auth/logout" class="nav-link colored-prim">Logout</a>	
									<?php } else { ?>
										<a href="<?php echo base_url();?>index.php/auth/login" class="nav-link colored-prim">Login</a>
									<?php } ?>
								</li>
								<li class="nav-item icons-item-menu modal-search">
									<a class="nav-link" href="#" data-toggle="modal" data-target="#Modal-search"><i class="fa fa-search"></i></a>
								</li>
							</ul>
						</div>
					</nav>		
				</div>
			</div>	
		</div>		
	</div>
	
	
	<!-- Search -->
	<div class="modal fade default search-modal" id="Modal-search" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header justify-content-end">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="hero-center-wrap move-top">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-md-6">
									<input type="search" value="" placeholder="Search" class="form-control" />
									<button class="btn btn-primary btn-icon btn-round" type="submit" value="search">
										<i class="fa fa-search"></i>
									</button>
								</div>
							</div>	
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</div>
	

	<!-- Primary Page Layout ================================================== -->
	
	<div class="container" id="admin">

	<div id="current_tab" style="display: none;">1</div>

	<ul class="nav nav-tabs">
	  <li class="nav-item">
	    <a class="nav-link active" data-toggle="tab" href="#styles" id="home_link">Styles</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" data-toggle="tab" href="#masters" id="masters_link">Masters</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" data-toggle="tab" href="#members" id="members_link">Members</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" data-toggle="tab" href="#banks" id="banks_link">Banks</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" data-toggle="tab" href="#users" id="users_link">Users</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" data-toggle="tab" href="#posts" id="posts_link">Posts</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" data-toggle="tab" href="#comments" id="comment_link">Comments</a>
	  </li>
	</ul>
	<div id="myTabContent" class="tab-content">
		<hr>
	  <div class="tab-pane fade active show" id="styles">
	    <?php 
			echo '<table border="1">';
			echo '<tr>';
			echo '<th>ID</th>';
			echo '<th>Name</th>';
			echo '<th>Description</th>';
			echo '<th>Delete</th>';
			echo '<th>Edit</th>';
			echo '</tr>';

			if($styles_counter == 0) {
				echo '<tr><td>Not found</td><td>Not found</td><td>Not found</td><td>Not found</td><td>Not found</td></tr>';
			}
			while($styles_counter > 0) {
				$style = $styles->fetch_assoc();
				echo '<tr id="tr_'.$style['id'].'">';
				echo '<td>'.$style['id'].'</td>';
				echo '<td class="name" id="name'.$style['id'].'">'.$style['name'].'</td>';
				echo '<td class="description" id="description'.$style['id'].'">'.$style['description'].'</td>';
				echo '<td><button class="btn" data-id="style'.$style['id'].'">Delete</button></td>';
				echo '<td><button type="button" class="btn edit" data-id="style'.$style['id'].'">Edit</button></td>';
				$styles_counter--;
				echo '</tr>';
			}
			echo '</table>';
		?>
		<div class="row">
				<form action="<?php echo base_url();?>index.php/admin/tables" method="get" class="form-control">
					<select name="attribute" class="form-control">
						<option value="name">Name</option>
						<option value="description">Description</option>
					</select>
					<select name="type" class="form-control">
						<option value="ASC">Ascending</option>
						<option value="DESC">Descending</option>
					</select>
					<br><br>
					<button class="btn" type="submit" id="sortBtn" style="width: 100%;">Sort</button>
				</form>
		</div>
	  </div>
	  <div class="tab-pane fade" id="masters">
		
	    <?php 
			echo '<table border="1">';
			echo '<tr>';
			echo '<th>ID</th>';
			echo '<th>Full Name</th>';
			echo '<th>Degree</th>';
			echo '<th>Phone</th>';
			echo '<th>About</th>';
			echo '<th width:10%>Twitter</th>';
			echo '<th>Facebook</th>';
			echo '<th>Delete</th>';
			echo '<th>Edit</th>';
			echo '</tr>';

			while($masters_counter > 0) {
				
				$master = $masters->fetch_assoc();
				echo '<tr id="tr_'.$master['id'].'">';
				echo '<td>'.$master['id'].'</td>';
				echo '<td class = "full_name" id="full_name'.$master['id'].'">'.$master['full_name'].'</td>';
				echo '<td id="degree'.$master['id'].'">'.$master['degree'].'</td>';
				echo '<td id="phone'.$master['id'].'">'.$master['phone'].'</td>';
				echo '<td id="about'.$master['id'].'">'.$master['about'].'</td>';
				echo '<td id="twitter_login'.$master['id'].'">'.$master['twitter_login'].'</td>';
				echo '<td id="facebook_login'.$master['id'].'">'.$master['facebook_login'].'</td>';
				echo '<td><button class="btn" data-id="master'.$master['id'].'">Delete</button></td>';
				echo '<td><button type="button"  class="btn edit" data-id="master'.$master['id'].'">Edit</button></td>';
				$masters_counter--;
				echo '</tr>';
			}
			echo '</table>';
		?>
		<div class="row">
				<form action="<?php echo base_url();?>index.php/admin/tables" method="get" class="form-control">
					<select name="attribute" class="form-control">
						<option value="full_name">Full Name</option>
						<option value="degree">Degree</option>
					</select>
					<select name="type" class="form-control">
						<option value="ASC">Ascending</option>
						<option value="DESC">Descending</option>
					</select>
					<br><br>
					<button class="btn" type="submit" id="sortBtn" style="width: 100%;">Sort</button>
				</form>
		</div>
	  </div>
	  <div class="tab-pane fade" id="members">
		
	    <?php 
			echo '<table border="1">';
			echo '<tr>';
			echo '<th>ID</th>';
			echo '<th>Type</th>';
			echo '<th>Price</th>';
			echo '<th>Delete</th>';
			echo '<th>Edit</th>';
			echo '</tr>';

			while($memberships_counter > 0) {
				$style = $memberships->fetch_assoc();
				echo '<tr id="tr_'.$style['id'].'">';
				echo '<td>'.$style['id'].'</td>';
				echo '<td id="type'.$style['id'].'">'.$style['type'].'</td>';
				echo '<td id="price'.$style['id'].'">'.$style['price'].'</td>';
				echo '<td><button class="btn" data-id="member'.$style['id'].'">Delete</button></td>';
				echo '<td><button type="button" class="btn edit" data-id="member'.$style['id'].'">Edit</button></td>';
				$memberships_counter--;
				echo '</tr>';
			}
			echo '</table>';
		?>
		<div class="row">
				<form action="<?php echo base_url();?>index.php/admin/tables" method="get" class="form-control">
					<select name="attribute" class="form-control">
						<option value="type">Type</option>
						<option value="price">Price</option>
					</select>
					<select name="type" class="form-control">
						<option value="ASC">Ascending</option>
						<option value="DESC">Descending</option>
					</select>
					<br><br>
					<button class="btn" type="submit" id="sortBtn" style="width: 100%;">Sort</button>
				</form>
		</div>
	  </div>
	  <div class="tab-pane fade" id="banks">
		
	    <?php 
			echo '<table border="1">';
			echo '<tr>';
			echo '<th>ID</th>';
			echo '<th>Client ID</th>';
			echo '<th>Name</th>';
			echo '<th>Surname</th>';
			echo '<th>Until Date</th>';
			echo '<th>CVN</th>';
			echo '<th>Delete</th>';
			echo '<th>Edit</th>';
			echo '</tr>';

			while($banks_counter > 0) {
				$style = $banks->fetch_assoc();
				echo '<tr id="tr_'.$style['id'].'">';
				echo '<td>'.$style['id'].'</td>';
				echo '<td id="client_id'.$style['id'].'">'.$style['client_id'].'</td>';
				echo '<td id="nameB'.$style['id'].'">'.$style['name'].'</td>';
				echo '<td id="surname'.$style['id'].'">'.$style['surname'].'</td>';
				echo '<td id="until_date'.$style['id'].'">'.$style['until_date'].'</td>';
				echo '<td id="cvn'.$style['id'].'">'.$style['cvn'].'</td>';
				echo '<td><button class="btn" data-id="bank'.$style['id'].'">Delete</button></td>';
				echo '<td><button type="button" class="btn edit" data-id="bank'.$style['id'].'">Edit</button></td>';
				$banks_counter--;
				echo '</tr>';
			}
			echo '</table>';
		?>
		<div class="row">
				<form action="<?php echo base_url();?>index.php/admin/tables" method="get" class="form-control">
					<select name="attribute" class="form-control">
						<option value="name">Name</option>
						<option value="client_id">Client ID</option>
					</select>
					<select name="type" class="form-control">
						<option value="ASC">Ascending</option>
						<option value="DESC">Descending</option>
					</select>
					<br><br>
					<button class="btn" type="submit" id="sortBtn" style="width: 100%;">Sort</button>
				</form>
		</div>
	  </div>
	  <div class="tab-pane fade" id="users">
	
	    <?php 
			echo '<table border="1">';
			echo '<tr>';
			echo '<th>ID</th>';
			echo '<th>Username</th>';
			echo '<th>Full Name</th>';
			echo '<th>Role</th>';
			echo '<th>Bank</th>';
			echo '<th>Member type</th>';
			echo '<th>Member price</th>';
			echo '<th>Delete</th>';
			echo '<th>Edit</th>';
			echo '</tr>';

			while($users_counter > 0) {
				$style = $users->fetch_assoc();
				echo '<tr id="tr_'.$style['id'].'">';
				echo '<td>'.$style['id'].'</td>';
				echo '<td id="username'.$style['id'].'">'.$style['username'].'</td>';
				echo '<td id="full_name'.$style['id'].'">'.$style['full_name'].'</td>';
				echo '<td id="role'.$style['id'].'">'.$style['role'].'</td>';
				echo '<td>'.$style['bank'].'</td>';
				echo '<td>'.$style['type'].'</td>';
				echo '<td>'.$style['price'].'</td>';
				echo '<td><button class="btn" data-id="user'.$style['id'].'">Delete</button></td>';
				echo '<td><button type="button" class="btn edit" data-id="user'.$style['id'].'">Edit</button></td>';
				$users_counter--;
				echo '</tr>';
			}
			echo '</table>';
		?>
		<div class="row">
				<form action="<?php echo base_url();?>index.php/admin/tables" method="get" class="form-control">
					<select name="attribute" class="form-control">
						<option value="full_name">Full Name</option>
						<option value="username">Username</option>
					</select>
					<select name="type" class="form-control">
						<option value="ASC">Ascending</option>
						<option value="DESC">Descending</option>
					</select>
					<br><br>
					<button class="btn" type="submit" id="sortBtn" style="width: 100%;">Sort</button>
				</form>
		</div>
	  </div>
	  <div class="tab-pane fade" id="posts">
		
	    <?php 
			echo '<table border="1">';
			echo '<tr>';
			echo '<th>ID</th>';
			echo '<th>Date</th>';
			echo '<th>Title</th>';
			echo '<th>Image</th>';
			echo '<th>Context</th>';
			echo '<th>User</th>';
			echo '<th>Delete</th>';
			echo '<th>Edit</th>';
			echo '</tr>';

			while($posts_counter > 0) {
				$style = $posts->fetch_assoc();
				echo '<tr id="tr_'.$style['id'].'">';
				echo '<td>'.$style['id'].'</td>';
				echo '<td id="date'.$style['id'].'">'.$style['date'].'</td>';
				echo '<td id="title'.$style['id'].'">'.$style['title'].'</td>';
				echo '<td>'.$style['image'].'</td>';
				echo '<td id="context'.$style['id'].'">'.$style['context'].'</td>';
				echo '<td>'.$style['user'].'</td>';
				echo '<td><button class="btn" data-id="post'.$style['id'].'">Delete</button></td>';
				echo '<td><button type="button" class="btn edit" data-id="post'.$style['id'].'">Edit</button></td>';
				$posts_counter--;
				echo '</tr>';
			}
			echo '</table>';
		?>
		<div class="row">
				<form action="<?php echo base_url();?>index.php/admin/tables" method="get" class="form-control">
					<select name="attribute" class="form-control">
						<option value="title">Title</option>
						<option value="date">Date</option>
					</select>
					<select name="type" class="form-control">
						<option value="ASC">Ascending</option>
						<option value="DESC">Descending</option>
					</select>
					<br><br>
					<button class="btn" type="submit" id="sortBtn" style="width: 100%;">Sort</button>
				</form>
		</div>
	  </div>
	  <div class="tab-pane fade" id="comments">
		
	    <?php 
			echo '<table border="1">';
			echo '<tr>';
			echo '<th>ID</th>';
			echo '<th>Date</th>';
			echo '<th>Context</th>';
			echo '<th>User</th>';
			echo '<th>Post</th>';
			echo '<th>Delete</th>';
			echo '<th>Edit</th>';
			echo '</tr>';

			while($comments_counter > 0) {
				$style = $comments->fetch_assoc();
				echo '<tr id="tr_'.$style['id'].'">';
				echo '<td>'.$style['id'].'</td>';
				echo '<td id="date'.$style['id'].'">'.$style['date'].'</td>';
				echo '<td id="context'.$style['id'].'">'.$style['context'].'</td>';
				echo '<td>'.$style['user'].'</td>';
				echo '<td>'.$style['post'].'</td>';
				echo '<td><button class="btn" data-id="comment'.$style['id'].'">Delete</button></td>';
				echo '<td><button type="button" class="btn edit" data-id="comment'.$style['id'].'">Edit</button></td>';
				$comments_counter--;
				echo '</tr>';
			}
			echo '</table>';
		?>
		<div class="row">
				<form action="<?php echo base_url();?>index.php/admin/tables" method="get" class="form-control">
					<select name="attribute" class="form-control">
						<option value="date">Date</option>
						<option value="context">Context</option>
					</select>
					<select name="type" class="form-control">
						<option value="ASC">Ascending</option>
						<option value="DESC">Descending</option>
					</select>
					<br><br>
					<button class="btn" type="submit" id="sortBtn" style="width: 100%;">Sort</button>
				</form>
		</div>
	  </div>
	  <br>
	  <center>
	  	<div id="editModal" class="modal">
			  <!-- Modal content -->
			  <div class="modal-content" id="modal-content">
			    <!-- <span class="close">&times;</span> -->
			    <h2>Edit Style</h2>
			    <form action="<?php echo base_url();?>index.php/admin/editstyle" method="post">	
			    		<input type="hidden" name="id" id="editStyleId">
						<input type="text" class="form-control" name="name" placeholder="Name..." style="color: #000;" id="editName"><br>
						<input type="text" class="form-control" name="description" placeholder="Description..." style="color: #000;" id="editDescription"><br>
			    	<button class="btn btn-primary" type="submit">Edit</button>
			    </form>
			  </div>
		</div>
	  </center>
	  <center>
	  	<div id="editModalMaster" class="modal">
			  <!-- Modal content -->
			  <div class="modal-content" id="modal-content">
			    <!-- <span class="close">&times;</span> -->
			    <h2>Edit Master</h2>
			    <form action="<?php echo base_url();?>index.php/admin/editmaster" method="post">	
			    		<input type="hidden" name="id" id="editMasterId">
						<input type="text" class="form-control" name="full_name" placeholder="Full Name..." style="color: #000;" id="editFullName"><br>
						<input type="text" class="form-control" name="degree" placeholder="Degree..." style="color: #000;" id="editDegree"><br>
						<input type="text" class="form-control" name="phone" placeholder="Phone..." style="color: #000;" id="editPhone"><br>
						<input type="text" class="form-control" name="about" placeholder="About..." style="color: #000;" id="editAbout"><br>
						<input type="text" class="form-control" name="twitter_login" placeholder="Twitter..." style="color: #000;" id="editTwitter"><br>
						<input type="text" class="form-control" name="facebook_login" placeholder="Facebook..." style="color: #000;" id="editFacebook"><br>
			    	<button class="btn btn-primary" type="submit">Edit</button>
			    </form>
			  </div>
		</div>
	  </center>
	  	  <center>
	  	<div id="editModalMember" class="modal">
			  <!-- Modal content -->
			  <div class="modal-content" id="modal-content">
			    <!-- <span class="close">&times;</span> -->
			    <h2>Edit Memberships</h2>
			    <form action="<?php echo base_url();?>index.php/admin/editmember" method="post">	
			    		<input type="hidden" name="id" id="editMemberId">
						<input type="text" class="form-control" name="type" placeholder="Type..." style="color: #000;" id="editType"><br>
						<input type="text" class="form-control" name="price" placeholder="Price..." style="color: #000;" id="editPrice"><br>
				  	<button class="btn btn-primary" type="submit">Edit</button>
			    </form>
			  </div>
		</div>
	  </center>
	  	  <center>
	  	<div id="editModalBanks" class="modal">
			  <!-- Modal content -->
			  <div class="modal-content" id="modal-content">
			    <!-- <span class="close">&times;</span> -->
			    <h2>Edit Bank Accounts</h2>
			    <form action="<?php echo base_url();?>index.php/admin/editbank" method="post">	
			    		<input type="hidden" name="id" id="editBankId">
						<input type="text" class="form-control" name="client_id" placeholder="Client ID..." style="color: #000;" id="editClientId"><br>
						<input type="text" class="form-control" placeholder="Name..." style="color: #000;" id="editBankName"><br>
						<input type="text" class="form-control" name="surname" placeholder="Surname..." style="color: #000;" id="editSurName"><br>
						<input type="text" class="form-control" name="until_date" placeholder="Until date..." style="color: #000;" id="editUntilDate"><br>
						<input type="text" class="form-control" name="cvn" placeholder="CVN..." style="color: #000;" id="editCvn"><br>
				  	<button class="btn btn-primary" type="submit">Edit</button>
			    </form>
			  </div>
		</div>
	  </center>
	  	  <center>
	  	<div id="editModalUser" class="modal">
			  <!-- Modal content -->
			  <div class="modal-content" id="modal-content">
			    <!-- <span class="close">&times;</span> -->
			    <h2>Edit User</h2>
			    <form action="<?php echo base_url();?>index.php/admin/edituser" method="post">	
			    		<input type="hidden" name="id" id="editUserId">
						<input type="text" class="form-control" name="username" placeholder="Username..." style="color: #000;" id="editUserName"><br>
						<input type="text" class="form-control" name="full_name" placeholder="Full Name..." style="color: #000;" id="editUFullName"><br>
						<input type="text" class="form-control" name="role" placeholder="Role..." style="color: #000;" id="editRole"><br>			    
				<button class="btn btn-primary" type="submit">Edit</button>
			    </form>
			  </div>
		</div>
	  </center>
	  	  <center>
	  	<div id="editModalPosts" class="modal">
			  <!-- Modal content -->	
			  <div class="modal-content" id="modal-content">
			    <!-- <span class="close">&times;</span> -->
			    <h2>Edit Posts</h2>
			    <form action="<?php echo base_url();?>index.php/admin/editpost" method="post">	
			    		<input type="text" name="id" id="editPostId">
						<input type="text" class="form-control" name="date" placeholder="Date..." style="color: #000;" id="editDate"><br>
						<input type="text" class="form-control" name="title" placeholder="Title..." style="color: #000;" id="editTitle"><br>
						<input type="text" class="form-control" name="context" placeholder="Context..." style="color: #000;" id="editContext"><br>
			    	<button class="btn btn-primary" type="submit">Edit</button>
			    </form>
			  </div>
		</div>
	  </center>
	  	  	  <center>
	  	<div id="editModalComments" class="modal">
			  <!-- Modal content -->
			  <div class="modal-content" id="modal-content">
			    <!-- <span class="close">&times;</span> -->
			    <h2>Edit Comments</h2>
			    <form action="<?php echo base_url();?>index.php/admin/editcomment" method="post">	
			    		<input type="hidden" name="id" id="editCommentId">
						<input type="text" class="form-control" name="date" placeholder="Date..." style="color: #000;" id="editCDate"><br>
						<input type="text" class="form-control" name="context" placeholder="Context..." style="color: #000;" id="editCContext"><br>
			    	<button class="btn btn-primary" type="submit">Edit</button>
			    </form>
			  </div>
		</div>
	  </center>
	  <center>
			<button class="btn" id="add">Add</button>
			<!-- The Modal -->
			<div id="myModal" class="modal">
			  <!-- Modal content -->
			  <div class="modal-content" id="modal-content">
			    <!-- <span class="close">&times;</span> -->
			    <h2>New Style</h2>
			    <form action="<?php echo base_url();?>index.php/admin/add" method="post">
						<input type="text" class="form-control" name="name" placeholder="Name..." style="color: #000;"><br>
						<input type="text" class="form-control" name="description" placeholder="Description..." style="color: #000;"><br>
			    	<button class="btn btn-primary" type="submit">Create</button>
			    </form>
			  </div>
			</div>
			<hr>
			<!-- <button class="btn" id="sort">Sort</button> -->
			
		</center>
	</div>
		
		<!-- Separator Line
		================================================== -->
		
		<div class="section padding-top-bottom-1 background-white">
			<div class="container">	
				<div class="row">
					<div class="col-md-12">	
						<div class="separator-wrap">	
							<span class="separator"><span class="separator-line dashed"></span></span>
						</div>
					</div>
				</div>
			</div>		
		</div>
		
	</div>
	<!-- Footer Short Light Block
	================================================== -->
	
	<div class="section background-white over-hide footer-1">	
		<div class="container scd-foot pt-5 pb-5">
			<div class="row justify-content-center pt-5 pb-5">
				<div class="col-md-12 text-center pb-0">
					<ul class="list-style display-inline-b mb-0 pb-2">
						<li><a href="<?php echo base_url(); ?>index.php/blog/faq">FAQ</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/blog/contacts">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-12 text-center">
					<ul class="footer-social on-center">
						<li class="twitter">
							<a href="#">Tw</a>
						</li>
						<li class="facebook">
							<a href="#">Fb</a>
						</li>
						<li class="google">
							<a href="#">G+</a>
						</li>
						<li class="vimeo">
							<a href="#">Vm</a>
						</li>
					</ul>
				</div>
			</div>
		</div>	
		<div class="container scd-foot background-grey pt-4 pb-4">
			<div class="row">
				<div class="col-md-12 text-center">
					<p class="mb-0">© 2018 Beyond the reality. With big <i class="fa fa-heart"></i> to our clients!</p>
				</div>
			</div>	
		</div>
	</div>
	

	<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div>
	<script language="javascript">
		function init()
		{
		  <?php
		  if(isset($alert_msg)){
			echo "alert('".$alert_msg."');";
		  }
		?>
		}
	</script>
	<!-- JAVASCRIPT
    ================================================== -->
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/royal_preloader.min.js"></script> 
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/tether.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/plugins.js"></script> 
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/custom/custom-op-design-studio.js"></script>  
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/script.js"></script>
	
<!-- End Document
================================================== -->

</body>
</html>