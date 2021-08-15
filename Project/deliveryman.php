<?php
      session_start();
       
?>

<html>
    <head> 
	     <title>Delivery Man</title>
	</head>
	
	    <body>
		<h2>
			<span style="float:right;"><a style="text-decoration:none" href="login.php" target="_self" >Log Out &nbsp</a> </span> 
			</h2><br><br>
			
		    <center><h1>Delivery</h1></center>
			<?php echo $_SESSION["deliverylogin"] ?>
			  <br></br>
	<html>
    <head> 
	     <title> Search</title>
	</head>
	<body>
	
		 <form action="" method="post">
			<table align="center"> 
	             <tr>
					<td>
					
					<input type="text" size="100" name="search" id="search_text"  onkeyup="suggest(this)" placeholder="Search Here..." value=""><button>Search</button></td>
					 <tr><td><p id="suggestion">
					 
					 </p></td>
					</tr></tr>
			
						
	</table>
	</form>	
     

	
		        
		      <h2 align="center">
			        <span><a  style="text-decoration:none" href="homepage.php" target="_self">Home &nbsp</a> </span> 
					<span><a  style="text-decoration:none" href="deliverymaninfo.php" target="_self">Edit Deliveryman Profile &nbsp</a> </span> 
			       
               </h2>
		        
		            
		   
	
	     
        </body>
</html>


