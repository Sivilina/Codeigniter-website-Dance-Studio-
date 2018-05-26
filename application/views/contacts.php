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
										<a href="#contacts" class="nav-link">Contacts</a>
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
<div id="contacts" class="section">




	

	<!-- Primary Page Layout ================================================== -->
	
	<div class="section" style="padding-top:15%!important;">	
		<h3 style="text-align:center;"> We in the social media </h3>
		<div class="grid grid-pad">
			<div class="col-1-3">
			   <div class="content">
				   <a href="https://www.instagram.com/dance/"><h3>Our instagram</h3></a>
				   <a href="https://www.instagram.com/dance/"><img src="<?php echo base_url();?>/resources/img/instagram.png" style = "width:250pt"></a>
			   </div>
			</div>
			<div class="col-1-3">
			   <div class="content">
				    <a href="https://vk.com/nicedance"><h3>Our vk</h3></a>
				    <a href="https://vk.com/nicedance"><img src="<?php echo base_url();?>/resources/img/vk.png" style = "width:250pt"></a>
			   </div>
			</div>
			<div class="col-1-3">
			   <div class="content">
				   <a href="https://www.facebook.com/"><h3>Our facebook</h3>
				   <a href="https://www.facebook.com/"><img src="<?php echo base_url();?>/resources/img/facebook.png" style = "width:250pt"></a>
			   </div>
			</div>
		</div>
		<hr>
		<h3 style="text-align:center;"> How you can connect with us </h3><br>
		<div style="padding-left:10%;"> 
			<h5> Main telephone: +77081456745 // +77041564122</h5>
			<h5> Address in Almaty: Bayzakov street, 250, 1st floor</h5>
			<h5> Address in Astana: Abay street, 45, 3rd floor</h5>
			<h5> Address in Shymkent: Abay street, 45, 3rd floor</h5>
			<h5> Address in Karaganda: Abay street, 45, 3rd floor</h5>
			<h5> Address in Kostanay: Abay street, 45, 3rd floor</h5>
			<h5> Address in Atyrau: Abay street, 45, 3rd floor</h5>
		</div>
		<hr>
		<h5 style="padding-left:10%;"> Almaty</h5>
		<div class="col-md-12">
			<div id="map" style="height: 400px; width: 75%; margin-left:15%;">
			</div>		
		</div>
		
	</div>
	<!-- Footer Short Light Block
	================================================== -->
	
	<div class="section background-white over-hide footer-1">	
		<div class="container scd-foot pt-5 pb-5">
			<div class="row justify-content-center pt-5 pb-5">
				<div class="col-md-12 text-center pb-0">
					<ul class="list-style display-inline-b mb-0 pb-2">
						<li><a href="<?php echo base_url(); ?>index.php/blog/faq">FAQ</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/blog/contacts">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-12 text-center">
					<ul class="footer-social on-center">
						<li class="twitter">
							<a href="#">Tw</a>
						</li>
						<li class="facebook">
							<a href="#">Fb</a>
						</li>
						<li class="google">
							<a href="#">G+</a>
						</li>
						<li class="vimeo">
							<a href="#">Vm</a>
						</li>
					</ul>
				</div>
			</div>
		</div>	
		<div class="container scd-foot background-grey pt-4 pb-4">
			<div class="row">
				<div class="col-md-12 text-center">
					<p class="mb-0">© 2018 Beyond the reality. With big <i class="fa fa-heart"></i> to our clients!</p>
				</div>
			</div>	
		</div>
	</div>
</div>
	<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div>
	
	<!-- JAVASCRIPT
    ================================================== -->
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/royal_preloader.min.js"></script> 
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/tether.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/plugins.js"></script> 
	<script>
      function initMap() {
        var uluru = {lat: 43.241928, lng: 76.914697};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?&callback=initMap">
    </script>
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/custom/custom-elements.js"></script>  
	
<!-- End Document
================================================== -->

</body>
</html>