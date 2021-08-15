<?php

       require_once 'controllers/searchController.php';

	       
	  
?>
<html>
     
	<body>
		
   <br></br>  
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
				<th>Type</th>
			   
				
			
				
			</thead>
			
			 <?php if($result){
		            foreach($result as $search){
	
 
            echo"<tr><td>".$search["id"]."</td>";
            echo"<td>".$search["fname"]."</td>";
            echo"<td>".$search["lname"]."</td>";
         	echo"<td>".$search["uname"]."</td>";
        	echo"<td>".$search["ad"]."</td>";
            echo"<td>".$search["gender"]."</td>";
	        echo"<td>".$search["email"]."</td>";
	
	         echo"<td>".$search["number"]."</td>";
	          echo"<td>".$search["type"]."</td>";
	
		 }
	 }
   ?>
    </tr>
    </table>
	</div>  
        </body>
		<?php include 'admin_footer.php';?>
</html>	   