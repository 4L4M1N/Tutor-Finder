function verify()
{
        if(document.getElementById("r1").checked==true)
        {
         if( document.login.uname.value == "" )
         {
                var text;
                text="please provide your contact number";
                document.getElementById("uerror").innerHTML = text;
            return false;
         }

         if( document.login.pname.value == "")
         {
                var text;
                text="please provide your password";
                document.getElementById("perror").innerHTML = text;
            return false;
         }

         return( true );
        }

        else if(document.getElementById("r2").checked==true)
        {
                if( document.login.uname.value == "")
                {
                       var text;
                       text="please provide your contact number";
                       document.getElementById("uerror").innerHTML = text;
                   return false;
                }

                if( document.login.pname.value == "")
                {
                       var text;
                       text="please provide your password";
                       document.getElementById("perror").innerHTML = text;
                   return false;
                }

                return( true );
        }

            else if(document.getElementById("r3").checked==true)
        {
                if( document.login.uname.value == "")
                {
                       var text;
                       text="please provide your contact number";
                       document.getElementById("uerror").innerHTML = text;
                   return false;
                }
       
                if( document.login.pname.value == "")
                {
                       var text;
                       text="please provide your password";
                       document.getElementById("perror").innerHTML = text;
                   return false;
                }
       
                return( true );
        }

        else if(document.getElementById("r4").checked==true)
        {
                if( document.login.uname.value == "")
                {
                       var text;
                       text="please provide your contact number";
                       document.getElementById("uerror").innerHTML = text;
                   return false;
                }
       
                if( document.login.pname.value == "")
                {
                       var text;
                       text="please provide your password";
                       document.getElementById("perror").innerHTML = text;
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
