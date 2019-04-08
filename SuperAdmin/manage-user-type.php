<? include("../includes/top-most.php");?>
<title>Manage all User-Type</title>
<? 	
	$_SESSION['CurrentMenu']="Users";
	$_SESSION['CurrentSubMenu']="Manage-User-Type";
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
	<div id="page-heading">
		<h1>Manage Users Type</h1>
	</div>
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
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner .......................... START -->
		<div id="content-table-inner">
			<!--  start table-content  -->
			<div id="table-content">
				<!--  start User-table ............................ -->
				<form id="mainform" action="">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-check"><a id="toggle-all" ></a></th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">User Type ID</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">User Type Name</a></th>
					<th class="table-header-repeat line-left"><a href="">Created By</a></th>
					<th class="table-header-options line-left"><a href="">Options</a></th>
				</tr>
				<?php
				/*############### Putting all the UserType in the Array So that ################### 
				  ############### the calls to the database can be minimized.   ###################*/
					$newque="SELECT * FROM UserType";
					$qu=mysql_query($newque);
				/*############### altrow is for the alternative row class finder ################### */					
					$altrow=false;
					while($rs=mysql_fetch_array($qu))
					{
				?>
				<tr <? if($altrow){echo "class='alternate-row'";} ?> >
					<td><input type="checkbox"/></td>
					<td><?=$rs['UserTypeID']?></td>
					<td><?=$rs['UserTypeName']?></td>
					<td><?=$rs['CreatedBy']?></td>
					<td class="options-width">
					<a href="" title="Edit" class="icon-1 info-tooltip"></a>
					<a href="" title="Edit" class="icon-2 info-tooltip"></a>
					<a href="" title="Edit" class="icon-3 info-tooltip"></a>
					<a href="" title="Edit" class="icon-4 info-tooltip"></a>
					<a href="" title="Edit" class="icon-5 info-tooltip"></a>
					</td>
				</tr>
				<?php	
					}
					$altrow=!$altrow;
				?>
				</table>
				<!--  end User-table................................... --> 
				</form>
			</div>
			<!--  end content-table  -->
		
			<!--  start actions-box ............................................... -->
			<div id="actions-box">
				<a href="" class="action-slider"></a>
				<div id="actions-box-slider">
					<a href="" class="action-edit">Edit</a>
					<a href="" class="action-delete">Delete</a>
				</div>
				<div class="clear"></div>
			</div>
			<!-- end actions-box........... -->
			
			<!--  start paging..................................................... -->
			<table border="0" cellpadding="0" cellspacing="0" id="paging-table">
			<tr>
			<td>
				<a href="" class="page-far-left"></a>
				<a href="" class="page-left"></a>
				<div id="page-info">Page <strong>1</strong> / 15</div>
				<a href="" class="page-right"></a>
				<a href="" class="page-far-right"></a>
			</td>
			<td>
			<select  class="styledselect_pages">
				<option value="">Rows / Per Page</option>
				<option value="">10</option>
				<option value="">20</option>
				<option value="">30</option>
			</select>
			</td>
			</tr>
			</table>
			<!--  end paging................ -->
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