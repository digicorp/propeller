<?php
	define("DS", "/");
    define("SITE_FOLDER", "CreativeZone".DS."Websites".DS."Propeller".DS."HTML".DS);
    define('DOCUMENT_ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . DS .SITE_FOLDER);
    define('TEMP_UPLOADS', DOCUMENT_ROOT_PATH . 'tmp_uploads'.DS);
    define('COMPONENTS', DOCUMENT_ROOT_PATH . 'components'.DS);
    define('CUSTOM_FOLDER', DOCUMENT_ROOT_PATH . 'docs'.DS.'custom'.DS);
	define('STYLE_MENU', 'style_menu');
	define('PROPELLER_COMPONENTS_MENU', 'propeller_components_menu');
	define('MATERIALIZED_COMPONENTS_MENU', 'materialized_components_menu');
	define('THIRD_PARTY_COMPONENTS_MENU', 'third_party_components_menu');
	define('FILENAME', 'pmd-sa');
	define('FILENAME_PREFIX', 'pmd-');