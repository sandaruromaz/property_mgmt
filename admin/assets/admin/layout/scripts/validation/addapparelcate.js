
//to validate add category.

function addapparelcatevalidation(){	
	$('input[type=text],input[type=password], input[type=checkbox], select,textarea').each(function() {
	if($(this).val() !== "")
	
	$(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
    



	 var errormessage="";
 
 
	
    //name
	if($('#catenames').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#catenames'),'Category Name must be entered');
	errormessage += 1; 
	} 	else if(!$('#catenames').val().match(/^[a-zA-Z- ]+$/)){
	error_display($('#catenames'), 'Category Name must be alphabet characters &amp; "-" only');
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

