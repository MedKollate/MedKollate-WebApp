<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedKollate || Doctor Dashboard</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="doctors">
    <div class="container">
        <div class="doc-page">
            <nav>
                <img src="../assets/User.png" alt="Doctors Picture">
                <p>Dr. <?php echo $_SESSION['staffname']; ?></p>
                <p><?php echo $_SESSION['designation'] ?></p>

                <ul>
                    <li id="dp--active">
                        <i class="fa-solid fa-table-cells-large"></i>
                        <a href="./doctors_hompage.php">Dashboard</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-user"></i>
                        <a href="./doctors_profile.php">Profile</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-gear"></i>
                        <a href="./doctors_setting.php">Settings</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-clipboard"></i>
                        <a href="#">Patient's Data</a>
                    </li>
                    <li id="logout">
                        <i class="fa-solid fa-arrow-alt-circle-left"></i>
                        <a href="./doctors_logout.php">Logout</a>
                    </li>
                </ul>
            </nav>

            <div class="doctors-dash">
                <div class="doctors-id">
                    <div>
                        <h2>Welcome Dr <?php echo $_SESSION['staffname']; ?></h2>
                        <p>What would you like to do today?</p>
                    </div>
                    
                    <img src="../images/medkollate logo 3.png" alt="" class="logo">
                </div>
                
                <div class="doctors-appoint">
                    <div>
                        <img src="../assets/User.png" alt="Patients">
                        <div>
                            <p>Total Patient seen today</p>
                            <h4>50+</h4>
                        </div>
                    </div>
                    <div>
                        <img src="../assets/User.png" alt="Patients">
                        <div>
                            <p>Today's Appointment</p>
                            <h4>100+</h4>
                        </div>
                    </div>
                    <div>
                        <img src="../assets/User.png" alt="Patients">
                        <div>
                            <p>Total Appointment</p>
                            <h4>50+</h4>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="doctors-patients">
                        <h3>Today's Appointments</h3>
                        <div class="doctors-time">
                            <p>Patient</p>
                            <p>Time</p>
                        </div>
                        <div class="doctors-patient-time">
                            <div>
                                <img src="../assets/patient-character.png" alt="Patient Image">
                                <p class="patient-name">A.Z. Adele</p>
                                <p>15:30</p>
                            </div>
                            <div>
                                <img src="../assets/patient-character.png" alt="Patient Image">
                                <p class="patient-name">A.Z. Adele</p>
                                <p>14:15</p>
                            </div>
                            <div>
                                <img src="../assets/patient-character.png" alt="Patient Image">
                                <p class="patient-name">A.Z. Adele</p>
                                <p>11:14</p>
                            </div>
                        </div>
                        <a href="#">See All</a>
                    </div>

                    <div class="doctors-patients">
                        <h3>Next Patient's Details</h3>
                        <div class="doctors-patient-name">
                            <img src="../assets/patient-character.png" alt="Patient Image">
                            <p class="patient-name">A.Z. Adele</p>
                        </div>
                        <div class="doctors-patient-detail">
                            <strong>D.O.B <br><small>5th, Aug 2003</small></strong>
                            <strong>Sex <br><small>Female</small></strong>
                            <strong>Weight <br><small>55kg</small></strong>
                            <strong>Last Appointment <br><small>4th June 2022</small></strong>
                            <strong>Height <br><small>156m</small></strong>
                            <strong>Genotype <br><small>AA</small></strong>
                        </div>
                        <a href="#">Patient's History</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../script.js"></script>
   <script src="//code.tidio.co/cqwjwfhowp7ucczh9u90uvpffadbwprx.js" async></script>
</body>
</html>