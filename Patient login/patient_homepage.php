<?php
    session_start();
?>

<!DOCTYPE html>
<htm lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <title>MedKollate || Patient Dashboard </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body class="patient-page">
        <div class="container">
            <header class="header reg" id="patient-header">
                <img src="../images/medkollate logo 3.png" alt="" class="logo">
                <div>
                    <h2><?php echo $_SESSION['name'] . "!"; ?></h2>
                    <p>Your care giver is a step away</p>
                </div>
                <img id="patient-img" src="../assets/Group 48.png" alt="Patient Image">
            </header>
        
            <section class="patient-homepage">
                <a href="./patient_laboratory.php">
                    <img src="../assets/medicine.png" alt="Lab Test">
                    <h3>Lab</h3>
                </a>
                <a href="./patient-radiology.php">
                    <img src="../assets/radiology-removebg-preview 1.png" alt="X-ray">
                    <h3>Radiology</h3>
                </a>
                <a>
                    <img src="../assets/cash-payment.png" alt="cash payment">
                    <h3>Payment</h3>
                </a>
                <a href="./patient-pharmacy.php">
                    <img src="../assets/remedy.png" alt="Phamarcy">
                    <h3>Phamarcy</h3>
                </a>
                <a href="./patient_appointment.php">
                    <img src="../assets/pana.png" alt="Appointment">
                    <h3>Appointment</h3>
                </a>
                <a href="./patient_complaint.php">
                    <img src="../assets/cuate.png" alt="Compliant">
                    <h3>Complaint</h3>
                </a>
                <a href="./patient_procedure.php">
                    <img src="../assets/doctor-character.png" alt="Procedure">
                    <h3>Procedure</h3>
                </a>
                <a>
                    <img src="../assets/medicine.png" alt="Medical Report">
                    <h3>Medical Report</h3>
                </a>   
            </section>

            <div class="patient-btn">
                <a href="#" class="btn-trans" id="trans-red">Log out</a>
            </div>
                
        
        </div>
        <script src="../script.js"></script>
    <script src="//code.tidio.co/cqwjwfhowp7ucczh9u90uvpffadbwprx.js" async></script>
    </body>

</html>