function validate()
      {
      
         if( document.post.salary.value == "" || isNaN(document.post.salary.value)==true)
         {
            var text;
            text="please provide your salary";
            document.getElementById("error").innerHTML = text;
            return false;
         }
         
         /*if( document.post.EMail.value == "" )
         {
            alert( "Please provide your Email!" );
            document.post.EMail.focus() ;
            return false;
         }*/
         
         if( document.post.address.value == "" ||
         isNaN( document.post.address.value )==false ||
         document.post.address.value.length > 20 )
         {
            var text;
            text="please provide your address or <21";
            document.getElementById("aerror").innerHTML = text;
            return false;
         }
         
         if( document.post.subjects.value == "-1" )
         {
            var text;
            text="please provide your subject";
            document.getElementById("serror").innerHTML = text;
            //alert( "Please provide your subject!" );
            return false;
         }
         if( document.post.mediums.value == "-1" )
         {
            var text;
            text="please select your medium";
            document.getElementById("merror").innerHTML = text;
            return false;
         }
         if( document.post.divisions.value == "-1" )
         {
            var text;
            text="please select your division";
            document.getElementById("derror").innerHTML = text;
            return false;
         }                  
         return( true );
      }
