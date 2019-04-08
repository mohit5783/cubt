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

include("../includes/top-most.php");?>
<title>SSD || Send Message || Admin Area</title>
<!--  Session and Page Name for Navigator -->
<?
	$_SESSION['CurrentMenu']="Messages";
	$_SESSION['CurrentSubMenu']="Send-Messages";
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
<!--  End Script -->
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->
<div class="clear"></div>
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">
<div id="page-heading"><h1>Send Messages</h1></div>
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
			<div class="step-dark-left"><a href="">Send Message</a></div>
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
			<th valign="top">From:</th>
			<td><input id="from" name="from" type="text" class="inp-form" onchange="refreshmsgbx()" /></td\>
			<td>
				<span id="UserTypeNameSpanLeft" style="display:none;"></span>
				<span id="UserTypeNameSpan" style="display:none;"></span>
				<span id="UserTypeNameSpanRight" style="display:none;"></span>
			</td>
		</tr>
		<tr>
			<th valign="top">To:</th>
			<td><input id="to" name="tp" type="text" class="inp-form" onchange="refreshmsgbx()" /></td\>
			<td>
				<span id="UserTypeNameSpanLeft" style="display:none;"></span>
				<span id="UserTypeNameSpan" style="display:none;"></span>
				<span id="UserTypeNameSpanRight" style="display:none;"></span>
			</td>
		</tr>
		<tr>
			<th valign="top">Message Title:</th>
			<td><input id="msgttl" name="msgttl" type="text" class="inp-form" /></td\>
			<td>
				<span id="UserTypeNameSpanLeft" style="display:none;"></span>
				<span id="UserTypeNameSpan" style="display:none;"></span>
				<span id="UserTypeNameSpanRight" style="display:none;"></span>
			</td>
		</tr>
		<tr>
			<th valign="top">Message:</th>
			<td><textarea id="msgbody" name="msgbody" class="form-textarea" ></textarea></td\>
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