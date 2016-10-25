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
					<h1 class="pmd-display1">Range Slider</h1>
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
									<input type="hidden"  name="range-slider" value="range-slider"/>
									<button name='btn_submit' value='range-slider' type="submit" onClick="downloadSlider()" class="btn btn-default pmd-btn-raised btn-sm pmd-ripple-effect pmd-btn-flat custom-btn">Download ZIP</button>
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

<!-- Slider -->
<div class="pmd-content pmd-content-custom" id="content">
    
	<!-- component header-->
    <div class="componant-title-bg">
    	<div class="container">
        	<div class="row">
					
				<!-- component title and description -->	
            	<div class="col-xs-12">
                    <p class="lead">Range Slider let the user select a range of values by moving the slider thumb. The smallest value is to the left, the largest to the right.</p>
                    <p class="lead">We have used noUISlider plugin as a reference which we have then customized based on our Propeller theme.</p>
                    <p class="lead">For more options and documentation, visit : <a href="https://refreshless.com/nouislider/" target="_blank">noUISlider</a></p>
          		</div><!-- component title and description end-->                
                	
        	</div>
      	</div>
    </div><!-- end component header-->
        
	<div class="container range-slider-container">
        	
		<!-- component list catagory -->
        <div class="list-group list-group-custom margin-20"> 
            <a class="list-group-item" href="#horizontal">Single Handle Horizontal Slider</a>
            <a class="list-group-item" href="#horizontal-range">Horizontal Range Slider</a>
            <a class="list-group-item" href="#vertical">Vertical Slider</a>
            <a class="list-group-item" href="#vertical-range">Vertical Range Slider</a>
            <a class="list-group-item" href="#config">Configuration Options</a>
        </div><!-- end component list catagory -->
        	
        <!-- horizontal single handler slider -->
        <section class="row component-section">
        
            <!-- horizontal single handler slider title and description -->
            <div class="col-md-3">
                <div id="horizontal">
                    <h2> Single Handle Horizontal Slider</h2>
                </div>
                <p>A handle snaps to a clicked location. It can immediatly be moved, without a mouseup + mousedown. There are many different types of single handler slider such as default slider, slider with steps, slider with visible tooltip, slider with bottom visible tooltip, slider which can be disabled and slider with input value. </p>
            </div><!-- end horizontal single handler slider title and description -->
            
            <div class="col-md-9">
                
                <!--Horizontal single handler slider code, example -->
                <div class="component-box">
                
                    <!-- Code view button -->
                    <div class="pmd-card-title custom-heading clearfix">
                        <a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
                    </div><!-- Code view button end -->
                    
                    <!-- code view -->
                    <div class="code-box">
                        <div class="pmd-tabs">
                            <div class="pmd-tab-active-bar"></div> 
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="active"><a href="#single-handler-html" data-toggle="tab">HTML</a></li>
                                <li><a href="#single-handler-css" data-toggle="tab">CSS</a></li>
                                <li><a href="#single-handler-js" data-toggle="tab">JS</a></li>
                            </ul>
                        </div>
                        <div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="single-handler-html">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/single-hendler.html"></pre> 
                            </div>
                            <div class="tab-pane" id="single-handler-css">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/range-slider.css"></pre>
                            </div>
                            <div class="tab-pane" id="single-handler-js">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/single-hendler.js"></pre>
                            </div>
                        </div>
                    </div><!--end code view -->
                    
                    <!-- slider example -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <div id="pmd-slider" class="pmd-range-slider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="component-desc"><strong>Single Handle slider : </strong>It allows user to select a value along a subjective range. It does not require a specific value to make adjustments, although it may, in some instances, offer an editable numeric value.</p><!-- slider example end -->
                        
                </div><!--Horizontal single handler slider code, example end-->

                <!--Horizontal Single Handle Slider with steps code,example -->
                <div class="component-box">
                
                    <!-- Code view button -->
                    <div class="pmd-card-title custom-heading view-code-xs clearfix">
                        <a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
                    </div><!-- Code view button end -->
                    
                    <!-- code view -->
                    <div class="code-box">
                        <div class="pmd-tabs">
                        <div class="pmd-tab-active-bar"></div> 
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="active"><a href="#single-step-html" data-toggle="tab">HTML</a></li>
                                <li><a href="#single-step-css" data-toggle="tab">CSS</a></li>
                                <li><a href="#single-step-js" data-toggle="tab">JS</a></li>
                            </ul>
                        </div>
                        <div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="single-step-html">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/single-step-hendler.html"></pre> 
                            </div>
                            <div class="tab-pane" id="single-step-css">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/range-slider.css"></pre>
                            </div>
                            <div class="tab-pane" id="single-step-js">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/single-step-hendler.js"></pre>
                            </div>
                        </div>
                    </div><!--end code view -->
                    
                    <!-- slider example -->                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <div id="pmd-slider-step" class="pmd-range-slider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="component-desc"><strong>Single Handle Slider with steps</strong></p><!-- slider example end-->
                    
                </div><!--Horizontal Single Handler Slider with steps code,example end -->
                
                <!-- Default Tooltip with single Handler -->
                <div class=" component-box">
                
                    <!-- Code view button -->
                    <div class="pmd-card-title custom-heading view-code-xs clearfix">
                        <a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
                    </div><!-- Code view button end -->
                    
                    <!-- code view -->
                    <div class="code-box">
                        <div class="pmd-tabs">
                            <div class="pmd-tab-active-bar"></div> 
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="active"><a href="#single-tooltip-html" data-toggle="tab">HTML</a></li>
                                <li><a href="#single-tooltip-css" data-toggle="tab">CSS</a></li>
                                <li><a href="#single-tooltip-js" data-toggle="tab">JS</a></li>
                            </ul>
                        </div>
                        <div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="single-tooltip-html">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/single-tooltip-hendler.html"></pre> 
                            </div>
                            <div class="tab-pane" id="single-tooltip-css">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/range-slider.css"></pre>
                            </div>
                            <div class="tab-pane" id="single-tooltip-js">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/single-tooltip-hendler.js"></pre>
                            </div>
                        </div>
                    </div><!-- end code view -->
                    
                    <!-- slider example -->                    
                    <div class="row">
                        <div class="col-md-12">

                            <!--Default Tooltip with single Slider card -->
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <!-- Horisontal Slider -->
                                    <div id="pmd-slider-tooltip"  class="pmd-range-slider pmd-range-tooltip"></div>
                                </div>
                            </div>
                            <!--Default Tooltip with single Slider card -->
                        </div>
                    </div>
                    <p class="component-desc"><strong>Single Handle slider with visible tooltip : </strong>Add <code>.pmd-range-tooltip</code> to make the slider tooltip visible by default.</p><!-- slider example end -->
                </div> <!-- end default tooltip with single Handler -->

                <!-- Horizontal single handler slider with bottom tooltip -->   
                <div class="component-box">
                
                    <!-- code view button -->
                    <div class="pmd-card-title custom-heading view-code-xs clearfix">
                        <a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
                    </div><!--end code view button -->
                    
                    <!-- code view -->
                    <div class="code-box">
                        <div class="pmd-tabs">
                            <div class="pmd-tab-active-bar"></div> 
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="active"><a href="#range-value-input-html" data-toggle="tab">HTML</a></li>
                                <li><a href="#range-value-input-css" data-toggle="tab">CSS</a></li>
                                <li><a href="#range-value-input-js" data-toggle="tab">JS</a></li>
                            </ul>
                        </div>
                        <div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="range-value-input-html">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/single-hendler-bottom-tooltip.html"></pre> 
                            </div>
                            <div class="tab-pane" id="range-value-input-css">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/range-slider.css"></pre>
                            </div>
                            <div class="tab-pane" id="range-value-input-js">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/single-hendler-bottom-tooltip.js"></pre>
                            </div>
                        </div>
                    </div><!-- code view end -->
                    
                    <!-- slider example -->                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <div id="pmd-range-tooltip-bottom" class="pmd-range-slider pmd-range-tooltip pmd-range-tooltip-bottom"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="component-desc"><strong>Single Handle slider with visible tooltip (bottom direction) : </strong>Add <code>.pmd-range-tooltip-bottom</code> to make the slider tooltip visible in bottom direction by 
                    default.</p><!-- slider example end -->
                    
                </div> <!-- end horizontal single handler slider with bottom tooltip -->

                <!-- Single Handler slider which can be disabled -->
                <div class="component-box">
                
                    <!-- code view button -->
                    <div class="pmd-card-title custom-heading view-code-xs clearfix">
                        <a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
                    </div><!-- code view button end -->
                    
                    <!-- code view-->
                    <div class="code-box">
                        <div class="pmd-tabs">
                            <div class="pmd-tab-active-bar"></div> 
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="active"><a href="#disable-single-html" data-toggle="tab">HTML</a></li>
                                <li><a href="#disable-single-css" data-toggle="tab">CSS</a></li>
                                <li><a href="#disable-single-js" data-toggle="tab">JS</a></li>
                            </ul>
                        </div>
                        <div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="disable-single-html">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/disable-single-hendler.html"></pre> 
                            </div>
                            <div class="tab-pane" id="disable-single-css">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/range-slider.css"></pre>
                            </div>
                            <div class="tab-pane" id="disable-single-js">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/disable-hendler.js"></pre>
                            </div>
                        </div>
                    </div><!-- code view end -->
                    
                    <!-- slider example -->                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <div id="disable-single" class="pmd-range-slider"></div>
                                    <div class="slider-checkbox">
                                        <label class="checkbox-inline pmd-checkbox pmd-checkbox-ripple-effect">
                                            <input type="checkbox" value="" id="single-checkbox">
                                            <span>Disable slider</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="component-desc">Single Handle Slider which can be disabled. </p><!-- slider example end -->
                        
                </div> <!-- end Single Handle slider which can be disabled -->
                
                <!-- Single Handle slider with value -->   
                <div class="component-box">
                
                    <!-- code view button -->
                    <div class="pmd-card-title custom-heading view-code-xs clearfix">
                        <a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
                    </div><!-- code view button end -->
                    
                    <!-- code view -->
                    <div class="code-box">
                        <div class="pmd-tabs">
                            <div class="pmd-tab-active-bar"></div> 
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="active"><a href="#input-value-input-html" data-toggle="tab">HTML</a></li>
                                <li><a href="#input-value-css" data-toggle="tab">CSS</a></li>
                                <li><a href="#input-value-js" data-toggle="tab">JS</a></li>
                            </ul>
                        </div>
                        <div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="input-value-input-html">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/single-hendler-value-input.html"></pre> 
                            </div>
                            <div class="tab-pane" id="input-value-css">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/range-slider.css"></pre>
                            </div>
                            <div class="tab-pane" id="input-value-js">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/single-hendler-value-input.js"></pre>
                            </div>
                        </div>
                    </div><!-- code view end -->
                    
                    <!-- slider example -->                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <div id="pmd-slider-value-input" class="pmd-range-slider"></div>
                                    <div class="row">
                                        <div class="range-slider-input">
                                            <div class="col-sm-2">
                                                <div class="form-group pmd-textfield">
                                                    <label for="value-input" class="control-label">Input Value</label>
                                                    <input type="text" id="value-input" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="component-desc">Single Handle Slider which can be controlled by inputting values also.</p><!-- slider example end-->
                        
                </div> <!-- end Single Handle slider with value -->
                   
            </div>
       	</section><!--end horizontal single handler slider -->
            
           
        <!-- horizontal range slider -->
        <section class="row component-section">
        
        	<!-- horizontal range slider title and description -->
            <div class="col-md-3">
                <div id="horizontal-range">
                    <h2>Range Slider</h2>
                    <p>Range slider are the ones with two handler. We can have range sliders of various types such as default range slider, range slider with visible tooltip, range slider whose both handlers can be disabled and range slider with input value.</p>
                </div>
            </div><!-- horizontal range slider title and description end -->
            
            <div class="col-md-9">
                
                <!--Horizontal default range slider -->
                <div class="component-box">
                
                	<!-- code view button -->
                    <div class="pmd-card-title custom-heading clearfix">
                        <a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
                    </div><!-- code view button end -->
                    
                    <!-- code view -->
                    <div class="code-box">
   						<div class="pmd-tabs">
       						<div class="pmd-tab-active-bar"></div> 
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="active"><a href="#range-slider-html" data-toggle="tab">HTML</a></li>
                                <li><a href="#range-slider-css" data-toggle="tab">CSS</a></li>
                                <li><a href="#range-slider-js" data-toggle="tab">JS</a></li>
                            </ul>
                        </div>
                        <div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="range-slider-html">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/multiple-hendler.html"></pre> 
                            </div>
                            <div class="tab-pane" id="range-slider-css">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/range-slider.css"></pre>
                            </div>
                            <div class="tab-pane" id="range-slider-js">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/multiple-hendler.js"></pre>
                            </div>
                        </div>
                    </div><!-- code view end -->
                    
                    <!-- slider example -->                    
                    <div class="row">
                        <div class="col-md-12">
                            <!--Multiple Slider card -->
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    
                                    <!-- Horisontal Slider -->
                                    <div id="pmd-slider-range"  class="pmd-range-slider"></div>
                                </div>
                            </div>
                            <!--Multiple Slider card -->
                            
                        </div>
                    </div>
                    <p class="component-desc">Default range slider. Use <code>.pmd-range-slider</code> to create the slider.</p><!-- slider example end -->
                        
                </div><!--Horizontal default range slider end-->
                
                
                <!--Horizontal range slider with tooltip -->
                <div class="component-box">
                
                	<!-- code view button -->
                    <div class="pmd-card-title custom-heading view-code-xs clearfix">
                        <a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
                    </div><!-- code view button end-->
                    
                    <!-- code view -->
                    <div class="code-box">
   						<div class="pmd-tabs">
       						<div class="pmd-tab-active-bar"></div> 
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="active"><a href="#multiple-tooltip-html" data-toggle="tab">HTML</a></li>
                                <li><a href="#multiple-tooltip-css" data-toggle="tab">CSS</a></li>
                                <li><a href="#multiple-tooltip-js" data-toggle="tab">JS</a></li>
                            </ul>
                        </div>
                        <div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="multiple-tooltip-html">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/multiple-tooltip-hendler.html"></pre> 
                            </div>
                            <div class="tab-pane" id="multiple-tooltip-css">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/range-slider.css"></pre>
                            </div>
                            <div class="tab-pane" id="multiple-tooltip-js">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/multiple-tooltip-hendler.js"></pre>
                            </div>
                        </div>
                    </div><!-- code view end -->
                    
                    <!-- slider example -->                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <div id="pmd-slider-range-tooltip"  class="pmd-range-slider pmd-range-tooltip"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="component-desc">Range slider with visible tooltip. In order to make the tooltip visible, add <code>.pmd-range-tooltip</code> to the slider.</p><!-- slider exampleend  -->
                    
                </div><!--Horizontal range slider with tooltip end-->
                
                
                <!--Horizontal range slider with bottom tooltip -->
                <div class="component-box">
                
                	<!-- code view button -->
                    <div class="pmd-card-title custom-heading view-code-xs clearfix">
                        <a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
                    </div><!-- code view button end -->
                    
                    <!-- code view-->
                    <div class="code-box pmd-tabs pmd-tabs-custom"> 
                        <ul class="nav nav-tabs" data-tabs="tabs">
                            <li class="active"><a href="#multiple-tooltip-bottom-html" data-toggle="tab">HTML</a></li>
                            <li><a href="#multiple-tooltip-bottom-css" data-toggle="tab">CSS</a></li>
                            <li><a href="#multiple-tooltip-bottom-js" data-toggle="tab">JS</a></li>
                        </ul>
                        <div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="multiple-tooltip-bottom-html">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/multiple-tooltip-bottom-hendler.html"></pre> 
                            </div>
                            <div class="tab-pane" id="multiple-tooltip-bottom-css">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/range-slider.css"></pre>
                            </div>
                            <div class="tab-pane" id="multiple-tooltip-bottom-js">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/multiple-tooltip-bottom-hendler.js"></pre>
                            </div>
                        </div>
                    </div><!-- code view end -->
                    
                    <!-- slider example -->                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <div id="pmd-slider-range-tooltip-bottom"  class="pmd-range-slider pmd-range-tooltip pmd-range-tooltip-bottom"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="component-desc">Range slider with visible tooltip at the bottom. You can show tooltip at the bottom using <code>.pmd-range-tooltip-bottom</code>.</p><!-- slider example end -->
                    
                </div><!--Horizontal range slider with bottom tooltip end -->
                
                
                <!--Horizontal range slider with lower bottom tooltip -->
                <div class="component-box">
                
                	<!-- code view button -->
                    <div class="pmd-card-title custom-heading view-code-xs clearfix">
                        <a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
                    </div><!-- code view button end-->
                    
                    <!-- code view -->
                    <div class="code-box pmd-tabs pmd-tabs-custom"> 
                        <ul class="nav nav-tabs" data-tabs="tabs">
                            <li class="active"><a href="#tooltip-bottom-lower-html" data-toggle="tab">HTML</a></li>
                            <li><a href="#tooltip-bottom-lower-css" data-toggle="tab">CSS</a></li>
                            <li><a href="#tooltip-bottom-lower-js" data-toggle="tab">JS</a></li>
                        </ul>
                        <div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="tooltip-bottom-lower-html">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/tooltip-bottom-lower-hendler.html"></pre> 
                            </div>
                            <div class="tab-pane" id="tooltip-bottom-lower-css">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/range-slider.css"></pre>
                            </div>
                            <div class="tab-pane" id="tooltip-bottom-lower-js">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/tooltip-bottom-lower-hendler.js"></pre>
                            </div>
                        </div>
                    </div><!-- code view end -->
                    
                    <!-- slider example -->                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <div id="pmd-slider-range-tooltip-bottom-lower"  class="pmd-range-slider pmd-range-tooltip pmd-range-tooltip-left-bottom"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="component-desc">Range slider with lower tooltip at the bottom. You can show tooltip at the bottom using <code>.pmd-range-tooltip-left-bottom</code>.</p><!-- slider example end-->
                        
                </div><!--Horizontal range slider with lower bottom tooltip end -->
                
                <!--Horizontal range slider with upper bottom tooltip -->
                <div class="component-box">
                	
                    <!-- code view button -->
                    <div class="pmd-card-title custom-heading view-code-xs clearfix">
                        <a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
                    </div><!-- code view button -->
                    
                    <!-- code view -->
                    <div class="code-box pmd-tabs pmd-tabs-custom"> 
                        <ul class="nav nav-tabs" data-tabs="tabs">
                            <li class="active"><a href="#tooltip-bottom-upper-html" data-toggle="tab">HTML</a></li>
                            <li><a href="#tooltip-bottom-upper-css" data-toggle="tab">CSS</a></li>
                            <li><a href="#tooltip-bottom-upper-js" data-toggle="tab">JS</a></li>
                        </ul>
                        <div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="tooltip-bottom-upper-html">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/tooltip-bottom-upper-hendler.html"></pre> 
                            </div>
                            <div class="tab-pane" id="tooltip-bottom-upper-css">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/range-slider.css"></pre>
                            </div>
                            <div class="tab-pane" id="tooltip-bottom-upper-js">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/tooltip-bottom-upper-hendler.js"></pre>
                            </div>
                        </div>
                    </div><!-- code view end -->
                    
                    <!-- slider example -->                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <div id="pmd-slider-range-tooltip-bottom-upper"  class="pmd-range-slider pmd-range-tooltip pmd-range-tooltip-right-bottom"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="component-desc">Range slider with upper tooltip at the bottom. You can show tooltip at the bottom using <code>.pmd-range-tooltip-right-bottom</code>.</p><!-- slider example end -->
                        
                </div><!--Horizontal range slider with upper bottom tooltip end -->
                
                                                                            
                <!--Horizontal range slider with handler which can be disabled -->
                <div class="component-box">
                
                	<!-- code view button -->
                    <div class="pmd-card-title custom-heading view-code-xs clearfix">
                        <a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
                    </div><!-- code view button end -->
                    
                    <!-- code view -->
                    <div class="code-box">
                       <div class="pmd-tabs">
                           <div class="pmd-tab-active-bar"></div> 
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="active"><a href="#disable-multiple-html" data-toggle="tab">HTML</a></li>
                                <li><a href="#disable-multiple-css" data-toggle="tab">CSS</a></li>
                                <li><a href="#disable-multiple-js" data-toggle="tab">JS</a></li>
                            </ul>
                        </div>
                        <div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="disable-multiple-html">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/disable-multiple-hendler.html"></pre> 
                            </div>
                            <div class="tab-pane" id="disable-multiple-css">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/range-slider.css"></pre>
                            </div>
                            <div class="tab-pane" id="disable-multiple-js">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/disable-multiple-hendler.js"></pre>
                            </div>
                        </div>
                    </div><!-- code view end -->
                    
                    <!-- slider example -->                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <div id="disable-multiple" class="pmd-range-slider"></div>
                                    <div class="slider-checkbox">
                                        <label class="checkbox-inline pmd-checkbox pmd-checkbox-ripple-effect">
                                            <input type="checkbox" value="" id="multiple-checkbox-left">
                                            <span>Disable left handle</span>
                                        </label>
                                        <label class="checkbox-inline pmd-checkbox pmd-checkbox-ripple-effect">
                                            <input type="checkbox" value="" id="multiple-checkbox-right">
                                            <span>Disable Right handle</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="component-desc">Ranger slider each of which's handler can be disabled. </p><!-- slider example end -->
                    
                </div><!--Horizontal range slider with handler which can be disabled end-->
                
                <!--Horizontal range slider with value -->
                <div class="component-box">
                
                	<!-- code view button -->
                    <div class="pmd-card-title custom-heading view-code-xs clearfix">
                        <a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a> 
                    </div><!-- code view button end -->
                    
                    <!-- code view -->
                    <div class="code-box">
   						<div class="pmd-tabs">
       						<div class="pmd-tab-active-bar"></div> 
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="active"><a href="#range-value-slider-html" data-toggle="tab">HTML</a></li>
                                <li><a href="#range-value-slider-css" data-toggle="tab">CSS</a></li>
                                <li><a href="#range-value-slider-js" data-toggle="tab">JS</a></li>
                            </ul>
                        </div>
                        <div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="range-value-slider-html">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/multiple-hendler-value.html"></pre> 
                            </div>
                            <div class="tab-pane" id="range-value-slider-css">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/range-slider.css"></pre>
                            </div>
                            <div class="tab-pane" id="range-value-slider-js">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/multiple-hendler-value.js"></pre>
                            </div>
                        </div>
                    </div><!-- code view end -->
                    
                    <!-- slider example -->                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pmd-card pmd-z-depth">
                                <div class="pmd-card-body">
                                    <div id="pmd-slider-value-range"  class="pmd-range-slider"></div>
                                    <div class="row">
                                        <div class="range-value col-sm-6">
                                            <span id="value-min"></span>
                                        </div>
                                        <div class="range-value col-sm-6 text-right">
                                            <span id="value-max"></span>
                                        </div>
                                    </div>	
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="component-desc">Range Slider with value</p><!-- slider example end -->
                    
                </div><!--Horizontal range slider with value end -->
               
            </div>
        </section><!-- horizontal range slider end-->
            
            
            
        <!-- Verticle slider -->
        <section class="row component-section">
        
        	<!-- vertical slider title and description -->
            <div class="col-md-3">
                <div id="vertical">
                    <h2>Verticle Slider</h2>
                </div>
                <p> Instead of horizontal slider we can also show the slider vertically.  For vertical sliders also we can have slider with steps, slider with tooltip towards left or right. </p>
            </div><!-- vertical slider title and description end -->
            
            	
            <div class="col-md-9">
            
                <!-- Vertical single handler slider code,example -->                
                <div class="component-box">
                
                	<!-- code view button -->
                    <div class="pmd-card-title custom-heading clearfix">
                        <a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
                    </div><!-- code view button -->
                    
                    <!-- code view -->
                    <div class="code-box">
   						<div class="pmd-tabs">
       						<div class="pmd-tab-active-bar"></div> 
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="active"><a href="#verticle-single-html" data-toggle="tab">HTML</a></li>
                                <li><a href="#verticle-single-css" data-toggle="tab">CSS</a></li>
                                <li><a href="#verticle-single-js" data-toggle="tab">JS</a></li>
                            </ul>
                        </div>
                        <div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="verticle-single-html">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/verticle-single-hendler.html"></pre> 
                            </div>
                            <div class="tab-pane" id="verticle-single-css">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/range-slider.css"></pre>
                            </div>
                            <div class="tab-pane" id="verticle-single-js">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/verticle-single-hendler.js"></pre> 
                            </div>
                        </div>
                    </div><!-- code view end -->
                    <div class="clearfix"></div>
                    
                    <!-- slider example -->
                    <div class="row">
                    
                        <!-- default vertical single handler slider -->
                        <div class="col-md-6 vertical-slider">                            
                            <div class="pmd-card pmd-z-depth">
                                <div id="pmd-ver-slider" class="pmd-range-slider"></div>
                            </div>
                            <p class="component-desc">Single Handle Vertical Slider.</p>
                        </div><!-- default vertical single handler slider end -->
                        
                        <!-- vertical single handler slider with steps -->
                        <div class="col-md-6 vertical-slider">                        	
                            <div class="pmd-card pmd-z-depth">
                                <div id="pmd-ver-slider-step" class="pmd-range-slider"></div>
                            </div>
                            <p class="component-desc">Single Handle Vertical Slider with steps</p>
                        </div><!-- vertical single handler slider with steps end -->
                        
                        <!-- vertical single handler slider with visible tooltip -->
                        <div class="col-md-6 vertical-slider">                            
                            <div class="pmd-card pmd-z-depth">
                                <div id="pmd-ver-slider-tooltip"  class="pmd-range-slider pmd-range-tooltip"></div>
                            </div>
                            <p class="component-desc">Single Handle Vertical Slider with visible tooltip. Use <code>.pmd-range-tooltip</code> for slider with visible tooltip.</p>
                        </div><!-- vertical single handler slider with visible tooltip end -->
                        
                        <!-- vertical single handler slider with visible tooltip at right -->
                        <div class="col-md-6 vertical-slider">                            
                            <div class="pmd-card pmd-z-depth">
                                <div id="pmd-ver-slider-tooltip-right"  class="pmd-range-slider pmd-range-tooltip pmd-range-tooltip-right"></div>
                            </div>
                            <p class="component-desc">Single Handle Vertical Slider with visible tooltip at right. Add right tooltip using <code>.pmd-range-tooltip-right</code></p>
                        </div><!--end vertical single handler slider with visible tooltip at right -->
                        <div class="clearfix"></div>
                        
                    </div><!-- slider example end -->
                    
                </div><!-- Vertical single handler slider code,example end -->

            </div>
        </section><!-- Verticle slider end -->
         

        <!-- Verticle range slider -->
        <section class="row component-section">
        
        	<!-- Vertical range slider title and description -->
            <div class="col-md-3">
                <div id="vertical-range">
                    <h2>Verticle Range Slider</h2>
                    <p> Vertical range slider is a slider with two handlers. We can have default slider or slider with visible tooltip. We can also have a slider with both tooltips in opposite direction to each other.</p>
                </div>
            </div><!-- Vertical range slider title and description end -->
            
            <div class="col-md-9">

                <!--verticle range slider code,example -->
                <div class="component-box">
                
                	<!-- code view button -->
                    <div class="pmd-card-title custom-heading clearfix">
                        <a title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary rotate-90 pull-right pmd-tooltip" href="javascript:void(0);" data-original-title="View Code"><i class="material-icons md-dark pmd-sm">code</i></a>
                    </div><!-- code view button end -->
                    
                    <!-- code view -->
                    <div class="code-box">
   						<div class="pmd-tabs">
       						<div class="pmd-tab-active-bar"></div> 
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="active"><a href="#verticle-multiple-html" data-toggle="tab">HTML</a></li>
                                <li><a href="#verticle-multiple-css" data-toggle="tab">CSS</a></li>
                                <li><a href="#verticle-multiple-js" data-toggle="tab">JS</a></li>
                            </ul>
                        </div>
                        <div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="verticle-multiple-html">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/verticle-multiple-hendler.html"></pre> 
                            </div>
                            <div class="tab-pane" id="verticle-multiple-css">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/range-slider.css"></pre>
                            </div>
                            <div class="tab-pane" id="verticle-multiple-js">
                                <pre class="pre-codebox line-numbers" data-src="../components/range-slider/snippets/verticle-multiple-hendler.js"></pre> 
                            </div>
                        </div>
                    </div><!-- code view end-->
                    <div class="clearfix"></div>
                    
                    <!-- slider example -->
                    <div class="row">
                    
                    	<!-- default vertical range slider -->
                        <div class="col-md-6 vertical-slider">                            
                            <div class="pmd-card pmd-z-depth">
                                <div id="pmd-ver-slider-range"  class="pmd-range-slider"></div>
                            </div>
                            <p class="component-desc">Default Vertical Range Slider</p>
                        </div><!-- default vertical range slider end -->
                        
                        <!-- vertical range slider with tooltip -->
                        <div class="col-md-6 vertical-slider">                            
                            <div class="pmd-card pmd-z-depth">
                                <div id="pmd-ver-slider-range-tooltip"  class="pmd-range-slider pmd-range-tooltip"></div>
                            </div>
                            <p class="component-desc">Vertical range slider with visible tooltip on left</p>
                        </div><!-- vertical range slider with tooltip end -->
                        
                        <!-- vertical range slider with lower handler tooltip at right -->
                        <div class="col-md-6 vertical-slider">                            
                            <div class="pmd-card pmd-z-depth">
                                <div id="pmd-ver-slider-range-tooltip-lower-right"  class="pmd-range-slider pmd-range-tooltip pmd-range-tooltip-bottom-right"></div>
                            </div>
                            <p class="component-desc">Vertical range slider with lower handler tooltip towards right and upper handler tooltip towards left. Use <code>.pmd-range-tooltip-bottom-right</code> to achieve this. </p>
                        </div><!--end vertical range slider with lower tooltip at right -->
                        
                        <!-- vertical range slider with upper handler tooltip at right -->
                        <div class="col-md-6 vertical-slider">                            
                            <div class="pmd-card pmd-z-depth">
                                <div id="pmd-ver-slider-range-tooltip-upper-right"  class="pmd-range-slider pmd-range-tooltip pmd-range-tooltip-top-right"></div>
                            </div>
                            <p class="component-desc">Vertical range slider with lower handler tooltip towards left and upper handler tooltip towards right. Use <code>.pmd-range-tooltip-top-right</code> for this.</p>
                        </div><!--end vertical range slider with upper handler tooltip at right -->
                        
                    </div><!-- slider example end-->

                </div><!--verticle range slider code,example end -->

            </div>
        </section><!-- Verticle range slider end --> 
        
            
        <!-- Configuration starts-->            
        <section class="row component-section">
        
        	<!-- Configuration title and description -->
            <div class="col-md-3">
                <div id="config">
                    <h2>Configuration Options</h2>
                </div>
                <p>The Propeller CSS classes apply various predefined visual enhancements to the slider. The table lists the available classes and their effects.</p>
            </div><!-- Configuration title and description end-->
            
            <div class="col-md-9">
            
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
                                    <td data-title="Class"><code>.pmd-range-slider</code></td>
                                    <td data-title="Effect">Used to create the slider.</td>
                                    <td data-title="Remark">Required</td>
                                </tr>
                                <tr>
                                    <td data-title="Class"><code>.pmd-range-tooltip</code></td>
                                    <td data-title="Effect">Used to make the tooltip visible.</td>
                                    <td data-title="Remark">Optional</td>
                                </tr>
                                <tr>
                                    <td data-title="Class"><code>.pmd-range-tooltip-bottom</code></td>
                                    <td data-title="Effect">Used to make the tooltip visible at the bottom.</td>
                                    <td data-title="Remark">Optional</td>
                                </tr>
                                <tr>
                                    <td data-title="Class"><code>.pmd-range-tooltip-right</code></td>
                                    <td data-title="Effect">Use to make the tooltip visible at the right of the vertical slider.</td>
                                    <td data-title="Remark">Optional</td>
                                </tr>
                                <tr>
                                    <td data-title="Class"><code>.pmd-range-tooltip-bottom-right</code></td>
                                    <td data-title="Effect">Use to make the lower tooltip visible at the right of the vertical slider.</td>
                                    <td data-title="Remark">Optional</td>
                                </tr>
                                <tr>
                                    <td data-title="Class"><code>.pmd-range-tooltip-top-right</code></td>
                                    <td data-title="Effect">Use to make the upper tooltip visible at the right of the vertical slider.</td>
                                    <td data-title="Remark">Optional</td>
                                </tr>
                                <tr>
                                    <td data-title="Class"><code>.pmd-range-tooltip-left-bottom</code></td>
                                    <td data-title="Effect">Use to make the lower tooltip visible at the bottom of the horizontal slider.</td>
                                    <td data-title="Remark">Optional</td>
                                </tr>
                                <tr>
                                    <td data-title="Class"><code>.pmd-range-tooltip-right-bottom</code></td>
                                    <td data-title="Effect">Use to make the upper tooltip visible at the bottom of the horizontal slider.</td>
                                    <td data-title="Remark">Optional</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div><!--Propeller  Class Configuration card end -->
                
            </div>
        </section><!-- Configuration ends-->            

  	</div><!--range slider container -->        

</div><!--Range slider constructor end -->
    

<!--footer start -->
<?php include('include/footer.php'); ?>
<!--footer end -->