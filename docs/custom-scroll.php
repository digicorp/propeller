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
					<h1 class="pmd-display1">Custom Scrollbar</h1>
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
									<input type="hidden"  name="custom-scrollbar" value="custom-scrollbar"/>
									<button name='btn_submit' value='custom-scrollbar' type="submit" onClick="downloadScroll()"  class="btn btn-default pmd-btn-raised btn-sm pmd-ripple-effect pmd-btn-flat custom-btn">Download ZIP</button>
								</form>
							</li>
						</ul><!--end dropdown menu -->
					</div>
				</div> <!--end download component button dropdown -->
			</div>
		</div>
		
	</div>
	<!-- /.container-fluid --> 
	
</nav><!--navigation end --> 

<!--Custom Scroll -->
<div class="pmd-content pmd-content-custom" id="content"> 
	
	<!--component header -->
	<div class="componant-title-bg"> 
		<div class="container">
			<div class="row">
				<!-- component title and description -->
				<div class="col-xs-12">
					<p class="lead">Custom Scrollbar is used to get rid of browser default scroll bar by utilizing jQuery UI, the feature-rich jQuery Custom Scrollbar plugin. It allows you to customize scrollbars exactly 
                    as you need them. It works on all major browsers (incl. IE 10, 9, 8, &amp; 7) and on iOS and Android. It features vertical/horizontal scrolling, mouse-wheel support, scroll easing, adjustable scrollbar 
                    height/width and more.</p>
                    <p class="lead">For more options and documentation, visit : <a href="http://manos.malihu.gr/jquery-custom-content-scroller/" target="_blank">jQuery custom content scroller</a></p>
				</div><!-- component title and description end -->
			</div> 
		</div>
	</div> <!--component header end -->
	
	<div class="container">
		
		<!-- custom scrollbars -->
		<section class="row component-section">
			
			<!-- custom scrollbar title and description -->
			<div class="col-md-3">
				<div id="default">
					<h2>Custom Scrollbar</h2>
				</div>
				<p>Initialize custom Scrollbar by adding <code>.pmd-scrollbar .mCustomScrollbar</code> to the content wrapping divison. For using multiple custom scrollbar, use different IDs - <code>#content-(id number)</code>.
        	</div> <!-- custom scrollbar title and description end-->
			
			<!-- custom scrollbar code and example -->
			<div class="col-md-9"> 
				
				<!--Default Scrollbar -->
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
								<li class="active"><a href="#default-html" data-toggle="tab">HTML</a></li>
								<li><a href="#default-css" data-toggle="tab">CSS</a></li>
								<li><a href="#default-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="default-html">
								<pre class="pre-codebox line-numbers" data-src="../components/custom-scrollbar/snippets/custom-scroll.html"></pre>
							</div>
							<div class="tab-pane" id="default-css">
								<pre class="pre-codebox line-numbers" data-src="../components/custom-scrollbar/snippets/custom-scroll.css"></pre>
							</div>
							<div class="tab-pane" id="default-js">
								<pre class="pre-codebox line-numbers" data-src="../components/custom-scrollbar/snippets/custom-scroll.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--default scrollbar example -->
					<div class="row"> 
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body"> 
									<div id="content-1" class="pmd-scrollbar mCustomScrollbar">
										<h3>Default scrollbar</h3>
										<hr/>
										<p>Highly customizable custom scrollbar jQuery plugin. Features include vertical and/or horizontal scrollbar(s), adjustable scrolling momentum, mouse-wheel (via jQuery mousewheel plugin), keyboard and touch support, ready-to-use themes and customization via CSS, RTL direction support, option parameters for full control of scrollbar functionality, methods for triggering actions like scroll-to, update, destroy etc., user-defined callbacks and more.</p>
										<p>Get started by downloading the archive which contains the plugin files (and a large amount of HTML demos and examples). Extract and upload jquery.mCustomScrollbar.concat.min.js, jquery.mCustomScrollbar.css and mCSB_buttons.png to your web server (alternatively you can load plugin files from a CDN). </p>
										<p>The element(s) you want to add scrollbar(s) should have the typical CSS properties of an overflowed block which are a height (or max-height) value, an overflow value of auto (or hidden) and content long enough to require scrolling. For horizontal scrollbar, the element should have a width (or max-width) value set. </p>
										<hr />
										<p>Add the class <code>mCustomScrollbar</code> to any element you want to add custom scrollbar(s) with default options. Optionally, set its axis via the HTML data attribute <code>data-mcs-axis</code> (e.g. "x" for horizontal and "y" for vertical) and its theme via <code>data-mcs-theme</code>.</p>
									</div>
								</div>
							</div>
							<p class="component-desc">For Default Scroll use<code>#content-1</code></p>
						</div>
					</div> <!--default scrollbar example end -->
					
				</div> <!--Default Scrollbar end -->
				
				<!-- Hover Scrollbar -->
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
								<li class="active"><a href="#hover-html" data-toggle="tab">HTML</a></li>
								<li><a href="#hover-css" data-toggle="tab">CSS</a></li>
								<li><a href="#hover-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="hover-html">
								<pre class="pre-codebox line-numbers" data-src="../components/custom-scrollbar/snippets/hover-scroll.html"></pre>
							</div>
							<div class="tab-pane" id="hover-css">
								<pre class="pre-codebox line-numbers" data-src="../components/custom-scrollbar/snippets/custom-scroll.css"></pre>
							</div>
							<div class="tab-pane" id="hover-js">
								<pre class="pre-codebox line-numbers" data-src="../components/custom-scrollbar/snippets/custom-scroll.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!--hover scrollbar example -->
					<div class="row"> 
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body">
									<div id="content-2" class="pmd-scrollbar mCustomScrollbar" data-mcs-theme="minimal-dark">
										<h3>Hover Please</h3>
										<hr />
										<p>Highly customizable custom scrollbar jQuery plugin. Features include vertical and/or horizontal scrollbar(s), adjustable scrolling momentum, mouse-wheel (via jQuery mousewheel plugin), keyboard and touch support, ready-to-use themes and customization via CSS, RTL direction support, option parameters for full control of scrollbar functionality, methods for triggering actions like scroll-to, update, destroy etc., user-defined callbacks and more.</p>
										<p>Get started by downloading the archive which contains the plugin files (and a large amount of HTML demos and examples). Extract and upload jquery.mCustomScrollbar.concat.min.js, jquery.mCustomScrollbar.css and mCSB_buttons.png to your web server (alternatively you can load plugin files from a CDN). </p>
										<p>The element(s) you want to add scrollbar(s) should have the typical CSS properties of an overflowed block which are a height (or max-height) value, an overflow value of auto (or hidden) and content long enough to require scrolling. For horizontal scrollbar, the element should have a width (or max-width) value set. </p>
										<hr />
										<p>Add the class <code>mCustomScrollbar</code> to any element you want to add custom scrollbar(s) with default options. Optionally, set its axis via the HTML data attribute <code>data-mcs-axis</code> (e.g. "x" for horizontal and "y" for vertical) and its theme via <code>data-mcs-theme</code>.</p>
										<hr />
										<p>End of content.</p>
									</div>
								</div>
							</div>
							<p class="component-desc">For Hover Scroll use<code>#content-2</code></p>
						</div>
					</div> <!--hover scrollbar example end -->
					
				</div> <!-- Hover Scrollbar end -->
				
				<!-- Outside Scrollbar -->
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
								<li class="active"><a href="#outside-html" data-toggle="tab">HTML</a></li>
								<li><a href="#outside-css" data-toggle="tab">CSS</a></li>
								<li><a href="#outside-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="outside-html">
								<pre class="pre-codebox line-numbers" data-src="../components/custom-scrollbar/snippets/outside-scroll.html"></pre>
							</div>
							<div class="tab-pane" id="outside-css">
								<pre class="pre-codebox line-numbers" data-src="../components/custom-scrollbar/snippets/custom-scroll.css"></pre>
							</div>
							<div class="tab-pane" id="outside-js">
								<pre class="pre-codebox line-numbers" data-src="../components/custom-scrollbar/snippets/outside-scroll.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!-- outside scrollbar example -->
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body"> 
									<div id="content-3" class="pmd-scrollbar">
										<h3>Scrollbar position outside card with buttons</h3>
										<hr />
										<p>Highly customizable custom scrollbar jQuery plugin. Features include vertical and/or horizontal scrollbar(s), adjustable scrolling momentum, mouse-wheel (via jQuery mousewheel plugin), keyboard and touch support, ready-to-use themes and customization via CSS, RTL direction support, option parameters for full control of scrollbar functionality, methods for triggering actions like scroll-to, update, destroy etc., user-defined callbacks and more.</p>
										<p>Get started by downloading the archive which contains the plugin files (and a large amount of HTML demos and examples). Extract and upload jquery.mCustomScrollbar.concat.min.js, jquery.mCustomScrollbar.css and mCSB_buttons.png to your web server (alternatively you can load plugin files from a CDN). </p>
										<p>The element(s) you want to add scrollbar(s) should have the typical CSS properties of an overflowed block which are a height (or max-height) value, an overflow value of auto (or hidden) and content long enough to require scrolling. For horizontal scrollbar, the element should have a width (or max-width) value set. </p>
										<hr />
										<p>Add the class <code>mCustomScrollbar</code> to any element you want to add custom scrollbar(s) with default options. Optionally, set its axis via the HTML data attribute <code>data-mcs-axis</code> (e.g. "x" for horizontal and "y" for vertical) and its theme via <code>data-mcs-theme</code>.</p>
										<hr />
										<p>End of content.</p>
									</div>
								</div>
							</div>
							<p class="component-desc">For Outside Scroll use<code>#content-3</code></p>
						</div>
					</div> <!-- outside scrollbar example end -->
					
				</div> <!-- Outside Scrollbar end -->
				
				<!-- Rounded Scrollbar -->
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
								<li class="active"><a href="#rounded-html" data-toggle="tab">HTML</a></li>
								<li><a href="#rounded-css" data-toggle="tab">CSS</a></li>
								<li><a href="#rounded-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="rounded-html">
								<pre class="pre-codebox line-numbers" data-src="../components/custom-scrollbar/snippets/rounded-scroll.html"></pre>
							</div>
							<div class="tab-pane" id="rounded-css">
								<pre class="pre-codebox line-numbers" data-src="../components/custom-scrollbar/snippets/custom-scroll.css"></pre>
							</div>
							<div class="tab-pane" id="rounded-js">
								<pre class="pre-codebox line-numbers" data-src="../components/custom-scrollbar/snippets/rounded-scroll.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!-- rounded scrollbar example -->
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-card-inverse pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body"> 
									<div id="content-4" class="pmd-scrollbar">
										<h3>theme: "rounded-dots" with less momentum</h3>
										<hr />
										<p>Highly customizable custom scrollbar jQuery plugin. Features include vertical and/or horizontal scrollbar(s), adjustable scrolling momentum, mouse-wheel (via jQuery mousewheel plugin), keyboard and touch support, ready-to-use themes and customization via CSS, RTL direction support, option parameters for full control of scrollbar functionality, methods for triggering actions like scroll-to, update, destroy etc., user-defined callbacks and more.</p>
										<p>Get started by downloading the archive which contains the plugin files (and a large amount of HTML demos and examples). Extract and upload jquery.mCustomScrollbar.concat.min.js, jquery.mCustomScrollbar.css and mCSB_buttons.png to your web server (alternatively you can load plugin files from a CDN). </p>
										<p>The element(s) you want to add scrollbar(s) should have the typical CSS properties of an overflowed block which are a height (or max-height) value, an overflow value of auto (or hidden) and content long enough to require scrolling. For horizontal scrollbar, the element should have a width (or max-width) value set. </p>
										<hr />
										<p>Add the class <code>mCustomScrollbar</code> to any element you want to add custom scrollbar(s) with default options. Optionally, set its axis via the HTML data attribute <code>data-mcs-axis</code> (e.g. "x" for horizontal and "y" for vertical) and its theme via <code>data-mcs-theme</code>.</p>
										<hr />
										<p>End of content.</p>
									</div>
								</div>
							</div>
							<p class="component-desc">For Rounded dots with inverse color : use<code>#content-4</code></p>
						</div>
					</div> <!-- rounded scrollbar example end -->
					
				</div> <!-- Rounded Scrollbar end -->
				
				<!-- 3D Scrollbar -->
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
								<li class="active"><a href="#3d-html" data-toggle="tab">HTML</a></li>
								<li><a href="#3d-css" data-toggle="tab">CSS</a></li>
								<li><a href="#3d-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="3d-html">
								<pre class="pre-codebox line-numbers" data-src="../components/custom-scrollbar/snippets/3d-scroll.html"></pre>
							</div>
							<div class="tab-pane" id="3d-css">
								<pre class="pre-codebox line-numbers" data-src="../components/custom-scrollbar/snippets/custom-scroll.css"></pre>
							</div>
							<div class="tab-pane" id="3d-js">
								<pre class="pre-codebox line-numbers" data-src="../components/custom-scrollbar/snippets/3d-scroll.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
					<!-- 3d scrollbar example -->
					<div class="row">
						<div class="col-md-12">
							<div class="pmd-card pmd-card-inverse pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body"> 
									<div id="content-7" class="pmd-scrollbar">
										<h3>theme: "3d-thick"</h3>
										<hr />
										<p>Highly customizable custom scrollbar jQuery plugin. Features include vertical and/or horizontal scrollbar(s), adjustable scrolling momentum, mouse-wheel (via jQuery mousewheel plugin), keyboard and touch support, ready-to-use themes and customization via CSS, RTL direction support, option parameters for full control of scrollbar functionality, methods for triggering actions like scroll-to, update, destroy etc., user-defined callbacks and more.</p>
										<p>Get started by downloading the archive which contains the plugin files (and a large amount of HTML demos and examples). Extract and upload jquery.mCustomScrollbar.concat.min.js, jquery.mCustomScrollbar.css and mCSB_buttons.png to your web server (alternatively you can load plugin files from a CDN). </p>
										<p>The element(s) you want to add scrollbar(s) should have the typical CSS properties of an overflowed block which are a height (or max-height) value, an overflow value of auto (or hidden) and content long enough to require scrolling. For horizontal scrollbar, the element should have a width (or max-width) value set. </p>
										<hr />
										<p>Add the class <code>mCustomScrollbar</code> to any element you want to add custom scrollbar(s) with default options. Optionally, set its axis via the HTML data attribute <code>data-mcs-axis</code> (e.g. "x" for horizontal and "y" for vertical) and its theme via <code>data-mcs-theme</code>.</p>
										<hr />
										<p>End of content.</p>
									</div>
								</div>
							</div>
							<p class="component-desc">For 3d thik scroller : use<code>#content-7</code></p>
						</div>
					</div> <!-- 3d scrollbar example end -->
				</div> <!-- 3D Scrollbar end -->
				
				<!-- Snap Scrollbar -->
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
								<li class="active"><a href="#snap-html" data-toggle="tab">HTML</a></li>
								<li><a href="#snap-css" data-toggle="tab">CSS</a></li>
								<li><a href="#snap-js" data-toggle="tab">JS</a></li>
							</ul>
						</div>
						<div id="my-tab-content" class="tab-content">
							<div class="tab-pane active" id="snap-html">
								<pre class="pre-codebox line-numbers" data-src="../components/custom-scrollbar/snippets/snap-scroll.html"></pre>
							</div>
							<div class="tab-pane" id="snap-css">
								<pre class="pre-codebox line-numbers" data-src="../components/custom-scrollbar/snippets/custom-scroll.css"></pre>
							</div>
							<div class="tab-pane" id="snap-js">
								<pre class="pre-codebox line-numbers" data-src="../components/custom-scrollbar/snippets/snap-scroll.js"></pre>
							</div>
						</div>
					</div> <!-- code view end -->
					
				</div> <!-- Snap Scrollbar end -->
				
			</div> <!-- custom scrollbar code and example end-->
		</section> <!-- custom scrollbars end -->
		
	</div>
</div> <!--Custom Scroll end --> 

<!--footer start -->
<?php include('include/footer.php'); ?>
<!--footer end -->