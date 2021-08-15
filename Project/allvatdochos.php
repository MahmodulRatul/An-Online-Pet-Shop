<?php
       include 'admin.php';
      require_once 'controllers/vatController.php';
	  $vats=getAllVat();

?>
<html>
     
	
	<body>
		
   <br></br>  
	   <div class="center">		
		<table class="table table-striped">
			<thead>
				<th>Serial</th>
				<th>Doctor Name</th>
				<th>Hospital Name</th>
				<th>Address</th>
				<th>Email</th>
				<th>Contact Info </th>
			    <th></th>
				<th></th>
				
			
				
			</thead>
			<tbody>
			<?php 
			     foreach($vats as $vat)
				 {
					 echo "<tr><td>".$vat["id"]."</td>";
					 echo "<td>".$vat["dname"]."</td>";
					 echo "<td>".$vat["hname"]."</td>";
					 echo "<td>".$vat["ad"]."</td>";
					 echo "<td>".$vat["email"]."</td>";
					 echo "<td>".$vat["number"]."</td>"; 
					 echo '<td><a style="text-decoration:none" href="editvatdochos.php?id='.$vat["id"].'" class="btn btn-success" target="_ self" >Edit</a></td>';
					 echo '<td><a style="text-decoration:none" href="removevatdochos.php?id='.$vat["id"].'" class="btn btn-danger" target="_ self" >Remove</a></td>';
					
				 }
				 ?>
			</tbody>
			
		</table>
	</div>  
        </body>
		<?php include 'admin_footer.php';?>
</html>