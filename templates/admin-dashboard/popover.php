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

<!--Popover -->
<div class="pmd-content pmd-content-custom" id="content"> 
	
	<div class="container-fluid">
	
		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Popover</span>
		</h1><!-- End Title -->
			
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.php">Dashboard</a></li>
		  <li class="active">Popover</li>
		</ol><!--breadcrum end--> 
		
		<!--component header -->
		<div class="componant-title-bg"> 
			<p class="lead">Popover is similar to tooltips; it is a pop-up box that appears when the user clicks or hover on an element.</p>
		</div> <!--component header end --> 
		
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
		 
	</div>
</div> <!--Popover end  --> 

<!-- Footer Starts -->
<?php include('include/footer.php'); ?>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<?php include('include/scripts.php'); ?>
<!-- Scripts Ends -->

</body>
</html>