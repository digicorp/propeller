<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Petpooja_App_Marketplace">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
<title>Propeller Admin Dashboard</title>
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
<div id="content" class="pmd-content inner-page">
<!--tab start-->
    <div class="container-fluid full-width-container value-added-detail-page">
		<div>
			<div class="pull-right table-title-top-action">
				<div class="pmd-textfield pull-left">
				  <input type="text" id="exampleInputAmount" class="form-control" placeholder="Search for...">
				</div>
				<a href="javascript:void(0);" class="btn btn-primary pmd-btn-raised add-btn pmd-ripple-effect pull-left">Search</a>
			</div>
			<!-- Title -->
			<h1 class="section-title" id="services">
				<span>Table with Expand/Collapse</span>
			</h1><!-- End Title -->
			<!--breadcrum start-->
			<ol class="breadcrumb text-left">
			  <li><a href="index.php">Dashboard</a></li>
			  <li class="active">Table with Expand/Collapse</li>
			</ol><!--breadcrum end-->
		</div>
		<!-- Table -->
		<div class="table-responsive pmd-card pmd-z-depth">
			<table class="table table-mc-red pmd-table">
				<thead>
					<tr>
						<th>Ticket No.</th>
						<th>Browser Name</th>
						<th>Month</th>
						<th>Total</th>
						<th>Status</th>
						<th>Last Updated On</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td data-title="Ticket No">PMD484150</td>
						<td data-title="Browser Name">Firefox</td>
						<td data-title="Month">September</td>
						<td data-title="Total">25%</td>
						<td data-title="Status"><span class="status-btn blue-bg">Average</span></td>
						<td data-title="date">2016-09-20 15:50:00</td>
						<td class="pmd-table-row-action">
							<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
								<i class="material-icons md-dark pmd-sm">edit</i>
							</a>
							<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
								<i class="material-icons md-dark pmd-sm">delete</i>
							</a>					
						</td>
					</tr>
					<tr>
						<td data-title="Ticket No">PMD484149</td>
						<td data-title="Browser Name">Google Chrome</td>
						<td data-title="Month">September</td>
						<td data-title="Total">32%</td>
						<td data-title="Status"><span class="status-btn blue-bg">High</span></td>
						<td data-title="date">2016-09-21 15:50:00</td>
						<td class="pmd-table-row-action">
							<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
								<i class="material-icons md-dark pmd-sm">edit</i>
							</a>
							<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
								<i class="material-icons md-dark pmd-sm">delete</i>
							</a>					
						</td>
					</tr>
					<tr>
						<td data-title="Ticket No">PMD484148</td>
						<td data-title="Browser Name">Safari</td>
						<td data-title="Month">September</td>
						<td data-title="Total">13%</td>
						<td data-title="Status"><span class="status-btn blue-bg">Low</span></td>
						<td data-title="date">2016-09-20 14:00:00</td>
						<td class="pmd-table-row-action">
							<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
								<i class="material-icons md-dark pmd-sm">edit</i>
							</a>
							<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
								<i class="material-icons md-dark pmd-sm">delete</i>
							</a>					
						</td>
					</tr>
					<tr>
						<td data-title="Ticket No">PMD484147</td>
						<td data-title="Browser Name">Opera</td>
						<td data-title="Month">September</td>
						<td data-title="Total">7%</td>
						<td data-title="Status"><span class="status-btn blue-bg">Low</span></td>
						<td data-title="date">2016-09-20 11:30:00</td>
						<td class="pmd-table-row-action">
							<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
								<i class="material-icons md-dark pmd-sm">edit</i>
							</a>
							<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
								<i class="material-icons md-dark pmd-sm">delete</i>
							</a>
							<a href="javascript:void(0);" class="child-table-expand direct-expand"><i class="material-icons md-dark pmd-sm"></i></a>
						</td>
					</tr>
					<tr class="child-table">
						<td colspan="12">
							<div class="direct-child-table" style="display:none">
								<table class="table pmd-table table-striped table-sm">
									<thead>
										<tr>
											<th>Title</th>
											<th>Amount (%)</th>
											<th>Status</th>
											<th>Created</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
									<tr>
										<td>Service Tax </td>
										<td>14.5</td>
										<td><span class="status-btn red-bg">InActive</span></td>
										<td>2014-03-03</td>
										<td class="pmd-table-row-action">
											<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-xs"><i class="material-icons md-dark pmd-xs">edit</i></a>
											<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-xs"><i class="material-icons md-dark pmd-xs">delete</i></a>
										</td>
									</tr>
									<tr>
										<td>CWT1 </td>
										<td>2</td>
										<td><span class="status-btn green-bg">Active</span></td>
										<td>2014-03-03</td>
										<td class="pmd-table-row-action">
											<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-xs"><i class="material-icons md-dark pmd-xs">edit</i></a>
											<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-xs"><i class="material-icons md-dark pmd-xs">delete</i></a>
										</td>
									</tr>
									<tr>
										<td>Service charge shaival test </td>
										<td>20</td>
										<td><span class="status-btn green-bg">Active</span></td>
										<td>2014-03-03</td>
										<td class="pmd-table-row-action">
											<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-xs"><i class="material-icons md-dark pmd-xs">edit</i></a>
											<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-xs"><i class="material-icons md-dark pmd-xs">delete</i></a>
										</td>
									</tr>
									<tr>
										<td>Fixed Tax </td>
										<td>2.5</td>
										<td><span class="status-btn red-bg">InActive</span></td>
										<td>2014-03-03</td>
										<td class="pmd-table-row-action">
											<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-xs"><i class="material-icons md-dark pmd-xs">edit</i></a>
											<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-xs"><i class="material-icons md-dark pmd-xs">delete</i></a>
										</td>
									</tr>
									<tr>
										<td>cess vat</td>
										<td>5.8</td>
										<td><span class="status-btn red-bg">InActive</span></td>
										<td>2014-03-03</td>
										<td class="pmd-table-row-action">
											<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-xs"><i class="material-icons md-dark pmd-xs">edit</i></a>
											<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-xs"><i class="material-icons md-dark pmd-xs">delete</i></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</td>
				</tr>
				<tr>
					<td data-title="Ticket No">PMD484146</td>
					<td data-title="Browser Name">Mobile & Tablet</td>
					<td data-title="Month">September</td>
					<td data-title="Total">4%</td>
					<td data-title="Status"><span class="status-btn blue-bg">Very Low</span></td>
					<td data-title="date">2016-07-21 17:40:00</td>
					<td class="pmd-table-row-action">
						<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm"><i class="material-icons md-dark pmd-sm">edit</i></a>
						<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm"><i class="material-icons md-dark pmd-sm">delete</i>
						</a>					
					</td>
				</tr>
				<tr>
					<td data-title="Ticket No">PMD484145</td>
					<td data-title="Browser Name">Others</td>
					<td data-title="Month">September</td>
					<td data-title="Total">3%</td>
					<td data-title="Status"><span class="status-btn blue-bg">Very Low</span></td>
					<td data-title="date">2016-09-20 10:00:00</td>
					<td class="pmd-table-row-action">
						<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
							<i class="material-icons md-dark pmd-sm">edit</i>
						</a>
						<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
							<i class="material-icons md-dark pmd-sm">delete</i>
						</a>					
					</td>
				</tr>
				<tr>
					<td data-title="Ticket No">PMD484145</td>
					<td data-title="Browser Name">Firefox</td>
					<td data-title="Month">August</td>
					<td data-title="Total">20%</td>
					<td data-title="Status"><span class="status-btn blue-bg">Low</span></td>
					<td data-title="date">2016-08-28 15:50:00</td>
					<td class="pmd-table-row-action">
						<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
							<i class="material-icons md-dark pmd-sm">edit</i>
						</a>
						<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
							<i class="material-icons md-dark pmd-sm">delete</i>
						</a>					
					</td>
				</tr>
				<tr>
					<td data-title="Ticket No">PMD484144</td>
					<td data-title="Browser Name">Google Chrome</td>
					<td data-title="Month">August</td>
					<td data-title="Total">50%</td>
					<td data-title="Status"><span class="status-btn blue-bg">High</span></td>
					<td data-title="date">2016-08-28 13:00:00</td>
					<td class="pmd-table-row-action">
						<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
							<i class="material-icons md-dark pmd-sm">edit</i>
						</a>
						<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
							<i class="material-icons md-dark pmd-sm">delete</i>
						</a>					
					</td>
				</tr>
				<tr>
					<td data-title="Ticket No">PMD484143</td>
					<td data-title="Browser Name">Safari</td>
					<td data-title="Month">August</td>
					<td data-title="Total">15%</td>
					<td data-title="Status"><span class="status-btn blue-bg">Low</span></td>
					<td data-title="date">2016-08-28 10:00:00</td>
					<td class="pmd-table-row-action">
						<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
							<i class="material-icons md-dark pmd-sm">edit</i>
						</a>
						<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
							<i class="material-icons md-dark pmd-sm">delete</i>
						</a>					
					</td>
				</tr>
				<tr>
					<td data-title="Ticket No">PMD484142</td>
					<td data-title="Browser Name">Opera</td>
					<td data-title="Month">August</td>
					<td data-title="Total">10%</td>
					<td data-title="Status"><span class="status-btn blue-bg">Very Low</span></td>
					<td data-title="date">2016-08-22 19:00:00</td>
					<td class="pmd-table-row-action">
						<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
							<i class="material-icons md-dark pmd-sm">edit</i>
						</a>
						<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
							<i class="material-icons md-dark pmd-sm">delete</i>
						</a>					
					</td>
				</tr>
				<tr>
					<td data-title="Ticket No">PMD484141</td>
					<td data-title="Browser Name">Mobile & Tablet</td>
					<td data-title="Month">August</td>
					<td data-title="Total">7%</td>
					<td data-title="Status"><span class="status-btn blue-bg">Very Low</span></td>
					<td data-title="date">2016-08-30 12:00:00</td>
					<td class="pmd-table-row-action">
						<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
							<i class="material-icons md-dark pmd-sm">edit</i>
						</a>
						<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
							<i class="material-icons md-dark pmd-sm">delete</i>
						</a>					
					</td>
				</tr>
				<tr>
					<td data-title="Ticket No">PMD484140</td>
					<td data-title="Browser Name">Others</td>
					<td data-title="Month">August</td>
					<td data-title="Total">3%</td>
					<td data-title="Status"><span class="status-btn blue-bg">Very Low</span></td>
					<td data-title="date">2016-08-20 11:10:00</td>
					<td class="pmd-table-row-action">
						<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
							<i class="material-icons md-dark pmd-sm">edit</i>
						</a>
						<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
							<i class="material-icons md-dark pmd-sm">delete</i>
						</a>					
					</td>
				</tr>
				<tr>
					<td data-title="Ticket No">PMD484139</td>
					<td data-title="Browser Name">Firefox</td>
					<td data-title="Month">July</td>
					<td data-title="Total">45%</td>
					<td data-title="Status"><span class="status-btn blue-bg">High</span></td>
					<td data-title="date">2016-07-28 15:50:00</td>
					<td class="pmd-table-row-action">
						<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
							<i class="material-icons md-dark pmd-sm">edit</i>
						</a>
						<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
							<i class="material-icons md-dark pmd-sm">delete</i>
						</a>					
					</td>
				</tr>
				<tr>
					<td data-title="Ticket No">PMD484138</td>
					<td data-title="Browser Name">Google Chrome</td>
					<td data-title="Month">July</td>
					<td data-title="Total">55%</td>
					<td data-title="Status"><span class="status-btn blue-bg">Very High</span></td>
					<td data-title="date">2016-07-20 13:10:00</td>
					<td class="pmd-table-row-action">
						<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
							<i class="material-icons md-dark pmd-sm">edit</i>
						</a>
						<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
							<i class="material-icons md-dark pmd-sm">delete</i>
						</a>					
					</td>
				</tr>
				<tr>
					<td data-title="Ticket No">PMD484137</td>
					<td data-title="Browser Name">Safari</td>
					<td data-title="Month">July</td>
					<td data-title="Total">21%</td>
					<td data-title="Status"><span class="status-btn blue-bg">High</span></td>
					<td data-title="date">2016-07-22 17:00:00</td>
					<td class="pmd-table-row-action">
						<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
							<i class="material-icons md-dark pmd-sm">edit</i>
						</a>
						<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
							<i class="material-icons md-dark pmd-sm">delete</i>
						</a>
					</td>
				</tr>
			</tbody>
		</table>
		</div>
		<!-- Card Footer -->
		<div class="pmd-card-footer">
		  <ul class="pmd-pagination pull-right list-inline">
			  <span>Rows per page:</span> <span class="dropdown pmd-dropdown">
			  <button class="btn pmd-ripple-effect pmd-btn-flat btn-link dropdown-toggle" type="button" id="dropdownMenuDivider" data-toggle="dropdown" aria-expanded="false">10 <span class="caret"></span></button>
			  <ul aria-labelledby="dropdownMenuDivider" role="menu" class="dropdown-menu">
				  <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">10</a></li>
				  <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">20</a></li>
				  <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">30</a></li>
				  <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">40</a></li>
				  <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">50</a></li>
			  </ul>
			  </span> <span>1-10 of 100</span> <a href="javascript:void(0);" aria-label="Previous"><i class="material-icons md-dark pmd-sm">keyboard_arrow_left</i></a> <a href="javascript:void(0);" aria-label="Next"><i class="material-icons md-dark pmd-sm">keyboard_arrow_right</i></a>
		  </ul>
		</div>
	</div>
</div>
<!--tab start-->

<!--content area end-->

</div>

<!-- Footer Starts -->
<?php include('include/footer.php'); ?>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<?php include('include/scripts.php'); ?>
<!-- Scripts Ends -->

<!--detail page table data expand collapse javascript-->
<script type="text/javascript">
$(document).ready(function () {
	$(".direct-expand").click(function(){
		$(".direct-child-table").slideToggle(300);
		$(this).toggleClass( "child-table-collapse" );
	});
});
</script>
<!-- Scripts Ends -->

</body>
</html>