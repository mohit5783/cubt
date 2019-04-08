<? include("../includes/top-most.php");?>
<title>Create New Trainings</title>
<? include("../includes/header.php");?>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->
 
 <div class="clear"></div>
 
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>Create New Trainings</h1></div>


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
			<div class="step-dark-left"><a href="">Add product details</a></div>
			<div class="step-dark-right">&nbsp;</div>
			<div class="step-no-off">2</div>
			<div class="step-light-left">Select related products</div>
			<div class="step-light-right">&nbsp;</div>
			<div class="step-no-off">3</div>
			<div class="step-light-left">Preview</div>
			<div class="step-light-round">&nbsp;</div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
		<?php 
		include('../config/conn.php');
        echo "hello";
       if(isset($_POST['submit']))
       {
    //   $file = $_FILES["file"]["name"];
      // move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/" . $_FILES["file"]["name"]); -->
       
       echo $image1 = $_FILES["imagefile1"]["name"];
       echo $image2 = $_FILES["imagefile2"]["name"];
       echo $image3 = $_FILES["imagefile3"]["name"];
       $image4 = $_FILES["imagefile4"]["name"];
       $image5 = $_FILES["imagefile5"]["name"];
       $image6 = $_FILES["imagefile6"]["name"];
       $image7 = $_FILES["imagefile7"]["name"];
       
       $product_add_1 = $_FILES["product_add_1"]["name"];
       $product_add_2 = $_FILES["product_add_2"]["name"];
       $product_add_3 = $_FILES["product_add_3"]["name"];
       $product_add_4 = $_FILES["product_add_4"]["name"];
       $product_add_5 = $_FILES["product_add_5"]["name"];


       move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/" . $_FILES["imagefile1"]["name"]);
       move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/" . $_FILES["imagefile2"]["name"]);
       move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/" . $_FILES["imagefile"]["name"]);
       move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/" . $_FILES["imagefile"]["name"]);
       move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/" . $_FILES["imagefile"]["name"]);
       move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/" . $_FILES["imagefile"]["name"]);
       move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/" . $_FILES["imagefile"]["name"]);
       move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/" . $_FILES["product_add_1"]["name"]);
       move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/" . $_FILES["product_add_2"]["name"]);
       move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/" . $_FILES["product_add_3"]["name"]);
       move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/" . $_FILES["product_add_4"]["name"]);
       move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/" . $_FILES["product_add_5"]["name"]);


          if($image1 == "")
          {
          echo	$image1 = $_POST['image1_hidden'];
          }
            if($image2 == "")
          {
          	$image2 = $_POST['image2_hidden'];
          }
            if($image3 == "")
          {
          	$image3 = $_POST['image3_hidden'];
          }
            if($image4 == "")
          {
          	$image4 = $_POST['image4_hidden'];
          }
            if($image5 == "")
          {
          	$image5 = $_POST['image5_hidden'];
          }
            if($image6 == "")
          {
          	$image6 = $_POST['image6_hidden'];
          }
            if($image7 == "")
          {
          	$image7 = $_POST['image7_hidden'];
          }
          if($product_add_1 == "")
          {
          	$product_add_1 = $_POST['product_add_1_hidden'];
          }
           if($product_add_2 == "")
          {
          	$product_add_2 = $_POST['product_add_2_hidden'];
          }
           if($product_add_3 == "")
          {
          	$product_add_3 = $_POST['product_add_3_hidden'];
          }
           if($product_add_4 == "")
          {
          	$product_add_4 = $_POST['product_add_4_hidden'];
          }
           if($product_add_5 == "")
          {
          	$product_add_5 = $_POST['product_add_5_hidden'];
          }
          
           $metadsr1 = $_POST['metadsr1'];
           $metadsr2 = $_POST['metadsr2'];
           $metadsr3 = $_POST['metadsr3'];
           $metadsr4 = $_POST['metadsr4'];
           $metadsr5 = $_POST['metadsr5'];


mysql_query("UPDATE advertise SET home_image_1 = '".$image1."',home_image_2='".$image2."',home_image_3='".$image3."',home_image_4='".$image4."',
home_image_5='".$image5."',home_image_6='".$image6."',home_image_7='".$image7."',product_add_1 = '".$product_add_1."',product_add_2='".$product_add_2."',product_add_3='".$product_add_3."'
,product_add_4 = '".$product_add_4."',product_add_5 = '".$product_add_5."',home_image_1_des = '".$metadsr1."'
, home_image_2_des = '".$metadsr2."',home_image_3_des = '".$metadsr3."',home_image_4_des = '".$metadsr4."',home_image_5_des = '".$metadsr5."'");
         


       

       }
       
       $sql=mysql_query("SELECT * FROM advertise");
       $data=mysql_fetch_array($sql);
        ?>
	<form action="" method="post" enctype="multipart/form-data">
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">Header Image 1:</th>
			<td><input type="file" class="file_1" name="imagefile1"/>
				<td><img src="../uploads/<?php echo $data['home_image_1'];?>" width="50px" height="50px"></td>
								  <input type="hidden" name="image1_hidden" value="<?php echo$data['home_image_1']?>">
			</td>
			
		</tr>
		<tr>
			<th valign="top">Header Image 2:</th>
			<td><input type="file" class="file_1" name="imagefile2"/>
				<td><img src="../uploads/<?php echo $data['home_image_2'];?>" width="50px" height="50px"></td>
								  <input type="hidden" name="image2_hidden" value="<?php echo$data['home_image_2']?>">
			</td>
			
		</tr>
		<tr>
			<th valign="top">Header Image 3:</th>
			<td><input type="file" class="file_1" name="imagefile3"/>
				<td><img src="../uploads/<?php echo $data['home_image_3'];?>" width="50px" height="50px"></td>
								  <input type="hidden" name="image3_hidden" value="<?php echo$data['home_image_3']?>">
			</td>
			
		</tr>
		<tr>
			<th valign="top">Header Image 4:</th>
			<td><input type="file" class="file_1" name="imagefile4"/>
				<td><img src="../uploads/<?php echo $data['home_image_4'];?>" width="50px" height="50px"></td>
								  <input type="hidden" name="image4_hidden" value="<?php echo$data['home_image_4']?>">
			</td>
			
		</tr>
		<tr>
			<th valign="top">Header Image 5:</th>
			<td><input type="file" class="file_1" name="imagefile5"/>
				<td><img src="../uploads/<?php echo $data['home_image_5'];?>" width="50px" height="50px"></td>
								  <input type="hidden" name="image5_hidden" value="<?php echo$data['home_image_5']?>">
			</td>
			
		</tr>
	      <tr>
			<th valign="top">Header Image 6:</th>
			<td><input type="file" class="file_1" name="imagefile6"/>
				<td><img src="../uploads/<?php echo $data['home_image_6'];?>" width="50px" height="50px"></td>
								  <input type="hidden" name="image6_hidden" value="<?php echo$data['home_image_6']?>">
			</td>
			
		</tr>
	  <tr>
			<th valign="top">Header Image 7:</th>
			<td><input type="file" class="file_1" name="imagefile7"/>
				<td><img src="../uploads/<?php echo $data['home_image_7'];?>" width="50px" height="50px"></td>
								  <input type="hidden" name="image7_hidden" value="<?php echo$data['home_image_7']?>">
			</td>
			
		</tr>

		<tr>
			<th valign="top">Product-detail image 1:</th>
			<td><input type="file" class="file_1" name="product_add_1"/></td>
				<td><img src="../uploads/<?php echo $data['product_add_1'];?>" width="50px" height="50px"></td>
								  <input type="hidden" name="product_add_1_hidden" value="<?php echo $data['product_add_1']?>">
			<td>
		</tr>
			<tr>
			<th valign="top">Product-detail image 2:</th>
			<td><input type="file" class="file_1" name="product_add_2"/></td>
				<td><img src="../uploads/<?php echo $data['product_add_2'];?>" width="50px" height="50px"></td>
								  <input type="hidden" name="product_add_2_hidden" value="<?php echo $data['product_add_2']?>">
			<td>
		</tr>
			<tr>
			<th valign="top">Product-detail image 3:</th>
			<td><input type="file" class="file_1" name="product_add_3"/></td>
				<td><img src="../uploads/<?php echo $data['product_add_3'];?>" width="50px" height="50px"></td>
								  <input type="hidden" name="product_add_3_hidden" value="<?php echo $data['product_add_3']?>">
			<td>
		</tr>
			<tr>
			<th valign="top">Product-detail image 4:</th>
			<td><input type="file" class="file_1" name="product_add_4"/></td>
				<td><img src="../uploads/<?php echo $data['product_add_4'];?>" width="50px" height="50px"></td>
								  <input type="hidden" name="product_add_4_hidden" value="<?php echo $data['product_add_4']?>">
			<td>
		</tr>
			<tr>
			<th valign="top">Product-detail image 5:</th>
			<td><input type="file" class="file_1" name="product_add_5"/></td>
				<td><img src="../uploads/<?php echo $data['product_add_5'];?>" width="50px" height="50px"></td>
								  <input type="hidden" name="product_add_5_hidden" value="<?php echo $data['product_add_5']?>">
			<td>
		</tr>
		
		<tr>
		<tr>
		<th valign="top">Header image description 1</th>
		<td><textarea rows="" cols="" name="metadsr1" class="form-textarea"><?php echo $data['home_image_1_des']; ?></textarea></td>
		</tr>
		<tr>
		<th valign="top">Header image description 2</th>
		<td><textarea rows="" cols="" name="metadsr2" class="form-textarea"><?php echo $data['home_image_2_des']; ?></textarea></td>
		</tr>
		<tr>
		<th valign="top">Header image description 3</th>
		<td><textarea rows="" cols="" name="metadsr3" class="form-textarea"><?php echo $data['home_image_3_des']; ?></textarea></td>
		</tr>
		<tr>
		<th valign="top">Header image description 4</th>
		<td><textarea rows="" cols="" name="metadsr4" class="form-textarea"><?php echo $data['home_image_4_des']; ?></textarea></td>
		</tr>
		<tr>
		<th valign="top">Header image description 5</th>
		<td><textarea rows="" cols="" name="metadsr5" class="form-textarea"><?php echo $data['home_image_5_des']; ?></textarea></td>
		</tr>
		<td>
		
	<tr>
<td valign="top">
			<input type="submit" name="submit" value="" class="form-submit" />
				</td>
			</td>
	</tr>
	</table>
</form>

	</td>
	<td>

	<!--  start related-activities -->
	<div id="related-activities">
		
		<!--  start related-act-top -->
		<div id="related-act-top">
		<img src="images/forms/header_related_act.gif" width="271" height="43" alt="" />
		</div>
		<!-- end related-act-top -->
		
		<!--  start related-act-bottom -->
		<div id="related-act-bottom">
		
			<!--  start related-act-inner -->
			<div id="related-act-inner">
			
				<div class="left"><a href=""><img src="images/forms/icon_plus.gif" width="21" height="21" alt="" /></a></div>
				<div class="right">
					<h5>Add another product</h5>
					Lorem ipsum dolor sit amet consectetur
					adipisicing elitsed do eiusmod tempor.
					<ul class="greyarrow">
						<li><a href="">Click here to visit</a></li> 
						<li><a href="">Click here to visit</a> </li>
					</ul>
				</div>
				
				<div class="clear"></div>
				<div class="lines-dotted-short"></div>
				
				<div class="left"><a href=""><img src="images/forms/icon_minus.gif" width="21" height="21" alt="" /></a></div>
				<div class="right">
					<h5>Delete products</h5>
					Lorem ipsum dolor sit amet consectetur
					adipisicing elitsed do eiusmod tempor.
					<ul class="greyarrow">
						<li><a href="">Click here to visit</a></li> 
						<li><a href="">Click here to visit</a> </li>
					</ul>
				</div>
				
				<div class="clear"></div>
				<div class="lines-dotted-short"></div>
				
				<div class="left"><a href=""><img src="images/forms/icon_edit.gif" width="21" height="21" alt="" /></a></div>
				<div class="right">
					<h5>Edit categories</h5>
					Lorem ipsum dolor sit amet consectetur
					adipisicing elitsed do eiusmod tempor.
					<ul class="greyarrow">
						<li><a href="">Click here to visit</a></li> 
						<li><a href="">Click here to visit</a> </li>
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
 
<div class="clear"></div>
 

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

<?
include("../includes/footer.php");
?>

