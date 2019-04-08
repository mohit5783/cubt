<?php
	include('../../conn.php');
	$usrnm=$_POST['GroupName'];
	if($usrnm!='')
	{
		$qwe = mysql_query("SELECT GroupName FROM GroupMaster WHERE GroupName='".$usrnm."'");
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
