<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Petpooja_App_Marketplace">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
<title>Propeller Admin Dashboard</title>
<link rel="shortcut icon" type="image/x-icon" href="themes/images/favicon.ico">

<!-- Styles Starts -->
<?php include('include/styles.php'); ?>
<!-- Styles Ends -->
</head>

<body>
<!-- Header Starts -->
<?php include('include/header.php'); ?>
<!-- Header Ends -->

<!-- Sidebar Starts -->
<?php include('include/sidebar.php'); ?>
<!-- Sidebar Ends -->

<!--content area start-->
<div id="content" class="pmd-content inner-page">

	<!--tab start-->
	<div class=" container-fluid full-width-container contact">
		<div class="row map-location">
			<div class="section col-lg-12 col-md-12 col-sm-12 col-xs-12" id="contact"> 
				<!--section-title -->
				<h1 class="section-title" id="contact-title">
					<span class="ff-titillium">Contact</span>
				</h1><!--section-title end -->
				<!--breadcrum start-->
                <ol class="breadcrumb text-left">
                  <li><a href="index.php">Dashboard</a></li>
                  <li class="active">Contact</li>
                </ol><!--breadcrum end-->
				<!-- section content start-->
				<section class="contact-page">
   					<div class="row contact-map">
      					<div class="iframe-overlay" style="max-width:100%;overflow:hidden;height:500px;">
      						<div style="height:100%; width:100%;max-width:100%;" id="google-maps-display">
            					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.828839097735!2d72.5439713154234!3d23.030055921826328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84e9918fab55%3A0xe8ed6eed0153b5b7!2sDigicorp!5e0!3m2!1sen!2sin!4v1475494079738" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
      						</div>
      					</div>
      					<div class="contact-form">
      						<div>
        						<div class="row">
          							<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                						<div class="contact-details pmd-card pmd-z-depth fill">
                    						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 feedback-form">
                        						<h1 class="pmd-display1">Get in touch</h1>
                        						<p class="sub-title">We are always happy to make valuable new contacts.</p>
                        						<div class="common-form-style">
													<form class="account-setting" method="post">
														<div class="row">
															<div class="col-lg-6">
																<div class="form-group pmd-textfield pmd-textfield-floating-label">
																	<label for="fname">First Name</label>
																	<input type="text" class="form-control" id="fname">
																</div>
															</div>
															<div class="col-lg-6">
																<div class="form-group pmd-textfield pmd-textfield-floating-label">
																	<label for="email">Email Address</label>
																	<input type="email" class="form-control" id="email">
																</div>
															</div>
														</div>
														<div class="form-group pmd-textfield pmd-textfield-floating-label">
															<label for="sub">Subject</label>
															<input type="text" id="sub" class="form-control">
														</div>
														<div class="form-group pmd-textfield pmd-textfield-floating-label">
															<label for="message">Message</label>
															<textarea id="message" class="form-control" rows="5"></textarea>
														</div>
														<button class="btn pmd-btn-raised pmd-ripple-effect btn-primary green " type="submit">Send message</button>
													</form> 
                        						</div>
                    						</div>
											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress-col">
												<h2 class="content-title">Contact info</h2>
												<div class="contact-info location">
													<span><b>Office Address</b><br>
													Spahack Inc<br> P O Box 801406 Dallas<br> TX 75380 USA</span>
												</div>
												<div class="contact-info customer-care">
													<span><b>Office number</b><br>
													832-282-9964</span>
												</div>
												<div class="contact-info mail-us">
													<span><b>Email us</b><br>
													<a href="mailto:Info@spahack.com">Info@spahack.com</a></span>
												</div>
											</div>
           								</div>
            						</div>
         						</div>
       						</div>
     					</div>
  					</div>
 				</section> <!-- section content end -->  
			</div>
		</div>
	</div><!-- tab end -->
	
</div><!-- content area end -->

<!-- Footer Starts -->
<?php include('include/footer.php'); ?>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<?php include('include/scripts.php'); ?>
<!-- Scripts Ends -->

</body>
</html>