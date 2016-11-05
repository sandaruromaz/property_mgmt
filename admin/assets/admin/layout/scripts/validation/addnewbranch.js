
//to validate add category.

function addnewbranchvalidation(){	
	$('input[type=text],input[type=password], input[type=checkbox], select,textarea').each(function() {
	if($(this).val() !== "")
	
	$(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
    



	 var errormessage="";
 
 

	
    //Location
	if($('#blocation').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#blocation'),'Location Name must be entered');
	errormessage += 1; 
	} 	else if(!$('#blocation').val().match(/^[0-9a-zA-Z ]+$/)){
	error_display($('#blocation'), 'Location Name must be alphabet characters &amp; numbers only');
	errormessage += 1;
	}	
	
    //Address
	if($('#baddress').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#baddress'),'Address  must be entered');
	errormessage += 1; 
	} 	else if(!$('#baddress').val().match(/^[0-9a-zA-Z,./ ]+$/)){
	error_display($('#baddress'), 'Address must be alphabet characters &amp; numbers only');
	errormessage += 1;
	}
		
	//email
	var x=$('#bemail').val();
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	 if( ($('#bemail').val() != '')&&(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length))
	{
	error_display($('#bemail'),'Email Address is not valid.');
	errormessage += 1;
	
	} 
	//contact 1
	if($('#bcontact1').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#bcontact1'),'Contatc no 1  must be entered');
	errormessage += 1; 
	}else if(!$('#bcontact1').val().match(/^\+?([0-9]{2})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/)){
	error_display($('#bcontact1'), ' Contatc no 1  must be number & +XX XXX XXX XXX');
	errormessage += 1;
	}	
	//contact 2
	if( ($('#bcontact2').val() != '') && (!$('#bcontact2').val().match(/^\+?([0-9]{2})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/))){
	error_display($('#bcontact2'), ' Contatc no 2  must be number & +XX XXX XXX XXX');
	errormessage += 1;
	}
	
	//contact 3
	if( ($('#bcontact3').val() != '') && (!$('#bcontact3').val().match(/^\+?([0-9]{2})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/))){
	error_display($('#bcontact3'), ' Contatc no 3  must be number & +XX XXX XXX XXX');
	errormessage += 1;
	}	
	
	//fax
	if( ($('#bfax').val() != '') && (!$('#bfax').val().match(/^\+?([0-9]{2})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/))){
	error_display($('#bfax'), ' Fax no  must be number & +XX XXX XXX XXX');
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

