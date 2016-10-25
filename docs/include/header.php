<?php 
	require_once('custom/constants.php');
	require_once ('custom/dependency_array.php');
	$filename = basename($_SERVER['PHP_SELF']);
	$arrfilename = explode('.', $filename);
	$filename = $arrfilename[0];
	if(!array_key_exists($filename, $page_info))
	{
		$component = 'default';
	}
	else
	{
		$component = $filename;
	}
	$menu = $page_info[$component]['menu'];
?>
<!doctype html>
<html><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="<?php echo $page_info[$component]['description']; ?>">
<meta name="keywords" content="<?php echo $page_info[$component]['keywords']; ?>">

<title><?php echo $page_info[$component]['title']; ?></title>

<link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">

<!--prism code previewer --> 
<link rel="stylesheet" href="css/prism.css" />
<link rel="stylesheet" href="css/prism-line-numbers.css" data-noprefix />

<!-- Google icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- common css -->
<link rel="stylesheet" type="text/css" href="../assets/css/propeller-global.css"/>

<link rel="stylesheet" type="text/css" href="../../components/custom-scrollbar/css/pmd-scrollbar.css" /> 

<!-- css for data table component-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.0/css/select.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="../components/data-table/css/pmd-datatable.css">

<!--css for custom scrollbar component -->
<link rel="stylesheet" type="text/css" href="../components/custom-scrollbar/css/jquery.mCustomScrollbar.css">

<!--css for progressbar -->
<link rel="stylesheet" type="text/css" href="../components/progressbar/css/progressbar.css">

<!--css for Range slider -->
<link rel="stylesheet" type="text/css" href="../components/range-slider/css/nouislider.min.css">
<link rel="stylesheet" type="text/css" href="../components/range-slider/css/range-slider.css">

<!-- css for datepicker -->
<link rel="stylesheet" type="text/css" href="../components/datetimepicker/css/bootstrap-datetimepicker.css" />
<link rel="stylesheet" type="text/css" href="../components/datetimepicker/css/pmd-datetimepicker.css" />

<!--css for Selectbox -->
<link rel="stylesheet" type="text/css" href="../components/select2/css/select2.min.css">
<link rel="stylesheet" type="text/css" href="../components/select2/css/select2-bootstrap.css">
<link rel="stylesheet" type="text/css" href="../components/select2/css/pmd-select2.css">

<!--css for docs -->
<link rel="stylesheet" type="text/css" href="../docs/css/docs.css" />


<!--Google Analytics code-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-124615-22', 'auto');
  ga('send', 'pageview');
</script>
</head>
<body>
<!-- pmd-main section start -->
<section id="pmd-main" class="guideline"> 
  <!-- Left sidebar -->
<?php include('include/sidebar.php'); ?>



