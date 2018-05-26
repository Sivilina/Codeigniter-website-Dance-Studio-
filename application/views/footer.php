
	
	
		<!-- Subscribe Block
		================================================== -->
		
		<div class="section padding-top-bottom background-white">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-7 text-center" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s">
						<h4 class="mb-5">Sign up for the first lesson</h4>
						<div class="subscribe-box-1">
							<?php echo form_open(base_url().'index.php/blog/mailsend');?>   
							
							<input type="text" name="content" value="" placeholder="Email address" class="form-control" />
							<button class="btn btn-primary btn-long subscribe-1" type="submit" value="">
								submit
							</button>
							<?php echo form_close();?>
							<p class="mt-1"><small>* we promise that we won´t spam you, never!</small></p>
						</div>	
					</div>
				</div>	
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
	

	<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div>
	<script language="javascript">
		function init()
		{
		  <?php
		  if(isset($alert_msg)){
			echo "alert('".$alert_msg."');";
		  }
		?>
		}
	</script>
	<!-- JAVASCRIPT
    ================================================== -->
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/royal_preloader.min.js"></script> 
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/tether.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/plugins.js"></script> 
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/custom/custom-op-design-studio.js"></script>  
	<script type="text/javascript" src="<?php echo base_url();?>/resources/js/script.js"></script>
	
<!-- End Document
================================================== -->

</body>
</html>