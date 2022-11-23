function passwordValidator() {
    let password = document.getElementById("password").value;
    let repeat_password = document.getElementById("repeat-password").value;

    // If password is not the same as confirm password, have a error message displayed.
    // Otherwise same password used will have message to say password is matched.
    if (password != repeat_password) {
        document.getElementById('wrong_pass_alert').style.color = 'red';
        document.getElementById('wrong_pass_alert').innerHTML = 'Error! Password and confirm password not matched';
        document.getElementById('create').style.opacity = (0.4);
    } else {
        document.getElementById('wrong_pass_alert').style.color = 'green';
        document.getElementById('wrong_pass_alert').innerHTML = 'Password is matched!';
        document.getElementById('create').disabled = false;
        document.getElementById('create').style.opacity = (1);
    }
}

function wrong_pass_alert() {
    // If all the fields and password and confirm password are filled and matched, a popup will say Your account is created!
    // Otherwise, if the fields are not filled, then pop up will say fill in the details
    if(document.getElementById('password').value != "" && document.getElementById('repeat-password').value != ""){
        alert("Your account is created!");
    } else{
        alert('Please fill in the details');
    }
}