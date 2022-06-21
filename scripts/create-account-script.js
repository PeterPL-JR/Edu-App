var loginInput = getId("login");
var passwordInput = getId("password");

var invalidLogin = getId("invalid-login");
var invalidPassword = getId("invalid-password");

// Check if login is unique in DB
loginInput.onkeyup = function (event) {
    serverPost("base_connect.php", { query: _CHECK_LOGIN, value: loginInput.value }, function (text) {
        var counter = parseInt(text);

        
        if (loginInput.value != "" && counter > 0) {
            loginInput.classList.add("invalid");
            invalidLogin.innerHTML = "Nazwa loginu jest już zajęta";
        } else {
            loginInput.classList.remove("invalid");
            invalidLogin.innerHTML = "";
        }
    });
}

// Check password validity
passwordInput.onkeyup = function (event) {
    var password = passwordInput.value;
    var length = password.length;

    var letters = 0;
    var numbers = 0;

    for (var i = 0; i < length; i++) {
        if (isNumber(password[i])) numbers++;
        if (isLetter(password[i])) letters++;
    }

    var text = "";
    passwordInput.classList.add("invalid");
    
    if (length > 0) {

        if (numbers <= 0) text = "Hasło musi mieć przynajmniej 1 cyfrę";
        else if (letters <= 0) text = "Hasło musi mieć przynajmniej 1 literę";
        else if (length < 8) text = "Hasło musi zawierać przynajmniej 8 znaków";
        
        else passwordInput.classList.remove("invalid");
        invalidPassword.innerHTML = text;
    } else {
        passwordInput.classList.remove("invalid");
        invalidPassword.innerHTML = text;
    }
}