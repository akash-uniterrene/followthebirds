<?php
/**
 * ajax -> users -> settings
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// user access
user_access(true);

// settings
try {
	$return = array();
	$return['callback'] = 'window.location.replace(response.path);';
	switch ($_GET['do']) {
		case 'create' :		
			$uploadedDir = $_SERVER["DOCUMENT_ROOT"].'/dev/followthebirds/'.$system['uploads_directory'].'/vault/'.$user->_data['user_name'].'/'.$_POST['vaultname'];
			if(!is_dir($uploadedDir)){
				//Directory does not exist, so lets create it.
				if(mkdir($uploadedDir, 0755, true)){
					$db->query(sprintf("INSERT INTO vault (title, folder_name, type, username) VALUES (%s, %s, %s, %s)", secure($_POST['title'], 'varchar'), secure($_POST['vaultname'], 'varchar'), secure($_POST['file-type'], 'varchar'), secure($user->_data['user_name']) )) or _error(SQL_ERROR_THROWEN);	
					$return['path'] = $system['system_url'].'/settings/vault';
				}
			}
			
		break;
	}
	return_json($return);
} catch (Exception $e) {
	return_json( array('error' => true, 'message' => $e->getMessage()) );
}

?>