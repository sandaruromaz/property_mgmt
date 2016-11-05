
function adminloginvalidation(){	
   $(":input[type='text'],[type='password']").each(function() {
   if($(this).val() !== "")
       
    $(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
    



	var errormessage="";
	
	
	

	//email
	var x=$('#emailadmin1').val();
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if($('#emailadmin1').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#emailadmin1'),'Email must be entered');
	errormessage += 1;
	}else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	{
	error_display($('#emailadmin1'),'Email Address is not valid.');
	errormessage += 1;
	
	} 
	
	//password
	if($('#passadmin1').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#passadmin1'),'Your password must be entered');
	errormessage += 1; 
	}else if ($('#passadmin1').val().length<7)
	{
	error_display($('#passadmin1'),'Your password should be more than seven characters. ');
	errormessage += 1;
	}		
		
		

			if(errormessage != ''){
                return false;
            }
	
}
  
    
	// your part
	function error_display(field,msg){
       field.css({  'border-color' : '#f00','background-image':'url(http://localhost/mtc/assets/js/images/invalid.png)','background-repeat': 'no-repeat','background-position': 'right center','margin-bottom':'2px'}).parent('div.has-error').children('span.error').html(msg);	

	}

