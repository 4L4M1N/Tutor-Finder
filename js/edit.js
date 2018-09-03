function validate()
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

         if( document.index.address.value == "" ||
         isNaN( document.index.address.value )==false ||
         document.index.address.value.length > 20 )
         {
                var text;
                text="Address can't be empty or not more than 10";
                document.getElementById("aerror").innerHTML = text;
            return false;
         }

         return( true );
        
    }