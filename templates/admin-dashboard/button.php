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

<div id="content" class="pmd-content">

    <!-- Buttons -->
	<div class="container-fluid">

		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Button</span>
		</h1><!-- End Title -->
		
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.php">Dashboard</a></li>
		  <li class="active">Button</li>
		</ol><!--breadcrum end-->
	
		<!--component header -->
		<div class="componant-title-bg"> 
			<p class="lead">Button component is an enhanced version of the standard HTML <code><</code><code>button</code><code>></code> element. A button consists of text and/or an image that clearly communicates what action will occur when user clicks or touches it. Propeller button component provides various types of buttons, and allows user to add both display and click effects.</p>
		</div> <!--component header end -->
		
		<!-- Bootstrap button -->
		<section class="row component-section">
			
			<!-- Bootstrap button title and description --> 
			<div class="col-md-3">
				<div id="bootstrap-button">
					<h2>Bootstrap Button</h2>
				</div>
				<p>Bootstrap provides different classes for buttons based upon their purpose. For example - Include Default Button to the code by adding <code>.btn-default</code>.</p>
			</div> <!-- Default button title and description end --> 
			
			<div class="col-md-9">
			
				<!-- Bootstrap button code and example --> 
				<div class="component-box">
					
					<!--Bootstrap button example -->
					<div class="pmd-card pmd-z-depth card-custom-view">
						<div class="pmd-card-body"> 
							<!-- Default button with a ripple effect -->
							<button type="button" class="btn btn-default"> Default </button >
							
							<!--Primary button with a ripple effect-->
							<button type="button" class="btn btn-primary"> Primary </button >
							
							<!--Success button with a ripple effect-->
							<button type="button" class="btn btn-success"> Success </button >
							
							<!--Information button with a ripple effect-->
							<button type="button" class="btn btn-info"> Info </button >
							
							<!--Warning button with a ripple effect -->
							<button type="button" class="btn btn-warning"> Warning </button >
							
							<!--Danger button with a ripple effect -->
							<button type="button" class="btn btn-danger"> Danger </button >
							
							<!--Link with a ripple effect -->
							<button type="button" class="btn btn-link"> Link </button >
						</div>
					</div> <!--Bootstrap button example end-->
					
				</div> <!-- Bootstrap button code and example end --> 
			</div>
		</section> <!-- Bootstrap button end --> 		
		
		<!-- Propeller button -->
		<section class="row component-section">
			
			<!-- Default button title and description --> 
			<div class="col-md-3">
				<div id="propeller-button">
					<h2>Propeller Button</h2>
				</div>
				<p>Propeller button consists of Bootstrap HTML structure with Propeller customized classes based on material design standards. Add <code>.pmd-ripple-effect</code> followed by Bootstrap classes to get ripple effect to button.</p>
			</div> <!-- Default button title and description end --> 
			
			<div class="col-md-9">
			
				<!-- Default button code and example --> 
				<div class="component-box">
					<!--Bootstrap button example -->
					<div class="pmd-card pmd-z-depth card-custom-view">
						<div class="pmd-card-body"> 
							<!-- Default button with a ripple effect -->
							<button type="button" class="btn pmd-ripple-effect btn-default"> Default </button >
							
							<!--Primary button with a ripple effect-->
							<button type="button" class="btn pmd-ripple-effect btn-primary"> Primary </button >
							
							<!--Success button with a ripple effect-->
							<button type="button" class="btn pmd-ripple-effect btn-success"> Success </button >
							
							<!--Information button with a ripple effect-->
							<button type="button" class="btn pmd-ripple-effect btn-info"> Info </button >
							
							<!--Warning button with a ripple effect -->
							<button type="button" class="btn pmd-ripple-effect btn-warning"> Warning </button >
							
							<!--Danger button with a ripple effect -->
							<button type="button" class="btn pmd-ripple-effect btn-danger"> Danger </button >
							
							<!--Link with a ripple effect -->
							<button type="button" class="btn pmd-ripple-effect btn-link"> Link </button >
						</div>
					</div> <!--default button example end-->
					
				</div> <!-- Default button code and example end --> 
			</div>
		</section> <!-- Propeller button end --> 		
		
		<!-- Raised button-->
		<section class="row component-section"> 
			
			<!-- Raised button title and description -->
			<div class="col-md-3">
				<div id="raised-button">
					<h2>Raised Button</h2>
				</div>
				<p>Raised Buttons are used to give prominence to actions in a layouts with a lot of varying content. Include Raised Button to the code by adding <code>.pmd-btn-raised</code>.</p>
			</div> <!-- Raised button title and description end-->
			
			<div class="col-md-9">
				
				<!-- Raised button code and example -->
				<div class="component-box">
					<!--raised button example -->
					<div class="pmd-card pmd-z-depth card-custom-view">
						<div class="pmd-card-body"> 
							<!--Default raised button with ripple effect-->
							<button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-default">Default</button>
							
							<!--Primary raised button with ripple effect -->
							<button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-primary">Primary</button>
							
							<!-- Success raised button with ripple effect -->
							<button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-success">Success</button>
							
							<!-- Information raised button with ripple effect -->
							<button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-info">Info</button>
							
							<!-- Warning raised button with ripple effect -->
							<button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-warning">Warning</button>
							
							<!-- Danger raised button with ripple effect -->
							<button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-danger">Danger</button>
							
							<!-- Link raised with ripple effect -->
							<button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-link">Link</button>
						</div>
					</div> <!--raised button example end -->
					
				</div> <!-- Raised button code and example end -->
			</div>
			<!--buttton raised section end  --> 
		</section> <!-- Raised button end --> 
		
		<!-- Flat button -->
		<section class="row component-section">
			
			<!-- Flat button title and description -->
			<div class="col-md-3">
				<div id="flat-button">
					<h2>Flat Button</h2>
				</div>
				<p>Flat Buttons are text-only buttons. Include Flat Button to the code by adding <code>.pmd-btn-flat</code>.</p>
			</div> <!-- Flat button title and description end-->
			
			<div class="col-md-9">
			
				<!-- Flat button code and example -->
				<div class="component-box">
					<!--Flat buttons example  -->
					<div class="pmd-card pmd-z-depth card-custom-view">
						<div class="pmd-card-body"> 
							<!-- Default flat button with ripple effect -->
							<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-default">Default</button>
							
							<!-- Primary flat button with ripple effect -->
							<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-primary">Primary</button>
							
							<!-- Success flat button with ripple effect -->
							<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-success">Success</button>
							
							<!-- Information flat button with ripple effect -->
							<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-info">Info</button>
							
							<!-- Warning flat button with ripple effect -->
							<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-warning">Warning</button>
							
							<!-- Danger flat button with ripple effect -->
							<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-danger">Danger</button>
							
							<!-- Link flat with ripple effect -->
							<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-link">Link</button>
						</div>
					</div> <!--Flat buttons example end -->
					
				</div> <!-- Flat button code and example end-->
			</div>
		</section> <!-- Flat button end -->
		
		<!-- Outline button -->
		<section class="row component-section">
			
			<!-- Outline button title and description -->
			<div class="col-md-3">
				<div id="outline-button">
					<h2>Outline Button</h2>
				</div>
				<p>Outline Buttons are buttons with a border rather that background color. These are generally used to define secondary action. Include Outline Button to the code by adding <code>.pmd-btn-outline</code>.</p>
			</div> <!-- Flat button title and description end-->
			
			<div class="col-md-9">
			
				<!-- Outline button code and example -->
				<div class="component-box">
					<!--Outline buttons example  -->
					<div class="pmd-card pmd-z-depth card-custom-view">
						<div class="pmd-card-body"> 
							<!-- Default flat button with ripple effect -->
							<button type="button" class="btn pmd-btn-outline pmd-ripple-effect btn-default">Default</button>
							
							<!-- Primary flat button with ripple effect -->
							<button type="button" class="btn pmd-btn-outline pmd-ripple-effect btn-primary">Primary</button>
							
							<!-- Success flat button with ripple effect -->
							<button type="button" class="btn pmd-btn-outline pmd-ripple-effect btn-success">Success</button>
							
							<!-- Information flat button with ripple effect -->
							<button type="button" class="btn pmd-btn-outline pmd-ripple-effect btn-info">Info</button>
							
							<!-- Warning flat button with ripple effect -->
							<button type="button" class="btn pmd-btn-outline pmd-ripple-effect btn-warning">Warning</button>
							
							<!-- Danger flat button with ripple effect -->
							<button type="button" class="btn pmd-btn-outline pmd-ripple-effect btn-danger">Danger</button>
							
							<!-- Link flat with ripple effect -->
							<button type="button" class="btn pmd-btn-outline pmd-ripple-effect btn-link">Link</button>
						</div>
					</div> <!--Outline buttons example end -->
				</div> <!-- Outline button code and example end-->
			</div>
		</section> <!-- Outline button end -->
		 
		<!-- FAB button -->
		<section class="row component-section">
			
			<!-- FAB button title and description -->
			<div class="col-md-3">
				<div id="fab-button">
					<h2>Floating Action Button (FAB)</h2>
				</div>
				<p>Include FAB Button to the code by adding <code>.pmd-btn-fab</code>.</p>
			</div> <!-- FAB button title and description end-->
			
			<!-- FAB button code and example -->
			<div class="col-md-9">		
				<div class="component-box">
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
				<div id="raised-fab-button">
					<h2>Raised Floating Action Button</h2>
				</div>
				<p>Include Raised Floating Action Button to the code by adding <code>.pmd-btn-fab .pmd-btn-raised</code>.</p>
			</div> <!-- FAB raised button title and description end-->
			
			<!-- FAB raised button code and example -->
			<div class="col-md-9">
				<div class="component-box">
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
				<div id="flat-fab-button">
					<h2>Flat Floating Action Button</h2>
				</div>
				<p>Include Flat FAB Button to the code by adding <code>.pmd-btn-fab .pmd-btn-flat</code>.</p>
			</div> <!-- FAB Flat button title and description end -->
			
			<!-- FAB Flat button code and example -->
			<div class="col-md-9">
				<div class="component-box">
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
		
		<!-- variant sizes buttons -->
		<section class="row component-section">
			
			<!-- variant sizes buttons title and description -->
			<div class="col-md-3">
				<div id="sizes">
					<h2>Button Sizes</h2>
				</div>
				<p>Fancy larger or smaller buttons? <br>
					Add <code>.btn-lg</code>, <code>.btn-sm</code> for additional sizes.</p>
			</div> <!-- variant sizes buttons title and description end -->
			
			<!-- variant sizes buttons code and example -->
			<div class="col-md-9">
				<div class="component-box">
					<!--variant sizes buttons example -->
					<div class="pmd-card pmd-z-depth card-custom-view">
						<div class="pmd-card-body">
							<div class="table custom-size"> 
								<div class="media">
									<div class="media-body"> 
										<!--Large primary raised button with ripple effect -->
										<button class="btn btn-lg pmd-btn-raised pmd-ripple-effect btn-primary" type="button">Raised</button>
										
										<!--Large primary flat button with ripple effect -->
										<button class="btn btn-lg pmd-btn-flat pmd-ripple-effect btn-primary" type="button">Flat</button>
										
										<!--Large primary circle raised button with ripple effect -->
										<button class="btn btn-lg pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">add</i></button>
										
										<!--Large primary circle flat button with ripple effect -->
										<button class="btn btn-lg pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">add</i></button>
									</div>
									<div class="media-right media-middle">
										<div class="type-info">Large buttons</div>
									</div>
								</div>
								<div class="media">
									<div class="media-body"> 
										<!--Medium primary raised button with ripple effect -->
										<button class="btn pmd-btn-raised pmd-ripple-effect btn-primary" type="button">Raised</button>
										
										<!--Medium primary flat button with ripple effect -->
										<button class="btn pmd-btn-flat pmd-ripple-effect btn-primary" type="button">Flat</button>
										
										<!--Medium primary circle raised button with ripple effect -->
										<button class="btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">add</i></button>
										
										<!--Medium primary circle flat button with ripple effect -->
										<button class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">add</i></button>
									</div>
									<div class="media-right media-middle">
										<div class="type-info">Medium buttons</div>
									</div>
								</div>
								<div class="media">
									<div class="media-body"> 
										<!--Small primary raised button with ripple effect -->
										<button class="btn btn-sm pmd-btn-raised pmd-ripple-effect btn-primary" type="button">Raised</button>
										
										<!--Small primary flat button with ripple effect -->
										<button class="btn btn-sm pmd-btn-flat pmd-ripple-effect btn-primary" type="button">Flat</button>
										
										<!--Small primary circle raised button with ripple effect -->
										<button class="btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">add</i></button>
										
										<!--Small primary circle flat button with ripple effect -->
										<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">add</i></button>
									</div>
									<div class="media-right media-middle">
										<div class="type-info">Small buttons</div>
									</div>
								</div>
							</div>
						</div>
					</div> <!--variant sizes buttons example end -->
					
				</div>
				<div class="component-box"> 
					<!--block buttons example -->
					<div class="pmd-card pmd-z-depth card-custom-form">
						<div class="pmd-card-body">
							<div style="max-width: 400px; margin: 0 auto 10px;" class="well"> 
								<!-- Primary raised block button with ripple effect -->
								<button class="btn pmd-btn-raised btn-primary btn-block pmd-ripple-effect" type="button">Block level Raised button</button>
								
								<!-- Primary flat block button with ripple effect -->
								<button class="btn pmd-btn-flat btn-primary btn-block pmd-ripple-effect" type="button">Block level Flat button</button>
							</div>
						</div>
					</div> <!--block buttons example end-->
					<p class="component-desc">Create block level buttons&mdash;those that span the full width of a parent&mdash; by adding <code>.btn-block</code>.</p>
				</div>
			</div> <!-- variant sizes buttons code and example end -->
		</section> <!-- variant sizes buttons end -->
		
		<!-- button group -->
		<section class="row component-section">
			
			<!-- button group title and description -->
			<div class="col-md-3">

				<div id="button-groups">
					<h2>Button Group</h2>
				</div>
				<p>Group a series of buttons together on a single line with the button group. Add on optional JavaScript radio and checkbox style behavior with our buttons plugin.</p>
			</div> <!-- button group title and description end -->
			
			<!-- button group code and example -->
			<div class="col-md-9"> 
				<div class="component-box">
					<!--buttton group example  -->
					<div class="pmd-card pmd-z-depth card-custom-form">
						<div class="pmd-card-body"> 
							<div class="btn-group"  style="margin: 9px 0 5px;">
								<button class="btn pmd-ripple-effect btn-primary" type="button">Left</button>
								<button class="btn pmd-ripple-effect btn-primary" type="button">Middle</button>
								<button class="btn pmd-ripple-effect btn-primary" type="button">Right</button>
							</div>
						</div>
					</div> <!--buttton group example end -->
					<p class="component-desc">Combine sets of <code>&lt;div class="btn-group"&gt;</code> into a <code>&lt;div class="btn-toolbar"&gt;</code> for more complex components.</p>
				</div>
				
				<!-- complex button groups-->
				<div class="component-box">
					<!--complex button groups example -->
					<div class="pmd-card pmd-z-depth card-custom-form">
						<div class="pmd-card-body"> 
							<div class="btn-group">
								<button class="btn pmd-btn-raised pmd-ripple-effect btn-default" type="button">4</button>
								<button class="btn pmd-btn-raised pmd-ripple-effect btn-info" type="button">5</button>
								<button class="btn pmd-btn-raised pmd-ripple-effect btn-warning" type="button">6</button>
							</div>
						</div>
					</div> <!--complex button groups example end -->
					<p class="component-desc">Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.</p>
				</div>
				<!--Button groups Combine end --> 
				
				<!--Button groups justified -->
				<div class="component-box">
					<!--buttton groups justified example  -->
					<div class="pmd-card pmd-z-depth card-custom-form">
						<div class="pmd-card-body"> 
							<div class="btn-group btn-group-justified"> <a role="button" class="btn pmd-ripple-effect btn-primary">Left</a> <a role="button" class="btn pmd-ripple-effect btn-primary">Middle</a> <a role="button" class="btn pmd-ripple-effect btn-primary">Right</a> </div>
						</div>
					</div> <!--buttton groups justified example  end-->
					<p class="component-desc">With <code>&lt;a&gt;</code> elements, Just wrap a series of <code>.btn</code>s in <code>.btn-group.btn-group-justified</code>.</p>
					
				</div> <!--Button groups justified end -->
				 
			</div> <!-- button group code and example end -->
		</section> <!-- button group end -->
		
	</div> <!--Buttons end--> 

</div> <!--Icons end --> 

<!-- Footer Starts -->
<?php include('include/footer.php'); ?>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<?php include('include/scripts.php'); ?>
<!-- Scripts Ends -->

</body>
</html>