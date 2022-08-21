<?php
session_start();

if (isset($_POST['submit'])) {
    $staff_name = $_POST['Fullname'];
    $Email = $_POST['Email'];
    $Contact = $_POST['Contact'];
    $Dob = $_POST['Dob'];
    $About = $_POST['About'];
    $Weight = $_POST['Weight'];
    $Height = $_POST['Height'];
    $Emergency_contact = $_POST['Emergency_contact'];
    $Affliation = $_POST['Affliation'];

    require_once "functions.php";

     

    if (invalidemail($Email) !== false) {
        header("location: ../staff-register.php?error=invalidemail");
        exit();
    } 

    updatestaff($staff_name, $Email, $Contact, $Dob, $About, $Weight, $Height, $Emergency_contact, $Affliation);

} else {
    header("location: ../Doctors login/doctor_edit.php");
    exit();
}