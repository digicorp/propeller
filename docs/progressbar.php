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
					<h1 class="pmd-display1">Progressbar</h1>
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
									<input type="hidden"  name="progressbar" value="progressbar"/>
									<button name='btn_submit' value='progressbar' type="submit" onClick="downloadProgressbar()" class="btn btn-default pmd-btn-raised btn-sm pmd-ripple-effect pmd-btn-flat custom-btn">Download ZIP</button>
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
  
<!-- Progressbar -->
<div class="pmd-content pmd-content-custom" id="content"> 

    <!-- component header-->
    <div class="componant-title-bg">
    	<div class="container">
            <div class="row"> 
              
              <!-- component title and description-->
              <div class="col-xs-12">
                <p class="lead">Progressbar provide up-to-date feedback on the progress of a workflow or action with simple yet flexible bars.</p>
              </div><!-- component title and description end-->  
              
            </div>
      	</div> 
    </div><!--end component header-->

	<div class="container">

        <!--component list catagory -->
        <div class="list-group list-group-custom margin-20">
			<a class="list-group-item" href="#boot">Bootstrap Progressbar</a>  
            <a class="list-group-item" href="#basic">Propeller Progressbar</a> 
            <a class="list-group-item" href="#striped">Striped Progressbar</a> 
            <a class="list-group-item" href="#animated">Animated Progressbar</a> 
            <a class="list-group-item" href="#stake">Stacked Progressbar</a> 
			<a class="list-group-item" href="#config">Configuration Options</a> 
        </div><!--end component list catagory -->
		
		<!-- Bootstrap Progressbar -->
  		<section class="row component-section">
        
        	<!-- Bootstrap progressbar title and description -->
    		<div class="col-md-3">
      			<div id="boot">
        			<h2>Bootstrap Progressbar</h2>
     			</div>
      			<p>This is the default progress bar provided by Bootstrap. You can also convert it to stripped, animated or stacked progressbar.</p>
    		</div> <!-- end static progressbar title and description -->           
            
            <div class="col-md-9"> 
            
            	<!-- static progressbar code, example -->
              	<div class="component-box">
                
                	<!-- code view button -->
                	<div class="pmd-card-title custom-heading clearfix"> 
                    	<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
                    </div><!-- end code view button -->
                    
                    <!--code view -->
                	<div class="code-box">
                  		<div class="pmd-tabs">
                    		<div class="pmd-tab-active-bar"></div>
                            <ul class="nav nav-tabs" data-tabs="tabs">
                              <li class="active"><a href="#bootstrap-html" data-toggle="tab">HTML</a></li>
                              <li><a href="#bootstrap-css" data-toggle="tab">CSS</a></li>
                            </ul>
                  		</div>
                    	<div id="my-tab-content" class="tab-content">
                        	<div class="tab-pane active" id="bootstrap-html">
                            	<pre class="pre-codebox line-numbers" data-src="../components/progressbar/snippets/progressbar-bootstrap.html"></pre>
                            </div>
                            <div class="tab-pane" id="bootstrap-css">
                            	<pre class="pre-codebox line-numbers" data-src="../components/progressbar/snippets/bootstrap-basic.css"></pre>
                            </div>
                        </div>
                	</div><!-- end code view -->                    
                	
                    <!-- Static Progress bar example -->
                    <div class="row">
                        <div class="col-md-12"> 
                          	<div class="pmd-card pmd-z-depth pmd-card-custom-view">
                            	<div class="pmd-card-body"> 
                                	<div class="progress-rounded progress">
                                    	<div class="progress-bar progress-bar-success" style="width: 34%;"></div>
                                  	</div>
                              		<div class="progress-rounded progress">
                                		<div class="progress-bar progress-bar-info" style="width: 68%;"></div>
                              		</div>
                              		<div class="progress-rounded progress">
                                		<div class="progress-bar progress-bar-warning" style="width: 52%;"></div>
                              		</div>
                              		<div class="progress-rounded progress">
                                		<div class="progress-bar progress-bar-danger" style="width: 77%;"></div>
                              		</div>
                            	</div>
                          	</div>
                        </div>
                   </div><!-- Static Progress bar example end -->
                   
              	</div><!--Static Progressbar code, example end --> 
            </div>
  		</section><!-- Static Progressbar end -->
  
  		<!-- Static Progressbar -->
  		<section class="row component-section">
        
        	<!-- static progressbar title and description -->
    		<div class="col-md-3">
      			<div id="basic">
        			<h2>Propeller Progressbar</h2>
     			</div>
      			<p>It consists of Bootstrap HTML structure enhanced with Propeller customized classes based on Material Standards. Include Propeller Static Progressbar to your code by adding <code>.pmd-progress</code>.</p>
    		</div> <!-- end static progressbar title and description -->           
            
            <div class="col-md-9"> 
            
            	<!-- static progressbar code, example -->
              	<div class="component-box">
                
                	<!-- code view button -->
                	<div class="pmd-card-title custom-heading clearfix"> 
                    	<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
                    </div><!-- end code view button -->
                    
                    <!--code view -->
                	<div class="code-box">
                  		<div class="pmd-tabs">
                    		<div class="pmd-tab-active-bar"></div>
                            <ul class="nav nav-tabs" data-tabs="tabs">
                              <li class="active"><a href="#simple-html" data-toggle="tab">HTML</a></li>
                              <li><a href="#simple-css" data-toggle="tab">CSS</a></li>
                            </ul>
                  		</div>
                    	<div id="my-tab-content" class="tab-content">
                        	<div class="tab-pane active" id="simple-html">
                            	<pre class="pre-codebox line-numbers" data-src="../components/progressbar/snippets/progressbar-static.html"></pre>
                            </div>
                            <div class="tab-pane" id="simple-css">
                            	<pre class="pre-codebox line-numbers" data-src="../components/progressbar/snippets/progressbar.css"></pre>
                            </div>
                        </div>
                	</div><!-- end code view -->                    
                	
                    <!-- Static Progress bar example -->
                    <div class="row">
                        <div class="col-md-12"> 
                          	<div class="pmd-card pmd-z-depth pmd-card-custom-view">
                            	<div class="pmd-card-body"> 
                                	<div class="progress-rounded progress pmd-progress">
                                    	<div class="progress-bar progress-bar-success" style="width: 34%;"></div>
                                  	</div>
                              		<div class="progress-rounded progress pmd-progress">
                                		<div class="progress-bar progress-bar-info" style="width: 68%;"></div>
                              		</div>
                              		<div class="progress-rounded progress pmd-progress">
                                		<div class="progress-bar progress-bar-warning" style="width: 52%;"></div>
                              		</div>
                              		<div class="progress-rounded progress pmd-progress">
                                		<div class="progress-bar progress-bar-danger" style="width: 77%;"></div>
                              		</div>
                            	</div>
                          	</div>
                        </div>
                   </div><!-- Static Progress bar example end -->
                   
              	</div><!--Static Progressbar code, example end --> 
            </div>
  		</section><!-- Static Progressbar end --> 
  
  		<!-- Striped Progressbar -->
  		<section class="row component-section">
        
    		<!-- striped progressbar title and description -->
            <div class="col-md-3">
      			<div id="striped">
        			<h2>Striped Progressbar</h2>
      			</div>
      			<p>Include Propeller Striped Progressbar to your code by adding <code>.progress-striped</code> besides <code>.pmd-progress</code>.</p>
    		</div><!-- end striped progressbar title and description -->
            
            <div class="col-md-9">
             
              <!-- striped progressbar code, example -->
              <div class="component-box">
              
              	<!-- code view button -->
                <div class="pmd-card-title custom-heading clearfix"> 
                	<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
                </div><!-- end code view button -->
                
                <!--code view -->
                <div class="code-box">
                	<div class="pmd-tabs">
                    	<div class="pmd-tab-active-bar"></div>
                        <ul class="nav nav-tabs" data-tabs="tabs">
                          <li class="active"><a href="#striped-html" data-toggle="tab">HTML</a></li>
                          <li><a href="#striped-css" data-toggle="tab">CSS</a></li>
                        </ul>
                  	</div>
                  	<div id="my-tab-content" class="tab-content">
                        <div class="tab-pane active" id="striped-html">
                          <pre class="pre-codebox line-numbers" data-src="../components/progressbar/snippets/progressbar-striped.html"></pre>
                        </div>
                        <div class="tab-pane" id="striped-css">
                          <pre class="pre-codebox line-numbers" data-src="../components/progressbar/snippets/progressbar.css"></pre>
                        </div>
                  	</div> 
                </div><!-- end code view -->
                
                <!-- Striped Progress bar example -->
                <div class="row">
                	<div class="col-md-12"> 
                    	<div class="pmd-card pmd-z-depth pmd-card-custom-view">
                        	<div class="pmd-card-body"> 
                            	<div class=" progress-rounded progress progress-striped pmd-progress">
                                	<div class="progress-bar progress-bar-success" style="width: 34%;"></div>
                              	</div>
                              	<div class=" progress-rounded progress progress-striped pmd-progress">
                                	<div class="progress-bar progress-bar-info" style="width: 68%;"></div>
                              	</div>
                          		<div class=" progress-rounded progress progress-striped pmd-progress">
                            		<div class="progress-bar progress-bar-warning" style="width: 52%;"></div>
                          		</div>
                          		<div class=" progress-rounded progress progress-striped pmd-progress">
                            		<div class="progress-bar progress-bar-danger" style="width: 77%;"></div>
                          		</div>
                        	</div>
                      	</div>
                    </div>
                </div><!-- Striped Progress bar example end -->
                
              </div><!-- striped progressbar code, example end -->
           </div>
  		</section><!-- Striped Progressbar end --> 
  
  		<!-- Animated Progressbar -->
        <section class="row component-section">
        
        	<!-- animated progressbar title and description -->
            <div class="col-md-3">
              <div id="animated">
                <h2>Animated Progressbar</h2>
              </div>
              <p>Include Propeller Animated Progressbar to your code by adding <code>.active</code> beside <code>.progress-striped</code>.</p>
            </div><!-- end animated progressbar title and description -->
            
            <div class="col-md-9">
             
            	<!-- striped progressbar code, example -->
              	<div class="component-box">
                
                	<!-- code view button -->
                	<div class="pmd-card-title custom-heading clearfix"> 
                    	<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
                    </div><!-- code view button end -->
                    
                	<!--code view -->
                    <div class="code-box">
                  		<div class="pmd-tabs">
                    		<div class="pmd-tab-active-bar"></div>
                            <ul class="nav nav-tabs" data-tabs="tabs">
                              <li class="active"><a href="#animated-html" data-toggle="tab">HTML</a></li>
                              <li><a href="#animated-css" data-toggle="tab">CSS</a></li>
                            </ul>
                  		</div>
                  		<div id="my-tab-content" class="tab-content">
                    		<div class="tab-pane active" id="animated-html">
                      			<pre class="pre-codebox line-numbers" data-src="../components/progressbar/snippets/progressbar-animated.html"></pre>
                    		</div>
                    		<div class="tab-pane" id="animated-css">
                      			<pre class="pre-codebox line-numbers" data-src="../components/progressbar/snippets/progressbar.css"></pre>
                    		</div>
                  		</div> 
                	</div><!--code view end -->                    
                	
                  	<!-- Animated Progress bar example -->
                    <div class="row">
                    	<div class="col-md-12"> 
                      		<div class="pmd-card pmd-z-depth pmd-card-custom-view">
                        		<div class="pmd-card-body"> 
                          			<div class=" progress-rounded progress progress-striped pmd-progress active">
                            			<div class="progress-bar progress-bar-success" style="width: 34%;"></div>
                          			</div>
                          			<div class=" progress-rounded progress progress-striped pmd-progress active">
                            			<div class="progress-bar progress-bar-info" style="width: 68%;"></div>
                          			</div>
                        		</div>
                      		</div>
                    	</div>
                  </div><!-- Animated Progress bar example end -->
                    
              	</div><!-- Animated progressbar code, example end -->
            </div>
        </section><!-- Animated Progressbar --> 
  
  		<!-- Stacked progressbar -->
  		<section class="row component-section">
        
        	<!-- stacked progressbar title and description -->
    		<div class="col-md-3">
      			<div id="stake">
        			<h2>Stacked Progressbar</h2>
      			</div>
      			<p>Include Propeller Stacked Progressbar to your code by adding <code>.progress-bar</code> inside the wrapper div containing <code>.pmd-progress</code>.</p>
    		</div><!-- stacked progressbar title and description -->
            
    		<div class="col-md-9">
             
      			<!--Stacked Progressbar code, example -->
      			<div class="component-box">
                
                	<!-- code view button -->
        			<div class="pmd-card-title custom-heading clearfix"> 
                    	<a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
                    </div><!-- end code view button -->
                    
                    <!--code view -->                    
        			<div class="code-box">
          				<div class="pmd-tabs">
            				<div class="pmd-tab-active-bar"></div>
                            <ul class="nav nav-tabs" data-tabs="tabs">
                              <li class="active"><a href="#stake-html" data-toggle="tab">HTML</a></li>
                              <li><a href="#stake-css" data-toggle="tab">CSS</a></li>
                            </ul>
          				</div>
          				<div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="stake-html">
                              <pre class="pre-codebox line-numbers" data-src="../components/progressbar/snippets/progressbar-staked.html"></pre>
                            </div>
                            <div class="tab-pane" id="stake-css">
                              <pre class="pre-codebox line-numbers" data-src="../components/progressbar/snippets/progressbar.css"></pre>
                            </div>
          				</div>
        			</div><!--end code view -->
        
          			<!-- Stacked Progress bar example -->
                    <div class="row">
            			<div class="col-md-12"> 
              				<div class="pmd-card pmd-z-depth pmd-card-custom-view ">
                				<div class="pmd-card-body"> 
                                	<div class="progress-rounded progress progress-striped pmd-progress">
                                    	<div style="width: 35%" class="progress-bar progress-bar-success "></div>
                                    	<div style="width: 20%" class="progress-bar progress-bar-warning"></div>
                                    	<div style="width: 10%" class="progress-bar progress-bar-danger"></div>
                                  	</div>
                				</div>
              				</div>
            			</div>
          			</div><!-- Stacked Progress bar example end-->
                       
     			</div><!--Staked Progressbar code,example end --> 
    		</div>
  		</section><!-- Stacked progressbar end-->
   
  		<!-- Configuration starts-->  
  		<section class="row component-section">
        
    		<!-- Configuration title and description -->
            <div class="col-md-3">
      			<div id="config">
        			<h2>Configuration Options</h2>
      			</div>
      			<p>The Propeller CSS classes apply various predefined visual enhancements to the progressbar. The table lists the available classes and their effects.</p>
    		</div><!-- Configuration title and description end -->
            
    		<div class="col-md-9"> 
            
      			<!--Propeller  Class Configuration -->
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
                            		<td data-title="Class"><code>.progress</code></td>
                            		<td data-title="Effect">Used to initialize static progress bar.</td>
                            		<td data-title="Remark">Required</td>
                          		</tr>
                          		<tr>
                            		<td data-title="Class"><code>.pmd-progress</code></td>
                            		<td data-title="Effect">Add this class to create propeller customized progress bar.</td>
                            		<td data-title="Remark">Required</td>
                          		</tr>
                          		<tr>
                            		<td data-title="Class"><code>.progress-striped</code></td>
                            		<td data-title="Effect">Used to add stripes to the progress bar.</td>
                            		<td data-title="Remark">Optional</td>
                          		</tr>
                          		<tr>
                            		<td data-title="Class"><code>.active</code></td>
                            		<td data-title="Effect">Add this class along with <code>.progress-stripped</code> to animate the progress bar.</td>
                            		<td data-title="Remark">Optional</td>
                          		</tr>
                          		<tr>
                            		<td data-title="Class"><code>.progress-bar</code></td>
                            		<td data-title="Effect">Use this class to create a stacked progress bar.</td>
                            		<td data-title="Remark">Optional</td>
                          		</tr>
                        	</tbody>
                      	</table>
        			</div>
      			</div><!-- Propeller  Class Configuration end -->
      			 
    		</div>
  		</section><!-- Configuration ends-->  		
         
	</div><!--Progressbar container end -->	 
    
</div><!--Progressbar constructor end--> 

<!--footer start -->
<?php include('include/footer.php'); ?>
<!--footer end -->