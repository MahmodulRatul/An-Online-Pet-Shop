<?php
       
      session_start();
	  if(!isset($_SESSION["adminlogin"]))
	  {
		  header("Location:login.php");
	  }		  
?>

<html>
    <head> 
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/mystyle.css">
	     <title>ADMIN</title>
	</head>
	<body>
	
		<h3>
			<span style="float:right;"><a style="text-decoration:none" href="logout.php" target="_self" >Log Out &nbsp</a> </span> 
			</h3><br><br>
			<div class="text-center">
			 <h1 class="header">ADMIN</h1>
			  </div>
			<b><p style="text-align:right">Welcome, <?php echo $_SESSION["adminlogin"] ?><p></b>
	
		   <div class="text-center">
			        <span><a  style="text-decoration:none" href="homepage.php" class="btn btn-primary" target="_self">Home &nbsp</a> </span> 
					<span><a  style="text-decoration:none" href="alldeliveryman.php" class="btn btn-primary" target="_self">All DeliveryMan &nbsp</a> </span> 
					  <span><a  style="text-decoration:none" href="adddeliveryman.php" class="btn btn-primary" target="_self" >Add Deliveryman &nbsp</a> </span> 
					   <span><a  style="text-decoration:none" href="allsellers.php" class="btn btn-primary" target="_self">All Sellers &nbsp</a> </span> 
					   <span><a  style="text-decoration:none" href="addseller.php"class="btn btn-primary" target="_self" >Add Seller &nbsp</a> </span> 
					     <span><a  style="text-decoration:none" href="adminAllshops.php" class="btn btn-primary" target="_self" >All Shops &nbsp</a> </span> 
					   	<span><a  style="text-decoration:none" href="allvatdochos.php" class="btn btn-primary" target="_self" >All Medical Service &nbsp</a> </span> 
						<span><a  style="text-decoration:none" href="addvatdochos.php" class="btn btn-primary" target="_self" >Add Medical Service &nbsp</a> </span> 
				           <span><a  style="text-decoration:none" href="search.php" class="btn btn-primary" target="_self">Search &nbsp</a> </span>
				         	<span><a  style="text-decoration:none" href="admin.php" class="btn btn-primary"  target="_self">back &nbsp</a> </span>
               
		        </div>
	
	
	     
        </body>
		<?php include 'admin_footer.php';?>
</html>





