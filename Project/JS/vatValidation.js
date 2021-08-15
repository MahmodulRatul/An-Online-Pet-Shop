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
		
		
     function validateVat()
    {
		refresh();
		
		var hasError=false;
		
		if(get("dname").value=="")
		{
			get("err_dname").innerHTML= "Doctor Name Required";
			get("err_dname").style.color="red";
			hasError=true;
		}
		if(get("hname").value=="")
		{
			get("err_hname").innerHTML= "Hospital Name Required";
			get("err_hname").style.color="red";
			hasError=true;
		}
	
		 if(get("ad").value=="")
		{
			get("err_ad").innerHTML= "Address Required";
			get("err_ad").style.color="red";
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
		 if(get("number").value=="")
		{
			get("err_number").innerHTML= "Phone Number Required";
			get("err_number").style.color="red";
			hasError=true;
		}
		else if(isNaN(get("number").value))
		{
			get("err_number").innerHTML= "Numeric value Required";
			get("err_number").style.color="red";
			hasError=true;
		}
		
		return !hasError;
		
	}
	
	function refresh()
	{
		get("err_dname").innerHTML= "";
		get("err_hname").innerHTML= "";
		get("err_ad").innerHTML= "";
		get("err_email").innerHTML= "";
		get("err_number").innerHTML= "";
		
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
		xhttp.open("GET","checkemail.php?email="+mail,true);
		xhttp.send();
	}

	