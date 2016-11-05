
//to validate add color category

function addapparel(){	
	$('input[type=text],input[type=number], input[type=file], select,textarea').each(function() {
	if($(this).val() !== "")
	
	$(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
	
	
	
	
	var errormessage="";
 
 
	
    //name
	if($('#apparelname').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#apparelname'),'Apparel Name must be entered');
	errormessage += 1; 
	} 	else if(!$('#apparelname').val().match(/^[a-zA-Z-& ]+$/)){
	error_display($('#apparelname'), 'Apparel Name must be alphabet characters only');
	errormessage += 1;
	}
	
	//category
	if($('#apptype').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#apptype'),'Please Select a category');
	errormessage += 1; 
	}
	
	//price	
	if($('#appprice').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#appprice'),'Price must be entered');
	errormessage += 1; 
	}else if(!$('#appprice').val().match(/^[0-9]+$/)){
	error_display($('#appprice'), ' Price must be numbers ');
	errormessage += 1;
	}	
	

	//image 1
    if($('#appimg1').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#appimg1'),'Apparel image 1 must be added');
       errormessage += 1; 
    } 
	//image 2
    if($('#appimg2').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#appimg2'),'Apparel image 2 must be added');
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

