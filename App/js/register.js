$(document).ready(function() {});

function checkPassword(form){
    password = form.inputPassword.value;
    confirmPassword = form.confirmPassword.value;
    
    if ( password != confirmPassword){
        alert("\nThe passwords do not match. Try again.")
        return false;
    }
    else{
        return true;
    }
}
