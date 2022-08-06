<?php

function hospitalemptyinputsignup($hosp_name, $LGA, $Location, $address, $contact_no, $Email, $No_of_staff, $CAC_No) {
    $result = "";
    if (empty($hosp_name && $LGA && $Location && $address && $contact_no && $Email && $No_of_staff && $CAC_No)) {
        return true;
    } else {
        return false;
    }

    return $result;
}

function invalidemail($Email) {
    $result = "";
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }

    return $result;
}


function createhospital($url, $curl, $data, $response, $hosp_name, $LGA, $Location, $address, $contact_no, $Email, $No_of_staff, $CAC_No) {
    $url = "http://localhost/Medkollate%20API/api/hospital/create.php";

// Collection object
    $data = [
        'hosp_name' => $hosp_name,
        'LGA' => $LGA,
        'contact_no' => $contact_no,
        'no_of_staff' => $No_of_staff,
        'location' => $Location,
        'address' => $address,
        'email' => $Email,
        'GRM' => $CAC_No
    ];
    // Initializes a new cURL session
    $curl = curl_init($url);
    // Set the CURLOPT_RETURNTRANSFER option to true
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    // Set the CURLOPT_POST option to true for POST request
    curl_setopt($curl, CURLOPT_POST, true);
    // Set the request data as JSON using json_encode function
    curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));
    // Set custom headers for RapidAPI Auth and Content-Type header
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'X-RapidAPI-Host: http://localhost/Medkollate%20API/api/hospital/create.php',
    'X-RapidAPI-Key: 7xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
    'Content-Type: application/json'
    ]);
    // Execute cURL request with all previous settings
    $response = curl_exec($curl);
    // Close cURL session
    curl_close($curl);
    echo $response . PHP_EOL;

    session_start();
    $_SESSION['hosp_name'] = $data['hosp_name'];
    header("location: ../healthcare-register.php?error=none");
    exit();
}

function staffemptyinputsignup($staff_name, $Email, $Address, $State, $Marital_status, $Department, $Phone, $Designation, $Emergency_contact) {
    $result = "";
    if (empty($staff_name || $Email || $Address || $State || $Marital_status || $Department || $Phone || $Designation || $Emergency_contact)) {
        return true;
    } else {
        return false;
    }

    return $result;
}

function generateid() {
    $keylength = 4;
    $str = "123456790";
    $randstr = substr(str_shuffle($str), 0, $keylength);
    $id = 'staff-' . $randstr;
    echo $id;
}

function createstaff($url, $curl, $data, $response, $staff_name, $Email, $Address, $State, $Marital_status, $Department, $Phone, $Designation, $Emergency_contact) {
    $url = "http://localhost/Medkollate%20API/api/staff/create.php";

// Collection object
    $data = [
        'name' => $staff_name,
        'address'=> $Address,
        'department'=> $Department,
        'email' => $Email,
        'phone' => $Phone,
        'emergency_contact' => $Emergency_contact,
        'state' => $State,
        'designation' => $Designation,
        'marital_status' => $Marital_status
    ];
    // Initializes a new cURL session
    $curl = curl_init($url);
    // Set the CURLOPT_RETURNTRANSFER option to true
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    // Set the CURLOPT_POST option to true for POST request
    curl_setopt($curl, CURLOPT_POST, true);
    // Set the request data as JSON using json_encode function
    curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));
    // Set custom headers for RapidAPI Auth and Content-Type header
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'X-RapidAPI-Host: http://localhost/Medkollate%20API/api/staff/create.php',
    'X-RapidAPI-Key: 7xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
    'Content-Type: application/json'
    ]);
    // Execute cURL request with all previous settings
    $response = curl_exec($curl);
    // Close cURL session
    curl_close($curl);
    echo $response . PHP_EOL;

    header("location: ../staff-register.php?error=none");
    exit();
}