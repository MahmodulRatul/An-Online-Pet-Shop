<?php
        require_once 'models/db_config.php';
		
		 $ptname="";
		 $err_ptname="";
		$hasError=false;
	  
	 
		if (isset($_POST["add_ptype"])){
		
			if (empty($_POST["ptname"]))
			{
				$err_ptname="Pet Type required";
				$hasError=true;
			}
			else{
				$ptname=htmlspecialchars($_POST["ptname"]);
			}
		
			 
			if(!$hasError)
		   {
			   insertType($ptname);
			 
		   }
		}
		if (isset($_POST["edit_ptype"])){
		
			if (empty($_POST["ptname"]))
			{
				$err_ptname="Pet Type required";
				$hasError=true;
			}
			else{
				$ptname=htmlspecialchars($_POST["ptname"]);
			}
		
			 
			if(!$hasError)
		   {
			   editType($_POST["id"],$ptname);
			 
		   }
		}
		if(isset($_POST["remove_ptype"]))
		{
            
         
           if(!$hasError)
		  {
			  deleteType(($_POST["id"]));
			
		  }
           
        }
		
		
		
		function insertType($ptname)
		{
			$query="insert into ptype values (NULL,'$ptname')";
			execute($query);
			header("Location: allpettype.php");
		}
			function getAllTypes(){
			$query= "SELECT * FROM ptype";
			$result= get($query);
			return $result;
		}
		
		function gettypes($id){
			$query="select * from ptype where id=$id";
			$result=get($query);
			if(count($result)>0){
				return $result[0];
			}
			return false;
		}
		function editType($id,$ptname){
			$query="UPDATE ptype
                SET ptname='$ptname'
                WHERE id=$id";
                execute($query);
				header("Location: allpettype.php");
		}
		
		function deleteType($id){
		$query="DELETE FROM ptype WHERE id=$id";
		execute($query);
		header("Location: allpettype.php");
		}
		
		function checkPetType($ptname)
		{
			$query="select * from ptype where ptname='$ptname'";
			$result=get($query);
			if(count($result)>0)
			{
				return false;
			}
			return true;
		}
	
