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
					<h1 class="pmd-display1">Shadow</h1>
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
									<input type="hidden"  name="shadow" value="shadow"/>
									<button name='btn_submit' value='shadow' type="submit" onClick="downloadShadow()"  class="btn btn-default pmd-btn-raised btn-sm pmd-ripple-effect pmd-btn-flat custom-btn">Download ZIP</button>
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

<!-- Shadow -->
<div class="pmd-content pmd-content-custom" id="content">

	<!-- component header -->
	<div class="componant-title-bg"> 
		<div class="container">
			<div class="row">
			
				<!-- component title and description -->
				<div class="col-xs-12">
					<p class="lead">In material design, everything should have a certain <code>pmd-z-depth</code> that determines how far raised or close to the page the element is.</p>
				</div> <!-- component title and description end -->
				
			</div>
		</div>
	</div> <!-- component header end-->
	
	<div class="container">
		
		<!-- Shadow types -->
		<section class="row component-section">
			
			<!-- shadow types title and description -->
			<div class="col-md-3">
				<div id="types">
					<h2>Types</h2>
				</div>
				<p>You can easily apply this shadow effect by adding a <code>.pmd-z-depth</code> to an HTML tag. Alternatively you can extend any of these shadows using <code>.pmd-z-depth-1</code>, <code>.pmd-z-depth-2</code> and more.</p>
			</div> <!-- shadow types title and description end-->
			
			<!--Shadow type code and example -->
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
							<!--nav-tabs start -->
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#default-tab-html" data-toggle="tab">HTML</a></li>
								<li><a href="#default-tab-css" data-toggle="tab">CSS</a></li>
							</ul>
						</div>
						<!--nav-tabs end --> 
						<!--tab-content -->
						<div id="my-tab-content" class="tab-content"> 
							<!--tab-pane-->
							<div class="tab-pane active" id="default-tab-html">
								<pre class="pre-codebox line-numbers" data-src="../components/shadow/snippets/shadow.html"></pre>
							</div>
							<!--tab-pane--> 
							<!--tab-pane-->
							<div class="tab-pane" id="default-tab-css">
								<pre class="pre-codebox line-numbers" data-src="../components/shadow/snippets/shadow.css"></pre>
							</div>
							<!--tab-pane--> 
						</div>
						<!--tab-content --> 
					</div> <!-- code view end-->
					
					<!-- shadow examples -->
					<div class="row">
						<div class="col-md-12"> 
							<!-- Shadow varients -->
							<div class="pmd-card-body">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-xs-6"> 
										<!--pmd-z-depth-->
										<p class="pmd-z-depth shadow-demo">pmd-z-depth</p>
									</div>
									<div class="col-lg-4 col-md-4 col-xs-6"> 
										<!--pmd-z-depth-1-->
										<p class="pmd-z-depth-1 shadow-demo">pmd-z-depth-1</p>
									</div>
									<div class="col-lg-4 col-md-4 col-xs-6"> 
										<!--pmd-z-depth-2-->
										<p class="pmd-z-depth-2 shadow-demo">pmd-z-depth-2</p>
									</div>
									<div class="col-lg-4 col-md-4 col-xs-6"> 
										<!--pmd-z-depth-3-->
										<p class="pmd-z-depth-3 shadow-demo">pmd-z-depth-3</p>
									</div>
									<div class="col-lg-4 col-md-4 col-xs-6"> 
										<!--pmd-z-depth-4-->
										<p class="pmd-z-depth-4 shadow-demo">pmd-z-depth-4</p>
									</div>
									<div class="col-lg-4 col-md-4 col-xs-6"> 
										<!--pmd-z-depth-5-->
										<p class="pmd-z-depth-5 shadow-demo">pmd-z-depth-5</p>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- shadow examples end -->
					
				</div>
			</div> <!--Shadow type code and example end -->
			
		</section> <!--Shadow types end -->
		 
	</div>
</div>
<!-- Shadow constructor end --> 
	
<!--footer start -->
<?php include('include/footer.php'); ?>
<!-- footer end -->