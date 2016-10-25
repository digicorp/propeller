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
					<h1 class="pmd-display1">Data table</h1>
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
									<input type="hidden"  name="data-table" value="data-table"/>
									<button name='btn_submit' value='data-table' type="submit" onClick="downloadDatatable()" class="btn btn-default pmd-btn-raised btn-sm pmd-ripple-effect pmd-btn-flat custom-btn">Download ZIP</button>
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

<!--data grid constructor start -->
<div class="pmd-content pmd-content-custom" id="content">

	<!-- component header -->
	<div class="componant-title-bg">
		<div class="container">
			<div class="row">
				<!-- component title and description -->
				<div class="col-xs-12">
					<p class="lead">Data table refers to a matrix of information, like an excel spreadsheet with columns, rows, and data. It is used to present raw data sets, and usually appear in desktop enterprise products.
                    </p>
                    <p class="lead">We have used Bootstrap Data table as a reference which we have then customized based on our Propeller theme.</p> 
                    <p class="lead">For more options and documentation, visit: <a href="https://datatables.net/" target="_blank">Data table</a></p>
				</div> <!-- component title and description end -->
			</div>
		</div>
	</div> <!-- component header end -->
	
	
	<div class="custom-table">
		<div class="container">
			
			<!-- component listing -->
			<div class="list-group list-group-custom margin-20"> 
				<a class="list-group-item" href="#card">Propeller Data table</a> 
				<a class="list-group-item" href="#responsive">Responsive Data table</a> 
				<a class="list-group-item" href="#inverse">Inverse Data table</a> 
			</div>
			<!-- component listing -->
			
			<!-- table card -->
			<section class="row component-section">
			
				<!-- table card title and description -->
				<div class="col-md-3">
					<div id="card">
						<h2>Propeller Data table</h2>
					</div>
					<p>In its simplest form, a data table contains a top row of column names, and rows for data. Checkboxes should accompany each row if the user needs to select or manipulate data.</p>
				</div> <!-- table card title and description end -->
				
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
									<li><a href="#table-card-js" data-toggle="tab">JS</a></li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="table-card-html">
									<pre class="pre-codebox line-numbers" data-src="../components/data-table/snippets/table-card.html"></pre>
								</div>
								<div class="tab-pane" id="table-card-css">
									<pre class="pre-codebox line-numbers" data-src="../components/data-table/snippets/data-table.css"></pre>
								</div>
								<div class="tab-pane" id="table-card-js">
									<pre class="pre-codebox line-numbers" data-src="../components/data-table/snippets/data-table.js"></pre>
								</div>
							</div>
						</div> <!-- code view -->
					
						<!-- table card example -->
						<div  class="pmd-card pmd-z-depth pmd-card-custom-view">
							<div class="table-responsive">
							<table id="example-checkbox" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th></th>
									<th>First name</th>
									<th>Last name</th>
									<th>Position</th>
									<th>Office</th>
									<th>Age</th>
									<th>Start date</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td></td>
									<td>Tiger</td>
									<td>Nixon</td>
									<td>System Architect</td>
									<td>Edinburgh</td>
									<td>61</td>
									<td>2011/04/25</td>
								</tr>
								<tr>
									<td></td>
									<td>Garrett</td>
									<td>Winters</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>63</td>
									<td>2011/07/25</td>
								</tr>
								<tr>
									<td></td>
									<td>Ashton</td>
									<td>Cox</td>
									<td>Junior Technical Author</td>
									<td>San Francisco</td>
									<td>66</td>
									<td>2009/01/12</td>
								</tr>
								<tr>
									<td></td>
									<td>Cedric</td>
									<td>Kelly</td>
									<td>Senior Javascript Developer</td>
									<td>Edinburgh</td>
									<td>22</td>
									<td>2012/03/29</td>
								</tr>
								<tr>
									<td></td>
									<td>Airi</td>
									<td>Satou</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>33</td>
									<td>2008/11/28</td>
								</tr>
								<tr>
									<td></td>
									<td>Brielle</td>
									<td>Williamson</td>
									<td>Integration Specialist</td>
									<td>New York</td>
									<td>61</td>
									<td>2012/12/02</td>
								</tr>
								<tr>
									<td></td>
									<td>Herrod</td>
									<td>Chandler</td>
									<td>Sales Assistant</td>
									<td>San Francisco</td>
									<td>59</td>
									<td>2012/08/06</td>
								</tr>
								<tr>
									<td></td>
									<td>Airi</td>
									<td>Satou</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>33</td>
									<td>2008/11/28</td>
								</tr>
								<tr>
									<td></td>
									<td>Brielle</td>
									<td>Williamson</td>
									<td>Integration Specialist</td>
									<td>New York</td>
									<td>61</td>
									<td>2012/12/02</td>
								</tr>
								<tr>
									<td></td>
									<td>Herrod</td>
									<td>Chandler</td>
									<td>Sales Assistant</td>
									<td>San Francisco</td>
									<td>59</td>
									<td>2012/08/06</td>
								</tr>
								<tr>
									<td></td>
									<td>Airi</td>
									<td>Satou</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>33</td>
									<td>2008/11/28</td>
								</tr>
								<tr>
									<td></td>
									<td>Brielle</td>
									<td>Williamson</td>
									<td>Integration Specialist</td>
									<td>New York</td>
									<td>61</td>
									<td>2012/12/02</td>
								</tr>
								<tr>
									<td></td>
									<td>Herrod</td>
									<td>Chandler</td>
									<td>Sales Assistant</td>
									<td>San Francisco</td>
									<td>59</td>
									<td>2012/08/06</td>
								</tr>
								<tr>
									<td></td>
									<td>Airi</td>
									<td>Satou</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>33</td>
									<td>2008/11/28</td>
								</tr>
								<tr>
									<td></td>
									<td>Brielle</td>
									<td>Williamson</td>
									<td>Integration Specialist</td>
									<td>New York</td>
									<td>61</td>
									<td>2012/12/02</td>
								</tr>
								<tr>
									<td></td>
									<td>Herrod</td>
									<td>Chandler</td>
									<td>Sales Assistant</td>
									<td>San Francisco</td>
									<td>59</td>
									<td>2012/08/06</td>
								</tr>
								<tr>
									<td></td>
									<td>Airi</td>
									<td>Satou</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>33</td>
									<td>2008/11/28</td>
								</tr>
								<tr>
									<td></td>
									<td>Brielle</td>
									<td>Williamson</td>
									<td>Integration Specialist</td>
									<td>New York</td>
									<td>61</td>
									<td>2012/12/02</td>
								</tr>
								<tr>
									<td></td>
									<td>Herrod</td>
									<td>Chandler</td>
									<td>Sales Assistant</td>
									<td>San Francisco</td>
									<td>59</td>
									<td>2012/08/06</td>
								</tr>
							</tbody>
						</table>
							</div>
						</div> <!-- table card example end -->
					
					</div>
				</div> <!-- table card code and example end -->
			</section> <!-- table card end -->
			
			<!-- Responsive table -->
			<section class="row component-section">
			
				<!-- responsive table title and description -->
				<div class="col-md-3">
					<div id="responsive">
						<h2>Responsive Data table</h2>
					</div>
					<p>Some table cards may require headers with actions instead of titles. Two possible approaches to this are to display persistent actions, or a contextual header that activates when items are selected. Create basic table with responsive by simply adding <code>.table-responsive</code> class in your code. </p>
				</div> <!-- responsive table title and description end -->
				
				<!-- responsive table code and example -->
				<div class="col-md-9">
					
					<!-- code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
					</div> <!-- code view button end-->
					
					<!-- code view --> 
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#table-res-html" data-toggle="tab">HTML</a></li>
								<li><a href="#table-res-css" data-toggle="tab">CSS</a></li>
								<li><a href="#table-res-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="table-res-html">
								<pre class="pre-codebox line-numbers" data-src="../components/data-table/snippets/table-responsive.html"></pre>
							</div>
							<div class="tab-pane" id="table-res-css">
								<pre class="pre-codebox line-numbers" data-src="../components/data-table/snippets/table-responsive.css"></pre>
							</div>
							<div class="tab-pane" id="table-res-js">
								<pre class="pre-codebox line-numbers" data-src="../components/data-table/snippets/table-responsive.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!-- responsive table example -->
					<div class="pmd-card pmd-z-depth pmd-card-custom-view">
						<table id="example" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>First name</th>
									<th>Last name</th>
									<th>Position</th>
									<th>Office</th>
									<th>Age</th>
									<th>Start date</th>
									<th>Salary</th>
									<th>Extn.</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Tiger</td>
									<td>Nixon</td>
									<td>System Architect</td>
									<td>Edinburgh</td>
									<td>61</td>
									<td>2011/04/25</td>
									<td>$320,800</td>
									<td>5421</td>
								</tr>
								<tr>
									<td>Garrett</td>
									<td>Winters</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>63</td>
									<td>2011/07/25</td>
									<td>$170,750</td>
									<td>8422</td>
								</tr>
								<tr>
									<td>Ashton</td>
									<td>Cox</td>
									<td>Junior Technical Author</td>
									<td>San Francisco</td>
									<td>66</td>
									<td>2009/01/12</td>
									<td>$86,000</td>
									<td>1562</td>
								</tr>
								<tr>
									<td>Cedric</td>
									<td>Kelly</td>
									<td>Senior Javascript Developer</td>
									<td>Edinburgh</td>
									<td>22</td>
									<td>2012/03/29</td>
									<td>$433,060</td>
									<td>6224</td>
								</tr>
								<tr>
									<td>Tiger</td>
									<td>Nixon</td>
									<td>System Architect</td>
									<td>Edinburgh</td>
									<td>61</td>
									<td>2011/04/25</td>
									<td>$320,800</td>
									<td>5421</td>
								</tr>
								<tr>
									<td>Garrett</td>
									<td>Winters</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>63</td>
									<td>2011/07/25</td>
									<td>$170,750</td>
									<td>8422</td>
								</tr>
								<tr>
									<td>Ashton</td>
									<td>Cox</td>
									<td>Junior Technical Author</td>
									<td>San Francisco</td>
									<td>66</td>
									<td>2009/01/12</td>
									<td>$86,000</td>
									<td>1562</td>
								</tr>
								<tr>
									<td>Cedric</td>
									<td>Kelly</td>
									<td>Senior Javascript Developer</td>
									<td>Edinburgh</td>
									<td>22</td>
									<td>2012/03/29</td>
									<td>$433,060</td>
									<td>6224</td>
								</tr>
								<tr>
									<td>Tiger</td>
									<td>Nixon</td>
									<td>System Architect</td>
									<td>Edinburgh</td>
									<td>61</td>
									<td>2011/04/25</td>
									<td>$320,800</td>
									<td>5421</td>
								</tr>
								<tr>
									<td>Garrett</td>
									<td>Winters</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>63</td>
									<td>2011/07/25</td>
									<td>$170,750</td>
									<td>8422</td>
								</tr>
								<tr>
									<td>Ashton</td>
									<td>Cox</td>
									<td>Junior Technical Author</td>
									<td>San Francisco</td>
									<td>66</td>
									<td>2009/01/12</td>
									<td>$86,000</td>
									<td>1562</td>
								</tr>
								<tr>
									<td>Cedric</td>
									<td>Kelly</td>
									<td>Senior Javascript Developer</td>
									<td>Edinburgh</td>
									<td>22</td>
									<td>2012/03/29</td>
									<td>$433,060</td>
									<td>6224</td>
								</tr>
								<tr>
									<td>Tiger</td>
									<td>Nixon</td>
									<td>System Architect</td>
									<td>Edinburgh</td>
									<td>61</td>
									<td>2011/04/25</td>
									<td>$320,800</td>
									<td>5421</td>
								</tr>
								<tr>
									<td>Garrett</td>
									<td>Winters</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>63</td>
									<td>2011/07/25</td>
									<td>$170,750</td>
									<td>8422</td>
								</tr>
								<tr>
									<td>Ashton</td>
									<td>Cox</td>
									<td>Junior Technical Author</td>
									<td>San Francisco</td>
									<td>66</td>
									<td>2009/01/12</td>
									<td>$86,000</td>
									<td>1562</td>
								</tr>
								<tr>
									<td>Cedric</td>
									<td>Kelly</td>
									<td>Senior Javascript Developer</td>
									<td>Edinburgh</td>
									<td>22</td>
									<td>2012/03/29</td>
									<td>$433,060</td>
									<td>6224</td>
								</tr>
								<tr>
									<td>Tiger</td>
									<td>Nixon</td>
									<td>System Architect</td>
									<td>Edinburgh</td>
									<td>61</td>
									<td>2011/04/25</td>
									<td>$320,800</td>
									<td>5421</td>
								</tr>
								<tr>
									<td>Garrett</td>
									<td>Winters</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>63</td>
									<td>2011/07/25</td>
									<td>$170,750</td>
									<td>8422</td>
								</tr>
								<tr>
									<td>Ashton</td>
									<td>Cox</td>
									<td>Junior Technical Author</td>
									<td>San Francisco</td>
									<td>66</td>
									<td>2009/01/12</td>
									<td>$86,000</td>
									<td>1562</td>
								</tr>
								<tr>
									<td>Cedric</td>
									<td>Kelly</td>
									<td>Senior Javascript Developer</td>
									<td>Edinburgh</td>
									<td>22</td>
									<td>2012/03/29</td>
									<td>$433,060</td>
									<td>6224</td>
								</tr>
								<tr>
									<td>Tiger</td>
									<td>Nixon</td>
									<td>System Architect</td>
									<td>Edinburgh</td>
									<td>61</td>
									<td>2011/04/25</td>
									<td>$320,800</td>
									<td>5421</td>
								</tr>
								<tr>
									<td>Garrett</td>
									<td>Winters</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>63</td>
									<td>2011/07/25</td>
									<td>$170,750</td>
									<td>8422</td>
								</tr>
								<tr>
									<td>Ashton</td>
									<td>Cox</td>
									<td>Junior Technical Author</td>
									<td>San Francisco</td>
									<td>66</td>
									<td>2009/01/12</td>
									<td>$86,000</td>
									<td>1562</td>
								</tr>
								<tr>
									<td>Cedric</td>
									<td>Kelly</td>
									<td>Senior Javascript Developer</td>
									<td>Edinburgh</td>
									<td>22</td>
									<td>2012/03/29</td>
									<td>$433,060</td>
									<td>6224</td>
								</tr>
								<tr>
									<td>Tiger</td>
									<td>Nixon</td>
									<td>System Architect</td>
									<td>Edinburgh</td>
									<td>61</td>
									<td>2011/04/25</td>
									<td>$320,800</td>
									<td>5421</td>
								</tr>
								<tr>
									<td>Garrett</td>
									<td>Winters</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>63</td>
									<td>2011/07/25</td>
									<td>$170,750</td>
									<td>8422</td>
								</tr>
								<tr>
									<td>Ashton</td>
									<td>Cox</td>
									<td>Junior Technical Author</td>
									<td>San Francisco</td>
									<td>66</td>
									<td>2009/01/12</td>
									<td>$86,000</td>
									<td>1562</td>
								</tr>
								<tr>
									<td>Cedric</td>
									<td>Kelly</td>
									<td>Senior Javascript Developer</td>
									<td>Edinburgh</td>
									<td>22</td>
									<td>2012/03/29</td>
									<td>$433,060</td>
									<td>6224</td>
								</tr>
								<tr>
									<td>Tiger</td>
									<td>Nixon</td>
									<td>System Architect</td>
									<td>Edinburgh</td>
									<td>61</td>
									<td>2011/04/25</td>
									<td>$320,800</td>
									<td>5421</td>
								</tr>
								<tr>
									<td>Garrett</td>
									<td>Winters</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>63</td>
									<td>2011/07/25</td>
									<td>$170,750</td>
									<td>8422</td>
								</tr>
								<tr>
									<td>Ashton</td>
									<td>Cox</td>
									<td>Junior Technical Author</td>
									<td>San Francisco</td>
									<td>66</td>
									<td>2009/01/12</td>
									<td>$86,000</td>
									<td>1562</td>
								</tr>
								<tr>
									<td>Cedric</td>
									<td>Kelly</td>
									<td>Senior Javascript Developer</td>
									<td>Edinburgh</td>
									<td>22</td>
									<td>2012/03/29</td>
									<td>$433,060</td>
									<td>6224</td>
								</tr>
								<tr>
									<td>Tiger</td>
									<td>Nixon</td>
									<td>System Architect</td>
									<td>Edinburgh</td>
									<td>61</td>
									<td>2011/04/25</td>
									<td>$320,800</td>
									<td>5421</td>
								</tr>
								<tr>
									<td>Garrett</td>
									<td>Winters</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>63</td>
									<td>2011/07/25</td>
									<td>$170,750</td>
									<td>8422</td>
								</tr>
								<tr>
									<td>Ashton</td>
									<td>Cox</td>
									<td>Junior Technical Author</td>
									<td>San Francisco</td>
									<td>66</td>
									<td>2009/01/12</td>
									<td>$86,000</td>
									<td>1562</td>
								</tr>
								<tr>
									<td>Cedric</td>
									<td>Kelly</td>
									<td>Senior Javascript Developer</td>
									<td>Edinburgh</td>
									<td>22</td>
									<td>2012/03/29</td>
									<td>$433,060</td>
									<td>6224</td>
								</tr>
								<tr>
									<td>Donna</td>
									<td>Snider</td>
									<td>Customer Support</td>
									<td>New York</td>
									<td>27</td>
									<td>2011/01/25</td>
									<td>$112,000</td>
									<td>4226</td>
								</tr>
								<tr>
									<td>Shad</td>
									<td>Decker</td>
									<td>Regional Director</td>
									<td>Edinburgh</td>
									<td>51</td>
									<td>2008/11/13</td>
									<td>$183,000</td>
									<td>6373</td>
								</tr>
								<tr>
									<td>Michael</td>
									<td>Bruce</td>
									<td>Javascript Developer</td>
									<td>Singapore</td>
									<td>29</td>
									<td>2011/06/27</td>
									<td>$183,000</td>
									<td>5384</td>
								</tr>
								<tr>
									<td>Donna</td>
									<td>Snider</td>
									<td>Customer Support</td>
									<td>New York</td>
									<td>27</td>
									<td>2011/01/25</td>
									<td>$112,000</td>
									<td>4226</td>
								</tr>
								<tr>
									<td>Shad</td>
									<td>Decker</td>
									<td>Regional Director</td>
									<td>Edinburgh</td>
									<td>51</td>
									<td>2008/11/13</td>
									<td>$183,000</td>
									<td>6373</td>
								</tr>
								<tr>
									<td>Michael</td>
									<td>Bruce</td>
									<td>Javascript Developer</td>
									<td>Singapore</td>
									<td>29</td>
									<td>2011/06/27</td>
									<td>$183,000</td>
									<td>5384</td>
								</tr>
								<tr>
									<td>Donna</td>
									<td>Snider</td>
									<td>Customer Support</td>
									<td>New York</td>
									<td>27</td>
									<td>2011/01/25</td>
									<td>$112,000</td>
									<td>4226</td>
								</tr>
								<tr>
									<td>Shad</td>
									<td>Decker</td>
									<td>Regional Director</td>
									<td>Edinburgh</td>
									<td>51</td>
									<td>2008/11/13</td>
									<td>$183,000</td>
									<td>6373</td>
								</tr>
								<tr>
									<td>Michael</td>
									<td>Bruce</td>
									<td>Javascript Developer</td>
									<td>Singapore</td>
									<td>29</td>
									<td>2011/06/27</td>
									<td>$183,000</td>
									<td>5384</td>
								</tr>
								<tr>
									<td>Donna</td>
									<td>Snider</td>
									<td>Customer Support</td>
									<td>New York</td>
									<td>27</td>
									<td>2011/01/25</td>
									<td>$112,000</td>
									<td>4226</td>
								</tr>
								<tr>
									<td>Shad</td>
									<td>Decker</td>
									<td>Regional Director</td>
									<td>Edinburgh</td>
									<td>51</td>
									<td>2008/11/13</td>
									<td>$183,000</td>
									<td>6373</td>
								</tr>
								<tr>
									<td>Michael</td>
									<td>Bruce</td>
									<td>Javascript Developer</td>
									<td>Singapore</td>
									<td>29</td>
									<td>2011/06/27</td>
									<td>$183,000</td>
									<td>5384</td>
								</tr>
								<tr>
									<td>Donna</td>
									<td>Snider</td>
									<td>Customer Support</td>
									<td>New York</td>
									<td>27</td>
									<td>2011/01/25</td>
									<td>$112,000</td>
									<td>4226</td>
								</tr>
								<tr>
									<td>Shad</td>
									<td>Decker</td>
									<td>Regional Director</td>
									<td>Edinburgh</td>
									<td>51</td>
									<td>2008/11/13</td>
									<td>$183,000</td>
									<td>6373</td>
								</tr>
								<tr>
									<td>Michael</td>
									<td>Bruce</td>
									<td>Javascript Developer</td>
									<td>Singapore</td>
									<td>29</td>
									<td>2011/06/27</td>
									<td>$183,000</td>
									<td>5384</td>
								</tr>
								<tr>
									<td>Donna</td>
									<td>Snider</td>
									<td>Customer Support</td>
									<td>New York</td>
									<td>27</td>
									<td>2011/01/25</td>
									<td>$112,000</td>
									<td>4226</td>
								</tr>
								<tr>
									<td>Shad</td>
									<td>Decker</td>
									<td>Regional Director</td>
									<td>Edinburgh</td>
									<td>51</td>
									<td>2008/11/13</td>
									<td>$183,000</td>
									<td>6373</td>
								</tr>
								<tr>
									<td>Michael</td>
									<td>Bruce</td>
									<td>Javascript Developer</td>
									<td>Singapore</td>
									<td>29</td>
									<td>2011/06/27</td>
									<td>$183,000</td>
									<td>5384</td>
								</tr>
								<tr>
									<td>Donna</td>
									<td>Snider</td>
									<td>Customer Support</td>
									<td>New York</td>
									<td>27</td>
									<td>2011/01/25</td>
									<td>$112,000</td>
									<td>4226</td>
								</tr>
								<tr>
									<td>Shad</td>
									<td>Decker</td>
									<td>Regional Director</td>
									<td>Edinburgh</td>
									<td>51</td>
									<td>2008/11/13</td>
									<td>$183,000</td>
									<td>6373</td>
								</tr>
								<tr>
									<td>Michael</td>
									<td>Bruce</td>
									<td>Javascript Developer</td>
									<td>Singapore</td>
									<td>29</td>
									<td>2011/06/27</td>
									<td>$183,000</td>
									<td>5384</td>
								</tr>
								<tr>
									<td>Donna</td>
									<td>Snider</td>
									<td>Customer Support</td>
									<td>New York</td>
									<td>27</td>
									<td>2011/01/25</td>
									<td>$112,000</td>
									<td>4226</td>
								</tr>
								<tr>
									<td>Shad</td>
									<td>Decker</td>
									<td>Regional Director</td>
									<td>Edinburgh</td>
									<td>51</td>
									<td>2008/11/13</td>
									<td>$183,000</td>
									<td>6373</td>
								</tr>
								<tr>
									<td>Michael</td>
									<td>Bruce</td>
									<td>Javascript Developer</td>
									<td>Singapore</td>
									<td>29</td>
									<td>2011/06/27</td>
									<td>$183,000</td>
									<td>5384</td>
								</tr>
								<tr>
									<td>Donna</td>
									<td>Snider</td>
									<td>Customer Support</td>
									<td>New York</td>
									<td>27</td>
									<td>2011/01/25</td>
									<td>$112,000</td>
									<td>4226</td>
								</tr>
								<tr>
									<td>Shad</td>
									<td>Decker</td>
									<td>Regional Director</td>
									<td>Edinburgh</td>
									<td>51</td>
									<td>2008/11/13</td>
									<td>$183,000</td>
									<td>6373</td>
								</tr>
								<tr>
									<td>Michael</td>
									<td>Bruce</td>
									<td>Javascript Developer</td>
									<td>Singapore</td>
									<td>29</td>
									<td>2011/06/27</td>
									<td>$183,000</td>
									<td>5384</td>
								</tr>
								<tr>
									<td>Donna</td>
									<td>Snider</td>
									<td>Customer Support</td>
									<td>New York</td>
									<td>27</td>
									<td>2011/01/25</td>
									<td>$112,000</td>
									<td>4226</td>
								</tr>
								<tr>
									<td>Shad</td>
									<td>Decker</td>
									<td>Regional Director</td>
									<td>Edinburgh</td>
									<td>51</td>
									<td>2008/11/13</td>
									<td>$183,000</td>
									<td>6373</td>
								</tr>
								<tr>
									<td>Michael</td>
									<td>Bruce</td>
									<td>Javascript Developer</td>
									<td>Singapore</td>
									<td>29</td>
									<td>2011/06/27</td>
									<td>$183,000</td>
									<td>5384</td>
								</tr>
								<tr>
									<td>Donna</td>
									<td>Snider</td>
									<td>Customer Support</td>
									<td>New York</td>
									<td>27</td>
									<td>2011/01/25</td>
									<td>$112,000</td>
									<td>4226</td>
								</tr>
								<tr>
									<td>Shad</td>
									<td>Decker</td>
									<td>Regional Director</td>
									<td>Edinburgh</td>
									<td>51</td>
									<td>2008/11/13</td>
									<td>$183,000</td>
									<td>6373</td>
								</tr>
								<tr>
									<td>Michael</td>
									<td>Bruce</td>
									<td>Javascript Developer</td>
									<td>Singapore</td>
									<td>29</td>
									<td>2011/06/27</td>
									<td>$183,000</td>
									<td>5384</td>
								</tr>
								<tr>
									<td>Donna</td>
									<td>Snider</td>
									<td>Customer Support</td>
									<td>New York</td>
									<td>27</td>
									<td>2011/01/25</td>
									<td>$112,000</td>
									<td>4226</td>
								</tr>
								<tr>
									<td>Shad</td>
									<td>Decker</td>
									<td>Regional Director</td>
									<td>Edinburgh</td>
									<td>51</td>
									<td>2008/11/13</td>
									<td>$183,000</td>
									<td>6373</td>
								</tr>
								<tr>
									<td>Michael</td>
									<td>Bruce</td>
									<td>Javascript Developer</td>
									<td>Singapore</td>
									<td>29</td>
									<td>2011/06/27</td>
									<td>$183,000</td>
									<td>5384</td>
								</tr>
								<tr>
									<td>Donna</td>
									<td>Snider</td>
									<td>Customer Support</td>
									<td>New York</td>
									<td>27</td>
									<td>2011/01/25</td>
									<td>$112,000</td>
									<td>4226</td>
								</tr>
								<tr>
									<td>Shad</td>
									<td>Decker</td>
									<td>Regional Director</td>
									<td>Edinburgh</td>
									<td>51</td>
									<td>2008/11/13</td>
									<td>$183,000</td>
									<td>6373</td>
								</tr>
								<tr>
									<td>Michael</td>
									<td>Bruce</td>
									<td>Javascript Developer</td>
									<td>Singapore</td>
									<td>29</td>
									<td>2011/06/27</td>
									<td>$183,000</td>
									<td>5384</td>
								</tr>
								<tr>
									<td>Donna</td>
									<td>Snider</td>
									<td>Customer Support</td>
									<td>New York</td>
									<td>27</td>
									<td>2011/01/25</td>
									<td>$112,000</td>
									<td>4226</td>
								</tr>
							</tbody>
						</table>
					</div> <!-- responsive table example end -->
					
				</div> <!-- responsive table code and example end-->
			</section> <!-- Responsive table end -->
			
			<!-- Inverse table -->
			<section class="row component-section">
			
				<!-- inverse table title and description -->
				<div class="col-md-3">
					<div id="inverse">
						<h2>Inverse Table</h2>
					</div>
					<p>Create Inverse Table by adding <code>.table-inverse</code> class in your code.</p>
				</div> <!-- inverse table title and description end -->
				
				<!-- inverse table code and example -->
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
									<li class="active"><a href="#inverse-res-html" data-toggle="tab">HTML</a></li>
									<li><a href="#inverse-res-css" data-toggle="tab">CSS</a></li>
									<li><a href="#inverse-res-js" data-toggle="tab">JS</a></li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="inverse-res-html">
									<pre class="pre-codebox line-numbers" data-src="../components/data-table/snippets/table-card-inverse.html"></pre>
								</div>
								<div class="tab-pane" id="inverse-res-css">
									<pre class="pre-codebox line-numbers" data-src="../components/data-table/snippets/table-card-inverse.css"></pre>
								</div>
								<div class="tab-pane" id="inverse-res-js">
									<pre class="pre-codebox line-numbers" data-src="../components/data-table/snippets/table-card-inverse.js"></pre>
								</div>
							</div>
						</div> <!-- code view end -->
					
						<!-- inverse table example -->
						<div class="pmd-card pmd-z-depth pmd-card-custom-view">
							<div class="pmd-card-inverse">
								<table id="tableInverse" class="table pmd-table table-hover table-striped table-inverse display responsive nowrap" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th></th>
										<th>First name</th>
										<th>Position</th>
										<th>Office</th>
										<th>Age</th>
										<th>Start date</th>
										<th>Salary</th>
										<th>Extn.</th>
										<th>E-mail</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td>Tiger</td>
										<td>System Architect</td>
										<td>Edinburgh</td>
										<td>61</td>
										<td>2011/04/25</td>
										<td>$320,800</td>
										<td>5421</td>
										<td>t.nixon@datatables.net</td>
									</tr>
									<tr>
										<td></td>
										<td>Garrett</td>
										<td>Accountant</td>
										<td>Tokyo</td>
										<td>63</td>
										<td>2011/07/25</td>
										<td>$170,750</td>
										<td>8422</td>
										<td>g.winters@datatables.net</td>
									</tr>
									<tr>
										<td></td>
										<td>Ashton</td>
										<td>Junior Technical Author</td>
										<td>San Francisco</td>
										<td>66</td>
										<td>2009/01/12</td>
										<td>$86,000</td>
										<td>1562</td>
										<td>a.cox@datatables.net</td>
									</tr>
									<tr>
										<td></td>
										<td>Cedric</td>
										<td>Senior Javascript Developer</td>
										<td>Edinburgh</td>
										<td>22</td>
										<td>2012/03/29</td>
										<td>$433,060</td>
										<td>6224</td>
										<td>c.kelly@datatables.net</td>
									</tr>
									<tr>
										<td></td>
										<td>Airi</td>
										<td>Accountant</td>
										<td>Tokyo</td>
										<td>33</td>
										<td>2008/11/28</td>
										<td>$162,700</td>
										<td>5407</td>
										<td>a.satou@datatables.net</td>
									</tr>
									<tr>
										<td></td>
										<td>Brielle</td>
										<td>Integration Specialist</td>
										<td>New York</td>
										<td>61</td>
										<td>2012/12/02</td>
										<td>$372,000</td>
										<td>4804</td>
										<td>b.williamson@datatables.net</td>
									</tr>
									<tr>
										<td></td>
										<td>Herrod</td>
										<td>Sales Assistant</td>
										<td>San Francisco</td>
										<td>59</td>
										<td>2012/08/06</td>
										<td>$137,500</td>
										<td>9608</td>
										<td>h.chandler@datatables.net</td>
									</tr>
									<tr>
										<td></td>
										<td>Airi</td>
										<td>Accountant</td>
										<td>Tokyo</td>
										<td>33</td>
										<td>2008/11/28</td>
										<td>$162,700</td>
										<td>5407</td>
										<td>a.satou@datatables.net</td>
									</tr>
									<tr>
										<td></td>
										<td>Brielle</td>
										<td>Integration Specialist</td>
										<td>New York</td>
										<td>61</td>
										<td>2012/12/02</td>
										<td>$372,000</td>
										<td>4804</td>
										<td>b.williamson@datatables.net</td>
									</tr>
									<tr>
										<td></td>
										<td>Herrod</td>
										<td>Sales Assistant</td>
										<td>San Francisco</td>
										<td>59</td>
										<td>2012/08/06</td>
										<td>$137,500</td>
										<td>9608</td>
										<td>h.chandler@datatables.net</td>
									</tr>
									<tr>
										<td></td>
										<td>Airi</td>
										<td>Accountant</td>
										<td>Tokyo</td>
										<td>33</td>
										<td>2008/11/28</td>
										<td>$162,700</td>
										<td>5407</td>
										<td>a.satou@datatables.net</td>
									</tr>
									<tr>
										<td></td>
										<td>Brielle</td>
										<td>Integration Specialist</td>
										<td>New York</td>
										<td>61</td>
										<td>2012/12/02</td>
										<td>$372,000</td>
										<td>4804</td>
										<td>b.williamson@datatables.net</td>
									</tr>
									<tr>
										<td></td>
										<td>Herrod</td>
										<td>Sales Assistant</td>
										<td>San Francisco</td>
										<td>59</td>
										<td>2012/08/06</td>
										<td>$137,500</td>
										<td>9608</td>
										<td>h.chandler@datatables.net</td>
									</tr>
									<tr>
										<td></td>
										<td>Airi</td>
										<td>Accountant</td>
										<td>Tokyo</td>
										<td>33</td>
										<td>2008/11/28</td>
										<td>$162,700</td>
										<td>5407</td>
										<td>a.satou@datatables.net</td>
									</tr>
									<tr>
										<td></td>
										<td>Brielle</td>
										<td>Integration Specialist</td>
										<td>New York</td>
										<td>61</td>
										<td>2012/12/02</td>
										<td>$372,000</td>
										<td>4804</td>
										<td>b.williamson@datatables.net</td>
									</tr>
									<tr>
										<td></td>
										<td>Herrod</td>
										<td>Sales Assistant</td>
										<td>San Francisco</td>
										<td>59</td>
										<td>2012/08/06</td>
										<td>$137,500</td>
										<td>9608</td>
										<td>h.chandler@datatables.net</td>
									</tr>
									<tr>
										<td></td>
										<td>Airi</td>
										<td>Accountant</td>
										<td>Tokyo</td>
										<td>33</td>
										<td>2008/11/28</td>
										<td>$162,700</td>
										<td>5407</td>
										<td>a.satou@datatables.net</td>
									</tr>
									<tr>
										<td></td>
										<td>Brielle</td>
										<td>Integration Specialist</td>
										<td>New York</td>
										<td>61</td>
										<td>2012/12/02</td>
										<td>$372,000</td>
										<td>4804</td>
										<td>b.williamson@datatables.net</td>
									</tr>
									<tr>
										<td></td>
										<td>Herrod</td>
										<td>Sales Assistant</td>
										<td>San Francisco</td>
										<td>59</td>
										<td>2012/08/06</td>
										<td>$137,500</td>
										<td>9608</td>
										<td>h.chandler@datatables.net</td>
									</tr>
								</tbody>
							</table>
							</div>
						</div> <!-- inverse table example end-->
						
					</div>
				</div> <!-- inverse table code and example end-->
			</section> <!-- Inverse table end-->
			
		</div>
	</div>
</div>
<!--data grid constructor end --> 
	
<!--footer start -->
<?php include('include/footer.php'); ?>
<!--footer end -->