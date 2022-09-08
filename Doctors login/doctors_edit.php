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
                    <li>
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
                        <img src="../assets/User.png" alt="Doctors Picture">
                    </div>
                    
                    <img src="../images/medkollate logo 3.png" alt="" class="logo">
                </div>

                <div class="doctors-edit">
                    <form class="form doctors-edit" method="post" action="../includes/doctors_edit.inc.php">
                        <div>
                            <label for="full name">
                                Full name
                            </label>
                            <input type="text" placeholder="Enter full name" value="<?php if (isset($_SESSION['staffname'])) {
                                 echo $_SESSION['staffname'];
                                } 
                                ?>" name="Fullname">
                        </div>
                        <div>
                            <label for="Number">
                                Contact Number
                            </label>
                            <input type="tel" placeholder="Input contact number here" name="Contact" value="<?php if (isset($_SESSION['phone'])) {
                                 echo $_SESSION['phone'];
                                } 
                                ?>">
                        </div>
                        <div>
                            <label for="Email">
                                Email Address
                            </label>
                            <input type="email" placeholder="Input email address" name="Email" value="<?php if (isset($_SESSION['logstaff_email'])) {
                                 echo $_SESSION['logstaff_email'];
                                } 
                                ?>">
                        </div>
                        <div>
                            <label for="DOB">
                                Date Of Birth
                            </label>
                            <input type="text" placeholder="dd/mm/yy" name="Dob" value="<?php if (isset($_SESSION['Dob'])) {
                                 echo $_SESSION['Dob'];
                                } 
                                ?>">
                        </div>
                        <div>
                            <label for="About">
                                About
                            </label>
                            <input type="" placeholder="Great things about you" name="About" value="<?php if (isset($_SESSION['About'])) {
                                 echo $_SESSION['About'];
                                } 
                                ?>">
                        </div>
                        <div>
                            <label for="weight">
                                Weight(Kg)
                            </label>
                            <input type="number" placeholder="Enter weight in Kg" name="Weight"
                            value="<?php if (isset($_SESSION['Weight'])) {
                                 echo $_SESSION['Weight'];
                                } 
                                ?>">
                        </div>
                        <div>
                            <label for="height">
                                Height(M/Ft)
                            </label>
                            <input type="number" placeholder="Enter height in M/Ft" name="Height"
                            value="<?php if (isset($_SESSION['Height'])) {
                                 echo $_SESSION['Height'];
                                } 
                                ?>">
                        </div>
                        <div>
                            <label for="emergency contact">
                                Emergency Contact
                            </label>
                            <input type="tel" placeholder="Enter contact number" name="Emergency_contact"
                            value="<?php if (isset($_SESSION['emergency_contact'])) {
                                 echo $_SESSION['emergency_contact'];
                                } 
                                ?>">
                        </div>
                        <div>
                            <label for="affliations and others">
                                Affliations and Others
                            </label>
                            <input type="text" placeholder="Great things about you" name="Affliation"
                            value="<?php if (isset($_SESSION['Affliation'])) {
                                 echo $_SESSION['Affliation'];
                                } 
                                ?>">
                        </div>

                        <div style="margin-top: 4rem;">
                            <button class="submit-btn" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
                
                <div id="doctors-btn">
                    <a href="./doctors_profile.php" class="btn-blue" id="reg">Back</a>
                   </div>
            </div>
        </div>
    </div>

    <script src="../script.js"></script>
   <script src="//code.tidio.co/cqwjwfhowp7ucczh9u90uvpffadbwprx.js" async></script>
</body>
</html>