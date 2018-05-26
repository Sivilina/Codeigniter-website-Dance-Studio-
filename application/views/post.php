<div class="collapse navbar-collapse justify-content-end" id="navbarNavMenuMain">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a href="<?php echo base_url();?>index.php" class="nav-link">Home</a>
								</li>
								<?php if((isset($_SESSION['userrole']) && ($_SESSION['userrole'] != 'Moderator')) || !(isset($_SESSION['userrole']))){ ?>
								<li class="nav-item">
									<a href="#news" class="nav-link">News</a>
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

	<!-- Post Block
	================================================== -->
	
	<div class="section padding-top background-grey over-hide">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section drop-shadow rounded">						 
						<div class="blog-box-1 blog-home background-white over-hide">
							<img src="img/blog/3.jpg" alt="" class="blog-home-img"/>
							<div class="padding-in"><br>
								<?php 
								echo "<h2>".$post['title']."</h2>";
								?>
								<p class="mt-4">
								<?php 
								echo $post['context'];
								?>
								</p>
								<blockquote class="blockquote blockquote-reverse">
									<p>Date:  
									<?php 
									echo $post['date'];
									?>
									</p>
									<footer class="blockquote-footer">
									<?php 
									echo $post['username'];
									?>
									</footer>
								</blockquote>
								<div class="clear"></div>
								<div class="separator-wrap pt-4 pb-4">	
									<span class="separator"><span class="separator-line dashed"></span></span>
								</div>
								<div class="clear"></div>
								<a href="#" class="btn btn-primary btn-sm ml-0 mr-1 mb-1">design</a>
								<a href="#" class="btn btn-primary btn-sm ml-0 mr-1 mb-1">business</a>
								<a href="#" class="btn btn-primary btn-sm ml-0 mr-1 mb-1">responsive</a>
								<div class="clear"></div>
								<div class="separator-wrap pt-4 pb-4">	
									<span class="separator"><span class="separator-line dashed"></span></span>
								</div>
								<div class="clear"></div>
								<div class="clear"></div>
								<div class="separator-wrap pt-4">	
									<span class="separator"><span class="separator-line dashed"></span></span>
								</div>
							</div>
						</div>	
					</div>
					<div class="section drop-shadow rounded mt-4">			 
						<div class="post-comm-box background-white over-hide">
							<h5> <?php 
									echo $commentsCount." comment";
									if ($commentsCount > 1)
										echo "s";
									?>
							</h5>
							<div class="clear"></div>
							<div class="separator-wrap pt-3 pb-4">	
								<span class="separator"><span class="separator-line dashed"></span></span>
							</div>
							<?php 
							foreach($comments as $row){
							?>
							<div class="clear"></div>
							<div class="section">	
								<h6><?php echo $row['username']; ?> <small><?php echo $row['date']; ?></small></h6>
								<p class="mt-2"><?php echo $row['context']; ?></p>
								<a href="#" class="btn-link btn-primary pl-0">reply</a>
							</div>
							<div class="separator-wrap pt-3 pb-4">	
								<span class="separator"><span class="separator-line dashed"></span></span>
							</div>
							<?php 
							}
							?>
						</div>	
					</div>
					<div class="section drop-shadow rounded mt-4">			 
						<div class="post-comm-box background-white over-hide">
							<h5>Leave a comment</h5>
							<?php
								echo form_open(base_url().'index.php/blog/comment_add');
								echo form_hidden('post', $this-> uri-> segment(3));
								$now = date('Y-m-d H:i:s');
								echo form_hidden('date',$now);
							?>
							<div class="clear"></div>
							<div class="subscribe-box-1 mt-4">
								<textarea name="context"  placeholder="Comment" class="for-textarea form-control" ></textarea>
							</div>
							<div class="clear"></div>	
							<div class="checkbox primary line-icon on-light mt-4">
								<input id="checkboxForm" type="checkbox" required>
								<label for="checkboxForm">
									I'm not a robot
								</label>
							</div>
							<div class="clear"></div>
							<button class="btn btn-primary btn-round btn-long mt-5" type="submit">submit comment</button>
							<?php 
								echo form_close();
							?>
						</div>	
					</div>
				</div>
				</div>
				
				<br><br><h3><a href="<?php echo base_url();?>index.php/blog/news" class="btn-link btn-primary"><-  Back to news</a></h3>
				
			</div>
		</div>
	</div>

