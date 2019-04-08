<?php
ob_start();
session_start();
ob_end_clean();
include("../../conn.php"); 
if(!$_SESSION['logged_in'])
{
	echo "<script language='javascript'> window.location='index.php'; </script>";
	exit;
}
$loginid=$_SESSION['log'];
$todayis=date("Y-m-d H:i:s");
$query="INSERT INTO UserType(UserTypeName, CreatedBy, CreationDateTime) VALUES ('".$_POST['UserTypeName']."','".$loginid."','".$todayis."');";
if(mysql_query($query,$conn))
{
	echo "<script language='Javascript'>location.href='create-user-type.php';</script>";
}
else
{
	echo "Too Many Connections: There are many users on the website. Please try again later.";
}
?>


