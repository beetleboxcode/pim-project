<?php 
defined('_BDZ') or die;

session_start();

if(!isset($_SESSION['ses_login'])) {
	$fileDisplay = 'login';
	require_once BDZ_PATH_ROOT.DIRECTORY_SEPARATOR.'modules'.DIRECTORY_SEPARATOR.'login'.DIRECTORY_SEPARATOR.'controler.php';
} else {
	$dataVar = sizeof($varURL);
	if($dataVar > 0) {
		switch($varURL[0]) {
			case 'login':
				$fileDisplay = 'login';
				require_once BDZ_PATH_ROOT.DIRECTORY_SEPARATOR.'modules'.DIRECTORY_SEPARATOR.$fileDisplay.DIRECTORY_SEPARATOR.'controler.php';
			break;
			case 'home':
				$fileDisplay = 'home';
				require_once BDZ_PATH_ROOT.DIRECTORY_SEPARATOR.'modules'.DIRECTORY_SEPARATOR.$fileDisplay.DIRECTORY_SEPARATOR.'controler.php';
			break;
			default :
				$fileDisplay = 'home';
				require_once BDZ_PATH_ROOT.DIRECTORY_SEPARATOR.'modules'.DIRECTORY_SEPARATOR.$fileDisplay.DIRECTORY_SEPARATOR.'controler.php';
		}
	} else {
		$fileDisplay = 'home';
		require_once BDZ_PATH_ROOT.DIRECTORY_SEPARATOR.'modules'.DIRECTORY_SEPARATOR.$fileDisplay.DIRECTORY_SEPARATOR.'controler.php';
	}

}
 ?>