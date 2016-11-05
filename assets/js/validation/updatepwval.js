
//to validate registered customers' sign up information.

function changepwvalidation(){	
  $('input[type=text],input[type=password], input[type=checkbox], select').each(function() {
   if($(this).val() !== "")
       
    $(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
    



 var errormessage="";
 
 
	
			
	 if($('#upass').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#upass'),'Your current password dd must be entered');
       //errormessage += 1; 
    }else if ($('#upass').val().length<7)
		   {
	    error_display($('#upass'),'Your password should be more than seven characters. ');
		//errormessage += 1;
		}else if(!$('#upass').val().match(/[a-z]/)){
	 error_display($('#upass'), ' password should be in combination of upper- and lower-case characters');
   // errormessage += 1;
	}	else if(!$('#upass').val().match(/[A-Z]/)){
	 error_display($('#upass'), ' password should be in combination of at least one uppercase letter');
    //errormessage += 1;
	}else if(!$('#upass').val().match(/[0-9]/)){
	 error_display($('#upass'), ' password should be in combination of numbers characters');
    errormessage += 1;
	}
	
		 if($('#unewpass').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#unewpass'),'Your password must be entered');
       errormessage += 1; 
    }else if ($('#unewpass').val().length<7)
		   {
	    error_display($('#unewpass'),'Your password should be more than seven characters. ');
		errormessage += 1;
		}else if(!$('#unewpass').val().match(/[a-z]/)){
	 error_display($('#unewpass'), ' password should be in combination of upper- and lower-case characters');
    errormessage += 1;
	}	else if(!$('#unewpass').val().match(/[A-Z]/)){
	 error_display($('#unewpass'), ' password should be in combination of at least one uppercase letter');
    errormessage += 1;
	}else if(!$('#unewpass').val().match(/[0-9]/)){
	 error_display($('#unewpass'), ' password should be in combination of numbers characters');
    errormessage += 1;
	}		
		
		
	if(($('#unewpass').val()!='')&&($('#conpass').val() =='')){//check errormessage empty or not. if not empty there are errors.
        error_display($('#conpass'),'Your repeat password must be entered');
        errormessage += 1; 
    }else if (($('#conpass').val()!='')&&($('#conpass').val()!= $('#unewpass').val() ))
		   {
	    error_display($('#conpass'),'Your repeat password not matach. ');
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

