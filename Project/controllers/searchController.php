 <?php 
     require_once 'models/db_config.php';
	
     if(isset($_POST['search'])){
		  $search=$_POST['search'];
		  $query="SELECT * FROM users WHERE fname LIKE '%$search%' OR lname LIKE '%$search%'";
		  }else{
		  $query="SELECT * FROM users";
		  $search="";
		  }
		  $result=get($query);
		
		
		function searchUser($key){
			 $query="select fname,lname from users where fname like '%$key%' OR lname LIKE '%$key%'";;
			 $result=get($query);
			 return $result;
			
		}
	