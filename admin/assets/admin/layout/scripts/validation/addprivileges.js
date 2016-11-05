
//to validate add color category

function addprivilegesvalidation(){	
  $('input[type=text],input[type=password], input[type=checkbox], select,textarea').each(function() {
   if($(this).val() !== "")
       
    $(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
    



 var errormessage="";
 
 
	
	//userrole
	if($('#userrole').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#userrole'),'Please select a user role');
	errormessage += 1; 
	}
	

	//usermenu
	if($('#usermenu').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#usermenu'),'Please select a user menu');
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

