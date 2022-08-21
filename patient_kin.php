<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en"></html>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>MedKollate || Register Patient</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="patient-reg">
    <div class="container">
        <header class="header reg">
            <img src="./images/medkollate logo 3.png" alt="" class="logo">
            <div>
                <h2 id="patient">Patient Registration Portal</h2>
            </div>
            <a id="patient" href="./index.php">Home</a>
        </header>
    
       <section class="registration-form">

            <a class="reg-back" href="./patient_register.php">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <h3 class="patient-kin">Emergency contact</h3>
            <form class="form" id="patient-form" method="post" action="includes/patient_kin.inc.php">
                <div>
                    <label for="Full-name">
                        Full-name
                    </label>
                    <input type="text" placeholder="Enter full-name" name="Name">
                </div>
                <div>
                    <label for="number">
                        Phone Number
                    </label>
                    <input type="tel" placeholder="Enter contact" name="Phone">
                </div>
                <div>
                    <label for="email">
                        Email
                    </label>
                    <input type="email" placeholder="Enter email address" name="Email">
                </div>
                <div>
                    <label for="relationship">
                    Relationship
                    </label>
                    <input type="text" placeholder="Enter relation" name="Relationship">
                </div>
                <div>
                    <label for="Address">
                        Address
                    </label>
                    <input type="text" placeholder="House number, Street, City, LGA, State" name="Address">
                </div>
                <div style="margin-top: 4rem;">
                    <button class="submit-btn" name="submit1">Submit</button>
                </div>
            </form>

            <h3 class="patient-kin">Next of kin</h3>
            <form class="form" id="patient-form" method="post" action="includes/patient_kin.inc.php">
                <div>
                    <label for="Full-name">
                        Full-name
                    </label>
                    <input type="text" placeholder="Enter full-name" name="Name">
                </div>
                <div>
                    <label for="number">
                        Phone Number
                    </label>
                    <input type="tel" placeholder="Enter contact" name="Phone">
                </div>
                <div>
                    <label for="email">
                        Email
                    </label>
                    <input type="email" placeholder="Enter email address" name="Email">
                </div>
                <div>
                    <label for="relationship">
                    Relationship
                    </label>
                    <input type="text" placeholder="Enter relation" name="Relationship">
                </div>
                <div>
                    <label for="Address">
                        Address
                    </label>
                    <input type="text" placeholder="House number, Street, City, LGA, State" name="Address">
                </div>
                <div style="margin-top: 4rem;">
                    <button class="submit-btn" name="submit2">Submit</button>
                </div>
                
            </form>
       </section>
            
       <div class="reg-btn">
        <a href="./patient-picture.php" class="btn-blue" id="reg">Continue</a>
       </div>
        
    </div>
    <script src="./script.js"></script>
   <script src="//code.tidio.co/cqwjwfhowp7ucczh9u90uvpffadbwprx.js" async></script>
</body>

</html>