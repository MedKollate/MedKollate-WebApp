<?php

if (isset($_POST['login'])) {
    $Email = $_POST['Email'];
    $pwd = $_POST['pwd'];

    require_once "functions.php";

    if (staffemptyinputlogin($Email, $pwd) !== false) {
        header("location: ../staff_login.php?error=emptyinput");
        exit();
    } 

    if (invalidemail($Email) !== false) {
        header("location: ../staff_login.php?error=invalidemail");
        exit();
    } 

    stafflogin($Email, $pwd);

} else {
    header("location: ../staff_login.php");
    exit();
}