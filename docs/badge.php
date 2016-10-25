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
					<h1 class="pmd-display1">Badge</h1>
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
									<input type="hidden"  name="badge" value="badge"/>
									<button name='btn_submit' value='badge' type="submit" onClick="downloadBadge()" class="btn btn-default pmd-btn-raised btn-sm pmd-ripple-effect pmd-btn-flat custom-btn">Download ZIP</button>
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

<!--Badge -->
<div class="pmd-content pmd-content-custom" id="content"> 
	
	<!--component header -->
	<div class="componant-title-bg"> 
		<div class="container">
			<div class="row">
				
				<!-- component title and description -->
				<div class="col-xs-12">
					<p class="lead">Badge is a new feature in user interfaces, and provides users with a visual clue to help them discover additional relevant content. A badge can be both a notifier that there are additional 
                    items associated with an object and an indicator of how many items there are.</p>
				</div> <!-- component title and description end-->
				
			</div>
		</div>
	</div> <!--component header end-->
	
	<div class="container">
	
		<!-- component list category -->
		<div class="list-group list-group-custom margin-20"> 
			<a class="list-group-item" href="#badge-buttons">Bootstrap Badge</a> 
			<a class="list-group-item" href="#notification-badge">Notification Badge</a> 
			<a class="list-group-item" href="#chip">Chips</a> 
			<a class="list-group-item" href="#configuration-options">Configuration Options</a> 
		</div> <!-- component list category end -->
		
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
					
					<!-- code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
					</div> <!-- code view button end -->
					
					<!-- code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#badge-html" data-toggle="tab">HTML</a></li>
								<li><a href="#badge-css" data-toggle="tab">CSS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="badge-html">
								<pre class="pre-codebox line-numbers" data-src="../components/badge/snippets/badge-variation.html"></pre>
							</div>
							<div class="tab-pane" id="badge-css">
								<pre class="pre-codebox line-numbers" data-src="../components/badge/snippets/bootstrap-basic.css"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!-- badge example -->
					<div class="row"> 
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth">
								<div class="pmd-card-body"> 
									<!-- Default badge with ripple effect --> 
									<span class="badge">1</span> 
									
									<!-- Success badge with ripple effect --> 
									<span class="badge badge-success">2</span> 
									
									<!-- Warning badge with ripple effect --> 
									<span class="badge badge-warning">4</span> 
									
									<!-- Error badge with ripple effect --> 
									<span class="badge badge-error">6</span> 
									
									<!-- Information badge with ripple effect --> 
									<span class="badge badge-info">8</span> 
									
									<!-- Inverse badge with ripple effect --> 
									<span class="badge badge-inverse">10</span> </div>
							</div>
						</div>
						
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body"> 
									<!--Badges on Buttons--> 
									<!-- Badge on primary button with ripple effect -->
									<button type="button" class="btn btn-primary">Primary <span class="badge">7</span></button>
									
									<!-- Badge on success button with ripple effect -->
									<button type="button" class="btn btn-success">Success <span class="badge">3</span></button>
									
									<!-- Badge on danger button with ripple effect -->
									<button type="button" class="btn btn-danger">Danger <span class="badge">5</span></button>
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
					
					<!-- code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
					</div>  <!-- code view button end -->
					
					<!-- code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#noti-badge-html" data-toggle="tab">HTML</a></li>
								<li><a href="#noti-badge-css" data-toggle="tab">CSS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="noti-badge-html">
								<pre class="pre-codebox line-numbers" data-src="../components/badge/snippets/badge-notification.html"></pre>
							</div>
							<div class="tab-pane" id="noti-badge-css">
								<pre class="pre-codebox line-numbers" data-src="../components/badge/snippets/badge-notification.css"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
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
					
					<!-- code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
					</div> <!-- code view button end -->
					
					<!-- code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#chips-html" data-toggle="tab">HTML</a></li>
								<li><a href="#chips-css" data-toggle="tab">CSS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="chips-html">
								<pre class="pre-codebox line-numbers" data-src="../components/badge/snippets/chips.html"></pre>
							</div>
							<div class="tab-pane" id="chips-css">
								<pre class="pre-codebox line-numbers" data-src="../components/badge/snippets/chips.css"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
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
		
		<!-- Configuration starts-->		
		<section class="row component-section">
			<div class="col-md-3">
				<div id="configuration-options">
					<h2>Configuration Options</h2>
				</div>
				<p>The Propeller CSS classes apply various predefined visual enhancements to the Badge. The table lists the available classes and their effects.</p>
			</div>
			<div class="col-md-9"> 
				<div class="pmd-card pmd-table-card-responsive">
					<div class="pmd-table-card"> 
						<table class="table pmd-table table-hover">
							<thead>
								<tr>
									<th>Classes</th>
									<th>Effect</th>
									<th>Remark</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td data-title="Propeller Classes"><code>.pmd-badge</code></td>
									<td data-title="Effect">Add this class to create notification badge.</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Propeller Classes"><code>.pmd-badge-overlap</code></td>
									<td data-title="Effect">Add this class to create notification badge which overlaps the element.</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Propeller Classes"><code>.pmd-chip</code></td>
									<td data-title="Effect">Add this class to create chips.</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Propeller Classes"><code>.pmd-chip-contact</code></td>
									<td data-title="Effect">Add this class to create chips with an image/icon.</td>
									<td data-title="Remark">Optional</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section> <!-- Configuration ends--> 		
		
	</div>
</div> <!--Badge end-->

<!--footer start -->
<?php include('include/footer.php'); ?>
<!--footer end -->