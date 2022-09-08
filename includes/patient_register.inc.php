<?php
session_start();

if (isset($_POST['submit'])) {
    $Firstname = $_POST['Firstname'];
    $Middlename = $_POST['Middlename'];
    $Lastname = $_POST['Lastname'];
    $Age = $_POST['Age'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];
    $Marital_status = $_POST['Marital_status'];
    $Address = $_POST['Address'];
    $Occupation = $_POST['Occupation'];
    $Genotype = $_POST['Genotype'];
    $Allergies = $_POST['Allergies'];
    $Blood_group = $_POST['Blood_group'];
    $Morbidity = $_POST['Morbidity'];

    require_once "functions.php";

    if (patientemptyinputsignup($Firstname, $Lastname, $Age, $Phone, $Email, $Marital_status, $Address, $Occupation, $Genotype, $Allergies, $Blood_group, $Morbidity) !== false) {
        header("location: ../patient_register.php?error=emptyinput");
        exit();
    } 

    if (invalidemail($Email) !== false) {
        header("location: ../patient_register.php?error=invalidemail");
        exit();
    } 

    createpatient($url, $curl, $data, $response, $Firstname, $Middlename, $Lastname, $Age, $Phone, $Email, $Marital_status, $Address, $Occupation, $Genotype, $Allergies, $Blood_group, $Morbidity);

} else {
    header("location: ../patient_register.php");
    exit();
}