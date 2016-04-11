<?php
defined('_BDZ') or die;

switch($fileDisplay) {
	case 'home':
?>
	<link type="text/css" rel="stylesheet" media="all" href="<?php echo BDZ_URL_THEMES.'/'._TEMPLATE_.'/css/home.css';?>" />
<?php	
	break;
	case 'login':
?>
	<link type="text/css" rel="stylesheet" media="all" href="<?php echo BDZ_URL_THEMES.'/'._TEMPLATE_.'/css/login.css';?>" />
<?php	
	default:
?>
	<link type="text/css" rel="stylesheet" media="all" href="<?php echo BDZ_URL_THEMES.'/'._TEMPLATE_.'/css/home.css';?>" />
<?php
}
?>

