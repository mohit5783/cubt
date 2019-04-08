<? include("../includes/top-most.php");?>
<title>Add Products</title>
<? 	
	$_SESSION['CurrentMenu']="Products";
	$_SESSION['CurrentSubMenu']="Add-Products";
?>
<? include("../includes/header.php");
include("../../conn.php");
?>

<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->
 
 <div class="clear"></div>
 
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>Add product</h1></div>


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

if(isset($_POST['submit']))
{
	$productcode = $_POST['productcode'];
    $productname = $_POST['productname'];
    $category    = $_POST['category'];
    $brandname   = $_POST['brandname'];
    $weight      = $_POST['weight'];
    $price       = $_POST['price'];
    $fulldescr   = $_POST['fulldescr'];
    $metadsr     = $_POST['metadsr'];
    $metakeyword = $_POST['metakeyword'];
    $selleraddress = $_POST['selleraddress'];
    $properties    = $_POST['properties'];
    $characteristics = $_POST['characteristics'];
    $instruction   = $_POST['instruction'];


    mysql_query("INSERT INTO tbl_products_services(product_code,category_id, brand_name,product,weight,
    	list_price,fulldescr,meta_description,meta_keywords,seller_address, properties, 
    	characteristics,instruction) VALUES(
    	'".$productcode."','".$category."','".$brandname."','".$productname."','".$weight."',
    	'".$price."','".$fulldescr."','".$metadsr."','".$metakeyword."','".$selleraddress."',
    	'".$properties."','".$characteristics."','".$instruction."')");

       $count =mysql_insert_id();
       $file = $_FILES["file"]["name"];
       move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/" .$_FILES["file"]["name"]);
      mysql_query("insert into  tbl_product_images(product_id,image_path,description,active)VALUES('$count','$file','$fulldescr','Y')");
     
}

?>
		<form action="" method="post" enctype="multipart/form-data">
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">Product code:</th>
			<td><input type="text" class="inp-form" name="productcode"/></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Product name:</th>
			<td><input type="text" class="inp-form" name="productname"/></td>
			<td>
<!--			<div class="error-left"></div>
			<div class="error-inner">This field is required.</div>
-->			</td>
		</tr>
		<tr>
		<th valign="top">Category:</th>
		<td>	
		<select  class="styledselect_form_1" name="category">
			<?php  $m = mysql_query("select * from tbl_categories");
                   while($n = mysql_fetch_array($m))
                   {
			?>
			<option value="<?php echo $n['category_id'];?>"><?php echo $n['category'];?></option>
			<?php } ?>
		</select>
		</td>
		<td></td>
		</tr>
		<tr>
		<th valign="top">Brand Name</th>
		<td>	
			<input type="text" class="inp-form" name="brandname"/>
		</td>
		<td></td>
		</tr> 
		<tr>
			<th valign="top">Weight:</th>
			<td><input type="text" class="inp-form" name="weight"/></td>
			
		</tr>
			<tr>
			<th valign="top">Price:</th>
			<td><input type="text" class="inp-form" name="price" /></td>
		
		</tr>
	
	<tr>
		<th valign="top">Full Description:</th>
		<td><textarea rows="" cols="" name="fulldescr" class="form-textarea"></textarea></td>
		
	</tr>
	<tr>
		<th valign="top">Meta description:</th>
		<td><textarea rows="" cols="" name="metadsr" class="form-textarea"></textarea></td>
		
	</tr>
	<tr>
		<th valign="top">Meta keywords:</th>
		<td><textarea rows="" cols="" name="metakeyword" class="form-textarea"></textarea></td>
			</tr>
	<tr>
		<th valign="top">Seller Address:</th>
		<td><textarea rows="" cols="" name="selleraddress" class="form-textarea"></textarea></td>
		
	</tr>
	<tr>
		<th valign="top">Properties :</th>
		<td><textarea rows="" cols="" name="properties" class="form-textarea"></textarea></td>
			</tr>

	<tr>
		<tr>
		<th valign="top">Characteristics:</th>
		<td><textarea rows="" cols="" name="characteristics" class="form-textarea"></textarea></td>
			</tr>

	<tr><tr>
		<th valign="top">Instruction:</th>
		<td><textarea rows="" cols="" name="instruction" class="form-textarea"></textarea></td>
			</tr>
<tr>
	<th>Image:</th>
	<td><input type="file" name="file" class="file_1" /></td>
	<td><div class="bubble-left"></div>
	<div class="bubble-inner">JPEG, GIF 5MB max per image</div>
	<div class="bubble-right"></div></td>
	</tr>
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" name="submit" value="" class="form-submit" />
				</td>
		<td></td>
	</tr>
	</table>
</form>
	<!-- end id-form  -->

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
				
				<div class="left"><a href=""><img src="../images/forms/icon_minus.gif" width="21" height="21" alt="" /></a></div>
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
				
				<div class="left"><a href=""><img src="../images/forms/icon_edit.gif" width="21" height="21" alt="" /></a></div>
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
