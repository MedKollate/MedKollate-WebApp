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
    <title>MedKollate || Register Staff</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="staff-reg">
    <div class="container">
        <header class="header reg">
            <img src="./images/medkollate logo 3.png" alt="" class="logo">
            <div>
                <h2>Staff Registration Portal</h2>
            </div>
            <a href="./index.php">Home</a>
        </header>
    
       <section class="registration-form">

        <a class="reg-back" href="./register_gap.php">
            <i class="fa-solid fa-arrow-left"></i>
        </a>

            <form method="post" class="form" action="includes/staff-register.inc.php">
                <div>
                    <label for="Name">
                        Name
                    </label>
                    <input type="text" placeholder="John Doe" name="Name">
                </div>
                <div>
                    <label for="Email">
                        Email Address
                    </label>
                    <input type="email" placeholder="Example@gmail.com" name="Email">
                </div>
                <div>
                    <label for="Address">
                        Address
                    </label>
                    <input type="text" placeholder="House number, Street, City" name="Address">
                </div>
                <div>
                    <label for="state">
                        State
                    </label>
                    <input type="" placeholder="Select State" name="State">
                </div>
                <div>
                    <label for="Marital Status">
                        Marital Status
                    </label>
                    <input type="text" placeholder="Select option" name="Marital_status">
                </div>
                <div>
                    <label for="Department">
                        Department
                    </label>
                    <input type="test" placeholder="Select Depertment" name="Department">
                </div>
                <div>
                    <label for="Number">
                    Phone number 
                    </label>
                    <input type="tel" placeholder="Number only" name="Phone">
                </div>
                <div>
                    <label for="Designation">
                        Designation
                    </label>
                    <input type="text" placeholder="Select" name="Designation">
                </div>
                <div>
                    <label for="Emergency contact">
                        Emergency contact
                    </label>
                    <input type="tel" placeholder="Input number" name="Emergency_contact">
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
                                Staff Registered Successfully
                            </div>;
                        <?php
                        }
                    }
                ?>
            </form>
       </section>
            
       <div class="reg-btn">
        <a href="./staff_id.php" class="btn-blue" id="reg">Continue</a>
       </div>
        
    </div>
    <script src="./script.js"></script>
   <script src="//code.tidio.co/cqwjwfhowp7ucczh9u90uvpffadbwprx.js" async></script>
</body>

</html>