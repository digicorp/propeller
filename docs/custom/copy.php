<?php
require_once('constants.php');
require_once('dependency_array.php');
if (!empty($_POST)) {
    $GLOBALS['excluded_folder_name'] = array('snippets');
	//move all folder to a temporary place
	$destination_name = FILENAME_PREFIX.$_POST['btn_submit'];
	if($_POST['btn_submit'] == 'sa'){
		$destination_name = FILENAME_PREFIX.$_POST['btn_submit'].'-'.time();
		
	}
	unset($_POST['btn_submit']);
    
    $parent_dst = TEMP_UPLOADS.$destination_name.DS;
	//print_r($parent_dst);exit;
    @mkdir($parent_dst);
    chmod($parent_dst, 0777); 

    $file_array = $_POST;
    foreach($file_array as $key => $value){
        $src = COMPONENTS.$value;
        $dst = $parent_dst.$value;
        @mkdir($dst); 
        chmod($dst, 0777);
        recurse_copy($src, $dst);
        
        if(!empty($dependency_folder[$value])){
			
            foreach ($dependency_folder[$value] as $key => $val){
                //cretae folder if dependency sub folder does not exsit
                if(!is_dir($parent_dst.$value.DS.$val['dependency_sub_folder_name'])){
                    @mkdir($parent_dst.$value.DS.$val['dependency_sub_folder_name']);
                    chmod($parent_dst.$value.DS.$val['dependency_sub_folder_name'], 0777);
                }
                $dependecy_folder = $val['dependency_folder_name'];
                $src_file = COMPONENTS.$dependecy_folder.DS.$val['dependency_sub_folder_name'].DS.$val['dependency_file_name']; 
                $dst_file = $parent_dst.$value.DS.$val['dependency_sub_folder_name'].DS.$val['dependency_file_name'];
//                @mkdir($parent_dst.$value.DS.$val['dependency_sub_folder_name'].DS.$dependecy_folder);
//                chmod($parent_dst.$value.DS.$val['dependency_sub_folder_name'].DS.$dependecy_folder, 0777);
                copy_file($src_file, $dst_file);
            }
        }
    }
	
    $source = $parent_dst;
	
	
    $destination = $destination_name.'.zip';
	
	
    download_zip($source, $destination);
    exit;
    
}else{
    return false;
}
// <editor-fold defaultstate="collapsed" desc="Copy folder into another">
    function recurse_copy($src, $dst) {
        $dir = opendir($src);
        while (false !== ( $file = readdir($dir))) {
            if(in_array($file, $GLOBALS['excluded_folder_name'])){
                continue;
            }
            if (( $file != '.' ) && ( $file != '..' )) {
                if (is_dir($src . DS . $file)) {
					@mkdir($dst . DS . $file);
					chmod($dst . DS . $file, 0777);
                    recurse_copy($src . DS . $file, $dst . DS . $file);
                } else {
					copy($src . DS . $file, $dst . DS . $file);
                }
            }
        }
        closedir($dir);
    }
    // </editor-fold>
    
// <editor-fold defaultstate="collapsed" desc="Copy file into folder">
    function copy_file($src, $dst){
       copy($src, $dst);
       //return true;
    }
// </editor-fold>

// <editor-fold defaultstate="collapsed" desc="Download zip">
    function download_zip($source, $destination){
        if (!extension_loaded('zip') || !file_exists($source)) {
            return false;
        }

        $zip = new ZipArchive();
        if (!$zip->open($destination, ZIPARCHIVE::CREATE)) {
            return false;
        }
        chmod(CUSTOM_FOLDER.$destination, 0777);
		
        $source = str_replace('\\', DS, realpath($source));
        if (is_dir($source) === true) {
            $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);

            foreach ($files as $file) {
                $file = str_replace('\\', DS, $file);

                // Ignore "." and ".." folders
                if (in_array(substr($file, strrpos($file, DS) + 1), array('.', '..')))
                    continue;

                $file = realpath($file);

                if (is_dir($file) === true) {
                    $zip->addEmptyDir(str_replace($source . DS, '', $file . DS));
                } else if (is_file($file) === true) {
                    $zip->addFromString(str_replace($source . DS, '', $file), file_get_contents($file));
                }
            }
        } else if (is_file($source) === true) {
            $zip->addFromString(basename($source), file_get_contents($source));
        }
        $zip->close();
        header('Content-Type: application/zip');
        header("Content-Disposition: attachment;filename=$destination");
        header('Content-Length: ' . (string) filesize($destination));
        readfile($destination);

		unlink(CUSTOM_FOLDER.$destination);
		unlink($source);
        return true;
    }
    // </editor-fold>