<?
include("../../conn.php");
ob_start();
session_start();
ob_end_clean();
if(!$_SESSION['logged_in'])
{
	echo "<script language='javascript'> window.location='index.php'; </script>";
	exit;
}
$mssg="";
$mssgCls="";
if(isset($_POST['btnSumbit'])) 
{
	if($_POST['UserTypeName']=="")
	{
		$mssgCls="warning";
		$mssg="User Type Name is a mandatory field. You cannot left it blank.";
	}
	else
	{
		$loginid=$_SESSION['log'];
		$todayis=date("Y-m-d H:i:s");
		$query="INSERT INTO UserType(UserTypeName, CreatedBy, CreationDateTime) VALUES ('".$_POST['UserTypeName']."','".$loginid."','".$todayis."');";
		if(mysql_query($query))
		{
			$mssgCls="success";
			$mssg="<b>".$_POST['UserTypeName']."</b> user type created Successfully!!!";
		}
		else
		{
			$mssgCls="error";
			$mssg=$_POST['UserTypeName']." user type <b>NOT</b> created. Please Try again!!!";
		}
	}
}
include("../includes/top-most.php");?>
<title>SSD || Create New User Type || Admin Area</title>
<!--  Session and Page Name for Navigator -->
<? 	
	$_SESSION['CurrentMenu']="Users";
	$_SESSION['CurrentSubMenu']="Create-User-Type";
?>
<!--  End Session and Page Name for Navigator -->
<style type="text/css">
.info, .success, .warning, .error, .validation {
	border: 1px solid;
	margin: 10px 0px;
	padding:15px 10px 15px 50px;
	background-repeat: no-repeat;
	background-position: 10px center;
}
.info {
	color: #00529B;
	background-color: #BDE5F8;
	background-image: url('../images/forms/info.png');
}
.success {
	color: #4F8A10;
	background-color: #DFF2BF;
	background-image:url('../images/forms/success.png');
}
.warning {
	color: #9F6000;
	background-color: #FEEFB3;
	background-image: url('../images/forms/warning.png');
}
.error {
	color: #D8000C;
	background-color: #FFBABA;
	background-image: url('../images/forms/error.png');
}
</style>
<? include("../includes/header.php");?>
<script language="JavaScript" type="text/javascript">
var validvar="JustLoaded";
$(document).ready(function()
{
	validvar="JustLoaded";
	$("input").keypress( function(e) {
		if (e.which==32 || e.which==39){
			return false;
		}
	});

	$("#UserTypeName").blur(function()
	{
		$("#UserTypeNameSpanLeft").removeClass().addClass('bubble-left').fadeTo(200,1);
		$("#UserTypeNameSpan").removeClass().addClass('bubble-inner').text('User Type Name availablility. Checking..').fadeIn(1000);
		$("#UserTypeNameSpanRight").removeClass().addClass('bubble-right').fadeTo(200,1);
		$.post("usertypeavailable.php",{ UserTypeName:$(this).val() } ,function(data)
		{
		   validvar="Not valid";
		  if(data=='no')
		  {
			$("#UserTypeNameSpanLeft").removeClass().addClass('error-left');
			$("#UserTypeNameSpan").fadeTo(200,0.1,function()
			{ 
			  $(this).html('This User Type Name Already exists.').addClass('error-inner').fadeTo(900,1);
			});		
			$("#UserTypeNameSpanRight").hide();
		  }
		  else
		  {
		    validvar="valid";
			$("#UserTypeNameSpanLeft").removeClass().addClass('bubble-left').fadeTo(200,1);
			$("#UserTypeNameSpan").fadeTo(200,0.1,function()
			{ 
			  $(this).html('User Type Name available to register.').addClass('bubble-inner').fadeTo(900,1);	
			});
			$("#UserTypeNameSpanRight").removeClass().addClass('bubble-right').fadeTo(200,1);
		  }
		});
	});
});

function validateForm()
{
	if (validvar=="Not valid")
	{
		$("#msgbx").removeClass().addClass('error').fadeTo(200,1);
		
		$("#msgbx").fadeTo(200,0.1,function()
		{ 
			$(this).html('This User Type Name Already exists. Please Try again with some variation.').fadeTo(900,1);	
		});
		$('#tbldata').attr({
			height: '40px'
		});
		return false;
	}
}

function refreshmsgbx()
{
	$("#msgbx").removeClass();

	$("#msgbx").fadeTo(200,0.1,function()
	{ 
		$(this).html('').fadeTo(900,1);	
	});
	$('#tbldata').attr({
		height: '10px'
	});
}
//input type ke change event par niche wala message box gayab karna hai ... jisse thoda live lage.

</script>
<!--  End Script -->
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->
<div class="clear"></div>
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">
<div id="page-heading"><h1>Create New User</h1></div>
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
			<div class="step-dark-left"><a href="">Add User Type</a></div>
			<div class="step-dark-right">&nbsp;</div>
			<div class="step-no-off">2</div>
			<div class="step-light-left">Preview</div>
			<div class="step-light-round">&nbsp;</div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
    <form id="usertypeadd" name="usertypeadd" method="post" action="" onsubmit="return validateForm()"  >
	<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">User Type Name:</th>
			<td><input id="UserTypeName" name="UserTypeName" type="text" class="inp-form" onchange="refreshmsgbx()" /></td\>
			<td>
				<span id="UserTypeNameSpanLeft" style="display:none;"></span>
				<span id="UserTypeNameSpan" style="display:none;"></span>
				<span id="UserTypeNameSpanRight" style="display:none;"></span>
			</td>
		</tr>
		<tr>
<!--			<th>&nbsp;</th> -->
			<td id="tbldata" colspan="3" align="center" height="<? if($mssg!="") {echo '40';} else {echo '2';} ?>"><span id="msgbx" name="msgbx" class="<?=$mssgCls; ?>" style="<? if($mssg=='') {echo 'display:none;';} ?>"><?=$mssg; ?></span></td>
<!--			<td></td> -->
		</tr>
        <tr>
            <th>&nbsp;</th>
            <td valign="top">
                <input type="submit" value="" id="btnSumbit" name="btnSumbit" class="form-submit" />
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
					<h5>Create User</h5>
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
					<h5>Delete User-Type</h5>
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
					<h5>Manage User-Type</h5>
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