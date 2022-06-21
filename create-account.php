<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Edu-Book - Utwórz konto</title>
    <link rel="stylesheet" href="styles/login-styles.css" type="text/css">
    <script src="library.js"></script>
</head>
<body>
    <form method="post">
        <img src="images/logo.png"><br>
        <div class="label">Imię*</div>
        <input type="text" id="name" class="input" placeholder="Podaj imię"><br>
        <div class="label">Nazwisko*</div>
        <input type="text" id="surname" class="input" placeholder="Podaj nazwisko"><br>
        <br>

        <div class="label">Login*</div>
        <input type="text" id="login" class="input"  placeholder="Podaj login"><br>

        <div class="label">Hasło*</div>
        <input type="password" id="password1" class="input" placeholder="Podaj Hasło"><br>

        <div class="label">Powtórz Hasło*</div>
        <input type="password" id="password2" class="input" placeholder="Powtórz hasło"><br>
        <a href="login.php">Masz już konto?</a><br>
        <button name="submit-button">UTWÓRZ KONTO</button>
    </form>
    <script src="scripts/create-account-script.js"></script>
</body>
</html>