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
	
<!--Form-->
<div class="pmd-content pmd-content-custom" id="content"> 
	
	

	<div class="container-fluid">
	
		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Select2</span>
		</h1><!-- End Title -->
			
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.php">Dashboard</a></li>
		  <li class="active">Select2</li>
		</ol><!--breadcrum end-->
		
		<!--component header -->
		<div class="componant-title-bg"> 
			<p class="lead">The Select2 widget provides a styleable select element replacement. It acts as a proxy back to the original select element, controlling its state for form submission or serialization.
			It duplicates and extends the functionality of a native HTML select element to overcome the limitations of the native control.</p>
			<p class="lead">We have used Select2 plugin as a reference which we have then customized based on our Propeller theme.</p>
			<p class="lead">For more options and documentation, visit : <a href="http://select2.github.io/" target="_blank">Select2</a></p>
		</div><!--end component header-->
		
		<!-- Selectbox -->
		<section class="row component-section">
		
			<!-- selectbox title and description -->
			<div class="col-md-3">
				<div id="selectbox">
					<h2>Propeller Select2</h2>
				</div>
				<p>To create an enhanced simple select, add <code>.pmd-select2</code> to the select tag.</p>
			</div> <!-- selectbox title and description end-->
			
			<!-- selectbox code and example -->
			<div class="col-md-9">
				<div class="component-box">
				
					<!-- selectbox example -->
					<div class="row toggle-button-custom">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body"> 
									<!--Simple select -->
									<div class="form-group pmd-textfield pmd-textfield-floating-label">
										<label>Simple Select</label>
										<select class="select-simple form-control pmd-select2">
											<!--<option></option> -->
											<option>Dallas Cowboys</option>
											<option>New York Giants</option>
											<option>Philadelphia Eagles</option>
											<option>Washington Redskins</option>
											<option>Chicago Bears</option>
											<option>Detroit Lions</option>
											<option>Green Bay Packers</option>
											<option>Minnesota Vikings</option>
											<option>Arizona Cardinals</option>
											<option>St. Louis Rams</option>
											<option>San Francisco 49ers</option>
											<option>Seattle Seahawks</option>
											<option>Baltimore Ravens</option>
											<option>Cincinnati Bengals</option>
											<option>Cleveland Browns</option>
											<option>Pittsburgh Steelers</option>
											<option>Houston Texans</option>
											<option>Indianapolis Colts</option>
											<option>Jacksonville Jaguars</option>
											<option>Tennessee Titans</option>
											<option>Denver Broncos</option>
											<option>Kansas City Chiefs</option>
											<option>Oakland Raiders</option>
											<option>San Diego Chargers</option>
										</select>
									</div>
									
								</div>
							</div>
							<p class="component-desc">Propeller Simple select</p>
						</div>
					</div> <!-- selectbox example end-->
				</div>
                
                <div class="component-box">
				
					<!-- selectbox example -->
					<div class="row toggle-button-custom">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body"> 
									
									<!--Simple Select with Search-->
									<div class="form-group pmd-textfield pmd-textfield-floating-label">
										<label>Simple Select with Search</label>
										<select class="select-with-search pmd-select2 form-control">
											<!--<option></option> -->
											<option>Dallas Cowboys</option>
											<option>New York Giants</option>
											<option>Philadelphia Eagles</option>
											<option>Washington Redskins</option>
											<option>Chicago Bears</option>
											<option>Detroit Lions</option>
											<option>Green Bay Packers</option>
											<option>Minnesota Vikings</option>
											<option>Arizona Cardinals</option>
											<option>St. Louis Rams</option>
											<option>San Francisco 49ers</option>
											<option>Seattle Seahawks</option>
											<option>Baltimore Ravens</option>
											<option>Cincinnati Bengals</option>
											<option>Cleveland Browns</option>
											<option>Pittsburgh Steelers</option>
											<option>Houston Texans</option>
											<option>Indianapolis Colts</option>
											<option>Jacksonville Jaguars</option>
											<option>Tennessee Titans</option>
											<option>Denver Broncos</option>
											<option>Kansas City Chiefs</option>
											<option>Oakland Raiders</option>
											<option>San Diego Chargers</option>
										</select>
									</div>
								</div>
							</div>
							<p class="component-desc">Simple select2 with search</p>
						</div>
					</div> <!-- selectbox example end-->
				</div>
			</div> <!-- selectbox code and example end-->
		</section>	

		<section class="row component-section">

			<!-- selectbox title and description -->
			<div class="col-md-3">
				<div id="selectbox">
					<h2>Select2 with Multiple Tags</h2>
				</div>
				<p>For selectbox with multiple tags add <code>.pmd-select2-tags</code> to the <code>select</code> tag.</p>
			</div> <!-- selectbox title and description end-->
		
			<div class="col-md-9">	
				<div class="component-box">
				
				<div class="row toggle-button-custom">
					<div class="col-md-12">
						<div class="pmd-card pmd-z-depth pmd-card-custom-form">
							<div class="pmd-card-body"> 
								<!--Select Multiple Tags -->
								<div class="form-group pmd-textfield pmd-textfield-floating-label">
									<label>Select Multiple Tags</label>
									<select class="form-control select-tags pmd-select2-tags" multiple>
										<option>Dallas Cowboys</option>
										<option>New York Giants</option>
										<option>Philadelphia Eagles</option>
										<option>Washington Redskins</option>
										<option>Chicago Bears</option>
										<option>Detroit Lions</option>
										<option>Green Bay Packers</option>
										<option>Minnesota Vikings</option>
										<option>Arizona Cardinals</option>
										<option>St. Louis Rams</option>
										<option>San Francisco 49ers</option>
										<option>Seattle Seahawks</option>
										<option>Baltimore Ravens</option>
										<option>Cincinnati Bengals</option>
										<option>Cleveland Browns</option>
										<option>Pittsburgh Steelers</option>
										<option>Houston Texans</option>
										<option>Indianapolis Colts</option>
										<option>Jacksonville Jaguars</option>
										<option>Tennessee Titans</option>
										<option>Denver Broncos</option>
										<option>Kansas City Chiefs</option>
										<option>Oakland Raiders</option>
										<option>San Diego Chargers</option>
									</select>
								</div>
								
							</div>
						</div>
						<p class="component-desc">Select Multiple Tags and Select &amp; Add Multiple Tags</p>
					</div>
				</div>
			</div>
			</div>
	
		</section> <!-- Selectbox end --> 		

		<section class="row component-section">

			<!-- selectbox title and description -->
			<div class="col-md-3">
				<div id="select2-add-tag">
					<h2>Select2 with Search and Custom Tags</h2>
				</div>
				<p>To create custom multiple tags add <code>.pmd-select2-tags</code> to the select tag.</p>
			</div> <!-- selectbox title and description end-->
		
			<div class="col-md-9">	
				<div class="component-box">
				
				<div class="row toggle-button-custom">
					<div class="col-md-12">
						<div class="pmd-card pmd-z-depth pmd-card-custom-form">
							<div class="pmd-card-body"> 
								
								<!--Select &amp; Add Multiple Tags -->
								<div class="form-group pmd-textfield pmd-textfield-floating-label">
									<label>Select &amp; Add Multiple Tags</label>
									<select class="form-control select-add-tags pmd-select2-tags" multiple>
										<option>Dallas Cowboys</option>
										<option>New York Giants</option>
										<option>Philadelphia Eagles</option>
										<option>Washington Redskins</option>
										<option>Chicago Bears</option>
										<option>Detroit Lions</option>
										<option>Green Bay Packers</option>
										<option>Minnesota Vikings</option>
										<option>Arizona Cardinals</option>
										<option>St. Louis Rams</option>
										<option>San Francisco 49ers</option>
										<option>Seattle Seahawks</option>
										<option>Baltimore Ravens</option>
										<option>Cincinnati Bengals</option>
										<option>Cleveland Browns</option>
										<option>Pittsburgh Steelers</option>
										<option>Houston Texans</option>
										<option>Indianapolis Colts</option>
										<option>Jacksonville Jaguars</option>
										<option>Tennessee Titans</option>
										<option>Denver Broncos</option>
										<option>Kansas City Chiefs</option>
										<option>Oakland Raiders</option>
										<option>San Diego Chargers</option>
									</select>
								</div>
							</div>
						</div>
						<p class="component-desc">Select Multiple Tags and Select &amp; Add Multiple Tags</p>
					</div>
				</div>
			</div>
			</div>
	
		</section> <!-- Selectbox end --> 		
		 
	</div> <!--container end --> 
	
</div> <!--Form-->
 
<!-- Footer Starts -->
<?php include('include/footer.php'); ?>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<?php include('include/scripts.php'); ?>
<!-- Scripts Ends -->
<!-- Select2 js-->
<script type="text/javascript" src="../../components/select2/js/select2.full.js"></script>

<!-- Propeller Select2 -->
<script type="text/javascript">
	$(document).ready(function() {
		<!-- Simple Selectbox -->
		$(".select-simple").select2({
			theme: "bootstrap",
			minimumResultsForSearch: Infinity,
		});
		<!-- Selectbox with search -->
		$(".select-with-search").select2({
			theme: "bootstrap"
		});
		<!-- Select Multiple Tags -->
		$(".select-tags").select2({
			tags: false,
			theme: "bootstrap",
		});
		<!-- Select & Add Multiple Tags -->
		$(".select-add-tags").select2({
			tags: true,
			theme: "bootstrap",
		});
	});
</script>
<script type="text/javascript" src="../../components/select2/js/pmd-select2.js"></script>
<script>
	$(document).ready(function() {
		var sPath=window.location.pathname;
		var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
		$(".pmd-sidebar-nav").each(function(){
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").addClass("open");
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").find('.dropdown-menu').css("display", "block");
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").find('a.dropdown-toggle').addClass("active");
			$(this).find("a[href='"+sPage+"']").addClass("active");
		});
	});
</script>
</body>
</html>