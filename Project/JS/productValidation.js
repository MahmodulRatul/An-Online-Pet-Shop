    function get(id){
			return document.getElementById(id);
		}
	
	
      function validateProduct()
    {
		refresh();
		
		var hasError=false;
		
		if(get("pname").value=="")
		{
			get("err_pname").innerHTML= "Product Name Required";
			hasError=true;
		}
		if(get("type_id").options.selectedIndex==0)
		{
			get("err_type").innerHTML= "Not Selected";
			hasError=true;
		}
		 if(get("quantity").value=="")
		{
			get("err_quantity").innerHTML= "Quanitity Required";
			hasError=true;
		}
		else if(isNaN(get("quantity").value))
		{
			get("err_quantity").innerHTML= "Numeric value Required";
			hasError=true;
		}
		if(get("price").value=="")
		{
			get("err_price").innerHTML= "Price Required";
			hasError=true;
		}
		else if(isNaN(get("price").value))
		{
			get("err_price").innerHTML= "Numeric value Required";
			hasError=true;
		}
		if(get("info").value=="")
		{
			get("err_info").innerHTML= "Info Required";
			hasError=true;
		}
		
		return !hasError;
		
	}
	
	function refresh()
	{
		get("err_pname").innerHTML="";
		get("err_type").innerHTML="";
	    get("err_quantity").innerHTML="";
		get("err_price").innerHTML="";
		get("err_info").innerHTML="";
		
		
	}
	
	