<?php
session_start();

$keylength = 4;
$str = "123456790";
$randstr = substr(str_shuffle($str), 0, $keylength);
$id = 'AN-' . $_SESSION['hosp_name'] . '-' . $randstr;

?>

<!DOCTYPE html>
<html lang="en"></html>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>MedKollate || Generate Staff ID</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="registration staff-reg">
    <div class="container">
        <header class="header reg">
            <img src="./images/medkollate logo 3.png" alt="" class="logo">
            <div>
                <h2>Staff Registration Portal</h2>
            </div>
            <a href="./index.html">Home</a>
        </header>
    
       <section class="registration-form">

        <a class="reg-back" href="./staff-register.php">
            <i class="fa-solid fa-arrow-left"></i>
        </a>

            <form class="generate-id" action= "<?php $_SERVER['PHP_SELF']; ?>">
                <div>
                    <label for="Emergency contact">
                        Generate ID
                    </label>
                    <input type="text" placeholder="Number Code" value="<?php echo $id; ?>">
                </div>
            </form>
            <div class="id-popup" style="display: none;">
                <div>
                    <i class="fa-solid fa-circle-check"></i>
                    <p>You have  successful registered this staff.</p>
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <a href="./staff-register.html" class="btn-blue" id="reg">Add</a>
            </div>
       </section>
            
       <div class="reg-id-btn">
        <button type="submit" class="btn-white submit-id">
            Submit
        </button>
       
       </div>
        
    </div>
    <script src="./script.js"></script>
   <script src="//code.tidio.co/cqwjwfhowp7ucczh9u90uvpffadbwprx.js" async></script>
</body>

</html>