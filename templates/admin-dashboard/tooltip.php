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

<!--Tooltip -->
<div class="pmd-content pmd-content-custom tooltip-component" id="content">
    
    <div class="container-fluid">
	
		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Tooltip</span>
		</h1><!-- End Title -->
			
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.php">Dashboard</a></li>
		  <li class="active">Tooltip</li>
		</ol><!--breadcrum end-->
		
		<!-- component header -->
		<div class="componant-title-bg">
			<p class="lead">Tooltip is a small "hover box" containing information about the item being hovered over. Tooltip appears on hover over an element with the cursor, or focus on an element using a keyboard (usually through the tab key), or upon touch (without releasing) in a touch UI.</p>
		</div><!-- end component header -->
	
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
				<p>Propeller tooltip uses basic Bootstrap Tooltip customized with Material Standards. To initialize the Propeller Tooltip, add the HTML attribute <code>data-toggle="tooltip"</code>. To define the tooltip position, use <code>data-placement</code> attribute. <code>data-placement</code> attribute can take left, right, top and bottom as values.</p>
               <!-- <p class="tooltip-note"><strong>Note:</strong> Tooltips don’t display rich information like images and formatted text neither they have directional arrows; instead, they rely on motion emanating from the source to convey direction.</p>-->
            </div><!-- end Propeller Tooltip title and description -->
            
            <!-- Propeller Tooltip code and example -->
            <div class="col-md-9">
                <div class="component-box">
                        
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
        
    </div><!--container tooltip end -->
    
</div><!--Tooltip constructor end -->

<!-- Footer Starts -->
<?php include('include/footer.php'); ?>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<?php include('include/scripts.php'); ?>
<!-- Scripts Ends -->

<!-- Tooltip Js -->
<script>
	$(document).ready(function(){
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		})
	});
</script>

</body>
</html>