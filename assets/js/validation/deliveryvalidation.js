
//to validate registered customers' sign up information.

function deliverydetailsvalidation(){	
  $('input[type=text],input[type=password], input[type=checkbox], select').each(function() {
   if($(this).val() !== "")
       
    $(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
    



 var errormessage="";
 
	
	//address1
	if($('#add').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#add'),'Address must be entered');
	errormessage += 1; 
	}
	//city	
	if($('#city').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#city'),'City must be entered');
	errormessage += 1; 
	}
	//postal	
	if($('#postal').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#postal'),'Postal Code must be entered');
	errormessage += 1; 
	}else if(!$('#postal').val().match(/^[0-9]+$/)){
	error_display($('#postal'), ' Postal Code must be numbers ');
	errormessage += 1;
	}
	//contact 1
	if($('#Mobile').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#Mobile'),'Contatc no 1  must be entered');
	errormessage += 1; 
	}else if(!$('#Mobile').val().match(/^[0-9]{10}$/)){
	error_display($('#Mobile'), ' Contatc no 1  must be numbers & 10 digits');
	errormessage += 1;
	}

			
			if(errormessage != ''){
                return false;
            }
	
	}
  
    
	// error part
	function error_display(field,msg){
    field.css({  'border-color' : '#f00','background-image':'url(http://localhost/mtc/assets/js/images/invalid.png)','background-repeat': 'no-repeat','background-position': 'right center','margin-bottom':'2px'}).parent('div.has-error').children('span.error').html(msg);	

	}

