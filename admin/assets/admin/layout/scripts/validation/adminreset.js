
function adminresetvalidation(){	
   $(":input[type='text'],[type='password']").each(function() {
   if($(this).val() !== "")
       
    $(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
    



	var errormessage="";
	
	
	

	//email
	var x=$('#emailforget').val();
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if($('#emailforget').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#emailforget'),'Email must be entered');
	errormessage += 1;
	}else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	{
	error_display($('#emailforget'),'Email Address is not valid.');
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

