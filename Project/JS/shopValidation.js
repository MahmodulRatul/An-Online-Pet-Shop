    function get(id){
			return document.getElementById(id);
		}
		
	function validEmail(email)
	{
       var pos_at=email.indexOf("@");
       var pos_dot=email.indexOf(".",pos_at+1);
       if(pos_at<pos_dot)
	   {
        return true;
       }
        return false;
	}
		
	
      function validateShop()
    {
		refresh();
		
		var hasError=false;
		
		if(get("sname").value=="")
		{
			get("err_sname").innerHTML= "Shop Name Required";
			get("err_sname").style.color="red";
			hasError=true;
		}
		else if(get("sname").value.length<4)
		{
			get("err_sname").innerHTML= "Shop Name Should be atleast 4 characters";
			get("err_sname").style.color="red";
			hasError=true;
		}
		 if(get("stad").value=="")
		{
			get("err_stad").innerHTML= "Street Address Required";
			get("err_stad").style.color="red";
			hasError=true;
		}
		 if(get("city").value=="")
		{
			get("err_city").innerHTML= "City Required";
			get("err_city").style.color="red";
			hasError=true;
		}
		
		 if(get("email").value=="")
		{
			get("err_email").innerHTML= "Email Required";
			get("err_email").style.color="red";
			hasError=true;
		}
		else if(!validEmail(email.value))
		{
			get("err_email").innerHTML= "Invalid Email Address";
			get("err_email").style.color="red";
			hasError=true;
		}
		
		 if(get("num").value=="")
		{
			get("err_num").innerHTML= "Phone Number Required";
			get("err_num").style.color="red";
			hasError=true;
		}
		else if(isNaN(get("num").value))
		{
			get("err_num").innerHTML= "Numeric value Required";
			get("err_num").style.color="red";
			hasError=true;
		}
		
		return !hasError;
		
	}
	
	function refresh()
	{
		get("err_sname").innerHTML= "";
		get("err_stad").innerHTML= "";
		get("err_city").innerHTML= "";
	    get("err_email").innerHTML= "";
	     get("err_num").innerHTML= "";
		
		
		
		
	}
	
	
	function checkEmail(email){
		var mail=email.value;
		var xhttp= new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			 if(this.readyState==4 && this.status==200)
			 {
				 var rs=this.responseText;
				 rs=rs.trim();
				 if(rs == "true"){
				    get("err_email").innerHTML="";
				 }
				 else{
					 get("err_email").innerHTML= "Email Already Exists, try different Email";
					  get("err_email").style.color="red";
				
				 }
	            }
		};  
		xhttp.open("GET","checkemailshop.php?email="+mail,true);
		xhttp.send();
		
	}
	

	
	