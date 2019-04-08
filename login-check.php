<?php
	include('config/conn.php');

	$login_id = $_POST['login_id'];
	$pass_word= $_POST['password'];

	session_start();
	$query=mysqli_query($conn, "SELECT * FROM User WHERE LoginID = '$login_id' AND Password ='$pass_word'");
	if(mysqli_num_rows($query)) 
	{
		$_SESSION['logged_in']=true;
		$_SESSION['log']=$login_id;
		$_SESSION['pas']=$pass_word;
		$todayDateTime = date("Y-m-d H:i:s");
		$qu=mysqli_query($conn, "Update User SET LastLoggedin='$todayDateTime' WHERE LoginID = '$login_id'");
		header('Location: dashboard.php');
	}
	else
	{
		$_SESSION['logged_in']=false;		
		header('Location: index.php');
	}
?>
