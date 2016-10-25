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

<!--Floating Menu -->
<div class="pmd-content pmd-content-custom" id="content"> 
	<div class="container-fluid">		
		
		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Floating Action Button</span>
		</h1><!-- End Title -->
			
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.php">Dashboard</a></li>
		  <li class="active">Floating Action Button</li>
		</ol><!--breadcrum end-->
		
		<!--component header -->
		<div class="componant-title-bg"> 
			<p class="lead">Floating Action Button is the circular button that floats above the UI and is “used for a promoted action”. It acts as call to action button, meant to represent the single action users perform the most on that particular screen.</p>
			<p class="lead"> The floating action button animates onto the screen as an expanding piece of material, by default. The icon within it may be animated.</p>
		</div><!--component header end -->
	
		
        <!-- FAB button -->
		<section class="row component-section">
			
			<!-- FAB button title and description -->
			<div class="col-md-3">
				<div id="fab">
					<h2>Floating Action Button (FAB)</h2>
				</div>
				<p>Include FAB Button to the code by adding <code>.pmd-btn-fab</code>.</p>
			</div> <!-- FAB button title and description end-->
			
			<!-- FAB button code and example -->
			<div class="col-md-9">		
				<div class="component-box">
					
					<!--FAB buttons example -->
					<div class="pmd-card pmd-z-depth pmd-card-custom-view">
						<div class="pmd-card-body"> 

							<!-- Default circle button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-ripple-effect btn-default" type="button"><i class="material-icons pmd-sm">add</i></button>
							
							<!-- Primary circle button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">star</i></button>
							
							<!-- Information circle button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-ripple-effect btn-info" type="button"><i class="material-icons pmd-sm">info</i></button>
							
							<!-- Success circle button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-ripple-effect btn-success" type="button"><i class="material-icons pmd-sm">check</i></button>
							
							<!-- Link circle button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-ripple-effect btn-link" type="button">Link</button>
						</div>
					</div> <!--FAB buttons example end-->
					
				</div>
			</div> <!-- FAB button code and example end -->
		</section> <!-- FAB button end --> 
		
		<!-- Raised FAB button-->
		<section class="row component-section">
			
			<!-- FAB raised button title and description -->
			<div class="col-md-3">
				<div id="fab-raised">
					<h2>Raised Floating Action Button</h2>
				</div>
				<p>Include Raised Floating Action Button to the code by adding <code>.pmd-btn-fab .pmd-btn-raised</code>.</p>
			</div> <!-- FAB raised button title and description end-->
			
			<!-- FAB raised button code and example -->
			<div class="col-md-9">
				<div class="component-box">

					<!--FAB raised button example -->
					<div class="pmd-card pmd-z-depth pmd-card-custom-view">
						<div class="pmd-card-body"> 

							<!-- Default raised circle button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default" type="button"><i class="material-icons pmd-sm">add</i></button>
							
							<!-- Primary raised circle button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">star</i></button>
							
							<!-- Information raised circle button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-info" type="button"><i class="material-icons pmd-sm">info</i></button>
							
							<!-- Success raised circle button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-success" type="button"><i class="material-icons pmd-sm">check</i></button>
							
							<!-- Link raised circle button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-link" type="button">Link</button>
						</div>
					</div> <!--FAB raised button example end -->
					
				</div>
			</div> <!-- FAB raised button code and example end -->
		</section> <!-- FAB Raised button end --> 
		
		<!-- FAB Flat button -->
		<section class="row component-section">
			
			<!-- FAB Flat button title and description -->
			<div class="col-md-3">
				<div id="fab-flat">
					<h2>Flat Floating Action Button</h2>
				</div>
				<p>Include Flat FAB Button to the code by adding <code>.pmd-btn-fab .pmd-btn-flat</code>.</p>
			</div> <!-- FAB Flat button title and description end -->
			
			<!-- FAB Flat button code and example -->
			<div class="col-md-9">
				<div class="component-box">
					
					<!--FAB flat buttons example -->
					<div class="pmd-card pmd-z-depth pmd-card-custom-view">
						<div class="pmd-card-body"> 
							<!-- Default flat FAB button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default" type="button"><i class="material-icons pmd-sm">add</i></button>
							
							<!-- Primary flat FAB button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">star</i></button>
							
							<!-- Information flat FAB button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-info" type="button"><i class="material-icons pmd-sm">info</i></button>
							
							<!-- Success flat FAB button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-success" type="button"><i class="material-icons pmd-sm">check</i></button>
							
							<!-- Link flat FAB button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-link" type="button">Link</button>
						</div>
					</div> <!--circle flat buttons example end -->
					
				</div>
			</div> <!-- FAB Flat button code and example end -->
		</section> <!-- FAB Flat button end --> 	
		
        <!-- FAB with Menu -->
		<section class="row component-section">
			
			<!-- floating menu title and description -->
			<div class="col-md-3">
				<div id="fab-menu">
					<h2>Floating Action Button with Menu</h2>
				</div>
				<p>The floating action button can transform into sheets of material that are part of the app structure. This dramatic transformation accentuates the action the button enables. </p>
			</div><!-- floating menu title and description end -->
			
			<!-- floating menu code and example -->
			<div class="col-md-9">
				<div class="component-box">
				
					<!-- floating menu example -->
					<div class="row"> 
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth">
								<div class="pmd-card-body floating-action-custom text-center"> 
									<div class="menu pmd-floating-action"  role="navigation"> 
										<a href="javascript:void(0);" class="pmd-floating-action-btn btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default" data-title="Supervisor Account"> 
											<span class="pmd-floating-hidden">Supervisor Account</span>
											<i class="material-icons">supervisor_account</i> 
										</a> 
										<a href="javascript:void(0);" class="pmd-floating-action-btn btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default" data-title="Cloud Queue"> 
											<span class="pmd-floating-hidden">Cloud Queue</span> 
											<i class="material-icons">cloud_queue</i> 
										</a> 
										<a href="javascript:void(0);" class="pmd-floating-action-btn btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default" data-title="Headset"> 
											<span class="pmd-floating-hidden">Headset</span> 
											<i class="material-icons">headset</i> 
										</a> 
										<a href="javascript:void(0);" class="pmd-floating-action-btn btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default" data-title="Dialpad"> 
											<span class="pmd-floating-hidden">Dialpad</span> 
											<i class="material-icons">dialpad</i> 
										</a> 
										<a href="javascript:void(0);" class="pmd-floating-action-btn btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-primary" data-title="Add"> 
											<span class="pmd-floating-hidden">Primary</span>
											<i class="material-icons pmd-sm">add</i> 
										</a> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- floating menu code and example end -->
			
		</section><!-- text fields end -->
		 
	</div>
</div><!--Floating Menu constructor end --> 

<!-- Footer Starts -->
<?php include('include/footer.php'); ?>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<?php include('include/scripts.php'); ?>
<!-- Scripts Ends -->

</body>
</html>