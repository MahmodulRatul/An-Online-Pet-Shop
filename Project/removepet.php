<?php
         include 'seller.php';
         require_once 'controllers/petController.php';
		 $id=$_GET["id"];
		 $pet=getPet($id);
	?>

	  <div class="center">	
		<table class="table table-striped">
		<br><br>
		<thead>
				<th>Serial</th>
				<th>Pet Type</th>
				<th>Size</th>
				<th>Weight</th>
				<th>Price</th>
				<th>Info</th>
	
				
			
				
		</thead>
			<tbody> 
			<?php 
			    
					 echo "<tr><td>".$pet["id"]."</td>";
					 echo "<td>".$pet["ptype_id"]."</td>";
					 echo "<td>".$pet["size"]."</td>";
					 echo "<td>".$pet["weight"]."</td>";
					 echo "<td>".$pet["price"]."</td>";
					 echo "<td>".$pet["info"]."</td>";
					 
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
                   
					  <td><input type="hidden" name="id" value="<?php echo $pet["id"];?>">  
					 
                          
                </tr>
			<tr>
					   
						<td><input type="submit" name="remove_pet" value="Remove Pet" class="btn btn-danger"></td>
						<td><span style="float:right;"><a style="text-decoration:none" href="allproducts.php" target="_self" >&nbsp Cancel</a> </span> </td>
			</tr>




            </table></center>
        </form>
        
    
 

</body><?php include 'admin_footer.php';?>
</html>
