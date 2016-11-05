
//to validate add color category

function addnewsvalidation(){	
  $('input[type=text],input[type=password],input[type=file], input[type=checkbox], select,textarea').each(function() {
   if($(this).val() !== "")
       
    $(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
    



 var errormessage="";
 
 
	
   //validate brand
    if($('#ntopic').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#ntopic'),'Topic must be entered');
       errormessage += 1; 
    } 	else if(!$('#ntopic').val().match(/^[a-zA-Z ]+$/)){
	 error_display($('#topic'), 'Topic must be alphabet characters only');
    errormessage += 1;
	}
	//content
	if($('#ncontent').val() == ''){//check errormessage empty or not. if not empty there are errors.
	error_display($('#ncontent'),'Content must be entered');
	errormessage += 1; 
	}	
	//validate brand
    if($('#newsimg1').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#newsimg1'),'News image must be added');
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

