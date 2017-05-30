function validateregForm() {
    var x= document.forms["reg_form"]["regno"].value;
    var name = document.forms["reg_form"]["regno"].value;
    var email = document.forms["reg_form"]["email"].value;
    var phone = document.forms["reg_form"]["mobile"].value;
    var mailformat = /\S+@\S+\.\S+/;
    
    if (x == "") {
        alert("Registration Number isn't being filled by you!");
        return false;
        
    }
    else if(x.toString().length !=4)
    {
        alert("Reg Number is just of four digits. Not more, not less! ");
        return false;
    }

    else if(email =="")
    {
        alert(" E-mail ID isn't being filled by you! ");
        return false;
    }
     
    else if(mailformat.test(email) == false)
    {
        alert(" Please enter a correct email ID ");
        return false;
    }
     

      else if(phone =="")
    {
        alert(" Mobile Number isn't being filled by you! ");
        return false;
    }
    else if(phone.toString().length !=10)
    {
        alert(" Enter a valid 10 digit mobile number! ");
        return false;
    }



    
    


      


} 