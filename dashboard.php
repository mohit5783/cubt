<?PHP  include("includes/top-most.php");?>
<title>CUBT || Dashboard</title>
<!--  Session and Page Name for Navigator -->
<?PHP  	
	$_SESSION['CurrentMenu']="DashBoard";
	$_SESSION['CurrentSubMenu']="DashBoard";
?>
<!--  End Session and Page Name for Navigator -->
<?PHP  include("includes/header.php");?>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->
<div class="clear"></div>
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">
<div id="page-heading"><h1>Dashboard</h1></div>
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
	<!--  start content-table-inner -->
	<div id="content-table-inner">
		<table border="0" width="100%">
			<tr valign="top">
				<td id="dashbox">
					<table border="0" width="100%">
						<tr>
							<td colspan="2" id="dashboxtitle">Total Students</td>
						</tr>
						<tr>
							<td width="50%" id="dashnumber" align="center" valign="middle">
								<?=((mysqli_query($conn,"SELECT count(*) from students;"))->fetch_row())[0];?>
							</td>
							<td width="50%" align="center" valign="middle">
								<i class="fa fa-users fa-4x fa-fw" aria-hidden="true"></i>
							</td>
						</tr>
					</table>
				</td>
				<td>&nbsp;</td>
				<td id="dashbox1">
					<table border="0" width="100%">
						<tr>
							<td colspan="2" id="dashboxtitle">Total Degrees/Courses</td>
						</tr>
						<tr>
							<td width="50%" id="dashnumber" align="center" valign="middle">
								1300
							</td>
							<td width="50%" align="center" valign="middle">
								<i class="fa fa-graduation-cap fa-4x"></i>
							</td>
						</tr>
					</table>
				</td>
				<td>&nbsp;</td>
				<td id="dashbox">
					<table border="0" width="100%">
						<tr>
							<td colspan="2" id="dashboxtitle">Total Instructors</td>
						</tr>
						<tr>
							<td width="50%" id="dashnumber" align="center" valign="middle">
								30
							</td>
							<td width="50%" align="center" valign="middle">
								<i class="fa fa-user-secret fa-4x"></i>
							</td>
						</tr>
					</table>
				</td>
				<td>&nbsp;</td>
				<td id="dashbox1">
					<table border="0" width="100%">
						<tr>
							<td colspan="2" id="dashboxtitle">Total Subjects</td>
						</tr>
						<tr>
							<td width="50%" id="dashnumber" align="center" valign="middle">
								3100
							</td>
							<td width="50%" align="center" valign="middle">
								<i class="fa fa-book fa-4x"></i>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table border="0" width="100%">
			<tr>
				<td width="75%">
					<canvas id="AdmissionChart"></canvas>
				</td>
				<td width=25%>
					<canvas id="PaymentDelaysChart"></canvas>
				</td>
			</tr>
		</table>
		
	</div>
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
<script type="text/javascript">
var ctx = document.getElementById("AdmissionChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
        datasets: [{
            label: 'Monthly Delays',
            data: [12, 19, 3, 5, 12, 23],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

var ctx1 = document.getElementById("PaymentDelaysChart");
var myChart1 = new Chart(ctx1, {
    type: 'pie',
    data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
        datasets: [{
            label: 'Monthly Payment Delays',
            data: [12, 19, 3, 5, 12, 23],
            backgroundColor: [
                'rgba(0, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(0, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(153, 102, 0, 0.6)',
                'rgba(0, 159, 64, 0.6)'
            ],
            borderColor: [
                'rgba(0,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(0, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 0, 1)',
                'rgba(0, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    }
});
</script>
<?PHP  include("includes/footer.php"); ?>