
function newslettervalidation(){	
	
	       var errormessage="";

			
	// To validate First name information.
		 	var x=document.getElementById('newsemail').value;
			var atpos=x.indexOf("@");
			var dotpos=x.lastIndexOf(".");			
			if(document.getElementById('newsemail').value ==""){     
			 	errormessage += "Please Enter your Email Address.\n";
			 	document.getElementById('newsemail').style.borderColor="#F00";
			 //To validate the corectness of Email Address.		
			}else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
			{
			  errormessage += "Incorrect Email Address. \n";
			  	document.getElementById('newsemail').style.backgroundColor="";
				}else{
				document.getElementById('newsemail').style.borderColor="#FFFFFF";
			}


    // call part
  if (errormessage !== "") {

    $('#erroMsg').fadeIn('slow').html(errormessage);
      setTimeout(function(){
         $('#erroMsg').fadeOut('slow');
      },3000);
    return false;
  	}
 	return true;
}
