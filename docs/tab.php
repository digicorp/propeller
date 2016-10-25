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
					<h1 class="pmd-display1">Tab</h1>
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
									<input type="hidden"  name="tab" value="tab"/>
									<button name='btn_submit' value='tab' type="submit" onClick="downloadTab()" class="btn btn-default pmd-btn-raised btn-sm pmd-ripple-effect pmd-btn-flat custom-btn">Download ZIP</button>
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
	
<!-- Tab -->
<div class="pmd-content pmd-content-custom" id="content">

	<!-- Component header -->
	<div class="componant-title-bg"> 	
		<div class="container">
			<div class="row">
			
				<!-- component title and description -->
				<div class="col-xs-12">
                    <p class="lead">Tab is an HTML component that makes exploring and switching between different views easier.</p>
				</div> <!-- end component title and description -->
				
			</div>
		</div>		
	</div><!-- end component header -->
	
	<div class="container"> 	
        <!-- component list catagory -->
        <div class="list-group list-group-custom margin-20">
			<a class="list-group-item" href="#bootstrap-basic-tab">Bootstrap Tabs</a>
            <a class="list-group-item" href="#propeller-basic-tab">Propeller Tabs</a>
            <a class="list-group-item" href="#fixed-tab">Fixed Tabs</a>
            <a class="list-group-item" href="#scrollable-tab">Scrollable Tabs</a>
            <a class="list-group-item" href="#tab-with-dropdown">Tabs with Dropdown</a>
            <!--<a class="list-group-item" href="#centered">Tab bar centered </a>-->
            <a class="list-group-item" href="#tab-without-background">Tabs without background</a>
            <a class="list-group-item" href="#config">Configuration Options</a>
            <a class="list-group-item" href="#events">Events</a>
        </div><!-- end component list catagory -->
		
		<!-- Basic Bootstrap tab -->
		<section class="row component-section">
			
			<!-- Basic Bootstrap tab title and description -->
			<div class="col-md-3">
				<div id="bootstrap-basic-tab">
					<h2>Bootstrap Tabs</h2>
				</div>
				<p>Bootstrap Tabs add quick, dynamic tab functionality to transition through panes of local content, even via dropdown menus.</p>
			</div> <!-- Basic Bootstrap tab title and description end -->
			
			<!-- Basic Bootstrap tab example and code -->
			<div class="col-md-9 col-sm-12"> 
				<div class="component-box">
                    <!--code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
                    	<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
                    </div> <!-- code view button end-->
					
					<!-- code view -->
				    <div class="code-box">
               			<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#bootstrap-tab-html" aria-controls="bootstrap-tab-html" data-toggle="tab">HTML</a></li>
								<li><a href="#bootstrap-tab-css" aria-controls="bootstrap-tab-css" data-toggle="tab">CSS</a></li>
								<li><a href="#bootstrap-tab-js" aria-controls="bootstrap-tab-js" data-toggle="tab">JS</a></li>
							</ul>
                        </div>
						
						<div class="tab-content">
							<div class="tab-pane active" id="bootstrap-tab-html">
								<pre class="pre-codebox line-numbers" data-src="../components/tab/snippets/tabs-bootstrap.html"></pre>
							</div>
							<div class="tab-pane" id="bootstrap-tab-css">
								<pre class="pre-codebox line-numbers" data-src="../components/tab/snippets/tabs-bootstrap.css"></pre>
							</div>
							<div class="tab-pane" id="bootstrap-tab-js">
								<pre class="pre-codebox line-numbers" data-src="../components/tab/snippets/tabs-bootstrap.js"></pre>
							</div>
						</div>
                    </div> <!-- end code view -->
					
					<!--Basic Bootstrap tab example -->
					<div> 
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#bootstrap-home" aria-controls="home" role="tab" data-toggle="tab">Default</a></li>
							<li role="presentation"><a href="#bootstrap-about" aria-controls="about" role="tab" data-toggle="tab">Fixed</a></li>
							<li role="presentation"><a href="#bootstrap-work" aria-controls="work" role="tab" data-toggle="tab">Scrollable</a></li>
						</ul>
						<div class="pmd-card">
							<div class="pmd-card-body">
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tablist" class="tab-pane active" id="bootstrap-home">A tab provides the affordance for displaying grouped content. A tab label succinctly describes the tab’s associated grouping of content.</div>
									<div role="tablist" class="tab-pane" id="bootstrap-about">Fixed tabs have equal width, calculated either as the view width divided by the number of tabs, or based on the widest tab label. To navigate between fixed tabs, touch the tab or swipe the content area left or right.</div>
									<div role="tablist" class="tab-pane" id="bootstrap-work">To navigate between scrollable tabs, touch the tab or swipe the content area left or right. To scroll the tabs without navigating, swipe the tabs left or right.</div>
								</div>
							</div>
						</div>
					</div> <!--Basic Bootstrap tab example end-->
					
				</div>
			</div> <!-- end Basic Bootstrap example and code -->
			
		</section><!-- end Basic Bootstrap tab --> 
		
		<!-- Default tab -->
		<section class="row component-section">
			
			<!-- Default tab title and description -->
			<div class="col-md-3">
				<div id="propeller-basic-tab">
					<h2>Propeller Tabs</h2>
				</div>
				<p>Propeller Tabs consist of Bootstrap HTML structure with Propeller customized classes and jQuery based on material design standards. Add <code>.pmd-tabs</code> to nav tag for applying Propeller Theme to the tabs. <code>.pmd-tabs-bg</code> is used to add a background to the tabs.</p>
			</div> <!-- Default tab title and description end -->
			
			<!-- Default tab example and code -->
			<div class="col-md-9 col-sm-12"> 
				<div class="component-box">
                    <!--code view button -->
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
								<pre class="pre-codebox line-numbers" data-src="../components/tab/snippets/tabs-default.html"></pre>
							</div>
							<div class="tab-pane" id="default-tab-css">
								<pre class="pre-codebox line-numbers" data-src="../components/tab/snippets/tabs.css"></pre>
							</div>
							<div class="tab-pane" id="default-tab-js">
								<pre class="pre-codebox line-numbers" data-src="../components/tab/snippets/tabs.js"></pre>
							</div>
						</div>
                    </div> <!-- end code view -->
					
					<!--Default tab example -->
					<div class="pmd-card pmd-z-depth"> 
						<div class="pmd-tabs pmd-tabs-bg">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Default</a></li>
								<li role="presentation"><a href="#about" aria-controls="about" role="tab" data-toggle="tab">Fixed</a></li>
								<li role="presentation"><a href="#work" aria-controls="work" role="tab" data-toggle="tab">Scrollable</a></li>
							</ul>
						</div>
						<div class="pmd-card-body">
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="home">A tab provides the affordance for displaying grouped content. A tab label succinctly describes the tab’s associated grouping of content.</div>
								<div role="tabpanel" class="tab-pane" id="about">Fixed tabs have equal width, calculated either as the view width divided by the number of tabs, or based on the widest tab label. To navigate between fixed tabs, touch the tab or swipe the content area left or right.</div>
								<div role="tabpanel" class="tab-pane" id="work">To navigate between scrollable tabs, touch the tab or swipe the content area left or right. To scroll the tabs without navigating, swipe the tabs left or right.</div>
							</div>
						</div>
					</div> <!--Default tab example end-->
					
				</div>
			</div> <!-- end Default example and code -->
			
		</section><!-- end default tab --> 
		
        <!-- Fixed tab -->
		<section class="row component-section">
			
			<!-- Fixed tab title and description -->
			<div class="col-md-3 col-sm-12">
				<div id="fixed-tab">
					<h2>Equal Width Tabs</h2>
				</div>
				<p>Equal Width Tabs have same width, calculated either as the view width divided by the number of tabs, or based on the widest tab label. Add <code>.nav-justified</code> to the list to create fixed tabs.</p>
			</div> <!-- end fixed title tab and description -->
			
			<!-- Fixed tab example and code -->
			<div class="col-md-9 col-sm-12"> 
				<div class="component-box">
                    <!--code view button -->
					<div class="pmd-card-title custom-heading clearfix">
                    	<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
                    </div> <!-- code view button end-->
					
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
								<pre class="pre-codebox line-numbers" data-src="../components/tab/snippets/fixed-tab.html"></pre>
							</div>
							<div class="tab-pane" id="fixed-tab-css">
								<pre class="pre-codebox line-numbers" data-src="../components/tab/snippets/tabs.css"></pre>
							</div>
							<div class="tab-pane" id="fixed-tab-js">
								<pre class="pre-codebox line-numbers" data-src="../components/tab/snippets/tabs.js"></pre>
							</div>
						</div>
                    </div> <!-- end code view -->
					
					<!--Fixed tab example -->
                    <div class="pmd-card pmd-z-depth">
					  <div class="pmd-tabs pmd-tabs-bg">
					  	  <div class="pmd-tab-active-bar"></div>
						  <ul role="tablist" class="nav nav-tabs nav-justified">
							<li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="home" href="#home-fixed">Default</a></li>
							<li role="presentation"><a data-toggle="tab" role="tab" aria-controls="profile" href="#about-fixed">Fixed</a></li>
							<li role="presentation"><a data-toggle="tab" role="tab" aria-controls="messages" href="#work-fixed">Scrollable</a></li>
						  </ul>
					  </div>
					  <div class="pmd-card-body">
						  <div class="tab-content">
						  	<div role="tabpanel" class="tab-pane active" id="home-fixed">A tab provides the affordance for displaying grouped content. A tab label succinctly describes the tab’s associated grouping of content.</div>
							<div role="tabpanel" class="tab-pane" id="about-fixed">Fixed tabs have equal width, calculated either as the view width divided by the number of tabs, or based on the widest tab label. To navigate between fixed tabs, touch the tab or swipe the content area left or right.</div>
							<div role="tabpanel" class="tab-pane" id="work-fixed">To navigate between scrollable tabs, touch the tab or swipe the content area left or right. To scroll the tabs without navigating, swipe the tabs left or right.</div>
						  </div>
					  </div>
					</div> <!--Fixed tab example end-->
					
				</div>
			</div> <!-- end Fixed example and code -->
			
		</section> <!-- end fixed tab  -->
         
		
		<!-- Scrollable tab -->
		<section class="row component-section">
			
			<!-- Scrollable tab title and description -->
			<div class="col-md-3 col-sm-12">
				<div id="scrollable-tab">
					<h2>Scrollable Tabs</h2>
				</div>
				<p>Scrollable tabs display a subset of tabs at any given moment. They can contain longer tab labels and a larger number of tabs than fixed tabs. Add <code>.pmd-tabs-scroll</code> to the nav tag to create scrollable tabs. Also, a div with <code>.pmd-tabs-scroll-container</code> needs to be added.</p>
			</div> <!-- end scrollable tab title and description -->
			
			<!-- scrollable tab example and code -->
			<div class="col-md-9 col-sm-12"> 
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
								<li class="active"><a href="#scroll-tab-html" data-toggle="tab">HTML</a></li>
								<li><a href="#scroll-tab-css" data-toggle="tab">CSS</a></li>
								<li><a href="#scroll-tab-js" data-toggle="tab">JS</a></li>
							</ul>
                        </div>						
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="scroll-tab-html">
								<pre class="pre-codebox line-numbers" data-src="../components/tab/snippets/scrollable-tab.html"></pre>
							</div>
							<div class="tab-pane" id="scroll-tab-css">
								<pre class="pre-codebox line-numbers" data-src="../components/tab/snippets/scrollable-tab.css"></pre>
							</div>
							<div class="tab-pane" id="scroll-tab-js">
								<pre class="pre-codebox line-numbers" data-src="../components/tab/snippets/tabs.js"></pre>
							</div>
						</div>
                    </div> <!-- end code view -->
					
					<!--Scrollable tab example -->
					<div class="pmd-card pmd-z-depth"> 
						<div class="pmd-tabs pmd-tabs-scroll pmd-tabs-bg">
							<div class="pmd-tabs-scroll-left"><i class="material-icons pmd-sm">chevron_left</i></div>
						    <div class="pmd-tabs-scroll-container pmd-z-depth" style="cursor: grab;">
								<div class="pmd-tab-active-bar"></div>
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#home-scrollable" aria-controls="home" role="tab" data-toggle="tab">Default</a></li>
									<li role="presentation"><a href="#about-scrollable" aria-controls="about" role="tab" data-toggle="tab">Fixed</a></li>
									<li role="presentation"><a href="#work-scrollable" aria-controls="work" role="tab" data-toggle="tab">Scrollable</a></li>
									<li role="presentation"><a href="#home-scrollable" aria-controls="home" role="tab" data-toggle="tab">Default</a></li>
									<li role="presentation"><a href="#about-scrollable" aria-controls="about" role="tab" data-toggle="tab">Fixed</a></li>
									<li role="presentation"><a href="#work-scrollable" aria-controls="work" role="tab" data-toggle="tab">Scrollable</a></li>
									<li role="presentation"><a href="#home-scrollable" aria-controls="home" role="tab" data-toggle="tab">Default</a></li>
									<li role="presentation"><a href="#about-scrollable" aria-controls="about" role="tab" data-toggle="tab">Fixed</a></li>
									<li role="presentation"><a href="#work-scrollable" aria-controls="work" role="tab" data-toggle="tab">Scrollable</a></li>
									<li role="presentation"><a href="#home-scrollable" aria-controls="home" role="tab" data-toggle="tab">Default</a></li>
									<li role="presentation"><a href="#about-scrollable" aria-controls="about" role="tab" data-toggle="tab">Fixed</a></li>
									<li role="presentation"><a href="#work-scrollable" aria-controls="work" role="tab" data-toggle="tab">Scrollable</a></li>
									<li role="presentation"><a href="#home-scrollable" aria-controls="home" role="tab" data-toggle="tab">Default</a></li>
									<li role="presentation"><a href="#about-scrollable" aria-controls="about" role="tab" data-toggle="tab">Fixed</a></li>
									<li role="presentation"><a href="#work-scrollable" aria-controls="work" role="tab" data-toggle="tab">Scrollable</a></li>
								</ul>
							</div>
    						<div class="pmd-tabs-scroll-right"><i class="material-icons pmd-sm">chevron_right</i></div>	
						</div>
						<div class="pmd-card-body">
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="home-scrollable">A tab provides the affordance for displaying grouped content. A tab label succinctly describes the tab’s associated grouping of content.</div>
								<div role="tabpanel" class="tab-pane" id="about-scrollable">Fixed tabs have equal width, calculated either as the view width divided by the number of tabs, or based on the widest tab label. To navigate between fixed tabs, touch the tab or swipe the content area left or right.</div>
								<div role="tabpanel" class="tab-pane" id="work-scrollable">To navigate between scrollable tabs, touch the tab or swipe the content area left or right. To scroll the tabs without navigating, swipe the tabs left or right.</div>
							</div>
						</div>
					</div> <!--Scrollable tab example end-->
                    		
				</div>
			</div> <!-- end Scrollable example and code -->
			
		</section> <!-- end scrollable tab  --> 
        
		<!-- Tab with Dropdown -->
		<section class="row component-section">	
			
            <!-- Tab with Dropdown title and description -->
			<div class="col-md-3 col-sm-12">
				<div id="tab-with-dropdown">
					<h2>Tabs with Dropdown</h2>
				</div>
				<p>Add <a href="dropdown.php" target="_blank">Propeller's Dropdown menu</a> to make it a part of tab. To do so create a drop down list within the tablist and add <code>.dropdown-menu</code> to it.</p>
			</div> <!-- end Tab with Dropdown title and description -->
			
			<!-- Tab with Dropdown example and code -->
			<div class="col-md-9 col-sm-12"> 
				<div class=" component-box">
                
					<!--code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
                    	<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
                    </div> <!-- code view button end-->
					
					<!--code view -->
					<div class="code-box">
               			<div class="pmd-tabs">
                      		<div class="pmd-tab-active-bar"></div> 
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#dropdown-tab-html" data-toggle="tab">HTML</a></li>
								<li><a href="#dropdown-tab-css" data-toggle="tab">CSS</a></li>
								<li><a href="#dropdown-tab-js" data-toggle="tab">JS</a></li>
							</ul>
                        </div>
						
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="dropdown-tab-html">
								<pre class="pre-codebox line-numbers" data-src="../components/tab/snippets/tab-with-dropdown.html"></pre>
							</div>
							<div class="tab-pane" id="dropdown-tab-css">
								<pre class="pre-codebox line-numbers" data-src="../components/tab/snippets/tab-with-dropdown.css"></pre>
							</div>
							<div class="tab-pane" id="dropdown-tab-js">
								<pre class="pre-codebox line-numbers" data-src="../components/tab/snippets/tab-with-dropdown.js"></pre>
							</div>
						</div>
                    </div> <!-- code view end -->
					
					<!--Tab with Dropdown example -->
					<div class="pmd-card pmd-z-depth dropdown-tab"> 
						<div class="pmd-tabs pmd-tabs-bg">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#home-dropdown" aria-controls="home" role="tab" data-toggle="tab">Default</a></li>
								<li role="presentation"><a href="#about-dropdown" aria-controls="about" role="tab" data-toggle="tab">Fixed</a></li>
								<li role="presentation"><a href="#work-dropdown" aria-controls="work" role="tab" data-toggle="tab">Scrollable</a></li>
								<li class="dropdown pmd-dropdown" role="presentation"> <a aria-expanded="false" role="button" href="javascript:void(0);" data-toggle="dropdown" class="dropdown-toggle"> More <span class="caret"></span> </a>
									<ul role="menu" class="dropdown-menu">
										<li><a href="javascript:void(0);">Profile</a></li>
										<li><a href="javascript:void(0);">Messages</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="pmd-card-body">
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="home-dropdown">A tab provides the affordance for displaying grouped content. A tab label succinctly describes the tab’s associated grouping of 
                                content.</div>
								<div role="tabpanel" class="tab-pane" id="about-dropdown">Fixed tabs have equal width, calculated either as the view width divided by the number of tabs, or based on the widest tab label. To 
                                navigate between fixed tabs, touch the tab or swipe the content area left or right.</div>
								<div role="tabpanel" class="tab-pane" id="work-dropdown">To navigate between scrollable tabs, touch the tab or swipe the content area left or right. To scroll the tabs without navigating, swipe the                                tabs left or right.</div>
							</div>
						</div>
					</div> <!--Tab with Dropdown example end-->
                    	
				</div>
			</div> <!-- end Tab with Dropdown example and code -->
		</section> <!-- end dropdown tab  -->
		
		<!-- without background tab -->
		<section class="row component-section">
			
			<!-- without background tab title and description -->
			<div class="col-md-3 col-sm-12">
				<div id="tab-without-background">
					<h2>Tabs without background</h2>
				</div>
				<p>Remove <code>.pmd-tabs-bg</code> to remove the background color/background image.</p>
			</div> <!-- without background tab title and description end-->
			
			<!-- without background tab code and example -->
			<div class="col-md-9 col-sm-12">
            	<div class=" component-box"> 
            
                    <!--code view button -->
					<div class="pmd-card-title custom-heading clearfix"> 
                    	<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
                    </div> <!-- code view button end-->                    
					
					<!-- code view -->
					<div class="code-box">
                    	<div class="pmd-tabs">
                     	 	<div class="pmd-tab-active-bar"></div> 
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li class="active"><a href="#bg-tab-html" data-toggle="tab">HTML</a></li>
								<li><a href="#bg-tab-css" data-toggle="tab">CSS</a></li>
								<li><a href="#bg-tab-js" data-toggle="tab">JS</a></li>
							</ul>
                        </div>
						
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="bg-tab-html">
								<pre class="pre-codebox line-numbers" data-src="../components/tab/snippets/tab-without-background.html"></pre>
							</div>
							<div class="tab-pane" id="bg-tab-css">
								<pre class="pre-codebox line-numbers" data-src="../components/tab/snippets/tabs.css"></pre>
							</div>
							<div class="tab-pane" id="bg-tab-js">
								<pre class="pre-codebox line-numbers" data-src="../components/tab/snippets/tabs.js"></pre>
							</div>
						</div>
                    </div> <!-- end code view --> 
					
					<!--without background tab example -->
					<div class="pmd-card pmd-z-depth"> 
						<div class="pmd-tabs">
							<div class="pmd-tab-active-bar"></div>
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#default" aria-controls="default" role="tab" data-toggle="tab">Default</a></li>
								<li role="presentation"><a href="#fixed" aria-controls="fixed" role="tab" data-toggle="tab">Fixed</a></li>
								<li role="presentation"><a href="#scrollable" aria-controls="scrollable" role="tab" data-toggle="tab">Scrollable</a></li>
							</ul>
						</div>
						<div class="pmd-card-body">
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="default">A tab provides the affordance for displaying grouped content. A tab label succinctly describes the tab’s associated grouping of content.</div>
								<div role="tabpanel" class="tab-pane" id="fixed">Fixed tabs have equal width, calculated either as the view width divided by the number of tabs, or based on the widest tab label. To navigate between fixed tabs, touch the tab or swipe the content area left or right.</div>
								<div role="tabpanel" class="tab-pane" id="scrollable">To navigate between scrollable tabs, touch the tab or swipe the content area left or right. To scroll the tabs without navigating, swipe the tabs left or right.</div>
							</div>
						</div>
					</div> <!--without background tab example end -->
            	</div>
                    
			</div> <!-- without background tab code and example end -->
			
		</section> <!-- end without background tab -->
        
        <!-- Configuration starts-->            
        <section class="row component-section">
            <div class="col-md-3 col-sm-12">
                <div id="config">
                    <h2>Configuration Options</h2>
                </div>
                <p>The Propeller CSS classes apply various predefined visual enhancements to the tabs. The table lists the available classes and their effects.</p>
            </div>
            
            <div class="col-md-9 col-sm-12">
            
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
                                    <td data-title="Class"><code>.pmd-tabs</code></td>
                                    <td data-title="Effect">Add Propeller css to the tabs.</td>
                                    <td data-title="Remark">Required</td>
                                </tr>
                                <tr>
                                    <td data-title="Class"><code>.pmd-tab-active-bar</code></td>
                                    <td data-title="Effect">Used to highlight active tab with a line bar.</td>
                                    <td data-title="Remark">Required</td>
                                </tr>
                                <tr>
                                    <td data-title="Class"><code>.pmd-tabs-scroll</code></td>
                                    <td data-title="Effect">Add this class while creating scrollable tabs.</td>
                                    <td data-title="Remark">Required</td>
                                </tr>
                                <tr>
                                    <td data-title="Class"><code>.pmd-tabs-scroll-container</code></td>
                                    <td data-title="Effect">Add this wrapper class to the list of tabs while creating scrollable tabs.</td>
                                    <td data-title="Remark">Required</td>
                                </tr>
                                <tr>
                                    <td data-title="Class"><code>.pmd-tabs-bg</code></td>
                                    <td data-title="Effect">Adds background css to the tabs.</td>
                                    <td data-title="Remark">Optional</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div><!--Propeller  Class Configuration card end -->
        
        	</div>
        </section><!-- Configuration ends-->         
		
		<!-- Events starts-->		
		<section class="row component-section">
        
			<div class="col-md-3 col-sm-12">
            	<div id="events">
            		<h2>Events</h2>
                </div>
				<p>See <a href="http://getbootstrap.com/javascript/#tabs" target="_blank">here</a> for more documentation on this.</p>
			</div>
            
			<div class="col-md-9 col-sm-12"> 
				
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
									<td data-title="Class"><code>show.bs.tab</code></td>
									<td data-title="Effect">This event fires on tab show, but before the new tab has been shown. Use <code>event.target</code> and <code>event.relatedTarget</code> to target the active tab and the previous active tab (if available) respectively.</td>
								</tr>
								<tr>
									<td data-title="Class"><code>shown.bs.tab</code></td>
									<td data-title="Effect">This event fires on tab show after a tab has been shown. Use <code>event.target</code> and <code>event.relatedTarget</code> to target the active tab and the previous active tab (if available) respectively.</td>
								</tr>
								<tr>
									<td data-title="Class"><code>hide.bs.tab</code></td>
									<td data-title="Effect">This event fires when a new tab is to be shown (and thus the previous active tab is to be hidden). Use <code>event.target</code> and <code>event.relatedTarget</code> to target the current active tab and the new soon-to-be-active tab, respectively.</td>
								</tr>
								<tr>
									<td data-title="Class"><code>hidden.bs.tab</code></td>
									<td data-title="Effect">This event fires after a new tab is shown (and thus the previous active tab is hidden). Use <code>event.target</code> and <code>event.relatedTarget</code> to target the previous active tab and the new active tab, respectively.</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div><!--Events card end -->
				
				<div class="pmd-card pmd-z-depth js-script pmd-card-custom">
					<pre class="pre-codebox line-numbers" data-src="../components/tab/snippets/events.js"></pre>
				</div>
			</div>
		</section><!-- Events ends-->
		 
	</div>
</div><!--Tab constructor End--> 
	
<!--footer start -->
<?php include('include/footer.php'); ?>
<!--footer end -->