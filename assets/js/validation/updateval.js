
//to validate registered customers' sign up information.

function updatevalidation(){	
  $('input[type=text],input[type=password], input[type=checkbox], select').each(function() {
   if($(this).val() !== "")
       
    $(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
    



 var errormessage="";
 
 
	if($('#title').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#title'),'Please Select a Title');
       errormessage += 1; 
    }
 
    if($('#ufname').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#ufname'),'First name must be entered');
       errormessage += 1; 
    } 	else if(!$('#ufname').val().match(/^[A-Za-z]+$/)){
	 error_display($('#ufname'), 'First name must be alphabet characters only');
    errormessage += 1;
	}
	
	if($('#ulname').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#ulname'),'Last name must be entered');
       errormessage += 1; 
    }	else if(!$('#ulname').val().match(/^[A-Za-z]+$/)){
	 error_display($('#ulname'), 'Last name must be alphabet characters only');
    errormessage += 1;
	}
	
	
    var x=$('#uemail').val();
    var atpos=x.indexOf("@");
    var dotpos=x.lastIndexOf(".");
    if($('#uemail').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#uemail'),'Email must be entered');
        errormessage += 1;
    }else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
    {
      error_display($('#uemail'),'');
	  errormessage += 1;
	  
	 } 
    

 /*   if($('#age').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#age'), 'Age cannot be done');
     
    }else if(
	!$('#age').val().match(/^[0-9]+$/)){
	 error_display($('#age'), ' Age should be in numbers only.');
    
	}else if ($('#age').val().length<4)
		   {
	 error_display($('#age'),'more than four characters. ');//check errormessage empty or not. if not empty there are errors.
	errormessage += 1;
	}*/
			
/*	 if($('#pass').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#pass'),'Your password must be entered');
       errormessage += 1; 
    }else if ($('#pass').val().length<8)
		   {
	    error_display($('#pass'),'Your password should be more than seven characters. ');
		errormessage += 1;
		}else if(!$('#pass').val().match(/[a-z]/)){
	 error_display($('#pass'), ' password should be in combination of upper- and lower-case characters');
    errormessage += 1;
	}	else if(!$('#pass').val().match(/[A-Z]/)){
	 error_display($('#pass'), ' password should be in combination of at least one uppercase letter');
    errormessage += 1;
	}else if(!$('#pass').val().match(/[0-9]/)){
	 error_display($('#pass'), ' password should be in combination of numbers characters');
    errormessage += 1;
	}		
		
		
	if($('#cpass').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#cpass'),'Your repassword must be entered');
        errormessage += 1; 
    }else if (($('#cpass').val()!= '')&&($('#cpass').val()!= $('#passreg').val() ))
		   {
	    error_display($('#cpass'),'Your repassword not matach. ');
		errormessage += 1;
		}	*/	
	
	if($('#uadd').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#uadd'),'Address must be entered');
       errormessage += 1; 
    }	
		if($('#ucity').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#ucity'),'City must be entered');
       errormessage += 1; 
    }	
	if($('#upostal').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#upostal'),'Postal Code must be entered');
       errormessage += 1; 
    }else if(!$('#upostal').val().match(/^[0-9]+$/)){
	 error_display($('#upostal'), ' Postal Code must be numbers ');
    errormessage += 1;
	}
	 if($('#udate').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#udate'),'Date of birth must be entered');
       errormessage += 1; 
       }
	if($('#utel').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#utel'),'Telephone number must be entered');
       errormessage += 1; 
    }else if(!$('#utel').val().match(/^[0-9]{10}$/)){
	 error_display($('#utel'), ' Telephone number must be numbers & 10 digits');
    errormessage += 1;
	}
	


	/* if (!$('#checkbox5').is(':checked')){
		 
		error_display($('#checkbox5'),'You Should read and agree. ');     
		errormessage += 1;
    } */
			
			if(errormessage != ''){
                return false;
            }
	
}
  
    
	// your part
	function error_display(field,msg){
       field.css({  'border-color' : '#f00','background-image':'url(http://localhost/mtc/assets/js/images/invalid.png)','background-repeat': 'no-repeat','background-position': 'right center','margin-bottom':'2px'}).parent('div.has-error').children('span.error').html(msg);	

	}

