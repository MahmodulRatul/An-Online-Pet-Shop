<?php
      include 'seller.php';
      require_once 'controllers/petController.php';
	  $pets=getAllpet();

?>
<html>
    <head> 
	     <title>All Products</title></head>
	<body>
		
    <br><br>
    <div class="center">		
		<table class="table table-striped">
			<thead>
				<th>Serial</th>
				<th>Pet Type</th>
				<th>Size</th>
				<th>Weight</th>
				<th>Price</th>
				<th>Info</th>
			    <th></th>
				<th></th>
				
			
				
		</thead>
			<tbody>
			<?php 
			     foreach($pets as $pet)
				 {
					 echo "<tr><td>".$pet["id"]."</td>";
					 echo "<td>".$pet["pt_name"]."</td>";
					 echo "<td>".$pet["size"]."</td>";
					  echo "<td>".$pet["weight"]."</td>";
					 echo "<td>".$pet["price"]."</td>";
					 echo "<td>".$pet["info"]."</td>";
					 echo '<td><a style="text-decoration:none" href="editpet.php?id='.$pet["id"].'" class="btn btn-success" target="_ self" >Edit Pet</a></td>';
					 echo '<td><a style="text-decoration:none" href="removepet.php?id='.$pet["id"].'" class="btn btn-danger" target="_ self" >Remove Pet</a></td>';
					
				 }
			 ?>
			</tbody>
			
		</table>
	</div>   
        </body>
		<?php include 'admin_footer.php';?>
</html>