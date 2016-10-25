  <!-- Overlay for sidebar -->
  <div class="pmd-sidebar-overlay"></div>
  <!--aside -->
  <aside class="pmd-sidebar sidebar-default pmd-sidebar-slide-push pmd-sidebar-left pmd-sidebar-open pmd-z-depth propeller-docs-sidebar" role="navigation">
		<div class="navbar-header"> 
			<a class="navbar-brand navbar-brand-custom" href="../index.html"><img src="../assets/landing-page/images/propeller-logo.png" /></a> 
		</div>

        <!--sidebar-search -->
        <div class="sidebar-search">
			
            <div class="form-group pmd-textfield pmd-textfield-floating-label">
            	<input id="search" class="form-control" type="text" placeholder="Search">

                <div class="search-results"></div>
            </div>
            
            <button class="btn btn-sidebar-search">
            	<i class="material-icons md-light">search</i>
            </button>

        </div>
        <!--sidebar-search -->

        <!--nav -->
		<ul class="nav pmd-sidebar-nav">
			<!-- My Account -->
			<li><a <?php if (strpos($_SERVER['PHP_SELF'], 'index.php')) echo 'class="active"';?> class="pmd-ripple-effect" href="index.php"> <i class="material-icons media-left pmd-sm">slideshow</i><span class="media-body media-middle"> Get Started</span></a></li>
			
			<!-- Style catagory--> 
		  	<li class="dropdown pmd-dropdown">
				<a class="pmd-ripple-effect <?php if($menu == STYLE_MENU){ ?>default-open<?php } ?>" id="hide" data-toggle="dropdown" class="dropdown-toggle media" data-sidebar="true" aria-expandedhref="javascript:void(0);"><i class="material-icons media-left pmd-sm">layers</i><span class="media-body media-middle"> Style</span></a>
				<ul class="dropdown-menu">
					<li> <a <?php if (strpos($_SERVER['PHP_SELF'], 'typography.php')) echo 'class="active"';?> class="pmd-ripple-effect" href="typography.php">Typography</a> </li>
					<li> <a <?php if (strpos($_SERVER['PHP_SELF'], 'icons.php')) echo 'class="active"';?> class="pmd-ripple-effect" href="icons.php">Icons</a> </li>
					<li> <a <?php if (strpos($_SERVER['PHP_SELF'], 'shadow.php')) echo 'class="active"';?> class="pmd-ripple-effect" href="shadow.php">Shadow</a> </li>
				</ul>
			</li>
			<!-- UI catagory-->
			<li class="dropdown pmd-dropdown">
				<a class="pmd-ripple-effect <?php if($menu == PROPELLER_COMPONENTS_MENU){ ?>default-open<?php } ?>" data-toggle="dropdown" class="dropdown-toggle media" data-sidebar="true" aria-expandedhref="javascript:void(0);"><i class="material-icons media-left pmd-sm">swap_calls</i><span class="media-body media-middle">Propeller Components</span></a>
				<ul class="dropdown-menu">
					<li> <a <?php if (strpos($_SERVER['PHP_SELF'], 'accordion.php')) echo 'class="active"';?> class="pmd-ripple-effect" href="accordion.php">Accordion</a> </li> 
					<li> <a <?php if (strpos($_SERVER['PHP_SELF'], 'alert.php')) echo 'class="active"';?> class="pmd-ripple-effect" href="alert.php">Alert</a> </li>
					<li> <a <?php if (strpos($_SERVER['PHP_SELF'], 'badge.php')) echo 'class="active"';?> class="pmd-ripple-effect" href="badge.php">Badge</a> </li> 
					<li> <a <?php if (strpos($_SERVER['PHP_SELF'], 'button.php')) echo 'class="active"';?> href="button.php" class="pmd-ripple-effect">Button</a> </li>
					<li> <a <?php if (strpos($_SERVER['PHP_SELF'], 'modal.php')) echo 'class="active"';?> class="pmd-ripple-effect" href="modal.php">Modal</a> </li>
					<li> <a <?php if (strpos($_SERVER['PHP_SELF'], 'dropdown.php')) echo 'class="active"';?> class="pmd-ripple-effect" href="dropdown.php">Dropdown</a> </li>
					<li> <a <?php if (strpos($_SERVER['PHP_SELF'], 'form.php')) echo 'class="active"';?> class="ripple-effect" href="form.php">Form</a> </li> 
					<li> <a <?php if (strpos($_SERVER['PHP_SELF'], 'list.php')) echo 'class="active"';?> class="pmd-ripple-effect" href="list.php">List</a> </li>
					<li><a <?php if (strpos($_SERVER['PHP_SELF'], 'navbar.php')) echo 'class="active"';?> class="ripple-effect" href="navbar.php"> Navbar </a> </li>
					<li> <a <?php if (strpos($_SERVER['PHP_SELF'], 'popover.php')) echo 'class="active"';?> class="pmd-ripple-effect" href="popover.php">Popover</a></li>
					<li> <a <?php if (strpos($_SERVER['PHP_SELF'], 'progressbar.php')) echo 'class="active"';?> class="pmd-ripple-effect" href="progressbar.php">Progressbar</a></li>
					<li> <a <?php if (strpos($_SERVER['PHP_SELF'], 'sidebar.php')) echo 'class="active"';?> class="pmd-ripple-effect" href="sidebar.php"> Sidebar </a> </li>
					<li> <a <?php if (strpos($_SERVER['PHP_SELF'], 'tab.php')) echo 'class="active"';?> class="ripple-effect" href="tab.php">Tab</a> </li>
					<li> <a <?php if (strpos($_SERVER['PHP_SELF'], 'table.php')) echo 'class="active"';?> class="pmd-ripple-effect" href="table.php">Table</a></li>
					<li> <a <?php if (strpos($_SERVER['PHP_SELF'], 'tooltip.php')) echo 'class="active"';?> class="pmd-ripple-effect" href="tooltip.php">Tooltip</a> </li>			

				</ul>
			</li>
		    <!-- UI catagory-->
			<li class="dropdown pmd-dropdown">
				<a class="pmd-ripple-effect <?php if($menu == MATERIALIZED_COMPONENTS_MENU){ ?>default-open<?php } ?>" data-toggle="dropdown" class="dropdown-toggle media" data-sidebar="true" aria-expandedhref="javascript:void(0);"><i class="material-icons media-left pmd-sm">swap_calls</i><span class="media-body media-middle">Materialized Components</span></a>
				<ul class="dropdown-menu">
					<li> <a <?php if (strpos($_SERVER['PHP_SELF'], 'card.php')) echo 'class="active"';?> href="card.php" class="pmd-ripple-effect">Card</a> </li>
					<li> <a <?php if (strpos($_SERVER['PHP_SELF'], 'floating-button.php')) echo 'class="active"';?> class="pmd-ripple-effect" href="floating-button.php">Floating Action Button</a> </li>
				</ul>
			</li>
		    <!-- UI catagory-->
			<li class="dropdown pmd-dropdown">
				<a class="pmd-ripple-effect <?php if($menu == THIRD_PARTY_COMPONENTS_MENU){ ?>default-open<?php } ?>" data-toggle="dropdown" class="dropdown-toggle media" data-sidebar="true" aria-expandedhref="javascript:void(0);"><i class="material-icons media-left pmd-sm">swap_calls</i><span class="media-body media-middle">Third Party Components</span></a>
				<ul class="dropdown-menu">
					<li> <a <?php if (strpos($_SERVER['PHP_SELF'], 'custom-scroll.php')) echo 'class="active"';?> class="pmd-ripple-effect" href="custom-scroll.php">Custom Scrollbar</a></li>
					<li> <a <?php if (strpos($_SERVER['PHP_SELF'], 'data-table.php')) echo 'class="active"';?> class="pmd-ripple-effect" href="data-table.php">Data Table</a></li>
					<li> <a <?php if (strpos($_SERVER['PHP_SELF'], 'datetimepicker.php')) echo 'class="active"';?> class="pmd-ripple-effect" href="datetimepicker.php">Datetimepicker</a> </li>
					<li> <a <?php if (strpos($_SERVER['PHP_SELF'], 'range-slider.php')) echo 'class="active"';?> class="pmd-ripple-effect" href="range-slider.php">Range Slider</a> </li>
					<li> <a <?php if (strpos($_SERVER['PHP_SELF'], 'select2.php')) echo 'class="active"';?> class="pmd-ripple-effect" href="select2.php">Select2</a> </li>
				</ul>
			</li>
		</ul>
        <!--nav -->
	</aside>
  	<!--aside -->