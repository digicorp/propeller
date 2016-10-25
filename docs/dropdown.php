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
					<h1 class="pmd-display1">Dropdown</h1>
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
									<input type="hidden"  name="dropdown" value="dropdown"/>
									<button name='btn_submit' value='dropdown' type="submit" onClick="downloadDropdown()" class="btn btn-default pmd-btn-raised btn-sm pmd-ripple-effect pmd-btn-flat custom-btn">Download ZIP</button>
								</form>
							</li>
					</div>
				</div> <!--end download component button dropdown -->
			</div>
		</div>
		
	</div>
	<!-- /.container-fluid --> 
	
</nav>
<!--navigation end -->

<!-- Dropdown constructor start -->
<div class="pmd-content pmd-content-custom dropdown-component guidelime-dropdown" id="content">

	<!-- component header -->
	<div class="componant-title-bg">
		<div class="container">
			<div class="row">
				
				<!-- component title and description -->
				<div class="col-xs-12">
					<p class="lead">A dropdown is an HTML component that allows the user to choose one value from a list. It is similar  to the select box.</p>
				</div> <!-- component title and description end -->				
				
			</div>
		</div>
	</div> <!-- component header end -->
	
	<div class="container">
		
		<!-- components listing -->
		<div class="list-group list-group-custom margin-20"> 
			<a class="list-group-item" href="#bootstrap-dropdown">Bootstrap Dropdown</a> 
			<a class="list-group-item" href="#types">Propeller Dropdown</a> 
			<a class="list-group-item" href="#direction">Dropdown with Directions</a>
			<a class="list-group-item" href="#hover">Dropdown with Hover event</a>
			<a class="list-group-item" href="#config">Configuration Options</a>
			<a class="list-group-item" href="#events">Events</a>
		</div>
		<!-- components listing -->
		
		<!-- Bootstrap Dropdown -->
		<section class="row component-section">
			
			<!-- dropdown types title and description -->
			<div class="col-md-3">
				<div id="bootstrap-dropdown">
					<h2>Bootstrap Dropdown</h2>
				</div>
				<p>Dropdown is toggleable, contextual overlay for displaying lists of links and more. It is made interactive with the included Bootstrap dropdown JavaScript plugin.</p>
			</div> <!-- dropdown types title and description end-->
			
			<!--Dropdown types code and example -->
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
								<li class="active"><a href="#bootstrap-basic-html" data-toggle="tab">HTML</a></li>
								<li><a href="#bootstrap-basic-css" data-toggle="tab">CSS</a></li>
								<li><a href="#bootstrap-basic-js" data-toggle="tab">JS</a></li>
						  	</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="bootstrap-basic-html"> 
								<pre class="pre-codebox line-numbers" data-src="../components/dropdown/snippets/bootstrap-basic.html"></pre> 
							</div>
							<div class="tab-pane" id="bootstrap-basic-css"> 
								<pre class="pre-codebox line-numbers" data-src="../components/dropdown/snippets/bootstrap-basic.css"></pre>
							</div>
							<div class="tab-pane" id="bootstrap-basic-js"> 
								<pre class="pre-codebox line-numbers" data-src="../components/dropdown/snippets/bootstrap-basic.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!-- dropdown types example  --> 
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth pmd-card-custom-view"> 
								<div class="pmd-card-body">
									<div class="row">
										<!-- Example single danger button -->
                                        <div class="col-md-12">
                                        	<div class="dropdown">
                                              <a data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Dropdown trigger
                                                <span class="caret"></span>
                                              </a>
                                              <ul class="dropdown-menu" aria-labelledby="dLabel">
                                              	<li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                <li><div class="dropdown-divider"></div></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                              </ul>
                                            </div>
                                        </div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- dropdown types example end -->
				</div>
			</div> <!--Dropdown types code and example end -->
			
		</section> <!-- Bootstrap Dropdown types end -->
        
		<!-- Propeller Dropdown -->
		<section class="row component-section">
			
			<!-- dropdown types title and description -->
			<div class="col-md-3">
				<div id="types">
					<h2>Propeller Dropdown</h2>
				</div>
				<p>Propeller Dropdown consists of Bootstrap HTML structure with Propeller customized classes based on material design standards. </p>	
				<p><strong>Types - </strong>Based on the type of content, Propeller Dropdown can be categorized into three types: with header, with divider, and with disabled links.</p>
			</div> <!-- dropdown types title and description end-->
			
			<!--Dropdown types code and example -->
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
								<li class="active"><a href="#default-tab-html" data-toggle="tab">HTML</a></li>
								<li><a href="#default-tab-css" data-toggle="tab">CSS</a></li>
								<li><a href="#default-tab-js" data-toggle="tab">JS</a></li>
						  	</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="default-tab-html"> 
								<pre class="pre-codebox line-numbers" data-src="../components/dropdown/snippets/dropdown-types.html"></pre> 
							</div>
							<div class="tab-pane" id="default-tab-css"> 
								<pre class="pre-codebox line-numbers" data-src="../components/dropdown/snippets/dropdowns.css"></pre>
							</div>
							<div class="tab-pane" id="default-tab-js"> 
								<pre class="pre-codebox line-numbers" data-src="../components/dropdown/snippets/dropdown.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!-- dropdown types example  --> 
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth pmd-card-custom-view"> 
								<div class="pmd-card-body">
									<div class="row">
										<div class="col-md-4">
											<span class="dropdown pmd-dropdown clearfix">
												<button class="btn pmd-ripple-effect btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true">Dropdown with Header <span class="caret"></span></button>
												<ul aria-labelledby="dropdownMenu2" role="menu" class="dropdown-menu">
													<li class="dropdown-header" role="presentation">Dropdown header</li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Action</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Another action</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Something else here</a></li>
													<li class="dropdown-header" role="presentation">Dropdown header</li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Separated link</a></li>
												</ul>
											</span>
										</div>
										<div class="col-md-4">
											<span class="dropdown pmd-dropdown clearfix">
												<button class="btn pmd-ripple-effect btn-primary dropdown-toggle" type="button" id="dropdownMenuDivider" data-toggle="dropdown" aria-expanded="true">Dropdown With Divider <span class="caret"></span></button>
												<ul aria-labelledby="dropdownMenuDivider" role="menu" class="dropdown-menu">
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Action</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Another action</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Something else here</a></li>
													<li class="divider" role="presentation"></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Separated link</a></li>
												</ul>
											</span>
										 </div>
										<div class="col-md-4">
											<span class="dropdown pmd-dropdown clearfix">
												<button class="btn pmd-ripple-effect btn-primary dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-expanded="true">Dropdown with disabled link <span class="caret"></span></button>
												<ul aria-labelledby="dropdownMenu3" role="menu" class="dropdown-menu">
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Regular link</a></li>
													<li class="disabled" role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Disabled link</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Another link</a></li>
												</ul>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- dropdown types example end -->
				
				</div>
			</div> <!--Dropdown types code and example end -->
			
		</section> <!-- Propeller Dropdown end -->
	
		<!-- different direction dropdown -->
		<section class="row component-section">
			
			<!-- different direction dropdown title and description -->
			<div class="col-md-3">
				<div id="direction">
					<h2>Dropdown with Directions</h2>
				</div>
				 <p>Dropdown can start from different directions such as from bottom left, bottom right, top left, top right. Add <code>.dropdown-menu-right</code> to make the dropdown open from bottom-right, <code>.pmd-dropdown-menu-top-left</code> to make the dropdown open from top-left and <code>.pmd-dropdown-menu-top-right</code> to make the dropdown open from top-right. </p>
			</div> <!-- different direction dropdown title and description end-->
			
			<!--different direction dropdown code and example -->
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
								<li class="active"><a href="#icon-accordion-html" data-toggle="tab">HTML</a></li>
								<li><a href="#icon-accordion-css" data-toggle="tab">CSS</a></li>
								<li><a href="#icon-accordion-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="icon-accordion-html"> 
								<pre class="pre-codebox line-numbers" data-src="../components/dropdown/snippets/dropdown-directions.html"></pre> 
							</div>
							<div class="tab-pane" id="icon-accordion-css"> 
								<pre class="pre-codebox line-numbers" data-src="../components/dropdown/snippets/dropdown-directions.css"></pre> 
							</div>
							<div class="tab-pane" id="icon-accordion-js"> 
								 <pre class="pre-codebox line-numbers" data-src="../components/dropdown/snippets/dropdown.js"></pre> 
							</div>
						</div>
					</div> <!-- code view end -->
							
					<!-- different direction dropdown example -->		
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth pmd-card-custom-view"> 
								<div class="pmd-card-body">
									<div class="row">
										<div class="col-md-3">
											<p>Bottom Left Direction</p>
											<span class="dropdown pmd-dropdown clearfix">
												<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button" id="dropdownMenuBottomLeft" data-toggle="dropdown" aria-expanded="true"><i class="material-icons pmd-sm">more_vert</i></button>
												<ul aria-labelledby="dropdownMenu2" role="menu" class="dropdown-menu">
													<li class="dropdown-header" role="presentation">Dropdown header</li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Action</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Another action</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Something else here</a></li>
													<li class="dropdown-header" role="presentation">Dropdown header</li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Separated link</a></li>
												</ul>
											</span>
										</div>
										<div class="col-md-3">
											<p>Bottom Right Direction</p>		
											<span class="dropdown pmd-dropdown clearfix">
												<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button" id="dropdownMenuBottomRight" data-toggle="dropdown" aria-expanded="true"><i class="material-icons pmd-sm">more_vert</i></button>
												<ul aria-labelledby="dropdownMenuDivider" role="menu" class="dropdown-menu dropdown-menu-right">
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Action</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Another action</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Something else here</a></li>
													<li class="divider" role="presentation"></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Separated link</a></li>
												</ul>
											</span>
										</div>
										<div class="col-md-3">
											<p>Top Left Direction</p>	
											<span class="dropdown pmd-dropdown dropup clearfix">
												<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button" id="dropdownMenuTopLeft" data-toggle="dropdown" aria-expanded="true"><i class="material-icons pmd-sm">more_vert</i></button>
												<ul aria-labelledby="dropdownMenu3" role="menu" class="dropdown-menu pmd-dropdown-menu-top-left">
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Regular link</a></li>
													<li class="disabled" role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Disabled link</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Another link</a></li>
												</ul>
											</span>
										</div>
										<div class="col-md-3">
											<p>Top Right Direction</p>	
											<span class="dropdown pmd-dropdown dropup clearfix">
												<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button" id="dropdownMenuTopRight" data-toggle="dropdown" aria-expanded="true"><i class="material-icons pmd-sm">more_vert</i></button>
												<ul aria-labelledby="dropdownMenu3" role="menu" class="dropdown-menu pmd-dropdown-menu-top-right">
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Regular link</a></li>
													<li class="disabled" role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Disabled link</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Another link</a></li>
												</ul>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- different direction dropdown example end -->          
					
				</div>
			</div> <!--different direction dropdown code and example end-->
		</section> <!-- different direction dropdown end -->
		
		<!-- Dropdown Hover -->
		<section class="row component-section">
			
			<!-- dropdown hover title and description -->
			<div class="col-md-3">
				<div id="hover">
					<h2>Dropdown with Hover event</h2>
				</div>
				<p>In this case, we are showing the dropdown on the hover of a particular button. In order to open the dropdown on hover, add <code>.pmd-dropdown-hover</code> to the button.</p>
			</div> <!-- dropdown hover title and description end -->
			
			<!--Dropdown hover code and example -->
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
								<li class="active"><a href="#hover-tab-html" data-toggle="tab">HTML</a></li>
								<li><a href="#hover-tab-css" data-toggle="tab">CSS</a></li>
								<li><a href="#hover-tab-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="hover-tab-html"> 
								<pre class="pre-codebox line-numbers" data-src="../components/dropdown/snippets/dropdown-hover.html"></pre> 
							</div>
							<div class="tab-pane" id="hover-tab-css"> 
								<pre class="pre-codebox line-numbers" data-src="../components/dropdown/snippets/dropdowns.css"></pre>
							</div>
							<div class="tab-pane" id="hover-tab-js"> 
								<pre class="pre-codebox line-numbers" data-src="../components/dropdown/snippets/dropdown-hover.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
							
					<!-- dropdown hover example --> 
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth pmd-card-custom-view"> 
								<div class="pmd-card-body">
									<div class="row">
										<div class="col-md-4">
											<p>Hover with header</p>
											<span class="dropdown pmd-dropdown clearfix">
												<button class="btn pmd-ripple-effect btn-primary dropdown-toggle pmd-dropdown-hover" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true">Dropdown with header <span class="caret"></span></button>
												<ul aria-labelledby="dropdownMenu2" role="menu" class="dropdown-menu">
													<li class="dropdown-header" role="presentation">Dropdown header</li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Action</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Another action</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Something else here</a></li>
													<li class="dropdown-header" role="presentation">Dropdown header</li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Separated link</a></li>
												</ul>
											</span>
										</div>
										<div class="col-md-4">
											<p>Hover with divider</p>
											<span class="dropdown pmd-dropdown clearfix">
												<button class="btn pmd-ripple-effect btn-primary dropdown-toggle pmd-dropdown-hover" type="button" id="dropdownMenuDivider" data-toggle="dropdown" aria-expanded="true">Dropdown with divider <span class="caret"></span></button>
												<ul aria-labelledby="dropdownMenuDivider" role="menu" class="dropdown-menu">
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Action</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Another action</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Something else here</a></li>
													<li class="divider" role="presentation"></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Separated link</a></li>
												</ul>
											</span>
										 </div>
										<div class="col-md-4">
											<p>Hover with disabled menu items</p>
											<span class="dropdown pmd-dropdown clearfix">
												<button class="btn pmd-ripple-effect btn-primary dropdown-toggle pmd-dropdown-hover" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-expanded="true">Dropdown with disabled link <span class="caret"></span></button>
												<ul aria-labelledby="dropdownMenu3" role="menu" class="dropdown-menu">
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Regular link</a></li>
													<li class="disabled" role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Disabled link</a></li>
													<li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Another link</a></li>
												</ul>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- dropdown hover example end -->
					
				</div>
			</div> <!--Dropdown hover code and example end -->			
		</section> <!--Dropdwon Hover ends -->
		
		<!-- Configuration starts-->		
		<section class="row component-section">
			<div class="col-md-3">
				<div id="config">
				<h2>Configuration Options</h2>
				</div>
				<p>The Propeller CSS classes apply various predefined visual enhancements to the dropdown. The table lists the available classes and their effects.</p>
			</div>
			<div class="col-md-9">
				<!--Propeller Class Configuration card start -->
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
									<td data-title="Class"><code>.dropdown-menu</code></td>
									<td data-title="Effect">Used to create a dropdown menu.</td>
									<td data-title="Remark">Required</td>
								</tr>
								<tr>
									<td data-title="Class"><code>.dropdown-menu-right</code></td>
									<td data-title="Effect">Used when you want the dropdown menu to open from bottom right.</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Class"><code>.pmd-dropdown-menu-top-left</code></td>
									<td data-title="Effect">Used when you want the dropdown menu to open from top left.</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Class"><code>.pmd-dropdown-menu-top-right</code></td>
									<td data-title="Effect">Used when you want the dropdown menu to open from top right.</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Class"><code>.dropdown-toggle</code></td>
									<td data-title="Effect">Add this class to the button for open and close of the dropdown menu.</td>
									<td data-title="Remark">Required</td>
								</tr>
								<tr>
									<td data-title="Class"><code>.pmd-dropdown-hover</code></td>
									<td data-title="Effect">Add this class to the button to open the dropdown menu on hover.</td>
									<td data-title="Remark">Optional</td>
								</tr>                                    
							</tbody>
						</table>
					</div>
				</div><!--Propeller Class Configuration card end -->
				
			</div>
		</section><!-- Configuration ends-->		 
		
		<!-- Events starts-->		
		<section class="row component-section">
			<div class="col-md-3">
				<div id="events">
					<h2>Events</h2>
				</div>
				<p>All dropdown events are fired at the <code>.dropdown-menu's</code> parent element. All dropdown events have a <code>relatedTarget</code> property, whose value is the toggling anchor element. See <a href="http://getbootstrap.com/javascript/#dropdowns" target="_blank">here</a> for more documentation on this.</p>
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
									<td data-title="Class"><code>show.bs.dropdown</code></td>
									<td data-title="Effect">This event fires immediately when the show instance method is called.</td>
								</tr>
								<tr>
									<td data-title="Class"><code>shown.bs.dropdown</code></td>
									<td data-title="Effect">This event is fired when the dropdown has been made visible to the user (will wait for CSS transitions, to complete).</td>
								</tr>
								<tr>
									<td data-title="Class"><code>hide.bs.dropdown</code></td>
									<td data-title="Effect">This event is fired immediately when the hide instance method has been called.</td>
								</tr>
								<tr>
									<td data-title="Class"><code>hidden.bs.dropdown</code></td>
									<td data-title="Effect">This event is fired when the dropdown has finished being hidden from the user (will wait for CSS transitions, to complete).</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="pmd-card pmd-z-depth js-script pmd-card-custom">
					<pre class="pre-codebox line-numbers" data-src="../components/dropdown/snippets/events.js"></pre>
				</div>
			</div>
		</section> <!-- Events ends-->
		
	</div>
</div>
<!-- Dropdown constructor end -->

<!--footer start -->
<?php include('include/footer.php'); ?>
<!-- footer end -->