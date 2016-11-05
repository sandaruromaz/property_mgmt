
//to validate add category.

function reportgeneratevalidation(){	
	$('input[type=text],input[type=password], input[type=checkbox], select,textarea').each(function() {
	if($(this).val() !== "")
	
	$(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
    



	 var errormessage="";
 
 
	
	//report
	if($('#reporttype').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#reporttype'),'Please Select a Report Type');
	errormessage += 1; 
	}
	//from
	if($('#from').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#from'),'Must be entered');
	errormessage += 1; 
	}
	//to
	if($('#to').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#to'),'Must be entered');
	errormessage += 1; 
	}

			
			if(errormessage != ''){
                return false;
            }
	}
  
    
	// error
	function error_display(field,msg){
	field.css({  'border-color' : '#f00','background-image':'url(http://localhost/mtc/assets/js/images/invalid.png)','background-repeat': 'no-repeat','background-position': 'right center','margin-bottom':'2px'}).parent('div.has-error').children('span.error').html(msg);	

	}

