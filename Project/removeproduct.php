<?php    
         include 'seller.php';
         require_once 'controllers/productController.php';
		 $id=$_GET["id"];
		 $product=getProduct($id);
	?>

	 <div class="center">	
		<table class="table table-striped">
		<br><br>
		<thead>
				<th>Serial</th>
				<th>Product Name</th>
				<th>Product Type</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Info</th>
	
				
			
				
			
			</thead>
			<tbody>
			<?php 
			    
					 echo "<tr><td>".$product["id"]."</td>";
					 echo "<td>".$product["pname"]."</td>";
					 echo "<td>".$product["type_id"]."</td>";
					 echo "<td>".$product["quantity"]."</td>";
					 echo "<td>".$product["price"]."</td>";
					 echo "<td>".$product["info"]."</td>";
					 
				 ?>
			</tr>
			
		

</tbody>
			</table>
		</div>

<html>

<body>
             
          <form action="" method="post">
           	  <div class="center">	
		<table><center>
					  <td><input type="hidden" name="id" value="<?php echo $product["id"];?>">  
					 
                          
                </tr>
			<tr>
					   
						<td><input type="submit" name="remove_product" value="Remove Product" class="btn btn-danger" ></td>
						<td><span style="float:right;"><a style="text-decoration:none" href="allproducts.php" target="_self" >&nbsp Cancel</a> </span> </td>
		</tr>




            </table></center>
        </form>
        
    
 

</body><?php include 'admin_footer.php';?>
</html>
