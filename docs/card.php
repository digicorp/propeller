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
					<h1 class="pmd-display1">Card</h1>
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
									<input type="hidden"  name="card" value="card"/>
									<button name='btn_submit' value='card' type="submit" onClick="downloadCard()" class="btn btn-default pmd-btn-raised btn-sm pmd-ripple-effect pmd-btn-flat custom-btn">Download ZIP</button>
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

<!--card -->
<div class="pmd-content pmd-content-custom" id="content"> 
	
	<!--component header -->
	<div class="componant-title-bg"> 
		<div class="container">
			<div class="row">
				
				<!-- component title and description -->
				<div class="col-xs-12">
					<p class="lead">A card is a flexible and extensible content container. It includes options for header and footer, a wide variety of content, contextual background colors, and powerful display options.</p>
				</div> <!-- component title and description end -->
				
			</div>
		</div>
	</div> <!--component header end -->
	
	<div class="container"> 
		
		<!--component list category -->
		<div class="list-group list-group-custom margin-20"> 
			<a class="list-group-item" href="#usage">General Card</a> 
			<a class="list-group-item" href="#card-block">Content Blocks </a> 
			<a class="list-group-item" href="#card-type">Content Type</a> 
			<a class="list-group-item" href="#config">Configuration Options</a> 
		</div> <!--component list category end -->
		
		<!-- card usage -->
		<section class="row component-section">
			
			<!-- card usage title and description -->
			<div class="col-md-3">
				<div  id="usage">
					<h2>General Card</h2>
				</div>
				<p>Card is a convenient means of displaying content composed of different elements. It is also well-suited for showcasing elements whose size or supported actions vary, like photos with captions of variable length.</p>
			</div> <!-- card usage title and description end -->
			
			<!-- card usage code and example -->
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
								<li class="active"><a href="#example-card-html" data-toggle="tab">HTML</a></li>
								<li><a href="#example-card-css" data-toggle="tab">CSS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="example-card-html">
								<pre class="pre-codebox line-numbers" data-src="../components/card/snippets/card-default.html"></pre>
							</div>
							<div class="tab-pane" id="example-card-css">
								<pre class="pre-codebox line-numbers" data-src="../components/card/snippets/card.css"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!-- default card example -->
					<div class="pmd-card-figure"> 
						<div class="pmd-card pmd-card-default pmd-z-depth pmd-card-custom-view"> 
							<!-- Card header -->
							<div class="pmd-card-title">
								<div class="media-left"> <a class="avatar-list-img" href="javascript:void(0);"> <img src="http://propeller.in/assets/images/avatar-icon-40x40.png" width="40" height="40"> </a> </div>
								<div class="media-body media-middle">
									<h3 class="pmd-card-title-text">Two-line item</h3>
									<span class="pmd-card-subtitle-text">Secondary text</span> </div>
							</div>
							
							<!-- Card media -->
							<div class="pmd-card-media"> <img src="http://propeller.in/assets/images/profile-pic.png" width="1184" height="666" class="img-responsive"> </div>
							
							<!-- Card body -->
							<div class="pmd-card-title">
								<h2 class="pmd-card-title-text">Title goes here</h2>
								<span class="pmd-card-subtitle-text">Secondary text</span> </div>
							<div class="pmd-card-body"> Card provide context and an entry point to more robust information and views. Don't overload card with extraneous information or actions. </div>
							
							<!-- Card media actions -->
							<div class="pmd-card-actions">
								<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">share</i></button>
								<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">thumb_up</i></button>
								<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">drafts</i></button>
							</div>
							
							<!-- Card actions -->
							<div class="pmd-card-actions">
								<button class="btn pmd-btn-flat pmd-ripple-effect btn-primary" type="button">Primary</button>
								<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-default">Action</button>
							</div>
						</div>
					</div> <!-- default card example end-->
					
				</div>
			</div> <!-- card usage code and example end -->
		</section> <!-- card usage end -->		 
		
		<!-- card content blocks -->
		<section class="row component-section">
			
			<!-- card content blocks title and description -->
			<div class="col-md-3">
				<div  id="card-block">
					<h2>Card Elements</h2>
				</div>
				<p>A Card is constructed using blocks of content which include:</p>
				<ul>
					<li>An optional header</li>
					<li>A primary title</li>
					<li>Rich media</li>
					<li>Supporting text</li>
					<li>Actions</li>
				</ul>
				<p>These content blocks can be combined to create visual hierarchy within a card.</p>
			</div> <!-- card content blocks title and description end -->
			
			<!-- card content blocks code and example -->
			<div class="col-md-9"> 
				<div class="component-box">
					
					<!-- code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
					</div> <!-- code view button end -->
					
					<!-- code view-->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#card-title-html" data-toggle="tab">HTML</a></li>
								<li><a href="#card-title-css" data-toggle="tab">CSS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="card-title-html">
								<pre class="pre-codebox line-numbers" data-src="../components/card/snippets/card-content-blocks.html"></pre>
							</div>
							<div class="tab-pane" id="card-title-css">
								<pre class="pre-codebox line-numbers" data-src="../components/card/snippets/card.css"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--card Content Blocks example -->
					<div class="row">
						<div class="col-md-6"> 
							
							<!-- Card header -->
							<div class="pmd-card pmd-card-default pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-title">
									<h2 class="pmd-card-title-text">Title goes here</h2>
									<span class="pmd-card-subtitle-text">Secondary text</span> </div>
							</div>
							<p class="component-desc">Include title and sub-title to the code by adding <code>.pmd-card-title-text</code> and <code>.pmd-card-subtitle-text</code> respectively inside wrapper class 
                            <code>.pmd-card-title</code>.</p>
							
							<!-- Card body -->
							<div class="pmd-card pmd-card-default pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body"> Card provide context and an entry point to more robust information and views. Don't overload card with extraneous information or actions. </div>
							</div>
							<p class="component-desc">Include Supporting text to the code by adding <code>.pmd-card-body</code>.</p>
							
							<!-- Card action -->
							<div class="pmd-card pmd-card-default pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-actions">
									<button class="btn pmd-btn-flat pmd-ripple-effect btn-primary" type="button">Primary</button>
									<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-default">Action</button>
								</div>
							</div>
							<p class="component-desc">Add action buttons to the card using <code>.pmd-card-actions</code>.</p>
						</div>
						
						<div class="col-md-6"> 
							
							<!-- Card media -->
							<div class="pmd-card pmd-card-default pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-media"><img width="1184" height="666" class="img-responsive" src="http://propeller.in/assets/images/profile-pic.png"></div>
							</div>
							<p class="component-desc">Add media to your card using <code>.pmd-card-media</code>.</p>
							
							<!-- Card media actions -->
							<div class="pmd-card pmd-card-default pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-actions"> <span>
									<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">share</i></button>
									<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">thumb_up</i></button>
									<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">drafts</i></button>
									</span> </div>
							</div>
							<p class="component-desc">Use action icons for adding social media component</p>
						</div>
					</div> <!--card Content Blocks example end -->
					
				</div>
			</div> <!-- card content blocks code and example end -->
		</section> <!-- card content blocks end -->
		
		<!-- card content types -->
		<section class="row component-section">
			
			<!-- card content types title and description -->
			<div class="col-md-3">
				<div id="card-type">
					<h2>Content Type</h2>
				</div>
				<p>Card support a wide variety of content, including images, text, list groups, links, and more. Mix and match multiple content types to create the card you need.</p>
			</div> <!-- card content types title and description end -->
			
			<!-- card content types code and example -->
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
								<li class="active"><a href="#card-type1-html" data-toggle="tab">HTML</a></li>
								<li><a href="#card-type1-css" data-toggle="tab">CSS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="card-type1-html">
								<pre class="pre-codebox line-numbers" data-src="../components/card/snippets/card-content-types-1.html"></pre>
							</div>
							<div class="tab-pane" id="card-type1-css">
								<pre class="pre-codebox line-numbers" data-src="../components/card/snippets/card.css"></pre>
							</div>
						</div>
					</div> <!-- code view end-->
					
					<!--card content types example -->
					<div class="row">
						<div class="col-md-6 card-type">
							<p class="component-desc-card">Media, Title, and Action area</p>
							<!-- Media, Title, and Description area -->
							<div class="pmd-card pmd-card-default pmd-z-depth pmd-card-custom-view"> 
								
								<!-- Card media -->
								<div class="pmd-card-media"> <img width="1184" height="666" class="img-responsive" src="http://propeller.in/assets/images/profile-pic.png"> </div>
								
								<!-- Card header -->
								<div class="pmd-card-title">
									<h2 class="pmd-card-title-text">Title goes here</h2>
									<span class="pmd-card-subtitle-text">Secondary text</span> </div>
								
								<!-- Card action -->
								<div class="pmd-card-actions">
									<button class="btn pmd-btn-flat pmd-ripple-effect btn-primary" type="button">Primary</button>
									<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-default">Action</button>
								</div>
							</div>
						</div>
						<div class="col-md-6 card-type">
							<p class="component-desc-card">Title, Media, Description and Action area</p>
							<!--Media, Title, Description and Action area -->
							<div class="pmd-card pmd-card-default pmd-z-depth pmd-card-custom-view"> 
								<!-- Card header -->
								<div class="pmd-card-title">
									<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img width="40" height="40" src="http://propeller.in/assets/images/avatar-icon-40x40.png"> </a> </div>
									<div class="media-body media-middle">
										<h3 class="pmd-card-title-text">Two-line item</h3>
										<span class="pmd-card-subtitle-text">Secondary text</span> </div>
								</div>
								
								<!-- Card media -->
								<div class="pmd-card-media"> <img width="1184" height="666" class="img-responsive" src="http://propeller.in/assets/images/profile-pic.png"> </div>
								
								<!-- Card body -->
								<div class="pmd-card-body"> Card provide context and an entry point to more robust information and views. Don't overload card with extraneous information or actions. </div>
								
								<!-- Card actions -->
								<div class="pmd-card-actions">
									<button class="btn pmd-btn-flat pmd-ripple-effect btn-primary" type="button">Primary</button>
									<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-default">Action</button>
								</div>
							</div>
						</div>
					</div> <!--card content types example end -->
					
				</div>
				
				<div class="component-box">
					
					<!-- code view button -->
					<div class="pmd-card-title custom-heading view-code-xs clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
					</div> <!-- code view button  end-->
					
					<!-- code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#card-type2-html" data-toggle="tab">HTML</a></li>
								<li><a href="#card-type2-css" data-toggle="tab">CSS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="card-type2-html">
								<pre class="pre-codebox line-numbers" data-src="../components/card/snippets/card-content-types-2.html"></pre>
							</div>
							<div class="tab-pane" id="card-type2-css">
								<pre class="pre-codebox line-numbers" data-src="../components/card/snippets/card.css"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--card content types example -->
					<div class="row">
						<div class="col-md-6 card-type">
							<p class="component-desc-card">Media and Description area</p>
							<!--Media and Description area -->
							<div class="pmd-card pmd-card-default pmd-z-depth pmd-card-custom-view"> 
								
								<!-- Card media -->
								<div class="pmd-card-media"> <img width="1184" height="666" class="img-responsive" src="http://propeller.in/assets/images/profile-pic.png"> </div>
								
								<!-- Card body -->
								<div class="pmd-card-body"> Card provide context and an entry point to more robust information and views. Don't overload card with extraneous information or actions. </div>
							</div>
						</div>
						<div class="col-md-6 card-type">
							<p class="component-desc-card">Media and Action area</p>
							<!--Media and Action area -->
							<div class="pmd-card pmd-card-default pmd-z-depth pmd-card-custom-view"> 
								<!-- Card media -->
								<div class="pmd-card-media"> <img width="1184" height="666" class="img-responsive" src="http://propeller.in/assets/images/profile-pic.png"> </div>
								
								<!-- Card media actions -->
								<div class="pmd-card-actions"> <span>
									<button type="button" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary"><i class="material-icons pmd-sm">share</i></button>
									<button type="button" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary"><i class="material-icons pmd-sm">thumb_up</i></button>
									<button type="button" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary"><i class="material-icons pmd-sm">drafts</i></button>
									</span> </div>
							</div>
						</div>
					</div> <!--card content types example end-->
				</div>
				
				<div class="component-box">
				
					<!-- code view button -->
					<div class="pmd-card-title custom-heading view-code-xs clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
					</div> <!-- code view button end -->
					
					<!-- code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#card-type3-html" data-toggle="tab">HTML</a></li>
								<li><a href="#card-type3-css" data-toggle="tab">CSS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="card-type3-html">
								<pre class="pre-codebox line-numbers" data-src="../components/card/snippets/card-content-types-3.html"></pre>
							</div>
							<div class="tab-pane" id="card-type3-css">
								<pre class="pre-codebox line-numbers" data-src="../components/card/snippets/card.css"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--card content type example -->
					<div class="row">
						<div class="col-md-6 card-type">
							<p class="component-desc-card">Media, Title, and Action area</p>
							<div class="pmd-card pmd-card-media-inline pmd-card-default pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-media">
									<div class="media-body">
										<h2 class="pmd-card-title-text">Title goes here</h2>
										<span class="pmd-card-subtitle-text">Secondary text</span> </div>
									<div class="media-right media-middle"> <a href="javascript:void(0);"> <img width="80" height="80" src="../assets/images/profile-pic.png"> </a> </div>
								</div>
								<div class="pmd-card-actions">
									<button class="btn pmd-btn-flat pmd-ripple-effect btn-primary" type="button">Primary</button>
									<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-default">Action</button>
								</div>
							</div>
							<p class="component-desc">Use <code>.pmd-card-media-inline</code> along with <code>.pmd-card</code> in this type of card.</p>
						</div>
						<div class="col-md-6 card-type">
							<p class="component-desc-card">Title, Media, and Action area</p>
							<div class="pmd-card pmd-card-media-inline pmd-card-default pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-media">
									<div class="media-body">
										<h2 class="pmd-card-title-text">Title goes here</h2>
										<span class="pmd-card-subtitle-text">Secondary text</span> </div>
									<div class="media-right media-middle"> <a href="javascript:void(0);"> <img width="112" height="112" src="../assets/images/profile-pic.png"> </a> </div>
								</div>
								<div class="pmd-card-actions">
									<button class="btn pmd-btn-flat pmd-ripple-effect btn-primary" type="button">Primary</button>
									<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-default">Action</button>
								</div>
							</div>
							<p class="component-desc">Use <code>.pmd-card-media-inline</code> along with <code>.pmd-card</code> in this type of card.</p>
						</div>
					</div> <!--card content type example end -->
					
				</div>
				
				<div class="component-box">
				
					<!-- code view button -->
					<div class="pmd-card-title custom-heading view-code-xs clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
					</div> <!-- code view button end-->
					
					<!-- code view-->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#card-type4-html" data-toggle="tab">HTML</a></li>
								<li><a href="#card-type4-css" data-toggle="tab">CSS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="card-type4-html">
								<pre class="pre-codebox line-numbers" data-src="../components/card/snippets/card-content-types-4.html"></pre>
							</div>
							<div class="tab-pane" id="card-type4-css">
								<pre class="pre-codebox line-numbers" data-src="../components/card/snippets/card.css"></pre>
							</div>
						</div>
					</div> <!-- code view end-->
					
					<!--card content type example -->
					<div class="row">
						<div class="col-md-6 card-type">
							<p class="component-desc-card">Media, and Action area</p>
							<!--Media, and Action area card -->
							<div class="pmd-card pmd-card-default pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-body">
									<div class="media-body"> <a href="javascript:void(0);"> <img class="img-responsive" src="../assets/images/profile-pic.png"> </a> </div>
									<div class="media-right">
										<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">share</i></button>
										<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">thumb_up</i></button>
										<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">drafts</i></button>
									</div>
								</div>
							</div>
							<!--Media, and Action area card --> 
						</div>
						<div class="col-md-6 card-type">
							<p class="component-desc-card">Title, Media, and Action area</p>
							<!--Title, Media, and Action area card start -->
							<div class="pmd-card pmd-card-media-inline pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-media">
									<div class="media-body">
										<h2 class="pmd-card-title-text">Title goes here</h2>
										<span class="pmd-card-subtitle-text">Secondary text</span> </div>
									<div class="media-right media-middle"> <a href="javascript:void(0);"> <img width="152" height="152" src="../assets/images/profile-pic.png"> </a> </div>
								</div>
								<div class="pmd-card-actions">
									<button class="btn pmd-btn-flat pmd-ripple-effect btn-primary" type="button">Primary</button>
									<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-default">Action</button>
								</div>
							</div>
							<!--Title, Media, and Action area card end -->
							<p class="component-desc">Use <code>.pmd-card-media-inline</code> along with <code>.pmd-card</code> in this type of card.</p>
						</div>
					</div> <!--card content type example end -->
					
				</div>
				
				<div class="component-box">
				
					<!-- code view button -->
					<div class="pmd-card-title custom-heading view-code-xs clearfix"> 
						<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
					</div> <!-- code view button end-->
					
					<!-- code view -->
					<div class="code-box">
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#card-type4-html" data-toggle="tab">HTML</a></li>
								<li><a href="#card-type4-css" data-toggle="tab">CSS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="card-type4-html">
								<pre class="pre-codebox line-numbers" data-src="../components/card/snippets/card-content-types-5.html"></pre>
							</div>
							<div class="tab-pane" id="card-type4-css">
								<pre class="pre-codebox line-numbers" data-src="../components/card/snippets/card.css"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--card content types example -->
					<div class="row">
						<div class="col-md-6">
							<p class="component-desc-card">Title, Media, Description and Action area</p>
							<!--Title, Media, Description and Action area -->
							<div class="pmd-card pmd-card-inverse pmd-z-depth pmd-card-custom-view">
								<div class="pmd-card-title">
									<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img width="40" height="40" src="../assets/images/avatar-icon-40x40.png"> </a> </div>
									<div class="media-body media-middle">
										<h3 class="pmd-card-title-text">Two-line item</h3>
										<span class="pmd-card-subtitle-text">Secondary text</span> </div>
								</div>
								<div class="pmd-card-media"> <img width="1184" height="666" class="img-responsive" src="../assets/images/profile-pic.png"> </div>
								<div class="pmd-card-title">
									<h2 class="pmd-card-title-text">Title goes here</h2>
									<span class="pmd-card-subtitle-text">Secondary text</span> </div>
								<div class="pmd-card-body"> Card provide context and an entry point to more robust information and views. Don't overload card with extraneous information or actions. </div>
								<div class="pmd-card-actions">
									<button type="button" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary"><i class="material-icons pmd-sm">share</i></button>
									<button type="button" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary"><i class="material-icons pmd-sm">thumb_up</i></button>
									<button type="button" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary"><i class="material-icons pmd-sm">drafts</i></button>
								</div>
							</div>
							<!--Title, Media, Description and Action area --> 
						</div>
					</div> <!--card content types example end -->
					
				</div>
			</div> <!-- card content types code and example end -->
			
		</section> <!-- card content types end -->
		
		<!-- Configuration starts-->		
		<section class="row component-section">
			<div class="col-md-3">
				<div id="config">
					<h2>Configuration Options</h2>
				</div>
				<p>The Propeller CSS classes apply various predefined visual enhancements to the Alert. The table lists the available classes and their effects.</p>
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
									<td data-title="Propeller Classes"><code>.pmd-card</code></td>
									<td data-title="Effect">Wrapper class for card layout.</td>
									<td data-title="Remark">Required</td>
								</tr>
								<tr>
									<td data-title="Propeller Classes"><code>.pmd-card-title</code></td>
									<td data-title="Effect">Defines header section of the card</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Propeller Classes"><code>.pmd-card-title-text</code></td>
									<td data-title="Effect">Defines primary content for the title section.</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Propeller Classes"><code>.pmd-card-subtitle-text</code></td>
									<td data-title="Effect">Defines secondary content for the title section.</td>
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
									<td data-title="Propeller Classes"><code>.pmd-card-media</code></td>
									<td data-title="Effect">Defines section for the media for the card.</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Propeller Classes"><code>.pmd-card-media-inline</code></td>
									<td data-title="Effect">Used to manage spacing between inline media and text.</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Propeller Classes"><code>.pmd-card-inverse</code></td>
									<td data-title="Effect">Used to create a card with darker background.</td>
									<td data-title="Remark">Optional</td>
								</tr>
								<tr>
									<td data-title="Propeller Classes"><code>.pmd-z-depth</code></td>
									<td data-title="Effect">Used to provide shadow depth to card. Shadow depth inceases with the counting (pmd-z-depth, pmd-z-depth-1...pmd-z-depth-5)</td>
									<td data-title="Remark">Optional</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section> <!-- Configuration ends--> 
		
	</div>
</div> <!--card end-->
 

<!--footer start -->
<?php include('include/footer.php'); ?>
<!--footer end -->