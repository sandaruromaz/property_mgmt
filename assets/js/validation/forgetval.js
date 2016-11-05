
function forgetvalidation(){	
   $(":input[type='text'],[type='password']").each(function() {
   if($(this).val() !== "")
       
    $(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc2/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
    



 var errormessage="";
 
 

/* 
    if($('#fname').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#fname'),'First name must be entered');
       errormessage += 1; 
    } 
	*/
	
    var x=$('#forgetemail').val();
    var atpos=x.indexOf("@");
    var dotpos=x.lastIndexOf(".");
    if($('#forgetemail').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#forgetemail'),'Email must be entered');
        errormessage += 1;
    }else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
    {
      error_display($('#forgetemail'),'Email Address is not valid.');
	  errormessage += 1;
	  
	 } 
    
/*	
    if($('#age').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#age'), 'Age cannot be done');
     
    }else if(
	!$('#age').val().match(/^[0-9]+$/)){
	 error_display($('#age'), ' Age should be in numbers only.');
    
	}else if ($('#age').val().length<4)
		   {
	 error_display($('#age'),'more than four characters. ');//check errormessage empty or not. if not empty there are errors.
	errormessage += 1;
	}*/
			
		
		
		
	/*if($('#rpw').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#rpw'),'Your repassword must be entered');
        errormessage += 1; 
    }else if (($('#rpw').val()!= '')&&($('#rpw').val()!= $('#pw').val() ))
		   {
	    error_display($('#rpw'),'Your repassword not matach. ');
		errormessage += 1;
		}		
		
		
	
	 if (!$('#read').is(':checked')){
		 
		error_display($('#read'),'read and agree . ');     
		errormessage += 1;
    } */
			
			if(errormessage != ''){
                return false;
            }
	
}
  
    
	// your part
	function error_display(field,msg){
       field.css({  'border-color' : '#f00','background-image':'url(http://localhost/mtc2/assets/js/images/invalid.png)','background-repeat': 'no-repeat','background-position': 'right center','margin-bottom':'2px'}).parent('div.has-error').children('span.error').html(msg);	

	}

