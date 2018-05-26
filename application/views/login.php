<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
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
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

			
	<!-- Favicons
	================================================== -->
	<link rel="icon" type="image/png" href="<?php echo base_url();?>/resources/img/icon.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
	
</head>
<body class="royal_preloader" onload="init();">
	
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
						<a class="navbar-brand" href="index.html">
							<img src="<?php echo base_url();?>/resources/img/logo.png" alt="" class="">
						</a>
						<div class="collapse navbar-collapse justify-content-end" id="navbarNavMenuMain">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a href="<?php echo base_url();?>index.php" class="nav-link">Home</a>
								</li>
								<?php if((isset($_SESSION['userrole']) && ($_SESSION['userrole'] != 'Moderator')) || !(isset($_SESSION['userrole']))){ ?>
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
									<?php if(isset($_SESSION['userrole']) && ($_SESSION['userrole'] == 'Moderator')){ ?>
										<a href="<?php echo base_url();?>index.php/blog/news_moderator" class="nav-link">Moderate Page</a>
									<?php } else if (isset($_SESSION['userrole']) && ($_SESSION['userrole'] == 'Admin')){ ?>
										<a href="<?php echo base_url();?>index.php/admin/admin_tables" class="nav-link">Admin Page</a>
									<?php } else {?>
										<a href="<?php echo base_url();?>index.php/blog/contacts" class="nav-link">Contacts</a>
									<?php } ?>
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
									<?php echo form_open(base_url().'index.php/blog/search'); ?>
									<input type="search" name="key" value="" placeholder="Search" class="form-control" />
									<button class="btn btn-primary btn-icon btn-round" type="submit" value="search">
										<i class="fa fa-search"></i>
									</button>
									<?php echo form_close(); ?><button class="btn btn-primary btn-icon btn-round" type="submit" value="search">
								</div>
							</div>	
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</div>





	

	<!-- Primary Page Layout
	================================================== -->
	
	<div class="section full-height over-hide">
		<div class="parallax" style="background-image: url('<?php echo base_url();?>/resources/img/login.jpg')"></div>
		<div class="grey-fade-over"></div>
		<div class="hero-center-wrap z-bigger">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-4 text-center parallax-fade-top">	
						<div class="main-title on-dark text-center mb-0">
							<h4>Login to continue</h4>
							<div class="main-subtitle-bottom smaller mt-4">Welcome back!</div>	
						</div>	
						<?php echo form_open(base_url().'index.php/auth/login');?>   
						<div class="subscribe-box-1 dark for-hero mt-5">
							<input type="text" placeholder="Username" name = "username" class="form-control" />
						</div>	
						<div class="subscribe-box-1 dark for-hero mt-3">
							<input type="password" placeholder="Password" name = "password" class="form-control" />
						</div>		
						<div class="clear"></div>
						<input type="submit" value = "submit" class="btn btn-primary btn-simple btn-round btn-long mt-4 mb-3" >
						<?php echo form_close(); ?>   
						<div class="clear"></div>
						<p class="color-white p-0 m-0 list-inline-item"><small>Don't have an account yet?</small></p> <a href="<?php echo base_url();?>index.php/auth/register" class="btn-link btn-primary list-inline-item p-0 m-0 ml-1"><small>create account</small></a>
						<div class="clear"></div>
						<p class="color-white p-0 m-0 list-inline-item"><small>Forgot your username or password?</small></p> <a href="recover-account.html" class="btn-link btn-primary list-inline-item p-0 m-0 ml-1"><small>recover account</small></a>
						 
					</div>
				</div>		
			</div>	
		</div>	
	<!-- Footer Short Light Block
	================================================== -->
	
	
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
	
	<!-- JAVASCRIPT
    ================================================== -->
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
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/royal_preloader.min.js"></script> 
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/tether.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/plugins.js"></script> 
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/custom/custom-op-design-studio.js"></script>  
	
<!-- End Document
================================================== -->

</body>
</html>