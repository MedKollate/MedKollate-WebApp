<?php
session_start();

if (isset($_POST['submit'])) {
    $staff_name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Address = $_POST['Address'];
    $State = $_POST['State'];
    $Marital_status = $_POST['Marital_status'];
    $Department = $_POST['Department'];
    $Phone = $_POST['Phone'];
    $Designation = $_POST['Designation'];
    $Emergency_contact = $_POST['Emergency_contact'];

    require_once "functions.php";

    if (staffemptyinputsignup($staff_name, $Email, $Address, $State, $Marital_status, $Department, $Phone, $Designation, $Emergency_contact) !== false) {
        header("location: ../staff-register.php?error=emptyinput");
        exit();
    } 

    if (invalidemail($Email) !== false) {
        header("location: ../staff-register.php?error=invalidemail");
        exit();
    } 

    createstaff($url, $curl, $data, $response, $staff_name, $Email, $Address, $State, $Marital_status, $Department, $Phone, $Designation, $Emergency_contact);

} else {
    header("location: ../staff-register.php");
    exit();
}