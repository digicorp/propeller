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
					<h1 class="pmd-display1">Table</h1>
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
									<input type="hidden"  name="table" value="table"/>
									<button name='btn_submit' value='table' type="submit" onClick="downloadTable()" class="btn btn-default pmd-btn-raised btn-sm pmd-ripple-effect pmd-btn-flat custom-btn">Download ZIP</button>
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

<!--Table constructor start -->
<div class="pmd-content pmd-content-custom" id="content"> 

	<!--component header -->
	<div class="componant-title-bg"> 
		<div class="container">
			<div class="row">
			
				<!-- component title and description -->
				<div class="col-xs-12">
					<p class="lead">The HTML table model allows authors to arrange data - text, preformatted text, images, links, forms, form fields, other tables, etc. into rows and columns of cells. Table is an ubiquitous feature of most user interfaces, regardless of a site's content or function. It's design and use is therefore an important factor in the overall user experience.</p>
				</div><!-- component title and description end-->
				
			</div>
		</div>
	</div><!--component header end-->
	 
	<div class="custom-table">
		<div class="container">
			
			<!-- component listing -->
			<div class="list-group list-group-custom margin-20"> 
				<a class="list-group-item" href="#bootstrap-basic-table">Botstrap Table</a>
				<a class="list-group-item" href="#propeller-table">Propeller Table</a> 
				<a class="list-group-item" href="#card-table">Card Table</a> 
				<a class="list-group-item" href="#nested-table">Nested Table</a> 
				<a class="list-group-item" href="#striped-row-table">Striped Rows Table</a> 
				<a class="list-group-item" href="#bordered-table">Bordered Table</a> 
				<a class="list-group-item" href="#hoverable-row-table">Hoverable Rows Table </a> 
				<a class="list-group-item" href="#small-table">Small Table</a> 
				<a class="list-group-item" href="#contextual-table">Contextual Table</a> 
				<a class="list-group-item" href="#inverse-table">Inverse Table</a> 
				<a class="list-group-item" href="#reflow-table">Reflow Table</a> 
				<a class="list-group-item" href="#config">Configuration Options</a> 
			</div><!--end component listing -->				
			
			<!-- Basic Bootstrap Table -->
			<section class="row component-section">
			
				<!-- Basic Bootstrap Table title and description -->
				<div class="col-md-3">
					<div id="bootstrap-basic-table">
						<h2>Bootstrap Table</h2>
					</div>
					<p>Bootstrap provides table with its own custom table styles. This simple table can be also converted to table with striped rows, bordered table, table with hover rows, condensed table, table with 
                    contextual classes and responsive table.</p>
				</div><!-- Basic Bootstrap Table title and description -->
				
				<!-- Basic Bootstrap Table code and example -->
				<div class="col-md-9">
					<div class="component-box">
				
						<!-- code view button -->
						<div class="pmd-card-title custom-heading clearfix"> 
							<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
						</div> <!-- end code view button -->
						
						<!-- code view -->
						<div class="code-box">
							<div class="pmd-tabs">
								<div class="pmd-tab-active-bar"></div>
								<ul class="nav nav-tabs" data-tabs="tabs">
									<li class="active"><a href="#basic-bootstrap-html" data-toggle="tab">HTML</a></li>
									<li><a href="#basic-bootstrap-css" data-toggle="tab">CSS</a></li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="basic-bootstrap-html">
									<pre class="pre-codebox line-numbers" data-src="../components/table/snippets/basic-bootstrap-table.html"></pre>
								</div>
								<div class="tab-pane" id="basic-bootstrap-css">
									<pre class="pre-codebox line-numbers" data-src="../components/table/snippets/table-bootstrap.css"></pre>
								</div>
							</div>
						</div><!-- code view end -->
						
						<!-- Basic Bootstrap Table example -->
						<div class="pmd-card pmd-z-depth pmd-card-custom-view">
                        	<div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" class="table" id="table-bootstrap">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>State/City <span class="caret shoarting"></span> </th>
                                            <th>End Date of Work</th>
                                            <th>Status</th>
                                            <th>Timesheet</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Giacomo Guilizzoni</td>
                                            <td>JONEA140</td>
                                            <td>Melbourne</td>
                                            <td>1 June 2014</td>
                                            <td>Active</td>
                                            <td>Timesheet</td>
                                            <td><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Giacomo Guilizzoni</td>
                                            <td>JONEA140</td>
                                            <td>Melbourne</td>
                                            <td>1 June 2014</td>
                                            <td>Active</td>
                                            <td>Timesheet</td>
                                            <td><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Giacomo Guilizzoni</td>
                                            <td>JONEA140</td>
                                            <td>Melbourne</td>
                                            <td>1 June 2014</td>
                                            <td>Active</td>
                                            <td>Timesheet</td>
                                            <td><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Giacomo Guilizzoni</td>
                                            <td>JONEA140</td>
                                            <td>Melbourne</td>
                                            <td>1 June 2014</td>
                                            <td>Active</td>
                                            <td>Timesheet</td>
                                            <td><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Giacomo Guilizzoni</td>
                                            <td>JONEA140</td>
                                            <td>Melbourne</td>
                                            <td>1 June 2014</td>
                                            <td>Active</td>
                                            <td>Timesheet</td>
                                            <td><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Giacomo Guilizzoni</td>
                                            <td>JONEA140</td>
                                            <td>Melbourne</td>
                                            <td>1 June 2014</td>
                                            <td>Active</td>
                                            <td>Timesheet</td>
                                            <td><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
						</div>
					</div> <!-- Basic Bootstrap Table example end-->
				</div>
			</section> <!-- Basic Bootstrap Table end-->
			
			<!-- Propeller table -->
			<section class="row component-section">
			
				<!-- Propeller table title and description -->
				<div class="col-md-3">
					<div id="propeller-table">
						<h2>Propeller Table</h2>
					</div>
					<p>The Propeller Table is an enhanced version of the Bootstrap standard HTML <code><</code><code>table</code><code>></code>. Include <code>.pmd-table</code> followed by <code>.table</code> to use Propeller 
                    table.</p>
				</div><!-- Propeller table title and description -->

				<!-- Propeller table code and example -->
				<div class="col-md-9">
					<div class="component-box">
				
						<!-- code view button -->
						<div class="pmd-card-title custom-heading clearfix">
							<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
						</div> <!-- end code view button -->
						
						<!-- code view -->
						<div class="code-box">
							<div class="pmd-tabs">
								<div class="pmd-tab-active-bar"></div>
								<ul class="nav nav-tabs" data-tabs="tabs">
									<li class="active"><a href="#table-card-html" data-toggle="tab">HTML</a></li>
									<li><a href="#table-card-css" data-toggle="tab">CSS</a></li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="table-card-html">
									<pre class="pre-codebox line-numbers" data-src="../components/table/snippets/table-card.html"></pre>
								</div>
								<div class="tab-pane" id="table-card-css">
									<pre class="pre-codebox line-numbers" data-src="../components/table/snippets/table.css"></pre>
								</div>
							</div>
						</div><!-- code view end -->
						
						<!-- Propeller table example -->
						<div class="pmd-card pmd-z-depth pmd-card-custom-view">
							<div class="table-responsive"> 
								<table cellspacing="0" cellpadding="0" class="table pmd-table" id="table-propeller">
									<thead>
										<tr>
											<th>Name</th>
											<th>Code</th>
											<th>State/City <span class="caret shoarting"></span> </th>
											<th>End Date of Work</th>
											<th>Status</th>
											<th>Timesheet</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Firm Name">Giacomo Guilizzoni</td>
											<td data-title="Firm Code">JONEA140</td>
											<td data-title="Firm State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Firm Name">Giacomo Guilizzoni</td>
											<td data-title="Firm Code">JONEA140</td>
											<td data-title="Firm State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Firm Name">Giacomo Guilizzoni</td>
											<td data-title="Firm Code"></td>
											<td data-title="Firm State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Firm Name">Giacomo Guilizzoni</td>
											<td data-title="Firm Code">JONEA140</td>
											<td data-title="Firm State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Firm Name">Giacomo Guilizzoni</td>
											<td data-title="Firm Code">JONEA140</td>
											<td data-title="Firm State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div> <!-- Propeller table example end-->
						
				</div>
			</section> <!-- Propeller table end-->
            
			<!-- Card table -->
			<section class="row component-section">
			
				<!-- Card table title and description -->
				<div class="col-md-3">
					<div id="card-table">
						<h2>Card Table</h2>
					</div>
                    <p>Card Table reformats each row into a card for narrow screens. This way user can view complete information without horizontal scroll. Add <code>.pmd-table-card</code> to convert simple table into Card Table.
                    </p>  
				</div><!-- Card table title and description end-->
				
				<!-- Card table code and example -->
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
									<li class="active"><a href="#basic-table-html" data-toggle="tab">HTML</a></li>
									<li><a href="#basic-table-css" data-toggle="tab">CSS</a></li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="basic-table-html">
									<pre class="pre-codebox line-numbers" data-src="../components/table/snippets/row-card.html"></pre>
								</div>
								<div class="tab-pane" id="basic-table-css">
									<pre class="pre-codebox line-numbers" data-src="../components/table/snippets/table.css"></pre>
								</div>
							</div>
						</div> <!-- code view end-->
					
						<!-- Card table example -->
						<div class="pmd-table-card pmd-card pmd-z-depth pmd-card-custom-view">
							<table class="table pmd-table">
								<thead>
									<tr>
										<th>Name</th>
										<th>Code</th>
										<th>State/City</th>
										<th>End Date of Work</th>
										<th>Status</th>
										<th>Timesheet</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-title="Name">Giacomo Guilizzoni</td>
										<td data-title="Code">JONEA140</td>
										<td data-title="State/City">Melbourne</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
								</tbody>
							</table>
						</div> <!-- Card table example end -->
					
					</div>
				</div> <!-- Card table code and example end -->
				
			</section><!-- Card table end -->			 
			
            <!-- Nested Table -->
			<section class="row component-section">
			
				<!-- table card title and description -->
				<div class="col-md-3">
					<div id="nested-table">
						<h2>Nested Table</h2>
					</div>
					<p>Nested Table is a table inside a table. It can have several rows for each row of its parent table. Add <code>.child-table</code> to the <code>tr</code> where you want to nest your table. Then 
                    add colspan to the <code>td</code> followed by above <code>tr</code> with the value equal to the number of columns in sub-table. Add <code>.table-sm</code> followed by <code>.table</code> in nested table tag
                    to make it look like sub-table.</p>
				</div><!-- table card title and description -->
				
				<!-- table card code and example -->
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
									<li class="active"><a href="#table-card-html" data-toggle="tab">HTML</a></li>
									<li><a href="#table-card-css" data-toggle="tab">CSS</a></li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="table-card-html">
									<pre class="pre-codebox line-numbers" data-src="../components/table/snippets/table-nested.html"></pre>
								</div>
								<div class="tab-pane" id="table-card-css">
									<pre class="pre-codebox line-numbers" data-src="../components/table/snippets/table.css"></pre>
								</div>
							</div>
						</div><!-- code view end -->
						
						<!-- table card example -->
						<div class="pmd-card pmd-z-depth pmd-card-custom-view">
							<div class="table-responsive">
								<table cellspacing="0" cellpadding="0" class="table pmd-table" id="table">
									<thead>
										<tr>
											<th>Name</th>
											<th>Code</th>
											<th>State/City <span class="caret shoarting"></span> </th>
											<th>End Date of Work</th>
											<th>Status</th>
											<th>Timesheet</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Firm Name">Giacomo Guilizzoni</td>
											<td data-title="Firm Code">JONEA140</td>
											<td data-title="Firm State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Firm Name">Giacomo Guilizzoni</td>
											<td data-title="Firm Code">JONEA140</td>
											<td data-title="Firm State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr class="child-table">
											<td colspan="10"><table class="table pmd-table table-sm">
													<thead>
														<tr>
															<th>#</th>
															<th>First Name</th>
															<th>Last Name</th>
															<th>Username</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<th scope="row">1</th>
															<td data-title="Firm Name">Mark</td>
															<td data-title="Last Name">Otto</td>
															<td data-title="Username">@mdo</td>
														</tr>
														<tr>
															<th scope="row">2</th>
															<td data-title="Firm Name">Jacob</td>
															<td data-title="Last Name">Thornton</td>
															<td data-title="Username">@fat</td>
														</tr>
														<tr>
															<th scope="row">3</th>
															<td data-title="Firm Name">Larry</td>
															<td data-title="Last Name">the Bird</td>
															<td data-title="Username">@twitter</td>
														</tr>
													</tbody>
												</table></td>
										</tr>
										<tr>
											<td data-title="Firm Name">Giacomo Guilizzoni</td>
											<td data-title="Firm Code"></td>
											<td data-title="Firm State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Firm Name">Giacomo Guilizzoni</td>
											<td data-title="Firm Code">JONEA140</td>
											<td data-title="Firm State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Firm Name">Giacomo Guilizzoni</td>
											<td data-title="Firm Code">JONEA140</td>
											<td data-title="Firm State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div> <!-- table card example end-->
						
				</div>
			</section> <!-- Nested Table end-->
			
			<!-- Striped table -->
			<section class="row component-section">
			
				<!-- striped table title and description -->
				<div class="col-md-3">
					<div id="striped-row-table">
						<h2>Striped Rows Table</h2>
					</div>
					<p>Create Striped Rows Table by adding <code>.table-striped</code> in your code.</p>
				</div> <!-- striped table title and description end -->
				
				<!-- striped table code and example -->
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
									<li class="active"><a href="#striped-html" data-toggle="tab">HTML</a></li>
									<li><a href="#striped-css" data-toggle="tab">CSS</a></li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="striped-html">
									<pre class="pre-codebox line-numbers" data-src="../components/table/snippets/striped-table.html"></pre>
								</div>
								<div class="tab-pane" id="striped-css">
									<pre class="pre-codebox line-numbers" data-src="../components/table/snippets/table.css"></pre>
								</div>
							</div>						
						</div> <!-- code view end -->
					
						<!-- striped table example -->
						<div class="pmd-card pmd-z-depth pmd-card-custom-view">
							<div class="table-responsive">
								<table class="table pmd-table table-striped table-mc-red">
									<thead>
										<tr>
											<th>Name</th>
											<th>Code</th>
											<th>State/City</th>
											<th>End Date of Work</th>
											<th>Status</th>
											<th>Timesheet</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div> <!-- striped table example end -->
					
					</div>
				</div> <!-- striped table code and example end-->
				
			</section> <!-- Striped table end --> 			
			
			<!-- Bordered table -->
			<section class="row component-section">
			
				<!-- bordered table title and description -->
				<div class="col-md-3">
					<div id="bordered-table">
						<h2>Bordered Table</h2>
					</div>
					<p>Create Bordered Table by adding <code>.table-bordered</code> in your code.</p>
				</div><!-- bordered table title and description end-->
				
				<!-- bordered table code and example -->
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
									<li class="active"><a href="#bordered-html" data-toggle="tab">HTML</a></li>
									<li><a href="#bordered-css" data-toggle="tab">CSS</a></li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="bordered-html">
									<pre class="pre-codebox line-numbers" data-src="../components/table/snippets/bordered-table.html"></pre>
								</div>
								<div class="tab-pane" id="bordered-css">
									<pre class="pre-codebox line-numbers" data-src="../components/table/snippets/table.css"></pre>
								</div>
							</div>
						</div> <!-- code view end-->
					
						<!-- bordered table example -->
						<div class="pmd-card pmd-z-depth pmd-card-custom-view">
							<div class="table-responsive">
								<table class="table pmd-table table-bordered">
									<thead>
										<tr>
											<th>Name</th>
											<th>Code</th>
											<th>State/City</th>
											<th>End Date of Work</th>
											<th>Status</th>
											<th>Timesheet</th>
											<th></th>
										</tr>
									</thead>
									
									<tbody>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div> <!-- bordered table example end -->
					
					</div>
				</div> <!-- bordered table code and example end -->
				
			</section> <!-- Bordered table end -->			 
			
			<!-- Hoverable Rows Table -->
			<section class="row component-section">
			
				<!-- hoverable rows table title and description  -->
				<div class="col-md-3">
					<div id="hoverable-row-table">
						<h2>Hoverable Rows Table</h2>
					</div>
					<p>Create Hoverable Rows Table by adding <code>.table-hover</code> in your code.</p>
				</div> <!-- hoverable rows table title and description end -->
				
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
									<li class="active"><a href="#hoverable-html" data-toggle="tab">HTML</a> </li>
									<li><a href="#hoverable-css" data-toggle="tab">CSS</a> </li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="hoverable-html">
									<pre class="pre-codebox line-numbers" data-src="../components/table/snippets/hoverable-table.html"></pre>
								</div>
								<div class="tab-pane" id="hoverable-css">
									<pre class="pre-codebox line-numbers" data-src="../components/table/snippets/table.css"></pre>
								</div>
							</div>
						</div> <!-- code view end -->
					
						<!-- hoverable rows table example -->
						<div class="pmd-card pmd-z-depth pmd-card-custom-view">
							<div class="table-responsive">
								<table class="table pmd-table table-hover">
									<thead>
										<tr>
											<th>Name</th>
											<th>Code</th>
											<th>State/City</th>
											<th>End Date of Work</th>
											<th>Status</th>
											<th>Timesheet</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div> <!-- hoverable rows table example end -->
					
					</div>
				</div>
			</section> <!-- Hoverable Rows Table end -->			 
			
			<!-- Small Table -->
			<section class="row component-section">
			
				<!-- small table title and description -->
				<div class="col-md-3">
					<div id="small-table">
						<h2>Small Table</h2>
					</div>
					<p>Create Small Table by adding <code>.table-sm</code> in your code.</p>
				</div> <!-- small table title and description end-->
				
				<!-- small table code and example -->
				<div class="col-md-9">
					<!-- code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
					</div> <!-- code view button end-->
					
					<!--code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#small-html" data-toggle="tab">HTML</a></li>
								<li><a href="#small-css" data-toggle="tab">CSS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="small-html">
								<pre class="pre-codebox line-numbers" data-src="../components/table/snippets/small-table.html"></pre>
							</div>
							<div class="tab-pane" id="small-css">
								<pre class="pre-codebox line-numbers" data-src="../components/table/snippets/table.css"></pre>
							</div>
						</div>
					</div> <!--code view end-->
					
					<!-- small table example -->
					<div class="pmd-card pmd-z-depth pmd-card-custom-view">
						<div class="table-responsive">
							<table class="table pmd-table table-sm">
								<thead>
									<tr>
										<th>Name</th>
										<th>Code</th>
										<th>State/City</th>
										<th>End Date of Work</th>
										<th>Status</th>
										<th>Timesheet</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-title="Name">Giacomo Guilizzoni</td>
										<td data-title="Code">JONEA140</td>
										<td data-title="State/City">Melbourne</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Name">Giacomo Guilizzoni</td>
										<td data-title="Code">JONEA140</td>
										<td data-title="State/City">Melbourne</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Name">Giacomo Guilizzoni</td>
										<td data-title="Code">JONEA140</td>
										<td data-title="State/City">Melbourne</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Name">Giacomo Guilizzoni</td>
										<td data-title="Code">JONEA140</td>
										<td data-title="State/City">Melbourne</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Name">Giacomo Guilizzoni</td>
										<td data-title="Code">JONEA140</td>
										<td data-title="State/City">Melbourne</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Name">Giacomo Guilizzoni</td>
										<td data-title="Code">JONEA140</td>
										<td data-title="State/City">Melbourne</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div> <!-- small table example end -->
					
				</div> <!-- small table code and example end-->
				
			</section> <!-- Small Table end --> 			
			
			<!-- Contextual Table -->
			<section class="row component-section">
			
				<!-- Contextual table title and description -->
				<div class="col-md-3">
					<div id="contextual-table">
						<h2>Contextual Table</h2>
					</div>
					<p>To create Contextual Table add the class on row namely <code>.table-active</code> for active, <code>.table-success</code> for success, <code>.table-info</code> for info, <code>.table-warning</code> for warning, and <code>.table-danger</code> for danger.</p>
				</div> <!-- Contextual table title and description end-->
				
				<!-- Contextual table code and example -->
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
									<li class="active"><a href="#reflow-html" data-toggle="tab">HTML</a></li>
									<li><a href="#reflow-css" data-toggle="tab">CSS</a></li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="reflow-html">
									<pre class="pre-codebox line-numbers" data-src="../components/table/snippets/reflow-table.html"></pre>
								</div>
								<div class="tab-pane" id="reflow-css">
									<pre class="pre-codebox line-numbers" data-src="../components/table/snippets/table.css"></pre>
								</div>
							</div>
						</div>	<!-- code view  end-->				
						
						<!-- Contextual table example -->
						<div class="pmd-card pmd-z-depth pmd-card-custom-view">
							<div class="table-responsive">
								<table class="table pmd-table">
									<thead>
										<tr>
											<th>#</th>
											<th>Column heading</th>
											<th>Column heading</th>
											<th>Column heading</th>
										</tr>
									</thead>
									<tbody>
										<tr class="table-active">
											<th scope="row">1</th>
											<td>Column content</td>
											<td>Column content</td>
											<td>Column content</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Column content</td>
											<td>Column content</td>
											<td>Column content</td>
										</tr>
										<tr class="table-success">
											<th scope="row">3</th>
											<td>Column content</td>
											<td>Column content</td>
											<td>Column content</td>
										</tr>
										<tr>
											<th scope="row">4</th>
											<td>Column content</td>
											<td>Column content</td>
											<td>Column content</td>
										</tr>
										<tr class="table-info">
											<th scope="row">5</th>
											<td>Column content</td>
											<td>Column content</td>
											<td>Column content</td>
										</tr>
										<tr>
											<th scope="row">6</th>
											<td>Column content</td>
											<td>Column content</td>
											<td>Column content</td>
										</tr>
										<tr class="table-warning">
											<th scope="row">7</th>
											<td>Column content</td>
											<td>Column content</td>
											<td>Column content</td>
										</tr>
										<tr>
											<th scope="row">8</th>
											<td>Column content</td>
											<td>Column content</td>
											<td>Column content</td>
										</tr>
										<tr class="table-danger">
											<th scope="row">9</th>
											<td>Column content</td>
											<td>Column content</td>
											<td>Column content</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div> <!-- Contextual table example end-->
					</div>		
				</div> <!-- Contextual table code and example end-->
				
 			</section> <!-- Contextual Table end --> 			
			
			<!-- Inverse Table -->
			<section class="row component-section">
				
				<!-- inverse table title and description -->
				<div class="col-md-3">
					<div id="inverse-table">
						<h2>Inverse Table</h2>
					</div>
					<p>Create Inverse Table by adding <code>.table-inverse</code> in your code.</p>
				</div> <!-- inverse table title and description end -->
				
				<!-- inverse table code and example -->
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
								<!--tabbing start-->
								<ul class="nav nav-tabs" data-tabs="tabs">
									<li class="active"><a href="#inverse-html" data-toggle="tab">HTML</a> </li>
									<li><a href="#inverse-css" data-toggle="tab">CSS</a> </li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="inverse-html">
									<pre class="pre-codebox line-numbers" data-src="../components/table/snippets/inverse-table.html"></pre>
								</div>
								<div class="tab-pane" id="inverse-css">
									<pre class="pre-codebox line-numbers" data-src="../components/table/snippets/table.css"></pre>
								</div>
							</div>
						</div> <!-- code view end-->
					
						<!-- inverse table example --> 
						<div class="pmd-card pmd-z-depth pmd-card-custom-view">
							<div class="table-responsive">
								<table class="table pmd-table table-inverse">
									<thead>
										<tr>
											<th>Name</th>
											<th>Code</th>
											<th>State/City</th>
											<th>End Date of Work</th>
											<th>Status</th>
											<th>Timesheet</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-light pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-light pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-light pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-light pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-light pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-light pmd-sm">more_vert</i></a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div> <!-- inverse table example end -->
					
					</div>
				</div> <!-- inverse table code and example end -->
				
			</section> <!-- Inverse Table end -->
			 
			<!-- Reflow Table  -->
			<section class="row component-section">
			
				<!-- contextual table title and description -->
				<div class="col-md-3">
					<div id="reflow-table">
						<h2>Reflow Table</h2>
					</div>
					<p>Create Reflow Table by adding <code>.table-reflow</code> in your code.</p>
				</div> <!-- Reflow table title and description -->
				
				<!-- Reflow table code and example -->
				<div class="col-md-9">
					<div class="component-box">
						
						<!-- code view button-->
						<div class="pmd-card-title custom-heading clearfix"> 
							<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
						</div> <!-- code view button end -->
						
						<!-- code view -->
						<div class="code-box">
							<div class="pmd-tabs">
								<div class="pmd-tab-active-bar"></div>
								<!--tabbing start-->
								<ul class="nav nav-tabs" data-tabs="tabs">
									<li class="active"><a href="#contextual-html" data-toggle="tab">HTML</a> </li>
									<li><a href="#contextual-css" data-toggle="tab">CSS</a> </li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="contextual-html">
									<pre class="pre-codebox line-numbers" data-src="../components/table/snippets/contextual-table.html"></pre>
								</div>
								<div class="tab-pane" id="contextual-css">
									<pre class="pre-codebox line-numbers" data-src="../components/table/snippets/table.css"></pre>
								</div>
							</div>
						</div> <!-- code view end -->
					
						<!-- Reflow table example -->
						<div class="pmd-card pmd-z-depth pmd-card-custom-view">
							<table class="table pmd-table table-reflow">
								<thead>
									<tr>
										<th>Name</th>
										<th>Code</th>
										<th>State/City</th>
										<th>Incharge Name</th>
										<th>Mobile</th>
										<th>Type of Work</th>
										<th>End Date of Work</th>
										<th>Status</th>
										<th>Timesheet</th>
										<th>&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-title="Name">Giacomo Guilizzoni</td>
										<td data-title="Code">JONEA140</td>
										<td data-title="State/City">Melbourne</td>
										<td data-title="Incharge Name">Giacomo Guilizzoni</td>
										<td data-title="Mobile">9625145236</td>
										<td data-title="Type of Work">9625145236</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="Firm Incharge Name">Giacomo Guilizzoni</td>
										<td data-title="Mobile">9625145236</td>
										<td data-title="Type of Work">9625145236</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="Firm Incharge Name">Giacomo Guilizzoni</td>
										<td data-title="Mobile">9625145236</td>
										<td data-title="Type of Work">9625145236</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="Firm Incharge Name">Giacomo Guilizzoni</td>
										<td data-title="Mobile">9625145236</td>
										<td data-title="Type of Work">9625145236</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="Firm Incharge Name">Giacomo Guilizzoni</td>
										<td data-title="Mobile">9625145236</td>
										<td data-title="Type of Work">9625145236</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="Firm Incharge Name">Giacomo Guilizzoni</td>
										<td data-title="Mobile">9625145236</td>
										<td data-title="Type of Work">9625145236</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="Firm Incharge Name">Giacomo Guilizzoni</td>
										<td data-title="Mobile">9625145236</td>
										<td data-title="Type of Work">9625145236</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="Firm Incharge Name">Giacomo Guilizzoni</td>
										<td data-title="Mobile">9625145236</td>
										<td data-title="Type of Work">9625145236</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="Firm Incharge Name">Giacomo Guilizzoni</td>
										<td data-title="Mobile">9625145236</td>
										<td data-title="Type of Work">9625145236</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
								</tbody>
							</table>
						</div> <!-- Reflow table example -->
					
					</div>
				</div> <!-- Reflow table code and example end-->				
			</section> <!-- Reflow Table end --> 
			
			<!-- Configuration starts-->			
			<section class="row">
				<div class="col-md-3">
					<div id="config">
						<h2>Configuration Options</h2>
					</div>
					<p>The Propeller CSS classes apply various predefined visual enhancements to the Table. The table lists the available classes and their effects.</p>
				</div>
				<div class="col-md-9">
					<div class="pmd-card pmd-table-card-responsive">
						<div class="pmd-table-card">  
							<table class="table pmd-table table-hover">
								<thead>
									<tr>
										<th width="20%">Propeller Classes</th>
										<th width="60%">Effect</th>
										<th width="20%">Remark</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-title="Propeller Classes"><code>.pmd-table</code></td>
										<td data-title="Effect">Wrapper class for card layout.</td>
										<td data-title="Remark">Required</td>
									</tr>
									<tr>
										<td data-title="Propeller Classes"><code>.pmd-z-depth</code></td>
										<td data-title="Effect">Used to provide shadow depth to card. Shadow depth inceases with the counting (pmd-z-depth, pmd-z-depth-1...pmd-z-depth-5)</td>
										<td data-title="Remark">Optional</td>
									</tr>
									<tr>
										<td data-title="Propeller Classes"><code>.pmd-card-title</code></td>
										<td data-title="Effect">Defines header section of the card</td>
										<td data-title="Remark">Optional</td>
									</tr>
									<tr>
										<td data-title="Propeller Classes"><code>.pmd-card-body</code></td>
										<td data-title="Effect">Defines content section of the card.</td>
										<td data-title="Remark">Optional</td>
									</tr>
									<tr>
										<td data-title="Propeller Classes"><code>.pmd-card-actions</code></td>
										<td data-title="Effect">Defines section for the action buttons/links for the card.</td>
										<td data-title="Remark">Optional</td>
									</tr>
									<tr>
										<td data-title="Propeller Classes"><code>.table-responsive</code></td>
										<td data-title="Effect">Add this class to create a responsive table</td>
										<td data-title="Remark">Optional</td>
									</tr>
									<tr>
										<td data-title="Propeller Classes"><code>.child-table</code></td>
										<td data-title="Effect">Add this class to create a child table</td>
										<td data-title="Remark">Required</td>
									</tr>
									<tr>
										<td data-title="Propeller Classes"><code>.table-sm</code></td>
										<td data-title="Effect">Add this class to format a child table</td>
										<td data-title="Remark">Optional</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</section> <!-- Configuration ends-->
			 
		</div>
	</div>
	
</div><!--Table constructor end --> 

	
<!--footer start -->
<?php include('include/footer.php'); ?>
<!-- footer end -->