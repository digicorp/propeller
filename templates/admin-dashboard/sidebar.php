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
	
<!-- Sidebar -->
<div class="pmd-content pmd-content-custom" id="content"> 
	
	<div class="container-fluid">
	
	<!-- Title -->
	<h1 class="section-title" id="services">
		<span>Sidebar</span>
	</h1><!-- End Title -->
		
	<!--breadcrum start-->
	<ol class="breadcrumb text-left">
	  <li><a href="index.php">Dashboard</a></li>
	  <li class="active">Sidebar</li>
	</ol><!--breadcrum end-->
		
	<!-- component header -->
	<div class="componant-title-bg">
		<p class="lead">Sidebar is a narrow vertical area that is located alongside the main display area, typically containing related information or navigation options.This structure shows a responsive menu toggling system. When toggled using the button, the menu will appear/disappear.</p>
	</div><!-- component header end -->
		
		<div class="sidebar-pmd-content">
		<!-- basic sidebar -->
		<section class="row component-section"> 
			
			<!-- basic sidebar title and description -->
			<div class="col-md-12">
				<div id="basics">
					<h2>Simple Sidebar</h2>
				</div>
				<p>Simple Sidebar is a basic sidebar menu page layout for Bootstrap websites with off canvas navigation on smaller screen sizes. When toggled using the button, the menu will appear/disappear. When the sidebar opens, it slides in and the page content will be pushed off canvas. To create such sidebar, add <code>.pmd-sidebar-slide-push</code>.</p>				
			</div><!-- basic sidebar title and description end-->
			 
			
			<!-- basic sidebar code and example -->
			<div class="col-md-12">
				<div class="component-box"> 						 
					
					<!-- basic sidebar example -->
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth">
								<section class="nav-show" style="position: relative;">
									<iframe src="../components/sidebar/snippets/basic-sidebar-page.html" class="sidebar-iframe"></iframe>
								</section>
							</div>
						</div>
					</div><!-- basic sidebar example end -->						 
					
				</div>
			</div><!-- basic sidebar code and example end-->				 
			
		</section><!-- basic sidebar end-->
		 
		
		<!-- fixed sidebar -->
		<section class="row component-section">
		
			<!-- fixed sidebar title and description -->
			<div class="col-md-12">
				<div id="basics-fixed">
					<h2>Fixed Left Sidebar</h2>
				</div>
				<p>Fixed sidebar is the one in which, when the sidebar is open, it overlaps over the content. To create this sidebar, add <code>.pmd-sidebar-left-fixed</code>.</p>
			</div><!-- fixed sidebar title and description end -->
			
			<!-- fixed sidebar code and example -->
			<div class="col-md-12">
				<div class="component-box">
					
					<!-- fixed sidebar example -->
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth">
								<section class="nav-show" style="position: relative;">
									<iframe src="../components/sidebar/snippets/fixed-sidebar-page.html" class="sidebar-iframe"></iframe>
								</section>
							</div>
						</div>
					</div><!-- fixed sidebar example end-->
					
				</div>
			</div><!-- fixed sidebar code and example end-->
			
		</section><!-- fixed sidebar end-->
		
		<!-- right sidebar -->
		<section class="row component-section">
		
			<!-- right sidebar title and description -->
			<div class="col-md-12">
				<div id="right">
					<h2>Fixed Right Sidebar</h2>
				</div>
				<p>You can also create a secondary sidebar, that is, a right sidebar for tabs, palettes, or secondary actions. To create such a sidebar, add <code>.pmd-sidebar-right-fixed</code>. </p>
			</div><!-- right sidebar title and description end -->
			
			<!-- right sidebar code and example -->
			<div class="col-md-12">
				<div class="component-box">
				
					<!-- right sidebar example -->
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth">
								<section class="nav-show" style="position: relative;">
									<iframe src="../components/sidebar/snippets/right-sidebar-page.html" class="sidebar-iframe"></iframe>
								</section>
							</div>
						</div>
					</div> <!-- right sidebar example end -->
				
				</div>
			</div><!-- right sidebar code and example end-->
			
		</section><!-- right sidebar end --> 
		
		
		<!-- default open sidebar -->
		<section class="row component-section">
		
			<!-- default open sidebar title and description -->
			<div class="col-md-12">
				<div id="default-open">
					<h2>Default open Sidebar</h2>
					<p>On load you can show both left and right sidebars visible. Add <code>.open</code> along with the <code>.sidebar</code> to the sidebar in order to make it open by default.</p>
				</div>
			</div><!-- default open sidebar title and description end -->
			
			<!-- default open sidebar code and example -->
			<div class="col-md-12">
				<div class="component-box">
					
					<!-- default open sidebar example -->
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth">
								<section class="nav-show" style="position: relative;">
									<iframe src="../components/sidebar/snippets/open-sidebar-page.html" class="sidebar-iframe"></iframe>
								</section>
							</div>
						</div>
					</div> <!-- default open sidebar example end-->
				</div>
			</div> <!-- default open sidebar code and example end -->
			
		</section> <!-- default open sidebar ends -->
		
		</div>		
		
	</div>
</div><!--Sidebar constructor end --> 
	
<!-- Footer Starts -->
<?php include('include/footer.php'); ?>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<?php include('include/scripts.php'); ?>
<!-- Scripts Ends -->

</body>
</html>