<?php  
      include 'admin.php';
     require_once 'controllers/vatController.php';
    ?>


<html>
       <title>Add Doctor and Hospital</title>
	<head> 
	<style>
	.login-div{
		border:1px solid black;
		margin:auto;
		width:40%;
		margin-top:5%
	}
	</style>
	</head>
	<body>
	<div class="login-div">
		<fieldset>
		<legend align="center"><h1>Add Doctor and Hospital</h1></legend>
	<form action="" onsubmit="return validateVat()" method="post">
			<table align="center"> 

				<tr>
					<td><span><b>Doctor:<b></span></td>
					<td><input type="text" id="dname" name="dname"value="<?php echo $dname;?>" placeholder="Doctor Name">
						<span id="err_dname"><?php echo $err_dname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Hospital:</b></span></td>
					<td><input type="text" id="hname" name="hname"value="<?php echo $hname;?>" placeholder="Hospital Name">
						<span id="err_hname"><?php echo $err_hname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Address:</b></span></td>
					<td><input type="text" id="ad" name="ad"value="<?php echo $ad;?>"placeholder="Address">
					<span id="err_ad"><?php echo $err_ad;?></span></td>
				</tr>	
				<tr>
					<td><span><b>Email:</b></span></td>
					<td><input type="text" id="email" onfocusout="checkEmail(this)" value="<?php echo $email;?>" name="email" placeholder="Mail Address">
						<span id="err_email"><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span><b>Phone:</b></span></td>
					<td><input type="text" id="number" name="number"value="<?php echo $number;?>"placeholder="Number">
					<span id="err_number"><?php echo $err_number;?></span></td>
				</tr>
				<tr>
					<td><input type="submit" name="add_dh" value="Add" class="btn btn-success"></td>
				</tr>
			</table>
	</form>	
	</fieldset>
	</div>
	</body>
	
	<script src="JS/vatValidation.js"></script>

 </html>