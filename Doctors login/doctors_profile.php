<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedKollate || Doctor Profile</title>
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
                    <li>
                        <i class="fa-solid fa-table-cells-large"></i>
                        <a href="./doctors_hompage.php">Dashboard</a>
                    </li>
                    <li id="dp--active">
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
                        <img src="../assets/User.png" alt="Doctors Picture">
                    </div>
                    
                    <img src="../images/medkollate logo 3.png" alt="" class="logo">
                </div>

                <div>
                    <ul class="doc-user-details">
                        <li>
                            <h3>Name:</h3>
                            <p><?php if (isset($_SESSION['staffname'])) {
                                 echo $_SESSION['staffname'];
                                } 
                                ?></p>
                        </li>
                        <li>
                            <h3>Phone Number:</h3>
                            <p><?php if (isset($_SESSION['phone'])) {
                                 echo $_SESSION['phone'];
                                } 
                                ?></p>
                        </li>
                        <li>
                            <h3>Email:</h3>
                            <p><?php if (isset($_SESSION['logstaff_email'])) {
                                 echo $_SESSION['logstaff_email'];
                                } 
                                ?></p>
                        </li>
                        <li>
                            <h3>Date Of Birth:</h3>
                            <p><?php if (isset($_SESSION['Dob'])) {
                                 echo $_SESSION['Dob'];
                                } 
                                ?></p>
                        </li>
                        <li>
                            <h3>About:</h3>
                            <p><?php if (isset($_SESSION['About'])) {
                                 echo $_SESSION['About'];
                                } 
                                ?></p>
                        </li>
                        <li>
                            <h3>Weight:</h3>
                            <p><?php if (isset($_SESSION['Weight'])) {
                                 echo $_SESSION['Weight'];
                                } 
                                ?></p>
                        </li>
                        <li>
                            <h3>Height:</h3>
                            <p><?php if (isset($_SESSION['Height'])) {
                                 echo $_SESSION['Height'];
                                } 
                                ?></p>
                        </li>
                        <li>
                            <h3>Emergency Contact:</h3>
                            <p><?php if (isset($_SESSION['emergency_contact'])) {
                                 echo $_SESSION['emergency_contact'];
                                } 
                                ?></p>
                        </li>
                        <li>
                            <h3>Education:</h3>
                            <p><?php if (isset($_SESSION['Education'])) {
                                 echo $_SESSION['Education'];
                                } 
                                ?>
                                </p>
                        </li>
                    </ul>
                </div>
                
                <div class="reg-btn">
                    <a href="./doctors_edit.php" class="btn-trans" id="reg">Edit</a>
                   </div>
            </div>
        </div>
    </div>

    <script src="../script.js"></script>
   <script src="//code.tidio.co/cqwjwfhowp7ucczh9u90uvpffadbwprx.js" async></script>
</body>
</html>