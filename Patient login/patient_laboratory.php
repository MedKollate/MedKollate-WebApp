<?php
    session_start()
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>MedKollate || Patient Laboratory </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="patient-procedure">
        <div class="patient-dashboard">
            <img src="../images/medkollate logo 3.png" alt="" class="logo">
            <div>
                <a href="./patient_homepage.php">
                    <i class="fa-solid fa-home"></i>
                    <p>Home</p>
                </a>
                <a href="./patient-radiology.php">
                    <i class="fa-solid fa-x-ray"></i>
                    <p>Radiology</p>
                </a>
                <a href="./patient_laboratory.php" id="patient-active">
                    <i class="fa-solid fa-microscope"></i>
                    <p>Laboratory</p>
                </a>
                <a href="./patient-pharmacy.php">
                    <i class="fa-solid fa-hand-holding-medical"></i>
                    <p>Phamarcy</p>
                </a>
                <a href="./patient_procedure.php">
                    <i class="fa-solid fa-bed-pulse"></i>
                    <p>Procedure</p>
                </a>
                <a href="./patient_appointment.php">
                    <i class="fa-solid fa-calendar"></i>
                    <p>Appointment</p>
                </a>
                <a href="./patient_complaint.php">
                    <i class="fa-solid fa-comment-medical"></i>
                    <p>Complaint</p>
                </a>
                <a>
                    <i class="fa-solid fa-credit-card"></i>
                    <p>Payment</p>
                </a>
            </div>
        </div>

        <div class="patient-home">
            <div class="search-bar">
                <i class="fa-solid fa-search"></i>
                <input type="text" placeholder="Search MedKollate">
            </div>

            <div class="patient-info">
                <div>
                    <h3><?php echo $_SESSION['name'] . "!"; ?></h3>
                    <p>What would you like to do today?</p>
                </div>
                <img src="../assets/Group 48.png" alt="User Image">
            </div>

            <div class="procedure">
                <h3>View Lab Result</h3>
                <h3>Request Lab Result</h3>
            </div>
        </div>
    </div>

    <script src="../script.js"></script>
    <script src="//code.tidio.co/cqwjwfhowp7ucczh9u90uvpffadbwprx.js" async></script>
</body>
</html>