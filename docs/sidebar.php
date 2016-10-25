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
					<h1 class="pmd-display1">Sidebar</h1>
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
									<input type="hidden"  name="sidebar" value="sidebar"/>
									<button name='btn_submit' value='sidebar' type="submit" onClick="downloadSidebar()" class="btn btn-default pmd-btn-raised btn-sm pmd-ripple-effect pmd-btn-flat custom-btn">Download ZIP</button>
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
	
<!-- Sidebar -->
<div class="pmd-content pmd-content-custom" id="content"> 
	
	<!-- component header -->
	<div class="componant-title-bg">
		<div class="container">
			<div class="row"> 
				
				<!-- component title and description -->
				<div class="col-xs-12">
				<p class="lead">Sidebar is a narrow vertical area that is located alongside the main display area, typically containing related information or navigation options.This structure shows a responsive menu toggling system. When toggled using the button, the menu will appear/disappear.</p>
				</div><!-- component title and description end-->				 
		
			</div>
		</div>
	</div><!-- component header end -->		
	
	<div class="container">
		
		<!-- component list catagory -->
		<div class="list-group list-group-custom margin-20"> 
			<a class="list-group-item" href="#basics">Simple Sidebar</a> 
			<a class="list-group-item" href="#basics-fixed">Fixed Left Sidebar</a> 
			<a class="list-group-item" href="#right">Fixed Right Sidebar</a> 
			<a class="list-group-item" href="#default-open">Default open sidebar</a> 
			<a class="list-group-item" href="#config">Configuration Options</a> 
		</div><!-- component list catagory end -->			 
		
		<div class="sidebar-pmd-content">
		<!-- basic sidebar -->
		<section class="row component-section"> 
			
			<!-- basic sidebar title and description -->
			<div class="col-md-12">
				<div id="basics">
					<h2>Simple Sidebar</h2>
				</div>
				<p>Simple Sidebar is a basic sidebar menu page layout for Bootstrap websites with off canvas navigation on smaller screen sizes. When toggled using the button, the menu will appear/disappear. When the sidebar opens, it slides in and the page content will be pushed off canvas. To create such sidebar, add <code>.pmd-sidebar-slide-push</code>.</p>				
			</div><!-- basic sidebar title and description end-->
			 
			
			<!-- basic sidebar code and example -->
			<div class="col-md-12">
				<div class="component-box"> 
					<!-- code view button -->
					<div class="pmd-card-title custom-heading clearfix custom-card-heading"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
					</div><!-- code view button end -->											 
					
					<!-- code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#basic-menu-html" data-toggle="tab">HTML</a></li>
								<li><a href="#basic-menu-css" data-toggle="tab">CSS</a></li>
								<li><a href="#basic-menu-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="basic-menu-html">
								<pre class="pre-codebox line-numbers" data-src="../components/sidebar/snippets/basic-sidebar.html"></pre>
							</div>
							<div class="tab-pane" id="basic-menu-css">
								<pre class="pre-codebox line-numbers" data-src="../components/sidebar/snippets/sidebar.css"></pre>
							</div>
							<div class="tab-pane" id="basic-menu-js">
								<pre class="pre-codebox line-numbers" data-src="../components/sidebar/snippets/sidebar.js"></pre>
							</div>
						</div>
					</div><!-- code view  end-->						 
					
					<!-- basic sidebar example -->
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth">
								<section class="nav-show" style="position: relative;">
									<iframe src="../components/sidebar/snippets/basic-sidebar-page.html" class="sidebar-iframe"></iframe>
								</section>
							</div>
						</div>
					</div><!-- basic sidebar example end -->						 
					
				</div>
			</div><!-- basic sidebar code and example end-->				 
			
		</section><!-- basic sidebar end-->
		 
		
		<!-- fixed sidebar -->
		<section class="row component-section">
		
			<!-- fixed sidebar title and description -->
			<div class="col-md-12">
				<div id="basics-fixed">
					<h2>Fixed Left Sidebar</h2>
				</div>
				<p>Fixed sidebar is the one in which, when the sidebar is open, it overlaps over the content. To create this sidebar, add <code>.pmd-sidebar-left-fixed</code>.</p>
			</div><!-- fixed sidebar title and description end -->
			
			<!-- fixed sidebar code and example -->
			<div class="col-md-12">
				<div class="component-box">
				
					<!-- code view button -->
					<div class="pmd-card-title custom-heading clearfix custom-card-heading"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
					</div><!-- code view button end -->
					
					<!-- code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#basic-fixed-html" data-toggle="tab">HTML</a></li>
								<li><a href="#basic-fixed-css" data-toggle="tab">CSS</a></li>
								<li><a href="#basic-fixed-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="basic-fixed-html">
								<pre class="pre-codebox line-numbers" data-src="../components/sidebar/snippets/basic-fixed-sidebar.html"></pre>
							</div>
							<div class="tab-pane" id="basic-fixed-css">
								<pre class="pre-codebox line-numbers" data-src="../components/sidebar/snippets/sidebar.css"></pre>
							</div>
							<div class="tab-pane" id="basic-fixed-js">
								<pre class="pre-codebox line-numbers" data-src="../components/sidebar/snippets/sidebar.js"></pre>
							</div>
						</div>
					</div>	<!-- code view end-->
					
					<!-- fixed sidebar example -->
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth">
								<section class="nav-show" style="position: relative;">
									<iframe src="../components/sidebar/snippets/fixed-sidebar-page.html" class="sidebar-iframe"></iframe>
								</section>
							</div>
						</div>
					</div><!-- fixed sidebar example end-->
					
				</div>
			</div><!-- fixed sidebar code and example end-->
			
		</section><!-- fixed sidebar end-->
		
		<!-- right sidebar -->
		<section class="row component-section">
		
			<!-- right sidebar title and description -->
			<div class="col-md-12">
				<div id="right">
					<h2>Fixed Right Sidebar</h2>
				</div>
				<p>You can also create a secondary sidebar, that is, a right sidebar for tabs, palettes, or secondary actions. To create such a sidebar, add <code>.pmd-sidebar-right-fixed</code>. </p>
			</div><!-- right sidebar title and description end -->
			
			<!-- right sidebar code and example -->
			<div class="col-md-12">
				<div class="component-box">
				
					<!-- code view button -->
					<div class="pmd-card-title custom-heading clearfix custom-card-heading"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
					</div><!-- code view button end -->
					
					<!-- code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#right-html" data-toggle="tab">HTML</a></li>
								<li><a href="#right-css" data-toggle="tab">CSS</a></li>
								<li><a href="#right-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="right-html">
								<pre class="pre-codebox line-numbers" data-src="../components/sidebar/snippets/right-sidebar.html"></pre>
							</div>
							<div class="tab-pane" id="right-css">
								<pre class="pre-codebox line-numbers" data-src="../components/sidebar/snippets/sidebar.css"></pre>
							</div>
							<div class="tab-pane" id="right-js">
								<pre class="pre-codebox line-numbers" data-src="../components/sidebar/snippets/sidebar.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
				
					<!-- right sidebar example -->
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth">
								<section class="nav-show" style="position: relative;">
									<iframe src="../components/sidebar/snippets/right-sidebar-page.html" class="sidebar-iframe"></iframe>
								</section>
							</div>
						</div>
					</div> <!-- right sidebar example end -->
				
				</div>
			</div><!-- right sidebar code and example end-->
			
		</section><!-- right sidebar end --> 
		
		
		<!-- default open sidebar -->
		<section class="row component-section">
		
			<!-- default open sidebar title and description -->
			<div class="col-md-12">
				<div id="default-open">
					<h2>Default open Sidebar</h2>
					<p>On load you can show both left and right sidebars visible. Add <code>.pmd-sidebar-open</code> along with the <code>.pmd-sidebar</code> to the sidebar in order to make it open by default.</p>
				</div>
			</div><!-- default open sidebar title and description end -->
			
			<!-- default open sidebar code and example -->
			<div class="col-md-12">
				<div class="component-box">
			
					<!-- code view button -->
					<div class="pmd-card-title custom-heading clearfix custom-card-heading"> 
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
								<pre class="pre-codebox line-numbers" data-src="../components/sidebar/snippets/default-open-sidebar.html"></pre>
							</div>
							<div class="tab-pane" id="default-css">
								<pre class="pre-codebox line-numbers" data-src="../components/sidebar/snippets/sidebar.css"></pre>
							</div>
							<div class="tab-pane" id="default-js">
								<pre class="pre-codebox line-numbers" data-src="../components/sidebar/snippets/sidebar.js"></pre>
							</div>
						</div>
					</div><!-- code view end -->
					
					<!-- default open sidebar example -->
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth">
								<section class="nav-show" style="position: relative;">
									<iframe src="../components/sidebar/snippets/open-sidebar-page.html" class="sidebar-iframe"></iframe>
								</section>
							</div>
						</div>
					</div> <!-- default open sidebar example end-->
				</div>
			</div> <!-- default open sidebar code and example end -->
			
		</section> <!-- default open sidebar ends -->
		
		
		<!-- Configuration starts-->		
		<section class="row component-section">
			<div class="col-md-3">
				<div id="config">
					<h2>Configuration Options</h2>
				</div>
				<p>The Propeller CSS classes apply various predefined visual enhancements to the slider. The table lists the available classes and their effects.</p>
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
									<td data-title="Class"><code>.pmd-sidebar</code></td>
									<td data-title="Effect">Used to hide sidebar content in desktop resolution.</td>
									<td data-title="Remark">Required</td>
								</tr>
								<tr>
									<td data-title="Class"><code>.pmd-sidebar-toggle</code></td>
									<td data-title="Effect">Used to show/hide sidebar sidebar menu.</td>
									<td data-title="Remark">Required</td>
								</tr>
								<tr>
									<td data-title="Class"><code>.pmd-sidebar-slide-push</code></td>
									<td data-title="Effect">Used to create the sidebar which when opens, it slides off the content to right.</td>
									<td data-title="Remark">Required</td>
								</tr>
								<tr>
									<td data-title="Class"><code>.pmd-sidebar-left-fixed</code></td>
									<td data-title="Effect">Used to show sidebar fixed to the left side of the window, which when opens, it overlaps over the content.</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Class"><code>.pmd-sidebar-right-fixed</code></td>
									<td data-title="Effect">Used to create a right sidebar.</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Class"><code>.pmd-sidebar-open</code></td>
									<td data-title="Effect">Add this class to the sidebar when you want it to be open by default.</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Class"><code>.pmd-sidebar-nav</code></td>
									<td data-title="Effect">Used to show/hide user profile dropdown in navbr sidebar.</td>
									<td data-title="Remark">Optional</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div><!--Propeller  Class Configuration card end --> 
				
			</div>
		</section><!-- Configuration ends--> 
		
		</div>		
		
	</div>
</div><!--Sidebar constructor end --> 
	
<!--footer start -->
<?php include('include/footer.php'); ?>
<!-- footer end -->