<?php 
if (version_compare(PHP_VERSION, '5.3.1', '<')) {
	die('Hosting anda mesti menggunakan PHP 5.3.1 atau lebih tinggi untuk menjalankan aplikasi ini!');
}

ob_start();

error_reporting(E_ALL);
/*ini_set('display_errors', 'Off');
ini_set('log_errors', 'On');
ini_set('error_log', 'error_log');*/

define('_BDZ', 1);

define('BDZ_BASE',__DIR__);

require_once BDZ_BASE.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config.php';
require_once BDZ_BASE.DIRECTORY_SEPARATOR.'includes'.DIRECTORY_SEPARATOR.'path.php';
require_once BDZ_BASE.DIRECTORY_SEPARATOR.'includes'.DIRECTORY_SEPARATOR.'defines.php';
require_once BDZ_PATH_INC.DIRECTORY_SEPARATOR.'function.php';
require_once BDZ_PATH_LANG.DIRECTORY_SEPARATOR.'language.'._LANG_.'.php';
require_once BDZ_PATH_INC.DIRECTORY_SEPARATOR.'paging.php';
require_once BDZ_PATH_MOD_COM.DIRECTORY_SEPARATOR.'header.php';
require_once BDZ_PATH_THEMES.DIRECTORY_SEPARATOR._TEMPLATE_.DIRECTORY_SEPARATOR.'php'.DIRECTORY_SEPARATOR.$fileDisplay.'.php';
require_once BDZ_PATH_MOD_COM.DIRECTORY_SEPARATOR.'footer.php';

ob_end_flush();



?>
