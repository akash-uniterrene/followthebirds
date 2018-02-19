<?php
/**
 * ajax -> pages_groups_events -> create|edit
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

// valid inputs
if(!in_array($_GET['do'], array('create', 'edit'))) {
	_error(400);
}

// (create|edit) => (page|group|event)
try {

	// initialize the return array
	$return = array();
	$return['callback'] = 'window.location.replace(response.path);';

	switch ($_GET['type']) {
		case 'page':
			// page create
			if($_GET['do'] == "create") {
				$page_id = $user->create_page($_POST['title'], $_POST['username'], $_POST['category'], $_POST['description']);
				if($page_id){
					$params = array();
					$params['page_id'] = $page_id;
					$params['template_content'] = '{"data":[{"type":"columns","data":{"columns":[{"width":12,"blocks":[{"type":"cover","data":{"text":"Cover Photo","cover":"Cover Photo"}}]}],"preset":"columns-12"}},{"type":"columns","data":{"columns":[{"width":4,"blocks":[{"type":"profile","data":{"text":"Profile Photo","profile":"Profile Photo"}},{"type":"about","data":{"text":"About Me","about":"About Photo"}},{"type":"photo","data":{"text":"Photos","photo":"Photo"}}]},{"width":8,"blocks":[{"type":"post","data":{"text":"Posts","post":"Post"}}]}],"preset":"columns-4-8"}}]}';
					$params['pageTitle'] = "Default Template";
					$params['active'] = '1';
					$user->save_template($params);
				}
				$return['path'] = $system['system_url'].'/pages/'.$_POST['username'];

			// page edit
			} elseif($_GET['do'] == "edit") {
				/* check id */
				if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
					_error(400);
				}
				/* edit page */
				$user->edit_page($_GET['id'], $_POST['title'], $_POST['username'], $_POST['category'], $_POST['description']);
				$return['path'] = $system['system_url'].'/pages/'.$_POST['username'];
			}
			break;
		case 'page-template':
			if($_GET['do'] == "create") {
				$params = array();
				$params['page_id'] = $_POST['page_id'];
				$params['template_content'] = $_POST['content'];
				$params['pageTitle'] = $_POST['pageTitle'];
				
				$sirTrevorInput = $params['template_content'];
		       // $converter = new Converter();
				if ($params['template_content'] != ""){
		       	 	$HTMLContent = $converter->toHtml($sirTrevorInput);
		    	} else {
					$HTMLContent = "";	
				}
				$params['template_content_html'] = $HTMLContent;
				$params['active'] = $_POST['active'];
				$user->save_template($params);
				$return['path'] = $system['system_url'].'/pages/'.$_POST['username'];
			} elseif($_GET['do'] == "edit") {
				$params = array();
				$params['page_id'] = $_POST['page_id'];
				$params['template_content'] = $_POST['content'];
				$params['pageTitle'] = $_POST['pageTitle'];
				$sirTrevorInput = $params['template_content'];
				if ($params['template_content'] != ""){
		       	 	$HTMLContent = $converter->toHtml($sirTrevorInput);
		    	} else {
					$HTMLContent = "";	
				}
				$params['template_content_html'] = $HTMLContent;
				$params['active'] = $_POST['active'];
				$user->update_template($params,array('template_id'=>$_POST['template_id']));
				$return['path'] = $system['system_url'].'/pages/'.$_POST['username'];
			}	
			break;
		case 'profile-template':
			if($_GET['do'] == "create") {
				$params = array();
				$params['user_id'] = $_POST['user_id'];
				$params['template_content'] = $_POST['content'];
				$params['pageTitle'] = $_POST['pageTitle'];
				
				$sirTrevorInput = $params['template_content'];
		       // $converter = new Converter();
				if ($params['template_content'] != ""){
		       	 	$HTMLContent = $converter->toHtml($sirTrevorInput);
		    	} else {
					$HTMLContent = "";	
				}
				$params['template_content_html'] = $HTMLContent;
				$params['active'] = $_POST['active'];
				$user->create_template($params);
				$return['path'] = $system['system_url'];
			} elseif($_GET['do'] == "edit") {
				$params = array();
				$params['user_id'] = $_POST['user_id'];
				$params['template_content'] = $_POST['content'];
				$params['pageTitle'] = $_POST['pageTitle'];
				
				$sirTrevorInput = $params['template_content'];
		       // $converter = new Converter();
				if ($params['template_content'] != ""){
		       	 	$HTMLContent = $converter->toHtml($sirTrevorInput);
		    	} else {
					$HTMLContent = "";	
				}
				$params['template_content_html'] = $HTMLContent;
				$params['active'] = $_POST['active'];
				$user->update_profile_template($params,array('template_id'=>$_POST['template_id']));
				$return['path'] = $system['system_url'];
			}	
			break;	
		case 'group':
			// group create
			if($_GET['do'] == "create") {
				$user->create_group($_POST['title'], $_POST['username'], $_POST['privacy'], $_POST['description']);
				$return['path'] = $system['system_url'].'/groups/'.$_POST['username'];

			// group edit
			} elseif($_GET['do'] == "edit") {
				/* check id */
				if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
					_error(400);
				}
				/* edit group */
				$user->edit_group($_GET['id'], $_POST['title'], $_POST['username'], $_POST['privacy'], $_POST['description']);
				$return['path'] = $system['system_url'].'/groups/'.$_POST['username'];
			}
			break;

		case 'event':
			
			// event create
			if($_GET['do'] == "create") {
				$event_id = $user->create_event($_POST['title'], $_POST['location'], $_POST['start_date'], $_POST['end_date'], $_POST['privacy'], $_POST['category'], $_POST['description']);
				$return['path'] = $system['system_url'].'/events/'.$event_id;

			// event edit
			} elseif($_GET['do'] == "edit") {
				/* check id */
				if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
					_error(400);
				}
				/* edit event */
				$user->edit_event($_GET['id'], $_POST['title'], $_POST['location'], $_POST['start_date'], $_POST['end_date'], $_POST['privacy'], $_POST['category'], $_POST['description']);
				$return['path'] = $system['system_url'].'/events/'.$_GET['id'];
			}
			break;
		
		default:
			_error(400);
			break;
	}	

	// return & exit
	return_json($return);
	
} catch (Exception $e) {
	return_json( array('error' => true, 'message' => $e->getMessage()) );
}

?>
