$(document).ready(function() {
			var exampleDatatable = $('#example').DataTable({
				responsive: {
					details: {
						type: 'column',
						target: 'tr'
					}
				},
				columnDefs: [ {
					className: 'control',
					orderable: false,
					targets:   1
				} ],
				order: [ 1, 'asc' ],
				bFilter: true,
				bLengthChange: true,
				pagingType: "simple",
				"paging": true,
				"searching": true,
				"language": {
			    	"info": " _START_ - _END_ of _TOTAL_ ",
					"sLengthMenu": "<span class='custom-select-title'>Rows per page:</span> <span class='custom-select'> _MENU_ </span>",
					"sSearch": "",
					"sSearchPlaceholder": "Search",
					"paginate": {
				     	"sNext": " ",
						"sPrevious": " "
				    },
			    },
				dom:
					"<'pmd-card-title'<'data-table-responsive-title'><'search-paper pmd-textfield'f>>" +
					"<'row'<'col-sm-12'tr>>" +
					"<'pmd-card-footer' <'pmd-datatable-pagination' l i p>>",
			});
			
			
			$('#tableInverse').DataTable({
				responsive: {
					details: {
						type: 'column',
						target: 'tr'
					}
				},
				columnDefs: [ {
					orderable: false,
					className: 'select-checkbox',
					targets:0,
				} ],
				select: {
					style: 'multi',
					selector: 'td:first-child'
				},
				order: [ 1, 'asc' ],
				bFilter: true,
				bLengthChange: true,
			//	pagingType: "simple",
				"paging": true,
				"searching": true,
				"language": {
			    	"info": " _START_ - _END_ of _TOTAL_ ",
					"sLengthMenu": "<span class='custom-select-title'>Rows per page:</span> <span class='custom-select'> _MENU_ </span>",
					"sSearch": "",
					"sSearchPlaceholder": "Search",
					"paginate": {
				    	"sNext": " ",
						"sPrevious": " "
				    },
			    },
				dom:
					"<'pmd-card-title'<'data-table-propeller-title'><'search-paper pmd-textfield'f>>" +
					"<'custom-select-info'<'custom-select-item'><'custom-select-action'>>" +
					"<'row'<'col-sm-12'tr>>" +
					"<'pmd-card-footer' <'pmd-datatable-pagination' l i p>>",
			});
			
			$('#example-checkbox').DataTable({
				responsive: false,
				columnDefs: [ {
					orderable: false,
					className: 'select-checkbox',
					targets:0,
				} ],
				select: {
					style: 'multi',
					selector: 'td:first-child'
				},
				order: [ 1, 'asc' ],
				bFilter: true,
				bLengthChange: true,
				pagingType: "simple",
				"paging": true,
				"searching": true,
				"language": {
			    	"info": " _START_ - _END_ of _TOTAL_ ",
					"sLengthMenu": "<span class='custom-select-title'>Rows per page:</span> <span class='custom-select'> _MENU_ </span>",
					"sSearch": "",
					"sSearchPlaceholder": "Search",
					"paginate": {
				     	"sNext": " ",
						"sPrevious": " "
				    },
			    },
				dom:
					"<'pmd-card-title'<'data-table-inverse-title'><'search-paper pmd-textfield'f>>" +
					"<'custom-select-info'<'custom-select-item'><'custom-select-action'>>" +
					"<'row'<'col-sm-12'tr>>" +
					"<'pmd-card-footer' <'pmd-datatable-pagination' l i p>>",
			});
			
			/// Select value
			$('.custom-select-info').hide();
		    
			$('#example-checkbox tbody').on( 'click', 'tr', function () {
				if ( $(this).hasClass('selected') ) {
					var rowinfo = $(this).closest('.dataTables_wrapper').find('.select-info').text();
					$(this).closest('.dataTables_wrapper').find('.custom-select-info .custom-select-item').text(rowinfo);
					if ($(this).closest('.dataTables_wrapper').find('.custom-select-info .custom-select-item').text() != null){
						$(this).closest('.dataTables_wrapper').find('.custom-select-info').show();
						//show delet button
					} else{
						$(this).closest('.dataTables_wrapper').find('.custom-select-info').hide();
					}
				}
				else {
					var rowinfo = $(this).closest('.dataTables_wrapper').find('.select-info').text();
					$(this).closest('.dataTables_wrapper').find('.custom-select-info .custom-select-item').text(rowinfo);
				}
				
				if($('#example-checkbox').find('.selected').length == 0){
					$(this).closest('.dataTables_wrapper').find('.custom-select-info').hide();
				}
				
			  } );
			  
			  
			  $('#tableInverse tbody').on( 'click', 'tr', function () {
				if ( $(this).hasClass('selected') ) {
					var rowinfo = $(this).closest('.dataTables_wrapper').find('.select-info').text();
					$(this).closest('.dataTables_wrapper').find('.custom-select-info .custom-select-item').text(rowinfo);
					if ($(this).closest('.dataTables_wrapper').find('.custom-select-info .custom-select-item').text() != null){
						$(this).closest('.dataTables_wrapper').find('.custom-select-info').show();
						//show delet button
					} else{
						$(this).closest('.dataTables_wrapper').find('.custom-select-info').hide();
					}
				}
				else {
					var rowinfo = $(this).closest('.dataTables_wrapper').find('.select-info').text();
					$(this).closest('.dataTables_wrapper').find('.custom-select-info .custom-select-item').text(rowinfo);
				}
				
				if($('#tableInverse').find('.selected').length == 0){
					$(this).closest('.dataTables_wrapper').find('.custom-select-info').hide();
				}
				
			  } );
			 
			$("div.data-table-propeller-title").html('<h2 class="pmd-card-title-text">Propeller Data table</h2>');
			$("div.data-table-responsive-title").html('<h2 class="pmd-card-title-text">Responsive Data table</h2>');
			$("div.data-table-inverse-title").html('<h2 class="pmd-card-title-text">Inverse Table</h2>');
			
			$(".custom-select-action").html('<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">delete</i></button><button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">more_vert</i></button>');
			
	} );