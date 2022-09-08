<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>MedKollate || Patient Radiology </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="patient-radiology">
        <div class="patient-dashboard">
            <img src="../images/medkollate logo 3.png" alt="" class="logo">
            <div>
                <a href="./patient_homepage.php">
                    <i class="fa-solid fa-home"></i>
                    <p>Home</p>
                </a>
                <a href="./patient-radiology.php" id="patient-active">
                    <i class="fa-solid fa-x-ray"></i>
                    <p>Radiology</p>
                </a>
                <a href="./patient_laboratory.php">
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
                    <h3>Hello <?php echo $_SESSION['name'] . "!"; ?></h3>
                    <p>What would you like to do today?</p>
                </div>
                <img src="../assets/Group 48.png" alt="User Image">
            </div>

            <div class="procedure" id="radiology">
                <h3 id="radiology_1">
                    Request a Scan
                    <div class="radiology-popup" id="popup_1">
                        <h2>Request a Scan</h2>
                        <p>Our team is currently working on this feature to give you a better experience </p>
                    </div>
                </h3>
                <h3 id="radiology_2">
                    Notification for Pregnancy
                    <div class="radiology-popup" id="popup_2">
                        <h2>Request a Scan</h2>
                        <p>Notify the Radiographer of your pregnancy to avoid unneccesary exposure to Xrays</p>
                        <div>
                            <a href="#" class="btn-green">Notify</a>
                        </div>
                    </div>
                </h3>
                <h3 id="radiology_3">
                    Request Report
                    <div class="radiology-popup" id="popup_3">
                        <h2>Request Report</h2>
                        <p>Request a report from the Hospital</p>
                        <div>
                            <a href="./request_report.php" class="btn-trans">Go</a>
                        </div>
                    </div>
                </h3>
                <h3 id="radiology_4">
                    Seek a Second Opinion
                    <div class="radiology-popup" id="popup_4">
                        <h2> Seek a Second Opinion</h2>
                        <p>Our team is currently working on this feature to give you a better experience </p>
                    </div>
                </h3>
                <h3 id="radiology_5">
                    Order Comprehensive Scan
                    <div class="radiology-popup" id="popup_5">
                        <h2>Order Comprehensive Scan</h2>
                        <p>Our team is currently working on this feature to give you a better experience </p>
                    </div>
                </h3>
                <h3 id="radiology_6">
                    Book a Special Session
                    <div class="radiology-popup" id="popup_6">
                        <h2>Book a Special Session</h2>
                        <form>
                            <label for="session">Special Session</label>
                            <input type="text"  placeholder="special session">
                        </form>
                        <div>
                            <button class="btn-green">Book</button>
                        </div>
                    </div>
                </h3>
                <h3 id="radiology_7">
                    Cancer Screening
                    <div class="radiology-popup" id="popup_7">
                        <h2>Cancer Screening</h2>
                        <p>Our team is currently working on this feature to give you a better experience </p>
                    </div>
                </h3>
            </div>
        </div>
        <div class="overlay" id="overlay"></div>
    </div>

    <script>
        // Radiology 1
        radiology_1.addEventListener('click', () => {
            popup_1.classList.add('active');
            overlay.classList.add('active');
        })

        overlay.addEventListener('click', () => {
            popup_1.classList.remove('active');
            overlay.classList.remove('active');
        })

        // Radiology 2
        radiology_2.addEventListener('click', () => {
            popup_2.classList.add('active');
            overlay.classList.add('active');
        })

        overlay.addEventListener('click', () => {
            popup_2.classList.remove('active');
            overlay.classList.remove('active');
        })

        // Radiology 3
        radiology_3.addEventListener('click', () => {
            popup_3.classList.add('active');
            overlay.classList.add('active');
        })

        overlay.addEventListener('click', () => {
            popup_3.classList.remove('active');
            overlay.classList.remove('active');
        })

        // Radiology 4
        radiology_4.addEventListener('click', () => {
            popup_4.classList.add('active');
            overlay.classList.add('active');
        })

        overlay.addEventListener('click', () => {
            popup_4.classList.remove('active');
            overlay.classList.remove('active');
        })

        // Radiology 5
        radiology_5.addEventListener('click', () => {
            popup_5.classList.add('active');
            overlay.classList.add('active');
        })

        overlay.addEventListener('click', () => {
            popup_5.classList.remove('active');
            overlay.classList.remove('active');
        })

        // Radiology 6
        radiology_6.addEventListener('click', () => {
            popup_6.classList.add('active');
            overlay.classList.add('active');
        })

        overlay.addEventListener('click', () => {
            popup_6.classList.remove('active');
            overlay.classList.remove('active');
        })

        // Radiology 7
        radiology_7.addEventListener('click', () => {
            popup_7.classList.add('active');
            overlay.classList.add('active');
        })

        overlay.addEventListener('click', () => {
            popup_7.classList.remove('active');
            overlay.classList.remove('active');
        })
    </script>
    <script src="../script.js"></script>
    <script src="//code.tidio.co/cqwjwfhowp7ucczh9u90uvpffadbwprx.js" async></script>
</body>
</html>