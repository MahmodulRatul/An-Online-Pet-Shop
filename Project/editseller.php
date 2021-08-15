<?php
          include 'admin.php';
          require_once 'controllers/sellerController.php';
		 $id=$_GET["id"];
		 $seller=getSeller($id);
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
        <legend align="center"><h1>Edit Seller</h1></legend>
        <form action="" onsubmit="return validateSeller()" method="post">
          <div class="center"> <table>
                <tr>
					<td><span><b>First Name:<b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $seller["id"];?>">
					<input type="text" id="fname" name="fname"value="<?php echo $seller["fname"];?>" placeholder="First Name">
						<span id="err_fname"><?php echo $err_fname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Last Name:</b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $seller["id"];?>">
					<input type="text" id="lname" name="lname"value="<?php echo $seller["lname"];?>" placeholder="Last Name">
						<span id="err_lname"><?php echo $err_lname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Username:</b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $seller["id"];?>">
					<input type="text" id="uname" name="uname"value="<?php echo $seller["uname"];?>" placeholder="Username">
						<span id="err_uname"><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Address:</b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $seller["id"];?>">
					<input type="text" id="ad" name="ad"value="<?php echo $seller["ad"];?>"placeholder="Address">
					<span id="err_ad"><?php echo $err_ad;?></span></td>
				</tr>	
				
				<tr>
					<td><span><b>Gender:</b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $seller["id"];?>">
					<input type="radio" id="male" name="gender" value="Male"><?php if($seller["fname"]=="Male");?><span>Male</span>
					    <input type="radio" id="female" name="gender" value="Female"><?php if($seller["fname"]=="Female");?><span>Female</span><br>
						<span id="err_gender"><?php echo $err_gender;?></span></td>
				</tr>
				
				<tr>
					<td><span><b>Email:</b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $seller["id"];?>">
					<input type="text" id="email" value="<?php echo $seller["email"];?>" name="email" placeholder="Mail Address">
						<span id="err_email"><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span><b>Password:</b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $seller["id"];?>">
					<input type="password" id="pass" name="pass" value="<?php echo $seller["pass"];?>" placeholder="Password"><br>
						<span id="err_pass"><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Phone:</b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $seller["id"];?>">
					<input type="text" id="number" name="number"value="<?php echo $seller["number"];?>"placeholder="Number">
					<span id="err_number"><?php echo $err_number;?></span></td>
				</tr>
				<tr>
					<td><input type="submit" name="edit_seller" value="Edit Seller" class="btn btn-success"></td>
				</tr>

       </table>
        </form>
        
    </fieldset>
	</div>
   

    </body>
	<?php include 'admin_footer.php';?>
    <script src="JS/sellerValidation.js"></script>
 </html>