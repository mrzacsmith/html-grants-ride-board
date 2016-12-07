
function validateEmail(form_id, email) {
    var reg =  /^([A-Za-z0-9_\-\.]){1,}\@nmsu\.edu$/;
    var address = document.forms[form_id].elements[email].value;
    
    if (reg.test(address) == false) {
        alert('Invalid email address. You must use nmsu.edu!');
        document.forms[form_id].elements[email].focus();
        return false;
    }
    
}

  function val() {
            // alert("Working"); Test to make sure form is working 
            if((RegisterForm.Password.value).length < 8) {
                alert("Password should be a minimum of 8 characters.");
                RegisterForm.password.focus();
                return false;
            }
            if(RegisterForm.Password_Verify.value != RegisterForm.Password.value) {
                alert("Passwords do not match!");
                return false;
            }
            
            
        return true;
        }
        