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
					<h1 class="pmd-display1">Button</h1>
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
									<input type="hidden"  name="button" value="button"/>
									<button name='btn_submit' value='button' type="submit" onClick="downloadButton()" class="btn btn-default pmd-btn-raised btn-sm pmd-ripple-effect pmd-btn-flat custom-btn">Download ZIP</button>
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

<!-- Buttons -->
<div class="pmd-content pmd-content-custom btn-component" id="content"> 
	
	<!--component header -->
	<div class="componant-title-bg"> 
		<div class="container">
			<div class="row">
				
				<!-- component title and description -->
				<div class="col-xs-12">
					<p class="lead">Button component is an enhanced version of the standard HTML <code><</code><code>button</code><code>></code> element. A button consists of text and/or an image that clearly communicates what action will occur when user clicks or touches it. Propeller button component provides various types of buttons, and allows user to add both display and click effects.</p>
				</div> <!-- component title and description end -->
				
			</div>
		</div>
	</div> <!--component header end -->
	
	<div class="container"> 
		
		<!-- component list category -->
		<div class="list-group list-group-custom margin-20"> 
			<a class="list-group-item" href="#bootstrap-button">Bootstrap Button</a> 
			<a class="list-group-item" href="#propeller-button">Propeller Button</a> 
			<a class="list-group-item" href="#raised-button">Raised Button</a> 
			<a class="list-group-item" href="#flat-button">Flat Button</a>
			<a class="list-group-item" href="#outline-button">Outline Button</a> 
			<a class="list-group-item" href="#fab-button">Floating Action Button (FAB)</a> 
			<a class="list-group-item" href="#raised-fab-button">Raised Floating Action Button</a> 
			<a class="list-group-item" href="#flat-fab-button">Flat Floating Action Button</a> 
			<a class="list-group-item" href="#button-sizes">Button Sizes</a> 
			<a class="list-group-item" href="#button-groups">Button Group</a>
			<a class="list-group-item" href="#configuration-options">Configuration Options</a> 
		</div> <!-- component list category end-->
		
		<!-- Bootstrap button -->
		<section class="row component-section">
			
			<!-- Bootstrap button title and description --> 
			<div class="col-md-3">
				<div id="bootstrap-button">
					<h2>Bootstrap Button</h2>
				</div>
				<p>Bootstrap provides different classes for button based upon its purpose. For example - Include Default Button to the code by adding <code>.btn-default</code>.</p>
			</div> <!-- Default button title and description end --> 
			
			<div class="col-md-9">
			
				<!-- Bootstrap button code and example --> 
				<div class="component-box">
					
					<!-- code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
					</div> <!-- code view button  end-->
					
					<!-- code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#default-btn-html" data-toggle="tab">HTML</a></li>
								<li><a href="#default-btn-css" data-toggle="tab">CSS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="default-btn-html">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button-default.html"></pre>
							</div>
							<div class="tab-pane" id="default-btn-css">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/bootstrap-basic.css"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--Bootstrap button example -->
					<div class="pmd-card pmd-z-depth card-custom-view">
						<div class="pmd-card-body"> 
							<!-- Default button with a ripple effect -->
							<button type="button" class="btn btn-default"> Default </button >
							
							<!--Primary button with a ripple effect-->
							<button type="button" class="btn btn-primary"> Primary </button >
							
							<!--Success button with a ripple effect-->
							<button type="button" class="btn btn-success"> Success </button >
							
							<!--Information button with a ripple effect-->
							<button type="button" class="btn btn-info"> Info </button >
							
							<!--Warning button with a ripple effect -->
							<button type="button" class="btn btn-warning"> Warning </button >
							
							<!--Danger button with a ripple effect -->
							<button type="button" class="btn btn-danger"> Danger </button >
							
							<!--Link with a ripple effect -->
							<button type="button" class="btn btn-link"> Link </button >
						</div>
					</div> <!--Bootstrap button example end-->
					
				</div> <!-- Bootstrap button code and example end --> 
			</div>
		</section> <!-- Bootstrap button end --> 		
		
		<!-- Propeller button -->
		<section class="row component-section">
			
			<!-- Default button title and description --> 
			<div class="col-md-3">
				<div id="propeller-button">
					<h2>Propeller Button</h2>
				</div>
				<p>Propeller button consists of Bootstrap HTML structure with Propeller customized classes based on material design standards. Add <code>.pmd-ripple-effect</code> followed by Bootstrap classes to get ripple effect to button.</p>
			</div> <!-- Default button title and description end --> 
			
			<div class="col-md-9">
			
				<!-- Default button code and example --> 
				<div class="component-box">
					
					<!-- code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
					</div> <!-- code view button  end-->
					
					<!-- code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#propeller-btn-html" data-toggle="tab">HTML</a></li>
								<li><a href="#propeller-btn-css" data-toggle="tab">CSS</a></li>
								<li><a href="#propeller-btn-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="propeller-btn-html">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button-propeller.html"></pre>
							</div>
							<div class="tab-pane" id="propeller-btn-css">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.css"></pre>
							</div>
							<div class="tab-pane" id="propeller-btn-js">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--Bootstrap button example -->
					<div class="pmd-card pmd-z-depth card-custom-view">
						<div class="pmd-card-body"> 
							<!-- Default button with a ripple effect -->
							<button type="button" class="btn pmd-ripple-effect btn-default"> Default </button >
							
							<!--Primary button with a ripple effect-->
							<button type="button" class="btn pmd-ripple-effect btn-primary"> Primary </button >
							
							<!--Success button with a ripple effect-->
							<button type="button" class="btn pmd-ripple-effect btn-success"> Success </button >
							
							<!--Information button with a ripple effect-->
							<button type="button" class="btn pmd-ripple-effect btn-info"> Info </button >
							
							<!--Warning button with a ripple effect -->
							<button type="button" class="btn pmd-ripple-effect btn-warning"> Warning </button >
							
							<!--Danger button with a ripple effect -->
							<button type="button" class="btn pmd-ripple-effect btn-danger"> Danger </button >
							
							<!--Link with a ripple effect -->
							<button type="button" class="btn pmd-ripple-effect btn-link"> Link </button >
						</div>
					</div> <!--default button example end-->
					
				</div> <!-- Default button code and example end --> 
			</div>
		</section> <!-- Propeller button end --> 		
		
		<!-- Raised button-->
		<section class="row component-section"> 
			
			<!-- Raised button title and description -->
			<div class="col-md-3">
				<div id="raised-button">
					<h2>Raised Button</h2>
				</div>
				<p>Raised Button is used to give prominence to actions in a layouts with a lot of varying content. Include Raised Button to the code by adding <code>.pmd-btn-raised</code>.</p>
			</div> <!-- Raised button title and description end-->
			
			<div class="col-md-9">
				
				<!-- Raised button code and example -->
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
								<li class="active"><a href="#raised-btn-html" data-toggle="tab">HTML</a></li>
								<li><a href="#raised-btn-css" data-toggle="tab">CSS</a></li>
								<li><a href="#raised-btn-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="raised-btn-html">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button-raised.html"></pre>
							</div>
							<div class="tab-pane" id="raised-btn-css">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.css"></pre>
							</div>
							<div class="tab-pane" id="raised-btn-js">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.js"></pre>
							</div>
						</div>
					</div> <!-- code view end-->
					
					<!--raised button example -->
					<div class="pmd-card pmd-z-depth card-custom-view">
						<div class="pmd-card-body"> 
							<!--Default raised button with ripple effect-->
							<button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-default">Default</button>
							
							<!--Primary raised button with ripple effect -->
							<button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-primary">Primary</button>
							
							<!-- Success raised button with ripple effect -->
							<button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-success">Success</button>
							
							<!-- Information raised button with ripple effect -->
							<button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-info">Info</button>
							
							<!-- Warning raised button with ripple effect -->
							<button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-warning">Warning</button>
							
							<!-- Danger raised button with ripple effect -->
							<button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-danger">Danger</button>
							
							<!-- Link raised with ripple effect -->
							<button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-link">Link</button>
						</div>
					</div> <!--raised button example end -->
					
				</div> <!-- Raised button code and example end -->
			</div>
			<!--buttton raised section end  --> 
		</section> <!-- Raised button end --> 
		
		<!-- Flat button -->
		<section class="row component-section">
			
			<!-- Flat button title and description -->
			<div class="col-md-3">
				<div id="flat-button">
					<h2>Flat Button</h2>
				</div>
				<p>Flat Button is text-only button. Include Flat Button to the code by adding <code>.pmd-btn-flat</code>.</p>
			</div> <!-- Flat button title and description end-->
			
			<div class="col-md-9">
			
				<!-- Flat button code and example -->
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
								<li class="active"><a href="#flat-btn-html" data-toggle="tab">HTML</a></li>
								<li><a href="#flat-btn-css" data-toggle="tab">CSS</a></li>
								<li><a href="#flat-btn-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="flat-btn-html">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button-flat.html"></pre>
							</div>
							<div class="tab-pane" id="flat-btn-css">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.css"></pre>
							</div>
							<div class="tab-pane" id="flat-btn-js">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--Flat button example  -->
					<div class="pmd-card pmd-z-depth card-custom-view">
						<div class="pmd-card-body"> 
							<!-- Default flat button with ripple effect -->
							<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-default">Default</button>
							
							<!-- Primary flat button with ripple effect -->
							<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-primary">Primary</button>
							
							<!-- Success flat button with ripple effect -->
							<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-success">Success</button>
							
							<!-- Information flat button with ripple effect -->
							<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-info">Info</button>
							
							<!-- Warning flat button with ripple effect -->
							<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-warning">Warning</button>
							
							<!-- Danger flat button with ripple effect -->
							<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-danger">Danger</button>
							
							<!-- Link flat with ripple effect -->
							<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-link">Link</button>
						</div>
					</div> <!--Flat button example end -->
					
				</div> <!-- Flat button code and example end-->
			</div>
		</section> <!-- Flat button end -->
		
		<!-- Outline button -->
		<section class="row component-section">
			
			<!-- Outline button title and description -->
			<div class="col-md-3">
				<div id="outline-button">
					<h2>Outline Button</h2>
				</div>
				<p>Outline Button is a button with a border rather that background color. It is generally used to define secondary action. Include Outline Button to the code by adding <code>.pmd-btn-outline</code>.</p>
			</div> <!-- Flat button title and description end-->
			
			<div class="col-md-9">
			
				<!-- Outline button code and example -->
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
								<li class="active"><a href="#outline-btn-html" data-toggle="tab">HTML</a></li>
								<li><a href="#outline-btn-css" data-toggle="tab">CSS</a></li>
								<li><a href="#outline-btn-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="outline-btn-html">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button-outline.html"></pre>
							</div>
							<div class="tab-pane" id="outline-btn-css">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.css"></pre>
							</div>
							<div class="tab-pane" id="outline-btn-js">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--Outline button example  -->
					<div class="pmd-card pmd-z-depth card-custom-view">
						<div class="pmd-card-body"> 
							<!-- Default flat button with ripple effect -->
							<button type="button" class="btn pmd-btn-outline pmd-ripple-effect btn-default">Default</button>
							
							<!-- Primary flat button with ripple effect -->
							<button type="button" class="btn pmd-btn-outline pmd-ripple-effect btn-primary">Primary</button>
							
							<!-- Success flat button with ripple effect -->
							<button type="button" class="btn pmd-btn-outline pmd-ripple-effect btn-success">Success</button>
							
							<!-- Information flat button with ripple effect -->
							<button type="button" class="btn pmd-btn-outline pmd-ripple-effect btn-info">Info</button>
							
							<!-- Warning flat button with ripple effect -->
							<button type="button" class="btn pmd-btn-outline pmd-ripple-effect btn-warning">Warning</button>
							
							<!-- Danger flat button with ripple effect -->
							<button type="button" class="btn pmd-btn-outline pmd-ripple-effect btn-danger">Danger</button>
							
							<!-- Link flat with ripple effect -->
							<button type="button" class="btn pmd-btn-outline pmd-ripple-effect btn-link">Link</button>
						</div>
					</div> <!--Outline button example end -->
				</div> <!-- Outline button code and example end-->
			</div>
		</section> <!-- Outline button end -->
		 
		<!-- FAB button -->
		<section class="row component-section">
			
			<!-- FAB button title and description -->
			<div class="col-md-3">
				<div id="fab-button">
					<h2>Floating Action Button (FAB)</h2>
				</div>
				<p>Include FAB Button to the code by adding <code>.pmd-btn-fab</code>.</p>
			</div> <!-- FAB button title and description end-->
			
			<!-- FAB button code and example -->
			<div class="col-md-9">		
				<div class="component-box">
				
					<!-- code view button-->
					<div class="pmd-card-title custom-heading clearfix"> <a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
					</div> <!-- code view button end-->
					
					<!-- code view-->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#circle-btn-html" data-toggle="tab">HTML</a></li>
								<li><a href="#circle-btn-css" data-toggle="tab">CSS</a></li>
								<li><a href="#circle-btn-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="circle-btn-html">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button-circle.html"></pre>
							</div>
							<div class="tab-pane" id="circle-btn-css">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button-with-icon.css"></pre>
							</div>
							<div class="tab-pane" id="circle-btn-js">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--FAB button example -->
					<div class="pmd-card pmd-z-depth pmd-card-custom-view">
						<div class="pmd-card-body"> 

							<!-- Default circle button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-ripple-effect btn-default" type="button"><i class="material-icons pmd-sm">add</i></button>
							
							<!-- Primary circle button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">star</i></button>
							
							<!-- Information circle button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-ripple-effect btn-info" type="button"><i class="material-icons pmd-sm">info</i></button>
							
							<!-- Success circle button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-ripple-effect btn-success" type="button"><i class="material-icons pmd-sm">check</i></button>
							
							<!-- Link circle button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-ripple-effect btn-link" type="button">Link</button>
						</div>
					</div> <!--FAB button example end-->
					
				</div>
			</div> <!-- FAB button code and example end -->
		</section> <!-- FAB button end --> 
		
		<!-- Raised FAB button-->
		<section class="row component-section">
			
			<!-- FAB raised button title and description -->
			<div class="col-md-3">
				<div id="raised-fab-button">
					<h2>Raised Floating Action Button</h2>
				</div>
				<p>Include Raised Floating Action Button to the code by adding <code>.pmd-btn-fab .pmd-btn-raised</code>.</p>
			</div> <!-- FAB raised button title and description end-->
			
			<!-- FAB raised button code and example -->
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
								<li class="active"><a href="#circle-raised-btn-html" data-toggle="tab">HTML</a></li>
								<li><a href="#circle-raised-btn-css" data-toggle="tab">CSS</a></li>
								<li><a href="#circle-raised-btn-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="circle-raised-btn-html">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button-circle-raised.html"></pre>
							</div>
							<div class="tab-pane" id="circle-raised-btn-css">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button-with-icon.css"></pre>
							</div>
							<div class="tab-pane" id="circle-raised-btn-js">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->

					<!--FAB raised button example -->
					<div class="pmd-card pmd-z-depth pmd-card-custom-view">
						<div class="pmd-card-body"> 

							<!-- Default raised circle button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default" type="button"><i class="material-icons pmd-sm">add</i></button>
							
							<!-- Primary raised circle button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">star</i></button>
							
							<!-- Information raised circle button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-info" type="button"><i class="material-icons pmd-sm">info</i></button>
							
							<!-- Success raised circle button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-success" type="button"><i class="material-icons pmd-sm">check</i></button>
							
							<!-- Link raised circle button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-link" type="button">Link</button>
						</div>
					</div> <!--FAB raised button example end -->
					
				</div>
			</div> <!-- FAB raised button code and example end -->
		</section> <!-- FAB Raised button end --> 
		
		<!-- FAB Flat button -->
		<section class="row component-section">
			
			<!-- FAB Flat button title and description -->
			<div class="col-md-3">
				<div id="flat-fab-button">
					<h2>Flat Floating Action Button</h2>
				</div>
				<p>Include Flat FAB Button to the code by adding <code>.pmd-btn-fab .pmd-btn-flat</code>.</p>
			</div> <!-- FAB Flat button title and description end -->
			
			<!-- FAB Flat button code and example -->
			<div class="col-md-9">
				<div class="component-box">
					
					<!-- code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
					</div> <!-- code view button end -->
					
					<!-- code view-->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#circle-flat-btn-html" data-toggle="tab">HTML</a></li>
								<li><a href="#circle-flat-btn-css" data-toggle="tab">CSS</a></li>
								<li><a href="#circle-flat-btn-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="circle-flat-btn-html">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button-circle-flat.html"></pre>
							</div>
							<div class="tab-pane" id="circle-flat-btn-css">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button-with-icon.css"></pre>
							</div>
							<div class="tab-pane" id="circle-flat-btn-js">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--FAB flat button example -->
					<div class="pmd-card pmd-z-depth pmd-card-custom-view">
						<div class="pmd-card-body"> 
							<!-- Default flat FAB button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default" type="button"><i class="material-icons pmd-sm">add</i></button>
							
							<!-- Primary flat FAB button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">star</i></button>
							
							<!-- Information flat FAB button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-info" type="button"><i class="material-icons pmd-sm">info</i></button>
							
							<!-- Success flat FAB button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-success" type="button"><i class="material-icons pmd-sm">check</i></button>
							
							<!-- Link flat FAB button with ripple effect -->
							<button class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-link" type="button">Link</button>
						</div>
					</div> <!--circle flat button example end -->
					
				</div>
			</div> <!-- FAB Flat button code and example end -->
		</section> <!-- FAB Flat button end --> 
		
		<!-- variant sizes buttons -->
		<section class="row component-section">
			
			<!-- variant sizes buttons title and description -->
			<div class="col-md-3">
				<div id="sizes">
					<h2>Button Sizes</h2>
				</div>
				<p>Want Fancy larger or smaller button? Add <code>.btn-lg</code>, <code>.btn-sm</code> for additional sizes.</p>
			</div> <!-- variant sizes buttons title and description end -->
			
			<!-- variant sizes buttons code and example -->
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
								<li class="active"><a href="#size-btn-html" data-toggle="tab">HTML</a></li>
								<li><a href="#size-btn-css" data-toggle="tab">CSS</a></li>
								<li><a href="#size-btn-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="size-btn-html">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button-sizes.html"></pre>
							</div>
							<div class="tab-pane" id="size-btn-css">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button-with-icon.css"></pre>
							</div>
							<div class="tab-pane" id="size-btn-js">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--variant sizes buttons example -->
					<div class="pmd-card pmd-z-depth card-custom-view">
						<div class="pmd-card-body">
							<div class="table custom-size"> 
								<div class="media">
									<div class="media-body"> 
										<!--Large primary raised button with ripple effect -->
										<button class="btn btn-lg pmd-btn-raised pmd-ripple-effect btn-primary" type="button">Raised</button>
										
										<!--Large primary flat button with ripple effect -->
										<button class="btn btn-lg pmd-btn-flat pmd-ripple-effect btn-primary" type="button">Flat</button>
										
										<!--Large primary circle raised button with ripple effect -->
										<button class="btn btn-lg pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">add</i></button>
										
										<!--Large primary circle flat button with ripple effect -->
										<button class="btn btn-lg pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">add</i></button>
									</div>
									<div class="media-right media-middle">
										<div class="type-info">Large button</div>
									</div>
								</div>
								<div class="media">
									<div class="media-body"> 
										<!--Medium primary raised button with ripple effect -->
										<button class="btn pmd-btn-raised pmd-ripple-effect btn-primary" type="button">Raised</button>
										
										<!--Medium primary flat button with ripple effect -->
										<button class="btn pmd-btn-flat pmd-ripple-effect btn-primary" type="button">Flat</button>
										
										<!--Medium primary circle raised button with ripple effect -->
										<button class="btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">add</i></button>
										
										<!--Medium primary circle flat button with ripple effect -->
										<button class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">add</i></button>
									</div>
									<div class="media-right media-middle">
										<div class="type-info">Medium button</div>
									</div>
								</div>
								<div class="media">
									<div class="media-body"> 
										<!--Small primary raised button with ripple effect -->
										<button class="btn btn-sm pmd-btn-raised pmd-ripple-effect btn-primary" type="button">Raised</button>
										
										<!--Small primary flat button with ripple effect -->
										<button class="btn btn-sm pmd-btn-flat pmd-ripple-effect btn-primary" type="button">Flat</button>
										
										<!--Small primary circle raised button with ripple effect -->
										<button class="btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">add</i></button>
										
										<!--Small primary circle flat button with ripple effect -->
										<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">add</i></button>
									</div>
									<div class="media-right media-middle">
										<div class="type-info">Small button</div>
									</div>
								</div>
							</div>
						</div>
					</div> <!--variant sizes buttons example end -->
					
				</div>
				<div class="component-box"> 
					
					<!-- code view button -->
					<div class="pmd-card-title custom-heading view-code-xs clearfix"> 
						
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
					</div> <!-- code view button end -->
					
					<!-- code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#block-btn-html" data-toggle="tab">HTML</a></li>
								<li><a href="#block-btn-css" data-toggle="tab">CSS</a></li>
								<li><a href="#block-btn-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="block-btn-html">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button-sizes-block.html"></pre>
							</div>
							<div class="tab-pane" id="block-btn-css">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.css"></pre>
							</div>
							<div class="tab-pane" id="block-btn-js">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--block buttons example -->
					<div class="pmd-card pmd-z-depth card-custom-form">
						<div class="pmd-card-body">
							<div style="max-width: 400px; margin: 0 auto 10px;" class="well"> 
								<!-- Primary raised block button with ripple effect -->
								<button class="btn pmd-btn-raised btn-primary btn-block pmd-ripple-effect" type="button">Block level Raised button</button>
								
								<!-- Primary flat block button with ripple effect -->
								<button class="btn pmd-btn-flat btn-primary btn-block pmd-ripple-effect" type="button">Block level Flat button</button>
							</div>
						</div>
					</div> <!--block buttons example end-->
					<p class="component-desc">Create block level button&mdash;those that span the full width of a parent&mdash; by adding <code>.btn-block</code>.</p>
				</div>
			</div> <!-- variant sizes buttons code and example end -->
		</section> <!-- variant sizes buttons end -->
		
		<!-- button group -->
		<section class="row component-section">
			
			<!-- button group title and description -->
			<div class="col-md-3">

				<div id="button-groups">
					<h2>Button Group</h2>
				</div>
				<p>Group a series of buttons together on a single line with the button group. Add on optional JavaScript radio and checkbox style behavior with our button plugin.</p>
			</div> <!-- button group title and description end -->
			
			<!-- button group code and example -->
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
								<li class="active"><a href="#basic-btn-html" data-toggle="tab">HTML</a></li>
								<li><a href="#basic-btn-css" data-toggle="tab">CSS</a></li>
								<li><a href="#basic-btn-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="basic-btn-html">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button-groups-series.html"></pre>
							</div>
							<div class="tab-pane" id="basic-btn-css">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.css"></pre>
							</div>
							<div class="tab-pane" id="basic-btn-js">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--buttton group example  -->
					<div class="pmd-card pmd-z-depth card-custom-form">
						<div class="pmd-card-body"> 
							<div class="btn-group"  style="margin: 9px 0 5px;">
								<button class="btn pmd-ripple-effect btn-primary" type="button">Left</button>
								<button class="btn pmd-ripple-effect btn-primary" type="button">Middle</button>
								<button class="btn pmd-ripple-effect btn-primary" type="button">Right</button>
							</div>
						</div>
					</div> <!--buttton group example end -->
					<p class="component-desc">Combine sets of <code>&lt;div class="btn-group"&gt;</code> into a <code>&lt;div class="btn-toolbar"&gt;</code> for more complex components.</p>
				</div>
				
				<!-- complex button groups-->
				<div class="component-box">
				
					<!-- code view button -->
					<div class="pmd-card-title custom-heading view-code-xs clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
					</div> <!-- code view button end -->
					
					<!-- code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#btn-toolbar-html" data-toggle="tab">HTML</a></li>
								<li><a href="#btn-toolbar-css" data-toggle="tab">CSS</a></li>
								<li><a href="#btn-toolbar-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="btn-toolbar-html">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button-groups-combine.html"></pre>
							</div>
							<div class="tab-pane" id="btn-toolbar-css">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.css"></pre>
							</div>
							<div class="tab-pane" id="btn-toolbar-js">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--complex button groups example -->
					<div class="pmd-card pmd-z-depth card-custom-form">
						<div class="pmd-card-body"> 
							<div class="btn-group">
								<button class="btn pmd-btn-raised pmd-ripple-effect btn-default" type="button">4</button>
								<button class="btn pmd-btn-raised pmd-ripple-effect btn-info" type="button">5</button>
								<button class="btn pmd-btn-raised pmd-ripple-effect btn-warning" type="button">6</button>
							</div>
						</div>
					</div> <!--complex button groups example end -->
					<p class="component-desc">Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.</p>
				</div>
				<!--Button groups Combine end --> 
				
				<!--Button groups justified -->
				<div class="component-box">
					
					<!-- code view button -->
					<div class="pmd-card-title custom-heading view-code-xs clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
					</div> <!-- code view button end-->
					
					<!-- code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#justified-btn-html" data-toggle="tab">HTML</a></li>
								<li><a href="#justified-btn-css" data-toggle="tab">CSS</a></li>
								<li><a href="#justified-btn-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="justified-btn-html">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button-groups-justified.html"></pre>
							</div>
							<div class="tab-pane" id="justified-btn-css">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.css"></pre>
							</div>
							<div class="tab-pane" id="justified-btn-js">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--buttton groups justified example  -->
					<div class="pmd-card pmd-z-depth card-custom-form">
						<div class="pmd-card-body"> 
							<div class="btn-group btn-group-justified"> <a role="button" class="btn pmd-ripple-effect btn-primary">Left</a> <a role="button" class="btn pmd-ripple-effect btn-primary">Middle</a> <a role="button" class="btn pmd-ripple-effect btn-primary">Right</a> </div>
						</div>
					</div> <!--buttton groups justified example  end-->
					<p class="component-desc">With <code>&lt;a&gt;</code> elements, Just wrap a series of <code>.btn</code>s in <code>.btn-group.btn-group-justified</code>.</p>
					
				</div> <!--Button groups justified end -->
				 
			</div> <!-- button group code and example end -->
		</section> <!-- button group end -->
		
		<!-- Configuration starts-->
		<section class="row component-section">
			<div class="col-md-3">
				<div id="config">
					<h2>Configuration Options</h2>
				</div>
				<p>The Propeller CSS classes apply various predefined visual enhancements to the button. The table lists the available classes and their effects.</p>
			</div>
			<div class="col-md-9"> 
				<!--Propeller  Class Configuration card start -->
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
									<td data-title="Class"><code>.pmd-ripple-effect</code></td>
									<td data-title="Effect">Supporting class which, when used with <code>.btn</code> adds a ripple effect to the button.</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Class"><code>.pmd-btn-raised</code></td>
									<td data-title="Effect">Supporting class which, when used with <code>.btn</code> makes the button look raised.</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Class"><code>.pmd-btn-flat</code></td>
									<td data-title="Effect">Supporting class which, when used with <code>.btn</code> makes the button flat.</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Class"><code>.pmd-btn-fab</code></td>
									<td data-title="Effect">Supporting class which, when used with <code>.btn</code> makes it circular.</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Class"><code>.pmd-btn-outline</code></td>
									<td data-title="Effect">Supporting class which, when used with <code>.btn</code> creates a Outline button.</td>
									<td data-title="Remark">Optional</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div> <!--Propeller  Class Configuration card end --> 
				
			</div>
		</section> <!-- Configuration ends--> 
		
	</div>
</div> <!--Buttons end--> 

<!--footer start -->
<?php include('include/footer.php'); ?>
<!--footer end -->