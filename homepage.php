<?php
session_start();
include("connect.php");

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    while ($row = mysqli_fetch_array($query)) {
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Network</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    
    <!-- Nav Section Start -->
    <section class="navBar">
        <div class="topNav">

            <div class="logo">
                <a href="#welcome"><span>Food</span> Network</a>
            </div>
            
            <div class="navItems">
                <a href="#about">About Me</a>
                <a href="#recipies">Recipies</a>
                <a href="market.html">Foods</a>
                <div class="right-s">
                    <a href="logout.php"><u>Logout</u></a>
            </div>
            
            </div>
        </div>
    </section>

    <!-- About Section Start -->
    

    <section class="about" id="about">

        <div class="aboutMain">
            <div class="aboutLeft">
                <img class="img-responsive" src="./img/Person Image.png" alt="">
            </div>

            <div class="aboutRight">
                <h1>About Me</h1>
                <p>Hey I am Arvin.We've rounded up our best, easy dinner recipes! </p>
                <button><a href="">Contact Me</a></button>
            </div>
        </div>

    </section>


    <!-- About Section End -->
              


    
    <!-- Recipies Section Start -->

    <section class="recipies" id="recipies">


        <div class="recipiesMain">


            <div class="recipiesHead">
                <h1 class="text-center" >My Recipies</h1>
                <p class="text-center" >
                    When you need to feed the family or kids, these are the easy dinner<br> recipes you turn to time and time again. With lots of healthy, quick, vegetarian, chicken, and ...</p>
            </div>


            <div class="recipieControl">
                <div class="recipiesBox">
                    <div class="recBox">
                        <img class="img-responsive" src="./img/breakfast.jpg" alt="">

                        <div class="imgDesc">
                            <h2>Breakfast</h2>
                            <p>breakfast recipes - Nothing beats fresh homemade breakfast from your kitchen!! Check out this awesome collection </p>
                        </div>
                    </div>
                    
                </div>

                <div class="recipiesBox">
                    <div class="recBox">
                        <img class="img-responsive"  src="./img/lunch.jpg" alt="">

                        <div class="imgDesc">
                            <h2>Lunch</h2>
                            <p>a meal eaten in the middle of the day, typically one that is lighter or less formal than an evening meal.</p>
                        </div>
                    </div>
                    
                </div>

                <div class="recipiesBox">
                    <div class="recBox">
                        <img class="img-responsive"  src="./img/dinner.jpg" alt="">

                        <div class="imgDesc">
                            <h2>Dinner</h2>
                            <p>Dinner will be ready in 30 minutes or less with these quick and easy recipes from Food Network.</p>
                        </div>
                    </div>
                    
                </div>

            </div>

        </div>
        


    </section>
    <!-- Status Bar Section End -->
    <!-- Footer Section start -->
    <section class="footer">
        <h1 class="text-center"><span>Food</span> Network</h1>
        <h3 class="text-center">@ArvinVeral 2025 |All Rights Reserved</h3>
    </section>

    <!-- Footer Section End -->
    <script src="script.js"></script>

    
</body>
</html>