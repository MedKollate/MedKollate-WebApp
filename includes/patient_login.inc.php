<?php

if (isset($_POST['login'])) {
    $Email = $_POST['Email'];
    $pwd = $_POST['pwd'];

    require_once "functions.php";

    if (patemptyinputlogin($Email, $pwd) !== false) {
        header("location: ../patient_login.php?error=emptyinput");
        exit();
    } 

    if (invalidemail($Email) !== false) {
        header("location: ../patient_login.php?error=invalidemail");
        exit();
    } 

    patientlogin($Email, $pwd);

} else {
    header("location: ../patient_login.php");
    exit();
}