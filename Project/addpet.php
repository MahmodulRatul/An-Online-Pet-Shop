<?php
     include 'seller.php';
     require_once 'controllers/petController.php';
	 require_once 'controllers/pettypeController.php';
	 
	 $types=getAllTypes();
?>

<html>
      <head>
	  <title>Add Pet</title>
	      <style>
		  .addproduct-div
				{
					
				border:1px solid black;
				margin:auto;
				width:30%;
				margin-top:4%;
				
				}
		  
	       </style>
	  <head>
	  
	     <body>
		 <div class="addproduct-div">
		 <fieldset>
        <legend align="center"><h1>Add Pet</h1></legend>
		    <form action="" onsubmit="return validatePet()" method="post">
			   <table align="center">
	 <tr>
					       <td><span><b>Type of Pet:<b></span></td>
						   <td>
						 <select id="ptype_id" name="ptype_id">
							           <option>Choose One</option>
									   <?php
                                         foreach($types as $type)
										 {
											 echo "<option value='".$type["id"]."'>".$type["ptname"]."</option>";
										 }											 
									   ?></select>
						 <span id="err_ptype"><?php echo $err_ptype;?></span></td>
						</tr>
				
				     <tr>
					           <td><span><b>Size:</b></span></td>
							   <td><input type="text" id="size" size="" name="size" value="<?php echo $size;?>" placeholder="Add Size"><br>
							    <span id="err_size"><?php echo $err_size;?></span></td>
					</tr>	
					<tr>
					           <td><span><b>Weight:</b></span></td>
							   <td><input type="text" id="weight" size="" name="weight" value="<?php echo $price;?>" placeholder="Add weight"><br>
							   <span id="err_weight"><?php echo $err_weight;?></span></td>
					</tr>
                      <tr>
					           <td><span><b>Price:</b></span></td>
							   <td><input type="text" id="price" size="" name="price" value="<?php echo $price;?>" placeholder="Add price"><br>
							   <span id="err_price"><?php echo $err_price;?></span></td>
					</tr>						
					   <tr>
					          <td><span><b>Info:</b></span></td>
					           <td><textarea name="info" id="info" placeholder="Info"><?php echo $info;?></textarea><br>
					         <span id="err_info"><?php echo $err_info ?></span></td>
				                 </tr>
					   
				        
					    <tr>
				             <td><input type="submit" name="add_pet" value="Add Pet" class="btn btn-success"></td>
				        </tr>    
							
					       
				</table>
             </form>
			 <div>
		 </fieldset>
		 </body>
	    <script src="JS/petValidation.js"></script>
		 
</html>