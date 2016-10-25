<?php
// <editor-fold defaultstate="collapsed" desc="Define dependency array. Format is component name, index 0 is dependency folder name, index 1 is dependency sub folder name, index 2 is depenedeny file name.">
    $dependency_folder = array();
    $dependency_folder['alerts'] = array(
            '0' => array(
                'dependency_folder_name' => 'buttons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'buttons.css',
            )
        );
    $dependency_folder['accordion'] = array(
            '0' => array(
                'dependency_folder_name' => 'typography',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'typography.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'icons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'google-icons.css',
            ),
            '2' => array(
                'dependency_folder_name' => 'buttons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'buttons.css',
            ),
            '3' => array(
                'dependency_folder_name' => 'list',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'list-group.css',
            )			
        );
    $dependency_folder['badge'] = array(
            '0' => array(
                'dependency_folder_name' => 'buttons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'buttons.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'icons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'google-icons.css',
            )
        );
    $dependency_folder['buttons'] = array(
            '0' => array(
                'dependency_folder_name' => 'icons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'google-icons.css',
            )
        );
    $dependency_folder['dialog'] = array(
            '0' => array(
                'dependency_folder_name' => 'icons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'google-icons.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'list',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'list-group.css',
            ),
            '2' => array(
                'dependency_folder_name' => 'typography',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'typography.css',
            ),
            '3' => array(
                'dependency_folder_name' => 'card',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'card.css',
            ),
            '4' => array(
                'dependency_folder_name' => 'buttons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'buttons.css',
            ),
            '5' => array(
                'dependency_folder_name' => 'icons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'google-icons.css',
            ),
            '6' => array(
                'dependency_folder_name' => 'radio',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'radio.css',
            ),
            '7' => array(
                'dependency_folder_name' => 'checkbox',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'checkbox.css',
            ),
            '8' => array(
                'dependency_folder_name' => 'text-field',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'textfield.css',
            )
        );
    $dependency_folder['dropdown'] = array(
            '0' => array(
                'dependency_folder_name' => 'typography',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'typography.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'buttons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'buttons.css',
            )
        );
    $dependency_folder['form'] = array(
            '0' => array(
                'dependency_folder_name' => 'icons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'google-icons.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'checkbox',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'checkbox.css',
            ),
            '2' => array(
                'dependency_folder_name' => 'radio',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'radio.css',
            ),
            '3' => array(
                'dependency_folder_name' => 'text-field',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'textfield.css',
            ),
            '4' => array(
                'dependency_folder_name' => 'toggle-button',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'toggle.css',
            )
        );
    $dependency_folder['list'] = array(
            '0' => array(
                'dependency_folder_name' => 'icons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'google-icons.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'typography',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'typography.css',
            )
        );
    $dependency_folder['menu'] = array(
            '0' => array(
                'dependency_folder_name' => 'icons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'google-icons.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'typography',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'typography.css',
            ),
            '2' => array(
                'dependency_folder_name' => 'dropdown',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'dropdowns.css',
            ),
            '3' => array(
                'dependency_folder_name' => 'buttons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'buttons.css',
            ),
            '4' => array(
                'dependency_folder_name' => 'icons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'propeller-icons.css',
            ),
            '5' => array(
                'dependency_folder_name' => 'sidebar',
                'dependency_sub_folder_name' => 'js',
                'dependency_file_name' => 'sidebar.js',
            ),
            '6' => array(
                'dependency_folder_name' => 'dropdown',
                'dependency_sub_folder_name' => 'js',
                'dependency_file_name' => 'dropdown.js',
            )
        );


    $dependency_folder['popover'] = array(
            '0' => array(
                'dependency_folder_name' => 'typography',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'typography.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'buttons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'buttons.css',
            )
        );
	$dependency_folder['sidebar'] = array(
            '0' => array(
                'dependency_folder_name' => 'typography',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'typography.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'buttons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'buttons.css',
            ),
            '2' => array(
                'dependency_folder_name' => 'icons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'google-icons.css',
            ),
            '3' => array(
                'dependency_folder_name' => 'dropdown',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'dropdowns.css',
            ),
            '4' => array(
                'dependency_folder_name' => 'menu',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'navbar.css',
            ),
            '5' => array(
                'dependency_folder_name' => 'sidebar',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'sidebar.css',
            ),
        );
	$dependency_folder['tabs'] = array(
            '0' => array(
                'dependency_folder_name' => 'typography',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'typography.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'dropdown',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'dropdowns.css',
            ),			
            '2' => array(
                'dependency_folder_name' => 'icons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'google-icons.css',
            ),
            '3' => array(
                'dependency_folder_name' => 'card',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'card.css',
            )
        );		
	$dependency_folder['tables'] = array(
            '0' => array(
                'dependency_folder_name' => 'card',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'card.css',
            ),			
            '1' => array(
                'dependency_folder_name' => 'text-field',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'textfield.css',
            ),
            '2' => array(
                'dependency_folder_name' => 'tables',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'table.css',
            ),
            '3' => array(
                'dependency_folder_name' => 'pagination',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'pagination.css',
            ),
            '4' => array(
                'dependency_folder_name' => 'icons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'google-icons.css',
            ),
        );		
		$dependency_folder['tooltip'] = array(
            '0' => array(
                'dependency_folder_name' => 'buttons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'buttons.css',
            )
        );	
		$dependency_folder['card'] = array(
            '0' => array(
                'dependency_folder_name' => 'icons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'google-icons.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'typography',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'typography.css',
            ),
            '2' => array(
                'dependency_folder_name' => 'buttons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'buttons.css',
            )
        );	
		$dependency_folder['floating-action-button'] = array(
            '0' => array(
                'dependency_folder_name' => 'icons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'google-icons.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'typography',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'typography.css',
            ),
            '2' => array(
                'dependency_folder_name' => 'buttons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'buttons.css',
            )
        );	
		$dependency_folder['datepicker'] = array(
            '0' => array(
                'dependency_folder_name' => 'icons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'google-icons.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'typography',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'typography.css',
            ),
            '2' => array(
                'dependency_folder_name' => 'buttons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'buttons.css',
            ),
            '3' => array(
                'dependency_folder_name' => 'text-field',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'textfield.css',
            )
        );	
		$dependency_folder['range-slider'] = array(
            '0' => array(
                'dependency_folder_name' => 'icons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'google-icons.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'text-field',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'textfield.css',
            ),
            '2' => array(
                'dependency_folder_name' => 'checkbox',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'checkbox.css',
            ),
        );	
		$dependency_folder['select2'] = array(
            '0' => array(
                'dependency_folder_name' => 'typography',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'typography.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'text-field',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'textfield.css',
            ),
        );	
		$dependency_folder['DataTables'] = array(
            '0' => array(
                'dependency_folder_name' => 'buttons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'buttons.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'text-field',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'textfield.css',
            ),
            '2' => array(
                'dependency_folder_name' => 'tables',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'table.css',
            ),
        );	
		
	    // </editor-fold>

	$page_info = array();
	
	$page_info['default'] = array('title' => 'Propeller Guideline',
			'description' => 'Propeller is a front-end responsive framework based on Material design & Bootstrap.'
			);
	$page_info['typography'] = array('title' => '',
			'description' => '',
			);
	$page_info['icons'] = array('title' => '',
			'description' => ''
			);
	$page_info['shadow'] = array('title' => '',
			'description' => '',
			);
	$page_info['accordion'] = array('title' => '',
			'description' => ''
			);
	$page_info['alert'] = array('title' => '',
			'description' => '',
			);
	$page_info['badge'] = array('title' => '',
			'description' => ''
			);
	$page_info['button'] = array('title' => '',
			'description' => '',
			);
	$page_info['dialogs'] = array('title' => '',
			'description' => ''
			);
	$page_info['dropdown'] = array('title' => '',
			'description' => '',
			);
	$page_info['form'] = array('title' => '',
			'description' => ''
			);
	$page_info['lists'] = array('title' => '',
			'description' => '',
			);
	$page_info['navbar'] = array('title' => '',
			'description' => ''
			);
	$page_info['popover'] = array('title' => '',
			'description' => '',
			);
	$page_info['progressbar'] = array('title' => '',
			'description' => ''
			);
	$page_info['sidebar'] = array('title' => '',
			'description' => '',
			);
	$page_info['tabs'] = array('title' => '',
			'description' => ''
			);
	$page_info['table'] = array('title' => '',
			'description' => '',
			);
	$page_info['tooltip'] = array('title' => '',
			'description' => ''
			);
	$page_info['card'] = array('title' => '',
			'description' => '',
			);
	$page_info['floating-button'] = array('title' => '',
			'description' => ''
			);
	$page_info['custom-scroll'] = array('title' => '',
			'description' => '',
			);
	$page_info['data-grid'] = array('title' => '',
			'description' => ''
			);
	$page_info['datepicker'] = array('title' => '',
			'description' => '',
			);
	$page_info['range-slider'] = array('title' => '',
			'description' => ''
			);
	$page_info['select-2'] = array('title' => '',
			'description' => '',
			);
			