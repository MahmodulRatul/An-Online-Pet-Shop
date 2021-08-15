<?php
      include 'seller.php';
      require_once 'controllers/productController.php';
	  $products=getAllproducts();

?>
<html>
    <head> 
	     <title>All Products</title></head>
	<body>
		
   <br></br>  
        <div class="center">			
		<table class="table table-striped">
			<thead>
				<th>Serial</th>
				<th>Product Name</th>
				<th>Product Type</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Info</th>
			    <th></th>
				<th></th>
				
			
				
				<thead>
			<tbody>
			<?php 
			     foreach($products as $product)
				 {
					 echo "<tr><td>".$product["id"]."</td>";
					 echo "<td>".$product["pname"]."</td>";
					 echo "<td>".$product["t_name"]."</td>";
					 echo "<td>".$product["quantity"]."</td>";
					 echo "<td>".$product["price"]."</td>";
					 echo "<td>".$product["info"]."</td>";
					 echo '<td><a style="text-decoration:none" href="editproduct.php?id='.$product["id"].'" class="btn btn-success" target="_ self" >Edit Product</a></td>';
					 echo '<td><a style="text-decoration:none" href="removeproduct.php?id='.$product["id"].'" class="btn btn-danger" target="_ self" >Remove Product</a></td>';
					
				 }
				 ?>
		</tbody>
	 </table>
	     </body>
		<?php include 'admin_footer.php';?>
</html>