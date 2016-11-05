
//to validate add color category

function addartworkvalidation(){	
  $('input[type=text],input[type=password],input[type=file], input[type=checkbox], select,textarea').each(function() {
   if($(this).val() !== "")
       
    $(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
    



 var errormessage="";
 
 
	
   //validate brand
    if($('#artworkimgname').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#artworkimgname'),'Art Work Name name must be entered');
       errormessage += 1; 
    } 	else if(!$('#artworkimgname').val().match(/^[a-zA-Z- ]+$/)){
	 error_display($('#artworkimgname'), 'Art Work Name name must be alphabet characters only');
    errormessage += 1;
	}
	//price	
	if($('#priceart').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#priceart'),'Price must be entered');
	errormessage += 1; 
	}else if(!$('#priceart').val().match(/^[0-9]+$/)){
	error_display($('#priceart'), ' Price must be numbers ');
	errormessage += 1;
	}	
	//validate brand
    if($('#artimg1').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#artimg1'),'Art Work image must be added');
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

