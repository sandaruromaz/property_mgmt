
//to validate registered customers' sign up information.

function designordervalidation(){	
  $('input[type=text],input[type=number], input[type=file], select, textarea').each(function() {
   if($(this).val() !== "")
       
    $(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
    



 var errormessage="";
 
	//image 1
	if($('#fileChooser1').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#fileChooser1'),'Front image must be entered');
	errormessage += 1; 
	}
	
	//image 2
	if($('#fileChooser2').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#fileChooser2'),'Back image must be entered');
	errormessage += 1; 
	}
	//size
	if($('#dsize').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#dsize'),'Please Select a size');
	errormessage += 1; 
	}	
	//title
	if($('#dqty').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#dqty'),' Quantity must be entered');
	errormessage += 1; 
	}else if(!$('#dqty').val().match(/^[0-9]+$/)){
	error_display($('#dqty'), ' Quantity must be numbers ');
	errormessage += 1;
	}
	//city	
	if($('#dcomment').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#dcomment'),'comment must be entered');
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

