
//to validate add category.

function edituserprofilevalidation(){	
	$('input[type=text],input[type=password], input[type=checkbox], select,textarea').each(function() {
	if($(this).val() !== "")
	
	$(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
    



	 var errormessage="";
 
 

	//title
	if($('#ptitle').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#ptitle'),'Please Select a Title');
	errormessage += 1; 
	}
	//first name
	if($('#pfname').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#pfname'),'First name must be entered');
	errormessage += 1; 
	} 	else if(!$('#pfname').val().match(/^[A-Za-z]+$/)){
	error_display($('#pfname'), 'First name must be alphabet characters only');
	errormessage += 1;
	}
	//last name
	if($('#plname').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#plname'),'Last name must be entered');
	errormessage += 1; 
	}	else if(!$('#plname').val().match(/^[A-Za-z]+$/)){
	error_display($('#plname'), 'Last name must be alphabet characters only');
	errormessage += 1;
	}
	//address1
	if($('#padd').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#padd'),'Address must be entered');
	errormessage += 1; 
	}
	//city	
	if($('#pcity').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#pcity'),'City must be entered');
	errormessage += 1; 
	}			

	//contact 1
	if($('#pcontact').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#pcontact'),'Contatc no 1  must be entered');
	errormessage += 1; 
	}else if(!$('#pcontact').val().match(/^[0-9]{10}$/)){
	error_display($('#pcontact'), ' Contatc no 1  must be numbers & 10 digits.');
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

