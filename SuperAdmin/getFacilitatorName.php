<?php
	include('../../conn.php');
	$term=$_GET["term"];
	$query=mysql_query("SELECT * FROM User where UserTypeID='3' and FullName like '%".$term."%' order by FullName ");
	$names=array();
	while($Facilitator=mysql_fetch_array($query))
	{
		$facName['value']=$Facilitator["FullName"];
		$facName['FName']= $Facilitator["FullName"];
		$facName['UId']= $Facilitator["UserID"];
		array_push($names,$facName);
	}
	echo json_encode($names);
?>