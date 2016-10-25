<!--header start -->
<?php include( 'include/header.php'); ?>
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
					<h1 class="pmd-display1">List</h1>
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
									<input type="hidden"  name="list" value="list"/>
									<button name='btn_submit' value='list' type="submit" onClick="downloadList()"  class="btn btn-default pmd-btn-raised btn-sm pmd-ripple-effect pmd-btn-flat custom-btn">Download ZIP</button>
								</form>
							</li>
						</ul> <!--end dropdown menu -->
					</div>
				</div> <!--end download component button dropdown -->
			</div>
		</div>
		
	</div>
	<!-- /.container-fluid --> 
	
</nav>
<!--navigation end -->
	
<!--Lists -->
<div class="pmd-content pmd-content-custom" id="content">
	
	<!-- component header -->
	<div class="componant-title-bg"> 
		<div class="container">
			<div class="row">
			
				<!-- component title and description -->
				<div class="col-xs-12">
					<p class="lead">List is a flexible and powerful component for displaying not only simple lists of elements, but complex ones with custom content.</p>
				</div> <!-- component title and description end -->				
			
			</div>
		</div>
	</div> <!-- component header end -->
	
	<div class="list-custom"> 
		<div class="container"> 
			
			<!-- component list category -->
			<div class="list-group list-group-custom margin-20"> 
				<a class="list-group-item" href="#simple">Bootstrap List</a>
				<a class="list-group-item" href="#single">Single Line List</a> 
				<a class="list-group-item" href="#twoll">Two Line List</a> 
				<a class="list-group-item" href="#thl">Three Line List</a> 
				<a class="list-group-item" href="#linked">Linked List</a> 
				<a class="list-group-item" href="#disable">Disabled List</a> 
				<a class="list-group-item" href="#group">List Group with Contextual classes</a> 
				<a class="list-group-item" href="#config">Configuration Options</a> 
			</div> <!-- component list category end -->
			
			<!-- simple list -->
			<section class="row component-section">
				
				<!-- single line list title and description -->
				<div class="col-md-3">
					<div id="simple">
						<h2>Bootstrap List</h2>
					</div>
					<p>Three different types of lists are defined in Bootstrap: <strong>Unordered List</strong>, <strong>Ordered List</strong>, and <strong>Unstyled List</strong>.</p> 
				</div> <!-- single line list title and description end -->
				
				<!-- Bootstrap list code and example -->
				<div class="col-md-9"> 
                	<!-- Bootstrap basic list-->
					<div class="component-box">
						
						<!-- code view button -->
						<div class="pmd-card-title custom-heading clearfix"> 
							<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
						</div> <!-- code view button end -->
						
						<!-- code view -->
						<div class="code-box">
							<div class="pmd-tabs">
								<div class="pmd-tab-active-bar"></div>
								<ul class="nav nav-tabs" data-tabs="tabs">
									<li class="active"><a href="#bootstrap-single-html" data-toggle="tab">HTML</a></li>
									<li><a href="#bootstrap-single-css" data-toggle="tab">CSS</a></li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="bootstrap-single-html">
									<pre class="pre-codebox line-numbers" data-src="../components/list/snippets/simple-list.html"></pre>
								</div>
								<div class="tab-pane" id="bootstrap-single-css">
									<pre class="pre-codebox line-numbers" data-src="../components/list/snippets/bootstrap-basic.css"></pre>
								</div>
							</div>
						</div> <!-- code view end -->
						
						<!-- simple list example -->
						<div class="row">
							<div class="col-md-4"> 
								<div class="pmd-card pmd-z-depth pmd-card-custom-view">
									<div class="pmd-card-body">
										<ul>
										  <li>First item</li>
										  <li>Second item</li>
										  <li>Third item
										  	<ul>
												<li>Nested First item</li>
												<li>Nested Second item</li>
											</ul>
										  </li>
										  <li>Forth item</li>
										  <li>Fifth item</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-4"> 
								<div class="pmd-card pmd-z-depth pmd-card-custom-view">
									<div class="pmd-card-body">
										<ol>
											<li>First item</li>
										  	<li>Second item</li>
											<li>Third item
												<ol>
													<li>Nested First item</li>
													<li>Nested Second item</li>
												</ol>
											</li>
											<li>Forth item</li>
											<li>Fifth item</li>
										</ol>
									</div>
								</div>
							</div>
							<div class="col-md-4"> 
								<div class="pmd-card pmd-z-depth pmd-card-custom-view">
									<div class="pmd-card-body">
										<ul class="list-unstyled">
											<li>First item</li>
											<li>Second item
												<ul>
													<li>Nested First item</li>
													<li>Nested Second item</li>
												</ul>
											</li>
											<li>Third item</li>
											<li>forth item</li>
											<li>Fifth item</li>
										</ul>
									</div>
								</div>
							</div>
						</div> <!-- simple list example end -->

					</div><!-- Bootstrap basic list ends--> 
                    <!-- Description list-->
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
									<li class="active"><a href="#description-html" data-toggle="tab">HTML</a></li>
									<li><a href="#description-css" data-toggle="tab">CSS</a></li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="description-html">
									<pre class="pre-codebox line-numbers" data-src="../components/list/snippets/description-list.html"></pre>
								</div>
								<div class="tab-pane" id="description-css">
									<pre class="pre-codebox line-numbers" data-src="../components/list/snippets/bootstrap-basic.css"></pre>
								</div>
							</div>
						</div> <!-- code view end -->
						
						<!-- Description list example -->
						<div class="row">
							<div class="col-md-12">
								<div class="pmd-card pmd-z-depth">
									<div class="pmd-card-body">
										<dl class="dl-horizontal"> 
											<dt>Description lists</dt> 
											<dd>A description list is perfect for defining terms.</dd> 
											<dt>Unordered</dt> 
											<dd>A list of items in which the order does not explicitly matter.</dd> 
											<dt>Ordered</dt> 
											<dd>A list of items in which the order does explicitly matter.</dd> 
											<dt>Unstyled</dt> 
											<dd>Remove the default <code>list-style</code> and left margin on list items (immediate children only). This only applies to immediate children list items, meaning you will need to add                                            the class for any nested lists as well.</dd> 
                                            <dt>Horizontal description</dt>
                                            <dd>Make terms and descriptions in <code><</code><code>dl</code><code>></code> line up side-by-side. Starts off stacked like default <code><</code><code>dl</code><code>></code>, but when the navbar expands, so do these.
										</dl>
									</div>
								</div>
                                <p class="component-desc">Bootstrap provides <strong>Description List</strong> which consists of a list of terms with their associated description. </p>
							</div>
                            
						</div> <!-- Description list example end -->
						
					</div><!-- Description list end -->
				</div> <!-- Bootstrap code and example end -->
			</section> <!-- Bootstrap list end -->
			
			<!-- single line list -->
			<section class="row component-section">
				
				<!-- single line list title and description -->
				<div class="col-md-3">
					<div id="single">
						<h2>Single line List</h2>
					</div>
					<p>In a <strong>single-line list</strong>, each tile contains a single line of text. The amount of text can vary between tiles within the same list.</p>
					Add <code>.pmd-card-list</code> followed by <code>.list-group</code> for the basic formatting of your list. 
				</div> <!-- single line list title and description end -->
				
				<!-- single line list code and example -->
				<div class="col-md-9"> 
					<div class="component-box">
						
						<!-- code view button -->
						<div class="pmd-card-title custom-heading clearfix"> 
							<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
						</div> <!-- code view button end -->
						
						<!-- code view -->
						<div class="code-box">
							<div class="pmd-tabs">
								<div class="pmd-tab-active-bar"></div>
								<ul class="nav nav-tabs" data-tabs="tabs">
									<li class="active"><a href="#single-html" data-toggle="tab">HTML</a></li>
									<li><a href="#single-css" data-toggle="tab">CSS</a></li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="single-html">
									<pre class="pre-codebox line-numbers" data-src="../components/list/snippets/single-line.html"></pre>
								</div>
								<div class="tab-pane" id="single-css">
									<pre class="pre-codebox line-numbers" data-src="../components/list/snippets/list-group.css"></pre>
								</div>
							</div>
						</div> <!-- code view end -->
						
						<!-- single line list example -->
						<div class="row">
							<div class="col-md-6"> 
								<ul class="list-group pmd-z-depth pmd-list pmd-card-list">
								  <li class="list-group-item">Single-line item</li>
								  <li class="list-group-item">Single-line item</li>
								  <li class="list-group-item">Single-line item</li>
								  <li class="list-group-item">Single-line item</li>
								  <li class="list-group-item">Single-line item</li>
								</ul>
							</div>
							<div class="col-md-6"> 	
								<ul class="list-group pmd-z-depth pmd-list pmd-card-list pmd-list-icon">
									<li class="list-group-item">
										<i class="material-icons media-left pmd-sm">mood</i> 
										<span class="media-body">Single-line item with icon</span>
									</li>
									<li class="list-group-item">
										<i class="material-icons media-left media-middle">notifications</i>
										<div class="media-body">Single-line item with icon</div>
									</li>
									<li class="list-group-item"> <i class="material-icons media-left">person_add</i>
										<div class="media-body">Single-line item with icon</div>
									</li>
									<li class="list-group-item"> <i class="material-icons media-left">share</i>
										<div class="media-body">Single-line item with icon</div>
									</li>
									<li class="list-group-item"> <i class="material-icons media-left">drive_eta</i>
										<div class="media-body">Single-line item with icon</div>
									</li>
								</ul>
								<p class="component-desc"><strong>Icon list</strong> displays icon before the text lines. Add <code>.pmd-list-icon</code> for list with icons.</p>
							</div>
						</div> <!-- single line list example end -->
						
					</div>
				</div> <!-- single line list code and example end -->
				
				<!-- avatar list title and description-->
				<div class="col-md-3">
					<h2>&nbsp;</h2>
					<p>Distinguishing elements of list tiles need to be on the left for Left-to-Right interfaces, and vice versa. States and primary actions are placed on the left side of a list tile. Text within a list item should be considered part of the primary action target.</p>
				</div> <!-- avatar list title and description end -->
				
				<!-- avatar list code and example -->
				<div class="col-md-9"> 
					<div class="component-box">
					
						<!-- code view button -->
						<div class="pmd-card-title custom-heading clearfix"> 
							<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
						</div> <!-- code view button end -->
						
						<!-- code view -->
						<div class="code-box">
							<div class="pmd-tabs">
								<div class="pmd-tab-active-bar"></div>
								<ul class="nav nav-tabs" data-tabs="tabs">
									<li class="active"><a href="#double-html" data-toggle="tab">HTML</a></li>
									<li><a href="#double-css" data-toggle="tab">CSS</a></li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="double-html">
									<pre class="pre-codebox line-numbers" data-src="../components/list/snippets/single-avtar.html"></pre>
								</div>
								<div class="tab-pane" id="double-css">
									<pre class="pre-codebox line-numbers" data-src="../components/list/snippets/list-group.css"></pre>
								</div>
							</div>
						</div> <!-- code view end -->
						
						<!-- avatar list example -->
						<div class="row">
							<div class="col-md-6">
								<ul class="list-group pmd-z-depth pmd-list pmd-card-list pmd-list-avatar">
									<li class="list-group-item">
										<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
										<div class="media-body media-middle"> Single-line item with avatar </div>
									</li>
									<li class="list-group-item">
										<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
										<div class="media-body media-middle"> Single-line item with avatar </div>
									</li>
									<li class="list-group-item">
										<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
										<div class="media-body media-middle"> Single-line item with avatar </div>
									</li>
								</ul>
								<p class="component-desc">Single-line List with avatar. Add <code>.pmd-list-avatar</code> for list with avatar.</p>
							</div>
							<div class="col-md-6">
								<ul class="list-group pmd-z-depth pmd-list pmd-card-list pmd-list-avatar">
									<li class="list-group-item">
										<div class="media-left"> <a class="avatar-list-img" href="javascript:void(0);"> <img data-holder-rendered="true" src="../components/list/img/40x40.png" class="img-responsive" data-src="holder.js/40x40" alt="40x40"> </a> </div>
										<div class="media-body media-middle"> Single-line item with avatar and icon </div>
										<i class="material-icons media-middle media-right">check_box</i> </li>
									<li class="list-group-item">
										<div class="media-left"> <a class="avatar-list-img" href="javascript:void(0);"> <img data-holder-rendered="true" src="../components/list/img/40x40.png" class="img-responsive" data-src="holder.js/40x40" alt="40x40"> </a> </div>
										<div class="media-body media-middle"> Single-line item with avatar and icon </div>
										<i class="material-icons media-middle media-right">check_box_outline_blank</i> </li>
									<li class="list-group-item">
										<div class="media-left"> <a class="avatar-list-img" href="javascript:void(0);"> <img data-holder-rendered="true" src="../components/list/img/40x40.png" class="img-responsive" data-src="holder.js/40x40" alt="40x40"> </a> </div>
										<div class="media-body media-middle"> Single-line item with avatar and icon </div>
										<i class="material-icons media-middle media-right">check_box_outline_blank</i> </li>
								</ul>
								<p class="component-desc">Single-line List with avatar and icon. Add <code>.pmd-list-avatar</code> along with <code>.pmd-list-icon</code> for list with avatar.</p>
							</div>
						</div> <!-- avatar list example end -->
						
					</div>
				</div> <!-- avatar list code and example end -->
			</section> <!-- single line list end -->
			
			<!-- Two Line List -->
			<section class="row component-section">
				
				<!-- Two Line List title and description -->
				<div class="col-md-3">
					<div id="twoll">
						<h2>Two Line List</h2>
					</div>
					<p>In a <strong>two-line list</strong>, each tile contains a maximum of two lines of text. The amount of text can vary between tiles within the same list.</p>
				</div> <!-- Two Line List title and description end -->
				
				<!-- Two Line List code and example -->
				<div class="col-md-9"> 
					<div class="component-box">
					
						<!-- code view button -->
						<div class="pmd-card-title custom-heading clearfix"> 
							<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
						</div> <!-- code view button end -->
						
						<!-- code view -->
						<div class="code-box">
							<div class="pmd-tabs">
								<div class="pmd-tab-active-bar"></div>
								<ul class="nav nav-tabs" data-tabs="tabs">
									<li class="active"><a href="#twoll-html" data-toggle="tab">HTML</a></li>
									<li><a href="#twoll-css" data-toggle="tab">CSS</a></li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="twoll-html">
									<pre class="pre-codebox line-numbers" data-src="../components/list/snippets/two-line.html"></pre>
								</div>
								<div class="tab-pane" id="twoll-css">
									<pre class="pre-codebox line-numbers" data-src="../components/list/snippets/list-group.css"></pre>
								</div>
							</div>
						</div> <!-- code view end -->
						
						<!-- two line list example -->
						<div class="row">
							<div class="col-md-4"> 
								<!--Two line list -->
								<ul class="list-group pmd-z-depth pmd-list pmd-card-list pmd-list">
									<li class="list-group-item">
										<h3 class="list-group-item-heading">Two-line item</h3>
										<span class="list-group-item-text">Secondary text</span> </li>
									<li class="list-group-item">
										<h3 class="list-group-item-heading">Two-line item</h3>
										<span class="list-group-item-text">Secondary text</span> </li>
									<li class="list-group-item">
										<h3 class="list-group-item-heading">Two-line item</h3>
										<span class="list-group-item-text">Secondary text</span> </li>
								</ul>
								<p class="component-desc">Two-line List</p>
							</div>
							<div class="col-md-4"> 
								<!--Two line list with icon -->
								<ul class="list-group pmd-z-depth pmd-list pmd-card-list">
									<li class="list-group-item"> <i class="material-icons media-left media-middle">mood</i>
										<div class="media-body">
											<h3 class="list-group-item-heading">Two-line item</h3>
											<span class="list-group-item-text">Secondary text</span> </div>
									</li>
									<li class="list-group-item"> <i class="material-icons media-left media-middle">notifications</i>
										<div class="media-body">
											<h3 class="list-group-item-heading">Two-line item</h3>
											<span class="list-group-item-text">Secondary text</span> </div>
									</li>
									<li class="list-group-item"> <i class="material-icons media-left media-middle">share</i>
										<div class="media-body">
											<h3 class="list-group-item-heading">Two-line item</h3>
											<span class="list-group-item-text">Secondary text</span> </div>
									</li>
								</ul>
								<p class="component-desc">Two-line List with Icon</p>
							</div>
							<div class="col-md-4"> 
								<!--Avatar with secondary text -->
								<ul class="list-group pmd-z-depth pmd-list pmd-card-list">
									<li class="list-group-item">
										<div class="media-left"> <a class="avatar-list-img avatar-list-img-custom" href="javascript:void(0);"> <img data-holder-rendered="true" src="../components/list/img/40x40.png" class="img-responsive" data-src="holder.js/40x40" alt="40x40"> </a> </div>
										<div class="media-body media-middle">
											<h3 class="list-group-item-heading">Two-line item</h3>
											<span class="list-group-item-text">Secondary text</span> </div>
									</li>
									<li class="list-group-item">
										<div class="media-left"> <a class="avatar-list-img avatar-list-img-custom" href="javascript:void(0);"> <img data-holder-rendered="true" src="../components/list/img/40x40.png" class="img-responsive" data-src="holder.js/40x40" alt="40x40"> </a> </div>
										<div class="media-body media-middle">
											<h3 class="list-group-item-heading">Two-line item</h3>
											<span class="list-group-item-text">Secondary text</span> </div>
									</li>
									<li class="list-group-item">
										<div class="media-left"> <a class="avatar-list-img avatar-list-img-custom" href="javascript:void(0);"> <img data-holder-rendered="true" src="../components/list/img/40x40.png" class="img-responsive" data-src="holder.js/40x40" alt="40x40"> </a> </div>
										<div class="media-body media-middle">
											<h3 class="list-group-item-heading">Two-line item</h3>
											<span class="list-group-item-text">Secondary text</span> </div>
									</li>
								</ul>
								<p class="component-desc">Two-line List with Avatar</p>
							</div>
						</div> <!-- two line list example end -->
					</div>
				</div> <!-- Two Line List code and example end -->
			</section> <!-- Two Line List end -->
			 
			<!-- Three Line List -->
			<section class="row component-section">
				
				<!-- Three Line List title and description --> 
				<div class="col-md-3">
					<div id="thl">
						<h2>Three Line List</h2>
					</div>
					<p>If the secondary text is of two lines, it will appear like this.</p>
				</div> <!-- Three Line List title and description end -->
				
				<!-- Three Line List code and example -->
				<div class="col-md-9"> 
					<div class="component-box">
					
						<!-- code view button -->
						<div class="pmd-card-title custom-heading clearfix"> 
							<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
						</div> <!-- code view button end -->
						
						<!-- code view -->
						<div class="code-box">
							<div class="pmd-tabs">
								<div class="pmd-tab-active-bar"></div>
								<ul class="nav nav-tabs" data-tabs="tabs">
									<li class="active"><a href="#thl-html" data-toggle="tab">HTML</a></li>
									<li><a href="#thl-css" data-toggle="tab">CSS</a></li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="thl-html">
									<pre class="pre-codebox line-numbers" data-src="../components/list/snippets/three-line.html"></pre>
								</div>
								<div class="tab-pane" id="thl-css">
									<pre class="pre-codebox line-numbers" data-src="../components/list/snippets/list-group.css"></pre>
								</div>
							</div>
						</div> <!-- code view end -->
						
						<!-- three line list example -->
						<div class="row">
							<div class="col-md-6"> 
								<!--Three-line list group start -->
								<ul class="list-group pmd-z-depth pmd-list pmd-card-list">
									<li class="list-group-item">
										<div class="media-body">
											<h3 class="list-group-item-heading">Three-line item</h3>
											<span class="list-group-item-text">In a three-line list, each tile contains a maximum of three lines of text.</span> </div>
									</li>
									<li class="list-group-item">
										<div class="media-body">
											<h3 class="list-group-item-heading">Three-line item</h3>
											<span class="list-group-item-text">The amount of text can vary between tiles within the same list.</span> </div>
									</li>
									<li class="list-group-item">
										<div class="media-body">
											<h3 class="list-group-item-heading">Three-line item</h3>
											<span class="list-group-item-text">If more than three lines of text need to be shown in list tiles, use cards instead.</span> </div>
									</li>
								</ul>
								<!--Three line list group end -->
								<p class="component-desc">Three-line List</p>
							</div>
							<div class="col-md-6"> 
								<!--Three line with icon list group start -->
								<ul class="list-group pmd-z-depth pmd-list pmd-card-list">
									<li class="list-group-item"> <i class="material-icons media-left pmd-sm">mood</i>
										<div class="media-body">
											<h3 class="list-group-item-heading">Three-line item</h3>
											<span class="list-group-item-text">In a three-line list, each tile contains a maximum of three lines of text.</span> </div>
									</li>
									<li class="list-group-item"> <i class="material-icons media-left">notifications</i>
										<div class="media-body">
											<h3 class="list-group-item-heading">Three-line item</h3>
											<span class="list-group-item-text">The amount of text can vary between tiles within the same list.</span> </div>
									</li>
									<li class="list-group-item"> <i class="material-icons media-left">share</i>
										<div class="media-body">
											<h3 class="list-group-item-heading">Three-line item</h3>
											<span class="list-group-item-text">If more than three lines of text need to be shown in list tiles, use cards instead.</span> </div>
									</li>
								</ul>
								<!--Three line with icon list group end -->
								<p class="component-desc">Three-line List with Icon</p>
							</div>
						</div> <!-- three line list example end -->
						
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
									<li class="active"><a href="#avttli-html" data-toggle="tab">HTML</a></li>
									<li><a href="#avttli-css" data-toggle="tab">CSS</a></li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="avttli-html">
									<pre class="pre-codebox line-numbers" data-src="../components/list/snippets/three-avtar.html"></pre>
								</div>
								<div class="tab-pane" id="avttli-css">
									<pre class="pre-codebox line-numbers" data-src="../components/list/snippets/list-group.css"></pre>
								</div>
							</div>
						</div> <!-- code view end -->
						
						<!-- three line list with media -->
						<div class="row">
							<div class="col-md-6"> 
								<!--Avatar with Three Line Text start -->
								<ul class="list-group pmd-z-depth pmd-list pmd-card-list">
									<li class="list-group-item">
										<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
										<div class="media-body">
											<h3 class="list-group-item-heading">Three-line item</h3>
											<span class="list-group-item-text">In a three-line list, each tile contains a maximum of three lines of text.</span> </div>
									</li>
									<li class="list-group-item">
										<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
										<div class="media-body">
											<h3 class="list-group-item-heading">Three-line item</h3>
											<span class="list-group-item-text">The amount of text can vary between tiles within the same list.</span> </div>
									</li>
									<li class="list-group-item">
										<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
										<div class="media-body">
											<h3 class="list-group-item-heading">Three-line item</h3>
											<span class="list-group-item-text">If more than three lines of text need to be shown in list tiles, use cards instead.</span> </div>
									</li>
								</ul>
								<!--Avatar with Three Line Text end -->
								<p class="component-desc">Three-line List with Avatar</p>
							</div>
							<div class="col-md-6"> 
								<!--Avatar with Three Line Text and Icon -->
								<ul class="list-group pmd-z-depth pmd-list pmd-card-list">
									<li class="list-group-item">
										<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
										<div class="media-body">
											<h3 class="list-group-item-heading">Three-line item</h3>
											<span class="list-group-item-text">In a three-line list, each tile contains a maximum of three lines of text.</span> </div>
										<i class="material-icons media-right">check_box</i> </li>
									<li class="list-group-item">
										<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
										<div class="media-body">
											<h3 class="list-group-item-heading">Three-line item</h3>
											<span class="list-group-item-text">The amount of text can vary between tiles within the same list.</span> </div>
										<i class="material-icons media-right">check_box_outline_blank</i> </li>
									<li class="list-group-item">
										<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
										<div class="media-body">
											<h3 class="list-group-item-heading">Three-line item</h3>
											<span class="list-group-item-text">If more than three lines of text need to be shown in list tiles, use cards instead.</span> </div>
										<i class="material-icons media-right">check_box_outline_blank</i> </li>
								</ul>
								<!--Avatar with Three Line Text and Icon  end-->
								
								<p class="component-desc">Three-line List with Avatar and Icon</p>
							</div>
						</div> <!-- three line list with media end -->
					</div>
				</div> <!-- Three Line List code and example end -->
			</section> <!-- Three Line List end --> 			
			
			<!-- Linked list -->
			<section class="row component-section">
				
				<!-- Linked list title and description --> 
				<div class="col-md-3">
					<div id="linked">
						<h2>Linked List</h2>
					</div>
					<p>Make list group items clickable by using anchor tags instead of list items (that also means a parent <code>&lt;div&gt;</code> instead of an <code>&lt;ul&gt;</code>). No need for individual parents around each element.</p>
				</div> <!-- Linked list title and description end -->
				
				<!-- Linked list code and example -->
				<div class="col-md-9"> 
					<div class="component-box">
						
						<!-- code view button -->
						<div class="pmd-card-title custom-heading clearfix"> 
							<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
						</div> <!-- code view button end -->
						
						<!-- code view -->
						<div class="code-box">
							<div class="pmd-tabs">
								<div class="pmd-tab-active-bar"></div>
								<ul class="nav nav-tabs" data-tabs="tabs">
									<li class="active"><a href="#linked-html" data-toggle="tab">HTML</a></li>
									<li><a href="#linked-css" data-toggle="tab">CSS</a></li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="linked-html">
									<pre class="pre-codebox line-numbers" data-src="../components/list/snippets/linked-items.html"></pre>
								</div>
								<div class="tab-pane" id="linked-css">
									<pre class="pre-codebox line-numbers" data-src="../components/list/snippets/list-group.css"></pre>
								</div>
							</div>
						</div> <!-- code view end -->
						
						<!-- linked list example -->
						<div class="row">
							<div class="col-md-12"> 
								<div class="list-group pmd-z-depth pmd-list pmd-card-list"> <a class="list-group-item" href="javascript:void(0);">Single-line item</a> <a class="list-group-item" href="javascript:void(0);">Single-line item</a> <a class="list-group-item" href="javascript:void(0);">Single-line item</a> <a class="list-group-item" href="javascript:void(0);">Single-line item</a> <a class="list-group-item" href="javascript:void(0);">Single-line item</a> </div>
							</div>
						</div> <!-- linked list example end -->
						
					</div>
				</div> <!-- Linked list code and example end -->
			</section> <!-- Linked list end --> 			
			
			<!-- Disabled list -->
			<section class="row component-section">
				
				<!-- Disabled list title and description -->
				<div class="col-md-3">
					<div id="disable">
						<h2>Disabled List</h2>
					</div>
					<p>Add <code>.disabled</code> to a <code>.list-group-item</code> to gray it out to appear disabled.</p>
				</div> <!-- Disabled list title and description end -->
				
				<!-- Disabled list code and example -->
				<div class="col-md-9"> 
					<div class="component-box">
					
						<!-- code view button -->
						<div class="pmd-card-title custom-heading clearfix"> 
							<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
						</div> <!-- code view button end -->
						
						<!-- code view -->
						<div class="code-box">
							<div class="pmd-tabs">
								<div class="pmd-tab-active-bar"></div>
								<ul class="nav nav-tabs" data-tabs="tabs">
									<li class="active"><a href="#disable-html" data-toggle="tab">HTML</a></li>
									<li><a href="#disable-css" data-toggle="tab">CSS</a></li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="disable-html">
									<pre class="pre-codebox line-numbers" data-src="../components/list/snippets/disabled-list-items.html"></pre>
								</div>
								<div class="tab-pane" id="disable-css">
									<pre class="pre-codebox line-numbers" data-src="../components/list/snippets/list-group.css"></pre>
								</div>
							</div>
						</div> <!-- code view end -->
						
						<!-- disabled list example -->
						<div class="row">
							<div class="col-md-12">
								<!-- List containing disabled link -->
                                <div class="list-group pmd-z-depth pmd-list pmd-card-list">
                                    <a class="list-group-item disabled" href="javascript:void(0);">Disabled List item</a>
                                    <a class="list-group-item" href="javascript:void(0);">List item</a>
                                    <a class="list-group-item" href="javascript:void(0);">List item</a>
                                    <a class="list-group-item" href="javascript:void(0);">List item</a>
                                    <a class="list-group-item" href="javascript:void(0);">List item</a>
                                </div>
							</div>
						</div> <!-- disabled list example end -->
						
					</div>
				</div> <!-- Disabled list code and example end -->
			</section> <!-- Disabled list end -->			 
			
			<!-- Group Item list -->
			<section class="row component-section">
				
				<!-- Group Item list title and description --> 
				<div class="col-md-3">
					<div id="group">
						<h2>List Group with Contextual classes</h2>
					</div>
					<p>Use contextual classes to style list items, default or linked. Also includes <code>.active</code> state.</p>
				</div> <!-- Group Item list title and description end -->
				
				<!-- Group Item list code and example -->
				<div class="col-md-9"> 
					<div class="component-box">
						
						<!-- code view button -->
						<div class="pmd-card-title custom-heading clearfix"> 
							<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
						</div> <!-- code view button end -->
						
						<!-- code view -->
						<div class="code-box">
							<div class="pmd-tabs">
								<div class="pmd-tab-active-bar"></div>
								<ul class="nav nav-tabs" data-tabs="tabs">
									<li class="active"><a href="#group-html" data-toggle="tab">HTML</a></li>
									<li><a href="#group-css" data-toggle="tab">CSS</a></li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="group-html">
									<pre class="pre-codebox line-numbers" data-src="../components/list/snippets/group-items.html"></pre>
								</div>
								<div class="tab-pane" id="group-css">
									<pre class="pre-codebox line-numbers" data-src="../components/list/snippets/list-group.css"></pre>
								</div>
							</div>
						</div> <!-- code view end -->
						
						<!-- group item list example -->
						<div class="row">
							<div class="col-md-6"> 
								<!--Group Items of diffrent types start -->
								<ul class="list-group pmd-z-depth pmd-list pmd-card-list">
									<li class="list-group-item list-group-item-success">List group item with <code>success</code> class.</li>
									<li class="list-group-item list-group-item-info">List group item with <code>info</code> class.</li>
									<li class="list-group-item list-group-item-warning">List group item with <code>warning</code> class.</li>
									<li class="list-group-item list-group-item-danger">List group item with <code>danger</code> class.</li>
								</ul>
								<!--Group Items of diffrent types end -->
								<p class="component-desc">List Group with diffrent contextual classes.</p>
							</div>
							<div class="col-md-6"> 
								<!--Group Items with Linking start -->
								<div class="list-group pmd-z-depth pmd-list pmd-card-list"> 
									<a class="list-group-item list-group-item-success" href="javascript:void()0;">Linked List group item with <code>success</code> class.</a>
									<a class="list-group-item list-group-item-info" href="javascript:void()0;">Linked List group item with <code>info</code> class.</a>
									<a class="list-group-item list-group-item-warning" href="javascript:void()0;">Linked List group item with <code>warning</code> class.</a>
									<a class="list-group-item list-group-item-danger" href="javascript:void()0;">Linked List group item with <code>danger</code> class.</a>
								</div>
								<!--Group Items with Linking end -->
								<p class="component-desc">Linked List Group with different contextual classes.</p>
							</div>
						</div> <!-- group item list example end -->
						
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
									<li class="active"><a href="#group2-html" data-toggle="tab">HTML</a></li>
									<li><a href="#group2-css" data-toggle="tab">CSS</a></li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="group2-html">
									<pre class="pre-codebox line-numbers" data-src="../components/list/snippets/group-items-with-heading.html"></pre>
								</div>
								<div class="tab-pane" id="group2-css">
									<pre class="pre-codebox line-numbers" data-src="../components/list/snippets/list-group.css"></pre>
								</div>
							</div>
						</div> <!-- code view end -->
						
						<!-- grouped list example -->
						<div class="row">
							<div class="col-md-12">
								<!--List group items with heading and Linking start -->
								<div class="list-group pmd-z-depth pmd-list pmd-card-list"> <a href="javascript:void(0);" class="list-group-item ">
									<h3 class="list-group-item-heading">List group item heading</h3>
									<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
									</a> <a href="javascript:void(0);" class="list-group-item">
									<h3 class="list-group-item-heading">List group item heading</h3>
									<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
									</a> <a href="javascript:void(0);" class="list-group-item">
									<h3 class="list-group-item-heading">List group item heading</h3>
									<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
									</a> </div>
								<!--List group items with heading and Linking end -->
								<p class="component-desc">Linked List Group with heading</p>
							</div>
						</div> <!-- grouped list example end -->
					</div>
				</div> <!-- Group Item list code and example end -->
			</section> <!-- Group Item list end --> 			
			
			<!-- Configuration starts-->
			<section class="row component-section">
				<div class="col-md-3">
					<div id="config">
						<h2>Configuration Options</h2>
					</div>
					<p>The Propeller CSS classes apply various predefined visual enhancements to the Lists. The table lists the available classes and their effects.</p>
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
										<td data-title="Class"><code>.pmd-list</code></td>
										<td data-title="Effect">Add this class for all the list items.</td>
										<td data-title="Remark">Required</td>
									</tr>
									<tr>
										<td data-title="Class"><code>.pmd-card-list</code></td>
										<td data-title="Effect">Class to be added to the list for formatting purpose.</td>
										<td data-title="Remark">Required</td>
									</tr>
									<tr>
										<td data-title="Class"><code>.pmd-list-icon</code></td>
										<td data-title="Effect">Add this class when your list contains icons.</td>
										<td data-title="Remark">Optional</td>
									</tr>
									<tr>
										<td data-title="Class"><code>.pmd-list-avatar</code></td>
										<td data-title="Effect">Add this class when your list contains profile pic.</td>
										<td data-title="Remark">Optional</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</section> <!-- Configuration ends--> 
			
		</div>
		<!--container end --> 
	</div>
</div> <!--Lists end -->
 
	
<!--footer start -->
<?php include( 'include/footer.php'); ?>
<!--footer end -->