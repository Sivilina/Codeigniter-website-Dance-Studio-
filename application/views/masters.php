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
									<a href="#masters" class="nav-link">Masters</a>
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
<div class="section" id="masters">

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
									<?php echo form_close(); ?>
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

	<!-- Hero Block
	================================================== -->
	
	<div class="section padding-top-1st padding-bottom-1st over-hide">
		<div class="parallax" style="background-image: url('<?php echo base_url();?>/resources/img/about_team.jpg')"></div>
		<div class="grey-fade-over"></div>
		<div class="container z-bigger">
			<div class="row">
				<div class="col-md-7 parallax-fade-top">	
					<div class="main-title on-dark text-right mb-2">
						<h2>Our masters</h2>
						<div class="main-subtitle-bottom mt-4">“Dance is the hidden language of the soul” <br>― Martha Graham</div>	
					</div>	
				</div>
				<div class="clear"></div>
			</div>		
		</div>	
	</div>


	<!-- Team Block
	================================================== -->
	
	<div class="section padding-top-bottom background-grey">
		<div class="container">	
			<div class="row">	
				<?php 
				foreach($masters as $row){
				?>
				<div class="col-lg-4">											 
					<div class="team-box-1 all-padding background-white drop-shadow text-center image-over-box mt-5"> 
						<img src="<?php echo base_url();?>/resources/img/masters<?php echo $row['id'];?>.jpg" alt="" class="img-raised" />
						<h6 class="mb-1">
						<?php echo $row['full_name']; ?>
						</h6>	
						<?php if ($row['id'] == 1) { ?>
						<p class="mb-4">lady dance & just funk</p>
						<?php } else if ($row['id'] == 2)  {?>
						<p class="mb-4">hip-hop</p>
						<?php } else if ($row['id'] == 3) { ?>
						<p class="mb-4">cheer & strip plastic</p>
						<?php } else if ($row['id'] == 5) { ?>
						<p class="mb-4">contemporary & just funk</p>
						<?php }echo $row['about']."<br>Degree of dance: ".$row['degree']."<br>Phone: ".$row['phone']; ?>
						
						<ul class="team-social mt-4">
							<?php if ($row['twitter_login'] != '') { ?>
							<li class="twitter">
								<?php echo "<a href=\"".$row['twitter_login']."\" target=\"_blank\">Tw</a>";?>
							</li>
							<?php } ?>
							<?php if ($row['facebook_login'] != '') { ?>
							<li class="facebook">
								<?php echo "<a href=\"".$row['facebook_login']."\" target=\"_blank\">Fb</a>";?>
							</li>
							<?php } ?>
							<?php if ($row['youtube_login'] != '') { ?>
							<li class="google">
								<?php echo "<a href=\"".$row['youtube_login']."\" target=\"_blank\">Yb</a>";?>
							</li>
							<?php } ?>
							<?php if ($row['instagram_login'] != '') { ?>
							<li class="vimeo">
								<?php echo "<a href=\"".$row['instagram_login']."\" target=\"_blank\">Im</a>";?>
							</li>
							<?php } ?>
						</ul>	
					</div>	
				</div>	
				<?php } ?>
				
			</div>
		</div>		
	</div>
