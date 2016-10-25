<!--header start -->
<?php include('include/header.php'); ?>
<!--header end --> 

<!--navigation start-->
<nav class="navbar navbar-inverse pmd-navbar navbar-fixed-top pmd-z-depth guideline-header pmd-content">

	<div class="container-fluid"> 
	
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header"> 
			<a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary pull-left margin-r8 pmd-sidebar-toggle"><i class="material-icons">menu</i></a> 
		</div>
		
		<div class="container">
			<div class="row">

				<!-- component title and description-->
				<div class="col-md-10 col-sm-10 col-xs-12">
					<h1 class="pmd-display1">Modal</h1>
				</div> <!--end component title and description-->
				
				<!-- component download button dropdown -->
				<div class="col-md-2 col-sm-2 col-xs-12">
					<div class="dropdown pmd-dropdown clearfix pull-right">
						<button class="btn pmd-btn-raised dropdown-toggle pmd-ripple-effect btn-primary custom-primary" type="button" id="dropdownMenuDivider" data-toggle="dropdown" aria-expanded="true">Download</button>
						<!--dropdown-menu -->
						<ul aria-labelledby="dropdownMenuDivider" role="menu" class="dropdown-menu dropdown-menu-custom mega-dropdown-menu dropdown-menu-right">
							<li role="presentation" class="right-border">
								<h4>UI Framework</h4>
								<a class="btn btn-success btn-sm pmd-btn-raised pmd-ripple-effect" onClick="downloadUIFramework()" href="../archive/pmd-1.0.0.zip">Download ZIP</a>
							</li>
							<li role="presentation">
								<h4>Standalone</h4>
								<form id='component_form' method="post" action="custom/copy.php">
									<input type="hidden"  name="modal" value="modal"/>
									<button name='btn_submit' value='modal' type="submit" onClick="downloadModal()" class="btn btn-default pmd-btn-raised btn-sm pmd-ripple-effect pmd-btn-flat custom-btn">Download ZIP</button>
								</form>
							</li>
						</ul> <!--end dropdown menu -->
					</div>
				</div> <!--end download component button dropdown -->
			</div>
		</div>
		
	</div>
	<!-- /.container-fluid --> 
	
</nav>
<!--navigation end -->

<!--Dialog-->
<div class="pmd-content pmd-content-custom" id="content"> 
	
	<!--component header -->
	<div class="componant-title-bg"> 
		<div class="container">
			<div class="row">
			
				<!-- component title and description -->
				<div class="col-xs-12">
					<p class="lead">Modal(known as Dialog in Material Design) is a small window that communicates information to the user and prompts them for a response.It inform users about critical information, required to make decisions, or perform  multiple tasks within a process.</p>
				</div> <!-- component title and description end -->				
			
			</div>
		</div>
	</div> <!--component header end -->
	
	<div class="container">
	
		<!-- component list category -->
		<div class="list-group list-group-custom margin-20"> 
			<a class="list-group-item" href="#bootstrap-dialog">Bootstrap Modal</a> 
			<a class="list-group-item" href="#alert">Propeller Modal</a> 
			<a class="list-group-item" href="#simple-dia">Modal with List</a> 
			<a class="list-group-item" href="#form">Form Modal</a> 
			<a class="list-group-item" href="#media">Modal with Card</a>
			<a class="list-group-item" href="#size">Modal of varient sizes</a> 
			<a class="list-group-item" href="#config">Configuration Options</a> 
			<a class="list-group-item" href="#events">Events</a> 
		</div> <!-- component list category end -->
		
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
					
					<!-- code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
					</div> <!-- code view button end-->
					
					<!-- code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#bootstrap-dialog-html" data-toggle="tab">HTML</a></li>
								<li><a href="#bootstrap-dialog-css" data-toggle="tab">CSS</a></li>
								<li><a href="#bootstrap-dialog-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="bootstrap-dialog-html">
								<pre class="pre-codebox line-numbers" data-src="../components/modal/snippets/dialogs-alert.html"></pre>
							</div>
							<div class="tab-pane" id="bootstrap-dialog-css">
								<pre class="pre-codebox line-numbers" data-src="../components/modal/snippets/bootstrap-basic.css"></pre>
							</div>
							<div class="tab-pane" id="bootstrap-dialog-js">
								<pre class="pre-codebox line-numbers" data-src="../components/modal/snippets/bootstrap-basic.js"></pre>
							</div>
						</div>
					</div> <!-- code view end-->
					
					<!-- alert Modal example -->
					<div class="row">
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth">
								<div class="pmd-card-body modal-btn">
									<div class="row"> 
										<!-- Simple alert -->
										<div class="col-md-4"> 
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
										<div class="col-md-4">
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
										<div class="col-md-4">
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
					
					<!-- code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
					</div> <!-- code view button end-->
					
					<!-- code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#alert-html" data-toggle="tab">HTML</a></li>
								<li><a href="#alert-css" data-toggle="tab">CSS</a></li>
								<li><a href="#alert-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="alert-html">
								<pre class="pre-codebox line-numbers" data-src="../components/modal/snippets/dialogs-alert.html"></pre>
							</div>
							<div class="tab-pane" id="alert-css">
								<pre class="pre-codebox line-numbers" data-src="../components/modal/snippets/dialogs.css"></pre>
							</div>
							<div class="tab-pane" id="alert-js">
								<pre class="pre-codebox line-numbers" data-src="../components/modal/snippets/dialogs.js"></pre>
							</div>
						</div>
					</div> <!-- code view end-->
					
					<!-- alert dialog example -->
					<div class="row">
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth">
								<div class="pmd-card-body modal-btn">
									<div class="row"> 
										<!-- Simple alert -->
										<div class="col-md-4"> 
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
										<div class="col-md-4">
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
										<div class="col-md-4">
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
					
					<!-- code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
					</div> <!-- code view button end -->
					
					<!-- code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#simple-dia-html" data-toggle="tab">HTML</a></li>
								<li><a href="#simple-dia-css" data-toggle="tab">CSS</a></li>
								<li><a href="#simple-dia-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="simple-dia-html">
								<pre class="pre-codebox line-numbers" data-src="../components/modal/snippets/dialogs-simple-listing.html"></pre>
							</div>
							<div class="tab-pane" id="simple-dia-css">
								<pre class="pre-codebox line-numbers" data-src="../components/modal/snippets/dialogs-simple-listing.css"></pre>
							</div>
							<div class="tab-pane" id="simple-dia-js">
								<pre class="pre-codebox line-numbers" data-src="../components/modal/snippets/dialogs.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--Simple List dilog example -->
					<div class="row">
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth">
								<div class="pmd-card-body modal-btn">
									<div class="row">
										<!-- Simple list -->
										<div class="col-sm-4">
											<button data-target="#simple-listing-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button">List</button>
											<div tabindex="-1" class="modal fade" id="simple-listing-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header pmd-modal-bordered">
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
										<div class="col-sm-4">
											<button data-target="#avatar-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button">List with Avatar</button>
											<div tabindex="-1" class="modal fade" id="avatar-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header pmd-modal-bordered">
															<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
															<h2 class="pmd-card-title-text">Avatar List</h2>
														</div>
														<div class="pmd-modal-list">
															<ul class="list-group pmd-list-avatar">
																<li class="list-group-item">
																	<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
																	<div class="media-body media-middle">Porta ac consectetur ac</div>
																</li>
																<li class="list-group-item">
																	<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
																	<div class="media-body media-middle">Dapibus ac facilisis in</div>
																</li>
																<li class="list-group-item">
																	<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
																	<div class="media-body media-middle">Porta ac consectetur ac</div>
																</li>
															</ul>
														</div>
														<div class="pmd-modal-action text-right pmd-modal-bordered">
															<button data-dismiss="modal"  class="btn pmd-ripple-effect btn-primary pmd-btn-flat" type="button">Cancel</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<!-- Icon Listing -->
										<div class="col-sm-4">
											<button data-target="#listing-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button">List with Icon</button>
											
											<div tabindex="-1" class="modal fade" id="listing-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header pmd-modal-bordered">
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
					
					<!-- code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
					</div> <!-- code view button end-->
					
					<!-- code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#form-html" data-toggle="tab">HTML</a></li>
								<li><a href="#form-css" data-toggle="tab">CSS</a></li>
								<li><a href="#form-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="form-html">
								<pre class="pre-codebox line-numbers" data-src="../components/modal/snippets/dialogs-form.html"></pre>
							</div>
							<div class="tab-pane" id="form-css">
								<pre class="pre-codebox line-numbers" data-src="../components/modal/snippets/dialogs-form.css"></pre>
							</div>
							<div class="tab-pane" id="form-js">
								<pre class="pre-codebox line-numbers" data-src="../components/modal/snippets/dialogs-form.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--Form dialog example -->
					<div class="row">
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth">
								<div class="pmd-card-body modal-btn">
									<div class="row">
										<div class="col-md-6"> 
											<button data-target="#form-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button">Form Modal</button>
											
											<div tabindex="-1" class="modal fade" id="form-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header pmd-modal-bordered">
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
										<div class="col-md-6"> 
											<button data-target="#list-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button">List with Selection</button>
											<div tabindex="-1" class="modal fade" id="list-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header pmd-modal-bordered"> 
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
				
				<!-- code view button -->
				<div class="pmd-card-title custom-heading clearfix"> 
					<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
				</div> <!-- code view button end -->
				
				<!-- code view -->
				<div class="code-box">
					<div class="pmd-tabs">
						<div class="pmd-tab-active-bar"></div>
						<ul class="nav nav-tabs" data-tabs="tabs">
							<li class="active"><a href="#media-html" data-toggle="tab">HTML</a></li>
							<li><a href="#media-css" data-toggle="tab">CSS</a></li>
							<li><a href="#media-js" data-toggle="tab">JS</a></li>
						</ul>
					</div>
					<div id="my-tab-content" class="tab-content">
						<div class="tab-pane active" id="media-html">
							<pre class="pre-codebox line-numbers" data-src="../components/modal/snippets/dialogs-media.html"></pre>
						</div>
						<div class="tab-pane" id="media-css">
							<pre class="pre-codebox line-numbers" data-src="../components/modal/snippets/dialogs-media.css"></pre>
						</div>
						<div class="tab-pane" id="media-js">
							<pre class="pre-codebox line-numbers" data-src="../components/modal/snippets/dialogs.js"></pre>
						</div>
					</div>
				</div> <!-- code view end -->
				
				<!-- Media dialog example -->
				<div class="component-box">
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth">
								<div class="pmd-card-body modal-btn">
									<div class="row">
										<!-- Media dialog type1-->
										<div class="col-md-6"> 
											<button data-target="#center-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button">Media Modal</button>
											
											<div tabindex="-1" class="modal fade" id="center-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
															<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img width="40" height="40" src="../components/list/img/40x40.png"> </a> </div>
															<div class="media-body media-middle">
																<h3 class="pmd-card-title-text">Two-line item</h3>
																<span class="pmd-card-subtitle-text">Secondary text</span> </div>
														</div>
														<div class="pmd-modal-media"> <img width="1184" height="666" class="img-responsive" src="../assets/images/profile-pic.png"> </div>
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
										<div class="col-md-6"> 
											<button data-target="#media-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button">Media Modal</button>
											
											<div tabindex="-1" class="modal fade" id="media-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="pmd-modal-media"> <img width="1184" height="666" class="img-responsive" src="../assets/images/profile-pic.png"> </div>
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
					
					<!-- code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
					</div> <!-- code view button end -->
					
					<!-- code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#size-html" data-toggle="tab">HTML</a></li>
								<li><a href="#size-css" data-toggle="tab">CSS</a></li>
								<li><a href="#size-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="size-html">
								<pre class="pre-codebox line-numbers" data-src="../components/modal/snippets/dialogs-size.html"></pre>
							</div>
							<div class="tab-pane" id="size-css">
								<pre class="pre-codebox line-numbers" data-src="../components/modal/snippets/dialogs-media.css"></pre>
							</div>
							<div class="tab-pane" id="size-js">
								<pre class="pre-codebox line-numbers" data-src="../components/modal/snippets/dialogs.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!-- variant sizes dialog example -->
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth">
								<div class="pmd-card-body modal-btn">
									<div class="row">
										<!-- Dialog in small size -->
										<div class="col-md-4"> 											
											<button data-target="#small-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button">Small Modal</button>
											
											<div tabindex="-1" class="modal fade" id="small-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog modal-sm">
													<div class="modal-content">
														<div class="modal-header">
															<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
															<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img width="40" height="40" src="../components/list/img/40x40.png"> </a> </div>
															<div class="media-body media-middle">
																<h3 class="pmd-card-title-text">Two-line item</h3>
																<span class="pmd-card-subtitle-text">Secondary text</span> </div>
														</div>
														<div class="pmd-modal-media"> <img width="1184" height="666" class="img-responsive" src="../assets/images/profile-pic.png"> </div>
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
										<div class="col-md-4"> 											
											<button data-target="#center-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button">Medium Modal</button>
											
											<div tabindex="-1" class="modal fade" id="center-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
															<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img width="40" height="40" src="../components/list/img/40x40.png"> </a> </div>
															<div class="media-body media-middle">
																<h3 class="pmd-card-title-text">Two-line item</h3>
																<span class="pmd-card-subtitle-text">Secondary text</span> </div>
														</div>
														<div class="pmd-modal-media"> <img width="1184" height="666" class="img-responsive" src="../assets/images/profile-pic.png"> </div>
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
										<div class="col-md-4">
											<button data-target="#large-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button">Large Modal</button>
											
											<div tabindex="-1" class="modal fade" id="large-dialog" style="display: none;" aria-hidden="true">
												<div class="modal-dialog modal-lg">
													<div class="modal-content">
														<div class="modal-header">
															<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
															<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img width="40" height="40" src="../components/list/img/40x40.png"> </a> </div>
															<div class="media-body media-middle">
																<h3 class="pmd-card-title-text">Two-line item</h3>
																<span class="pmd-card-subtitle-text">Secondary text</span> </div>
														</div>
														<div class="pmd-modal-media"> <img width="1184" height="666" class="img-responsive" src="../assets/images/profile-pic.png"> </div>
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
		
		<!-- Configuration starts-->
		<section class="row component-section">
			<div class="col-md-3">
				<div id="config">
					<h2>Configuration Options</h2>
				</div>
				<p>The Propeller CSS classes apply various predefined visual enhancements to the Modal Box. Use propeller classes to enhance your Bootstrap modal/dialog. The table lists the available classes and their effects.</p>
			</div>
			<div class="col-md-9"> 
				<div class="pmd-card pmd-table-card-responsive">
					<div class="pmd-table-card"> 
						<table class="table pmd-table table-hover">
							<thead>
								<tr>
									<th width="20%">Propeller Classes</th>
									<th width="60%">Effect</th>
									<th width="20%">Remark</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td data-title="Propeller Classes"><code>.pmd-modal-list</code></td>
									<td data-title="Effect">Add this class to the wrapper containing a list within your modal.</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Propeller Classes"><code>.pmd-modal-media</code></td>
									<td data-title="Effect">Add this class to the wrapper containing a media image to be used in your modal.</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Propeller Classes"><code>.pmd-modal-action</code></td>
									<td data-title="Effect">Add this class to the wrapper containing action icon buttons in your modal.</td>
									<td data-title="Remark">Optional</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section> <!-- Configuration ends--> 
		
		<!-- Events starts-->		
		<section class="row component-section">
			<div class="col-md-3">
				<div id="events">
					<h2>Events</h2>
				</div>
				<p>Bootstrap's modal class exposes a few events for hooking into modal functionality. See <a href="http://getbootstrap.com/javascript/#modals" target="_blank">here</a> for more documentation on this.</p>
			</div>
			<div class="col-md-9"> 
				<div class="pmd-card pmd-table-card-responsive">
					<div class="pmd-table-card"> 
						<table class="table pmd-table table-hover">
							<thead>
								<tr>
									<th>Event Type</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td data-title="Class"><code>show.bs.modal</code></td>
									<td data-title="Effect">This event fires immediately when the <code>show</code> instance method is called. If caused by a click, the clicked element is available as the <code>relatedTarget</code> property of the event.</td>
								</tr>
								<tr>
									<td data-title="Class"><code>shown.bs.modal</code></td>
									<td data-title="Effect">This event is fired when the modal has been made visible to the user (will wait for CSS transitions to complete). If caused by a click, the clicked element is available as the <code>relatedTarget</code> property of the event.</td>
								</tr>
								<tr>
									<td data-title="Class"><code>hide.bs.modal</code></td>
									<td data-title="Effect">This event is fired immediately when the <code>hide</code> instance method has been called.</td>
								</tr>
								<tr>
									<td data-title="Class"><code>hidden.bs.modal</code></td>
									<td data-title="Effect">This event is fired when the modal has finished being hidden from the user (will wait for CSS transitions to complete).</td>
								</tr>
								<tr>
									<td data-title="Class"><code>loaded.bs.modal</code></td>
									<td data-title="Effect">This event is fired when the modal has loaded content using the <code>remote</code> option.</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="pmd-card pmd-z-depth js-script pmd-card-custom">
					<pre class="pre-codebox line-numbers" data-src="../components/modal/snippets/events.js"></pre>
				</div>
			</div>
		</section> <!-- Events ends--> 
		
	</div>
</div> <!--Dialog end -->

<!--footer start -->
<?php include('include/footer.php'); ?>
<!--footer end -->