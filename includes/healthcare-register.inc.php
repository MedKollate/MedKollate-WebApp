<?php
session_start();

if (isset($_POST['submit'])) {
    $hosp_name = $_POST['Name'];
    $LGA = $_POST['LGA'];
    $Location = $_POST['Location'];
    $address = $_POST['Address'];
    $contact_no = $_POST['Contact_No'];
    $Email = $_POST['Email'];
    $No_of_staff = $_POST['No_of_staff'];
    $CAC_No = $_POST['CAC_No'];

        
    require_once "functions.php";

    if (hospitalemptyinputsignup($hosp_name, $LGA, $Location, $address, $contact_no, $Email, $No_of_staff, $CAC_No) !== false) {
        header("location: ../healthcare-register.php?error=emptyinput");
        exit();
    } 

    if (invalidemail($Email) !== false) {
        header("location: ../healthcare-register.php?error=invalidemail");
        exit();
    } 

    createhospital($url, $curl, $data, $response, $hosp_name, $LGA, $Location, $address, $contact_no, $Email, $No_of_staff, $CAC_No);

    
} else {
    header("location: ../healthcare-register.php");
    exit();
}