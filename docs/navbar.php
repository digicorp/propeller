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
			<!-- component title and description-->
			<h1 class="display-1">Navbar</h1><!--end component title and description-->
			<!-- component download button dropdown -->
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
                            <input type="hidden"  name="navbar" value="navbar"/>
                            <button name='btn_submit' value='navbar' type="submit" onClick="downloadNavbar()" class="btn btn-default pmd-btn-raised btn-sm pmd-ripple-effect pmd-btn-flat custom-btn">Download ZIP</button>
                        </form>
                    </li>
                </ul> <!--end dropdown menu -->
			</div>
			<!--end download component button dropdown -->
		</div>
		
	</div>
	<!-- /.container-fluid --> 
	
</nav>
<!--navigation end -->

<!-- menu -->
<div class="pmd-content pmd-content-custom" id="content">

    <!--component header -->
     <div class="componant-title-bg">
        <div class="container">
            <div class="row">
            
            	<!-- component title and description -->
                <div class="col-xs-12">
                    <p class="lead">Navbar is a simple wrapper for positioning branding, navigation, and other elements into a concise navigation header. It’s easily extensible and, with the help of our collapse plugin, it can easily integrate offscreen content.</p>
                </div><!-- end component title and description -->
                
            </div>
        </div>
    </div><!--component header end -->    
    
    <div class="container">
    	<!-- component list catagory -->
        <div class="list-group list-group-custom margin-20"> 
		  <a class="list-group-item" href="#bootstrapbasic">Bootstrap Navbar</a>
          <a class="list-group-item" href="#basics">Propeller Navbar</a> 
          <a class="list-group-item" href="#placement">Navbar with Profile Dropdown</a>
          <a class="list-group-item" href="#collapsible">Navbar Collapsible with Sidebar</a>
          <a class="list-group-item" href="#with-search">Navbar with Search</a>
          <a class="list-group-item" href="#config">Configuration Options</a>
        </div><!-- component list catagory end -->
      
      	<!-- bootstrap basic menu -->
        <section class="row component-section">
        
        	<!-- bootstrap basic Navbar title and description -->
          	<div class="col-md-12">
            	<div id="bootstrapbasic">
                	<h2>Bootstrap Navbar</h2>
              	</div>
                <p>With Bootstrap, a navbar can extend or collapse, depending on the screen size. A standard navigation bar is created with <code><</code><code>nav class="navbar navbar-default"</code><code>></code>.
          	</div><!-- bootstrap basic Navbar title and description end-->
            
          	<!-- bootstrap basic Navbar code and example -->
            <div class="col-md-12">            
            	<div class="component-box">
             
                    <!-- code view button -->
                    <div class="pmd-card-title custom-heading custom-card-heading clearfix">
                        <a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code">
                        <i class="material-icons md-dark pmd-sm">code</i>
                        </a> 
                    </div><!-- code view button end -->
                
                    <!-- code view -->
                    <div class="code-box">
                    	<div class="pmd-tabs">
                        	<div class="pmd-tab-active-bar"></div> 
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="active"><a href="#bootstrap-basic-menu-html" data-toggle="tab">HTML</a></li>
                                <li><a href="#bootstrap-basic-menu-css" data-toggle="tab">CSS</a></li>
                                <li><a href="#bootstrap-basic-menu-js" data-toggle="tab">JS</a></li>
                            </ul>
                        </div>
                        <div id="my-tab-content" class="tab-content">
                        	<div class="tab-pane active" id="bootstrap-basic-menu-html">
                            	<pre class="pre-codebox line-numbers" data-src="../components/navbar/snippets/bootstrap-basic-menu.html"></pre> 
                          	</div>
                            <div class="tab-pane" id="bootstrap-basic-menu-css">
                            	<pre class="pre-codebox line-numbers" data-src="../components/navbar/snippets/bootstrap-basic.css"></pre> 
                            </div>
                          	<div class="tab-pane" id="bootstrap-basic-menu-js">
                            	<pre class="pre-codebox line-numbers" data-src="../components/navbar/snippets/bootstrap-basic.js"></pre> 
                          	</div>
                        </div>
                   	</div><!-- code view end-->
                    
                   	<!-- bootstrap basic Navbar example-->
					<div class="pmd-card pmd-z-depth">
						<section class="nav-show" style="position: relative;">
							<iframe src="../components/navbar/snippets/bootstrap-basic-menu-page.html" class="menubar-iframe"></iframe>
						</section>
                    </div><!-- bootstrap basic Navbar example end-->
                </div>	
        	</div><!-- bootstrap basic Navbar code and example end -->
        
      	</section><!-- bootstrap basic Navbar end -->
		
		<!-- basic Navbar -->
        <section class="row component-section">
        
        	<!-- basic menu title and description -->
          	<div class="col-md-12">
            	<div id="basics">
                	<h2>Propeller Navbar</h2>
              	</div>
              	<p>Navbar requires a wrapping <code>.navbar</code> and a color scheme class (either <code>.navbar-default</code> or <code>.navbar-inverse</code>).<br/> 
                Add <code>.pmd-navbar</code> for proper alignment.</p>
          	</div><!-- basic menu title and description end-->
            
          	<!-- basic menu code and example -->
            <div class="col-md-12">            
            	<div class="component-box">
             
                    <!-- code view button -->
                    <div class="pmd-card-title custom-heading custom-card-heading clearfix">
                        <a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
                    </div><!-- code view button end -->
                
                    <!-- code view -->
                    <div class="code-box">
                    	<div class="pmd-tabs">
                        	<div class="pmd-tab-active-bar"></div> 
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="active"><a href="#basic-menu-html" data-toggle="tab">HTML</a></li>
                                <li><a href="#basic-menu-css" data-toggle="tab">CSS</a></li>
                                <li><a href="#basic-menu-js" data-toggle="tab">JS</a></li>
                            </ul>
                        </div>
                        <div id="my-tab-content" class="tab-content">
                        	<div class="tab-pane active" id="basic-menu-html">
                            	<pre class="pre-codebox line-numbers" data-src="../components/navbar/snippets/basic-menu.html"></pre> 
                          	</div>
                            <div class="tab-pane" id="basic-menu-css">
                            	<pre class="pre-codebox line-numbers" data-src="../components/navbar/snippets/menu.css"></pre> 
                            </div>
                          	<div class="tab-pane" id="basic-menu-js">
                            	<pre class="pre-codebox line-numbers" data-src="../components/navbar/snippets/menu.js"></pre> 
                          	</div>
                        </div>
                   	</div><!-- code view end-->
                    
                   	<!-- basic menu example-->
					<div class="pmd-card pmd-z-depth">
						<section class="nav-show" style="position: relative;">
							<iframe src="../components/navbar/snippets/basic-menu-page.html" class="menubar-iframe"></iframe>
						</section>
                    </div><!-- basic menu example end-->
                </div>	
        	</div><!-- basic menu code and example end -->
        
      	</section><!-- basic Navbar end -->              
        
		<!-- Placement Navbar -->
      	<section class="row component-section">
        
        	<!-- placement menu title and description -->
            <div class="col-md-12">
                <div id="placement">
                    <h2>Navbar with Profile Dropdown</h2>
                </div>
                <p>The <code>.pull-right</code> class is used to right-align Profile dropdown.</p>
            </div><!-- placement menu title and description end -->
            
        	<!-- placement menu code and example -->
            <div class="col-md-12">
            	<div class="component-box">
                
                	<!-- code view button -->
                  	<div class="pmd-card-title custom-heading custom-card-heading clearfix">
                    	<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>  
                	</div> <!-- code view button end -->
                                      
                    <!-- code view -->
                    <div class="code-box">
                        <div class="pmd-tabs">
                            <div class="pmd-tab-active-bar"></div>  
                               <ul class="nav nav-tabs" data-tabs="tabs">
                                  <li class="active"><a href="#placement-html" data-toggle="tab">HTML</a></li>
                                  <li><a href="#placement-css" data-toggle="tab">CSS</a></li>
                                  <li><a href="#placement-js" data-toggle="tab">JS</a></li>
                              </ul>
                        </div>
                        <div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="placement-html"> 
                                <pre class="pre-codebox line-numbers" data-src="../components/navbar/snippets/placement-menu.html"></pre> 
                            </div>
                            <div class="tab-pane" id="placement-css">
                              <pre class="pre-codebox line-numbers" data-src="../components/navbar/snippets/menu.css"></pre> 
                            </div>
                            <div class="tab-pane" id="placement-js"> 
                               <pre class="pre-codebox line-numbers" data-src="../components/navbar/snippets/menu.js"></pre> 
                            </div>
                        </div>
                    </div> <!-- code view end -->
                                      
                 	<!-- placement menu example -->
                    <div class="pmd-card pmd-z-depth">
						<section class="nav-show" style="position:relative;">
							<iframe src="../components/navbar/snippets/placement-menu-page.html" class="menubar-iframe"></iframe>
						</section>
                    </div><!-- placement menu example end -->
                                            
                </div>
        	</div>
      	</section><!-- Placements Navbar end -->       
        
       	<!-- Sidebar Navbar -->
       	<section class="row component-section">
       
       		<!-- sidebar menu title and description -->
            <div class="col-md-12">
                <div id="collapsible">
                    <h2>Navbar Collapsible with Sidebar</h2>
                </div>
            <p>The navigation bar takes up too much space on a small screen. Add <code>.pmd-navbar-toggle</code> immediately followed by bootstrap <code>.navbar-toggle</code> to hide the navigation bar for mobile resolution and only show it when needed. Use <code>.pmd-navbar-sidebar</code> to initiate propeller sidebar function.</p>
            </div><!-- sidebar menu title and description end-->
            
            <!-- sidebar menu code and example -->
            <div class="col-md-12">
            	<div class="component-box">
                
                	<!-- code view button -->
                	<div class="pmd-card-title custom-heading custom-card-heading clearfix">
                    	<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
                  	</div><!-- code view button end -->
                    
                    <!-- code view -->
                    <div class="code-box">
                    	<div class="pmd-tabs">
                        	<div class="pmd-tab-active-bar"></div> 
                            	<ul class="nav nav-tabs" data-tabs="tabs">
                                	<li class="active"><a href="#sidebar-html" data-toggle="tab">HTML</a></li>
                                    <li><a href="#sidebar-css" data-toggle="tab">CSS</a></li>
                                    <li><a href="#sidebar-js" data-toggle="tab">JS</a></li>
                                </ul>
                           	</div>
                          	<div id="my-tab-content" class="tab-content">
                                <div class="tab-pane active" id="sidebar-html">
                                    <pre class="pre-codebox line-numbers" data-src="../components/navbar/snippets/sidebar-menu.html"></pre> 
                                </div>                              
                                <div class="tab-pane" id="sidebar-css">
                                    <pre class="pre-codebox line-numbers" data-src="../components/navbar/snippets/menu.css"></pre> 
                                </div>                            
                            	<div class="tab-pane" id="sidebar-js"> 
                                	<pre class="pre-codebox line-numbers" data-src="../components/navbar/snippets/menu.js"></pre>
                            	</div>
                          	</div>
                    </div><!-- code view end-->
                     
                    <!-- sidebar menu example --> 
                    <div class="pmd-card pmd-z-depth">
						<section class="nav-show" style="position: relative;">
							<iframe src="../components/navbar/snippets/sidebar-menu-page.html" class="menubar-iframe"></iframe>
						</section>
                    </div><!-- sidebar menu example end-->
                    
                </div>
            </div><!-- sidebar menu code and example end-->          
       </section><!-- Sidebar Navbar end -->
        
       	<!-- Navbar with search -->
        <section class="row component-section">
        
        	<!-- menu with search title and description -->
        	<div class="col-md-12">
            	<div id="with-search">
               		<h2>Navbar with Search</h2>
             	</div>
             	<p>We can add search section in the Navbar. It will help in searching elements in the page.</p>
          	</div><!-- menu with search title and description end -->
            
          	<!-- menu with search code and example -->
            <div class="col-md-12">
            	<div class="component-box">
                
                	<!-- code view button -->
                	<div class="pmd-card-title custom-heading custom-card-heading clearfix">
                    	<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
                  	</div><!-- code view button end -->
                    
                    <!-- code view-->                  
                    <div class="code-box">
                    	<div class="pmd-tabs">
                        	<div class="pmd-tab-active-bar"></div> 
                            	<ul class="nav nav-tabs" data-tabs="tabs">
                                	<li class="active"><a href="#search-html" data-toggle="tab">HTML</a></li>
                                    <li><a href="#search-css" data-toggle="tab">CSS</a></li>
                                    <li><a href="#search-js" data-toggle="tab">JS</a></li>
                                </ul>
                        </div>
                        <div id="my-tab-content" class="tab-content">
                        	<div class="tab-pane active" id="search-html">
                               <pre class="pre-codebox line-numbers" data-src="../components/navbar/snippets/search-menu.html"></pre> 
                            </div>                              
                            <div class="tab-pane" id="search-css">
                               <pre class="pre-codebox line-numbers" data-src="../components/navbar/snippets/menu.css"></pre> 
                            </div>                            
                            <div class="tab-pane" id="search-js">
                               <pre class="pre-codebox line-numbers" data-src="../components/navbar/snippets/menu.js"></pre> 
                            </div>
                        </div>
                    </div><!-- code view end -->
                       
               		<!-- menu with search example -->
                    <div class="pmd-card pmd-z-depth">
						<section class="nav-show" style="position: relative;">
							<iframe src="../components/navbar/snippets/search-menu-page.html" class="menubar-iframe"></iframe>
						</section>
                    </div><!-- menu with search example end -->
               			
            	</div>
            </div><!-- end menu with search code and example -->
        </section><!-- Navbar with search end-->
        
       <!-- Configuration starts-->        
       <section class="row component-section">
            <div class="col-md-12">
                <div id="config">
                    <h2>Configuration Options</h2>
                </div>
                <p>The Propeller CSS classes apply various predefined visual enhancements to the menu. The table lists the available classes and their effects.</p>
            </div>
            <div class="col-md-12">
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
                                    <td data-title="Class"><code>.pmd-navbar</code></td>
                                    <td data-title="Effect">Include this class for navbar formatting.</td>
                                    <td data-title="Remark">Required</td>
                                </tr>
                                <tr>
                                    <td data-title="Class"><code>.pmd-user-info</code></td>
                                    <td data-title="Effect">Include this class for creating navbar with user information dropdown.</td>
                                    <td data-title="Remark">Optional</td>
                                </tr>
                                <tr>
                                    <td data-title="Class"><code>.pmd-navbar-toggle</code></td>
                                    <td data-title="Effect">Include this class to open navbar content in sidebar for low screen resolution.</td>
                                    <td data-title="Remark">Optional</td>
                                </tr>
                                <tr>
                                    <td data-title="Class"><code>.pmd-navbar-sidebar</code></td>
                                    <td data-title="Effect">Include this class to initiate propeller sidebar function.</td>
                                    <td data-title="Remark">Optional</td>
                                </tr>
								<tr>
                                    <td data-title="Class"><code>.pmd-sidebar-overlay</code></td>
                                    <td data-title="Effect">Include this class to highlight sidebar with overlay effect in low resolution. </td>
                                    <td data-title="Remark">Optional</td>
                                </tr>
								<tr>
                                    <td data-title="Class"><code>.pmd-navbar-right-icon</code></td>
                                    <td data-title="Effect">Include this class to align icon to right side of navbar. </td>
                                    <td data-title="Remark">Optional</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div><!--Propeller  Class Configuration card end -->
                
            </div>
        </section><!-- Configuration ends--> 
	
    </div><!--container end -->
    
</div><!--menu constructor end -->

	
<!--footer start -->
<?php include('include/footer.php'); ?>
<!-- footer end -->