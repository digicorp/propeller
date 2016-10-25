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
					<h1 class="pmd-display1">Popover</h1>
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
									<input type="hidden"  name="popover" value="popover"/>
									<button name='btn_submit' value='popover' type="submit" onClick="downloadPopover()" class="btn btn-default pmd-btn-raised btn-sm pmd-ripple-effect pmd-btn-flat custom-btn">Download ZIP</button>
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

<!--Popover -->
<div class="pmd-content pmd-content-custom" id="content"> 
	
	<!--component header -->
	<div class="componant-title-bg"> 
		<div class="container">
			<div class="row">
				
				<!-- component title and description -->
				<div class="col-xs-12">
					<p class="lead">Popover is similar to tooltips; it is a pop-up box that appears when user click or hover on an element.</p>
				</div> <!-- component title and description end -->
				
			</div>
		</div>
	</div> <!--component header end -->
	
	<div class="container"> 
		
		<!--component list category -->
		<div class="list-group list-group-custom margin-20"> 
			<a class="list-group-item" href="#click">Popover On Click</a> 
			<a class="list-group-item" href="#hover">Popover On Hover</a> 
			<a class="list-group-item" href="#config">Configuration Options</a> 
			<a class="list-group-item" href="#events">Events</a> 
		</div> <!--component list category end -->
		
		<!-- On Click popover -->
		<section class="row component-section">
			
			<!-- On Click popover title and description -->
			<div class="col-md-3">
				<div id="click">
					<h2>Popover On Click</h2>
				</div>
				<p>To make the Popover open on click, use <code>data-trigger="click"</code>. To specify the direction of Popover use attribute <code>data-placement</code> with <code>left</code>, <code>right</code>, <code>top</code>, and <code>bottom</code> values.</p>
			</div> <!-- On Click popover title and description end -->
			
			<!-- On Click popover code and example -->
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
								<li class="active"><a href="#popover-click-html" data-toggle="tab">HTML</a></li>
								<li><a href="#popover-click-css" data-toggle="tab">CSS</a></li>
								<li><a href="#popover-click-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="popover-click-html">
								<pre class="pre-codebox line-numbers" data-src="../components/popover/snippets/on-click.html"></pre>
							</div>
							<div class="tab-pane" id="popover-click-css">
								<pre class="pre-codebox line-numbers" data-src="../components/popover/snippets/popover.css"></pre>
							</div>
							<div class="tab-pane" id="popover-click-js">
								<pre class="pre-codebox line-numbers" data-src="../components/popover/snippets/popover.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!-- buttons for popover -->
					<div class="row">
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body text-center"> 
									
									<button type="button" class="btn pmd-ripple-effect btn-default pmd-btn-raised" data-trigger="click" data-toggle="popover" data-placement="left" data-content="Popover Left">Left</button>
									<button type="button" class="btn pmd-ripple-effect btn-default pmd-btn-raised" data-trigger="click" data-toggle="popover" data-placement="top" data-content="Popover top">Top</button>
									<button type="button" class="btn pmd-ripple-effect btn-default pmd-btn-raised" data-trigger="click" data-toggle="popover" data-placement="bottom" data-content="Popover Bottom">Bottom</button>
									<button type="button" class="btn pmd-ripple-effect btn-default pmd-btn-raised" data-trigger="click" data-toggle="popover" data-placement="right" data-content="Popover Right">Right</button>
								</div>
							</div>
						</div>
					</div> <!-- buttons for popover end -->
				</div>
                
                <!-- On Click popover with Title -->
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
								<li class="active"><a href="#popover-title-html" data-toggle="tab">HTML</a></li>
								<li><a href="#popover-title-css" data-toggle="tab">CSS</a></li>
								<li><a href="#popover-title-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="popover-title-html">
								<pre class="pre-codebox line-numbers" data-src="../components/popover/snippets/on-click-with-title.html"></pre>
							</div>
							<div class="tab-pane" id="popover-title-css">
								<pre class="pre-codebox line-numbers" data-src="../components/popover/snippets/popover.css"></pre>
							</div>
							<div class="tab-pane" id="popover-title-js">
								<pre class="pre-codebox line-numbers" data-src="../components/popover/snippets/popover.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!-- On Click popover with Title example -->
					<div class="row">
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body text-center"> 
									
									<button type="button" class="btn pmd-ripple-effect btn-default pmd-btn-raised" data-trigger="click" title="Popover Left Title" data-toggle="popover" data-placement="left" data-content="Popover Left">Left</button>
									<button type="button" class="btn pmd-ripple-effect btn-default pmd-btn-raised" data-trigger="click" title="Popover Top Title" data-toggle="popover"  data-placement="top" data-content="Popover top">Top</button>
									<button type="button" class="btn pmd-ripple-effect btn-default pmd-btn-raised" data-trigger="click" title="Popover Bottom Title" data-toggle="popover" data-placement="bottom" data-content="Popover Bottom">Bottom</button>
									<button type="button" class="btn pmd-ripple-effect btn-default pmd-btn-raised" data-trigger="click" title="Popover Right Title"  data-toggle="popover" data-placement="right" data-content="Popover Right">Right</button>
								</div>
							</div>
						</div>
					</div> <!-- On Click popover with Title example end -->
					
				</div><!-- On Click popover with Title end -->
                <p class="component-desc"><strong>Popover on Click with Title</strong>. Use attribute <code>title</code> to add title to the Popover.</p>
			</div> <!-- On Click popover code and example end -->
		</section> <!-- On Click popover end -->
		
		<!-- On hover popover -->
		<section class="row component-section">
			
			<!-- On hover popover title and description -->
			<div class="col-md-3">
				<div id="hover">
					<h2>Popover On Hover</h2>
				</div>
				<p>To make your Popover open on hover, use <code>data-trigger="hover"</code>.</p>
			</div> <!-- On hover popover title and description end -->
			
			<!-- On hover popover code and example -->
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
								<li class="active"><a href="#popover-hover-html" data-toggle="tab">HTML</a></li>
								<li><a href="#popover-hover-css" data-toggle="tab">CSS</a></li>
								<li><a href="#popover-hover-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="popover-hover-html">
								<pre class="pre-codebox line-numbers" data-src="../components/popover/snippets/on-hover.html"></pre>
							</div>
							<div class="tab-pane" id="popover-hover-css">
								<pre class="pre-codebox line-numbers" data-src="../components/popover/snippets/popover.css"></pre>
							</div>
							<div class="tab-pane" id="popover-hover-js">
								<pre class="pre-codebox line-numbers" data-src="../components/popover/snippets/popover.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!-- on hover popover example -->
					<div class="row">
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body text-center"> 
									<!--popover -->
									<button type="button" class="btn pmd-ripple-effect btn-default pmd-btn-raised" data-trigger="hover" data-toggle="popover" data-placement="left" data-content="Popover Left">Left</button>
									<button type="button" class="btn pmd-ripple-effect btn-default pmd-btn-raised" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="Popover top">Top</button>
									<button type="button" class="btn pmd-ripple-effect btn-default pmd-btn-raised" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Popover Bottom">Bottom</button>
									<button type="button" class="btn pmd-ripple-effect btn-default pmd-btn-raised" data-trigger="hover" data-toggle="popover" data-placement="right" data-content="Popover Right">Right</button>
								</div>
							</div>
						</div>
					</div> <!-- on hover popover example end -->
					
				</div>
                
                <!-- Inline HTML code and example -->
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
								<li class="active"><a href="#popover-inline-html" data-toggle="tab">HTML</a></li>
								<li><a href="#popover-inline-css" data-toggle="tab">CSS</a></li>
								<li><a href="#popover-inline-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="popover-inline-html">
								<pre class="pre-codebox line-numbers" data-src="../components/popover/snippets/inline-html.html"></pre>
							</div>
							<div class="tab-pane" id="popover-inline-css">
								<pre class="pre-codebox line-numbers" data-src="../components/popover/snippets/popover.css"></pre>
							</div>
							<div class="tab-pane" id="popover-inline-js">
								<pre class="pre-codebox line-numbers" data-src="../components/popover/snippets/popover.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!-- inline HTML popover example-->
					<div class="row">
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body text-center"> 
									<button type="button" class="btn pmd-ripple-effect btn-default pmd-btn-raised" data-trigger="hover" data-toggle="popover" data-placement="left" data-html="true" data-content="<div class=''><h1>Heading h1</h1><h2>Heading h2</h2><h3>Heading h3</h3><h4>Heading h4</h4><h5>Heading h5</h5><h6>Heading h6</h6></div>">Left</button>
									<button type="button" class="btn pmd-ripple-effect btn-default pmd-btn-raised" data-trigger="hover" data-toggle="popover" data-placement="top" data-html="true" data-content="<div class=''><h1>Heading h1</h1><h2>Heading h2</h2><h3>Heading h3</h3><h4>Heading h4</h4><h5>Heading h5</h5><h6>Heading h6</h6></div>">Top</button>
									<button type="button" class="btn pmd-ripple-effect btn-default pmd-btn-raised" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-html="true" data-content="<div class=''><h1>Heading h1</h1><h2>Heading h2</h2><h3>Heading h3</h3><h4>Heading h4</h4><h5>Heading h5</h5><h6>Heading h6</h6></div>">Bottom</button>
									<button type="button" class="btn pmd-ripple-effect btn-default pmd-btn-raised" data-trigger="hover" data-toggle="popover" data-placement="right" data-html="true" data-content="<div class=''><h1>Heading h1</h1><h2>Heading h2</h2><h3>Heading h3</h3><h4>Heading h4</h4><h5>Heading h5</h5><h6>Heading h6</h6></div>">Right</button>
								</div>
							</div>
						</div>
					</div> <!-- inline HTML popover example end -->
					
				</div><!-- Inline HTML code and example end -->
                <p class="component-desc"><strong>Popover on hover with Inline HTML</strong>. Use attribute <code>data-html="true"</code> to add inline HTML to the Popover.</p>
                
                <!-- external HTML popover code and example -->
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
								<li class="active"><a href="#popover-html-html" data-toggle="tab">HTML</a></li>
								<li><a href="#popover-html-css" data-toggle="tab">CSS</a></li>
								<li><a href="#popover-html-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="popover-html-html">
								<pre class="pre-codebox line-numbers" data-src="../components/popover/snippets/html.html"></pre>
							</div>
							<div class="tab-pane" id="popover-html-css">
								<pre class="pre-codebox line-numbers" data-src="../components/popover/snippets/popover.css"></pre>
							</div>
							<div class="tab-pane" id="popover-html-js">
								<pre class="pre-codebox line-numbers" data-src="../components/popover/snippets/popover-html.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!-- external HTML popover example--> 
					<div class="row">
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body text-center">
									<div id="popover-left" style="display:none;">
										<p>HTML for left popover</p>
									</div>
									<div id="popover-right" style="display:none;">
										<p>HTML for right popover</p>
									</div>
									<div id="popover-bottom" style="display:none;">
										<p>HTML for bottom popover</p>
									</div>
									<div id="popover-top" style="display:none;">
										<p>HTML for top popover</p>
									</div>
									
									<button type="button" class="btn pmd-ripple-effect btn-default popover-html pmd-z-depth" data-trigger="hover" data-toggle="popover" data-placement="left" data-html="true" data-id="#popover-left">Left</button>
									<button type="button" class="btn pmd-ripple-effect btn-default popover-html pmd-z-depth" data-trigger="hover" data-toggle="popover" data-placement="top" data-html="true" data-id="#popover-top">Top</button>
									<button type="button" class="btn pmd-ripple-effect btn-default popover-html pmd-z-depth" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-html="true" data-id="#popover-bottom">Bottom</button>
									<button type="button" class="btn pmd-ripple-effect btn-default popover-html pmd-z-depth" data-trigger="hover" data-toggle="popover" data-placement="right" data-html="true" data-id="#popover-right">Right</button>
								</div>
							</div>
						</div>
					</div> <!-- external HTML popover example end -->
					
				</div><!-- external HTML popover code and example end -->
				<p class="component-desc"><strong>Popover on hover with External HTML</strong>. Use attribute <code>title</code> to add external HTML to the Popover.</p>
                
                <!-- colored popover code and example -->
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
								<li class="active"><a href="#popover-colored-html" data-toggle="tab">HTML</a></li>
								<li><a href="#popover-colored-css" data-toggle="tab">CSS</a></li>
								<li><a href="#popover-colored-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="popover-colored-html">
								<pre class="pre-codebox line-numbers" data-src="../components/popover/snippets/colored.html"></pre>
							</div>
							<div class="tab-pane" id="popover-colored-css">
								<pre class="pre-codebox line-numbers" data-src="../components/popover/snippets/popover-color.css"></pre>
							</div>
							<div class="tab-pane" id="popover-colored-js">
								<pre class="pre-codebox line-numbers" data-src="../components/popover/snippets/popover-colore.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!-- colored popover example -->
					<div class="row">
						<div class="col-md-12"> 
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body text-center"> 
									
									<button type="button" class="btn pmd-ripple-effect btn-info pmd-btn-raised" data-trigger="hover" data-toggle="popover" data-color="primary" data-placement="left" data-content="Popover left">Left</button>
									<button type="button" class="btn pmd-ripple-effect btn-warning pmd-z-depth" data-trigger="hover" data-toggle="popover" data-color="default" data-placement="top" data-content="Popover top">Top</button>
									<button type="button" class="btn pmd-ripple-effect btn-success pmd-z-depth" data-trigger="hover" data-toggle="popover" data-color="success" data-placement="bottom" data-content="Popover bottom">Bottom</button>
									<button type="button" class="btn pmd-ripple-effect btn-danger pmd-z-depth" data-trigger="hover" data-toggle="popover" data-color="danger" data-placement="right" data-content="Popover right">Right</button>
								</div>
							</div>
						</div>
					</div> <!-- colored popover example end -->
					
				</div><!-- colored popover code and example end -->
                <p class="component-desc"><strong>Popover on hover with contextual color option</strong>. Use attribute <code>data-color</code> to add external HTML to the popover. For example: <code>data-color="success"</code> adds green color to the Popover.</p>
			</div> <!-- On hover popover code and example end -->
		</section> <!-- On hover popover end -->
		
		<!-- Configuration starts-->		
		<section class="row component-section">
			<div class="col-md-3">
				<div id="config">
					<h2>Configuration Options</h2>
				</div>
				<p>The Propeller CSS classes apply various predefined visual enhancements to the Popover. The table lists the available classes and their effects.</p>
			</div>
			<div class="col-md-9">
				<div class="pmd-card pmd-table-card-responsive">
					<div class="pmd-table-card"> 
						<!--table start -->
						<table class="table pmd-table table-hover">
							<thead>
								<tr>
									<th>Propeller Classes</th>
									<th>Effect</th>
									<th>Remark</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td data-title="Propeller Classes"><code>.popover-html</code></td>
									<td data-title="Effect">To load dynamic HTML inside Popover</td>
									<td data-title="Remark">Optional</td>
								</tr>
							</tbody>
						</table>
						<!--table start --> 
					</div>
				</div>
				<div class="pmd-card pmd-table-card-responsive">
					<div class="pmd-table-card"> 
						<!--table start -->
						<table class="table pmd-table table-hover">
							<thead>
								<tr>
									<th>HTML Attributes</th>
									<th>Effect</th>
									<th>Value</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td data-title="HTML Attributes"><code>data-toggle</code></td>
									<td data-title="Effect">To initialize Popover</td>
									<td data-title="Value">Popover</td>
								</tr>
								<tr>
									<td data-title="HTML Attributes"><code>data-trigger</code></td>
									<td data-title="Effect">Defines how the Popover opens.</td>
									<td data-title="Value">hover, Click</td>
								</tr>
								<tr>
									<td data-title="HTML Attributes"><code>data-placement</code></td>
									<td data-title="Effect">Defines the position of Popover vertically and horizontally.</td>
									<td data-title="Value">left, right, top, bottom</td>
								</tr>
								<tr>
									<td data-title="HTML Attributes"><code>data-content</code></td>
									<td data-title="Effect">Defines content of the Popover.</td>
									<td data-title="Value">text, HTML</td>
								</tr>
								<tr>
									<td data-title="HTML Attributes"><code>data-html</code></td>
									<td data-title="Effect">Required when your Popover contains HTML in it.</td>
									<td data-title="Value">true, false</td>
								</tr>
								<tr>
									<td data-title="HTML Attributes"><code>data-id</code></td>
									<td data-title="Effect">To load outer HTML</td>
									<td data-title="Value">HTML element ID</td>
								</tr>
								<tr>
									<td data-title="HTML Attributes"><code>data-original-title</code></td>
									<td data-title="Effect">Defines the title content of Popover.</td>
									<td data-title="Value">text</td>
								</tr>
								<tr>
									<td data-title="HTML Attributes"><code>data-color</code></td>
									<td data-title="Effect">Used for colored Popover.</td>
									<td data-title="Value">primary, default, success, danger, info, warning</td>
								</tr>
							</tbody>
						</table>
						<!--table start --> 
					</div>
				</div>
			</div>
		</section> <!-- Configuration ends--> 		
		
		<!-- Events starts-->		
		<section class="row component-section">
			<div class="col-md-3">
				<div id="events">
					<h2>Events</h2>
				</div>
				<p>See <a href="http://getbootstrap.com/javascript/#popovers" target="_blank">here</a> for more documentation on this.</p>
			</div>
			<div class="col-md-9"> 
				<!--Events card start -->
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
									<td data-title="Class"><code>show.bs.popover</code></td>
									<td data-title="Effect">This event fires immediately when the <code>show</code> instance method is called.</td>
								</tr>
								<tr>
									<td data-title="Class"><code>shown.bs.popover</code></td>
									<td data-title="Effect">This event is fired when the popover has been made visible to the user (will wait for CSS transitions to complete).</td>
								</tr>
								<tr>
									<td data-title="Class"><code>hide.bs.popover</code></td>
									<td data-title="Effect">This event is fired immediately when the <code>hide</code> instance method has been called.</td>
								</tr>
								<tr>
									<td data-title="Class"><code>hidden.bs.popover</code></td>
									<td data-title="Effect">This event is fired when the popover has finished being hidden from the user (will wait for CSS transitions to complete).</td>
								</tr>
								<tr>
									<td data-title="Class"><code>inserted.bs.popover</code></td>
									<td data-title="Effect">This event is fired after the <code>show.bs.popover</code> event when the Popover template has been added to the DOM.</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!--Events card end -->
				<div class="pmd-card pmd-z-depth js-script pmd-card-custom">
					<pre class="pre-codebox line-numbers" data-src="../components/popover/snippets/events.js"></pre>
				</div>
			</div>
		</section> <!-- Events ends-->
		 
	</div>
</div> <!--Popover end  --> 

<!--footer start -->
<?php include('include/footer.php'); ?>
<!--footer end -->