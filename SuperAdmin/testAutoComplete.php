<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><title>SSD || Create New Group Masters || Admin Area</title>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>

<script src="http://code.jquery.com/ui/1.8.22/jquery-ui.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/smoothness/jquery-ui.css"/>


<script language="JavaScript" type="text/javascript">
$(document).ready(function()
{
	$("#FacilitatorID").autocomplete({
		source:'getFacilitatorName.php',
		select: function(event, ui){ 
			$("#FID").val(ui.item.UId); 
			$("#FacilitatorID").val(ui.item.FName);
		},
		minLength:1
	});
});

</script>
<body>
<form id="addGroupMaster" name="addGroupMaster" method="post" onsubmit="return validateForm();" action="process-add-group-master.php">
<table border="0" cellpadding="0" cellspacing="0" id="id-form">
<tr>
<th valign="top">Group Name</th>
<td><input id="GroupName" name="GroupName" type="text" class="inp-form"/></td>
<td>
<span id="GrpNmSpanLeft" style="display:none;"></span>
<span id="GrpNmSpan" style="display:none;"></span>
<span id="GrpNmSpanRight" style="display:none;"></span>
</td>
</tr>
<tr>
<th valign="top">Facilitator</th>
<td><input id="FacilitatorID" name="FacilitatorID" type="text" class="inp-form" autocomplete="off"/></td>
<td><input id="FID" name="FID" type="text" class="inp-form" autocomplete="off" /></td>
</tr>
<tr>
<th valign="top">Speaker</th>
<td><input id="SpeakerID" name="SpeakerID" type="text" class="inp-form"/></td>
<td></td>
</tr>
<tr>
<th>&nbsp;</th>
<td valign="top">
<input type="submit" value="Submit"/>
<input type="reset" value="reset" />
</td>
<td></td>
</tr>
</table>
</form>
</body>
</html>