function passwordValidator() {
    let password = document.getElementById("password").value;
    let repeat_password = document.getElementById("repeat-password").value;
    let text;

    if (password != repeat_password) {
        text.style.color = 'red';
        text = "Error: password is not the same as repeated password! Use the same password";
    } else {
        text = "";
    }
    document.getElementById('wrong_password_msg').innerHTML = text;
}