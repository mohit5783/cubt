<? include("../includes/top-most.php");?>
<title>Manage all Groups</title>
<?
	$_SESSION['CurrentMenu']="Group";
	$_SESSION['CurrentSubMenu']="Manage-Group-Details";
?>
<? include("../includes/header.php");?>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->
<div class="clear"></div>
<!-- start content-outer ............................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">
	<!--  start page-heading -->
	<div id="page-heading"><h1>Manage Group Details</h1></div>
	<!-- end page-heading -->
	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="../images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="../images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
	<script>
	function GroupNameChange(target)
	{
		window.location.href = "manage-group-details.php?ChangedGroupName=" + target.value;
	}
	</script>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner .......................... START -->
		<div id="content-table-inner">
			<!--  start table-content  -->
			<div id="table-content">
				<!--  start User-table ............................ -->
				<form id="mainform" action="">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 20px; ">
				<tr>
					<th class="table-header-repeat" style="height: 50px"><a href="">Group Name</a>
					<select id="CmbGrpNm" name="CmbGrpNm" onchange="GroupNameChange(this)" >
						<option value="0" selected="selected" }>NONE</option>
						<?
							$newque="SELECT GroupID, GroupName FROM GroupMaster";
							$qu=mysql_query($newque);
							while($rs=mysql_fetch_array($qu))
							{
						?>
							<option value="<?=$rs['GroupID']?>" <? if($_GET['ChangedGroupName']==$rs['GroupID']) { echo "selected='selected'"; } ?>><?=$rs['GroupName']?></option>
						<?
							}
						?>
					</select>
					</th>
					<?
						$newque="SELECT u.FullName as Facilitator, u1.FullName as Speaker, GroupName FROM GroupMaster, User u, User u1 WHERE GroupID='".$_GET['ChangedGroupName']."' AND GroupMaster.Facilitator=u.UserID AND  GroupMaster.Speaker=u1.UserID;";
						$qu=mysql_query($newque);
						$rs=mysql_fetch_row($qu);
						$GrpName=$rs[2];
					?>
					<th class="table-header-repeat"><a href="">Facilitator: <?=$rs[0]; ?> </a></th>
					<th class="table-header-repeat"><a href="">Speaker: <?=$rs[1]; ?> </a></th>
				</tr>
				<tr>
					<td>
						<table border="0" width="100%" cellpadding="0" cellspacing="0">
							<tr>
								<td style="padding: 10px;"><input type="radio" name="usertype" value="AllUser" /> &nbsp; &nbsp; All users</td>
							</tr>
							<tr>
								<td style="padding: 10px;"><input type="radio" name="usertype" value="SelectedUsers" /> &nbsp; &nbsp; Only Users not yet assigned any Group</td>
							</tr>
						</table>
						<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
							<tr>
								<th class="table-header-check"><a id="toggle-all" ></a></th>
								<th class="table-header-repeat line-left"><a href="">User ID</a></th>
								<th class="table-header-repeat line-left minwidth-1"><a href="">Full Name</a></th>
							</tr>
							<?php
								$newque="SELECT UserID, FullName FROM User";
								$qu=mysql_query($newque);
								$altrow=false;
								if($_GET['ChangedGroupName'])
								{
									while($rs=mysql_fetch_array($qu))
									{
							?>
							<tr <? if($altrow){echo "class='alternate-row'";} ?> >
								<td><input type="checkbox"/></td>
								<td><?=$rs['UserID']?></td>
								<td><?=$rs['FullName']?></td>
							</tr>
							<?php
									$altrow=!$altrow;
									}
								}
								else
								{
									echo "<tr><td colspan='3'>Please select the Group Name.</td></tr>";
								}
							?>
						</table>
					</td>
					<td align="center" valign="middle">
						<table border="0" width="100%" cellpadding="0" cellspacing="0">
							<tr>
								<td align="center" style="padding: 10px;"><input type="button" value="" class="form-add" /></td>
							</tr>
							<tr>
								<td align="center" style="padding: 10px;"><input type="button" value="" class="form-remove" /></td>
							</tr>
						</table>
					</td>
					<td>
						<table border="0" width="100%" cellpadding="0" cellspacing="0">
							<tr>
								<td style="padding: 10px;">All users in <?=$GrpName; ?> Group</td>
							</tr>
							<tr>
								<td style="padding: 10px;">&nbsp;</td>
							</tr>
						</table>
						<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
							<tr>
								<th class="table-header-check"><a id="toggle-all" ></a></th>
								<th class="table-header-repeat line-left"><a href="">User ID</a></th>
								<th class="table-header-repeat line-left minwidth-1"><a href="">Full Name</a></th>
							</tr>
							<?php
								$newque="SELECT g.UserID, u.FullName FROM GroupDetails g, User u WHERE u.UserID=g.UserID;";
								$qu=mysql_query($newque);
								$altrow=false;
								if(mysql_num_rows($qu) > 0)
								{
									while($rs=mysql_fetch_array($qu))
									{
							?>
							<tr <? if($altrow){echo "class='alternate-row'";} ?> >
								<td><input type="checkbox"/></td>
								<td><?=$rs['UserID']?></td>
								<td><?=$rs['FullName']?></td>
							</tr>
							<?php
										$altrow=!$altrow;
									}
								}
								else
								{
									echo "<tr><td colspan='3'>There are no users in this Group</td></tr>";
								}
							?>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="right" style="padding: 10px;"><input type="button" value="" class="form-save" /></td>
				</tr>
				</table>
				<!--  end User-table................................... -->
				</form>
			</div>
			<!--  end content-table  -->
		</div>
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