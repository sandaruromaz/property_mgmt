
//to validate registered customers' sign up information.

function reservationvalidation(){	



  $('input[type=text],input[type=password], input[type=number], select,textarea').each(function() {
   if($(this).val() !== "")
       
    $(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/new_monis_bakery/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
    



 var errormessage="";
 
 
	if($('#chair_count').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#chair_count'),'chair name must be entered');
       errormessage += 1; 
    }


  if($('#table_count').val() ==''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#table_count'),'Number of Tables must be enterd');
       errormessage += 1; 
    }

	if($('#start_time').val() ==''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#start_time'),'Start Time must be enterd');
       errormessage += 1; 
    }

    if(($('#date').val() =='')){//check errormessage empty or not. if not empty there are errors.
        error_display($('#date'),'Date Time must be enterd');
       errormessage += 1; 
    }
		
		if(($('#end_time').val() =='')){//check errormessage empty or not. if not empty there are errors.
        error_display($('#end_time'),'Start Time must be enterd');
       errormessage += 1; 
     }
       
   
    


  
      if(errormessage != ''){
                return false;
            }
  
}
  
    
  // your part
  function error_display(field,msg){
       field.css({  'border-color' : '#f00','background-image':'url(http://localhost/new_monis_bakery/assets/js/images/invalid.png)','background-repeat': 'no-repeat','background-position': 'right center','margin-bottom':'2px'}).parent('div.has-error').children('span.error').html(msg); 

  }
