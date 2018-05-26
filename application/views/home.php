						<div class="collapse navbar-collapse justify-content-end" id="navbarNavMenuMain">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a href="#home" class="nav-link">Home</a>
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
	
	<div class="section" id="home">

		<!-- Hero Slider Block
		================================================== -->
		
		<div class="section full-height-2">
				
			<div class="customNavigation">
				<a class="prev-hero-1"></a>
				<a class="next-hero-1"></a>
			</div>
								
			<div id="owl-hero-1" class="owl-carousel owl-theme">
									 
				<div class="item background-image-cover full-height-2" style="background-image:url('<?php echo base_url();?>/resources/img/home_background.png')">	
					<div class="light-fade-over-2"></div>
					<div class="hero-center-wrap move-top-2 z-bigger">
						<div class="container hero-text-studio text-center parallax-fade-top">
							<div class="row justify-content-end">
								<div class="col-md-4">	
									<h2 class="pb-1"><br>we open the door<br>to the new life</h2>
								</div>
							</div>
						</div>
					</div>		
				</div>
									
				<div class="item background-image-cover full-height-2" style="background-image:url('<?php echo base_url();?>/resources/img/home_background2.jpg')">	
					<div class="light-fade-over-2"></div>
					<div class="hero-center-wrap move-top-2 z-bigger">
						<div class="container hero-text-studio text-center parallax-fade-top">
							<div class="row justify-content-end">
								<div class="col-md-4">	
									<h2 class="pb-3">teach<br>the impossible</h2>
								</div>
							</div>	
						</div>
					</div>			
				</div>
									
				<div class="item background-image-cover full-height-2" style="background-image:url('<?php echo base_url();?>/resources/img/home_background3.jpg')"> 
					<div class="light-fade-over-2"></div>	
					<div class="hero-center-wrap move-top-2 z-bigger">
						<div class="container hero-text-studio text-center parallax-fade-top">
							<div class="row justify-content-center">
								<div class="col-md-8">	
									<h2 class="pb-3">help to feel<br>your bodies</h2>
								</div>
							</div>	
						</div>
					</div>				
				</div>
				<div class="item background-image-cover full-height-2" style="background-image:url('<?php echo base_url();?>/resources/img/home_background4.jpg')"> 
					<div class="light-fade-over-2"></div>	
					<div class="hero-center-wrap move-top-2 z-bigger">
						<div class="container hero-text-studio text-center parallax-fade-top">
							<div class="row justify-content-center">
								<div class="col-md-8">	
									<h2 class="pb-2">can make you to<br>become professionals</h2>
									
								</div>
							</div>	
						</div>
					</div>				
				</div>
							 
			</div>
			
		</div>
		
	
	
	
		<!-- Quote Block
		================================================== 
		
		<div class="section background-white z-bigger-2">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 transform-y-120 transform-on-mob">	
						<div class="quote-box-1 dark background-dark padding-quote-box rounded-quote text-center drop-shadow">
							<i class="funky-ui-icon icon-Speach-Bubble12"></i>
							<h5 class="mt-4 mb-5">"Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people."</h5>
							<h4>Thomas J. Watson</h4>
							<p class="mt-2">some magazine</p>
						</div>
					</div>
				</div>	
			</div>		
		</div>

		<!-- Services Block 
		================================================== -->
		<br>
		<div class="section padding-bottom background-white">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8">	
						<div class="main-title text-center">
							<div class="main-subtitle-top mb-4">Dance studio</div>
							<h3>Beyond the reality</h3>
							<div class="main-subtitle-bottom mt-3">No one will dare to doubt that you dance better than anyone else!</div>	
						</div>
					</div>
					<br>
					<div class="col-md-12">	
						<div class="separator-wrap">	
							<span class="separator"><span class="separator-line"></span></span>
						</div>
					</div>
					<br><br>
					<div class="col-md-6 mb-3">
						<div class="counter-wrap">
							<p><span class="counter-numb">678</span></p>
							<h6>students</h6>
						</div>				
					</div>
					<div class="col-md-6 mb-3 mt-4 mt-md-0">
						<div class="counter-wrap">
							<p><span class="counter-numb">250</span></p>
							<h6>ready dances</h6>
						</div>				
					</div>
					<div class="col-md-3 mb-4 mt-4 mt-md-0">
						<div class="counter-wrap">
							<p><span class="counter-numb med">400</span></p>
							<h6>stage performances</h6>
						</div>				
					</div>
					<div class="col-md-3 mb-4 mt-4 mt-md-0">
						<div class="counter-wrap">
							<p><span class="counter-numb med">121</span></p>
							<h6>awards</h6>
						</div>				
					</div>
					<div class="col-md-3 mb-4 mt-4 mt-md-0">
						<div class="counter-wrap">
							<p><span class="counter-numb med">30</span></p>
							<h6>masters</h6>
						</div>				
					</div>
					<div class="col-md-3 mb-4 mt-4 mt-md-0">
						<div class="counter-wrap">
							<p><span class="counter-numb med">15</span></p>
							<h6>styles</h6>
						</div>				
					</div>
					<br>
					<div class="col-md-12">	
						<div class="separator-wrap">	
							<span class="separator"><span class="separator-line"></span></span>
						</div>
					</div>
					<br><br>
					<div class="clear"></div>	
					<div class="col-md-4" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">	
						<div class="services-box-3">						
							<h5 class="mt-3"><i style="font-size:24px" class="fa">&#xf21e;</i>Keep healty</h5>	
							<p class="mt-3 mb-4">Dance is an enjoyable health promoting physical activity which many people worldwide incorporate into their lifestyles today. This physical activity appeals to some who may not be active and therefore may be another alternative of exercise.usiness but above all... good design must primarily serve people.</p>
							</div>
					</div>
					<div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">	
						<div class="services-box-3">						
							<h5 class="mt-3"><i class="material-icons">&#xe84e;</i>Make an ideal body</h5>	
							<p class="mt-3 mb-4">Dance is an enjoyable health promoting physical activity which many people worldwide incorporate into their lifestyles today. This physical activity appeals to some who may not be active and therefore may be another alternative of exercise.usiness but above all... good design must primarily serve people.</p>
						</div>
					</div>
					<div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">	
						<div class="services-box-3">							
							<h5 class="mt-3"><i style="font-size:24px" class="fa">&#xf228;</i>Stay closer with partner</h5>	
							<p class="mt-3 mb-4">Dance is an enjoyable health promoting physical activity which many people worldwide incorporate into their lifestyles today. This physical activity appeals to some who may not be active and therefore may be another alternative of exercise.usiness but above all... good design must primarily serve people.</p>
						</div>
					</div>
					<div class="col-md-4 mt-4" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">	
						<div class="services-box-3">						
							<h5 class="mt-3"><i class="material-icons">&#xe815;</i>Take positive charge</h5>	
							<p class="mt-3 mb-4">Dance is an enjoyable health promoting physical activity which many people worldwide incorporate into their lifestyles today. This physical activity appeals to some who may not be active and therefore may be another alternative of exercise.usiness but above all... good design must primarily serve people.</p>
						</div>
					</div>
					<div class="col-md-4 mt-4" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">	
						<div class="services-box-3">						
							<h5 class="mt-3"><i class="material-icons">&#xe3b0;</i>Make awesome videos</h5>	
							<p class="mt-3 mb-4">Dance is an enjoyable health promoting physical activity which many people worldwide incorporate into their lifestyles today. This physical activity appeals to some who may not be active and therefore may be another alternative of exercise.usiness but above all... good design must primarily serve people.</p>
						</div>
					</div>
					<div class="col-md-4 mt-4" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">	
						<div class="services-box-3">							
							<h5 class="mt-3"><i style="font-size:24px" class="fa">&#xf004;</i>Love new life</h5>	
							<p class="mt-3 mb-4">Dance is an enjoyable health promoting physical activity which many people worldwide incorporate into their lifestyles today. This physical activity appeals to some who may not be active and therefore may be another alternative of exercise.usiness but above all... good design must primarily serve people.</p>
							</div>
					</div>
				</div>	
			</div>		
		</div>

		<!-- Parallax Block
		==================================================
		
		<div class="section padding-top-bottom">
			<div class="parallax" style="background-image: url('img/parallax-3.jpg')"></div>
			<div class="grey-fade-over"></div>
			<div class="container z-bigger">
				<div class="row">
					<div class="col-md-5">
						<div class="section p-5 background-dark rounded-2">
							<div class="main-subtitle-top mb-4">FOCUSED ON STRATEGY</div>
							<h4 class="mb-4 color-white">You will become the best dancer!</h4>
							<p class="color-white mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
						</div>
					</div>
				</div>	
			</div>		
		</div> -->
	
		<!-- Parallax Block
		================================================== -->
		
		<div class="section padding-top-bottom">
			<div class="parallax-1" style="background-image: url('<?php echo base_url();?>/resources/img/parallax-4.jpg')"></div>
			<div class="grey-fade-over"></div>
			<div class="container z-bigger">
				<div class="row justify-content-center">
					<div class="col-md-8">	
						<div class="main-title on-dark text-center">
							<div class="main-subtitle-top mb-4">who we are</div>
							<h3>Watch to know us better</h3>
						</div>
					</div>
					<div class="clear"></div>
					<div class="col-md-8">
						<div class="video-section">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/9rYaHL8LjwU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

						</div>
					</div>
				</div>	
			</div>		
		</div>
		