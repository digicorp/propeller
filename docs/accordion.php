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
					<h1 class="pmd-display1">Accordion</h1>
				</div> <!--end component title and description-->
				
				<!-- component download button dropdown -->
				<div class="col-md-2 col-sm-2 col-xs-12">
					<div class="dropdown pmd-dropdown clearfix pull-right">
						<button class="btn pmd-btn-raised dropdown-toggle pmd-ripple-effect btn-primary" type="button" id="dropdownMenuDivider" data-toggle="dropdown" aria-expanded="true">Download</button>
						<!--dropdown-menu -->
						<ul aria-labelledby="dropdownMenuDivider" role="menu" class="dropdown-menu dropdown-menu-custom mega-dropdown-menu dropdown-menu-right">
							<li role="presentation" class="right-border">
								<h4>UI Framework</h4>
								<a class="btn btn-success btn-sm pmd-btn-raised pmd-ripple-effect" onClick="downloadUIFramework()" href="../archive/pmd-1.0.0.zip">Download ZIP</a>
							</li>
							<li role="presentation">
								<h4>Standalone</h4>
								<form id='component_form' method="post" action="custom/copy.php">
									<input type="hidden"  name="accordion" value="accordion"/>
									<button name='btn_submit' value='accordion' type="submit" onClick="downloadAccordion()" class="btn btn-default pmd-btn-raised btn-sm pmd-ripple-effect pmd-btn-flat custom-btn">Download ZIP</button>
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
	
<!--Accordion -->
<div class="pmd-content pmd-content-custom" id="content"> 
	
	<!--component header -->
	<div class="componant-title-bg"> 
		<div class="container">
			<div class="row">
			
				<!-- component title and description -->
				<div class="col-xs-12">
					<p class="lead">Accordion is an element used to expand and collapse content that is broken into logical sections, much like tabs. It allows users to toggle the display of sections of content.</p>
				</div> <!-- component title and description end-->
			
			</div>
		</div>
	</div> <!--component header end-->
	
	<div class="container"> 
	
		<!-- component list category -->
		<div class="list-group list-group-custom margin-20"> 
			<a class="list-group-item" href="#bootstrap-accordion">Bootstrap Simple Accordion</a> 
			<a class="list-group-item" href="#propeller-accordion">Propeller Accordion</a> 
			<a class="list-group-item" href="#inbox-like-accordion">Inbox like Accordion</a> 
			<a class="list-group-item" href="#nospace-accordion">Accordion with No Space</a>
			<a class="list-group-item" href="#expandable">Accordion With All Expandable</a> 
			<a class="list-group-item" href="#accordion-with-icon">Accordion with icons</a> 
			<a class="list-group-item" href="#accordion-with-colored-icon">Accordion with colored icon</a> 
			<a class="list-group-item" href="#config">Configuration Option</a> 
			<a class="list-group-item" href="#events">Events</a> 
		</div><!-- component list category end-->
		
		<!-- Simple Bootstrap Accordion -->
		<section class="row component-section">
			
			<!-- Simple Bootstrap Accordion title and description -->
			<div class="col-md-3">
				<div id="bootstrap-accordion">
					<h2>Bootstrap Simple Accordion</h2>
				</div>
				<p>Bootstrap provides accordion to be used when there is a need for minimalistic way to show data. In this user will see the data of expanded accordion. Rest will be in hidden mode.</p>
			</div> <!-- Simple Bootstrap Accordion title and description end -->
			
			<div class="col-md-9"> 
				
				<!--Simple Bootstrap Accordion code and example  -->
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
								<li class="active"><a href="#accordion-simple-bootstrap-html" data-toggle="tab">HTML</a></li>
								<li><a href="#accordion-simple-bootstrap-css" data-toggle="tab">CSS</a></li>
								<li><a href="#accordion-simple-bootstrap-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="accordion-simple-bootstrap-html">
								<pre class="pre-codebox line-numbers" data-src="../components/accordion/snippets/accordion-simple-bootstrap.html"></pre>
							</div>
							<div class="tab-pane" id="accordion-simple-bootstrap-css">
								<pre class="pre-codebox line-numbers" data-src="../components/accordion/snippets/bootstrap-basic.css"></pre>
							</div>
							<div class="tab-pane" id="accordion-simple-bootstrap-js">
								<pre class="pre-codebox line-numbers" data-src="../components/accordion/snippets/bootstrap-basic.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--Simple Bootstrap Accordion example -->
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								  	Collapsible Group Item #1
									</a>
							  	</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">
									The word &quot;accordion&quot; typically conjures a mental image of your favorite polka band. However that’s not what we are talking about when referring to accordion menu. Although polka music can offer a rip-snorting good time, the term is associated with something different in the realm of web design. User interface accordions might refer to menus, widgets, or content areas which expand like the musical instrument. These interfaces have grown a lot more popular in recent years with the expansion of JavaScript.
							  	</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								  	Collapsible Group Item #2
									</a>
							  	</h4>
							</div>
    						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						  		<div class="panel-body">
								 Accordions are popular because they allow developers to force large amounts of content into tiny spaces on the page. Granted these content displays also require dynamic effects for switching between page elements – so there are pros and cons to accordions.
						  		</div>
    						</div>
  						</div>
  						<div class="panel panel-default">
    						<div class="panel-heading" role="tab" id="headingThree">
      							<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									  Collapsible Group Item #3
									</a>
      							</h4>
    						</div>
    						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						  		<div class="panel-body">
								Not every website needs an accordion menu and you certainly won’t find them all the time. But that’s no reason to ignore the concept entirely. The purpose of an accordion menu is to manage an overabundance of content through dynamic switching. Each interface works differently based on the circumstances of the layout.
						  		</div>
    						</div>
 			 			</div>
					</div> <!--Simple Bootstrap Accordion example end-->
					
				</div> <!--Simple Bootstrap Accordion code and example end -->
			</div>
		</section> <!-- Simple Bootstrap Accordion end -->	
		
		<!-- Propeller Accordion -->
		<section class="row component-section">
		
			<!-- Propeller Accordion title and description -->
			<div class="col-md-3">
				<div id="propeller-accordion">
					<h2>Propeller Accordion</h2>
				</div>
				<p>Propeller Accordion consists of Bootstrap HTML structure with Propeller customized classes based on material design standards. Add <code>.pmd-accordion</code> to your wrapper div to use Material accordion.</p>
			</div> <!-- Propeller Accordion title and description end-->
			
			<div class="col-md-9"> 
				
				<!-- Propeller Accordion code and example -->
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
								<li class="active"><a href="#material-tab-html" data-toggle="tab">HTML</a></li>
								<li><a href="#material-tab-css" data-toggle="tab">CSS</a></li>
								<li><a href="#material-tab-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content"> 
							<div class="tab-pane active" id="material-tab-html">
								<pre class="pre-codebox line-numbers" data-src="../components/accordion/snippets/accordion-material.html"></pre>
							</div>
							<div class="tab-pane" id="material-tab-css">
								<pre class="pre-codebox line-numbers" data-src="../components/accordion/snippets/accordion.css"></pre>
							</div>
							<div class="tab-pane" id="material-tab-js">
								<pre class="pre-codebox line-numbers" data-src="../components/accordion/snippets/accordion.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!-- Propeller Accordion example -->
					<div class="panel-group pmd-accordion" id="accordion7" role="tablist" aria-multiselectable="true" > 
						<div class="panel panel-default"> 
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title"> 
									<a data-toggle="collapse" data-parent="#accordion7" href="#collapseOne7" aria-expanded="true" aria-controls="collapseOne7" data-expandable="false"> Collapsible Group Item #1 <i class="material-icons md-dark pmd-sm pmd-accordion-arrow">keyboard_arrow_down</i></a> 
								</h4>
							</div>
							<div id="collapseOne7" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">The word "accordion" typically conjures a mental image of your favorite polka band. However that’s not what we are talking about when referring to accordion menu. Although polka music can offer a rip-snorting good time, the term is associated with something different in the realm of web design. User interface accordions might refer to menus, widgets, or content areas which expand like the musical instrument. These interfaces have grown a lot more popular in recent years with the expansion of JavaScript.</div>
							</div>
						</div>
						<div class="panel panel-default"> 
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title"> 
									<a data-toggle="collapse" data-parent="#accordion7" href="#collapseTwo7" aria-expanded="false" aria-controls="collapseTwo7"  data-expandable="false"> Collapsible Group Item #2 <i class="material-icons md-dark pmd-sm pmd-accordion-arrow">keyboard_arrow_down</i></a>
								</h4>
							</div>
							<div id="collapseTwo7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">Accordions are popular because they allow developers to force large amounts of content into tiny spaces on the page. Granted these content displays also require dynamic effects for switching between page elements – so there are pros and cons to accordions. </div>
							</div>
						</div>
						<div class="panel panel-default"> 
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title"> 
									<a class="collapsed" data-toggle="collapse" data-parent="#accordion7" href="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7"  data-expandable="false"> Collapsible Group Item #3 <i class="material-icons md-dark pmd-sm pmd-accordion-arrow">keyboard_arrow_down</i></a>
								</h4>
							</div>
							<div id="collapseThree7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">Not every website needs an accordion menu and you certainly won’t find them all the time. But that’s no reason to ignore the concept entirely. The purpose of an accordion menu is to manage an overabundance of content through dynamic switching. Each interface works differently based on the circumstances of the layout. </div>
							</div>
						</div>
					</div> <!-- Propeller Accordion example end-->
					
				</div> <!--Scalable Accordion code and example end-->
			</div>
		</section> <!-- Propeller Accordion end --> 	
		
		<!-- Inbox like Accordion -->
		<section class="row component-section">
		
			<!-- Inbox like Accordion title and description -->
			<div class="col-md-3">
				<div id="inbox-like-accordion">
					<h2>Inbox like Accordion</h2>
				</div>
				<p>This accordion makes use of animation like that of Google Inbox to display the expanded view of data. In this way user will get more focus on the information inside the accordion. Add <code>.pmd-accordion-inbox</code> to your wrapper div to use Inbox like accordion.</p>
			</div> <!-- Inbox like Accordion title and description end-->
			
			<div class="col-md-9"> 
				
				<!-- Inbox like Accordion code and example -->
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
								<li class="active"><a href="#fixed-tab-html" data-toggle="tab">HTML</a></li>
								<li><a href="#fixed-tab-css" data-toggle="tab">CSS</a></li>
								<li><a href="#fixed-tab-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content"> 
							<div class="tab-pane active" id="fixed-tab-html">
								<pre class="pre-codebox line-numbers" data-src="../components/accordion/snippets/accordion-scalable.html"></pre>
							</div>
							<div class="tab-pane" id="fixed-tab-css">
								<pre class="pre-codebox line-numbers" data-src="../components/accordion/snippets/accordion.css"></pre>
							</div>
							<div class="tab-pane" id="fixed-tab-js">
								<pre class="pre-codebox line-numbers" data-src="../components/accordion/snippets/accordion.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!-- Inbox like Accordion example -->
					<div class="panel-group pmd-accordion pmd-accordion-inbox" id="accordion6" role="tablist" aria-multiselectable="true" > 
						<div class="panel panel-default"> 
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion6" href="#collapseOne6" aria-expanded="true" aria-controls="collapseOne6" data-expandable="false"> Collapsible Group Item #1 <i class="material-icons md-dark pmd-sm pmd-accordion-arrow">keyboard_arrow_down</i></a> </h4>
							</div>
							<div id="collapseOne6" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">The word "accordion" typically conjures a mental image of your favorite polka band. However that’s not what we are talking about when referring to accordion menu. Although polka music can offer a rip-snorting good time, the term is associated with something different in the realm of web design. User interface accordions might refer to menus, widgets, or content areas which expand like the musical instrument. These interfaces have grown a lot more popular in recent years with the expansion of JavaScript.</div>
							</div>
						</div>
						<div class="panel panel-default"> 
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion6" href="#collapseTwo6" aria-expanded="false" aria-controls="collapseTwo6"  data-expandable="false"> Collapsible Group Item #2 <i class="material-icons md-dark pmd-sm pmd-accordion-arrow">keyboard_arrow_down</i></a> </h4>
							</div>
							<div id="collapseTwo6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">Accordions are popular because they allow developers to force large amounts of content into tiny spaces on the page. Granted these content displays also require dynamic effects for switching between page elements – so there are pros and cons to accordions. </div>
							</div>
						</div>
						<div class="panel panel-default"> 
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion6" href="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6"  data-expandable="false"> Collapsible Group Item #3 <i class="material-icons md-dark pmd-sm pmd-accordion-arrow">keyboard_arrow_down</i></a> </h4>
							</div>
							<div id="collapseThree6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">Not every website needs an accordion menu and you certainly won’t find them all the time. But that’s no reason to ignore the concept entirely. The purpose of an accordion menu is to manage an overabundance of content through dynamic switching. Each interface works differently based on the circumstances of the layout. </div>
							</div>
						</div>
					</div> <!-- Inbox like Accordion example end-->
					
				</div> <!-- Inbox like Accordion code and example end-->
			</div>
		</section> <!-- Inbox like Accordion end --> 	
		
		<!-- Accordion with No Space -->
		<section class="row component-section">
		
			<!-- Accordion with No Space title and description -->
			<div class="col-md-3">
				<div id="nospace-accordion">
					<h2>Accordion with No Space</h2>
				</div>
				<p>This Accordion is similar to Propeller Accordion with no space between accordion panels. Add <code>.pmd-accordion-nospace</code> to your wrapper div to create Propeller accordion.</p>
			</div> <!-- Accordion with No Space title and description end -->
			
			<div class="col-md-9"> 
			
				<!-- Accordion with No Space code and example -->
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
								<li class="active"><a href="#default-tab-html" data-toggle="tab">HTML</a></li>
								<li><a href="#default-tab-css" data-toggle="tab">CSS</a></li>
								<li><a href="#default-tab-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content"> 
							<div class="tab-pane active" id="default-tab-html">
								<pre class="pre-codebox line-numbers" data-src="../components/accordion/snippets/accordion-dtheme.html"></pre>
							</div>
							<div class="tab-pane" id="default-tab-css">
								<pre class="pre-codebox line-numbers" data-src="../components/accordion/snippets/accordion.css"></pre>
							</div>
							<div class="tab-pane" id="default-tab-js">
								<pre class="pre-codebox line-numbers" data-src="../components/accordion/snippets/accordion.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!-- Accordion with No Space example -->
					<div class="panel-group pmd-accordion pmd-accordion-nospace" id="accordion5" role="tablist" aria-multiselectable="true" > 
						<div class="panel panel-default"> 
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title"><a data-toggle="collapse"  data-parent="#accordion5" href="#collapseOne5" aria-expanded="true" aria-controls="collapseOne5" data-expandable="false"> Collapsible Group Item #1 <i class="material-icons md-dark pmd-sm pmd-accordion-arrow">keyboard_arrow_down</i></a></h4>
							</div>
							<div id="collapseOne5" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body"> The word "accordion" typically conjures a mental image of your favorite polka band. However that’s not what we are talking about when referring to accordion menu. Although polka music can offer a rip-snorting good time, the term is associated with something different in the realm of web design. User interface accordions might refer to menus, widgets, or content areas which expand like the musical instrument. These interfaces have grown a lot more popular in recent years with the expansion of JavaScript.</div>
							</div>
						</div>
						<div class="panel panel-default"> 
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion5" href="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5"  data-expandable="false"> Collapsible Group Item #2 <i class="material-icons md-dark pmd-sm pmd-accordion-arrow">keyboard_arrow_down</i></a>  </h4>
							</div>
							<div id="collapseTwo5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">Accordions are popular because they allow developers to force large amounts of content into tiny spaces on the page. Granted these content displays also require dynamic effects for switching between page elements – so there are pros and cons to accordions.</div>
							</div>
						</div>
						<div class="panel panel-default"> 
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion5" href="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5"  data-expandable="false"> Collapsible Group Item #3 <i class="material-icons md-dark pmd-sm pmd-accordion-arrow">keyboard_arrow_down</i></a>  </h4>
							</div>
							<div id="collapseThree5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">Not every website needs an accordion menu and you certainly won’t find them all the time. But that’s no reason to ignore the concept entirely. The purpose of an accordion menu is to manage an overabundance of content through dynamic switching. Each interface works differently based on the circumstances of the layout.</div>
							</div>
						</div>
					</div> <!-- Accordion with No Space example end -->
					
				</div> <!-- Accordion with No Space code and example end-->
			</div>
		</section><!-- Accordion with No Space end --> 	
		
		<!-- Accordion With All Expandable -->
		<section class="row component-section">
		
			<!-- Accordion with all expandable title and description -->
			<div class="col-md-3">
				<div id="expandable">
					<h2>Accordion With All Expandable</h2>
				</div>
				<p>When the users are typically interested in more than one piece of content in alternative content blocks, this accordion is useful. This is especially the case if users often return to review content in different content blocks. The user can open all expanders with content of interest and leave them open for reference or comparison.</p>
			</div> <!-- Accordion with all expandable title and description end -->
			
			<div class="col-md-9"> 
				
				<!--Accordion With All Expandable code and example  -->
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
								<li class="active"><a href="#scrollable-tab-html" data-toggle="tab">HTML</a></li>
								<li><a href="#scrollable-tab-css" data-toggle="tab">CSS</a></li>
								<li><a href="#scrollable-tab-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="scrollable-tab-html">
								<pre class="pre-codebox line-numbers" data-src="../components/accordion/snippets/accordion-expandable-all.html"></pre>
							</div>
							<div class="tab-pane" id="scrollable-tab-css">
								<pre class="pre-codebox line-numbers" data-src="../components/accordion/snippets/accordion.css"></pre>
							</div>
							<div class="tab-pane" id="scrollable-tab-js">
								<pre class="pre-codebox line-numbers" data-src="../components/accordion/snippets/accordion-expandable-all.js"></pre>
							</div>
						</div>
					</div> <!-- code view end-->
					
					<!--Accordion with all expandable example -->
					<div class="panel-group pmd-accordion" id="accordion2" role="tablist" aria-multiselectable="true" > 
						<div class="panel panel-default"> 
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title"> <a  data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2" data-expandable="true">Expandable Group Item #1 <i class="material-icons md-dark pmd-sm pmd-accordion-arrow">keyboard_arrow_down</i></a></h4>
							</div>
							<div id="collapseOne2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">The word "accordion" typically conjures a mental image of your favorite polka band. However that’s not what we are talking about when referring to accordion menu. Although polka music can offer a rip-snorting good time, the term is associated with something different in the realm of web design. User interface accordions might refer to menus, widgets, or content areas which expand like the musical instrument. These interfaces have grown a lot more popular in recent years with the expansion of JavaScript.</div>
							</div>
						</div>
						<div class="panel panel-default"> 
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2"  data-expandable="true"> Expandable Group Item #2 <i class="material-icons md-dark pmd-sm pmd-accordion-arrow">keyboard_arrow_down</i></a> </h4>
							</div>
							<div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">Accordions are popular because they allow developers to force large amounts of content into tiny spaces on the page. Granted these content displays also require dynamic effects for switching between page elements – so there are pros and cons to accordions. </div>
							</div>
						</div>
						<div class="panel panel-default"> 
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2"  data-expandable="true"> Expandable Group Item #3 <i class="material-icons md-dark pmd-sm pmd-accordion-arrow">keyboard_arrow_down</i></a> </h4>
							</div>
							<div id="collapseThree2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">Not every website needs an accordion menu and you certainly won’t find them all the time. But that’s no reason to ignore the concept entirely. The purpose of an accordion menu is to manage an overabundance of content through dynamic switching. Each interface works differently based on the circumstances of the layout.</div>
							</div>
						</div>
					</div>
					<button class="btn pmd-btn-raised pmd-ripple-effect btn-primary " data-target="accordion2" id="expandAll">Expand All</button>
					<button class="btn pmd-btn-raised pmd-ripple-effect btn-primary" data-target="accordion2" id="collapseAll">Collapse All</button> <!--Accordion with all expandable example end-->
					
				</div> <!--Accordion With All Expandable code and example end -->
			</div>
		</section> <!-- Accordion With All Expandable end --> 		
		
		<!-- Accordion with icons -->
		<section class="row component-section">
			
			<!-- Accordion with icons title and description -->
			<div class="col-md-3">
				<div id="accordion-with-icon">
					<h2>Accordion with Icons</h2>
				</div>
				<p>Icon plays an important role when it comes to visualisation. Icon gives user a visual hint of what the name of the accordian is all about.</p>
			</div> <!-- Accordion with icons title and description end-->
			
			<div class="col-md-9"> 
				
				<!--Accordion with Icons code and example  -->
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
								<pre class="pre-codebox line-numbers" data-src="../components/accordion/snippets/accordion-with-icon.html"></pre>
							</div>
							<div class="tab-pane" id="icon-accordion-css">
								<pre class="pre-codebox line-numbers" data-src="../components/accordion/snippets/accordion.css"></pre>
							</div>
							<div class="tab-pane" id="icon-accordion-js">
								<pre class="pre-codebox line-numbers" data-src="../components/accordion/snippets/accordion.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--Accordion with icons example -->
					<div class="panel-group pmd-accordion" id="accordion3" role="tablist" aria-multiselectable="true" > 
						<div class="panel"> 
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion3" href="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3" data-expandable="false"><i class="material-icons pmd-sm pmd-accordion-icon-left">mood</i> Collapsible Group Item #1 <i class="material-icons md-dark pmd-sm pmd-accordion-arrow">keyboard_arrow_down</i></a> </h4>
							</div>
							<div id="collapseOne3" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">The word "accordion" typically conjures a mental image of your favorite polka band. However that’s not what we are talking about when referring to accordion menu. Although polka music can offer a rip-snorting good time, the term is associated with something different in the realm of web design. User interface accordions might refer to menus, widgets, or content areas which expand like the musical instrument. These interfaces have grown a lot more popular in recent years with the expansion of JavaScript.</div>
							</div>
						</div>
						<div class="panel"> 
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title"> 
									<a  data-toggle="collapse" data-parent="#accordion3" href="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3"  data-expandable="false"><i class="material-icons pmd-sm pmd-accordion-icon-left">account_balance</i> Collapsible Group Item #2 <i class="material-icons md-dark pmd-sm pmd-accordion-arrow">keyboard_arrow_down</i></a> 
								</h4>
							</div>
							<div id="collapseTwo3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">Accordions are popular because they allow developers to force large amounts of content into tiny spaces on the page. Granted these content displays also require dynamic effects for switching between page elements – so there are pros and cons to accordions.  </div>
							</div>
						</div>
						<div class="panel"> 
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
									<a  data-toggle="collapse" data-parent="#accordion3" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3"  data-expandable="false"><i class="material-icons pmd-sm pmd-accordion-icon-left">verified_user</i> Collapsible Group Item #3 <i class="material-icons md-dark pmd-sm pmd-accordion-arrow">keyboard_arrow_down</i></a> 
								</h4>
							</div>
							<div id="collapseThree3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">Not every website needs an accordion menu and you certainly won’t find them all the time. But that’s no reason to ignore the concept entirely. The purpose of an accordion menu is to manage an overabundance of content through dynamic switching. Each interface works differently based on the circumstances of the layout.</div>
							</div>
						</div>
					</div> <!--Accordion with icons example end -->
					
				</div> <!--Accordion with Icons code and example  end-->
			</div>
		</section> <!-- Accordion with icons end --> 
		
		
		<!-- Accordion with colored icon-->
		<section class="row component-section">
			
			<!-- Accordion with colored icon title and description -->
			<div class="col-md-3">
				<div id="accordion-with-colored-icon">
					<h2>Accordion with colored icon</h2>
				</div>
				<p>You can also create an accordian with colored icons. Add <code>.panel-warning</code>, <code>.panel-danger</code>, <code>.panel-success</code>, <code>.panel-info</code> to your panel div.</p>
			</div> <!-- Accordion with colored icon title and description end -->
			
			<div class="col-md-9"> 
				
				<!--Accordion with colored icon code and example  -->
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
								<li class="active"><a href="#color-icon-accordion-html" data-toggle="tab">HTML</a></li>
								<li><a href="#color-icon-accordion-css" data-toggle="tab">CSS</a></li>
								<li><a href="#color-icon-accordion-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="color-icon-accordion-html">
								<pre class="pre-codebox line-numbers" data-src="../components/accordion/snippets/accordion-colored-icon.html"></pre>
							</div>
							<div class="tab-pane" id="color-icon-accordion-css">
								<pre class="pre-codebox line-numbers" data-src="../components/accordion/snippets/accordion.css"></pre>
							</div>
							<div class="tab-pane" id="color-icon-accordion-js">
								<pre class="pre-codebox line-numbers" data-src="../components/accordion/snippets/accordion.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--Accordion with colored icon example -->
					<div class="panel-group pmd-accordion" id="accordion4" role="tablist" aria-multiselectable="true" > 
						<div class="panel panel-warning"> 
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion4" href="#collapseOne4" aria-expanded="true" aria-controls="collapseOne4"  data-expandable="false"><i class="material-icons pmd-sm pmd-accordion-icon-left">mood</i> Collapsible Group Item #1 </a> </h4>
							</div>
							<div id="collapseOne4" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body"> The word "accordion" typically conjures a mental image of your favorite polka band. However that’s not what we are talking about when referring to accordion menu. Although polka music can offer a rip-snorting good time, the term is associated with something different in the realm of web design. User interface accordions might refer to menus, widgets, or content areas which expand like the musical instrument. These interfaces have grown a lot more popular in recent years with the expansion of JavaScript. </div>
							</div>
						</div>
						<div class="panel panel-danger"> 
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title"><a  data-toggle="collapse" data-parent="#accordion4" href="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4"  data-expandable="false"><i class="material-icons pmd-sm pmd-accordion-icon-left">account_balance</i> Collapsible Group Item #2 </a> </h4>
							</div>
							<div id="collapseTwo4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">Accordions are popular because they allow developers to force large amounts of content into tiny spaces on the page. Granted these content displays also require dynamic effects for switching between page elements – so there are pros and cons to accordions.  </div>
							</div>
						</div>
						<div class="panel panel-success"> 
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title"> <a  data-toggle="collapse" data-parent="#accordion4" href="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4"  data-expandable="false"><i class="material-icons pmd-sm pmd-accordion-icon-left">verified_user</i> Collapsible Group Item #3 </a> </h4>
							</div>
							<div id="collapseThree4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">Not every website needs an accordion menu and you certainly won’t find them all the time. But that’s no reason to ignore the concept entirely. The purpose of an accordion menu is to manage an overabundance of content through dynamic switching. Each interface works differently based on the circumstances of the layout. </div>
							</div>
						</div>
						<div class="panel panel-info"> 
							<div class="panel-heading" role="tab" id="headingFour">
								<h4 class="panel-title"><a  data-toggle="collapse" data-parent="#accordion4" href="#collapseFour4" aria-expanded="false" aria-controls="collapseFour4"  data-expandable="false"><i class="material-icons pmd-sm pmd-accordion-icon-left">account_box</i> Collapsible Group Item #4 </a> </h4>
							</div>
							<div id="collapseFour4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
								<div class="panel-body">So when exactly should you use accordions? Mostly with larger menus or content which might behave cleaner using expandable sections. These could be sub-headings or even multiple levels – the point is to organize content in a way that makes navigation simpler than endless scrolling. </div>
							</div>
						</div>
					</div> <!--Accordion with colored icon example end-->
					
				</div> <!--Accordion with colored icon code and example end -->
			</div>
		</section> <!-- Accordion with colored icon end --> 	
		
		<!-- Configuration starts-->		
		<section class="row component-section">
			<div class="col-md-3">
				<div id="config">
					<h2>Configuration Options</h2>
				</div>
				<p>The Propeller  CSS classes apply various predefined visual enhancements to the accordion. Apart from the Bootstrap classes, add Propeller customized classes to enhance your code. The table lists the available classes and their effects.</p>
			</div>
			<div class="col-md-9"> 
				<!--Propeller Class Configuration card start -->
				<div class="component-box">
					<div class="pmd-card pmd-table-card-responsive">
						<div class="pmd-table-card">
							<table class="table pmd-table table-hover">
								<thead>
									<tr>
										<th>Propeller  Class</th>
										<th>Effect</th>
										<th>Remark</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-title="Class"><code>.pmd-accordion</code></td>
										<td data-title="Effect">Defines Propeller customized Accordion.</td>
										<td data-title="Remark">Optional</td>
									</tr>
									<tr>
										<td data-title="Class"><code>.pmd-accordion-inbox</code></td>
										<td data-title="Effect">Add this class to create an accordion of the type of Google Inbox.</td>
										<td data-title="Remark">Optional</td>
									</tr>
									<tr>
										<td data-title="Class"><code>.pmd-accordion-nospace</code></td>
										<td data-title="Effect">Add this class to create accordion complying with the google material design standards.</td>
										<td data-title="Remark">Optional</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div> <!--Propeller  Class Configuration card end -->
			</div>
		</section> <!-- Configuration ends--> 		
		
		<!-- Events starts-->
		<section class="row component-section">
			<div class="col-md-3">
				<div id="events">
					<h2>Events</h2>
				</div>
				<p>Bootstrap's collapse class exposes a few events for hooking into collapse functionality. See <a href="http://getbootstrap.com/javascript/#collapse" target="_blank">here</a> for more documentation on this.</p>
			</div>
			<div class="col-md-9">
				<!-- Events card start -->
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
									<td data-title="Class"><code>show.bs.collapse</code></td>
									<td data-title="Effect">This event fires immediately when the show instance method is called.</td>
								</tr>
								<tr>
									<td data-title="Class"><code>shown.bs.collapse</code></td>
									<td data-title="Effect">This event is fired when a collapse element has been made visible to the user (will wait for CSS transitions to complete).</td>
								</tr>
								<tr>
									<td data-title="Class"><code>hide.bs.collapse</code></td>
									<td data-title="Effect">This event is fired immediately when the hide method has been called.</td>
								</tr>
								<tr>
									<td data-title="Class"><code>hidden.bs.collapse</code></td>
									<td data-title="Effect">This event is fired when a collapse element has been hidden from the user (will wait for CSS transitions to complete).</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!--Events card end -->
				<div class="pmd-card pmd-z-depth js-script pmd-card-custom">
					<pre class="pre-codebox line-numbers" data-src="../components/accordion/snippets/events.js"></pre>
				</div>
			</div>
		</section> <!-- Events ends-->
	</div>
</div> <!--Accordion constructor end -->
 

<!--footer start -->
<?php include('include/footer.php'); ?>
<!-- footer end -->