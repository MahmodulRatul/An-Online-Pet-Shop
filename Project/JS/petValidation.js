    function get(id){
			return document.getElementById(id);
		}
	
	
      function validatePet()
    {
		refresh();
		
		var hasError=false;
		
		if(get("ptype_id").options.selectedIndex=="")
		{
			get("err_ptype").innerHTML= "Not Selected";
			get("err_ptype").style.color="red";
			hasError=true;
		}
		 if(get("size").value=="")
		{
			get("err_size").innerHTML= "Size Required";
			get("err_size").style.color="red";
			hasError=true;
		}
		else if(isNaN(get("size").value))
		{
			get("err_size").innerHTML= "Numeric value Required";
			get("err_size").style.color="red";
			hasError=true;
		}
		 if(get("weight").value=="")
		{
			get("err_weight").innerHTML= "Weight Required";
			get("err_weight").style.color="red";
			hasError=true;
		}
		else if(isNaN(get("weight").value))
		{
			get("err_weight").innerHTML= "Numeric value Required";
			get("err_weight").style.color="red";
			hasError=true;
		}
		if(get("price").value=="")
		{
			get("err_price").innerHTML= "Price Required";
			get("err_price").style.color="red";
			hasError=true;
		}
		else if(isNaN(get("price").value))
		{
			get("err_price").innerHTML= "Numeric value Required";
			get("err_price").style.color="red";
			hasError=true;
		}
		if(get("info").value=="")
		{
			get("err_info").innerHTML= "Info Required";
			get("err_info").style.color="red";
			hasError=true;
		}
		
		return !hasError;
		
	}
	
	function refresh()
	{
		get("err_ptype").innerHTML="";
	    get("err_size").innerHTML="";
		get("err_weight").innerHTML="";
		get("err_price").innerHTML="";
		get("err_info").innerHTML="";
		
		
	}
	
	