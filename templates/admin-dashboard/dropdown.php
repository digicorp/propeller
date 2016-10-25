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

<!-- Dropdown constructor start -->
<div class="pmd-content pmd-content-custom dropdown-component" id="content">
	
	<div class="container-fluid">
	
		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Dropdown</span>
		</h1><!-- End Title -->
			
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.php">Dashboard</a></li>
		  <li class="active">Dropdown</li>
		</ol><!--breadcrum end--> 
	
		<!-- component header -->
		<div class="componant-title-bg">
			<p class="lead">A dropdown is an HTML component that allows the user to choose one value from a list. It is similar  to the select box.</p>
		</div> <!-- component header end -->
		
		<!-- Bootstrap Dropdown -->
		<section class="row component-section">
			
			<!-- dropdown types title and description -->
			<div class="col-md-3">
				<div id="bootstrap-dropdown">
					<h2>Bootstrap Dropdown</h2>
				</div>
				<p>Dropdown is toggleable, contextual overlay for displaying lists of links and more. It is made interactive with the included Bootstrap dropdown JavaScript plugin.</p>
			</div> <!-- dropdown types title and description end-->
			
			<!--Dropdown types code and example -->
			<div class="col-md-9">
				<div class="component-box">
					
					<!-- dropdown types example  --> 
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth pmd-card-custom-view"> 
								<div class="pmd-card-body">
									<div class="row">
										<!-- Example single danger button -->
                                        <div class="col-md-12">
                                        	<div class="dropdown pmd-dropdown">
                                              <a id="dLabel" data-target="#" href="http://example.com" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Dropdown trigger
                                                <span class="caret"></span>
                                              </a>
                                            
                                              <ul class="dropdown-menu" aria-labelledby="dLabel">
                                              	<li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li><div class="dropdown-divider"></div></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                              </ul>
                                            </div>
                                        </div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- dropdown types example end -->
				
				</div>
			</div> <!--Dropdown types code and example end -->
			
		</section> <!-- Bootstrap Dropdown types end -->
        
		<!-- Propeller Dropdown -->
		<section class="row component-section">
			
			<!-- dropdown types title and description -->
			<div class="col-md-3">
				<div id="types">
					<h2>Propeller Dropdown</h2>
				</div>
				<p>Propeller Dropdown consists of Bootstrap HTML structure with Propeller customized classes based on material design standards. </p>	
				<p><strong>Types - </strong>Based on the type of content, Propeller Dropdown can be categorized into three types: with header, with divider, and with disabled links.</p>
			</div> <!-- dropdown types title and description end-->
			
			<!--Dropdown types code and example -->
			<div class="col-md-9">
				<div class="component-box">
					
					<!-- dropdown types example  --> 
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth pmd-card-custom-view"> 
								<div class="pmd-card-body dropdown-btn">
									<div class="row">
										<div class="col-md-4">
											<span class="dropdown pmd-dropdown clearfix">
												<button class="btn pmd-ripple-effect btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true">Dropdown with Header <span class="caret"></span></button>
												<ul aria-labelledby="dropdownMenu2" role="menu" class="dropdown-menu">
													<li class="dropdown-header" role="presentation">Dropdown header</li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Action</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Another action</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Something else here</a></li>
													<li class="dropdown-header" role="presentation">Dropdown header</li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Separated link</a></li>
												</ul>
											</span>
										</div>
										<div class="col-md-4">
											<span class="dropdown pmd-dropdown clearfix">
												<button class="btn pmd-ripple-effect btn-primary dropdown-toggle" type="button" id="dropdownMenuDivider" data-toggle="dropdown" aria-expanded="true">Dropdown With Divider <span class="caret"></span></button>
												<ul aria-labelledby="dropdownMenuDivider" role="menu" class="dropdown-menu">
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Action</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Another action</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Something else here</a></li>
													<li class="divider" role="presentation"></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Separated link</a></li>
												</ul>
											</span>
										 </div>
										<div class="col-md-4">
											<span class="dropdown pmd-dropdown clearfix">
												<button class="btn pmd-ripple-effect btn-primary dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-expanded="true">Dropdown with disabled link <span class="caret"></span></button>
												<ul aria-labelledby="dropdownMenu3" role="menu" class="dropdown-menu">
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Regular link</a></li>
													<li class="disabled" role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Disabled link</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Another link</a></li>
												</ul>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- dropdown types example end -->
				
				</div>
			</div> <!--Dropdown types code and example end -->
			
		</section> <!-- Propeller Dropdown end -->
	
		<!-- different direction dropdown -->
		<section class="row component-section">
			
			<!-- different direction dropdown title and description -->
			<div class="col-md-3">
				<div id="direction">
					<h2>Dropdown with Directions</h2>
				</div>
				 <p>Dropdown can start from different directions such as from bottom left, bottom right, top left, top right. Add <code>.dropdown-menu-right</code> to make the dropdown open from bottom-right, <code>.pmd-dropdown-menu-top-left</code> to make the dropdown open from top-left and <code>.pmd-dropdown-menu-top-right</code> to make the dropdown open from top-right. </p>
			</div> <!-- different direction dropdown title and description end-->
			
			<!--different direction dropdown code and example -->
			<div class="col-md-9">
				<div class="component-box">
							
					<!-- different direction dropdown example -->		
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth pmd-card-custom-view"> 
								<div class="pmd-card-body dropdown-btn">
									<div class="row">
										<div class="col-md-3">
											<p>Bottom Left Direction</p>
											<span class="dropdown pmd-dropdown clearfix">
												<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button" id="dropdownMenuBottomLeft" data-toggle="dropdown" aria-expanded="true"><i class="material-icons pmd-sm">more_vert</i></button>
												<ul aria-labelledby="dropdownMenu2" role="menu" class="dropdown-menu">
													<li class="dropdown-header" role="presentation">Dropdown header</li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Action</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Another action</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Something else here</a></li>
													<li class="dropdown-header" role="presentation">Dropdown header</li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Separated link</a></li>
												</ul>
											</span>
										</div>
										<div class="col-md-3">
											<p>Bottom Right Direction</p>		
											<span class="dropdown pmd-dropdown clearfix">
												<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button" id="dropdownMenuBottomRight" data-toggle="dropdown" aria-expanded="true"><i class="material-icons pmd-sm">more_vert</i></button>
												<ul aria-labelledby="dropdownMenuDivider" role="menu" class="dropdown-menu dropdown-menu-right">
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Action</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Another action</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Something else here</a></li>
													<li class="divider" role="presentation"></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Separated link</a></li>
												</ul>
											</span>
										</div>
										<div class="col-md-3">
											<p>Top Left Direction</p>	
											<span class="dropdown pmd-dropdown dropup clearfix">
												<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button" id="dropdownMenuTopLeft" data-toggle="dropdown" aria-expanded="true"><i class="material-icons pmd-sm">more_vert</i></button>
												<ul aria-labelledby="dropdownMenu3" role="menu" class="dropdown-menu pmd-dropdown-menu-top-left">
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Regular link</a></li>
													<li class="disabled" role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Disabled link</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Another link</a></li>
												</ul>
											</span>
										</div>
										<div class="col-md-3">
											<p>Top Right Direction</p>	
											<span class="dropdown pmd-dropdown dropup clearfix">
												<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button" id="dropdownMenuTopRight" data-toggle="dropdown" aria-expanded="true"><i class="material-icons pmd-sm">more_vert</i></button>
												<ul aria-labelledby="dropdownMenu3" role="menu" class="dropdown-menu pmd-dropdown-menu-top-right">
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Regular link</a></li>
													<li class="disabled" role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Disabled link</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Another link</a></li>
												</ul>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- different direction dropdown example end -->          
					
				</div>
			</div> <!--different direction dropdown code and example end-->
		</section> <!-- different direction dropdown end -->
		
		<!-- Dropdown Hover -->
		<section class="row component-section">
			
			<!-- dropdown hover title and description -->
			<div class="col-md-3">
				<div id="hover">
					<h2>Dropdown with Hover event</h2>
				</div>
				<p>In this case, we are showing the dropdown on the hover of a particular button. In order to open the dropdown on hover, add <code>.pmd-dropdown-hover</code> to the button.</p>
			</div> <!-- dropdown hover title and description end -->
			
			<!--Dropdown hover code and example -->
			<div class="col-md-9">
				<div class="component-box">
							
					<!-- dropdown hover example --> 
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth pmd-card-custom-view"> 
								<div class="pmd-card-body dropdown-btn">
									<div class="row">
										<div class="col-md-4">
											<p>Hover with header</p>
											<span class="dropdown pmd-dropdown clearfix">
												<button class="btn pmd-ripple-effect btn-primary dropdown-toggle pmd-dropdown-hover" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true">Dropdown with header <span class="caret"></span></button>
												<ul aria-labelledby="dropdownMenu2" role="menu" class="dropdown-menu">
													<li class="dropdown-header" role="presentation">Dropdown header</li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Action</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Another action</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Something else here</a></li>
													<li class="dropdown-header" role="presentation">Dropdown header</li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Separated link</a></li>
												</ul>
											</span>
										</div>
										<div class="col-md-4">
											<p>Hover with divider</p>
											<span class="dropdown pmd-dropdown clearfix">
												<button class="btn pmd-ripple-effect btn-primary dropdown-toggle pmd-dropdown-hover" type="button" id="dropdownMenuDivider" data-toggle="dropdown" aria-expanded="true">Dropdown with divider <span class="caret"></span></button>
												<ul aria-labelledby="dropdownMenuDivider" role="menu" class="dropdown-menu">
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Action</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Another action</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Something else here</a></li>
													<li class="divider" role="presentation"></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Separated link</a></li>
												</ul>
											</span>
										 </div>
										<div class="col-md-4">
											<p>Hover with disabled menu items</p>
											<span class="dropdown pmd-dropdown clearfix">
												<button class="btn pmd-ripple-effect btn-primary dropdown-toggle pmd-dropdown-hover" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-expanded="true">Dropdown with disabled link <span class="caret"></span></button>
												<ul aria-labelledby="dropdownMenu3" role="menu" class="dropdown-menu">
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Regular link</a></li>
													<li class="disabled" role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Disabled link</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Another link</a></li>
												</ul>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- dropdown hover example end -->
					
				</div>
			</div> <!--Dropdown hover code and example end -->			
		</section> <!--Dropdwon Hover ends -->
		
	</div>
</div>
<!-- Dropdown constructor end -->

<!-- Footer Starts -->
<?php include('include/footer.php'); ?>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<?php include('include/scripts.php'); ?>
<!-- Scripts Ends -->
<!-- Dropdown hover js -->
<script src="http://propeller.in/components/dropdown/js/bootstrap-hover-dropdown.js"></script>
<script>
	// very simple to use!
	$(document).ready(function() {
		$('.pmd-dropdown-hover').dropdownHover().dropdown();
	});
</script>
</body>
</html>