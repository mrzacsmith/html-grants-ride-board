
function validateEmail(form_id, email) {
    var reg =  /^([A-Za-z0-9_\-\.]){1,}\@nmsu\.edu$/;
    var address = document.forms[form_id].elements[email].value;
    
    if (reg.test(address) == false) {
        alert('Invalid email address. You must use nmsu.edu!');
        document.forms[form_id].elements[email].focus();
        return false;
    }
    
}
