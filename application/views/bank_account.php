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

	<div class="section full-height over-hide">
		<div class="parallax" style="background-image: url('<?php echo base_url();?>/resources/img/membership_wallpaper.jpg')"></div>
		<div class="grey-fade-over"></div>
		<div class="hero-center-wrap z-bigger">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
					</div>
					<div class="col-md-5 parallax-fade-top">	
						<div class="main-title on-dark text-left mb-0">
							<h2>My bank Account</h2>
							<div class="main-subtitle-bottom smaller mt-4">
							<?php 
								echo "Client ID (Card Number): ".$bank['client_id'];
								echo "<br>Name: ".$bank['name'];
								echo "<br>Surname: ".$bank['surname'];
								echo "<br>Until date: ".$bank['until_date'];
								echo "<br>CVN (code on the other side of the card): ".$bank['cvn'];
							?>
							</div>
						<div class="clear"></div>
						<a href="<?php echo base_url();?>index.php/member/paywithcard/<?php echo $newMemberId;?>" class="btn btn-primary btn-simple btn-round btn-long mt-5" >Pay with this card</a>	
						<a href="<?php echo base_url();?>index.php/member/editcard" class="btn btn-primary btn-simple btn-round btn-long mt-5" >Edit card</a>	
						<a href="<?php echo base_url();?>index.php/member/membership" class="btn btn-primary btn-simple btn-round btn-long mt-5" ><- Back</a>	
					
					</div>
				</div>		
			</div>	
		</div>	
	</div>
