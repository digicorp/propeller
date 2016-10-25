<!--header start -->
<?php include('include/header.php'); ?>
<!--header end -->

	<!--navigation start-->
	<nav class="navbar navbar-inverse pmd-navbar navbar-fixed-top pmd-z-depth guideline-header pmd-content">
	
		<div class="container-fluid"> 
		
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header" style="display:none;"> 
				<a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary pull-left margin-r8 pmd-sidebar-toggle"><i class="material-icons">menu</i></a> 
			</div>
			<div class="container">
			<div class="row">

				<!-- component title and description-->
				<div class="col-md-10 col-sm-10 col-xs-12">
					<h1 class="pmd-display1">Typography</h1>
				</div> <!--end component title and description-->
				
				<!-- component download button dropdown -->
				<div class="col-md-2 col-sm-2 col-xs-12">
					<div class="dropdown pmd-dropdown clearfix pull-right">
						<button class="btn pmd-btn-raised dropdown-toggle pmd-ripple-effect btn-primary" type="button" id="dropdownMenuDivider" data-toggle="dropdown" aria-expanded="true">Download</button>
						<!--dropdown-menu -->
						<ul aria-labelledby="dropdownMenuDivider" role="menu" class="dropdown-menu dropdown-menu-custom mega-dropdown-menu dropdown-menu-right">
							<li role="presentation" class="right-border">
								<h4>UI Framework</h4>
								<a class="btn btn-success btn-sm pmd-btn-raised pmd-ripple-effect" onClick="downloadUIFramework()" href="../archive/pmd-1.0.0.zip">Download ZIP</a>
							</li>
							<li role="presentation">
								<h4>Standalone</h4>
								<form id='component_form' method="post" action="custom/copy.php">
									<input type="hidden"  name="typography" value="typography"/>
									<button name='btn_submit' value='typography' type="submit" onClick="downloadTypography()"  class="btn btn-default pmd-btn-raised btn-sm pmd-ripple-effect pmd-btn-flat custom-btn">Download ZIP</button>
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
	
    <!-- Typography  -->
    <div class="pmd-content pmd-content-custom" id="content">
	
    	<!-- componant header-->
    	<div class="componant-title-bg">
      		<div class="container">
        		<div class="row">
					<!-- component title and description-->
          			<div class="col-xs-12">
                    	<p class="lead">Typography is the art and technique of arranging type to make written language legible, readable, and appealing when displayed. The arrangement of type involves - <em>selecting typefaces, 
                        point sizes, line lengths, line-spacing, and letter-spacing, and adjusting the space between pairs of letters.</em></p>
						<p class="lead">We have used Roboto font, the standard font used by Material Design. You'll find the fonts in the font folder of the Propeller kit you download.</p>
					</div> <!--end component title and description-->
        		</div>
            </div>
    	</div> <!--end component header-->
        
		
      	<div class="container">
		
			<!--component list catagory -->
			<div class="list-group list-group-custom margin-20">
				<a class="list-group-item" href="#headings">Heading</a>
				<a class="list-group-item" href="#display-head">Display heading</a>
				<a class="list-group-item" href="#lead">Lead</a>
				<a class="list-group-item" href="#inline">Inline text element</a>
				<a class="list-group-item" href="#blockquotes">Blockquote</a>
				<!--<a class="list-group-item" href="#lists">Lists</a>-->
				<a class="list-group-item" href="#address">Address</a>
				<a class="list-group-item" href="#config">Configuration Options</a>
			</div> <!--end component list catagory -->
            
            <!-- Headings componant -->
            <section class="row component-section">
				
				<!-- headings title and description -->
              	<div class="col-md-3">
                  	<div id="headings">
                    	<h2>Heading</h2>
                  	</div>
                    <p>All HTML heading tags, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code> are available. <code>.h1</code> through <code>.h6</code> are used when you want to match the font styling of a heading but still want your text to be displayed inline.</p>
              	</div> <!-- end headings title and description -->
				
              	<div class="col-md-9">
                    
					<!-- headings code, example -->
					<div class="component-box">
					  
					  <!-- code view button -->
					  <div class="pmd-card-title custom-heading clearfix">
						<a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right" data-toggle="tooltip" data-placement="bottom" title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
					  </div> <!-- end code view button -->
					  
					  <!--code view -->
					  <div class="code-box">
							<div class="pmd-tabs">
							  <div class="pmd-tab-active-bar"></div>
							  <ul class="nav nav-tabs" data-tabs="tabs">
								 <li class="active"><a href="#headings-html" data-toggle="tab">HTML</a></li>
								 <li><a href="#headings-css" data-toggle="tab">CSS</a></li>
							  </ul>
							</div>
							<div id="my-tab-content" class="tab-content">
							  <div class="tab-pane active" id="headings-html">
								  <pre class="pre-codebox line-numbers" data-src="../components/typography/snippets/typography-heading.html"></pre>
							  </div>
							  <div id="headings-css" class="tab-pane">
								  <pre class="pre-codebox line-numbers" data-src="../components/typography/snippets/typography-heading.css"></pre>
							  </div>
						  </div> 
					  </div> <!--end code view -->

					  <!-- headings example -->
					  <div class="pmd-card pmd-z-depth pmd-card-custom-view"> 
						  <div class="pmd-card-body">
							  <h1>h1. Propeller heading</h1>
							  <h2>h2. Propeller heading</h2>
							  <h3>h3. Propeller heading</h3>
							  <h4>h4. Propeller heading</h4>
							  <h5>h5. Propeller heading</h5>
							  <h6>h6. Propeller heading</h6>
						  </div>
					  </div> <!-- end headings example -->

                  	</div> <!-- end headings -->
					
					<!-- heading with muted text code, example -->
                    <div class="component-box">
					
						<!--code view button-->
						<div class="pmd-card-title custom-heading view-code-xs clearfix">
							<a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right" data-toggle="tooltip" data-placement="bottom" title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
						</div> <!--end code view button-->
						
						<!-- code view -->
						<div class="code-box">
							<div class="pmd-tabs">
								<div class="pmd-tab-active-bar"></div>
								<ul class="nav nav-tabs" data-tabs="tabs">
								  <li class="active"><a href="#Customizing-html" data-toggle="tab">HTML</a></li>
								  <li><a href="#Customizing-css" data-toggle="tab">CSS</a></li>
								</ul>
							</div>	
						  <div id="my-tab-content" class="tab-content">
							  <div class="tab-pane active" id="Customizing-html">
								  <pre class="pre-codebox line-numbers" data-src="../components/typography/snippets/typography-fancy-heading.html"></pre>
							  </div>
							  <div class="tab-pane" id="Customizing-css">
								  <pre class="pre-codebox line-numbers" data-src="../components/typography/snippets/typography-fancy-heading.css"></pre>
							  </div>
						  </div>
						</div> <!-- end code view-->
						
						<!-- example -->
						<div class="pmd-card pmd-z-depth pmd-card-custom-form"> 
							<div class="pmd-card-body">
								<h1>Display heading <small class="text-muted">With faded secondary text</small></h1>
							</div>
						</div>
						<p class="component-desc">Use the included utility class <code>.text-muted</code> to recreate the small secondary heading text from Bootstrap.</p><!-- end example -->
                          
                  	</div> <!-- end heading with muted text code, example -->
					
              	</div>
				
            </section> <!-- end headings componant -->
      
            <!-- Display headings componant -->
            <section class="row component-section">
				
				<!-- display title and description -->
            	<div class="col-md-3">
               		<div id="display-head">
                		<h2>Display Heading</h2>
              		</div>
                  	<p>Traditional heading elements are designed to work best for your page content. When you need a heading to stand out, consider using a <strong>display heading</strong>&mdash;a larger, slightly more opinionated heading style. For example: Use <code>.pmd-display4</code> for a large heading. </p>
				</div> <!-- end display title and description -->
				
            	<div class="col-md-9">
					
					<!-- display code, example -->
                	<div class="component-box">
					
						<!--code view button --> 	
						<div class="pmd-card-title custom-heading clearfix">
							<a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right" data-toggle="tooltip" data-placement="bottom" title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
						</div> <!-- end code view button -->
						
						<!--code view -->
						<div class="code-box">
							<div class="pmd-tabs">
								<div class="pmd-tab-active-bar"></div> 
								<ul class="nav nav-tabs" data-tabs="tabs">
								  <li class="active"><a href="#Display-html" data-toggle="tab">HTML</a></li>
								  <li><a href="#Display-css" data-toggle="tab">CSS</a></li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
							  <div class="tab-pane active" id="Display-html">
								  <pre class="pre-codebox line-numbers" data-src="../components/typography/snippets/typography-display-heading.html"></pre>
							  </div>
							  <div class="tab-pane" id="Display-css">
								  <pre class="pre-codebox line-numbers" data-src="../components/typography/snippets/typography-display-heading.css"></pre>                                    
							  </div>
							</div>
						</div> <!--end code view -->
						
						<!-- display example -->
						<div class="pmd-card pmd-z-depth pmd-card-custom-view"> 
							<div class="pmd-card-body">
								<h1 class="pmd-display4">Display 4</h1>
								<h1 class="pmd-display3">Display 3</h1>
								<h1 class="pmd-display2">Display 2</h1>
								<h1 class="pmd-display1">Display 1</h1>
							</div>
						</div> <!-- end display example -->
						
                 	</div> <!-- end display code, example -->
					 
				</div>
					
            </section> <!-- end display headings componant --> 
            
            <!-- paragraph lead componant -->
            <section class="row component-section">
				
				<!-- paragraph lead title and description -->
              	<div class="col-md-3">
              		<div id="lead">
                		<h2>Lead</h2>
              		</div>
                  	<p>Make a paragraph stand out by adding <code>.lead</code>.</p>
              	</div> <!-- end paragraph lead title and description -->
				
                <div class="col-md-9">
					<!-- paragraph lead code, example -->
              		<div class="component-box">
                        <!--code view button --> 	
						<div class="pmd-card-title custom-heading clearfix">
							<a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right" data-toggle="tooltip" data-placement="bottom" title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
						</div> <!--end code view button --> 	
                        
						<!--code view -->
						<div class="code-box">
							<div class="pmd-tabs">
								<div class="pmd-tab-active-bar"></div> 
								<ul class="nav nav-tabs" data-tabs="tabs">
									<li class="active"><a href="#lead-html" data-toggle="tab">HTML</a></li>
									<li><a href="#lead-css" data-toggle="tab">CSS</a></li>
								</ul>
							</div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="lead-html">
									<pre class="pre-codebox line-numbers" data-src="../components/typography/snippets/typography-lead.html"></pre>
								</div>
								<div class="tab-pane" id="lead-css">
									<pre class="pre-codebox line-numbers" data-src="../components/typography/snippets/bootstrap-basic.css"></pre>                                      
								</div>
							</div>
						</div> <!--end code-box -->
                           
						<!-- paragraph lead example -->
						<div class="pmd-card pmd-z-depth pmd-card-custom-view"> 
							<div class="pmd-card-body">
								<p class="lead">
									Propeller is a front-end responsive framework based on Material Design and Bootstrap.
								</p>
							</div>
						</div>  <!-- end paragraph lead example -->
	              	</div> <!-- end paragraph lead code, example -->
				</div>
            </section><!-- end paragraph lead componant -->
            
            <!-- Inline Text Elements componant -->
            <section class="row component-section">
				
				<!-- Inline Text Elements title and description -->
              	<div class="col-md-3">
              		<div id="inline">
                		<h2>Inline Text Element</h2>
              		</div>
                  	<p>Style your inline HTML elements with inline tags based on your requirement.</p>
              	</div>
            
              	<div class="col-md-9">
					
					<!-- inline text code, example -->
              		<div class="component-box">
					
                        <!-- code view button -->
						<div class="pmd-card-title custom-heading clearfix">
							<a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right" data-toggle="tooltip" data-placement="bottom" title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
						</div> <!-- end code view button -->
                        
                        <!-- code view -->
                        <div class="code-box">
                        	<div class="pmd-tabs">
                            	<div class="pmd-tab-active-bar"></div> 
								<ul class="nav nav-tabs" data-tabs="tabs">
									<li class="active"><a href="#inline-html" data-toggle="tab">HTML</a></li>
									<li><a href="#inline-css" data-toggle="tab">CSS</a></li>
								</ul>
	                        </div>
                            <div id="my-tab-content" class="tab-content">
                                <div class="tab-pane active" id="inline-html">
                                    <pre class="pre-codebox line-numbers" data-src="../components/typography/snippets/typography-inline-text.html"></pre>
                                </div>
                                <div class="tab-pane" id="inline-css">
                                    <pre class="pre-codebox line-numbers" data-src="../components/typography/snippets/bootstrap-basic.css"></pre>
                                </div>
                            </div>
                        </div><!-- end code view -->
                        
						<!-- inline text example -->
                        <div class="pmd-card pmd-z-depth pmd-card-custom-view"> 
							<div class="pmd-card-body">
								<!--Paragraph with highlighted text-->
								<p>Use <code>mark</code> tag to <mark>highlight</mark> text.</p>
								<!--Deleted Text-->
								<p><del>This line of text is meant to be treated as deleted text.</del> Use <code>del</code> tag for it.</p>
								<!--Text which is no longer accurate-->
								<p><s>This line of text is meant to be treated as no longer accurate.</s> Use <code>s</code> tag for it.</p>
								<!--Additional content-->
								<p><ins>This line of text is meant to be treated as an addition to the document.</ins> Use <code>ins</code> tag for it.</p>
								<!--Underlined text-->
								<p><u>This line of text will render as underlined.</u> Use <code>u</code> tag for it.</p>
                                <!--Fine printed text-->
                                <p><small>This line of text is meant to be treated as fine print.</small> Use <code>small</code> tag for it.</p>
                                <!--Bold text-->
                                <p><strong>This line rendered as bold text.</strong> Use <code>strong</code> tag for it.</p>
                                <!--Italicized text-->
                                <p><em>This line rendered as italicized text.</em> Use <code>em</code> tag for it.</p>
							</div>
						</div> <!-- end inline text example -->
						
              		</div><!-- end inline text code, example -->  
					    
              	</div>

            </section><!-- end inline text componant -->
            
            <!-- blockquotes componant -->
            <section class="row component-section">
				
				<!-- blockquote title and description -->
              	<div class="col-md-3">
               		<div id="blockquotes">
                    	<h2>Blockquote</h2>
                    </div>
                  	<p>For quoting block of content from another source within your document. Wrap <code>&lt;blockquote&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote. For straight quote, we recommend a <code>&lt;p&gt;</code>.</p>
              	</div> <!-- end blockquotes title and description -->

              	<div class="col-md-9">

					<!-- blockquotes -->
              		<div class="component-box">
						<!--code view button -->
						<div class="pmd-card-title custom-heading clearfix">
							<a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right" data-toggle="tooltip" data-placement="bottom" title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
						</div> <!--end code view button -->
	
						<!-- code view -->
						<div class="code-box">
							<div class="pmd-tabs">
								<div class="pmd-tab-active-bar"></div> 
								<ul class="nav nav-tabs" data-tabs="tabs">
									<li class="active"><a href="#blockquotes-html" data-toggle="tab">HTML</a></li>
									<li><a href="#blockquotes-css" data-toggle="tab">CSS</a></li>
								</ul>
							</div>	
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="blockquotes-html">
									<pre class="pre-codebox line-numbers" data-src="../components/typography/snippets/typography-blockquotes.html"></pre>
								</div>
								<div class="tab-pane" id="blockquotes-css">
									<pre class="pre-codebox line-numbers" data-src="../components/typography/snippets/bootstrap-basic.css"></pre>                    	</div>
							</div>
						</div> <!-- end code view -->
						
						<!-- blockquotes example -->
						<div class="pmd-card pmd-z-depth pmd-card-custom-view"> 
							<div class="pmd-card-body">
								<blockquote>
									<p>Propeller is a responsive and ready to use component library to start with. </p>
								</blockquote>
							</div>
						</div> <!-- end blockquotes example -->
              		</div> <!-- end blockquotes -->
					
					<!--Blockquote along with the source-->
              		<div class="component-box">
                       
					    <!--code view button -->
						<div class="pmd-card-title custom-heading view-code-xs clearfix">
							<a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right" data-toggle="tooltip" data-placement="bottom" title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
						</div> <!--end code view button -->
                        
                        <!-- code view -->
                        <div class="code-box">
                        	<div class="pmd-tabs">
                            	<div class="pmd-tab-active-bar"></div> 
                            	<ul class="nav nav-tabs" data-tabs="tabs">
									<li class="active"><a href="#Naming-html" data-toggle="tab">HTML</a></li>
									<li><a href="#Naming-css" data-toggle="tab">CSS</a></li>
								</ul>
                            </div>
                            <div id="my-tab-content" class="tab-content">
                                <div class="tab-pane active" id="Naming-html"> 
                                	<pre class="pre-codebox line-numbers" data-src="../components/typography/snippets/typography-blockquotes-footer.html"></pre>
                                </div>
                                <div class="tab-pane" id="Naming-css">
                                	<pre class="pre-codebox line-numbers" data-src="../components/typography/snippets/bootstrap-basic.css"></pre>
                                </div>
                            </div>
                        </div> <!--end code view -->
						
						<!-- Blockquote along with the source example-->
						<div class="pmd-card pmd-z-depth pmd-card-custom-form"> 
							<div class="pmd-card-body">
								<blockquote class="blockquote">
									<p>Create something simple. Let the market pull you in.</p>
									<footer>Brad Burnham, Co-Founder <cite title="Source Title">Union Square Ventures</cite></footer>
								</blockquote>
							</div>
						</div> 
						<p class="component-desc">Add a <code>&lt;footer&gt;</code> for identifying the source. Wrap the name of the source work in <code>&lt;cite&gt;</code>.</p> <!--end example-->
						
              		</div> <!--end blockquote along with the source-->
              		
					<!-- blockquote Right-aligned -->
              		<div class="component-box">
                        
						<!-- code view button -->
						<div class="pmd-card-title custom-heading view-code-xs clearfix">
							<a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right" data-toggle="tooltip" data-placement="bottom" title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
						</div> <!-- end code view button -->

                        <!-- code view -->
                        <div class="code-box">
                        	<div class="pmd-tabs">
                            	<div class="pmd-tab-active-bar"></div> 
								<ul class="nav nav-tabs" data-tabs="tabs">
									<li class="active"><a href="#reverse-html" data-toggle="tab">HTML</a></li>
									<li><a href="#reverse-css" data-toggle="tab">CSS</a></li>
								</ul>
							 </div>
							<div id="my-tab-content" class="tab-content">
								<div class="tab-pane active" id="reverse-html">
									<pre class="pre-codebox line-numbers" data-src="../components/typography/snippets/typography-reverse.html"></pre>
								</div>
								<div class="tab-pane" id="reverse-css">
									<pre class="pre-codebox line-numbers" data-src="../components/typography/snippets/bootstrap-basic.css"></pre>
								</div>
							</div>
                        </div><!-- end code view -->
                        
						<!-- blockquote Right-aligned example-->
						<div class="pmd-card pmd-z-depth pmd-card-custom-form"> 
							<div class="pmd-card-body">
								<blockquote class="blockquote blockquote-reverse">
									<p>Millions of amazing sites across the web are being built with Bootstrap.</p>
									<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
								</blockquote>
							</div>
						</div>
						<p class="component-desc">Add <code>.blockquote-reverse</code> for a blockquote with right-aligned content.</p> <!-- end blockquote Right-aligned example-->
						
              		</div> <!-- end blockquote Right-aligned --> 
					
            	</div>
            </section> <!-- end blockquotes --> 
            
            <!-- Address componant -->
            <section class="row component-section">
				
				<!--  Title and Description -->
              	<div class="col-md-3">
              		<div id="address">
                		<h2>Address</h2>
              		</div>
                  	<p>Used to provide contact information. Preserve formatting by ending all lines with tag <code>br</code>.</p>
              	</div>

              	<div class="col-md-9">
					<!-- code and example -->
              		<div class="component-box">
						<!--code view button -->
						<div class="pmd-card-title custom-heading clearfix">
							<a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right" data-toggle="tooltip" data-placement="bottom" title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
						</div> <!--end code view button -->
                        
                        <!-- code view -->
                        <div class="code-box">
                        	<div class="pmd-tabs">
                            	<div class="pmd-tab-active-bar"></div> 
								<ul class="nav nav-tabs" data-tabs="tabs">
									<li class="active"><a href="#address-html" data-toggle="tab">HTML</a></li>
									<li><a href="#address-css" data-toggle="tab">CSS</a></li>
								</ul>
                            </div>
                            <div id="my-tab-content" class="tab-content">
                                <div class="tab-pane active" id="address-html">
                                    <pre class="pre-codebox line-numbers" data-src="../components/typography/snippets/typography-address.html"></pre>
                                </div>
                                <div class="tab-pane" id="address-css">
                                    <pre class="pre-codebox line-numbers" data-src="../components/typography/snippets/bootstrap-basic.css"></pre>
                                </div>
                            </div>
                        </div> <!--end code view -->

						<!-- example -->
						<div class="pmd-card pmd-z-depth"> 
							<div class="pmd-card-body">
								<address>
								<strong>Twitter, Inc.</strong><br>
								1355 Market Street, Suite 900<br>
								San Francisco, CA 94103<br>
								<abbr title="Phone">P:</abbr> (123) 456-7890
								</address>
								<address>
								<strong>Full Name</strong><br>
								<a href="mailto:#">first.last@example.com</a>
								</address>
							</div> 
						</div> <!-- end example -->
              		</div> <!-- end code and example -->
              	</div>
            </section> <!-- end address -->
            
            <!-- Configuration starts-->
        	<section class="row component-section">
                <div class="col-md-3">
                	<div id="config">
                		<h2>Configuration Options</h2>
              		</div>
                    <p>The Propeller CSS classes apply various predefined visual enhancements to the typography. The table lists the available classes and their effects.</p>
                </div>
            	<div class="col-md-9">
                    <!--Propeller Class Configuration card start -->
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
                                        <td data-title="Class"><code>.pmd-display4</code></td>
                                        <td data-title="Effect">Display heading style for largest heading.</td>
                                        <td data-title="Remark">Optional</td>
                                    </tr>
                                    <tr>
                                        <td data-title="Class"><code>.pmd-display3</code></td>
                                        <td data-title="Effect">Display heading style for second largest heading.</td>
                                        <td data-title="Remark">Optional</td>
                                    </tr>
                                    <tr>
                                        <td data-title="Class"><code>.pmd-display2</code></td>
                                        <td data-title="Effect">Display heading style for small heading.</td>
                                        <td data-title="Remark">Optional</td>
                                    </tr>
                                    <tr>
                                        <td data-title="Class"><code>.pmd-display1</code></td>
                                        <td data-title="Effect">Display heading style for smallest heading.</td>
                                        <td data-title="Remark">Optional</td>
                                    </tr>
                                    <tr>
                                        <td data-title="Class"><code>.pmd-caption</code></td>
                                        <td data-title="Effect">Show a caption content.</td>
                                        <td data-title="Remark">Optional</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--Propeller  Class Configuration card end -->
                </div>
            </section>
            <!-- Configuration ends-->
			
      	</div>
    </div>
    <!--typography constructor -->

    <!--footer start -->
    <?php include('include/footer.php'); ?>
    <!--footer end -->
