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
									<a href="#schedule" class="nav-link">Schedule</a>
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
	
<div class="section" id="masters">	
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





	<!-- Hero Slider Block
	================================================== -->
	
	<div class="section big-height over-hide">
		<div class="parallax" style="background-image: url('<?php echo base_url();?>/resources/img/schedule.jpg')"></div>
		<div class="grey-fade-over"></div>
		<div class="hero-center-wrap z-bigger">
			<div class="container hero-text-studio text-center parallax-top">
				<div class="row justify-content-center">
					<div class="col-md-8">	
						<h2 class="pb-3 color-white">we build<br>great dancers</h2>
						
					</div>
				</div>	
			</div>
		</div>	
	</div>

	<!-- Portfolio Block
	================================================== -->
	
		<div class="container">	
			<div class="row">
				
				<div style="margin-top:10%; margin-left:8%;">	
					<img  src="<?php echo base_url();?>/resources/img/schedule_table.png" alt="" width = 100%/>	
					<div class="portfolio-mask-1"></div>
					<div class="portfolio-mask-border rounded"></div>
					
				</div>	
			</div>
		</div>		
	