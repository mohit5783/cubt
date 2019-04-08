<?php
	include('../../conn.php');
	$usrnm=$_POST['SSDLoginID'];
	if($usrnm!='')
	{
		$qwe = mysql_query("SELECT SSDLoginID FROM User WHERE SSDLoginID='".$usrnm."'");
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
