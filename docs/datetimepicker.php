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
					<h1 class="pmd-display1">Datetimepicker</h1>
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
									<input type="hidden"  name="datetimepicker" value="datetimepicker"/>
									<button name='btn_submit' value='datetimepicker' type="submit" onClick="downloaddatetimepicker()" class="btn btn-default pmd-btn-raised btn-sm pmd-ripple-effect pmd-btn-flat custom-btn">Download ZIP</button>
								</form>
							</li>
						</ul><!--end dropdown menu -->
					</div>
				</div> <!--end download component button dropdown -->
			</div>
		</div>
		
	</div>
	<!-- /.container-fluid --> 
	
</nav>
<!--navigation end --> 
	
<!--Datepicker -->
<div class="pmd-content pmd-content-custom" id="content"> 
	
	<!--component header -->
	<div class="componant-title-bg"> 
		<div class="container">
			<div class="row">
				
				<!-- component title and description -->
				<div class="col-xs-12">
					<p class="lead">The Datetimepicker widget allows the user to select a value from a calendar or a time drop-down list as well as direct input. You can find a wide variety of date and time pickers here.</p>
                    <p class="lead">We have used Bootstrap Datetimepicker</a> as a reference which we have then customized based on our Propeller theme.</p>
                    <p class="lead">For more options and documentation, visit : <a href="https://github.com/Eonasdan/bootstrap-datetimepicker" target="_blank">Bootstrap Datetimepicker</a></p>
				</div> <!-- component title and description end -->
				
			</div>
		</div>
	</div> <!--component header end -->
	
	<div class="container"> 
		
		<!-- component list category -->
		<div class="list-group list-group-custom margin-20"> 
			<a class="list-group-item" href="#default">Propeller Datetimepicker</a> 
			<a class="list-group-item" href="#time-picker">Time Picker</a> 
			<a class="list-group-item" href="#linked-pickers">Linked Picker</a> 
			<a class="list-group-item" href="#view-mode">View Mode</a> 
			<a class="list-group-item" href="#disabled-days">Disabled Days of the Month</a> 
			<a class="list-group-item" href="#inline-datepicker">Inline Datetimepicker</a> 
			<a class="list-group-item" href="#popup-datepicker">Datetmepicker in Modal</a> 
			<a class="list-group-item" href="#header-datepicker">Datetimepicker with left header</a> 
		</div> <!-- component list category end -->
		
		<!-- Default datepicker -->
		<section class="row component-section">
			
			<!-- Default datepicker title and description -->
			<div class="col-md-3">
				<div id="default">
					<h2>Propeller Datetimepicker</h2>
					<p> This is the default date and time picker with Propeller theme. </p>
                    <p>Initialize datetimepicker plugin by calling <code>.datetimepicker()</code> function. 
				</div>
			</div> <!-- Default datepicker title and description end -->
			
			<!-- Default datepicker code and example -->
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
								<li class="active"><a href="#default-html" data-toggle="tab">HTML</a></li>
								<li><a href="#default-css" data-toggle="tab">CSS</a></li>
								<li><a href="#default-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="default-html">
								<pre class="pre-codebox line-numbers" data-src="../components/datetimepicker/snippets/datepicker-default.html"></pre>
							</div>
							<div class="tab-pane" id="default-css">
								<pre class="pre-codebox line-numbers" data-src="../components/datetimepicker/snippets/datepicker.css"></pre>
							</div>
							<div class="tab-pane" id="default-js">
								<pre class="pre-codebox line-numbers" data-src="../components/datetimepicker/snippets/datepicker-default.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--default datepicker example -->
					<div class="pmd-card pmd-z-depth pmd-card-custom-view">
						<div class="pmd-card-body"> 
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="regular1" class="control-label">Select Date and Time</label>
								<input type="text" id="datetimepicker-default" class="form-control" />
							</div>
						</div>
					</div> <!--default datepicker example end -->
					
				</div>
			</div> <!-- Default datepicker code and example end -->
		</section> <!-- Default datepicker end -->
		
		<!-- Time Picker -->
		<section class="row component-section">
			
			<!-- Time Picker title and description -->
			<div class="col-md-3">
				<div id="time-picker">
					<h2>Time Picker</h2>
					<p> It is used when you only need to fetch just the time from the user. </p>
				</div>
			</div> <!-- Time Picker title and description end -->
			
			<!-- Time Picker code and example -->
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
								<li class="active"><a href="#time-picker-html" data-toggle="tab">HTML</a></li>
								<li><a href="#time-picker-css" data-toggle="tab">CSS</a></li>
								<li><a href="#time-picker-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="time-picker-html">
								<pre class="pre-codebox line-numbers" data-src="../components/datetimepicker/snippets/datepicker-time.html"></pre>
							</div>
							<div class="tab-pane" id="time-picker-css">
								<pre class="pre-codebox line-numbers" data-src="../components/datetimepicker/snippets/datepicker.css"></pre>
							</div>
							<div class="tab-pane" id="time-picker-js">
								<pre class="pre-codebox line-numbers" data-src="../components/datetimepicker/snippets/datepicker-time.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--Time Picker example -->
					<div class="pmd-card pmd-z-depth pmd-card-custom-view">
						<div class="pmd-card-body"> 
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="regular1" class="control-label">Select Time</label>
								<input type="text" id="timepicker" class="form-control" />
							</div>
						</div>
					</div> <!--Time Picker example end -->
					
				</div>
			</div> <!-- Time Picker code and example end -->
		</section> <!-- Time Picker end --> 
		
		<!-- Linked pickers -->
		<section class="row component-section">
			
			<!-- Linked pickers title and description -->
			<div class="col-md-3">
				<div id="linked-pickers">
					<h2>Linked Picker</h2>
					<p> These are two individual date and time pickers, of which, one is used to select start date and time and the other is used to select end date and time. </p>
				</div>
			</div> <!-- Linked pickers title and description end -->
			
			<!-- Linked pickers code and example -->
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
								<li class="active"><a href="#linked-pickers-html" data-toggle="tab">HTML</a></li>
								<li><a href="#linked-pickers-css" data-toggle="tab">CSS</a></li>
								<li><a href="#linked-pickers-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="linked-pickers-html">
								<pre class="pre-codebox line-numbers" data-src="../components/datetimepicker/snippets/datepicker-linked.html"></pre>
							</div>
							<div class="tab-pane" id="linked-pickers-css">
								<pre class="pre-codebox line-numbers" data-src="../components/datetimepicker/snippets/datepicker.css"></pre>
							</div>
							<div class="tab-pane" id="linked-pickers-js">
								<pre class="pre-codebox line-numbers" data-src="../components/datetimepicker/snippets/datepicker-linked.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--Linked pickers example -->
					<div class="pmd-card pmd-z-depth pmd-card-custom-view">
						<div class="pmd-card-body">
							<div class="row">
								<div class="col-sm-6"> 
									<div class="form-group pmd-textfield pmd-textfield-floating-label">
										<label for="regular1" class="control-label">Start Date</label>
										<input type="text" id="datepicker-start" class="form-control" />
									</div>
								</div>
								<div class="col-sm-6"> 
									<div class="form-group pmd-textfield pmd-textfield-floating-label">
										<label for="regular1" class="control-label">End Date</label>
										<input type="text" id="datepicker-end" class="form-control" />
									</div>
								</div>
							</div>
						</div>
					</div> <!--Linked pickers example end -->
					
				</div>
			</div> <!-- Linked pickers code and example end -->
		</section> <!-- Linked pickers end --> 		
		
		<!-- View Mode -->
		<section class="row component-section">
			
			<!-- View mode title and description -->
			<div class="col-md-3">
				<div id="view-mode">
					<h2>View Mode</h2>
					<p> This one is used when you want the user to select a year and month. For example: This kind of picker is used for selecting expiry date of a card. </p>
				</div>
			</div> <!-- View mode title and description end -->
			
			<!-- View mode code and example -->
			<div class="col-md-9"> 
				<!-- View Mode section start -->
				<div class="component-box"> 
					
					<!-- code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
					</div> <!-- code view button end -->
					
					<!--code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#view-mode-html" data-toggle="tab">HTML</a></li>
								<li><a href="#view-mode-css" data-toggle="tab">CSS</a></li>
								<li><a href="#view-mode-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="view-mode-html">
								<pre class="pre-codebox line-numbers" data-src="../components/datetimepicker/snippets/datepicker-view-mode.html"></pre>
							</div>
							<div class="tab-pane" id="view-mode-css">
								<pre class="pre-codebox line-numbers" data-src="../components/datetimepicker/snippets/datepicker.css"></pre>
							</div>
							<div class="tab-pane" id="view-mode-js">
								<pre class="pre-codebox line-numbers" data-src="../components/datetimepicker/snippets/datepicker-view-mode.js"></pre>
							</div>
						</div>
					</div> <!--code view end -->
					
					<!-- view mode example -->
					<div class="pmd-card pmd-z-depth pmd-card-custom-view">
						<div class="pmd-card-body"> 
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="regular1" class="control-label">Select Year and Month</label>
								<input type="text" id="datepicker-view-mode" class="form-control" />
							</div>
						</div>
					</div> <!-- view mode example end -->
				</div>
			</div> <!-- View mode code and example end -->
		</section> <!-- View Mode end -->		 
		
		<!-- Disabled Datepicker -->
		<section class="row component-section">
			
			<!-- Disabled Datepicker title and description -->
			<div class="col-md-3">
				<div id="disabled-days">
					<h2>Disabled Days of the Month</h2>
					<p> This is a date and time picker which can be used when you want to show few days of the month as disabled. For exmaple: Here, saturdays and sundays are shown as disabled. </p>
				</div>
			</div> <!-- Disabled Datepicker title and description end -->
			
			<!-- Disabled Datepicker code and example -->
			<div class="col-md-9"> 
				<div class="component-box"> 
					
					<!--code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
					</div> <!--code view button end-->
					
					<!--code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#disabled-days-html" data-toggle="tab">HTML</a></li>
								<li><a href="#disabled-days-css" data-toggle="tab">CSS</a></li>
								<li><a href="#disabled-days-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="disabled-days-html">
								<pre class="pre-codebox line-numbers" data-src="../components/datetimepicker/snippets/datepicker-disable.html"></pre>
							</div>
							<div class="tab-pane" id="disabled-days-css">
								<pre class="pre-codebox line-numbers" data-src="../components/datetimepicker/snippets/datepicker.css"></pre>
							</div>
							<div class="tab-pane" id="disabled-days-js">
								<pre class="pre-codebox line-numbers" data-src="../components/datetimepicker/snippets/datepicker-disable.js"></pre>
							</div>
						</div>
					</div> <!--code view end -->
					
					<!-- disabled datepicker example -->
					<div class="row">
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body"> 
									<div class="form-group pmd-textfield pmd-textfield-floating-label">
										<label for="regular1" class="control-label">Select Date and Time</label>
										<input type="text" id="datepicker-disabled-days" class="form-control" />
									</div>
								</div>
							</div>
						</div>
					</div> <!-- disabled datepicker example end -->
					
				</div>
			</div> <!-- Disabled Datepicker code and example end -->
		</section> <!-- Disabled Datepicker end -->		 
		
		<!-- Inline Datepicker -->
		<section class="row component-section">
			
			<!-- Inline Datepicker title and description -->
			<div class="col-md-3">
				<div id="inline-datepicker">
					<h2>Inline Datetimepicker</h2>
					<p> Such type of datetimepickers are by default displayed as visible. </p>
				</div>
			</div> <!-- Inline Datepicker title and description end-->
			
			<!-- Inline Datepicker code and example -->
			<div class="col-md-9"> 
				<div class="component-box"> 
					
					<!--code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
					</div> <!--code view button end -->
					
					<!--code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#inline-datepicker-html" data-toggle="tab">HTML</a></li>
								<li><a href="#inline-datepicker-css" data-toggle="tab">CSS</a></li>
								<li><a href="#inline-datepicker-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="inline-datepicker-html">
								<pre class="pre-codebox line-numbers" data-src="../components/datetimepicker/snippets/datepicker-inline.html"></pre>
							</div>
							<div class="tab-pane" id="inline-datepicker-css">
								<pre class="pre-codebox line-numbers" data-src="../components/datetimepicker/snippets/datepicker.css"></pre>
							</div>
							<div class="tab-pane" id="inline-datepicker-js">
								<pre class="pre-codebox line-numbers" data-src="../components/datetimepicker/snippets/datepicker-inline.js"></pre>
							</div>
						</div>
					</div> <!--code view end -->
					
					<!--Inline Datepicker example -->
					<div class="pmd-card pmd-z-depth pmd-card-custom-view">
						<div class="pmd-card-body"> 
							<div id="datepicker-inline"></div>
						</div>
					</div> <!--Inline Datepicker example end -->
					
				</div>
			</div> <!-- Inline Datepicker code and example end -->
		</section> <!-- Inline Datepicker end --> 		
		
		<!-- Datepicker in popup -->
		<section class="row component-section">
			
			<!-- datepicker in popup title and description -->
			<div class="col-md-3">
				<div id="popup-datepicker">
					<h2>Datetimepicker in Modal</h2>
					<p> When you click to select the date and time in this case, a modal appears containing the datetimepicker. The modal also consists of <code>cancel</code> and <code>select</code> button in order to submit or cancel the date and time selected. </p>
				</div>
			</div> <!-- datepicker in popup title and description end -->
			
			<!-- datepicker in popup code and example -->
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
								<li class="active"><a href="#popup-datepicker-html" data-toggle="tab">HTML</a></li>
								<li><a href="#popup-datepicker-css" data-toggle="tab">CSS</a></li>
								<li><a href="#popup-datepicker-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="popup-datepicker-html">
								<pre class="pre-codebox line-numbers" data-src="../components/datetimepicker/snippets/datepicker-popup.html"></pre>
							</div>
							<div class="tab-pane" id="popup-datepicker-css">
								<pre class="pre-codebox line-numbers" data-src="../components/datetimepicker/snippets/datepicker.css"></pre>
							</div>
							<div class="tab-pane" id="popup-datepicker-js">
								<pre class="pre-codebox line-numbers" data-src="../components/datetimepicker/snippets/datepicker-popup.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--Datepicke in popup example -->
					<div class="pmd-card pmd-z-depth pmd-card-custom-view">
						<div class="pmd-card-body"> 
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="regular1" class="control-label">Select Date and Time</label>
								<input type="text" data-datepicker-popup="true" data-datepicker="datepicker-popup-inline" class="form-control" data-target="#datepicker-dialog" data-toggle="modal" />
							</div>
							
							<div tabindex="-1" class="modal fade" id="datepicker-dialog" style="display: none;" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content"> 
										<div id="datepicker-popup-inline"></div>
										<div class="modal-footer">
											<button type="button" class="btn pmd-ripple-effect btn-default" aria-hidden="true" data-dismiss="modal">Cancel</button>
											<button type="button" class="btn pmd-ripple-effect btn-primary">Select</button>
										</div>
									</div>
								</div>
							</div>
							<!-- Dialog Simple datepicker--> 
							
						</div>
					</div> <!--Datepicker in popup example end -->
					
				</div>
			</div> <!-- datepicker in popup code and example end -->
		</section> <!-- Datepicke in popup end -->		 
		
		<!-- Datepicke with left header -->
		<section class="row component-section">
			
			<!-- Datepicke with left header title and description --> 
			<div class="col-md-3">
				<div id="header-datepicker">
					<h2>Datetimepicker with left header</h2>
					<p> In such type of date and time picker the header of the picker is displayed to the left. It displays current date significantly. </p>
				</div>
			</div> <!-- Datepicke with left header title and description end -->
			
			<!-- Datepicke with left header code and example -->  
			<div class="col-md-9"> 
				<div class="component-box"> 
					
					<!--code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
					</div> <!--code view button end -->
					
					<!--code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#header-left-html" data-toggle="tab">HTML</a></li>
								<li><a href="#header-left-css" data-toggle="tab">CSS</a></li>
								<li><a href="#header-left-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="header-left-html">
								<pre class="pre-codebox line-numbers" data-src="../components/datetimepicker/snippets/datepicker-left-header.html"></pre>
							</div>
							<div class="tab-pane" id="header-left-css">
								<pre class="pre-codebox line-numbers" data-src="../components/datetimepicker/snippets/datepicker.css"></pre>
							</div>
							<div class="tab-pane" id="header-left-js">
								<pre class="pre-codebox line-numbers" data-src="../components/datetimepicker/snippets/datepicker-left-header.js"></pre>
							</div>
						</div>
					</div> <!--code view end -->
					
					<!--Datepicker with left header example -->
					<div class="pmd-card pmd-z-depth pmd-card-custom-view">
						<div class="pmd-card-body"> 
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="regular1" class="control-label">Select Date and Time</label>
								<input type="text" id="datepicker-left-header" data-header-left="true" class="form-control" />
							</div>							
						</div>
					</div> <!--Datepicker with left header example end-->
				</div>
			</div> <!-- Datepicke with left header code and example end -->
		</section> <!-- Datepicke with left header end --> 
		
		
	</div>
</div> <!--Datepicker end -->
	
<!--footer start -->
<?php include('include/footer.php'); ?>
<!--footer end -->