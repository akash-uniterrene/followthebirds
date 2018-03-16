<?php
$page = basename(__FILE__, '.php');
include('include/config.php');
require('include/class.users.php');
require('include/class.clinics.php');
require('include/class.patients.php');
require('include/class.exercises.php');
require('include/class.subscription.php');
require('include/smarty.php');
require('include/lock.php');
require('include/utils.php');

$auth = new auth();
$user = new users();
$utils = new utils();
$clinics = new clinics();
$patients = new patients();
$exercises = new exercises();
$subscription = new subscription();

$subscription->activateRazorpay($utils);

if(!empty($_POST) && $_POST['action'] == 'add_user'){
	$params = array();
	$params = $_POST;
	$smarty->assign('posts', $_POST);	
	$countries = $subscription->getcountry($utils);
	$smarty->assign('countries', $countries);
	
	if($_POST['password'] != $_POST['re_password']){
		$smarty->assign('error', 'Both Password Are not match');
		$smarty->display('signup.tpl');
		return false;
	}
	
	$select = "SELECT *  FROM `clinics` WHERE `clinic_email` LIKE '{$params['email']}' ";
	$result = mysql_query($select);
	$count =  mysql_num_rows($result);
	if($count > 0){
		$smarty->assign('error', 'This email has already been registered');
		$smarty->display('signup.tpl');
		return false;
	}
	
	if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
		$secret = '6LeZDUkUAAAAANAx1utybsCXZE12SwGjX9aJnOIZ';
		$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
		$responseData = json_decode($verifyResponse);
		if(!$responseData->success){
			$smarty->assign('error', 'Robot verification failed, please try again.');
			$smarty->display('signup.tpl');
			return false;
		}
	}else{
		$smarty->assign('error', 'Please click on the reCAPTCHA box.');
		$smarty->display('signup.tpl');
		return false;
	}

	$file_id = 0;
	if(!empty($_FILES['upload_img']) && ($_FILES['upload_img']['size'] > 0 )){		
		$allowed = array("image/jpeg", "image/gif", "image/png");
		if(!in_array($_FILES['upload_img']['type'], $allowed)) {
			$smarty->assign('error', 'Please Insert only Valid Image');
			$smarty->display('signup.tpl');
			return false;
		}		
		$root = __DIR__;
		$uploaddir = $root.'/uploads/steps/';
		$save_path = '';		
		$unique_id = uniqid();
		$ext = explode('.',$_FILES['upload_img']['name']); 
		$extsn = end($ext);
		$filename = $unique_id.md5($ext[0]).'.'.$extsn;
		$uploadfile = $uploaddir . $filename;
		$path = '/uploads/steps/';
		if(move_uploaded_file($_FILES['upload_img']['tmp_name'], $uploadfile)) {
			$file_id = $exercises->upload_img($utils, $filename,$path,$_FILES);
		}		
	}
	
	$params['file_id'] = $file_id;
	/*$params['otp_number'] = mt_rand(100000, 999999);
	$params['encode'] = md5($params['otp_number']);
	$sendOtp = sendOtp($params);
	if(!$sendOtp){
		$smarty->assign('error', 'Registration Process Failure Please Try Again');
		$smarty->display('signup.tpl');
		return false;
	}
	$smarty->assign('action', 'signup');
	$smarty->assign('userData', serialize($sendOtp));
	$smarty->display('sendOtp.tpl');
} else if(!empty($_POST) && $_POST['action'] == 'otp-verify'){
	$smarty->assign('action', 'signup');
	$params = array();
	$params = unserialize($_POST['userData']);
	$smarty->assign('userData', $_POST['userData']);
	if(md5($_POST['otp_value']) != $params['encode']){
		$smarty->assign('error', 'Invalid OTP');
		$smarty->display('sendOtp.tpl');
		return false;	
	} */

	$mypassword=addslashes($params['password']); 
	$real_password=addslashes($params['password']); 
	$salt = mt_rand();
	$params['salt'] = $salt; 
	$mypassword = md5($mypassword.$salt);
	$params['password'] = $mypassword;	
	$ragister = $user->register($utils,$params);
	$smarty->assign('posts', $params);
	$countries = $subscription->getcountry($utils);
	$smarty->assign('countries', $countries);
	if(empty($ragister)){
		$smarty->assign('error', 'Registration Process Failure Please Try Again');
		$smarty->display('signup.tpl');
		return false;
	}
	
	$getUser = $user->user_info($utils,$ragister);
	
	$clinic = $clinics->view_clinic($utils,$getUser['clinic_id']);
	if($clinic['country'] == "IN"){
		$customer = $subscription->razorApi->customer->create(array('name' => $clinic['clinic_name'], 'email' => $clinic['clinic_email'], 'contact' => $clinic['phone']));
		$clinics->modify($utils,array('razorpay_id'=>$customer['id']),array('clinic_id'=>$clinic['clinic_id']));
	}
	
	$_SESSION['login_user'] = $getUser['user_name'];
	$_SESSION['user_id']= $getUser['user_id'];
	$_SESSION['role_id'] = $getUser['role_id'];
	
	// Registration success email
	$mail = new PHPMailer();
	$protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https://" : "http://";
	$domain = $protocol.$_SERVER['HTTP_HOST'];
	$message = '<div class="email-preview" style="box-shadow: 0px 0px 14px -2px #000; padding: 10px;">				
		<div style="width: 85%;margin: auto; overflow: hidden; background: rgba(51,122,183, .5); padding:0 25px">
			<img width="100%" src="'.$domain.'/static/images/em1.jpg" alt="">
		</div>
		<div class="phl" style="width:85%;margin: auto; padding:0 25px">
			<div style="overflow:auto;font-family:Helvetica, Arial, sans-serif">
				<span id="message-preview" style="display: block;" >
					<div style="background: #fafafa; margin: auto; border:4px double #ddd;padding: 20px;">
						Hello,
						<br>				
						You have been Signed Up As Individual Clinic on our site "Therexportal". 
					</div>
					<div style="text-align:center; margin:10px 10px 10px 10px;">
						<a id="mail_language" href="'.$domain.'/login_physio.php?_return_url=therexportal" style="font-size:1em;border:none;font-weight:bold; line-height:25px; background-color: #337ab7; color:#fff; display: inline-block; padding:10px 20px;text-decoration: none; " class="btn btn-primary btn-flat">Please Login to Continue</a>
					</div>
					<div style="background: #fafafa; margin: auto; border:4px double #ddd;padding: 20px; text-align: justify;">
						<p>Email : '.$clinic['clinic_email'].'</p>
						<p>Password : '.$real_password.'</p>
					<br>
					Regards,
					<br>
					<b><big>Asha Gummadi</big></b>
					<br><br>

					This e-mail message and any documents attached to it are confidential and may contain information that is protected from disclosure by various federal and state laws, including the HIPAA privacy rule (45 C.F.R., Part 164). This information is intended to be used solely by the entity or individual to whom this message is addressed. If you are not the intended recipient, be advised that any use, dissemination, forwarding, printing, or copying of this message without the sender\'s written permission is strictly prohibited and may be unlawful. Accordingly, if you have received this message in error, please notify the sender immediately by return e-mail or call +16106193562, and then delete this message.
					<br><br>

					If you are the intended recipient and wish to stop receiving unencrypted emails, please contact your healthcare provider, call the number above, or email info@therexportal.com.
					<br>
				</div>
				</span>
			</div>
		</div>
	</div>';
	$mail->CharSet = 'UTF-8';
	$mail->SetFrom('info@therexportal.com', 'Therexportal');
	$mail->AddAddress($clinic['clinic_email'], $clinic['clinic_name']);		
	$mail->Subject = "Sign-up Process Has been Completed on Therexportal";
	$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->MsgHTML($body);
	$email = $mail->Send();	
	
	// Payment proccess email
	$mail = new PHPMailer();
	$protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https://" : "http://";
	$domain = $protocol.$_SERVER['HTTP_HOST'];
	$message = '<div class="email-preview" style="box-shadow: 0px 0px 14px -2px #000; padding: 10px;">				
		<div style="width: 85%;margin: auto; overflow: hidden; background: rgba(51,122,183, .5); padding:0 25px">
			<img width="100%" src="'.$domain.'/static/images/em1.jpg" alt="">
		</div>
		<div class="phl" style="width:85%;margin: auto; padding:0 25px">
			<div style="overflow:auto;font-family:Helvetica, Arial, sans-serif">
				<span id="message-preview" style="display: block;" >
					<div style="background: #fafafa; margin: auto; border:4px double #ddd;padding: 20px;">
						Hello,
						<br>				
						Please continue payment to continue on our site "Therexportal". 
					</div>
					<div style="text-align:center; margin:10px 10px 10px 10px;">
						<a id="mail_language" href="'.$domain.'/login_clinic.php" style="font-size:1em;border:none;font-weight:bold; line-height:25px; background-color: #337ab7; color:#fff; display: inline-block; padding:10px 20px;text-decoration: none; " class="btn btn-primary btn-flat">Please Login to Continue</a>
					</div>
					Regards,
					<br>
					<b><big>Asha Gummadi</big></b>
					<br><br>

					This e-mail message and any documents attached to it are confidential and may contain information that is protected from disclosure by various federal and state laws, including the HIPAA privacy rule (45 C.F.R., Part 164). This information is intended to be used solely by the entity or individual to whom this message is addressed. If you are not the intended recipient, be advised that any use, dissemination, forwarding, printing, or copying of this message without the sender\'s written permission is strictly prohibited and may be unlawful. Accordingly, if you have received this message in error, please notify the sender immediately by return e-mail or call +16106193562, and then delete this message.
					<br><br>

					If you are the intended recipient and wish to stop receiving unencrypted emails, please contact your healthcare provider, call the number above, or email info@therexportal.com.
					<br>
				</div>
				</span>
			</div>
		</div>
	</div>';
	$mail->CharSet = 'UTF-8';
	$mail->SetFrom('info@therexportal.com', 'Therexportal');
	$mail->AddAddress($clinic['clinic_email'], $clinic['clinic_name']);						
	$mail->Subject = "Therexportal payment proccess notification";
	$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->MsgHTML($body);
	$email = $mail->Send();	
	
	header("location: payment.php?action=plans");
}else if(!empty($_GET) && $_GET['action'] == 'add_paitent'){	
	$users = $user->user_info($utils,$_SESSION['user_id']);
	$clinic = $clinics->view_clinic($utils,$users['clinic_id']);
	$plan = $subscription->viewPlan($utils,$clinic['plan_id']);
	if($users['history_count'] <= 0){
		$user->modify(
			$utils,
			array(
				'history_count' => $plan['no_of_portal']
			),
			array(
				'user_id'=> $users['user_id']
			));
	}
	$smarty->assign('clinic_id', $clinic['clinic_id']);
	$smarty->assign('user_id', $_SESSION['user_id']);
	$smarty->display('add_paitent.tpl');
}else if(!empty($_POST) && $_POST['action'] == 'add_paitent'){	
	$patients->signup_patient($utils,$_POST);
	if($patients){
		header("location: dashboard.php");
	}
} else {
	if($auth->isLogin() == true){
		header("location: dashboard.php");
	}
	$countries = $subscription->getcountry($utils);
	$smarty->assign('countries', $countries);
	$smarty->assign('logout_no_show', 0);
	$smarty->assign('refer', $_GET['refer-code']);
	$smarty->display('signup.tpl');
}

function get_image($file_id){
	$sql = "SELECT *  FROM `storage_files` WHERE `file_id` = '{$file_id}'";
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);
	return $row['name']; 
}

function sendOtp($params){
	$curl = curl_init();
	curl_setopt_array($curl, array(
	  CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php?sender=Therex&route=4&mobiles={$params['phone']}&authkey=200172AC1j4XVRJH5a968a7a&encrypt=1&country=91&message=Your Verification code : {$params['otp_number']}",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "GET",
	  CURLOPT_SSL_VERIFYHOST => 0,
	  CURLOPT_SSL_VERIFYPEER => 0,
	));
	$success = curl_exec($curl);
	$err = curl_error($curl);
	curl_close($curl);
	$params['success'] = $success;
	if ($err) {
	  return false;
	} else {
		$response = array();	
		$response['referral'] = $params['referral'];
		$response['user_name'] = $params['user_name'];
		$response['email'] = $params['email'];
		$response['password'] = $params['password'];
		$response['phone'] = $params['phone'];
		$response['credentials'] = $params['credentials'];
		$response['country'] = $params['country'];
		$response['clinic_name'] = $params['clinic_name'];
		$response['clinic_address'] = $params['clinic_address'];
		$response['file_id'] = $params['file_id'];
		$response['encode'] = $params['encode'];
	    return $response;
	}
}

?>
