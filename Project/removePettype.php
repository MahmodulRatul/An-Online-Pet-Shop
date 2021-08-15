<?php

         include 'seller.php';
         require_once 'controllers/pettypeController.php';
		 $id=$_GET["id"];
		 $type=gettypes($id);
	?>

	  <div class="center">	
		<table class="table table-striped">
		<br><br>
		<thead>
				<th>Serial</th>
				<th>Name</th>
			</thead>
			<tbody> 
			<?php 
			    
					  echo "<tr><td>".$type["id"]."</td>";
					 echo "<td>".$type["ptname"]."</td>";
					
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
                   
					  <td><input type="hidden" name="id" value="<?php echo $type["id"];?>">  
					 
                          
                </tr>
			<tr>
					   
						<td><input type="submit" name="remove_ptype" value="Remove Pet Type" class="btn btn-danger" ></td>
						<td><span style="float:right;"><a style="text-decoration:none" href="alltype.php" target="_self" >&nbsp Cancel</a> </span> </td>
			</tr>




            </table></center>
        </form>
        
    
 

</body><?php include 'admin_footer.php';?>
</html>

