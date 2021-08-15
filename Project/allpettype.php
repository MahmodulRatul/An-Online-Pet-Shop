<?php
      include 'seller.php';
      require_once 'controllers/pettypeController.php';
	  $types=getAllTypes();

?>
<html>
  <br><br>
    <div class="center">		
		<table class="table table-striped">
			<thead>
				<th>Serial</th>
				<th>Name</th>
			    <th></th>
				<th></th>
				
			
			</thead>
			<tbody>
			<?php 
			     foreach($types as $type)
				 {
					 echo "<tr><td>".$type["id"]."</td>";
					 echo "<td>".$type["ptname"]."</td>";
			         echo '<td><a style="text-decoration:none" href="editpettype.php?id='.$type["id"].'" class="btn btn-success" target="_ self" >Edit </a></td>';
					 echo '<td><a style="text-decoration:none" href="removePettype.php?id='.$type["id"].'" class="btn btn-danger" target="_ self" >Remove</a></td>';
					
				 }
			 ?>
			</tbody>
			
		</table>
	</div>   
        </body>
		<?php include 'admin_footer.php';?>
</html>