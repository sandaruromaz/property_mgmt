
//to validate registered customers' sign up information.

function testvalidation(){	
    $('input[type=text],input[type=password], input[type=checkbox], select').each(function() {
   if($(this).val() !== "")
       
    $(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/new_monis_bakery/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
    



 var errormessage="";
 
	//first name

if($('#test_name').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#test_name'),'First name must be entered');
	errormessage += 1; 
	} 	else if(!$('#test_name').val().match(/^[A-Za-z]+$/)){
	error_display($('#test_name'), 'First name must be alphabet characters only');
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

