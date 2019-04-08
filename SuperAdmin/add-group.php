<? include("../includes/top-most.php");?>
<title>SSD || Create New Group Masters || Admin Area</title>
<!--  Session and Page Name for Navigator -->
<? 	
	$_SESSION['CurrentMenu']="Group";
	$_SESSION['CurrentSubMenu']="Create-Group";
?>
<!--  End Session and Page Name for Navigator -->
<? include("../includes/header.php");?>

<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/smoothness/jquery-ui.css"/>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/ui/1.8.22/jquery-ui.min.js" type="text/javascript"></script>

<script language="JavaScript" type="text/javascript">
var v1;
v1="";

$(document).ready(function()
{
	$("#FacilitatorID").autocomplete({
		source:'getFacilitatorName.php',
		change: function(event, ui){ 
			$("#FID").val(ui.item ? ui.item.UId : ""); 
			$("#FacilitatorID").val(ui.item ? ui.item.FName : "");
		},
		select: function(event, ui){ 
			$("#FID").val(ui.item.UId); 
			$("#FacilitatorID").val(ui.item.FName);
		},
		minLength:1
	});
	
	$("#SpeakerID").autocomplete({
		source:'getSpeakerName.php',
		change: function(event, ui){ 
			$("#SID").val(ui.item ? ui.item.UId : ""); 
			$("#SpeakerID").val(ui.item ? ui.item.FName : "");
		},
		select: function(event, ui){ 
			$("#SID").val(ui.item.UId); 
			$("#SpeakerID").val(ui.item.FName);
		},
		minLength:1
	});
	
	$("#GroupName").blur(function()
	{
		$("#GrpNmSpanLeft").removeClass().addClass('bubble-left').fadeTo(200,1);
		$("#GrpNmSpan").removeClass().addClass('bubble-inner').text('Group Name availablility. Checking..').fadeIn(1000);
		$("#GrpNmSpanRight").removeClass().addClass('bubble-right').fadeTo(200,1);
		$.post("groupAvailable.php",{ GroupName:$(this).val() } ,function(data)
		{
		  if(data=='no')
		  {
			v1="InValid";
			$("#GrpNmSpanLeft").removeClass().addClass('error-left');
			$("#GrpNmSpan").fadeTo(200,0.1,function()
			{ 
			  $(this).html('This Group Name Already exists.').addClass('error-inner').fadeTo(900,1);
			});		
			$("#GrpNmSpanRight").hide();
		  }
		  else
		  {
			v1="Valid";
			$("#GrpNmSpanLeft").removeClass().addClass('bubble-left').fadeTo(200,1);
			$("#GrpNmSpan").fadeTo(200,0.1,function()
			{ 
			  $(this).html('Group name available to register.').addClass('bubble-inner').fadeTo(900,1);	
			});
			$("#GrpNmSpanRight").removeClass().addClass('bubble-right').fadeTo(200,1);
		  }
		});
	});
});

function validateForm()
{
	if(v1=="Valid"){
		return true; 
	}
	else
	{
		alert("Please check the form carefully. There are few mistake/s in the form please fill it correctly and submit again. Thanks!!!");
		return false;
	}
}

</script>
<link rel="stylesheet" href="../css/screen.css" type="text/css" media="screen" title="default" />
<!--  End Script -->
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->
<div class="clear"></div>
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">
<div id="page-heading"><h1>Create New Group Master</h1></div>
<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><img src="../images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><img src="../images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
		<!--  start step-holder -->
		<div id="step-holder">
			<div class="step-no">1</div>
			<div class="step-dark-left"><a href="">Add Group Masters</a></div>
			<div class="step-dark-right">&nbsp;</div>
			<div class="step-no-off">2</div>
			<div class="step-light-left">Preview Group</div>
			<div class="step-light-round">&nbsp;</div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
        <form id="addGroupMaster" name="addGroupMaster" method="post" onsubmit="return validateForm();" action="process-add-group-master.php">
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">Group Name</th>
			<td><input id="GroupName" name="GroupName" type="text" class="inp-form" /></td>
			<td>
				<span id="GrpNmSpanLeft" style="display:none;"></span>
				<span id="GrpNmSpan" style="display:none;"></span>
				<span id="GrpNmSpanRight" style="display:none;"></span>
			</td>
		</tr>
		<tr>
			<th valign="top">Facilitator</th>
			<td><input id="FacilitatorID" name="FacilitatorID" type="text" class="inp-form" autocomplete="off" /></td>
			<td><input id="FID" name="FID" type="hidden" /></td>
		</tr>
        <tr>
            <th valign="top">Speaker</th>
            <td><input id="SpeakerID" name="SpeakerID" type="text" class="inp-form" /></td>
            <td><input id="SID" name="SID" type="hidden" /></td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <td valign="top">
                <input type="submit" value="" class="form-submit" />
                <input type="reset" value="" class="form-reset"  />
            </td>
            <td></td>
        </tr>
	</table>
	<!-- end id-form  -->
    </form>
	</td>
	<td>
	<!--  start related-activities -->
	<div id="related-activities">
		<!--  start related-act-top -->
		<div id="related-act-top">
		<img src="../images/forms/header_related_act.gif" width="271" height="43" alt="" />
		</div>
		<!-- end related-act-top -->
		<!--  start related-act-bottom -->
		<div id="related-act-bottom">
			<!--  start related-act-inner -->
			<div id="related-act-inner">
				<div class="left"><a href=""><img src="../images/forms/icon_plus.gif" width="21" height="21" alt="" /></a></div>
				<div class="right">
					<h5>Create User-Type</h5>
					Creating a User-Type will enable us to
					give a group of user with special functionalities
					<ul class="greyarrow">
						<li><a href="">Click here to Create User-Type</a></li> 
					</ul>
				</div>
				<div class="clear"></div>
				<div class="lines-dotted-short"></div>
				<div class="left"><a href=""><img src="../images/forms/icon_minus.gif" width="21" height="21" alt="" /></a></div>
				<div class="right">
					<h5>Delete Users</h5>
					Enable you to delete a single or multiple
					Users at the same time.
					<ul class="greyarrow">
						<li><a href="">Click here to Delete Users</a></li> 
					</ul>
				</div>
				<div class="clear"></div>
				<div class="lines-dotted-short"></div>
				<div class="left"><a href=""><img src="../images/forms/icon_edit.gif" width="21" height="21" alt="" /></a></div>
				<div class="right">
					<h5>Manage Users</h5>
					Managing Users will enable to modify or
					Delete Users/Group of Users.
					<ul class="greyarrow">
						<li><a href="">Click here to Manage Users</a></li> 
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			<!-- end related-act-inner -->
			<div class="clear"></div>
		</div>
		<!-- end related-act-bottom -->
	</div>
	<!-- end related-activities -->
</td>
</tr>
<tr>
<td><img src="../images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
<!--  end content-table-inner  -->
</td>
<td id="tbl-border-right"></td>
</tr>
<tr>
	<th class="sized bottomleft"></th>
	<td id="tbl-border-bottom">&nbsp;</td>
	<th class="sized bottomright"></th>
</tr>
</table>
<? include("../includes/footer.php"); ?>