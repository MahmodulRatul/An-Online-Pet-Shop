<?php
         include 'admin.php';
         require_once 'controllers/sellerController.php';
		 $id=$_GET["id"];
		 $seller=getSeller($id);
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
			    
					 echo "<tr><td>".$seller["id"]."</td>";
					 echo "<td>".$seller["fname"]."</td>";
					 echo "<td>".$seller["lname"]."</td>";
					 echo "<td>".$seller["uname"]."</td>";
					 echo "<td>".$seller["ad"]."</td>";
					 echo "<td>".$seller["gender"]."</td>";
					 echo "<td>".$seller["email"]."</td>";
					 echo "<td>".$seller["pass"]."</td>";
					 echo "<td>".$seller["number"]."</td>"; 
					
				 ?>
			</tbody>
			</table>
		</div>
		

<html>
<head>
      <title>Remove Seller</title>

</head>
<body>

          
          <form action="" method="post">
           	  <div class="center">	
		<table><center>
                
					  <td><input type="hidden" name="id" value="<?php echo $seller["id"];?>">  
	
                </tr>
			<tr>
					   
						<td><input type="submit" name="remove_seller" value="Remove Seller" class="btn btn-danger"></td>
						<td><span style="float:right;"><a style="text-decoration:none" href="allsellers.php" target="_self" >&nbsp Cancel</a> </span> </td>
				</tr>




           </table></center>
        </form>
        
    
 

</body><?php include 'admin_footer.php';?>
</html>
