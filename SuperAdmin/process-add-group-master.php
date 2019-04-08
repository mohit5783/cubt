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
$query="INSERT INTO GroupMaster(GroupName, Facilitator, Speaker) VALUES ('".$_POST['GroupName']."','".$_POST['FID']."','".$_POST['SID']."')";
if(mysql_query($query,$conn))
{
	echo "<script language='Javascript'>location.href='add-group.php';</script>";
}
else
{
	echo "Too Many Connections: There are many users on the website. Please try again later.";
}
?>


