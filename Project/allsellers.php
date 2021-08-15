<?php  
       include 'admin.php';
      require_once 'controllers/sellerController.php';
	  $sellers=getAllSeller();

?>
<html>
  <br><br>
    <div class="center">		
		<table class="table table-striped">
			<thead>
				<th>Serial</th>
				<th>Frist Name</th>
				<th>Last Name</th>
				<th>Username</th>
				<th>Address</th>
				<th>gender</th>
				<th>Email</th>
				<th>Contact Info </th>
			    <th></th>
				<th></th>
			</thead>
			<tbody>
			<?php 
			     foreach($sellers as $seller)
				 {
					 echo "<tr><td>".$seller["id"]."</td>";
					 echo "<td>".$seller["fname"]."</td>";
					 echo "<td>".$seller["lname"]."</td>";
					 echo "<td>".$seller["uname"]."</td>";
					 echo "<td>".$seller["ad"]."</td>";
					 echo "<td>".$seller["gender"]."</td>";
					 echo "<td>".$seller["email"]."</td>";
					 echo "<td>".$seller["number"]."</td>"; 
					 echo '<td><a style="text-decoration:none" href="editseller.php?id='.$seller["id"].'" class="btn btn-success" target="_ self" >Edit</a></td>';
					 echo '<td><a style="text-decoration:none" href="removeseller.php?id='.$seller["id"].'" class="btn btn-danger" target="_ self" >Remove</a></td>';
					
				 }
				 ?>
			</tbody>
			
		</table>
	</div>   
        </body>
		<?php include 'admin_footer.php';?>
</html>