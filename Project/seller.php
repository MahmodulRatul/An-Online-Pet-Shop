<?php
      session_start();
	  if(!isset($_SESSION["sellerlogin"]))
	  {
		  header("Location:login.php");
	  }	
?>

<html>
    <head> 
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/mystyle.css">
	     <title>Seller</title>
	</head>
	<body>
	
		<h3>
			<span style="float:right;"><a style="text-decoration:none" href="logout.php" target="_self" >Log Out &nbsp</a> </span> 
			</h3><br><br>
			<div class="text-center">
			 <h1 class="header">Seller</h1>
			  </div>
			<h3><p style="text-align:right">Welcome, <?php echo $_SESSION["sellerlogin"]?></p></h3>
		        
		    <div class="text-center">
			        <span><a  style="text-decoration:none" href="homepage.php" class="btn btn-primary" target="_self">Home &nbsp</a> </span>
                    <span><a  style="text-decoration:none" href="allproducts.php" class="btn btn-primary" target="_self">All Products &nbsp</a> </span>
					 <span><a  style="text-decoration:none" href="addproduct.php" class="btn btn-primary" target="_self">Add Products &nbsp</a> </span>
					 <span><a  style="text-decoration:none" href="alltype.php" class="btn btn-primary" target="_self">All Catagorie &nbsp</a> </span>
					  <span><a  style="text-decoration:none" href="type.php" class="btn btn-primary" target="_self">Add Catagorie &nbsp</a> </span>
					   <span><a  style="text-decoration:none" href="sellershop.php" class="btn btn-primary" target="_self">All Shops &nbsp</a> </span>
					    <span><a  style="text-decoration:none" href="addshop.php" class="btn btn-primary" target="_self">Add Shops &nbsp</a> </span>
						 <span><a  style="text-decoration:none" href="allpet.php" class="btn btn-primary" target="_self">All Pet &nbsp</a> </span>
						  <span><a  style="text-decoration:none" href="addpet.php" class="btn btn-primary" target="_self">Add Pet &nbsp</a> </span>
						   <span><a  style="text-decoration:none" href="allpettype.php" class="btn btn-primary" target="_self">All Pet Type &nbsp</a> </span>
						   <span><a  style="text-decoration:none" href="addpettype.php" class="btn btn-primary" target="_self">Add Pet Type &nbsp</a> </span>
						  
						  
					 
	
                  </div>
		        
		            
		   
	
	     
        </body>
		<?php include 'seller_footer.php';?>
</html>