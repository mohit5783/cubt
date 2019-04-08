<?php
	ob_start();
	session_start();
	ob_end_clean();
	$_SESSION['logged_in']=false;
	$_SESSION['log']='';
	$_SESSION['pas']='';
	session_destroy();
	header('Location: login.php');
?>
