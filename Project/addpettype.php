<?php 
     include 'seller.php';
    require_once 'controllers/pettypeController.php';
	
?>


<html>
      <head>
	  <title>Type</title>
	      <style>
		  .editproduct-div
				{
					
				border:1px solid black;
				margin:auto;
				width:30%;
				margin-top:4%;
				
				}
		   
	       </style>
	  <head>
	  
	     <body>
		 <div class="editproduct-div">
		 <fieldset>
        <legend align="center"><h1>Pet Type</h1></legend>
		    <form action="" onsubmit="return validatePettype()" method="post">
			   <table align="center">
			           <tr>
					        <td><b><span>Name:</b></span></td>
							<td><input type="text" id="ptname"  name="ptname" onfocusout="checkPetType(this)" value="<?php echo $ptname;?>" size="" placeholder="Pet Name"><br>
							<span id="err_ptname"><?php echo $err_ptname;?></span></td>
					    </tr>
					  <tr>
				             <td><input type="submit" name="add_ptype" value="Add Pet Type" class="btn btn-success"></td>
				        </tr>    
							
					       
				</table>
             </form>
			 <div>
		 </fieldset>
		 </body>
		  <script src="JS/pettypeValidation.js"></script> 
	
	
	



</html>