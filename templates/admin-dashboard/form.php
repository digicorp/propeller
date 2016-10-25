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
	<div class="container-fluid full-width-container">
	
		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Form Examples</span>
		</h1><!-- End Title -->
			
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.php">Dashboard</a></li>
		  <li class="active">Form Examples</li>
		</ol><!--breadcrum end-->
	
		<div class="section section-custom billinfo"> 
			<!--section-title -->
			<h2>Basic Form</h2><!--section-title end -->
			<!-- section content start-->
			<form id="validationForm" action="" method="post">
			<div class="pmd-card pmd-z-depth">
				<div class="pmd-card-body">
					<div class="group-fields clearfix row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="regular1" class="control-label">
									Name*
								</label>
								<input type="text" id="regular1" class="form-control">
							</div>
						</div>
					</div>
					<div class="group-fields clearfix row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="form-group pmd-textfield pmd-textfield-floating-label">       
								<label>City*</label>
								<select class="select-simple form-control pmd-select2">
									<option></option>
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
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="form-group pmd-textfield pmd-textfield-floating-label">       
								<label>State*</label>
								<select class="select-simple form-control pmd-select2">
									<option></option>
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
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="regular1" class="control-label">
									Zip Code*
								</label>
								<input type="text" id="regular1" class="form-control">
							</div>
						</div>
					</div>
					<div class="group-fields clearfix row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
							   <label for="regular1" class="control-label">
								 Phone*
							   </label>
							   <input type="text" id="regular1" class="form-control">
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						   <div class="form-group pmd-textfield pmd-textfield-floating-label">
							   <label for="regular1" class="control-label">
								 Email*
							   </label>
							   <input type="text" id="regular1" class="form-control">
							</div>
						</div>
					</div>
					<div class="group-fields clearfix row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
							  <label class="control-label">Address</label>
							  <textarea required class="form-control"></textarea>
							</div>
						</div>
					</div>
					<div class="group-fields clearfix row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="checkbox pmd-default-theme">
								<label class="pmd-checkbox checkbox-pmd-ripple-effect">
									<input type="checkbox" value="">
									<span>Save Details</span>
								</label>
							</div>
						</div>
					</div>
				</div>		
				<div class="pmd-card-actions">
					<a href="javascript:void(0);" class="btn btn-primary next">Submit</a>
					<a href="javascript:void(0);" class="btn btn-default">Cancel</a>
				</div>
			</div> <!-- section content end -->  
			</form>
		</div>
		
		<div class="section section-custom billinfo"> 
			<!--section-title -->
			<h2>Horizontal Form</h2><!--section-title end -->
			<!-- section content start-->
			<div class="pmd-card pmd-z-depth">
				<div class="pmd-card-body">	
					<form class="form-horizontal" role="form">
						<div class="form-group pmd-textfield">
							<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input class="form-control input-sm" id="inputEmail3" placeholder="Email" type="email">
							</div>
						</div>
						<div class="form-group pmd-textfield">
							<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
							<div class="col-sm-10">

								<div class="fg-line">
									<input class="form-control input-sm" id="inputPassword3" placeholder="Password" type="password">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
									<label class="pmd-checkbox pmd-checkbox-ripple-effect">
										<input value="" type="checkbox">
										<i class="input-helper"></i>
										Remember me
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary pmd-checkbox-ripple-effect">Sign in</button>
							</div>
						</div>
					</form>
				</div>
			</div> <!-- section content end -->  
		</div>
		
		<div class="section section-custom billinfo"> 
			<!--section-title -->
			<h2>Inline Form </h2><!--section-title end -->
			<!-- section content start-->
			<div class="pmd-card pmd-z-depth">
					<div class="pmd-card-body">	
						<form class="row" role="form">
							<div class="col-sm-3">
								<div class="form-group pmd-textfield pmd-textfield-floating-label">
									<input class="form-control" id="exampleInputEmail2" type="email" placeholder="Email address">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group pmd-textfield pmd-textfield-floating-label">
									<input class="form-control" id="exampleInputPassword2" type="password" placeholder="Password">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="checkbox">
									<label class="pmd-checkbox pmd-checkbox-ripple-effect">
										<input value="" type="checkbox">
										Remember me
									</label>
								</div>
							</div>
							<div class="col-sm-2">
								<button type="submit" class="btn btn-primary pmd-ripple-effect">Sign in</button>
							</div>
						</form>
					</div>
				</div> <!-- section content end -->  
		</div>
		
		<div class="section section-custom login-card-section"> 
			<!--section-title -->
			<h2>login Form </h2><!--section-title end -->
			<!-- section content start-->
			<div class="pmd-card card-default pmd-z-depth">
				<div class="login-card">
					<form>	
						<div class="pmd-card-title card-header-border text-center">
							<div class="loginlogo">
								<a href="javascript:void(0);"><img src="themes/images/logo-icon.png" alt="Logo"></a>
							</div>
							<h3>Sign In <span>with <strong>PROPELLER</strong></span></h3>
						</div>
						
						<div class="pmd-card-body">
							<div class="alert alert-success" role="alert"> Oh snap! Change a few things up and try submitting again. </div>
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="inputError1" class="control-label pmd-input-group-label">Username</label>
								<div class="input-group">
									<div class="input-group-addon"><i class="material-icons md-dark pmd-sm">perm_identity</i></div>
									<input class="form-control" id="exampleInputAmount" type="text"><span class="pmd-textfield-focused"></span>
								</div>
							</div>
							
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="inputError1" class="control-label pmd-input-group-label">Password</label>
								<div class="input-group">
									<div class="input-group-addon"><i class="material-icons md-dark pmd-sm">lock_outline</i></div>
									<input class="form-control" id="exampleInputAmount" type="text"><span class="pmd-textfield-focused"></span>
								</div>
							</div>
						</div>
						<div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
							<div class="form-group clearfix">
								<div class="checkbox pull-left">
									<label class="pmd-checkbox checkbox-pmd-ripple-effect">
										<input checked="" value="" type="checkbox">
										<span class="pmd-checkbox-label">&nbsp;</span><span class="pmd-checkbox"> Remember me</span>
									</label>
								</div>
								<span class="pull-right forgot-password">
									<a href="javascript:void(0);">Forgot password?</a>
								</span>
							</div>
							<a href="index.php" type="button" class="btn pmd-ripple-effect btn-primary btn-block">Login</a>
							<p class="redirection-link">Don't have an account? <a href="javascript:void(0);" class="login-register">Sign Up</a>. </p>
						</div>
						
					</form>
				</div>
				
				<div class="register-card">
					<div class="pmd-card-title card-header-border text-center">
						<div class="loginlogo">
							<a href="javascript:void(0);"><img src="themes/images/logo-icon.png" alt="Logo"></a>
						</div>
						<h3>Sign Up <span>with <strong>PROPELLER</strong></span></h3>
					</div>
					<form>	
					  <div class="pmd-card-body">
					  
						<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="inputError1" class="control-label pmd-input-group-label">Username</label>
								<div class="input-group">
									<div class="input-group-addon"><i class="material-icons md-dark pmd-sm">perm_identity</i></div>
									<input class="form-control" id="exampleInputAmount" type="text"><span class="pmd-textfield-focused"></span>
								</div>
							</div>
							
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="inputError1" class="control-label pmd-input-group-label">Email address</label>
								<div class="input-group">
									<div class="input-group-addon"><i class="material-icons md-dark pmd-sm">email</i></div>
									<input class="form-control" id="exampleInputAmount" type="text"><span class="pmd-textfield-focused"></span>
								</div>
							</div>
							
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="inputError1" class="control-label pmd-input-group-label">Password</label>
								<div class="input-group">
									<div class="input-group-addon"><i class="material-icons md-dark pmd-sm">lock_outline</i></div>
									<input class="form-control" id="exampleInputAmount" type="text"><span class="pmd-textfield-focused"></span>
								</div>
							</div>
					  </div>
					  
					  <div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
						<a href="index.php" type="button" class="btn pmd-ripple-effect btn-primary btn-block">Sign Up</a>
						<p class="redirection-link">Already have an account? <a href="javascript:void(0);" class="register-login">Sign In</a>. </p>
					  </div>
					</form>
				</div>
				
				<div class="forgot-password-card">
					<form>	
					  <div class="pmd-card-title card-header-border text-center">
						<div class="loginlogo">
							<a href="javascript:void(0);"><img src="themes/images/logo-icon.png" alt="Logo"></a>
						</div>
						<h3>Forgot password?<br><span>Submit your email address and we'll send you a link to reset your password.</span></h3>
					</div>
					  <div class="pmd-card-body">
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="inputError1" class="control-label pmd-input-group-label">Email address</label>
								<div class="input-group">
									<div class="input-group-addon"><i class="material-icons md-dark pmd-sm">email</i></div>
									<input class="form-control" id="exampleInputAmount" type="text"><span class="pmd-textfield-focused"></span>
								</div>
							</div>
						</div>
					
					  <div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
						<a href="index.php" type="button" class="btn pmd-ripple-effect btn-primary btn-block">Submit</a>
						<p class="redirection-link">Already registered? <a href="javascript:void(0);" class="register-login">Sign In</a></p>
					  </div>
					</form>
				</div>
			</div>
			<!-- section content end -->  
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