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
	
<!-- Tab -->
<div id="content" class="pmd-content">

	<div class="container-fluid"> 

		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Tab</span>
		</h1><!-- End Title -->
		
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.php">Dashboard</a></li>
		  <li class="active">Tab</li>
		</ol><!--breadcrum end-->

		<!-- Component header -->
		<div class="componant-title-bg"> 	
			<p class="lead">Tab is a HTML component that allows multiple documents or panels to be contained within a single window, by using navigational widget for switching between sets of documents thus making it easy                    to explore and switch between different views or functional aspects of an app or to browse categorized data sets.
			</p>
		</div><!-- end component header -->
	
		<!-- Basic Bootstrap tab -->
		<section class="row component-section">
			
			<!-- Basic Bootstrap tab title and description -->
			<div class="col-md-3">
				<div id="bootstrap-basic-tab">
					<h2>Bootstrap Basic Tabs</h2>
				</div>
				<p>Bootstrap Tabs add quick, dynamic tab functionality to transition through panes of local content, even via dropdown menus.</p>
			</div> <!-- Basic Bootstrap tab title and description end -->
			
			<!-- Basic Bootstrap tab example and code -->
			<div class="col-md-9 col-sm-12"> 
				<div class="component-box">
					<!--Basic Bootstrap tab example -->
					<div> 
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#bootstrap-home" aria-controls="home" role="tab" data-toggle="tab">Default</a></li>
							<li role="presentation"><a href="#bootstrap-about" aria-controls="about" role="tab" data-toggle="tab">Fixed</a></li>
							<li role="presentation"><a href="#bootstrap-work" aria-controls="work" role="tab" data-toggle="tab">Scrollable</a></li>
						</ul>
						<div class="pmd-card">
							<div class="pmd-card-body">
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tablist" class="tab-pane active" id="bootstrap-home">A tab provides the affordance for displaying grouped content. A tab label succinctly describes the tab’s associated grouping of content.</div>
									<div role="tablist" class="tab-pane" id="bootstrap-about">Fixed tabs have equal width, calculated either as the view width divided by the number of tabs, or based on the widest tab label. To navigate between fixed tabs, touch the tab or swipe the content area left or right.</div>
									<div role="tablist" class="tab-pane" id="bootstrap-work">To navigate between scrollable tabs, touch the tab or swipe the content area left or right. To scroll the tabs without navigating, swipe the tabs left or right.</div>
								</div>
							</div>
						</div>
					</div> <!--Basic Bootstrap tab example end-->
					
				</div>
			</div> <!-- end Basic Bootstrap example and code -->
			
		</section><!-- end Basic Bootstrap tab --> 
		
		<!-- Default tab -->
		<section class="row component-section">
			
			<!-- Default tab title and description -->
			<div class="col-md-3">
				<div id="propeller-basic-tab">
					<h2>Propeller Basic Tabs</h2>
				</div>
				<p>Propeller Tabs consist of Bootstrap HTML structure with Propeller customized classes and jQuery based on material design standards. Add <code>.pmd-tabs</code> to nav tag for applying Propeller Theme to the tabs. <code>.pmd-tabs-bg</code> is used to add a background to the tabs.</p>
			</div> <!-- Default tab title and description end -->
			
			<!-- Default tab example and code -->
			<div class="col-md-9 col-sm-12"> 
				<div class="component-box">
					<!--Default tab example -->
					<div class="pmd-card pmd-z-depth"> 
						<div class="pmd-tabs pmd-tabs-bg">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Default</a></li>
								<li role="presentation"><a href="#about" aria-controls="about" role="tab" data-toggle="tab">Fixed</a></li>
								<li role="presentation"><a href="#work" aria-controls="work" role="tab" data-toggle="tab">Scrollable</a></li>
							</ul>
						</div>
						<div class="pmd-card-body">
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="home">A tab provides the affordance for displaying grouped content. A tab label succinctly describes the tab’s associated grouping of content.</div>
								<div role="tabpanel" class="tab-pane" id="about">Fixed tabs have equal width, calculated either as the view width divided by the number of tabs, or based on the widest tab label. To navigate between fixed tabs, touch the tab or swipe the content area left or right.</div>
								<div role="tabpanel" class="tab-pane" id="work">To navigate between scrollable tabs, touch the tab or swipe the content area left or right. To scroll the tabs without navigating, swipe the tabs left or right.</div>
							</div>
						</div>
					</div> <!--Default tab example end-->
					
				</div>
			</div> <!-- end Default example and code -->
			
		</section><!-- end default tab --> 
		
        <!-- Fixed tab -->
		<section class="row component-section">
			
			<!-- Fixed tab title and description -->
			<div class="col-md-3 col-sm-12">
				<div id="fixed-tab">
					<h2>Equal Width Tabs</h2>
				</div>
				<p>Equal Width Tabs have same width, calculated either as the view width divided by the number of tabs, or based on the widest tab label. Add <code>.nav-justified</code> to the list to create fixed tabs.</p>
			</div> <!-- end fixed title tab and description -->
			
			<!-- Fixed tab example and code -->
			<div class="col-md-9 col-sm-12"> 
				<div class="component-box">
					<!--Fixed tab example -->
                    <div class="pmd-card pmd-z-depth">
					  <div class="pmd-tabs pmd-tabs-bg">
					  	  <div class="pmd-tab-active-bar"></div>
						  <ul role="tablist" class="nav nav-tabs nav-justified">
							<li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="home" href="#home-fixed">Default</a></li>
							<li role="presentation"><a data-toggle="tab" role="tab" aria-controls="profile" href="#about-fixed">Fixed</a></li>
							<li role="presentation"><a data-toggle="tab" role="tab" aria-controls="messages" href="#work-fixed">Scrollable</a></li>
						  </ul>
					  </div>
					  <div class="pmd-card-body">
						  <div class="tab-content">
						  	<div role="tabpanel" class="tab-pane active" id="home-fixed">A tab provides the affordance for displaying grouped content. A tab label succinctly describes the tab’s associated grouping of content.</div>
							<div role="tabpanel" class="tab-pane" id="about-fixed">Fixed tabs have equal width, calculated either as the view width divided by the number of tabs, or based on the widest tab label. To navigate between fixed tabs, touch the tab or swipe the content area left or right.</div>
							<div role="tabpanel" class="tab-pane" id="work-fixed">To navigate between scrollable tabs, touch the tab or swipe the content area left or right. To scroll the tabs without navigating, swipe the tabs left or right.</div>
						  </div>
					  </div>
					</div> <!--Fixed tab example end-->
					
				</div>
			</div> <!-- end Fixed example and code -->
			
		</section> <!-- end fixed tab  -->
         
		
		<!-- Scrollable tab -->
		<section class="row component-section">
			
			<!-- Scrollable tab title and description -->
			<div class="col-md-3 col-sm-12">
				<div id="scrollable-tab">
					<h2>Scrollable Tabs</h2>
				</div>
				<p>Scrollable tabs display a subset of tabs at any given moment. They can contain longer tab labels and a larger number of tabs than fixed tabs. Add <code>.pmd-tabs-scroll</code> to the nav tag to create scrollable tabs. Also, a div with <code>.pmd-tabs-scroll-container</code> needs to be added.</p>
			</div> <!-- end scrollable tab title and description -->
			
			<!-- scrollable tab example and code -->
			<div class="col-md-9 col-sm-12"> 
				<div class="component-box">
					<!--Scrollable tab example -->
					<div class="pmd-card pmd-z-depth"> 
						<div class="pmd-tabs pmd-tabs-scroll pmd-tabs-bg">
							<div class="pmd-tabs-scroll-left"><i class="material-icons pmd-sm">chevron_left</i></div>
						    <div class="pmd-tabs-scroll-container pmd-z-depth" style="cursor: grab;">
								<div class="pmd-tab-active-bar"></div>
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#home-scrollable" aria-controls="home" role="tab" data-toggle="tab">Default</a></li>
									<li role="presentation"><a href="#about-scrollable" aria-controls="about" role="tab" data-toggle="tab">Fixed</a></li>
									<li role="presentation"><a href="#work-scrollable" aria-controls="work" role="tab" data-toggle="tab">Scrollable</a></li>
									<li role="presentation"><a href="#home-scrollable" aria-controls="home" role="tab" data-toggle="tab">Default</a></li>
									<li role="presentation"><a href="#about-scrollable" aria-controls="about" role="tab" data-toggle="tab">Fixed</a></li>
									<li role="presentation"><a href="#work-scrollable" aria-controls="work" role="tab" data-toggle="tab">Scrollable</a></li>
									<li role="presentation"><a href="#home-scrollable" aria-controls="home" role="tab" data-toggle="tab">Default</a></li>
									<li role="presentation"><a href="#about-scrollable" aria-controls="about" role="tab" data-toggle="tab">Fixed</a></li>
									<li role="presentation"><a href="#work-scrollable" aria-controls="work" role="tab" data-toggle="tab">Scrollable</a></li>
									<li role="presentation"><a href="#home-scrollable" aria-controls="home" role="tab" data-toggle="tab">Default</a></li>
									<li role="presentation"><a href="#about-scrollable" aria-controls="about" role="tab" data-toggle="tab">Fixed</a></li>
									<li role="presentation"><a href="#work-scrollable" aria-controls="work" role="tab" data-toggle="tab">Scrollable</a></li>
									<li role="presentation"><a href="#home-scrollable" aria-controls="home" role="tab" data-toggle="tab">Default</a></li>
									<li role="presentation"><a href="#about-scrollable" aria-controls="about" role="tab" data-toggle="tab">Fixed</a></li>
									<li role="presentation"><a href="#work-scrollable" aria-controls="work" role="tab" data-toggle="tab">Scrollable</a></li>
								</ul>
							</div>
    						<div class="pmd-tabs-scroll-right"><i class="material-icons pmd-sm">chevron_right</i></div>	
						</div>
						<div class="pmd-card-body">
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="home-scrollable">A tab provides the affordance for displaying grouped content. A tab label succinctly describes the tab’s associated grouping of content.</div>
								<div role="tabpanel" class="tab-pane" id="about-scrollable">Fixed tabs have equal width, calculated either as the view width divided by the number of tabs, or based on the widest tab label. To navigate between fixed tabs, touch the tab or swipe the content area left or right.</div>
								<div role="tabpanel" class="tab-pane" id="work-scrollable">To navigate between scrollable tabs, touch the tab or swipe the content area left or right. To scroll the tabs without navigating, swipe the tabs left or right.</div>
							</div>
						</div>
					</div> <!--Scrollable tab example end-->
                    		
				</div>
			</div> <!-- end Scrollable example and code -->
			
		</section> <!-- end scrollable tab  --> 
        
		<!-- Tab with Dropdown -->
		<section class="row component-section">	
			
            <!-- Tab with Dropdown title and description -->
			<div class="col-md-3 col-sm-12">
				<div id="tab-with-dropdown">
					<h2>Tabs with Dropdown</h2>
				</div>
				<p>Add <a href="dropdown.php" target="_blank">Propeller's Dropdown menu</a> to make it a part of tab. To do so create a drop down list within the tablist and add <code>.dropdown-menu</code> to it.</p>
			</div> <!-- end Tab with Dropdown title and description -->
			
			<!-- Tab with Dropdown example and code -->
			<div class="col-md-9 col-sm-12"> 
				<div class=" component-box">
					<!--Tab with Dropdown example -->
					<div class="pmd-card pmd-z-depth dropdown-tab"> 
						<div class="pmd-tabs pmd-tabs-bg">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#home-dropdown" aria-controls="home" role="tab" data-toggle="tab">Default</a></li>
								<li role="presentation"><a href="#about-dropdown" aria-controls="about" role="tab" data-toggle="tab">Fixed</a></li>
								<li role="presentation"><a href="#work-dropdown" aria-controls="work" role="tab" data-toggle="tab">Scrollable</a></li>
								<li class="dropdown pmd-dropdown" role="presentation"> <a aria-expanded="false" role="button" href="javascript:void(0);" data-toggle="dropdown" class="dropdown-toggle"> More <span class="caret"></span> </a>
									<ul role="menu" class="dropdown-menu">
										<li><a href="javascript:void(0);">Profile</a></li>
										<li><a href="javascript:void(0);">Messages</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="pmd-card-body">
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="home-dropdown">A tab provides the affordance for displaying grouped content. A tab label succinctly describes the tab’s associated grouping of 
                                content.</div>
								<div role="tabpanel" class="tab-pane" id="about-dropdown">Fixed tabs have equal width, calculated either as the view width divided by the number of tabs, or based on the widest tab label. To 
                                navigate between fixed tabs, touch the tab or swipe the content area left or right.</div>
								<div role="tabpanel" class="tab-pane" id="work-dropdown">To navigate between scrollable tabs, touch the tab or swipe the content area left or right. To scroll the tabs without navigating, swipe the                                tabs left or right.</div>
							</div>
						</div>
					</div> <!--Tab with Dropdown example end-->
                    	
				</div>
			</div> <!-- end Tab with Dropdown example and code -->
		</section> <!-- end dropdown tab  -->
		
		<!-- without background tab -->
		<section class="row component-section">
			
			<!-- without background tab title and description -->
			<div class="col-md-3 col-sm-12">
				<div id="tab-without-background">
					<h2>Tabs without background</h2>
				</div>
				<p>Remove <code>.pmd-tabs-bg</code> to remove the background color/background image.</p>
			</div> <!-- without background tab title and description end-->
			
			<!-- without background tab code and example -->
			<div class="col-md-9 col-sm-12">
            	<div class=" component-box"> 
					<!--without background tab example -->
					<div class="pmd-card pmd-z-depth"> 
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#default" aria-controls="default" role="tab" data-toggle="tab">Default</a></li>
								<li role="presentation"><a href="#fixed" aria-controls="fixed" role="tab" data-toggle="tab">Fixed</a></li>
								<li role="presentation"><a href="#scrollable" aria-controls="scrollable" role="tab" data-toggle="tab">Scrollable</a></li>
							</ul>
						</div>
						<div class="pmd-card-body">
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="default">A tab provides the affordance for displaying grouped content. A tab label succinctly describes the tab’s associated grouping of content.</div>
								<div role="tabpanel" class="tab-pane" id="fixed">Fixed tabs have equal width, calculated either as the view width divided by the number of tabs, or based on the widest tab label. To navigate between fixed tabs, touch the tab or swipe the content area left or right.</div>
								<div role="tabpanel" class="tab-pane" id="scrollable">To navigate between scrollable tabs, touch the tab or swipe the content area left or right. To scroll the tabs without navigating, swipe the tabs left or right.</div>
							</div>
						</div>
					</div> <!--without background tab example end -->
            	</div>
                    
			</div> <!-- without background tab code and example end -->
			
		</section> <!-- end without background tab -->
	</div>
</div><!--Tab constructor End--> 
	
<!-- Footer Starts -->
<?php include('include/footer.php'); ?>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<?php include('include/scripts.php'); ?>
<!-- Scripts Ends -->

<script type="text/javascript">
$(document).ready( function() {
	$('.pmd-tabs').pmdTab();
});
</script>

</body>
</html>