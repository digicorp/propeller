<?php
// <editor-fold defaultstate="collapsed" desc="Define dependency array. Format is component name, index 0 is dependency folder name, index 1 is dependency sub folder name, index 2 is depenedeny file name.">
    $dependency_folder = array();
    $dependency_folder['alert'] = array(
            '0' => array(
                'dependency_folder_name' => 'button',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'button.css',
            ),
			'0' => array(
                'dependency_folder_name' => 'button',
                'dependency_sub_folder_name' => 'js',
                'dependency_file_name' => 'ripple-effect.js',
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
                'dependency_folder_name' => 'button',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'button.css',
            ),
        );
    $dependency_folder['badge'] = array(
            '0' => array(
                'dependency_folder_name' => 'button',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'button.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'icons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'google-icons.css',
            )
        );
    $dependency_folder['button'] = array(
           '0' => array(
                'dependency_folder_name' => 'icons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'google-icons.css',
            )
        );
    $dependency_folder['modal'] = array(
            '0' => array(
                'dependency_folder_name' => 'icons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'google-icons.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'list',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'list.css',
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
                'dependency_folder_name' => 'button',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'button.css',
            ),
            '5' => array(
                'dependency_folder_name' => 'radio',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'radio.css',
            ),
            '6' => array(
                'dependency_folder_name' => 'checkbox',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'checkbox.css',
            ),
            '7' => array(
                'dependency_folder_name' => 'textfield',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'textfield.css',
            ),
			'8' => array(
                'dependency_folder_name' => 'button',
                'dependency_sub_folder_name' => 'js',
                'dependency_file_name' => 'ripple-effect.js',
            ),
			'9' => array(
                'dependency_folder_name' => 'textfield',
                'dependency_sub_folder_name' => 'js',
                'dependency_file_name' => 'textfield.js',
            ),
			'10' => array(
                'dependency_folder_name' => 'radio',
                'dependency_sub_folder_name' => 'js',
                'dependency_file_name' => 'radio.js',
            ),
			'11' => array(
                'dependency_folder_name' => 'checkbox',
                'dependency_sub_folder_name' => 'js',
                'dependency_file_name' => 'checkbox.js',
            )
        );
    $dependency_folder['dropdown'] = array(
            '0' => array(
                'dependency_folder_name' => 'typography',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'typography.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'button',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'button.css',
            ),
            '2' => array(
                'dependency_folder_name' => 'icons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'google-icons.css',
            ),
			'3' => array(
                'dependency_folder_name' => 'button',
                'dependency_sub_folder_name' => 'js',
                'dependency_file_name' => 'ripple-effect.js',
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
                'dependency_folder_name' => 'textfield',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'textfield.css',
            ),
            '4' => array(
                'dependency_folder_name' => 'toggle-switch',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'toggle-switch.css',
            ),
            '5' => array(
                'dependency_folder_name' => 'textfield',
                'dependency_sub_folder_name' => 'js',
                'dependency_file_name' => 'textfield.js',
            ),
            '6' => array(
                'dependency_folder_name' => 'checkbox',
                'dependency_sub_folder_name' => 'js',
                'dependency_file_name' => 'checkbox.js',
            ),
            '7' => array(
                'dependency_folder_name' => 'radio',
                'dependency_sub_folder_name' => 'js',
                'dependency_file_name' => 'radio.js',
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
    $dependency_folder['navbar'] = array(
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
                'dependency_file_name' => 'dropdown.css',
            ),
            '3' => array(
                'dependency_folder_name' => 'button',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'button.css',
            ),
            '4' => array(
                'dependency_folder_name' => 'card',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'card.css',
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
            ),
            '7' => array(
                'dependency_folder_name' => 'button',
                'dependency_sub_folder_name' => 'js',
                'dependency_file_name' => 'ripple-effect.js',
            )
        );

    $dependency_folder['popover'] = array(
            '0' => array(
                'dependency_folder_name' => 'typography',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'typography.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'button',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'button.css',
            ),
			'2' => array(
                'dependency_folder_name' => 'button',
                'dependency_sub_folder_name' => 'js',
                'dependency_file_name' => 'ripple-effect.js',
            )
        );
	$dependency_folder['sidebar'] = array(
            '0' => array(
                'dependency_folder_name' => 'typography',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'typography.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'button',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'button.css',
            ),
            '2' => array(
                'dependency_folder_name' => 'icons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'google-icons.css',
            ),
            '3' => array(
                'dependency_folder_name' => 'dropdown',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'dropdown.css',
            ),
            '4' => array(
                'dependency_folder_name' => 'navbar',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'navbar.css',
            ),
            '5' => array(
                'dependency_folder_name' => 'list',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'list.css',
            ),
            '6' => array(
                'dependency_folder_name' => 'dropdown',
                'dependency_sub_folder_name' => 'js',
                'dependency_file_name' => 'dropdown.js',
            ),
            '7' => array(
                'dependency_folder_name' => 'button',
                'dependency_sub_folder_name' => 'js',
                'dependency_file_name' => 'ripple-effect.js',
            )
        );
	$dependency_folder['tab'] = array(
            '0' => array(
                'dependency_folder_name' => 'typography',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'typography.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'dropdown',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'dropdown.css',
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
            ),
            '3' => array(
                'dependency_folder_name' => 'dropdown',
                'dependency_sub_folder_name' => 'js',
                'dependency_file_name' => 'dropdown.js',
            )
        );		
	$dependency_folder['table'] = array(
            '0' => array(
                'dependency_folder_name' => 'card',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'card.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'typography',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'typography.css',
            ),			
            '2' => array(
                'dependency_folder_name' => 'icons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'google-icons.css',
            )
        );		
		$dependency_folder['tooltip'] = array(
            '0' => array(
                'dependency_folder_name' => 'button',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'button.css',
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
                'dependency_folder_name' => 'button',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'button.css',
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
                'dependency_folder_name' => 'button',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'button.css',
            )
        );	
		$dependency_folder['datetimepicker'] = array(
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
                'dependency_folder_name' => 'textfield',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'textfield.css',
            ),
            '3' => array(
                'dependency_folder_name' => 'textfield',
                'dependency_sub_folder_name' => 'js',
                'dependency_file_name' => 'textfield.js',
            )
        );	
		$dependency_folder['range-slider'] = array(
            '0' => array(
                'dependency_folder_name' => 'icons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'google-icons.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'textfield',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'textfield.css',
            ),
            '2' => array(
                'dependency_folder_name' => 'checkbox',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'checkbox.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'textfield',
                'dependency_sub_folder_name' => 'js',
                'dependency_file_name' => 'textfield.js',
            ),
            '2' => array(
                'dependency_folder_name' => 'checkbox',
                'dependency_sub_folder_name' => 'js',
                'dependency_file_name' => 'checkbox.js',
            ),
        );	
		$dependency_folder['select2'] = array(
            '0' => array(
                'dependency_folder_name' => 'typography',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'typography.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'textfield',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'textfield.css',
            ),
            '2' => array(
                'dependency_folder_name' => 'textfield',
                'dependency_sub_folder_name' => 'js',
                'dependency_file_name' => 'textfield.js',
            )
        );	
		$dependency_folder['data-table'] = array(
            '0' => array(
                'dependency_folder_name' => 'button',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'button.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'textfield',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'textfield.css',
            ),
            '2' => array(
                'dependency_folder_name' => 'card',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'card.css',
            ),
            '3' => array(
                'dependency_folder_name' => 'table',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'table.css',
            ),
            '4' => array(
                'dependency_folder_name' => 'icons',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'google-icons.css',
            ),
            '5' => array(
                'dependency_folder_name' => 'typography',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'typography.css',
            )
        );
		$dependency_folder['custom-scrollbar'] = array(
            '0' => array(
                'dependency_folder_name' => 'typography',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'typography.css',
            ),
            '1' => array(
                'dependency_folder_name' => 'card',
                'dependency_sub_folder_name' => 'css',
                'dependency_file_name' => 'card.css',
            ),
        );	
	    // </editor-fold>

	$page_info = array();
	
	$page_info['default'] = array('title' => 'Get Started - Propeller',
			'description' => 'Get familiar with the basic setup and structure of Propeller. Propeller comes in three different forms; Material Themed, Propeller Kit and Stand Alone. You can choose either of them depending on your preference and requirements.',
			'keywords' => '',
			'menu' => '',
			);
	$page_info['typography'] = array('title' => 'Typography - Style - Propeller',
			'description' => 'Propeller uses Roboto font, the standard font used by Google Material Design. You will find the fonts in the font folder of the Propeller kit you download. See how to implement various Propeller typography fonts.',
			'keywords' => '',
			'menu' => STYLE_MENU,
			);
	$page_info['icons'] = array('title' => 'Icons - Style - Propeller',
			'description' => 'For providing a huge collection of unique icons Propeller have incorporated the Google Material icon library. These icons are present in the form of icon fonts which are extremely lightweight and easy to use. Simply download the font kit include the web font files in your template and use them as and when required.',
			'keywords' => '',
			'menu' => STYLE_MENU,
			);
	$page_info['shadow'] = array('title' => 'Shadow - Style - Propeller',
			'description' => 'In material design, everything should have a certain pmd-z-depth that determines how far raised or close to the page the element is. You can easily apply this shadow effect by adding a .pmd-z-depth to an HTML tag.',
			'keywords' => '',
			'menu' => STYLE_MENU,
			);
	$page_info['accordion'] = array('title' => 'Accordion - Propeller Components',
			'description' => 'Accordion is an element used to expand and collapse content that is broken into logical sections, much like tabs. It allows users to toggle the display of sections of content.',
			'keywords' => '',
			'menu' => PROPELLER_COMPONENTS_MENU,
			);
	$page_info['alert'] = array('title' => 'Alert - Propeller Components',
			'description' => 'Alert provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.',
			'keywords' => '',
			'menu' => PROPELLER_COMPONENTS_MENU,
			);
	$page_info['badge'] = array('title' => 'Badge - Propeller Components',
			'description' => 'Badge is a new feature in user interfaces, and provides users with a visual clue to help them discover additional relevant content. A badge can be both a notifier that there are additional items associated with an object and an indicator of how many items there are.',
			'keywords' => '',
			'menu' => PROPELLER_COMPONENTS_MENU,
			);
	$page_info['button'] = array('title' => 'Button - Propeller Components',
			'description' => 'Button component is an enhanced version of the standard HTML <button> element. Propeller button component provides various types of button, and allows user to add both display and click effects.',
			'keywords' => '',
			'menu' => PROPELLER_COMPONENTS_MENU,
			);
	$page_info['modal'] = array('title' => 'Modal - Propeller Components',
			'description' => 'Modal (known as Dialog in Material Design) is a small window that communicates information to the user and prompts them for a response. It inform users about critical information, required to make decisions, or encapsulate multiple tasks within a discrete process.',
			'keywords' => '',
			'menu' => PROPELLER_COMPONENTS_MENU,
			);
	$page_info['dropdown'] = array('title' => 'Dropdown - Propeller Components',
			'description' => 'A dropdown is an HTML component that allows the user to choose one value from a list. It is similar to the select box.',
			'keywords' => '',
			'menu' => PROPELLER_COMPONENTS_MENU,
			);
	$page_info['form'] = array('title' => 'Form - Propeller Components',
			'description' => 'An HTML form is a section of a document containing normal content, markup, special elements called controls (checkboxes, radio buttons, menus, etc.), and labels on those controls. Users generally "complete" a form by modifying its controls (entering text, selecting menu items, etc.), before submitting the form to an agent for processing (e.g., to a Web server, to a mail server, etc.)',
			'keywords' => '',
			'menu' => PROPELLER_COMPONENTS_MENU,
			);
	$page_info['list'] = array('title' => 'List - Propeller Components',
			'description' => 'List is a flexible and powerful component for displaying not only simple lists of elements, but complex ones with custom content.',
			'keywords' => '',
			'menu' => PROPELLER_COMPONENTS_MENU,
			);
	$page_info['navbar'] = array('title' => 'Navbar - Propeller Components',
			'description' => 'Navbar is a simple wrapper for positioning branding, navigation, and other elements into a concise navigation header. It’s easily extensible and, with the help of our collapse plugin, it can easily integrate offscreen content.',
			'keywords' => '',
			'menu' => PROPELLER_COMPONENTS_MENU,
			);
	$page_info['popover'] = array('title' => 'Popover - Propeller Components',
			'description' => 'Popover is similar to tooltips; it is a pop-up box that appears when the user clicks or hover on an element.',
			'keywords' => '',
			'menu' => PROPELLER_COMPONENTS_MENU,
			);
	$page_info['progressbar'] = array('title' => 'Progressbar - Propeller Components',
			'description' => 'Progressbar provide up-to-date feedback on the progress of a workflow or action with simple yet flexible bars.',
			'keywords' => '',
			'menu' => PROPELLER_COMPONENTS_MENU,
			);
	$page_info['sidebar'] = array('title' => 'Sidebar - Propeller Components',
			'description' => 'Sidebar is a narrow vertical area that is located alongside the main display area, typically containing related information or navigation options. This structure shows a responsive menu toggling system. When toggled using the button, the menu will appear/disappear.',
			'keywords' => '',
			'menu' => PROPELLER_COMPONENTS_MENU,
			);
	$page_info['tab'] = array('title' => 'Tab - Propeller Components',
			'description' => 'Tab is an HTML component that makes exploring and switching between different views easier.',
			'keywords' => '',
			'menu' => PROPELLER_COMPONENTS_MENU,
			);
	$page_info['table'] = array('title' => 'Table - Propeller Components',
			'description' => 'The HTML table model allows authors to arrange data - text, preformatted text, images, links, forms, form fields, other tables, etc. into rows and columns of cells.',
			'keywords' => '',
			'menu' => PROPELLER_COMPONENTS_MENU,
			);
	$page_info['tooltip'] = array('title' => 'Tooltip - Propeller Components',
			'description' => 'Tooltip is a small "hover box" containing information about the item being hovered over. Tooltip appears on hover over an element with the cursor, or focus on an element using a keyboard (usually through the tab key), or upon touch (without releasing) in a touch UI.',
			'keywords' => '',
			'menu' => PROPELLER_COMPONENTS_MENU,
			);
	$page_info['card'] = array('title' => 'Card - Materialized Components - Propeller',
			'description' => 'A card is a flexible and extensible content container. It includes options for header and footer, a wide variety of content, contextual background colors, and powerful display options.',
			'keywords' => '',
			'menu' => MATERIALIZED_COMPONENTS_MENU,
			);
	$page_info['floating-action-button'] = array('title' => 'Floating Action Button - Materialized Components - Propeller',
			'description' => 'Floating Action Button is the circular button that floats above the UI and is “used for a promoted action”. It acts as call to action button, meant to represent the single action users perform the most on that particular screen.',
			'keywords' => '',
			'menu' => MATERIALIZED_COMPONENTS_MENU,
			);
	$page_info['custom-scrollbar'] = array('title' => 'Custom Scrollbar - Third Party Components - Propeller',
			'description' => 'Custom Scrollbar is used to get rid of browser default scrollbar by utilizing jQuery UI, the feature-rich jQuery Custom Scrollbar plugin. It features vertical/horizontal scrolling, mouse-wheel support, scroll easing, adjustable scrollbar height/width and more.',
			'keywords' => '',
			'menu' => THIRD_PARTY_COMPONENTS_MENU,
			);
	$page_info['data-table'] = array('title' => 'Data Table - Third Party Components - Propeller',
			'description' => 'Data table refers to a matrix of information, like an excel spreadsheet with columns, rows, and data. Propeller uses Bootstrap Data table as a reference which have been customized based on Propeller theme.',
			'keywords' => '',
			'menu' => THIRD_PARTY_COMPONENTS_MENU,
			);
	$page_info['datetimepicker'] = array('title' => 'DateTimePicker - Third Party Components - Propeller',
			'description' => 'The Datetimepicker widget allows the user to select a value from a calendar or a time drop-down list as well as direct input. Propeller uses Bootstrap Datetimepicker as a reference which have been customized based on Propeller theme.',
			'keywords' => '',
			'menu' => THIRD_PARTY_COMPONENTS_MENU,
			);
	$page_info['range-slider'] = array('title' => 'Range Slider - Third Party Components - Propeller',
			'description' => 'Range Slider let the user select a range of values by moving the slider thumb. The smallest value is to the left, the largest to the right. Propeller uses noUISlider plugin as a reference which have been customized based on Propeller theme.',
			'keywords' => '',
			'menu' => THIRD_PARTY_COMPONENTS_MENU,
			);
	$page_info['select2'] = array('title' => 'Select2 - Third Party Components - Propeller',
			'description' => 'The Select2 widget provides a styleable select element replacement. It acts as a proxy back to the original select element, controlling its state for form submission or serialization. It duplicates and extends the functionality of a native HTML select element to overcome the limitations of the native control.',
			'keywords' => '',
			'menu' => THIRD_PARTY_COMPONENTS_MENU,
			);
			