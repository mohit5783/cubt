<? include("../includes/top-most.php");?>
<title>SSD || Create New User || Admin Area</title>
<!--  Session and Page Name for Navigator -->
<? 	
	$_SESSION['CurrentMenu']="Users";
	$_SESSION['CurrentSubMenu']="Create-User";
?>
<!--  End Session and Page Name for Navigator -->
<? include("../includes/header.php");?>
<script language="JavaScript" type="text/javascript">
var vfnm, vmobno, veml, vicno, vpwd, vcpwd;
vfnm=0;
vmobno=0;
veml=0;
vicno=0;
vpwd=0;
vcpwd=0;

var v1;
v1="";

$(document).ready(function()
{
	$("#SSDLoginID").blur(function()
	{
		$("#SSDLgnIDSpanLeft").removeClass().addClass('bubble-left').fadeTo(200,1);
		$("#SSDLgnIDSpan").removeClass().addClass('bubble-inner').text('Login availablility. Checking..').fadeIn(1000);
		$("#SSDLgnIDSpanRight").removeClass().addClass('bubble-right').fadeTo(200,1);
		$.post("useravailable.php",{ SSDLoginID:$(this).val() } ,function(data)
		{
		  if(data=='no')
		  {
			v1="InValid";
			$("#SSDLgnIDSpanLeft").removeClass().addClass('error-left');
			$("#SSDLgnIDSpan").fadeTo(200,0.1,function()
			{ 
			  $(this).html('This SSD Login ID Already exists.').addClass('error-inner').fadeTo(900,1);
			});		
			$("#SSDLgnIDSpanRight").hide();
		  }
		  else
		  {
			v1="Valid";
			$("#SSDLgnIDSpanLeft").removeClass().addClass('bubble-left').fadeTo(200,1);
			$("#SSDLgnIDSpan").fadeTo(200,0.1,function()
			{ 
			  $(this).html('SSD Login ID available to register.').addClass('bubble-inner').fadeTo(900,1);	
			});
			$("#SSDLgnIDSpanRight").removeClass().addClass('bubble-right').fadeTo(200,1);
		  }
		});
	});
});

function validateForm()
{
	if(vfnm==1 && vmobno==1 && veml==1 && vicno==1 && vpwd==1 && vcpwd==1 && v1=="Valid")
	{
		return true;
	}
	else
	{
		alert("Please check the form carefully. There are few mistake/s in the form please fill it correctly and submit again. Thanks!!!");
		return false;
	}
}

function validateFullName()
{
	var x=document.forms["adduser"]["FullName"].value;
	document.getElementById("FullNameSpan").style.display="None";
	vfnm=0;
	if (x=="")
	{
		alert("Please Enter your Full Name");
		return false;
	}
	else
	{
		vfnm=1;
		document.getElementById("FullNameSpan").style.display="";
	}
}

function validateMobile()
{
	var x=document.forms["adduser"]["MobNo"].value;
	document.getElementById("MobNoSpan").style.display="None";
	vmobno=0;
	if (x=="")
	{
		return true;
	}
	else if (x.length<10 || x.length>=12)
	{
		alert("Not a valid Mobile Number");
		return false;
	}
	else
	{
		vmobno=1;
		document.getElementById("MobNoSpan").style.display="";
	}
}

function validateEmail()
{
	var x=document.forms["adduser"]["email"].value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	document.getElementById("emailspan").style.display="None";
	veml=0;
	if (x=="")
	{
		return true;
	}
	else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	{
		alert("Not a valid e-mail address");
		return false;
	}
	else
	{
		veml=1;
		document.getElementById("emailspan").style.display="";
	}
}
function validateICNo()
{
	var x=document.forms["adduser"]["ICNo"].value;
	document.getElementById("ICNoSpan").style.display="None";
	vicno=0;
	if (x=="")
	{
		return true;
	}
	else if (x.length<=10)
	{
		alert("Not a valid IC Number.");
		return false;
	}
	else
	{
		vicno=1;
		document.getElementById("ICNoSpan").style.display="";
	}
}

function validatePwd()
{
	var x=document.forms["adduser"]["password"].value;
	document.getElementById("pwd").style.display="";
	vpwd=0;
	if (x.length<=6)
	{
		alert("Password must be atleast 6 digit.");
		return false;
	}
	else
	{
		vpwd=1;
		document.getElementById("pwd").style.display="None";
	}
}

function validateCPwd()
{
	var x=document.forms["adduser"]["cpassword"].value;
	var y=document.forms["adduser"]["password"].value;
	document.getElementById("cpwd").style.display="";
	vcpwd=0;
	if (x!=y)
	{
		alert("Password and Confirm Password should exactly match. Please try again.");
		document.forms["adduser"]["cpassword"].value="";
		document.forms["adduser"]["password"].value="";
		document.forms["adduser"]["password"].setFocus();
		return false;
	}
	else
	{
		vcpwd=1;
		document.getElementById("cpwd").style.display="None";
	}
}

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
			<div class="step-dark-left"><a href="">Add User Details</a></div>
			<div class="step-dark-right">&nbsp;</div>
			<div class="step-no-off">2</div>
			<div class="step-light-left">Preview</div>
			<div class="step-light-round">&nbsp;</div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
        <form id="adduser" name="adduser" method="post" onsubmit="return validateForm();" action="process-add-user.php" autocomplete="on">
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">SSD Login ID:</th>
			<td><input id="SSDLoginID" name="SSDLoginID" type="text" class="inp-form" /></td>
			<td>
				<span id="SSDLgnIDSpanLeft" style="display:none;"></span>
				<span id="SSDLgnIDSpan" style="display:none;"></span>
				<span id="SSDLgnIDSpanRight" style="display:none;"></span>
			</td>
		</tr>
		<tr>
			<th valign="top">Password:</th>
			<td><input id="password" name="password" type="password" class="inp-form" onblur="return validatePwd()" /></td>
			<td>
				<span id="pwd" style="display:none;">
					<div class="error-left"></div>
					<div class="error-inner">Password must be at-least 6 digit.</div>
				</span>
			</td>
		</tr>
		<tr>
			<th valign="top">Confirm Password:</th>
			<td><input id="cpassword" name="cpassword" type="password" class="inp-form" onblur="return validateCPwd()" /></td>
			<td>
				<span id="cpwd" style="display:none;">
					<div class="error-left"></div>
					<div class="error-inner">Confirm Password must match with the password.</div>
				</span>
			</td>
		</tr>
		<tr>
		<th valign="top">User Type:</th>
		<td>	
		<select id="user_type" name="user_type" class="styledselect_form_1">
        <?php
			$newque="SELECT * FROM UserType";
            $qu=mysql_query($newque);
            while($rs=mysql_fetch_array($qu))
            {
        ?>
			<option value="<?=$rs['UserTypeID']?>"><?=$rs['UserTypeName']?></option>
     	<?php	
            }
        ?>
		</select>
		</td>
		<td></td>
		</tr>
		<tr>
			<th valign="top">Full Name:</th>
			<td><input id="FullName" name="FullName" type="text" class="inp-form" onblur="return validateFullName()" /></td>
			<td>
				<span id="FullNameSpan" style="display:none;">
					<div class="bubble-left"></div> 
					<div class="bubble-inner">You have a pretty good name.</div>
					<div class="bubble-right"></div>
				</span>
			</td>
		</tr>
        <tr>
            <th valign="top">Mobile No.:</th>
            <td><input id="MobNo" name="MobNo" type="text" class="inp-form" onblur="return validateMobile()"  /></td>
            <td>
				<span id="MobNoSpan" style="display:none;">
					<div class="bubble-left"></div> 
					<div class="bubble-inner">Thanks for your mobile number.</div>
					<div class="bubble-right"></div>
				</span>
			</td>
        </tr>
        <tr>
			<th>Email ID:</th>
			<td><input id="email" name="email" type="text" class="inp-form" onblur="return validateEmail()" /></td>
			<td>
				<span id="emailspan" style="display:none;">
					<div class="bubble-left"></div> 
					<div class="bubble-inner">Now we know how to contact you.</div>
					<div class="bubble-right"></div>
				</span>
			</td>
        </tr>
		<tr>
			<th>IC No.:</th>
			<td><input id="ICNo" name="ICNo" type="text" class="inp-form" onblur="return validateICNo()" /></td>
			<td>
				<span id="ICNoSpan" style="display:none;">
					<div class="bubble-left"></div> 
					<div class="bubble-inner">Thanks for the identification.</div>
					<div class="bubble-right"></div>
				</span>
			</td>
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