<?php
session_start();
if (isset($_POST['submit1'])) {
    $Name = $_POST['Name'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];
    $Relationship = $_POST['Relationship'];
    $Address = $_POST['Address'];

    require_once "functions.php";

    if (kinemptyinputsignup($Name, $Phone, $Email, $Relationship, $Address) !== false) {
        header("location: ../patient_kin.php?error=emptyinput");
        exit();
    } 

    if (invalidemail($Email) !== false) {
        header("location: ../patient_kin.php?error=invalidemail");
        exit();
    } 

    createcontact($url, $curl, $data, $response, $Name, $Phone, $Email, $Relationship, $Address);

} else {
    header("location: ../patient_kin.php");
    exit();
}



if (isset($_POST['submit2'])) {
    $Name = $_POST['Name'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];
    $Relationship = $_POST['Relationship'];
    $Address = $_POST['Address'];

    require_once "functions.php";

    if (kinemptyinputsignup($Name, $Phone, $Email, $Relationship, $Address) !== false) {
        header("location: ../patient_kin.php?error=emptyinput");
        exit();
    } 

    if (invalidemail($Email) !== false) {
        header("location: ../patient_kin.php?error=invalidemail");
        exit();
    } 

    createkin($url, $curl, $data, $response, $Name, $Phone, $Email, $Relationship, $Address);

} else {
    header("location: ../patient_kin.php");
    exit();
}