<?php
      include 'seller.php';
      require_once 'controllers/typeController.php';
	  $catagories=getCatagories();

?>
<html>
    <head> 
	     <title>All Catagories</title></head>
	<body>
		
   <br></br>  
	<div class="center">			
		<table class="table table-striped">
			<thead>
				<th>Serial</th>
				<th>Name</th>
			    <th></th>
				<th></th>
				
			
		   <thead>
			<tbody>
			<?php 
			     foreach($catagories as $catagorie)
				 {
					 echo "<tr><td>".$catagorie["id"]."</td>";
					 echo "<td>".$catagorie["tname"]."</td>";
			         echo '<td><a style="text-decoration:none" href="edittype.php?id='.$catagorie["id"].'" class="btn btn-success" target="_ self" >Edit </a></td>';
					 echo '<td><a style="text-decoration:none" href="removetype.php?id='.$catagorie["id"].'" class="btn btn-danger" target="_ self" >Remove</a></td>';
					
				 }
				 ?>
		</tbody>
	</table>
	</div>
        </body>
		<?php include 'admin_footer.php';?>
</html>