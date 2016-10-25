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

<!--Badge -->
<div class="pmd-content pmd-content-custom" id="content"> 	
	<div class="container-fluid">
	
		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Badge</span>
		</h1><!-- End Title -->
			
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.php">Dashboard</a></li>
		  <li class="active">Badge</li>
		</ol><!--breadcrum end-->
		
		<!--component header -->
		<div class="componant-title-bg"> 
			<p class="lead">Badge is a new feature in user interfaces, and provides users with a visual clue to help them discover additional relevant content. A badge can be both a notifier that there are additional items associated with an object and an indicator of how many items there are.</p>
		</div> <!--component header end-->
		
		<!-- badge code and example -->
		<section class="row component-section">
			
			<!-- Badge title and description -->
			<div class="col-md-3">
				<div id="badge-buttons">
					<h2>Bootstrap Badge</h2>
				</div>
				<p>Easily highlight new or unread items by adding a <code>&lt;span class="badge"&gt;</code> to links, Bootstrap navs, and more.</p>
                <p>Badge can also be used inside other elements, such as buttons.</p>
			</div> <!-- Badge title and description end-->
			
			<div class="col-md-9"> 
				
				<!--Badge code and example -->
				<div class="component-box">
					
					<!-- badge example -->
					<div class="row"> 
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth">
								<div class="pmd-card-body"> 
									<!-- Default badge with ripple effect --> 
									<span class="badge pmd-ripple-effect">1</span> 
									
									<!-- Success badge with ripple effect --> 
									<span class="badge badge-success pmd-ripple-effect">2</span> 
									
									<!-- Warning badge with ripple effect --> 
									<span class="badge badge-warning pmd-ripple-effect">4</span> 
									
									<!-- Error badge with ripple effect --> 
									<span class="badge badge-error pmd-ripple-effect">6</span> 
									
									<!-- Information badge with ripple effect --> 
									<span class="badge badge-info pmd-ripple-effect">8</span> 
									
									<!-- Inverse badge with ripple effect --> 
									<span class="badge badge-inverse pmd-ripple-effect">10</span> </div>
							</div>
						</div>
						
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body"> 
									<!--Badges on Buttons--> 
									<!-- Badge on primary button with ripple effect -->
									<button type="button" class="btn btn-primary pmd-ripple-effect">Primary <span class="badge">7</span></button>
									
									<!-- Badge on success button with ripple effect -->
									<button type="button" class="btn btn-success pmd-ripple-effect">Success <span class="badge">3</span></button>
									
									<!-- Badge on danger button with ripple effect -->
									<button type="button" class="btn btn-danger pmd-ripple-effect">Danger <span class="badge">5</span></button>
								</div>
							</div>
						</div>
					</div> <!-- badge example end -->
					
				</div> <!--Badge code and example end-->
			</div>
		</section> <!-- badge code and example end -->
		
		<!-- Notification badge -->
		<section class="row component-section">
			
			<!-- Notification badge title and description -->
			<div class="col-md-3">
				<div id="notification-badge">
					<h2>Notification Badge</h2>
				</div>
				<p>You can also create a badge which overlaps any element. Create the notification badge using <code>.pmd-badge .pmd-badge-overlap</code>.</p>
			</div> <!-- Notification badge title and description end -->
			
			<div class="col-md-9"> 
				
				<!-- Notification badge code and example -->
				<div class="component-box">
					
					<!-- Notification badge example -->
					<div class="row"> 
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body">
									<div class="row">
										<div class="col-md-6 col-sm-6"> 
											<!--notification overlapping Badge over an icon -->
											<div class="pmd-badge-custom text-center">
												<div data-badge="3" class="material-icons pmd-md pmd-badge pmd-badge-overlap">account_box</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6"> 
											<!--notification overlapping Badge over text-->
											<div class="pmd-badge-custom text-center">
												<div data-badge="3" class="pmd-badge pmd-badge-overlap pmd-badge-text">Inbox</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- Notification badge example end -->
					
				</div> <!-- Notification badge code and example end -->
			</div>
		</section> <!-- Notification badge end -->
		 
		<!-- Chips -->
		<section class="row component-section">
			
			<!-- Chips title and description -->
			<div class="col-md-3">
				<div id="chip">
					<h2>Chip</h2>
				</div>
				<p>Chip component is a small, interactive element. Chip is commonly used for contacts, text, rules, icons, and photos. To create a chip add <code>.pmd-chip</code> to the tag. To create chip that contain icons, add <code>.pmd-chip-contact</code> to the tag.</p>
			</div> <!-- Chips title and description end-->
			
			<div class="col-md-9"> 
				
				<!-- chips code and example -->
				<div class="component-box">					
					<!-- chips example -->
					<div class="row"> 
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body">
									<div class="row">
										<div class="col-md-6 col-sm-6"> 
											<!--Chips with text-->
											<div class="text-center">
												<div class="pmd-chip">
													Example Chip 
													<a class="pmd-chip-action" href="javascript:void(0);"><i class="material-icons">close</i></a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6"> 
											<!--Chips with text and an icon-->
											<div class="text-center">
												<div class="pmd-chip pmd-chip-contact"> 
													<img src="http://propeller.in/assets/images/avatar-icon-40x40.png" alt="avatar"> 
													<span>Trevor Hensen</span> 
													<a class="pmd-chip-action" href="javascript:void(0);">
													<i class="material-icons">close</i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- chips example end -->
					
				</div> <!-- chips code and example end -->
			</div>
		</section> <!-- Chips end -->	
		
	</div>
</div> <!--Badge end-->

<!-- Footer Starts -->
<?php include('include/footer.php'); ?>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<?php include('include/scripts.php'); ?>
<!-- Scripts Ends -->

</body>
</html>