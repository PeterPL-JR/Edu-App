<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Edu-Book - Utwórz konto</title>
    <link rel="stylesheet" href="styles/login-styles.css" type="text/css">
    <script src="library.js"></script>
    <script src="edu-library.js"></script>
</head>
<body>
    <form method="post">
        <img src="images/logo.png"><br>
        <div class="label">Imię*</div>
        <input type="text" name="name" class="input" placeholder="Podaj imię"><br>
        <div class="label">Nazwisko*</div>
        <input type="text" name="surname" class="input" placeholder="Podaj nazwisko"><br>
        <br>

        <div class="label">Login*</div>
        <input type="text" id="login" name="login" class="input"  placeholder="Podaj login"><br>
        <div id="invalid-login"></div>

        <div class="label">Hasło*</div>
        <input type="password" id="password" name="password1" class="input" placeholder="Podaj Hasło"><br>
        <div id="invalid-password"></div>

        <div class="label">Powtórz Hasło*</div>
        <input type="password" name="password2" class="input" placeholder="Powtórz hasło"><br>
        <a href="login.php">Masz już konto?</a><br>
        <button name="submit-button">UTWÓRZ KONTO</button>
    </form>
    <script src="scripts/create-account-script.js"></script>

    <?php
    
    if(isset($_POST['submit-button'])) {
        create_account();
    }

    function create_account() {

    }
    
    ?>
</body>
</html>