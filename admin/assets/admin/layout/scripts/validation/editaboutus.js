
//to validate add color category

function editaboutusvalidation(){	
  $('input[type=text],input[type=password], input[type=checkbox], select,textarea').each(function() {
   if($(this).val() !== "")
       
    $(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/mtc/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
    



 var errormessage="";
 
 
	
 //vision
    if($('#vision').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#vision'),'vision must be entered');
       errormessage += 1; 
    } 
//mission
    if($('#mission').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#mission'),'mission must be entered');
       errormessage += 1; 
    } 	

//about
    if($('#about').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#about'),'about must be entered');
       errormessage += 1; 
    } 			

//history
    if($('#history').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#history'),'history must be entered');
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

