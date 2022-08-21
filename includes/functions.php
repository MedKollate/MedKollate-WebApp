<?php
session_start();


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
    

    $keylength = 4;
    $str = "123456790";
    $randstr = substr(str_shuffle($str), 0, $keylength);
    $id = $_SESSION['hosp_name'] .'-staff-' . $randstr;
    
    $url = "http://localhost/Medkollate%20API/api/staff/create.php";

// Collection object
    $data = [
        'id' => $id,
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

    $_SESSION['staff_id'] = $data['id'];
    

    header("location: ../staff-register.php?error=none");
    exit();
}

function patientemptyinputsignup($Firstname, $Lastname, $Age, $Phone, $Email, $Marital_status, $Address, $Occupation, $Genotype, $Allergies, $Blood_group, $Morbidity) {
    $result = "";
    if (empty($Firstname && $Lastname && $Age && $Phone && $Email && $Marital_status && $Address && $Occupation && $Genotype && $Allergies && $Blood_group && $Morbidity)) {
        return true;
    } else {
        return false;
    }

    return $result;
}

function createpatient($url, $curl, $data, $response, $Firstname, $Middlename, $Lastname, $Age, $Phone, $Email, $Marital_status, $Address, $Occupation, $Genotype, $Allergies, $Blood_group, $Morbidity) {
    

    $keylength = 4;
    $str = "123456790";
    $randstr = substr(str_shuffle($str), 0, $keylength);
    $id = $_SESSION['hosp_name'] .'-pat-' . $randstr;
    
    $url = "http://localhost/Medkollate%20API/api/patient/create.php";

// Collection object
    $data = [
        'id' => $id,
        'firstname' => $Firstname,
        'middlename' => $Middlename,
        'lastname' => $Lastname,
        'pat_addr'=> $Address,
        'morbidity' => $Morbidity,
        'pat_email'=> $Email,
        'age' => $Age,
        'pat_marital_status' => $Marital_status,
        'pat_genotype' => $Genotype,
        'pat_blood_group' => $Blood_group,
        'occupation' => $Occupation,
        'allergy' => $Allergies,
        'phone' => $Phone,
        
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
    'X-RapidAPI-Host: http://localhost/Medkollate%20API/api/patient/create.php',
    'X-RapidAPI-Key: 7xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
    'Content-Type: application/json'
    ]);
    // Execute cURL request with all previous settings
    $response = curl_exec($curl);
    // Close cURL session
    curl_close($curl);
    echo $response . PHP_EOL;

    $_SESSION['pat_id'] = $data['id'];
    $_SESSION['firstname'] = $data['firstname'];
    $_SESSION['middlename'] = $data['middlename'];
    $_SESSION['lastname'] = $data['lastname'];
    $_SESSION['pat_addr'] = $data['pat_addr'];
    $_SESSION['morbidity'] = $data['morbidity'];
    $_SESSION['pat_email'] = $data['pat_email'];
    $_SESSION['age'] = $data['age'];
    $_SESSION['pat_marital_status'] = $data['pat_marital_status'];
    $_SESSION['pat_genotype'] = $data['pat_genotype'];
    $_SESSION['pat_blood_group'] = $data['pat_blood_group'];
    $_SESSION['occupation'] = $data['occupation'];
    $_SESSION['allergy'] = $data['allergy'];
    $_SESSION['phone'] = $data['phone'];
    

    header("location: ../patient_register.php?error=none");
    exit();
}

function kinemptyinputsignup($Name, $Phone, $Email, $Relationship, $Address) {
    $result = "";
    if (empty($Name && $Phone && $Email && $Relationship && $Address)) {
        return true;
    } else {
        return false;
    }

    return $result;
}

function createkin($url, $curl, $data, $response, $Name, $Phone, $Email, $Relationship, $Address) {
    $url = "http://localhost/Medkollate%20API/api/next_of_kin/create.php";

// Collection objects
    $data = [
        'name' => $Name,
        'phone_no' => $Phone,
        'email' => $Email,
        'relationship' => $Relationship,
        'address' => $Address
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
    'X-RapidAPI-Host: http://localhost/Medkollate%20API/api/next_of_kin/create.php',
    'X-RapidAPI-Key: 7xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
    'Content-Type: application/json'
    ]);
    // Execute cURL request with all previous settings
    $response = curl_exec($curl);
    // Close cURL session
    curl_close($curl);
    echo $response . PHP_EOL;

    
    header("location: ../patient_kin.php?error=none");
    exit();
}

function createcontact($url, $curl, $data, $response, $Name, $Phone, $Email, $Relationship, $Address) {
    $url = "http://localhost/Medkollate%20API/api/emergency_contact/create.php";

// Collection objects
    $data = [
        'name' => $Name,
        'phone_no' => $Phone,
        'email' => $Email,
        'relationship' => $Relationship,
        'address' => $Address
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
    'X-RapidAPI-Host: http://localhost/Medkollate%20API/api/emergency_contact/create.php',
    'X-RapidAPI-Key: 7xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
    'Content-Type: application/json'
    ]);
    // Execute cURL request with all previous settings
    $response = curl_exec($curl);
    // Close cURL session
    curl_close($curl);
    echo $response . PHP_EOL;

    
    header("location: ../patient_kin.php?error=none");
    exit();
}

function patupdateemptyinputs($Gender, $Height, $Weight) {
    $result = "";
    if (empty($Gender && $Height && $Weight)) {
        return true;
    } else {
        return false;
    }

    return $result;
}

function uploadimage($Picture) {
    $filename = $_FILES['Picture']['name'];
    $filetmpname = $_FILES['Picture']['tmp_name'];
    $filesize = $_FILES['Picture']['size'];
    $fileerror = $_FILES['Picture']['error'];
    $filesize = $_FILES['Picture']['size'];

    $fileExt = explode('.', $filename);
    $fileActualExt = strtolower(end($fileExt));

    $validext = array('jpeg'. 'jpg', 'png',);

    if (in_array($fileActualExt, $validext)) {
        if ($fileerror === 0) {
            $newfilename = uniqid('', true) . "." . $fileActualExt;
            $fileDestination = '../uploads/' . $newfilename;
            move_uploaded_file($filetmpname, $fileDestination);
        } else {
            header("location: ../patient-picture.php?error=uploaderror");
        }
    } else {
        header("location: ../patient-picture.php?error=invalidimgextension");
    }
}

function updatepatient($url, $collection_name, $request_url, $curl, $data, $response, $Gender, $Height, $Weight, $Picture) {

    $url = 'http://localhost/Medkollate%20API/api/patient/update.php';
    $collection_name = 'RapidAPI';
    $request_url = $url . '/' . $collection_name;
    $data = [
        'id' => $_SESSION['pat_id'],
        'firstname' => $_SESSION['firstname'],
        'middlename' => $_SESSION['middlename'],
        'lastname' => $_SESSION['lastname'],
        'pat_addr'=> $_SESSION['pat_addr'],
        'morbidity' => $_SESSION['morbidity'],
        'pat_email'=> $_SESSION['pat_email'],
        'age' => $_SESSION['age'],
        'pat_marital_status' => $_SESSION['pat_marital_status'],
        'pat_genotype' => $_SESSION['pat_genotype'],
        'pat_blood_group' => $_SESSION['pat_blood_group'],
        'occupation' => $_SESSION['occupation'],
        'allergy' => $_SESSION['allergy'],
        'phone' => $_SESSION['phone'],
        'pat_id' => $id,
        'height' => $Height,
        'weight' => $Weight,
        'gender' => $Gender
    ];
    $curl = curl_init($request_url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'X-RapidAPI-Host: http://localhost/Medkollate%20API/api/patient/update.php',
    'X-RapidAPI-Key: 7xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
    'Content-Type: application/json'
    ]);
    $response = curl_exec($curl);
    curl_close($curl);
    echo $response . PHP_EOL;

    header("location: ../patient-picture.php?error=none");
    exit();
}

function patemptyinputlogin($Email, $pwd) {
    $result = "";
    if (empty($Email && $pwd)) {
        return true;
    } else {
        return false;
    }

    return $result;
}

function patientlogin($Email, $pwd) {
    $url = 'http://localhost/Medkollate%20API/api/patient/read.php';
    $collection_name = 'RapidAPI';
    $request_url = $url . '/' . $collection_name;
    $curl = curl_init($request_url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'http://localhost/Medkollate%20API/api/patient/read.php',
    'X-RapidAPI-Key: 7xxxxxxxxxxxxxxxxxxxxxxx',
    'Content-Type: application/json'
    ]);
    $response = curl_exec($curl);
    curl_close($curl);
    #echo $response . PHP_EOL;

    $result = json_decode($response, JSON_PRETTY_PRINT);

    $resut = $result['data'];
    $keys = array_keys($resut);

    for ($i=0; $i < count($resut); $i++) {
        #echo $keys[$i] . "{<br>";
        while($resut[$keys[$i]]) {
          if (in_array($pwd, $resut[$keys[$i]])) {
            if ($resut[$keys[$i]]['pat_email'] === $Email){
                $_SESSION['logpat_email'] = $Email;
                $_SESSION['logpwd'] = $pwd;
                $_SESSION['name'] = $resut[$keys[$i]]['firstname'] . " " . $resut[$keys[$i]]['middlename']
                 . " " . $resut[$keys[$i]]['lastname'];
                header("location: ../Patient login/patient_homepage.php");
            }  else {
                header("location: ../patient_login.php?error=invalidemailorpassword");
            } 
          }
          break;
        }  
      }
}


function staffemptyinputlogin($Email, $pwd) {
    $result = "";
    if (empty($Email && $pwd)) {
        return true;
    } else {
        return false;
    }

    return $result;
}

function stafflogin($Email, $pwd) {
    $url = 'http://localhost/Medkollate%20API/api/staff/read.php';
    $collection_name = 'RapidAPI';
    $request_url = $url . '/' . $collection_name;
    $curl = curl_init($request_url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'http://localhost/Medkollate%20API/api/patient/staff.php',
    'X-RapidAPI-Key: 7xxxxxxxxxxxxxxxxxxxxxxx',
    'Content-Type: application/json'
    ]);
    $response = curl_exec($curl);
    curl_close($curl);
    #echo $response . PHP_EOL;

    $result = json_decode($response, JSON_PRETTY_PRINT);

    $resut = $result['data'];
    $keys = array_keys($resut);

    for ($i=0; $i < count($resut); $i++) {
        #echo $keys[$i] . "{<br>";
        while($resut[$keys[$i]]) {
          if (in_array($pwd, $resut[$keys[$i]])) {
            if ($resut[$keys[$i]]['email'] === $Email){
                $_SESSION['logstaff_email'] = $Email;
                $_SESSION['staffpwd'] = $pwd;
                $_SESSION['staffname'] = $resut[$keys[$i]]['name'];
                $_SESSION['phone'] = $resut[$keys[$i]]['phone'];
                $_SESSION['emergency_contact'] = $resut[$keys[$i]]['emergency_contact'];
                $_SESSION['designation'] = $resut[$keys[$i]]['designation'];
                $_SESSION['department'] = $resut[$keys[$i]]['department'];
                $_SESSION['state'] = $resut[$keys[$i]]['state'];
                $_SESSION['marital_status'] = $resut[$keys[$i]]['marital_status'];
                $_SESSION['address'] = $resut[$keys[$i]]['address'];
                header("location: ../Doctors login/doctors_hompage.php");
            }  else {
                header("location: ../staff_login.php?error=invalidemailorpassword");
            } 
          }
          break;
        }  
      }
}

function updatestaff($staff_name, $Email, $Contact, $Dob, $About, $Weight, $Height, $Emergency_contact, $Affliation) {

    $url = 'http://localhost/Medkollate%20API/api/staff/update.php';
    $collection_name = 'RapidAPI';
    $request_url = $url . '/' . $collection_name;
    $data = [
        'id' => $_SESSION['staffpwd'],
        'name' => $staff_name,
        'address' => $_SESSION['address'],
        'email' => $Email,
        'phone'=> $Contact,
        'emergency_contact' => $Emergency_contact,
        'state' => $_SESSION['state'],
        'designation' => $_SESSION['designation'],
        'department' => $_SESSION['department'],
        'marital_status' => $_SESSION['marital_status'],
        'Dob' => $Dob,
        'height' => $Height,
        'weight' => $Weight,
        'about' => $About,
        'affliation' => $Affliation
    ];
    $curl = curl_init($request_url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'X-RapidAPI-Host: http://localhost/Medkollate%20API/api/staff/update.php',
    'X-RapidAPI-Key: 7xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
    'Content-Type: application/json'
    ]);
    $response = curl_exec($curl);
    curl_close($curl);
    echo $response . PHP_EOL;

    $_SESSION['logstaff_email'] = $data['email'];
    $_SESSION['staffname'] = $data['name'];
    $_SESSION['phone'] = $data['phone'];
    $_SESSION['Dob'] = $data['Dob'];
    $_SESSION['About'] = $data['about'];
    $_SESSION['Weight'] = $data['weight'];
    $_SESSION['Height'] = $data['height'];
    $_SESSION['emergency_contact'] = $data['emergency_contact'];
    $_SESSION['Education'] = $data['education'];


    header("location: ../Doctors login/doctors_profile.php");
    exit();
}