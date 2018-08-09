function validate()
{
        if(document.getElementById("r1").checked==true)
        {
         if( document.index.fname.value == "" || isNaN(document.index.fname.value)==false)
         {
                var text;
                text="please provide your name";
                document.getElementById("ferror").innerHTML = text;
            return false;
         }

         /*if( document.index.dob.value == "" || isNaN(document.index.dob.value)==true)
         {
            alert( "Please provide your Date of Birth!" );
            document.index.dob.focus() ;
            return false;
         }*/

         if( document.index.ins.value == "" || isNaN(document.index.ins.value)==false)
         {
                var text;
                text="please provide your inntitution name";
                document.getElementById("ierror").innerHTML = text;
            return false;
         }

         if( document.index.email.value == "" )
         {
                var text;
                text="please provide your email id";
                document.getElementById("eerror").innerHTML = text;
            return false;
         }

         var emailID = document.index.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email ID")
            document.index.email.focus() ;
            return false;
         }


         if( document.index.contactnumber.value == "" ||
         isNaN( document.index.contactnumber.value )==true ||
         document.index.contactnumber.value.length < 11 )
         {
                var text;
                text="Contact number can't be empty or not less than 11";
                document.getElementById("cerror").innerHTML = text;
            return false;
         }

         /*if( document.index.nidnumber.value == "" ||
         isNaN( document.index.nidnumber.value )==true ||
         document.index.nidnumber.value.length < 10 )
         {
                var text;
                text="Nid number can't be empty or not less than 10";
                document.getElementById("nerror").innerHTML = text;
            return false;
         }*/

         if( document.index.address.value == "" ||
         isNaN( document.index.address.value )==false ||
         document.index.address.value.length > 20 )
         {
                var text;
                text="Address can't be empty or not more than 10";
                document.getElementById("aerror").innerHTML = text;
            return false;
         }

         if(document.getElementById('phn_status').innerHTML== "Phoneno Already Exist"){
             return false;
         }


         return( true );
        }

        else if(document.getElementById("r2").checked==true)
        {
                if( document.index.fname.value == "" || isNaN(document.index.fname.value)==false)
                {
                       var text;
                       text="please provide your name";
                       document.getElementById("ferror").innerHTML = text;
                   return false;
                }
       
                if( document.index.email.value == "" )
                {
                       var text;
                       text="please provide your email id";
                       document.getElementById("eerror").innerHTML = text;
                   return false;
                }
       
                var emailID = document.index.email.value;
                atpos = emailID.indexOf("@");
                dotpos = emailID.lastIndexOf(".");
                
                if (atpos < 1 || ( dotpos - atpos < 2 )) 
                {
                   alert("Please enter correct email ID")
                   document.index.email.focus() ;
                   return false;
                }
       
       
                if( document.index.contactnumber.value == "" ||
                isNaN( document.index.contactnumber.value )==true ||
                document.index.contactnumber.value.length < 11 )
                {
                       var text;
                       text="Contact number can't be empty or not less than 11";
                       document.getElementById("cerror").innerHTML = text;
                   return false;
                }


       
                if( document.index.nidnumber.value == "" ||
                isNaN( document.index.nidnumber.value )==true ||
                document.index.nidnumber.value.length < 10 )
                {
                       var text;
                       text="Nid number can't be empty or not less than 10";
                       document.getElementById("nerror").innerHTML = text;
                   return false;
                }
       
                if( document.index.address.value == "" ||
                isNaN( document.index.address.value )==false ||
                document.index.address.value.length > 20 )
                {
                       var text;
                       text="Address can't be empty or not more than 10";
                       document.getElementById("aerror").innerHTML = text;
                   return false;
                }
                if(document.getElementById('phn_status').innerHTML== "Phoneno Already Exist"){
                    return false;
                }


                return( true );

        }

            else if(document.getElementById("r3").checked==true)
        {
                if( document.index.fname.value == "" || isNaN(document.index.fname.value)==false)
                {
                       var text;
                       text="please provide your name";
                       document.getElementById("ferror").innerHTML = text;
                   return false;
                }
       
                if( document.index.ins.value == "" || isNaN(document.index.ins.value)==false)
                {
                       var text;
                       text="please provide your inntitution name";
                       document.getElementById("ierror").innerHTML = text;
                   return false;
                }
       
                if( document.index.email.value == "" )
                {
                       var text;
                       text="please provide your email id";
                       document.getElementById("eerror").innerHTML = text;
                   return false;
                }
       
                var emailID = document.index.email.value;
                atpos = emailID.indexOf("@");
                dotpos = emailID.lastIndexOf(".");
                
                if (atpos < 1 || ( dotpos - atpos < 2 )) 
                {
                   alert("Please enter correct email ID")
                   document.index.email.focus() ;
                   return false;
                }
       
       
                if( document.index.contactnumber.value == "" ||
                isNaN( document.index.contactnumber.value )==true ||
                document.index.contactnumber.value.length < 11 )
                {
                       var text;
                       text="Contact number can't be empty or not less than 11";
                       document.getElementById("cerror").innerHTML = text;
                   return false;
                }
       
                if( document.index.nidnumber.value == "" ||
                isNaN( document.index.nidnumber.value )==true ||
                document.index.nidnumber.value.length < 10 )
                {
                       var text;
                       text="Nid number can't be empty or not less than 10";
                       document.getElementById("nerror").innerHTML = text;
                   return false;
                }
       
                if( document.index.address.value == "" ||
                isNaN( document.index.address.value )==false ||
                document.index.address.value.length > 20 )
                {
                       var text;
                       text="Address can't be empty or not more than 10";
                       document.getElementById("aerror").innerHTML = text;
                   return false;
                }
                if(document.getElementById('phn_status').innerHTML== "Phoneno Already Exist"){
                    return false;
                }

                return( true );
        }
        else 
        {
                alert("Please select option first");
                return(false);
        }

}

function checkphone()
{
 var phnverify=document.getElementById( "veriphn" ).value;
	
 if(phnverify)
 {
  $.ajax({
  type: 'post',
  url: 'checkphn.php',
  data: {
   user_phone:phnverify,
  },
  success: function (response) {
   $( '#phn_status' ).html(response);
   if(response=="OK")	
   {
    return true;	
   }
   else
   {
    return false;	
   }
  }
  });
 }
 else
 {
  $( '#phn_status' ).html("");
  return false;
 }
}