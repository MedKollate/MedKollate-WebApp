<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedKollate || Our Service</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="service">
         <div class="container contact--main">
            <!-- Header of the Page -->
            <header class="header">
                <img src="./images/medkollate logo 3.png" alt="" class="logo">
                <nav>
                    <ul class="nav-list">
                        <li><a href="./index.html" class="contact--link nav-link">Home</a> </li>
                        <li><a href="./about.html" class="contact--link nav-link">About Us</a> </li>
                        <li><a href="#" class="contact--link nav-link active">Our Services</a> </li>
                        <li><a href="./contact.html" class="contact--link nav-link ">Contact Us</a> </li>
                    </ul>
                </nav>
            </header>
            <!-- Main Content of the Page -->
            <div class="service--wrapper">
                <h2>Services We Offer</h2>
                <p>We are a health tech company that allow you to collect , collate and store Medical health records  efficiently and on time. Our services are tailored to the needs of our clients, bearing from research. We are user centric , friendly and always a call away to attend to your needs.</p>
                <div class="services">
                    <div id="organization">
                        <img src="./assets/pana.png" alt="Organization">
                        <h3>Organization</h3>
                    </div>
                    
                    <div id="support">
                        <img src="./assets/cuate.png" alt="Support">
                        <h3>Support</h3>
                    </div>

                    <div id="available">
                        <img src="./assets/amico.png" alt="24/7 Availability">
                        <h3>24/7 <br>Availability</h3>
                    </div>

                    <div id="automate">
                        <img src="./assets/earth-and-moon.png" alt="Automation">
                        <h3>Automation</h3>
                    </div>
                </div>
            </div>
        </div>

            <div>
                <div class="popup" id="organize-popup">
                    <div class="service-popup service-pop-1">
                        <div>
                            <i class="fa-solid fa-arrow-left"></i>
                            <h3>Organization</h3>
                            <p>We organise , manage patients record, Physician records of their patients, ensure that all departments in the health care center are connected together for effective collaboration.</p>
                            <a href="/contact.html">Let's Talk</a>
                        </div>
                    </div>
                </div>

                <div class="popup" id="support-popup">
                    <div class="service-popup service-pop-2">
                        <div>
                            <i class="fa-solid fa-arrow-left"></i>
                            <h3>Support</h3>
                            <p>Our seasoned team of professionals are always on ground to offer marketing and any other support when needed.
                            <br>Our process are simple and vast: Administrative , clinical and non-cliniical support to cater to your growth</p>
                            <a href="/contact.html">Let's Talk</a>
                        </div>
                    </div>
                </div>

                <div class="popup" id="available-popup">
                    <div class="service-popup service-pop-3" >
                        <div>
                            <i class="fa-solid fa-arrow-left"></i>
                        <h3>24/7 <br> Availability</h3>
                        <p>Customers are king with us. Our team of customer service representatives, work on shift to attend to your questions, queries and complaints.</p>
                        <a href="/contact.html">Let's Talk</a>
                        </div>
                    </div>
                </div>

                <div class="popup" id="automate-popup">
                    <div class="service-popup hide service-pop-4">
                        <div>
                            <i class="fa-solid fa-arrow-left"></i>
                            <h3>Automation</h3>
                            <p>Every click, every transaction, every information at your finger tips.
                            <br>Every departemnt connected, no loose ends. Your workflow is automated and streamlined.</p>
                            <a href="/contact.html">Let's Talk</a>
                        </div>
                    </div>
                </div>
            </div>
            
       

        
    </div>
    <div class="overlay" id="overlay">
           
    </div>
    
    <script>
        const organization = document.getElementById('organization'),
         support = document.getElementById('support'),
         available = document.getElementById('available'),
         automate = document.getElementById('automate'),
         organizePopup = document.getElementById('organize-popup'),
         supportPopup = document.getElementById('support-popup'),
         availablePopup =document.getElementById('available-popup'),
         automatePopup = document.getElementById('automate-popup'),
         overlay = document.getElementById('overlay');

        // For Organization
        organization.addEventListener('click', () => {
            organizePopup.classList.add('active');
            overlay.classList.add('active')
        })

        overlay.addEventListener('click', () => {
            organizePopup.classList.remove('active');
            overlay.classList.remove('active');
        })

        // For Support
        support.addEventListener('click', () => {
            supportPopup.classList.add('active');
            overlay.classList.add('active');
        })

        overlay.addEventListener('click', () => {
            supportPopup.classList.remove('active');
            overlay.classList.remove('active');
        })

        // For Available
        available.addEventListener('click', () => {
            availablePopup.classList.add('active');
            overlay.classList.add('active')
        })

        overlay.addEventListener('click', () => {
            availablePopup.classList.remove('active');
            overlay.classList.remove('active');
        })

        // For Available
        automate.addEventListener('click', () => {
            automatePopup.classList.add('active');
            overlay.classList.add('active')
        })

        overlay.addEventListener('click', () => {
            automatePopup.classList.remove('active');
            overlay.classList.remove('active');
        })
    </script>
    <script src="./script.js"></script>
    <script src="//code.tidio.co/cqwjwfhowp7ucczh9u90uvpffadbwprx.js" async></script>
</body>
</html>