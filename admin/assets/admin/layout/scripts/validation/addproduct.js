
//to validate add color category

function addproductvalidation(){	
	$('input[type=text],input[type=number], input[type=file], select,textarea').each(function() {
	if($(this).val() !== "")
	
	$(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
	
	
	
	
	var errormessage="";
 
 
	
    //name
	if($('#productname').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#productname'),'Product Name must be entered');
	errormessage += 1; 
	} 	else if(!$('#productname').val().match(/^[a-zA-Z-& ]+$/)){
	error_display($('#productname'), 'Product Name must be alphabet characters only');
	errormessage += 1;
	}
	
	//category
	if($('#type').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#type'),'Please Select a category');
	errormessage += 1; 
	}
	
	//price	
	if($('#price').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#price'),'Price must be entered');
	errormessage += 1; 
	}else if(!$('#price').val().match(/^[0-9]+$/)){
	error_display($('#price'), ' Price must be numbers ');
	errormessage += 1;
	}	
	
	//description
	if($('#description').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#description'),'Description must be entered');
	errormessage += 1; 
	}	
	

	
	//image 1
    if($('#pimg1').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#pimg1'),'Product image 1 must be added');
       errormessage += 1; 
    } 

	 


	//Quantity
	if($('#quantity').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#quantity'),'Enter');
	errormessage += 1; 
	}else if(!$('#quantity').val().match(/^[0-9]+$/)){
	error_display($('#quantity'), 'only numbers ');
	errormessage += 1;
	}
	//Reorder Level
	if($('#re').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#re'),'Enter');
	errormessage += 1; 
	}else if(!$('#re').val().match(/^[0-9]+$/)){
	error_display($('#re'), 'only numbers ');
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

