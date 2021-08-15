<?php
         include 'seller.php';
         require_once 'controllers/pettypeController.php';
		 $id=$_GET["id"];
		 $type=gettypes($id);
    ?>


<html>
<head>
        <title>Edit Type</title>
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

  <body>
        <div class="add-div">
    <fieldset>
        <legend align="center"><h1>Edit Catagorie</h1></legend>
        <form action="" onsubmit="return validatePettype()" method="post">
           <div class="center"><table>
                 <tr>
					<td><span><b>Name:<b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $type["id"];?>">  
					<input type="text" name="ptname" id="ptname" value="<?php echo $type["ptname"];?>" placeholder="Type Name">
						<span id="err_ptname"><?php echo $err_ptname;?></span></td>
				</tr>
				
				<tr>
					<td><input type="submit" name="edit_ptype" value="Edit" class="btn btn-success"></td>
				</tr>

       </table>
        </form>
        
    </fieldset>
	</div>
 		  <script src="JS/pettypeValidation.js"></script> 

</body>
</html>