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
    <title>MedKollate || Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="register_gap">
    <div class="container">
        <header class="header reg">
            <img src="./images/medkollate logo 3.png" alt="" class="logo">
            <div>
                <h2>Registration Portal</h2>
            </div>
            <a href="./index.html">Home</a>
        </header>

        <section class="register-gap">
            <img src="./assets/queue.png" alt="People queuing">
            <div>
                <a href="./staff-register.php">Register Member of Staff</a>
                <a href="./patient_register.php">Register Patient</a>
            </div>
        </section>
        
        <a class="reg-back" href="./healthcare-register.php">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>
    <script src="./script.js"></script>
   <script src="//code.tidio.co/cqwjwfhowp7ucczh9u90uvpffadbwprx.js" async></script>
</body>

</html>