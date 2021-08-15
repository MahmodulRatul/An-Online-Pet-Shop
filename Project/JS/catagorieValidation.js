    function get(id){
			return document.getElementById(id);
		}
	
	
      function validateType()
    {
		refresh();
		
		var hasError=false;
		
		if(get("tname").value=="")
		{
			get("err_tname").innerHTML= "Type Required";
			get("err_tname").style.color="red";
			hasError=true;
		}
		
		
		return !hasError;
		
	}
	
	function refresh()
	{
		get("err_tname").innerHTML="";
			
	}
	

		function checkType(tname){
		var name=tname.value;
		var xhttp= new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			 if(this.readyState==4 && this.status==200)
			 {
				 var rs=this.responseText;
				 rs=rs.trim();
				 if(rs == "true"){
				    get("err_tname").innerHTML="";
				 }
				 else{
					 get("err_tname").innerHTML= "Type Already Added";
					 get("err_tname").style.color="red";
				
				 }
	            }
		};  
		xhttp.open("GET","checktype.php?tname="+name,true);
		xhttp.send();
	}

	