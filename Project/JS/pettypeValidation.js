    function get(id){
			return document.getElementById(id);
		}
	
	
      function validatePettype()
    {
		refresh();
		
		var hasError=false;
		
		if(get("ptname").value=="")
		{
			get("err_ptname").innerHTML= "Type Required";
			get("err_ptname").style.color="red";
			hasError=true;
		}
		
		
		return !hasError;
		
	}
	
	function refresh()
	{
		get("err_ptname").innerHTML="";
			
	}
		

		function checkPetType(ptname){
		var name=ptname.value;
		var xhttp= new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			 if(this.readyState==4 && this.status==200)
			 {
				 var rs=this.responseText;
				  rs=rs.trim();
				 if(rs == "true"){
				    get("err_ptname").innerHTML="";
				 }
				 else{
					 get("err_ptname").innerHTML= "Type Already Added";
					  get("err_ptname").style.color="red";
				
				 }
	            }
		};  
		xhttp.open("GET","checkpettye.php?ptname="+name,true);
		xhttp.send();
	}
	