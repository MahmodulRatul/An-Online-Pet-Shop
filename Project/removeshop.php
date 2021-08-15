<?php
        include 'admin.php';
       require_once 'controllers/shopController.php';
		 $id=$_GET["id"];
		 $shop=getShop($id);
	?>

	
		 <div class="center">		
		<table class="table table-striped">
		<br><br>
			<thead>
				<th>Serial</th>
				<th>Shop Name</th>
				<th>Street Address</th>
				<th>City</th>
				<th>Email</th>
				<th>Contact Info </th>
				
			
			</thead>
			<tbody>
			<?php 
			    
					 echo "<tr><td>".$shop["id"]."</td>";
					 echo "<td>".$shop["sname"]."</td>";
					 echo "<td>".$shop["stad"]."</td>";
					 echo "<td>".$shop["city"]."</td>";
					 echo "<td>".$shop["email"]."</td>";
					 echo "<td>".$shop["num"]."</td>"; 
					
				
				 ?>
			</tbody>
			</table>
		   </div>
		


<html>
<head>
<title>Remove Shop</title>
      

</head>
<body>

          
        <form action="" method="post">
           	  <div class="center">	
		<table><center>
                
                   
					  <td><input type="hidden" name="id" value="<?php echo $shop["id"];?>">  
					 
                          
                </tr>
			<tr>
					   
						<td><input type="submit" name="remove_shop" value="Remove Shop" class="btn btn-danger"></td>
						<td><span style="float:right;"><a style="text-decoration:none" href="allshops.php" target="_self" >&nbsp Cancel</a> </span> </td>
				</tr>



        </table></center>
        </form>
       
</body><?php include 'admin_footer.php';?></body>
</html>
