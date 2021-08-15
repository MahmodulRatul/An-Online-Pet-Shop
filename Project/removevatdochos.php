<?php
         include 'admin.php';
         require_once 'controllers/vatController.php';
		 $id=$_GET["id"];
		 $vat=getVat($id);
	?>

	  	  <div class="center">	
		<table class="table table-striped">
		<br><br>
		<thead>
				<th>Serial</th>
				<th>Doctor Name</th>
				<th>Hospital Name</th>
				<th>Address</th>
				<th>Email</th>
			    <th>Contact Info </th>
			  
				
			
				
		  </thead>
			<tbody>
			<?php 
			    
					 echo "<tr><td>".$vat["id"]."</td>";
					 echo "<td>".$vat["dname"]."</td>";
					 echo "<td>".$vat["hname"]."</td>";
				     echo "<td>".$vat["ad"]."</td>";
				     echo "<td>".$vat["email"]."</td>";
					 echo "<td>".$vat["number"]."</td>"; 
					
				 ?>
			<</tbody>
			</table>
		  </div>

		

<html>
<head>
      
<title>Remove Deliveryman</title>
</head>
<body>

           <form action="" method="post">
           	  <div class="center">	
		<table><center>
                   
					  <td><input type="hidden" name="id" value="<?php echo $vat["id"];?>">  
					 
                          
                </tr>
			<tr>
					   
						<td><input type="submit" name="remove_dh" value="Remove" class="btn btn-danger"></td>
						<td><span style="float:right;"><a style="text-decoration:none" href="allvatdochos.php" target="_self"  >&nbsp Cancel</a> </span> </td>
				</tr>




            </table></center>
        </form>
        
    
 

</body><?php include 'admin_footer.php';?>
</html>
