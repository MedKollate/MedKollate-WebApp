<?php
#session_start();
if (isset($_POST['submit'])) {
    $Gender = $_POST['Gender'];
    $Height = $_POST['Height'];
    $Weight = $_POST['Weight'];
    $Picture = $_FILES['Picture'];
    
    require_once "functions.php";

    if (patupdateemptyinputs($Gender, $Height, $Weight, $Picture) !== false) {
        header("location: ../patient-picture.php?error=emptyinput");
        exit();
    }

    uploadimage($Picture);

    updatepatient($url, $collection_name, $request_url, $curl, $data, $response, $Gender, $Height, $Weight, $Picture);

} else {
    header("location: ../patient-picture.php");
    exit();
}

