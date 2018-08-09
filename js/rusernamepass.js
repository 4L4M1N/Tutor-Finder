function validate()
{
    if(document.userpass.uname.value == ""){
        var text;
        text="can't be empty or number";
        document.getElementById("uerror").innerHTML = text;
        return false;
    }

    if((document.userpass.pass.value == "" || document.userpass.pass.value.length < 8) || (document.userpass.repass.value == "" || document.userpass.repass.value.length < 8)){
        var text;
        text="can't be empty or less than 8";
        document.getElementById("perror").innerHTML = text;
        document.getElementById("reperror").innerHTML = text;
        return false;
    }
    /*if(document.userpass.repass.value == "" || document.userpass.repass.value.length < 8){
        var text;
        text="can't be empty or less than 8";
        document.getElementById("reperror").innerHTML = text;
        return false;
    }*/
    if(document.userpass.repass.value != "" && document.userpass.repass.value != ""){
        if(document.userpass.repass.value != document.userpass.pass.value){
        var text;
        text="password must be same";
        document.getElementById("reperror").innerHTML = text;
        return false;
    }
       
    }
    return( true );

    
}