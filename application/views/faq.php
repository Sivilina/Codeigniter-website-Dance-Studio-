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

	<!-- Primary Page Layout ================================================== -->
	
	<div class="section" style="padding-top:8%!important;">	
		<div class="section padding-top-bottom background-white">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-7 text-center" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
						<h4 class="mb-5">FAQ<br>Ask your first question!</h4>
						<div class="subscribe-box-1">
							<input type="text" value="" placeholder="your question" class="form-control" />
							<button class="btn btn-primary btn-long subscribe-1" type="submit" value="" id="faqButton">
								ask
							</button>
							<p class="mt-1"><small>* we will answer as soon as possible!</small></p>
						</div>	
					</div>
				</div>	
			</div>		
		</div>
	</div>
	
	<div class="section" style="padding-top:8%!important;">	
		<div class="section padding-top-bottom background-white">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-7 text-center" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
						<h4 class="mb-5"> How to get access to the videos? </h4>
						<p> 
					<br>	1. Login to the website by button "login" in the right upper conner
					<br><tr>		if you are new user, please sign up to the website by clicking button "Login", then "create account"
					<br>	2. Go to the page "Membership"
					<br>	3. Choose type of the account you want to buy. Notice that the membership is given only for 1 month. Click "Order now".
					<br>	4. Choose your bank account or create new one.
					<br>	5. Click "Pay with this card"
					<br>	6. View videos according to your ordered type of access.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<script>
		$("#faqButton").click(function() {
			alert( "We'll answer you soon! Monitor the page. For fast communication with us you can write us in direct to our instagram (find it in \"contacts\")" );
		});
	</script>