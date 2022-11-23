window.onload = function() {
    passwordValidator();
}

function passwordValidator() {
    let password = document.getElementById("password");
    let repeat_password = document.getElementById("repeat-password");
    let text;

    if (password === repeat_password) {
        text = "";
    } else {
        text = "Error: password is not the same as repeated password!";
    }
    document.getElementById("text").innerHTML = text;
}