<?php
     include 'seller.php';
     require_once 'controllers/petController.php';
	 require_once 'controllers/pettypeController.php';
	 $catagories=getAllTypes();
	 $id=$_GET["id"];
	 $pet=getPet($id);
?>

<html>
<head>
        <title>Edit Seller</title>
      <style>
	 
	            .add-div
				{
					
				border:1px solid black;
				margin:auto;
				width:25%;
				margin-top:4%;
				
				}
 		
	  
	  
	  </style>

</head>
<body>

  </body>
        <div class="add-div">
    <fieldset>
        <legend align="center"><h1>Edit Pet</h1></legend>
        <form action="" onsubmit="return validatePet()" method="post">
              <div class="center"><table>
                 
					   <tr>
					       <td><span><b>Pet Type:<b></span></td>
						   <td><input type="hidden" name="id" value="<?php echo $pet["id"];?>">
						 <select name="ptype_id" id="ptype_id" value="<?php echo $pet["ptype_id"];?>">
							           <option>Choose One</option>
									   <?php
                                         foreach($catagories as $catagoie)
										 {
											 echo "<option value='".$catagoie["id"]."'>".$catagoie["ptname"]."</option>";
										 }											 
									   ?>
							         
						</select>
						       <span id="err_ptype"><?php echo $err_ptype;?></span></td>
						</tr>
				
				 <tr>
					<td><span><b>Size</b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $pet["id"];?>">  
					<input type="text" name="size" id="size" value="<?php echo $pet["size"];?>" placeholder="Size">
						 <span id="err_size"><?php echo $err_size;?></span></td>
				</tr>
				 <tr>
					<td><span><b>Weight</b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $pet["id"];?>">  
					<input type="text" name="weight" id="weight" value="<?php echo $pet["weight"];?>" placeholder="weight">
						 <span id="err_weight"><?php echo $err_weight;?></span></td>
				</tr>
				<tr>
					<td><span><b>Price</b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $pet["id"];?>">  
					<input type="text" name="price" id="price" value="<?php echo $pet["price"];?>"placeholder="Address">
					 <span id="err_price"><?php echo $err_price;?></span></td>
				</tr>	
					   <tr>
					          <td><span><b>Info:</b></span></td>
					           <td><input type="hidden" name="id" value="<?php echo $pet["id"];?>">
							   <textarea name="info"  id="info" placeholder="Info"><?php echo $pet["info"];?></textarea><br>
					         <span id="err_info"><?php echo $err_info ?></span></td>
				                 </tr>
					   
					   
				        
					    <tr>
				             <td><input type="submit" name="edit_pet" value="Edit Pet" class="btn btn-success"></td>
				        </tr>    
							
					       
				</table>
             </form>
			 <div>
		 </fieldset>
		 </body>
		  <script src="JS/petValidation.js"></script>
		 
</html>