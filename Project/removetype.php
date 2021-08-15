<?php    
         include 'seller.php';
         require_once 'controllers/typeController.php';
		 $id=$_GET["id"];
		 $catagorie=getCatagorie($id);
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
			    
					  echo "<tr><td>".$catagorie["id"]."</td>";
					 echo "<td>".$catagorie["tname"]."</td>";
					
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
                   
					  <td><input type="hidden" name="id" value="<?php echo $catagorie["id"];?>">  
					 
                          
                </tr>
			<tr>
					   
						<td><input type="submit" name="remove_c" value="Remove Catagorie" class="btn btn-danger"></td>
						<td><span style="float:right;"><a style="text-decoration:none" href="alltype.php" target="_self" >&nbsp Cancel</a> </span> </td>
			</tr>




            </table></center>
        </form>
        
    
 

</body><?php include 'admin_footer.php';?>
</html>
