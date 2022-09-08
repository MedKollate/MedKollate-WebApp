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
                    <li>
                        <i class="fa-solid fa-user"></i>
                        <a href="./doctors_profile.php">Profile</a>
                    </li>
                    <li id="dp--active">
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
        
                <div id="doc-settings">
                    <p>
                        Hey <?php echo $_SESSION['staffname'] . "!"; ?> 
                    </p>
                    <p>We are currently working on this to serve you better</p>
                </div>
                
                <div id="doctors-btn">
                    <a href="./doctors_hompage.php" class="doc-home" id="reg">Go back to Dashboard</a>
                   </div>
            </div>
        </div>
    </div>

    <script src="../script.js"></script>
   <script src="//code.tidio.co/cqwjwfhowp7ucczh9u90uvpffadbwprx.js" async></script>
</body>
</html>