<?php
include_once('guest_header.php');
//echo "about.php";
?>
<?php
		include('include/header.php');
?>
<div class="sub-banner">
</div>
<div class="about">
	<div class="container"> 
		<h3>About Us</h3>
		<div class="about-info">
			<div class="col-md-8 about-grids">
				<h4>Our latest collection</h4>
				<p>Dignissimos at vero eos et accusamus et iusto odio ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecat officia. </p>		
					<div class="about-w3ls-row">
						<script type="text/javascript">
								 $(window).load(function() {
									$("#flexiselDemo3").flexisel({
										visibleItems:2,
										animationSpeed: 1000,
										autoPlay: false,
										autoPlaySpeed: 3000,    		
										pauseOnHover: true,
										enableResponsiveBreakpoints: true,
										responsiveBreakpoints: { 
											portrait: { 
												changePoint:480,
												visibleItems:2
											}, 
											landscape: { 
												changePoint:640,
												visibleItems:2
											},
											tablet: { 
												changePoint:768,
												visibleItems:2
											}
										}
									});
									
								});
						</script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script> 
						<ul id="flexiselDemo3">
								<?php
									$p_q = "select * from product_add
											order by p_id desc
											limit 0, 6";
						
									$p_res = mysqli_query($link,$p_q);
								
									while($p_row = mysqli_fetch_assoc($p_res))
									{
										echo '<li>
												<div style="height:230px;">
													<img src="upload/'.$p_row['p_img'].'" class="img-responsive" alt="" style="width=100%;
													height:100%;" />
												</div>
											 </li>';
									}
								?>
						</ul> 
						<div class="clearfix"> </div>
					</div>
			</div>
			<div class="col-md-4 about-grids">
					<h4>Our Advantages</h4>
					<div class="pince">
						<div class="pince-left">
							<h5>01</h5>
						</div>
						<div class="pince-right">
							<p>Vero vulputate enim non justo posuere phasellus eget  mauris.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pince">
						<div class="pince-left">
							<h5>02</h5>
						</div>
						<div class="pince-right">
							<p>Vero vulputate enim non justo posuere phasellus eget  mauris.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pince">
						<div class="pince-left">
							<h5>03</h5>
						</div>
						<div class="pince-right">
							<p>Vero vulputate enim non justo posuere phasellus eget  mauris.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pince">
						<div class="pince-left">
							<h5>04</h5>
						</div>
						<div class="pince-right">
							<p>Vero vulputate enim non justo posuere phasellus eget  mauris.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //about -->
<!--team-->
<div class="team" id="team">
	<div class="container">
		<h3> Our Team</h3>
		<div class="team-grids">
				<?php
						$q  = "select * from ourteams";

						$res = mysqli_query($link,$q);

						while($row = mysqli_fetch_assoc($res))
						{
							echo '<div class="col-md-3 team-grid">
									<div class="team-img">
										<img src="upload/ourteam/'.$row['ab_img'].'" class="img-responsive" alt=" " />
										<figcaption class="overlay">
											<div class="social-icon">
												<a href="'.$row['ab_tlink'].'"><i class="fa fa-twitter" aria-hidden="true"></i></a>
												<a href="'.$row['ab_flink'].'"><i class="fa fa-facebook" aria-hidden="true"></i></a>
												<a href="'.$row['ab_inlink'].'"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
											</div>
										</figcaption>
									</div>
										<h4>'.$row['ab_fnm'].'</h4>
										<h5>'.$row['ab_post'].'</h5>
								</div>';
						}
				?>

			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--team-->

<?php
		include('include/footer.php');
?>
