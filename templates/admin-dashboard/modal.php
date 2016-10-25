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

<!--Dialog-->
<div class="pmd-content pmd-content-custom" id="content">	
	<div class="container-fluid">
	
		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Modal</span>
		</h1><!-- End Title -->
			
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.php">Dashboard</a></li>
		  <li class="active">Modal</li>
		</ol><!--breadcrum end--> 
		
		<!--component header -->
		<div class="componant-title-bg"> 
			<p class="lead">Modal(known as Dialog in Material Design) is a small window that communicates information to the user and prompts them for a response.It inform users about critical information, required to make decisions, or encapsulate multiple tasks within a discrete process.</p>
		</div> <!--component header end -->
		
		<!-- Bootstrap Modal -->
        <section class="row component-section">
			
			<!-- alert title and description -->
			<div class="col-md-3">
				<div id="bootstrap-dialog">
					<h2>Bootstrap Modal</h2>
				</div>
				<p>Bootstrap Modal is streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.</p>
			</div> <!-- alert title and description end-->
			
			<!-- alert code and example -->
			<div class="col-md-9"> 
				<div class="component-box">
					
					<!-- alert Modal example -->
					<div class="row">
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth">
								<div class="pmd-card-body modal-btn">
									<div class="row"> 
										<!-- Simple alert -->
										<div class="col-md-4 col-sm-4"> 
											<button data-target="#bs-dialog" data-toggle="modal" class="btn btn-primary" type="button">Alert</button>
											
											<div tabindex="-1" class="modal fade" id="bs-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-body">
															<p>Alerts inform the user about a situation or action that requires their confirmation or acknowledgement before proceeding.
                                                            They differ slightly in appearance based upon the severity and impact of the message conveyed.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<!-- Alert with title bar -->
										<div class="col-md-4 col-sm-4">
											<button data-target="#complete-dialog" data-toggle="modal" class="btn btn-primary" type="button">Alert with title bar</button>
											<div tabindex="-1" class="modal fade" id="complete-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h2 class="pmd-card-title-text">Use Google's location service?</h2>
														</div>
														<div class="modal-body">
															<p>Let Google help apps determine location. This means sending anonymous location data to Google, even when no apps are running. </p>
														</div>
														<div class="pmd-modal-action pmd-modal-bordered text-right">
															<button data-dismiss="modal" class="btn pmd-btn-flat pmd-ripple-effect btn-primary" type="button">Disagree</button>
															<button data-dismiss="modal" type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-default">Agree</button>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- Alert without title bar -->
										<div class="col-md-4 col-sm-4">
											<button data-target="#alert-dialog" data-toggle="modal" class="btn btn-primary" type="button">Alert without title bar</button>
											
											<div tabindex="-1" class="modal fade" id="alert-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-body"> Would you like to proceed? </div>
														<div class="pmd-modal-action text-right">
															<button data-dismiss="modal"  class="btn pmd-ripple-effect btn-primary pmd-btn-flat" type="button">Save changes</button>
															<button data-dismiss="modal"  class="btn pmd-ripple-effect btn-default pmd-btn-flat" type="button">Discard</button>
														</div>
													</div>
												</div>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div> <!-- alert dialog example end -->
					
				</div>
			</div> <!-- alert code and example end -->
		</section>	
		<!--Bootstrap Dialog-->

		<!-- alert -->
		<section class="row component-section">
			
			<!-- alert title and description -->
			<div class="col-md-3">
				<div id="alert">
					<h2>Propeller Modal</h2>
				</div>
                <p>Propeller Modal consists of Bootstrap HTML and js structure with Propeller customized classes and js functions based on material design standards.</p>
			</div> <!-- alert title and description end-->
			
			<!-- alert code and example -->
			<div class="col-md-9"> 
				<div class="component-box">
					
					<!-- alert dialog example -->
					<div class="row">
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth">
								<div class="pmd-card-body modal-btn">
									<div class="row"> 
										<!-- Simple alert -->
										<div class="col-md-4 col-sm-4"> 
											<button data-target="#simple-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button">Alert</button>
											
											<div tabindex="-1" class="modal fade" id="simple-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-body">
															<p>Alerts inform the user about a situation or action that requires their confirmation or acknowledgement before proceeding.
                                                            They differ slightly in appearance based upon the severity and impact of the message conveyed.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<!-- Alert with title bar -->
										<div class="col-md-4 col-sm-4">
											<button data-target="#complete-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button">Alert with title bar</button>
											
											<div tabindex="-1" class="modal fade" id="complete-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h2 class="pmd-card-title-text">Use Google's location service?</h2>
														</div>
														<div class="modal-body">
															<p>Let Google help apps determine location. This means sending anonymous location data to Google, even when no apps are running. </p>
														</div>
														<div class="pmd-modal-action pmd-modal-bordered text-right">
															<button data-dismiss="modal" class="btn pmd-btn-flat pmd-ripple-effect btn-primary" type="button">Disagree</button>
															<button data-dismiss="modal" type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-default">Agree</button>
														</div>
													</div>
												</div>
											</div>
										</div>
                                        
										<!-- Alert without title bar -->
										<div class="col-md-4 col-sm-4">
											<button data-target="#alert-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button">Alert without title bar</button>
											
											<div tabindex="-1" class="modal fade" id="alert-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-body"> Would you like to proceed? </div>
														<div class="pmd-modal-action text-right">
															<button data-dismiss="modal"  class="btn pmd-ripple-effect btn-primary pmd-btn-flat" type="button">Save changes</button>
															<button data-dismiss="modal"  class="btn pmd-ripple-effect btn-default pmd-btn-flat" type="button">Discard</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div> <!-- alert dialog example end -->
					
				</div>
			</div> <!-- alert code and example end -->
		</section> <!-- alert end --> 		
		
		<!-- Simple List Modal -->
		<section class="row component-section">
			
			<!-- Simple list Modal title and description -->
			<div class="col-md-3">
				<div id="simple-dia">
					<h2>Modal with List</h2>
				</div>
				<p>Create a modal that contain list of various types, such as, a simple list, list with profile view or list with icons. Replace <code>.modal-body</code> with <code>.pmd-modal-list</code> in the contaning &lt;div&gt; of your list for creating Propeller enhanced modal containing list.</p>
			</div> <!-- Simple list Modal title and description end -->
			
			<!-- Simple list Modal code and example -->
			<div class="col-md-9"> 
				<div class="component-box">
					
					<!--Simple List dilog example -->
					<div class="row">
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth">
								<div class="pmd-card-body modal-btn">
									<div class="row">
										<!-- Simple list -->
										<div class="col-md-4 col-sm-4">
											<button data-target="#simple-listing-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button">List</button>
											<div tabindex="-1" class="modal fade" id="simple-listing-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header bordered">
															<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
															<h2 class="pmd-card-title-text">Listing</h2>
														</div>
														<div class="pmd-modal-list">
															<ul class="list-group pmd-list">
																<li class="list-group-item">Cras justo odio</li>
																<li class="list-group-item">Dapibus ac facilisis inDapibus ac facilisis in Dapibus ac facilisis in</li>
																<li class="list-group-item">Morbi leo risus</li>
																<li class="list-group-item">Porta ac consectetur ac</li>
																<li class="list-group-item">Vestibulum at eros</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<!-- Avatar Listing -->
										<div class="col-md-4 col-sm-4">
											<button data-target="#avatar-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button">List with Avatar</button>
											<div tabindex="-1" class="modal fade" id="avatar-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header bordered">
															<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
															<h2 class="pmd-card-title-text">Avatar List</h2>
														</div>
														<div class="pmd-modal-list">
															<ul class="list-group pmd-list-avatar">
																<li class="list-group-item">
																	<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="http://propeller.in/components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
																	<div class="media-body media-middle">Porta ac consectetur ac</div>
																</li>
																<li class="list-group-item">
																	<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="http://propeller.in/components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
																	<div class="media-body media-middle">Dapibus ac facilisis in</div>
																</li>
																<li class="list-group-item">
																	<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="http://propeller.in/components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
																	<div class="media-body media-middle">Porta ac consectetur ac</div>
																</li>
															</ul>
														</div>
														<div class="pmd-modal-action text-right bordered">
															<button data-dismiss="modal"  class="btn pmd-ripple-effect btn-primary pmd-btn-flat" type="button">Cancel</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<!-- Icon Listing -->
										<div class="col-md-4 col-sm-4">
											<button data-target="#listing-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button">List with Icon</button>
											
											<div tabindex="-1" class="modal fade" id="listing-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header bordered">
															<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
															<h2 class="pmd-card-title-text">Icon Listing</h2>
														</div>
														<div class="pmd-modal-list">
															<ul class="list-group pmd-list-icon">
																<li class="list-group-item"> <i class="material-icons media-left pmd-sm">mood</i> <span class="media-body">Cras justo odio</span> </li>
																<li class="list-group-item"><i class="material-icons media-left media-middle">notifications</i>
																	<div class="media-body">Dapibus ac facilisis in</div>
																</li>
																<li class="list-group-item"><i class="material-icons media-left">person_add</i>
																	<div class="media-body">Morbi leo risus</div>
																</li>
																<li class="list-group-item"><i class="material-icons media-left">share</i>
																	<div class="media-body">Porta ac consectetur ac</div>
																</li>
																<li class="list-group-item"><i class="material-icons media-left">drive_eta</i>
																	<div class="media-body">Vestibulum at eros</div>
																</li>
															</ul>
														</div>
														<div class="pmd-modal-action pmd-modal-bordered text-right">
															<button data-dismiss="modal"  class="btn pmd-ripple-effect btn-primary pmd-btn-flat" type="button">Cancel</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div> <!--Simple List Modal example end -->
					
				</div>
			</div> <!-- Simple list Modal code and example end -->
		</section> <!-- Simple List Modal end -->
		
		<!-- Form Dialog -->
		<section class="row component-section">
			
			<!-- Form Dialog title and description -->
			<div class="col-md-3">
				<div id="form">
					<h2>Form Modal</h2>
				</div>
				<p> Create a Modal with a form in it.</p>
			</div> <!-- Form Dialog title and description end -->
			
			<!-- Form Dialog code and example -->
			<div class="col-md-9"> 
				<div class="component-box">
					
					<!--Form dialog example -->
					<div class="row">
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth">
								<div class="pmd-card-body modal-btn">
									<div class="row">
										<div class="col-md-6 col-sm-6"> 
											<button data-target="#form-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button">Form Modal</button>
											
											<div tabindex="-1" class="modal fade" id="form-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header bordered">
															<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
															<h2 class="pmd-card-title-text">Form Modal</h2>
														</div>
														<div class="modal-body">
															<form class="form-horizontal">
																<div class="form-group pmd-textfield pmd-textfield-floating-label">
																	<label for="first-name">Name</label>
																	<input type="text" class="mat-input form-control" id="name" value="">
																	<span class="help-text">Input is required!</span> </div>
																<div class="form-group pmd-textfield pmd-textfield-floating-label">
																	<label for="first-name">Email Address</label>
																	<input type="text" class="mat-input form-control" id="email" value="">
																</div>
																<div class="form-group pmd-textfield pmd-textfield-floating-label">
																	<label for="first-name">Mobile No.</label>
																	<input type="text" class="mat-input form-control" id="mobil" value="">
																</div>
																<div class="form-group pmd-textfield pmd-textfield-floating-label">
																	<label class="control-label">Message</label>
																	<textarea required class="form-control"></textarea>
																</div>
																<label class="checkbox-inline pmd-checkbox pmd-checkbox-ripple-effect">
																	<input type="checkbox" value="">
																	<span class="pmd-checkbox"> Accept Terms and conditions</span> </label>
															</form>
														</div>
														<div class="pmd-modal-action">
															<button data-dismiss="modal"  class="btn pmd-ripple-effect btn-primary" type="button">Save changes</button>
															<button data-dismiss="modal"  class="btn pmd-ripple-effect btn-default" type="button">Discard</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<!-- List selection -->
										<div class="col-md-6 col-sm-6"> 
											<button data-target="#list-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button">List with Selection</button>
											<div tabindex="-1" class="modal fade" id="list-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header bordered"> 
															<h3 class="pmd-card-title-text">List Selection</h3>
														</div>
														<div class="modal-body">
															<div class="radio">
																<label class="pmd-radio">
																	<input type="radio" name="inlineRadioOptions" id="Ahmedabad" value="option1">
																	<span for="Ahmedabad">Ahmedabad</span> </label>
															</div>
															<div class="radio">
																<label class="pmd-radio">
																	<input type="radio" name="inlineRadioOptions" id="Surat" value="option1">
																	<span for="Surat">Surat</span> </label>
															</div>
															<div class="radio">
																<label class="pmd-radio">
																	<input type="radio" name="inlineRadioOptions" id="Rajkot" value="option1">
																	<span for="Rajkot">Rajkot</span> </label>
															</div>
															<div class="radio">
																<label class="pmd-radio">
																	<input type="radio" name="inlineRadioOptions" id="Vadodara" value="option1">
																	<span for="Vadodara">Vadodara</span> </label>
															</div>
															<div class="radio">
																<label class="pmd-radio">
																	<input type="radio" name="inlineRadioOptions" id="Mehsana" value="option1">
																	<span for="Mehsana">Mehsana</span> </label>
															</div>
														</div>
														<div class="pmd-modal-action pmd-modal-bordered text-right">
															<button data-dismiss="modal"  class="btn pmd-ripple-effect btn-primary pmd-btn-flat" type="button">Ok</button>
															<button data-dismiss="modal"  class="btn pmd-ripple-effect btn-default pmd-btn-flat" type="button">Cancel</button>
														</div>
													</div>
												</div>
											</div>											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> <!--Form dialog example end -->
					
				</div>
			</div> <!-- Form Dialog code and example end -->
		</section> <!-- Form Dialog end --> 		
		
		<!-- Media Dialog -->
		<section class="row component-section">
			
			<!-- Media dialog title and description -->
			<div class="col-md-3">
				<div id="media">
					<h2>Modal with Media</h2>
				</div>
				<p>Create a modal box that contains a media in it. Add a div with class <code>.pmd-modal-media</code> inside <code>.modal-content</code> section.</p>
			</div> <!-- Media dialog title and description end -->
			
			<!-- Media dialog code and example -->
			<div class="col-md-9">
							
				<!-- Media dialog example -->
				<div class="component-box">
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth">
								<div class="pmd-card-body modal-btn">
									<div class="row">
										<!-- Media dialog type1-->
										<div class="col-md-6 col-sm-6"> 
											<button data-target="#center-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button">Media Modal</button>
											
											<div tabindex="-1" class="modal fade" id="center-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
															<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img width="40" height="40" src="http://propeller.in/components/list/img/40x40.png"> </a> </div>
															<div class="media-body media-middle">
																<h3 class="pmd-card-title-text">Two-line item</h3>
																<span class="pmd-card-subtitle-text">Secondary text</span> </div>
														</div>
														<div class="pmd-modal-media"> <img width="1184" height="666" class="img-responsive" src="http://propeller.in/assets/images/profile-pic.png"> </div>
														<div class="modal-body"> Cards provide context and an entry point to more robust information and views. Don't overload cards with extraneous information or actions. </div>
														<div class="pmd-modal-action">
															<button data-dismiss="modal"  type="button" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary"> <i class="material-icons pmd-sm">share</i> </button>
															<button data-dismiss="modal"  type="button" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary"> <i class="material-icons pmd-sm">thumb_up</i> </button>
															<button data-dismiss="modal"  type="button" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary"> <i class="material-icons pmd-sm">drafts</i> </button>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<!-- Media dialog type2-->
										<div class="col-md-6 col-sm-6"> 
											<button data-target="#media-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button">Media Modal</button>
											
											<div tabindex="-1" class="modal fade" id="media-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="pmd-modal-media"> <img width="1184" height="666" class="img-responsive" src="http://propeller.in/assets/images/profile-pic.png"> </div>
														<div class="pmd-card-title">
															<h2 class="pmd-card-title-text">Title goes here</h2>
															<span class="pmd-card-subtitle-text">Secondary text</span> </div>
														<div class="pmd-modal-action">
															<button data-dismiss="modal"  class="btn pmd-ripple-effect btn-primary pmd-btn-flat" type="button">Primary</button>
															<button data-dismiss="modal"  class="btn pmd-ripple-effect btn-default pmd-btn-flat" type="button">Action</button>
														</div>
														<div class="modal-body"> Cards provide context and an entry point to more robust information and views. Don't overload cards with extraneous information or actions. </div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- Media dialog example end -->
				
			</div> <!-- Media dialog code and example end -->
		</section>
		<!-- Media Dialog --> 

		<!-- Dialog sizes -->
		<section class="row component-section">
			
			<!-- Dialog sizes title and description -->
			<div class="col-md-3">
				<div id="size">
					<h2>Modal in different sizes</h2>
				</div>
				<p> Modal box can be shown in small and large sizes. Add <code>.modal-sm</code> followed by <code>.modal-dialog</code> to create a small modal. Similarly, add <code>.modal-lg</code> followed by <code>.modal-dialog</code> to create a large modal. By default, the modal will appear in medium size. </p>
			</div> <!-- Dialog sizes title and description end -->
			
			<!-- Dialog sizes code and example -->
			<div class="col-md-9">
				<div class="component-box">
					
					<!-- variant sizes dialog example -->
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth">
								<div class="pmd-card-body modal-btn">
									<div class="row">
										<!-- Dialog in small size -->
										<div class="col-md-4 col-sm-4"> 											
											<button data-target="#small-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button">Small Modal</button>
											
											<div tabindex="-1" class="modal fade" id="small-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog modal-sm">
													<div class="modal-content">
														<div class="modal-header">
															<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
															<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img width="40" height="40" src="http://propeller.in/components/list/img/40x40.png"> </a> </div>
															<div class="media-body media-middle">
																<h3 class="pmd-card-title-text">Two-line item</h3>
																<span class="pmd-card-subtitle-text">Secondary text</span> </div>
														</div>
														<div class="pmd-modal-media"> <img width="1184" height="666" class="img-responsive" src="http://propeller.in/assets/images/profile-pic.png"> </div>
														<div class="modal-body"> Cards provide context and an entry point to more robust information and views. Don't overload cards with extraneous information or actions. </div>
														<div class="pmd-modal-action">
															<button data-dismiss="modal"  type="button" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary"> <i class="material-icons pmd-sm">share</i> </button>
															<button data-dismiss="modal"  type="button" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary"> <i class="material-icons pmd-sm">thumb_up</i> </button>
															<button data-dismiss="modal"  type="button" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary"> <i class="material-icons pmd-sm">drafts</i> </button>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<!-- Dialog in medium size -->
										<div class="col-md-4 col-sm-4"> 											
											<button data-target="#center-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button">Medium Modal</button>
											
											<div tabindex="-1" class="modal fade" id="center-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
															<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img width="40" height="40" src="http://propeller.in/components/list/img/40x40.png"> </a> </div>
															<div class="media-body media-middle">
																<h3 class="pmd-card-title-text">Two-line item</h3>
																<span class="pmd-card-subtitle-text">Secondary text</span> </div>
														</div>
														<div class="pmd-modal-media"> <img width="1184" height="666" class="img-responsive" src="http://propeller.in/assets/images/profile-pic.png"> </div>
														<div class="modal-body"> Cards provide context and an entry point to more robust information and views. Don't overload cards with extraneous information or actions. </div>
														<div class="pmd-modal-action">
															<button data-dismiss="modal"  type="button" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary"> <i class="material-icons pmd-sm">share</i> </button>
															<button data-dismiss="modal"  type="button" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary"> <i class="material-icons pmd-sm">thumb_up</i> </button>
															<button data-dismiss="modal"  type="button" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary"> <i class="material-icons pmd-sm">drafts</i> </button>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<!-- Dialog in large size -->
										<div class="col-md-4 col-sm-4">
											<button data-target="#large-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button">Large Modal</button>
											
											<div tabindex="-1" class="modal fade" id="large-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog modal-lg">
													<div class="modal-content">
														<div class="modal-header">
															<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
															<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img width="40" height="40" src="http://propeller.in/components/list/img/40x40.png"> </a> </div>
															<div class="media-body media-middle">
																<h3 class="pmd-card-title-text">Two-line item</h3>
																<span class="pmd-card-subtitle-text">Secondary text</span> </div>
														</div>
														<div class="pmd-modal-media"> <img width="1184" height="666" class="img-responsive" src="http://propeller.in/assets/images/profile-pic.png"> </div>
														<div class="modal-body"> Cards provide context and an entry point to more robust information and views. Don't overload cards with extraneous information or actions. </div>
														<div class="pmd-modal-action">
															<button data-dismiss="modal"  type="button" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary"> <i class="material-icons pmd-sm">share</i> </button>
															<button data-dismiss="modal"  type="button" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary"> <i class="material-icons pmd-sm">thumb_up</i> </button>
															<button data-dismiss="modal"  type="button" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary"> <i class="material-icons pmd-sm">drafts</i> </button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- variant sizes dialog example end -->
					
				</div>
			</div> <!-- Dialog sizes code and example end -->
		</section>
		<!-- Dialog sizes --> 
	</div>
</div> <!--Dialog end -->

<!-- Footer Starts -->
<?php include('include/footer.php'); ?>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<?php include('include/scripts.php'); ?>
<!-- Scripts Ends -->

</body>
</html>