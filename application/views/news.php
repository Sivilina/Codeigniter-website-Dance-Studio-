						<div class="collapse navbar-collapse justify-content-end" id="navbarNavMenuMain">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a href="<?php echo base_url();?>index.php" class="nav-link">Home</a>
								</li>
								<?php if((isset($_SESSION['userrole']) && ($_SESSION['userrole'] != 'Moderator')) || !(isset($_SESSION['userrole']))){ ?>
								<li class="nav-item">
									<a href="#" class="nav-link">News</a>
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
<div class="section" id="news">
	
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

	<!-- Hero Slider Block
	================================================== -->
	
	<div class="section padding-top-1st padding-bottom-1st over-hide">
		<div class="parallax" style="background-image: url('<?php echo base_url();?>/resources/img/news_wallpaper.jpg')"></div>
		<div class="grey-fade-over"></div>
		<div class="container z-bigger">
			<div class="row justify-content-center">
				<div class="col-md-5 parallax-fade-top">	
					<div class="main-title on-dark text-center mb-0">
						<h2>Beyond the reality</h2>
						<div class="main-subtitle-bottom mt-4">latest news</div>	
					</div>	
				</div>
				<div class="clear"></div>
			</div>		
		</div>
	</div>

	<!-- Blog Block
	================================================== -->
	
	<div class="section padding-top background-grey over-hide">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-4 pt-3">
					<div class="sidebar-box background-white drop-shadow rounded">
						<div class="subscribe-box-1">
							<?php echo form_open(base_url().'index.php/blog/search'); ?>
							<input type="text" value="" name="key" placeholder="type search here" class="form-control" />
							<button class="btn btn-primary subscribe-1" type="submit" value="">
								search
							</button>
							<?php echo form_close(); ?><br>
							<a href="<?php echo base_url()?>index.php/blog/news">Show all posts </a>
						</div>	
						<div class="clear"></div>	
						<div class="separator-wrap my-5">	
							<span class="separator"><span class="separator-line dashed"></span></span>
						</div>
						<div class="clear"></div>
						<h6 class="mb-3">Latest quote</h6>
						<p class="pb-0">Life is like dancing. If we have a big floor, many people will dance. Some will get angry when the rhythm changes. But life is changing all the time.</p>
						<div class="clear"></div>	
						<div class="separator-wrap my-5">	
							<span class="separator"><span class="separator-line dashed"></span></span>
						</div>
						<div class="clear"></div>
						<h6 class="mb-3">Latest News</h6>
						<ul class="list-style circle-o pl-4 pb-0">	
						<?php 	
							foreach($posts as $row2){
								echo "<li><a href=\"post".$row2['id']."\" class=\"btn-link btn-primary pl-0\">".$row2['title']."</a></li>";
							}
						?>
						</ul>
						<div class="clear"></div>	
						<div class="separator-wrap my-5">	
							<span class="separator"><span class="separator-line dashed"></span></span>
						</div>
						<div class="clear"></div>	
						<h6 class="mb-3">Tags</h6>
						<a href="<?php echo base_url();?>index.php/blog/search/modern" class="btn btn-primary btn-sm ml-0 mr-1 mb-1">modern</a>
						<a href="<?php echo base_url();?>index.php/blog/search/old" class="btn btn-primary btn-sm ml-0 mr-1 mb-1">old</a>
						<a href="<?php echo base_url();?>index.php/blog/search/dance" class="btn btn-primary btn-sm ml-0 mr-1 mb-1">dance</a>
						<a href="<?php echo base_url();?>index.php/blog/search/street" class="btn btn-primary btn-sm ml-0 mr-1 mb-1">street</a>
						<a href="<?php echo base_url();?>index.php/blog/search/classic" class="btn btn-primary btn-sm ml-0 mr-1 mb-1">classic</a>
						<a href="<?php echo base_url();?>index.php/blog/search/beautiful" class="btn btn-primary btn-sm ml-0 mr-1 mb-1">beautiful</a>
						<a href="<?php echo base_url();?>index.php/blog/search/dancers" class="btn btn-primary btn-sm ml-0 mr-1 mb-1">dancers</a>
						<a href="<?php echo base_url();?>index.php/blog/search/grace" class="btn btn-primary btn-sm ml-0 mr-1 mb-1">grace</a>
						<a href="<?php echo base_url();?>index.php/blog/search/ballet" class="btn btn-primary btn-sm ml-0 mr-1 mb-1">ballet</a>
						<a href="<?php echo base_url();?>index.php/blog/search/professional" class="btn btn-primary btn-sm ml-0 mr-1 mb-1">professional</a>
						<div class="clear"></div>	
						<div class="separator-wrap my-5">	
							<span class="separator"><span class="separator-line dashed"></span></span>
						</div>
						<div class="clear"></div>	
					</div>
				</div>
				
				<div class="col-lg-8 p-0">
					<div class="grid-wraper clearfix">	
						<?php 
						$msg = '';
						if($posts == null)
							echo "<div class=\"grid-box with-margin drop-shadow rounded\">						 
							<div class=\"blog-box-1 blog-home background-white over-hide\">
								<div class=\"padding-in\"><br><h4>No posts found.</h4></div></div></div>";
						else 
						foreach($posts as $row){
						?>
						<div class="grid-box with-margin drop-shadow rounded">						 
							<div class="blog-box-1 blog-home background-white over-hide">
								<div class="padding-in">
									<?php
									echo "<a href=\"".base_url()."index.php/blog/post/".$row['id']."\"><h5 class=\"pt-4 mt-3\">".$row['title']."</h5></a>
									<br><img src=\"".base_url().$row['image']."\" alt=\"\" class=\"blog-home-img\" style=\"width:60%\"/>
									<p class=\"mt-3\">".$row['context']."</p>
									<a href=\"".base_url()."index.php/blog/post/".$row['id']."\" class=\"btn-link btn-primary pl-0 mt-4\">read more</a>
									<div class=\"separator-wrap pt-4\">	
										<span class=\"separator\"><span class=\"separator-line\"></span></span>
									</div>
									<div class=\"author-wrap mt-5\">	
										<p style=\"text-align:left\"> by <a href=\"#\">".$row['username']."</a>
										<br>Posted time: ".$row['date']."</p>
									</div>
								</div>	
							</div>	
						</div>"	;
						}
						?>
						<div class="grid-box with-margin drop-shadow rounded">							 
							<div class="blog-box-1 blog-home background-dark over-hide">
								<div class="blog-quote-wrap">
									<p class="mb-5">"If you believe that your best years are behind you, you've guaranteed they are; I'm going to dance into that good night, with the oldies turned up loud."</p>
									<h5>Jason Statham</h5>
								</div>
							</div>
						</div>		
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Nex Prev Block
	================================================== -->
	
	<div class="section padding-top-bottom background-grey over-hide">
		<div class="container">
			<div class="row">
				<div class="col-md-12">	
					<div class="project-nav-wrap">
						<a href="#"><div class="left-nav" data-scroll-reveal="enter left move 60px over 0.7s after 0.1s">old<div class="text-on-hover">older entries</div></div></a>
						<a href="#"><div class="right-nav" data-scroll-reveal="enter right move 60px over 0.7s after 0.1s">new<div class="text-on-hover">new entries</div></div></a>
					</div>
				</div>
			</div>
		</div>
	</div>
