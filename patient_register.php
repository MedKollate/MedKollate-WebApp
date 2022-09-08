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

        <a class="reg-back" href="./register_gap.php">
            <i class="fa-solid fa-arrow-left"></i>
        </a>

            <form class="form" id="patient-form" method="post" action="includes/patient_register.inc.php">
                <div>
                    <label for="Name">
                        First Name
                    </label>
                    <input type="text" placeholder="Enter first name" name="Firstname">
                </div>
                <div>
                    <label for="Name">
                        Middle Name
                    </label>
                    <input type="text" placeholder="Enter middle name" name="Middlename">
                </div>
                <div>
                    <label for="Name">
                        Last Name
                    </label>
                    <input type="text" placeholder="Enter last name" name="Lastname">
                </div>
                <div>
                    <label for="Age">
                        Age
                    </label>
                    <input type="number" placeholder="Enter age" name="Age">
                </div>
                <div>
                    <label for="Number">
                    Phone number 
                    </label>
                    <input type="tel" placeholder="Enter contact" name="Phone">
                </div>
                <div>
                    <label for="Email">
                        Email Address
                    </label>
                    <input type="email" placeholder="Example@gmail.com" name="Email">
                </div>
                <div>
                    <label for="Marital Status">
                        Marital Status
                    </label>
                    <input type="text" placeholder="Enter Marital status" name="Marital_status">
                </div>
                <div>
                    <label for="Address">
                        Address
                    </label>
                    <input type="text" placeholder="House number, Street, City, LGA, State" name="Address">
                </div>
                <div>
                    <label for="Occupation">
                        Occupation
                    </label>
                    <input type="text" placeholder="Enter Occupation" name="Occupation">
                </div>          
                <div>
                    <label for="Genotype">
                        Genotype
                    </label>
                    <input type="text" placeholder="Enter Genotype" name="Genotype">
                </div>
                <div>
                    <label for="Allergy">
                        Allergies
                    </label>
                    <input type="text" placeholder="Enter Allergies" name="Allergies">
                </div>
                <div>
                    <label for="Blood group">
                        Blood Group
                    </label>
                    <input type="text" placeholder="Enter blood group" name="Blood_group">
                </div>
                <div>
                    <label for="Co-Morbidity">
                        Co-Morbidity
                    </label>
                    <input type="text" placeholder="Underlying clinical issues" name="Morbidity">
                </div>

                <div style="margin-top: 4rem;">
                    <button class="submit-btn" name="submit">Submit</button>
                </div>
            </form>
       </section>
            
       <div class="reg-btn">
        <a href="./patient_kin.php" class="btn-blue" id="reg">Continue</a>
       </div>
        
    </div>
    <script src="./script.js"></script>
   <script src="//code.tidio.co/cqwjwfhowp7ucczh9u90uvpffadbwprx.js" async></script>
</body>

</html>