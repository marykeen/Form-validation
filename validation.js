function validateRegForm(){
    var firstname = document.forms["regForm"]["firstname"];
    if(firstname.value==""){
        alert("Please type in your first name");
        firstname.focus();
        return false;
    }

    var lastname = document.forms["regForm"]["lastname"];
    if(lastname.value==""){
        alert("Please type in your last name");
        lastname.focus();
        return false;
    }

    var email = document.forms["regForm"]["email"];
    if(email.value==""){
        alert("Please type in your email");
        email.focus();
        return false;
    }

    var password = document.forms["regForm"]["password"];
    if(password.value==""){
        alert("Please type in a password");
        password.focus();
        return false;
    }

    var confirmPassword = document.forms["regForm"]["confirmpassword"];
    if(confirmPassword.value!=password.value){
        alert("Please type in the same password as the previous");
        confirmPassword.focus();
        return false;
    }

    var phonenumber = document.forms["regForm"]["phonenumber"];
    if(phonenumber.value==""  || isNaN(phonenumber.value)){
        alert("Please type in a numeric phone number");
        phonenumber.focus();
        return false;
    }
    if(phonenumber.value.length != 11){
        alert("Phone number should be 11 digits");
        phonenumber.focus();
        return false;
    }

    var country = document.forms["regForm"]["country"];
    if(country.value=="Select country"){
        alert("Please select a country");
        return false;
    }
    
}