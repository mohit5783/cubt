`<?PHP include("includes/top-most.php");?>
<title>Manage Courses</title>
<?PHP 	
	$_SESSION['CurrentMenu']="Configuration Master";
	$_SESSION['CurrentSubMenu']="Courses";
?>
<?PHP include("includes/header.php");?>
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
		<h1>Manage Courses</h1>
	</div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner .......................... START -->
		<div id="content-table-inner">
			<!--  start table-content  -->
			<div id="table-content">
				<a href="Add-Courses.php"><div id="AddButton" class="md-trigger" data-modal="modal-13">Add New Course</div></a>
				<!--  start User-table ............................ -->
				<form id="mainform" action="">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-check"><a id="toggle-all" ></a></th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Degree</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Semster Name</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Course Prefix</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Course Number</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Course Name</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Course Description</a></th>
					<th class="table-header-options line-left"><a href="">Options</a></th>
				</tr>
				<?php
					$altrow=false;
					$newque="SELECT * FROM courses";
					$qu=mysqli_query($conn, $newque);
					while($rs=mysqli_fetch_array($qu))
					{
				?>
				<tr <?PHP if($altrow){echo "class='alternate-row'";} ?> >
					<td><input type="checkbox"/></td>
					<td><?=$rs['DegreeID']?></td>
					<td><?=$rs['SemesterID']?></td>
					<td><?=$rs['CoursePrefixID']?></td>
					<td><?=$rs['CourseNum']?></td>
					<td><?=$rs['CourseName']?></td>
					<td><?=$rs['CourseDesc']?></td>
					<td class="options-width">
					<a href="" title="Edit" class="icon-1 info-tooltip"></a>
					<a href="" title="Delete" class="icon-2 info-tooltip"></a>
					
					</td>
				</tr>
				<?php	
						$altrow=!$altrow;
					}
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
<?PHP include("includes/footer.php"); ?>