<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Propeller is a front-end responsive framework based on Material design & Bootstrap.">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
<title>Propeller Admin - Develop more, Code less.</title>
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

<!--Alert -->
<div class="pmd-content pmd-content-custom" id="content">
	
	<div class="container-fluid"> 
	
		<!-- Title -->
		<h1 class="section-title" id="alert-title">
			<span>Alert</span>
		</h1><!-- End Title -->
			
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.php">Dashboard</a></li>
		  <li class="active">Alert</li>
		</ol><!--breadcrum end--> 
		
		<!--component header -->
		<div class="componant-title-bg"> 
			<p class="lead">Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.</p>
		</div> <!--component header end -->
		
		<!-- Bootstrap Simple Alert with Link -->
		<section class="row component-section">
			
			<!-- Simple Alert title and description -->
			<div class="col-md-3">
				<div id="bootstrap-simple-alert">
					<h2>Bootstrap Simple Alert</h2>
				</div>
				<p>Bootstrap provides an easy way to create predefined alert messages. Alerts are created with the <code>.alert</code> class, followed by one of the four contextual classes <code>.alert-success</code>, <code>.alert-info</code>, <code>.alert-warning</code> or <code>.alert-danger</code>. Use <code>.alert-link</code> utility to quickly provide matching colored links within any alert.</p>
			</div> <!-- Simple Alert title and description end -->
			
			<div class="col-md-9"> 
				
				<!--Simple Alert code and example -->
				<div class="component-box">
					
					<!--Simple Alert example -->
					<div class="row">
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body text-center alert-custom"> 
									<!--Use alerts with links-->
									<div class="alert alert-success" role="alert"> Well done! You successfully read <a href="javascript:void(0);" class="alert-link">this important alert message</a>. </div>
									<div class="alert alert-info" role="alert"> Heads up! This <a href="javascript:void(0);" class="alert-link">alert needs your attention</a>, but it's not super important. </div>
									<div class="alert alert-warning" role="alert"> Warning! Better check yourself, you're <a href="javascript:void(0);" class="alert-link">not looking too good</a>. </div>
									<div class="alert alert-danger" role="alert"> Oh snap! <a href="javascript:void(0);" class="alert-link">Change a few things up</a> and try submitting again. </div>
								</div>
							</div>
						</div>
					</div> <!--Simple Alert example end -->
					
				</div><!--Simple Alert code and example end-->
			</div>
		</section> <!-- Bootstrap Simple Alert end-->
		
		<!-- Bootstrap Alert with Close button -->
		<section class="row component-section">
			
			<!-- Close button title and description -->
			<div class="col-md-3">
				<div id="bootstrap-alert-with-close-button">
					<h2>Bootstrap Alert with Close Button</h2>
				</div>
				<p>Bootstrap Alerts are available with an optional close button. Add <code>.alert-dismissible</code> class to parent div and <code>.close</code> class to a link or a button element.</p>
			</div> <!-- Close button title and description end-->
			
			<div class="col-md-9"> 
				
				<!--Close button code and example -->
				<div class="component-box">
					
					<!--Close button example -->
					<div class="row">
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body text-center alert-custom"> 
									<!--Use dismissing alerts-->
									<div role="alert" class="alert alert-success alert-dismissible">
										<button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
										Well done! You successfully read this important alert message. </div>
									<div role="alert" class="alert alert-info alert-dismissible">
										<button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
										Heads up! This alert needs your attention, but it's not super important. </div>
									<div role="alert" class="alert alert-warning alert-dismissible">
										<button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
										Warning! Better check yourself, you're not looking too good. </div>
									<div role="alert" class="alert alert-danger alert-dismissible">
										<button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
										Oh snap! Change a few things up and try submitting again. </div>
								</div>
							</div>
						</div>
					</div> <!--Close button example end -->
					
				</div> <!--Close button code and example end -->
			</div>
		</section> <!-- Bootstrap Alert with Close button end-->

		<!-- Propeller Alert -->
		<section class="row component-section">
			
			<!-- Propeller Alert title and description -->
			<div class="col-md-3">
				<div id="propeller-alert">
					<h2>Propeller Alert</h2>
				</div>
                <p>Unlike other Propeller components Alert component is independent of Bootstrap HTML structure.</p>
                <p>In Marterial Design language alert is known as <a href="https://material.google.com/components/snackbars-toasts.html#snackbars-toasts-usage" target="_blank">Snackbar and Toast</a>.</p>
				<p>To specify the position of alert component use <strong>data-positionX</strong> (x-axis positioning with <code>left</code>, <code>right</code>, and <code>center</code> as values.) and <strong>data-positionY</strong> (y-axis positioning with <code>top</code> and <code>bottom</code> as values.) attributes.</p>
			</div> <!-- Propeller Alert title and description end -->
			
			<div class="col-md-9"> 
				
				<!-- Propeller Alert code and example -->
				<div class="component-box">
					
					<!-- Propeller alert example -->
					<div class="row">
						<div class="col-md-6"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body text-center alert-custom"> 
									<!--Alert Top Left -->
									<button type="button"  data-positionX="left" data-positionY="top" data-effect="fadeInUp" data-message="You have 1 messages" class="btn pmd-ripple-effect btn-default pmd-btn-raised pmd-alert-toggle">Top Left</button>
									<!--Alert Top Center -->
									<button type="button" data-positionX="center" data-positionY="top" data-effect="fadeInUp" data-message="You have 2 messages" class="btn pmd-ripple-effect btn-default pmd-btn-raised pmd-alert-toggle">Top Center</button>
									<!--Alert Top Right -->
									<button type="button" data-positionX="right" data-positionY="top" data-effect="fadeInUp" data-message="You have 3 messages" class="btn pmd-ripple-effect btn-default pmd-btn-raised pmd-alert-toggle"> Top Right</button>
								</div>
							</div>
							<p class="component-desc">Alert Top</p>
						</div>
						<div class="col-md-6"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body text-center alert-custom"> 
									<!--Alert Bottom Left -->
									<button type="button" data-positionX="left" data-positionY="bottom" data-effect="fadeInDown" data-message="You have 4 messages" data-action-text="Undo" class="btn pmd-ripple-effect btn-default pmd-btn-raised pmd-alert-toggle">Bottom Left</button>
									<!--Alert Bottom Center -->
									<button type="button" data-positionX="center" data-positionY="bottom" data-effect="fadeInDown" data-message="You have 5 messages" data-action-text="Redo" class="btn pmd-ripple-effect btn-default pmd-btn-raised pmd-alert-toggle">Bottom Center</button>
									<!--Alert Bottom Right -->
									<button type="button" data-positionX="right" data-positionY="bottom" data-effect="fadeInDown" data-message="You have 6 messages" data-action-text="Retry" class="btn pmd-ripple-effect btn-default pmd-btn-raised pmd-alert-toggle">Bottom Right</button>
								</div>
							</div>
							<p class="component-desc">Alert Bottom</p>
						</div>
					</div> <!-- Propeller Apert example end -->
					
				</div> <!-- alert code and example end-->
			</div>
		</section> <!-- Propeller Alert end -->
		
		<!-- Propeller alert with action -->
		<section class="row component-section">
			
			<!-- alert with action title and description -->
			<div class="col-md-3">
				<div id="propeller-alert-with-action">
					<h2>Propeller Alert with Action</h2>
				</div>
				<p>This type of Alert comes with an action which is to be performed on the alert message. Along with Propeller Alert HTML use additional attributes - <strong>data-action</strong> (with <code>true</code> and <code>false</code> value) and <strong>data-action-text</strong> (with <code>user defined</code> value).</p>
			</div> <!-- alert with action title and description end -->
			
			<div class="col-md-9"> 
				
				<!-- alert with action code and example -->
				<div class="component-box">
					
					<!-- alert with action example -->
					<div class="row">
						<div class="col-md-6"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body text-center alert-custom"> 
									<!--Alert Top Left -->
									<button type="button"  data-positionX="left" data-positionY="top" data-effect="fadeInUp" data-action="true" data-action-text="Close" data-message="You have 1 messages" class="btn pmd-ripple-effect btn-default pmd-btn-raised pmd-alert-toggle">Top Left</button>
									<!--Alert Top Center -->
									<button type="button" data-positionX="center" data-positionY="top" data-effect="fadeInUp" data-action="true" data-action-text="Refresh" data-message="You have 2 messages" class="btn pmd-ripple-effect btn-default pmd-btn-raised pmd-alert-toggle">Top Center</button>
									<!--Alert Top Right -->
									<button type="button" data-positionX="right" data-positionY="top" data-effect="fadeInUp" data-action="true" data-action-text="Ok" data-message="You have 3 messages" class="btn pmd-ripple-effect btn-default pmd-btn-raised pmd-alert-toggle"> Top Right</button>
								</div>
							</div>
							<p class="component-desc">Alert Top</p>
						</div>
						<div class="col-md-6"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body text-center alert-custom"> 
									<!--Alert Bottom Left -->
									<button type="button" data-positionX="left" data-positionY="bottom" data-effect="fadeInDown" data-action="true" data-message="You have 4 messages" class="btn pmd-ripple-effect btn-default pmd-btn-raised pmd-alert-toggle">Bottom Left</button>
									<!--Alert Bottom Center -->
									<button type="button" data-positionX="center" data-positionY="bottom" data-effect="fadeInDown" data-action="true" data-message="You have 5 messages" class="btn pmd-ripple-effect btn-default pmd-btn-raised pmd-alert-toggle">Bottom Center</button>
									<!--Alert Bottom Right -->
									<button type="button" data-positionX="right" data-positionY="bottom" data-effect="fadeInDown" data-action="true" data-message="You have 6 messages" class="btn pmd-ripple-effect btn-default pmd-btn-raised pmd-alert-toggle">Bottom Right</button>
								</div>
							</div>
							<p class="component-desc">Alert Bottom</p>
						</div>
					</div> <!-- alert with action example end -->
					
				</div> <!-- alert with action code and example end -->
			</div>
		</section> <!-- Propeller alert with action end -->
		
		<!-- Propeller alert with basic notification Types -->
		<section class="row component-section">
			
			<!-- alert types title and description -->
			<div class="col-md-3">
				<div id="propeller-alerts-with-basic-notification-types">
					<h2>Propeller Alerts with basic notification types</h2>
				</div>
                <p>These are simple Propeller Alerts with an aditioinal attribute - <strong>data-type</strong> with predefined four  values - <code>alert-success</code>, <code>alert-info</code>, <code>alert-warning</code> or <code>alert-danger</code>.
                </p>
			</div> <!-- alert types title and description end -->
			
			<div class="col-md-9"> 
				
				<!--alert type code and example -->
				<div class="component-box">
					
					<!-- alert types example -->
					<div class="row">
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth">
								<div class="pmd-card-body text-center alert-custom"> 
									<!--Information Alett-->
									<button type="button" data-positionX="left"data-positionY="top"data-effect="fadeInUp"data-message="Heads up! This alert needs your attention, but it's not super important."data-type="information" data-revert="fadeOutUp"class="btn pmd-ripple-effect btn-info pmd-btn-raised pmd-alert-toggle">Alert Information</button>
									<!--Warning Alett-->
									<button type="button" data-positionX="center"data-positionY="top"data-effect="fadeInUp"data-message="Warning! Best check yourself, you're not looking too good."data-type="warning" class="btn pmd-ripple-effect btn-warning pmd-z-depth pmd-alert-toggle">Alert Warning</button>
									<!--Success Alett-->
									<button type="button" data-positionX="right"data-positionY="top"data-effect="fadeInUp"data-message="Well done! You successfully read this important alert message."data-type="success" class="btn pmd-ripple-effect btn-success pmd-z-depth pmd-alert-toggle">Alert Success</button>
									<!--Error Alert -->
									<button type="button" data-positionX="right"data-positionY="top"data-effect="fadeInUp"data-message="Oh snap! Change a few things up and try submitting again."data-type="error" class="btn pmd-ripple-effect btn-danger pmd-z-depth pmd-alert-toggle">Alert Error</button>
								</div>
							</div>
						</div>
					</div> <!-- alert types example end -->
					
				</div> <!--alert type code and example end -->
			</div>
		</section> <!-- Propeller alert with basic notification end -->		
		
	</div>
</div> <!--Alert end -->

<!-- Footer Starts -->
<?php include('include/footer.php'); ?>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<?php include('include/scripts.php'); ?>
<!-- Scripts Ends -->
<!-- Propeller Alert Js -->
<script>

</body>
</html>