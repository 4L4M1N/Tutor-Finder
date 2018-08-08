function validate()
      {
      
         if( document.sgpost.salary.value == "" || isNaN(document.sgpost.salary.value)==true)
         {
            var text;
            text="please provide your fee";
            document.getElementById("error").innerHTML = text;
            return false;
         }
         
         /*if( document.sgpost.EMail.value == "" )
         {
            alert( "Please provide your Email!" );
            document.sgpost.EMail.focus() ;
            return false;
         }*/
         
         if( document.sgpost.address.value == "" ||
         isNaN( document.sgpost.address.value )==false ||
         document.sgpost.address.value.length > 20 )
         {
            var text;
            text="please provide your address or <21";
            document.getElementById("aerror").innerHTML = text;
            return false;
         }
         
         if( document.sgpost.subjects.value == "-1" )
         {
            var text;
            text="please provide your subject";
            document.getElementById("serror").innerHTML = text;
            return false;
         }
         if( document.sgpost.mediums.value == "-1" )
         {
            var text;
            text="please select your medium";
            document.getElementById("merror").innerHTML = text;
            return false;
         }
         if( document.sgpost.divisions.value == "-1" )
         {
            var text;
            text="please select your division";
            document.getElementById("derror").innerHTML = text;
            return false;
         }                  
         return( true );
      }
