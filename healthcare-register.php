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
    <title>MedKollate || Register Healthcare</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="health-reg">
    <div class="container">
        <header class="header reg">
            <img src="./images/medkollate logo 3.png" alt="" class="logo">
            <div class="healthcare-reg">
                <h2>Registration Portal</h2>
            </div>
            <a href="./index.php">Home</a>
        </header>
    
       <section class="registration-form">
            <form method="post" class="form" action="includes/healthcare-register.inc.php">
                <div>
                    <label for="Name">
                        Name of Hospital
                    </label>
                    <input type="text" id="Name" name="Name" placeholder="Input name of hospital here">
                </div>
                <div>
                    <label for="Address">
                        Address of Hospital
                    </label>
                    <input type="text" id="Address" name="Address" placeholder="Input address here">
                </div>
                <div>
                    <label for="LGA">
                        L G A of Hospital
                    </label>
                    <input type="text" id="LGA" name="LGA" placeholder="Select LGA">
                </div>
                <div>
                    <label for="Location">
                        Location of Hospital
                    </label>
                    <input type="text" id="Location" name="Location" placeholder="Select state">
                </div>
                <div>
                    <label for="Number">
                        Contact Number
                    </label>
                    <input type="tel" id="Contact_No" name="Contact_No" placeholder="Input contact number here">
                </div>
                <div>
                    <label for="Email">
                        Email Address
                    </label>
                    <input type="email" id="Email" name="Email" placeholder="Input email address">
                </div>
                <div>
                    <label for="Number">
                    Number of Staff
                    </label>
                    <input type="number" id="No_of_staff" name="No_of_staff" placeholder="Enter total staff strength here">
                </div>
                <div>
                    <label for="GRN">
                        Government Registration Number
                    </label>
                    <input type="text" id="CAC_No" name="CAC_No" placeholder="Enter License Number here" >
                </div>
                <div style="margin-top: 4rem;">
                    <button class="submit-btn" name="submit">Submit</button>
                </div>

                <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "emptyinput") {
                        ?>
                            <div class="alert">
                                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                You forgot to fill in all fields
                            </div>
                        <?php
                        } 
                        else if ($_GET['error'] == "invalidemail") {
                        ?>
                            <div class="alert alert=danger">
                                Choose a proper email
                            </div>;
                        <?php
                        }
                        else if ($_GET['error'] == "none") {
                        ?>
                            <div class="alert alert=danger">
                                Hospital Registered Successfully
                            </div>;
                        <?php
                        }
                    }
                ?>

               
            </form>

            
       </section>
            
       <div class="reg-btn">
        <a href="./register_gap.php" class="btn-blue" id="reg">Continue</a>
       </div>
        
    </div>
    <script src="./script.js"></script>
   <script src="//code.tidio.co/cqwjwfhowp7ucczh9u90uvpffadbwprx.js" async></script>
</body>

</html>