<?php
        require_once 'models/db_config.php';
		
		
		 $ptype_id="";
		 $err_ptype="";
		 $size="";
		 $err_size="";
		 $weight="";
		 $err_weight="";
		 $price="";
		 $err_price="";
		 $info="";
		 $err_info="";
		 $hasError=false;
	  
	 
		if (isset($_POST["add_pet"])){
		
	
			if(!isset($_POST["ptype_id"]))
		    {
			$err_ptype="Type required";
			$hasError=true;
		    }
		    else
		    {
		     $ptype_id=htmlspecialchars($_POST["ptype_id"]);
		    }
			 if(empty($_POST["size"]))
		    {
			 $err_size="Size Required";
			 $hasError=true;
		    }
		    elseif(!is_numeric($_POST["size"]))
		    {
			 $err_size="Numaric Value required";
			 $hasError=true;
		    }
		   else
		    {
			 $size=htmlspecialchars($_POST["size"]);
		    }
			 if(empty($_POST["weight"]))
		    {
			 $err_weight="weight Required";
			 $hasError=true;
		    }
		    elseif(!is_numeric($_POST["weight"]))
		    {
			 $err_weight="Numaric Value required";
			 $hasError=true;
		    }
		   else
		    {
			 $weight=htmlspecialchars($_POST["weight"]);
		    }
			
			if(empty($_POST["price"]))
		    {
			 $err_price="*Price Required";
			 $hasError=true;
		    }
		    elseif(!is_numeric($_POST["price"]))
		   {
			 $err_price="*Numaric Value required";
			 $hasError=true;
		    }
		   else
		    {
			 $price=htmlspecialchars($_POST["price"]);
		    }
			
			if(empty($_POST["info"]))
			{
			$err_info="Information Required";
			$hasError=true;
		    }
		    else
			{
		    $info=htmlspecialchars($_POST["info"]);
		     }
			 
			if(!$hasError)
		   {
			   insertPet($ptype_id,$size,$weight,$price,$info);
			 
		   }
		}
	    if (isset($_POST["edit_pet"])){
		
	
			if(!isset($_POST["ptype_id"]))
		    {
			$err_ptype="Type required";
			$hasError=true;
		    }
		    else
		    {
		     $ptype_id=htmlspecialchars($_POST["ptype_id"]);
		    }
			 if(empty($_POST["size"]))
		    {
			 $err_size="Size Required";
			 $hasError=true;
		    }
		    elseif(!is_numeric($_POST["size"]))
		    {
			 $err_size="Numaric Value required";
			 $hasError=true;
		    }
		   else
		    {
			 $size=htmlspecialchars($_POST["size"]);
		    }
			 if(empty($_POST["weight"]))
		    {
			 $err_weight="weight Required";
			 $hasError=true;
		    }
		    elseif(!is_numeric($_POST["weight"]))
		    {
			 $err_weight="Numaric Value required";
			 $hasError=true;
		    }
		   else
		    {
			 $weight=htmlspecialchars($_POST["weight"]);
		    }
			
			if(empty($_POST["price"]))
		    {
			 $err_price="*Price Required";
			 $hasError=true;
		    }
		    elseif(!is_numeric($_POST["price"]))
		   {
			 $err_price="*Numaric Value required";
			 $hasError=true;
		    }
		   else
		    {
			 $price=htmlspecialchars($_POST["price"]);
		    }
			
			if(empty($_POST["info"]))
			{
			$err_info="Information Required";
			$hasError=true;
		    }
		    else
			{
		    $info=htmlspecialchars($_POST["info"]);
		     }
			 
			if(!$hasError)
		   {
			   editPet($_POST["id"],$ptype_id,$size,$weight,$price,$info);
			 
		   }
		}
		if(isset($_POST["remove_pet"]))
		{
            
         
           if(!$hasError)
		  {
			  deletePet(($_POST["id"])); 
			
		  }
           
        }
	
	 
	 
         function insertPet($ptype_id,$size,$weight,$price,$info)
		{
			$query="INSERT INTO pets VALUES (NULL,'$ptype_id','$size','$weight','$price','$info')";
			execute($query);
			header("Location: allpet.php");
			
		}
		function getAllpet(){
			$query= "select p.*,t.ptname as 'pt_name' from pets p left join ptype t on p.ptype_id=t.id";
			$result= get($query);
			return $result;
		}
		
		function getPet($id){
			$query="select * from pets where id=$id";
			$result=get($query);
			if(count($result)>0){
				return $result[0];
			}
			return false;
		}
		function editPet($id,$ptype_id,$size,$weight,$price,$info){
			$query="UPDATE pets
                SET ptype_id='$ptype_id',
                size='$size',
				weight='$weight',
                price='$price',
				info='$info'
                WHERE id=$id";
                execute($query);
              
				header("Location:allpet.php");
		
		}
		function deletePet($id){
		$query="DELETE FROM pets WHERE id=$id";
		execute($query);
		header("Location:allpet.php");
		}
	
    ?>