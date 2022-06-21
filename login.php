<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Edu-Book - Zaloguj Się</title>
    <link rel="stylesheet" href="styles/login-styles.css" type="text/css">
    <script src="library.js"></script>
    <script src="edu-library.js"></script>
</head>
<body>
    <form method="post">
        <img src="images/logo.png"><br>
        <div class="label">Login</div>
        <input type="text" name="login" class="input" placeholder="Podaj login"><br>

        <div class="label">Hasło</div>
        <input type="password" name="password" class="input" placeholder="Podaj hasło"><br>
        <a href="create-account.php">Nie masz konta?</a><br>
        <button name="submit-button">ZALOGUJ SIĘ</button>
    </form>
</body>
</html>