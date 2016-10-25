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
					<h1 class="pmd-display1">Alert</h1>
				</div> <!--end component title and description-->
				
				<!-- component download button dropdown -->
				<div class="col-md-2 col-sm-2 col-xs-12">
					<div class="dropdown pmd-dropdown clearfix pull-right">
						<button class="btn pmd-btn-raised dropdown-toggle pmd-ripple-effect btn-primary" type="button" id="dropdownMenuDivider" data-toggle="dropdown" aria-expanded="true">Download</button>
						<!--dropdown-menu -->
						<ul aria-labelledby="dropdownMenuDivider" role="menu" class="dropdown-menu dropdown-menu-custom mega-dropdown-menu dropdown-menu-right">
							<li role="presentation" class="right-border">
								<h4>UI Framework</h4>
								<a class="btn btn-success btn-sm pmd-btn-raised pmd-ripple-effect" onClick="downloadUIFramework()" href="../archive/pmd-1.0.0.zip">Download ZIP</a>
							</li>
							<li role="presentation">
								<h4>Standalone</h4>
								<form id='component_form' method="post" action="custom/copy.php">
									<input type="hidden"  name="alert" value="alert"/>
									<button name='btn_submit' value='alert' type="submit" onClick="downloadAlert()" class="btn btn-default pmd-btn-raised btn-sm pmd-ripple-effect pmd-btn-flat custom-btn">Download ZIP</button>
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

<!--Alert -->
<div class="pmd-content pmd-content-custom" id="content"> 
	
	<!--component header -->
	<div class="componant-title-bg"> 
		<div class="container">
			<div class="row">
				
				<!-- component title and description -->
				<div class="col-xs-12">
					<p class="lead">Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.</p>
				</div> <!-- component title and description end -->
				
			</div>
		</div>
		<!--container end --> 
	</div> <!--component header end -->
	
	<div class="container"> 
		
		<!-- component list category -->
		<div class="list-group list-group-custom margin-20"> 
			<a class="list-group-item" href="#bootstrap-simple-alert">Bootstrap Simple Alert</a> 
			<a class="list-group-item" href="#bootstrap-alert-with-close-button">Bootstrap Alert with Close Button</a> 
			<a class="list-group-item" href="#propeller-alert">Propeller Alert</a> 
			<a class="list-group-item" href="#propeller-alert-with-action">Propeller Alert with Action</a> 
			<a class="list-group-item" href="#propeller-alerts-with-basic-notification-types">Propeller Alerts with basic notification types</a> 
			<a class="list-group-item" href="#configuration-options">Configuration Options</a> 
			<a class="list-group-item" href="#events">Events</a> 
		</div> <!-- component list category end -->
		
		<!-- Bootstrap Simple Alert with Link -->
		<section class="row component-section">
			
			<!-- Simple Alert title and description -->
			<div class="col-md-3">
				<div id="bootstrap-simple-alert">
					<h2>Bootstrap Simple Alert</h2>
				</div>
				<p>Bootstrap provides an easy way to create predefined alert messages. Alerts are created with the <code>.alert</code> class, followed by one of the four contextual classes <code>.alert-success</code>, <code>.alert-info</code>, <code>.alert-warning</code> or <code>.alert-danger</code>. Use <code>.alert-link</code> utility to quickly provide matching colored links within any alert.</p>
			</div> <!-- Simple Alert title and description end -->
			
			<div class="col-md-9"> 
				
				<!--Simple Alert code and example -->
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
								<li class="active"><a href="#links-html" data-toggle="tab">HTML</a></li>
								<li><a href="#links-css" data-toggle="tab">CSS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="links-html">
								<pre class="pre-codebox line-numbers" data-src="../components/alert/snippets/alert-link.html"></pre>
							</div>
							<div class="tab-pane" id="links-css">
								<pre class="pre-codebox line-numbers" data-src="../components/alert/snippets/alert-link.css"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--Simple Alert example -->
					<div class="row">
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body text-center alert-custom"> 
									<!--Use alerts with links-->
									<div class="alert alert-success" role="alert"> Well done! You successfully read <a href="javascript:void(0);" class="alert-link">this important alert message</a>. </div>
									<div class="alert alert-info" role="alert"> Heads up! This <a href="javascript:void(0);" class="alert-link">alert needs your attention</a>, but it's not super important. </div>
									<div class="alert alert-warning" role="alert"> Warning! Spyware detected on your system.</div>
									<div class="alert alert-danger" role="alert"> Oh snap! <a href="javascript:void(0);" class="alert-link">Change a few things up</a> and try submitting again. </div>
								</div>
							</div>
						</div>
					</div> <!--Simple Alert example end -->
					
				</div><!--Simple Alert code and example end-->
			</div>
		</section> <!-- Bootstrap Simple Alert end-->
		
		<!-- Bootstrap Alert with Close button -->
		<section class="row component-section">
			
			<!-- Close button title and description -->
			<div class="col-md-3">
				<div id="bootstrap-alert-with-close-button">
					<h2>Bootstrap Alert with Close Button</h2>
				</div>
				<p>Bootstrap Alerts are available with an optional close button. Add <code>.alert-dismissible</code> class to parent div and <code>.close</code> class to a link or a button element.</p>
			</div> <!-- Close button title and description end-->
			
			<div class="col-md-9"> 
				
				<!--Close button code and example -->
				<div class="component-box">
					
					<!-- code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
					</div> <!-- code view button end-->
					
					<!-- code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<!--tabbing start-->
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#dismissing-html" data-toggle="tab">HTML</a></li>
								<li><a href="#dismissing-css" data-toggle="tab">CSS</a></li>
								<li><a href="#dismissing-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="dismissing-html">
								<pre class="pre-codebox line-numbers" data-src="../components/alert/snippets/alert-dismissing.html"></pre>
							</div>
							<div class="tab-pane" id="dismissing-css">
								<pre class="pre-codebox line-numbers" data-src="../components/alert/snippets/alert-link.css"></pre>
							</div>
							<div class="tab-pane" id="dismissing-js">
								<pre class="pre-codebox line-numbers" data-src="../components/alert/snippets/alert-link.js"></pre>
							</div>
						</div>
						<!--tabbing end--> 
					</div> <!-- code view end -->
					
					<!--Close button example -->
					<div class="row">
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body text-center alert-custom"> 
									<!--Use dismissing alerts-->
									<div role="alert" class="alert alert-success alert-dismissible">
										<button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
										Well done! You successfully read this important alert message. </div>
									<div role="alert" class="alert alert-info alert-dismissible">
										<button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
										Heads up! This alert needs your attention, but it's not super important. </div>
									<div role="alert" class="alert alert-warning alert-dismissible">
										<button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
										 Warning! Spyware detected on your system.</div>
									<div role="alert" class="alert alert-danger alert-dismissible">
										<button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
										Oh snap! Change a few things up and try submitting again. </div>
								</div>
							</div>
						</div>
					</div> <!--Close button example end -->
					
				</div> <!--Close button code and example end -->
			</div>
		</section> <!-- Bootstrap Alert with Close button end-->

		<!-- Propeller Alert -->
		<section class="row component-section">
			
			<!-- Propeller Alert title and description -->
			<div class="col-md-3">
				<div id="propeller-alert">
					<h2>Propeller Alert</h2>
				</div>
                <p>Unlike other Propeller components Alert component is independent of Bootstrap HTML structure.</p>
                <p>In Marterial Design language alert is known as <a href="https://material.google.com/components/snackbars-toasts.html#snackbars-toasts-usage" target="_blank">Snackbar and Toast</a>.</p>
				<p>To specify the position of alert component use <strong>data-positionX</strong> (x-axis positioning with <code>left</code>, <code>right</code>, and <code>center</code> as values.) and <strong>data-positionY</strong> (y-axis positioning with <code>top</code> and <code>bottom</code> as values.) attributes.</p>
			</div> <!-- Propeller Alert title and description end -->
			
			<div class="col-md-9"> 
				
				<!-- Propeller Alert code and example -->
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
								<li class="active"><a href="#behaviour-html" data-toggle="tab">HTML</a></li>
								<li><a href="#behaviour-css" data-toggle="tab">CSS</a></li>
								<li><a href="#behaviour-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="behaviour-html">
								<pre class="pre-codebox line-numbers" data-src="../components/alert/snippets/alert-behaviour.html"></pre>
							</div>
							<div class="tab-pane" id="behaviour-css">
								<pre class="pre-codebox line-numbers" data-src="../components/alert/snippets/alerts.css"></pre>
							</div>
							<div class="tab-pane" id="behaviour-js">
								<pre class="pre-codebox line-numbers" data-src="../components/alert/snippets/alerts.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!-- Propeller alert example -->
					<div class="row">
						<div class="col-md-6"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body text-center alert-custom"> 
									<!--Alert Top Left -->
									<button type="button"  data-positionX="left" data-positionY="top" data-effect="fadeInUp" data-message="You have 1 messages" class="btn pmd-ripple-effect btn-default pmd-btn-raised pmd-alert-toggle">Top Left</button>
									<!--Alert Top Center -->
									<button type="button" data-positionX="center" data-positionY="top" data-effect="fadeInUp" data-message="You have 2 messages" class="btn pmd-ripple-effect btn-default pmd-btn-raised pmd-alert-toggle">Top Center</button>
									<!--Alert Top Right -->
									<button type="button" data-positionX="right" data-positionY="top" data-effect="fadeInUp" data-message="You have 3 messages" class="btn pmd-ripple-effect btn-default pmd-btn-raised pmd-alert-toggle"> Top Right</button>
								</div>
							</div>
							<p class="component-desc">Alert Top</p>
						</div>
						<div class="col-md-6"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body text-center alert-custom"> 
									<!--Alert Bottom Left -->
									<button type="button" data-positionX="left" data-positionY="bottom" data-effect="fadeInDown" data-message="You have 4 messages" class="btn pmd-ripple-effect btn-default pmd-btn-raised pmd-alert-toggle">Bottom Left</button>
									<!--Alert Bottom Center -->
									<button type="button" data-positionX="center" data-positionY="bottom" data-effect="fadeInDown" data-message="You have 5 messages" class="btn pmd-ripple-effect btn-default pmd-btn-raised pmd-alert-toggle">Bottom Center</button>
									<!--Alert Bottom Right -->
									<button type="button" data-positionX="right" data-positionY="bottom" data-effect="fadeInDown" data-message="You have 6 messages" class="btn pmd-ripple-effect btn-default pmd-btn-raised pmd-alert-toggle">Bottom Right</button>
								</div>
							</div>
							<p class="component-desc">Alert Bottom</p>
						</div>
					</div> <!-- Propeller Apert example end -->
					
				</div> <!-- alert code and example end-->
			</div>
		</section> <!-- Propeller Alert end -->
		
		<!-- Propeller alert with action -->
		<section class="row component-section">
			
			<!-- alert with action title and description -->
			<div class="col-md-3">
				<div id="propeller-alert-with-action">
					<h2>Propeller Alert with Action</h2>
				</div>
				<p>This type of Alert comes with an action which is to be performed on the alert message. Along with Propeller Alert HTML use additional attributes - <strong>data-action</strong> (with <code>true</code> and <code>false</code> value) and <strong>data-action-text</strong> (with <code>user defined</code> value).</p>
			</div> <!-- alert with action title and description end -->
			
			<div class="col-md-9"> 
				
				<!-- alert with action code and example -->
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
								<li class="active"><a href="#action-html" data-toggle="tab">HTML</a></li>
								<li><a href="#action-css" data-toggle="tab">CSS</a></li>
								<li><a href="#action-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="action-html">
								<pre class="pre-codebox line-numbers" data-src="../components/alert/snippets/alert-behaviour-action.html"></pre>
							</div>
							<div class="tab-pane" id="action-css">
								<pre class="pre-codebox line-numbers" data-src="../components/alert/snippets/alert-behaviour-action.css"></pre>
							</div>
							<div class="tab-pane" id="action-js">
								<pre class="pre-codebox line-numbers" data-src="../components/alert/snippets/alerts.js"></pre>
							</div>
						</div>
					</div> <!-- code view end-->
					
					<!-- alert with action example -->
					<div class="row">
						<div class="col-md-6"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body text-center alert-custom"> 
									<!--Alert Top Left -->
									<button type="button"  data-positionX="left" data-positionY="top" data-effect="fadeInUp" data-action="true" data-action-text="Close" data-message="You have 1 messages" class="btn pmd-ripple-effect btn-default pmd-btn-raised pmd-alert-toggle">Top Left</button>
									<!--Alert Top Center -->
									<button type="button" data-positionX="center" data-positionY="top" data-effect="fadeInUp" data-action="true" data-action-text="Refresh" data-message="You have 2 messages" class="btn pmd-ripple-effect btn-default pmd-btn-raised pmd-alert-toggle">Top Center</button>
									<!--Alert Top Right -->
									<button type="button" data-positionX="right" data-positionY="top" data-effect="fadeInUp" data-action="true" data-action-text="Ok" data-message="You have 3 messages" class="btn pmd-ripple-effect btn-default pmd-btn-raised pmd-alert-toggle"> Top Right</button>
								</div>
							</div>
							<p class="component-desc">Alert Top</p>
						</div>
						<div class="col-md-6"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body text-center alert-custom"> 
									<!--Alert Bottom Left -->
									<button type="button" data-positionX="left" data-positionY="bottom" data-effect="fadeInDown" data-action="true" data-message="You have 4 messages" class="btn pmd-ripple-effect btn-default pmd-btn-raised pmd-alert-toggle">Bottom Left</button>
									<!--Alert Bottom Center -->
									<button type="button" data-positionX="center" data-positionY="bottom" data-effect="fadeInDown" data-action="true" data-message="You have 5 messages" class="btn pmd-ripple-effect btn-default pmd-btn-raised pmd-alert-toggle">Bottom Center</button>
									<!--Alert Bottom Right -->
									<button type="button" data-positionX="right" data-positionY="bottom" data-effect="fadeInDown" data-action="true" data-message="You have 6 messages" class="btn pmd-ripple-effect btn-default pmd-btn-raised pmd-alert-toggle">Bottom Right</button>
								</div>
							</div>
							<p class="component-desc">Alert Bottom</p>
						</div>
					</div> <!-- alert with action example end -->
					
				</div> <!-- alert with action code and example end -->
			</div>
		</section> <!-- Propeller alert with action end -->
		
		<!-- Propeller alert with basic notification Types -->
		<section class="row component-section">
			
			<!-- alert types title and description -->
			<div class="col-md-3">
				<div id="propeller-alerts-with-basic-notification-types">
					<h2>Propeller Alerts with basic notification types</h2>
				</div>
                <p>These are simple Propeller Alerts with an aditioinal attribute - <strong>data-type</strong> with predefined four  values - <code>alert-success</code>, <code>alert-info</code>, <code>alert-warning</code> or <code>alert-danger</code>.
                </p>
			</div> <!-- alert types title and description end -->
			
			<div class="col-md-9"> 
				
				<!--alert type code and example -->
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
								<li class="active"><a href="#types-html" data-toggle="tab">HTML</a></li>
								<li><a href="#types-css" data-toggle="tab">CSS</a></li>
								<li><a href="#types-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="types-html">
								<pre class="pre-codebox line-numbers" data-src="../components/alert/snippets/alert-type.html"></pre>
							</div>
							<div class="tab-pane" id="types-css">
								<pre class="pre-codebox line-numbers" data-src="../components/alert/snippets/alert-type.css"></pre>
							</div>
							<div class="tab-pane" id="types-js">
								<pre class="pre-codebox line-numbers" data-src="../components/alert/snippets/alerts.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!-- alert types example -->
					<div class="row">
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth">
								<div class="pmd-card-body text-center alert-custom"> 
									<!--Information Alett-->
									<button type="button" data-positionX="left"data-positionY="top"data-effect="fadeInUp"data-message="Heads up! This alert needs your attention, but it's not super important."data-type="information" data-revert="fadeOutUp"class="btn pmd-ripple-effect btn-info pmd-btn-raised pmd-alert-toggle">Alert Information</button>
									<!--Warning Alett-->
									<button type="button" data-positionX="center"data-positionY="top"data-effect="fadeInUp"data-message="Warning! Spyware detected on your system."data-type="warning" class="btn pmd-ripple-effect btn-warning pmd-z-depth pmd-alert-toggle">Alert Warning</button>
									<!--Success Alett-->
									<button type="button" data-positionX="right"data-positionY="top"data-effect="fadeInUp"data-message="Well done! You successfully read this important alert message."data-type="success" class="btn pmd-ripple-effect btn-success pmd-z-depth pmd-alert-toggle">Alert Success</button>
									<!--Error Alert -->
									<button type="button" data-positionX="right"data-positionY="top"data-effect="fadeInUp"data-message="Oh snap! Change a few things up and try submitting again."data-type="error" class="btn pmd-ripple-effect btn-danger pmd-z-depth pmd-alert-toggle">Alert Error</button>
								</div>
							</div>
						</div>
					</div> <!-- alert types example end -->
					
				</div> <!--alert type code and example end -->
			</div>
		</section> <!-- Propeller alert with basic notification end -->
		
		<!-- Configuration starts-->		
		<section class="row component-section">
			<div class="col-md-3">
				<div id="configuration-options">
					<h2>Configuration Options</h2>
				</div>
				<p>The Propeller CSS classes apply various predefined visual enhancements to the Alert. The table lists the available classes and their effects.</p>
			</div>
			<div class="col-md-9">
				<div class="pmd-card pmd-table-card-responsive">
					<div class="pmd-table-card"> 
						<!--table start -->
						<table class="table pmd-table table-hover">
							<thead>
								<tr>
									<th>HTML Attributes</th>
									<th>Effect</th>
									<th>Value</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td data-title="HTML Attributes"><code>data-positionX</code></td>
									<td data-title="Effect">Defines the position of Alert horizontally.</td>
									<td data-title="Value">left, right, center</td>
								</tr>
								<tr>
									<td data-title="HTML Attributes"><code>data-positionY</code></td>
									<td data-title="Effect">Defines the position of Alert vertically.</td>
									<td data-title="Value">top, bottom</td>
								</tr>
								<tr>
									<td data-title="HTML Attributes"><code>data-type</code></td>
									<td data-title="Effect">Defines the type of Data in the alert box.</td>
									<td data-title="Value">information, warning, success, error</td>
								</tr>
								<tr>
									<td data-title="HTML Attributes"><code>data-effect</code></td>
									<td data-title="Effect">Defines the type of animation while showing the alert.</td>
									<td data-title="Value">fadeInUp, fadeInDown</td>
								</tr>
								<tr>
									<td data-title="HTML Attributes"><code>data-action</code></td>
									<td data-title="Effect">Required when your alert demands user to perform some action.</td>
									<td data-title="Value">true, false</td>
								</tr>
								<tr>
									<td data-title="HTML Attributes"><code>data-action-text</code></td>
									<td data-title="Effect">Defines the action that needs to be performed.</td>
									<td data-title="Value">Close, Refresh, Ok, etc.</td>
								</tr>
							</tbody>
						</table>
						<!--table start --> 
					</div>
				</div>
			</div>
		</section> <!-- Configuration ends--> 		
		
		<!-- Events start-->		
		<section class="row component-section">
			<div class="col-md-3">
				<div id="events">
					<h2>Events</h2>
				</div>
				<p>Bootstrap's alert plugin exposes a few events for hooking into alert functionality. See <a href="http://getbootstrap.com/javascript/#alerts" target="_blank">here</a> for more documentation on this.</p>
			</div>
			<div class="col-md-9"> 
				<!--Events card start -->
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
									<td data-title="Class"><code>close.bs.alert</code></td>
									<td data-title="Effect">This event fires immediately when the <code>close</code> instance method is called.</td>
								</tr>
								<tr>
									<td data-title="Class"><code>closed.bs.alert</code></td>
									<td data-title="Effect">This event is fired when the alert has been closed (will wait for CSS transitions to complete).</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!--Events card end -->
				<div class="pmd-card pmd-z-depth js-script pmd-card-custom">
					<pre class="pre-codebox line-numbers" data-src="../components/alert/snippets/events.js"></pre>
				</div>
			</div>
		</section> <!-- Events end-->
	</div>
</div> <!--Alert end -->

<!--footer start -->
<?php include('include/footer.php'); ?>
<!--footer end -->