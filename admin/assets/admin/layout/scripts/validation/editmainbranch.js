
//to validate add category.

function editmainbranchvalidation(){	
	$('input[type=text],input[type=password], input[type=checkbox], select,textarea').each(function() {
	if($(this).val() !== "")
	
	$(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
    



	 var errormessage="";
 
 
	
    //Company Name
	if($('#cname').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#cname'),'Company Name must be entered');
	errormessage += 1; 
	} 
	
    //Location
	if($('#clocation').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#clocation'),'Location Name must be entered');
	errormessage += 1; 
	} 	else if(!$('#clocation').val().match(/^[0-9a-zA-Z ]+$/)){
	error_display($('#clocation'), 'Location Name must be alphabet characters &amp; numbers only');
	errormessage += 1;
	}	
	
    //Address
	if($('#caddress').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#caddress'),'Address  must be entered');
	errormessage += 1; 
	} 	else if(!$('#caddress').val().match(/^[0-9a-zA-Z,./ ]+$/)){
	error_display($('#caddress'), 'Address must be alphabet characters &amp; numbers only');
	errormessage += 1;
	}
		
	//email
	var x=$('#cemail').val();
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if($('#cemail').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#cemail'),'Email must be entered');
	errormessage += 1;
	}else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	{
	error_display($('#cemail'),'Email Address is not valid.');
	errormessage += 1;
	
	} 
	//contact 1
	if($('#ccontact1').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#ccontact1'),'Contatc no 1  must be entered');
	errormessage += 1; 
	}else if(!$('#ccontact1').val().match(/^\+?([0-9]{2})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/)){
	error_display($('#ccontact1'), ' Contatc no 1  must be number & +XX XXX XXX XXX');
	errormessage += 1;
	}	
	//contact 2
	if( ($('#ccontact2').val() != '') && (!$('#ccontact2').val().match(/^\+?([0-9]{2})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/))){
	error_display($('#ccontact2'), ' Contatc no 2  must be number & +XX XXX XXX XXX');
	errormessage += 1;
	}
	
	//contact 3
	if( ($('#ccontact3').val() != '') && (!$('#ccontact3').val().match(/^\+?([0-9]{2})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/))){
	error_display($('#ccontact3'), ' Contatc no 3  must be number & +XX XXX XXX XXX');
	errormessage += 1;
	}	
	
	//fax
	if( ($('#cfax').val() != '') && (!$('#cfax').val().match(/^\+?([0-9]{2})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/))){
	error_display($('#cfax'), ' Fax no  must be number & +XX XXX XXX XXX');
	errormessage += 1;
	}	
	
    //map
	if($('#cmap').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#cmap'),'Map must be entered');
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

