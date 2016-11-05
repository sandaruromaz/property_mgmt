
//to validate registered customers' sign up information.

function changepassvalidation(){	
  $('input[type=text],input[type=password], input[type=checkbox], select').each(function() {
   if($(this).val() !== "")
       
    $(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
    



 var errormessage="";
 
 
	
			
	 if($('#ppass').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#ppass'),'Your current password must be entered');
       //errormessage += 1; 
    }else if ($('#ppass').val().length<7)
		   {
	    error_display($('#ppass'),'Your password should be more than seven characters. ');
		//errormessage += 1;
		}else if(!$('#ppass').val().match(/[a-z]/)){
	 error_display($('#ppass'), ' password should be in combination of upper- and lower-case characters');
   // errormessage += 1;
	}	else if(!$('#ppass').val().match(/[A-Z]/)){
	 error_display($('#ppass'), ' password should be in combination of at least one uppercase letter');
    //errormessage += 1;
	}else if(!$('#ppass').val().match(/[0-9]/)){
	 error_display($('#ppass'), ' password should be in combination of numbers characters');
    errormessage += 1;
	}
	
		 if($('#pnewpass').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#pnewpass'),'Your password must be entered');
       errormessage += 1; 
    }else if ($('#pnewpass').val().length<7)
		   {
	    error_display($('#pnewpass'),'Your password should be more than seven characters. ');
		errormessage += 1;
		}else if(!$('#pnewpass').val().match(/[a-z]/)){
	 error_display($('#pnewpass'), ' password should be in combination of upper- and lower-case characters');
    errormessage += 1;
	}	else if(!$('#pnewpass').val().match(/[A-Z]/)){
	 error_display($('#pnewpass'), ' password should be in combination of at least one uppercase letter');
    errormessage += 1;
	}else if(!$('#pnewpass').val().match(/[0-9]/)){
	 error_display($('#pnewpass'), ' password should be in combination of numbers characters');
    errormessage += 1;
	}		
		
		
	if(($('#pnewpass').val()!= '')&&($('#ucpass').val() == '')){//check errormessage empty or not. if not empty there are errors.
        error_display($('#ucpass'),'Your repeat password must be entered');
        errormessage += 1; 
    }else if (($('#ucpass').val()!= '')&&($('#ucpass').val()!= $('#pnewpass').val() ))
		   {
	    error_display($('#ucpass'),'Your repeat password not matach. ');
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

