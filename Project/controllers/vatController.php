 <?php 
     require_once 'models/db_config.php';
	 
     $dname="";
	$err_dname="";
	$hname="";
	$err_hname="";
	$email="";
	$err_email="";
	$number ="";
	$err_number="";
	$ad="";
	$err_ad="";
	
	function validateEmail($email)
		{
		$pos_at = strpos($email,"@");
		$pos_dot = strpos($email,".",$pos_at+1);
		if($pos_at < $pos_dot)
			{
			return true;
			}
		return false;
		}
		
	
		if (isset($_POST["add_dh"])){
		
			if (empty($_POST["dname"])){
				$err_dname="Name Required";
				$hasError=true;
			}
			else{
				$dname=htmlspecialchars($_POST["dname"]);
			}
			if (empty($_POST["hname"])){
				$err_hname="Hospital Name Required";
				$hasError=true;
			}
			else{
				$hname=htmlspecialchars($_POST["hname"]);
			}
	
			if (empty($_POST["email"])){
				$err_email="Email Required";
				$hasError=true;
			 }
			elseif(!validateEmail($_POST["email"]))
			{
				$err_email="Not a valid email";
				$hasError=true;
			}
			else
			{
				$email=htmlspecialchars($_POST["email"]);
			}
			
			if(empty($_POST["number"]))
		   {
			 $err_number="Number Required";
			 $hasError=true;
		   }
		   elseif(!is_numeric($_POST["number"]))
		   {
			 $err_number="Numaric Value required";
			 $hasError=true;
		    }
		   else
		   {
			 $number=htmlspecialchars($_POST["number"]);
		   }
			If (empty($_POST["ad"])){
				$err_ad="Address Required";
				$hasError=true;
			 }
			else{
				$ad=htmlspecialchars($_POST["ad"]);
			 }
	
			if(!$hasError)
		   {
			  
			 insertVat($dname,$hname,$ad,$email,$number);
			  header("Location:allvatdochos.php");
			 
		   }
		}
		
		if (isset($_POST["edit_dh"])){
		
			if (empty($_POST["dname"])){
				$err_dname="Name Required";
				$hasError=true;
			}
			else{
				$dname=htmlspecialchars($_POST["dname"]);
			}
			if (empty($_POST["hname"])){
				$err_hname="Hospital Name Required";
				$hasError=true;
			}
			else{
				$hname=htmlspecialchars($_POST["hname"]);
			}
	
			if (empty($_POST["email"])){
				$err_email="Email Required";
				$hasError=true;
			 }
			elseif(!validateEmail($_POST["email"]))
			{
				$err_email="Not a valid email";
				$hasError=true;
			}
			else
			{
				$email=htmlspecialchars($_POST["email"]);
			}
			
			if(empty($_POST["number"]))
		   {
			 $err_number="Number Required";
			 $hasError=true;
		   }
		   elseif(!is_numeric($_POST["number"]))
		   {
			 $err_number="Numaric Value required";
			 $hasError=true;
		    }
		   else
		   {
			 $number=htmlspecialchars($_POST["number"]);
		   }
			If (empty($_POST["ad"])){
				$err_ad="Address Required";
				$hasError=true;
			 }
			else{
				$ad=htmlspecialchars($_POST["ad"]);
			 }
			if(!$hasError)
		   {
			  
			 editVat($_POST["id"],$dname,$hname,$ad,$email,$number);
			
			 
		   }
		}
		if(isset($_POST["remove_dh"]))
		{
            
         
           if(!$hasError)
		  {
			  deleteVat(($_POST["id"])); 
			
		  }
           
        }
		
		function insertVat($dname,$hname,$ad,$email,$number) 
		{
			$query="INSERT INTO vats VALUES (NULL,'$dname','$hname','$ad','$email','$number')";
			execute($query);
		}
		
		function getAllVat(){
			$query= "SELECT * FROM vats";
			$result= get($query);
			return $result;
		}
		function getVat($id){
			$query="select * from vats where id=$id";
			$result=get($query);
			if(count($result)>0){
				return $result[0];
			}
			return false;
		}
		function editVat($id,$dname,$hname,$ad,$email,$number){
			$query="UPDATE vats
                SET dname='$dname',
                hname='$hname',
                ad='$ad',
				email='$email',
                number='$number'
                WHERE id=$id";
                execute($query);
				header("Location:allvatdochos.php");
		}
		function deleteVat($id){
		$query="DELETE FROM vats WHERE id=$id";
		execute($query);
		header("Location:allvatdochos.php");
		}
		
		function checkEmail($email)
		{
			$query="SELECT * FROM vats where email='$email'";
			$result=get($query);
			if(count($result)>0)
			{
				return false;
			}
			return true;
		}
		
    ?>