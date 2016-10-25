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

<!--content area start-->
<div id="content" class="pmd-content">
	
    <!-- Typography  -->
	<div class="container-fluid">

		<!--section-title -->
		<h1 class="section-title" id="services">
			<span>Typography</span>
		</h1><!--section-title end -->
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.php">Dashboard</a></li>
		  <li class="active">Typography</li>
		</ol><!--breadcrum end-->
			
		<!-- componant header-->
		<div class="componant-title-bg">
			<div class="row">
				<!-- component title and description-->
				<div class="col-xs-12">
					<p class="lead">Typography is the art and technique of arranging type to make written language legible, readable, and appealing when displayed. The arrangement of type involves - <em>selecting typefaces, 
					point sizes, line lengths, line-spacing, and letter-spacing, and adjusting the space between pairs of letters.</em></p>
					<p class="lead">We have used Roboto font, the standard font used by Material Design. You'll find the fonts in the font folder of the Propeller kit you download.</p>
				</div> <!--end component title and description-->
			</div>
		</div> <!--end component header-->
		
		<!-- Headings componant -->
		<section class="row component-section">
			
			<!-- headings title and description -->
			<div class="col-md-3">
				<div id="headings">
					<h2>Headings</h2>
				</div>
				<p>All HTML headings tags, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code> are available. <code>.h1</code> through <code>.h6</code> are used when you want to match the font styling of a heading but still want your text to be displayed inline.</p>
			</div> <!-- end headings title and description -->
			
			<div class="col-md-9">
				
				<!-- headings code, example -->
				<div class="component-box">
				  
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
					<h2>Display Headings</h2>
				</div>
				<p>Traditional heading elements are designed to work best for your page content. When you need a heading to stand out, consider using a <strong>display heading</strong>&mdash;a larger, slightly more opinionated heading style. For example: Use <code>.pmd-display4</code> for a large heading. </p>
			</div> <!-- end display title and description -->
			
			<div class="col-md-9">
				
				<!-- display code, example -->
				<div class="component-box">
					
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
					<h2>Inline Text Elements</h2>
				</div>
				<p>Style your inline HTML elements with inline tags based on your requirement.</p>
			</div>
		
			<div class="col-md-9">
				
				<!-- inline text code, example -->
				<div class="component-box">
				
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
			
			<!-- blockquotes title and description -->
			<div class="col-md-3">
				<div id="blockquotes">
					<h2>Blockquotes</h2>
				</div>
				<p>For quoting blocks of content from another source within your document. Wrap <code>&lt;blockquote&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote. For straight quotes, we recommend a <code>&lt;p&gt;</code>.</p>
			</div> <!-- end blockquotes title and description -->

			<div class="col-md-9">

				<!-- blockquotes -->
				<div class="component-box">
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
					<h2>Addresses</h2>
				</div>
				<p>Used to provide contact information. Preserve formatting by ending all lines with tag <code>br</code>.</p>
			</div>

			<div class="col-md-9">
				<!-- code and example -->
				<div class="component-box">
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
		
	</div>
	<!--typography constructor -->

</div><!--content area end-->

<!-- Footer Starts -->
<?php include('include/footer.php'); ?>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<?php include('include/scripts.php'); ?>
<!-- Scripts Ends -->

</body>
</html>