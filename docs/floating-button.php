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
					<h1 class="pmd-display1">Floating Action Button</h1>
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
									<input type="hidden"  name="floating-action-button" value="floating-action-button"/>
									<button name='btn_submit' value='floating-action-button' type="submit" onClick="downloadFAB()" class="btn btn-default pmd-btn-raised btn-sm pmd-ripple-effect pmd-btn-flat custom-btn">Download ZIP</button>
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

<!--Floating Menu -->
<div class="pmd-content pmd-content-custom" id="content"> 
	
	<!--component header -->
	<div class="componant-title-bg"> 
		<div class="container">
			<div class="row">
			
				<!-- component title and description -->
				<div class="col-xs-12">
                	<p class="lead">Floating Action Button is the circular button that floats above the UI and is “used for a promoted action”. It acts as call to action button, meant to represent the single action users perform 
                    the most on that particular screen.</p>
					<p class="lead"> The floating action button animates onto the screen as an expanding piece of material, by default. The icon within it may be animated.</p>
				</div><!-- component title and description end -->				
				
			</div>
		</div>
	</div><!--component header end -->
	
	<div class="container">		
		
		<!-- component listing -->
		<div class="list-group list-group-custom margin-20"> 
			<a class="list-group-item" href="#fab">Floating Action Button (FAB)</a>
			<a class="list-group-item" href="#fab-raised">Raised Floating Action Button</a>
			<a class="list-group-item" href="#fab-flat">Flat Floating Action Button</a>
			<a class="list-group-item" href="#fab-menu">Floating Action Button with Menu</a>
		</div><!-- component listing end -->
		
        <!-- FAB button -->
		<section class="row component-section">
			
			<!-- FAB button title and description -->
			<div class="col-md-3">
				<div id="fab">
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
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.css"></pre>
							</div>
							<div class="tab-pane" id="circle-btn-js">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--FAB buttons example -->
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
					</div> <!--FAB buttons example end-->
					
				</div>
			</div> <!-- FAB button code and example end -->
		</section> <!-- FAB button end --> 
		
		<!-- Raised FAB button-->
		<section class="row component-section">
			
			<!-- FAB raised button title and description -->
			<div class="col-md-3">
				<div id="fab-raised">
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
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.css"></pre>
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
				<div id="fab-flat">
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
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.css"></pre>
							</div>
							<div class="tab-pane" id="circle-flat-btn-js">
								<pre class="pre-codebox line-numbers" data-src="../components/button/snippets/button.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--FAB flat buttons example -->
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
					</div> <!--circle flat buttons example end -->
					
				</div>
			</div> <!-- FAB Flat button code and example end -->
		</section> <!-- FAB Flat button end --> 	
		
        <!-- FAB with Menu -->
		<section class="row component-section">
			
			<!-- floating menu title and description -->
			<div class="col-md-3">
				<div id="fab-menu">
					<h2>Floating Action Button with Menu</h2>
				</div>
				<p>The floating action button can transform into sheets of material that are part of the app structure. This dramatic transformation accentuates the action the button enables. </p>
			</div><!-- floating menu title and description end -->
			
			<!-- floating menu code and example -->
			<div class="col-md-9">
				<div class="component-box">
					
					<!-- code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
					</div><!-- code view button end-->
					
					<!-- code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#floating-html" data-toggle="tab">HTML</a></li>
								<li><a href="#floating-css" data-toggle="tab">CSS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="floating-html">
								<pre class="pre-codebox line-numbers" data-src="../components/floating-action-button/snippets/floating-button.html"></pre>
							</div>
							<div class="tab-pane" id="floating-css">
								<pre class="pre-codebox line-numbers" data-src="../components/floating-action-button/snippets/floating-button.css"></pre>
							</div>
						</div>
					</div><!-- code view  end -->
					
					<!-- floating menu example -->
					<div class="row"> 
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth">
								<div class="pmd-card-body floating-action-custom text-center"> 
									<div class="menu pmd-floating-action"  role="navigation"> 
										<a href="javascript:void(0);" class="pmd-floating-action-btn btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default" data-title="Supervisor Account"> 
											<span class="pmd-floating-hidden">Supervisor Account</span>
											<i class="material-icons">supervisor_account</i> 
										</a> 
										<a href="javascript:void(0);" class="pmd-floating-action-btn btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default" data-title="Cloud Queue"> 
											<span class="pmd-floating-hidden">Cloud Queue</span> 
											<i class="material-icons">cloud_queue</i> 
										</a> 
										<a href="javascript:void(0);" class="pmd-floating-action-btn btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default" data-title="Headset"> 
											<span class="pmd-floating-hidden">Headset</span> 
											<i class="material-icons">headset</i> 
										</a> 
										<a href="javascript:void(0);" class="pmd-floating-action-btn btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default" data-title="Dialpad"> 
											<span class="pmd-floating-hidden">Dialpad</span> 
											<i class="material-icons">dialpad</i> 
										</a> 
										<a href="javascript:void(0);" class="pmd-floating-action-btn btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-primary" data-title="Add"> 
											<span class="pmd-floating-hidden">Primary</span>
											<i class="material-icons pmd-sm">add</i> 
										</a> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- floating menu code and example end -->
			
		</section><!-- text fields end -->
		 
	</div>
</div><!--Floating Menu constructor end --> 

<!--footer start -->
<?php include('include/footer.php'); ?>
<!-- footer end -->