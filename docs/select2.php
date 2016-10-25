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
					<h1 class="pmd-display1">Select2</h1>
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
									<input type="hidden"  name="select2" value="select2"/>
									<button name='btn_submit' value='select2' type="submit" onClick="downloadSelect2()" class="btn btn-default pmd-btn-raised btn-sm pmd-ripple-effect pmd-btn-flat custom-btn">Download ZIP</button>
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
	
<!--Form-->
<div class="pmd-content pmd-content-custom" id="content"> 
	
	<!--component header -->
	<div class="componant-title-bg"> 
		<div class="container">
			<div class="row">
			
				<!-- component title and description-->
				<div class="col-xs-12">
					<p class="lead">The Select2 widget provides a styleable select element replacement. It acts as a proxy back to the original select element, controlling its state for form submission or serialization.
                    It duplicates and extends the functionality of a native HTML select element to overcome the limitations of the native control.</p>
                    <p class="lead">We have used Select2 plugin as a reference which we have then customized based on our Propeller theme.</p>
                    <p class="lead">For more options and documentation, visit : <a href="http://select2.github.io/" target="_blank">Select2</a></p>
				</div><!-- component title and description end--> 
				
			</div>
		</div>
	</div><!--end component header-->

	<div class="container">
		
		<!--component list catagory -->
		<div class="list-group list-group-custom margin-20"> 
			<a class="list-group-item" href="#selectbox">Propeller Select2</a> 
			<a class="list-group-item" href="#selectbox">Select2 with Multiple Tags</a> 
			<a class="list-group-item" href="#select2-add-tag">Select2 with Search and Custom Tags</a> 
			<a class="list-group-item" href="#config">Configuration Options</a>
		</div><!--end component list catagory -->
		
		<!-- Selectbox -->
		<section class="row component-section">
		
			<!-- selectbox title and description -->
			<div class="col-md-3">
				<div id="selectbox">
					<h2>Propeller Select2</h2>
				</div>
				<p>To create an enhanced simple select, add <code>.pmd-select2</code> to the select tag.</p>
			</div> <!-- selectbox title and description end-->
			
			<!-- selectbox code and example -->
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
								<li class="active"><a href="#selectbox-html" data-toggle="tab">HTML</a></li>
								<li><a href="#selectbox-css" data-toggle="tab">CSS</a></li>
								<li><a href="#selectbox-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="selectbox-html">
								<pre class="pre-codebox line-numbers" data-src="../components/select2/snippets/selectbox.html"></pre>
							</div>
							<div class="tab-pane" id="selectbox-css">
								<pre class="pre-codebox line-numbers" data-src="../components/select2/snippets/selectbox.css"></pre>
							</div>
							<div class="tab-pane" id="selectbox-js">
								<pre class="pre-codebox line-numbers" data-src="../components/select2/snippets/selectbox.js"></pre>
							</div>
						</div>
					</div> <!-- code view -->
					
					<!-- selectbox example -->
					<div class="row toggle-button-custom">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body"> 
									<!--Simple select -->
									<div class="form-group pmd-textfield pmd-textfield-floating-label">
										<label>Simple Select</label>
										<select class="select-simple form-control pmd-select2">
											<!--<option></option> -->
											<option>Dallas Cowboys</option>
											<option>New York Giants</option>
											<option>Philadelphia Eagles</option>
											<option>Washington Redskins</option>
											<option>Chicago Bears</option>
											<option>Detroit Lions</option>
											<option>Green Bay Packers</option>
											<option>Minnesota Vikings</option>
											<option>Arizona Cardinals</option>
											<option>St. Louis Rams</option>
											<option>San Francisco 49ers</option>
											<option>Seattle Seahawks</option>
											<option>Baltimore Ravens</option>
											<option>Cincinnati Bengals</option>
											<option>Cleveland Browns</option>
											<option>Pittsburgh Steelers</option>
											<option>Houston Texans</option>
											<option>Indianapolis Colts</option>
											<option>Jacksonville Jaguars</option>
											<option>Tennessee Titans</option>
											<option>Denver Broncos</option>
											<option>Kansas City Chiefs</option>
											<option>Oakland Raiders</option>
											<option>San Diego Chargers</option>
										</select>
									</div>
									
								</div>
							</div>
							<p class="component-desc">Propeller Simple select</p>
						</div>
					</div> <!-- selectbox example end-->
				</div>
                
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
								<li class="active"><a href="#selectbox-search-html" data-toggle="tab">HTML</a></li>
								<li><a href="#selectbox-search-css" data-toggle="tab">CSS</a></li>
								<li><a href="#selectbox-search-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="selectbox-search-html">
								<pre class="pre-codebox line-numbers" data-src="../components/select2/snippets/selectbox-with-search.html"></pre>
							</div>
							<div class="tab-pane" id="selectbox-search-css">
								<pre class="pre-codebox line-numbers" data-src="../components/select2/snippets/selectbox.css"></pre>
							</div>
							<div class="tab-pane" id="selectbox-search-js">
								<pre class="pre-codebox line-numbers" data-src="../components/select2/snippets/selectbox-with-search.js"></pre>
							</div>
						</div>
					</div> <!-- code view -->
					
					<!-- selectbox example -->
					<div class="row toggle-button-custom">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body"> 
									
									<!--Simple Select with Search-->
									<div class="form-group pmd-textfield pmd-textfield-floating-label">
										<label>Simple Select with Search</label>
										<select class="select-with-search pmd-select2 form-control">
											<!--<option></option> -->
											<option>Dallas Cowboys</option>
											<option>New York Giants</option>
											<option>Philadelphia Eagles</option>
											<option>Washington Redskins</option>
											<option>Chicago Bears</option>
											<option>Detroit Lions</option>
											<option>Green Bay Packers</option>
											<option>Minnesota Vikings</option>
											<option>Arizona Cardinals</option>
											<option>St. Louis Rams</option>
											<option>San Francisco 49ers</option>
											<option>Seattle Seahawks</option>
											<option>Baltimore Ravens</option>
											<option>Cincinnati Bengals</option>
											<option>Cleveland Browns</option>
											<option>Pittsburgh Steelers</option>
											<option>Houston Texans</option>
											<option>Indianapolis Colts</option>
											<option>Jacksonville Jaguars</option>
											<option>Tennessee Titans</option>
											<option>Denver Broncos</option>
											<option>Kansas City Chiefs</option>
											<option>Oakland Raiders</option>
											<option>San Diego Chargers</option>
										</select>
									</div>
								</div>
							</div>
							<p class="component-desc">Simple select2 with search</p>
						</div>
					</div> <!-- selectbox example end-->
				</div>
			</div> <!-- selectbox code and example end-->
		</section>	

		<section class="row component-section">

			<!-- selectbox title and description -->
			<div class="col-md-3">
				<div id="selectbox">
					<h2>Select2 with Multiple Tags</h2>
				</div>
				<p>For selectbox with multiple tags add <code>.pmd-select2-tags</code> to the <code>select</code> tag.</p>
			</div> <!-- selectbox title and description end-->
		
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
							<li class="active"><a href="#selectbox-tags-html" data-toggle="tab">HTML</a></li>
							<li><a href="#selectbox-tags-css" data-toggle="tab">CSS</a></li>
							<li><a href="#selectbox-tags-js" data-toggle="tab">JS</a></li>
						</ul>
					</div>
					<div id="my-tab-content" class="tab-content">
						<div class="tab-pane active" id="selectbox-tags-html">
							<pre class="pre-codebox line-numbers" data-src="../components/select2/snippets/selectbox-tags.html"></pre>
						</div>
						<div class="tab-pane" id="selectbox-tags-css">
							<pre class="pre-codebox line-numbers" data-src="../components/select2/snippets/selectbox.css"></pre>
						</div>
						<div class="tab-pane" id="selectbox-tags-js">
							<pre class="pre-codebox line-numbers" data-src="../components/select2/snippets/selectbox-tags.js"></pre>
						</div>
					</div>
				</div> <!-- code view -->
				
				<div class="row toggle-button-custom">
					<div class="col-md-12">
						<div class="pmd-card pmd-z-depth pmd-card-custom-form">
							<div class="pmd-card-body"> 
								<!--Select Multiple Tags -->
								<div class="form-group pmd-textfield pmd-textfield-floating-label">
									<label>Select Multiple Tags</label>
									<select class="form-control select-tags pmd-select2-tags" multiple>
										<option>Dallas Cowboys</option>
										<option>New York Giants</option>
										<option>Philadelphia Eagles</option>
										<option>Washington Redskins</option>
										<option>Chicago Bears</option>
										<option>Detroit Lions</option>
										<option>Green Bay Packers</option>
										<option>Minnesota Vikings</option>
										<option>Arizona Cardinals</option>
										<option>St. Louis Rams</option>
										<option>San Francisco 49ers</option>
										<option>Seattle Seahawks</option>
										<option>Baltimore Ravens</option>
										<option>Cincinnati Bengals</option>
										<option>Cleveland Browns</option>
										<option>Pittsburgh Steelers</option>
										<option>Houston Texans</option>
										<option>Indianapolis Colts</option>
										<option>Jacksonville Jaguars</option>
										<option>Tennessee Titans</option>
										<option>Denver Broncos</option>
										<option>Kansas City Chiefs</option>
										<option>Oakland Raiders</option>
										<option>San Diego Chargers</option>
									</select>
								</div>
								
							</div>
						</div>
						<p class="component-desc">Select Multiple Tags and Select &amp; Add Multiple Tags</p>
					</div>
				</div>
			</div>
			</div>
	
		</section> <!-- Selectbox end --> 		

		<section class="row component-section">

			<!-- selectbox title and description -->
			<div class="col-md-3">
				<div id="select2-add-tag">
					<h2>Select2 with Search and Custom Tags</h2>
				</div>
				<p>To create custom multiple tags add <code>.pmd-select2-tags</code> to the select tag.</p>
			</div> <!-- selectbox title and description end-->
		
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
							<li class="active"><a href="#selectbox-add-tags-html" data-toggle="tab">HTML</a></li>
							<li><a href="#selectbox-add-tags-css" data-toggle="tab">CSS</a></li>
							<li><a href="#selectbox-add-tags-js" data-toggle="tab">JS</a></li>
						</ul>
					</div>
					<div id="my-tab-content" class="tab-content">
						<div class="tab-pane active" id="selectbox-add-tags-html">
							<pre class="pre-codebox line-numbers" data-src="../components/select2/snippets/selectbox-tags-add.html"></pre>
						</div>
						<div class="tab-pane" id="selectbox-add-tags-css">
							<pre class="pre-codebox line-numbers" data-src="../components/select2/snippets/selectbox.css"></pre>
						</div>
						<div class="tab-pane" id="selectbox-add-tags-js">
							<pre class="pre-codebox line-numbers" data-src="../components/select2/snippets/selectbox-tags-add.js"></pre>
						</div>
					</div>
				</div> <!-- code view -->
				
				<div class="row toggle-button-custom">
					<div class="col-md-12">
						<div class="pmd-card pmd-z-depth pmd-card-custom-form">
							<div class="pmd-card-body"> 
								
								<!--Select &amp; Add Multiple Tags -->
								<div class="form-group pmd-textfield pmd-textfield-floating-label">
									<label>Select &amp; Add Multiple Tags</label>
									<select class="form-control select-add-tags pmd-select2-tags" multiple>
										<option>Dallas Cowboys</option>
										<option>New York Giants</option>
										<option>Philadelphia Eagles</option>
										<option>Washington Redskins</option>
										<option>Chicago Bears</option>
										<option>Detroit Lions</option>
										<option>Green Bay Packers</option>
										<option>Minnesota Vikings</option>
										<option>Arizona Cardinals</option>
										<option>St. Louis Rams</option>
										<option>San Francisco 49ers</option>
										<option>Seattle Seahawks</option>
										<option>Baltimore Ravens</option>
										<option>Cincinnati Bengals</option>
										<option>Cleveland Browns</option>
										<option>Pittsburgh Steelers</option>
										<option>Houston Texans</option>
										<option>Indianapolis Colts</option>
										<option>Jacksonville Jaguars</option>
										<option>Tennessee Titans</option>
										<option>Denver Broncos</option>
										<option>Kansas City Chiefs</option>
										<option>Oakland Raiders</option>
										<option>San Diego Chargers</option>
									</select>
								</div>
							</div>
						</div>
						<p class="component-desc">Select Multiple Tags and Select &amp; Add Multiple Tags</p>
					</div>
				</div>
			</div>
			</div>
	
		</section> <!-- Selectbox end --> 		
		
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
									<td data-title="Class"><code>.pmd-select2</code></td>
									<td data-title="Effect">Add this class to create simple selectbox</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Class"><code>.pmd-select2-tags</code></td>
									<td data-title="Effect">Add this class to create selectbox with tags</td>
									<td data-title="Remark">Optional</td>
								</tr>						
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