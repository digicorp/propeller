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
	
<!-- Navbar -->
<div id="content" class="pmd-content">

    <div class="container-fluid">
	
 		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Navbar</span>
		</h1><!-- End Title -->
		
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.php">Dashboard</a></li>
		  <li class="active">Navbar</li>
		</ol><!--breadcrum end-->
		 
		<!--component header -->
		<div class="componant-title-bg">
			<p class="lead">Navbar is a simple wrapper for positioning branding, navigation, and other elements into a concise navigation header. It’s easily extensible and, with the help of our collapse plugin, it can easily integrate offscreen content.</p>
		</div><!--component header end --> 
		     
      	<!-- bootstrap basic menu -->
        <section class="row component-section">
        
        	<!-- bootstrap basic Navbar title and description -->
          	<div class="col-md-12">
            	<div id="bootstrapbasic">
                	<h2>Bootstrap Navbar</h2>
              	</div>
              	<p>It is a responsive meta component that serves as navigation header for your application or site.<br/> It begin collapsed (and are toggleable) in mobile view and become horizontal as the available viewport width increases.</p>
          	</div><!-- bootstrap basic Navbar title and description end-->
            
          	<!-- bootstrap basic Navbar code and example -->
            <div class="col-md-12">            
            	<div class="component-box">
                   	<!-- bootstrap basic Navbar example-->
					<div class="pmd-card pmd-z-depth">
						<section class="nav-show" style="position: relative;">
							<nav class="navbar navbar-inverse">
							  <div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								  </button>
								  <a class="navbar-brand" href="javascript:void(0);">Brand</a>
								</div>
							
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								  <ul class="nav navbar-nav">
									<li class="active"><a href="javascript:void(0);">Link <span class="sr-only">(current)</span></a></li>
									<li><a href="javascript:void(0);">Link</a></li>
									<li class="dropdown">
									  <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
									  <ul class="dropdown-menu">
										<li><a href="javascript:void(0);">Action</a></li>
										<li><a href="javascript:void(0);">Another action</a></li>
										<li><a href="javascript:void(0);">Something else here</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="javascript:void(0);">Separated link</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="javascript:void(0);">One more separated link</a></li>
									  </ul>
									</li>
								  </ul>
								  <form class="navbar-form navbar-left">
									<div class="form-group">
									  <input type="text" class="form-control" placeholder="Search">
									</div>
									<button type="submit" class="btn btn-default">Submit</button>
								  </form>
								  <ul class="nav navbar-nav navbar-right">
									<li><a href="javascript:void(0);">Link</a></li>
									<li class="dropdown">
									  <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
									  <ul class="dropdown-menu dropdown-menu-right">
										<li><a href="javascript:void(0);">Action</a></li>
										<li><a href="javascript:void(0);">Another action</a></li>
										<li><a href="javascript:void(0);">Something else here</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="javascript:void(0);">Separated link</a></li>
									  </ul>
									</li>
								  </ul>
								</div><!-- /.navbar-collapse -->
							  </div><!-- /.container-fluid -->
							</nav>
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
              	<p>Navbar requires a wrapping <code>.navbar</code> and a color scheme class (either <code>.navbar-default</code> or <code>.navbar-inverse</code>). Also add <code>.pmd-navbar</code> for proper alignment.</p>
          	</div><!-- basic menu title and description end-->
            
          	<!-- basic menu code and example -->
            <div class="col-md-12">            
            	<div class="component-box">
                   	<!-- basic menu example-->
					<div class="pmd-card pmd-z-depth">
						<nav class="navbar navbar-inverse pmd-navbar pmd-z-depth">
						  <div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
							  <a href="javascript:void(0);" class="navbar-brand navbar-brand-custome">Brand</a>
							</div>
					
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div id="bs-example-navbar-collapse-2" class="collapse navbar-collapse">
							  <ul class="nav navbar-nav">
								<li><a class="pmd-ripple-effect" href="javascript:void(0);">Link <span class="sr-only">(current)</span></a></li>
								<li><a class="pmd-ripple-effect" href="javascript:void(0);">Link</a></li>
								<li class="dropdown pmd-dropdown">
								  <a data-toggle="dropdown" class="pmd-ripple-effect dropdown-toggle" data-sidebar="true" href="javascript:void(0);">Dropdown <span class="caret"></span></a>
								  <ul class="dropdown-menu">
									<li><a class="pmd-ripple-effect" href="javascript:void(0);">Action</a></li>
									<li><a class="pmd-ripple-effect" href="javascript:void(0);">Another action</a></li>
									<li><a class="pmd-ripple-effect" href="javascript:void(0);">Something else here</a></li>
									<li class="divider"></li>
									<li><a class="pmd-ripple-effect" href="javascript:void(0);">Separated link</a></li>
									<li class="divider"></li>
									<li><a class="pmd-ripple-effect" href="javascript:void(0);">One more separated link</a></li>
								  </ul>
								</li>
							  </ul>
							</div><!-- /.navbar-collapse -->
							
						  </div><!-- /.container-fluid -->
						  <!--<div class="pmd-sidebar-overlay"></div> -->
						</nav>
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
                                      
                 	<!-- placement menu example -->
                    <div class="pmd-card pmd-z-depth">
						<section class="nav-show" style="position:relative;">
							<nav class="navbar navbar-inverse pmd-navbar pmd-z-depth">
								<div class="container-fluid">
									<!-- User information -->
									<div class="dropdown pmd-dropdown pmd-user-info pull-right">
										<a href="javascript:void(0);" class="btn-user dropdown-toggle media" data-toggle="dropdown" aria-expanded="false">
											<div class="media-left">
												<img src="http://propeller.in/assets/images/avatar-icon-40x40.png" width="40" height="40" alt="avatar">
											</div>
											<div class="media-body media-middle">
												User
											</div>
											<div class="media-right media-middle">
												<i class="material-icons md-light pmd-sm">more_vert</i>
											</div>
										</a>
										<ul class="dropdown-menu dropdown-menu-right" role="menu">
											<li><a href="javascript:void(0);">Edit Profile</a></li>
											<li><a href="javascript:void(0);">Logout</a></li>
										</ul>
									</div>
								
									<!-- Brand and toggle get grouped for better mobile display -->
									<div class="navbar-header">
									  <a href="javascript:void(0);" class="navbar-brand navbar-brand-custome">Brand</a>
									</div>
								</div>
								<!--<div class="pmd-sidebar-overlay"></div> -->
							</nav>
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
            <p>The navigation bar takes up too much space on a small screen. Add <code>.pmd-navbar-toggle</code> immediately followed by bootstrap <code>.navbar-toggle</code> to hide the navigation bar in low resolution and only show it when needed. Use <code>.pmd-navbar-sidebar</code> to manage the alignment of sidebar.</p>
            </div><!-- sidebar menu title and description end-->
            
            <!-- sidebar menu code and example -->
            <div class="col-md-12">
            	<div class="component-box">
                     
                    <!-- sidebar menu example --> 
                    <div class="pmd-card pmd-z-depth">
						<section class="nav-show" style="position: relative;">
							<nav class="navbar navbar-inverse pmd-navbar pmd-z-depth">
							  <div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								
								<div class="navbar-header">
								  <button class="pmd-ripple-effect navbar-toggle pmd-navbar-toggle" type="button">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								  </button>
								  <a href="javascript:void(0);" class="navbar-brand navbar-brand-custome">Brand</a>
								</div>
						
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse pmd-navbar-sidebar">
								
								  <div class="dropdown pmd-dropdown pmd-user-info pull-right">
									  <a href="javascript:void(0);" class="btn-user dropdown-toggle media" data-toggle="dropdown" data-sidebar="true" aria-expanded="false">
										  <div class="media-left">
											  <img src="http://propeller.in/assets/images/avatar-icon-40x40.png" width="40" height="40" alt="avatar">
										  </div>
										<div class="media-body media-middle">
											User
										</div>
										<div class="media-right media-middle">
											<i class="material-icons md-light pmd-sm">more_vert</i>
										</div>
									  </a>
									  <ul class="dropdown-menu dropdown-menu-right" role="menu">
										<li><a href="javascript:void(0);">Edit Profile</a></li>
										<li><a href="javascript:void(0);">Logout</a></li>
									  </ul>
									</div>
										
								  <ul class="nav navbar-nav">
									<li><a class="pmd-ripple-effect" href="javascript:void(0);">Link <span class="sr-only">(current)</span></a></li>
									<li><a class="pmd-ripple-effect" href="javascript:void(0);">Link</a></li>
									<li class="dropdown pmd-dropdown">
									  <a data-toggle="dropdown" class="pmd-ripple-effect dropdown-toggle" data-sidebar="true" href="javascript:void(0);">Dropdown <span class="caret"></span></a>
									  <ul class="dropdown-menu">
										<li><a class="pmd-ripple-effect" href="javascript:void(0);">Action</a></li>
										<li><a class="pmd-ripple-effect" href="javascript:void(0);">Another action</a></li>
										<li><a class="pmd-ripple-effect" href="javascript:void(0);">Something else here</a></li>
										<li class="divider"></li>
										<li><a class="pmd-ripple-effect" href="javascript:void(0);">Separated link</a></li>
										<li class="divider"></li>
										<li><a class="pmd-ripple-effect" href="javascript:void(0);">One more separated link</a></li>
									  </ul>
									</li>
								  </ul>
								  <ul class="nav navbar-nav navbar-right">
									<li><a class="pmd-ripple-effect" href="javascript:void(0);">Link</a></li>
									<li class="dropdown pmd-dropdown">
									  <a aria-expanded="false" role="button" data-toggle="dropdown" data-sidebar="true" class="pmd-ripple-effect dropdown-toggle" href="javascript:void(0);">Dropdown <span class="caret"></span></a>
									  <ul role="menu" class="dropdown-menu dropdown-menu-right">
										<li><a class="pmd-ripple-effect" href="javascript:void(0);">Action</a></li>
										<li><a class="pmd-ripple-effect" href="javascript:void(0);">Another action</a></li>
										<li><a class="pmd-ripple-effect" href="javascript:void(0);">Something else here</a></li>
										<li class="divider"></li>
										<li><a class="pmd-ripple-effect" href="javascript:void(0);">Separated link</a></li>
									  </ul>
									</li>
								  </ul>
								  
								</div><!-- /.navbar-collapse -->
								
							  </div><!-- /.container-fluid -->
							  <div class="pmd-sidebar-overlay"></div>
							</nav>
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
                       
               		<!-- menu with search example -->
                    <div class="pmd-card pmd-z-depth">
						<section class="nav-show" style="position: relative;">
							<nav class="navbar navbar-inverse pmd-navbar pmd-z-depth">
								<div class="container-fluid">
									<!-- Brand and toggle get grouped for better mobile display -->
									<div class="navbar-header">
										<button class="pmd-ripple-effect navbar-toggle pmd-navbar-toggle" type="button">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
										<a href="javascript:void(0);" class="navbar-brand">Brand</a>
									</div>
							
									<div class="pmd-navbar-right-icon pull-right">
										<a class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect" href="javascript:void(0);"><i class="material-icons md-light pmd-sm">search</i></a>
									</div>
							
									<!-- Collect the nav links, forms, and other content for toggling -->
									<div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse pmd-navbar-sidebar">
									
									  <ul class="nav navbar-nav navbar-right">
										<li><a class="pmd-ripple-effect" href="javascript:void(0);">Link</a></li>
										<li class="dropdown pmd-dropdown">
										  <a aria-expanded="false" role="button" data-toggle="dropdown" data-sidebar="true" class="pmd-ripple-effect dropdown-toggle" href="javascript:void(0);">Dropdown <span class="caret"></span></a>
										  <ul role="menu" class="dropdown-menu dropdown-menu-right">
											<li><a class="pmd-ripple-effect" href="javascript:void(0);">Action</a></li>
											<li><a class="pmd-ripple-effect" href="javascript:void(0);">Another action</a></li>
											<li><a class="pmd-ripple-effect" href="javascript:void(0);">Something else here</a></li>
											<li class="divider"></li>
											<li><a class="pmd-ripple-effect" href="javascript:void(0);">Separated link</a></li>
										  </ul>
										</li>
									  </ul>
									  
									</div><!-- /.navbar-collapse -->
								</div>
								<div class="pmd-sidebar-overlay"></div>
							</nav>
						</section>
                    </div><!-- menu with search example end -->
               			
            	</div>
            </div><!-- end menu with search code and example -->
        </section><!-- Navbar with search end-->
	
    </div><!--container end -->
    
</div><!--menu constructor end -->

	
<!-- Footer Starts -->
<?php include('include/footer.php'); ?>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<?php include('include/scripts.php'); ?>
<!-- Scripts Ends -->

</body>
</html>