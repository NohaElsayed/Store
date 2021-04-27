
function checkPassword(){
    var pass=document.getElementById("password").value,
    confPass=document.getElementById("confirm").value;
    if(pass!=confPass){
        var msg="Password and Confirm Password doesn't match !";
        document.getElementById("pass_msg").innerHTML=msg;
    }

}

function clearInput(){
    var elements=document.getElementsByTagName("input");
  
    for(var i=0;i<elements.length;i++){
        if(elements[i].type=="email" || elements[i].type=="password"||elements[i]=="text" ){
            elements[i].value="";
        }
    }
   
  
}

/*
function errorMessage(){
    var errors=[];
    var email=document.getElementById("email").value;
    var pass=document.getElementById("password").value;

    if((email == "") && (pass == "" )){
         errors[0]="A valid email is required";
         document.getElementById("emailError").innerHTML=errors[0];
        errors[1]="A valid password is required";
        document.getElementById("passError").innerHTML=errors[1];



    }
    else if((email == "") && (pass !="")){
        errors[0]="A valid email is required";
        document.getElementById("emailError").innerHTML=errors[0];
        window.passError.style.display="none";
    }
    else if ((email != "") && (pass =="")){
        window.emailError.style.display="none";
        errors[1]="A valid password is required";
        document.getElementById("passError").innerHTML=errors[1];
    }
    else{
           
        window.emailError.style.display="none";
        window.passError.style.display="none";
    }

}
*/