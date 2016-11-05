
//to validate registered customers' sign up information.

function registrvalidation(){	
    $('input[type=text],input[type=password], input[type=checkbox], select').each(function() {
   if($(this).val() !== "")
       
    $(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/new_monis_bakery/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
    



 var errormessage="";
 
	//title
	if($('#title').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#title'),'Please Select a Title');
	errormessage += 1; 
	}
	//first name
	if($('#fname').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#fname'),'First name must be entered');
	errormessage += 1; 
	} 	else if(!$('#fname').val().match(/^[A-Za-z]+$/)){
	error_display($('#fname'), 'First name must be alphabet characters only');
	errormessage += 1;
	}
	//last name
	if($('#lname').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#lname'),'Last name must be entered');
	errormessage += 1; 
	}	else if(!$('#lname').val().match(/^[A-Za-z]+$/)){
	error_display($('#lname'), 'Last name must be alphabet characters only');
	errormessage += 1;
	}
	
	//email
	var x=$('#email').val();
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if($('#email').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#email'),'Email must be entered');
	errormessage += 1;
	}else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	{
	error_display($('#email'),'');
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
	//password
	if($('#pass').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#pass'),'Your password must be entered');
	errormessage += 1; 
	}else if ($('#pass').val().length<7)
	{
	error_display($('#pass'),'Your password should be more than Seven characters. ');
	errormessage += 1;
	}else if(!$('#pass').val().match(/[a-z]/)){
	error_display($('#pass'), ' password should be in combination of at least one lowercase letter');
	errormessage += 1;
	}	else if(!$('#pass').val().match(/[A-Z]/)){
	error_display($('#pass'), ' password should be in combination of at least one uppercase letter');
	errormessage += 1;
	}else if(!$('#pass').val().match(/[0-9]/)){
	error_display($('#pass'), ' password should be in combination of numbers characters');
	errormessage += 1;
	}		
	
	//repeat password
	if(($('#pass').val()!= '')&&($('#cpass').val() == '')){//check errormessage empty or not. if not empty there are errors.
	error_display($('#cpass'),'Your repeat password must be entered');
	errormessage += 1; 
	}else if (($('#cpass').val()!= '')&&($('#cpass').val()!= $('#pass').val()))
	{ //check cpass not empty and cpass not equel to pass 
	error_display($('#cpass'),'Your repeat password not matach. ');
	errormessage += 1;
	}		
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
	if($('#tel').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#tel'),'Contatc no 1  must be entered');
	errormessage += 1; 
	}else if(!$('#tel').val().match(/^[0-9]{10}$/)){
	error_display($('#tel'), ' Contatc no 1  must be numbers & 10 digits');
	errormessage += 1;
	}
	//contact 2
	if (($('#mob').val()!= '')&&(!$('#mob').val().match(/^[0-9]{10}$/))){
	error_display($('#mob'), ' Contatc no 2  must be numbers & 10 digits');
	errormessage += 1;
	}
	if($('#dob').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#dob'),'Date of birth must be entered');
	errormessage += 1; 
	}
	//agree
	if (!$('#checkbox5').is(':checked')){
	
	error_display($('#checkbox5'),'You Should read and agree. ');     
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

