
function reviewvalidation(){	
   $(":input[type='radio'],textarea").each(function() {
   if($(this).val() !== "")
       
    $(this).css({  'border-color' : '#00ba09','background-image':'url(http://localhost/new_monis_bakery/assets/js/images/valid.png)','background-repeat': 'no-repeat','background-position': 'right center'}).parent('div.has-error').children('span.error').html('');
	});
    



 var errormessage="";
 		if($('#comments').val() == ''){//check errormessage empty or not. if not empty there are errors.
        error_display($('#comments'),'Comment  must be entered');
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

