
//to validate registered customers' sign up information.

function feedbackvalidation(){	
  $('input[type=text],input[type=password], input[type=checkbox], select,textarea').each(function() {
   if($(this).val() !== "")
       
    $(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/new_monis_bakery/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
    



 var errormessage="";
 
 
	
 
    if($('#conname').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#conname'),'Name must be entered');
       errormessage += 1; 
    } 	else if(!$('#conname').val().match(/^[A-Za-z]+$/)){
	 error_display($('#conname'), 'Name must be alphabet characters only');
    errormessage += 1;
	}
	

    var x=$('#conemail').val();
    var atpos=x.indexOf("@");
    var dotpos=x.lastIndexOf(".");
    if($('#conemail').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#conemail'),'Email must be entered');
        errormessage += 1;
    }else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
    {
      error_display($('#conemail'),'Email Address is not valid');
	  errormessage += 1;
	  
	 } 
    
	if($('#conmessage').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#vmessage'),'Message name must be entered');
       errormessage += 1; 
    }
	
	if(($('#conphone').val() !='')&&(!$('#phone').val().match(/^[0-9]{10}$/))){//check errormessage empty or not. if not empty there are errors.
        error_display($('#conphone'),'Must be numbers & 10 digits');
       errormessage += 1; 
    }
			
			if(errormessage != ''){
                return false;
            }
	
}
  
    
	// your part
	function error_display(field,msg){
       field.css({  'border-color' : '#f00','background-image':'url(http://localhost/new_monis_bakery/assets/js/images/invalid.png)','background-repeat': 'no-repeat','background-position': 'right center','margin-bottom':'2px'}).parent('div.has-error').children('span.error').html(msg);	

	}

