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
						<h2>Let's practice</h2>
					<div class="main-subtitle-bottom mt-4">video</div>
					</div>	
				</div>
				<div class="clear"></div>
			</div>		
		</div>
	</div>
   <br><br>
   
    <div class="section padding-bottom over-hide">	
		<div class="container">
			<div class="row">
			<h2 class="mb-3" style="text-align:center"> Learn basic dances at home! </h2>
				<div class="separator-wrap pt-3 pb-4">	
						<span class="separator"><span class="separator-line dashed"></span></span>
				</div>
				<?php 
				if ($_SESSION['memberId'] != 0) {
				?>
				<a href="javascript:look('starter_pckg');" id="starter_msg" style="font-size:15pt">Starter package - show</a>
				<div id="starter_pckg" style="display:none; width:90%">
					<h3 class="mb-3" style="text-align:center">Starter package</h3>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/DeqYGrsEa6s" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					<br><br>
				</div> 
				<div class="separator-wrap pt-3 pb-4">	
								<span class="separator"><span class="separator-line dashed"></span></span>
				</div>
				<?php 
				}
				if (($_SESSION['memberId'] != 0) && ($_SESSION['memberId'] != 1)){
				?>
				<a href="javascript:lookp('personal_pckg');" id="personal_msg" style="font-size:15pt">Personal package - show</a>
				<div id="personal_pckg" style="display:none; width:90%">
					<h3 class="mb-3" style="text-align:center">Personal package</h3>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/buEOo7eFlck" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					<br><br>
				</div> 
				<div class="separator-wrap pt-3 pb-4">	
								<span class="separator"><span class="separator-line dashed"></span></span>
				</div>
				<?php 
				}
				if ($_SESSION['memberId'] == 3){
				?>
				<a href="javascript:looku('ult_pckg');" id="ult_msg" style="font-size:15pt">Ultimate package - show</a>
				<div id="ult_pckg" style="display:none; width:90%">
					<h3 class="mb-3" style="text-align:center">Ultimate package</h3>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/NRrn5oNLcn0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					<br><br>
				</div> 
				<div class="separator-wrap pt-3 pb-4">	
								<span class="separator"><span class="separator-line dashed"></span></span>
				</div>
				<?php
				}
				?>
			</div>
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
	
	<script>
	function look(t){
	p=document.getElementById(t);
	l=document.getElementById("starter_msg");
	if(p.style.display=="none"){
		l.innerHTML="Hide starter package";
		p.style.display="block";}
	else{
		l.innerHTML="Show starter package";
		p.style.display="none";}
	}
		function lookp(t){
	p=document.getElementById(t);
	l=document.getElementById("personal_msg");
	if(p.style.display=="none"){
		l.innerHTML="Hide personal package";
		p.style.display="block";}
	else{
		l.innerHTML="Show starter package";
		p.style.display="none";}
	}
		function looku(t){
	p=document.getElementById(t);
	l=document.getElementById("ult_msg");
	if(p.style.display=="none"){
		l.innerHTML="Hide ultimate package";
		p.style.display="block";}
	else{
		l.innerHTML="Show starter package";
		p.style.display="none";}
	}
	</script>
