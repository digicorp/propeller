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
					<h1 class="pmd-display1">Tooltip</h1>
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
									<input type="hidden"  name="tooltip" value="tooltip"/>
									<button name='btn_submit' value='tooltip' type="submit" onClick="downloadTooltip()" class="btn btn-default pmd-btn-raised btn-sm pmd-ripple-effect pmd-btn-flat custom-btn">Download ZIP</button>
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

<!--Tooltip -->
<div class="pmd-content pmd-content-custom tooltip-component" id="content">

	<!-- component header -->
    <div class="componant-title-bg">
        <div class="container">
            <div class="row">
            
            	<!-- component title and description -->
                <div class="col-xs-12">
                    <p class="lead">Tooltip is a small "hover box" containing information about the item being hovered over. Tooltip appears on hover over an element with the cursor, or focus on an element using a keyboard (usually through the tab key), or upon touch (without releasing) in a touch UI.</p>
                </div><!--end component title and description -->
                
            </div>
        </div>
    </div><!-- end component header -->
    
    <div class="container">
	
		<!-- component listing -->
			<div class="list-group list-group-custom margin-20"> 
				<a class="list-group-item" href="#bootbasic">Bootstrap Tooltip</a> 
				<a class="list-group-item" href="#basic">Propeller Tooltip</a>  
			</div><!--end component listing -->	
	
	
		<!-- Basic Bootstrap Tooltip -->
        <section class="row component-section">
        
        	<!-- Basic Bootstrap Tooltip title and description -->
            <div class="col-md-3">
                <div id="bootbasic">
                    <h2>Bootstrap Tooltip</h2>
                </div>
				<p>It is an updated version, which don't rely on images, use CSS3 for animations, and data-attributes for local title storage. Tooltip with zero-length titles is never displayed.</p>
            </div><!-- end Basic Bootstrap Tooltip title and description -->
            
            <!-- Basic Bootstrap Tooltip code and example -->
            <div class="col-md-9">
                <div class="component-box">
                
                	<!-- code view button -->
                    <div class="pmd-card-title custom-heading clearfix">
                        <a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
                    </div><!--end code view button -->
                    
                    <!-- code view -->
                    <div class="code-box">
                    	<div class="pmd-tabs">
                        	<div class="pmd-tab-active-bar"></div>  
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="active"><a href="#basic-html" data-toggle="tab">HTML</a></li>
                                <li><a href="#basic-css" data-toggle="tab">CSS</a></li>
                                <li><a href="#basic-js" data-toggle="tab">JS</a></li>
                            </ul>
                        </div>
                    	<div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="basic-html">
                                <pre class="pre-codebox line-numbers" data-src="../components/tooltip/snippets/basic-bootstrap-tooltip.html"></pre>
                            </div>
                            <div class="tab-pane" id="basic-css">
                                <pre class="pre-codebox line-numbers" data-src="../components/tooltip/snippets/tooltip-bootstrap.css"></pre>
                            </div>
                            <div class="tab-pane" id="basic-js">
                                <pre class="pre-codebox line-numbers" data-src="../components/tooltip/snippets/tooltip-bootstrap.js"></pre> 
                            </div>
                        </div>
                    </div><!--end code view -->
                        
                    <!-- Basic Bootstrap Tooltip example -->
                    <div class="row">
                        <div class="col-md-12 tooltip-card-custom">
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body text-center">
                                    <!--Tooltip on left -->
                                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
                                    <!--Tooltip on right -->
                                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
                                    <!--Tooltip on top -->
                                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
                                    <!--Tooltip on bottom -->
                                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- Basic Bootstrap Tooltip example end-->
                    
                </div>
            </div><!-- Basic Bootstrap Tooltip code and example end-->
            
        </section><!--end Basic Bootstrap Tooltip -->

        <!-- Propeller Tooltip -->
        <section class="row component-section">
        
        	<!-- Propeller Tooltip title and description -->
            <div class="col-md-3">
                <div id="basic">
                    <h2>Propeller Tooltip</h2>
                </div>
				<p>Propeller tooltip uses basic Bootstrap Tooltip customized with Material Standards. To initialize the Propeller Tooltip, add the HTML attribute <code>data-toggle="tooltip"</code>. Add <code>.pmd-tooltip</code> to apply propeller theme and animations. To define the tooltip position, use <code>data-placement</code> attribute. <code>data-placement</code> attribute can take left, right, top and bottom as values.</p>
               <!-- <p class="tooltip-note"><strong>Note:</strong> Tooltips don’t display rich information like images and formatted text neither they have directional arrows; instead, they rely on motion emanating from the source to convey direction.</p>-->
            </div><!-- end Propeller Tooltip title and description -->
            
            <!-- Propeller Tooltip code and example -->
            <div class="col-md-9">
                <div class="component-box">
                
                	<!-- code view button -->
                    <div class="pmd-card-title custom-heading clearfix">
                        <a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
                    </div><!--end code view button -->
                    
                    <!-- code view -->
                    <div class="code-box">
                    	<div class="pmd-tabs">
                        	<div class="pmd-tab-active-bar"></div>  
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="active"><a href="#propeller-tooltip-html" data-toggle="tab">HTML</a></li>
                                <li><a href="#propeller-tooltip-css" data-toggle="tab">CSS</a></li>
                                <li><a href="#propeller-tooltip-js" data-toggle="tab">JS</a></li>
                            </ul>
                        </div>
                    	<div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="propeller-tooltip-html">
                                <pre class="pre-codebox line-numbers" data-src="../components/tooltip/snippets/tooltip.html"></pre>
                            </div>
                            <div class="tab-pane" id="propeller-tooltip-css">
                                <pre class="pre-codebox line-numbers" data-src="../components/tooltip/snippets/tooltip.css"></pre>
                            </div>
                            <div class="tab-pane" id="propeller-tooltip-js">
                                <pre class="pre-codebox line-numbers" data-src="../components/tooltip/snippets/tooltip.js"></pre> 
                            </div>
                        </div>
                    </div><!--end code view -->
                        
                    <!-- Propeller Tooltip example -->
                    <div class="row">
                        <div class="col-md-12 tooltip-card-custom">
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body text-center">
                                    <!--Tooltip on left -->
                                    <button type="button" class="btn pmd-btn-raised pmd-tooltip btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
                                    <!--Tooltip on right -->
                                    <button type="button" class="btn pmd-btn-raised pmd-tooltip btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
                                    <!--Tooltip on top -->
                                    <button type="button" class="btn pmd-btn-raised pmd-tooltip btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
                                    <!--Tooltip on bottom -->
                                    <button type="button" class="btn pmd-btn-raised pmd-tooltip btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p>Hover over the link below to see tooltip</p>
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <p style="color:rgba(0,0,0,0.54)">Propeller is the combination of <a href="javascript:void(0);" class="pmd-tooltip" data-toggle="tooltip" data-placement="top" title="Material design is a visual language for our users that synthesizes the classic principles of good design with the innovation and possibility of technology and science."><strong>Material Design</strong></a> and <a href="javascript:void(0);" class="pmd-tooltip" data-toggle="tooltip" data-placement="bottom" title="Bootstrap is the most popular HTML, CSS, and JS framework in the world for building responsive, mobile-first projects on the web."><strong>Bootstrap</strong></a> that makes your website more attractive, consistent, and functionally powerful. The Propeller components are created with CSS, JavaScript, and HTML. You can use the components to construct web pages and web apps that are attractive, consistent, and functional. By using Propeller components, you can get basic structure of your design and also customise it easily. </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- Propeller Tooltip example end-->
                    
                </div>
            </div><!-- Propeller Tooltip code and example end-->
            
        </section><!--end Propeller Tooltip -->
        
        <!-- Configuration starts-->        
        <section class="row component-section">
            <div class="col-md-3">
                <div id="config">
                    <h2>Configuration Options</h2>
                </div>
                <p> The table lists some HTML attributes that are required for positioning and styling of the tooltip.</p>
            </div>
            
            <div class="col-md-9">
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
                                        <td data-title="Class"><code>.pmd-tooltip</code></td>
                                        <td data-title="Effect">Defines Propeller theme and animation.</td>
                                        <td data-title="Remark">Required</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
                <div class="pmd-card pmd-table-card-responsive">
					<div class="pmd-table-card">  
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
                                    <td data-title="HTML Attributes"><code>data-toogle</code></td>
                                    <td data-title="Effect">To initialize tooltip. </td>
                                    <td data-title="Value">tooltip</td>
                                </tr>
                                <tr>
                                    <td data-title="HTML Attributes"><code>data-placement</code></td>
                                    <td data-title="Effect">Defines the position of the tooltip. Values that can be provided are left, right, top or bottom. </td>
                                    <td data-title="Value">left, right, top, bottom</td>
                                </tr>
                                <tr>
                                    <td data-title="HTML Attributes"><code>title</code></td>
                                    <td data-title="Effect">Defines the content of the tooltip.</td>
                                    <td data-title="Value">text, HTML</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section><!-- Configuration ends-->
        
        
        <!-- Events starts-->        
        <section class="row component-section">
            <div class="col-md-3">
                <div id="events">
                    <h2>Events</h2>
                </div>
                <p>See <a href="http://getbootstrap.com/javascript/#tooltips" target="_blank">here</a> for more documentation on this.</p>
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
                                    <td data-title="Class"><code>show.bs.tooltip</code></td>
                                    <td data-title="Effect">This event fires immediately when the <code>show</code> instance method is called.</td>
                                </tr>
                                <tr>
                                    <td data-title="Class"><code>shown.bs.tooltip</code></td>
                                    <td data-title="Effect">This event is fired when the tooltip has been made visible to the user (will wait for CSS transitions to complete).</td>
                                </tr>
                                <tr>
                                    <td data-title="Class"><code>hide.bs.tooltip</code></td>
                                    <td data-title="Effect">This event is fired immediately when the <code>hide</code> instance method has been called.</td>
                                </tr>
                                <tr>
                                    <td data-title="Class"><code>hidden.bs.tooltip</code></td>
                                    <td data-title="Effect">This event is fired when the tooltip has finished being hidden from the user (will wait for CSS transitions to complete).</td>
                                </tr>
                                <tr>
                                    <td data-title="Class"><code>inserted.bs.tooltip</code></td>
                                    <td data-title="Effect">This event is fired after the <code>show.bs.tooltip</code> event when the tooltip template has been added to the DOM.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="pmd-card pmd-z-depth js-script pmd-card-custom">
                    <pre class="pre-codebox line-numbers" data-src="../components/tooltip/snippets/events.js"></pre>
                </div>
            </div>
        </section><!-- Events ends-->   
        
    </div><!--container tooltip end -->
    
</div><!--Tooltip constructor end -->


<!--footer start -->
<?php include('include/footer.php'); ?>
<!--footer end -->