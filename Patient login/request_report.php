<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedKollate || Medical Report</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="medical-report">
    <div class="container">
        <header class="report-head">
            <img src="../assets/medkollate logo 3.png" alt="Logo">
            <a href="./patient-radiology.php">Home</a>
        </header>

        <section class="report-sect">
               <img src="../assets/request-1.png" alt="Man waving">
               <div>
                <a href="./medical_report.php" class="btn-blue">Apply for medical report</a>

                <a href="view_report.php" class="btn-trans">View medical report</a>
               </div>
               <img src="../assets/request-2.png" alt="Woman waving">
        </section>
    </div>

    <script src="../script.js"></script>
    <script src="//code.tidio.co/cqwjwfhowp7ucczh9u90uvpffadbwprx.js" async></script>
</body>
</html>