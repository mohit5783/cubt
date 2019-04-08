<?php
	include('../../conn.php');
	$usrnm=$_POST['UserTypeName'];
	if($usrnm!='')
	{
		$qwe = mysql_query("SELECT UserTypeName FROM UserType WHERE UserTypeName='".$usrnm."'");
		$norows = mysql_num_rows($qwe);
		if($norows < 1)
		{
		 echo "yes";
		}
		else
		{
		  echo "no";
		}
	}
	else
	{
		echo "no";
	}
?>
