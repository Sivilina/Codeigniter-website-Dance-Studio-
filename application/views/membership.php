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
									<a href="#membership" class="nav-link">Membership</a>
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
<div class="section" id="membership">
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

	<!-- Hero Block
	================================================== -->
	
	<div class="section padding-top-1st padding-bottom-1st over-hide">
		<div class="parallax" style="background-image: url('<?php echo base_url();?>/resources/img/membership_wallpaper.jpg')"></div>
		<div class="light-fade-over" style="opacity: 0.3"></div>
		<div class="container z-bigger">
			<div class="row justify-content-center">
				<div class="col-md-7 parallax-fade-top">	
					<div class="main-title text-center mb-0">
						<h2>HOW MUCH DOES IT COST?</h2>
					<div class="main-subtitle-bottom mt-4">pricing</div>
					</div>	
				</div>
				<div class="clear"></div>
			</div>		
		</div>
	</div>

	<!-- Portfolio Block
	================================================== -->
    <br><br>
    <div class="section padding-bottom over-hide">	
		<div class="container">
			<div class="row">
		<div class="col-md-4">
					<div class="pricing background-grey">
						<h3>Starter</h3>
						<div class="pricing-sub mb-4">billed annually or $25 month-to-month</div>
						<div class="pricing-price mt-3"><sup>$</sup>25</div>
						<div class="pricing-per mt-2">per month</div>
						<div class="pricing-line mt-4"></div>		
						<ul class="list-style mt-4">
							<li><i class="fa fa-check"></i>Up to 7 hours</li>
							<li><i class="fa fa-check"></i>Starter dance pack</li>
							<li><i class="fa fa-check"></i>Coach included</li>
							<li><i class="fa fa-times grey"></i>Classic</li>
							<li><i class="fa fa-times grey"></i>Hip-hop</li>
							<li><i class="fa fa-times grey"></i>Street dance</li>
						</ul>
						<button  onclick="location.href='<?php echo base_url(); ?>index.php/member/buy/1'" class="btn btn-primary mt-4" type="button">Order Now</button>	
					</div>
				</div>	
				<div class="col-md-4 mt-4 mt-md-0">
					<div class="pricing background-grey">
						<div class="ribbon"><i class="funky-ui-icon icon-Ribbon-2"></i></div>
						<h3>Personal</h3>
						<div class="pricing-sub mb-4">billed annually or $35 month-to-month</div>
						<div class="pricing-price mt-3"><sup>$</sup>35</div>
						<div class="pricing-per mt-2">per month</div>
						<div class="pricing-line mt-4"></div>		
						<ul class="list-style mt-4">
							<li><i class="fa fa-check"></i>Up to 20 hours</li>
							<li><i class="fa fa-check"></i>Exclusive dance</li>
							<li><i class="fa fa-check"></i>Up to 5 coaches included</li>
							<li><i class="fa fa-check"></i>All dance styles</li>
							<li><i class="fa fa-check"></i>Free sports water</li>
							<li><i class="fa fa-times grey"></i>5 extra hours for family member</li>
						</ul>
						<button  onclick="location.href='<?php echo base_url(); ?>index.php/member/buy/2'" class="btn btn-primary mt-4" type="button">Order Now</button>	
					</div>
				</div>	
				<div class="col-md-4 mt-4 mt-md-0">
					<div class="pricing background-grey">
						<h3>Ultimate</h3>
						<div class="pricing-sub mb-4">billed annually or $40 month-to-month</div>
						<div class="pricing-price mt-3"><sup>$</sup>40</div>
						<div class="pricing-per mt-2">per month</div>
						<div class="pricing-line mt-4"></div>		
						<ul class="list-style mt-4">
							<li><i class="fa fa-check"></i>Unlimited hours</li>
							<li><i class="fa fa-check"></i>Additional online classes</li>
							<li><i class="fa fa-check"></i>All coaches to use</li>
							<li><i class="fa fa-check"></i>All dance styles</li>
							<li><i class="fa fa-check"></i>20 hours for family members</li>
							<li><i class="fa fa-check"></i>Private Events</li>
						</ul>
						<button  onclick="location.href='<?php echo base_url(); ?>index.php/member/buy/3'"" class="btn btn-primary mt-4" type="button">Order Now</button>	
					</div>
				</div>
            </div>
        </div>
    </div>


	<!-- Call To Action Block
	================================================== -->
	
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

