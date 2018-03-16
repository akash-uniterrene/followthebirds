<?php
/**
 * ajax -> data -> upload
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// fetch image class
require('../../class-image.php');

// check AJAX Request
is_ajax();

// check secret
if($_SESSION['secret'] != $_POST['secret']) {
    _error(403);
}

// user access
user_access(true);

// check type
if(!isset($_POST["type"])) {
    _error(403);
}

// check handle
if(!isset($_POST["handle"])) {
    _error(403);
}

// check multiple
if(!isset($_POST["multiple"])) {
    _error(403);
}

// upload
try {

    switch ($_POST["type"]) {
        case 'photos':
            // check photo upload enabled
            if($_POST['handle'] == 'publisher' && !$system['photos_enabled']) {
                modal(MESSAGE, __("Not Allowed"), __("This feature has been disabled"));
            }

            // get allowed file size
            if($_POST['handle'] == 'picture-user' || $_POST['handle'] == 'picture-page' || $_POST['handle'] == 'picture-group') {
                $max_allowed_size = $system['max_avatar_size'] * 1024;
            } elseif ($_POST['handle'] == 'cover-user' || $_POST['handle'] == 'cover-page' || $_POST['handle'] == 'cover-group') {
                $max_allowed_size = $system['max_cover_size'] * 1024;
            } else {
                $max_allowed_size = $system['max_photo_size'] * 1024;
            }

            /* check & create uploads dir */
            $folder = 'photos';
            $depth = '../../../';
            if(!file_exists($depth.$system['uploads_directory'].'/'.$folder)) {
                @mkdir($depth.$system['uploads_directory'].'/'.$folder, 0777, true);
            }
            if(!file_exists($depth.$system['uploads_directory'].'/'.$folder.'/' . date('Y'))) {
                @mkdir($depth.$system['uploads_directory'].'/'.$folder.'/' . date('Y'), 0777, true);
            }
            if(!file_exists($system['uploads_directory'].'/'.$folder.'/' . date('Y') . '/' . date('m'))) {
                @mkdir($depth.$system['uploads_directory'].'/'.$folder.'/' . date('Y') . '/' . date('m'), 0777, true);
            }

            if($_POST["multiple"] == "true") {

                $files = array();
                foreach($_FILES['file'] as $key => $val) {
                    for($i=0; $i < count($val); $i++) {
                        $files[$i][$key] = $val[$i];
                    }
                }

                $return_files = array();
                $files_num = count($files);
                foreach ($files as $file) {
                    
                    // valid inputs
                    if(!isset($file) || $file["error"] != UPLOAD_ERR_OK) {
                        if($files_num > 1) {
                            continue;
                        } else {
                            modal(MESSAGE, __("Upload Error"), __("Something wrong with upload! Is 'upload_max_filesize' set correctly?"));
                        }
                    }
                    
                    // check file size
                    if($file["size"] > $max_allowed_size) {
                        if($files_num > 1) {
                            continue;
                        } else {
                            modal(MESSAGE, __("Upload Error"), __("The file size is so big"));
                        }
                    }

                    /* prepare new file name */
                    $directory = $folder.'/'. date('Y') . '/' . date('m') . '/';
                    $prefix = $system['uploads_prefix'].'_'.get_hash_token();
                    $image = new Image($file["tmp_name"]);
                    $image_tmp_name = $directory.$prefix.'_tmp'.$image->_img_ext;
                    $image_new_name = $directory.$prefix.$image->_img_ext;
                    $path_tmp = $depth.$system['uploads_directory'].'/'.$image_tmp_name;
                    $path_new = $depth.$system['uploads_directory'].'/'.$image_new_name;
                    /* check if the file uploaded successfully */
                    if(!@move_uploaded_file($file['tmp_name'], $path_tmp)) {
                        if($files_num > 1) {
                            continue;
                        } else {
                            modal(MESSAGE, __("Upload Error"), __("Sorry, can not upload the file"));
                        }
                    }

                    /* save the new image */
                    $image->save($path_new, $path_tmp);

                    /* delete the tmp image */
                    unlink($path_tmp);

                    /* upload to amazon s3 */
                    if($system['s3_enabled']) {
                        aws_s3_upload($path_new, $image_new_name);
                    }

                    /* return */
                    $return_files[] = $image_new_name;
                }
                //echo $return_files;
                // return the return_files & exit
                return_json(array("files" => $return_files));

            } else {

                // valid inputs
                if(!isset($_FILES["file"]) || $_FILES["file"]["error"] != UPLOAD_ERR_OK) {
                    modal(MESSAGE, __("Upload Error"), __("Something wrong with upload! Is 'upload_max_filesize' set correctly?"));
                }

                // check file size
                if($_FILES["file"]["size"] > $max_allowed_size) {
                    modal(MESSAGE, __("Upload Error"), __("The file size is so big"));
                }
                
                /* prepare new file name */
                $directory = $folder.'/'. date('Y') . '/' . date('m') . '/';
                $prefix = $system['uploads_prefix'].'_'.get_hash_token();
                $image = new Image($_FILES["file"]["tmp_name"]);
                $image_tmp_name = $directory.$prefix.'_tmp'.$image->_img_ext;
                $image_new_name = $directory.$prefix.$image->_img_ext;
                $path_tmp = $depth.$system['uploads_directory'].'/'.$image_tmp_name;
                $path_new = $depth.$system['uploads_directory'].'/'.$image_new_name;

                /* check if the file uploaded successfully */
                if(!@move_uploaded_file($_FILES['file']['tmp_name'], $path_tmp)) {
                    modal(MESSAGE, __("Upload Error"), __("Sorry, can not upload the file"));
                }

                /* save the new image */
                $resize = ($_POST['handle'] == 'x-image')? false: true;
                $image->save($path_new, $path_tmp, $resize);

                /* delete the tmp image */
                unlink($path_tmp);

                /* upload to amazon s3 */
                if($system['s3_enabled']) {
                    aws_s3_upload($path_new, $image_new_name);
                }

                // check the handle
                switch ($_POST['handle']) {
                    
                    case 'cover-user':
                        /* check for cover album */
                        if(!$user->_data['user_album_covers']) {
                            /* create new cover album */
                            $db->query(sprintf("INSERT INTO posts_photos_albums (user_id, user_type, title, privacy) VALUES (%s, 'user', 'Cover Photos', 'public')", secure($user->_data['user_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                            $user->_data['user_album_covers'] = $db->insert_id;
                            /* update user cover album id */
                            $db->query(sprintf("UPDATE users SET user_album_covers = %s WHERE user_id = %s", secure($user->_data['user_album_covers'], 'int'), secure($user->_data['user_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                        }
                        
                        /* insert updated cover photo post */
                        $db->query(sprintf("INSERT INTO posts (user_id, user_type, post_type, time, privacy) VALUES (%s, 'user', 'profile_cover', %s, 'public')", secure($user->_data['user_id'], 'int'), secure($date) )) or _error(SQL_ERROR_THROWEN);
                        $post_id = $db->insert_id;
                        /* insert new cover photo to album */
                        $db->query(sprintf("INSERT INTO posts_photos (post_id, album_id, source) VALUES (%s, %s, %s)", secure($post_id, 'int'), secure($user->_data['user_album_covers'], 'int'), secure($image_new_name) )) or _error(SQL_ERROR_THROWEN);
                        $photo_id = $db->insert_id;
                        /* update user cover */
                        $db->query(sprintf("UPDATE users SET user_cover = %s, user_cover_id = %s WHERE user_id = %s", secure($image_new_name), secure($photo_id, 'int'), secure($user->_data['user_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                        break;

                    case 'picture-user':
                        /* check for profile pictures album */
                        if(!$user->_data['user_album_pictures']) {
                            /* create new profile pictures album */
                            $db->query(sprintf("INSERT INTO posts_photos_albums (user_id, user_type, title, privacy) VALUES (%s, 'user', 'Profile Pictures', 'public')", secure($user->_data['user_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                            $user->_data['user_album_pictures'] = $db->insert_id;
                            /* update user profile picture album id */
                            $db->query(sprintf("UPDATE users SET user_album_pictures = %s WHERE user_id = %s", secure($user->_data['user_album_pictures'], 'int'), secure($user->_data['user_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                        }
                        /* insert updated profile picture post */
                        $db->query(sprintf("INSERT INTO posts (user_id, user_type, post_type, time, privacy) VALUES (%s, 'user', 'profile_picture', %s, 'public')", secure($user->_data['user_id'], 'int'), secure($date) )) or _error(SQL_ERROR_THROWEN);
                        $post_id = $db->insert_id;
                        /* insert new profile picture to album */
                        $db->query(sprintf("INSERT INTO posts_photos (post_id, album_id, source) VALUES (%s, %s, %s)", secure($post_id, 'int'), secure($user->_data['user_album_pictures'], 'int'), secure($image_new_name) )) or _error(SQL_ERROR_THROWEN);
                        $photo_id = $db->insert_id;
                        /* update user profile picture */
                        $db->query(sprintf("UPDATE users SET user_picture = %s, user_picture_id = %s WHERE user_id = %s", secure($image_new_name), secure($photo_id, 'int'), secure($user->_data['user_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                        break;

                    case 'cover-page':
                        /* check if page id is set */
                        if(!isset($_POST['id']) || !is_numeric($_POST['id'])) {
                            /* delete the uploaded image & return error 403 */
                            unlink($path);
                            _error(403);
                        }
                        /* check if the user is the page admin */
                        $get_page = $db->query(sprintf("SELECT * FROM pages WHERE page_id = %s AND page_admin = %s", secure($_POST['id'], 'int'), secure($user->_data['user_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                        if($get_page->num_rows == 0) {
                            /* delete the uploaded image & return error 403 */
                            unlink($path);
                            _error(403);
                        }
                        $page = $get_page->fetch_assoc();
                        /* check for cover album */
                        if(!$page['page_album_covers']) {
                            /* create new cover album */
                            $db->query(sprintf("INSERT INTO posts_photos_albums (user_id, user_type, title, privacy) VALUES (%s, 'page', 'Cover Photos', 'public')", secure($page['page_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                            $page['page_album_covers'] = $db->insert_id;
                            /* update page cover album id */
                            $db->query(sprintf("UPDATE pages SET page_album_covers = %s WHERE page_id = %s", secure($page['page_album_covers'], 'int'), secure($page['page_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                        }
                        /* insert updated cover photo post */
                        $db->query(sprintf("INSERT INTO posts (user_id, user_type, post_type, time, privacy) VALUES (%s, 'page', 'page_cover', %s, 'public')", secure($page['page_id'], 'int'), secure($date) )) or _error(SQL_ERROR_THROWEN);
                        $post_id = $db->insert_id;
                        /* insert new cover photo to album */
                        $db->query(sprintf("INSERT INTO posts_photos (post_id, album_id, source) VALUES (%s, %s, %s)", secure($post_id, 'int'), secure($page['page_album_covers'], 'int'), secure($image_new_name) )) or _error(SQL_ERROR_THROWEN);
                        $photo_id = $db->insert_id;
                        /* update page cover */
                        $db->query(sprintf("UPDATE pages SET page_cover = %s, page_cover_id = %s WHERE page_id = %s", secure($image_new_name), secure($photo_id, 'int'), secure($page['page_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                        break;

                    case 'picture-page':
                        /* check if page id is set */
                        if(!isset($_POST['id']) || !is_numeric($_POST['id'])) {
                            /* delete the uploaded image & return error 403 */
                            unlink($path);
                            _error(403);
                        }
                        /* check if the user is the page admin */
                        $get_page = $db->query(sprintf("SELECT * FROM pages WHERE page_id = %s AND page_admin = %s", secure($_POST['id'], 'int'), secure($user->_data['user_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                        if($get_page->num_rows == 0) {
                            /* delete the uploaded image & return error 403 */
                            unlink($path);
                            _error(403);
                        }
                        $page = $get_page->fetch_assoc();
                        /* check for page pictures album */
                        if(!$page['page_album_pictures']) {
                            /* create new page pictures album */
                            $db->query(sprintf("INSERT INTO posts_photos_albums (user_id, user_type, title, privacy) VALUES (%s, 'page', 'Profile Pictures', 'public')", secure($page['page_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                            $page['page_album_pictures'] = $db->insert_id;
                            /* update page profile picture album id */
                            $db->query(sprintf("UPDATE pages SET page_album_pictures = %s WHERE page_id = %s", secure($page['page_album_pictures'], 'int'), secure($page['page_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                        }
                        /* insert updated page picture post */
                        $db->query(sprintf("INSERT INTO posts (user_id, user_type, post_type, time, privacy) VALUES (%s, 'page', 'page_picture', %s, 'public')", secure($page['page_id'], 'int'), secure($date) )) or _error(SQL_ERROR_THROWEN);
                        $post_id = $db->insert_id;
                        /* insert new page picture to album */
                        $db->query(sprintf("INSERT INTO posts_photos (post_id, album_id, source) VALUES (%s, %s, %s)", secure($post_id, 'int'), secure($page['page_album_pictures'], 'int'), secure($image_new_name) )) or _error(SQL_ERROR_THROWEN);
                        $photo_id = $db->insert_id;
                        /* update page picture */
                        $db->query(sprintf("UPDATE pages SET page_picture = %s, page_picture_id = %s WHERE page_id = %s", secure($image_new_name), secure($photo_id, 'int'), secure($page['page_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                        break;

                    case 'cover-group':
                        /* check if group id is set */
                        if(!isset($_POST['id']) || !is_numeric($_POST['id'])) {
                            /* delete the uploaded image & return error 403 */
                            unlink($path);
                            _error(403);
                        }
                        /* check if the user is the group admin */
                        $get_group = $db->query(sprintf("SELECT * FROM groups WHERE group_id = %s AND group_admin = %s", secure($_POST['id'], 'int'), secure($user->_data['user_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                        if($get_group->num_rows == 0) {
                            /* delete the uploaded image & return error 403 */
                            unlink($path);
                            _error(403);
                        }
                        $group = $get_group->fetch_assoc();
                        /* check for group covers album */
                        if(!$group['group_album_covers']) {
                            /* create new group covers album */
                            $db->query(sprintf("INSERT INTO posts_photos_albums (user_id, user_type, in_group, group_id, title, privacy) VALUES (%s, 'user', '1', %s, 'Cover Photos', 'public')", secure($user->_data['user_id'], 'int'), secure($group['group_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                            $group['group_album_covers'] = $db->insert_id;
                            /* update group cover album id */
                            $db->query(sprintf("UPDATE groups SET group_album_covers = %s WHERE group_id = %s", secure($group['group_album_covers'], 'int'), secure($group['group_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                        }
                        /* insert updated group cover post */
                        $db->query(sprintf("INSERT INTO posts (user_id, user_type, post_type, in_group, group_id, time, privacy) VALUES (%s, 'user', 'group_cover', '1', %s, %s, 'custom')", secure($user->_data['user_id'], 'int'), secure($group['group_id'], 'int'), secure($date) )) or _error(SQL_ERROR_THROWEN);
                        $post_id = $db->insert_id;
                        /* insert new group cover to album */
                        $db->query(sprintf("INSERT INTO posts_photos (post_id, album_id, source) VALUES (%s, %s, %s)", secure($post_id, 'int'), secure($group['group_album_covers'], 'int'), secure($image_new_name) )) or _error(SQL_ERROR_THROWEN);
                        $photo_id = $db->insert_id;
                        /* update group cover */
                        $db->query(sprintf("UPDATE groups SET group_cover = %s, group_cover_id = %s WHERE group_id = %s", secure($image_new_name), secure($photo_id, 'int'), secure($group['group_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                        break;

                    case 'picture-group':
                        /* check if group id is set */
                        if(!isset($_POST['id']) || !is_numeric($_POST['id'])) {
                            /* delete the uploaded image & return error 403 */
                            unlink($path);
                            _error(403);
                        }
                        /* check if the user is the group admin */
                        $get_group = $db->query(sprintf("SELECT * FROM groups WHERE group_id = %s AND group_admin = %s", secure($_POST['id'], 'int'), secure($user->_data['user_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                        if($get_group->num_rows == 0) {
                            /* delete the uploaded image & return error 403 */
                            unlink($path);
                            _error(403);
                        }
                        $group = $get_group->fetch_assoc();
                        /* check for group pictures album */
                        if(!$group['group_album_pictures']) {
                            /* create new group pictures album */
                            $db->query(sprintf("INSERT INTO posts_photos_albums (user_id, user_type, in_group, group_id, title, privacy) VALUES (%s, 'user', '1', %s, 'Profile Pictures', 'public')", secure($user->_data['user_id'], 'int'), secure($group['group_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                            $group['group_album_pictures'] = $db->insert_id;
                            /* update group profile picture album id */
                            $db->query(sprintf("UPDATE groups SET group_album_pictures = %s WHERE group_id = %s", secure($group['group_album_pictures'], 'int'), secure($group['group_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                        }
                        /* insert updated group picture post */
                        $db->query(sprintf("INSERT INTO posts (user_id, user_type, post_type, in_group, group_id, time, privacy) VALUES (%s, 'user', 'group_picture', '1', %s, %s, 'custom')", secure($user->_data['user_id'], 'int'), secure($group['group_id'], 'int'), secure($date) )) or _error(SQL_ERROR_THROWEN);
                        $post_id = $db->insert_id;
                        /* insert new group picture to album */
                        $db->query(sprintf("INSERT INTO posts_photos (post_id, album_id, source) VALUES (%s, %s, %s)", secure($post_id, 'int'), secure($group['group_album_pictures'], 'int'), secure($image_new_name) )) or _error(SQL_ERROR_THROWEN);
                        $photo_id = $db->insert_id;
                        /* update group picture */
                        $db->query(sprintf("UPDATE groups SET group_picture = %s, group_picture_id = %s WHERE group_id = %s", secure($image_new_name), secure($photo_id, 'int'), secure($group['group_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                        break;

                    case 'cover-event':
                        /* check if event id is set */
                        if(!isset($_POST['id']) || !is_numeric($_POST['id'])) {
                            /* delete the uploaded image & return error 403 */
                            unlink($path);
                            _error(403);
                        }
                        /* check if the user is the event admin */
                        $get_event = $db->query(sprintf("SELECT * FROM events WHERE event_id = %s AND event_admin = %s", secure($_POST['id'], 'int'), secure($user->_data['user_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                        if($get_event->num_rows == 0) {
                            /* delete the uploaded image & return error 403 */
                            unlink($path);
                            _error(403);
                        }
                        $event = $get_event->fetch_assoc();
                        /* check for event covers album */
                        if(!$event['event_album_covers']) {
                            /* create new event covers album */
                            $db->query(sprintf("INSERT INTO posts_photos_albums (user_id, user_type, in_event, event_id, title, privacy) VALUES (%s, 'user', '1', %s, 'Cover Photos', 'public')", secure($user->_data['user_id'], 'int'), secure($event['event_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                            $event['event_album_covers'] = $db->insert_id;
                            /* update event cover album id */
                            $db->query(sprintf("UPDATE events SET event_album_covers = %s WHERE event_id = %s", secure($event['event_album_covers'], 'int'), secure($event['event_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                        }
                        /* insert updated event cover post */
                        $db->query(sprintf("INSERT INTO posts (user_id, user_type, post_type, in_event, event_id, time, privacy) VALUES (%s, 'user', 'event_cover', '1', %s, %s, 'custom')", secure($user->_data['user_id'], 'int'), secure($event['event_id'], 'int'), secure($date) )) or _error(SQL_ERROR_THROWEN);
                        $post_id = $db->insert_id;
                        /* insert new event cover to album */
                        $db->query(sprintf("INSERT INTO posts_photos (post_id, album_id, source) VALUES (%s, %s, %s)", secure($post_id, 'int'), secure($event['event_album_covers'], 'int'), secure($image_new_name) )) or _error(SQL_ERROR_THROWEN);
                        $photo_id = $db->insert_id;
                        /* update event cover */
                        $db->query(sprintf("UPDATE events SET event_cover = %s, event_cover_id = %s WHERE event_id = %s", secure($image_new_name), secure($photo_id, 'int'), secure($event['event_id'], 'int') )) or _error(SQL_ERROR_THROWEN);
                        break;

                }

                // return the file new name & exit
                return_json(array("file" => $image_new_name));
            }

            break;

        case 'video':
            // check video upload enabled
            if(!$system['videos_enabled']) {
                modal(MESSAGE, __("Not Allowed"), __("This feature has been disabled"));
            }

            // valid inputs
            if(!isset($_FILES["file"]) || $_FILES["file"]["error"] != UPLOAD_ERR_OK) {
                modal(MESSAGE, __("Upload Error"), __("Something wrong with upload! Is 'upload_max_filesize' set correctly?"));
            }

            // check file size
            $max_allowed_size = $system['max_video_size'] * 1024;
            if($_FILES["file"]["size"] > $max_allowed_size) {
                modal(MESSAGE, __("Upload Error"), __("The file size is so big"));
            }

            // check file extesnion
            $extension = get_extension($_FILES['file']['name']);
            if(!valid_extension($extension, $system['video_extensions'])) {
                modal(MESSAGE, __("Upload Error"), __("The file type is not valid or not supported"));
            }

            /* check & create uploads dir */
            $folder = 'videos';
            $depth = '../../../';
            if(!file_exists($depth.$system['uploads_directory'].'/'.$folder)) {
                @mkdir($depth.$system['uploads_directory'].'/'.$folder, 0777, true);
            }
            if(!file_exists($depth.$system['uploads_directory'].'/'.$folder.'/' . date('Y'))) {
                @mkdir($depth.$system['uploads_directory'].'/'.$folder.'/' . date('Y'), 0777, true);
            }
            if(!file_exists($system['uploads_directory'].'/'.$folder.'/' . date('Y') . '/' . date('m'))) {
                @mkdir($depth.$system['uploads_directory'].'/'.$folder.'/' . date('Y') . '/' . date('m'), 0777, true);
            }

            /* prepare new file name */
            $directory = $folder.'/'. date('Y') . '/' . date('m') . '/';
            $prefix = $system['uploads_prefix'].'_'.get_hash_token();
            $file_name = $directory.$prefix.'.'.$extension;
            $path = $depth.$system['uploads_directory'].'/'.$file_name;

            /* check if the file uploaded successfully */
            if(!@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
                modal(MESSAGE, __("Upload Error"), __("Sorry, can not upload the file"));
            }

            /* upload to amazon s3 */
            if($system['s3_enabled']) {
                aws_s3_upload($path, $file_name);
            }

            // return the file new name & exit
            return_json(array("file" => $file_name));
            break;

        case 'audio':
            // check audio upload enabled
            if(!$system['audio_enabled']) {
                modal(MESSAGE, __("Not Allowed"), __("This feature has been disabled"));
            }

            // valid inputs
            if(!isset($_FILES["file"]) || $_FILES["file"]["error"] != UPLOAD_ERR_OK) {
                modal(MESSAGE, __("Upload Error"), __("Something wrong with upload! Is 'upload_max_filesize' set correctly?"));
            }

            // check file size
            $max_allowed_size = $system['max_audio_size'] * 1024;
            if($_FILES["file"]["size"] > $max_allowed_size) {
                modal(MESSAGE, __("Upload Error"), __("The file size is so big"));
            }

            // check file extesnion
            $extension = get_extension($_FILES['file']['name']);
            if(!valid_extension($extension, $system['audio_extensions'])) {
                modal(MESSAGE, __("Upload Error"), __("The file type is not valid or not supported"));
            }

            /* check & create uploads dir */
            $folder = 'sounds';
            $depth = '../../../';
            if(!file_exists($depth.$system['uploads_directory'].'/'.$folder)) {
                @mkdir($depth.$system['uploads_directory'].'/'.$folder, 0777, true);
            }
            if(!file_exists($depth.$system['uploads_directory'].'/'.$folder.'/' . date('Y'))) {
                @mkdir($depth.$system['uploads_directory'].'/'.$folder.'/' . date('Y'), 0777, true);
            }
            if(!file_exists($system['uploads_directory'].'/'.$folder.'/' . date('Y') . '/' . date('m'))) {
                @mkdir($depth.$system['uploads_directory'].'/'.$folder.'/' . date('Y') . '/' . date('m'), 0777, true);
            }

            /* prepare new file name */
            $directory = $folder.'/'. date('Y') . '/' . date('m') . '/';
            $prefix = $system['uploads_prefix'].'_'.get_hash_token();
            $file_name = $directory.$prefix.'.'.$extension;
            $path = $depth.$system['uploads_directory'].'/'.$file_name;

            /* check if the file uploaded successfully */
            if(!@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
                modal(MESSAGE, __("Upload Error"), __("Sorry, can not upload the file"));
            }

            /* upload to amazon s3 */
            if($system['s3_enabled']) {
                aws_s3_upload($path, $file_name);
            }

            // return the file new name & exit
            return_json(array("file" => $file_name));
            break;

        case 'file':
            // check file upload enabled
            if(!$system['file_enabled']) {
                modal(MESSAGE, __("Not Allowed"), __("This feature has been disabled"));
            }

            // valid inputs
            if(!isset($_FILES["file"]) || $_FILES["file"]["error"] != UPLOAD_ERR_OK) {
                modal(MESSAGE, __("Upload Error"), __("Something wrong with upload! Is 'upload_max_filesize' set correctly?"));
            }

            // check file size
            $max_allowed_size = $system['max_file_size'] * 1024;
            if($_FILES["file"]["size"] > $max_allowed_size) {
                modal(MESSAGE, __("Upload Error"), __("The file size is so big"));
            }

            // check file extesnion
            $extension = get_extension($_FILES['file']['name']);
            if(!valid_extension($extension, $system['file_extensions'])) {
                modal(MESSAGE, __("Upload Error"), __("The file type is not valid or not supported"));
            }

            /* check & create uploads dir */
            $folder = 'files';
            $depth = '../../../';
            if(!file_exists($depth.$system['uploads_directory'].'/'.$folder)) {
                @mkdir($depth.$system['uploads_directory'].'/'.$folder, 0777, true);
            }
            if(!file_exists($depth.$system['uploads_directory'].'/'.$folder.'/' . date('Y'))) {
                @mkdir($depth.$system['uploads_directory'].'/'.$folder.'/' . date('Y'), 0777, true);
            }
            if(!file_exists($system['uploads_directory'].'/'.$folder.'/' . date('Y') . '/' . date('m'))) {
                @mkdir($depth.$system['uploads_directory'].'/'.$folder.'/' . date('Y') . '/' . date('m'), 0777, true);
            }

            /* prepare new file name */
            $directory = $folder.'/'. date('Y') . '/' . date('m') . '/';
            $prefix = $system['uploads_prefix'].'_'.get_hash_token();
            $file_name = $directory.$prefix.'.'.$extension;
            $path = $depth.$system['uploads_directory'].'/'.$file_name;

            /* check if the file uploaded successfully */
            if(!@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
                modal(MESSAGE, __("Upload Error"), __("Sorry, can not upload the file"));
            }
            
            /* upload to amazon s3 */
            if($system['s3_enabled']) {
                aws_s3_upload($path, $file_name);
            }

            // return the file new name & exit
            return_json(array("file" => $file_name));
            break;
    }

} catch (Exception $e) {
    modal(ERROR, __("Error"), $e->getMessage());
}
    
?>