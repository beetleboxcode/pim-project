<?php 

defined('_BDZ') or die;
define('TITLE_PAGES','Login');

$warningLogin = '';
if(isset($_POST['login'])) {
	
	$username = strip_tags($_POST['username']);
	$userPassword = strip_tags($_POST['password']);

	if(($username == NULL) || ($userPassword == NULL)) {
		$warningLogin = "User ID/Password tidak diisi!";
	} else {
		$queryDataUser = "SELECT * FROM user WHERE user_name='".$username."'";
		$dataUser = resultData($queryDataUser);
		if(!empty($dataUser)) {
			if($dataUser[1] == md5('PIM'.$userPassword.'ADM')) {
				if($dataUser[3] != 1) {
					$warningLogin = "User ID anda dinonaktifkan oleh Administrator!";
				} else {
					$warningLogin = "Success !!";
					//exit;
				}
			} else {
				$warningLogin = "User ID/Password tidak cocok!";
			}
		} else {
			$warningLogin = "Anda belum terdaftar sebagai pengguna!";
		}
	}
} 
 ?>