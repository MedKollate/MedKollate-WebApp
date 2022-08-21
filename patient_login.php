<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>MedKollate || Patient Login </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="login-page">
    <div class="container">
        <header class="header reg">
            <img src="./images/medkollate logo 3.png" alt="" class="logo">
           
            <a href="./index.php">Home</a>
        </header>
    
       <section class="login">
            <img src="./images/fingerprint.png" alt="">
            <div>
                <h2>Weclcome Back</h2>

                <form class="login-form" method="post" action="includes/patient_login.inc.php">
                    <div>
                        <label for="id">
                            Email
                        </label>
                        <input type="text" placeholder="Enter user email here" name="Email">
                    </div>
                    <div>
                        <label for="password">
                            password
                        </label>
                        <input type="password" placeholder="Enter user ID here" name="pwd">
                    </div>
                   <div id="remember">
                        <label for="remember-me">
                            <input type="checkbox">
                            Remember me
                        </label>
                        <a href="#">Forget Password</a>
                   </div>
                    <div id="sign-in">
                        <button class="btn-green" name="login">Sign In</button>
                    </div>
                </form>

               

                <h3 class="no-account">Don't have an account? <a href="#">Contact Hospital Management</a></h3>
            </div>
       </section>
            
      
    </div>
    <script src="./script.js"></script>
   <script src="//code.tidio.co/cqwjwfhowp7ucczh9u90uvpffadbwprx.js" async></script>
</body>

</html>