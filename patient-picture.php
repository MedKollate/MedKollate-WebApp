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

        <a class="reg-back" href="./patient_kin.php">
            <i class="fa-solid fa-arrow-left"></i>
        </a>

            <div class="patient-pics">
                <form class="form" id="patient-pic" method="post" action="includes/patient-picture.inc.php" enctype="multipart/form-data">
                    <div>
                        <label for="gender">
                            Gender
                        </label>
                        <input type="text" placeholder="select gender" name="Gender">
                    </div>
                    <div>
                        <label for="height">
                            Height
                        </label>
                        <input type="text" placeholder="Input height in metres" name="Height">
                    </div>
                    <div>
                        <label for="weight">
                            Weight
                        </label>
                        <input type="text" placeholder="Input weight in kg" name="Weight">
                    </div>

                    <div>
                        <label for="picture">Picture</label>
                        <input type="file" name="Picture">
                    </div>

                    <div style="margin-top: 4rem;">
                        <button class="submit-btn" name="submit">Submit</button>
                    </div>
                </form>

                <div class="pics">
                    <img src="./assets/Rectangle 1.png" alt="Patient Image">
                    
                    <a href="./patient-id.php" class="btn-white">Generate patient ID or enter existing</a>
                </div>
            </div>
       </section>
        
    </div>
    <script src="./script.js"></script>
   <script src="//code.tidio.co/cqwjwfhowp7ucczh9u90uvpffadbwprx.js" async></script>
</body>

</html>