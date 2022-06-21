<?php

// "Query" Options
define("_CHECK_LOGIN", 0);

if(!isset($_POST['query'])) {
    header("Location: index.php");
}
include 'base.php';

// Check if new login is unique in DB
if($_POST['query'] == _CHECK_LOGIN) {
    
    $login = $_POST['value'];
    $login_query = mysqli_query($base, "SELECT COUNT(*) FROM users WHERE login = '$login';");
    echo mysqli_fetch_row($login_query)[0];
}

?>