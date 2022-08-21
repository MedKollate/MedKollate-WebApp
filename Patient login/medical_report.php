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
<body class="apply">         
    <h3>Apply for medical report</h3>
    <p>Dear <span><?php echo $_SESSION['name']; ?></span>, Kindly fill this form </p>

    <form action="submit">
        <div>
            <label for="last visit">Date of Last Visit</label>
            <input type="date" placeholder="dd/mm/yy">
        </div>

        <div>
            <label for="purpose of visit">Purpose of Visit</label>
            <input type="text" placeholder="Input purpose here">
        </div>

        <div>
            <label for="application">Medical Report Application</label>
            <input id="form-input" type="text" placeholder="State reason here">
        </div>
    </form>
    <div class="btn">
        <a href="./request_report.html" class="btn-trans">Cancel</a>
        <a href="#" class="btn-blue">Pay & Continue</a>
    </div>
    <script src="../script.js"></script>
    <script src="//code.tidio.co/cqwjwfhowp7ucczh9u90uvpffadbwprx.js" async></script>
</body>
</html>