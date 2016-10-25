<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Propeller is a front-end responsive framework based on Material design & Bootstrap.">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
<title>Propeller Admin - Develop more, Code less.</title>
<link rel="shortcut icon" type="image/x-icon" href="themes/images/favicon.ico">

<!-- Styles Starts -->
<?php include('include/styles.php'); ?>
<!-- Styles Ends -->
</head>

<body>
<!-- Header Starts -->
<?php include('include/header.php'); ?>
<!-- Header Ends -->

<!-- Sidebar Starts -->
<?php include('include/sidebar.php'); ?>
<!-- Sidebar Ends -->
	
<!--Accordion -->
<div id="content" class="pmd-content">
	
	<div class="container-fluid"> 
		
		<!-- Title -->
		<h1 class="section-title" id="accordion-title">
			<span>Accordion</span>
		</h1><!-- End Title -->
		
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.php">Dashboard</a></li>
		  <li class="active">Accordion</li>
		</ol><!--breadcrum end-->
		
		<!--component header -->
		<div class="componant-title-bg"> 
			<p class="lead">Accordion is an element used to expand and collapse content that is broken into logical sections, much like tabs. It allows users to toggle the display of sections of content.</p>
		</div> <!--component header end-->
		
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
		
	</div>
</div> <!--Accordion constructor end -->
 

<!-- Footer Starts -->
<?php include('include/footer.php'); ?>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<?php include('include/scripts.php'); ?>
<!-- Scripts Ends -->

</body>
</html>