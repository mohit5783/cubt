<?php
ob_start();
session_start();
ob_end_clean();
require_once "Mail.php";
require_once('Mail/mime.php');

include("../../conn.php"); 

	if(!$_SESSION['logged_in'])
	{
		echo "<script language='javascript'> window.location='index.php'; </script>";
		exit;
	}
	$loginid=$_SESSION['log'];

$todayis=date("Y-m-d H:i:s");

$query="INSERT INTO User(UserTypeID, FullName, ICNo, SSDLoginID, SSDPwd, Email, Phone, CreatedBy, CreationDateTime, LastLoggedin) VALUES ('".$_POST['user_type']."','".$_POST['FullName']."','".$_POST['ICNo']."','".$_POST['SSDLoginID']."','".$_POST['password']."','".$_POST['email']."','".$_POST['MobNo']."','".$loginid."','".$todayis."','".$todayis."');";

if(mysql_query($query,$conn))
{

	$to = $_POST['email'];
	$subject = "Thank you ".$_POST['FullName']." for Registering with SSD";
	$header = "from: SSD Client <mail@mohitshrivastava.com> \r"."<br >";
	$header .= "Content-Type: text/html; charset=ISO-8859-1 \r"."<br >";
	$header .= "Return-Path: <mail@mohitshrivastava.com> \r"."<br >";
	$header .= "X-Priority: 1 (Highest) \r"."<br >";
	$header .= "X-MSMail-Priority: High \r"."<br >";
	$header .= "Importance: High \r"."<br >"; 
	$header .= "MIME-Version: 1.0 \r"."<br >";
	
	$message = "<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /></head>
<body>

<table width='50%' border='0' align='center' cellpadding='0' cellspacing='0' class='bg1'>
   <tr>
      <td align='center'>
         
         <table width='600' border='0' cellspacing='0' cellpadding='0'>
            <tr bgcolor='#999999'>
              <td align='left'><img src='http://www.mohitshrivastava.com/tst/Images/Logo.png' alt='Logo'></td>
            </tr>
            <tr>
               <td valign='top'>
                  <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                     <tr>
                        <td height='596' align='left' valign='top' class='mainbar'>
                           <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                             <tr>
                               <td width='50%'><img src='http://www.mohitshrivastava.com/tst/Images/Thankyou.jpg' alt='Thank you' width='298' height='304' /></td>
                               <td width='50%' valign='middle'><font face='Verdana' size='2'>Thank you ".$_POST['FullName']." for signing up with <strong>Custommedia Sdn. Bhd.</strong> [SSD].                                   A complete peace of mind for your SOFTEC Asia Confrence.</font>
                                 <blockquote> 
                               <p><strong><font face='Verdana' size='2'>For more details <img src='http://www.mohitshrivastava.com/tst/Images/read_more.gif' alt='Header' width='13' height='8' /></font></strong><br>
               </p>
                               <p><font face='Verdana' size='2'>Please visit Custommedia portal<br />
                               <a href='http://www.custommedia.com.my/'>http://www.custommedia.com.my</a></font></p>
                                 </blockquote>
                           <p><font face='Verdana' size='2'>We are confident that, with SOFTEC Asia you will find exact and timely solutions.  </font></p>
                           </td>
                             </tr>
                           </table>
               <p><strong><font face='Verdana' size='2'>Getting Started</font></strong>
                <img src='http://www.mohitshrivastava.com/tst/Images/read_more.gif' width='13' height='8' /></p>
                          <p><font face='Verdana' size='2'>As per primary information filled by you:</font></p>
                           <table width='430' border='1' cellpadding='5' cellspacing='5' class='bg1' style='border-collapse:collapse;'>
  <tr>
    <td width='185' bgcolor='#003366' class='texleft'><font color='#ffffff' face='Verdana'>Your Name:</font></td>
    <td width='210' valign='middle' bgcolor='#FFFFCC'><font color='#000000' face='Verdana' style='font-weight:bold'>".$_POST['FullName']."</font></td>
  </tr>
  <tr>
    <td bgcolor='#003366' class='texleft'><font color='#ffffff' face='Verdana'>E mail Id</font></td>
    <td bgcolor='#FFFFCC'><font color='#000000' face='Verdana' style='font-weight:bold'>".$_POST['email']."</font></td>
  </tr>
  <tr>
    <td bgcolor='#003366' class='texleft'><font color='#ffffff' face='Verdana'>Mobile Number</font></td>
    <td bgcolor='#FFFFCC'><font color='#000000' face='Verdana' style='font-weight:bold'>".$_POST['MobNo']."</font></td>
  </tr>
  <tr>
    <td bgcolor='#003366' class='texleft'><font color='#ffffff' face='Verdana'>User Name</font></td>
    <td bgcolor='#FFFFCC'><font color='#000000' face='Verdana' style='font-weight:bold'>".$_POST['SSDLoginID']."</font></td>
  </tr>
  <tr>
    <td bgcolor='#003366' class='texleft'><font color='#ffffff' face='Verdana'>Password</font></td>
    <td bgcolor='#FFFFCC'><font color='#000000' face='Verdana' style='font-weight:bold'>".$_POST['password']."</font></td>
  </tr>
                          </table>
             <br />
                          
                           <p><font face='Verdana' size='2'>A Custommedia Sdn. bhd. representative will be in touch with you for initial support or you can contact us at  <a href='mailto:help@custommedia.my'>help@custommedia.my</a> or <a href='mailto:support@custommedia.my'>support@custommedia.my</a></font></p>
                           <p><font face='Verdana' size='2'><strong>Sincerely</strong><br />
Sales team<br>
SSD <br>
A division of </font>Custommedia Sdn. Bhd.
                </td>
                     </tr>
                  </table>
               </td>
            </tr>
            <tr>
               <td valign='middle' align='left' height='61'>
<!--                  <p><font face='Verdana' size='1' color='#680606' style='font-weight:bold'>Call us at (Toll Free number + 91 Will be soon provided to you.</font></p> -->
              <p><font face='Verdana' size='1'>You have  received this mail because you just signed up with us.</font></p></td>
            </tr>
         </table>
         
      </td>
   </tr>
</table>
</body>
</html>";

	$from = "SSD <mail@mohitshrivastava.com>";
	$host = "smtp.gmail.com";
	$port = "587";
	$username1 = "mail@mohitshrivastava.com";
	$password1 = "mail@123";
	$crlf = chr(10);
	$mime = new Mail_mime(array('eol' => $crlf));
	$mime->setHTMLBody($message);
	$body = $mime->getMessageBody();
	$headers = array ('From' => $from,
	'To' => $to,
	'Subject' => $subject);
	$headers = $mime->headers($headers);
	$smtp = Mail::factory('smtp',
	array ('host' => $host,
	'port' => $port,
	'auth' => true,
	'username' => $username1,
	'password' => $password1));
	$mail = $smtp->send($to, $headers, $body );
//	$headers['To'] = 'mohit_5783@yahoo.com';
	$mail = $smtp->send('mohit_5783@yahoo.com', $headers,$body );
	
	//echo "<script language='Javascript'>location.href='';</script>";
}
else
{
	echo "Too Many Connections: There are many users on the website. Please try again later.";
}
?>
<? include("../includes/top-most.php");?>
<title>SSD || User Created Successfully || Admin Area</title>
<? 	
	$_SESSION['CurrentMenu']="Users";
	$_SESSION['CurrentSubMenu']="Create-User1";
?>
<? include("../includes/header.php");?>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->
 <div class="clear"></div>
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">
<div id="page-heading"><h1>New User Created</h1></div>
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
			<div class="step-no-off">1</div>
			<div class="step-light-left"><a href="">Add User Details</a></div>
			<div class="step-light-right">&nbsp;</div>
			<div class="step-no">2</div>
			<div class="step-dark-left">Preview</div>
			<div class="step-dark-round">&nbsp;</div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th colspan="2">A Welcome email has been sent to you on "<b><?=$_POST['email'] ?></b>".</th>
		</tr>
		<tr>
			<th>SSD Login ID</th>
			<td><?=$_POST['SSDLoginID'] ?></td>
			<td></td>
		</tr>
		<tr>
			<th>Your Password</th>
			<td><?=$_POST['password'] ?></td>
			<td></td>
		</tr>
		<tr>
			<th>Your Mobile No.</th>
			<td><?=$_POST['MobNo'] ?></td>
			<td></td>
		</tr>
		<tr>
			<th>Your IC Number</th>
			<td><?=$_POST['ICNo'] ?></td>
			<td></td>
		</tr>
		<tr>
			<?
				$usrtypid=$_POST['user_type'];
				$qu=mysql_query("SELECT * FROM UserType WHERE UserTypeID='$usrtypid'");
				$rs=mysql_fetch_row($qu);
				$UserTypeName=$rs[1];
			?>
			<td colspan="2"><b><?=$_POST['FullName'] ?></b> is Successfully Created as a <b><?=$UserTypeName ?></b>.</td>
		</tr>
		<tr>
			<th></th>
			<td><a href="add-user.php">Add More User</a></td>
			<td></td>
		</tr>
		</table>
	</td>
	<td>
		<!--  start related-activities -->
			<div id="related-activities">
				<!--  start related-act-top -->
				<div id="related-act-top">
					<img src="../images/forms/header_thank-you.jpg" width="277" height="350" alt="" />
				</div>
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

