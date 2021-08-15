<?php
        include 'admin.php';
       require_once 'controllers/searchController.php';
?>

<html>
    <head> 
	     <title>ADMIN Search</title>
	</head>
	<body>
	<br><br>
		 <form action="" method="post">
			<table align="center"> 
	             <tr>
				<td>
				<input type="text" size="100" name="search" id="search_text"  onkeyup="suggest(this)" placeholder="Search Here..." value="<?php echo $search;?>"><button>Search</button></td>
			   <tr><td><p id="suggestion">
					 
					 </p></td>
					</tr></tr>
			
						
	</table>
	</form>	
      <?php include 'searchOption.php' ?>
	
	
		    
        </body>
		<script src="JS/searchValidation.js"></script>
</html>