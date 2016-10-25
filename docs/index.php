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
					<h1 class="pmd-display1">Get Started</h1>
				</div> <!--end component title and description-->
				
			</div>
		</div>
	</div>
	<!-- /.container-fluid --> 
	
</nav>
<!--navigation end -->

<!-- getting started constructor start -->
<div class="pmd-content pmd-content-custom getting-start-page" id="content">
	<div class="componant-title-bg">
		<!--Getting started start -->
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<p class="sub-line lead">Get familiar with the basic setup and structure of Propeller.</p>
				</div>
			</div>
		</div>
		<!-- Getting started end -->
	</div>
	
	<div class="container">
		
		<!-- component list category -->		
		<div class="list-group list-group-custom margin-20"> 
			<a class="list-group-item" href="#download">Download</a> 
			<a class="list-group-item" href="#FolderStructure">Folder Structure</a>
			<a class="list-group-item" href="#setup">HTML Setup</a>
			<a class="list-group-item" href="#components">Use the components</a>
			<a class="list-group-item" href="#rules">Steps to Follow</a>
			<a class="list-group-item" href="#next">What's next?</a>
		</div> <!-- component list category end -->	
			
		<!-- Download section -->
		<section class="row component-section">
			
			<!-- Download section title and description -->
			<div class="col-md-12 col-sm-12">
				<div id="download">
				  <h2>Download</h2>
				 </div> 
                  <p>Propeller comes in four different forms. You can choose either of them depending on your preference and requirements. Download from one of the options available below to get started.</p>				  
			</div> <!-- Download section title and description end -->
			
			
			<div class="col-md-3 col-sm-12">
				<div class="component-box">
					<div class="pmd-card pmd-z-depth">
					   <div class="pmd-card-body">
						  <h2>Material Themed</h2>
						  <p>Download this to themify your bootstap based html page. You'll have to include the css and js files in your html page.</p>
						  <div class="dropdown pmd-dropdown clearfix mt25 custom-mt25 text-left">
							  <a href="../archive/pmd-1.0.0-dist.zip" onClick="downloadMaterialtheme()" class="btn pmd-btn-raised pmd-ripple-effect btn-primary custom-primary" type="button">Download</a>
						  </div>
					   </div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-12">
				<div class="component-box code-sm">
					<div class="pmd-card pmd-z-depth">
					   <div class="pmd-card-body">
						 <h2>Propeller Kit</h2>
						 <p>This kit has both minified and unminified versions of css and javascript along with html code for all 25 Components.</p>
						 <div class="dropdown pmd-dropdown clearfix mt25 custom-mt25 text-left">
							<a href="../archive/pmd-1.0.0.zip" onClick="downloadUIFramework()" class="btn pmd-btn-raised pmd-ripple-effect btn-primary custom-primary" type="button">Download</a>
						 </div>
					   </div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-12">
				<div class="component-box code-sm">
					<div class="pmd-card pmd-z-depth">
					   <div class="pmd-card-body">
						 <h2>Stand Alone</h2>
						 <p>Download and use the individual component. You'll get the css, javascript and html files of the component.</p>
						 <div class="dropdown pmd-dropdown clearfix mt25 custom-mt25 text-left">
							<button data-target="#standalone-list-dialog" data-toggle="modal" class="btn pmd-btn-raised pmd-ripple-effect btn-primary custom-primary" type="button">View List</button>
						 </div>
					   </div>
					</div>
				</div>
			</div>
            <div class="col-md-3 col-sm-12">
				<div class="component-box code-sm">
					<div class="pmd-card pmd-z-depth">
					   <div class="pmd-card-body">
						 <h2>Admin Template</h2>
						 <p>Preview and download our precreated Admin template with all standards to save time and speed up your development.</p>
						 <div class="dropdown pmd-dropdown clearfix mt25 custom-mt25 text-left">
							<a href="../propeller-template-list.html" class="btn pmd-btn-raised pmd-ripple-effect btn-primary custom-primary" target="_blank" type="button">Preview Template</a>
						 </div>
					   </div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Folder Structure section -->
		<section class="row component-section folder-structure">
			<div class="col-xs-12">
				<h2 id="FolderStructure">Folder Structure</h2>
				<p>Once downloaded, unzip the compressed folder to see the structure of (the compiled) Bootstrap and Propeller files. You'll see something like this:</p>
				<p>Just copy the compiled CSS and JS files and the font files(created for icons) from the .zip and add them to your project.</p>
			</div>
			<div class="col-md-12">
				<div class="component-box">
					<pre class="pre-codebox line-numbers remove-scroll" data-src="../components/get-started/snippets/included-bootstrap.html"></pre>
				</div>
			</div>
		</section> <!--Folder Structure end --> 	
        
		<!-- HTML Setup section -->
		<section class="row component-section">
			<div class="col-xs-12">
				  <h2 id="setup">HTML Setup</h2>
				  <p>Next you just have to make sure you link the files properly in your webpage. Generally it is wise to import javascript files at the end of the body to reduce page load time. Follow the example below on how to import Propeller into your webpage.</p>
				  <p>Copy the HTML below to begin working with a minimal Propeller document.</p>
			</div>
			<div class="col-md-12">
				<div class="component-box">
					<pre class="pre-codebox line-numbers remove-scroll" data-src="../components/get-started/snippets/html-setup.html"></pre> 
				</div>
			</div>
		</section> <!--HTML Setup end --> 
		
		<!-- use the component section -->
		<section class="row component-section">
			<div class="col-xs-12">
				  <h2 id="components">Use the components</h2>
				  <p>You'll find below a couple of examples of Propeller Button component: A button with ripple effect and a raised button. </p>
				  <p>Just copy &amp; paste the corresponding source code in the <code> &lt;body&gt;</code> of an HTML page of your project and the component will render as shown below. </p>
				  <div class="custom-use-component">
				  	<button class="btn pmd-ripple-effect btn-primary" type="button"> Primary </button>
				  	<button class="btn pmd-btn-raised pmd-ripple-effect btn-success" type="button">Success</button>
				  </div>
				  <p>Propeller components can be tweaked and configured by adding CSS classes. For example adding <code>.pmd-ripple-effect</code> to a Propeller Button will add a ripple effect when the button is clicked and adding <code>.pmd-btn-raised</code> will change the style of the button to a raised button.</p>
				  <p>Checkout the components section in left navigation bar to see the complete list of components available with Propeller.</p>
			</div>
			<div class="col-md-12">
				<div class="component-box">
					<pre class="pre-codebox line-numbers remove-scroll" data-src="../components/get-started/snippets/use-components.html"></pre> 
				</div>
			</div>
		</section> <!--use the component section end --> 		
		
		<!-- General rules and principles section -->
		<section class="row component-section">
			<div class="col-xs-12">
				  <h2 id="rules">Steps to follow</h2>
				  <p>Follow these basic steps to use a Propeller component in your HTML page:</p>
				  <ol>
					<li>Add a standard HTML element for instance <code>&lt;div&gt;</code>, depending on the component you want to use.</li>
					<li>Add the Propeller specific classes to the element depending on the component you are using. The classes enhances the appearance of your element according to material design standards and converts it into a Propeller component.</li>
					<li>Apply the specific Javascript, if any, to the element.</li>
				  </ol>
			</div>
		</section> <!--General rules and principles end --> 		
	
		<!-- What's next -->
		<div class="row">
			<div class="col-xs-12">
				  <h2 id="next">What's next?</h2>
				  <p>Detailed guidelines for using any component, can be found in the individual component page.</p>
			</div> 
		</div> <!-- What's next end -->
	</div>
</div> <!-- getting started end -->

<div tabindex="-1" class="modal fade standalone-list-dialog" id="standalone-list-dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        	<form id='component_form' method="post" action="custom/copy.php">
                <div class="modal-header bordered">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h2 class="pmd-card-title-text text-center">Components lists</h2>
                </div>
                <div class="pmd-card-body standalone-body"> 
                    <div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                        	<input type="checkbox" class='stand_alone_check_box' name="accordion"  value="accordion">
                        	<span>Accordion</span>
                        </label>
                    </div>
                    <div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                        	<input type="checkbox" class='stand_alone_check_box' name="alert" value="alert">
                            <span>Alert</span>
                        </label>
                    </div>
                    <div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                            <input type="checkbox" class='stand_alone_check_box' name='badge' value="badge">
                            <span>Badge</span>
                        </label>
                    </div>
                    <div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                            <input type="checkbox" class='stand_alone_check_box'  value="button" name="button">
                            <span>Button</span>
                        </label>
                    </div>
                    <div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                            <input type="checkbox" class='stand_alone_check_box'  value="card" name="card">
                            <span>Card</span>
                        </label>
                    </div>
                    <div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                            <input type="checkbox" class='stand_alone_check_box'  value="custom-scrollbar" name="custom-scrollbar">
                            <span>Custom Scroll</span>
                        </label>
                    </div>
                    <div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                            <input type="checkbox" class='stand_alone_check_box'  value="data-table" name="data-table">
                            <span>Data table</span>
                        </label>
                    </div>
                    <div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                            <input type="checkbox" class='stand_alone_check_box'  value="datetimepicker" name="datetimepicker">
                            <span>Datetimepicker</span>
                        </label>
                    </div>
                    <div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                            <input type="checkbox" class='stand_alone_check_box'  value="dropdown" name="dropdown">
                            <span>Dropdown</span>
                        </label>
                    </div>
                    <div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                            <input type="checkbox" class='stand_alone_check_box'  value="floating-action-button" name="floating-action-button">
                            <span>FAB</span>
                        </label>
                    </div>
                    <div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                            <input type="checkbox" class='stand_alone_check_box'  value="icons" name="icons">
                            <span>Icons</span>
                        </label>
                    </div>
	    			<div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                        <input type="checkbox" class='stand_alone_check_box'  value="form" name="form">
                        <span>Form</span> </label>
                    </div>
                    <div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                        <input type="checkbox" class='stand_alone_check_box'  value="list" name="list">
                        <span>List</span> </label>
                    </div>
                    <div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                            <input type="checkbox" class='stand_alone_check_box'  value="modal" name="modal">
                            <span>Modal</span>
                        </label>
                    </div>
                    <div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                            <input type="checkbox" class='stand_alone_check_box'  value="navbar" name="navbar">
                            <span>Navbar</span>
                        </label>
                    </div>
                    <div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                            <input type="checkbox" class='stand_alone_check_box'  value="popover" name="popover">
                            <span>Popover</span>
                        </label>
                    </div>
                    <div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                            <input type="checkbox" class='stand_alone_check_box'  value="progressbar" name="progressbar">
                            <span>Progressbar</span>
                        </label>
                    </div>
                    <div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                            <input type="checkbox" class='stand_alone_check_box'  value="range-slider" name="range-slider">
                            <span>Range Slider</span>
                        </label>
                    </div>
                    <div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                            <input type="checkbox" class='stand_alone_check_box'  value="sidebar" name="sidebar">
                            <span>Sidebar</span>
                        </label>
                    </div>
                    <div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                            <input type="checkbox" class='stand_alone_check_box'  value="select2" name="select2">
                            <span>Select2</span>
                        </label>
                    </div>
                    <div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                            <input type="checkbox" class='stand_alone_check_box'  value="shadow" name="shadow">
                            <span>Shadow</span>
                        </label>
                    </div>
                    <div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                            <input type="checkbox" class='stand_alone_check_box'  value="tab" name="tab">
                            <span>Tab</span>
                        </label>
                    </div>
                    <div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                            <input type="checkbox" class='stand_alone_check_box'  value="table" name="table" >
                        	<span>Table</span>
                        </label>
                    </div>
                    <div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                            <input type="checkbox" class='stand_alone_check_box' value="tooltip" name="tooltip">
                            <span>Tooltip</span>
                        </label>
                    </div>
                    <div class="checkbox pmd-default-theme">
                        <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                            <input type="checkbox" class='stand_alone_check_box' value="typography" name="typography">
                            <span>Typography</span>
                        </label>
                    </div>
                </div>
                <div class="pmd-modal-action pmd-modal-bordered text-center">
                    <button name='btn_submit' value='sa' class="btn btn-lg pmd-ripple-effect btn-primary component_from_btn" type="submit">Download Components</button>
                    <!--<a href="../archive/pmd-1.0.0-dist.zip" class="btn btn-lg pmd-ripple-effect btn-primary" type="button">Download Components</a>-->
                </div>
            </form>
        </div>
    </div>
</div>

<!--footer start -->
<?php include('include/footer.php'); ?>
