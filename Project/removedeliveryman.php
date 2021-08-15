<?php
         include 'admin.php';
         require_once 'controllers/deliverymanController.php';
		 $id=$_GET["id"];
		 $deliveryman=getDeliveryman($id);
	?>

	  <div class="center">	
		<table class="table table-striped">
		<br><br>
		<thead>
				<th>Serial</th>
				<th>Frist Name</th>
				<th>Last Name</th>
				<th>Username</th>
				<th>Address</th>
				<th>gender</th>
				<th>Email</th>
				<th>Password</th>
				<th>Contact Info </th>
			  
				
			
				
			</thead>
			<tbody>
			<?php 
			    
					 echo "<tr><td>".$deliveryman["id"]."</td>";
					 echo "<td>".$deliveryman["fname"]."</td>";
					 echo "<td>".$deliveryman["lname"]."</td>";
					 echo "<td>".$deliveryman["uname"]."</td>";
					 echo "<td>".$deliveryman["ad"]."</td>";
					 echo "<td>".$deliveryman["gender"]."</td>";
					 echo "<td>".$deliveryman["email"]."</td>";
					 echo "<td>".$deliveryman["pass"]."</td>";
					 echo "<td>".$deliveryman["number"]."</td>"; 
					
				 ?>
			</tbody>
			</table>
		</div>

<html>

<body>
             
          <form action="" method="post">
           	  <div class="center">	
		<table><center>
					  <td><input type="hidden" name="id" value="<?php echo $deliveryman["id"];?>">           
                </tr>
			     <tr>
						<td><input type="submit" name="remove_man" value="Remove Deliveryman" class="btn btn-danger" ></td>
						<td><span style="float:right;"><a style="text-decoration:none" href="alldeliveryman.php" target="_self" >&nbsp Cancel</a> </span> </td>
				</tr>




            </table></center>
        </form>
        
    
 

</body><?php include 'admin_footer.php';?>
</html>
