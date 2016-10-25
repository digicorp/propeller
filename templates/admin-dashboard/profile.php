<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Propeller_Admin_Dashboard">
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
	<div class="container-fluid full-width-container about">
		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Profile</span>
		</h1><!-- End Title -->
	
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.php">Dashboard</a></li>
		  <li class="active">Profile</li>
		</ol><!--breadcrum end-->
	
		<div class="page-content profile-edit section-custom">
			<div class="pmd-card pmd-z-depth">
				<div class="pmd-card-body">
					<div class="row">

						<div data-provides="fileinput" class="fileinput fileinput-new col-lg-3">
							<div data-trigger="fileinput" class="fileinput-preview thumbnail img-circle img-responsive">
								<img src="themes/images/avtar-b.jpg">
							</div>
							<div class="action-button"> 
								<span class="btn btn-default btn-raised btn-file ripple-effect">
									<span class="fileinput-new"><i class="dic-add dic"></i></span>
									<span class="fileinput-exists"><i class="dic-edit dic"></i></span>
									<input type="file" name="...">
								</span> 
								<a data-dismiss="fileinput" class="btn btn-default btn-raised btn-file ripple-effect fileinput-exists" href="javascript:void(0);"><i class="dic-close dic"></i></a>
							</div>
						</div>
						
						<div class="col-lg-9 custom-col-9">
							<h3 class="heading">Personal Information</h3>
							<div class="row">
								<form class="form-horizontal">
								  <fieldset>
										<div class="form-group prousername pmd-textfield">
										  <label class="control-label col-sm-3">Username</label>
										  <div class="col-sm-9">
											<p class="form-control-static"><strong>andrew.dane</strong></p>
										  </div>
										</div>
										<div class="form-group pmd-textfield">
										  <label class="col-sm-3 control-label" for="u_fname">First Name</label>
										  <div class="col-sm-9">
											  <input type="text" class="form-control empty" id="inputEmail" placeholder="">
										  </div>
										</div>
										<div class="form-group pmd-textfield">
										  <label class="col-sm-3 control-label" for="u_fname">Last Name</label>
										  <div class="col-sm-9">
											  <input type="text" class="form-control empty" id="inputEmail" placeholder="">
										  </div>
										</div>
										<div class="form-group pmd-textfield">
										  <label class="col-sm-3 control-label" for="u_fname">Email</label>
										  <div class="col-sm-9">
											  <input type="email" class="form-control empty" value="andrew.dane@xyz.com" id="inputEmail" placeholder="">
										  </div>
										</div>
										<div class="form-group btns margin-bot-30">
										  <div class="col-sm-9 col-sm-offset-3">
											<button type="submit" class="btn btn-primary pmd-ripple-effect">Update</button>
											<button class="btn btn-default btn-link pmd-ripple-effect">Cancel</button>
										  </div>
										</div>
								  </fieldset>
								</form>
							</div>
							<h3 class="heading">Change Password</h3>
							<div class="row">	
								<form class="form-horizontal">
								  <fieldset>
									<div class="form-group pmd-textfield">
										<label class="control-label col-sm-3" for="u_password">Password</label>
										<div class="col-sm-9">
											<input type="password" class="form-control empty" id="inputEmail" value="password">
										</div>
									</div>
									<div class="form-group pmd-textfield">
										<label class="control-label col-sm-3" for="u_password"></label>
										<div class="col-sm-9">
											<input type="password" class="form-control empty" id="inputEmail" value="">
											<span class="help-text">Repeat password</span>
										</div>
									</div>
									<div class="form-group btns">
									  <div class="col-sm-9 col-sm-offset-3">
										<button type="submit" class="btn btn-primary pmd-ripple-effect">Update</button>
										<button class="btn btn-default btn-link pmd-ripple-effect">Cancel</button>
									  </div>
									</div>
								  </fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
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