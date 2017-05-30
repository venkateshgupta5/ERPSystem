function validateForm() {
    var x = document.forms["myForm"]["s_regno"].value;
    var y = document.forms["myForm"]["s_password"].value;
 
    if (x == "") {
        alert("Reg No must be filled out first");
        return false;
    }
    
    if (y.length !=5)
    {
       alert("Password must be of 4 characters");
       return false;
    }


      


} 