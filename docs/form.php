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
					<h1 class="pmd-display1">Form</h1>
				</div> <!--end component title and description-->
				
				<!-- component download button dropdown -->
				<div class="col-md-2 col-sm-2 col-xs-12">
					<div class="dropdown pmd-dropdown clearfix pull-right">
						<button class="btn pmd-btn-raised dropdown-toggle pmd-ripple-effect btn-primary custom-primary" type="button" id="dropdownMenuDivider" data-toggle="dropdown" aria-expanded="true">Download</button>
						<!--dropdown-menu -->
						<!--dropdown-menu -->
						<ul aria-labelledby="dropdownMenuDivider" role="menu" class="dropdown-menu dropdown-menu-custom mega-dropdown-menu dropdown-menu-right">
							<li role="presentation" class="right-border">
								<h4>UI Framework</h4>
								<a class="btn btn-success btn-sm pmd-btn-raised pmd-ripple-effect" onClick="downloadUIFramework()" href="../archive/pmd-1.0.0.zip">Download ZIP</a>
							</li>
							<li role="presentation">
								<h4>Standalone</h4>
								<form id='component_form' method="post" action="custom/copy.php">
									<input type="hidden"  name="form" value="form"/>
									<button name='btn_submit' value='form' type="submit" onClick="downloadForm()" class="btn btn-default pmd-btn-raised btn-sm pmd-ripple-effect pmd-btn-flat custom-btn">Download ZIP</button>
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
	
<!--Form-->
<div class="pmd-content pmd-content-custom" id="content"> 
	
	<!--component header -->
	<div class="componant-title-bg"> 
		<div class="container">
			<div class="row">
			
				<!-- component title and description-->
				<div class="col-xs-12">
					<p class="lead">An HTML form is a section of a document containing normal content, markup, special elements called controls (checkboxes, radio buttons, menus, etc.), and labels on those controls. Users generally "complete" a form by modifying its controls (entering text, selecting menu items, etc.), before submitting the form to an agent for processing (e.g., to a Web server, to a mail server, etc.)</p>
				</div><!-- component title and description end--> 
				
			</div>
		</div>
	</div><!--end component header-->

	<div class="container">
		
		<!--component list catagory -->
		<div class="list-group list-group-custom margin-20"> 
			<a class="list-group-item" href="#basic">Bootstrap Form fields</a>
			<a class="list-group-item" href="#field">Text fields</a> 
			<a class="list-group-item" href="#textarea">Text Area</a> 
			<a class="list-group-item" href="#checkbox">Checkbox</a> 
			<a class="list-group-item" href="#radio">Radio</a>
			<a class="list-group-item" href="#toggle">Toggle Switch</a>
			<a class="list-group-item" href="#config">Configuration Options</a> 
		</div><!--end component list catagory -->
		
		<!-- Bootstrap Fields -->
		<section class="row component-section">
			<!-- Text fields title and description -->
			<div class="col-md-3">
				<div id="basic">
					<h2>Bootstrap Form fields</h2>
				</div>
				<p> Bootstrap has some global styling defined for each of the individual form controls. All textual &lt;input&gt;, &lt;textarea&gt;, and &lt;select&gt; elements with <code>.form-control</code> are set to width: 100%; by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing.</p>
			</div><!-- end Text fields title and description -->
			
			<!-- Text fields code, example -->
			<div class="col-md-9">
				<div class="component-box">
				
					<!-- code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
					</div><!-- end code view button -->
					
					<!--code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<!--tabbing start-->
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#basic-html" data-toggle="tab">HTML</a></li>
								<li><a href="#basic-css" data-toggle="tab">CSS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="basic-html">
								<pre class="pre-codebox line-numbers" data-src="../components/form/bootstrap-basic/bootstrap-basic.html"></pre>
							</div>
							<div class="tab-pane" id="basic-css">
								<pre class="pre-codebox line-numbers" data-src="../components/form/bootstrap-basic/bootstrap-basic.css"></pre>
							</div>
						</div>
					</div><!-- end code view --> 
							
					<!-- Text fields example -->
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body"> 
									<!-- Regular Input -->
									<div class="form-group">
										<label for="regular1" class="control-label">Regular Input</label>
										<input type="text" id="regular1" class="form-control">
										</div>
									<!-- Textarea -->
									<div class="form-group">
										<label class="control-label">Text Area</label>
										<textarea required class="form-control"></textarea>
									</div>
                                    <!-- Bootstrap Selectbox -->
                                    <div class="form-group">
                                    	<label for="regular1" class="control-label">Regular Selectbox</label>
                                    	<select class="form-control">
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
									</div>
								</div>
							</div>
							<p class="component-desc">Basic bootstrap elements</p>
						</div>
					</div><!-- end Text fields example -->

				</div>
			</div><!--end Text fields code, example -->
		</section><!-- Bootstrap Fields end --> 
		
		<!-- Text Fields-->
		<section class="row component-section">
			<!-- Text fields title and description -->
			<div class="col-md-3">
				<div id="field">
					<h2>Propeller Form Fields</h2>
				</div>
                <p>Propeller Form Fields consists of Bootstrap HTML structure with Propeller customized classes based on material design standards.</p>
				<p> Add <code>.pmd-textfield</code> to the parent div of input to customize Bootstrap input into Propeller input. Additionally, use <code>.pmd-textfield-floating-label</code> to make input label float upwards.</p>
			</div><!-- end Text fields title and description -->
			
			<!-- Text fields code, example -->
			<div class="col-md-9">
				<div class="component-box">
				
					<!-- code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
					</div><!-- end code view button -->
					
					<!--code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<!--tabbing start-->
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#field-html" data-toggle="tab">HTML</a></li>
								<li><a href="#field-css" data-toggle="tab">CSS</a></li>
								<li><a href="#field-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="field-html">
								<pre class="pre-codebox line-numbers" data-src="../components/textfield/snippets/basic-text-fields.html"></pre>
							</div>
							<div class="tab-pane" id="field-css">
								<pre class="pre-codebox line-numbers" data-src="../components/textfield/snippets/text-fields.css"></pre>
							</div>
							<div class="tab-pane" id="field-js">
								<pre class="pre-codebox line-numbers" data-src="../components/textfield/snippets/text-fields.js"></pre>
							</div>
						</div>
					</div><!-- end code view --> 
							
					<!-- Text fields example -->
					<div class="row">
						<div class="col-md-6">
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body"> 
									<!-- Regular Input -->
									<div class="form-group pmd-textfield">
										<label for="regular1" class="control-label">Regular Input</label>
										<input type="text" id="regular1" class="form-control">
										</div>
									<!-- Password Input -->
									<div class="form-group pmd-textfield">
										<label for="password1" class="control-label">Password</label>
										<input id="password1" class="form-control" type="password">
										</div>
									<!--Help Text Input -->
									<div class="form-group pmd-textfield">
										<label for="help1">Input with help text</label>
										<input type="text" id="help1" class="form-control">
										<p class="help-block">Help text</p>
									</div>
								</div>
							</div>
							<p class="component-desc">Basic elements</p>
						</div>
						<div class="col-md-6">
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body"> 
									<!-- Regular Floating Input -->
									<div class="form-group pmd-textfield pmd-textfield-floating-label">
										<label for="regular1" class="control-label">Regular Input</label>
										<input type="text" id="regular1" class="form-control">
										</div>
									<!-- Password Floating Input -->
									<div class="form-group pmd-textfield pmd-textfield-floating-label">
										<label for="password1" class="control-label">Password</label>
										<input id="password1" class="form-control" type="password">
										</div>
									<!--Help Text Floating Input -->
									<div class="form-group pmd-textfield pmd-textfield-floating-label">
										<label for="help1">Input with help text</label>
										<input type="text" id="help1" class="form-control">
										<p class="help-block">Help text</p>
									</div>
								</div>
							</div>
							<p class="component-desc">Basic elements with floating labels</p>
						</div>
					</div><!-- end Text fields example -->

				</div>
			</div><!--end Text fields code, example -->
		</section><!-- text fields end --> 
		
		<!-- Input sizes-->
		<section class="row component-section">
		 
		 	<!-- Input sizes title and description -->
			<div class="col-md-3">
				<div id="sizes">
					<h2></h2>
				</div>
				<p> Bootstrap provides inputs in various sizes: small, medium and large. Using Bootstrap HTML structure and Propeller customized classes, you can create such inputs with varying sizes.</p>
			</div> <!--end Input sizes title and description -->
			
			<!-- Input sizes code, example -->
			<div class="col-md-9">
				<div class="component-box">
				
					<!-- code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
					</div><!-- end code view button -->
					
					<!--code view -->
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
								<pre class="pre-codebox line-numbers" data-src="../components/textfield/snippets/control-size-text-fields.html"></pre>
							</div>
							<div class="tab-pane" id="size-css">
								<pre class="pre-codebox line-numbers" data-src="../components/textfield/snippets/text-fields.css"></pre>
							</div>
							<div class="tab-pane" id="size-js">
								<pre class="pre-codebox line-numbers" data-src="../components/textfield/snippets/text-fields.js"></pre>
							</div>
						</div>
					</div><!--end code view -->
					
					<!-- Input sizes example -->
					<div class="row">
							<div class="col-md-6">
								<div class="pmd-card pmd-z-depth pmd-card-custom-form">
									<div class="pmd-card-body"> 
										<!-- Large Input -->
										<div class="form-group pmd-textfield form-group-lg">
											<label for="Large" class="control-label">Large input</label>
											<input type="Large" id="regular1" class="form-control input-group-lg" placeholder=".input-lg">
											</div>
										<!-- Default Input -->
										<div class="form-group pmd-textfield">
											<label for="Default" class="control-label">Default input</label>
											<input id="Default" class="form-control" type="text" placeholder="Default input">
											</div>
										<!-- Small Input -->
										<div class="form-group pmd-textfield form-group-sm">
											<label for="Small">Small input</label>
											<input type="text" id="Small" class="form-control" placeholder=".input-sm">
										</div>
									</div>
								</div>
								<p class="component-desc">Control sizes</p>
							</div>
							<div class="col-md-6">
								<div class="pmd-card pmd-z-depth pmd-card-custom-form">
									<div class="pmd-card-body"> 
										<!-- Large Input -->
										<div class="form-group pmd-textfield pmd-textfield-floating-label form-group-lg">
											<label for="Large" class="control-label">Large input</label>
											<input type="Large" id="regular1" class="form-control input-group-lg">
											</div>
										<!-- Default Input -->
										<div class="form-group pmd-textfield pmd-textfield-floating-label">
											<label for="Default" class="control-label">Default input</label>
											<input id="Default" class="form-control" type="text">
											</div>
										<!-- Small Input -->
										<div class="form-group pmd-textfield pmd-textfield-floating-label form-group-sm">
											<label for="Small">Small input</label>
											<input type="text" id="Small" class="form-control" >
										</div>
									</div>
								</div>
								<p class="component-desc">Control sizing with floating labels</p>
							</div>
						</div><!--end Input sizes example -->
					
				</div>
			</div><!--end Text fields code, example -->
		</section><!--end Input sizes-->
		
		
		<!-- Input States-->
		<section class="row component-section">
		
			<!-- input states title and description -->
			<div class="col-md-3">
				<div id="states">
					<h2></h2>
				</div>
				<p>Use <strong>Input states</strong> by adding the <code>disabled</code> boolean attribute on an input to prevent user input and trigger a slightly different look.</p>
				<p>Add the <code>readonly</code> boolean attribute on an input to prevent user input and style the input as disabled.</p>
			</div> <!-- input states title and description end -->
			
			<!-- input states code and example -->
			<div class="col-md-9">
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
								<li class="active"><a href="#states-html" data-toggle="tab">HTML</a></li>
								<li><a href="#states-css" data-toggle="tab">CSS</a></li>
								<li><a href="#states-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="states-html">
								<pre class="pre-codebox line-numbers" data-src="../components/textfield/snippets/states-text-fields.html"></pre>
							</div>
							<div class="tab-pane" id="states-css">
								<pre class="pre-codebox line-numbers" data-src="../components/textfield/snippets/text-fields.css"></pre>
							</div>
							<div class="tab-pane" id="states-js">
								<pre class="pre-codebox line-numbers" data-src="../components/textfield/snippets/text-fields.js"></pre>
							</div>
						</div>
					</div> <!-- code view end-->
					
					<!-- input states example -->				
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body"> 
									<div class="form-group pmd-textfield">
										<label for="first-name" class="control-label">Disabled state</label>
										<input type="text" disabled="" value="Disabled value" id="disabled" class="mat-input form-control">
									</div>
									<div class="form-group pmd-textfield">
										<label for="first-name" class="control-label">Readonly input</label>
										<input type="text" readonly value="Readonly input" id="first-name" class="mat-input form-control">
									</div>
								</div>
							</div>
							<p class="component-desc">Input states</p>
						</div>
						
					</div> <!-- input states example end -->
				</div>	
			</div> <!-- input states code and example end-->
		</section> <!-- Input States end -->
		
		<!-- Validation state -->
		<section class="row component-section">
			
			<!-- validation state title and description -->
			<div class="col-md-3">
				<div id="validation">
					<h2></h2>
				</div>
				<p>Bootstrap provides validation states for error, warning, and success states on form controls. Add <code>.has-warning</code> to the parent div of the input in order to create a warning input field. Similarly, add <code>.has-success</code> and <code>.has-error</code> to create success and error input fields respectively. Using Bootstrap HTML structure and Propeller customized classes, you can create such inputs with varying validation states.</p>
			</div> <!-- validation state title and description end-->
			
			<!-- validation state code and example -->
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
								<li class="active"><a href="#validation-html" data-toggle="tab">HTML</a></li>
								<li><a href="#validation-css" data-toggle="tab">CSS</a></li>
								<li><a href="#validation-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="validation-html">
								<pre class="pre-codebox line-numbers" data-src="../components/textfield/snippets/validation-text-fields.html"></pre>
							</div>
							<div class="tab-pane" id="validation-css">
								<pre class="pre-codebox line-numbers" data-src="../components/textfield/snippets/text-fields.css"></pre>
							</div>
							<div class="tab-pane" id="validation-js">
								<pre class="pre-codebox line-numbers" data-src="../components/textfield/snippets/text-fields.js"></pre>
							</div>
						</div>
					</div> <!-- code view end-->
					
					<!-- validation state example -->
					<div class="row">
						<div class="col-md-6">
								<div class="pmd-card pmd-z-depth pmd-card-custom-form">
									<div class="pmd-card-body"> 
										<!-- warning Input -->
										<div class="form-group pmd-textfield has-warning">
											<label for="inputWarning1" class="control-label">Warning label</label>
											<input type="text" value="" id="inputWarning1" class="form-control">
											<p class="help-block">Help text</p>
										</div>
										<!-- Success Input -->
										<div class="form-group pmd-textfield has-success">
											<label for="inputSuccess1" class="control-label">Success label</label>
											<input type="text" id="inputSuccess1" class="form-control">
											<p class="help-block">Help text</p>
										</div>
										<!-- Error Input -->
										<div class="form-group pmd-textfield has-error">
											<label for="inputError1" class="control-label">Error label</label>
											<input type="email" required class="form-control">
											<p class="help-block">Help text</p>
										</div>
									</div>
								</div>
								<p class="component-desc">Validation states</p>
							</div>
						<div class="col-md-6">
								<div class="pmd-card pmd-z-depth pmd-card-custom-form">
									<div class="pmd-card-body"> 
										<!-- warning floating Input -->
										<div class="form-group pmd-textfield has-warning pmd-textfield-floating-label">
											<label for="inputWarning1" class="control-label">Warning label</label>
											<input type="text" value="" id="inputWarning1" class="form-control">
											</div>
										<!-- Success floating Input -->
										<div class="form-group pmd-textfield has-success pmd-textfield-floating-label">
											<label for="inputSuccess1" class="control-label">Success label</label>
											<input type="text" id="inputSuccess1" class="form-control">
											</div>
										<!-- Error floating Input -->
										<div class="form-group pmd-textfield has-error pmd-textfield-floating-label">
											<label for="inputError1" class="control-label">Error label</label>
											<input type="email" required class="form-control">
											</div>
									</div>
								</div>
								<p class="component-desc">Validation states with floating labels</p>
							</div>
					</div> <!-- validation state example end -->
				</div>
			</div> <!-- validation state code and example end -->
		</section> <!-- Validation state end-->
		
		<!-- Input with icons -->
		<section class="row component-section">
			
			<!-- validation state title and description -->
			<div class="col-md-3">
				<div id="input-icon">
					<h2></h2>
				</div>
				<p>Propeller input fields with icon. Add the div with <code>.input-group-addon</code> containing the icon to create an input field with icon.</p>
			</div> <!-- validation state title and description end-->
			
			<!-- validation state code and example -->
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
								<li class="active"><a href="#input-icon-html" data-toggle="tab">HTML</a></li>
								<li><a href="#input-icon-css" data-toggle="tab">CSS</a></li>
								<li><a href="#input-icon-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="input-icon-html">
								<pre class="pre-codebox line-numbers" data-src="../components/textfield/snippets/input-icon-text-fields.html"></pre>
							</div>
							<div class="tab-pane" id="input-icon-css">
								<pre class="pre-codebox line-numbers" data-src="../components/textfield/snippets/input-icon-text-fields.css"></pre>
							</div>
							<div class="tab-pane" id="input-icon-js">
								<pre class="pre-codebox line-numbers" data-src="../components/textfield/snippets/text-fields.js"></pre>
							</div>
						</div>
					</div> <!-- code view end-->
					
					<!-- validation state example -->
					<div class="row">
						<div class="col-md-6">
								<div class="pmd-card pmd-z-depth pmd-card-custom-form">
									<div class="pmd-card-body"> 
										<!-- User name -->
										<div class="form-group pmd-textfield">
											<label for="inputError1" class="control-label pmd-input-group-label">Username</label>
											<div class="input-group">
												<div class="input-group-addon"><i class="material-icons md-dark pmd-sm">perm_identity</i></div>
												<input type="text" class="form-control" id="exampleInputAmount">
											</div>
										</div>
										<!-- Password -->
										<div class="form-group pmd-textfield">
											<label for="inputError1" class="control-label pmd-input-group-label">Password</label>
											<div class="input-group">
												<div class="input-group-addon"><i class="material-icons md-dark pmd-sm">https</i></div>
												<input type="password" class="form-control" id="exampleInputAmount">
											</div>
										</div>
									</div>
								</div>
								<p class="component-desc">Input fields with icons</p>
							</div>
						<div class="col-md-6">
								<div class="pmd-card pmd-z-depth pmd-card-custom-form">
									<div class="pmd-card-body"> 
										<!-- User name with floating label -->
										<div class="form-group pmd-textfield pmd-textfield-floating-label">
											<label for="inputError1" class="control-label pmd-input-group-label">Username</label>
											<div class="input-group">
												<div class="input-group-addon"><i class="material-icons md-dark pmd-sm">perm_identity</i></div>
												<input type="text" class="form-control" id="exampleInputAmount">
											</div>
										</div>
										<!-- Password with floating label -->
										<div class="form-group pmd-textfield pmd-textfield-floating-label">
											<label for="inputError1" class="control-label pmd-input-group-label">Password</label>
											<div class="input-group">
												<div class="input-group-addon"><i class="material-icons md-dark pmd-sm">https</i></div>
												<input type="password" class="form-control" id="exampleInputAmount">
											</div>
										</div>
									</div>
								</div>
								<p class="component-desc">Input fields with floating labels</p>
							</div>
					</div> <!-- validation state example end -->
				</div>
			</div> <!-- validation state code and example end -->
		</section> <!-- Input with icons-->
		 
		<!-- text area -->
		<section class="row component-section">
		
			<!-- text area title and description -->
			<div class="col-md-3">
				<div id="textarea">
					<h2>Text Area</h2>
				</div>
				<p>Multi-line text fields automatically break to a new line for overflow text and scroll vertically when the cursor reaches the lower edge.</p>
				<p> Add <code>.pmd-textfield-floating-label</code> class to get floating textarea.</p>
			</div> <!-- text area title and description end-->
			
			<!-- text area code and example -->
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
								<li class="active"><a href="#textarea-html" data-toggle="tab">HTML</a></li>
								<li><a href="#textarea-css" data-toggle="tab">CSS</a></li>
								<li><a href="#textarea-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="textarea-html">
								<pre class="pre-codebox line-numbers" data-src="../components/textfield/snippets/text-area.html"></pre>
							</div>
							<div class="tab-pane" id="textarea-css">
								<pre class="pre-codebox line-numbers" data-src="../components/textfield/snippets/text-area.css"></pre>
							</div>
							<div class="tab-pane" id="textarea-js">
								<pre class="pre-codebox line-numbers" data-src="../components/textfield/snippets/text-area.js"></pre>
							</div>
						</div>
					</div> <!-- code view end-->
					
					<!-- text area example -->
					<div class="row">
						<div class="col-md-6">
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body"> 
									<!-- Normal Textarea -->
									<div class="form-group pmd-textfield">
										<label class="control-label">Text Area</label>
										<textarea required class="form-control"></textarea>
									</div>
								</div>
							</div>
							<p class="component-desc">Normal textarea</p>
						</div>
						<div class="col-md-6">
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body"> 
									<!-- Floating Textarea -->
									<div class="form-group pmd-textfield pmd-textfield-floating-label">
										<label class="control-label">Text Area</label>
										<textarea required class="form-control"></textarea>
									</div>
								</div>
							</div>
							<p class="component-desc">Floating Textarea</p>
						</div>
					</div> <!-- text area example end -->
				</div>
			</div> <!-- text area code and example end -->
		</section> <!-- text area end-->
		
		<!-- checkbox -->
		<section class="row component-section">
		
			<!-- checkbox title and description -->
			<div class="col-md-3">
				<div id="checkbox">
					<h2>Checkboxes</h2>
				</div>
				<p>Add <code>.pmd-checkbox</code> in label to create propeller customized checkbox. You can also add <code>.pmd-checkbox-ripple-effect</code> to provide a ripple effect to the checkbox.</p>
			</div> <!-- checkbox title and description end-->
			
			<!-- checkbox code and example -->
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
								<li class="active"><a href="#checkbox-html" data-toggle="tab">HTML</a></li>
								<li><a href="#checkbox-css" data-toggle="tab">CSS</a></li>
								<li><a href="#checkbox-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="checkbox-html">
								<pre class="pre-codebox line-numbers" data-src="../components/checkbox/snippets/checkbox.html"></pre>
							</div>
							<div class="tab-pane" id="checkbox-css">
								<pre class="pre-codebox line-numbers" data-src="../components/checkbox/snippets/checkbox.css"></pre>
							</div>
							<div class="tab-pane" id="checkbox-js">
								<pre class="pre-codebox line-numbers" data-src="../components/checkbox/snippets/checkbox.js"></pre>
							</div>
						</div>
					</div> <!-- code view end-->
					
					<!-- checkbox example -->
					<div class="row">
						<div class="col-md-6">
							<div class="pmd-card pmd-z-depth">
								<div class="pmd-card-body"> 
									<!-- Simple checkbox with label, checked -->
									<div class="checkbox pmd-default-theme">
										<label class="pmd-checkbox pmd-checkbox-ripple-effect">
											<input type="checkbox" value="" checked>
											<span>On</span> </label>
									</div>
										
									<!-- Simple checkbox with label -->
									<div class="checkbox pmd-default-theme">
										<label class="pmd-checkbox pmd-checkbox-ripple-effect">
											<input type="checkbox" value="">
											<span> Option one is this and that&mdash;be sure to include why it's great</span> </label>
									</div>
										
									<!-- Simple checkbox with label, Disabled -->
									<div class="checkbox pmd-default-theme disabled">
										<label class="pmd-checkbox pmd-checkbox-ripple-effect">
										<input type="checkbox" value="" disabled>
										<span>Option two is disabled</span> </label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="pmd-card pmd-card-inverse pmd-z-depth">
								<div class="pmd-card-body"> 
									<!-- Simple checkbox with label, checked -->
									<div class="checkbox pmd-default-theme">
										<label class="pmd-checkbox pmd-checkbox-ripple-effect">
											<input type="checkbox" value="" checked>
											<span>On</span> </label>
									</div>
									<!-- Simple checkbox with label -->
									<div class="checkbox pmd-default-theme">
										<label class="pmd-checkbox pmd-checkbox-ripple-effect">
											<input type="checkbox" value="">
											<span> Option one is this and that&mdash;be sure to include why it's great</span> </label>
									</div>
									<!-- Simple checkbox with label, Disabled -->
									<div class="checkbox pmd-default-theme disabled">
										<label class="pmd-checkbox pmd-checkbox-ripple-effect">
											<input type="checkbox" value="" disabled>
											<span>Option two is disabled</span></label>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- checkbox example end-->
				</div>
			</div> <!-- checkbox code and example end-->
			
		</section> <!-- checkbox end --> 	
		
		<!-- Inline checkbox -->
		<section class="row component-section">
		
			<!-- Inline checkbox title and description -->
			<div class="col-md-3">
				<div>
					<h2></h2>
				</div>
				<p>Inline Checkboxes - Use <code>.checkbox-inline</code> on a series of checkboxes for controls that appear on the same line.</p>
			</div> <!-- Inline checkbox title and description end-->
			
			<!-- Inline checkbox code and example -->
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
								<li class="active"><a href="#inline-checkbox-html" data-toggle="tab">HTML</a></li>
								<li><a href="#inline-checkbox-css" data-toggle="tab">CSS</a></li>
								<li><a href="#inline-checkbox-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="inline-checkbox-html">
								<pre class="pre-codebox line-numbers" data-src="../components/checkbox/snippets/inline-checkbox.html"></pre>
							</div>
							<div class="tab-pane" id="inline-checkbox-css">
								<pre class="pre-codebox line-numbers" data-src="../components/checkbox/snippets/checkbox.css"></pre>
							</div>
							<div class="tab-pane" id="inline-checkbox-js">
								<pre class="pre-codebox line-numbers" data-src="../components/checkbox/snippets/checkbox.js"></pre>
							</div>
						</div>
					</div> <!-- code view end-->
					
					<!-- checkbox example -->
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth">
								<div class="pmd-card-body"> 
									<!--Inline checkboxes-->
									<form>
										<label class="checkbox-inline pmd-checkbox pmd-checkbox-ripple-effect">
											<input type="checkbox" value="" checked>
											<span> 1</span> </label>
										<label class="checkbox-inline pmd-checkbox pmd-checkbox-ripple-effect">
											<input type="checkbox" value="">
											<span> 2</span> </label>
										<label class="checkbox-inline pmd-checkbox pmd-checkbox-ripple-effect">
											<input type="checkbox" value="">
											<span> 3</span> </label>
										<label class="checkbox-inline pmd-checkbox pmd-checkbox-ripple-effect">
											<input type="checkbox" value="">
										</label>
									</form>
								</div>
							</div>
						</div>
					</div> <!-- checkbox example end-->
				</div>
			</div> <!-- Inline checkbox code and example end-->
			
		</section> <!-- Inline checkbox end --> 		
		
		<!-- Radio -->
		<section class="row component-section">
		
			<!-- radio title and description -->
			<div class="col-md-3">
				<div id="radio">
					<h2>Radio</h2>
				</div>
				<p>Add <code>.pmd-radio</code> in label to create a propeller customized radio. You can also add <code>.pmd-radio-ripple-effect</code> to provide a ripple effect to the radio.</p>
			</div> <!-- radio title and description end-->
			
			<!-- radio code and example -->
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
								<li class="active"><a href="#radio-html" data-toggle="tab">HTML</a></li>
								<li><a href="#radio-css" data-toggle="tab">CSS</a></li>
								<li><a href="#radio-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="radio-html">
								<pre class="pre-codebox line-numbers" data-src="../components/radio/snippets/radio.html"></pre>
							</div>
							<div class="tab-pane" id="radio-css">
								<pre class="pre-codebox line-numbers" data-src="../components/radio/snippets/radio.css"></pre>
							</div>
							<div class="tab-pane" id="radio-js">
								<pre class="pre-codebox line-numbers" data-src="../components/radio/snippets/radio.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!-- radio example -->
					<div class="row">
						<div class="col-md-6">
							<div class="pmd-card pmd-z-depth">
								<div class="pmd-card-body"> 
									<!-- Simple radio with label -->
									<div class="radio">
										<label class="pmd-radio pmd-radio-ripple-effect">
											<input type="radio" name="optionsRadios" id="click" value="option1" checked>
											<span for="click">Option one is this and that&mdash;be sure to include why it's great</span> </label>
									</div>
									<!-- Radio button checked -->
									<div class="radio">
										<label class="pmd-radio pmd-radio-ripple-effect">
											<input type="radio" name="optionsRadios" id="click1" value="option1" checked>
											<span for="click1">Option one is this and that&mdash;be sure to include why it's great</span> </label>
									</div>
									<!-- Radio button disable -->
									<div class="radio disabled">
										<label class="pmd-radio pmd-radio-ripple-effect">
											<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
											<span for="optionsRadios3">Option three is disabled</span> </label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="pmd-card pmd-card-inverse pmd-z-depth">
								<div class="pmd-card-body"> 
									<!-- Simple radio with label -->
									<div class="radio">
										<label class="pmd-radio pmd-radio-ripple-effect">
											<input type="radio" name="optionsRadios" id="click4" value="option1">
											<span for="click4">Option one is this and that&mdash;be sure to include why it's great</span> </label>
									</div>
									<!-- Radio button checked -->
									<div class="radio">
										<label class="pmd-radio pmd-radio-ripple-effect">
											<input type="radio" name="optionsRadios" id="click5" value="option2" checked>
											<span for="click5">Option one is this and that&mdash;be sure to include why it's great</span> </label>
									</div>
									<!-- Radio button disable -->
									<div class="radio disabled">
										<label class="pmd-radio pmd-radio-ripple-effect">
											<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
											<span for="optionsRadios3">Option three is disabled</span> </label>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- radio example end -->
				</div>
			</div> <!-- radio code and example end -->
		</section> <!-- Radio end --> 
		
		<!-- Inline radio -->
		<section class="row component-section">
		
			<!-- radio title and description -->
			<div class="col-md-3">
				<div id="radio">
					<h2></h2>
				</div>
				<p>Inline Radio - Use <code>.radio-inline</code> on a series of radio boxes for controls that appear on the same line.</p>
			</div> <!-- radio title and description end-->
			
			<!-- radio code and example -->
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
								<li class="active"><a href="#inline-radio-html" data-toggle="tab">HTML</a></li>
								<li><a href="#inline-radio-css" data-toggle="tab">CSS</a></li>
								<li><a href="#inline-radio-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="inline-radio-html">
								<pre class="pre-codebox line-numbers" data-src="../components/radio/snippets/inline-radio.html"></pre>
							</div>
							<div class="tab-pane" id="inline-radio-css">
								<pre class="pre-codebox line-numbers" data-src="../components/radio/snippets/radio.css"></pre>
							</div>
							<div class="tab-pane" id="inline-radio-js">
								<pre class="pre-codebox line-numbers" data-src="../components/radio/snippets/radio.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!-- radio example -->
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth">
								<div class="pmd-card-body"> 
									<!-- Inline radio -->
									<label class="radio-inline pmd-radio">
										<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
										<span for="inlineRadio1">1</span> </label>
									<label class="radio-inline pmd-radio">
										<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" checked>
										<span for="inlineRadio2">2</span> </label>
									<label class="radio-inline pmd-radio">
										<input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
										<span for="inlineRadio3">3</span> </label>
								</div>
							</div>
						</div>
					</div> <!-- radio example end -->
				</div>
			</div> <!-- radio code and example end -->
		</section> <!-- Inline radio end --> 
		
		<!-- Toggle Switch -->
		<section class="row component-section">
			
			<!-- toogle switch title and description -->
			<div class="col-md-3">
				<div id="toggle">
					<h2>Toggle Switch</h2>
				</div>
				<p>Toggle Switch is - To switch from one setting to another. It implies that there are only two possible settings and that you are switching from the current setting to the other setting.
                For example, light switches that turn a light on or off are toggle switches.</p>
				<p>Add <code>.pmd-switch</code> to the parent div and <code>.pmd-switch-label</code> to the tag containing label.</p>
			</div> <!-- toogle switch title and description end -->
			
			<!-- toggle switch code and example -->
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
								<li class="active"><a href="#toggle-html" data-toggle="tab">HTML</a></li>
								<li><a href="#toggle-css" data-toggle="tab">CSS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="toggle-html">
								<pre class="pre-codebox line-numbers" data-src="../components/toggle-switch/snippets/toggle-button.html"></pre>
							</div>
							<div class="tab-pane" id="toggle-css">
								<pre class="pre-codebox line-numbers" data-src="../components/toggle-switch/snippets/toggle-button.css"></pre>
							</div>
						</div>
					</div> <!-- code view -->
					
					<!-- toggle switch example -->
					<div class="row toggle-button-custom">
						<div class="col-md-6">
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body">
									<div class="pmd-switch">
										<label>
											<input type="checkbox">
											<span class="pmd-switch-label"></span> </label>
									</div>
									<div class="pmd-switch">
										<label>
											<input type="checkbox">
											<span class="pmd-switch-label"></span> </label>
									</div>
								</div>
							</div>
							<p class="component-desc">Light theme</p>
						</div>
						<div class="col-md-6">
							<div class="pmd-card pmd-card-inverse pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body">
									<div class="pmd-switch">
										<label>
											<input type="checkbox">
											<span class="pmd-switch-label"></span> </label>
									</div>
									<div class="pmd-switch">
										<label>
											<input type="checkbox">
											<span class="pmd-switch-label"></span> </label>
									</div>
								</div>
							</div>
							<p class="component-desc">Dark theme</p>
						</div>
					</div> <!-- toggle switch example end -->
						
				</div>
			</div> <!-- toggle switch code and example end -->
		</section> <!-- Toggle Switch end -->		 
		
		<!-- Configuration starts--> 
		<section class="row component-section">
			<div class="col-md-3">
				<div id="config">
					<h2>Configuration Options</h2>
				</div>
				<p>The Propeller CSS classes apply various predefined visual enhancements to the form elements. The table lists the available classes and their effects.</p>
			</div>
			<div class="col-md-9">
				<div class="pmd-card pmd-table-card-responsive">
					<div class="pmd-table-card"> 
						<table class="table pmd-table table-hover">
							<thead>
								<tr>
									<th>Propeller Class</th>
									<th>Effect</th>
									<th>Remark</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td data-title="Class"><code>.pmd-textfield</code></td>
									<td data-title="Effect">Class added for general label and input formatting. </td>
									<td data-title="Remark">Required</td>
								</tr>
								<tr>
									<td data-title="Class"><code>.pmd-textfield-floating-label</code></td>
									<td data-title="Effect">Adds floating animation to the label of input</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Class"><code>.pmd-checkbox</code></td>
									<td data-title="Effect">To create propeller customized checkbox</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Class"><code>.pmd-checkbox-ripple-effect</code></td>
									<td data-title="Effect">Add this class to create ripple effect to checkboxes</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Class"><code>.pmd-radio</code></td>
									<td data-title="Effect">To create propeller customized radiobutton</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Class"><code>.pmd-radio-ripple-effect</code></td>
									<td data-title="Effect">Add this class to create ripple effect to radio</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Class"><code>.pmd-input-group-label</code></td>
									<td data-title="Effect">Add this class to create inline radio</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Class"><code>.pmd-switch</code></td>
									<td data-title="Effect">Add this class to create inline radio</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Class"><code>.pmd-switch-label</code></td>
									<td data-title="Effect">Add this class to create inline radio</td>
									<td data-title="Remark">Optional</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section> <!-- Configuration ends-->
		 
	</div> <!--container end --> 
	
</div> <!--Form-->
 

<!--footer start -->
<?php include('include/footer.php'); ?>
<!--footer end -->